<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rasta-Cooking-Restaurant</title>
  <link rel="stylesheet" href="./styles.css">
  <!-- bootsrap link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- bootsrap link -->
  <!-- link fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body class="">
  <header>
    <?php
    include('./header/header.php');
    ?>
  </header>


  <main class="container-fluid">
    <!-- section one begins here slider -->
    <section class="sect1">
      <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>

          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="./images/slider223.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption myline d-none d-md-block">
                <h5>Jollof-Rice & Meat</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
              </div>
            </div>
            <div class="carousel-item">

              <img src="./images/regusiori.jpg" class=" d-block w-100" alt="...">
              <div class="carousel-caption myline d-none d-md-block">
                <h5>Egusi & Eba</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./images/egusi3.jpeg" class="d-block w-100" alt="...">
              <div class="carousel-caption myline d-none d-md-block">
              <h5>Egusi Soup</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./images/ogbono.jpeg" class="d-block w-100" alt="...">
              <div class="carousel-caption myline d-none d-md-block">
              <h5>Ogbono Soup</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
           

          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </section>
    <div class="trest container-fluid">

      <div class="row ml-4">
        <div class="col-lg-3 col-md-6">
          <div class="circle">
            <ul>
              <li><i class="fa-solid fa-cart-shopping"></i></li>
              <li class="textr">Online-Order</li>
            </ul>

          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="circle">
            <ul>
              <li><i class="fa-solid fa-truck"></i></li>
              <li class="textr">Fast-Delivery</li>

            </ul>

          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="circle">
            <ul>
              <li><i class="fa-solid fa-gift"></i></li>
              <li class="textr">Special-Gift</li>

            </ul>

          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="circle">
            <ul>
              <li><i class="fa-solid fa-user-group"></i></li>
              <li class="textr">Friendly-Support</li>

            </ul>

          </div>
        </div>

      </div>

    </div>
    <section class="sect3">
      <div class="row">
        <div class="col-12 text-center">
          <p>POPULAR PRODUCT</p>
          <h3 class="t1">TASTY AND GOOD PRICE</h3>

        </div>

      </div>

    </section>
    <section class="sect4 container">
      <div class="row pt-3">
        <div class="col-lg-4 col-md-4">
          <div class="card " style="width: rem;">
            <img class="card-img-top" src="https://media.istockphoto.com/photos/jollof-rice-with-chicken-and-fried-plantain-west-african-cuisine-picture-id644430324?k=20&m=644430324&s=612x612&w=0&h=BTAQLeNSGXIJbuex6ap0MLrT_f-mm-pe71fGbbCm01o=" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">JOLLOF-RICE & PLANTAIN</h6>
              <p class="right">$ 25</p>
              <p class="card-text">Rice cooked in a zesty tomato sauce with spices and herb,  zesty tomato sauce with spices and herb.</p>
              <a href="contatti.php" class="btn btn-primary btmy ">Order-Now</a>
            </div>

          </div>

        </div>
        <div class="col-lg-4 col-md-4">
          <div class="card" style="width: ;">
          <img class="card-img-top" src="https://media.istockphoto.com/photos/nigerian-egusi-soup-served-with-pounded-yam-picture-id1280669361?k=20&m=1280669361&s=612x612&w=0&h=T_fRzum1bbkVTnCB9PUY5zvsDrdtxgW9xt7tNTjeMHA=" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">EGUSI & POUNDED YAM</h6>
              <h3 class="right">$ 25</h3>
              <p class="card-text">Egusi soup with fish, a Nigerian dish made with melon,basil and palm oil is eaten with fufu or pounded yam etc..</p>
              <a href="contatti.php" class="btn btn-primary btmy ">Order-Now</a>
            </div>

          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="card" style="width: ;">
          <img class="card-img-top" src="https://media.istockphoto.com/photos/nigerian-traditional-pounded-yam-served-with-ogbono-soup-picture-id1008392778?k=20&m=1008392778&s=612x612&w=0&h=zalStJ5o7TGk7SHRFmDizl8_QJRKzQWSBY8hVgeQmJg=" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">OGBONO & POUNDED YAM</h6>
              <h3 class="right">$ 25</h3>
              <p class="card-text">Draw soup made from African mango tree. Delicious soup including fish , meat , crayfish etc</p>
              <a href="contatti.php" class="btn btn-primary btmy ">Order-Now</a>
            </div>

          </div>
        </div>
        

      </div>

      <div class="row pt-3">
      <div class="col-lg-4 col-md-4">
          <div class="card " style="width: rem;">
            <img class="card-img-top" src="https://storage.dado.ng/wp-content/uploads/2018/11/06200125/1527927368.jpg" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">WHITE RICE & PLANTAIN</h6>
              <p class="right">$ 25</p>
              <p class="card-text">White rice with plantain fish or meat, Sweet and really yummy with enough pepper</p>
              <a href="contatti.php" class="btn btn-primary btmy ">Order-Now</a>
            </div>

          </div>

        </div>
        <div class="col-lg-4 col-md-4">
          <div class="card" style="width: ;">
          <img class="card-img-top" src="https://www.organicfacts.net/wp-content/uploads/ewaagoyinmashedbeans.jpg" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">EWAGOYIN (BEANS)</h6>
              <h3 class="right">$ 25</h3>
              <p class="card-text">Ewagoyin is a typical african dish and really delicious.</p>
              <a href="contatti.php" class="btn btn-primary btmy ">Order-Now</a>
            </div>

          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="card" style="width: ;">
          <img class="card-img-top" src="https://intercontinentalfoodcourt.ie/wp-content/uploads/2020/10/assorted-meat-pepper-soup.jpg" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">PEPPER SOUP GOAT MEAT</h6>
              <h3 class="right">$ 25</h3>
              <p class="card-text">Pepper Soup meat or fish <strong style="color: red;">ON REQUEST.</strong>  for Aperitivo time and relaxing dish . Spciy lovers</p>
              <a href="contatti.php" class="btn btn-primary btmy ">Order-Now</a>
            </div>

          </div>
        </div>
        

      </div>


     
    </section>
    <!-- for future pirpose -->
    <!-- <div class="tr container-fluid">
          <div class="row">
            <div class="col-6 jumbo">

            <div class="row">
              <div class="offset-6 col-4 col-md-6 side mt-4 pt-4">
                <h4>HONEY CAKE</h4>
                <p style="color: white;">NEW DISHES THIS WEEK</p>
                <a href="" class="btn btn-primary ">READ MORE</a>

              </div>

            </div>

              
            </div>
            <div class="col-6 jumbo1">
            <div class="row">
              <div class="offset-2 col-4 col-md-6 side mt-4 pt-4">
                <h4>HAM STORY</h4>
                <p style="color: white;">NEW DISHES THIS WEEK</p>
                <a href="" class="btn btn-primary ">READ MORE</a>

              </div>

            </div>

            </div>

          </div>

       

    </div> -->
    <!-- END OF PAGE  -->
  

    




  </main>
  <footer class="">

    <?php include('./footer/footer.php') ?>

  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!-- bootsrap  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- bootsrap ends -->
</body>

</html>