<?php
session_start();
require_once 'libs/Smarty.class.php';
$smarty = new Smarty;
$smarty->error_reporting = E_ALL & ~E_NOTICE;


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dbh = new PDO("mysql:dbhost=localhost;dbname=nado_main", "nado_main", "JnVWgjZ");
	
class castumer
{
    // attrs
	private $id;
	private $nameca;
	private $namece;
	private $phonec;
	private $areac;
	private $deletc;
    // methods
    public function __construct($nameca, $namece, $phonec, $areac, $deletc, $id="")
    {
        $this->nameca = $nameca;
        $this->namece = $namece;
        $this->phonec = $phonec;
        $this->areac = $areac;
        $this->deletc = $deletc;
        $this->id = $id;
        }
    
    // Insert data into database
    public function additionCastumer()
    {
        global $dbh;
        $sql = $dbh->prepare("INSERT INTO `castumer`(nameca ,namece ,phonec ,areac ,deletc)VALUES('$this->nameca', '$this->namece', '$this->phonec', '$this->areac', '$this->deletc')");
        $result = $sql->execute();
        $id = $dbh->lastInsertId();
	return array ($result,$id);
    }
    
    public static function checkByPhone($phone)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `castumer` WHERE `phonec` = '$phone'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
    
     public static function retreiveAllCastumer($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `castumer` $query");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        $data[]= $fetch;
        }
        
        return $data;
    }

	     public static function retreiveAllCastumerGroup($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT `castumer`.`idc`, `castumer`.`nameca`, `castumer`.`namece`, `castumer`.`phonec`, `castumer`.`areac`, `area`.`ida`, `area`.`nameaa`, `area`.`nameae` 
		FROM `castumer`, `area` WHERE `castumer`.`areac` = `area`.`ida` $query");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        $data[]= $fetch;
        }
        
        return $data;
    }
}



class area
{
    // attrs
    private $id;
    private $nameaa;
    private $nameae;
    private $groupa;
    private $deleta;
    // methods
    public function __construct($nameaa, $nameae, $groupa, $deleta, $id="")
    {
        $this->nameaa = $nameaa;
        $this->nameae = $nameae;
        $this->groupa = $groupa;
        $this->deleta = $deleta;
        $this->id = $id;
        }
    
    // Insert data into database
    public function additionArea()
    {
        global $dbh;
        $sql = $dbh->prepare("INSERT INTO `area`(`nameaa`, `nameae`, `groupa`, `deleta`)VALUES('$this->nameaa' ,'$this->nameae' ,'$this->groupa' ,'$this->deleta')");
        $result = $sql->execute();
        $id = $dbh->lastInsertId();
        return array ($result,$id);
    }
    
    public static function checkByName($nameaa)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `area` WHERE `nameaa` = '$nameaa'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
       public static function checkByNamee($nameae)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `area` WHERE `nameae` = '$nameae'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
	  public static function retreiveAllArea($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `area` $query");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        $data[]= $fetch;
        }
        
        return $data;
    }
     public static function updateAreaById($nameaa, $nameae, $groupa, $ida)
    {
        global $dbh;
        $sql = $dbh->prepare("UPDATE `area` SET `nameaa` = '$nameaa', `nameae` = '$nameae', `groupa` = '$groupa' WHERE `area`.`ida` = '$ida'");
        $result = $sql->execute();
	return $result;
    }
     public static function updateAreaActiveById($active, $ida)
    {
        global $dbh;
        $sql = $dbh->prepare("UPDATE `area` SET `deleta` = '$active' WHERE `area`.`ida` = '$ida'");
        $result = $sql->execute();
	return $result;
    }

}


class device
{
    // attrs
    private $id;
    private $nameva;
    private $nameve;
    private $deletv;
    // methods
    public function __construct($nameva, $nameve, $deletv, $id="")
    {
        $this->nameva = $nameva;
        $this->nameve = $nameve;
        $this->deletv = $deletv;
        $this->id = $id;
        }
    
    // Insert data into database
    public function additionDevice()
    {
        global $dbh;
        $sql = $dbh->prepare("INSERT INTO `device`(`nameva`, `nameve`, `deletv`)VALUES('$this->nameva' ,'$this->nameve' ,'$this->deletv')");
        $result = $sql->execute();
        $id = $dbh->lastInsertId();
        return array ($result,$id);
    }
    
    public static function checkByName($nameva)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `device` WHERE `nameva` = '$nameva'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
    public static function checkByNamee($nameve)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `device` WHERE `nameve` = '$nameve'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
	  public static function retreiveAllDevice($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `device` $query");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        $data[]= $fetch;
        }
        
        return $data;
    }
    
    public static function updateDeviceById($nameva, $nameve, $idv)
    {
        global $dbh;
        $sql = $dbh->prepare("UPDATE `device` SET `nameva` = '$nameva', `nameve` = '$nameve' WHERE `device`.`idv` = '$idv'");
        $result = $sql->execute();
	return $result;
    }
     public static function updateDeviceActiveById($active, $idv)
    {
        global $dbh;
        $sql = $dbh->prepare("UPDATE `device` SET `deletv` = '$active' WHERE `device`.`idv` = '$idv'");
        $result = $sql->execute();
	return $result;
    }


}


class mark
{
    // attrs
    private $id;
    private $namemarka;
    private $namemarke;
    private $deletmark;
    // methods
    public function __construct($namemarka, $namemarke, $deletmark, $id="")
    {
        $this->namemarka = $namemarka;
        $this->namemarke = $namemarke;
        $this->deletmark = $deletmark;
        $this->id = $id;
        }
    
    // Insert data into database
    public function additionMark()
    {
        global $dbh;
        $sql = $dbh->prepare("INSERT INTO `mark`(`namemarka`, `namemarke`, `deletmark`)VALUES('$this->namemarka' ,'$this->namemarke' ,'$this->deletmark')");
        $result = $sql->execute();
        $idk = $dbh->lastInsertId();
        return array ($result,$idk);
    }
    
    public static function checkByName($namemarka)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `mark` WHERE `namemarka` = '$namemarka'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
     public static function checkByNamee($namemarke)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `mark` WHERE `namemarke` = '$namemarke'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
	  public static function retreiveAllMark($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `mark` $query");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        $data[]= $fetch;
        }
        
        return $data;
    }

     public static function updateMarkById($namemarka, $namemarke, $idmark)
    {
        global $dbh;
        $sql = $dbh->prepare("UPDATE `mark` SET `namemarka` = '$namemarka', `namemarke` = '$namemarke' WHERE `mark`.`idmark` = '$idmark'");
        $result = $sql->execute();
	return $result;
    }
     public static function updateMarkActiveById($active, $idmark)
    {
        global $dbh;
        $sql = $dbh->prepare("UPDATE `mark` SET `deletmark` = '$active' WHERE `mark`.`idmark` = '$idmark'");
        $result = $sql->execute();
	return $result;
    }
}


class service
{
    // attrs
    private $id;
    private $nservicea;
    private $nservicee;
    private $coast;
    private $deletserv;
    // methods
    public function __construct($nservicea, $nservicee, $coast, $deletserv, $id="")
    {
        $this->nservicea = $nservicea;
        $this->nservicee = $nservicee;
        $this->coast = $coast;
        $this->deletserv = $deletserv;
        $this->id = $id;
        }
    
    // Insert data into database
    public function additionService()
    {
        global $dbh;
        $sql = $dbh->prepare("INSERT INTO `service`(`nservicea`, `nservicee`, `coast`, `deletserv`)VALUES('$this->nservicea' ,'$this->nservicee' ,'$this->coast' ,'$this->deletserv')");
        $result = $sql->execute();
        $id = $dbh->lastInsertId();
        return array ($result,$id);
    }
    
    public static function checkByName($nservicea)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `service` WHERE `nservicea` = '$nservicea'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
    public static function checkByNamee($nservicee)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `service` WHERE `nservicee` = '$nservicee'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
	  public static function retreiveAllService($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `service` $query");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        $data[]= $fetch;
        }
        
        return $data;
    }
       public static function updateServiceById($nservicea, $nservicee, $coast, $idserv)
    {
        global $dbh;
        $sql = $dbh->prepare("UPDATE `service` SET `nservicea` = '$nservicea', `nservicee` = '$nservicee', `coast` = '$coast' WHERE `service`.`idserv` = '$idserv'");
        $result = $sql->execute();
	return $result;
    }
     public static function updateServiceActiveById($active, $idserv)
    {
        global $dbh;
        $sql = $dbh->prepare("UPDATE `service` SET `deletserv` = '$active' WHERE `service`.`idserv` = '$idserv'");
        $result = $sql->execute();
	return $result;
    }

}
class serviceOrder
{
    // attrs
    private $idserviceorder;
    private $serviceido;
    private $idoservice;
    private $kindserido;
    private $deletservido;
    // methods
    public function __construct($serviceido, $idoservice, $kindserido, $deletservido, $idserviceorder="")
    {
        $this->serviceido = $serviceido;
        $this->idoservice = $idoservice;
        $this->kindserido = $kindserido;
        $this->deletservido = $deletservido;
        $this->idserviceorder = $idserviceorder;
        }
    
    // Insert data into database
    public function additionServiceOrder()
    {
        global $dbh;
        $sql = $dbh->prepare("INSERT INTO `serviceorder`(`serviceido`, `idoservice`, `kindserido`, `deletservido`)VALUES('$this->serviceido' ,'$this->idoservice' ,'$this->kindserido' ,'$this->deletservido')");
        $result = $sql->execute();
        $id = $dbh->lastInsertId();
        return array ($result,$id);
    }

	  public static function retreiveAllServiceOrder($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `serviceorder` $query");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        $data[]= $fetch;
        }
        
        return $data;
    }

}


class invcredite
{
    // attrs
    private $idinvcredit;
    private $idicre;
    private $idcrdite;
    private $amount;
    // methods
    public function __construct($idicre, $idcrdite, $amount, $idinvcredit="")
    {
        $this->idicre = $idicre;
        $this->idcrdite = $idcrdite;
        $this->amount = $amount;
        $this->idserviceorder = $idinvcredit;
        }
    
    // Insert data into database
    public function insertinvCredite()
    {
        global $dbh;
        $sql = $dbh->prepare("INSERT INTO `invcredite`(`idicre`, `idcrdite`, `amount`)VALUES('$this->idicre' ,'$this->idcrdite' ,'$this->amount')");
        $result = $sql->execute();
        $id = $dbh->lastInsertId();
        return array ($result,$id);
    }

