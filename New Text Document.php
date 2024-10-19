<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Form was submitted using POST!";
} else {
    echo "This page only accepts POST requests.";
}
?>
