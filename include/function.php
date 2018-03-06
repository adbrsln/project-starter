<?php session_start(); ?>
<?php
include 'variable.php';
function redirect($url) //redirect function
    {
        if (!headers_sent())
        {    
            header('Location: '.$url);
            exit;
            }
        else
            {   
            echo '<script type="text/javascript">';
            echo 'window.location.href="'.$url.'";';
            echo '</script>';
            echo '<noscript>';
            echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
            echo '</noscript>'; exit;
        }
    }

function check($val) //check user authentication
    {
        if (!isset($_SESSION['sid'])) {
            $str = '../main.php';
            redirect($str);
           }
        else{
            if($val == 1){ //negeri
                switch ($_SESSION['jp']) {
                                      
                    case 'daerah':
                    $str = '/daerah';
                    redirect($str);
                    break;
    
                    case 'kumpulan':
                    $str = '/kumpulan';
                    redirect($str);
                    break;
    
                    case 'kelana':
                    $str = '/kelana';
                    redirect($str);
                    break;
                    
                }
            }else if($val == 2){ //daerah
                switch ($_SESSION['jp']) {
                                      
                    case 'negeri':
                    $str = '/negeri';
                    redirect($str);
                    break;
    
                    case 'kumpulan':
                    $str = '/kumpulan';
                    redirect($str);
                    break;
    
                    case 'kelana':
                    $str = '/kelana';
                    redirect($str);
                    break;
                    
                }
            }else if($val == 3){ //kumpulan
                switch ($_SESSION['jp']) {
                                      
                    case 'daerah':
                    $str = '/daerah';
                    redirect($str);
                    break;
    
                    case 'negeri':
                    $str = '/negeri';
                    redirect($str);
                    break;
    
                    case 'kelana':
                    $str = '/kelana';
                    redirect($str);
                    break;
                    
                }
            }else if($val == 4){ //kelana
                switch ($_SESSION['jp']) {
                                      
                    case 'daerah':
                    $str = '/daerah';
                    redirect($str);
                    break;
    
                    case 'kumpulan':
                    $str = '/kumpulan';
                    redirect($str);
                    break;
    
                    case 'negeri':
                    $str = '/negeri';
                    redirect($str);
                    break;
                    
                }
            }
        }
    }
function check2() //check user authentication
    {
        if (isset($_SESSION['sid'])) {
                switch ($_SESSION['jp']) {
                    case 'negeri':
                    $str = '/negeri';
                    redirect($str);
                    break;
                    
                    case 'daerah':
                    $str = '/daerah';
                    redirect($str);
                    break;

                    case 'kumpulan':
                    $str = '/kumpulan';
                    redirect($str);
                    break;

                    case 'kelana':
                    $str = '/kelana';
                    redirect($str);
                    break;
                    
                }
           }
    }

function logout(){
    session_destroy();
}

function convertDate($val){
    $date = date("d/m/Y", strtotime($val));
    return $date;
}
function convertDate2($val){
    $date = date("d F Y", strtotime($val));
    return $date;
}
function convertDateDb($val){
    $date = date("Y-m-d", strtotime($val));
    return $date;
}
function generateNoKeahlian($val1,$val2,$val3){
    $result = "PPM".$val1.$val3.$val2;
    return $result;
}

function checkactivitydate($val1,$val2){
    if($val1 <= $val2){
        $result = 1; //set status of aktiviti dah lepas
    }else 
        $result = 0 ;
    
    return $result;
}

function setstatus(){
    include 'db.php';
    $sql = "SELECT id,idYuran, tarikhMulaAktiviti from aktiviti where `status` = 0";
    $result22 = mysqli_query($db,$sql);

    while($rows2 = mysqli_fetch_assoc($result22)){
        $id = $rows2['id'];
        $yid = $rows2['idYuran'];
        $val1 = $rows2['tarikhMulaAktiviti'];
        $val2 = date("Y-m-d");

        $result = checkactivitydate($val1,$val2);
        if($result == 1){
            $query = "UPDATE aktiviti SET `status` = 1 where id = $id ";
            mysqli_query($db,$query) or die ("Error Query ");
            $query = "FLUSH PRIVILEGES";

            $query = "UPDATE yuran SET `status` = 1 where id = $yid";
            mysqli_query($db,$query) or die ("Error Query ");
            
        }
    }
}


?>