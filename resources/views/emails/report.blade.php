<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
</head>
<body>
    <center>
        <h2>Report email</h2>
        <table width="640" cellspacing="0" cellpadding="0" border="0" align="center" style="max-width:640px; width:100%;" bgcolor="#FFFFFF">
            <tr>
                <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
            </tr>
            <tr style="border: 1px solid #000">
                <td align="center" valign="top" style="border: 1px solid #000">#</td>
                <td align="center" valign="top" style="border: 1px solid #000">Client</td>
                <td align="center" valign="top" style="border: 1px solid #000">Product</td>
                <td align="center" valign="top" style="border: 1px solid #000">Total</td>
                <td align="center" valign="top" style="border: 1px solid #000">Date</td>
            </tr>

            @foreach($items as $item)
                <tr>
                    <td align="center" valign="top" style="border: 1px solid #000">{{$loop->index + 1}}</td>
                    <td align="center" valign="top" style="border: 1px solid #000">{{$item['client']}}</td>
                    <td align="center" valign="top" style="border: 1px solid #000">{{$item['product']}}</td>
                    <td align="center" valign="top" style="border: 1px solid #000">{{$item['total']}}</td>
                    <td align="center" valign="top" style="border: 1px solid #000">{{$item['date']}}</td>
                </tr>
            @endforeach
            <tr>
                <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
            </tr>
        </table>
    </center>
    </body>
</html>
