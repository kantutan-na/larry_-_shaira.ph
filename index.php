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
				<div class="row">
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="dash-widget w-100">
							<div class="dash-widgetimg">
								<span><img src="assets/img/icons/dash1.svg" alt="img"></span>
							</div>
							<div class="dash-widgetcontent">
								<h5>₱<span class="counters" data-count="0.00">₱0.00</span></h5>
								<h6>Total Purchase Due</h6>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="dash-widget dash1 w-100">
							<div class="dash-widgetimg">
								<span><img src="assets/img/icons/dash2.svg" alt="img"></span>
							</div>
							<div class="dash-widgetcontent">
								<h5>₱<span class="counters" data-count="0.00">₱0.00</span></h5>
								<h6>Total Sales Due</h6>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="dash-widget dash2 w-100">
							<div class="dash-widgetimg">
								<span><img src="assets/img/icons/dash3.svg" alt="img"></span>
							</div>
							<div class="dash-widgetcontent">
								<h5>₱<span class="counters" data-count="0.00">₱0.00</span></h5>
								<h6>Total Sale Amount</h6>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="dash-widget dash3 w-100">
							<div class="dash-widgetimg">
								<span><img src="assets/img/icons/dash4.svg" alt="img"></span>
							</div>
							<div class="dash-widgetcontent">
								<h5>₱<span class="counters" data-count="0.00">₱0.00</span></h5>
								<h6>Total Expense Amount</h6>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="dash-count">
							<div class="dash-counts">
								<h4>0</h4>
								<h5>Customers</h5>
							</div>
							<div class="dash-imgs">
								<i data-feather="user"></i>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="dash-count das1">
							<div class="dash-counts">
								<h4>0</h4>
								<h5>Suppliers</h5>
							</div>
							<div class="dash-imgs">
								<i data-feather="user-check"></i>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="dash-count das2">
							<div class="dash-counts">
								<h4>0</h4>
								<h5>Purchase Invoice</h5>
							</div>
							<div class="dash-imgs">
								<img src="assets/img/icons/file-text-icon-01.svg" class="img-fluid" alt="icon">
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="dash-count das3">
							<div class="dash-counts">
								<h4>0</h4>
								<h5>Sales Invoice</h5>
							</div>
							<div class="dash-imgs">
								<i data-feather="file"></i>
							</div>
						</div>
					</div>
				</div>
				<!-- Button trigger modal -->

				<div class="row">
					<div class="col-xl-7 col-sm-12 col-12 d-flex">
						<div class="card flex-fill">
							<div class="card-header d-flex justify-content-between align-items-center">
								<h5 class="card-title mb-0">Purchase & Sales</h5>
								<div class="graph-sets">
									<ul class="mb-0">
										<li>
											<span>Sales</span>
										</li>
										<li>
											<span>Purchase</span>
										</li>
									</ul>
									<div class="dropdown dropdown-wraper">
										<button class="btn btn-light btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
											2024
										</button>
										<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<li>
												<a href="javascript:void(0);" class="dropdown-item">2024</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item">2023</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item">2022</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div id="sales_charts"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-5 col-sm-12 col-12 d-flex">
						<div class="card flex-fill default-cover mb-4">
							<div class="card-header d-flex justify-content-between align-items-center">
								<h4 class="card-title mb-0">Recent Products</h4>
								<div class="view-all-link">
									<a href="javascript:void(0);" class="view-all d-flex align-items-center">
										View All<span class="ps-2 d-flex align-items-center"><i data-feather="arrow-right" class="feather-16"></i></span>
									</a>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive dataview">
									<table class="table dashboard-recent-products">
										<thead>
											<tr>
												<th>#</th>
												<th>Products</th>
												<th>Price</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td class="productimgname">
													<a href="product-list.php" class="product-img">
														<img src="assets/img/products/4800249008517.jpg" alt="product">
													</a>
													<a href="product-list.php">SAN MARINO 85G</a>
												</td>
												<td>₱29.30</td>
											</tr>
											<tr>
												<td>2</td>
												<td class="productimgname">
													<a href="product-list.php" class="product-img">
														<img src="assets/img/products/748485700045.jpg" alt="product">
													</a>
													<a href="product-list.php">555 TUNA MECHADO 155G</a>
												</td>
												<td>₱28.00</td>
											</tr>
											<tr>
												<td>3</td>
												<td class="productimgname">
													<a href="product-list.php" class="product-img">
														<img src="assets/img/products/4807770274473.jpg" alt="product">
													</a>
													<a href="product-list.php">LUCKY ME! SWEET & SPICY 120G</a>
												</td>
												<td>₱18.70</td>
											</tr>
											<tr>
												<td>4</td>
												<td class="productimgname">
													<a href="product-list.php" class="product-img">
														<img src="assets/img/products/4800344003943.jpg" alt="product">
													</a>
													<a href="product-list.php">SILVER SWAN DOY PACK 200ML</a>
												</td>
												<td>₱7.85</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Expired Products</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive dataview">
							<table class="table dashboard-expired-products">
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
													<img src="assets/img/products/4806522870000.jpg" alt="product">
												</a>
												<a href="javascript:void(0);">KJA SUMMIT NEGOSYO PACK PORK SIOMAI 54'S X 17G </a>
											</div>
										</td>
										<td><a href="javascript:void(0);">326990-118-4806522870000</a></td>
										<td>17 Jan 2024</td>
										<td>05 Oct 2024</td>
										<td class="action-table-data">
											<div class="edit-delete-action">
												<a class="me-2 p-2" href="#">
													<i data-feather="edit" class="feather-edit"></i>
												</a>
												<a class=" confirm-text p-2" href="javascript:void(0);">
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
													<img src="assets/img/products/4806502725924.jpg" alt="product">
												</a>
												<a href="javascript:void(0);">GARDENIA PINOY TASTY 450G</a>
											</div>
										</td>
										<td><a href="javascript:void(0);">429972-118-4806502725924</a></td>
										<td>22 Feb 2024</td>
										<td>04 Oct 2024</td>
										<td class="action-table-data">
											<div class="edit-delete-action">
												<a class="me-2 p-2" href="#">
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
													<img src="assets/img/products/5202390020049.jpg" alt="product">
												</a>
												<a href="javascript:void(0);">CHIZBOY VIOTROS BURGER CHEDDAR 400G</a>
											</div>
										</td>
										<td><a href="javascript:void(0);">754808-118-5202390020049</a></td>
										<td>18 Mar 2023</td>
										<td>13 Sept 2024</td>
										<td class="action-table-data">
											<div class="edit-delete-action">
												<a class="me-2 p-2" href="#">
													<i data-feather="edit" class="feather-edit"></i>
												</a>
												<a class=" confirm-text p-2" href="javascript:void(0);">
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
													<img src="assets/img/products/4806502726822.jpg" alt="product">
												</a>
												<a href="javascript:void(0);">GARDENIA NEUBAKE WHITE BREAD 450G</a>
											</div>
										</td>
										<td><a href="javascript:void(0);">274236-118-4806502726822</a></td>
										<td>29 Mar 2024</td>
										<td>27 May 2024</td>
										<td class="action-table-data">
											<div class="edit-delete-action">
												<a class="me-2 p-2" href="#">
													<i data-feather="edit" class="feather-edit"></i>
												</a>
												<a class=" confirm-text p-2" href="javascript:void(0);">
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
													<img src="assets/img/products/4805358246041.jpg" alt="product">
												</a>
												<a href="javascript:void(0);">MAGNOLIA DARI CREME CLASSIC 200G</a>
											</div>
										</td>
										<td><a href="javascript:void(0);">17582-118-4805358246041</a></td>
										<td>24 Mar 2024</td>
										<td>26 Aug 2024</td>
										<td class="action-table-data">
											<div class="edit-delete-action">
												<a class="me-2 p-2" href="#" data-bs-toggle="modal" data-bs-target="#edit-units">
													<i data-feather="edit" class="feather-edit"></i>
												</a>
												<a class=" confirm-text p-2" href="javascript:void(0);">
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
			</div>
		</div>
    </div>
<!-- end main Wrapper-->
<?php include 'layouts/customizer.php'; ?>
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>
</body>
</html>