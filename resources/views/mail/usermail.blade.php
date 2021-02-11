<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .msg-container{
            border : 1px solid #eee;
            border-radius : 8px;
            padding : 1rem;
        }

        th, td{
            padding : 5px;
        }
        th{
            text-align:  left;
        }
        h3{
            line-height: 10px;
        }

        table{
            border: 1px solid #eee;
            padding : 10px;
            border-radius : 4px;
        }
    </style>
</head>
<body>
    {{-- @php
       $msgData = [
           "name" => "rifat",
           "email" => "rifatsarker71@gmail.com",
            "subject"=> "text",
            "message"=>"dummy text"
       ]

    
    @endphp --}}
   <div class="msg-container">
        <table>
        <tr class="name-row">
            <th>Name:</th>
            <td>{{$msgData["name"]}}</td>
        </tr>
        <tr class="email-row">
            <th>Email:</th>
            <td>{{$msgData["email"]}}</td>
        </tr>
        <tr class="subject-row">
            <th>Subject:</th>
            <td><h3>{{$msgData["subject"]}}</h3></td>
        </tr>
        
    </table>
    <div>
       
    </div>
    <div class="message">
        <p>Message:<br>{{$msgData["message"]}}</p>
    </div>
   </div>
    
</body>
</html>