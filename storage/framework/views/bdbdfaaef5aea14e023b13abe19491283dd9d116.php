<?php $__env->startSection('content'); ?>

<div class="br-pagetitle">
  <i class="icon ion-ios-home-outline"></i>
  <div>
    <h4>Dashboard</h4>
    <p class="mg-b-0">Do bigger things with us</p>
  </div>
</div>


<div class="br-pagebody">
  <?php echo $__env->make('admin.inc.info', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row row-sm">
          <div class="col-sm-2">
            <div class="bg-info rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">News & Events</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">10</p>
                </div>
              </div>
              <div id="ch1" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-4 mg-sm-t-0">
            <div class="bg-purple rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <div class="mg-l-20 col-sm">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Gallery</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">20</p>
                  
                </div>

                <div class="mg-l-20 col-sm">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Photos</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">300</p>
                </div>
              </div>
              <div id="ch3" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-3 mg-xl-t-0">
            <div class="bg-teal rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Videos</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">20</p>
                </div>
              </div>
              <div id="ch2" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-3 mg-xl-t-0">
            <div class="bg-primary rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Registration</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">10</p>
                </div>
              </div>
              <div id="ch4" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
        </div><!-- row -->




      </div><!-- br-pagebody -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\Project3rdYear\Laravel\ChessAppPHP\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>