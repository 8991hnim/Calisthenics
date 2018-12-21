<?php
    
    require"layout_header.php";

?>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12 text-right">
                    <div class="breadcrumb-holder">
                        <ul class="breadcrumb float-right">
                            <li class="">
                                <a href="" class="btn btn-info">Create post</a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row py-3">
                <div class="col-md-4">
                    <label for="">Filters</label>
                    <select class="form-control">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <div class="col-md-8">
                    <label for="">Search...</label>
                    <input type="text" id="" class="form-control" placeholder="nhập đi dmm">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <table class="table table-light table-bordered table-hover">
                        <thead class="text-center headPost">
                            <tr>
                                <th>STT</th>
                                <th>Image</th>
                                <th>Post</th>
                                <th>Category</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <th class="widthSTT">1</th>
                                <td>
                                    <span>
                                        <img alt="image" class="img-fluid" style="max-width:150px; height:auto;" src="../image/post/bicep2.jpg" />
                                    </span>
                                </td>
                                <td>The .table-responsive class creates a responsive tabing</td>
                                <td class="widthCate">@forearms</td>
                                <td class="width2btn">
                                    <button class="btn btn-info" id="btnEditPost">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                    <button class="btn btn-danger" id="btnDeletePost">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>                    
            </div>

        </div>
        <!-- END container-fluid -->
    </div>
    <!-- END content -->
</div>
<!-- END content-page -->
<?php
    
    require"layout_footer.php";

?>