<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>New Contact Submission</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #F5F0E6 ;
            margin: 0;
            padding: 0;
            color: #3b3b3b;
        }

        .container {
            max-width: 650px;
            margin: 40px auto;
            background-color: #F5F0E6;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        h1 {
            color: #3b3b3b;
            font-size: 24px;
            text-align: center;
            margin-bottom: 25px;
            border-bottom: 2px solid #e7cfa1;
            padding-bottom: 10px;
        }

        .info-row {
            margin-bottom: 18px;
            font-size: 16px;
        }

        .info-row strong {
            display: inline-block;
            width: 150px;
            color: #3b3b3b;
        }

        .message-box {
            background-color: #fdf7eb;
            padding: 15px;
            border-radius: 8px;
            margin-top: 8px;
            font-size: 15px;
            line-height: 1.5;
            border-top: 4px solid #e7cfa1;
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.08);
        }

        .footer {
            margin-top: 35px;
            font-size: 13px;
            color: #8d8d8d;
            text-align: center;
            border-top: 1px solid #e5e5e5;
            padding-top: 15px;
        }

        @media screen and (max-width: 600px) {
            .container {
                padding: 25px 20px;
                margin: 20px;
            }

            .info-row strong {
                display: block;
                margin-bottom: 5px;
                width: auto;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div style="text-align: center; margin-left: auto; margin-right: auto; margin-bottom: 20px;">
            <img src="http://l11.test/assets/img/SUNRISE4.png" style="width:150px; height:auto;" alt="Logo" />
        </div>

        <h1>New Contact from <strong style="color: rgb(211, 192, 105)">{{ $contactCreated->company }}</strong></h1>

        <div class="info-row"><strong>First Name:</strong> {{ $contactCreated->fname }}</div>
        <div class="info-row"><strong>Last Name:</strong> {{ $contactCreated->lname }}</div>
        <div class="info-row"><strong>Position:</strong> {{ $contactCreated->position }}</div>
        <div class="info-row"><strong>Phone Number:</strong> {{ $contactCreated->phone }}</div>
        <div class="info-row"><strong>Email:</strong> {{ $contactCreated->email }}</div>

        <div class="info-row">
            <strong>Message:</strong>
            <div class="message-box">
                {{ $contactCreated->message }}
            </div>
        </div>

        <div class="footer">
            This email was generated automatically. Please do not reply.
        </div>
    </div>
</body>

</html>
