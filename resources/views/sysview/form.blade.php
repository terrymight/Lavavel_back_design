<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        font-size: 16px;
    }


    form {
        background: rgb(192, 188, 188);
        max-width: 600px;
        min-width: 300px;
        width: 60vw;
        padding: 10px 40px;
        margin: 90px auto;
        border-radius: 7px;
        padding-bottom: 2em;
    }

    label {
        margin: 0.6rem 0;
        display: block;
    }

    input {
        min-height: 2em;

    }

    #name,
    #email,
    #password {
        width: 100%;
        margin: 10px 0 0 0;
        border-radius: 5px;
        padding: 5px;
        border: none;
    }

    input[type="submit"] {
        padding: 8px 0;
        margin: 2em 0;
        display: block;
        align-self: flex-start;
        min-width: 100px;
        width: 30%;
        cursor: pointer;
        border-radius: 4px;
        border: none;
    }
</style>

<body>
    <div class="forms">
        <form method="POST" action="{{ route('forms') }}">
            @csrf

            <!-- Equivalent to... -->
            <label for="name">
                Enter Full Name: <input type="text" name="name" id="name" placeholder="John Doe" autofocus />
            </label>

            <label for="email">
                Enter Email: <input type="email" name="email" id="email" placeholder="email@mail.com"
                    aria-autocomplete="none" />
            </label>

            <label for="password">
                Password: <input type="password" name="password" id="password" />
            </label>

            <input type="submit" value="Submit Values">

            <input type="hidden" id="browser_language" name="browser_language">
        </form>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var language = navigator.language || navigator.userLanguage;
            document.getElementById("browser_language").value = language;
        });
    </script>
</body>

</html>
