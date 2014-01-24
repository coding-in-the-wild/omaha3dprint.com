<?php include('header.php'); ?>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="./assets/img/printer_zoomin.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Print 3D Things</h1>
              <p class="lead">With the magic of 3D printing, you can do anything basically.</p>
              <a class="btn btn-large btn-primary" href="#order">Order something!</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="./assets/img/printer_zoomout.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Watch the printer</h1>
              <p class="lead">Have you ever wondered how it works? You can watch a live feed.</p>
              <a class="btn btn-large btn-primary" href="#watch">Watch now!</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="./assets/img/slide-03.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Learn more!</h1>
              <p class="lead">You probably have questions, and we maybe have answers.</p>
              <a class="btn btn-large btn-primary" href="#about">Learn more</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
<!--       <div class="row">
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>About</h2>
          <p>We got a 3D printer a while back, and after we learned how to use it we decided to let other people make things and watch.</p>
          <p><a class="btn" href="#about">Learn more &raquo;</a></p>
        </div>
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Order</h2>
          <p>It's pretty easy to order something, look at the simple order form.</p>
          <p><a class="btn" href="#order">Try ordering &raquo;</a></p>
        </div>
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Watch</h2>
          <p>Just for funsies, we put up the video of the printer. If there's something printing, you can watch it!</p>
          <p><a class="btn" href="#watch">Watch printer &raquo;</a></p>
        </div>
      </div> -->

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="featurette" id="about">
        <img class="featurette-image pull-right" src="./assets/img/archer_stl.png">
        <h2 class="featurette-heading">About Us. <span class="muted">Just two guys with a dream.</span></h2>
        <p class="lead">Founded by just two guys born and raised in Omaha, Nebraska, Omaha 3D Print is your local 3D printing resource. We started in a garage, spending countless hours calibrating and testing the limits of our Solidoodle 2 3D printer. After getting a few requests from friends to design and create 3D objects we decided this is something we need to share with the community.</p>
        <p class="lead">With the power of 3D printing a digital model can be turned into a physical object you can hold in your hands.</p>
        <p class="lead">Just send us a 3D object file and we will create it out of thin air (thick plastic, actually). You can find many models already made at <a href="http://www.thingiverse.com/">Thingiverse</a>. If you don't have the file, we offer consulting services to help design your creation.</p>
        <p class="lead">Let us help you turn your ideas into reality.</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette" id="watch">
        <div class="featurette-image pull-left">
        	<iframe src="http://www.ustream.tv/embed/14980765" width="608" height="368" scrolling="no" frameborder="0" style="border: 0px none transparent;"></iframe>
        </div>
        <h2 class="featurette-heading">Watch the Printer. <span class="muted">See for yourself!</span></h2>
        <p class="lead">If it's live, you can watch the printer to the left, or on <a href="http://www.ustream.tv/channel/omaha-3d-print">Ustream</a>.</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette" id="order">
        <h2 class="featurette-heading">Order Parts. <span class="muted">Have some 3D parts, fast.</span></h2>

		<?php if (isset($_GET['order_success'])) { ?>

        <div class="container">
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<h4>Congratulations!</h4>
				<p>One of us dudes will be getting an email any minute now! We'll look at it ASAP, make sure we can print it, and email you back. You rock and/or are an awesome person!</p>
				</div>

		<?php } else { ?>

	        <p class="lead">This is an actual order form here.</p>
	        <div class="container">

		<?php if (isset($_GET['order_error'])) { ?>

			<div class="alert alert-error">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<h4>OH NOES!</h4>
				<?php print($_GET['order_error']); ?> <br>You could try again, maybe?
			</div>

		<?php } ?>

		    <form class="form-horizontal" method="POST" name="order_form" id="order_form" action="./order_form.php" enctype="multipart/form-data">
			    <div class="control-group">
				    <label class="control-label" for="inputEmail">Email Address</label>
				    <div class="controls"><input type="text" id="inputEmail" name="inputEmail" placeholder="Email..."></div>
				</div>
				<div class="control-group">
				    <label class="control-label" for="stlFile">STL File</label>
				    <div class="controls"><input type="file" id="stlFile" name="stlFile" placeholder="File..."></div>
				</div>
				<div class="control-group">
				    <label class="control-label" for="extraNotes">Extra Notes?</label>
				    <div class="controls"><textarea rows="4" id="extraNotes" name="extraNotes" placeholder="Any extra notes?"></textarea></div>
				</div>
				<div class="control-group">
				    <div class="controls"><input type="submit" class="btn" value="Send" name="submit283947590"></div>
				</div>
		    </form>

<?php } ?>

        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 Davis Research Group</p>
      </footer>

    </div><!-- /.container -->

<?php include('footer.php'); ?>