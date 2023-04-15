@extends('layout.app')
@section('content')
    <style>
        body{
            background: #001622;
        }
        .bg-white{
            background: white;
        }
        .round-border-5{
            border-radius: 5px;
        }
        .error{
            color:red;
        }
        input.error, textarea.error{
            border:1px solid red;
        }
    </style>
    <div class="row">
        <div class="col-sm-12 col-md-8 col-md-offset-2 bg-white  round-border-5" style="padding:20px; margin-top: 30px; margin-bottom: 30px;">
            <div class="row">
                <div class="col-sm-12">
                    <div class="containerInner ui-sortable" bis_skin_checked="1">
                        <div class="row bgCover borderSolid cornersAll shadow0 P0-top P0-bottom P0H noTopMargin radius0 border1px noBorder" id="row--11902" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row" >
                            <div id="col-full-121" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" bis_skin_checked="1" style="outline: none;">
                                <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px" bis_skin_checked="1">
                                    <div class="de eliconelementWrapper ui-droppable de-editable" id="tmp_iconelement-17364" data-de-type="iconelement" data-de-editing="false" data-title="Icon" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 10px; outline: none; cursor: pointer;" bis_skin_checked="1" aria-disabled="false">
                                        <a class="eliconelement elMargin0 elBGStyle0 hsTextShadow0" style="padding: 0px; margin: 0px; color: rgb(192, 57, 43); text-align: center; font-size: 45px; line-height: 1em; display: block;">
                                            <i class=" fas fa-check-circle"></i>
                                        </a>
                                    </div>
                                    <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_subheadline-23417" data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false" style="margin-top: 30px; outline: none; cursor: pointer; font-family: Ubuntu, Helvetica, sans-serif !important;" bis_skin_checked="1" data-google-font="Ubuntu" aria-disabled="false">
                                        <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0 mfs_17" style="text-align: center; font-size: 25px; color: rgb(0, 0, 0);" data-bold="inherit" data-gramm="false" contenteditable="false" data-opacity="8">
                                            <b>Thank You!</b>&nbsp;<div>You’re Now One Step Closer toa Possible Compensation.</div>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row bgCover borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin noBorder" id="row--90521" data-trigger="none" data-animate="fade" data-delay="500" data-title="2 column row" style="padding-top: 20px; padding-bottom: 20px; margin: 0px; background-color: rgb(255, 255, 255); outline: none;" bis_skin_checked="1">
                            <div id="col-left-135" class="col-md-6 innerContent col_left ui-resizable" data-col="left" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" bis_skin_checked="1" style="outline: none;">
                                <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px" bis_skin_checked="1">
                                    <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-77807" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 10px; outline: none; cursor: pointer; font-family: Ubuntu, Helvetica, sans-serif !important;" bis_skin_checked="1" data-google-font="Ubuntu" aria-disabled="false">
                                        <h1 class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0 mfs_17" style="text-align: center; font-size: 25px;" data-bold="inherit" data-gramm="false" contenteditable="false"><b>Here’s what to expect next:</b></h1>
                                    </div>
                                    <div class="de elBullet elMargin0 ui-droppable mfs_16 de-editable" id="tmp_list-12647" data-de-type="list" data-de-editing="false" data-title="icon bullet list" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false" style="margin-top: 30px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;" bis_skin_checked="1" aria-disabled="false" data-google-font="Lato" data-element-theme="customized">
                                        <ul class="ne elBulletList elBulletListNew elBulletList2 listBorder0 elBulletList_theme2" data-bold="inherit" data-gramm="false" contenteditable="false" style="">
                                            <li style="font-size: 18px;">
                                                <i contenteditable="false" class="fa-fw fas fa-arrow-alt-circle-right" style="color: rgb(192, 57, 43);"></i><b>CONFIRMATION​ and CRITERIA</b><br>We're happy you decided to reach out to our group of professionals. Our next step is to learn more about your case, analyze the auto accident police report, and ensure that you meet the criteria for working with us.</li>
                                            <li style="font-size: 18px;">
                                                <i contenteditable="false" class="fa-fw fas fa-arrow-alt-circle-right" style="color: rgb(192, 57, 43);"></i><b>ASSURANCE and ATTENTION</b><br>Rest assured that you'll have our team's full attention at your earliest convenience, and one of our attorneys can speak with you about our opportunities together and how we can help you recover from your accident.</li>
                                            <li style="font-size: 18px;">
                                                <i contenteditable="false" class="fa-fw fas fa-arrow-alt-circle-right" style="color: rgb(192, 57, 43);"></i><b>​​QUESTIONS AND REQUESTS<br></b>If you have any questions or requests, contact us using the information below!</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="col-right-145" class="col-md-6 innerContent col_right ui-resizable" data-col="right" data-trigger="none" data-animate="fade" data-delay="500" data-title="2nd column" bis_skin_checked="1" style="outline: none;">
                                <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px" bis_skin_checked="1">
                                    <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable hiddenElementTools de-editable" id="tmp_image-39615" data-de-type="img" data-de-editing="false" data-title="image" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer;" bis_skin_checked="1" aria-disabled="false">
                                        <img src="{{asset('images/thank.png')}}" class="elIMG ximg" alt="" tabindex="0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
