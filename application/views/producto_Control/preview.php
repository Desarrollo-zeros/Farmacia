<?php
defined('BASEPATH') OR exit('No direct script access allowed');


?>
<!Doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url("");?>plugin/css/nav.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url("");?>plugin/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url("");?>plugin/css/Colores.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo base_url("");?>plugin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url("");?>plugin/css/profile.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="<?php echo base_url("");?>plugin/js/registrar.js"></script>
    <script src="http://jquerymodal.com/jquery.modal.js"></script>
    <script src="<?php echo base_url("");?>plugin/js/jquery.openCarousel.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url("");?>plugin/js/easing.js"></script>
    <script type="text/javascript" src="<?php echo base_url("");?>plugin/js/move-top.js"></script>
    <title>Drogueria San Jorge #1</title>
    <link href="<?php echo base_url("");?>plugin/css/style1.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>
<br>
<p class="text-center info">Línea de Atencion Valledupar-Cesar Tele: <strong>| Centro: (035)-5725115 - 3233705391 | San Jorge: (035)-5802431 - 3226008317 | Villa el Rosario: (035)-5842090 - 3226017032 | <strong>Correo: Drogueriasanjorgen1@gmail.com</strong></strong></p>
<nav class="navbar navbar-default1">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Drogueria San Jorge #1</a>
        </div>
        <ul class="nav navbar-nav menu_gral">
            <li><a href="#">Inicio</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dermocosmética<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">cuidado capilar</a></li>
                    <li><a href="#">dermolimpiadores</a></li>
                    <li><a href="#">protección solar</a></li>
                    <li><a href="#">cicatrizante</a></li>
                    <li><a href="#">hidratantes</a></li>
                    <li><a href="#">antiestrias</a></li>
                    <li><a href="#">antiedad</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Para el Bebe<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Accesorios</a></li>
                    <li><a href="#">Alimentos</a></li>
                    <li><a href="#">Higiene Para el Bebe</a></li>
                    <li><a href="#">leche para el Bebe</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Promociones<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Abril</a></li>
                    <li><a href="#">Mayo</a></li>
                </ul>
            </li>
        </ul>

        <form class="navbar-form navbar-left">
            <div class="input-group">
                <!-- <input type="text" class="form-control" placeholder="Busca el Producto que deseas"> -->
                <input type="text" name="buscar"  placeholder="Buscar Producto">
            </div>
        </form>

        <ul class="nav navbar-nav navbar-right">
            <?php
            if(!empty($_SESSION['email'])){
                echo '<li><a href=""><span class="glyphicon glyphicon-user"></span> Perfil</a></li>
                <li><a href="account/logout"><span class="glyphicon glyphicon-user"></span>Salir</a></li>';
            }else{
                if(!empty($authUrl))
                {
                    echo '<li><a href="account/registration"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
                <li><a href="account/login"><span class="glyphicon glyphicon-user"></span> Iniciar Seccíon</a></li>';
                }
                else
                {
                    echo '<li><a href=""><span class="glyphicon glyphicon-user"></span> Perfil</a></li>
                <li><a href="account/loung"><span class="glyphicon glyphicon-user"></span>Salir</a></li>';
                }
            }
            ?>

    </div>
