<?php
    
  
    if(isset($_POST["add"]))
    {
        $sql="SELECT * FROM product WHERE id = :id FOR UPDATE";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $_POST['productID']);
        $stmt->execute();
        $result = $stmt->fetch();
    }


    //取出資料庫的資料
    $sql = "SELECT * FROM product WHERE id = 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch();

?>



<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
        
        <table border="2" align="center" bordercolor="#6666FF">
            <form method="POST" action="../Home/change">
            <tr>
                <td align="right"></tdalign>帳戶名稱</td>
                <td align="right"></tdalign>餘額</td>
            </tr>
            <tr>
                <td align="right"><?=$result['name']?></td>
                <td align="right"><?=$result['money']?></td>
            </tr>
            
            
                
                <input type="number" name="change"/>
                <input type="submit" value="存/提款"/>
                
               
            </form>
        </table>
    </body>
</html>