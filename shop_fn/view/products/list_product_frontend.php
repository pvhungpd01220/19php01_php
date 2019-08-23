
<div class="list_product">
            <div class="container">
               <div class="hot-products">
                  <h3 class="title"><strong>Hot</strong> Products</h3>
                  <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
                  <ul id="hot">
                     <li>

                        <div class="row" >

                 <?php 
 					while($row = $listProduct->fetch_assoc()) {
 					$id = $row['id'];
				?>
                  <div class="col-md-3 col-sm-6">
                    <div class="products">
                      <div class="offer">
                        New
                      </div>
                      <div class="thumbnail">

                          <img src="webroot/uploads/products/<?php echo $row['image']?>" style="height:180px;">
                        </a>
                      </div>
                      <div class="productname"><a href="index.php?controller=product&action=product_detail&id=<?php echo $id?>"><?php echo $row['name']?></a></div>
                      <h4 class="price">
                        <?php echo $row['price']?> VND
                      </h4>
                      <div class="button_group">
                        <a href="giohang.php?id=<?= $value['pro_id'] ?>" class="button add-cart">
                          Add To Cart
                        </a>
                        <button class="button compare" type="button">
                          <i class="fa fa-exchange">
                          </i>
                        </button>
                        <button class="button wishlist" type="button">
                          <i class="fa fa-heart-o">
                          </i>
                        </button>
                      </div>
                    </div>
                  </div>


                <?php } ?>

                     </li>
                  </ul>
               </div>
