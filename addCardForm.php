<?php

?>

<html>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h2>Add a card</h2>
        name : <input type="text" name="name" required>
        <button onclick="showsubCardForm()">see/hide</button>
        <div id="subForm">
            <br>
            color : <input type="text" name="color" placeholder="wub/rggXX13"><br>
            type : <?= generateInput("checkbox", "isLegendary"); ?>
            <?php
                foreach (TYPES as $type){
                    echo generateInput("checkbox", $type);
                }
            ?>
            <hr>
            <?= generateInput("text", "subtype"); ?>
            <?= generateInput("number", "power"); ?>
            <?= generateInput("number", "toughness"); ?>
            <?= generateInput("number", "loyalty"); ?>
            <?= generateInput("text", "artist"); ?>
        </div>
        <input type="submit" name="submit" value="Add">
    </form>
    <hr>
</html>

<script>
    document.getElementById("subForm").style.display = "none";

    function showsubCardForm() {
        var x = document.getElementById("subForm");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
