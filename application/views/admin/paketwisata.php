

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Paket Wisata</h1>

					
					<section class="ftco-section">
            <div class="container">

              <?php
              $numcol = 4;
              $countrow = 0;
              $colwidth = 12 / $numcol;
              ?>

              <div class="row">
                <?php 
                foreach ($trayek as $ty) :
                ?>

          <div class="card mb-3" style="max-width: 540px;">
  					<div class="row no-gutters">
    				<div class="col-md-4">
                <td>
      				  <img src="<?= base_url('assets/img/') . $ty['gambar']; ?>" class="card-img">
              </td>
    				</div>
    				<div class="col-md-8">
      				  <div class="card-body">
        				<td>
                <h5 class="card-title"><?= $ty['lokasi']; ?></h5>
              </td>
        				<a href="#" class="btn btn-primary">Lihat</a>
      				  </div>  
    				</div>
  					</div>
					</div>  

          <?php
          endforeach;
          ?>

              </div>

          <?php
        $countrow++;
        if ($countrow % $numcol == 0) {
          echo '</div><div class="row">';
        }

        ?>

            </div>
          </section>                  
          
                

                </div>
            

            </div>
            <!-- End of Main Content -->