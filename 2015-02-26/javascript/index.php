<html>
<head>
    <title>My Javascript Site</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script rel="text/javascript" src="scripts/jquery_script.js"></script>

    <!-- <script rel="text/javascript" src="scripts/script.js"></script> -->
</head>
<body>
    <form id="calculator_form" method="post" action="index.php" name="calculator">
        <div>
            <label for="field_1">Value 1</label>
            <input id="field_1" type="text" name="field_1" value=""/>
        </div>
        <div>
            <label for="field_2">Value 2</label>
            <input id="field_2" type="text" name="field_2" value=""/>
        </div>
        <div>
            <input id="calculator_submit" type="submit" value="CALCULATE!!" />
        </div>

        <a href="#" id="color_changer">Change color</a>

    </form>
</body>
</html>