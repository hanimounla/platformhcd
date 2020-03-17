<style>
    * {
        box-sizing: border-box;
    }

    html,
    body {
        margin: 0;
        font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;
        color: rgb(3, 1, 1);
        background: #FFF;
        overflow: hidden;
    }

    .landing-inner {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #FFF;
        text-align: center;
        padding-top: 50px;
    }

    .landing {
        position: relative;
        /* background-image: url('https://preview.ibb.co/c7Drsn/showcase.jpg'); */
        background: #000;
        background-size: cover;
        background-position: center;
        height: 100vh;
    }

    .landing h1 {
        font-size: 50px;
    }

    .landing p {
        font-size: 20px;
    }

    .countdown {
        font-size: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .countdown div {
        padding: 20px;
        border: 1px #fff solid;
        border-radius: 10px;
        background: #000;
        opacity: 0.7;
        margin: 5px;
    }

    .countdown span {
        display: block;
        font-size: 25px;
    }

    @media (max-width: 650px) {
        .landing img {
            width: 70%;
        }

        .landing h1 {
            font-size: 40px;
        }

        .countdown {
            font-size: 40px;
            flex-direction: column;
        }

        .countdown div {
            display: none;
        }

        .countdown div:first-child {
            display: block;
            width: 80%;
            padding: 10px;
        }
    }


    @media (max-height: 600px) {
        img {
            width: 70%;
        }

        p {
            display: none;
        }
    }

    @media (max-height: 400px) {
        img {
            padding-bottom: 30px;
        }

        h1 {
            display: none;
        }
    }
</style>
<link rel="icon" type="image/png" href="/images/logo_tab.jpg">
<title>Platform Human Capital Development | Comming soon</title>
<section class="landing">
    <div class="landing-inner">
        <img src="/images/background.jpg" style="width: 40%;" />
         <!--<h1 style="color: #bc1bec">Platform Human Capital Development</h1> -->
        <h2 style="color: #5a31ab">Coming Soon...</h2>
    </div>
</section>