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
									<h4>Purchase order report</h4>
									<h6>Manage your Purchase order report</h6>
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
						</div>

						<!-- /product list -->
						<div class="card">
							<div class="card-body">
								<div class="table-top">
									<div class="search-set">
										<div class="search-input">
											<a href="" class="btn btn-searchset"><i data-feather="search" class="feather-search"></i></a>
										</div>
									</div>
									<div class="search-path">
										<a class="btn btn-filter" id="filter_search">
											<i data-feather="filter" class="filter-icon"></i>
											<span><img src="assets/img/icons/closes.svg" alt="img"></span>
										</a>
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
													<i data-feather="calendar" class="info-img"></i>
													<div class="input-groupicon">
														<input type="text" class="datetimepicker" placeholder="From Date" >
													</div>
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-12">
												<div class="input-blocks">
													<i data-feather="calendar" class="info-img"></i>
													<div class="input-groupicon">
														<input type="text" class="datetimepicker" placeholder="Due Date" >
													</div>
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-12">
												<div class="input-blocks">
													<i data-feather="stop-circle" class="info-img"></i>
													<select class="select">
														<option>Choose Supplier</option>
														<option>Suppliers</option>
													</select>
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
									<table class="table datanew">
										<thead>
											<tr>
												<th class="no-sort">
													<label class="checkboxs">
														<input type="checkbox" id="select-all">
														<span class="checkmarks"></span>
													</label>
												</th>
												<th>Product Name</th>
												<th>Purchased amount</th>
												<th>Purchased QTY</th>
												<th>Instock QTY</th>
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
													<a class="product-img">
														<img src="assets/img/products/4800016644801.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">JACK N JILL PIATTOS CHEESE 40G</a>
												</td>
												<td>0.00</td>
												<td>0</td>
												<td>0</td>
											</tr>
											<tr>
												<td>
													<label class="checkboxs">
														<input type="checkbox">
														<span class="checkmarks"></span>
													</label>
												</td>
												<td class="productimgname">
													<a class="product-img">
														<img src="assets/img/products/4800611546760.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">COBRA ENERGY DRINK ORIGINAL<br>350ML</a>
												</td>
												<td>0.00</td>
												<td>0</td>
												<td>0</td>
											</tr>
											<tr>
												<td>
													<label class="checkboxs">
														<input type="checkbox">
														<span class="checkmarks"></span>
													</label>
												</td>
												<td class="productimgname">
													<a class="product-img">
														<img src="assets/img/products/8996001410226.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">KOPIKO BLACK3IN1 <br> HANGER 30GX10S</a>
												</td>
												<td>0.00</td>
												<td>0</td>
												<td>0</td>
											</tr>
											<tr>
												<td>
													<label class="checkboxs">
														<input type="checkbox">
														<span class="checkmarks"></span>
													</label>
												</td>
												<td class="productimgname">
													<a class="product-img">
														<img src="assets/img/products/4800361390804.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">NESTLE COFFEMATE<br>ORIGINAL 150G</a>
												</td>
												<td>0.00</td>
												<td>0</td>
												<td>0</td>
											</tr>
											<tr>
												<td>
													<label class="checkboxs">
														<input type="checkbox">
														<span class="checkmarks"></span>
													</label>
												</td>
												<td class="productimgname">
													<a class="product-img">
														<img src="assets/img/products/4809015402825.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">PURE BASICS <br>NATA DE COCO <br>WHITE 340G</a>
												</td>
												<td>0.00</td>
												<td>0</td>
												<td>0</td>
											</tr>
											<tr>
												<td>
													<label class="checkboxs">
														<input type="checkbox">
														<span class="checkmarks"></span>
													</label>
												</td>
												<td class="productimgname">
													<a class="product-img">
														<img src="assets/img/products/4808680221250.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">KNORR SOUP CREAM <br>OF MUSHROOM 62G</a>
												</td>
												<td>0.00</td>
												<td>0</td>
												<td>0</td>
											</tr>
											<tr>
												<td>
													<label class="checkboxs">
														<input type="checkbox">
														<span class="checkmarks"></span>
													</label>
												</td>
												<td class="productimgname">
													<a class="product-img">
														<img src="assets/img/products/4987072005538.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">KOOL FEVER <br>COOLING GEL <br>FOR KIDS 2S</a>
												</td>
												<td>0.00</td>
												<td>0</td>
												<td>0</td>
											</tr>
											<tr>
												<td>
													<label class="checkboxs">
														<input type="checkbox">
														<span class="checkmarks"></span>
													</label>
												</td>
												<td class="productimgname">
													<a class="product-img">
														<img src="assets/img/products/4807770273650.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">LUCKY ME! INSTANT<br>MAMI SPICY LABUYO<br>CHICKEN 50G</a>
												</td>
												<td>0.00</td>
												<td>0</td>
												<td>0</td>
											</tr>
											<tr>
												<td>
													<label class="checkboxs">
														<input type="checkbox">
														<span class="checkmarks"></span>
													</label>
												</td>
												<td class="productimgname">
													<a class="product-img">
														<img src="assets/img/products/4806536780074.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">FAMILIA PANDAN<br>FIESTA RICE 25KG</a>
												</td>
												<td>0.00</td>
												<td>0</td>
												<td>0</td>
											</tr>
											<tr>
												<td>
													<label class="checkboxs">
														<input type="checkbox">
														<span class="checkmarks"></span>
													</label>
												</td>
												<td class="productimgname">
													<a class="product-img">
														<img src="assets/img/products/4800818808906.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">POTCHI STRAWBERRY<br>CREAM 50S</a>
												</td>
												<td>0.00</td>
												<td>0</td>
												<td>0</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- /product list -->
					</div>
				</div>
				<!-- /Main Wrapper -->
				<div class="searchpart">
					<div class="searchcontent">
						<div class="searchhead">
							<h3>Search </h3>
							<a id="closesearch"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
						</div>
						<div class="searchcontents">
							<div class="searchparts">
								<input type="text" placeholder="search here">
								<a class="btn btn-searchs" >Search</a>
							</div>
							<div class="recentsearch">
								<h2>Recent Search</h2>
								<ul>
									<li>
										<h6><i class="fa fa-search me-2"></i> Settings</h6>
									</li>
									<li>
										<h6><i class="fa fa-search me-2"></i> Report</h6>
									</li>
									<li>
										<h6><i class="fa fa-search me-2"></i> Invoice</h6>
									</li>
									<li>
										<h6><i class="fa fa-search me-2"></i> Sales</h6>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include 'layouts/customizer.php'; ?>
			<?php include 'layouts/vendor-scripts.php'; ?>
	
		</body>
	</html>