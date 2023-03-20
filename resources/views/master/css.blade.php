
{{--! Style Css  --}}


<style>  

#navbar {
            overflow: hidden;
            background-color: #666666;
            position: fixed;
            top: 0;
            width: 100%;
            box-shadow: 0 0 30px white ;
        }
        /* #links {
            display: flex ;
            justify-content: flex-end ;
        } */

        li {
            cursor: pointer;
        }

        #links li a:hover {
            color: rgb(21, 174, 216) ;
            text-decoration: underline ;
        }



        --------------------------------------------------------------*/
    .header {
        transition: all 0.5s;
        z-index: 997;
        padding: 30px 0;
    }

    .header.sticked {
        background: rgba(14, 29, 52, 0.9);
        padding: 15px 0;
        box-shadow: 0px 2px 20px rgba(14, 29, 52, 0.1);
    }

    .header .logo img {
        max-height: 40px;
        margin-right: 6px;
    }

    .header .logo h1 {
        font-size: 30px;
        margin: 0;
        font-weight: 700;
        color: #fff;
        font-family: var(--font-primary);
    }
    /* section in dahsboard */
    .contact10{
        width: 100%;
        min-height: 80vh;
        display: flex;
        align-items: center;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
    }

  .contact5{
    width: 100%;
        min-height: 100vh;
        display: flex;
        align-items: center;
        background-image: url(https://wallpaperaccess.com/full/5686368.jpg) ;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
    }
  .contact4{
        width: 100%;
        min-height: 100vh;
        display: flex;
        align-items: center;
    }
    .main{
        width: 100%;
        min-height: 100vh;
        display: flex;
        align-items: center;
        background-image: url('{{asset("/images/lastone.jpg")}}') ;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
    }
    .main h2{
    color: white;
    font-size: 50px;
    font-weight: 500px;
    }
    .main h2 span{
        color: black;
        font-size: 100px;
        font-weight: 500px;
        letter-spacing: 2px;
    }
    .main h3{
        color: black;
        font-size: 30px;
        font-weight: 500px;
        letter-spacing: 2px;
    }

    #cn {
        width: 300px ;
        border-radius: 20px ;
        font-size: 30px;
    }

    #idw {
        color: black;
        font-size: 50px;
        font-weight: 500px;
    }

    .main2 {
        width: 100%;
        min-height: 100vh;
        display: flex;
        align-items: center;
        background-image: url('{{asset("/images/backgroundtwo.png")}}') ;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
    }

    /* ---- form ---- */

    .main3 {
        width: 100%;
        min-height: 100vh;
        display: flex;
        align-items: center;
        background-image: url('{{asset("/images/backgroundsix.jpg")}}') ;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
    }

    /* ---- footer ---- */

    
