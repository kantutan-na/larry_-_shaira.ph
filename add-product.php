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
								<h4>New Product</h4>
								<h6>Create new product</h6>
							</div>
						</div>
						<ul class="table-top-head">
							<li>
								<div class="page-btn">
									<a href="product-list.php" class="btn btn-secondary"><i data-feather="arrow-left" class="me-2"></i>Back to Product</a>
								</div>
							</li>
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i data-feather="chevron-up" class="feather-chevron-up"></i></a>
							</li>
						</ul>
						
					</div>
					<!-- /add -->
					<form action="add-product.php">
						<div class="card">
							<div class="card-body add-product pb-0">
								<div class="accordion-card-one accordion" id="accordionExample">
									<div class="accordion-item">
										<div class="accordion-header" id="headingOne">
											<div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne"  aria-controls="collapseOne">
												<div class="addproduct-icon">
													<h5><i data-feather="info" class="add-info"></i><span>Product Information</span></h5>
													<a href="javascript:void(0);"><i data-feather="chevron-down" class="chevron-down-add"></i></a>
												</div>
											</div>
										</div>
										<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<div class="row">
												<div class="col-lg-4 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Store</label>
														<select class="select">
															<option>Choose</option>
															<option>L & S Store (Main Branch)</option>
															<option>J & L Store</option>
															<option>Michael Store</option>

														</select>
													</div>
												</div>
												<div class="col-lg-4 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Warehouse</label>
														<select class="select">
															<option>Choose</option>
															<option>Krypton International Warehouse</option>
															<option>Neco Philippines</option>
															<option>LogiCore Inc.</option>
															<option>Reitoh Cold Storage, Inc.</option>
															<option>PhilMeds Distribution Center</option>
															<option>Bayanihan Storage & Logistics</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-4 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Product Name</label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-lg-4 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Slug</label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-lg-4 col-sm-6 col-12">
													<div class="input-blocks add-product list">
														<label>SKU</label>
														<input type="text" class="form-control list" placeholder="Enter SKU">
														<button type="submit" class="btn btn-primaryadd">
															Generate Code
														</button>
													</div>
												</div>
											</div>
											<div class="addservice-info">
												<div class="row">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="mb-3 add-product">
															<div class="add-newplus">
																<label class="form-label">Category</label>
																<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-units-category"><i data-feather="plus-circle" class="plus-down-add"></i><span>Add
																		New</span></a>
															</div>
															<select class="select">
															<option>Choose Category</option>
															<option>Beverages</option>
															<option>Wines & Liquors</option>
															<option>Snacks</option>
															<option>Sweets</option>
															<option>Milk & Milk Products</option>
															<option>Formula Milk & Baby Foods</option>
															<option>Cigars</option>
															<option>Condiments, Sauces & Dressings</option>
															<option>Canned Goods</option>
															<option>Grocery Staples</option>
															<option>Seafoods</option>
															<option>Fruits & Vegetables</option>
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
															<option>Appliances</option>
															<option>Hardware</option>
															<option>Furniture</option>
															<option>Plasticware</option>
															<option>Kitchenware</option>
 															</select>
														</div>
													</div>
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="mb-3 add-product">
															<label class="form-label">Sub Category</label>
															<select class="select">
																<option>Choose Subcategory</option>
																<!-- Beverages -->
																<option>Non-Alcoholic</option>
																<option>Alcoholic</option>
																
																<!-- Wines & Liquors -->
																<option>Red Wines</option>
																<option>White Wines</option>
																<option>Spirits</option>
																
																<!-- Snacks -->
																<option>Chips</option>
																<option>Popcorn</option>
																<option>Crackers</option>
																
																<!-- Sweets -->
																<option>Chocolates</option>
																<option>Candies</option>
																<option>Baked Goods</option>
																
																<!-- Milk & Milk Products -->
																<option>Fresh Milk</option>
																<option>Powdered Milk</option>
																<option>Plant-based Milk</option>
																
																<!-- Formula Milk & Baby Foods -->
																<option>Infant Formula</option>
																<option>Baby Snacks</option>
																
																<!-- Cigars -->
																<option>Flavored Cigars</option>
																<option>Premium Cigars</option>
																
																<!-- Condiments, Sauces & Dressings -->
																<option>Cooking Sauces</option>
																<option>Salad Dressings</option>
																
																<!-- Canned Goods -->
																<option>Canned Fish</option>
																<option>Canned Fruits</option>
																
																<!-- Grocery Staples -->
																<option>Pasta</option>
																<option>Cooking Oil</option>
																
																<!-- Seafoods -->
																<option>Frozen Fish</option>
																<option>Canned Seafood</option>
																
																<!-- Fruits & Vegetables -->
																<option>Fresh Produce</option>
																<option>Frozen Produce</option>
																
																<!-- Meat -->
																<option>Fresh Meat</option>
																<option>Processed Meat</option>
																
																<!-- Poultry -->
																<option>Whole Poultry</option>
																<option>Processed Poultry</option>
																
																<!-- Bakery -->
																<option>Breads</option>
																<option>Pastries</option>
																
																<!-- Rice & Sugar -->
																<option>White Rice</option>
																<option>Brown Rice</option>
																
																<!-- Delicatessen -->
																<option>Cold Cuts</option>
																<option>Cheese</option>
																
																<!-- Dairy and Deli -->
																<option>Cheese</option>
																<option>Yogurt</option>
																
																<!-- Baby Care -->
																<option>Diapers</option>
																<option>Baby Food</option>
																
																<!-- Health & Beauty Care -->
																<option>Skincare</option>
																<option>Haircare</option>
																
																<!-- Household Maintenance -->
																<option>Cleaning Products</option>
																<option>Laundry Supplies</option>
																
																<!-- Healthcare -->
																<option>Over-the-Counter Medications</option>
																<option>First Aid Supplies</option>
																
																<!-- Appliances -->
																<option>Kitchen Appliances</option>
																<option>Home Appliances</option>
																
																<!-- Hardware -->
																<option>Tools</option>
																<option>Fasteners</option>
																
																<!-- Furniture -->
																<option>Living Room Furniture</option>
																<option>Bedroom Furniture</option>
																
																<!-- Plasticware -->
																<option>Storage Containers</option>
																<option>Kitchenware</option>
																
																<!-- Kitchenware -->
																<option>Pots & Pans</option>
																<option>Tableware</option>

															</select>
														</div>
													</div>
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="mb-3 add-product">
															<label class="form-label">Sub Sub Category</label>
															<select class="select">
																<option>Choose Sub-Subcategory</option>
																<!-- Beverages -->
																<option>Soft Drinks</option>
																<option>Natural Juices</option>
																
																<!-- Wines & Liquors -->
																<option>Red Blends</option>
																<option>White Blends</option>
																
																<!-- Snacks -->
																<option>Potato Chips</option>
																<option>Cheese Puffs</option>
																
																<!-- Sweets -->
																<option>Dark Chocolate</option>
																<option>Gummy Bears</option>
																
																<!-- Milk & Milk Products -->
																<option>Almond Milk</option>
																<option>Soy Milk</option>
																
																<!-- Formula Milk & Baby Foods -->
																<option>Organic Baby Food</option>
																<option>Baby Cereal</option>
																
																<!-- Cigars -->
																<option>Premium Hand-Rolled</option>
																<option>Machine-Made</option>
																
																<!-- Condiments, Sauces & Dressings -->
																<option>Bbq Sauces</option>
																<option>Vinegar Dressings</option>
																
																<!-- Canned Goods -->
																<option>Tuna</option>
																<option>Pineapple</option>
																
																<!-- Grocery Staples -->
																<option>Spaghetti</option>
																<option>Vegetable Oil</option>
																
																<!-- Seafoods -->
																<option>Tilapia</option>
																<option>Sardines</option>
																
																<!-- Fruits & Vegetables -->
																<option>Bananas</option>
																<option>Frozen Broccoli</option>
																
																<!-- Meat -->
																<option>Ground Beef</option>
																<option>Smoked Ham</option>
																
																<!-- Poultry -->
																<option>Chicken Breasts</option>
																<option>Frozen Nuggets</option>
																
																<!-- Bakery -->
																<option>Whole Grain Bread</option>
																<option>Fruit Pastries</option>
																
																<!-- Rice & Sugar -->
																<option>Jasmine Rice</option>
																<option>Granulated Sugar</option>
																
																<!-- Delicatessen -->
																<option>Turkey Breast</option>
																<option>Provolone Cheese</option>
																
																<!-- Dairy and Deli -->
																<option>Greek Yogurt</option>
																<option>Cream Cheese</option>
																
																<!-- Baby Care -->
																<option>Swim Diapers</option>
																<option>Baby Lotion</option>
																
																<!-- Health & Beauty Care -->
																<option>Moisturizers</option>
																<option>Hair Conditioners</option>
																
																<!-- Household Maintenance -->
																<option>Dish Soap</option>
																<option>Fabric Softener</option>
																
																<!-- Healthcare -->
																<option>Vitamin C</option>
																<option>Antiseptic Cream</option>
																
																<!-- Appliances -->
																<option>Toaster</option>
																<option>Vacuum Cleaner</option>
																
																<!-- Hardware -->
																<option>Hammers</option>
																<option>Screwdrivers</option>
																
																<!-- Furniture -->
																<option>Sectional Sofas</option>
																<option>Queen Size Beds</option>
																
																<!-- Plasticware -->
																<option>Food Storage Bags</option>
																<option>Lunch Boxes</option>
																
																<!-- Kitchenware -->
																<option>Non-stick Pans</option>
																<option>Measuring Cups</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="add-product-new">
												<div class="row">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="mb-3 add-product">
															<div class="add-newplus">
																<label class="form-label">Brand</label>
																<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-units-brand"><i data-feather="plus-circle" class="plus-down-add"></i><span>Add New</span></a>
															</div>
															<select class="select">
																<option>Choose Brand</option>
																<!-- Beverages -->
																<option>Coca-Cola</option>
																<option>Pepsi</option>
																<option>San Miguel</option>
																<option>Purefoods</option>
																<option>Nestlé</option>
																
																<!-- Wines & Liquors -->
																<option>Franzia</option>
																<option>Hennessy</option>
																<option>Johnnie Walker</option>
																
																<!-- Snacks -->
																<option>Lays</option>
																<option>Oreo</option>
																<option>Jack 'n Jill</option>
																
																<!-- Sweets -->
																<option>Cadbury</option>
																<option>Ferrero Rocher</option>
																<option>Reese's</option>
																
																<!-- Milk & Milk Products -->
																<option>Alaska</option>
																<option>Anchor</option>
																<option>Magnolia</option>
																
																<!-- Formula Milk & Baby Foods -->
																<option>Enfagrow</option>
																<option>Similac</option>
																
																<!-- Cigars -->
																<option>Macanudo</option>
																<option>Montecristo</option>
																
																<!-- Condiments, Sauces & Dressings -->
																<option>Kraft</option>
																<option>Heinz</option>
																<option>Del Monte</option>
																
																<!-- Canned Goods -->
																<option>King's Brand</option>
																<option>Friskies</option>
																
																<!-- Grocery Staples -->
																<option>Royal</option>
																<option>Magic Sarap</option>
																
																<!-- Seafoods -->
																<option>Century Tuna</option>
																<option>King Sue</option>
																
																<!-- Fruits & Vegetables -->
																<option>Del Monte</option>
																<option>Purefoods</option>
																
																<!-- Meat -->
																<option>Purefoods</option>
																<option>Magnolia</option>
																
																<!-- Poultry -->
																<option>Magnolia</option>
																<option>Purefoods</option>
																
																<!-- Bakery -->
																<option>Gardenia</option>
																<option>Monterey</option>
																
																<!-- Rice & Sugar -->
																<option>Rinore Rice</option>
																<option>Brown Sugar</option>
																
																<!-- Delicatessen -->
																<option>Purefoods</option>
																<option>Magnolia</option>
																
																<!-- Dairy and Deli -->
																<option>Cheese Club</option>
																<option>Quickmelt</option>
																
																<!-- Baby Care -->
																<option>Pampers</option>
																<option>Huggies</option>
																
																<!-- Health & Beauty Care -->
																<option>Pond's</option>
																<option>Garnier</option>
																
																<!-- Household Maintenance -->
																<option>Ajax</option>
																<option>Mr. Clean</option>
																
																<!-- Healthcare -->
																<option>Generic</option>
																<option>Unilab</option>
																
																<!-- Appliances -->
																<option>Samsung</option>
																<option>LG</option>
																
																<!-- Hardware -->
																<option>Stanley</option>
																<option>Black & Decker</option>
																
																<!-- Furniture -->
																<option>IKEA</option>
																<option>Mandaue Foam</option>
																
																<!-- Plasticware -->
																<option>Lock & Lock</option>
																<option>Tupperware</option>
																
																<!-- Kitchenware -->
																<option>Oster</option>
																<option>Pyrex</option>

															</select>
														</div>
													</div>
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="mb-3 add-product">
						
															<div class="add-newplus">
																<label class="form-label">Unit</label>
																<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-unit"><i data-feather="plus-circle" class="plus-down-add"></i><span>Add New</span></a>
															</div>
															<select class="select">
																<option>Choose</option>
																<option>Kg</option>
																<option>Pc</option>
															</select>
														</div>
													</div>
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="mb-3 add-product">
															<label class="form-label">Selling Type</label>
															<select class="select">
																<option>Choose Selling Type</option>

																<option>Retail Sale</option>
																<option>Wholesale Sale</option>
																<option>Consignment Sale</option>
																<option>Online Sale</option>
																<option>In-Store Sale</option>
																<option>Subscription Sale</option>
																<option>Package Sale</option>
																<option>Flash Sale</option>
																<option>Promotional Sale</option>
																<option>Pre-Order Sale</option>
																<option>Bundled Sale</option>
																<option>Gift Card Sale</option>
																<option>Return Sale</option>
																<option>Trade-In Sale</option>
															  </select>
														</div>
													</div>
												</div>
											</div>			
											<div class="row">
												<div class="col-lg-6 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Barcode Symbology</label>
														<select class="select">
															<option>Choose</option>

															<option>Code 39</option>
															<option>Code 128</option>
															<option>EAN-13</option>
															<option>UPC-A</option>
															<option>QR Code</option>
															<option>Data Matrix</option>
															<option>Codabar</option>
															<option>Interleaved 2 of 5</option>
															<option>PDF417</option>
															<option>EAN-8</option>
															<option>UPC-E</option>
															<option>Aztec Code</option>
															<option>GS1 DataBar</option>
															<option>MSI</option>
															<option>Plessey</option>
														</select>
													</div>
												</div>
												<div class="col-lg-6 col-sm-6 col-12">
													<div class="input-blocks add-product list">
														<label>Item Code</label>
														<input type="text" class="form-control list"  placeholder="Please Enter Item Code">
														<button type="submit" class="btn btn-primaryadd">
															Generate Code
														</button>
													</div>
												</div>
											</div>
											<!-- Editor -->
											<div class="col-lg-12">
												<div class="input-blocks summer-description-box transfer mb-3">
													<label>Description</label>
													<textarea class="form-control h-100" rows="5"></textarea>
													<p class="mt-1">Maximum 60 Characters</p>
												</div>
											</div>
											<!-- /Editor -->
										</div>
										</div>
									</div>
								</div>
								<div class="accordion-card-one accordion" id="accordionExample2">
									<div class="accordion-item">
										<div class="accordion-header" id="headingTwo">
										<div class="accordion-button"  data-bs-toggle="collapse" data-bs-target="#collapseTwo"  aria-controls="collapseTwo">
											<div class="text-editor add-list">
												<div class="addproduct-icon list icon">
													<h5><i data-feather="life-buoy" class="add-info"></i><span>Pricing & Stocks</span></h5>
													<a href="javascript:void(0);"><i data-feather="chevron-down" class="chevron-down-add"></i></a>
												</div>
											</div>
										</div>
										</div>
										<div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
											<div class="accordion-body">
												<div class="input-blocks add-products">
													<label class="d-block">Product Type</label>
													<div class="single-pill-product">
														<ul class="nav nav-pills" id="pills-tab1" role="tablist">
															<li class="nav-item" role="presentation">
																<span class="custom_radio me-4 mb-0 active" id="pills-home-tab" data-bs-toggle="pill"
																data-bs-target="#pills-home"  role="tab" aria-controls="pills-home" aria-selected="true">
																	<input type="radio" class="form-control" name="payment">
																<span class="checkmark"></span> Single Product</span>
															</li>
															<li class="nav-item" role="presentation">
																<span  class="custom_radio me-2 mb-0" id="pills-profile-tab" data-bs-toggle="pill"
																data-bs-target="#pills-profile"  role="tab" aria-controls="pills-profile" aria-selected="false">
																<input type="radio" class="form-control" name="sign">
																<span class="checkmark"></span> Variable Product</span>
															</li>
														</ul>
													</div>
												</div>
												<div class="tab-content" id="pills-tabContent">
													<div class="tab-pane fade show active" id="pills-home" role="tabpanel"
														aria-labelledby="pills-home-tab">
														<div class="row">
															<div class="col-lg-4 col-sm-6 col-12">
																<div class="input-blocks add-product">
																	<label>Quantity</label>
																	<input type="text" class="form-control">
																</div>
															</div>
															<div class="col-lg-4 col-sm-6 col-12">
																<div class="input-blocks add-product">
																	<label>Price</label>
																	<input type="text" class="form-control">
																</div>
															</div>
															<div class="col-lg-4 col-sm-6 col-12">
																<div class="input-blocks add-product">
																	<label>Tax Type</label>
																	<select class="select">

																	<option>Choose Tax Type</option>
    
																	<option>Value Added Tax (VAT)</option>
																	<option>Goods and Services Tax (GST)</option>
																	<option>Sales Tax</option>
																	<option>Excise Tax</option>
																	<option>Import Tax</option>
																	<option>Service Tax</option>
																	<option>Environmental Tax</option>
																	<option>Property Tax</option>
																	<option>Luxury Tax</option>
																	<option>Local Business Tax</option>
																	<option>Withholding Tax</option>
																	<option>Franchise Tax</option>


																	</select>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-4 col-sm-6 col-12">
																<div class="input-blocks add-product">
																	<label>Discount Type</label>
																	<select class="select">
																		<option>Choose Discount Type</option>

																		<option>Percentage Discount</option>
																		<option>Fixed Amount Discount</option>
																		<option>Buy One Get One Free (BOGO)</option>
																		<option>Bulk Purchase Discount</option>
																		<option>Seasonal Discount</option>
																		<option>Promotional Discount</option>
																		<option>Loyalty Discount</option>
																		<option>Referral Discount</option>
																		<option>Coupon Discount</option>
																		<option>First-Time Buyer Discount</option>
																		<option>Membership Discount</option>
																		<option>Employee Discount</option>
																		<option>Student Discount</option>
																		<option>Senior Citizen Discount</option>

																	</select>
																</div>
															</div>
															<div class="col-lg-4 col-sm-6 col-12">
																<div class="input-blocks add-product">
																	<label>Discount Value</label>
																	<input type="text" placeholder="Choose">
																</div>
															</div>
															<div class="col-lg-4 col-sm-6 col-12">
																<div class="input-blocks add-product">
																	<label>Quantity Alert</label>
																	<input type="text" class="form-control">
																</div>
															</div>
														</div>
														<div class="accordion-card-one accordion" id="accordionExample3">
															<div class="accordion-item">
																<div class="accordion-header" id="headingThree">
																	<div class="accordion-button"  data-bs-toggle="collapse" data-bs-target="#collapseThree"  aria-controls="collapseThree">
																		<div class="addproduct-icon list">
																			<h5><i data-feather="image" class="add-info"></i><span>Images</span></h5>
																			<a href="javascript:void(0);"><i data-feather="chevron-down" class="chevron-down-add"></i></a>
																		</div>
																	</div>
																</div>
																<div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample3">
																<div class="accordion-body">
																	<div class="text-editor add-list add">
																		<div class="col-lg-12">
																			<div class="add-choosen">
																				<div class="input-blocks">
																					<div class="image-upload">
																						<input type="file">
																						<div class="image-uploads">
																							<i data-feather="plus-circle" class="plus-down-add me-0"></i>
																							<h4>Add Images</h4>
																						</div>
																					</div>
																				</div>
																				<div class="phone-img">
																					<img src="assets/img/vectors/Add_To_Cart_Product.png" alt="image">
																					<a href="javascript:void(0);"><i data-feather="x" class="x-square-add remove-product"></i></a>
																				</div>
									
																				<div class="phone-img">
																					<img src="assets/img/vectors/Vector_Shopping_Bag_Icon.png" alt="image">
																					<a href="javascript:void(0);"><i data-feather="x" class="x-square-add remove-product"></i></a>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																</div>
															</div>
														</div>						
													</div>
													<div class="tab-pane fade" id="pills-profile" role="tabpanel"
													aria-labelledby="pills-profile-tab">
													<div class="row select-color-add">
														<div class="col-lg-6 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Variant Attribute</label>
																<div class="row">
																	<div class="col-lg-10 col-sm-10 col-10">
																		<select class="form-control variant-select select-option" id="colorSelect">
																			<option>Choose Variant Attribute</option>
    
																			<option>Color</option>
																			<option>Size</option>
																			<option>Material</option>
																			<option>Flavor</option>
																			<option>Weight</option>
																			<option>Style</option>
																			<option>Model</option>
																			<option>Length</option>
																			<option>Width</option>
																			<option>Height</option>
																			<option>Pattern</option>
																			<option>Finish</option>
																			<option>Capacity</option>
																			<option>Quantity</option>
																		</select>
																	</div>
																	<div class="col-lg-2 col-sm-2 col-2 ps-0">
																		<div class="add-icon tab">
																			<a class="btn btn-filter" data-bs-toggle="modal"
																				data-bs-target="#add-units"><i class="feather feather-plus-circle"></i></a>
																		</div>
																	</div>
																</div>
															</div>
															<div class="selected-hide-color" id="input-show">
																<div class="row align-items-center" >
																	<div class="col-sm-10">
																		<div class="input-blocks">
																			<input class="input-tags form-control" id="inputBox" type="text" data-role="tagsinput"  name="specialist" value="red, black" >
																		</div>
																	</div>
																	<div class="col-lg-2">
																		<div class="input-blocks ">
																			<a href="javascript:void(0);" class="remove-color"><i class="far fa-trash-alt"></i></a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>

													<div class="modal-body-table variant-table" id="variant-table">
														<div class="table-responsive">
															<table class="table">
																<thead>
																	<tr>
																		<th>Variantion</th>
																		<th>Variant Value</th>
																		<th>SKU</th>
																		<th>Quantity</th>
																		<th>Price</th>
																		<th class="no-sort">Action</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>
																			<div class="add-product">
																				<input type="text" class="form-control" value="color">
																			</div>												
																		</td>
																		<td>
																			<div class="add-product">
																				<input type="text" class="form-control" value="red">
																			</div>
																		</td>
																		<td>
																			<div class="add-product">
																				<input type="text" class="form-control" value="1234">
																			</div>
																		</td>
																		<td>
																			<div class="product-quantity">
																				<span class="quantity-btn"><i data-feather="minus-circle" class="feather-search"></i></span>
																				<input type="text" class="quntity-input" value="2">
																				<span class="quantity-btn">+<i data-feather="plus-circle" class="plus-circle"></i></span>
																			</div>
																		</td>
																		<td>
																			<div class="add-product">
																				<input type="text" class="form-control" value="50000">
																			</div>
																		</td>
																		<td class="action-table-data">
																			<div class="edit-delete-action">
																				<div class="input-block add-lists">
																					<label class="checkboxs">
																						<input type="checkbox" checked>
																						<span class="checkmarks"></span>
																					</label>
																				</div>
																				<a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-variation">
																					<i data-feather="plus" class="feather-edit"></i>
																				</a>
																				<a class="confirm-text p-2" href="javascript:void(0);">
																					<i data-feather="trash-2" class="feather-trash-2"></i>
																				</a>
																			</div>
																			
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="add-product">
																				<input type="text" class="form-control" value="color">
																			</div>												
																		</td>
																		<td>
																			<div class="add-product">
																				<input type="text" class="form-control" value="black">
																			</div>
																		</td>
																		<td>
																			<div class="add-product">
																				<input type="text" class="form-control" value="2345">
																			</div>
																		</td>
																		<td>
																			<div class="product-quantity">
																				<span class="quantity-btn"><i data-feather="minus-circle" class="feather-search"></i></span>
																				<input type="text" class="quntity-input" value="3">
																				<span class="quantity-btn">+<i data-feather="plus-circle" class="plus-circle"></i></span>
																			</div>
																		</td>
																		<td>
																			<div class="add-product">
																				<input type="text" class="form-control" value="50000">
																			</div>
																		</td>
																		<td class="action-table-data">
																			<div class="edit-delete-action">
																				<div class="input-block add-lists">
																					<label class="checkboxs">
																						<input type="checkbox" checked>
																						<span class="checkmarks"></span>
																					</label>
																				</div>
																				<a class="me-2 p-2" href="#" data-bs-toggle="modal" data-bs-target="#edit-units">
																					<i data-feather="plus" class="feather-edit"></i>
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
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="accordion-card-one accordion" id="accordionExample4">
									<div class="accordion-item">
										<div class="accordion-header" id="headingFour">
											<div class="accordion-button"  data-bs-toggle="collapse" data-bs-target="#collapseFour"  aria-controls="collapseFour">
											<div class="text-editor add-list">
												<div class="addproduct-icon list">
													<h5><i data-feather="list" class="add-info"></i><span>Custom Fields</span></h5>
													<a href="javascript:void(0);"><i data-feather="chevron-down" class="chevron-down-add"></i></a>
												</div>
											</div>
											</div>
										</div>
										<div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample4">
											<div class="accordion-body">
												<div class="text-editor add-list add">
													<div class="custom-filed">
														<div class="input-block add-lists">
															<label class="checkboxs">
																<input type="checkbox">
																<span class="checkmarks"></span>Warranties
															</label>
															<label class="checkboxs">
																<input type="checkbox">
																<span class="checkmarks"></span>Manufacturer
															</label>
															<label class="checkboxs">
																<input type="checkbox">
																<span class="checkmarks"></span>Expiry
															</label>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-4 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Discount Type</label>
																<select class="select">
																	<option>Choose Custom Discount Type</option>
    
																	<option>Flash Sale Discount</option>
																	<option>Holiday Discount</option>
																	<option>Clearance Sale Discount</option>
																	<option>Referral Program Discount</option>
																	<option>Membership Tier Discount</option>
																	<option>Product Bundling Discount</option>
																	<option>Limited Time Offer Discount</option>
																	<option>Cash Payment Discount</option>
																	<option>Trade-In Discount</option>
																	<option>Volume Discount</option>
																	<option>Charity Donation Discount</option>
																	<option>Event-Specific Discount</option>
																	<option>Cross-Promotion Discount</option>
																	<option>Employee Referral Discount</option>
																</select>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-4 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Quantity Alert</label>
																<input type="text" class="form-control">
															</div>
														</div>
														<div class="col-lg-4 col-sm-6 col-12">
															<div class="input-blocks">
																<label>Manufactured Date</label>
						
																<div class="input-groupicon calender-input">
																	<i data-feather="calendar" class="info-img"></i>
																	<input type="text" class="datetimepicker" placeholder="Choose Date">
																</div>
															</div>
														</div>
														<div class="col-lg-4 col-sm-6 col-12">
															<div class="input-blocks">
																<label>Expiry On</label>
						
																<div class="input-groupicon calender-input">
																	<i data-feather="calendar" class="info-img"></i>
																	<input type="text" class="datetimepicker" placeholder="Choose Date">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="btn-addproduct mb-4">
								<button type="button" class="btn btn-cancel me-2">Cancel</button>
								<button type="submit" class="btn btn-submit">Save Product</button>
							</div>
						</div>
					</form>
				<!-- /add -->

			</div>
		</div>
	</div>
	<!-- end main Wrapper-->