	  public static function retreiveAllinvCredite($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `invcredite` $query");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        $data[]= $fetch;
        }
        
        return $data;
    }

}


class carer
{
    // attrs
    private $id;
    private $namera;
    private $namere;
    private $deletr;
    // methods
    public function __construct($namera, $namere, $deletr, $id="")
    {
        $this->namera = $namera;
        $this->namere = $namere;
        $this->deletr = $deletr;
        $this->id = $id;
        }
    
    // Insert data into database
    public function additionCarer()
    {
        global $dbh;
        $sql = $dbh->prepare("INSERT INTO `carer`(`namera`, `namere`, `deletr`)VALUES('$this->namera' ,'$this->namere' ,'$this->deletr')");
        $result = $sql->execute();
        $id = $dbh->lastInsertId();
        return array ($result,$id);
    }
    
    public static function checkByName($namera)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `carer` WHERE `namera` = '$namera'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
    public static function checkByNamee($namere)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `carer` WHERE `namere` = '$namere'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
	  public static function retreiveAllCarer($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `carer` $query");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        $data[]= $fetch;
        }
        
        return $data;
    }
    	  public static function retreiveAllCarerGroup($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `carer` $query");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        $data[]= $fetch;
        }
        
        return $data;
    }
     public static function updateCarerById($namera, $namere, $idr)
    {
        global $dbh;
        $sql = $dbh->prepare("UPDATE `carer` SET `namera` = '$namera', `namere` = '$namere' WHERE `carer`.`idr` = '$idr'");
        $result = $sql->execute();
	return $result;
    }
     public static function updateCarerActiveById($active, $idr)
    {
        global $dbh;
        $sql = $dbh->prepare("UPDATE `carer` SET `deletr` = '$active' WHERE `carer`.`idr` = '$idr'");
        $result = $sql->execute();
	return $result;
    }


}
class country
{
    // attrs
    private $idy;
    private $nameya;
    private $nameye;
    private $delety;
    // methods
    public function __construct($nameya, $nameye, $delety, $idy="")
    {
        $this->nameya = $nameya;
        $this->nameye = $nameye;
        $this->delety = $delety;
        $this->idy = $idy;
        }
    
    // Insert data into database
    public function additionCountry()
    {
        global $dbh;
        $sql = $dbh->prepare("INSERT INTO `country`(`nameya`, `nameye`, `delety`)VALUES('$this->nameya' ,'$this->nameye' ,'$this->delety')");
        $result = $sql->execute();
        $idy = $dbh->lastInsertId();
        return array ($result,$idy);
    }
    
    public static function checkByNameA($nameya)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `country` WHERE `nameya` = '$nameya'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
     public static function checkByNameE($nameye)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `country` WHERE `nameye` = '$nameye'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
	  public static function retreiveAllCountry($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `country` $query");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        $data[]= $fetch;
        }
        
        return $data;
    }
     public static function updateCountryById($nameya, $nameye, $idy)
    {
        global $dbh;
        $sql = $dbh->prepare("UPDATE `country` SET `nameya` = '$nameya', `nameye` = '$nameye' WHERE `country`.`idy` = '$idy'");
        $result = $sql->execute();
	return $result;
    }
     public static function updateCountryActiveById($active, $idy)
    {
        global $dbh;
        $sql = $dbh->prepare("UPDATE `country` SET `delety` = '$active' WHERE `country`.`idy` = '$idy'");
        $result = $sql->execute();
	return $result;
    }

}

class air
{
    // attrs
    private $idair;
    private $nameaira;
    private $nameaire;
    private $deletair;
    // methods
    public function __construct($nameaira, $nameaire, $deletair, $idair="")
    {
        $this->nameaira = $nameaira;
        $this->nameaire = $nameaire;
        $this->deletair = $deletair;
        $this->idair = $idair;
        }
    
    // Insert data into database
    public function additionAirport()
    {
        global $dbh;
        $sql = $dbh->prepare("INSERT INTO `airport`(`nameaira`, `nameaire`, `deletair`)VALUES('$this->nameaira' ,'$this->nameaire' ,'$this->deletair')");
        $result = $sql->execute();
        $idair = $dbh->lastInsertId();
        return array ($result,$idair);
    }
    
    public static function checkByNameA($nameaira)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `airport` WHERE `nameaira` = '$nameaira'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
     public static function checkByNameE($nameaire)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `airport` WHERE `nameaire` = '$nameaire'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
	  public static function retreiveAllAirport($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `airport` $query");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        $data[]= $fetch;
        }
        
        return $data;
    }
    public static function updateAirportById($nameaira, $nameaire, $idair)
    {
        global $dbh;
        $sql = $dbh->prepare("UPDATE `airport` SET `nameaira` = '$nameaira', `nameaire` = '$nameaire' WHERE `airport`.`idair` = '$idair'");
        $result = $sql->execute();
	return $result;
    }
     public static function updateAirportActiveById($active, $idair)
    {
        global $dbh;
        $sql = $dbh->prepare("UPDATE `airport` SET `deletair` = '$active' WHERE `airport`.`idair` = '$idair'");
        $result = $sql->execute();
	return $result;
    }

    

}

class employee{
     // attrs
    private $idm;
    private $fnamema;
    private $fnameme;
    private $namema;
    private $nameme;
    private $mobilem;
    private $countrym;
    private $carerm;
    private $noborder;
    private $noiqama;
    private $nopassport;
    private $airportm;
    private $adressm;
    private $telem;
    private $entermsa;
    private $worktime;
    private $exiqamam;
    private $exinsurancem;
    private $exlincm;
    private $expassportm;
    private $premssionm;
    private $statusm;
    private $deletm;
    private $password;
    // methods
    public function __construct($fnamema, $fnameme, $namema, $nameme, $mobilem, $countrym, $carerm, $noborder, $noiqama, $nopassport, $airportm, $adressm, $telem,
                                $entermsa, $worktime, $exiqamam, $exinsurancem, $exlincm, $expassportm, $premssionm, $statusm, $deletm, $password, $idm="")
                               
    {
        $this->fnamema = $fnamema;
        $this->fnameme = $fnameme;
        $this->namema = $namema;
        $this->nameme = $nameme;
        $this->mobilem = $mobilem;
        $this->countrym = $countrym;
        $this->carerm = $carerm;
        $this->noborder = $noborder;
        $this->noiqama = $noiqama;
        $this->nopassport = $nopassport;
        $this->airportm = $airportm;
        $this->adressm = $adressm;
        $this->telem = $telem;
        $this->entermsa = $entermsa;
        $this->worktime = $worktime;
        $this->exiqamam = $exiqamam;
        $this->exinsurancem = $exinsurancem;
        $this->exlincm = $exlincm;
        $this->expassportm = $expassportm;
        $this->premssionm = $premssionm;
        $this->statusm = $statusm;
        $this->deletm = $deletm;
        $this->password = $password;
        $this->idm = $idm;
        }
    
         
        // Insert data into database
        public function additionEmployee()
        {
            global $dbh;
            
           // INSERT INTO `employee` (`idm`, `namema`, `nameme`, `mobilem`, `countrym`, `carerm`, `noborder`, `noiqama`, `nopassport`, `airportm`, `adressm`, `telem`, `entermsa`, `worktime`, `exiqamam`, `exinsurancem`, `exlincm`, `expassportm`, `premssionm`, `deletm`) VALUES (NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2017-01-02', '2017-01-02', '2017-01-02', '2017-01-02', '2017-01-02', '2017-01-02', '0', '0');
            
            $sql = $dbh->prepare("INSERT INTO `employee` (`fnamema`, `fnameme`, `namema`, `nameme`, `mobilem`, `countrym`, `carerm`, `noborder`, `noiqama`, `nopassport`, `airportm`,
               `adressm`, `telem`, `entermsa`, `worktime`, `exiqamam`, `exinsurancem`, `exlincm`, `expassportm`, `premssionm`, `statusm`, `deletm`, `password`) VALUES 
                ('$this->fnamema', '$this->fnameme', '$this->namema', '$this->nameme', '$this->mobilem', '$this->countrym', '$this->carerm', '$this->noborder', '$this->noiqama',
                 '$this->nopassport', '$this->airportm', '$this->adressm', '$this->telem', '$this->entermsa', '$this->worktime', '$this->exiqamam', '$this->exinsurancem', '$this->exlincm', '$this->expassportm', '$this->premssionm', '$this->statusm', '$this->deletm', '$this->password')");
            $result = $sql->execute();
            $eroro =  $sql->errorInfo();
            $id = $dbh->lastInsertId();
            return array ($result,$id,$eroro);
        }
        