</nav>
<hr>
       <!------------End Header ------------>
   <div class="main">
   	 <div class="wrap">
   	 	<div class="preview-page">
   	 	       <div class="section group">
				<div class="cont-desc span_1_of_2">
					<ul class="back-links">
						<li><a href="#">Inicio</a> ::</li>
						<li><a href="#">Pagina de productos</a> ::</li>
						<li>Nombre del producto</li>
						<div class="clear"> </div>
					</ul>
				  <div class="product-details">
					<div class="grid images_3_of_2">
                        <?php

                        foreach ($ViewProductos as $row) {
                         if($row['id']==$_GET['id']){
                            echo '<ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="'.base_url("").'uploads/'.$row['img'].'" />
								</a>
							</li>
						</ul>';
                        echo '  </div>
				        <div class="desc span_3_of_2">
					    <h2>'.$row['nombre'].'</h2>
					    <p>'.$row['text'].'</p>					
					    <div class="price">
						    <p>Precio: <span>'.$row['precio'].'</span></p>
					    </div>
					<div class="available">
						<ul>
						  <li><span>Categoria:</span> &nbsp; '.$row['categoria'].'</li>
					    </ul>
					</div>
				<div class="share-desc">
					<div class="share">
						<p>Numeros de unidades :</p><input type="number" class="text_box" type="text" value="1" min="1" />				
					</div>
					<div class="button"><span><a href="#">Add to Cart</a></span></div>					
					<div class="clear"></div>
				</div>
				 <div class="wish-list">
				 	<ul>
				 		<li class="wish"><a href="#">Add to Wishlist</a></li>
				 	    <li class="compare"><a href="#">Add to Compare</a></li>
				 	</ul>
				 </div>
				 <div class="colors-share">
				 	<div class="color-types">
				 		<h4>Available Colors</h4>
				 		<form class="checkbox-buttons">
							<ul>
								<li><input id="r1" name="r1" type="radio"><label for="r1" class="grey"> </label></li>
								<li><input id="r2" name="r1" type="radio"><label for="r2" class="blue"> </label></li>
								<li><input id="r3" name="r1" type="radio"><label class="white" for="r3"> </label></li>
								<li><input id="r4" name="r1" type="radio"><label class="black" for="r4"> </label></li>
							</ul>
						 </form>
				 	</div>
				 	<div class="social-share">
				 		<h4>Share Product</h4>
				 			  <ul>
									<li><a class="share-face" href="#"> </a></li>
									<li><a class="share-twitter" href="#"> </a></li>
									<li><a class="share-google" href="#"> </a></li>
									<li><a class="share-rss" href="#"> </a></li>
									<div class="clear"> </div>
						    </ul>
				 	</div>
				 	<div class="clear"></div>
				 </div>
			</div>
			<div class="clear"></div>
		  </div>
		<div class="product_desc">	
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li>Specifications</li>
					<li>product Tags</li>
					<li>Product Reviews</li>
					<div class="clear"></div>
				</ul>
				<div class="resp-tabs-container">
					<div class="product-specifications">
						<ul>
		                  <li><span class="specification-heading">Body type</span> <span>Metal</span><div class="clear"></div></li>
		                  <li><span class="specification-heading">Spin Speed (rpm)</span> <span>0/400/800/1000/1200</span><div class="clear"></div></li>
		                  <li><span class="specification-heading">Machine weight (kg)</span> <span>75</span><div class="clear"></div></li>
		                  <li><span class="specification-heading">Wash System</span> <span>Tumble wash</span><div class="clear"></div></li>
		                  <li><span class="specification-heading">Door diameter (mm)</span> <span>300</span><div class="clear"></div></li>
		                  <li><span class="specification-heading">Dimensions (w*d*h) without packing</span> <span>595x595x850</span><div class="clear"></div></li>
		                  <li><span class="specification-heading">Power Supply</span> <span>230V, 50Hz, 16Amps</span><div class="clear"></div></li>
		                  <li><span class="specification-heading">Motor (Watts)</span> <span>440 for Wash/490 for Spin</span><div class="clear"></div></li>
		                  <li><span class="specification-heading">Drum basket</span> <span>stainless steel</span><div class="clear"></div></li>
		                  <li><span class="specification-heading">Adjustable Feet</span> <span>4 </span><div class="clear"></div></li>
		                </ul>
				 	</div>
				 
				   <div class="product-tags">
						 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
					<h4>Add Your Tags:</h4>
					<div class="input-box">
						<input type="text" value="">
					</div>
					<div class="button"><span><a href="#">Add Tags</a></span></div>
			    </div>	

				<div class="review">
					<h4>Lorem ipsum Review by <a href="#">Finibus Bonorum</a></h4>
					 <ul>
					 	<li>Price : <div class="rating-stars"><div class="rating" data-rating-max="5"> </div> </div>
						</li>
					 	<li>Value : <div class="rating-stars"><div class="rating" data-rating-max="5"> </div> </div></li>
					 	<li>Quality : <div class="rating-stars"><div class="rating" data-rating-max="5"> </div> </div></li>
					 </ul>
					 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				  <div class="your-review">
				  	 <h4>How Do You Rate This Product?</h4>
				  	  <p>Write Your Own Review?</p>
				  	  <form>
					    	<div>
						    	<span><label>Nickname<span class="red">*</span></label></span>
						    	<span><input type="text" value=""></span>
						    </div>
						    <div><span><label>Summary of Your Review<span class="red">*</span></label></span>
						    	<span><input type="text" value=""></span>
						    </div>						
						    <div>
						    	<span><label>Review<span class="red">*</span></label></span>
						    	<span><textarea> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="SUBMIT REVIEW"></span>
						  </div>
					    </form>
				  	 </div>			
				  	  <script type="text/javascript">
										 /* place inside document ready function */
										 $(".rating").starRating({
										  minus: true // step minus button
										});
									</script>	
				</div>
			  </div>
		    </div>
	    </div>
      </div>';
                         }
                        }
                        ?>

				   <div class="rightsidebar span_3_of_1 sidebar">
					<h3>Popular Products</h3>
					<ul class="popular-products">
						<li>
							 <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
							  <a href="preview.html"><img src="images/product-img2.jpg" alt="" /></a>
							  <div class="price-details">
						       <div class="price-number">
									<p><span class="rupees line-through">$899.95 </span> &nbsp; <span class="rupees">$839.93 </span></p>
							    </div>
							       		<div class="add-cart">
											<h4><a href="preview.html">More Info</a></h4>
									     </div>
									 <div class="clear"></div>
							</div>
						</li>
						<li>
							 <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
							  <a href="preview.html"><img src="images/product-img3.jpg" alt="" /></a>
							  <div class="price-details">
						       <div class="price-number">
									<p><span class="rupees line-through">$899.95 </span> &nbsp; <span class="rupees">$839.93 </span></p>
							    </div>
							       		<div class="add-cart">
											<h4><a href="preview.html">More Info</a></h4>
									     </div>
									 <div class="clear"></div>
							</div>
						</li>
						<li>
							 <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
							  <a href="preview.html"><img src="images/product-img4.jpg" alt="" /></a>
							  <div class="price-details">
						       <div class="price-number">
									<p><span class="rupees line-through">$899.95 </span> &nbsp; <span class="rupees">$839.93 </span></p>
							    </div>
							       		<div class="add-cart">
											<h4><a href="preview.html">More Info</a></h4>
									     </div>
									 <div class="clear"></div>
							</div>
						</li>
				     </ul>

      				   <div class="community-poll">
      				 	<h3>Community POll</h3>
      				 	<p>What is the main reason for you to purchase products online?</p>
      				 	<div class="poll">
      				 		<form>
      				 			<ul>
									<li>
									<input type="radio" name="vote" class="radio" value="1">
									<span class="label"><label>More convenient shipping and delivery </label></span>
									</li>
									<li>
									<input type="radio" name="vote" class="radio" value="2">
									<span class="label"><label for="vote_2">Lower price</label></span>
									</li>
									<li>
									<input type="radio" name="vote" class="radio" value="3">
									<span class="label"><label for="vote_3">Bigger choice</label></span>
									</li>
									<li>
									<input type="radio" name="vote" class="radio" value="5">
									<span class="label"><label for="vote_5">Payments security </label></span>
									</li>
									<li>
									<input type="radio" name="vote" class="radio" value="6">
									<span class="label"><label for="vote_6">30-day Money Back Guarantee </label></span>
									</li>
									<li>
									<input type="radio" name="vote" class="radio" value="7">
									<span class="label"><label for="vote_7">Other.</label></span>
									</li>
									</ul>
      				 		</form>
      				 	</div>
      				 </div>
					</div>
 		 		   </div>
 		 		</div>
   	 		</div>
   	 		<div class="content_top">
    	        	<div class="wrap">
		          	   <h3>Recently Viewed</h3>
		          	</div>
		          	<div class="line"> </div>
		          	<div class="wrap">
		          	 <div class="ocarousel_slider">
	      				<div class="ocarousel example_photos" data-ocarousel-perscroll="3">
			                <div class="ocarousel_window">
			                   <a href="#" title="img1"> <img src="images/latest-product-img1.jpg" alt="" /><p>Nuncvitae</p></a>
			                   <a href="#" title="img2"> <img src="images/latest-product-img2.jpg" alt="" /><p>Suspendiss</p></a>
			                   <a href="#" title="img3"> <img src="images/latest-product-img3.jpg" alt="" /><p>Phasellus ferm</p></a>
			                   <a href="#" title="img4"> <img src="images/latest-product-img4.jpg" alt="" /><p>Veldignissim</p></a>
			                   <a href="#" title="img5"> <img src="images/latest-product-img5.jpg" alt="" /><p>Aliquam interd</p></a>
			                   <a href="#" title="img6"> <img src="images/latest-product-img6.jpg" alt="" /><p>Sapien lectus</p></a>
			                   <a href="#" title="img1"> <img src="images/latest-product-img1.jpg" alt="" /><p>Nuncvitae</p></a>
			                   <a href="#" title="img2"> <img src="images/latest-product-img2.jpg" alt="" /><p>Suspendiss</p></a>
			                   <a href="#" title="img3"> <img src="images/latest-product-img3.jpg" alt="" /><p>Phasellus ferm</p></a>
			                   <a href="#" title="img4"> <img src="images/latest-product-img4.jpg" alt="" /><p>Veldignissim</p></a>
			                   <a href="#" title="img5"> <img src="images/latest-product-img5.jpg" alt="" /><p>Aliquam interd</p></a>
			                   <a href="#" title="img6"> <img src="images/latest-product-img6.jpg" alt="" /><p>Sapien lectus</p></a>
			                </div>
			               <span>
			                <a href="#" data-ocarousel-link="left" style="float: left;" class="prev"> </a>
			                <a href="#" data-ocarousel-link="right" style="float: right;" class="next"> </a>
			               </span>
					   </div>
				     </div>
				   </div>
    	       </div>
        </div>

     <div class="footer">
   	  <div class="wrap">
			 <div class="copy_right">
				<p>Copy rights (c). All rights Reseverd | Template by  <a href="http://w3layouts.com" target="_blank">W3Layouts</a> </p>
		   </div>
		   <div class="footer-nav">
		   	<ul>
		   		<li><a href="#">Terms of Use</a> : </li>
		   		<li><a href="#">Privacy Policy</a> : </li>
		   		<li><a href="contact.html">Contact Us</a> : </li>
		   		<li><a href="#">Sitemap</a></li>
		   	</ul>
		   </div>
        </div>
    </div>
   <script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
    <a href="#" id="toTop"> </a>
       <script type="text/javascript" src="js/navigation.js"></script>
</body>
</html>

