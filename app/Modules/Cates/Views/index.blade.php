<?php
/**
 * Created by PhpStorm.
 * User: tungtv
 * Date: 7/13/2016
 * Time: 10:10 AM
 */
?>
@extends('Admin::master')
@section('content')
    <!--<a href="cate/create">Create category</a>
<ul>
    @foreach($datas as $data)
    <li> <a href="">{!! $data['name'] !!}</a></li>
        @endforeach
</ul>-->

<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs" id="breadcrumbs">
            <script type="text/javascript">
                try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
            </script>

            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
                </li>

                <li>
                    <a href="#">Tables</a>
                </li>
                <li class="active">Simple &amp; Dynamic</li>
            </ul><!-- /.breadcrumb -->

            <div class="nav-search" id="nav-search">
                <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
                </form>
            </div><!-- /.nav-search -->
        </div>
        <div class="page-content">
            <div class="ace-settings-container" id="ace-settings-container">
                <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                    <i class="ace-icon fa fa-cog bigger-130"></i>
                </div>

                <div class="ace-settings-box clearfix" id="ace-settings-box">
                    <div class="pull-left width-50">
                        <div class="ace-settings-item">
                            <div class="pull-left">
                                <select id="skin-colorpicker" class="hide">
                                    <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                    <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                    <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                    <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                </select>
                            </div>
                            <span>&nbsp; Choose Skin</span>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
                            <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                            <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
                            <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                            <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
                            <label class="lbl" for="ace-settings-add-container">
                                Inside
                                <b>.container</b>
                            </label>
                        </div>
                    </div><!-- /.pull-left -->

                    <div class="pull-left width-50">
                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />
                            <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />
                            <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />
                            <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                        </div>
                    </div><!-- /.pull-left -->
                </div><!-- /.ace-settings-box -->
            </div><!-- /.ace-settings-container -->

            <div class="page-header">
                <h1>
                    Tables
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Static &amp; Dynamic Tables
                    </small>
                </h1>
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="clearfix">
                                <div class="col-md-6 col-sm-6 col-xs-12 pink" style="padding-left: 0px">
                                    {{--<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>--}}
                                    {{--<a > Table Inside a Modal Box </a>--}}
                                    <a href="#modal-table" role="button"  data-toggle="modal" class="green btn btn-white btn-create btn-hover-white">
                                        <i class="ace-icon fa fa-plus bigger-120 "></i>
                                        Create popup
                                        <i class="ace-icon fa fa-external-link"></i>
                                    </a>
                                    <a href="" class="btn btn-white  btn-create-new-tab btn-create-new-tab-hover" >
                                        <i class="ace-icon fa fa-plus bigger-120 "></i>
                                        Create new tab
                                        <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                    </a>
                                    <a href="" class="btn btn-white  btn-refresh" >
                                        <i class="ace-icon fa fa-refresh"></i>
                                        Refresh
                                    </a>
                                    <div class="btn-group">
                                        <button data-toggle="dropdown" class="btn btn-sm btn-danger dropdown-toggle btn-action-gird" aria-expanded="false">
                                            Action
                                            <i class="ace-icon fa fa-angle-down icon-on-right"></i>
                                        </button>

                                        <ul class="dropdown-menu dropdown-danger">
                                            <li>
                                                <a href="">Edit</a>
                                            </li>

                                            <li>
                                                <a href="">Delete</a>
                                            </li>

                                            <li>
                                                <a href="">Something else here</a>
                                            </li>

                                            <li class="divider"></li>

                                            <li>
                                                <a href="">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 " style="padding-left: 0px">
                                    <div class="pull-right tableTools-container"></div>
                                </div>
                            </div>

                            <div class="hr hr-18 dotted hr-double"></div>
                            <div class="table-header">
                                Results for "Latest Registered Domains"
                            </div>

                            <!-- div.table-responsive -->

                            <!-- div.dataTables_borderWrap -->
                            <div>
                                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th class="center">
                                            <label class="pos-rel">
                                                <input type="checkbox" class="ace" />
                                                <span class="lbl"></span>
                                            </label>
                                        </th>
                                        <th>Name</th>
                                        <th>Alias</th>
                                        <th >Order</th>

                                        <th>
                                            <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                            Created
                                        </th>
                                        <th>
                                            <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                            Update
                                        </th>

                                        <th>Status</th>

                                        <th >Action</th>

                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($datas as $data)
                                    <tr>
                                        <td class="center">
                                            <label class="pos-rel">
                                                <input type="checkbox" class="ace" />
                                                <span class="lbl"></span>
                                            </label>
                                        </td>

                                        <td>
                                            <a href="#">{!! $data['name'] !!}</a>
                                        </td>
                                        <td>{!! $data['alias'] !!}</td>
                                        <td>{!! $data['order'] !!}</td>
                                        <td>{!! $data['created_at'] !!}</td>
                                        <td >
                                         {!! $data['updated_at'] !!}
                                        </td>
                                        <td><label>
                                                <input name="switch-field-1" class="ace ace-switch ace-switch-4" type="checkbox">
                                                <span class="lbl"></span>
                                            </label></td>
                                        <td>
                                            <div class="hidden-sm hidden-xs action-buttons">
                                                <a class="blue" href="#">
                                                    <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                </a>

                                                <a class="green" href="#">
                                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                </a>

                                                <a class="red" href="#">
                                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                </a>
                                            </div>

                                            <div class="hidden-md hidden-lg">
                                                <div class="inline pos-rel">
                                                    <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                        <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                    </button>

                                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                        <li>
                                                            <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach




                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div id="modal-table" class="modal fade" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                    <h4 class="blue bigger">Please fill the following form fields</h4>
                                </div>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-5">
                                            <div class="space"></div>

                                            <label class="ace-file-input ace-file-multiple"><input type="file"><span class="ace-file-container" data-title="Drop files here or click to choose"><span class="ace-file-name" data-title="No File ..."><i class=" ace-icon ace-icon fa fa-cloud-upload"></i></span></span><a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a></label>
                                        </div>

                                        <div class="col-xs-12 col-sm-7">
                                            <div class="form-group">
                                                <label for="form-field-select-3">Location</label>

                                                <div>
                                                    <select class="chosen-select" data-placeholder="Choose a Country..." style="display: none;">
                                                        <option value="">&nbsp;</option>
                                                        <option value="AL">Alabama</option>
                                                        <option value="AK">Alaska</option>
                                                        <option value="AZ">Arizona</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="CA">California</option>
                                                        <option value="CO">Colorado</option>
                                                        <option value="CT">Connecticut</option>
                                                        <option value="DE">Delaware</option>
                                                        <option value="FL">Florida</option>
                                                        <option value="GA">Georgia</option>
                                                        <option value="HI">Hawaii</option>
                                                        <option value="ID">Idaho</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IN">Indiana</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="ME">Maine</option>
                                                        <option value="MD">Maryland</option>
                                                        <option value="MA">Massachusetts</option>
                                                        <option value="MI">Michigan</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="MT">Montana</option>
                                                        <option value="NE">Nebraska</option>
                                                        <option value="NV">Nevada</option>
                                                        <option value="NH">New Hampshire</option>
                                                        <option value="NJ">New Jersey</option>
                                                        <option value="NM">New Mexico</option>
                                                        <option value="NY">New York</option>
                                                        <option value="NC">North Carolina</option>
                                                        <option value="ND">North Dakota</option>
                                                        <option value="OH">Ohio</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="OR">Oregon</option>
                                                        <option value="PA">Pennsylvania</option>
                                                        <option value="RI">Rhode Island</option>
                                                        <option value="SC">South Carolina</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="UT">Utah</option>
                                                        <option value="VT">Vermont</option>
                                                        <option value="VA">Virginia</option>
                                                        <option value="WA">Washington</option>
                                                        <option value="WV">West Virginia</option>
                                                        <option value="WI">Wisconsin</option>
                                                        <option value="WY">Wyoming</option>
                                                    </select><div class="chosen-container chosen-container-single" style="width: 0px;" title=""><a class="chosen-single" tabindex="-1" style="width: 210px;"><span>&nbsp;</span><div><b></b></div></a><div class="chosen-drop" style="width: 210px;"><div class="chosen-search"><input type="text" autocomplete="off" style="width: 200px;"></div><ul class="chosen-results"></ul></div></div>
                                                </div>
                                            </div>

                                            <div class="space-4"></div>

                                            <div class="form-group">
                                                <label for="form-field-username">Username</label>

                                                <div>
                                                    <input type="text" id="form-field-username" placeholder="Username" value="alexdoe">
                                                </div>
                                            </div>

                                            <div class="space-4"></div>

                                            <div class="form-group">
                                                <label for="form-field-first">Name</label>

                                                <div>
                                                    <input type="text" id="form-field-first" placeholder="First Name" value="Alex">
                                                    <input type="text" id="form-field-last" placeholder="Last Name" value="Doe">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-sm" data-dismiss="modal">
                                        <i class="ace-icon fa fa-times"></i>
                                        Cancel
                                    </button>

                                    <button class="btn btn-sm btn-primary">
                                        <i class="ace-icon fa fa-check"></i>
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div><!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->


@endsection

