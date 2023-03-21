<?php
print('
<script type="text/javascript" src="./public/reveal/dist/reveal.js"></script>
<script type="text/javascript" src="./public/reveal/plugin/notes/notes.js"></script>
<script type="text/javascript" src="./public/reveal/plugin/markdown/markdown.js"></script>
<script type="text/javascript" src="./public/reveal/plugin/highlight/highlight.js"></script>
<script>
// More info about initialization & config:
// - https://revealjs.com/initialization/
// - https://revealjs.com/config/
Reveal.initialize({
    hash: true,

    // Learn about plugins: https://revealjs.com/plugins/
    plugins: [RevealMarkdown, RevealHighlight, RevealNotes]
});
</script>
</body>

</html>
');
