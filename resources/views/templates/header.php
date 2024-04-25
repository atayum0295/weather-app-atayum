<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Weather Application</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="fonts\fontawesome-free-5.15.4-web\css\all.min.css" rel="stylesheet">
    <link href="css\bootstrap.min.css" rel="stylesheet">
    <link href="css\style.css" rel="stylesheet">
    <link href="plugins\datatables\css\datatables_bootstrap5.css" rel="stylesheet">
    <link href="plugins\datatables\css\datatables_responsive.css" rel="stylesheet">
     <link rel="stylesheet" href="plugins/jquery-confirm/css/jquery-confirm.min.css">
    <style type="text/css">
.badge-sm {

    height: 15px;
    padding: 0px;
    color: white !important;
    cursor: pointer;
    padding-left: 3px;
    padding-right: 3px;
}


        .checked {
          color: orange;
        }

        .gallery{    
        margin-left: 3vw;     
        margin-right:3vw;  
        }    

        .zoom {      
        -webkit-transition: all 0.35s ease-in-out;    
        -moz-transition: all 0.35s ease-in-out;    
        transition: all 0.35s ease-in-out;     
        cursor: -webkit-zoom-in;      
        cursor: -moz-zoom-in;      
        cursor: zoom-in;  
        }     

        .zoom:hover,  
        .zoom:active,   
        .zoom:focus {
        -ms-transform: scale(2.5);    
        -moz-transform: scale(2.5);  
        -webkit-transform: scale(2.5);  
        -o-transform: scale(2.5);  
        transform: scale(2.5);    
        position:relative;      
        z-index:100;  
        }

 
        @media only screen and (max-width: 768px) {   
        .gallery {      
        margin-left: 15vw;       
        margin-right: 15vw;
        }

        .DivName {cursor: pointer}
        }


        table#example.dataTable tbody tr:hover {
          background-color: #E7FCFE ;
        }
         
        table#example.dataTable tbody tr:hover > .sorting_1 {
          background-color: #E7FCFE ;
        }


        #grad1 {
        background: rgb(168,179,181);
        background: linear-gradient(203deg, rgba(168,179,181,0.13209033613445376) 40%, rgba(148,204,222,0.33657212885154064) 74%, rgba(242,242,242,0.19931722689075626) 88%);
        }

        #grad2 {
        background: rgb(192,190,194);
        background: linear-gradient(214deg, rgba(192,190,194,0.10688025210084029) 8%, rgba(29,176,253,0.15718005952380953) 32%, rgba(69,226,252,0.06766456582633051) 62%);
        }


        #grad3 {
        background: rgb(192,190,194);
        background: linear-gradient(214deg, rgba(192,190,194,0.10688025210084029) 8%, rgba(29,176,253,0.15718005952380953) 32%, rgba(69,226,252,0.06766456582633051) 62%);
        }

        .box-shadow{
            box-shadow: 3px 3px 9px 1px #888888;
        }



/*loading with overlay*/
        .waitpage {
            background-color: grey;
            opacity: 0.6;
            height: 100%;
            left: 0;
            overflow: hidden;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 2147483647;
        }

        .waitpage-box {
            left: 44%;
            overflow: auto;
            padding: 16px;
            position: fixed;
            text-align: center;
            top: 35%;
             z-index: 2147483647;
        }
        .waitpage-box p img {
            color: #d0622b;
            float: left;
            font-size: 12px;
            font-style: italic;
            font-weight: bold;
        }
        .waitpage-box p span {
            float: left;
            font-size: .8125em;
            font-weight: bold;
            padding: 6px 0 0 12px;
            white-space: nowrap;
        }

/*loading with overlay*/
</style>
</head>

<body>



    <div class="container-xxl position-relative bg-white d-flex p-0">

