<?PHP

namespace App;

class CRUD
{
    public function insert($un,$pw)
    {
        require('config.php');
        
        // Database Insert
		return mysqli_query($conn,"INSERT INTO tbl_user (`uname`,`passwd`) VALUES ('".$un."','".$pw."')");
    }
}

?>