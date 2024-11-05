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
						<div class="page-title me-auto">
							<h4>Low Stocks</h4>
							<h6>Manage your low stocks</h6>
						</div>
						<ul class="table-top-head low-stock-top-head">
							<li>
								<div class="status-toggle d-flex justify-content-between align-items-center">
									<input type="checkbox" id="user2" class="check" checked="">
									<label for="user2" class="checktoggle">checkbox</label>
									Notify
								</div>
							</li>
							<li>
								<a href="" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#send-email"><i data-feather="mail" class="feather-mail"></i>Send Email</a>
							</li>
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
					<div class="table-tab">
						<ul class="nav nav-pills" id="pills-tab" role="tablist">
							<li class="nav-item" role="presentation">
							  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Low Stocks</button>
							</li>
							<li class="nav-item" role="presentation">
							  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Out of Stocks</button>
							</li>
							
						</ul>
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
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
															<i data-feather="box" class="info-img"></i>
															<select class="select">
																<option>Choose Product</option>
																<!-- Beverages -->
																<option>Soft Drinks</option>
																<option>Fruit Juices</option>
																<option>Energy Drinks</option>
																<option>Bottled Water</option>
																<option>Flavored Water</option>
																
																<!-- Wines & Liquors -->
																<option>Red Wine</option>
																<option>White Wine</option>
																<option>Beer</option>
																<option>Whiskey</option>
																<option>Vodka</option>
																
																<!-- Snacks -->
																<option>Potato Chips</option>
																<option>Corn Snacks</option>
																<option>Popcorn</option>
																<option>Crackers</option>
																<option>Biscuits</option>
																
																<!-- Sweets -->
																<option>Chocolate Bars</option>
																<option>Candy</option>
																<option>Gummies</option>
																<option>Lollipops</option>
																<option>Marshmallows</option>
																
																<!-- Milk & Milk Products -->
																<option>Fresh Milk</option>
																<option>Powdered Milk</option>
																<option>Condensed Milk</option>
																<option>Evaporated Milk</option>
																<option>Flavored Milk</option>
																
																<!-- Formula Milk & Baby Foods -->
																<option>Infant Formula</option>
																<option>Toddler Formula</option>
																<option>Baby Cereals</option>
																<option>Baby Snacks</option>
																<option>Baby Purees</option>
																
																<!-- Cigars -->
																<option>Flavored Cigars</option>
																<option>Hand-rolled Cigars</option>
																<option>Mini Cigars</option>
																<option>Premium Cigars</option>
																<option>Machine-made Cigars</option>
																
																<!-- Condiments, Sauces & Dressings -->
																<option>Soy Sauce</option>
																<option>Fish Sauce</option>
																<option>Hot Sauce</option>
																<option>Vinegar</option>
																<option>Salad Dressings</option>
																
																<!-- Canned Goods -->
																<option>Canned Fish</option>
																<option>Canned Meat</option>
																<option>Canned Vegetables</option>
																<option>Canned Fruits</option>
																<option>Canned Soup</option>
																
																<!-- Grocery Staples -->
																<option>Instant Noodles</option>
																<option>Pasta</option>
																<option>Rice</option>
																<option>Sugar</option>
																<option>Cooking Oil</option>
																
																<!-- Seafoods -->
																<option>Frozen Fish</option>
																<option>Frozen Shrimp</option>
																<option>Frozen Squid</option>
																<option>Canned Tuna</option>
																<option>Smoked Fish</option>
																
																<!-- Fruits & Vegetables -->
																<option>Fresh Fruits</option>
																<option>Frozen Fruits</option>
																<option>Fresh Vegetables</option>
																<option>Frozen Vegetables</option>
																<option>Canned Vegetables</option>
																
																<!-- Meat -->
																<option>Frozen Beef</option>
																<option>Frozen Pork</option>
																<option>Frozen Lamb</option>
																<option>Processed Meat</option>
																<option>Smoked Meat</option>
																
																<!-- Poultry -->
																<option>Whole Chicken</option>
																<option>Chicken Wings</option>
																<option>Chicken Breast</option>
																<option>Duck Meat</option>
																<option>Frozen Poultry</option>
																
																<!-- Bakery -->
																<option>Loaf Bread</option>
																<option>Rolls</option>
																<option>Pastries</option>
																<option>Muffins</option>
																<option>Cookies</option>
																
																<!-- Rice & Sugar -->
																<option>White Rice</option>
																<option>Brown Rice</option>
																<option>Organic Rice</option>
																<option>White Sugar</option>
																<option>Brown Sugar</option>
																
																<!-- Delicatessen -->
																<option>Cold Cuts</option>
																<option>Cheese</option>
																<option>Sausages</option>
																<option>Salami</option>
																<option>Bacon</option>
																
																<!-- Dairy and Deli -->
																<option>Cheddar Cheese</option>
																<option>Butter</option>
																<option>Yogurt</option>
																<option>Fresh Cream</option>
																<option>Margarine</option>
																
																<!-- Baby Care -->
																<option>Baby Diapers</option>
																<option>Baby Wipes</option>
																<option>Baby Shampoo</option>
																<option>Baby Lotion</option>
																<option>Baby Powder</option>
																
																<!-- Health & Beauty Care -->
																<option>Facial Wash</option>
																<option>Body Lotion</option>
																<option>Shampoo & Conditioner</option>
																<option>Toothpaste</option>
																<option>Makeup</option>
																
																<!-- Household Maintenance -->
																<option>All-purpose Cleaners</option>
																<option>Bleach</option>
																<option>Dishwashing Liquid</option>
																<option>Fabric Softeners</option>
																<option>Laundry Detergents</option>
																
																<!-- Healthcare -->
																<option>Pain Relievers</option>
																<option>Cold & Flu Medicine</option>
																<option>Vitamins</option>
																<option>First Aid Kits</option>
																<option>Bandages</option>
																
																<!-- Appliances -->
																<option>Refrigerators</option>
																<option>Washing Machines</option>
																<option>Microwaves</option>
																<option>Televisions</option>
																<option>Air Conditioners</option>
																
																<!-- Hardware -->
																<option>Nails & Screws</option>
																<option>Hand Tools</option>
																<option>Power Tools</option>
																<option>Pipes & Fittings</option>
																<option>Building Materials</option>
																
																<!-- Furniture -->
																<option>Tables</option>
																<option>Chairs</option>
																<option>Beds</option>
																<option>Wardrobes</option>
																<option>Sofas</option>
																
																<!-- Plasticware -->
																<option>Storage Boxes</option>
																<option>Plastic Bins</option>
																<option>Food Containers</option>
																<option>Plastic Chairs</option>
																<option>Plastic Tables</option>
																
																<!-- Kitchenware -->
																<option>Pots & Pans</option>
																<option>Utensils</option>
																<option>Cutlery</option>
																<option>Plates & Bowls</option>
																<option>Glassware</option>


															</select>
														</div>
													</div>
													<div class="col-lg-3 col-sm-6 col-12">
														<div class="input-blocks">
															<i data-feather="zap" class="info-img"></i>
															<select class="select">
																<option>Choose Category</option>
																<option>Beverages</option>
																<option>Wines & Liquors</option>
																<option>Snacks</option>
																<option>Sweets</option>
																<option>Milk & Milk Products</option>
																<option>Formula Milk & Baby Foods</option>
																<option>Cigars</option>
																<option>Condiments Sauces & Dress</option>
																<option>Canned Goods</option>
																<option>Grocery Staples</option>
																<option>Seafoods</option>
																<option>Fruits & Vegetales</option>
																<option>Meat</option>
																<option>Poultry</option>
																<option>Bakery</option>
																<option>Rice & Sugar</option>
																<option>Delicatessen</option>
																<option>Dairy and Deli</option>
																<option>Baby Care</option>
																<option>Health & Beauty Care</option>
																<option>Household Maintenance</option>
																<option>Healthcare</option>
																<option>Appliance</option>
																<option>Hardware</option>
																<option>Furniture</option>
																<option>Plasticware</option>
																<option>Kitchenware</option>
															</select>
														</div>
													</div>
													<div class="col-lg-3 col-sm-6 col-12">
														<div class="input-blocks">
															<i data-feather="archive" class="info-img"></i>
															<select class="select">
																<option>Choose Warehouse</option>
																<option>Krypton International Warehouse</option>
																<option>Neco Philippines</option>
																<option>LogiCore Inc.</option>
																<option>Reitoh Cold Storage, Inc.</option>
																<option>PhilMeds Distribution Center</option>
																<option>Bayanihan Storage & Logistics</option>
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
											<table class="table  datanew">
												<thead>
													<tr>
														<th class="no-sort">
															<label class="checkboxs">
																<input type="checkbox" id="select-all">
																<span class="checkmarks"></span>
															</label>
														</th>
														<th>Warehouse</th>
														<th>Store</th>
														<th>Product</th>
														<th>Category</th>
														<th>SKU</th>
														<th>Qty</th>
														<th>Qty Alert</th>
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
														<td>Bayanihan Storage & Logistics</td>
														<td>L & S (Main Branch)</td>
														
														<td>
															<div class="productimgname">
																<a href="javascript:void(0);" class="product-img stock-img">
																	<img src="assets/img/products/4806536780074.jpg" alt="product">
																</a>
																<a href="javascript:void(0);">FAMILIA PANDAN<br>FIESTA RICE 25KG</a>
															</div>												
														</td>
														<td>RICE</td>
														<td>817741-118-<br>4806536780074</td>
														<td>5</td>
														<td>10</td>
														<td class="action-table-data">
															<div class="edit-delete-action">
																<a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-stock">
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
														<td>PhilMeds Distribution Center</td>
														<td>L & S (Main Branch)</td>
														
														<td>
															<div class="productimgname">
																<a href="javascript:void(0);" class="product-img stock-img">
																	<img src="assets/img/products/4987072005538.jpg" alt="product">
																</a>
																<a href="javascript:void(0);">KOOL FEVER <br>COOLING GEL <br>FOR KIDS 2S</a>
															</div>												
														</td>
														<td>PHARMACY</td>
														<td>152291-118-<br>4987072005538</td>
														<td>10</td>
														<td>10</td>
														<td class="action-table-data">
															<div class="edit-delete-action">
																<a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-stock">
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
														<td>Bayanihan Storage & Logistics</td>
														<td>L & S (Main Branch)</td>
														
														<td>
															<div class="productimgname">
																<a href="javascript:void(0);" class="product-img stock-img">
																	<img src="assets/img/products/4808680221250.jpg" alt="product">
																</a>
																<a href="javascript:void(0);">KNORR SOUP CREAM<br>OF MUSHROOM 62G</a>
															</div>												
														</td>
														<td>SOUP</td>
														<td>11668-118-<br>4808680221250</td>
														<td>20</td>
														<td>10</td>
														<td class="action-table-data">
															<div class="edit-delete-action">
																<a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-stock">
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
														<td>Bayanihan Storage & Logistics</td>
														<td>L & S (Main Branch)</td>
														
														<td>
															<div class="productimgname">
																<a href="javascript:void(0);" class="product-img stock-img">
																	<img src="assets/img/products/4809015402825.jpg" alt="product">
																</a>
																<a href="javascript:void(0);">PURE BASICS <br>NATA DE COCO <br>WHITE 340G</a>
															</div>												
														</td>
														<td>DESSERT</td>
														<td>721298-118-<br>4809015402825</td>
														<td>17</td>
														<td>10</td>
														<td class="action-table-data">
															<div class="edit-delete-action">
																<a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-stock">
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
														<td>Bayanihan Storage & Logistics</td>
														<td>L & S (Main Branch)</td>
														
														<td>
															<div class="productimgname">
																<a href="javascript:void(0);" class="product-img stock-img">
																	<img src="assets/img/products/4807770273650.jpg" alt="product">
																</a>
																<a href="javascript:void(0);">LUCKY ME! INSTANT <br>MAMI SPICY LABUYO <br>CHICKEN 50G</a>
															</div>												
														</td>
														<td>INSTANT NOODLES</td>
														<td>539104-118-<br>4807770273650</td>
														<td>27</td>
														<td>10</td>
														<td class="action-table-data">
															<div class="edit-delete-action">
																<a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-stock">
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
							<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
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
												<a class="btn btn-filter" id="filter_search1">
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
										<div class="card" id="filter_inputs1">
											<div class="card-body pb-0">
												<div class="row">
													<div class="col-lg-3 col-sm-6 col-12">
														<div class="input-blocks">
															<i data-feather="box" class="info-img"></i>
															<select class="select">
																<option>Choose Product</option>
																<!-- Beverages -->
																<option>Soft Drinks</option>
																<option>Fruit Juices</option>
																<option>Energy Drinks</option>
																<option>Bottled Water</option>
																<option>Flavored Water</option>
																
																<!-- Wines & Liquors -->
																<option>Red Wine</option>
																<option>White Wine</option>
																<option>Beer</option>
																<option>Whiskey</option>
																<option>Vodka</option>
																
																<!-- Snacks -->
																<option>Potato Chips</option>
																<option>Corn Snacks</option>
																<option>Popcorn</option>
																<option>Crackers</option>
																<option>Biscuits</option>
																
																<!-- Sweets -->
																<option>Chocolate Bars</option>
																<option>Candy</option>
																<option>Gummies</option>
																<option>Lollipops</option>
																<option>Marshmallows</option>
																
																<!-- Milk & Milk Products -->
																<option>Fresh Milk</option>
																<option>Powdered Milk</option>
																<option>Condensed Milk</option>
																<option>Evaporated Milk</option>
																<option>Flavored Milk</option>
																
																<!-- Formula Milk & Baby Foods -->
																<option>Infant Formula</option>
																<option>Toddler Formula</option>
																<option>Baby Cereals</option>
																<option>Baby Snacks</option>
																<option>Baby Purees</option>
																
																<!-- Cigars -->
																<option>Flavored Cigars</option>
																<option>Hand-rolled Cigars</option>
																<option>Mini Cigars</option>
																<option>Premium Cigars</option>
																<option>Machine-made Cigars</option>
																
																<!-- Condiments, Sauces & Dressings -->
																<option>Soy Sauce</option>
																<option>Fish Sauce</option>
																<option>Hot Sauce</option>
																<option>Vinegar</option>
																<option>Salad Dressings</option>
																
																<!-- Canned Goods -->
																<option>Canned Fish</option>
																<option>Canned Meat</option>
																<option>Canned Vegetables</option>
																<option>Canned Fruits</option>
																<option>Canned Soup</option>
																
																<!-- Grocery Staples -->
																<option>Instant Noodles</option>
																<option>Pasta</option>
																<option>Rice</option>
																<option>Sugar</option>
																<option>Cooking Oil</option>
																
																<!-- Seafoods -->
																<option>Frozen Fish</option>
																<option>Frozen Shrimp</option>
																<option>Frozen Squid</option>
																<option>Canned Tuna</option>
																<option>Smoked Fish</option>
																
																<!-- Fruits & Vegetables -->
																<option>Fresh Fruits</option>
																<option>Frozen Fruits</option>
																<option>Fresh Vegetables</option>
																<option>Frozen Vegetables</option>
																<option>Canned Vegetables</option>
																
																<!-- Meat -->
																<option>Frozen Beef</option>
																<option>Frozen Pork</option>
																<option>Frozen Lamb</option>
																<option>Processed Meat</option>
																<option>Smoked Meat</option>
																
																<!-- Poultry -->
																<option>Whole Chicken</option>
																<option>Chicken Wings</option>
																<option>Chicken Breast</option>
																<option>Duck Meat</option>
																<option>Frozen Poultry</option>
																
																<!-- Bakery -->
																<option>Loaf Bread</option>
																<option>Rolls</option>
																<option>Pastries</option>
																<option>Muffins</option>
																<option>Cookies</option>
																
																<!-- Rice & Sugar -->
																<option>White Rice</option>
																<option>Brown Rice</option>
																<option>Organic Rice</option>
																<option>White Sugar</option>
																<option>Brown Sugar</option>
																
																<!-- Delicatessen -->
																<option>Cold Cuts</option>
																<option>Cheese</option>
																<option>Sausages</option>
																<option>Salami</option>
																<option>Bacon</option>
																
																<!-- Dairy and Deli -->
																<option>Cheddar Cheese</option>
																<option>Butter</option>
																<option>Yogurt</option>
																<option>Fresh Cream</option>
																<option>Margarine</option>
																
																<!-- Baby Care -->
																<option>Baby Diapers</option>
																<option>Baby Wipes</option>
																<option>Baby Shampoo</option>
																<option>Baby Lotion</option>
																<option>Baby Powder</option>
																
																<!-- Health & Beauty Care -->
																<option>Facial Wash</option>
																<option>Body Lotion</option>
																<option>Shampoo & Conditioner</option>
																<option>Toothpaste</option>
																<option>Makeup</option>
																
																<!-- Household Maintenance -->
																<option>All-purpose Cleaners</option>
																<option>Bleach</option>
																<option>Dishwashing Liquid</option>
																<option>Fabric Softeners</option>
																<option>Laundry Detergents</option>
																
																<!-- Healthcare -->
																<option>Pain Relievers</option>
																<option>Cold & Flu Medicine</option>
																<option>Vitamins</option>
																<option>First Aid Kits</option>
																<option>Bandages</option>
																
																<!-- Appliances -->
																<option>Refrigerators</option>
																<option>Washing Machines</option>
																<option>Microwaves</option>
																<option>Televisions</option>
																<option>Air Conditioners</option>
																
																<!-- Hardware -->
																<option>Nails & Screws</option>
																<option>Hand Tools</option>
																<option>Power Tools</option>
																<option>Pipes & Fittings</option>
																<option>Building Materials</option>
																
																<!-- Furniture -->
																<option>Tables</option>
																<option>Chairs</option>
																<option>Beds</option>
																<option>Wardrobes</option>
																<option>Sofas</option>
																
																<!-- Plasticware -->
																<option>Storage Boxes</option>
																<option>Plastic Bins</option>
																<option>Food Containers</option>
																<option>Plastic Chairs</option>
																<option>Plastic Tables</option>
																
																<!-- Kitchenware -->
																<option>Pots & Pans</option>
																<option>Utensils</option>
																<option>Cutlery</option>
																<option>Plates & Bowls</option>
																<option>Glassware</option>

															</select>
														</div>
													</div>
													<div class="col-lg-3 col-sm-6 col-12">
														<div class="input-blocks">
															<i data-feather="zap" class="info-img"></i>
															<select class="select">
																<option>Choose Category</option>
																<option>Beverages</option>
																<option>Wines & Liquors</option>
																<option>Snacks</option>
																<option>Sweets</option>
																<option>Milk & Milk Products</option>
																<option>Formula Milk & Baby Foods</option>
																<option>Cigars</option>
																<option>Condiments Sauces & Dress</option>
																<option>Canned Goods</option>
																<option>Grocery Staples</option>
																<option>Seafoods</option>
																<option>Fruits & Vegetales</option>
																<option>Meat</option>
																<option>Poultry</option>
																<option>Bakery</option>
																<option>Rice & Sugar</option>
																<option>Delicatessen</option>
																<option>Dairy and Deli</option>
																<option>Baby Care</option>
																<option>Health & Beauty Care</option>
																<option>Household Maintenance</option>
																<option>Healthcare</option>
																<option>Appliance</option>
																<option>Hardware</option>
																<option>Furniture</option>
																<option>Plasticware</option>
																<option>Kitchenware</option>
															</select>
														</div>
													</div>
													<div class="col-lg-3 col-sm-6 col-12">
														<div class="input-blocks">
															<i data-feather="archive" class="info-img"></i>
															<select class="select">
																<option>Choose Warehouse</option>
																<option>Krypton International Warehouse</option>
																<option>Neco Philippines</option>
																<option>LogiCore Inc.</option>
																<option>Reitoh Cold Storage, Inc.</option>
																<option>PhilMeds Distribution Center</option>
																<option>Bayanihan Storage & Logistics</option>
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
											<table class="table  datanew">
												<thead>
													<tr>
														<th class="no-sort">
															<label class="checkboxs">
																<input type="checkbox" id="select-all2">
																<span class="checkmarks"></span>
															</label>
														</th>
														<th>Warehouse</th>
														<th>Store</th>
														<th>Product</th>
														<th>Category</th>
														<th>SKU</th>
														<th>Qty</th>
														<th>Qty Alert</th>
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
														<td>Bayanihan Storage & Logistics</td>
														<td>L & S (Main Branch)</td>
														
														<td>
															<div class="productimgname">
																<a href="javascript:void(0);" class="product-img stock-img">
																	<img src="assets/img/products/4800818808906.jpg" alt="product">
																</a>
																<a href="javascript:void(0);">POTCHI STRAWBERRY<br>CREAM 50S</a>
															</div>												
														</td>
														<td>CHOCOLATE &<br>CANDIES</td>
														<td>11340-118-<br>4800818808906</td>
														<td>40</td>
														<td>10</td>
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
														<td>Bayanihan Storage & Logistics</td>
														<td>L & S (Main Branch)</td>
														
														<td>
															<div class="productimgname">
																<a href="javascript:void(0);" class="product-img stock-img">
																	<img src="assets/img/products/4800361390804.jpg" alt="product">
																</a>
																<a href="javascript:void(0);">NESTLE COFFEMATE<br>ORIGINAL 150G</a>
															</div>												
														</td>
														<td>CREAMER</td>
														<td>453489-118-<br>4800361390804</td>
														<td>450</td>
														<td>50</td>
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
														<td>Bayanihan Storage & Logistics</td>
														<td>L & S (Main Branch)</td>
														
														<td>
															<div class="productimgname">
																<a href="javascript:void(0);" class="product-img stock-img">
																	<img src="assets/img/products/4800611546760.jpg" alt="product">
																</a>
																<a href="javascript:void(0);">COBRA ENERGY DRINK <br> ORIGINAL 350ML</a>
															</div>												
														</td>
														<td>ENERGY & SPORTS DRINK</td>
														<td>236900-118-<br>4800611546760</td>
														<td>140</td>
														<td>10</td>
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
														<td>Bayanihan Storage & Logistics</td>
														<td>L & S (Main Branch)</td>
														
														<td>
															<div class="productimgname">
																<a href="javascript:void(0);" class="product-img stock-img">
																	<img src="assets/img/products/4800016644801.jpg" alt="product">
																</a>
																<a href="javascript:void(0);">JACK N JILL PIATTOS <br>CHEESE 40G</a>
															</div>												
														</td>
														<td>CHIPS, NUTS & CORN</td>
														<td>20721-118-<br>4800016644801</td>
														<td>100</td>
														<td>10</td>
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
														<td>Bayanihan Storage & Logistics</td>
														<td>L & S (Main Branch)</td>
														
														<td>
															<div class="productimgname">
																<a href="javascript:void(0);" class="product-img stock-img">
																	<img src="assets/img/products/stock-img-05.png" alt="product">
																</a>
																<a href="javascript:void(0);">KOPIKO BLACK3IN1 <br> HANGER 30GX10S</a>
															</div>												
														</td>
														<td>COFFEE</td>
														<td>PT005</td>
														<td>50</td>
														<td>10</td>
														<td class="action-table-data">
															<div class="edit-delete-action">
																<a class="me-3 p-2" href="javascript:void(0);">
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
				</div>
			</div>

    </div>