<!-- Add Adjustment -->
<div class="modal fade" id="add-units">
		<div class="modal-dialog modal-dialog-centered stock-adjust-modal">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Add Variation Attribute</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<div class="row">
								<div class="col-lg-12">
									<div class="input-blocks">
										<label>Attribute Name</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="input-blocks">
										<label>Add Value</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<ul class="nav user-menu">
									<li class="nav-item nav-searchinputs">
										<div class="top-nav-search">
											<form action="#" class="dropdown">
												<div class="searchinputs list dropdown-toggle" id="dropdownMenuClickable2" data-bs-toggle="dropdown" data-bs-auto-close="false" >
													<input type="text" placeholder="Search">
													<i data-feather="search" class="feather-16 icon"></i>
													<div class="search-addon d-none">
														<span><i data-feather="x-circle" class="feather-14"></i></span>
													</div>
												</div>
												<div class="dropdown-menu search-dropdown idea" aria-labelledby="dropdownMenuClickable2">
													<div class="search-info">
														<p>Black </p>
														<p>Red</p>
														<p>Green</p>
														<p>S</p>
														<p>M</p>
													</div>
												</div>
											</form>
										</div>
									</li>
									</ul>
								</div>
								<div class="col-lg-6">
								<div class="modal-footer-btn popup">
									<a href="javascript:void(0);" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</a>
									<a href="javascript:void(0);" class="btn btn-submit" data-bs-dismiss="modal">Create Attribute</a>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Adjustment -->

	<!-- Add Category -->
	<div class="modal fade" id="add-units-category">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Add New Category</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<div class="mb-3">
								<label class="form-label">Name</label>
								<input type="text" class="form-control">
							</div>
							<div class="modal-footer-btn">
								<a href="javascript:void(0);" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</a>
								<a href="add-product.php" class="btn btn-submit">Submit</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Category -->

	<!-- Add Brand -->
	<div class="modal fade" id="add-units-brand">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Add New Brand</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<div class="mb-3">
								<label class="form-label">Brand</label>
								<input type="text" class="form-control">
							</div>
							<div class="modal-footer-btn">
								<a href="javascript:void(0);" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</a>
								<a href="add-product.php" class="btn btn-submit">Submit</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Brand -->

	<!-- Add Unit -->
	<div class="modal fade" id="add-unit">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Add Unit</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<div class="mb-3">
								<label class="form-label">Unit</label>
								<input type="text" class="form-control">
							</div>
							<div class="modal-footer-btn">
								<a href="javascript:void(0);" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</a>
								<a href="add-product.php" class="btn btn-submit">Submit</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Unit -->

	<!-- Add Variatent -->
	<div class="modal fade" id="add-variation">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Add Variation</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<div class="modal-title-head people-cust-avatar">
								<h6>Variant Thumbnail</h6>
							</div>
							<div class="new-employee-field">
								<div class="profile-pic-upload">
									<div class="profile-pic">
										<span><i data-feather="plus-circle" class="plus-down-add"></i> Add Image</span>
									</div>
									<div class="mb-3">
										<div class="image-upload mb-0">
											<input type="file">
											<div class="image-uploads">
												<h4>Change Image</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 pe-0">
									<div class="mb-3">
										<label class="form-label">Barcode Symbology</label>
										<select class="select">
											<option>Choose</option>
											<option>Code34</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6 pe-0">
									<div class="mb-3">
										<div class="input-blocks add-product list">
											<label>Item Code</label>
											<input type="text" class="form-control list" value="455454478844">
											<button type="submit" class="btn btn-primaryadd">
												Generate Code
											</button>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="input-blocks image-upload-down">
										<div class="image-upload download">
											<input type="file">
											<div class="image-uploads">
												<img src="assets/img/download-img.png" alt="img">
												<h4>Drag and drop a <span>file to upload</span></h4>
											</div>
										</div>
									</div>
									<div class="accordion-body">
										<div class="text-editor add-list add">
											<div class="col-lg-12">
												<div class="add-choosen mb-3">
													<div class="phone-img ms-0">
														<img src="assets/img/products/phone-add-2.png" alt="image">
														<a href="javascript:void(0);"><i data-feather="x" class="x-square-add remove-product"></i></a>
													</div>
		
													<div class="phone-img">
														<img src="assets/img/products/phone-add-1.png" alt="image">
														<a href="javascript:void(0);"><i data-feather="x" class="x-square-add remove-product"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 pe-0">
									<div class="mb-3">
										<label class="form-label">Quantity</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-lg-6 pe-0">
									<div class="mb-3">
										<label class="form-label">Quantity Alert</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-lg-6 pe-0">
									<div class="mb-3">
										<label class="form-label">Tax Type</label>
										<select class="select">
											<option>Choose Tax Type</option>
											
											<option>Value Added Tax (VAT)</option>
											<option>Goods and Services Tax (GST)</option>
											<option>Sales Tax</option>
											<option>Excise Tax</option>
											<option>Import Tax</option>
											<option>Service Tax</option>
											<option>Environmental Tax</option>
											<option>Property Tax</option>
											<option>Luxury Tax</option>
											<option>Local Business Tax</option>
											<option>Withholding Tax</option>
											<option>Franchise Tax</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6 pe-0">
									<div class="mb-3">
										<label class="form-label">Tax </label>
										<select class="select">
											<option>Choose</option>
											<option>Income Tax</option>
											<option>Service Tax</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12 pe-0">
									<div class="mb-3">
										<label class="form-label">Discount Type </label>
										<select class="select">
											<option>Choose</option>
											<option>Percentage</option>
											<option>Early Payment</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12 pe-0">
									<div >
										<label class="form-label">Discount Value</label>
										<input type="text" class="form-control">
									</div>
								</div>								
							</div>
							
							
							<div class="modal-footer-btn">
								<a href="javascript:void(0);" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</a>
								<a href="add-product.php" class="btn btn-submit">Submit</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Variatent -->
<?php include 'layouts/customizer.php'; ?>
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>
</body>
</html>