/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
#footer {
    
    font-size: 19px;
    background: rgb(130, 130, 240);
    width: 100%;
  }
  
  
  #footer .footer-newsletter {
    padding: 10px 0;
    background: #f3f5fa;
    text-align: center;
    font-size: 5px;
    color: #444444;
  }
  
  #footer .foote r-newsletter h4 {
    font-size: 24px;
    margin: 0 0 20px 0;
    padding: 0;
    line-height: 1;
    font-weight: 600;
    color: #37517e;
  }
  
  #footer .footer-newsletter form {
    justify-content: space-around;
    display: flex;
    margin-top: 10px;
    background: #fff;
    padding: 6px 10px;
    position: relative;
    border-radius: 50px;
    font-size: large;
    font-style: italic;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.06);
    text-align: left;
  }
  
  #footer .footer-newsletter form input[type=email] {
    border: 0;
    padding: 4px 8px;
    width: calc(100% - 100px);
  }
  
  #footer .footer-newsletter form input[type=submit] {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    border: 0;
    background: none;
    font-size: 16px;
    padding: 0 20px;
    background: #47b2e4;
    color: #fff;
    transition: 0.3s;
    border-radius: 50px;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  }
  
  #footer .footer-newsletter form input[type=submit]:hover {
    background: #209dd8;
  }
  
  #footer .footer-top {
    padding: 60px 0 30px 0;
    background: #fff;
  }
  
  #footer .footer-top .footer-contact {
    margin-bottom: 30px;
  }
  
  #footer .footer-top .footer-contact h3 {
    font-size: 28px;
    margin: 0 0 10px 0;
    padding: 2px 0 2px 0;
    line-height: 1;
    text-transform: uppercase;
    font-weight: 900;
    color: #37517e;
  }
  
  #footer .footer-top .footer-contact p {
    font-size: 19px;
    line-height: 24px;
    margin-bottom: 0;
    font-family: "Jost", sans-serif;
    color: #5e5e5e;
  }
  
  #footer .footer-top h4 {
    font-size: 29px;
    font-weight: bold;
    color: #37517e;
    position: relative;
    padding-bottom: 12px;
  }
  
  #footer .footer-top .footer-links {
    margin-bottom: 10px;
  }
  
  #footer .footer-top .footer-links ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  
  #footer .footer-top .footer-links ul i {
    padding-right: 2px;
    color: #47b2e4;
    font-size: 18px;
    line-height: 1;
  }
  
  #footer .footer-top .footer-links ul li {
    padding: 10px 0;
    display: flex;
    align-items: center;
  }
  
  #footer .footer-top .footer-links ul li:first-child {
    padding-top: 0;
  }
  
  #footer .footer-top .footer-links ul a {
    color: #777777;
    transition: 0.8s;
    display: inline-block;
    line-height:0.9;
  }
  
  #footer .footer-top .footer-links ul a:hover {
    text-decoration: none;
    color: #47b2e4;
  }
  
  #footer .footer-top .social-links a {
    font-size: 18px;
    display: inline-block;
    
  
    background: #47b2e4;
    color: #fff;
    line-height: 1;
    padding: 8px 0;
    margin-right: 4px;
    border-radius: 50%;
  
    width: 36px;
    height: 36px;
    transition: 0.3s;
  }
  
  #footer .footer-top .social-links a:hover {
    background: #209dd8;
    color: #fff;
    text-decoration: none;
  }
  
  #footer .footer-bottom {
    padding-top: 30px;
    padding-bottom: 30px;
    color: #fff;
  }
  
  #footer .copyright {
    float: left;
  }
  
  #footer .credits {
    float: right;
    font-size: 13px;
  }
  
  #footer .credits a {
    transition: 0.3s;
  }
  
  @media (max-width: 768px) {
    #footer .footer-bottom {
      padding-top: 20px;
      padding-bottom: 20px;
    }
  
    #footer .copyright,
    #footer .credits {
      text-align: center;
      float: none;
    }
  
    #footer .credits {
      padding-top: 4px;
    }
  }
  
  .social-icons {
    color:#313437;
    background-color:#fff;
    text-align:center;
    padding:70px 0;
  }
  
  @media (max-width:767px) {
    .social-icons {
      padding:50px 0;
    }
  }
  
  .social-icons i {
    font-size:32px;
    display:inline-block;
    color:#757980;
    margin:0 10px;
    width:60px;
    height:60px;
    border:1px solid #c8ced7;
    text-align:center;
    border-radius:50%;
    line-height:60px;
  }
  
  /* -------------- CONTACT CSS ------------- */
  /*--------------------------------------------------------------
    # Contact Section
    --------------------------------------------------------------*/
    .contact .info-item+.info-item {
        margin-top: 40px;
    }

    .contact .info-item i {
        font-size: 20px;
        background: var(--color-primary);
        color: #fff;
        width: 44px;
        height: 44px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 4px;
        transition: all 0.3s ease-in-out;
        margin-right: 15px;
    }

    .contact .info-item h4 {
        padding: 0;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 5px;
        color: var(--color-secondary);
    }

    .contact .info-item p {
        padding: 0;
        margin-bottom: 0;
        font-size: 14px;
        color: rgba(14, 29, 52, 0.8);
    }

    .contact .php-email-form {
        width: 100%;
        background: #fff;
    }

    .contact .php-email-form .form-group {
        padding-bottom: 8px;
    }

    .contact .php-email-form .error-message {
        display: none;
        color: #fff;
        background: #df1529;
        text-align: left;
        padding: 15px;
        font-weight: 600;
    }

    .contact .php-email-form .error-message br+br {
        margin-top: 25px;
    }

    .contact .php-email-form .sent-message {
        display: none;
        color: #fff;
        background: #059652;
        text-align: center;
        padding: 15px;
        font-weight: 600;
    }

    .contact .php-email-form .loading {
        display: none;
        background: #fff;
        text-align: center;
        padding: 15px;
    }

    .contact .php-email-form .loading:before {
        content: "";
        display: inline-block;
        border-radius: 50%;
        width: 24px;
        height: 24px;
        margin: 0 10px -6px 0;
        border: 3px solid #059652;
        border-top-color: #fff;
        -webkit-animation: animate-loading 1s linear infinite;
        animation: animate-loading 1s linear infinite;
    }

    .contact .php-email-form input,
    .contact .php-email-form textarea {
        border-radius: 4px;
        box-shadow: none;
        font-size: 14px;
    }

    .contact .php-email-form input {
        height: 44px;
    }

    .contact .php-email-form textarea {
        padding: 10px 12px;
    }

    .contact .php-email-form button[type=submit] {
        background: var(--color-primary);
        border: 0;
        padding: 10px 35px;
        color: #fff;
        transition: 0.4s;
        border-radius: 5px;
    }

    .contact .php-email-form button[type=submit]:hover {
        background: rgba(13, 66, 255, 0.8);
    }

    @keyframes animate-loading {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    /* Fonts */
    :root {
        --font-default: "Open Sans", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        --font-primary: "Inter", sans-serif;
        --font-secondary: "Poppins", sans-serif;
        }
    
        /* Colors */
        :root {
        --color-default: #0a0d13;
        --color-primary: #0d42ff;
        --color-secondary: #0e1d34;
        }
    
        /* Smooth scroll behavior */
        :root {
        scroll-behavior: smooth;
        }
    
        /*--------------------------------------------------------------
        # Breadcrumbs
        --------------------------------------------------------------*/
        .breadcrumbs .page-header {
        padding: 140px 0 80px 0;
        position: relative;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        }
    
        .breadcrumbs .page-header:before {
        content: "";
        background-color: rgba(14, 29, 52, 0.8);
        position: absolute;
        inset: 0;
        }
    
        .breadcrumbs .page-header h2 {
        font-size: 56px;
        font-weight: 500;
        color: #fff;
        font-family: var(--font-secondary);
        }
    
        .breadcrumbs .page-header p {
        color: rgba(255, 255, 255, 0.8);
        }

        /* Fonts */
        :root {
            --font-default: "Open Sans", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --font-primary: "Inter", sans-serif;
            --font-secondary: "Poppins", sans-serif;
        }
    
        /* Colors */
        :root {
            --color-default: #0a0d13;
            --color-primary: #0d42ff;
            --color-secondary: #0e1d34;
        }
    
        /* Smooth scroll behavior */
        :root {
            scroll-behavior: smooth;
        }
    
        /*--------------------------------------------------------------
        # Get a Quote Section
        --------------------------------------------------------------*/
     
        }
        .get-a-quote .quote-bg {
            min-height: 500px;
            background-size: cover;
            background-position: center;
        }
    
        .get-a-quote .php-email-form {
            background: #f3f6fc;
            padding: 40px;
            height: 100%;
        }
    
        @media (max-width: 575px) {
            .get-a-quote .php-email-form {
                padding: 20px;
            }
        }
    
        .get-a-quote .php-email-form h3 {
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
    
        .get-a-quote .php-email-form h4 {
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin: 20px 0 0 0;
        }
    
        .get-a-quote .php-email-form p {
            font-size: 14px;
            margin-bottom: 20px;
        }
    
        .get-a-quote .php-email-form .error-message {
            display: none;
            color: #fff;
            background: #df1529;
            text-align: left;
            padding: 15px;
            margin-bottom: 24px;
            font-weight: 600;
        }
    
        .get-a-quote .php-email-form .sent-message {
            display: none;
            color: #fff;
            background: #059652;
            text-align: center;
            padding: 15px;
            margin-bottom: 24px;
            font-weight: 600;
        }
    
        .get-a-quote .php-email-form .loading {
            display: none;
            background: #fff;
            text-align: center;
            padding: 15px;
            margin-bottom: 24px;
        }
    
        .get-a-quote .php-email-form .loading:before {
            content: "";
            display: inline-block;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            margin: 0 10px -6px 0;
            border: 3px solid #059652;
            border-top-color: #fff;
            -webkit-animation: animate-loading 1s linear infinite;
            animation: animate-loading 1s linear infinite;
        }
    
        .get-a-quote .php-email-form input,
        .get-a-quote .php-email-form textarea {
            border-radius: 0;
            box-shadow: none;
            font-size: 14px;
            border-radius: 0;
        }
    
        .get-a-quote .php-email-form input:focus,
        .get-a-quote .php-email-form textarea:focus {
            border-color: var(--color-primary);
        }
    
        .get-a-quote .php-email-form input {
            padding: 12px 15px;
        }
    
        .get-a-quote .php-email-form textarea {
            padding: 12px 15px;
        }
    
        .get-a-quote .php-email-form button[type=submit] {
            background: var(--color-primary);
            border: 0;
            padding: 10px 30px;
            color: #fff;
            transition: 0.4s;
            border-radius: 4px;
        }
    
        .get-a-quote .php-email-form button[type=submit]:hover {
            background: rgba(13, 66, 255, 0.8);
        }
    
        @-webkit-keyframes animate-loading {
            0% {
                transform: rotate(0deg);
            }
    
            100% {
                transform: rotate(360deg);
            }
        }
    
        @keyframes animate-loading {
            0% {
                transform: rotate(0deg);
            }
    
            100% {
                transform: rotate(360deg);
            }
        }

        #form {
        border: solid 5px black;
        padding-top: 30px; 
        padding-bottom: 30px; 
        padding-left: 30px ;
        padding-right: 30px ;
        border-radius: 20px;
        box-shadow: 0 0 100px black ;
      }

      /* ------------------------------------------------------------ */
      
      .article-list {
        color:#313437;
        background-color:#fff;
    }
    
    .article-list p {
        color:#7d8285;
    }
    
    .article-list h2 {
        font-weight:bold;
        margin-bottom:40px;
        padding-top:40px;
        color:inherit;
    }
    
    @media (max-width:767px) {
        .article-list h2 {
        margin-bottom:25px;
        padding-top:25px;
        font-size:24px;
        }
    }
    
    .article-list .intro {
        font-size:16px;
        max-width:500px;
        margin:0 auto;
    }
    
    .article-list .intro p {
        margin-bottom:0;
    }
    
    .article-list .articles {
        padding-bottom:40px;
    }
    
    .article-list .item {
        padding-top:50px;
        min-height:425px;
        text-align:center;
    }
    
    .article-list .item .name {
        font-weight:bold;
        font-size:16px;
        margin-top:20px;
        color:inherit;
    }
    
    .article-list .item .description {
        font-size:14px;
        margin-top:15px;
        margin-bottom:0;
    }
    
    .article-list .item .action {
        font-size:24px;
        width:24px;
        margin:22px auto 0;
        line-height:1;
        display:block;
        color:#4f86c3;
        opacity:0.85;
        transition:opacity 0.2s;
        text-decoration:none;
    }
    
    .article-list .item .action:hover {
        opacity:1;
    }







    /* Fonts */
    :root {
    --font-default: "Open Sans", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    --font-primary: "Inter", sans-serif;
    --font-secondary: "Poppins", sans-serif;
    }

    /* Colors */
    :root {
    --color-default: #0a0d13;
    --color-primary: #0d42ff;
    --color-secondary: #0e1d34;
    }

    /* Smooth scroll behavior */
    :root {
    scroll-behavior: smooth;
    }

    /*--------------------------------------------------------------
    # Breadcrumbs
    --------------------------------------------------------------*/
    .breadcrumbs .page-header {
    padding: 140px 0 80px 0;
    position: relative;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    }

    .breadcrumbs .page-header:before {
    content: "";
    background-color: rgba(14, 29, 52, 0.8);
    position: absolute;
    inset: 0;
    }

    .breadcrumbs .page-header h2 {
    font-size: 56px;
    font-weight: 500;
    color: #fff;
    font-family: var(--font-secondary);
    }

    .breadcrumbs .page-header p {
    color: rgba(255, 255, 255, 0.8);
    }

    .navbar ul {
    margin: 0;
    padding: 0;
    display: flex;
    list-style: none;
    align-items: center;
  }
  

  .navbar .dropdown ul {
    display: block;
    position: absolute;
    left: 14px;
    top: calc(100% + 30px);
    margin: 0;
    padding: 10px 0;
    z-index: 99;
    opacity: 0;
    visibility: hidden;
    background: #fff;
    box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
    transition: 0.3s;
    border-radius: 4px;
  }

  .navbar .dropdown ul li {
    min-width: 200px;
  }

  .navbar .dropdown ul a {
    padding: 10px 20px;
    font-size: 15px;
    text-transform: none;
    font-weight: 400;
    color: var(--color-secondary);
  }

  .navbar .dropdown ul a i {
    font-size: 12px;
  }

  .navbar .dropdown ul a:hover,
  .navbar .dropdown ul .active:hover,
  .navbar .dropdown ul li:hover>a {
    color: var(--color-primary);
  }

  .navbar .dropdown:hover>ul {
    opacity: 1;
    top: 100%;
    visibility: visible;
  }

  .navbar .dropdown .dropdown ul {
    top: 0;
    left: calc(100% - 30px);
    visibility: hidden;
  }

  .navbar .dropdown .dropdown:hover>ul {
    opacity: 1;
    top: 0;
    left: 100%;
    visibility: visible;
  }


  /* Fonts */
  :root {
    --font-default: "Open Sans", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    --font-primary: "Inter", sans-serif;
    --font-secondary: "Poppins", sans-serif;
    }

    /* Colors */
    :root {
    --color-default: #0a0d13;
    --color-primary: #0d42ff;
    --color-secondary: #0e1d34;
    }

    /* Smooth scroll behavior */
    :root {
    scroll-behavior: smooth;
    }

    /*--------------------------------------------------------------
    # Breadcrumbs
    --------------------------------------------------------------*/
    .breadcrumbs .page-header {
    padding: 140px 0 80px 0;
    position: relative;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    }

    .breadcrumbs .page-header:before {
    content: "";
    background-color: rgba(14, 29, 52, 0.8);
    position: absolute;
    inset: 0;
    }

    .breadcrumbs .page-header h2 {
    font-size: 56px;
    font-weight: 500;
    color: #fff;
    font-family: var(--font-secondary);
    }

    .breadcrumbs .page-header p {
    color: rgba(255, 255, 255, 0.8);
    }

  
    .features-clean {
      color:#313437;
      background-color:#fff;
      padding-bottom:30px;
    }
    
    @media (max-width:767px) {
      .features-clean {
        padding-bottom:10px;
      }
    }
    
    .features-clean p {
      color:#7d8285;
    }
    
    .features-clean h2 {
      font-weight:bold;
      margin-bottom:40px;
      padding-top:40px;
      color:inherit;
    }
    
    @media (max-width:767px) {
      .features-clean h2 {
        margin-bottom:25px;
        padding-top:25px;
        font-size:24px;
      }
    }
    
    .features-clean .intro {
      font-size:16px;
      max-width:500px;
      margin:0 auto 60px;
    }
    
    @media (max-width:767px) {
      .features-clean .intro {
        margin-bottom:40px;
      }
    }
    
    .features-clean .item {
      min-height:100px;
      padding-left:80px;
      margin-bottom:40px;
    }
    
    @media (max-width:767px) {
      .features-clean .item {
        min-height:0;
      }
    }
    
    .features-clean .item .name {
      font-size:20px;
      font-weight:bold;
      margin-top:0;
      margin-bottom:20px;
      color:inherit;
    }
    
    .features-clean .item .description {
      font-size:15px;
      margin-bottom:0;
    }
    
    .features-clean .item .icon {
      font-size:40px;
      color:#1485ee;
      float:left;
      margin-left:-65px;
    }






    a {
  color:blue;
  text-decoration: none;
}

