<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Web Programming Materi 10</title>
</head>
<style>
  pre {
    background: #f4f4f4;
    border: 1px solid #ddd;
    border-left: 3px solid #f36d33;
    color: #666;
    page-break-inside: avoid;
    font-family: monospace;
    font-size: 14px;
    line-height: 1.6;
    margin-bottom: 1em;
    max-width: 100%;
    overflow: auto;
    /* padding: 1em 1.5em; */
    display: block;
    word-wrap: break-word;
  }
</style>
<body>
    <h1>Pilih Golongan Darah</h1>
    <pre>
        $golongan_darah = array("A", "B", "AB", "0");
        
        foreach($golongan_darah as $item){
            echo "< option value='strtolower($item)'>$item</ option>";
        }
    </pre>
    <form>
        <select>
            <option selected="selected">Pilih Golongan Darah</option>
            <?php
                $golongan_darah = array("A", "B", "AB", "0");

                foreach($golongan_darah as $item){
                    echo "<option value='strtolower($item)'>$item</option>";
                }
            ?>
        </select>
        <input type="submit" value="Submit">
    </form>

    <br><br>

    <h1>Pilih Jurusan</h1>
    <pre>
        $golongan_darah = array("Teknik Informatika", "Sistem Informatika", "Multimedia", "Rekayasa Perangkat Lunak");

        foreach($golongan_darah as $item){
            echo "< input type='checkbox' id='$item' name='$item' value='$item'> < label for='$item'> $item</ label>< br>";
        }
    </pre>
    <form>
            <?php
                $golongan_darah = array("Teknik Informatika", "Sistem Informatika", "Multimedia", "Rekayasa Perangkat Lunak");

                foreach($golongan_darah as $item){
                    echo "<input type='checkbox' id='$item' name='$item' value='$item'> <label for='$item'> $item</label><br>";
                }
            ?>
            <input type="submit" value="Submit">
    </form>
</body>
</html>