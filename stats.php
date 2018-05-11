<?php

if ($_SERVER['SERVER_PORT'] < 8000 /* not debug */) {
  // statcounter

  $book['page_end'] = <<<HEREDOC
<script type="text/javascript">
var sc_project=11709078;
var sc_invisible=1;
var sc_security="86bf9c2a";
var scJsHost = (("https:" == document.location.protocol) ? "https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" + scJsHost + "statcounter.com/counter/counter.js'></"+"script>");
</script>

HEREDOC;
}

// eof
