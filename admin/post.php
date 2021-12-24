<?php
$i = 0;
while($i < 5){ ?>
    <div class="row my-3 text-white neumorphism-up justify-content-between align-items-center">
        <div class="col-md-2 col-12">
            <div class="admin-post-img m-auto">
                <img class="w-100 h-100" class="object-fit-cover" src="https://pixabay.com/get/g80beca4103ed94a5e2490a13b6c53e907efd27cce7344e9a65f3ca1cd27d07e49671543d5c55d199f73d26d2c4ae64419ccdd42af3c5878d605b61d61829b04128f618898102340660f2bc35961ef94c_1920.jpg" alt="">
            </div>
        </div>
        <div class="col-md-9 col-12">
            <div class="p-2">
                <h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor sit amet.....</p>
                <div class="d-flex justify-content-center">
                    <a class="px-3 py-1 text-decoration-none text-white neumorphism-up mx-2" href="edit.php?id=1">Edit</a>
                    <a class="px-3 py-1 text-decoration-none text-white neumorphism-up mx-2" href="delete.php?id=1">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php $i++; } ?>