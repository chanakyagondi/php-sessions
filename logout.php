<?php
session_start();
session_unset();
session_destroy();
$_SESSION=array();
echo "session expired";
?>
<html>
    <script>
            history.pushState(null, null, location.href);
            window.onpopstate = function () 
            {
                history.go(1);
            };
    </script>
</html>>