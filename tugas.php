<?php
// kelompok = osep - zaenal
// nomor 1
echo "<h1>Nomor 1</h1>";
echo "<br>";
for ($i = 5; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . "<br>";
    }
}
echo "<br>";
// nomor 2
echo "<h1>Nomor 2</h1>";
for ($i = 0; $i <= 100; $i += 8) {
    echo $i . "<br>";
}
// nomor 3
echo "<h1>Nomor 3</h1>";
echo "<br>";
echo "LOOPING SATU\n <br>";
for ($i = 2; $i <= 100; $i += 2) {
    echo $i . " - aku jago koding\n <br>";
}
echo "<br>";

echo "LOOPING DUA\n <br>";
for ($i = 100; $i >= 1; $i -= 2) {
    echo $i . " - aku seorang web developer\n <br>";
}
echo "<br>";
// nomor 4
echo "<h1>Nomor 4</h1>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . ". Hoby aku adalah koding\n <br>";
    } else {
        echo $i . ". Aku sangat senang koding\n <br>";
    }
    
}
echo "<br>";
for ( $i = 1; $i <= 100; $i++){
    if ($i %3 == 0 && $i % 2 != 0){
        echo $i . " I love koding <br>";
    }
}

echo "<br>";
?>


