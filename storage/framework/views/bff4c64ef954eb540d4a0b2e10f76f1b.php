<?php $__env->startSection('content'); ?>

<div id="hero" class="hero route bg-image" style="background-image: url(assets/img/ainincfs.jpg)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="hero-title mb-4">I am Ainin Sofiya</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
</div><!-- End Hero Section -->

<section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-12">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Add Student Student
                    </h5>
                  </div>
                  <div>
                    <form action="addstudent" method="post" role="form" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                  <input type="text" name="matric_id" class="form-control" id="matric_id" placeholder="Matric ID" required>
                                </div>
                              </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="phone_no" id="phone_no" placeholder="Phone No" required>
                            </div>
                          </div>
                          <div class="col-md-12 text-center">
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
                      </form>

                  </div>
                </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Contact Section -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myFolio\resources\views/add-student.blade.php ENDPATH**/ ?>