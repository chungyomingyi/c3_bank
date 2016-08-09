<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>

        <table border="2" align="center" bordercolor="#6666FF">
            <form method="trade" action="../Home/transMoney">
            <tr>
                <td align="right"></tdalign>帳戶名稱</td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="name" id="name" value="" placeholder="輸入帳戶" />
                </td>
            </tr>
            <tr>
                <td>
                    <input type=radio value="saveMoney" name="trade" checked ><font color="#000000"> 存款</font>
                    <input type=radio value="getMoney" name="trade" ><font color="#000000"> 取款</font>
                </td>
            </tr>
            <tr>
                <td align="right"></tdalign>輸入金額</td>
            </tr>
            <tr>
                <td>
                    <input type"number" name="money" id="money" value="" plasceholder="輸入金額" />
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="送出交易" >
                </td>
            </tr>

            </form>
        </table>
    </body>
</html>