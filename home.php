
<style>
    .dbdb
    {
        width: 220px;z-index: 000;
        color: white;
        font-size: 30px;
        background-color: black;
        padding-left: 22px;
        border-radius: 30px;
        padding-right: 22px;
        padding-top: 10px;
        padding-bottom: 10px;
        border: 2px solid white;
        cursor:pointer;
        transition-duration: .7s;
    }
    .dbdb:hover
    {
        color: black;
        background-color:  white;
        border: 2px solid black;
        transition-duration: .7s;
        width: 230px;
        padding-left: 27px; 
    }
    @media only screen and (max-width: 967px)
    {
        .dbdb
    {
        
        width: 220px;
        z-index: 000;
        color: white;
        font-size: 22px;
       padding-right: 22px;
        padding-left: 22px;
        border-radius: 30px;
        margin-bottom: 20px;    
        border: 2px solid white;
        cursor:pointer;
        transition-duration: .7s;
    }

    .slidemain
{
    height: 670px;
    width: 100%;
    margin-top: 100px;
    background-color: lightgrey;
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-direction: column;
}
  
    }
    #slideshow
{
	
	
height: 84%;
	margin-top: 10px;
    width: 70%;
    margin-bottom: 10px;
    margin-left: 10px;
    margin-right: 30px;
	box-shadow: 1px 2px 6px 1px grey;
    	background-image:url(images/Home/Cover_Gallery_4.jpg);
	 background-size:     contain;                      /* <------ */
    background-repeat:   no-repeat;
    background-position: center center;  
	overflow: hidden;
	transition-timing-function:ease;
	transition-duration: 1s;
	border:2px solid white;
	

}
.slidemain
{
    height: 520px;
    width: 100%;
    margin-top: 80px;
    background-color: #fff2aa;
    display: flex;
     justify-content: space-between;
    align-items: center;
   
}
.content
{
     text-align: left;margin-top: -10px;padding-top: 0;
}
</style>
<script>
    function downq() {
  $("html, body").animate({ scrollTop: $('#aaoto').offset().top }, 1000);
}
  /*
  background: #d09c47 url('images/Home/Cover_Gallery_1.jpg')
  background: #d7bda5 url('images/Home/Cover_Gallery_2.jpg')
  background: #d09c47 url('images/Home/Cover_Gallery_3.jpg') 
  background: url('images/play.png')
   <a class="dbdb" onclick="downq()" id="donatebutton">Donate Now!</a>
  */
  var count=0;

function slide(){
	switch(count)
	{
		case 0:
		document.getElementById("slideshow").style.backgroundImage="url(images/Home/Cover_Gallery_1.jpg)";
		break;
		case 1:
		document.getElementById("slideshow").style.backgroundImage="url(images/Home/Cover_Gallery_2.jpg)";
		break;
		case 2:
		document.getElementById("slideshow").style.backgroundImage="url(images/Home/Cover_Gallery_3.jpg)";
		break;
		default:
		document.getElementById("slideshow").style.backgroundImage="url(images/Home/Cover_Gallery_4.jpg)";
		count=-1;
	}
	count++;
}
var myvar=setInterval(slide,5000);

</script>
<div class="slidemain" 
">
<div id="slideshow" onload="slide()" >
</div>
 <div><h1>“Bring smiles to the face of children” </h1> <br><h2> Gift DESKITs and bring smiles</h2><br><a class="dbdb" onclick="downq()" id="donatebutton">Donate Now!</a><br><br></div>
</div>

 
<div data-panel-name="lack-of-infrastructure" class="" style="background-color:rgb(253, 193, 7);height: auto;">

    <div  style="height: 900px;">
        <h1 class="" style="text-align: left;padding-top: 30px;padding-left: 20px;">Lack of infrastructure</h1>
        <div class="row">
            <div class="col-md-8 col-graphic-left" style="padding-top: 20px;padding-left: 20px;">
               
                <img src="images/Home/hunched_back.jpg" style="border: 4px solid white;" />
            </div>
            <div class="col-md-3 col-text-right resizetext">
                
                <h2 class="content">Lack of infrastructure</h2>
                <p>Even today, many schools in India lack basic infrastructural facilities. Sitting for long hours with hunched back has a major negative effect on child's health where both back and eye get strained and also results in poor hand writing.</p>
                <p class="white"><a href="/deskit" class="btn btn-primary btn-outline btn-lg">Know More</a></p>
            </div>
        </div>
    </div>
