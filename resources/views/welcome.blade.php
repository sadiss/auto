@extends('layout.app')
@section('content')
    <div class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 emptySection bgCover"
         style='padding-top: 30px; padding-bottom: 0px; outline: none; background-image: url("{{asset('images/hero-background-min.jpg')}}");'>
        <div class="containerInner ui-sortable">
            <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                 style="padding-top: 0px; padding-bottom: 0px; margin: 0px; outline: none;" >
                <div id="col-left-104" class="innerContent col_left ui-resizable col-md-7">
                    <div
                        class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                        style="padding: 0 10px" bis_skin_checked="1">
                        <div class="de elHeadlineWrapper ui-droppable de-editable"
                             style="margin-top: 0px; outline: none; cursor: pointer; font-family: Ubuntu, Helvetica, sans-serif !important;">
                            <h1 class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0 mfs_21"
                                style="text-align: left; font-size: 36px; color: rgb(0, 22, 34);"><b>Get an Estimated Value on Your Auto
                                    Accident Claim and Recover from Auto Accident Damages with the Help of Our
                                    Professionals</b>
                            </h1>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-66698"style="margin-top: 20px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;">
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 padding0 mfs_17"
                                 style="text-align: left; font-size: 18px; color: rgb(47, 47, 47);">
                            </div>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;">
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                 style="text-align: left; font-size: 22px;" >Fill out our <b>2-minute case value calculator</b>, get your <b>case reviewed today</b>, and let us help you get your <b>life back on track</b>.
                            </div>
                        </div>
                        <div class="de elBTN elMargin0 ui-droppable elAlign_left de-editable"
                             style="margin-top: 20px; outline: none; cursor: pointer; font-family: Ubuntu, Helvetica, sans-serif !important;">
                            <a href="{{route('get_case_value')}}" class="elButton elButtonSize1 elButtonColor1 elButtonPadding2 elButtonFluid elButtonTxtColor1 elBTN_b_none elButtonShadowFlatHighlight elBTNone elButtonBlock elBtnHP_40 elButtonCorner5 elBtnVP_15"
                               style="color: rgb(255, 255, 255); background: rgb(193, 59, 44); font-size: 22px;">
                                Get My Case Value
                            </a>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable"
                             style="margin-top: 15px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;">
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 mfs_14"
                                 style="text-align: left; font-size: 16px;" data-gramm="false">
                                <i class="fa_prepended fas fa-lock"></i>  Inquiries are <b>100%
                                    Secure &amp; Confidential</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="innerContent col_right ui-resizable col-md-5" style="outline: none;">
                    <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                         style="padding: 0 10px" >
                        <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                             style="margin-top: 0px; outline: none; cursor: pointer;" >
                            <img src="{{asset('images/mobile-small.png')}}"
                                 class="elIMG ximg" alt="mobile frame" width="325px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--end slider section--}}

    <div class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection"
         style="padding-top: 25px; padding-bottom: 40px; outline: none; background-color: rgb(193, 59, 44);">
        <div class="containerInner ui-sortable" style="padding-left: 15px; padding-right: 15px;">
            <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                 style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
                <div class="col-md-12 innerContent col_left">
                    <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                         style="padding: 0 10px">
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-52054"
                             style="margin-top: 0px; outline: none; cursor: pointer; font-family: Ubuntu, Helvetica, sans-serif !important;">
                            <h1 class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0 mfs_24"
                                style="text-align: center; font-size: 32px; color: rgb(255, 255, 255);">
                                <b>We've Got You Covered</b>
                            </h1>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable"
                             style="margin-top: 15px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;">
                            <h2 class="ne elHeadline hsSize2 elMargin0 elBGStyle0 hsTextShadow0 lh2 mfs_17"
                                style="text-align: left; color: rgb(255, 255, 255); font-size: 18px;">Don’t
                                let a car, truck, or motorcycle crash destroy you financially, emotionally, and
                                mentally. We’re here to help you determine if you may be entitled to compensation for
                                the pain and suffering that accident brought to your life without you having to do any
                                guesswork.</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
                <div class="col-md-4 innerContent col_right ui-resizable" >
                    <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                         style="padding: 0 10px" >
                        <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"

                             style="margin-top: 0px; outline: none; cursor: pointer;">
                            <img src="{{asset('images/car.png')}}" class="elIMG ximg"
                                 alt="Motorcycle" height="100">
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-24547"

                             style="margin-top: 20px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;"
                        >
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 mfs_14"
                                 style="text-align: center; color: rgb(255, 255, 255);">Personal Auto
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 innerContent col_right ui-resizable" >
                    <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                         style="padding: 0 10px">
                        <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"

                             style="margin-top: 0px; outline: none; cursor: pointer;" >
                            <img src="{{asset('images/truck.png')}}" class="elIMG ximg"
                                 alt="Commercial" height="100">
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-62085"

                             style="margin-top: 20px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;"
                        >
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 mfs_14"
                                 style="text-align: center; color: rgb(255, 255, 255);"
                            >Commercial
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 innerContent col_right ui-resizable" >
                    <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                         style="padding: 0 10px" >
                        <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"

                             style="margin-top: 0px; outline: none; cursor: pointer;">
                            <img src="{{asset('images/bike.png')}}" class="elIMG ximg"
                                 alt="Motorcycle" height="100">
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 20px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;"
                        >
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 mfs_14"
                                 style="text-align: center; color: rgb(255, 255, 255);"
                            >Motorcycle
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    claned here--}}
    <div
        class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection"
        id="section--77578" data-title="Section" data-block-color="0074C7"
        style="padding-top: 25px; padding-bottom: 40px; outline: none; background-color: rgb(237, 250, 255); margin-top: 0px;"
        data-trigger="none" data-animate="fade" data-delay="500">
        <div class="containerInner ui-sortable">
            <div
                class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                id="row--60444" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row"
                style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
                <div id="col-full-147" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none"
                     data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                    <div
                        class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                        style="padding: 0 10px">
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-33615"
                             data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 0px; outline: none; cursor: pointer; font-family: Ubuntu, Helvetica, sans-serif !important;"
                             aria-disabled="false" data-google-font="Ubuntu">
                            <h1 class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0 mfs_24"
                                style="text-align: center; font-size: 32px; color: rgb(37, 129, 189);"
                                data-bold="inherit" data-gramm="false" contenteditable="false"><b>If You’re Someone
                                    Who</b></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="row bgCover borderSolid border3px cornersAll P0-top P0-bottom P0H noTopMargin shadow0 radius15 noBorder"
                id="row--54152" data-trigger="none" data-animate="fade" data-delay="500" data-title="4 column row"
                style="padding-top: 0px; padding-bottom: 0px; margin: 0px auto; outline: none; width: 100%; background-color: rgba(0, 0, 0, 0); max-width: 100%;"
                data-hide-on="">
                <div id="col-left-141" class="col-md-3 innerContent col_left ui-resizable" data-col="left"
                     data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column"
                     style="outline: none;">
                    <div
                        class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                        style="padding: 0 10px">
                        <div class="de eliconelementWrapper ui-droppable de-editable" id="tmp_iconelement-19182"
                             data-de-type="iconelement" data-de-editing="false" data-title="Icon" data-ce="false"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 30px; outline: none; cursor: pointer;" data-element-theme="customized"
                             aria-disabled="false">
                            <a class="eliconelement elMargin0 elBGStyle0 hsTextShadow0 iconelement_theme_5" style="">
                                <i class=" fas fa-car-crash"></i>
                            </a>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-33113"
                             data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 10px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;"
                             aria-disabled="false" data-google-font="Lato" data-hide-on="mobile">
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 mfs_16"
                                 data-bold="inherit" style="text-align: center; font-size: 18px;" data-gramm="false"
                                 contenteditable="false">Has lost everything they have
                                <div>to an auto accident.</div>
                            </div>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-82901"
                             data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 10px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;"
                             aria-disabled="false" data-google-font="Lato" data-hide-on="desktop">
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 mfs_15"
                                 data-bold="inherit" style="text-align: left; font-size: 18px;" data-gramm="false"
                                 contenteditable="false">Has lost everything they have to an auto accident.
                            </div>
                        </div>
                    </div>
                </div>
                <div id="col-center-left-108" class="col-md-3 innerContent col_right ui-resizable" data-col="center"
                     data-trigger="none" data-animate="fade" data-delay="500" data-title="2nd column"
                     style="outline: none;">
                    <div
                        class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                        style="padding: 0 10px">
                        <div class="de eliconelementWrapper ui-droppable de-editable" id="iconelement-51759"
                             data-de-type="iconelement" data-de-editing="false" data-title="Icon" data-ce="false"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 30px; outline: none; cursor: pointer;" data-element-theme="customized"
                             aria-disabled="false" data-hide-on="">
                            <a class="eliconelement elMargin0 elBGStyle0 hsTextShadow0 iconelement_theme_5" style=""
                               id="undefined-750">
                                <i class=" fas fa-business-time"></i>
                            </a>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-91937"
                             data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 10px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;"
                             aria-disabled="false" data-google-font="Lato" data-hide-on="mobile">
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 mfs_16"
                                 data-bold="inherit" style="text-align: center; font-size: 18px;" data-gramm="false"
                                 contenteditable="false">Spent months recovering from physical
                                <div>and emotional damages.</div>
                            </div>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-60169"
                             data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 10px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;"
                             aria-disabled="false" data-google-font="Lato" data-hide-on="desktop">
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 mfs_15"
                                 data-bold="inherit" style="text-align: left; font-size: 18px;" data-gramm="false"
                                 contenteditable="false">Spent months recovering from physical and emotional damages.
                            </div>
                        </div>
                    </div>
                </div>
                <div id="col-center-right-167" class="col-md-3 innerContent col_right ui-resizable" data-col="right"
                     data-trigger="none" data-animate="fade" data-delay="500" data-title="3rd Column"
                     style="outline: none;">
                    <div
                        class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                        style="padding: 0 10px">
                        <div class="de eliconelementWrapper ui-droppable de-editable" id="tmp_iconelement-13771"
                             data-de-type="iconelement" data-de-editing="false" data-title="Icon" data-ce="false"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 30px; outline: none; cursor: pointer;" data-element-theme="customized"
                             aria-disabled="false">
                            <a class="eliconelement elMargin0 elBGStyle0 hsTextShadow0 iconelement_theme_5" style="">
                                <i class=" fas fa-house-damage"></i>
                            </a>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-70204"
                             data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 10px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;"
                             aria-disabled="false" data-google-font="Lato" data-hide-on="mobile">
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 mfs_16"
                                 data-bold="inherit" style="text-align: center; font-size: 18px;" data-gramm="false"
                                 contenteditable="false">​Suffered substantial financial losses
                                <div>that affected their home.</div>
                            </div>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-69716"
                             data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 10px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;"
                             aria-disabled="false" data-google-font="Lato" data-hide-on="desktop">
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 mfs_15"
                                 data-bold="inherit" style="text-align: left; font-size: 18px;" data-gramm="false"
                                 contenteditable="false">​Suffered substantial financial losses that affected their
                                home.
                            </div>
                        </div>
                    </div>
                </div>
                <div id="col-right-128" class="col-md-3 innerContent col_right ui-resizable" data-col="right"
                     data-trigger="none" data-animate="fade" data-delay="500" data-title="4th Column"
                     style="outline: none;">
                    <div
                        class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                        style="padding: 0 10px">
                        <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                             id="tmp_image-22051" data-de-type="img" data-de-editing="false" data-title="image"
                             data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 22px; outline: none; cursor: pointer;" aria-disabled="false">
                            <img src="{{asset('images/image-2-.png')}}"
                                 class="elIMG ximg img-circle noborder" alt="" height="105" width="">
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-51477"
                             data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 10px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;"
                             aria-disabled="false" data-google-font="Lato" data-hide-on="mobile">
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 mfs_16"
                                 data-bold="inherit" style="text-align: center; font-size: 18px;" data-gramm="false"
                                 contenteditable="false">Lost their job after getting into a
                                <div>life-threatening accident.</div>
                            </div>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-87843"
                             data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 10px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;"
                             aria-disabled="false" data-google-font="Lato" data-hide-on="desktop">
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 mfs_15"
                                 data-bold="inherit" style="text-align: left; font-size: 18px;" data-gramm="false"
                                 contenteditable="false">Lost their job after getting into a life-threatening accident.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                id="row--27605" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row"
                style="padding-top: 15px; padding-bottom: 25px; margin: 20px auto 0px; outline: none; width: 80%; max-width: 100%;">
                <div id="col-full-179" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none"
                     data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                    <div
                        class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                        style="padding: 0 10px">
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-30009"
                             data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 0px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;"
                             aria-disabled="false" data-google-font="Lato">
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                 data-bold="inherit" style="text-align: left; font-size: 18px;" data-gramm="false"
                                 contenteditable="false">Then you’re precisely where you need to be. Today marks the end
                                of your struggle, and with our help, you may be compensated for every lost opportunity,
                                injury, and emotional damage you may have endured.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
        class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection"
        id="section--73714" data-title="Section" data-block-color="0074C7"
        style="padding-top: 25px; padding-bottom: 40px; outline: none; margin-top: 10px;" data-trigger="none"
        data-animate="fade" data-delay="500">
        <div class="containerInner ui-sortable">
            <div
                class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                id="row--56528" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row"
                style="padding-top: 20px; padding-bottom: 20px; margin: 0px auto; outline: none; width: 80%; max-width: 100%;">
                <div id="col-full-131" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none"
                     data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                    <div
                        class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                        style="padding: 0 10px">
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-24062"
                             data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 0px; outline: none; cursor: pointer; font-family: Ubuntu, Helvetica, sans-serif !important;"
                             aria-disabled="false" data-google-font="Ubuntu">
                            <h1 class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0 mfs_24"
                                style="text-align: left; font-size: 32px;" data-bold="inherit" data-gramm="false"
                                contenteditable="false"><b>No One Sees an Auto Accident Coming, and It Will Always
                                    Catches You Off Guard.</b></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="row bgCover border3px cornersAll radius0 P0-top P0-bottom P0H noTopMargin borderDotted noBorder shadow0"
                id="row--47367" data-trigger="none" data-animate="fade" data-delay="500" data-title="2 column row"
                style="padding-top: 0px; padding-bottom: 0px; margin: 0px; outline: none;">
                <div id="col-left-129" class="innerContent col_left ui-resizable col-md-4" data-col="left"
                     data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column"
                     style="outline: none;">
                    <div
                        class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                        style="padding: 0 10px">
                        <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                             id="tmp_image-85852" data-de-type="img" data-de-editing="false" data-title="image"
                             data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 0px; outline: none; cursor: pointer;" data-hide-on="desktop"
                             aria-disabled="false">
                            <img src="{{asset('images/car-g91063d247_640.jpg')}}"
                                 class="elIMG ximg" alt="">
                        </div>
                    </div>
                </div>
                <div id="col-right-112" class="innerContent col_right ui-resizable col-md-8" data-col="right"
                     data-trigger="none" data-animate="fade" data-delay="500" data-title="2nd column"
                     style="outline: none;">
                    <div
                        class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                        style="padding: 0 10px">
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-72182"
                             data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 0px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;"
                             data-google-font="Lato" aria-disabled="false">
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 border0px shadow0"
                                 data-bold="inherit" style="text-align: left; font-size: 18px;" data-gramm="false"
                                 contenteditable="false" data-opacity="8">
                                <div>You're driving to or from work, dropping off the kids to school, or you're out
                                    driving trying to catch up with your me-time, and out of nowhere, you're hit with
                                    this life-changing impact that resembles a turning point in your life.
                                </div>
                                <div><br></div>
                                <div>Whether it's your first time or not, auto accidents are always terrifying, and you
                                    don't know what to do, who to call, or how to reach when you see your car, truck, or
                                    motorcycle destroyed and, in some cases, your body injured.
                                </div>
                                <div><br></div>
                                <div>It’s an extremely tough situation, and it may keep you traumatized for months, as
                                    some people spend years before they can confidently get behind the steering wheel
                                    again.
                                </div>
                                <div><br></div>
                                <div>Now, do you want your life to be as miserable as it is right now forever? Do you
                                    want to live with the losses you endured for the next decade or two?
                                </div>
                                <div><br></div>
                                <div>If your answer is NO, then we may be able to help you get reimbursed for all the
                                    money you spent, the sleepless nights you lived through, your physical injuries, and
                                    everything you lost due to that accident.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
        class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection"
        id="section--77102" data-title="Section" data-block-color="0074C7"
        style="padding-top: 25px; padding-bottom: 40px; outline: none; background-color: rgb(0, 22, 34); margin-top: 30px;"
        data-trigger="none" data-animate="fade" data-delay="500">
        <div
            class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
            id="row--41667" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row"
            style="padding-top: 20px; padding-bottom: 20px; margin: 0px auto; outline: none; width: 100%; max-width: 100%;">
            <div id="col-full-110" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none"
                 data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                <div
                    class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                    style="padding: 0 10px">
                    <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-97007"
                         data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true"
                         data-trigger="none" data-animate="fade" data-delay="500"
                         style="margin-top: 0px; outline: none; cursor: pointer; font-family: Ubuntu, Helvetica, sans-serif !important;"
                         aria-disabled="false" data-google-font="Ubuntu">
                        <h1 class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0 mfs_21"
                            style="text-align: center; font-size: 32px; color: rgb(255, 255, 255);"
                            data-bold="inherit" data-gramm="false" contenteditable="false"><b>The Professional Legal
                                Network that Can Help You Understand Where <br> You Are and What You May Be Owed After a
                                Life-Altering Accident.</b></h1>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
            id="row--41667-178" data-trigger="none" data-animate="fade" data-delay="500"
            data-title="1 column row - Clone"
            style="padding-top: 20px; padding-bottom: 20px; margin: 0px auto; outline: none; width: 80%; max-width: 100%;">
            <div id="col-full-110-142" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none"
                 data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                <div
                    class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                    style="padding: 0 10px">
                    <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-77410-113"
                         data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                         data-trigger="none" data-animate="fade" data-delay="500"
                         style="margin-top: 0px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;"
                         data-google-font="Lato" aria-disabled="false">
                        <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                             data-bold="inherit"
                             style="text-align: left; color: rgb(255, 255, 255); font-size: 18px;"
                             data-gramm="false" contenteditable="false">We're Legal Aid USA, providing auto accident
                            victims like yourself with a way to connect with a professional that may help you get
                            back on your feet and overcome the accident's damages.
                            <div>  
                                <div>
                                </div>
                                <div>We understand the burden that an auto accident brings to your life and how it
                                    may affect you, your home, and your loved ones in ways no one else can imagine.
                                    With our help, you may be compensated for your losses and get back on track in
                                    no time.
                                </div>
                                <div><br></div>
                                <div>Our network of seasoned attorneys have dealt with cases like yours many times
                                    before. Their objective is to provide you with the proper guidance and may be
                                    able to help you get what you're owed.
                                </div>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
        class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection"
        id="container-92435" data-title="Section" data-block-color="0074C7"
        style="padding-top: 40px; padding-bottom: 40px; outline: none;" data-trigger="none" data-animate="fade"
        data-delay="500" bis_skin_checked="1">
        <div class="containerInner ui-sortable" bis_skin_checked="1">
            <div
                class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                id="row--34549" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row"
                style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;" bis_skin_checked="1">
                <div id="col-full-158" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none"
                     data-animate="fade" data-delay="500" data-title="1st column" bis_skin_checked="1"
                     style="outline: none;">
                    <div
                        class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                        style="padding: 0 10px" bis_skin_checked="1">
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_subheadline-61235"
                             data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                             style="margin-top: 0px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" aria-disabled="false" data-google-font="Lato">
                            <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0 mfs_12"
                                style="text-align: center; font-size: 16px;" data-bold="inherit" data-gramm="false"
                                contenteditable="false" data-opacity="8">DETAILED INVESTIGATIVE ATTORNEY SERVICES</h2>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-98724"
                             data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 20px; outline: none; cursor: pointer; font-family: Ubuntu, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" data-htype="headline" aria-disabled="false" data-google-font="Ubuntu">
                            <h1 class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0 denormalnone22 mfs_24"
                                style="text-align: center; font-size: 32px; color: rgb(37, 129, 189);"
                                data-bold="inherit" data-gramm="false" contenteditable="false" data-opacity="1"><b>We
                                    May Be Able to Help You Recover All Damages</b></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="row bgCover borderSolid border3px cornersAll P0-top P0-bottom P0H noTopMargin shadow0 noBorder radius0 cfRowAlignCenter"
                id="row--24615" data-trigger="none" data-animate="fade" data-delay="500" data-title="3 column row"
                style="padding: 20px; margin: 0px; outline: none; width: auto; max-width: 100%;" bis_skin_checked="1">
                <div id="col-left-110" class="col-md-4 innerContent col_left ui-resizable" data-col="left"
                     data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column"
                     bis_skin_checked="1" style="outline: none;">
                    <div
                        class="col-inner bgCover noBorder borderSolid border3px cornersAll P0-top P0-bottom P0H noTopMargin shadow10 radius15"
                        style="padding: 40px 30px;" bis_skin_checked="1">
                        <div class="de elBTN elAlign_center elMargin0 ui-droppable de-editable" id="tmp_button-30898"
                             data-de-type="button" data-de-editing="false" data-title="button" data-ce="false"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 0px; outline: none; cursor: pointer; font-family: Ubuntu, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" aria-disabled="false" data-element-theme="customized"
                             data-google-font="Ubuntu">
                            <a href="#"
                               class="elButton elButtonSize1 elButtonColor1 elButtonPadding2 elButtonFluid elBtnHP_25 elButtonTxtColor1 elBTN_b_none elButtonShadowFlatHighlight elBTNone elButtonBlock elBtnVP_5 elButtonCorner5"
                               style="color: rgb(255, 255, 255); background: rgb(193, 59, 44); font-size: 18px;"
                               rel="noopener noreferrer">
                                <span class="elButtonMain">MEDICAL BILLS</span>
                                <span class="elButtonSub"></span>
                            </a>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-41881"
                             data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 15px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" data-google-font="Lato" aria-disabled="false">
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                 data-bold="inherit"
                                 style="text-align: left; color: rgb(133, 133, 137); font-size: 18px;"
                                 data-gramm="false" bis_skin_checked="1" contenteditable="false">If you or a loved one
                                of yours have been damaged or injured to the point where you needed medical attention,
                                ambulance visits, or stay at the hospital, then we may be able to help you recover all
                                the costs you had to endure for all your medical bills as long as you're not at-fault.
                            </div>
                        </div>
                    </div>
                </div>
                <div id="col-center-156" class="col-md-4 innerContent col_right ui-resizable" data-col="center"
                     data-trigger="none" data-animate="fade" data-delay="500" data-title="2nd column"
                     bis_skin_checked="1" style="outline: none;">
                    <div
                        class="col-inner bgCover noBorder borderSolid border3px cornersAll P0-top P0-bottom P0H noTopMargin shadow10 radius15"
                        style="padding: 40px 30px;" bis_skin_checked="1">
                        <div class="de elBTN elAlign_center elMargin0 ui-droppable de-editable" id="button-82562"
                             data-de-type="button" data-de-editing="false" data-title="button" data-ce="false"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 0px; outline: none; cursor: pointer; font-family: Ubuntu, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" aria-disabled="false" data-element-theme="customized"
                             data-google-font="Ubuntu">
                            <a href="#"
                               class="elButton elButtonSize1 elButtonColor1 elButtonPadding2 elButtonFluid elBtnHP_25 elButtonTxtColor1 elBTN_b_none elButtonShadowFlatHighlight elBTNone elButtonBlock elBtnVP_5 elButtonCorner5"
                               style="color: rgb(255, 255, 255); background: rgb(151, 46, 35); font-size: 16px;"
                               rel="noopener noreferrer" id="undefined-385">
                                <span class="elButtonMain">PAIN &amp; SUFFERING</span>
                                <span class="elButtonSub"></span>
                            </a>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-80206"
                             data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 15px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" data-google-font="Lato" aria-disabled="false">
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                 data-bold="inherit"
                                 style="text-align: left; color: rgb(133, 133, 137); font-size: 18px;"
                                 data-gramm="false" bis_skin_checked="1" contenteditable="false">Many people are
                                traumatized for months after being involved in an auto accident and may require therapy
                                before they're ready to move on from their losses. We may be able to help you find
                                compensation for your pain and suffering, and we may even help you get back on your feet
                                in no time.
                            </div>
                        </div>
                    </div>
                </div>
                <div id="col-right-143" class="col-md-4 innerContent col_right ui-resizable" data-col="right"
                     data-trigger="none" data-animate="fade" data-delay="500" data-title="3rd Column"
                     bis_skin_checked="1" style="outline: none;">
                    <div
                        class="col-inner bgCover noBorder borderSolid border3px cornersAll P0-top P0-bottom P0H noTopMargin shadow10 radius15"
                        style="padding: 40px 30px;" bis_skin_checked="1">
                        <div class="de elBTN elAlign_center elMargin0 ui-droppable de-editable" id="button-38038"
                             data-de-type="button" data-de-editing="false" data-title="button" data-ce="false"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 0px; outline: none; cursor: pointer; font-family: Ubuntu, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" aria-disabled="false" data-element-theme="customized"
                             data-google-font="Ubuntu">
                            <a href="#"
                               class="elButton elButtonSize1 elButtonColor1 elButtonPadding2 elButtonFluid elBtnHP_25 elButtonTxtColor1 elBTN_b_none elButtonShadowFlatHighlight elBTNone elButtonBlock elBtnVP_5 elButtonCorner5"
                               style="color: rgb(255, 255, 255); background: rgb(193, 59, 44); font-size: 18px;"
                               rel="noopener noreferrer" id="undefined-1069">
                                <span class="elButtonMain">LOST WAGES</span>
                                <span class="elButtonSub"></span>
                            </a>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-84978"
                             data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 15px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" data-google-font="Lato" aria-disabled="false">
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                 data-bold="inherit"
                                 style="text-align: left; color: rgb(133, 133, 137); font-size: 18px;"
                                 data-gramm="false" bis_skin_checked="1" contenteditable="false">For those who have lost
                                their jobs and their careers after getting into an auto accident, life can be tough;
                                that's why we made it our objective to see if we can help you recover from your
                                financial losses, claim compensation for losing your job, and gain something to lay back
                                on so you can move forward with confidence.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="row bgCover borderSolid border3px cornersAll P0-top P0-bottom P0H noTopMargin shadow0 radius10 noBorder"
                id="row--24615-123" data-trigger="none" data-animate="fade" data-delay="500"
                data-title="3 column row - Clone" style="padding: 20px 10px; margin: 0px; outline: none; width: auto;"
                bis_skin_checked="1">
                <div id="col-left-110-160" class="col-md-4 innerContent col_left ui-resizable" data-col="left"
                     data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column"
                     bis_skin_checked="1" style="outline: none;">
                    <div
                        class="col-inner bgCover noBorder borderSolid border3px cornersAll P0-top P0-bottom P0H noTopMargin shadow10 radius15"
                        style="padding: 40px 30px;" bis_skin_checked="1">
                        <div class="de elBTN elAlign_center elMargin0 ui-droppable de-editable"
                             id="tmp_button-30898-119" data-de-type="button" data-de-editing="false" data-title="button"
                             data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 0px; outline: none; cursor: pointer; font-family: Ubuntu, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" aria-disabled="false" data-element-theme="customized"
                             data-google-font="Ubuntu">
                            <a href="#"
                               class="elButton elButtonSize1 elButtonColor1 elButtonPadding2 elButtonFluid elBtnHP_25 elButtonTxtColor1 elBTN_b_none elButtonShadowFlatHighlight elBTNone elButtonBlock elBtnVP_5 elButtonCorner5"
                               style="color: rgb(255, 255, 255); background: rgb(151, 46, 35); font-size: 18px;"
                               rel="noopener noreferrer" id="undefined-820">
                                <span class="elButtonMain">PHYSICAL DISABILITY</span>
                                <span class="elButtonSub"></span>
                            </a>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-41881-102"
                             data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 15px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" data-google-font="Lato" aria-disabled="false">
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                 data-bold="inherit"
                                 style="text-align: left; color: rgb(133, 133, 137); font-size: 18px;"
                                 data-gramm="false" bis_skin_checked="1" contenteditable="false">If an auto accident has
                                left you with a permanent physical disability that limits your opportunities in life,
                                then we may be able to help you at least repay for the financial losses that it may have
                                caused you, and it may also sustain your life in such a sensitive, turning point.
                            </div>
                        </div>
                    </div>
                </div>
                <div id="col-center-156-154" class="col-md-4 innerContent col_right ui-resizable" data-col="center"
                     data-trigger="none" data-animate="fade" data-delay="500" data-title="2nd column"
                     bis_skin_checked="1" style="outline: none;">
                    <div
                        class="col-inner bgCover noBorder borderSolid border3px cornersAll P0-top P0-bottom P0H noTopMargin shadow10 radius15"
                        style="padding: 40px 30px;" bis_skin_checked="1">
                        <div class="de elBTN elAlign_center elMargin0 ui-droppable de-editable" id="button-82562-153"
                             data-de-type="button" data-de-editing="false" data-title="button" data-ce="false"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 0px; outline: none; cursor: pointer; font-family: Ubuntu, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" aria-disabled="false" data-element-theme="customized"
                             data-google-font="Ubuntu">
                            <a href="#"
                               class="elButton elButtonSize1 elButtonColor1 elButtonPadding2 elButtonFluid elBtnHP_25 elButtonTxtColor1 elBTN_b_none elButtonShadowFlatHighlight elBTNone elButtonBlock elBtnVP_5 elButtonCorner5"
                               style="color: rgb(255, 255, 255); background: rgb(193, 59, 44); font-size: 18px;"
                               rel="noopener noreferrer" id="undefined-385-826">
                                <span class="elButtonMain">PROPERTY DAMAGE</span>
                                <span class="elButtonSub"></span>
                            </a>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-80206-157"
                             data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 15px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" data-google-font="Lato" aria-disabled="false">
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                 data-bold="inherit"
                                 style="text-align: left; color: rgb(133, 133, 137); font-size: 18px;"
                                 data-gramm="false" bis_skin_checked="1" contenteditable="false">In some cases, you
                                might be involved in an auto accident without being in a vehicle, as someone may have
                                crashed into your home, business, or livelihood. Our network of legal professionals may
                                help you assess and value the damages, and you may be entitled to fair compensation.
                            </div>
                        </div>
                    </div>
                </div>
                <div id="col-right-143-148" class="col-md-4 innerContent col_right ui-resizable" data-col="right"
                     data-trigger="none" data-animate="fade" data-delay="500" data-title="3rd Column"
                     bis_skin_checked="1" style="outline: none;">
                    <div
                        class="col-inner bgCover noBorder borderSolid border3px cornersAll P0-top P0-bottom P0H noTopMargin shadow10 radius15"
                        style="padding: 40px 30px;" bis_skin_checked="1">
                        <div class="de elBTN elAlign_center elMargin0 ui-droppable de-editable" id="button-38038-183"
                             data-de-type="button" data-de-editing="false" data-title="button" data-ce="false"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 0px; outline: none; cursor: pointer; font-family: Ubuntu, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" aria-disabled="false" data-element-theme="customized"
                             data-google-font="Ubuntu">
                            <a href="#"
                               class="elButton elButtonSize1 elButtonColor1 elButtonPadding2 elButtonFluid elBtnHP_25 elButtonTxtColor1 elBTN_b_none elButtonShadowFlatHighlight elBTNone elButtonBlock elBtnVP_5 elButtonCorner5"
                               style="color: rgb(255, 255, 255); background: rgb(151, 46, 35); font-size: 18px;"
                               rel="noopener noreferrer" id="undefined-1069-1161">
                                <span class="elButtonMain">EMOTIONAL DISTRESS</span>
                                <span class="elButtonSub"></span>
                            </a>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-84978-125"
                             data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 15px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" data-google-font="Lato" aria-disabled="false">
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                 data-bold="inherit"
                                 style="text-align: left; color: rgb(133, 133, 137); font-size: 18px;"
                                 data-gramm="false" bis_skin_checked="1" contenteditable="false">Being in an auto
                                accident can leave you afraid of getting behind the wheel for months, maybe years, and
                                if that accident has caused you financial, human, and emotional losses, you may need our
                                help. We can showcase your distress in a court of law and may be able to help you
                                recover from such an unfortunate situation in no time.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
        class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection"
        id="section--21398" data-title="Section" data-block-color="0074C7"
        style="padding-top: 40px; padding-bottom: 40px; outline: none; background-color: rgb(237, 250, 255);"
        data-trigger="none" data-animate="fade" data-delay="500" bis_skin_checked="1">
        <div class="containerInner ui-sortable" bis_skin_checked="1">
            <div
                class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                id="row--54733" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row"
                style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;" bis_skin_checked="1">
                <div id="col-full-108" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none"
                     data-animate="fade" data-delay="500" data-title="1st column" bis_skin_checked="1"
                     style="outline: none;">
                    <div
                        class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                        style="padding: 0 10px" bis_skin_checked="1">
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-89749"
                             data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 0px; outline: none; cursor: pointer; font-family: Ubuntu, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" aria-disabled="false" data-google-font="Ubuntu">
                            <h1 class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0 deCapitalize mfs_24"
                                style="text-align: center; font-size: 32px; color: rgb(37, 129, 189);"
                                data-bold="inherit" data-gramm="false" contenteditable="false" data-opacity="8"><b>You
                                    Can Get Started Today</b></h1>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-45339"
                             data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 15px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" data-google-font="Lato" aria-disabled="false">
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                 data-bold="inherit"
                                 style="text-align: center; color: rgb(133, 133, 137); font-size: 18px;"
                                 data-gramm="false" bis_skin_checked="1" contenteditable="false">Partner up and get an
                                advocate fighting on your behalf.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                id="row--41956" data-trigger="none" data-animate="fade" data-delay="500" data-title="3 column row"
                style="padding: 20px; margin: 0px; outline: none; width: auto;" bis_skin_checked="1">
                <div id="col-left-109" class="col-md-4 innerContent col_left ui-resizable" data-col="left"
                     data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column"
                     bis_skin_checked="1" style="outline: none;">
                    <div
                        class="col-inner bgCover noBorder borderSolid border3px cornersAll P0-top P0-bottom P0H noTopMargin radius15 shadow5"
                        style="padding: 40px 30px; background-color: rgb(255, 255, 255);" bis_skin_checked="1">
                        <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                             id="tmp_image-22156" data-de-type="img" data-de-editing="false" data-title="image"
                             data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 0px; outline: none; cursor: pointer;" bis_skin_checked="1"
                             aria-disabled="false">
                            <img src="{{asset('images/one.png')}}" class="elIMG ximg"
                                 alt="">
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_subheadline-69020"
                             data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                             style="margin-top: 20px; outline: none; cursor: pointer; font-family: Ubuntu, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" aria-disabled="false" data-google-font="Ubuntu">
                            <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0"
                                style="text-align: center; font-size: 24px; color: rgb(37, 129, 189);"
                                data-bold="inherit" data-gramm="false" contenteditable="false" data-opacity="8"><b>Reach
                                    Out to Our Team of Professionals </b></h2>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-82249"
                             data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 15px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" data-google-font="Lato" aria-disabled="false">
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                 data-bold="inherit"
                                 style="text-align: center; font-size: 18px; color: rgb(102, 102, 102);"
                                 data-gramm="false" bis_skin_checked="1" contenteditable="false">Our network of
                                attorneys can help you understand more about your case, the losses that an auto accident
                                may have caused you, and whether or not you may be compensated for said losses.
                            </div>
                        </div>
                    </div>
                </div>
                <div id="col-center-106" class="col-md-4 innerContent col_right ui-resizable" data-col="center"
                     data-trigger="none" data-animate="fade" data-delay="500" data-title="2nd column"
                     bis_skin_checked="1" style="outline: none;">
                    <div
                        class="col-inner bgCover noBorder borderSolid border3px cornersAll P0-top P0-bottom P0H noTopMargin radius15 shadow5"
                        style="padding: 40px 30px; background-color: rgb(255, 255, 255);" bis_skin_checked="1">
                        <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                             id="img-20019" data-de-type="img" data-de-editing="false" data-title="image"
                             data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 0px; outline: none; cursor: pointer;" bis_skin_checked="1"
                             aria-disabled="false">
                            <img src="{{asset('images/two.png')}}" class="elIMG ximg"
                                 alt="">
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-64994"
                             data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                             style="margin-top: 20px; outline: none; cursor: pointer; font-family: Ubuntu, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" aria-disabled="false" data-google-font="Ubuntu">
                            <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0"
                                style="text-align: center; font-size: 24px; color: rgb(37, 129, 189);"
                                data-bold="inherit" data-gramm="false" contenteditable="false" data-opacity="8">
                                <b>Get a FREE<br>E</b><b style="font-family: inherit;">valuation </b>
                            </h2>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-61685"
                             data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 15px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" data-google-font="Lato" aria-disabled="false">
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                 data-bold="inherit"
                                 style="text-align: center; font-size: 18px; color: rgb(102, 102, 102);"
                                 data-gramm="false" bis_skin_checked="1" contenteditable="false">When working with our
                                attorneys, you'll get a no-obligation evaluation that lets you gain immediate insight
                                into your case without paying a penny or committing to a contract.
                            </div>
                        </div>
                    </div>
                </div>
                <div id="col-right-169" class="col-md-4 innerContent col_right ui-resizable" data-col="right"
                     data-trigger="none" data-animate="fade" data-delay="500" data-title="3rd Column"
                     bis_skin_checked="1" style="outline: none;">
                    <div
                        class="col-inner bgCover noBorder borderSolid border3px cornersAll P0-top P0-bottom P0H noTopMargin radius15 shadow5"
                        style="padding: 40px 30px; background-color: rgb(255, 255, 255);" bis_skin_checked="1">
                        <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                             id="img-35320" data-de-type="img" data-de-editing="false" data-title="image"
                             data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 0px; outline: none; cursor: pointer;" bis_skin_checked="1"
                             aria-disabled="false">
                            <img
                                src="{{asset('images/three.png')}}"
                                class="elIMG ximg" alt="">
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-64511"
                             data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                             style="margin-top: 20px; outline: none; cursor: pointer; font-family: Ubuntu, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" aria-disabled="false" data-google-font="Ubuntu">
                            <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0"
                                style="text-align: center; font-size: 24px; color: rgb(37, 129, 189);"
                                data-bold="inherit" data-gramm="false" contenteditable="false" data-opacity="8"><b>Pay
                                    Us Nothing Unless We're Successful for You </b></h2>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-35598"
                             data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 15px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" data-google-font="Lato" aria-disabled="false">
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                 data-bold="inherit"
                                 style="text-align: center; font-size: 18px; color: rgb(102, 102, 102);"
                                 data-gramm="false" bis_skin_checked="1" contenteditable="false">Our attorneys aim to
                                show up, help you with everything we have, and keep the financial matters as our last
                                item on the list, as we always value your best interest, not someone else's.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                id="row--30348" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row"
                style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;" bis_skin_checked="1">
                <div id="col-full-180" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none"
                     data-animate="fade" data-delay="500" data-title="1st column" bis_skin_checked="1"
                     style="outline: none;">
                    <div
                        class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                        style="padding: 0 10px" bis_skin_checked="1">
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-53013"
                             data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 0px; outline: none; cursor: pointer; font-family: Ubuntu, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" aria-disabled="false" data-google-font="Ubuntu">
                            <h1 class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0 mfs_20"
                                style="text-align: center; font-size: 25px; color: rgb(35, 122, 176);"
                                data-bold="inherit" data-gramm="false" contenteditable="false" data-opacity="8"><b>You
                                    only pay when our network of attorney settles your case!</b></h1>
                        </div>
                        <div class="de elBTN elMargin0 ui-droppable elAlign_center de-editable" id="button-99201"
                             data-de-type="button" data-de-editing="false" data-title="button" data-ce="false"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 20px; outline: none; cursor: pointer; font-family: Ubuntu, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" aria-disabled="false" data-google-font="Ubuntu"
                             data-element-theme="customized" data-elbuttontype="1">
                            <a href="{{route('get_case_value')}}"
                               class="elButton elButtonSize1 elButtonColor1 elButtonPadding2 elButtonTxtColor1 elBTN_b_none elButtonShadowFlatHighlight elBTNone elButtonBlock elBtnHP_40 elButtonFluid elBtnVP_15 elButtonCorner5"
                               style="color: rgb(255, 255, 255); background: rgb(192, 57, 43); font-size: 22px;"
                               rel="noopener noreferrer" id="undefined-950">
                                <span class="elButtonMain">Get My Case Value</span>
                                <span class="elButtonSub"></span>
                            </a>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-30632"
                             data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 0px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" aria-disabled="false" data-google-font="Lato">
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 padding10 mfs_14"
                                 data-bold="inherit"
                                 style="text-align: center; color: rgb(102, 102, 102); font-size: 16px;"
                                 data-gramm="false" bis_skin_checked="1" contenteditable="false" data-opacity="8">
                                <i class="fa_prepended fas fa-lock" contenteditable="false"></i>  Inquiries are <b>100%
                                    Secure &amp; Confidential</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
        class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection"
        id="section--71907" data-title="Section" data-block-color="0074C7"
        style="padding-top: 20px; padding-bottom: 20px; outline: none;" data-trigger="none" data-animate="fade"
        data-delay="500" bis_skin_checked="1">
        <div class="containerInner ui-sortable" bis_skin_checked="1" style="padding-left: 20px; padding-right: 20px;">
            <div
                class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                id="row--50970" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row"
                style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;" bis_skin_checked="1">
                <div id="col-full-127" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none"
                     data-animate="fade" data-delay="500" data-title="1st column" bis_skin_checked="1"
                     style="outline: none;">
                    <div
                        class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                        style="padding: 0 10px" bis_skin_checked="1">
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-23214"
                             data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 0px; outline: none; cursor: pointer; font-family: Ubuntu, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" aria-disabled="false" data-google-font="Ubuntu">
                            <h1 class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0 mfs_22"
                                style="text-align: center; font-size: 32px; color: rgb(35, 122, 176);"
                                data-bold="inherit" data-gramm="false" contenteditable="false"><b>Frequently Asked
                                    Questions</b></h1>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-79538"
                             data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 15px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" data-google-font="Lato" aria-disabled="false">
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 mfs_18"
                                 data-bold="inherit"
                                 style="text-align: center; color: rgb(133, 133, 137); font-size: 18px;"
                                 data-gramm="false" bis_skin_checked="1" contenteditable="false" data-opacity="8">Get
                                more information on important topics you'll want to know
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="row bgCover borderSolid border3px cornersAll P0-top P0-bottom P0H noTopMargin noBorder radius5 shadow0"
                id="row--56877" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row"
                style="padding: 20px; margin: 0px; outline: none; width: auto; max-width: 100%;" bis_skin_checked="1">
                <div id="col-full-148" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none"
                     data-animate="fade" data-delay="500" data-title="1st column" bis_skin_checked="1"
                     style="outline: none;">
                    <div
                        class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                        style="padding: 0px 10px; width: auto; margin-left: 1px; margin-right: 1px;"
                        bis_skin_checked="1">
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-26743"
                             data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 0px; outline: none; cursor: pointer; font-family: Ubuntu, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" aria-disabled="false" data-google-font="Ubuntu">
                            <h1 class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0"
                                style="text-align: left; font-size: 24px;" data-bold="inherit" data-gramm="false"
                                contenteditable="false">
                                <i class="fa_prepended fas fa-question-circle" contenteditable="false"
                                   style="color: rgb(38, 64, 144);"></i><b>Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit.</b>
                            </h1>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-73354"
                             data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 15px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" aria-disabled="false" data-google-font="Lato">
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                 data-bold="inherit" style="text-align: left; font-size: 18px; color: rgb(19, 25, 33);"
                                 data-gramm="false" bis_skin_checked="1" contenteditable="false" data-opacity="8">Lorem
                                ipsum dolor sit amet, consectetur adipiscing elit.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="row bgCover borderSolid border3px cornersAll P0-top P0-bottom P0H noTopMargin noBorder radius5 shadow0"
                id="row--56877-143" data-trigger="none" data-animate="fade" data-delay="500"
                data-title="1 column row - Clone"
                style="padding-top: 20px; padding-bottom: 20px; margin: 15px 0px 0px; outline: none;"
                bis_skin_checked="1">
                <div id="col-full-148-102" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none"
                     data-animate="fade" data-delay="500" data-title="1st column" bis_skin_checked="1"
                     style="outline: none;">
                    <div
                        class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                        style="padding: 0 10px" bis_skin_checked="1">
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-26743-137"
                             data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 0px; outline: none; cursor: pointer; font-family: Ubuntu, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" aria-disabled="false" data-google-font="Ubuntu">
                            <h1 class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0"
                                style="text-align: left; font-size: 24px;" data-bold="inherit" data-gramm="false"
                                contenteditable="false">
                                <i class="fa_prepended fas fa-question-circle" contenteditable="false"
                                   style="color: rgb(38, 64, 144);"></i><b>Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit.</b>
                            </h1>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-73354-101"
                             data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 15px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" aria-disabled="false" data-google-font="Lato">
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                 data-bold="inherit" style="text-align: left; font-size: 18px; color: rgb(19, 25, 33);"
                                 data-gramm="false" bis_skin_checked="1" contenteditable="false" data-opacity="8">Lorem
                                ipsum dolor sit amet, consectetur adipiscing elit.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="row bgCover borderSolid border3px cornersAll P0-top P0-bottom P0H noTopMargin noBorder radius5 shadow0"
                id="row--56877-143-171" data-trigger="none" data-animate="fade" data-delay="500"
                data-title="1 column row - Clone - Clone"
                style="padding-top: 20px; padding-bottom: 20px; margin: 15px 0px 0px; outline: none;"
                bis_skin_checked="1">
                <div id="col-full-148-102-141" class="col-md-12 innerContent col_left" data-col="full"
                     data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column"
                     bis_skin_checked="1" style="outline: none;">
                    <div
                        class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                        style="padding: 0 10px" bis_skin_checked="1">
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-26743-137-143"
                             data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 0px; outline: none; cursor: pointer; font-family: Ubuntu, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" aria-disabled="false" data-google-font="Ubuntu">
                            <h1 class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0"
                                style="text-align: left; font-size: 24px;" data-bold="inherit" data-gramm="false"
                                contenteditable="false">
                                <i class="fa_prepended fas fa-question-circle" contenteditable="false"
                                   style="color: rgb(38, 64, 144);"></i><b>Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit.</b>
                            </h1>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-73354-101-177"
                             data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 15px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" aria-disabled="false" data-google-font="Lato">
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                 data-bold="inherit" style="text-align: left; font-size: 18px; color: rgb(19, 25, 33);"
                                 data-gramm="false" bis_skin_checked="1" contenteditable="false" data-opacity="8">Lorem
                                ipsum dolor sit amet, consectetur adipiscing elit.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="row bgCover borderSolid border3px cornersAll P0-top P0-bottom P0H noTopMargin noBorder radius5 shadow0"
                id="row--56877-143-171-155" data-trigger="none" data-animate="fade" data-delay="500"
                data-title="1 column row - Clone - Clone - Clone"
                style="padding-top: 20px; padding-bottom: 20px; margin: 15px 0px 0px; outline: none;"
                bis_skin_checked="1">
                <div id="col-full-148-102-141-134" class="col-md-12 innerContent col_left" data-col="full"
                     data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column"
                     bis_skin_checked="1" style="outline: none;">
                    <div
                        class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                        style="padding: 0 10px" bis_skin_checked="1">
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-26743-137-143-176"
                             data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 0px; outline: none; cursor: pointer; font-family: Ubuntu, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" aria-disabled="false" data-google-font="Ubuntu">
                            <h1 class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0"
                                style="text-align: left; font-size: 24px;" data-bold="inherit" data-gramm="false"
                                contenteditable="false">
                                <i class="fa_prepended fas fa-question-circle" contenteditable="false"
                                   style="color: rgb(38, 64, 144);"></i><b>Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit.</b>
                            </h1>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-73354-101-177-126"
                             data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 15px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" aria-disabled="false" data-google-font="Lato">
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                 data-bold="inherit" style="text-align: left; font-size: 18px; color: rgb(19, 25, 33);"
                                 data-gramm="false" bis_skin_checked="1" contenteditable="false" data-opacity="8">Lorem
                                ipsum dolor sit amet, consectetur adipiscing elit.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                id="row--92426" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row"
                style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;" bis_skin_checked="1">
                <div id="col-full-162" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none"
                     data-animate="fade" data-delay="500" data-title="1st column" bis_skin_checked="1"
                     style="outline: none;">
                    <div
                        class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                        style="padding: 0 10px" bis_skin_checked="1">
                        <div class="de elBTN elMargin0 ui-droppable elAlign_center de-editable" id="button-57284"
                             data-de-type="button" data-de-editing="false" data-title="button" data-ce="false"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 20px; outline: none; cursor: pointer; font-family: Ubuntu, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" aria-disabled="false" data-google-font="Ubuntu"
                             data-element-theme="customized" data-elbuttontype="1">
                            <a href="{{route('get_case_value')}}"
                               class="elButton elButtonSize1 elButtonColor1 elButtonPadding2 elButtonFluid elButtonTxtColor1 elBTN_b_none elButtonShadowFlatHighlight elBTNone elButtonBlock elBtnVP_15 elBtnHP_40 elButtonCorner5"
                               style="color: rgb(255, 255, 255); background: rgb(192, 57, 43); font-size: 22px;"
                               rel="noopener noreferrer" id="undefined-950-291">
                                <span class="elButtonMain">Get My Case Value</span>
                                <span class="elButtonSub"></span>
                            </a>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-82392"
                             data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                             data-trigger="none" data-animate="fade" data-delay="500"
                             style="margin-top: 0px; outline: none; cursor: pointer; font-family: Lato, Helvetica, sans-serif !important;"
                             bis_skin_checked="1" aria-disabled="false" data-google-font="Lato">
                            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 padding10 mfs_14"
                                 data-bold="inherit" style="text-align: center; color: rgb(102, 102, 102);"
                                 data-gramm="false" bis_skin_checked="1" contenteditable="false" data-opacity="8">
                                <i class="fa_prepended fas fa-lock" contenteditable="false"></i>  Inquiries are <b>100%
                                    Secure &amp; Confidential</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
