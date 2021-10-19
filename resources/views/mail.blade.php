<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .app-main-content{
            text-align: left;
            padding: 8px;
            background-color: #ffffff;
        }
    </style>
</head> 
<body>
   
   <section>
    <table align='center' style='text-align:center; border: 1px solid #eee; border-radius: 8px;'>
        <tr>
            <td align='center' style='text-align:center;min-width:400px;max-width:680px;'>
            <div class="app-main-content">
                <p>
                <p style="text-transform: capitalize;"> Name: {{ $mailData['name'] }}</p> 
                <p style="text-transform: capitalize;"> Email: {{ $mailData['to_email'] }}</p> 
                <p style="text-transform: capitalize;"> Subject: {{ $mailData['subject'] }}</p> 
                <p style="text-transform: capitalize;"> Mobile Number: {{ $mailData['mobile_number'] }}</p> 
                <p style="text-transform: capitalize;"> Location: {{ $mailData['address'] }}</p> 
                <p style="text-transform: capitalize;"> Description: {{ $mailData['message'] }}</p> 
                   
                    <p> Thanks <br/> DAC-INTERIORS</p>
                </p>
        
            </div>
            </td>
        </tr>
    </table>
   </section>
</body>
</html>