</div>
<div data-panel-name="deskit"  style="background-color:rgb(73, 172, 226);height: auto;">
	<div style="height: 1000px;">
        <h1  style="padding-top: 2em;padding-left: 10px;">DESKIT</h1>
        <div class="row">
            <div class="col-md-8 col-md-push-4 col-graphic-right" style="padding-top: 20px;padding-left: 20px;">
                <img src="images/Home/using_deskit.jpg" style="border: 4px solid white;" />
            </div>
            <div class="col-md-3 col-md-pull-7 col-text-left resizetext">
                <h2 >DESKIT</h2>
                <p>DESKIT is a writing companion for students to aid in comfortable writing and to assist in maintaining a proper body posture. It is designed especially for children who lack basic infrastructural facilities at school as well as home. DESKIT also motivates children to attend school sincerely and regularly and thereby shaping a bright future for them!</p>
                <p class="white"><a href="/deskit" class="btn btn-primary btn-outline btn-lg">Know More</a></p>
            </div>  
	    </div>
    </div>
</div>
<div data-panel-name="pbmm" style="height: auto;background-color:rgb(136, 167, 75);">
	<div style="height: 1000px;">
        <header  style="padding-top: 1em;padding-left: 10px;">
            <h2>PBMM</h2>
            <h4>Paper Bag Making Machine</h4>
        </header>
        <div class="row" style="height:100%;">
            <div class="col-md-8 col-graphic-left" style="padding-top: 20px;padding-left: 20px;">
                <img src="images/Home/pbmm.png" style="border: 4px solid white;"  />
            </div>
            <div class="col-md-3 col-text-right resizetext" >
                <header class="hidden-sm-down">
                    <h2>PBMM</h2>
                    <h4>Paper Bag Making Machine</h4>
                </header>
                <p class="">At PROSOC we are designing and developing a compact low-cost paper carry bag making machine. Our mission is to enable the mass production of eco-friendly and bio-degradable carry bags in every small village/town in India through our machine and thereby creating many employment opportunities throughout the country.</p>
                <p class="white"><a href="/pbmm" class="btn btn-primary btn-outline btn-lg">Know More</a></p>
           </div>
        </div>
    </div>
</div>    <div id="aaoto"><br></div>
<div  data-panel-name="outreach" id="fh5co-services" class="panel">
    <div class="container vcenter">
        <div class="row">
            <div class="col-md-4 col-sm-4 text-center">
                <div class="feature-center animate-box" data-animate-effect="fadeIn">
                    <a href="<?php echo SITE_URL ?>/contact#reach-us">
                        <span class="icon">
                            <i class="fa fa-credit-card" aria-hidden="true"></i>
                        </span>
                        <h3>Donate/Purchase</h3>
                        <p>If you are interested to donate DESKIT to a child or purchase DESKIT feel free to contact us. 
                        </p>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 text-center">
                <div class="feature-center animate-box" data-animate-effect="fadeIn">
                    <a href="<?php echo SITE_URL ?>/contact#reach-us">
                        <span class="icon">
                        <i class="fa fa-handshake-o" aria-hidden="true"></i>
                        </span>
                        <h3>Collaborate</h3>
                        <p>We are looking for collaboration with: 1. CSR initiatives for sponsoring DESKIT to needy students. 2. NGOs as distribution partner for DESKIT.</p>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 text-center">
                <div class="feature-center animate-box" data-animate-effect="fadeIn">
                    <a href="<?php echo SITE_URL ?>/contact#enquiry">
                        <span class="icon">
                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        </span>
                        <h3>Enquiry</h3>
                        <p>If you would like to know more about our products DESKIT and PBMM please drop a message.
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var footer_class = 'gray-bg';
</script>