        public static function retreiveAllEmployee($query)
        {
            global $dbh;
            $sql = $dbh->prepare("SELECT * FROM `employee` $query");
            $sql->execute();
            $data = null;
                while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
                    $data[]= $fetch;
                }
            return $data;
        }
        
        public static function countOfOrder($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `employee` $query");
        $sql->execute();
        $number_of_rows = $sql->rowCount();
        return $number_of_rows;
    }
    public static function checkById($idm)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `employee` WHERE md5(md5(idm)) = '$idm'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
       public static function checkByIdNoEncreption($idm)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `employee` WHERE `idm` = '$idm'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
        public static function checkByNameAndPass($phone , $password)
    {
        global $dbh;
	$password1 = md5($password);
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `employee` WHERE `mobilem` = '$phone' AND  `password` = '$password'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
    public static function checkByPass($idm)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `employee` WHERE md5(md5(idm)) = '$idm'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
      public static function checkByNoborder($noborder)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `employee` WHERE `noborder` = '$noborder'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
      public static function checkByNopassport($nopassport)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `employee` WHERE `nopassport` = '$nopassport'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
      public static function checkByNoiqama($noiqama)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `employee` WHERE `noiqama` = '$noiqama'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
       public static function updatePasswordById($password, $idm)
    {
        $password1 = md5($password);
        global $dbh;
        $sql = $dbh->prepare("UPDATE `employee` SET `password` = '$password' WHERE  md5(md5(idm)) = '$idm'");
        $result = $sql->execute();
	return $result;
    }
    public static function updateEmployeeById( $fnamema, $fnameme, $namema, $nameme, $mobilem, $countrym, $carerm, $noborder, $noiqama, 
                                                $nopassport, $airportm, $adressm, $telem, $entermsa, $worktime, $exiqamam, $exinsurancem,
                                                $exlincm, $expassportm, $premssionm, $statusm, $deletm, $idm)
    {
        global $dbh;
        $sql = $dbh->prepare("UPDATE `employee` SET `fnamema` = '$fnamema', `fnameme` = '$fnameme', `namema` = '$namema', `nameme` = '$nameme'
                                                , `mobilem` = '$mobilem', `countrym` = '$countrym', `carerm` = '$carerm', `noborder` = '$noborder'
                                                , `noiqama` = '$noiqama', `nopassport` = '$nopassport', `airportm` = '$airportm', `adressm` = '$adressm'
                                                , `telem` = '$telem', `entermsa` = '$entermsa', `worktime` = '$worktime', `exiqamam` = '$exiqamam'
                                                , `exinsurancem` = '$exinsurancem', `exlincm` = '$exlincm', `expassportm` = '$expassportm', `premssionm` = '$premssionm'
                                                , `statusm` = '$statusm', `deletm` = '$deletm'  WHERE `employee`.`idm` = '$idm'");
        $result = $sql->execute();
	return $result;
    }
    
}

class vaction
{
    // attrs
    private $idva;
    private $idmva;
    private $dateva;
    private $satatus;
    // methods
    public function __construct($idmva, $dateva, $satatus, $idva="")
    {
        $this->idmva = $idmva;
        $this->dateva = $dateva;
        $this->satatus = $satatus;
        $this->idva = $idva;
        }
    
    // Insert data into database
    public function additionReson()
    {
        global $dbh;
        $sql = $dbh->prepare("INSERT INTO `reson`(`namena`, `namene`, `deletn`)
                VALUES ('$this->namena' ,'$this->namene' ,'$this->deletn')");
        $result = $sql->execute();
        $idn = $dbh->lastInsertId();
        return array ($result,$idn);
    }
    
    public static function checkByNameA($namena)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `reson` WHERE `namena` = '$namena'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
     public static function checkByNameE($namene)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `reson` WHERE `namene` = '$namene'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
	  public static function retreiveAllReson($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `reson` $query");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        $data[]= $fetch;
        }
        
        return $data;
    }
    public static function updateResonById($namena, $namene, $idn)
    {
        global $dbh;
        $sql = $dbh->prepare("UPDATE `reson` SET `namena` = '$namena', `namene` = '$namene' WHERE `reson`.`idn` = '$idn'");
        $result = $sql->execute();
	return $result;
    }
     public static function updateResonActiveById($active, $idn)
    {
        global $dbh;
        $sql = $dbh->prepare("UPDATE `reson` SET `deletn` = '$active' WHERE `reson`.`idn` = '$idn'");
        $result = $sql->execute();
	return $result;
    }
    
}

class ordero
{
    // attrs
    private $ido;
    private $castumerid;
    private $areaid;
    private $phone;
    private $areatransid;
    private $deviceid;
    private $orderdate;
    private $timeo;
    private $timing;
    private $mdn;
    private $sn;
    private $note;
    private $process;
    private $idservo;
    private $idservows;
    private $idmark;
    private $poseplt;
    private $dftime;
    private $odatews;
    private $odatefs;
    private $odatedp;
    private $timodp;
    private $timingdp;
    private $resono;
    private $deleto;
    private $employeeid;
    private $employeeidws;
    private $employeeiddp;
    // methods
    public function __construct($castumerid, $areaid, $phone, $areatransid, $deviceid, $orderdate, $timeo, $timing, $mdn, $sn, $note, $process, $idservo, $idservows, $idmark, $poseplt, $dftime, $odatews, $odatefs, $odatedp, $timodp, $timingdp, $resono, $deleto, $employeeid, $employeeidws, $employeeiddp, $ido="")
    {
        $this->castumerid = $castumerid;
        $this->areaid = $areaid;
        $this->phone = $phone;
        $this->areatransid = $areatransid;
        $this->deviceid = $deviceid;
        $this->orderdate = $orderdate;
        $this->timeo = $timeo;
        $this->timing = $timing;
        $this->mdn = $mdn;
        $this->sn = $sn;
        $this->note = $note;
        $this->process = $process;
        $this->idservo = $idservo;
        $this->idservows = $idservows;
        $this->idmark = $idmark;
        $this->poseplt = $poseplt;
        $this->dftime =$dftime;
        $this->odatews = $odatews;
        $this->odatefs = $odatefs;
        $this->odatedp = $odatedp;
        $this->timodp = $timodp;
        $this->timingdp = $timingdp;
        $this->resono = $resono;
        $this->deleto = $deleto;
        $this->employeeid = $employeeid;
        $this->employeeidws = $employeeidws;
        $this->employeeiddp = $employeeiddp;
        $this->idair = $ido;
        }
    
    // Insert data into database
    public function additionOrder()
    {
        global $dbh;
        $sql = $dbh->prepare("INSERT INTO `ordero`(`castumerid`, `areaid`, `phoneo`, `areatransid`, `deviceid`, `orderdate`, `timeo`, `timing`, `mdn`, `sn`, `note`, `process`, `idservo`, `idservows`, `idmark`, `poseplt`, `dftime`, `odatews`, `odatefs`, `odatedp`, `timodp`, `timingdp`, `resono`, `deleto`, `employeeid`, `employeeidws`, `employeeiddp`)
        VALUES ('$this->castumerid', '$this->areaid', '$this->phone', '$this->areatransid', '$this->deviceid', '$this->orderdate', '$this->timeo', '$this->timing', '$this->mdn', '$this->sn', '$this->note', '$this->process', '$this->idservo', '$this->idservows', '$this->idmark', '$this->poseplt', '$this->dftime', '$this->odatews', '$this->timodp', '$this->odatedp', '$this->odatedp', '$this->timingdp', '$this->resono', '$this->deleto', '$this->employeeid', '$this->employeeidws', '$this->employeeiddp')");
        $result = $sql->execute();
        $ido = $dbh->lastInsertId();
        return array ($result,$ido);
    }
    
      public static function countOfOrder($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `ordero` $query");
        $sql->execute();
        $number_of_rows = $sql->rowCount();
        return $number_of_rows;
    }
    
      public static function retreiveAllOrder($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `ordero` $query");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        $data[]= $fetch;
        }
        
        return $data;
    }
      public static function retreiveAllOrderGroup($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT `castumer`.`idc` ,`castumer`.`nameca` ,`castumer`.`namece` ,`castumer`.`phonec` ,`area`.`ida` ,`area`.`nameaa` ,`area`.`nameae` ,`device`.`idv` ,`device`.`nameva` ,`device`.`nameve` ,
                           `ordero`.`ido` ,`ordero`.`castumerid` ,`ordero`.`areaid` ,`ordero`.`areatransid` ,`ordero`.`idservo` ,`ordero`.`deviceid` ,`ordero`.`orderdate` ,`ordero`.`timeo` ,`ordero`.`mdn` ,`ordero`.`timing` ,`ordero`.`note` ,`ordero`.`timingdp` ,`ordero`.`timodp` ,
                            `ordero`.`process`,`ordero`.`employeeiddp`,`ordero`.`poseplt`,`service`.`idserv` ,`service`.`nservicea` ,`service`.`nservicee`  from `castumer` ,`area` ,`device` ,`ordero` ,`service` 
                             WHERE `castumer`.`idc` = `ordero`.`castumerid` AND `area`.`ida` = `ordero`.`areaid` 
                             AND `device`.`idv` = `ordero`.`deviceid`  AND `ordero`.`idservo` = `service`.`idserv`  $query");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        $data[]= $fetch;
        }
        
        return $data;
    }
     public static function retreiveAllOrderByEmployeeActive($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT `castumer`.`idc` ,`castumer`.`nameca` ,`castumer`.`namece` ,`castumer`.`phonec` ,`area`.`ida` 
                                    ,`area`.`nameaa` ,`area`.`nameae` ,`device`.`idv` ,`device`.`nameva` ,`device`.`nameve` , `ordero`.`ido` 
                                    ,`ordero`.`castumerid` ,`ordero`.`areaid` ,`ordero`.`phoneo` ,`ordero`.`areatransid` ,`ordero`.`employeeid` ,`employee`.`idm` ,`employee`.`namema` 
                                    ,`employee`.`nameme` , `ordero`.`deviceid` ,`ordero`.`deviceid` ,`ordero`.`orderdate` ,`ordero`.`timeo` ,`ordero`.`timing` ,`ordero`.`timingdp` ,`ordero`.`timodp` 
                                    ,`ordero`.`note` ,`ordero`.`areatransid` , `ordero`.`resono` ,`ordero`.`mdn`,`ordero`.`sn`,`ordero`.`odatews`
                                    ,`ordero`.`process` ,`ordero`.`idservo` from `castumer` ,`area` ,`device` ,`ordero` ,`employee` 
                                    WHERE `castumer`.`idc` = `ordero`.`castumerid` AND `area`.`ida` = `ordero`.`areaid` 
                                    AND `ordero`.`employeeid` = `employee`.`idm` AND `device`.`idv` = `ordero`.`deviceid`  $query");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        $data[]= $fetch;
        }
        
        return $data;
    }
     public static function retreiveAllOrderByEmployee($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT `castumer`.`idc` ,`castumer`.`nameca` ,`castumer`.`namece` ,`castumer`.`phonec` ,`castumer`.`areac` ,`area`.`ida` ,`area`.`nameaa` ,`area`.`nameae` ,`device`.`idv` ,`device`.`nameva` ,`device`.`nameve` ,
                            `service`.`idserv` ,`service`.`nservicea` ,`service`.`nservicee`,
                           `ordero`.`ido` ,`ordero`.`castumerid` ,`ordero`.`areaid` ,`ordero`.`areatransid` ,`ordero`.`resono` ,`ordero`.`employeeid` ,`ordero`.`employeeiddp` ,`employee`.`idm` ,`employee`.`namema` ,`employee`.`nameme` ,
                            `ordero`.`deviceid` ,`ordero`.`orderdate` ,`ordero`.`timeo` ,`ordero`.`timing` ,`ordero`.`note` ,`ordero`.`areatransid` ,`ordero`.`idservo` ,`ordero`.`idmark` ,`ordero`.`poseplt` ,
                            `ordero`.`resono` ,`ordero`.`mdn`,`ordero`.`sn`,`ordero`.`odatews`,`ordero`.`process` from `castumer` ,`area` ,`device` ,`ordero` ,`employee` , `service` 
                             WHERE `castumer`.`idc` = `ordero`.`castumerid` AND `area`.`ida` = `ordero`.`areaid` AND `ordero`.`employeeid` = `employee`.`idm` 
                             AND `device`.`idv` = `ordero`.`deviceid` AND `service`.`idserv` = `ordero`.`idservo` $query");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        $data[]= $fetch;
        }
        
        return $data;
    }

 public static function retreiveAllOrderByReson($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT `castumer`.`idc` ,`castumer`.`nameca` ,`castumer`.`namece` ,`castumer`.`phonec` ,`area`.`ida`
                            ,`area`.`nameaa` ,`area`.`nameae` ,`device`.`idv` ,`device`.`nameva` ,`device`.`nameve` , `ordero`.`ido` 
                            ,`ordero`.`castumerid` ,`ordero`.`areaid` ,`ordero`.`employeeid` , `ordero`.`deviceid` ,`ordero`.`orderdate` 
                            ,`ordero`.`timeo` ,`ordero`.`timing` ,`ordero`.`note` ,`ordero`.`resono` ,`reson`.`idn` ,`reson`.`namena` 
                            ,`reson`.`namene` , `ordero`.`process` from `castumer` ,`area` ,`device` ,`ordero` ,`reson` 
                            WHERE `castumer`.`idc` = `ordero`.`castumerid` AND `area`.`ida` = `ordero`.`areaid` 
                            AND `device`.`idv` = `ordero`.`deviceid` AND `reson`.`idn` = `ordero`.`resono` AND `ordero`.`resono` != 0 $query");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        $data[]= $fetch;
        }
        
        return $data;
    }    
    public static function updatePrepareOrderById($process, $ido)
    {

        global $dbh;
        $sql = $dbh->prepare("UPDATE `ordero` SET `process` = '$process' WHERE `ido` = '$ido'");
        $result = $sql->execute();
	return $result;
    }

    	public static function updateActiveOrderById($process, $idtech, $ido)
    {

        global $dbh;
        $sql = $dbh->prepare("UPDATE `ordero` SET `process` = '$process', `employeeid` = '$idtech' WHERE `ordero`.`ido` = $ido");
        $result = $sql->execute();
	return $result;
    }
    
    	public static function updateCancleOrderById($note, $reson, $ido)
    {

        global $dbh;
        $sql = $dbh->prepare("UPDATE `ordero` SET `note` = '$note', `resono` = '$reson' WHERE `ordero`.`ido` = $ido");
        $result = $sql->execute();
	return $result;
    }
    public static function updateWorkShopOrderById($mdn, $sn, $note, $process, $idservows, $idmark, $poseplt, $dftime, $odatews, $employeeidws, $ido)
    {

        global $dbh;
        $sql = $dbh->prepare("UPDATE `ordero` SET `mdn` = '$mdn', `sn` = '$sn', `note` = '$note', `process` = '$process', `idservows` = '$idservows', `idmark` = '$idmark', `poseplt` = '$poseplt', `dftime` = '$dftime', `odatews` = '$odatews', `employeeidws` = '$employeeidws' WHERE `ordero`.`ido` = $ido");
        
        $result = $sql->execute();
	return $result;
    }

       public static function updateRepiarOrderById($process, $note, $odatefs, $ido)
    {

        global $dbh;
        $sql = $dbh->prepare("UPDATE `ordero` SET `note` = '$note', `process` = '$process', `odatefs` = '$odatefs' WHERE `ordero`.`ido` = $ido");
        
        $result = $sql->execute();
	return $result;
    }
     public static function updateDeliveryOrderById($process, $note, $odatedp, $timingdp, $timodp, $employeeiddp, $ido)
    {

        global $dbh;
        $sql = $dbh->prepare("UPDATE `ordero` SET `note` = '$note', `process` = '$process', `odatedp` = '$odatedp', `timingdp` = '$timingdp', `timodp` = '$timodp', `employeeiddp` = '$employeeiddp' WHERE `ordero`.`ido` = $ido");
        
        $result = $sql->execute();
	return $result;
    }
}


