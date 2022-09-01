<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
   <link href='img/logo.png' rel='shortcut icon'>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <!-- Google Font -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

   <style>
      body {
         background-image: url(img/bg.jpg);
         background-size: cover;
      }

      .container {
         padding-top: 3%;
      }

      .row {
         display: flex;
         justify-content: center;
      }

      .logo img {
         height: 120px;
         margin-bottom: 80px;
      }

      .parent {
         width: 10rem;
         height: 10rem;
         border: 2px solid white;
         overflow: hidden;
         position: relative;
         display: inline-block;
         cursor: pointer;
         border-radius: 5px;
      }

      .child {
         height: 100%;
         width: 100%;
         background-size: cover;
         background-repeat: no-repeat;
         -webkit-transition: all .5s;
         -moz-transition: all .5s;
         -o-transition: all .5s;
         transition: all .5s;
      }

      /* Several different images */
      .myarmy {
         background-image: url(img/myarmy.png);
      }

      .benspec {
         background-image: url(img/benspec.png);
      }

      .dlp {
         background-image: url(img/dlp.png);
      }

      .vadela {
         background-image: url(img/vadela.png);
      }

      .unspec {
         background-image: url(img/unspec.png);
      }

      p {
         font-size: 35px;
         color: #6D6E71 !important;
         font-family: sans-serif;
         text-align: center;
         font-size: 14px;
         cursor: pointer;
         text-decoration: none;
         font-family: 'Ubuntu', sans-serif;
         font-weight: bold;
      }

      a {
         text-decoration: none;
      }

      .parent:hover .child,
      .parent:focus .child {
         -ms-transform: scale(1.2);
         -moz-transform: scale(1.2);
         -webkit-transform: scale(1.2);
         -o-transform: scale(1.2);
         transform: scale(1.2);
      }

      .parent:hover .child:before,
      .parent:focus .child:before {
         display: block;
      }
   </style>
   <title>RAM 7</title>
</head>

<body>
   <div class="container">
      <div class="row text-center">
         <div class="logo">
            <img src="img/logo.png" alt="">
         </div>
      </div>

      <div class="row text-center">
         <div class="col-md-2">
            <a target="_blank" href="http://myarmy.dalapa.id">
               <div class="parent">
                  <div class="child myarmy">
                  </div>
               </div>
               <p>MYARMY</p>
            </a>
         </div>
         <div class="col-md-2">
            <a target="_blank" href="http://10.144.12.16/login.php">
               <div class="parent">
                  <div class="child benspec">
                  </div>
               </div>
               <p>BENSPEC</p>
            </a>
         </div>
         <div class="col-md-2">
            <a target="_blank" href="https://dalapa.id/login">
               <div class="parent">
                  <div class="child dlp">
                  </div>
               </div>
               <p>DALAPA</p>
            </a>
         </div>
         <div class="col-md-2">
            <a target="_blank" href="https://vadela.ram7telkom.com/">
               <div class="parent">
                  <div class="child vadela">
                  </div>
               </div>
               <p>VADELA</p>
            </a>
         </div>
         <div class="col-md-2">
            <a target="_blank" href="https://unspec.ram7telkom.com/">
               <div class="parent">
                  <div class="child unspec">
                  </div>
               </div>
               <p href="">UNSPRC</p>
            </a>
         </div>
      </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>