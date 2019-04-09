
<!doctype html>
<html lang="en">

<head>
<?php include 'inc/head.php'; ?>
    <style>
            
    </style>
</head>

<body>
    <h1 class="sr-only">Vesuvio Admin Template</h1>
    <div class="wrapper">
        <!-- aside navigation starts -->
        <?php include 'inc/aside.php'; ?> 
        <!-- aside navigation ends -->

        <!-- main starts -->
        <main role="main" class="main">
            <!-- topbar starts -->
            <?php include 'inc/top-sticky.php'; ?>
            <!-- topbar ends -->

            <!-- main content starts -->
            <div class="main-content">
                <div class="container-fluid">
                    <!-- page head starts -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-none p-0">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Modal</li>
                        </ol>
                    </nav>
                    <div class="page-head d-flex justify-content-between">
                        <h3 class="mb-5">Modal</h3>
                    </div>
                    <!-- page head ends -->
                    <div class="row">
                        <div class="col-lg-6 mb-5">
                            <div class="box p-4">
                                <h5>Media Upload</h5>
                                <br>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Media Upload
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            
                                            <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-6"></div>
                                                <div class="col-lg-6">
                                                    <form>
                                                    
                                                        <div class="form-group">
                                                            <label for="inputAddress2">Address 2</label>
                                                            <input type="text" class="form-control" id="inputAddress2"
                                                                placeholder="Apartment, studio, or floor">
                                                            <small id="passwordHelpBlock" class="form-text text-muted">
                                                                Help text goes here:Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit. Nam non vulputate ipsum, eu auctor magna.
                                                            </small>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputAddress">Address</label>
                                                            <input type="text" class="form-control" id="inputAddress"
                                                                placeholder="1234 Main St">
                                                        </div>
                                                        <div class="form-row align-items-center">
                                                            <div class="form-group col-md-4">
                                                                <label for="validationCustomUsername">Date</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="inputGroupPrepend">
                                                                            <i class="fas fa-calendar-alt"></i>
                                                                        </span>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="datepicker"
                                                                        placeholder="MM/DD/YYYY">


                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="validationCustomUsername">Gender</label>
                                                                <br>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                                        value="option1">
                                                                    <label class="form-check-label" for="inlineCheckbox1">Male</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                                        value="option2">
                                                                    <label class="form-check-label" for="inlineCheckbox2">Female</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                                        value="option3" disabled>
                                                                    <label class="form-check-label" for="inlineCheckbox3">Others
                                                                        (disabled)</label>
                                                                </div>
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
                        <div class="col-lg-6 mb-5">
                            <div class="box p-4">
                                <h5>Media Upload</h5>
                                <br>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">
                                    Media Upload
                                </button>

                                <!-- Modal -->
                                <div class="modal fade bd-example-modal-lg" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content  media-upload-wrapper">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        
                                                        <div class="accordion media-upload-accordion " id="accordionExample">
                                                            <div class="card">
                                                                <div class="card-header" id="headingOne">
                                                                    <h5 class="card-header-item mb-0 d-flex justify-content-between" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                                        aria-controls="collapseOne">
                                                                        <span class="accordion-hdtext"> Case Media</span>
                                                                        <span class="accordion-indicator">
                                                                            <i class="fas fa-plus"></i>
                                                                            <i class="fas fa-minus"></i>
                                                                        </span>
                                                                    </h5>
                                                                </div>

                                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                                    <div class="card-body">
                                                                       Hello!!
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-header" id="headingTwo">
                                                                    <h5 class="card-header-item mb-0 d-flex justify-content-between collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                                        <span class="accordion-hdtext"> Uncategorised Media </span>
                                                                        <span class="accordion-indicator">
                                                                            <i class="fas fa-plus"></i>
                                                                            <i class="fas fa-minus"></i>
                                                                        </span>
                                                                    </h5>
                                                                </div>
                                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                                    <div class="card-body">
                                                                       Hey!!!
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                                            
                                                    </div>
                                                    <div class="col-lg-6 border-left">
                                                        <form>
                                                            <h5>Add New:</h5>
                                                            <div class="form-row">
                                                                <div class="form-group col-lg-12">
                                                                    <label for="inputTitle">Title</label>
                                                                    <input type="text" class="form-control" id="inputTitle"
                                                                        placeholder="">
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-lg-12">
                                                                    <label for="selectGroup">Group</label>
                                                                    <select id="selectGroup" class="form-control">
                                                                        <option selected>Case Media</option>
                                                                        <option>...</option>
                                                                    </select>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-lg-12">
                                                                    <label for="shortDescription">Short Description</label>
                                                                    <textarea name="shortDescription" class="form-control" id="shortDescription" cols="30" rows="5"></textarea>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="btn btn-primary float-right">Save</button>
                                                        </form>
                                                        <form class="mt-2">
                                                            <h5>Add Group:</h5>
                                                            <div class="form-row align-items-center">
                                                                <div class="form-group col-lg-12">
                                                                    <label for="inputGroupName">Group Name</label>
                                                                    <div class="d-flex">
                                                                        <input type="text" class="form-control mr-3" id="inputGroupName"
                                                                            placeholder="">
                                                                        <button type="button" class="btn btn-primary btn-sm ">Add</button>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="form-group col-lg-2">
                                                                    
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
                    <div class="row">
                            <div class="fb-popup show">
                                <div class="control-tools justify-content-center">
                                    <a class="icon text-center" data-fb-close-popup=".fb-popup" href="javascript:void(0)"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </div>
                                <div class="setting-wrap">

                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="card-header-item mb-0 d-flex " data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    <span class="accordion-indicator mr-3">
                                                        <i class="fas fa-plus"></i>
                                                        <i class="fas fa-minus"></i>
                                                    </span>
                                                    <span class="accordion-hdtext"> General Setting</span>
                                                   
                                                </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <form>
                                                        <div class="form-row">
                                                                <div class="form-group col-lg-6">
                                                                    <label for="inputFieldName">Field Name:</label>
                                                                    <input type="text" class="form-control" id="inputFieldName"
                                                                    >
                                                                </div>
                                                                <div class="form-group col-lg-6">
                                                                    <label for="selectSubType">Sub Type</label>
                                                                    <select id="selectSubType" class="form-control">
                                                                        <option selected></option>
                                                                        <option>...</option>
                                                                    </select>
                                                                </div>
                                                        </div>
                                                        <div class="form-row">
                                                                <div class="form-group col-lg-6">
                                                                    <label for="selectDataType">Data Type:</label>
                                                                    <select id="selectDataType" class="form-control">
                                                                        <option selected></option>
                                                                        <option>...</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-lg-6">
                                                                    <label for="radioTemplate">Yes/No Radio Template:</label>
                                                                    <div class="">
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio" name="inlineRadio" id="inlineYes" value="Yes">
                                                                            <label class="form-check-label" for="inlineYes">Yes</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio" name="inlineRadio" id="inlineNo" value="option2">
                                                                            <label class="form-check-label" for="inlineNo">No</label></div>
                                                                        </div>
                                                                    </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-lg-6">
                                                                <label for="options">Options:</label>
                                                                <table class=" table table-bordered w-100 custom-optiontable">
                                                                    <tbody>
                                                                        <tr >
                                                                            <td colspan="1" class="text-center "><i class="fas fa-arrows-alt"></i></td>
                                                                            <td colspan="2"class="text-center w-50"></td>
                                                                            <td colspan="2" class="text-center w-50"></td>
                                                                            <td colspan="1" class="text-center "><input type="radio" name="" aria-label="Radio button for following text input"></td>
                                                                        </tr>
                                                                        <tr >
                                                                            <td colspan="1" class="text-center "><i class="fas fa-arrows-alt"></i></td>
                                                                            <td colspan="2"class="text-center w-50"></td>
                                                                            <td colspan="2" class="text-center w-50"></td>
                                                                            <td colspan="1" class="text-center "><input type="radio" aria-label="Radio button for following text input"></td>
                                                                        </tr>
                                                                        <tr >
                                                                            <td colspan="1" class="text-center "><i class="fas fa-arrows-alt"></i></td>
                                                                            <td colspan="2"class="text-center w-50"></td>
                                                                            <td colspan="2" class="text-center w-50"></td>
                                                                            <td colspan="1" class="text-center "><input type="radio" aria-label="Radio button for following text input"></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="form-group col-lg-6">
                                                                <label for="checkboxTemplate">Checkbox Template:</label>
                                                                <div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="checkbox1">
                                                                        &nbsp;
                                                                        <label class="form-check-label" for="checkbox1">
                                                                            Checkbox 1
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="checkbox2">
                                                                        &nbsp;
                                                                        <label class="form-check-label" for="checkbox2">
                                                                            Checkbox 2
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="checkbox3">
                                                                        &nbsp;
                                                                        <label class="form-check-label" for="checkbox3">
                                                                            Checbox 3
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-lg-6">
                                                                <button class="btn btn-primary btn-sm float-right">
                                                                    <i class="fas fa-plus"></i>
                                                                     Add Row
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="card-header-item mb-0 d-flex  collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    <span class="accordion-indicator mr-3">
                                                        <i class="fas fa-plus"></i>
                                                        <i class="fas fa-minus"></i>
                                                    </span>
                                                    <span class="accordion-hdtext"> Advance Setting </span>
                                                    
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <label for="fieldPermissionTable" class="w-100 pb-2 border-bottom">Field Permission Setting</label>
                                                    <table class="table table-hover table-bordered table-fieldpermission">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>Role Name</th>
                                                                <th>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                        <label class="form-check-label" for="defaultCheck1">
                                                                            &nbsp; Read 
                                                                        </label>
                                                                    </div>

                                                                </th>
                                                                <th>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                                                        <label class="form-check-label" for="defaultCheck2">
                                                                            &nbsp; Write
                                                                        </label>
                                                                    </div>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td> Tenant Adminstrator</td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="tenentRead">
                                                                        
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="tenantWrite">
                                                                        
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Case Manager</td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="caseManagerRead">
                                                                        
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="caseManagerRead">
                                                                        
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Tenant Adminstrator</td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                                                        
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                                                        
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Tenant Adminstrator</td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                                                        
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                                                        
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <small class="form-text text-muted font-italic">
                                                            <span class="font-weight-bold">Note</span> You can control Read/Write access by using advance features.
                                                    </small>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="card-header-item mb-0 d-flex  collapsed" data-toggle="collapse" data-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    <span class="accordion-indicator mr-3">
                                                        <i class="fas fa-plus"></i>
                                                        <i class="fas fa-minus"></i>
                                                    </span>
                                                    <span class="accordion-hdtext"> Field Validation </span>
                                                    
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingFour">
                                                <h5 class="card-header-item mb-0 d-flex  collapsed" data-toggle="collapse" data-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseFour">
                                                    <span class="accordion-indicator mr-3">
                                                        <i class="fas fa-plus"></i>
                                                        <i class="fas fa-minus"></i>
                                                    </span>
                                                    <span class="accordion-hdtext"> Field Validation </span>
                                                    
                                                </h5>
                                            </div>
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        
                                    </div>
                                </div>
                             </div>
                    </div>
                    
                </div>

            </div>
            <!-- main content ends -->
        </main>
        <!-- main ends -->
    </div>

    <!-- all js goes here -->
    <?php include 'inc/themejs.php'; ?>

</body>

</html>