class part
{
    // attrs
    private $companyparta;
    private $companyparte;
    private $billnumberpart;
    private $datebillpart;
    private $namepcsparta;
    private $namepcsparte;
    private $nopart;
    private $pricepart;
    private $discountpart;
    private $totalpart;
    private $notspart;
    private $deletepart;
    private $idopart;
    private $idpart;
    // methods
    public function __construct($companyparta, $companyparte, $billnumberpart, $datebillpart, $namepcsparta, $namepcsparte, $nopart,
                                $pricepart, $discountpart, $totalpart, $notspart, $idopart, $deletepart, $idpart="")
    {
        $this->companyparta = $companyparta;
        $this->companyparte = $companyparte;
        $this->billnumberpart = $billnumberpart;
        $this->datebillpart = $datebillpart;
        $this->namepcsparta = $namepcsparta;
        $this->namepcsparte = $namepcsparte;
        $this->nopart = $nopart;
        $this->pricepart = $pricepart;
        $this->discountpart = $discountpart;
        $this->totalpart = $totalpart;
        $this->notspart = $notspart;
        $this->idopart = $idopart;
        $this->deletepart = $deletepart;
        $this->idpart = $idpart;
        }
    
    // Insert data into database
    public function additionPart()
    {
        global $dbh;
        $sql = $dbh->prepare("INSERT INTO `part`(`companyparta`, `companyparte`, `billnumberpart`, `datebillpart`, `namepcsparta`,
                               `namepcsparte`,  `nopart`, `pricepart`, `discountpart`, `totalpart`, `notspart`, `idopart`, `deletepart`)
                VALUES ('$this->companyparta' ,'$this->companyparte' ,'$this->billnumberpart' ,'$this->datebillpart' ,'$this->namepcsparta' 
                        ,'$this->namepcsparte' ,'$this->nopart' ,'$this->pricepart' ,'$this->discountpart' ,'$this->totalpart' ,'$this->notspart' ,'$this->idopart' ,'$this->deletepart')");
        $result = $sql->execute();
        //$idair = $dbh->lastInsertId();
        ///return array ($result,$idair);
        return $result;
    }
    
   
	  public static function retreiveAllPart($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `part` $query");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        $data[]= $fetch;
        }
        
        return $data;
    }
}
        
        
class staff
{
    // attrs
    private $ids;
    private $tech;
    private $asist;
    private $driver;
    private $staffdate;
    private $defults;
    private $delets;
    // methods
    public function __construct($tech, $asist, $driver, $staffdate, $defults, $delets, $ids="")
    {
        $this->tech = $tech;
        $this->asist = $asist;
        $this->driver = $driver;
        $this->staffdate = $staffdate;
        $this->defults = $defults;
        $this->delets = $delets;
        $this->ids = $ids;
        }
    
    // Insert data into database
    public function additionStaff()
    {
        global $dbh;
        $sql = $dbh->prepare("INSERT INTO `staff`(`tech`, `asist`, `driver`, `staffdate`, `defults`, `delets`)
                VALUES ('$this->tech' ,'$this->asist' ,'$this->driver' ,'$this->staffdate' ,'$this->defults' ,'$this->delets')");
        $result = $sql->execute();
        $idair = $dbh->lastInsertId();
        return array ($result,$idair);
    }
    
    public static function checkByNameA($nameaira)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `airport` WHERE `nameaira` = '$nameaira'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
     public static function checkByNameE($nameaire)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `airport` WHERE `nameaire` = '$nameaire'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
	  public static function retreiveAllAirport($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `airport` $query");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        $data[]= $fetch;
        }
        
        return $data;
    }
}


class expenses
{
    // attrs
    private $idex;
    private $idem;
    private $billex;
    private $dateex;
    private $priceex;
    private $discountex;
    private $totalex;
    private $notsex;
    private $deletex;
    // methods
    public function __construct($idem, $billex, $dateex, $priceex, $discountex, $totalex, $notsex, $deletex, $idex="")
    {
        $this->idem = $idem;
        $this->billex = $billex;
        $this->dateex = $dateex;
        $this->priceex = $priceex;
        $this->discountex = $discountex;
        $this->totalex = $totalex;
        $this->notsex = $notsex;
        $this->deletex = $deletex;
        $this->idex = $idex;
        }
    
    // Insert data into database
    public function additionExpenses()
    {
        global $dbh;
        $sql = $dbh->prepare("INSERT INTO `expenses`(`idem`, `billex`, `dateex`, `priceex`, `discountex`, `totalex`, `notsex`, `deletex`)
                VALUES ('$this->idem' ,'$this->billex' ,'$this->dateex' ,'$this->priceex' ,'$this->discountex' ,'$this->totalex' ,'$this->notsex' ,'$this->deletex')");
        $result = $sql->execute();
        $idex = $dbh->lastInsertId();
        return array ($result,$idex);
    }
    

	  public static function retreiveAllExpenses($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `expenses` $query");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        $data[]= $fetch;
        }
        
        return $data;
    }

      public static function countOfOrder($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `expenses` $query");
        $sql->execute();
        $number_of_rows = $sql->rowCount();
        return $number_of_rows;
    }
       public static function retreiveTotalExpenses($exfrom , $exto)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT sum(`totalex`) as `totalun` FROM `expenses`  WHERE `dateex` >= '$exfrom' AND `dateex` <= '$exto'");
        $sql->execute();
        $row = $sql->fetch(PDO::FETCH_ASSOC);
        $sum = $row['totalun'];
        return $sum;
    }
    
}
    
class reson
{
    // attrs
    private $idn;
    private $namena;
    private $namene;
    private $deletn;
    // methods
    public function __construct($namena, $namene, $deletn, $idn="")
    {
        $this->namena = $namena;
        $this->namene = $namene;
        $this->deletn = $deletn;
        $this->idn = $idn;
        }
    
    // Insert data into database
    public function additionReson()
    {
        global $dbh;
        $sql = $dbh->prepare("INSERT INTO `reson`(`namena`, `namene`, `deletn`)
                VALUES ('$this->namena' ,'$this->namene' ,'$this->deletn')");
        $result = $sql->execute();
        $idn = $dbh->lastInsertId();
        return array ($result,$idn);
    }
    
    public static function checkByNameA($namena)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `reson` WHERE `namena` = '$namena'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
     public static function checkByNameE($namene)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `reson` WHERE `namene` = '$namene'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
	  public static function retreiveAllReson($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `reson` $query");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        $data[]= $fetch;
        }
        
        return $data;
    }
    public static function updateResonById($namena, $namene, $idn)
    {
        global $dbh;
        $sql = $dbh->prepare("UPDATE `reson` SET `namena` = '$namena', `namene` = '$namene' WHERE `reson`.`idn` = '$idn'");
        $result = $sql->execute();
	return $result;
    }
     public static function updateResonActiveById($active, $idn)
    {
        global $dbh;
        $sql = $dbh->prepare("UPDATE `reson` SET `deletn` = '$active' WHERE `reson`.`idn` = '$idn'");
        $result = $sql->execute();
	return $result;
    }
    
}
    

