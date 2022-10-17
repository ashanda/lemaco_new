@extends('layouts.welcome')

@section('content')



<!----banner-->
<div class="banner">
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
        <div class="left">
            <div class="container">
                <h2></h2>
                <h1> Welcome to <br/>Your Global <br/>Digital Wealth Plan</h1>
                <h3>100% Secure | Easy Conversation | Global</h3>
                <button onclick="location.href='https://lemaconet.com/register'" class="cover_btn"> Get Started</button> <br/>
                
                <!--img src="assets/images/acume.png" class="cover_logos">
                <img src="assets/images/breally_1.png" class="cover_logos" --->
            </div>
        </div>
    </div>
        <div class="right">
            <img class="banner-img1" src="assets/images/earstcg-.png">
        </div>
    </div>
</div>


<br/>


<!-- three box -->
<div class="three_cards">
    <div class="container">
        <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="card">
                            <h1>30+</h1>
                            <h2>supported countries</h2>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="card">
                            <h1>300+</h1>
                            <h2>Brands with us</h2>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="card">
                            <h1>200K+</h1>
                            <h2>online stores</h2>
                    </div>
                </div>
   
        </div>
    </div>
</div>
<!-- end three box -->



   
<!---features-->
<div class="features">
    <div class="container">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <center>
                <h2>features</h2>
                <h1>Crypto Live Price <br>Updates</h1>
                <h3>Invest your crypto, gain massive benefits, grow your digital wealth with us.</h3>
                <img src="assets/images/feature.png">
            </center>
        </div>
    </div>
</div>





<!-----invoices--->
<div class="invoices">
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
        <div class="left">
            <div class="container">
                <h2>invoices</h2>
                <h1> Bill crypto to your customers</h1>
                <h3>With powerful tools for crypto payments, you can grow your business</h3>
                <div class="i_card">
                    <h1>50+</h1>
                    <h2 class="card_h2">cryptocurrencies</h2>
                </div> 
                <div class="i_card">
                    <h1>1.5%</h1>
                    <h2 class="card_h2"> payment fee</h2>
                </div>
            </div>
        </div>
    </div>
        <div class="right">
            <img class="invoice-img" src="https://toka.b-cdn.net/wp-content/uploads/2022/04/kfvjq-1024x831.png">
        </div>
</div>



<!-----payouts--->
<div class="payouts">
    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
        <div class="left">
            <div class="container">
                <h2>payouts</h2>
                <h1> Invest Crypto & <br/>Get Massive Benifits</h1>
                <!--<img class="payouts_img" src="https://toka.b-cdn.net/wp-content/uploads/2022/04/rfvfvs-1024x890.png">-->
               <img class="payouts_img" src="assets/images/payouts.png">
            </div>
        </div>
    </div>
        <div class="right">
            <!--<h3>Send invoices, collect payment, convert payouts to fiat currency, <br/>or keep the cryptocurrency.</h3>-->
            <div class="payout_card2">
                <img src="assets/images/forex.png">
                <h1 >Forex Trading</h1>
            </div> 
            <div class="payout_card2">
                <img src="assets/images/crypto.png">
                <h1>Crypto Trading</h1>
            </div>
            <div class="payout_card2">
                <img src="assets/images/trade (1).png">
                <h1>Trading on International Stock Market</h1>
            </div>
            <div class="payout_card2">
                <img src="assets/images/project m.png">
                <h1>Project Management</h1>
            </div>
            <div class="payout_card2">
                <img src="assets/images/trade (2).png">
                <h1>General Trading</h1>
            </div>

        </div>
</div>





<!---pricing-->
<div class="pricing">
    <center>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <h2>pricing</h2>
            <h1>Choose the right plan for<br> your business</h1>
            <h3>Send invoices, collect payment, convert payouts to fiat <br>currency, or keep the cryptocurrency.</h3>
        </div>
        <div class="card-columns">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="card">
                        <h2>basic transaction fee</h2>
                        <h1>1%</h1>
                        <ul class="tran_features">
                            <li><i class="fa fa-check-circle-o"></i>Immediate setup</li>
                            <li><i class="fa fa-check-circle-o"></i>Dedicated support</li>
                            <li><i class="fa fa-times-circle-o"></i>Automatic conversation</li>
                            <li><i class="fa fa-times-circle-o"></i>Funds management</li>
                            <li><i class="fa fa-times-circle-o"></i>Fast payment</li>
                        </ul>
                        <button> Discover </button>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="card">
                    <h2>avanced transaction fee</h2>
                    <h1>1.5%</h1>
                    <ul class="tran_features">
                        <li><i class="fa fa-check-circle-o"></i>Immediate setup</li>
                        <li><i class="fa fa-check-circle-o"></i>Dedicated support</li>
                        <li><i class="fa fa-check-circle-o"></i>Automatic conversation</li>
                        <li><i class="fa fa-times-circle-o"></i>Funds management</li>
                        <li><i class="fa fa-times-circle-o"></i>Fast payment</li>
                    </ul>
                    <button> Discover </button>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="card">
                    <h2>business transaction fee</h2>
                    <h1>2%</h1>
                    <ul class="tran_features">
                        <li><i class="fa fa-check-circle-o"></i>Immediate setup</li>
                        <li><i class="fa fa-check-circle-o"></i>Dedicated support</li>
                        <li><i class="fa fa-check-circle-o"></i>Automatic conversation</li>
                        <li><i class="fa fa-check-circle-o"></i>Funds management</li>
                        <li><i class="fa fa-check-circle-o"></i>Fast payment</li>
                    </ul>
                    <button> Discover </button>
                </div>
            </div>
        </div>
        </center>
</div>





<!-----testimonals--->
<div class="testimonals">
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
        <div class="left">
            <div class="container">
                <h2>testimonals</h2>
                <h1>Trusted by over 300 companies around the world</h1>
            
            </div>
        </div>
    </div>
        <div class="right">
            <i class='fa fa-star' style='font-size:24px;color:yellow'></i>
            <i class='fa fa-star' style='font-size:24px;color:yellow'></i>
            <i class='fa fa-star' style='font-size:24px;color:yellow'></i>
            <i class='fa fa-star' style='font-size:24px;color:yellow'></i>
            <i class='fa fa-star' style='font-size:24px;color:yellow'></i>


            <h3>“Great! Compared to everything else I’ve ever used, this is the best technology.”</h3>

            <div class="testimonal_card">
                <h2>Nick Green</h2>
                    <h4>Developer</h4>
                    <img src="	https://toka.b-cdn.net/wp-content/uploads/2022/02/98-testimonial.png">
            </div>
        </div>
</div>







<!----get started---->
    <div class="get_started">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="container">
                <h1>Welcome to your <br/>Digital Wealth Plan</h1>
                <h2>Receive payments from anyone, anywhere.</h2>
                <button onclick="location.href='https://lemaconet.com/register'"> Get Started </button>                
            </div>
        </div>
    </div>
@stop