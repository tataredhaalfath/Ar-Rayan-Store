 <!-- Start Side Menu -->
 <div class="side">
     <a href="#" class="close-side"><i class="fa fa-times"></i></a>
     <li class="cart-box">
         <ul class="cart-list">
             <li>
                 <a href="#" class="photo"><img src="<?= base_url('assets/template/images/'); ?>img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                 <h6><a href="#">Delica omtantur </a></h6>
                 <p>1x - <span class="price">$80.00</span></p>
             </li>
             <li>
                 <a href="#" class="photo"><img src="<?= base_url('assets/template/images/'); ?>img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                 <h6><a href="#">Omnes ocurreret</a></h6>
                 <p>1x - <span class="price">$60.00</span></p>
             </li>
             <li>
                 <a href="#" class="photo"><img src="<?= base_url('assets/template/images/'); ?>img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                 <h6><a href="#">Agam facilisis</a></h6>
                 <p>1x - <span class="price">$40.00</span></p>
             </li>
             <li class="total">
                 <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                 <span class="float-right"><strong>Total</strong>: $180.00</span>
             </li>
         </ul>
     </li>
 </div>
 <!-- End Side Menu -->
 </nav>
 <!-- End Navigation -->
 </header>
 <!-- End Main Top -->

 <!-- Start Top Search -->
 <div class="top-search">
     <div class="container">
         <div class="input-group">
             <span class="input-group-addon"><i class="fa fa-search"></i></span>
             <input type="text" class="form-control" placeholder="Search">
             <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
         </div>
     </div>
 </div>
 <!-- End Top Search -->

 <?php
    include('slider.php');
    //load kategori
    include('kategori.php');
    //load data produk
    include('produk.php');
    //load berita
    include('berita.php');
    ?>