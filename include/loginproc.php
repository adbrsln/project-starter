<?php 
include 'function.php';
setstatus(); //triggers each time user login 
include 'db.php';

// Retrieve username and password from database according to user's input
$email=mysqli_real_escape_string($db,$_POST['emel']);
$password=mysqli_real_escape_string($db,$_POST['pass']);
$encrypted_mypassword=md5($password);
$sql = "SELECT * FROM pengguna WHERE (emel = '$email') and (katalaluan = '$encrypted_mypassword') AND statusAkaun = 1";
$login = mysqli_query($db,$sql);
$count = mysqli_num_rows($login) ;


// Check username and password match

 while($row = mysqli_fetch_assoc($login)){
        $_SESSION['sid'] = $row['id']; //staff id
        $sid = $row['id'];
        $_SESSION['jp'] =$row['jenisPengguna'];
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['img'] = $row['img'];
        $type = $row['jenisPengguna']; 
    }

 
if ($count != "") {
	if($type == 'negeri') {
        $str = '/negeri';
         redirect($str); 
    }else if ($type == 'daerah'){
        $sql = "SELECT  a.id as id, a.nama as nama FROM daerah a
        join pentadbirdaerah b on a.id = b.idDaerah
        WHERE b.idPengguna = $sid";
        $login = mysqli_query($db,$sql);
        while($row = mysqli_fetch_assoc($login)){
            $_SESSION['idDaerah'] = $row['id']; 
            $_SESSION['ndaerah'] = $row['nama']; 
        }
        $str = '/daerah';
        redirect($str); 
    }else if ($type == 'kumpulan'){
        $sql = "SELECT  a.id as id, a.nama as nama, a.noKumpulan as nok, c.nama as nd,c.callsign as cs FROM kumpulan a
        join pentadbirkumpulan b on a.id = b.idKumpulan
        join daerah c on a.idDaerah = c.id
        WHERE b.idPengguna = $sid";
        $login = mysqli_query($db,$sql);
        while($row = mysqli_fetch_assoc($login)){
            $_SESSION['idKumpulan'] = $row['id'];
            $_SESSION['nokump'] = $row['nok'];  
            $_SESSION['nkumpulan'] = $row['nama'].' '.$row['nok'].' '.$row['nd'];
            $_SESSION['callsign'] = $row['cs'];
        }
        $str = '/kumpulan';
        redirect($str); 
    }else if ($type == 'kelana'){
        $sql = "SELECT c.id as id , c.nama as nama, c.noKumpulan as nok, d.nama as nd  FROM pengguna a
                left join pendaftaranahli b on a.id = b.idPengguna 
                right join kumpulan c on b.idKumpulan = c.id
                right join daerah d on c.idDaerah = d.id
                WHERE a.id = $sid";
        $login = mysqli_query($db,$sql);
        while($row = mysqli_fetch_assoc($login)){
            $_SESSION['idKumpulan'] = $row['id']; 
            $_SESSION['nkumpulan'] = $row['nama'].' '.$row['nok'].' '.$row['nd'];
        }
        $str = '/kelana';
        redirect($str); 
    }		
				
		
	}
else {
    $str = '../main.php?s=lf';
    redirect($str); 
}   



?>