class credit
{
    // attrs
    private $idcr;
    private $idmcr;
    private $pricecr;
    private $crdate;
    private $pricetcr;
    private $paymentcr;
    private $crpayment;
    private $bankdate;
    private $checkno;
    private $bankname;
    
    // methods
    public function __construct($idmcr, $pricecr, $crdate, $pricetcr, $paymentcr, $crpayment, $bankdate, $checkno, $bankname, $idcr="")
    {
        $this->idmcr = $idmcr;
        $this->pricecr = $pricecr;
        $this->crdate = $crdate;
        $this->pricetcr = $pricetcr;
        $this->paymentcr = $paymentcr;
        $this->crpayment = $crpayment;
        $this->bankdate = $bankdate;
        $this->checkno = $checkno;
        $this->bankname = $bankname;
        $this->idcr = $idcr;
        }
    
    // Insert data into database
    public function additionCredit()
    {
        global $dbh;
        $sql = $dbh->prepare("INSERT INTO `credit`(`idmcr`, `pricecr`, `crdate`, `pricetcr`, `paymentcr`, `crpayment`, `bankdate`, `checkno`, `bankname`)
                VALUES ('$this->idmcr' ,'$this->pricecr' ,'$this->crdate' ,'$this->pricetcr' ,'$this->paymentcr' ,'$this->crpayment'
                ,'$this->bankdate' ,'$this->checkno' ,'$this->bankname')");
        $result = $sql->execute();
        $idcr = $dbh->lastInsertId();
        return array ($result,$idcr);
    }
    
	  public static function retreiveAllCredit($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `credit` $query");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        $data[]= $fetch;
        }
        
        return $data;
    }
    
    public static function updatePricetcrOrderById($pricetcr, $idcr)
    {

        global $dbh;
        $sql = $dbh->prepare("UPDATE `credit` SET `pricetcr` = '$pricetcr' WHERE `credit`.`idcr` = $idcr");
        $result = $sql->execute();
	return $result;
    }
        public static function retreiveTotalAllCredit($idate , $idp)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT sum(`pricecr`) as `pricecrun` FROM `credit` WHERE `crdate` = '$idate' AND `paymentcr` = '$idp'");
        $sql->execute();
        $row = $sql->fetch(PDO::FETCH_ASSOC);
        $sum = $row['pricecrun'];
        return $sum;
    }
      public static function retreiveTotalAllCreditDate($idate ,$bdate , $idp)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT sum(`pricecr`) as `pricecrun1` FROM `credit` WHERE `crdate` >= '$idate' AND `crdate` <= '$bdate' AND `paymentcr`= '$idp'");
        $sql->execute();
        $row = $sql->fetch(PDO::FETCH_ASSOC);
        $sum = $row['pricecrun1'];
        return $sum;
    }
      public static function  totalAllCredit($idate ,$payment){
        foreach ($payment as $value) {
        $id = $value['idp'];
        if($id == 5){
            $id = 541;
            $namea = "شيك بنكي";
            $namee = "Bank check";
        }else{
        $namea = $value['namepa'];
        $namee = $value['namepe'];
        }
        $wayOfPayment  = credit::retreiveTotalAllCredit($idate , $id);
        $s = $id."/".$namea."/".$namee."/".$wayOfPayment;
        $f = explode("/", $s);
        $result[] = $f;
    
    }
    return $result;
    }
     public static function  totalAllCreditDate($idate ,$bdate ,$payment){
        foreach ($payment as $value) {
        $idp = $value['idp'];
        if($idp == 5){
            $idp = 541;
            $namea = "شيك بنكي";
            $namee = "Bank check";
        }else{
        $namea = $value['namepa'];
        $namee = $value['namepe'];
        }
        $wayOfPayment  = credit::retreiveTotalAllCreditDate($idate, $bdate, $idp);
        $s = $idp."/".$namea."/".$namee."/"."$wayOfPayment";
        $f = explode("/", $s);
        $result[] = $f;
    
    }
    return $result;
    }
    
    
}
    

class wayOfpayment
{
    // attrs
    private $idp;
    private $namepa;
    private $namepe;
    private $numberp;
    private $deletp;
    // methods
    public function __construct($namepa, $namepe, $numberp, $deletp, $idp="")
    {
        $this->namepa = $namepa;
        $this->namepe = $namepe;
        $this->numberp = $numberp;
        $this->deletp = $deletp;
        $this->idp = $idp;
        }
    
    // Insert data into database
    public function additionPayment()
    {
        global $dbh;
        $sql = $dbh->prepare("INSERT INTO `wayofpayment`(`namepa`, `namepe`, `numberp`, `deletp`)
                VALUES ('$this->namepa' ,'$this->namepe' ,'$this->numberp' ,'$this->deletp')");
        $result = $sql->execute();
        $idp = $dbh->lastInsertId();
        return array ($result,$idp);
    }
    
    public static function checkByNameA($namepa)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `wayofpayment` WHERE `namepa` = '$namepa'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
     public static function checkByNameE($namepe)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `wayofpayment` WHERE `namepe` = '$namepe'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
         public static function checkById($idp)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `wayofpayment` WHERE `idp` = '$idp'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
	  public static function retreiveAllPayment($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `wayofpayment` $query");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        $data[]= $fetch;
        }
        
        return $data;
    }
        public static function countOfOrder($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `wayofpayment` $query");
        $sql->execute();
        $number_of_rows = $sql->rowCount();
        return $number_of_rows;
    }
    public static function updatePaymentById($namepa, $namepe, $numberp, $idp)
    {
        global $dbh;
        $sql = $dbh->prepare("UPDATE `wayofpayment` SET `namepa` = '$namepa', `namepe` = '$namepe', `numberp` = '$numberp' WHERE `wayofpayment`.`idp` = '$idp'");
        $result = $sql->execute();
	return $result;
    }
     public static function updatePaymentActiveById($active, $idp)
    {
        global $dbh;
        $sql = $dbh->prepare("UPDATE `wayofpayment` SET `deletp` = '$active' WHERE `wayofpayment`.`idp` = '$idp'");
        $result = $sql->execute();
	return $result;
    }
    
}

class invoices
{
    // attrs
        private $idi;
	private $bill;
        private $idate;
	private $price;
	private $discount;
	private $expenses;
	private $totalc;
        private $percent;
        private $totalm;
	private $payment;
	private $note;
	private $orderid;
        private $credit;
        private $creditd;
	
    // methods
    public function __construct($bill, $idate, $price, $discount, $expenses, $totalc, $percent, $totalm, $payment, $note, $orderid, $credit, $creditd, $idi="")
    {
        $this->bill = $bill;
        $this->idate = $idate;
        $this->price = $price;
        $this->discount = $discount;
        $this->expenses = $expenses;
        $this->totalc = $totalc;
        $this->percent = $percent;
        $this->totalm = $totalm;
        $this->payment = $payment;
        $this->note = $note;
	$this->orderid = $orderid;
        $this->credit = $credit;
        $this->creditd = $creditd;
        $this->idi = $idi;
        }
    
    // Insert data into database
    public function additionInvoices()
    {
		
        global $dbh;
        $sql = $dbh->prepare("INSERT INTO `invoice` (`bill`, `idate`, `price`, `discount`, `expenses`, `totalc`, `percent`, `totalm`, `payment`, `note`, `orderid`, `credit`, `creditid`)
					VALUES('$this->bill', '$this->idate', '$this->price', ' $this->discount', '$this->expenses', '$this->totalc', '$this->percent', '$this->totalm', '$this->payment', '$this->note',
					'$this->orderid', '$this->credit', '$this->creditd')");
        $result = $sql->execute();
        $idp = $dbh->lastInsertId();
            return array ($result,$idp);
    }
	
	// Select data into database
    public static function retreiveAllInvoices($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT `ordero`.`ido`, `ordero`.`castumerid`,`ordero`.`employeeid`, `ordero`.`employeeiddp`, `invoice`.`idi`, `invoice`.`idate`,
                                    `invoice`.`bill`, `invoice`.`price`, `invoice`.`discount`, `invoice`.`totalc`, `invoice`.`credit`, `invoice`.`totalm`, 
                                    `invoice`.`orderid`, `invoice`.`payment`, `castumer`.`idc`, `castumer`.`nameca`, `castumer`.`namece`, `castumer`.`phonec` 
                                    FROM `ordero`, `invoice`, `castumer` WHERE `ordero`.`ido` = `invoice`.`orderid` 
                                    AND `ordero`.`castumerid` = `castumer`.`idc` $query");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        $data[]= $fetch;
        }
        
        return $data;
    }
    public static function retreiveAllCridetPay($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT `invoice`.`idi`, `invoice`.`bill`, `invoice`.`idate`, `invoice`.`orderid`, `ordero`.`ido`, `ordero`.`castumerid`,
                              `ordero`.`employeeid`, `ordero`.`employeeiddp`, `castumer`.`idc`, `castumer`.`nameca`, `castumer`.`namece`,
                              `castumer`.`phonec`, `invoice`.`totalc` , `invoice`.`price` , `invoice`.`discount` ,`invoice`.`credit` ,`invcredite`.`idicre`, `invcredite`.`idcrdite` ,
                              `credit`.`idcr` ,`credit`.`paymentcr` ,`credit`.`crdate` from `invoice` ,`invcredite`, `credit`, `ordero`, `castumer`
                              WHERE `invoice`.`idi` = `invcredite`.`idicre` AND `credit`.`idcr` = `invcredite`.`idcrdite` 
                              AND `invoice`.`orderid` = `ordero`.`ido` AND `ordero`.`castumerid` = `castumer`.`idc` $query");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        $data[]= $fetch;
        }
        
