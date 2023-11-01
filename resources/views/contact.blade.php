<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2.common-heading {
            text-align: center;
            font-size: 30px;
            margin-top: 50px;
        }

        iframe {
            display: block;
            width: 100%;
            height: 450px;
            border: 0;
            margin: 20px 0;
        }

        .container {
            text-align: center;
        }

        .contact-form {
            max-width: 50rem;
            margin: auto;
        }

        .contact-inputs {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .contact-inputs input[type="text"],
        .contact-inputs input[type="email"],
        .contact-inputs textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .contact-inputs input[type="submit"] {
            cursor: pointer;
            font-size: 18px;
            background-color: #008CBA;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
            transition: background-color 0.3s;
        }

        .contact-inputs input[type="submit"]:hover {
            background-color: #00587A;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

</head>

<body>


    <div>
        <h2 class="common-heading"> <a href="/" style="font-size: 28px; text-decoration: none; color: #7089b2; margin-top: 60px; margin-left: 60px;">
            <i class="fa-solid fa-arrow-left fa-bounce fa-2xl" style="color: #385d9f;"></i>Go Back
        </a>Contact page</h2>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4285.610793189974!2d84.85212109196056!3d26.650872782914995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39933733881dcadf%3A0x205f0af7725a632d!2sVirendra%20Singh%20fertilizer%20shop!5e1!3m2!1sen!2sin!4v1696680336721!5m2!1sen!2sin"
            width="100%" height="450" style="border: 0;" allowfullscreen loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="container">
            <div class="contact-form">
                <form action="my code here" method="POST" class="contact-inputs">
                    <input type="text" placeholder="Username" name="username" required autocomplete="off" />
                    <input type="email" name="Email" placeholder="Email" autocomplete="off" required />
                    <textarea name="Message" cols="30" rows="10" required autocomplete="off" placeholder="Enter your message"></textarea>
                    <input type="submit" value="Send" />
                </form>
            </div>
        </div>
    </div>
</body>

</html>
