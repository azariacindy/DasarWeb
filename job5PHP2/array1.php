<!DOTYPE html>
<html>
    <head>
    </head>
    <body>
        <h2>Array Terindeks</h2>
        <?php
            $Listdosen = ["Azaria Cindy", "Unggul Pamenang", "Bagas Ramadhan"];

            // echo $Listdosen[2] . "<br>";
            // echo $Listdosen[0] . "<br>";
            // echo $Listdosen[1] . "<br>";

            // use foreach for loop
            foreach ($Listdosen as $dosen) {
                echo $dosen . "<br>";
            }
        ?>
    </body>
</html>
