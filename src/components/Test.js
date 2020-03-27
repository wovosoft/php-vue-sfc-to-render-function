export default {
	name : "TestVue",
	data(){	
            return {"msg":"Hello Narayan","body":"This is body","working_binary":true}
        },
	render(h){
            return h('ul', {"class":{"is-red":true}}, [h('li', {"class":{"is-black":true}},this.msg),h('li', {"class":{"is-black":true}}, [h('li', {"class":{"is-black":true}},'Amar'),h('li', {"class":{"is-black":true}},'Sonar'),h('li', {"class":{"is-black":true}},'Bangla')])]);
        }
}