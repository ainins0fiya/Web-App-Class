<?php $__env->startSection('content'); ?>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route"
        style="background-image: url(assets/img/overlay-bg.jpg)">
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
                                            List of Student
                                        </h5>
                                    </div>

                                    <button onclick="document.location='/add-student'" class="btn btn-primary">Add New Records</button>

                                    <div>

                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                  <th scope="col">No</th>
                                                  <th scope="col">First Name</th>
                                                  <th scope="col">Last Name</th>
                                                  <th scope="col">Email</th>
                                                  <th scope="col">Phone No</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($student->matric_id); ?></td>
                                                    <td><?php echo e($student->first_name); ?></td>
                                                    <td><?php echo e($student->last_name); ?></td>
                                                    <td><?php echo e($student->email); ?></td>
                                                    <td><?php echo e($student->phone_no); ?></td>
                                                </tr>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                
                                              </tbody>
                                        </table>
                                        
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

<?php echo $__env->make('master.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myFolio\resources\views/student.blade.php ENDPATH**/ ?>