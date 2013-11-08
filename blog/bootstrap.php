<?php
function current_URL($with_params = false) {
    $pageURL = 'http';

    if ($_SERVER["HTTPS"] == "on") {
        $pageURL .= "s";
    }
    $pageURL .= "://";
    $this_page = $_SERVER["REQUEST_URI"];
    // 只取 ? 前面的内容
    if ($with_params == false && strpos($this_page, "?") !== false) 
        $this_page = reset(explode("?", $this_page));

    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $this_page;
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"] . $this_page;
    }
    return $pageURL;
}

?>