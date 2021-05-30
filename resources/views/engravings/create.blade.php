<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Couples Tree</title>
        <link rel="icon" href="{{ asset('img') }}/logoicon.png">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.9/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">

        <style>
            body {
                height: 100%;
                margin: 0;
            }

            .ct-button{
                background-color: #FFB6C1 !important;
                border-color: #FFB6C1 !important;
                color: #000000 !important;
            }

            #bg 
            {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: row;
                position: relative;
                background-image: url("{{ asset('img') }}/barktile3.jpg");

                /* background-size: cover; */
                background-repeat: repeat;
                background-position: center center;
                max-height: 300vh !important;
                /* overflow-y: auto !important; */
                width: 100%;
                min-height: 100vh;
                height: 100%;
                overflow: hidden;
                left: 0px;
                top: 0px;
            }

            .nav {
                top:0;
                left:0;
                height: 5%;
                width: 60px;	
                overflow: hidden;
                position: absolute;
                background: #FFB6C1;
                color: #000000;
                border: 1px solid #ffffff;
            }
            .stretch {
                width:100%;
                height:100%;
                
            }
            .scroll-left {
                top:0;
                left:0;
                height: 5%;
                width: 100%;	
                overflow: hidden;
                position: fixed;
                background: #FFB6C1;
                color: #000000;
                border: 1px solid #ffffff;
            }
            .scroll-left p {
                position: absolute;
                width: 100%;
                height: 100%;
                margin: 0;
                line-height: 50px;
                text-align: center;
                /* Starting position */
                transform:translateX(100%);
                /* Apply animation to this element */
                animation: scroll-left 18s linear infinite;
            }
            /* Move it (define the animation) */
            @keyframes scroll-left {
                0%   {
                transform: translateX(100%); 		
                }
                100% {
                transform: translateX(-100%); 
                }
            }

            .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                height: 5%;
                background-color: #FFB6C1;
                color: #000000;
                text-align: center;
                border-style: solid;
                border-width: 2px;
            }
            #previewBlock{
                background-image: url("{{ asset('img') }}/barktile2.jpg");

                background-size: cover;
                background-repeat: no-repeat;
                background-position: center center;
                width: 50vh;
                height: 50vh;
                border-radius: 15px;
            }

            #productSelect{
                width: 50vh;
            }
            .onebyone{
                width: 5vh;
                height: 5vh;
                background-image:url("{{ asset('img') }}/barktile2.jpg");
                border-radius: 10px;
                }
            .twobytwo{
                width: 10vh;
                height: 10vh;
                background-image:url("{{ asset('img') }}/barktile2.jpg");
                border-radius: 10px;
                }
            .threebythree{
                width: 15vh;
                height: 15vh;
                background-image:url("{{ asset('img') }}/barktile2.jpg");
                border-radius: 10px;
                }
            .fourbyfour{
                width: 20vh;
                height: 20vh;
                background-image:url("{{ asset('img') }}/barktile2.jpg");
                border-radius: 10px;
                }

                .frameSelect{
                width: 10vh;
                height: 10vh;
                /* background-image:url("{{ asset('img') }}/barktiletest.jpg"); */
                /* border-radius: 10px; */
                }

                .fontColorSelect{
                width: 10vh;
                height: 10vh;
                /* background-image:url("{{ asset('img') }}/barktiletest.jpg"); */
                /* border-radius: 10px; */
                }

            #receiptBlock{
                background-color: rgba(255,255,255,0.90);
                color: #ffffff;
                padding-top: 2%;
                padding-right: 2%;
                padding-left: 2%;
                padding-bottom: 0 !important;
                position: relative;
                border-radius: 10px;
                height: 50vh;
                /* max-height: 50vh !important;
                    overflow-y: auto !important; */
            }
            #receiptArea{
                background-color: rgba(255,255,255,0.90);
                color: #000000;
                padding-top: 1%;
                padding-right: 0%;
                padding-left: 0%;
                padding-bottom: 0 !important;
                position: relative;
                border-radius: 10px;
                height: 28.5vh;
                max-height: 28.5vh !important;
                    overflow-y: auto !important;
            }

            #createForm
            {
                /* margin-top: 4%; */
                /* display: flex; */
                /* justify-content: center; */
                /* align-items: center; */
                background-color: rgba(100,100,100,0.90);
                color: #ffffff;
                padding-top: 2%;
                padding-right: 2%;
                padding-left: 2%;
                padding-bottom: 0 !important;
                position: relative;
                /* top: 15px; */
                transform: translateX(0);
                /* left: 25%; */
                width: 80% !important;
                /* height: 80% !important; */
                border-radius: 10px;
                /* max-height: 80vh !important;
                overflow-y: auto !important; */
            }
            #noFrameL{
                background-image:url("{{ asset('img') }}/frames/none.png");
            }
            #silverFrameL{
                background-image:url("{{ asset('img') }}/frames/silverframe.png");
            }
            #goldFrameL{
                background-image:url("{{ asset('img') }}/frames/goldframe.png");
            }
            #ropeFrameL{
                background-image:url("{{ asset('img') }}/frames/ropeframe.png");
            }


            #default-colorL{
                background-image:url("{{ asset('img') }}/text/default.png");
            }

            #silver-colorL{
                background-image:url("{{ asset('img') }}/text/silver.png");
            }

            #gold-colorL{
                background-image:url("{{ asset('img') }}/text/gold.png");
            }
            @media only screen 
            and (max-width : 500px) {
                .frameSelect{
                width: 5vh;
                height: 5vh;
                /* background-image:url("{{ asset('img') }}/barktiletest.jpg"); */
                /* border-radius: 10px; */
                }
                .fontColorSelect{
                width: 5vh;
                height: 5vh;
                /* background-image:url("{{ asset('img') }}/barktiletest.jpg"); */
                /* border-radius: 10px; */
                }
                #receiptBlock{
                background-color: rgba(255,255,255,0.90);
                color: #ffffff;
                padding-top: 2%;
                padding-right: 2%;
                padding-left: 2%;
                padding-bottom: 0 !important;
                position: relative;
                border-radius: 10px;
                height: 35vh;
                /* max-height: 25vh !important;
                    overflow-y: auto !important; */
                }

                #receiptArea{
                background-color: rgba(255,255,255,0.90);
                color: #000000;
                padding-top: 1%;
                padding-right: 0%;
                padding-left: 0%;
                padding-bottom: 0 !important;
                position: relative;
                border-radius: 10px;
                height: 14vh;
                max-height: 14vh !important;
                    overflow-y: auto !important;
            }
                .onebyone{
                width: 2.5vh;
                height: 2.5vh;
                background-image:url("{{ asset('img') }}/barktile2.jpg");
                border-radius: 10px;
                }
                .twobytwo{
                    width: 5vh;
                    height: 5vh;
                    background-image:url("{{ asset('img') }}/barktile2.jpg");
                    border-radius: 10px;
                    }
                .threebythree{
                    width: 7.5vh;
                    height: 7.5vh;
                    background-image:url("{{ asset('img') }}/barktile2.jpg");
                    border-radius: 10px;
                    }
                .fourbyfour{
                    width: 10vh;
                    height: 10vh;
                    background-image:url("{{ asset('img') }}/barktile2.jpg");
                    border-radius: 10px;
                    }

                .scroll-left p {
                position: absolute;
                width: 250%;
                height: 100%;
                margin: 0;
                line-height: 50px;
                text-align: center;
                /* Starting position */
                transform:translateX(100%);
                /* Apply animation to this element */
                animation: scroll-left 13s linear infinite;
                }

                #previewBlock{
                    background-image: url("{{ asset('img') }}/barktiletest.jpg");

                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center center;
                    width: 25vh;
                    height: 25vh;
                    border-radius: 15px;

                }
                #productSelect{
                    width: 25vh;
                }
                #createForm
                {
                    /* margin-top: 4%; */
                    /* display: flex; */
                    /* justify-content: center; */
                    /* align-items: center; */
                    background-color: rgba(100,100,100,0.90);
                    color: #ffffff;
                    padding-top: 2%;
                    padding-right: 2%;
                    padding-left: 2%;
                    padding-bottom: 0 !important;
                    position: relative;
                    /* top: 15px; */
                    transform: translateX(0);
                    /* left: 25%; */
                    width: 80% !important;
                    /* height: 80% !important; */
                    border-radius: 10px;
                    max-height: 80vh !important;
                    overflow-y: auto !important;
                }

                
            }


            h2.question
            {
                font-weight: bold;
                text-align: center;
                padding: 10px 0;
                background-color: #FFB6C1 !important;
                mix-blend-mode: normal !important;
                width: 100%;
                position: relative;
                text-transform: uppercase;
                border-radius: 10px;
            }
            .logo{
                position: absolute;
                background-image: url("{{ asset('img') }}/logo1alpha.png");

                background-size: cover;
                background-repeat: no-repeat;
                background-position: center center;
                /* overflow-y: auto !important; */
                width: 120px;
                height: 95px;
                left: 0px;
                top: 6%;
            }
            #page1{
                display: block;
            }

            #page2{
                display: none;
            }

            select { text-align-last:center; }
            #imageOptions{
                width: 100%;
                height: 100%;
                color: #000000;
            }
            #imageSize{
                width: 100%;
                height: 100%;
                color: #000000;
            }
            #imageFrame{
                width: 100%;
                height: 100%;
                color: #000000;
            }
            .cc-selector input{
                margin:0;padding:0;
                -webkit-appearance:none;
                -moz-appearance:none;
                        appearance:none;
            }

            .cc-selector-2 input{
                position:absolute;
                z-index:999;
            }




            .cc-selector-2 input:active +.drinkcard-cc, .cc-selector input:active +.drinkcard-cc{opacity: .9;}
            .cc-selector-2 input:checked +.drinkcard-cc, .cc-selector input:checked +.drinkcard-cc{
                -webkit-filter: none;
                -moz-filter: none;
                        filter: none;
            }
            .drinkcard-cc{
                cursor:pointer;
                background-size:contain;
                background-repeat:no-repeat;
                display:inline-block;
                /* width:64px;height:64px; */
                -webkit-transition: all 100ms ease-in;
                -moz-transition: all 100ms ease-in;
                        transition: all 100ms ease-in;
                -webkit-filter: brightness(1.8) grayscale(1) opacity(.7);
                -moz-filter: brightness(1.8) grayscale(1) opacity(.7);
                        filter: brightness(1.8) grayscale(1) opacity(.7);
            }
            .drinkcard-cc:hover{
                -webkit-filter: brightness(1.2) grayscale(.5) opacity(.9);
                -moz-filter: brightness(1.2) grayscale(.5) opacity(.9);
                        filter: brightness(1.2) grayscale(.5) opacity(.9);
            }

            .disable-div {
                pointer-events: none;
            }

            /* Center the loader */
			#loader {
			position: absolute;
			left: 50%;
			top: 50%;
			z-index: 1;
			width: 120px;
			height: 120px;
			margin: -76px 0 0 -76px;
			border: 16px solid #f3f3f3;
			border-radius: 50%;
			border-top: 16px solid #3498db;
			-webkit-animation: spin 2s linear infinite;
			animation: spin 2s linear infinite;
			display: none;
			}

			@-webkit-keyframes spin {
			0% { -webkit-transform: rotate(0deg); }
			100% { -webkit-transform: rotate(360deg); }
			}

			@keyframes spin {
			0% { transform: rotate(0deg); }
			100% { transform: rotate(360deg); }
			}

			/* Add animation to "page content" */
			.animate-bottom {
			position: relative;
			-webkit-animation-name: animatebottom;
			-webkit-animation-duration: 1s;
			animation-name: animatebottom;
			animation-duration: 1s
			}

			@-webkit-keyframes animatebottom {
			from { bottom:-100px; opacity:0 } 
			to { bottom:0px; opacity:1 }
			}

			@keyframes animatebottom { 
			from{ bottom:-100px; opacity:0 } 
			to{ bottom:0; opacity:1 }
			}

            .tree-button {
            background-color: #FFB6C1 !important;
            border-color: #FFB6C1 !important;
            color: #000000 !important;
        }

        </style>
    </head>
    <body>
    <div id="bg">

        <!-- <div class="logo"></div> -->
        <div id="createForm">
            <form method="POST" class="create-form" id="create-form" action="{{ route('engravings.store') }}">
                <div id="page1">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <h2 class="question" style="color: #000;">New Engraving</h2>
                            </div>
                        </div>
                        
                        <!-- First Row - First Name & Surname -->
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="edtName">Your Name</label>
                                <input type="text" class="form-control" placeholder="Your Name" id="edtName" name="edtName" maxlength = "8"/>
                            </div>
                            <div class="col-sm-6 form-group">
                                    <label for="edtPName">Partners Name</label>
                                <input type="text" class="form-control" placeholder="Partners Name" id="edtPName" name="edtPName" maxlength = "8"/>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="edtMessage">Message</label>
                                <textarea class="form-control" id="edtMessage" name="edtMessage" rows="1" maxlength = "18"></textarea>
                                
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="form-group">
                                <button type="button" onclick="showPage2();" class="btn ct-button">{{ __('Next') }}</button>

                            </div>
                        </div>
                        
                    </div>
                </div>
                <div id="page2">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <h2 class="question" style="color: #000;">Preview</h2>
                            </div>
                        </div>
                        <!-- <div class="row justify-content-center">
                            <div class="form-group">
                                <select id="productSelect" class="form-select custom-select" aria-label="Default select example">
                                    <option selected value="1">$1 - 1x1</option>
                                    <option value="2">$2 - 2x2</option>
                                    <option value="3">$3 - 3x3</option>
                                </select>
                            </div>
                        </div> -->
                        <div id="imageCreation">
                            <div class="row justify-content-center">
                                <div class="form-group col-md-4" align="center">
                                    <div id="loader"></div>
                                    <div id="previewBlock"></div>
                                </div>
                                <div class="form-group col-md-5" align="center">
                                    <div id="imageOptions">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-sm-12 form-group">
                                                    <div id="imageSize">
                                                        <div class="cc-selector">
                                                            <input checked="checked" id="onebyone" type="radio" name="image-size" value="1" />
                                                            <label class="drinkcard-cc onebyone" for="onebyone"></label>
                                                            <input id="twobytwo" type="radio" name="image-size" value="2" />
                                                            <label class="drinkcard-cc twobytwo"for="twobytwo"></label>
                                                            <input id="threebythree" type="radio" name="image-size" value="3" />
                                                            <label class="drinkcard-cc threebythree"for="threebythree"></label>
                                                            <input id="fourbyfour" type="radio" name="image-size" value="4" />
                                                            <label class="drinkcard-cc fourbyfour"for="fourbyfour"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 form-group">
                                                    <div id="imageFrame">
                                                        <div class="cc-selector">
                                                            <input checked="checked" id="noFrame" type="radio" name="frame-select" value="NONE" />
                                                            <label id="noFrameL" class="drinkcard-cc frameSelect" for="noFrame"></label>
                                                            <input id="ropeFrame" type="radio" name="frame-select" value="ROPE" />
                                                            <label id="ropeFrameL" class="drinkcard-cc frameSelect"for="ropeFrame"></label>
                                                            <input id="silverFrame" type="radio" name="frame-select" value="SILVER" />
                                                            <label id="silverFrameL" class="drinkcard-cc frameSelect"for="silverFrame"></label>
                                                            <input id="goldFrame" type="radio" name="frame-select" value="GOLD" />
                                                            <label id="goldFrameL" class="drinkcard-cc frameSelect"for="goldFrame"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 form-group">
                                                    <div id="imageTextColor">
                                                        <div class="cc-selector">
                                                            <input checked="checked" id="default-color" type="radio" name="text-color" value="DEFAULT" />
                                                            <label id="default-colorL" class="drinkcard-cc fontColorSelect" for="default-color"></label>
                                                            <input checked="checked" id="silver-color" type="radio" name="text-color" value="SILVER" />
                                                            <label id="silver-colorL" class="drinkcard-cc fontColorSelect" for="silver-color"></label>
                                                            <input checked="checked" id="gold-color" type="radio" name="text-color" value="GOLD" />
                                                            <label id="gold-colorL" class="drinkcard-cc fontColorSelect" for="gold-color"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                                <div class="form-group col-md-3" align="center">
                                    <div id="receiptBlock">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-sm-12 form-group">
                                                    <h2 class="question" style="color: #000;">BASKET</h2>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 form-group">
                                                    <div id="receiptArea">
                                                        <div class="table-responsive">
                                                            <table id="basketTable" class="table table-striped table-hover">
                                                                <thead>
                                                                    <th>Description</th>
                                                                    <th>Price</th>
                                                                </thead>
                                                                <tbody>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 form-group">
                                                    <h2 class="question" style="color: #000;">TOTAL: <span id="totalHolder"></span></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                        <button type="button" id="confirmButton" class="btn ct-button" style="margin-bottom:14px; width:200px;">{{ __('Confirm') }}</button>
                        </div>
                        <div class="row justify-content-center">
                            <div class="form-group">
                                <button id="reloadBack" type="button" onclick="showPage1();" class="btn ct-button" style="margin-bottom:14px; width:200px;">{{ __('Back') }}</button>
                                <button id="paymentBack" type="button" onclick="backPayment();" class="btn ct-button" style="margin-bottom:14px; width:200px; display:none;">{{ __('Back') }}</button>
                                <div id="paypalDiv"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="scroll-left">
            <p>Eternalize your relationship with that special someone! Make an engraving on the Couples Tree for AS LOW AS <b>$1.00!</b></p>
        </div>
        <div class="nav">
        <img src="{{ asset('img') }}/logoicon.png" class="stretch" alt="" />

        </div>
        <div style="position: fixed; bottom: 6%; left:0; width:200px;">
            <button id="viewTreeButton" type="button" class="btn tree-button" onclick="">VIEW THE TREE</button>
        </div>
        <div class="footer">
            <p>© The Hansen Group - 2021</p>
        </div>
    </div>
    </body>
