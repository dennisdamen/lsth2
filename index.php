<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webapp</title>

    <!-- Bootstrap -->
    <link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,300,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href="assets/dist/stylesheets/styles.css" rel="stylesheet">


  </head>
  <body>



    <div class="menu-container">
      <span class="menu-burger glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>

      <ul class="menu animated list-unstyled">
        <li><a class="animated artist1" href="#art1">Page 1</a></li>
        <li><a class="animated artist2" href="?artist=artist1">Page 2</a></li>
        <li><a class="animated artist3" href="#art3">Page 3</a></li>
        <li><a class="animated artist4" href="#art4">Page 4</a></li>
      </ul>
    </div>

    <div class="container-fluid">
      <div class="view-port">
        <div class="row" id="artist1">
          <div class="col-xs-12 col-sm-6 block large animated art1">
            <div class="img-container art1"></div>

            <div class="content animated">
              <h2 class="main-title">Large title</h2>
              <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <button data-artist='1' data-showcase='1' class="btn btn-default">show more <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></button>
            </div>
            
            <div class="hover-layer animated"></div>
          </div>

          <div class="col-xs-12 col-sm-6 block medium animated">
            <div class="img-container art2"></div>
            <div class="content animated">
              <h2 class="main-title">Medium title</h2>
              <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <button data-artist="1" data-showcase="2" class="btn btn-default">show more <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></button>
            </div>

            <div class="hover-layer animated"></div>
          </div>

          <div class="col-xs-12 col-sm-3 block small animated">
            <div class="img-container art3"></div>

            <div class="content animated">
              <h2 class="sub-title">Small title</h2>

              <button data-artist='1' data-showcase='3' class="btn btn-default btn-sm">show more <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></button>
            </div>
            
            <div class="hover-layer animated"></div>
          </div>

          <div class="col-xs-12 col-sm-3 block small animated">
            <div class="img-container art4"></div>

            <div class="content animated">
              <h2 class="sub-title">Small title</h2>

              <button data-artist='1' data-showcase='4' class="btn btn-default btn-sm">show more <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></button>
            </div>
            
            <div class="hover-layer animated"></div>
          </div>

          <div class="col-xs-12 col-sm-3 block small animated">
            <div class="img-container art5"></div>

            <div class="content animated">
              <h2 class="sub-title">Small title</h2>

              <button data-artist='1' data-showcase='5' class="btn btn-default btn-sm">show more <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></button>
            </div>
            
            <div class="hover-layer animated"></div>
          </div>

          <div class="col-xs-12 col-sm-3 block small animated">
            <div class="img-container art6"></div>

            <div class="content animated">
              <h2 class="sub-title">Small title</h2>

              <button data-artist='1' data-showcase='6' class="btn btn-default btn-sm">show more <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></button>
            </div>
            
            <div class="hover-layer animated"></div>
          </div>
        </div>

        <!-- ART 2 -->
        <div class="row" id="artist2">
          <div class="col-xs-12 col-sm-6 block large animated">
            <div class="img-container art1"></div>

            <div class="content animated">
              <h2 class="main-title">Large title AJKSDHJKASHD</h2>
              <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            
            <div class="hover-layer animated"></div>
          </div>

          <div class="col-xs-12 col-sm-6 block medium animated">
            <div class="img-container art2"></div>
            <div class="content animated">
              <h2 class="main-title">Medium title</h2>
              <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

            <div class="hover-layer animated"></div>
          </div>

          <div class="col-xs-12 col-sm-3 block small animated">
            <div class="img-container art3"></div>

            <div class="content animated">
              <h2 class="sub-title">Small title</h2>
            </div>
            
            <div class="hover-layer animated"></div>
          </div>

          <div class="col-xs-12 col-sm-3 block small animated">
            <div class="img-container art4"></div>

            <div class="content animated">
              <h2 class="sub-title">Small title</h2>
            </div>
            
            <div class="hover-layer animated"></div>
          </div>

          <div class="col-xs-12 col-sm-3 block small animated">
            <div class="img-container art5"></div>

            <div class="content animated">
              <h2 class="sub-title">Small title</h2>
            </div>
            
            <div class="hover-layer animated"></div>
          </div>

          <div class="col-xs-12 col-sm-3 block small animated">
            <div class="img-container art6"></div>

            <div class="content animated">
              <h2 class="sub-title">Small title</h2>
            </div>
            
            <div class="hover-layer animated"></div>
          </div>
        </div>
      </div>
    </div>

    <?php 
      include('artist1showcase1.php'); 
      include('artist1showcase2.php');
      include('artist1showcase3.php');
      include('artist1showcase4.php');
    ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/src/javascripts/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <script>
  
      $('.menu-burger').click(function() {
        $('.menu').toggleClass('open');
      });

      $('.menu a').click(function(e){
        e.preventDefault();

        var artist = $(this).attr('class');
        index = artist.split("").pop();
        scrollTo = (index - 1) * -100;
        console.log(scrollTo);

        $('.view-port').animate({
          'top' : scrollTo + '%'
        }, 400, 'easeOutCubic')
      });

      $('.btn').click(function(){

        var artist = $(this).data('artist');
        var showcase = $(this).data('showcase');

        openDetailPage(artist,showcase);
      });

      function openDetailPage(artist, showcase){
        $('.detail-page.artist'+artist+'.showcase'+showcase+'').addClass('show');
      }

      $('.close-this').click(function(){
        $('.detail-page').removeClass('show');
      });
  
    </script>
  </body>
</html>

