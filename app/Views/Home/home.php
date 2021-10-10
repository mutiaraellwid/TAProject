<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>River-Monitoring</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- File CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/dist/css/home.css">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://cdn.lordicon.com//libs/frhvbuzj/lord-icon-2.0.2.js"></script>
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body>
    <div class="popup">
        <div class="contentBox">
            <div class="imageBox">
                <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop"
                    colors="primary:#109173,secondary:#f4c89c" stroke="61" style="width:300px;height:300px">
                </lord-icon>
            </div>
            <div class="textBox">
                <div>
                    <h1>Welcome!</h1>
                    <h3>This Is Dashboard Monitoring River</h3>
                    <p>-----------</p>
                    <p>if you want to know more info,</p>
                    <p> Let's Explore Together!</p>
                    <a href="<?= base_url() ?>/Home/about">GO</a>
                </div>
            </div>
        </div>
    </div>


    <script>
    const popup = document.querySelector('.popup');
    const a = document.querySelector('.a');

    window.onload = function() {
        setTimeout(function() {
            popup.style.display = "block";
        }, 200)
    }
    close.addEventListener('click', () => {
        popup.style.display = "none";
    })
    </script>
</body>

</html>