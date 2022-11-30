<?php
function write_to_console($data)
{
    $console = $data;
    if (is_array($console))
        $console = implode(',', $console);

    echo "<script>console.log('Console: " . $console . "' );</script>";
}

$errors = [];
function validate($data, $name = "value")
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if (empty($data)) {
        array_push($errors, "empty" . $name);
    }
    return $data;
}


?>