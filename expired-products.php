<?php include 'layouts/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <?php include 'layouts/title-meta.php'; ?>
 <?php include 'layouts/head-css.php'; ?>
</head>
<body>
<div id="global-loader" >
<div class="whirly-loader"> </div>
</div>
	<!-- main Wrapper-->
    <div class="main-wrapper">
    <?php include 'layouts/menu.php'; ?>

    		<div class="page-wrapper">
				<div class="content">
					<div class="page-header">
						<div class="add-item d-flex">
							<div class="page-title">
								<h4>Expired Products</h4>
								<h6>Manage your expired products</h6>
							</div>						
						</div>
						<ul class="table-top-head">
							<li>
								<a data-bs-placement="top" title="Pdf" data-bs-toggle="modal" data-bs-target="#add-units"><img src="assets/img/icons/pdf.svg" alt="img"></a>
							</li>
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="Excel"><img src="assets/img/icons/excel.svg" alt="img"></a>
							</li>
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="Print"><i data-feather="printer" class="feather-rotate-ccw"></i></a>
							</li>
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh"><i data-feather="rotate-ccw" class="feather-rotate-ccw"></i></a>
							</li>
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i data-feather="chevron-up" class="feather-chevron-up"></i></a>
							</li>
						</ul>
					</div>
					<!-- /product list -->
					<div class="card table-list-card">
						<div class="card-body">
							<div class="table-top">
								<div class="search-set">
									<div class="search-input">
										<a href="" class="btn btn-searchset"><i data-feather="search" class="feather-search"></i></a>
									</div>
								</div>
								<div class="search-path">
									<div class="d-flex align-items-center">
										<a class="btn btn-filter" id="filter_search">
											<i data-feather="filter" class="filter-icon"></i>
											<span><img src="assets/img/icons/closes.svg" alt="img"></span>
										</a>
									</div>
								</div>
								<div class="form-sort">
									<i data-feather="sliders" class="info-img"></i>
									<select class="select">
										<option>Sort by Date</option>
										<option>Newest</option>
										<option>Oldest</option>
									</select>
								</div>
							</div>
							<!-- /Filter -->
							<div class="card" id="filter_inputs">
								<div class="card-body pb-0">
									<div class="row">
										<div class="col-lg-3 col-sm-6 col-12">
											<div class="input-blocks">
												<i data-feather="box" class="info-img"></i>
												<select class="select">
													<option>Choose Type</option>
													<option>Remove from Inventory</option>
													<option>Mark for Disposal</option>
													<option>Return to Supplier</option>
													<option>Discount for Quick Sale</option>
													<option>Hold for Review</option>
													<option>Donate if Permitted</option>
													<option>Reprocess if Applicable</option>
												</select>
											</div>
										</div>
										<div class="col-lg-3 col-sm-6 col-12">
											<div class="input-blocks">
												<i data-feather="calendar" class="info-img"></i>
												<div class="input-groupicon">
													<input type="text" class="datetimepicker" placeholder="Choose Date" >
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-sm-6 col-12 ms-auto">
											<div class="input-blocks">
												<a class="btn btn-filters ms-auto"> <i data-feather="search" class="feather-search"></i> Search </a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Filter -->
							<div class="table-responsive">
								<table class="table  datanew">
									<thead>
										<tr>
											<th class="no-sort">
												<label class="checkboxs">
													<input type="checkbox" id="select-all">
													<span class="checkmarks"></span>
												</label>
											</th>
											<th>Product</th>
											<th>SKU</th>
											<th>Manufactured Date</th>
											<th>Expired Date</th>
											<th class="no-sort">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>
												<div class="productimgname">
													<a href="javascript:void(0);" class="product-img stock-img">
														<img src="assets/img/products/4800148531130.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">MARBY FRENCH FRIES 400G</a>
												</div>												
											</td>
											<td>397789-118-<br>4800148531130</td>
											<td>19 Nov 2023</td>
											<td>02 Oct 2024</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2" href="javascript:void(0);">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="confirm-text p-2" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>
												<div class="productimgname">
													<a href="javascript:void(0);" class="product-img stock-img">
														<img src="assets/img/products/4800148537200.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">MARBY FROZEN CHEESTICK<br>PIMIENTO 25S PACK</a>
												</div>												
											</td>
											<td>343591-118-<br>4800148537200</td>
											<td>24 Nov 2023</td>
											<td>23 May 2024</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2" href="javascript:void(0);">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="confirm-text p-2" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>
												<div class="productimgname">
													<a href="javascript:void(0);" class="product-img stock-img">
														<img src="assets/img/products/2882.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">PG FRESH PINAKBET<br>MIX (@250g)</a>
												</div>												
											</td>
											<td>2882-118-<br>2702882002500</td>
											<td>30 Sept 2024</td>
											<td>4 Oct 2024</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2" href="javascript:void(0);">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="confirm-text p-2" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>
												<div class="productimgname">
													<a href="javascript:void(0);" class="product-img stock-img">
														<img src="assets/img/products/54028367911.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">YAKULT CULTURED MILK<br>ORIGINAL 5'S 80ML</a>
												</div>												
											</td>
											<td>21061-118-<br>54028367911</td>
											<td>01 Sept 2024</td>
											<td>5 Oct 2024</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2" href="javascript:void(0);">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="confirm-text p-2" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>
												<div class="productimgname">
													<a href="javascript:void(0);" class="product-img stock-img">
														<img src="assets/img/products/4800086036049.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">SELECTA CLASSIC SUPER <br>THICK ICE CREAM <br>VANILLA 1.3L</a>
												</div>												
											</td>
											<td>230401-118-<br>4800086036049</td>
											<td>08 Aug 2024</td>
											<td>5 Oct 2024</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2" href="javascript:void(0);">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="confirm-text p-2" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>
												<div class="productimgname">
													<a href="javascript:void(0);" class="product-img stock-img">
														<img src="assets/img/products/4800086040916.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">SELECTA SUPREME<br>ICECREAM QUEZO<br>REAL 750ML</a>
												</div>												
											</td>
											<td>387273-118-<br>4800086040916</td>
											<td>17 Jan 2024</td>
											<td>29 Mar 2024</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2" href="javascript:void(0);">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="confirm-text p-2" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>
												<div class="productimgname">
													<a href="javascript:void(0);" class="product-img stock-img">
														<img src="assets/img/products/4800148538665.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">MARBY PINOY<br>PANDESAL 250G</a>
												</div>												
											</td>
											<td>354512-118-<br>4800148538665</td>
											<td>22 Sept 2024</td>
											<td>05 Oct 2024</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2" href="javascript:void(0);">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="confirm-text p-2" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>
												<div class="productimgname">
													<a href="javascript:void(0);" class="product-img stock-img">
														<img src="assets/img/products/4806502725641.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">GARDENIA CREAM ROLL <br>COOKIES & CREAM 50G</a>
												</div>												
											</td>
											<td>282046-118-<br>4806502725641</td>
											<td>18 Aug 2024</td>
											<td>13 Sept 2024</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2" href="javascript:void(0);">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="confirm-text p-2" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>
												<div class="productimgname">
													<a href="javascript:void(0);" class="product-img stock-img">
														<img src="assets/img/products/4806502720080.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">GARDENIA PANDESAL 350G</a>
												</div>												
											</td>
											<td>13335-118-<br>4806502720080</td>
											<td>22 Sept 2024</td>
											<td>5 Oct 2024</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2" href="javascript:void(0);">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="confirm-text p-2" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- /product list -->
				</div>
			</div>

    </div>
	<!-- end main Wrapper-->
		<!-- Add PDF -->
		<div class="modal fade" id="add-units">
			<div class="modal-dialog modal-dialog-centered custom-modal-two">
				<div class="modal-content">
					<div class="page-wrapper-new p-0">
						<div class="content">
							<div class="modal-header border-0 custom-modal-header">
								<div class="page-title">
									<h4>Export Report as PDF</h4>
								</div>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body custom-modal-body">
								<form action="expired-products.php">
									<div class="row">
										<div class="col-lg-12">
											<div class="input-blocks">
												<label>Choose Manufacturer Date</label>
												<div class="input-groupicon calender-input">
													<i data-feather="calendar" class="info-img"></i>
													<input type="text" class="datetimepicker" placeholder="Manufacturer Date">
												</div>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="input-blocks">
												<label>Choose Expiry Date</label>
												<div class="input-groupicon calender-input">
													<i data-feather="calendar" class="info-img"></i>
													<input type="text" class="datetimepicker" placeholder="Expiry Date">
												</div>
											</div>
										</div>
									</div>
									<div class="modal-footer-btn">
										<button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-submit">Download Report</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add PDF -->
<?php include 'layouts/customizer.php'; ?>
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>
</body>
</html>