<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Your Email Address</title>
    <style>
        :root {
            --main-blue: linear-gradient(#2769da, #2575fc, #2769da);
            --main-white: #ffffff;
            --main-gray: #333;
            --button-text-white: #fff;
            --main-background-dark: #ddd;
            --footer-text: gray;

            --font-body-size: 16px;
            --font-botton: 16px;
            --footer-grey-area: 14px;
            --footer-footer-area: 12px;
            --font-header-area: 20px;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: var(--main-background-dark);
            color: var(--main-gray);
        }



        .container {
            max-width: 600px;
            padding: 20px;
            background-color: var(--main-white);
            border: 1px solid var(--main-background-dark);
            border-radius: 10px;
            width: 800px;
            margin: 10px auto;
        }

        .header {
            background: var(--main-blue);
            color: var(--main-white);
            text-align: center;
            padding: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .content {
            padding: 20px;
            text-align: center;
        }

        .content>p {
            text-align: left;
            font-size: var(--font-body-size);
        }

        .button {
            background: var(--main-blue);
            color: var(--button-text-white);
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 40%;
            border: none;
        }


        .button-top {
            margin: 2rem auto;
        }

        .footer-area {
            color: var(--footer-text);
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
            word-break: break-all;
            line-height: 1.5em;
            margin-top: 0;
            text-align: left;
            font-size: 12.7px;
        }



        .footer {
            text-align: center;
            background: var(--main-blue);
            padding: 10px;
            font-size: var(--footer-footer-area);
            color: var(--button-text-white);
        }

        .footer {
            color: var(--button-text-white);
        }

        .footer>.logo {
            margin: 0 auto;
            width: 4rem;
            box-sizing: border-box;
        }

        .footer>span {
            font-size: var(--footer-footer-area);
        }

        span>a {
            text-decoration: none;
            font-weight: 500;
            font-style: italic;
            color: var(--main-white):
        }

        .footer>a:hover,
        span>a:hover {
            color: var(--main-gray);
            text-decoration: underline;
        }

        @media only screen and (max-width: 600px) {

            .header {
                background: var(--main-blue);
                color: var(--main-white);
                text-align: center;
                padding: 10px;
            }

            .header>h1 {
                font-size: 25px;
            }

            .container {
                max-width: 350px;
                padding: 10px;
                margin: 10px auto;
            }

            .button {
                /* background-color: var(--main-blue); */
                background: linear-gradient(#2769da, #2575fc, #2769da);
                color: var(--button-text-white);
                padding: 3% 3%;
                text-decoration: none;
                border-radius: 5px;
                margin-bottom: 40%;
                border: none;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Header Section -->
        <div class="header">
            <h1>Verify Your Email Address</h1>
        </div>

        <!-- Content Section -->
        <div class="content">
            <p>Hello {!! $name !!},</p>
            <p>Thank you for registering with us! Please verify your email address by clicking the button below.</p>

            <div class="button-top">
                <!-- Verification Button -->
                <a href="{!! $url !!}" class="button">Verify Email Address</a>
            </div>

            <p>If you did not create an account, no further action is required.</p>

            <p>Best regards, <br> The {{ config('app.name') }} Team</p>
        </div>

        <div class="footer-area">
            <p>
                If you're having trouble clicking the "Verify Email Address" button, copy and paste the URL below into
                your web browser: <a href="{!! $url !!}">{!! $url !!}</a>
            </p>
        </div>

        <!-- Footer Section -->
        {{-- {{ $verificationUrl }} --}}
        <div class="footer">
            <p>
                This email was sent to you because you created a {{ env('APP_NAME') }} account with your email address.
                If you do not wish to receive email from {{ env('APP_NAME') }}
            </p>


            <br>
            <img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">

            <hr>

            <span>
                &#169; {{ date('Y') }} {{ config('app.name', 'Laravel') }} | <a href="http://" target="_blank"
                    rel="noopener noreferrer">Unsubscribe here</a>
            </span>
        </div>

    </div>
</body>

</html>