        return $data;
    }
    
     public static function retreiveAllInvoicesOnly($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT `castumer`.`idc`, `ordero`.`ido`,`ordero`.`castumerid`,`ordero`.`castumerid`,`invoice`.`idi`,`invoice`.`totalc`,
                              `invoice`.`credit`,`invoice`.`orderid`,`invoice`.`creditid`,`credit`.`idcr`,`credit`.`idmcr`,`credit`.`pricecr`,
                              `credit`.`pricetcr` ,`credit`.`paymentcr` ,`credit`.`crdate` 
                              FROM `castumer`,`ordero`,`invoice`,`credit` where `castumer`.`idc` = `ordero`.`castumerid` 
                              AND `ordero`.`castumerid` = `credit`.`idmcr` AND `ordero`.`ido` = `invoice`.`orderid` $query");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        $data[]= $fetch;
        }
        
        return $data;
    }
    
        public static function retreiveAllInvoicesOrderByCastummerId($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT `ordero`.`ido`, `ordero`.`castumerid`, `castumer`.`idc`, `castumer`.`nameca`, `castumer`.`namece`, `castumer`.`phonec`, 
                                `invoice`.`idi`, `invoice`.`bill`, `invoice`.`idate`, `invoice`.`price`, `invoice`.`discount`, `invoice`.`totalc`, 
                                `invoice`.`payment`, `invoice`.`note`, `invoice`.`orderid`, `invoice`.`credit`, `wayofpayment`.`idp`, `wayofpayment`.`namepa`, 
                                `wayofpayment`.`namepe` FROM `ordero`, `castumer`, `invoice`, `wayofpayment` 
                                where `ordero`.`castumerid` = `castumer`.`idc` AND `ordero`.`ido` = `invoice`.`orderid` 
                                AND `invoice`.`payment` = `wayofpayment`.`idp` $query");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        $data[]= $fetch;
        }
        
        return $data;
    }

    
    
    
        public static function checkById($id)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `invoice` WHERE `orderid` = '$id'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
    
    
    public static function retreiveTotalAllInvoices($idate , $idp)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT sum(`totalm`) as `totalun` FROM `invoice` WHERE idate = '$idate' AND `payment` = '$idp'");
        $sql->execute();
        $row = $sql->fetch(PDO::FETCH_ASSOC);
        $sum = $row['totalun'];
        return $sum;
    }
    
     public static function retreiveTotalAllInvoicesDate($datefrom, $dateto, $idp, $query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT sum(`totalm`) as `totalun` FROM `invoice` WHERE `idate` >= '$datefrom' AND `idate` <= '$dateto' AND `payment` = '$idp' $query");
        $sql->execute();
        $row = $sql->fetch(PDO::FETCH_ASSOC);
        $sum = $row['totalun'];
        return $sum;
    }

    
    public static function  totalAllInoices ($idate ,$payment){
        foreach ($payment as $value) {
        $id = $value['idp'];
        $namea = $value['namepa'];
        $namee = $value['namepe'];
        $wayOfPayment  = invoices::retreiveTotalAllInvoices($idate , $id);
        $s = $id."/".$namea."/".$namee."/".$wayOfPayment;
        $f = explode("/", $s);
        $result[] = $f;
    
    }
    return $result;
    }
    public static function  totalAllInoicesDate ($datefrom, $dateto, $payment){
        foreach ($payment as $value) {
        $idp = $value['idp'];
        if($idp == 5){
           $query  = "AND `totalc` != `credit`";
        }else{
            $query = Null;
        }
        $namea = $value['namepa'];
        $namee = $value['namepe'];
        $wayOfPayment  = invoices::retreiveTotalAllInvoicesDate($datefrom, $dateto, $idp, $query);
        $s = $idp."/".$namea."/".$namee."/".$wayOfPayment;
        $f = explode("/", $s);
        $result[] = $f;
    
    }
    return $result;
    }
    
    
     public static function updateCreditOrderById($credit, $creditid, $idi)
    {

        global $dbh;
        $sql = $dbh->prepare("UPDATE `invoice` SET `credit` = '$credit', `creditid` = '$creditid' WHERE `invoice`.`idi` = '$idi'");
        $result = $sql->execute();
	return $result;
    }
    /*
	// Select data into database Group
		  public static function retreiveAllOrderGroup($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT `order-repair`.`ido`, `order-repair`.`castumerid`, `order-repair`.`area`, `order-repair`.`device`, `order-repair`.`dateo`, 
		`order-repair`.`timeo`, `order-repair`.`timing`, `castumer-reapair`.`idc`, `castumer-reapair`.`namec`, `castumer-reapair`.`phone`, 
		`area`.`id`, `area`.`name` from `order-repair`, `castumer-reapair`, `area` where `order-repair`.`castumerid` = `castumer-reapair`.`idc` AND 
		`order-repair`.`area`= `area`.`id` $query");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        $data[]= $fetch;
        }
        
        return $data;
    }
    */
	// count data into database
	  public static function countOfOrder($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `invoice` $query");
        $sql->execute();
        $number_of_rows = $sql->rowCount();
        return $number_of_rows;
    }
    /*
	public static function updateActiveOrderById($idFactor, $ids)
    {

        global $dbh;
        $sql = $dbh->prepare("UPDATE `order-repair` SET `factorid` = '$idFactor' WHERE `order-repair`.`ido` = '$ids'");
        $result = $sql->execute();
		return $result;
    }
	*/
	 
}
 
 

function sql_select($param) {
    $query=  mysql_query($param);
    
    while ($row = @mysql_fetch_assoc($query)) {
        $array[]=$row;
    }
    
    
    return @$array;
}
    
function insert ( $table, $data )
{
$fields = array_keys( $data );
$values = array_map( "mysql_real_escape_string" , array_values( $data ) );
$q="INSERT INTO .`" .$table. "` (`".implode ("`,`" , $fields )."`)  VALUES ('" .implode( "','",$values ) . "');";
//echo $q;
    mysql_query($q) or die (mysql_error());
}

