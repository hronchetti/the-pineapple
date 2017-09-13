<?php
$emailContent = <<<EOT
<table width="600" align="center" cellpadding="0" cellspacing="0" border="0" frame="0" bgcolor="#fff" style="border-spacing: 0; padding: 0; border: 0; font-family: Arial, Helvetica, sans-serif; background-color: #fff; border-collapse: collapse; color: #220901; font-size: 16px; line-height: 26px;">
    <tbody>
        <tr>
            <td height="30" width="200" style="font-size: 26px;"><b>Booking Details</b></td>
            <td height="30" width="400"></td>
        </tr>
        <tr>
            <td height="15" width="200"></td>
            <!--SPACING ROW-->
            <td height="15" width="400"></td>
        </tr>
        <tr>
            <td height="30" width="200"><b>Event Details</b></td>
            <td height="30" width="400"></td>
        </tr>
        <tr>
            <td height="15" width="200"></td>
            <!--SPACING ROW-->
            <td height="15" width="400"></td>
        </tr>
        <tr>
            <td height="30" width="200">Event Date</td>
            <td height="30" width="400">$eventDate</td>
        </tr>
        <tr>
            <td height="30" width="200">Event Type:</td>
            <td height="30" width="400">$eventType</td>
        </tr>
        <tr>
            <td height="30" width="200">Expected attendance:</td>
            <td height="30" width="400">$attendance</td>
        </tr>
        <tr>
            <td height="15" width="200"></td>
            <!--SPACING ROW-->
            <td height="15" width="400"></td>
        </tr>
        <tr>
            <td height="30" width="200"><b>Customer Details</b></td>
            <td height="30" width="400"></td>
        </tr>
        <tr>
            <td height="15" width="200"></td>
            <!--SPACING ROW-->
            <td height="15" width="400"></td>
        </tr>
        <tr>
            <td height="30" width="200">Customer full name:</td>
            <td height="30" width="400">$name</td>
        </tr>
        <tr>
            <td height="30" width="200">Customer phone:</td>
            <td height="30" width="400">$phone</td>
        </tr>
        <tr>
            <td height="30" width="200">Customer email:</td>
            <td>$email</td>
        </tr>
        <tr>
            <td height="30" width="200">Customer message (Optional):</td>
            <td width="400">$message</td>
        </tr>
        <tr>
            <td height="45" width="200"></td>
            <!--SPACING ROW-->
            <td height="45" width="400"></td>
        </tr>
        <tr>
            <td height="30" width="200" style="font-size: 12px; line-height: 18px; color: #ccc; vertical-align: top;">Source:</td>
            <td height="30" width="400" style="font-size: 12px; line-height: 18px; color: #ccc;">This email has come from The Pineapple website booking form.<br>
            If you're not sure why you've recieved this email please contact <a href="mailto:emma@thepineapple.pub" style="color: #85C7F2;">emma@thepineapple.pub</a>
            </td>
        </tr>
    </tbody>
</table>
EOT;
?>