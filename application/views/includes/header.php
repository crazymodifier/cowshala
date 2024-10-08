<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Title &  Description-->
  <title><?=$title?> | Cowshala</title>
  <meta name="description" content="Your first step towards healthy food habit">
  <!--<meta name="keywords" content="HTML, CSS, JavaScript">-->
  <!--Favicons-->
  <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url()?>dist/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url()?>dist/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>dist/img/favicon-16x16.png">
    <link rel="manifest" href="<?=base_url()?>dist/img/site.webmanifest">
  
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="<?=base_url('dist/css/adminlte.css')?>">
  <link rel="stylesheet" href="<?=base_url('plugins/slick/css/slick.css')?>">
  <link rel="stylesheet" href="<?=base_url('plugins/slick/css/slick-theme.css')?>">
  <link rel="stylesheet" href="<?=base_url('dist/css/crazymodifier.css')?>">
  <link rel="stylesheet" href="<?=base_url('dist/css/cards.css')?>">
  <link rel="stylesheet" href="<?=base_url('dist/css/flaticon.css')?>">
  <link href="<?=base_url('dist/css')?>/vgnav.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url('dist/css')?>/vgnav-theme.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?=base_url('plugins/fontawesome-free/css/all.min.css')?>">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Vidaloka&display=swap');
    .font-1
    {
      font-family: -apple-system, BlinkMacSystemFont ,"Vidaloka", Arial,serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
    }
    
  </style>
  <script src="<?=base_url('plugins/jquery/jquery.min.js')?>"></script>
  
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  @media screen and (max-width: 576px) {
      .display-2{
          font-size:3.5rem;
      }
    }
  
  .btn-md{
    padding:.7rem 2.5rem;
  }
    .btn{
      position:relative;
      overflow:hidden;
    }
    .my-header{
      /* position:fixed; */
      width:100%;
      top:0;
      z-index:20000;
    }
    .cm-nav-link{
      color:black;
    }
    .cm-section
    {
      padding:3rem;
    }
    h1, h2, h3, h4, h5 {
      font-weight: 500;
    }
    .cm-icon-circle{
      width:100px;
      height:100px;
      border-radius:50%;
      background:#f8f8f8;
      margin:auto;
      transition:.4s ease-out;
    }
    .cm-icon{
      transition:.4s ease-out;
    }
    .cm-iconbox:hover .cm-icon-circle{
      background:#000000;
    }
    .cm-iconbox:hover .cm-icon{
      color:white;
    }
    .cm-iconbox:hover .svg-icon{fill:white}
    .counter-numbers{
      font-size:3rem;
      font-weight:bold;
    }
    .devider{
      width:50px;
      height:2px;
      background:white;
      display:block;
      margin-bottom:1rem;
    }
    .cm-nav-link{
      position:relative;
      transition:.4s ease-out;
      padding:5px 0;
      font-weight:600
    }
    .cm-nav-link:before{
      transition:.4s ease-out;
      content:"";
      width:0;
      height:2px;
      bottom:0;
      position:absolute;
      background:black;
    }
    .cm-nav-link:hover:before,.cm-nav-link:active:before,.cm-nav-link:active:before{
      width:100%;
    }
    .vg-nav-sidebar{
      z-index:-1;
    }
    .vg-nav-sidebar.show{
      z-index:99999;
    }
    .vg-nav>ul>li
    {
      padding:20px;
    }
  </style>
</head>
<body>
  