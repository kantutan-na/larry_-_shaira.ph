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
								<h4>Profit & Loss</h4>
								<h6>Manage your Profit & Loss</h6>
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
					
					<div class="card table-list-card border-0 mb-0">
						<div class="card-body mb-3">
							<div class="table-top mb-0 profit-table-top">
								<div class="search-path profit-head ">
									<div class="input-blocks mb-0">
										<i data-feather="calendar" class="info-img"></i>
										<div class="input-groupicon">
											<input type="text" class="datetimepicker" placeholder="This Financial Year" >
										</div>
									</div>
								</div>
								<div class="position-relative daterange-wraper input-blocks mb-0">
									<input type="text" name="datetimes" placeholder="From Month -  To Month " class="form-control">
									<i data-feather="calendar" class="feather-14 info-img"></i>
								</div>
								<div class="date-btn">
									<a href="javascript:void(0);" class="btn btn-secondary d-flex align-items-center"><i data-feather="database" class="feather-14 info-img me-2"></i>Display Date</a>
								</div>
							</div>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table profit-table">
							<thead class="profit-table-bg">
								<tr>
									<th class="no-sort">
									</th>
									<th>Jan 2024</th>
									<th>Feb 2024</th>
									<th>Mar 2024</th>
									<th>Apr 2024</th>
									<th>May 2024</th>
									<th>Jun 2024</th>
								</tr>
							</thead>
							<tbody>
								<tr class="table-heading">
									<td>Income</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>Sales</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
								</tr>
								<tr>
									<td>Service</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
								</tr>
								<tr>
									<td>Purchase Return</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
								</tr>
								<tr class="profit-table-bg">
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
								</tr>
								<tr class="table-heading">
									<td>Expenses</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>Sales</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
								</tr>
								<tr>
									<td>Purchase</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
								</tr>
								<tr class="profit-table-bg">
									<td>Sales Return</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
								</tr>
								<tr class="profit-table-bg">
									<td>Total Expense</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
								</tr>
								<tr class="profit-table-bg">
									<td>Net Profit</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
									<td>₱0.00</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
        </div>
		<!-- /Main Wrapper -->
		<?php include 'layouts/customizer.php'; ?>		
		<?php include 'layouts/vendor-scripts.php'; ?>
    </body>
</html>