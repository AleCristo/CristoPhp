<html>
    <body>
        <?php
        $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
        echo fread($myfile, filesize("webdictionary.txt"));
        fclose($myfile);
        ?>
        <br>
        <!--r	Open a file for read only. File pointer starts at the beginning of the file
        w	Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
        a	Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
        x	Creates a new file for write only. Returns FALSE and an error if file already exists
        r+	Open a file for read/write. File pointer starts at the beginning of the file
        w+	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
        a+	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
        x+	Creates a new file for read/write. Returns FALSE and an error if file already exists -->
        <br>
        <?php
        $myfile = fopen("webdictionary.txt", "r");
        fclose($myfile);
        ?>
        <br>
        <?php
        $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
        echo fgets($myfile);
        fclose($myfile);
        ?>
        <br>
        <?php
        $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
        // Output one line until end-of-file
        while (!feof($myfile)) {
            echo fgets($myfile) . "<br>";
        }
        fclose($myfile);
        ?>

        <br>
        <?php
        $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
            // Output one character until end-of-file
        while (!feof($myfile)) {
            echo fgetc($myfile);
        }
        fclose($myfile);
        ?>
    </body>
</html>