<?php
echo "document.getElementById('accept" . $_GET['id'] . "').addEventListener('click', function () {
    document.getElementById('ticket" . $_GET['id'] . "').disabled = false;
    document.getElementById('accept" . $_GET['id'] . "').disabled = true;
    document.getElementById('reject" . $_GET['id'] . "').disabled = true;
});";
echo "document.getElementById('reject" . $_GET['id'] . "').addEventListener('click', function () {
    document.getElementById('ticket" . $_GET['id'] . "').disabled = true;
    document.getElementById('accept" . $_GET['id'] . "').disabled = true;
    document.getElementById('reject" . $_GET['id'] . "').disabled = true;
});";
?>