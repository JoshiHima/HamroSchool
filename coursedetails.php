<!-- Start Header -->
<?php
include('./mainInclude/header.php');
?>
<!-- End Header -->

<!-- Start Course Page Banner-->

<div class="container-fluid p-0" style="height: 80vh; background-color: #000;">
  <div class="row m-0 h-100">
    <img src="image/courseimg/course_banner.jpg" alt="courses"
         style="height: 100%; width: 100%; object-fit: fill; display: block;">
  </div>
</div>
<!-- End Course Page banner-->

<!-- Start Main Content-->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <img src="./image/courseimg/guitar.jpg" alt="Guitar" class="card-img-top">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Course Name: Learn Guitar</h5>
                <p class="card-text">Description: Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam necessitatibus 
                    eveniet optio nulla pariatur ex distinctio vero dignissimos exercitationem architecto, eaque iusto aliquam, mollitia 
                    est eos accusamus perferendis velit impedit!</p>
                <p class="card-text">Duration: 10 Days</p>
                <form action="" method="post">
                    <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small>
                    <span class="font-weight-bold">&#8377 200</span></p> <!-- Used font-weight-bold -->
                    <button class="btn btn-primary text-white font-weight-bolder float-right" name="buy">Buy Now</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">Lesson No.</th>
                        <th scope="col"> Lesson Name</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Introduction</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- End Main Content-->



<!-- Start Footer -->
<?php
include('./mainInclude/footer.php');
?>
<!-- End Footer -->