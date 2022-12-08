echo "\n startBD.php \n";
<?php 

echo "<br> startBD.php <br>";
function ZrobBaze() {
//CREATE database nazwa_bazy;
echo "<br> ZrobBaze start <br>";
    try{
        $con = new mysqli("localhost", "root", "") or die("Błąd połączenia");
       // $mysqli->set_charset('utf8');
        $wynik = $con->query("CREATE DATABASE psw");
       
    }catch (Exception $e){
        $er = $e->getMessage();
        echo $er;
    }
    
echo "<br> ZrobBaze END <br>";
} 
ZrobBaze();

function ZrobTabele() {
    $host = 'localhost';
	$database = 'psw';
	$user = 'root';
	$password = '';
	
	$database_connection = "mysql:host=$host;dbname=$database;charset=UTF8";
	$dbh1 = "mysql:host=$host;dbname=$database;charset=UTF8";

	// Create a new PDO instance
	//$pdo = new PDO($database_connection, $user, $password);
	$dbh = new PDO($dbh1, $user, $password);

        //$dbh = new PDO("mysql:host=$this->DbHost;dbname=$this->DbName", $this->DbUser, $this->DbPass, array(PDO::ATTR_PERSISTENT => true));
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->exec("SET CHARACTER SET utf8");
        
        // $sql = "INSERT INTO $this->table ($fields) VALUES ($ins)";
         // $sql = "INSERT INTO $this->table ($fields) VALUES ($ins)";


echo "<br> Zrob Tabele start <br>";
$BUTY = "
CREATE TABLE buty
(id INT NOT NULL AUTO_INCREMENT,
 nazwa TEXT NOT NULL,
 cena FLOAT NOT NULL,
 ilosc INT NOT NULL,
 kategoria VARCHAR(20) NOT NULL,
 opis TEXT NOT NULL,
 fot1 TEXT NOT NULL,
 fot2 TEXT NULL,
 fot3 TEXT NULL,
 fot4 TEXT NULL,
 fot5 TEXT NULL,
 fot6 TEXT NULL,
 PRIMARY KEY (id))
 ENGINE = InnoDB;";
$TELEFONY = "
CREATE TABLE telefony
(id INT NOT NULL AUTO_INCREMENT,
 nazwa TEXT NOT NULL,
 cena FLOAT NOT NULL,
 ilosc INT NOT NULL,
 kategoria VARCHAR(20) NOT NULL,
 opis TEXT NOT NULL,
 fot1 TEXT NOT NULL,
 fot2 TEXT NULL,
 fot3 TEXT NULL,
 fot4 TEXT NULL,
 fot5 TEXT NULL,
 fot6 TEXT NULL,
 PRIMARY KEY (id))
 ENGINE = InnoDB;";
$KOSZULKI = "
CREATE TABLE koszulki
(id INT NOT NULL AUTO_INCREMENT,
 nazwa TEXT NOT NULL,
 cena FLOAT NOT NULL,
 ilosc INT NOT NULL,
 kategoria VARCHAR(20) NOT NULL,
 opis TEXT NOT NULL,
 fot1 TEXT NOT NULL,
 fot2 TEXT NULL,
 fot3 TEXT NULL,
 fot4 TEXT NULL,
 fot5 TEXT NULL,
 fot6 TEXT NULL,
 PRIMARY KEY (id))
 ENGINE = InnoDB;";
 
    try{
/*
   $con = new mysqli("localhost", "root", "") or die("Błąd połączenia");
        $con->query($BUTY);
        $con->query($TELEFONY);
        $con->query($KOSZULKI);
*/
        $sth = $dbh->prepare($BUTY);
        $sth->execute();
        $sth = $dbh->prepare($TELEFONY);
        $sth->execute();
        $sth = $dbh->prepare($KOSZULKI);
        $sth->execute();
       
    }catch (Exception $e){
        $er = $e->getMessage();
        echo $er;
    }
 
/*CREATE TABLE nazwa_tabeli
(id INT NOT NULL AUTO_INCREMENT,
 nazwa VARCHAR(20) NOT NULL,
 cena FLOAT NOT NULL,
 ilosc INT NOT NULL,
 kategoria VARCHAR(20) NOT NULL,
 opis TEXT NOT NULL,
 fot1 TEXT NOT NULL,
 fot2 TEXT NULL,
 fot3 TEXT NULL,
 fot4 TEXT NULL,
 fot5 TEXT NULL,
 fot6 TEXT NULL,
 PRIMARY KEY (id))
 ENGINE = InnoDB;*/
 
echo "<br> Zrob Tabele END <br>";

} 
ZrobTabele();
?>
