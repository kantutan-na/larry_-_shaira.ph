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
	
		 
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			
		<?php include 'layouts/menu.php'; ?>

			<div class="page-wrapper">
				<div class="content">
					<div class="page-header">
						<div class="add-item d-flex">
							<div class="page-title">
								<h4>Quotation List</h4>
								<h6>Manage Your Quotation</h6>
							</div>
						</div>
						<ul class="table-top-head">
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="Pdf"><img src="assets/img/icons/pdf.svg" alt="img"></a>
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
						<div class="page-btn">
							<a href="#" class="btn btn-added" data-bs-toggle="modal" data-bs-target="#add-units"><i data-feather="plus-circle" class="me-2"></i>Add New Quotation</a>
						</div>
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
										<option>5 10 24</option>
										<option>12 10 23</option>
									</select>
								</div>
							</div>
							<!-- /Filter -->
							<div class="card" id="filter_inputs">
								<div class="card-body pb-0">
									<div class="row">
										<div class="col-lg-2 col-sm-6 col-12">
											<div class="input-blocks">
												<i data-feather="box" class="info-img"></i>
												<select class="select">
													<option>Choose product</option>
													<option>JACK N JILL PIATTOS CHEESE 40G</option>
													<option>COBRA ENERGY DRINK ORIGINAL 350ML</option>
													<option>KOPIKO BLACK3IN1 HANGER 30GX10S</option>
													<option>NESTLE COFFEMATE ORIGINAL 150G</option>
												</select>
											</div>
										</div>
										<div class="col-lg-2 col-sm-6 col-12">
											<div class="input-blocks">
												<i data-feather="stop-circle" class="info-img"></i>
												<select class="select">
													<option>Choose Status</option>
													<option>Sent</option>
													<option>Ordered</option>
												</select>
											</div>
										</div>
										<div class="col-lg-2 col-sm-6 col-12">
											<div class="input-blocks">
												<i data-feather="user" class="info-img"></i>
												<select class="select">
													<option>Choose Custmer</option>
													<option value="Juan Dela Cruz">Juan Dela Cruz</option>
													<option value="Maria Clara Gonzales">Maria Clara Gonzales</option>
													<option value="Alvin Garcia">Alvin Garcia</option>
													<option value="Anna Patricia Ramos">Anna Patricia Ramos</option>
													<option value="Mark Anthony Reyes">Mark Anthony Reyes</option>
													<option value="Miguel Soriano">Miguel Soriano</option>
													<option value="Katrina Bautista">Katrina Bautista</option>
													<option value="Angelica Mendoza">Angelica Mendoza</option>
													<option value="Kristine Diaz">Kristine Diaz</option>
												</select>
											</div>
										</div>
										<div class="col-lg-2 col-sm-6 col-12">
											<div class="input-blocks">
												<i data-feather="file-text" class="info-img"></i>
												<div class="input-groupicon">
													<input type="text" class="form-control" placeholder="Enter Reference" >
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-sm-6 col-12">
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
											<th>Product Name</th>
											<th>Reference</th>
											<th>Custmer Name</th>
											<th>Status</th>
											<th>Grand Total (₱)</th>
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
											<td class="productimgname">
												<div class="view-product me-2">
													<a href="javascript:void(0);">
														<img src="assets/img/products/4800016644801.jpg" alt="product">
													</a>
												</div>
												<a href="javascript:void(0);">JACK N JILL PIATTOS CHEESE 40G</a>
											</td>
											<td>20721-118-4800016644801</td>
											<td>walk-in-customer</td>
											<td><span class="badges status-badge">Sent</span></td>
											<td>₱0.00</td>
											<td class="action-table-data">
												<div class="edit-delete-action data-row">
													<a class="me-2 p-2 mb-0" href="javascript:void(0);">
														<i data-feather="eye" class="action-eye"></i>
													</a>
													<a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
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
											<td class="productimgname">
												<div class="view-product me-2">
													<a href="javascript:void(0);">
														<img src="assets/img/products/4800611546760.jpg" alt="product">
													</a>
												</div>
												<a href="javascript:void(0);">COBRA ENERGY DRINK ORIGINAL 350ML</a>
											</td>
											<td>236900-118-480061154676</td>
											<td>walk-in-customer</td>
											<td><span class="badges status-badge">Sent</span></td>
											<td>₱78.00</td>
											<td class="action-table-data">
												<div class="edit-delete-action data-row">
													<a class="me-2 p-2 mb-0" href="javascript:void(0);">
														<i data-feather="eye" class="action-eye"></i>
													</a>
													<a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
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
											<td class="productimgname">
												<div class="view-product me-2">
													<a href="javascript:void(0);">
														<img src="assets/img/products/4800361390804.jpg" alt="product">
													</a>
												</div>
												<a href="javascript:void(0);">NESTLE COFFEMATE ORIGINAL 150G</a>
											</td>
											<td>453489-118-4800361390804</td>
											<td>walk-in-customer</td>
											<td><span class="badges order-badge">Ordered</span></td>
											<td>₱49.25</td>
											<td class="action-table-data">
												<div class="edit-delete-action data-row">
													<a class="me-2 p-2 mb-0" href="javascript:void(0);">
														<i data-feather="eye" class="action-eye"></i>
													</a>
													<a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
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
											<td class="productimgname">
												<div class="view-product me-2">
													<a href="javascript:void(0);">
														<img src="assets/img/products/4809015402825.jpg" alt="product">
													</a>
												</div>
												<a href="javascript:void(0);">PURE BASICS NATA DE COCO WHITE 340G</a>
											</td>
											<td>721298-118-4809015402825</td>
											<td>walk-in-customer</td>
											<td><span class="badges unstatus-badge">Pending</span></td>
											<td>₱60.00</td>
											<td class="action-table-data">
												<div class="edit-delete-action data-row">
													<a class="me-2 p-2 mb-0" href="javascript:void(0);">
														<i data-feather="eye" class="action-eye"></i>
													</a>
													<a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
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
											<td class="productimgname">
												<div class="view-product me-2">
													<a href="javascript:void(0);">
														<img src="assets/img/products/4808680221250.jpg" alt="product">
													</a>
												</div>
												<a href="javascript:void(0);">KNORR SOUP CREAM OF MUSHROOM 62G</a>
											</td>
											<td>11668-118-4808680221250</td>
											<td>walk-in-customer</td>
											<td><span class="badges unstatus-badge">Pending</span></td>
											<td>₱55.85</td>
											<td class="action-table-data">
												<div class="edit-delete-action data-row">
													<a class="me-2 p-2 mb-0" href="javascript:void(0);">
														<i data-feather="eye" class="action-eye"></i>
													</a>
													<a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
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
											<td class="productimgname">
												<div class="view-product me-2">
													<a href="javascript:void(0);">
														<img src="assets/img/products/4987072005538.jpg" alt="product">
													</a>
												</div>
												<a href="javascript:void(0);">KOOL FEVER COOLING GEL FOR KIDS 2S</a>
											</td>
											<td>152291-118-4987072005538</td>
											<td>walk-in-customer</td>
											<td><span class="badges status-badge">Sent</span></td>
											<td>₱52.80</td>
											<td class="action-table-data">
												<div class="edit-delete-action data-row">
													<a class="me-2 p-2 mb-0" href="javascript:void(0);">
														<i data-feather="eye" class="action-eye"></i>
													</a>
													<a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
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
											<td class="productimgname">
												<div class="view-product me-2">
													<a href="javascript:void(0);">
														<img src="assets/img/products/4807770273650.jpg" alt="product">
													</a>
												</div>
												<a href="javascript:void(0);">LUCKY ME! INSTANT MAMI SPICY LABUYO CHICKEN 50G</a>
											</td>
											<td>539104-118-4807770273650</td>
											<td>walk-in-customer</td>
											<td><span class="badges unstatus-badge">Pending</span></td>
											<td>₱9.85</td>
											<td class="action-table-data">
												<div class="edit-delete-action data-row">
													<a class="me-2 p-2 mb-0" href="javascript:void(0);">
														<i data-feather="eye" class="action-eye"></i>
													</a>
													<a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
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
											<td class="productimgname">
												<div class="view-product me-2">
													<a href="javascript:void(0);">
														<img src="assets/img/products/4806536780074.jpg" alt="product">
													</a>
												</div>
												<a href="javascript:void(0);">FAMILIA PANDAN FIESTA RICE 25KG</a>
											</td>
											<td>817741-118-4806536780074</td>
											<td>walk-in-customer</td>
											<td><span class="badges order-badge">Ordered</span></td>
											<td>₱1,460.00</td>
											<td class="action-table-data">
												<div class="edit-delete-action data-row">
													<a class="me-2 p-2 mb-0" href="javascript:void(0);">
														<i data-feather="eye" class="action-eye"></i>
													</a>
													<a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
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
											<td class="productimgname">
												<div class="view-product me-2">
													<a href="javascript:void(0);">
														<img src="assets/img/products/4800818808906.jpg" alt="product">
													</a>
												</div>
												<a href="javascript:void(0);">POTCHI STRAWBERRY CREAM 50S</a>
											</td>
											<td>11340-118-4800818808906</td>
											<td>walk-in-customer</td>
											<td><span class="badges unstatus-badge">Pending</span></td>
											<td>₱35.30</td>
											<td class="action-table-data">
												<div class="edit-delete-action data-row">
													<a class="me-2 p-2 mb-0" href="javascript:void(0);">
														<i data-feather="eye" class="action-eye"></i>
													</a>
													<a class="me- p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
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
		<!-- /Main Wrapper -->

		<!--Add Quotation -->
		<div class="modal fade" id="add-units">
			<div class="modal-dialog purchase modal-dialog-centered stock-adjust-modal">
				<div class="modal-content">
					<div class="page-wrapper-new p-0">
						<div class="content">
							<div class="modal-header border-0 custom-modal-header">
								<div class="page-title">
									<h4>Add Quotation</h4>
								</div>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body custom-modal-body">
								<form action="quotation-list.php">
									<div class="row">
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="input-blocks add-product">
												<label>Customer Name</label>
												<div class="row">
													<div class="col-lg-10 col-sm-10 col-10">
														<select class="select">
															<option>Choose</option>
														</select>
													</div>
													<div class="col-lg-2 col-sm-2 col-2 p-0">
														<div class="add-icon tab">
															<a class="btn btn-filter" data-bs-toggle="modal"
																data-bs-target="#add-units"><img
																	src="assets/img/icons/plus1.svg" alt="img">
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="input-blocks">
												<label>Date</label>

												<div class="input-groupicon calender-input">
													<i data-feather="calendar" class="info-img"></i>
													<input type="text" class="datetimepicker" placeholder="Choose">
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="input-blocks">
												<label>Reference Number</label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12">
											<div class="input-blocks">
												<label>Product Name</label>
												<div class="input-groupicon select-code">
													<input type="text" placeholder="Please type product code and select">
													<div class="addonset">
														<img src="assets/img/icons/qrcode-scan.svg" alt="img">
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="modal-body-table">
												<div class="table-responsive">
													<table class="table  datanew">
														<thead>
															<tr>
																<th>Product</th>
																<th>Qty</th>
																<th>Purchase Price($)</th>
																<th>Discount($)</th>
																<th>Tax(%)</th>
																<th>Tax Amount($)</th>
																<th>Unit Cost($)</th>
																<th>Total Cost(%)</th>
															</tr>
														</thead>
														<tbody>
															<tr style="background: #ffffff;">
																<td class="p-5">
					
																</td>
																<td class="p-5">
					
																</td>
																<td class="p-5">
					
																</td>
																<td class="p-5">
					
																</td>
																<td class="p-5">
					
																</td>
																<td class="p-5">
					
																</td>
																<td class="p-5">
					
																</td>
																<td class="p-5">
					
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>

										</div>
										<div class="row">
											<div class="col-lg-3 col-md-6 col-sm-12">
												<div class="input-blocks mb-3">
													<label>Order Tax</label>
													<input type="text" value="0">
												</div>
											</div>
											<div class="col-lg-3 col-md-6 col-sm-12">
												<div class="input-blocks mb-3">
													<label>Discount</label>
													<input type="text" value="0">
												</div>
											</div>
											<div class="col-lg-3 col-md-6 col-sm-12">
												<div class="input-blocks mb-3">
													<label>Shipping</label>
													<input type="text" value="0">
												</div>
											</div>
											<div class="col-lg-3 col-md-6 col-sm-12">
												<div class="input-blocks mb-3">
													<label>Status</label>
													<select class="select">
														<option>Choose</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="input-blocks summer-description-box">
											<label>Description</label>
											<div id="summernote"></div>
										</div>
									</div>
									<div class="modal-footer-btn">
										<button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-submit">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Quotation -->

		<!-- edit popup -->
		<div class="modal fade" id="edit-units">
			<div class="modal-dialog edit-sales-modal">
				<div class="modal-content">
					<div class="page-wrapper p-0 m-0">
						<div class="content p-0">
							<div class="page-header p-4 mb-0">
								<div class="add-item new-sale-items d-flex">
									<div class="page-title">
										<h4>Edit Quotation</h4>
									</div>
									<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									<form action="quotation-list.php">
										<div class="row">
											<div class="col-lg-4 col-sm-6 col-12">
												<div class="input-blocks">
													<label>Customer Name</label>
													<div class="row">
														<div class="col-lg-10 col-sm-10 col-10">
															<select class="select">
																<option>Juan Dela Cruz</option>
																<option>Maria Clara Gonzales</option>
															</select>
														</div>
														<div class="col-lg-2 col-sm-2 col-2 ps-0">
															<div class="add-icon">
																<span class="choose-add"><i data-feather="plus-circle" class="plus"></i></span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-sm-6 col-12">
												<div class="input-blocks">
													<label>Date</label>
													<div class="input-groupicon calender-input">
														<i data-feather="calendar" class="info-img"></i>
														<input type="text" class="datetimepicker" placeholder="19 jan 2023">
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-sm-6 col-12">
												<div class="input-blocks">
													<label>Reference Number</label>
													<input type="text" placeholder="010203">
												</div>
											</div>
											<div class="col-lg-12 col-sm-6 col-12">
												<div class="input-blocks">
													<label>Product Name</label>
													<div class="input-groupicon select-code">
														<input type="text" placeholder="Please type product code and select">
														<div class="addonset">
															<img src="assets/img/icons/scanners.svg" alt="img">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="table-responsive no-pagination">
											<table class="table  datanew">
												<thead>
													<tr>
														<th>Product</th>
														<th>Qty</th>
														<th>Purchase Price(₱)</th>
														<th>Discount(₱)</th>
														<th>Tax(%)</th>
														<th>Tax Amount(₱)</th>
														<th>Unit Cost(₱)</th>
														<th>Total Cost(₱)</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="productimgname">
																<a href="javascript:void(0);" class="product-img stock-img">
																	<img src="assets/img/products/4800016644801.jpg" alt="product">
																</a>
																<a href="javascript:void(0);">JACK N JILL PIATTOS CHEESE 40G</a>
															</div>												
														</td>
														<td>
															<div class="product-quantity">
																<span class="quantity-btn">+<i data-feather="plus-circle" class="plus-circle"></i></span>
																<input type="text" class="quntity-input" value="2">
																<span class="quantity-btn"><i data-feather="minus-circle" class="feather-search"></i></span>
															</div>
														</td>
														<td>0</td>
														<td>0</td>
														<td>
															0.00
														</td>
														<td>0.00</td>
														<td>0.00</td>
														<td>0</td>
													</tr>
													<tr>
														<td>
															<div class="productimgname">
																<a href="javascript:void(0);" class="product-img stock-img">
																	<img src="assets/img/products/4800611546760.jpg" alt="product">
																</a>
																<a href="javascript:void(0);">COBRA ENERGY DRINK ORIGINAL 350ML</a>
															</div>												
														</td>
														<td>
															<div class="product-quantity">
																<span class="quantity-btn">+<i data-feather="plus-circle" class="plus-circle"></i></span>
																<input type="text" class="quntity-input" value="2">
																<span class="quantity-btn"><i data-feather="minus-circle" class="feather-search"></i></span>
															</div>
														</td>
														<td>0</td>
														<td>0</td>
														<td>
															0.00
														</td>
														<td>0.00</td>
														<td>0.00</td>
														<td>0</td>
													</tr>
													<tr>
														<td>
															<div class="productimgname">
																<a href="javascript:void(0);" class="product-img stock-img">
																	<img src="assets/img/products/8996001410226.jpg" alt="product">
																</a>
																<a href="javascript:void(0);">KOPIKO BLACK3IN1 HANGER 30GX10</a>
															</div>												
														</td>
														<td>
															<div class="product-quantity">
																<span class="quantity-btn">+<i data-feather="plus-circle" class="plus-circle"></i></span>
																<input type="text" class="quntity-input" value="2">
																<span class="quantity-btn"><i data-feather="minus-circle" class="feather-search"></i></span>
															</div>
														</td>
														<td>0</td>
														<td>0</td>
														<td>
															0.00
														</td>
														<td>0.00</td>
														<td>0.00</td>
														<td>0</td>
													</tr>
												</tbody>
											</table>
										</div>
			
										<div class="row">
											<div class="col-lg-6 ms-auto">
												<div class="total-order w-100 max-widthauto m-auto mb-4">
													<ul>
														<li>
															<h4>Order Tax</h4>
															<h5>₱ 0.00</h5>
														</li>
														<li>
															<h4>Discount</h4>
															<h5>₱ 0.00</h5>
														</li>
														<li>
															<h4>Shipping</h4>
															<h5>₱ 0.00</h5>
														</li>
														<li>
															<h4>Grand Total</h4>
															<h5>₱ 0.00</h5>
														</li>
													</ul>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-lg-3 col-sm-6 col-12">
												<div class="input-blocks mb-3">
													<label>Order Tax</label>
													<div class="input-groupicon select-code">
														<input type="text" placeholder="0">
													</div>
													
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-12">
												<div class="input-blocks mb-3">
													<label>Discount</label>
													<div class="input-groupicon select-code">
														<input type="text" placeholder="0">
													</div>
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-12">
												<div class="input-blocks mb-3">
													<label>Shipping</label>
													<div class="input-groupicon select-code">
														<input type="text" placeholder="0">
													</div>
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-12">
												<div class="input-blocks mb-3">
													<label>Status</label>
													<select class="select">
														<option>Sent</option>
														<option>Completed</option>
														<option>In-progress</option>
													</select>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="input-blocks summer-description-box">
													<label>Description</label>
													<div id="summernote5"></div>
												</div>
											</div>
											<div class="col-lg-12 text-end">
												<button type="button" class="btn btn-cancel add-cancel me-3" data-bs-dismiss="modal">Cancel</button>
												<button type="submit" class="btn btn-submit add-sale">Submit</button>
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
		<!-- /edit popup -->
		<?php include 'layouts/customizer.php'; ?>
		<?php include 'layouts/vendor-scripts.php'; ?>
	
    </body>
</html>