<?php
require("header.html");
$html = <<<HTML
<main>
    <h1>Test</h1>
    <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum quos excepturi voluptate doloremque, obcaecati consequatur? Iusto, in ullam ducimus laudantium, odit sequi cumque amet architecto nihil exercitationem, laborum debitis sit!
    </p>
</main>
HTML;

echo($html);
require("footer.html");
require("script.js");