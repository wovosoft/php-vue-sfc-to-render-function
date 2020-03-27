<p align="center">
  <a href="https://wovosoft.com/">
    <img src="https://wovosoft.com/wp-content/uploads/2019/10/logo_text-scaled-177x58.png" alt="Wovosoft Software Development Compnay"  height="72">
  </a>
</p>

<h3 align="center">Vuejs SFC to Render Functions using PHP</h3>

<p align="center">
  The Project is still under development process. The initial target of this project is to 
  convert the Vue SFC (Single File Component) to JavaScript (Vuejs) Render Function. 
</p>

## Initial Target  

-
    - Dependency is Not managed yet. 
    - It Just converts a `.vue` file to plain `javascript` render function, so that 
      the compiled output can be directly injected to Vue App. 
    - The Dependency is managed currently by the Vue App. 
    - The target is to use php dom parsers to read the Vue Template File, and pass the 
      data to the php render function. 
     - More details will be updated here gradually when there is a new update available.    
## Project setup
```
yarn install
```

### Compiles and hot-reloads for development
```
yarn serve
```

### Compiles and minifies for production
```
yarn build
```

### Lints and fixes files
```
yarn lint
```


## Running The Project

- Run the Vue App First by `yarn serve` . This will open the local vue dev server and watch changes.
- Now from your project root in the terminal run `php vue_render.php` . This will generate and output
  the compiled output to `./src/components/Test.js`
- The Vue dev server will update the output immediately . 

### Customize configuration
See [Configuration Reference](https://cli.vuejs.org/config/).

## Creators

**Narayan Adhikary**

- <https://facebook.com/narayan.adhikary>
- <https://github.com/narai420>
- [narayanadhikary24@gmail.com](mailto:narayanadhikary24@gmail.com)
- [wovosoft@gmail.com](mailto:wovosoft@gmail.com)

## Copyright and license

Code and documentation copyright 2015-2020 the [Wovosoft Authors] . Code released under the [MIT License](https://github.com/twbs/bootstrap/blob/master/LICENSE). 