</html>
<script src="https://www.paypal.com/sdk/js?client-id=AeutJkeLHxrNByWNQUdWJ6ULBYbnFD3JPtRI0hrBgy9YLmU2VJatbXajy-LtJpc6TgcF866RaKnbwG03"></script>

<script>
  $(document).ready(function () {
    initBasket();

      
  });

function initBasket(){
    var basket = {};
    var basketItem = {};
    var size = $("input[name='image-size']:checked").val();
    var fontColor = $("input[name='text-color']:checked").val();
    var frame = $("input[name='frame-select']:checked").val();

    basketItem['desc'] = "Base Fee";
    basketItem['text-price'] = "$1.00";
    basketItem['price'] = "1";

    basket[0] = basketItem;
    basketItem = {};

    switch(size){
        case "1":
            basketItem['desc'] = "Size : 1x1";
            basketItem['text-price'] = "$0.00";
            basketItem['price'] = "0";

            basket[1] = basketItem;
            break;
        case "2":
            basketItem['desc'] = "Size : 2x2";
            basketItem['text-price'] = "$1.00";
            basketItem['price'] = "1";

            basket[1] = basketItem;
            break;
        case "3":
            basketItem['desc'] = "Size : 3x3";
            basketItem['text-price'] = "$2.00";
            basketItem['price'] = "2";

            basket[1] = basketItem;
            break;
        case "4":
            basketItem['desc'] = "Size : 4x4";
            basketItem['text-price'] = "$3.00";
            basketItem['price'] = "3";

            basket[1] = basketItem;
            break;
    }
    basketItem = {};

    switch(frame){
        case "NONE":
            basketItem['desc'] = "Frame : None";
            basketItem['text-price'] = "$0.00";
            basketItem['price'] = "0";

            basket[2] = basketItem;
            break;
        case "ROPE":
            basketItem['desc'] = "Frame : Rope";
            basketItem['text-price'] = "$1.00";
            basketItem['price'] = "1";

            basket[2] = basketItem;
            break;
        case "SILVER":
            basketItem['desc'] = "Frame : Silver";
            basketItem['text-price'] = "$2.00";
            basketItem['price'] = "2";

            basket[2] = basketItem;
            break;
        case "GOLD":
            basketItem['desc'] = "Frame : Gold";
            basketItem['text-price'] = "$3.00";
            basketItem['price'] = "3";

            basket[2] = basketItem;
            break;
    }
    basketItem = {};
    switch(fontColor){
        default:
        case "DEFAULT":
            basketItem['desc'] = "Color : Default";
            basketItem['text-price'] = "$0.00";
            basketItem['price'] = "0";

            basket[3] = basketItem;
            break;
        case "SILVER":
            basketItem['desc'] = "Color : Silver";
            basketItem['text-price'] = "$1.00";
            basketItem['price'] = "1";

            basket[3] = basketItem;
            break;
        case "GOLD":
            basketItem['desc'] = "Color : Gold";
            basketItem['text-price'] = "$2.00";
            basketItem['price'] = "2";

            basket[3] = basketItem;
            break;
    }
    basketItem = {};

    var myTab = document.getElementById('basketTable');

    while (myTab.rows.length > 1) {
        myTab.deleteRow(1);
    }
    var total = 0;
    for(var i = 0; i < 4; i++){
 
        var basketRow = myTab.insertRow(myTab.rows.length);
        // basketRow.id = "totalsRow";
        var cell1 = basketRow.insertCell(0);
        var cell2 = basketRow.insertCell(1);

        cell1.innerHTML = basket[i]['desc'];
        cell2.innerHTML = basket[i]['text-price'];
        total += parseFloat(basket[i]['price']);

    }
    document.getElementById("totalHolder").innerHTML = "$"+total;

    return total;
    //console.log(basket);

}
function backPayment(){
    document.getElementById("imageCreation").style.display = "block";
    document.getElementById("confirmButton").style.display = "block";
    document.getElementById("paymentBack").style.display = "none";
    document.getElementById("reloadBack").style.display = "block";

    document.getElementById("paypalDiv").innerHTML = "";
}
function showPage1(){
    window.location.reload(false);
    // document.getElementById("page1").style.display = "block";
    // document.getElementById("page2").style.display = "none";
}

