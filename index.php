<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,300&family=Roboto:wght@500&display=swap");
        * {
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            height: 100%;
            background: linear-gradient(
                    180deg,
                    #fff 15.28%,
                    rgba(155, 115, 79, 0.96) 100%
            );
            font-family: Roboto;
        }
        .panel {
            width: 90rem;
            height: 64rem;
        }
        .login-text {
            color: #9b734f;
            font-size: 2.1rem;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }
        .login-panel {
            width: 30rem;
            height: 32rem;
            flex-shrink: 0;
            border-radius: 2.65rem;
            background: #fff;
        }
        .login-button {
            width: 26.98994rem;
            height: 3.80513rem;
            flex-shrink: 0;
            background: linear-gradient(
                    90deg,
                    #9b734f 5.41%,
                    #9b734f 47.9%,
                    #9b734f 90.81%
            );
            border: none;
            border-radius: 2.65rem;
        }
        .login-button p {
            color: #fff;
            text-align: center;
            font-family: Roboto;
            font-size: 1.59288rem;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="logo">
        <img src="./src/images/logo.png" alt="logo" />
    </div>

    <div class="login-main">
        <div class="login-text">Logowanie</div>
        <div class="login-panel">
            <form action="#">
                <label for="email"
                ><img src="./src/images/Vector.svg" alt=""
                    /></label>
                <input
                    type="text"
                    id="email"
                    name="email"
                    placeholder="Email"
                    required
                />
                <label for="password"
                ><img src="./src/images/Union.svg" alt="union"
                    /></label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Hasło"
                    required
                />
                <button type="submit" class="login-button"><p>Zaloguj</p></button>
                <a href="#">Nie pamietasz hasła?</a>
            </form>
            <div class="login-register">
                <p>
                    Nie masz konta? <span><a href="">Zarejestruj się</a></span>
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
