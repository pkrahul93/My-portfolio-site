<?php include 'sidebar.php'; ?>

<?php

$message = '';
$msg = '';
if (isset($_POST["add_project"])) {
    $pr_name = mysqli_real_escape_string($connect,$_POST["site_name"]);
    $category = mysqli_real_escape_string($connect,$_POST["category"]);
    $pr_url = mysqli_real_escape_string($connect,$_POST["s_url"]);
    $slug = urlencode($_POST['slug']);
    $filter = mysqli_real_escape_string($connect,$_POST["filter"]);
    $status = mysqli_real_escape_string($connect,$_POST["status"]);
    $pdate = mysqli_real_escape_string($connect,$_POST['date']);

    $file = $_FILES["file1"]["name"];
    $target_dir = "upload/";
    $target_file1 = $target_dir . basename($_FILES["file1"]["name"]);

    $query = "INSERT INTO `projects` (`id`, `prj_name`, `cat_id`, `filter`, `prj_img`, `prj_url`,`slug`, `project_date`, `status`) VALUES (NULL, '$pr_name', '$category', '$filter', '$target_file1', '$pr_url','$slug', '$pdate', '$status');";

    if (mysqli_query($connect, $query)) {
        move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file1);
        $message = 'Project has been added Sucessfully';
    } else {
        $message = 'Sorry Project has not been added yet into database. Due to ' . mysqli_error($connect);
    }
}

?>

<div class="container" style="margin-top:5em;">
    <h3 class="text-center" style="padding:10px;background: black;color: #fff;font-weight: 600;">Add New Project</h3>
    <h4 class="text-center" style="color:#FF9E00;"><?php echo $message ?> </h4>

    <form method="POST" style="width:100%;" enctype="multipart/form-data">

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" name="site_name" class="form-control" placeholder="Project Name">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <select name="category" class="form-control">
                        <option value="Selected disabled" class="form-control">Select Category</option>
                        <option value="1" class="form-control">Frontend</option>
                        <option value="2" class="form-control">Blogging-Site</option>
                        <option value="3" class="form-control">e-Commerce</option>
                        <option value="4" class="form-control">Services-Site</option>
                        <option value="5" class="form-control">Matrimonial-Site</option>
                        <option value="6" class="form-control">Charity-Site</option>
                        <option value="7" class="form-control">CMS</option>
                        <option value="8" class="form-control">Management-System</option>
                        <option value="9" class="form-control">MLM</option>
                        <option value="10" class="form-control">Others</option>
                    </select>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card" style="background: transparent;padding:8px;">
                    <img src="client_logo/about.jpg" alt="site_pic1" class="img-fluid" style="width: 100%;height:250px;border-radius:6px;margin: auto;">
                </div>
            </div>
            <div class="col-lg-6">
                
                <div class="form-group mt-3">
                    <input type="text" name="s_url" class="form-control" placeholder="Project URL">
                </div>
                <div class="form-group mt-3">
                    <input type="text" name="slug" class="form-control" placeholder="Project Slug">
                </div>
                <div class="form-group my-3">
                    <select name="filter" class="form-control">
                        <option value="Selected disabled" class="form-control">Select Filter Class</option>
                        <option value="filter-front" class="form-control">Filter-front</option>
                        <option value="filter-blog" class="form-control">Filter-blog</option>
                        <option value="filter-service" class="form-control">Filter-service</option>
                        <option value="filter-cms" class="form-control">Filter-cms</option>
                        <option value="filter-matrimonial" class="form-control">Filter-matrimonial</option>
                        <option value="filter-ecom" class="form-control">Filter-ecom</option>
                        <option value="filter-charity" class="form-control">Filter-charity</option>
                        <option value="filter-msys" class="form-control">Filter-msys</option>
                        <option value="filter-mlms" class="form-control">Filter-mlms</option>
                        <option value="filter-other" class="form-control">Filter-others</option>
                    </select>
                </div>
                <div class="form-control">
                    <label>Upload Project Image </label>
                    <input type="file" name="file1" accept="image/*" class="form-control">
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Project Complition Date</label>
                    <input type="date" name="date" class="form-control" placeholder="Project Complition Date">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Project Status</label>
                    <select name="status" class="form-control">
                        <option value="Selected disabled" class="form-control">Select Status</option>
                        <option value="1" class="form-control">Active</option>
                        <option value="0" class="form-control">Deactive</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-12 mt-4">
                <div class="mx-auto">
                    <input type="submit" name="add_project" value="Add Project" class="btn btn-primary">
                </div>
            </div>
        </div>

    </form>

</div>

<?php include 'footer.php'; ?>