function showPage2(){
    getPreview('preview');
    document.getElementById("page2").style.display = "block";
    document.getElementById("page1").style.display = "none";
}

$('input[name="image-size"]').on('click change', function(e) {
    getPreview('preview');
initBasket();

});
$('input[name="frame-select"]').on('click change', function(e) {
    getPreview('preview');
initBasket();

});
$('input[name="text-color"]').on('click change', function(e) {
    getPreview('preview');
initBasket();

});

function initPaypal(total){
    paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: total
          }
        }]
      });
    },
    onApprove: function(data, actions) {
        console.log(data);
        var order_id = data.orderID;
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        getPreview('save', order_id);
        Swal.fire({
        title: 'Thank you '+details.payer.name.given_name+'! Your payment was successful.',
        confirmButtonText: `Okay`,
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                window.location.href = "/";
            }
        });
      });
    }
  }).render('#paypalDiv');
}
function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}
$('#confirmButton').click(function(){

    var total = initBasket();
    getPreview('save', Date.now());

    Swal.fire({
        title: 'Your total is $'+total+".",
        showCancelButton: true,
        confirmButtonText: `Pay`,
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {

            //$("#imageCreation").addClass("disable-div");
            document.getElementById("imageCreation").style.display = "none";
            document.getElementById("confirmButton").style.display = "none";
            document.getElementById("paymentBack").style.display = "block";
            document.getElementById("reloadBack").style.display = "none";
            initPaypal(total);
        }
    });
});

