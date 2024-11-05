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
								<h4>Purchase Report</h4>
								<h6>Manage Your Purchase Report</h6>
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
										<option>25 9 23</option>
										<option>12 9 23</option>
									</select>
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
                <th>Purchase Amount</th>
                <th>Purchase Qty</th>
                <th>Instock Qty</th>
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
                <td>₱20.00</td>
                <td>500</td>
                <td>200</td>
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
                <td>₱30.00</td>
                <td>300</td>
                <td>150</td>
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
                            <img src="assets/img/products/8996001410226.jpg" alt="product">
                        </a>
                    </div>
                    <a href="javascript:void(0);">KOPIKO BLACK 3IN1 HANGER 30GX10S</a>
                </td>
                <td>₱25.00</td>
                <td>400</td>
                <td>180</td>
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
                <td>₱40.00</td>
                <td>350</td>
                <td>200</td>
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
		<?php include 'layouts/customizer.php'; ?>
		 
		<?php include 'layouts/vendor-scripts.php'; ?>
	
    </body>
</html>