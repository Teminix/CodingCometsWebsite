<html>

  <head>
    <title>CodingCometsWebiste</title>
    <link rel="stylesheet" href="Core-styles.css" type="text/css">
    <style>
    @keyframes enter {
      0%{
        filter:opacity(0%);
        transform: scale(2);
      }
      50%{
        filter: opacity(69%);
        transform: scale(1.5);

      }
      100% {
        filter: opacity(100%);
        transform: scale(1);
      }
    }
    @keyframes blur {
      from{filter: blur(0px)}
      to{filter: blur(5px);}
    }
    @keyframes enter-center {
      from{
        filter: opacity(0%);
      }
      to {
        filter: opacity(100%);
      }
    }

    html, body {
      margin:0;
    }

    #back {
      background-image: url("SpeedBanner.gif");
      background-size: cover;
      width: 100%;
      position:fixed;
      height:100%;
      animation-name: blur;
      animation-duration: 0.5s;
      animation-fill-mode: both;
      animation-delay: 2.5s
    }
    .title {
      color:white;
      font-size: 60px;
      font-family: xirod;
      animation-name:enter;
      animation-duration: 2s;
      animation-fill-mode: both;
    }
    center#text {
      font-family: Av;
      position: relative;
      z-index: 69;
      color:#adacaf;
      font-size: 40px;
      display: block;
      margin-top:30px;
      animation-name:enter-center;
      animation-duration: 2s;
      animation-fill-mode: both;
      animation-delay: 1s;
      border-top: 1px gray solid;
      border-bottom: 1px gray solid;
      transition: 0.5s;
      cursor: pointer;
    }
    center#text:hover {
      color:lightgreen;
      border:none;
      background-color: rgba(69,69,69,0.69);
    }
    center#text a {
      text-decoration: none;
      color:inherit;
    }
    </style>
  </head>
  <body>
    <div id="back"></div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br>
    <br>
    <br><br>
    <br>
    <br><br>
    <center class="title">Evolution</center>
    <center class="title">of Technology</center>
    <center id="text"><a href="Home.php">LEARN THE EVOLUTION OF TECHNOLOGY</a></center>
  </body>
</html>