<!-- end main Wrapper-->

		<!-- Send Mail -->
		<div class="modal fade" id="send-email">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="success-email-send modal-body .custom-modal-body text-center">
						<span><i data-feather="check-circle" class="feather-trash-2"></i></span>
						<h4>Success</h4>
						<p>Email Sent Successfully</p>
						<a href="" class="btn btn-primary" data-bs-dismiss="modal">Close</a>
					</div>
				</div>
			</div>
		</div>
		<!-- /Send Mail -->

		<!-- Edit Low Stock -->
		<div class="modal fade" id="edit-stock">
			<div class="modal-dialog modal-dialog-centered custom-modal-two">
				<div class="modal-content">
					<div class="page-wrapper-new p-0">
						<div class="content">
							<div class="modal-header border-0 custom-modal-header">
								<div class="page-title">
									<h4>Edit Low Stocks</h4>
								</div>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body custom-modal-body">
								<form action="low-stocks.php">
									<div class="mb-3">
										<label class="form-label">Warehouse</label>
										<input type="text" class="form-control" value="Lavish Warehouse">
									</div>
									<div class="mb-3">
										<label class="form-label">Store</label>
										<input type="text" class="form-control" value="Crinol">
									</div>
									<div class="mb-3">
										<label class="form-label">Category</label>
										<input type="text" class="form-control" value="Laptop">
									</div>
									<div class="mb-3">
										<label class="form-label">Product</label>
										<input type="text" class="form-control" value="Lenevo 3rd Gen">
									</div>
									<div class="mb-3">
										<label class="form-label">SKU</label>
										<input type="text" class="form-control" value="PT001">
									</div>
									<div class="mb-3">
										<label class="form-label">Qty</label>
										<input type="text" class="form-control" value="15">
									</div>
									<div class="mb-3">
										<label class="form-label">Qty Alert</label>
										<input type="text" class="form-control" value="10">
									</div>
									<div class="mb-0">
										<div class="status-toggle modal-status d-flex justify-content-between align-items-center">
											<span class="status-label">Status</span>
											<input type="checkbox" id="user3" class="check" checked="">
											<label for="user3" class="checktoggle"></label>
										</div>
									</div>
									<div class="modal-footer-btn">
										<button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-submit">Save Changes</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / Edit Low Stock -->

<?php include 'layouts/customizer.php'; ?>
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>
</body>
</html>