$('#viewTreeButton').click(function(){
    window.location.href = "/";
});

function getPreview(action, save_name){
    var name = document.getElementById("edtName").value;
    var partnersName = document.getElementById("edtPName").value;
    var message = document.getElementById("edtMessage").value;
    var size = $("input[name='image-size']:checked").val();
    var fontColor = $("input[name='text-color']:checked").val();
    var frame = $("input[name='frame-select']:checked").val();
    //alert(frame);
    document.getElementById("loader").style.display = "block";
    $.ajax({
        url: '{{ route("engravings.preview") }}',
        type: "post",
        data: {"_token": "{{ csrf_token() }}", 'name':name,  'partnersName': partnersName, 'message': message, 'frame': frame, 'text-color': fontColor, 'size': size, 'action': action, 'save_name': save_name},
        dataType: 'JSON',
        success: function (data) {
            document.getElementById("loader").style.display = "none";

          $("#previewBlock").css("background-image", "url('" + data.preview + "')");

          $(".onebyone").css("background-image", "url('" + data.preview + "')");
          $(".twobytwo").css("background-image", "url('" + data.preview + "')");
          $(".threebythree").css("background-image", "url('" + data.preview + "')");
          $(".fourbyfour").css("background-image", "url('" + data.preview + "')");
        }
      });
}


</script>