a:hover {
  color: #73c5eb;
  text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: "Jost", sans-serif;
}

/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/

.section-bg {
  background-color: none;
}

.section-title {
  text-align: center;
  padding-bottom: 30px;
}

.section-title h2 {
  font-size: 32px;
  font-weight: bold;
  text-transform: uppercase;
  margin-bottom: 20px;
  padding-bottom: 20px;
  position: relative;
  color: #37517e;
}

.section-title h2::before {
  content: "";
  position: absolute;
  display: block;
  width: 120px;
  height: 1px;
  background: #ddd;
  bottom: 1px;
  left: calc(50% - 60px);
}

.section-title h2::after {
  content: "";
  position: absolute;
  display: block;
  width: 40px;
  height: 3px;
  background: #47b2e4;
  bottom: 0;
  left: calc(50% - 20px);
}

.section-title p {
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Clients
--------------------------------------------------------------*/
.clients {
  padding: 12px 0;
  text-align: center;
}

.clients img {
  max-width: 45%;
  transition: all 0.4s ease-in-out;
  display: inline-block;
  padding: 15px 0;
  filter: grayscale(100);
}

.clients img:hover {
  filter: none;
  transform: scale(1.1);
}

@media (max-width: 768px) {
  .clients img {
    max-width: 40%;
  }
}

/*--------------------------------------------------------------
# Services
--------------------------------------------------------------*/
.services .icon-box {
  box-shadow: 0px 0 25px 0 rgba(0, 0, 0, 0.1);
  padding: 50px 30px;
  transition: all ease-in-out 0.4s;
  background: #fff;
}

.services .icon-box .icon {
  margin-bottom: 10px;
}

.services .icon-box .icon i {
  color: #47b2e4;
  font-size: 36px;
  transition: 0.3s;
}

.services .icon-box h4 {
  font-weight: 500;
  margin-bottom: 15px;
  font-size: 24px;
}

.services .icon-box h4 a {
  color: #37517e;
  transition: ease-in-out 0.3s;
}

.services .icon-box p {
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
}

.services .icon-box:hover {
  transform: translateY(-10px);
}

.services .icon-box:hover h4 a {
  color: #47b2e4;
}

/*--------------------------------------------------------------
# Team
--------------------------------------------------------------*/
.team .member {
  position: relative;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  padding: 30px;
  border-radius: 5px;
  background: #fff;
  transition: 0.5s;
  height: 100%;
}

.team .member .pic {
  overflow: hidden;
  width: 180px;
  border-radius: 50%;
}

.team .member .pic img {
  transition: ease-in-out 0.3s;
}

.team .member:hover {
  transform: translateY(-10px);
}

.team .member .member-info {
  padding-left: 30px;
}

.team .member h4 {
  font-weight: 700;
  margin-bottom: 5px;
  font-size: 20px;
  color: #37517e;
}

.team .member span {
  display: block;
  font-size: 15px;
  padding-bottom: 10px;
  position: relative;
  font-weight: 500;
}

.team .member span::after {
  content: "";
  position: absolute;
  display: block;
  width: 50px;
  height: 1px;
  background: #cbd6e9;
  bottom: 0;
  left: 0;
}

.team .member p {
  margin: 10px 0 0 0;
  font-size: 14px;
}

.team .member .social {
  margin-top: 12px;
  display: flex;
  align-items: center;
  justify-content: flex-start;
}

.team .member .social a {
  transition: ease-in-out 0.3s;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50px;
  width: 32px;
  height: 32px;
  background: #eff2f8;
}

.team .member .social a i {
  color: #37517e;
  font-size: 16px;
  margin: 0 2px;
}

.team .member .social a:hover {
  background: #47b2e4;
}

.team .member .social a:hover i {
  color: #fff;
}

.team .member .social a+a {
  margin-left: 8px;
}

</style>