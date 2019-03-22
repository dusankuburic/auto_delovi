<?php require_once("Database.php"); ?>

<?php

class Proizvod extends Database {

    /**
     * string
     */
    private $naziv;

    /**
     * string
     */
    private $proizvodjac;

    /**
     * string
     */
    private $za_vozila;

    /**
     * string
     */
    private $slika;

    /**
     * double
     */
    private $cena;

    /**
     * int
     */
    private $sifra_kategorije;

    
    public function __construct(){

        $this->set_parameters(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        $this->connect_to_db();

        $this->test_connection();
    }

    public function set_proizvod($naziv, $proizvodjac, $za_vozila, $slika, $cena, $sifra_kategorije){

        $this->naziv = $naziv;

        $this->proizvodjac = $proizvodjac;

        $this->za_vozila = $za_vozila;

        $this->slika = $slika;

        $this->cena = $cena;

        $this->sifra_kategorije = $sifra_kategorije;
    }


    public function insert_proizvod(){

        $insert_query = $this->prepare_query("INSERT INTO proizvod(
            naziv,
            proizvodjac,
            za_vozila,
            slika,
            cena,
            sifra_kategorije)
            VALUES (?, ?, ?, ?, ?, ?)");

        $insert_query->bind_param("sssssi",
            $this->naziv,
            $this->proizvodjac,
            $this->za_vozila,
            $this->slika,
            $this->cena,
            $this->sifra_kategorije);

        $insert_query->execute();
    }


    public function all_proizvod(){

        $result = array();

        $select_query = $this->set_query("SELECT * FROM proizvod");

        while($row = $select_query->fetch_assoc()){
            $result[] = $row;
        }

        return $result;
        
    }

    public function update_proizvod_id($sifra){

        $update_query = $this->prepare_query("UPDATE proizvod SET
            naziv = (?),
            proizvodjac = (?),
            za_vozila = (?),
            slika = (?),
            cena = (?),
            sifra_kategorije = (?)
            WHERE sifra_proizvoda = $sifra");

        $update_query->bind_param("sssssi", 
            $this->naziv, 
            $this->proizvodjac, 
            $this->za_vozila, 
            $this->slika, 
            $this->cena,
            $this->sifra_kategorije);

        $update_query->execute();
    }

    public function return_proizvod_id($sifra){

        $select_query = $this->set_query("SELECT naziv,
            proizvodjac,
            za_vozila,
            slika,
            cena
            FROM proizvod
            WHERE sifra_proizvoda = $sifra");

        while($row = $select_query->fetch_assoc()){
            $result = $row;
        }

        return $result;
    }


    public function delete_proizvod_id($sifra){

        $delete_query = $this->prepare_query("DELETE 
            FROM proizvod 
            WHERE sifra_proizvoda = (?)");

        $delete_query->bind_param("i", $sifra);

        $delete_query->execute();


    }


}


?>