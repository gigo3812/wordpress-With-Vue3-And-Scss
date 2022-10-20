
# Dev Tips 
This collection was created by the [CodeTrend team](https://codetrend.ir/). You can click [here](https://codetrend.ir/) to see a sample of work

---

#### <span style="color:dodgerblue">if change folder name after clone. you should open **webpack.mix.js** and config `themeName` <span>

## Project Setup
```
$ npm i
```



## Add Scss file
>
> If you need to add the scss file, you should do the following steps
>
> -  make file in directory /resource/scss/    for excample `test.scss`
>
> - open **webpack.mix.js** and add `mix.sass('resources/scss/test.scss', '/assets/css').ourceMaps();`
>
> - run command `npx mix watch`
>
> -  open file **functions.php** in root directory and add belowe line in function `addStyleAndScript()`.  
>    - `wp_enqueue_style('style-test', get_theme_file_uri('/assets/css/test.css'));`
> 
> done

## watch and production files scss and vue js
> - for watch, you should execute command ` npx mix watch`
>
> - for production, you should execute command ` npx mix production`
>
---
![Tux, the Linux mascot](/screenshot.png)
<https://codetrend.ir/>
---
