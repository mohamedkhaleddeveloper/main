<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$dbh = new PDO("mysql:dbhost=localhost;dbname=cairowed_geust", "cairowed_geust", "5faqO#?HTM}$");

class visitor
{
    // attrs
    private $id;
	private $cat;
	private $name;
	private $bname;
	private $phone;
	private $address;
	private $email;
	private $occupation;
	private $marital;
	private $fbacc;
	private $inacc;
	private $website;
	private $age;
    private $orname;
    private $prename;
    private $jobtitle;        
	private $message;
    // methods
    public function __construct($cat, $name, $bname, $phone, $address, $email, $occupation, $marital, $fbacc, $inacc, $website, $age, $orname, $prename, $jobtitle, $message, $id="")
    {
        $this->cat = $cat;
        $this->name = $name;
        $this->bname = $bname;
        $this->phone = $phone;
        $this->address = $address;
        $this->email = $email;
        $this->occupation = $occupation;
        $this->marital =  $marital;
        $this->fbacc = $fbacc;
        $this->inacc = $inacc;
        $this->website = $website;
        $this->age = $age;
        $this->orname = $orname;
        $this->prename = $prename;
        $this->jobtitle = $jobtitle;
        $this->message = $message;
        $this->id = $id;
        }
    
    // Insert data into database
    public function addUsers()
    {
        global $dbh;
        $sql = $dbh->prepare("INSERT INTO users(cat, name ,bname ,phone ,address ,email ,occupation ,marital ,fbacc ,inacc ,website ,age ,orname ,prename ,jobtitle ,message)
		VALUES('$this->cat', '$this->name', '$this->bname', '$this->phone', '$this->address', '$this->email', '$this->occupation', '$this->marital', '$this->fbacc', '$this->inacc', '$this->website', '$this->age', '$this->orname',
                '$this->prename', '$this->jobtitle', '$this->message')");
        $sql->execute();
    }
    
    public static function checkByPhone($phone)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `users` WHERE `phone` = '$phone'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
    
        public static function checkByEmail($email)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT COUNT(*) FROM `users` WHERE `email` = '$email'");
        $sql->execute();
        $result = $sql->fetchColumn();
        return $result;
    }
    
     public static function retreiveAllGeust($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `users` $query");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
            $data[]= $fetch;
        }
        
        return $data;
    }
    
     public static function countOfGeust($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `users` $query");
        $sql->execute();
        $number_of_rows = $sql->rowCount();
        return $number_of_rows;
    }
    
     public static function retreiveVisitorById($id)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `users` WHERE id='$id'");
        $sql->execute();
        $fetch = $sql->fetch(PDO::FETCH_ASSOC);
        return $fetch;
    }

    
    
      public static function retreiveAllVisitorSend()
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `users` where send = 1");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
            $data[]= $fetch;
        }
        
        return $data;
    }
        
      public static function retreiveAllGeustSend($query)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `users` where $query");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
            $data[]= $fetch;
        }
        
        return $data;
    }
    
    
     public static function updateGeustById($ids)
    {
        global $dbh;
        $sql = $dbh->prepare("UPDATE `users` SET `semail` = '1' WHERE `id` = '$ids'");
        $sql->execute();
    }

    
     public static function updateGeustByIdM($ids)
    {
        global $dbh;
        $sql = $dbh->prepare("UPDATE `users` SET `mobile` = '1' WHERE `id` = '$ids'");
        $sql->execute();
    }

     public static function blackList($ids)
    {
        global $dbh;
        $sql = $dbh->prepare("UPDATE `users` SET `blacklist` = '1' WHERE `id` = '$ids'");
        $sql->execute();
    }
    
	 public static function pen($ids)
    {
        global $dbh;
        $sql = $dbh->prepare("UPDATE `users` SET `blacklist` = '2' WHERE `id` = '$ids'");
        $sql->execute();
    }
	
     public static function checkAdmin($admin,$password)
    {
        global $dbh;
        $sql = $dbh->prepare("select * from `admin` WHERE `admin`='$admin' AND `pass`='$password'");
        $sql->execute();
        $result = $sql->rowCount();
        return $result;
    }
    
    /*
    // delete data from database
    public static function deleteEditorById($id)
    {
        global $dbh;
        $sql = $dbh->prepare("DELETE FROM editor WHERE id='$id'");
        $sql->execute();
    }
    
    // update
    
    public function updateEditor()
    {
        global $dbh;
        $sql = $dbh->prepare("UPDATE editor SET name='$this->name' WHERE id='$this->id'");
        $sql->execute();
    }
    
    // retreive editor bt id
    
    public static function retreiveEditorById($id)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM editor WHERE id='$id'");
        $sql->execute();
        $fetch = $sql->fetch(PDO::FETCH_ASSOC);
        return $fetch;
    }
    
    // retreiveAll EDITORS
    public static function retreiveAllEditors()
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM editor");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
            $data[]= $fetch;
        }
        
        return $data;
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