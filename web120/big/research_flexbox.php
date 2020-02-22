<?php include 'includes/header.php';?>

<main>

    <article class="left_column">

        <p>Flexbox is a relatively new CSS attribute that allows for very easy responsive positioning of HTML page elements. What that means is that it allows you to position items in a way where they will change their size depending on the size of the window through which the page is being viewed, but will retain the same layout. This allows for a site to keep the same rough design no matter what device is being used to view it, and reducing the need for media queries.</p>

        <p>When an element is set as a flexbox container, the elements within it can be freely rearranged and positioned within that container using other CSS properties. Even the order in which the elements are written to the page can be changed. Most importantly, it offers an easy to position items in the exact center of a parent container, an issue which has vexed web designers for ages untold.</p>

        <p>However, there are still some properties of flexbox that are not universally supported. There are various small bugs when used in Internet Explorer 11, which can cause some strange irregularities in how pages are rendered. Meanwhile, &ldquo;justify-content: space-evenly&rdquo; lacks any IE11 support at all, as well as somewhat spotty support among Chinese browsers. The property &ldquo;gap&rdquo;, which creates gutters between flexbox elements, has almost no support and should be avoided.</p>

        <p>It is always important to check browser compatibility when using unfamiliar CSS attributes, as they are sometimes not fully rolled out. Flexbox is widely supported enough that it is safe to use on a major website, but you should be sure that nothing breaks too badly if the site is viewed on Internet Explorer 11. It&rsquo;s impossible to be 100% sure that a website will always work correctly on every machine, but you can make an effort to support as wide a range of browsers and devices as possible. </p>

    </article>

    <article class="right_column">
        <p><em>Works Cited</em></p>

        <p><a href="https://caniuse.com/#search=flexbox" target="_blank">https://caniuse.com/#search=flexbox</a></p>

        <p>&ldquo;CSS Flexbox.&rdquo; CSS Flexbox (Flexible Box), www.w3schools.com/css/css3_flexbox.asp.</p>

    </article>

</main>

<?php include 'includes/footer.php';?>