function isEmail($email) {
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function test_input($data)
			{
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

class cURL { 
var $headers; 
var $user_agent; 
var $compression; 
var $cookie_file; 
var $proxy; 
function cURL($cookies=false,$cookie='cookies.txt',$compression='gzip',$proxy='') { 
$this->headers[] = 'Accept: image/gif, image/x-bitmap, image/jpeg, image/pjpeg'; 
$this->headers[] = 'Connection: Keep-Alive'; 
$this->headers[] = 'Content-type: application/x-www-form-urlencoded;charset=UTF-8'; 
$this->user_agent = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0)'; 
$this->compression=$compression; 
$this->proxy=$proxy; 
$this->cookies=$cookies; 
if ($this->cookies == TRUE) $this->cookie($cookie); 
} 
function cookie($cookie_file) { 
if (file_exists($cookie_file)) { 
$this->cookie_file=$cookie_file; 
} else { 
fopen($cookie_file,'w') or $this->error('The cookie file could not be opened. Make sure this directory has the correct permissions'); 
$this->cookie_file=$cookie_file; 
fclose($this->cookie_file); 
} 
} 
function get($url) { 
$process = curl_init($url); 
curl_setopt($process, CURLOPT_HTTPHEADER, $this->headers); 
curl_setopt($process, CURLOPT_HEADER, 0); 
curl_setopt($process, CURLOPT_USERAGENT, $this->user_agent); 
if ($this->cookies == TRUE) curl_setopt($process, CURLOPT_COOKIEFILE, $this->cookie_file); 
if ($this->cookies == TRUE) curl_setopt($process, CURLOPT_COOKIEJAR, $this->cookie_file); 
curl_setopt($process,CURLOPT_ENCODING , $this->compression); 
curl_setopt($process, CURLOPT_TIMEOUT, 30); 
if ($this->proxy) curl_setopt($process, CURLOPT_PROXY, $this->proxy); 
curl_setopt($process, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($process, CURLOPT_FOLLOWLOCATION, 1); 
$return = curl_exec($process); 
curl_close($process); 
return $return; 
} 
function post($url,$data) { 
$process = curl_init($url); 
curl_setopt($process, CURLOPT_HTTPHEADER, $this->headers); 
curl_setopt($process, CURLOPT_HEADER, 0); 
curl_setopt($process, CURLOPT_USERAGENT, $this->user_agent); 
if ($this->cookies == TRUE) curl_setopt($process, CURLOPT_COOKIEFILE, $this->cookie_file); 
if ($this->cookies == TRUE) curl_setopt($process, CURLOPT_COOKIEJAR, $this->cookie_file); 
curl_setopt($process, CURLOPT_ENCODING , $this->compression); 
curl_setopt($process, CURLOPT_TIMEOUT, 30); 
if ($this->proxy) curl_setopt($process, CURLOPT_PROXY, $this->proxy); 
curl_setopt($process, CURLOPT_POSTFIELDS, $data); 
curl_setopt($process, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($process, CURLOPT_FOLLOWLOCATION, 1); 
curl_setopt($process, CURLOPT_POST, 1); 
$return = curl_exec($process); 
curl_close($process); 
return $return; 
}
function error($error) { 
echo "<center><div style='width:500px;border: 3px solid #FFEEFF; padding: 3px; background-color: #FFDDFF;font-family: verdana; font-size: 10px'><b>cURL Error</b><br>$error</div></center>"; 
die; 
} 
}

$today = date("Y-m-d");
$time = date('H');
if($time < 12){
	$querytime = "AND `timing` = 'am'";
}else{
	$querytime = "AND `timing` = 'pm'";
}


 function resultEmployeeActive($emlpoyee , $date22){
    $y = null;
    $today = $date22; 
    foreach ($emlpoyee as $value) {
    $index =  $value['idm'];
    $orderNowAm = ordero::countOfOrder("WHERE `orderdate` = '$today' AND `process` > 0  AND `process` < 9 AND `resono` = 0 AND `timing` = 'am' AND `employeeid` = '$index'");
    $orderNowPm = ordero::countOfOrder("WHERE `orderdate` = '$today' AND `process` > 0  AND `process` < 9 AND `resono` = 0 AND `timing` = 'Pm' AND `employeeid` = '$index'");
    $orderNowDlAm = ordero::countOfOrder("WHERE `odatedp` = '$today' AND `process` > 0  AND `process` < 9 AND `resono` = 0 AND `timingdp` = 'am' AND `employeeiddp` = '$index'");
    $orderNowDlPm = ordero::countOfOrder("WHERE `odatedp` = '$today' AND `process` > 0  AND `process` < 9 AND `resono` = 0 AND `timingdp` = 'Pm' AND `employeeiddp` = '$index'");
    $s = $value['idm']."/".$value['namema']."/".$value['nameme']."/".$orderNowAm."/".$orderNowPm."/".$orderNowDlAm."/".$orderNowDlPm;
    $f = explode("/", $s);
    //print_r($f)."<br/>";
        $y[] = $f;
    
}
     return $y;
     
 }
 

 function resultEmployeePm($emlpoyee){
     $y = null;
     $today = date("Y-m-d"); 
     foreach ($emlpoyee as $value) {
    $index =  $value['idm'];
    $orderNowPm = ordero::countOfOrder("WHERE `orderdate` = '$today' AND `process` = 1 AND `timing` = 'pm' AND `employeeid` = '$index'");
    $s = $value['idm']."/".$value['namema']."/".$orderNowPm;
    $f = explode("/", $s);
    //print_r($f)."<br/>";
        $y[] = $f;
    
}
     return $y;
     
 }
 
 
 
 function resultEmployeeRun($emlpoyee){
     $y = null;
     $today = date("Y-m-d"); 
     foreach ($emlpoyee as $value) {
    $index =  $value['idm'];
    $orderNowAm = ordero::countOfOrder("WHERE `process` >= 3  AND `process` <= 8 AND `employeeid` = '$index'");
    $s = $value['idm']."/".$value['namema']."/".$value['nameme']."/".$orderNowAm;
    $f = explode("/", $s);
    //print_r($f)."<br/>";
        $y[] = $f;
    
}
     return $y;
     
 }
 
 
 
class daten
{
        private $idd;
	private $idu;
        private $kindd;
        private $idair;
        private $ida;
        private $idr;
        private $idc;
        private $idy;
	private $idcr;
	private $idv;
        private $idm;
        private $idx;
        private $idi;
        private $idmark;
	private $ido;
        private $idn;
        private $idserv;
	private $idp;
        private $ids;
        
        
    public function __construct($idu, $kindd, $idair, $ida, $idr, $idc, $idy, $idcr, $idv, $idm, $idx, $idi, $idmark, $ido, $idn, $idserv, $idp, $ids)
    {
        $this->idu = $idu;
        $this->kindd = $kindd;
        $this->idair = $idair;
        $this->ida = $ida;
        $this->idr = $idr;
        $this->idc = $idc;
        $this->idy = $idy;
        $this->idcr = $idcr;
        $this->idv = $idv;
        $this->idm = $idm;  
        $this->idx = $idx;
        $this->idi = $idi;
        $this->idmark = $idmark;
        $this->ido = $ido;
        $this->idn = $idn;
        $this->idserv = $idserv;
        $this->idp = $idp;
        $this->ids = $ids; 
    }
    
    // Insert data into database
    public function additionDate()
    {
        global $dbh;
        $sql = $dbh->prepare
                ("INSERT INTO `daten` (`idu`, `kindd`, `idair`, `ida`, `idr`, `idc`, `idy`, `idcr`, `idv`, `idm`, `idx`, `idi`, `idmark`, `ido`, `idn`, `idserv`, `idp`, `ids`)
                 VALUES 
                ('$this->idu', '$this->kindd', '$this->idair', '$this->ida', '$this->idr', '$this->idc', '$this->idy',
                '$this->idcr', '$this->idv', '$this->idm', '$this->idx', '$this->idi', '$this->idmark', '$this->ido', '$this->idn', '$this->idserv', '$this->idp', '$this->ids');");
                 $result = $sql->execute();
                 return $result;
    }
    public static function  monthAr ($month){
         switch ($month){
                            case "January":
                                $month = "يناير";
                            break;
                            case "February":
                                $month = "فبراير";
                            break;
                            case "March":
                                $month = "مارس";
                            break;
                            case "April":
                                $month = "ابريل";
                            break;
                            case "May":
                                $month = "مايو";
                            break;
                            case "June":
                                $month = "يونيه";
                            break;
                            case "July":
                                $month = "يوليو";
                            break;
                            case "August":
                                $month = "اغسطس";
                            break;
                            case "September":
                                $month = "سبتمبر";
                            break;
                            case "October":
                                $month = "اكتوبر";
                            break;
                            case "November":
                                $month = "نوفمبر";
                            break;
                            case "December":
                                $month = "ديسمبر";
                            break;
                        }
                        return $month;
    }
            

    public static function dayAr($day) {
        
        switch ($day){
            
            
        case  "Sat" :
            $day =   "السبت";
        break;
        case  "Sun" :
            $day =   "الأحد";
        break;
        case  "Mon" :
            $day =   "الاثنين";
        break;

        case  "Tue" :
            $day =   "الثلاثاء";
        break;
        case  "Wed" :
            $day =   "الاربعاء";
        break;
        case  "Thu" :
            $day =   "الخميس";
        break;
        case  "Fri" :
            $day =   "الجمعه";
        break;
        }
        return $day;
    
    }
        
}



function numtoarb ($total) 
{ 
$total=explode(".",$total); 
$j= strlen($total[0]); 
$je=$j; 
$je--; 
$de=1; 
for($i=1;$i<$j;$i++) 
$de=$de*10; 

$t=$total[0]; 

for($i=0;$i<$j;$i++) 
{ 
$te[$je]=$t/$de; 
$t=$t%$de; 
$de=$de/10; 
$temp=explode(".",$te[$je]); 
$te[$je]=$temp[0]; 
$je--; 

} 



for($i=0;$i<$j;$i++) 
{ 
if ($i == 0) 
{ 
if ($j<3) 
switch($te[$i]) 
{ 
case "0" : $arb[0]=" "; 
break; 
case "1" :  $arb[0]= " واحد"  ; 
break; 
case "2" : if($te[1]=="1") $arb[0]=" اثنا "; else $arb[0]=" اثنان" ; 
break; 
case "3" : $arb[0]=" ثلاثة"; 
break; 
case "4" : $arb[0]=" اربعة" ; 
break; 
case "5" : $arb[0]=" خمسة"   ; 
break; 
case "6" : $arb[0]=" ستة"     ; 
break; 
case "7" : $arb[0]=" سبعة"     ; 
break; 
case "8" : $arb[0]=" ثمانية"    ; 
break; 
case "9" : $arb[0]=" تسعة"       ; 
break; 
} 
else 
switch($te[$i]) 
{ 
case "0" : $arb[0]=" "; 
break; 
case "1" :  $arb[0]=" وواحد"  ; 
break; 
case "2" : if($te[1]=="1") $arb[0]=" واثنا "; else $arb[0]=" واثنان" ; 
break; 
case "3" : $arb[0]=" وثلاثة"; 
break; 
case "4" : $arb[0]=" واربعة" ; 
break; 
case "5" : $arb[0]=" وخمسة"   ; 
break; 
case "6" : $arb[0]=" وستة"     ; 
break; 
case "7" : $arb[0]=" وسبعة"     ; 
break; 
case "8" : $arb[0]=" وثمانية"    ; 
break; 
case "9" : $arb[0]=" وتسعة"       ; 
break; 
} 
} 



if ($i == 1) 
{ 
if ($j==2 ) 
{ 
if($te[$i]==1){if($te[0]=="1") {$arb[0]=" " ;$arb[1]=" أحد عشر";}  elseif($te[0]=="0")$arb[1]=" عشرة"; else $arb[1]=" عشر"    ; } 
if ( $te[0]=="0") 
switch($te[$i]) 
{ 
case "0" : $arb[1]=" "      ; 
break; 
case "1" : if($te[0]=="1") {$arb[0]=" " ;$arb[1]=" أحد عشر";} elseif($te[0]=="0")$arb[1]=" عشرة"; else $arb[1]="عشر"    ; 
break; 
case "2" : $arb[1]=" عشرون"    ; 
break; 
case "3" : $arb[1]=" ثلاثون"    ; 
break; 
case "4" : $arb[1]=" اربعون"     ; 
break; 
case "5" : $arb[1]=" خمسون"       ; 
break; 
case "6" : $arb[1]=" ستون"         ; 
break; 
case "7" : $arb[1]=" سبعون"         ; 
break; 
case "8" : $arb[1]=" ثمانون"         ; 
break; 
case "9" : $arb[1]=" تسعون"           ; 
break; 
} 

} 
else 
switch($te[$i]) 
{ 
case "0" : $arb[1]=" "      ; 
break; 
case "1" : if($te[0]=="1") {$arb[0]=" " ;$arb[1]=" وأحد عشر";}elseif($te[0]=="0")$arb[1]=" وعشرة"; else $arb[1]=" عشر"  ; 
break; 
case "2" : $arb[1]=" وعشرون"    ; 
break; 
case "3" : $arb[1]=" وثلاثون"    ; 
break; 
case "4" : $arb[1]=" واربعون"     ; 
break; 
case "5" : $arb[1]=" وخمسون"       ; 
break; 
case "6" : $arb[1]=" وستون"         ; 
break; 
case "7" : $arb[1]=" وسبعون"         ; 
break; 
case "8" : $arb[1]=" وثمانون"         ; 
break; 
case "9" : $arb[1]=" وتسعون"           ; 
break; 
} 
} 


if ($i == 2) 
{ 
if ($j==3) 
switch($te[$i]) 
{ 
case "0" : $arb[2]=" "      ; 
break; 
case "1" : $arb[2]=" مائة"    ; 
break; 
case "2" : $arb[2]=" مائتان"    ; 
break; 
case "3" : $arb[2]=" ثلاثمائة"    ; 
break; 
case "4" : $arb[2]=" اربعمائة"     ; 
break; 
case "5" : $arb[2]=" خمسمائة"       ; 
break; 
case "6" : $arb[2]=" ستمائة"         ; 
break; 
case "7" : $arb[2]=" سبعمائة"         ; 
break; 
case "8" : $arb[2]=" ثمانمائة"         ; 
break; 
case "9" : $arb[2]=" تسعمائة"           ; 
break; 
} 
else 
switch($te[$i]) 
{ 
case "0" : $arb[2]=" "      ; 
break; 
case "1" : $arb[2]=" ومائة"    ; 
break; 
case "2" : $arb[2]=" ومائتان"    ; 
break; 
case "3" : $arb[2]=" وثلاثمائة"    ; 
break; 
case "4" : $arb[2]=" واربعمائة"     ; 
break; 
case "5" : $arb[2]=" وخمسمائة"       ; 
break; 
case "6" : $arb[2]=" وستمائة"         ; 
break; 
case "7" : $arb[2]=" وسبعمائة"         ; 
break; 
case "8" : $arb[2]=" وثمانمائة"         ; 
break; 
case "9" : $arb[2]=" وتسعمائة"           ; 
break; 
} 
} 

if ($i == 3) 
{ 
if($j==4) 
switch($te[$i]) 
{ 
case "0" : $arb[$i]=" "      ; 
break; 
case "1" : $arb[$i]=" ألف"    ; 
break; 
case "2" : $arb[$i]=" ألفان"    ; 
break; 
case "3" : $arb[$i]=" ثلاثة آلاف"    ; 
break; 
case "4" : $arb[$i]=" اربعة آلاف"     ; 
break; 
case "5" : $arb[$i]=" خمسة آلاف"       ; 
break; 
case "6" : $arb[$i]=" ستة آلاف"         ; 
break; 
case "7" : $arb[$i]=" سبعة آلاف"         ; 
break; 
case "8" : $arb[$i]=" ثمانية آلاف "         ; 
break; 
case "9" : $arb[$i]=" تسعة آلاف "           ; 
break; 
} 
elseif ($j==5) 

switch($te[$i]) 
{ 
case "0" : $arb[$i]=" "      ; 
break; 
case "1" : $arb[$i]=" واحد "    ; 
break; 
case "2" : if($te[6]=="1") $arb[$i]=" اثنا "; else $arb[$i]=" اثنان" ; 
break; 
case "3" : $arb[$i]=" ثلاثة "    ; 
break; 
case "4" : $arb[$i]=" اربعة "     ; 
break; 
case "5" : $arb[$i]=" خمسة "       ; 
break; 
case "6" : $arb[$i]=" ستة "         ; 
break; 
case "7" : $arb[$i]=" سبعة "         ; 
break; 
case "8" : $arb[$i]=" ثمانية "         ; 
break; 
case "9" : $arb[$i]=" تسعة "           ; 
} 

else 
switch($te[$i]) 
{ 
case "0" : $arb[$i]=" "      ; 
break; 
case "1" : $arb[$i]=" وواحد "    ; 
break; 
case "2" : if($te[4]=="1") $arb[$i]=" واثنا "; else $arb[$i]=" واثنان" ; 
break; 
case "3" : $arb[$i]=" وثلاثة "    ; 
break; 
case "4" : $arb[$i]=" واربعة "      ; 
break; 
case "5" : $arb[$i]=" وخمسة "       ; 
break; 
case "6" : $arb[$i]=" وستة "         ; 
break; 
case "7" : $arb[$i]=" وسبعة "         ; 
break; 
case "8" : $arb[$i]=" وثمانية "         ; 
break; 
case "9" : $arb[$i]=" وتسعة "           ; 
} 
} 
if ($i == 4) 
{ 
if($j==5 ) 
switch($te[$i]) 
{ 
case "0" : $arb[$i]=" "      ; 
break; 
case "1" : if($te[3]=="1") {$arb[3]=" " ;$arb[4]=" أحد عشر الفا";} elseif($te[3]=="0")$arb[4]=" عشرة آلاف";else$arb[$i]=" عشر الفا"    ; 
break; 
case "2" : $arb[$i]=" عشرون "    ; 
break; 
case "3" : $arb[$i]=" ثلاثون "    ; 
break; 
case "4" : $arb[$i]=" اربعون "     ; 
break; 
case "5" : $arb[$i]=" خمسون "       ; 
break; 
case "6" : $arb[$i]=" ستون "         ; 
break; 
case "7" : $arb[$i]=" سبعون "         ; 
break; 
case "8" : $arb[$i]=" ثمانون "         ; 
break; 
case "9" : $arb[$i]=" تسعون "           ; 
break; 
} 
else 
switch($te[$i]) 
{ 
case "0" : $arb[$i]=" "      ; 
break; 
case "1" : if($te[3]=="1") {$arb[3]=" " ;$arb[4]=" وأحد عشر الفا";} elseif($te[3]=="0")$arb[4]=" وعشرة آلاف";else$arb[$i]=" عشر الفا"    ; 
break; 
case "2" : $arb[$i]=" وعشرون "     ; 
break; 
case "3" : $arb[$i]=" وثلاثون "    ; 
break; 
case "4" : $arb[$i]=" واربعون "     ; 
break; 
case "5" : $arb[$i]=" وخمسون "       ; 
break; 
case "6" : $arb[$i]=" وستون "         ; 
break; 
case "7" : $arb[$i]=" وسبعون "         ; 
break; 
case "8" : $arb[$i]=" وثمانون "         ; 
break; 
case "9" : $arb[$i]=" وتسعون "           ; 
break; 
} 
} 
if ($i == 5) 
{ 
if ($j==6) 
switch($te[$i]) 
{ 
case "0" : $arb[$i]=" "      ; 
break; 
case "1" : $arb[$i]=" مائة "    ; 
break; 
case "2" : $arb[$i]=" مائتان "    ; 
break; 
case "3" : $arb[$i]=" ثلاثمائة "    ; 
break; 
case "4" : $arb[$i]=" اربعمائة "     ; 
break; 
case "5" : $arb[$i]=" خمسمائة "       ; 
break; 
case "6" : $arb[$i]=" ستمائة "         ; 
break; 
case "7" : $arb[$i]=" سبعمائة "           ; 
break; 
case "8" : $arb[$i]=" ثمانمائة "         ; 
break; 
case "9" : $arb[$i]=" تسعمائة "           ; 
break; 
} 
else 
switch($te[$i]) 
{ 
case "0" : $arb[$i]=" "      ; 
break; 
case "1" : $arb[$i]=" ومائة "    ; 
break; 
case "2" : $arb[$i]=" ومائتان "    ; 
break; 
case "3" : $arb[$i]=" وثلاثمائة "    ; 
break; 
case "4" : $arb[$i]=" واربعمائة "     ; 
break; 
case "5" : $arb[$i]=" وخمسمائة "       ; 
break; 
case "6" : $arb[$i]=" وستمائة "         ; 
break; 
case "7" : $arb[$i]=" وسبعمائة "           ; 
break; 
case "8" : $arb[$i]=" وثمانمائة "         ; 
break; 
case "9" : $arb[$i]=" وتسعمائة "           ; 
break; 
} 
} 

if ($i == 6) 
switch($te[$i]) 
{ 
case "0" : $arb[$i]=" "      ; 
break; 
case "1" : $arb[$i]=" مليون "    ; 
break; 
case "2" : $arb[$i]=" مليونان "    ; 
break; 
case "3" : $arb[$i]=" ثلاثة ملايين "    ; 
break; 
case "4" : $arb[$i]=" اربعة ملايين "     ; 
break; 
case "5" : $arb[$i]=" خمسة ملايين "       ; 
break; 
case "6" : $arb[$i]=" سته ملايين"         ; 
break; 
case "7" : $arb[$i]=" سبعة ملايين "           ; 
break; 
case "8" : $arb[$i]=" ثمانية ملايين "         ; 
break; 
case "9" : $arb[$i]=" تسعة ملايين "           ; 
break; 
} 
} 




if($j>4 && $te[4]!="1") 
$arb[4]=$arb[4]." الف "; 

$strarb=$arb[6].$arb[5].$arb[3].$arb[4].$arb[2].$arb[0].$arb[1]; 

return $strarb; 
} 


if(isset($_SESSION['id'])){
    $iduser = $_SESSION['id'];
    $user = employee::retreiveAllEmployee("WHERE MD5(MD5(`idm`)) = '$iduser'");
     if(empty($user) Or !is_array($user)){
         
    }else{
        $prs = @$user[0]['premssionm'];
        $smarty->assign("prs", $prs);
        $smarty->assign("iduser", $iduser);
    }
}
$iduser = @$user[0]['idm'];
$usernamema = @$user[0]['namema'];
$usernameme = @$user[0]['nameme'];
$pos = @$user[0]['premssionm'];
$smarty->assign('username',@$username);
$date  =  date("Y-m-d");
$yesterday  =  date("Y-m-d",time() - 60 * 60 * 24);
$time88 = date('H');
$hour = $time88+2;
if($hour >= 12){ $timing = 'am'; }else{ $timing = 'pm'; }
$orderactivetech = ordero::countOfOrder("where `orderdate` = '$today'  AND `resono` = 0 AND `process` > 0  AND `timing` = '$timing' AND `employeeid` = '$iduser'");
$ordernow = ordero::countOfOrder("where (`process` = 0  Or `process` = 7)  AND `resono` = 0 AND `orderdate` = '$today'");
$orderactive = ordero::countOfOrder("where `process` > 0 AND (`orderdate` = '$today' OR `odatedp` = '$today')");
$orderuning = ordero::countOfOrder("where `process` >= 3  AND `process` <= 8");
$orderuningtech = ordero::countOfOrder("where `process` > 2 AND `employeeid` = '$iduser' ");
$orderunactive = ordero::countOfOrder("where `process` = 0 AND `resono` = 0 AND  `orderdate` < '$today'");
$orderpen = ordero::countOfOrder("where `process` = 1 AND `resono` = 0  AND `orderdate` < '$today'");
$countOfOrdersNow = ordero::countOfOrder("WHERE `orderdate` = '$date'");
$ordercancle = ordero::countOfOrder("where `resono` > 0");
$smarty->assign('orderNowNav',$ordernow);
$smarty->assign('orderaActiveNav',$orderactive);
$smarty->assign('orderaActiveNavTech',$orderactivetech);
$smarty->assign('orderPenNav',$orderpen);
$smarty->assign('orderUnActive',$orderunactive);
$smarty->assign('ordeRuningNav',$orderuning);
$smarty->assign('ordeRuningNavTech',$orderuningtech);
$smarty->assign('countOfOrdersNow',$countOfOrdersNow);
$smarty->assign('orderCancle',$ordercancle);
//SELECT sum(`timeo`) FROM `order-repair` WHERE `active` = 1

$en = @$_GET['lang'];

 if($en == 'en'){
                $smarty->assign('titleco',"ALSUBTAIN  Campany");
                $smarty->assign('username',@$usernameme);
            }else{
                $smarty->assign('titleco',"مؤسسه السبطين التجاريه ");
                $smarty->assign('username',@$usernamema);
            }
            
$link = @$_SERVER[REQUEST_URI];
$stay = explode("?" , @$link);
$stayar = substr(@$stay[1], 8);
$smarty->assign('stay1',@$stay[0]);
$smarty->assign('stay2',@$stay[1]);
$smarty->assign('stayar',@$stayar);

$word = @array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
$smarty->assign('group',$word);


