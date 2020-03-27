<?php

class VueRender
{
    private $name = null, $data = [], $template = [];

    public function setName($name)
    {
        $this->name = $name;
    }

    private function getName(): string
    {
        if ($this->name) {
            return "name : \"{$this->name}\"";
        }
        return '';
    }

    public function setData($data = []): void
    {
        $this->data = array_merge($this->data, $data);
    }

    private function getData()
    {
        return json_encode($this->data);
    }

    public function setTemplate($template = [])
    {
        $this->template = $template;
    }

    /**
     * Returns parsed value when true, false otherwise
     * @param $value
     * @return bool|string|string[]
     */
    private function isBinded($value): string
    {
        if (strpos($value, "__VAR__") === 0) {
            return str_replace("__VAR__", "", $value);
        }
        return "'" . $value . "'";
    }

    private function h($template): string
    {
        $child_items = [];
        if (isset($template["children"]) && is_array($template["children"]) && count($template["children"]) ? $template["children"] : false) {
            foreach ($template["children"] as $child) {
                $child_items[] = $this->h($child);
            }
        }

        if (count($child_items)) {
            $content = implode(",", $child_items);
            return "h('{$template["el"]}'"
                . (isset($template["class"]) ? ", " . json_encode(["class" => $template["class"]]) : null)
                . ", [$content])";
        } else {
            $content = $template["children"] ?? '';
        }
        echo "\nTest Content{ $content }: " . ($this->isBinded($content) ?? "'$content'");
        return "h('{$template["el"]}'"
            . (isset($template["class"]) ? ", " . json_encode(["class" => $template["class"]]) : null)
            . "," . ($this->isBinded($content)) . ")";
    }

    public function render(): string
    {
        $output = "export default {\n";
        if ($this->getName()) {
            $output .= "\t" . $this->getName() . ",\n";
        }

        $output .= "\tdata(){\t
            return {$this->getData()}
        }";
        $output .= ",\n\trender(h){
            return {$this->h($this->template)};
        }";
        $output .= "\n}";
        return $output;
    }
}
