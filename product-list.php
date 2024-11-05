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
								<h4>Product List</h4>
								<h6>Manage your products</h6>
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
							<a href="add-product.php" class="btn btn-added"><i data-feather="plus-circle" class="me-2"></i>Add New Product</a>
						</div>	
						<div class="page-btn import">
							<a href="#" class="btn btn-added color" data-bs-toggle="modal" data-bs-target="#view-notes"><i
								data-feather="download" class="me-2"></i>Import Product</a>
						</div>
					</div>
					
					<!-- /product list -->
					<div class="card table-list-card">
						<div class="card-body">
							<div class="table-top">
								<div class="search-set">
									<div class="search-input">
										<a href="javascript:void(0);" class="btn btn-searchset"><i data-feather="search" class="feather-search"></i></a>
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
										<option>14 09 23</option>
										<option>11 09 23</option>
									</select>
								</div>
							</div>
							<!-- /Filter -->
							<div class="card mb-0" id="filter_inputs">
								<div class="card-body pb-0">
									<div class="row">
										<div class="col-lg-12 col-sm-12">
											<div class="row">
												<div class="col-lg-2 col-sm-6 col-12">
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
												<div class="col-lg-2 col-sm-6 col-12">
													<div class="input-blocks">
														<i data-feather="stop-circle" class="info-img"></i>
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
												
												<div class="col-lg-2 col-sm-6 col-12">
													<div class="input-blocks">
														<i data-feather="git-merge" class="info-img"></i>
														<select class="select">
															<option>Choose Sub Category</option>
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
												
												<div class="col-lg-2 col-sm-6 col-12">
													<div class="input-blocks">
														<i data-feather="stop-circle" class="info-img"></i>
														<select class="select">
															<option>All Brand</option>
															<!-- Beverages -->
															<option>San Miguel</option>
															<option>Red Bull</option>
															<option>Coca-Cola</option>
															<option>Pepsi</option>
															<option>Mineral Water</option>

															<!-- Wines & Liquors -->
															<option>Fundador</option>
															<option>Emperador</option>
															<option>Ginebra San Miguel</option>
															<option>Johnnie Walker</option>
															<option>Jacobs Creek</option>

															<!-- Snacks -->
															<option>Jack 'n Jill</option>
															<option>Skyflakes</option>
															<option>Oishi</option>
															<option>Chips Ahoy!</option>
															<option>Frito Lay</option>

															<!-- Sweets -->
															<option>Chocnut</option>
															<option>Hershey's</option>
															<option>Cadbury</option>
															<option>Reese's</option>
															<option>Gummy Bears</option>

															<!-- Milk & Milk Products -->
															<option>Magnolia</option>
															<option>Alaska</option>
															<option>Purefoods</option>
															<option>Bear Brand</option>
															<option>Highlands Milk</option>

															<!-- Formula Milk & Baby Foods -->
															<option>Similac</option>
															<option>Enfamil</option>
															<option>Nestlé NAN</option>
															<option>Gerber</option>
															<option>Healthy Times</option>

															<!-- Cigars -->
															<option>La Flor de La Isabela</option>
															<option>Manila Cigar</option>
															<option>Alhambra</option>
															<option>Ramon Allones</option>
															<option>Montecristo</option>

															<!-- Condiments, Sauces & Dressings -->
															<option>Mama Sita's</option>
															<option>Kikkoman</option>
															<option>Knorr</option>
															<option>Del Monte</option>
															<option>Magnolia</option>

															<!-- Canned Goods -->
															<option>Libby's</option>
															<option>Purefoods</option>
															<option>Century Tuna</option>
															<option>Maisie</option>
															<option>Del Monte</option>

															<!-- Grocery Staples -->
															<option>Magnolia</option>
															<option>Purefoods</option>
															<option>Rico</option>
															<option>Knorr</option>
															<option>Chooks-to-Go</option>

															<!-- Seafoods -->
															<option>Purefoods</option>
															<option>Century Tuna</option>
															<option>Marine Harvest</option>
															<option>Seafood City</option>
															<option>King Fish</option>

															<!-- Fruits & Vegetables -->
															<option>Del Monte</option>
															<option>Fresh Options</option>
															<option>Philippine Mango</option>
															<option>Calamansi</option>
															<option>Singkamas</option>

															<!-- Meat -->
															<option>Purefoods</option>
															<option>Magnolia</option>
															<option>Swift</option>
															<option>Farmers Choice</option>
															<option>Hormel</option>

															<!-- Poultry -->
															<option>Magnolia</option>
															<option>Purefoods</option>
															<option>Chooks-to-Go</option>
															<option>Monterey</option>
															<option>Delimondo</option>

															<!-- Bakery -->
															<option>Goldilocks</option>
															<option>Red Ribbon</option>
															<option>Gardenia</option>
															<option>Monterey</option>
															<option>Hizon's</option>

															<!-- Rice & Sugar -->
															<option>Royal</option>
															<option>Sinandomeng</option>
															<option>Angelica</option>
															<option>Magic</option>
															<option>Bigasan</option>

															<!-- Delicatessen -->
															<option>Purefoods</option>
															<option>Magnolia</option>
															<option>Chorizo de Bilbao</option>
															<option>Queso de Bola</option>
															<option>Delimondo</option>

															<!-- Dairy and Deli -->
															<option>Magnolia</option>
															<option>Horizon</option>
															<option>Arla</option>
															<option>Emmental</option>
															<option>Purefoods</option>

															<!-- Baby Care -->
															<option>Merries</option>
															<option>Pampers</option>
															<option>Huggies</option>
															<option>Human Nature</option>
															<option>Chicco</option>

															<!-- Health & Beauty Care -->
															<option>Zenutrients</option>
															<option>Ever Bilena</option>
															<option>Maybelline</option>
															<option>Skin White</option>
															<option>Skin Genie</option>

															<!-- Household Maintenance -->
															<option>Ajax</option>
															<option>Joy</option>
															<option>Mr. Muscle</option>
															<option>Downy</option>
															<option>Fabric Conditioner</option>

															<!-- Healthcare -->
															<option>Panadol</option>
															<option>Neozep</option>
															<option>Bioflu</option>
															<option>Alaxan</option>
															<option>Ascof</option>

															<!-- Appliance -->
															<option>Philips</option>
															<option>Sharp</option>
															<option>Samsung</option>
															<option>Panasonic</option>
															<option>Whirlpool</option>

															<!-- Hardware -->
															<option>True Value</option>
															<option>Handyman</option>
															<option>Ace Hardware</option>
															<option>Wilcon Depot</option>
															<option>Do-it-Best</option>

															<!-- Furniture -->
															<option>Mandaue Foam</option>
															<option>Bliss Furniture</option>
															<option>Furniture Republic</option>
															<option>Our Home</option>
															<option>Home Zone</option>

															<!-- Plasticware -->
															<option>Rubbermaid</option>
															<option>Lock & Lock</option>
															<option>Tupperware</option>
															<option>Glad</option>
															<option>Gorilla</option>

															<!-- Kitchenware -->
															<option>Corningware</option>
															<option>Pyrex</option>
															<option>Happycall</option>
															<option>Cuisinart</option>
															<option>KitchenAid</option>
														</select>
													</div>
												</div>
												
												<div class="col-lg-2 col-sm-6 col-12">
													<div class="input-blocks">
														<i class="fas fa-money-bill info-img"></i>
														<select class="select">
															<option>Price Range</option>
															<!-- Beverages -->
															<option>₱10 - ₱50</option>
															<option>₱51 - ₱100</option>
															<option>₱101 - ₱200</option>
															<option>₱201 - ₱500</option>
															
															<!-- Wines & Liquors -->
															<option>₱200 - ₱500</option>
															<option>₱501 - ₱1,000</option>
															<option>₱1,001 - ₱2,000</option>
															
															<!-- Snacks -->
															<option>₱5 - ₱30</option>
															<option>₱31 - ₱70</option>
															<option>₱71 - ₱150</option>
															
															<!-- Sweets -->
															<option>₱10 - ₱100</option>
															<option>₱101 - ₱300</option>
															
															<!-- Milk & Milk Products -->
															<option>₱20 - ₱100</option>
															<option>₱101 - ₱200</option>
															
															<!-- Formula Milk & Baby Foods -->
															<option>₱300 - ₱800</option>
															<option>₱801 - ₱1,500</option>
															
															<!-- Cigars -->
															<option>₱50 - ₱300</option>
															<option>₱301 - ₱600</option>
															
															<!-- Condiments, Sauces & Dressings -->
															<option>₱10 - ₱100</option>
															<option>₱101 - ₱250</option>
															
															<!-- Canned Goods -->
															<option>₱20 - ₱150</option>
															<option>₱151 - ₱300</option>
															
															<!-- Grocery Staples -->
															<option>₱10 - ₱100</option>
															<option>₱101 - ₱300</option>
															
															<!-- Seafoods -->
															<option>₱50 - ₱500</option>
															<option>₱501 - ₱1,000</option>
															
															<!-- Fruits & Vegetables -->
															<option>₱10 - ₱200</option>
															<option>₱201 - ₱500</option>
															
															<!-- Meat -->
															<option>₱100 - ₱800</option>
															<option>₱801 - ₱1,500</option>
															
															<!-- Poultry -->
															<option>₱100 - ₱600</option>
															<option>₱601 - ₱1,200</option>
															
															<!-- Bakery -->
															<option>₱10 - ₱100</option>
															<option>₱101 - ₱300</option>
															
															<!-- Rice & Sugar -->
															<option>₱40 - ₱200</option>
															<option>₱201 - ₱500</option>
															
															<!-- Delicatessen -->
															<option>₱50 - ₱300</option>
															<option>₱301 - ₱600</option>
															
															<!-- Dairy and Deli -->
															<option>₱20 - ₱200</option>
															<option>₱201 - ₱400</option>
															
															<!-- Baby Care -->
															<option>₱50 - ₱300</option>
															<option>₱301 - ₱600</option>
															
															<!-- Health & Beauty Care -->
															<option>₱50 - ₱500</option>
															<option>₱501 - ₱1,000</option>
															
															<!-- Household Maintenance -->
															<option>₱10 - ₱200</option>
															<option>₱201 - ₱500</option>
															
															<!-- Healthcare -->
															<option>₱20 - ₱1,000</option>
															<option>₱1,001 - ₱2,500</option>
															
															<!-- Appliances -->
															<option>₱1,000 - ₱5,000</option>
															<option>₱5,001 - ₱10,000</option>
															
															<!-- Hardware -->
															<option>₱50 - ₱1,000</option>
															<option>₱1,001 - ₱2,500</option>
															
															<!-- Furniture -->
															<option>₱1,000 - ₱10,000</option>
															<option>₱10,001 - ₱50,000</option>
															
															<!-- Plasticware -->
															<option>₱10 - ₱100</option>
															<option>₱101 - ₱200</option>
															
															<!-- Kitchenware -->
															<option>₱100 - ₱1,000</option>
															<option>₱1,001 - ₱3,000</option>
														</select>
													</div>
												</div>
												<div class="col-lg-2 col-sm-6 col-12">
													<div class="input-blocks">
														<a class="btn btn-filters ms-auto"> <i data-feather="search" class="feather-search"></i> Search </a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Filter -->
							<div class="table-responsive product-list">
								<table class="table datanew">
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
											<th>Category</th>
											<th>Brand</th>
											<th>Price</th>
											<th>Unit</th>
											<th>Qty</th>
											<th>Created by</th>
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
														<img src="assets/img/products/4800016644801.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">JACK N JILL PIATTOS <br>CHEESE 40G</a>
												</div>												
											</td>
											<td>20721-118-<br>4800016644801</td>
											<td>SNACKS</td>
											<td>Jack N Jill</td>
											<td>₱15.40</td>
											<td>Pc</td>
											<td>100</td>
											<td>
											<div class="userimgname">
												<a href="javascript:void(0);" class="product-img">
													<img src="assets/img/users/user-30.jpg" alt="product">
												</a>
												<a href="javascript:void(0);">Angelo</a>
											</div></td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 edit-icon  p-2" href="product-details.php">
														<i data-feather="eye" class="feather-eye"></i>
													</a>
													<a class="me-2 p-2" href="edit-product.php" >
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
														<img src="assets/img/products/4800611546760.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">COBRA ENERGY DRINK <br> ORIGINAL 350ML</a>
												</div>												
											</td>
											<td>236900-118-<br>4800611546760</td>
											<td>BEVERAGES</td>
											<td>Asia Brewery</td>
											<td>₱21.10</td>
											<td>Pc</td>
											<td>140</td>
											<td>
												<div class="userimgname">
													<a href="javascript:void(0);" class="product-img">
														<img src="assets/img/users/user-13.jpg" alt="product">
													</a>
														<a href="javascript:void(0);">Angelo</a>
												</div>
											</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 edit-icon p-2" href="product-details.php">
														<i data-feather="eye" class="action-eye"></i>
													</a>
													<a class="me-2 p-2" href="edit-product.php">
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
														<img src="assets/img/products/8996001410226.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">KOPIKO BLACK3IN1 <br> HANGER 30GX10S</a>
												</div>												
											</td>
											<td>219024-118-<br>8996001410226</td>
											<td>BEVERAGES</td>
											<td>PT Mayora <br>Indah Tbk</td>
											<td>₱78.00</td>
											<td>Pc</td>
											<td>50</td>
											<td>
												<div class="userimgname">
													<a href="javascript:void(0);" class="product-img">
														<img src="assets/img/users/user-11.jpg" alt="product">
													</a>
														<a href="javascript:void(0);">Angelo</a>
												</div>
											</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 edit-icon p-2" href="product-details.php">
														<i data-feather="eye" class="action-eye"></i>
													</a>
													<a class="me-2 p-2" href="edit-product.php">
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
														<img src="assets/img/products/4800361390804.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">NESTLE COFFEMATE<br>ORIGINAL 150G</a>
												</div>												
											</td>
											<td>453489-118-<br>4800361390804</td>
											<td>BEVERAGES</td>
											<td>Nestle</td>
											<td>₱49.25</td>
											<td>Pc</td>
											<td>450</td>
											<td>
												<div class="userimgname">
													<a href="javascript:void(0);" class="product-img">
														<img src="assets/img/users/user-03.jpg" alt="product">
													</a>
														<a href="javascript:void(0);">Angelo</a>
												</div>
											</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 edit-icon p-2" href="product-details.php">
														<i data-feather="eye" class="action-eye"></i>
													</a>
													<a class="me-2 p-2" href="edit-product.php">
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
														<img src="assets/img/products/4809015402825.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">PURE BASICS <br>NATA DE COCO <br>WHITE 340G</a>
												</div>												
											</td>
											<td>721298-118-<br>4809015402825</td>
											<td>GROCERY STAPLES</td>
											<td>Pure Basics</td>
											<td>₱60.00</td>
											<td>Pc</td>
											<td>17</td>
											<td>
												<div class="userimgname">
													<a href="javascript:void(0);" class="product-img">
														<img src="assets/img/users/user-02.jpg" alt="product">
													</a>
														<a href="javascript:void(0);">Angelo</a>
												</div>
											</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 edit-icon p-2" href="product-details.php">
														<i data-feather="eye" class="action-eye"></i>
													</a>
													<a class="me-2 p-2" href="edit-product.php">
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
														<img src="assets/img/products/4808680221250.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">KNORR SOUP CREAM <br>OF MUSHROOM 62G</a>
												</div>												
											</td>
											<td>11668-118-<br>4808680221250</td>
											<td>GROCERY STAPLES</td>
											<td>Knorr</td>
											<td>₱55.85</td>
											<td>Pc</td>
											<td>20</td>
											<td>
												<div class="userimgname">
													<a href="javascript:void(0);" class="product-img">
														<img src="assets/img/users/user-05.jpg" alt="product">
													</a>
														<a href="javascript:void(0);">Angelo</a>
												</div>
											</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 edit-icon p-2" href="product-details.php">
														<i data-feather="eye" class="action-eye"></i>
													</a>
													<a class="me-2 p-2" href="edit-product.php">
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
														<img src="assets/img/products/4987072005538.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">KOOL FEVER <br>COOLING GEL <br>FOR KIDS 2S</a>
												</div>												
											</td>
											<td>152291-118-<br>4987072005538</td>
											<td>HEALTH CARE</td>
											<td>Philusa<br>Corporation</td>
											<td>₱52.80</td>
											<td>Pc</td>
											<td>10</td>
											<td>
												<div class="userimgname">
													<a href="javascript:void(0);" class="product-img">
														<img src="assets/img/users/user-08.jpg" alt="product">
													</a>
														<a href="javascript:void(0);">Angelo</a>
												</div>
											</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 edit-icon p-2" href="product-details.php">
														<i data-feather="eye" class="action-eye"></i>
													</a>
													<a class="me-2 p-2" href="edit-product.php">
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
														<img src="assets/img/products/4807770273650.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">LUCKY ME! INSTANT<br>MAMI SPICY LABUYO<br>CHICKEN 50G</a>
												</div>												
											</td>
											<td>539104-118-<br>4807770273650</td>
											<td>GROCERY STAPLES</td>
											<td>Lucky Me</td>
											<td>₱9.85</td>
											<td>Pc</td>
											<td>27</td>
											<td>
												<div class="userimgname">
													<a href="javascript:void(0);" class="product-img">
														<img src="assets/img/users/user-04.jpg" alt="product">
													</a>
														<a href="javascript:void(0);">Angelo</a>
												</div>
											</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 edit-icon p-2" href="product-details.php">
														<i data-feather="eye" class="action-eye"></i>
													</a>
													<a class="me-2 p-2" href="edit-product.php">
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
														<img src="assets/img/products/4806536780074.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">FAMILIA PANDAN<br>FIESTA RICE 25KG</a>
												</div>												
											</td>
											<td>817741-118-<br>4806536780074</td>
											<td>RICE & SUGAR</td>
											<td>SukiGrocer</td>
											<td>₱1,460.00</td>
											<td>Kg</td>
											<td>5</td>
											<td>
												<div class="userimgname">
													<a href="javascript:void(0);" class="product-img">
														<img src="assets/img/users/user-01.jpg" alt="product">
													</a>
														<a href="javascript:void(0);">Angelo</a>
												</div>
											</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 edit-icon p-2" href="product-details.php">
														<i data-feather="eye" class="action-eye"></i>
													</a>
													<a class="me-2 p-2" href="edit-product.php">
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
														<img src="assets/img/products/4800818808906.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">POTCHI STRAWBERRY<br>CREAM 50S</a>
												</div>												
											</td>
											<td>11340-118-<br>4800818808906</td>
											<td>SWEETS</td>
											<td>Columbias</td>
											<td>₱35.30</td>
											<td>Kg</td>
											<td>40</td>
											<td>
												<div class="userimgname">
													<a href="javascript:void(0);" class="product-img">
														<img src="assets/img/users/user-10.jpg" alt="product">
													</a>
														<a href="javascript:void(0);">Angelo</a>
												</div>
											</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 edit-icon p-2" href="product-details.php">
														<i data-feather="eye" class="action-eye"></i>
													</a>
													<a class="me-2 p-2" href="edit-product.php">
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
		<!-- /Main Wrapper -->

		<!-- Add Payroll -->
		<div class="offcanvas offcanvas-end em-payrol-add" tabindex="-1" id="offcanvasRight-add">
			<div class="offcanvas-body p-0">
				<div class="page-wrapper-new">
					<div class="content">
						<div class="page-header justify-content-between">
							<div class="page-title">
								<h4>Create New Product</h4>
							</div>
							<div class="page-btn">
								<a href="javascript:void(0);" class="btn btn-added "  data-bs-dismiss="offcanvas"><i data-feather="arrow-left" class="me-2"></i>Back to Product List</a>
							</div>
						</div>
						<!-- /add -->
						<div class="card mb-0">
							<div class="card-body add-product pb-0 ps-0 pe-0">
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
															<option>Computers</option>
														</select>
													</div>
												</div>
												<div class="col-lg-4 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Warehouse</label>
														<select class="select">
															<option>Choose</option>
															<option>Computers</option>
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
													<div class="form-group add-product list">
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
															<label class="form-label">Choose Category</label>
															<select class="select">
																<option>Choose</option>
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
															<option>Soft Drinks</option>
															<option>Juices</option>
															<option>Energy Drinks</option>
															<option>Coffee & Tea</option>
															<option>Bottled Water</option>
															<option>Red Wine</option>
															<option>White Wine</option>
															<option>Sparkling Wine</option>
															<option>Vodka</option>
															<option>Whiskey</option>
															<option>Rum</option>
															<option>Gin</option>
															<option>Chips</option>
															<option>Popcorn</option>
															<option>Nuts & Seeds</option>
															<option>Crackers</option>
															<option>Jerky</option>
															<option>Chocolate</option>
															<option>Candies</option>
															<option>Gummies</option>
															<option>Pastries</option>
															<option>Cookies</option>
															<option>Fresh Milk</option>
															<option>Yogurt</option>
															<option>Cheese</option>
															<option>Cream</option>
															<option>Butter</option>
															<option>Infant Formula</option>
															<option>Toddler Milk</option>
															<option>Baby Cereals</option>
															<option>Baby Snacks</option>
															<option>Pureed Foods</option>
															<option>Premium Cigars</option>
															<option>Machine-Made Cigars</option>
															<option>Cigar Accessories</option>
															<option>Ketchup</option>
															<option>Mustard</option>
															<option>Mayonnaise</option>
															<option>Salad Dressings</option>
															<option>Barbecue Sauce</option>
															<option>Vegetables</option>
															<option>Fruits</option>
															<option>Soups</option>
															<option>Fish</option>
															<option>Beans</option>
															<option>Flour</option>
															<option>Sugar</option>
															<option>Salt</option>
															<option>Pasta</option>
															<option>Cooking Oil</option>
															<option>Fresh Fish</option>
															<option>Shellfish</option>
															<option>Frozen Seafood</option>
															<option>Canned Seafood</option>
															<option>Fresh Fruits</option>
															<option>Fresh Vegetables</option>
															<option>Dried Fruits</option>
															<option>Frozen Fruits & Vegetables</option>
															<option>Beef</option>
															<option>Pork</option>
															<option>Lamb</option>
															<option>Processed Meat</option>
															<option>Chicken</option>
															<option>Turkey</option>
															<option>Duck</option>
															<option>Eggs</option>
															<option>Bread</option>
															<option>Cakes</option>
															<option>Pastries</option>
															<option>Buns</option>
															<option>White Rice</option>
															<option>Brown Rice</option>
															<option>Granulated Sugar</option>
															<option>Brown Sugar</option>
															<option>Cold Cuts</option>
															<option>Gourmet Cheeses</option>
															<option>Specialty Meats</option>
															<option>Cream Cheese</option>
															<option>Sour Cream</option>
															<option>Feta Cheese</option>
															<option>Diapers</option>
															<option>Wipes</option>
															<option>Baby Toiletries</option>
															<option>Skincare Products</option>
															<option>Haircare Products</option>
															<option>Makeup</option>
															<option>Cleaning Supplies</option>
															<option>Laundry Detergents</option>
															<option>Paper Products</option>
															<option>Over-the-Counter Medications</option>
															<option>First Aid Supplies</option>
															<option>Vitamins & Supplements</option>
															<option>Kitchen Appliances</option>
															<option>Home Appliances</option>
															<option>Personal Care Appliances</option>
															<option>Hand Tools</option>
															<option>Power Tools</option>
															<option>Fasteners</option>
															<option>Living Room Furniture</option>
															<option>Bedroom Furniture</option>
															<option>Office Furniture</option>
															<option>Storage Containers</option>
															<option>Utensils</option>
															<option>Tableware</option>
															<option>Cookware</option>
															<option>Bakeware</option>
															<option>Kitchen Utensils</option>
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
																<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-units-brand"><i data-feather="plus-circle" class="plus-down-add"></i><span>Add
																		new</span></a>
															</div>
															<select class="select">
																<option>Choose</option>
																<!-- Beverages -->
																<option>San Miguel</option>
																<option>Red Bull</option>
																<option>Coca-Cola</option>
																<option>Pepsi</option>
																<option>Mineral Water</option>

																<!-- Wines & Liquors -->
																<option>Fundador</option>
																<option>Emperador</option>
																<option>Ginebra San Miguel</option>
																<option>Johnnie Walker</option>
																<option>Jacobs Creek</option>

																<!-- Snacks -->
																<option>Jack 'n Jill</option>
																<option>Skyflakes</option>
																<option>Oishi</option>
																<option>Chips Ahoy!</option>
																<option>Frito Lay</option>

																<!-- Sweets -->
																<option>Chocnut</option>
																<option>Hershey's</option>
																<option>Cadbury</option>
																<option>Reese's</option>
																<option>Gummy Bears</option>

																<!-- Milk & Milk Products -->
																<option>Magnolia</option>
																<option>Alaska</option>
																<option>Purefoods</option>
																<option>Bear Brand</option>
																<option>Highlands Milk</option>

																<!-- Formula Milk & Baby Foods -->
																<option>Similac</option>
																<option>Enfamil</option>
																<option>Nestlé NAN</option>
																<option>Gerber</option>
																<option>Healthy Times</option>

																<!-- Cigars -->
																<option>La Flor de La Isabela</option>
																<option>Manila Cigar</option>
																<option>Alhambra</option>
																<option>Ramon Allones</option>
																<option>Montecristo</option>

																<!-- Condiments, Sauces & Dressings -->
																<option>Mama Sita's</option>
																<option>Kikkoman</option>
																<option>Knorr</option>
																<option>Del Monte</option>
																<option>Magnolia</option>

																<!-- Canned Goods -->
																<option>Libby's</option>
																<option>Purefoods</option>
																<option>Century Tuna</option>
																<option>Maisie</option>
																<option>Del Monte</option>

																<!-- Grocery Staples -->
																<option>Magnolia</option>
																<option>Purefoods</option>
																<option>Rico</option>
																<option>Knorr</option>
																<option>Chooks-to-Go</option>

																<!-- Seafoods -->
																<option>Purefoods</option>
																<option>Century Tuna</option>
																<option>Marine Harvest</option>
																<option>Seafood City</option>
																<option>King Fish</option>

																<!-- Fruits & Vegetables -->
																<option>Del Monte</option>
																<option>Fresh Options</option>
																<option>Philippine Mango</option>
																<option>Calamansi</option>
																<option>Singkamas</option>

																<!-- Meat -->
																<option>Purefoods</option>
																<option>Magnolia</option>
																<option>Swift</option>
																<option>Farmers Choice</option>
																<option>Hormel</option>

																<!-- Poultry -->
																<option>Magnolia</option>
																<option>Purefoods</option>
																<option>Chooks-to-Go</option>
																<option>Monterey</option>
																<option>Delimondo</option>

																<!-- Bakery -->
																<option>Goldilocks</option>
																<option>Red Ribbon</option>
																<option>Gardenia</option>
																<option>Monterey</option>
																<option>Hizon's</option>

																<!-- Rice & Sugar -->
																<option>Royal</option>
																<option>Sinandomeng</option>
																<option>Angelica</option>
																<option>Magic</option>
																<option>Bigasan</option>

																<!-- Delicatessen -->
																<option>Purefoods</option>
																<option>Magnolia</option>
																<option>Chorizo de Bilbao</option>
																<option>Queso de Bola</option>
																<option>Delimondo</option>

																<!-- Dairy and Deli -->
																<option>Magnolia</option>
																<option>Horizon</option>
																<option>Arla</option>
																<option>Emmental</option>
																<option>Purefoods</option>

																<!-- Baby Care -->
																<option>Merries</option>
																<option>Pampers</option>
																<option>Huggies</option>
																<option>Human Nature</option>
																<option>Chicco</option>

																<!-- Health & Beauty Care -->
																<option>Zenutrients</option>
																<option>Ever Bilena</option>
																<option>Maybelline</option>
																<option>Skin White</option>
																<option>Skin Genie</option>

																<!-- Household Maintenance -->
																<option>Ajax</option>
																<option>Joy</option>
																<option>Mr. Muscle</option>
																<option>Downy</option>
																<option>Fabric Conditioner</option>

																<!-- Healthcare -->
																<option>Panadol</option>
																<option>Neozep</option>
																<option>Bioflu</option>
																<option>Alaxan</option>
																<option>Ascof</option>

																<!-- Appliance -->
																<option>Philips</option>
																<option>Sharp</option>
																<option>Samsung</option>
																<option>Panasonic</option>
																<option>Whirlpool</option>

																<!-- Hardware -->
																<option>True Value</option>
																<option>Handyman</option>
																<option>Ace Hardware</option>
																<option>Wilcon Depot</option>
																<option>Do-it-Best</option>

																<!-- Furniture -->
																<option>Mandaue Foam</option>
																<option>Bliss Furniture</option>
																<option>Furniture Republic</option>
																<option>Our Home</option>
																<option>Home Zone</option>

																<!-- Plasticware -->
																<option>Rubbermaid</option>
																<option>Lock & Lock</option>
																<option>Tupperware</option>
																<option>Glad</option>
																<option>Gorilla</option>

																<!-- Kitchenware -->
																<option>Corningware</option>
																<option>Pyrex</option>
																<option>Happycall</option>
																<option>Cuisinart</option>
																<option>KitchenAid</option>
															</select>
														</div>
													</div>
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="mb-3 add-product">
						
															<div class="add-newplus">
																<label class="form-label">Unit</label>
																<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-unit"><i data-feather="plus-circle" class="plus-down-add"></i><span>Add
																		New</span></a>
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
																<option>Choose</option>
																<option>Computers</option>
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
															<option>Code34</option>
														</select>
													</div>
												</div>
												<div class="col-lg-6 col-sm-6 col-12">
													<div class="form-group add-product list">
														<label>Item Code</label>
														<input type="text" class="form-control list"  placeholder="Please Enter Item Code">
														<button type="submit" class="btn btn-primaryadd">
															Generate Code
														</button>
													</div>
												</div>
											</div>
											<div class="row">
												<!-- Editor -->
												<div class="col-lg-12">
													<div class="form-group summer-description-box transfer mb-3">
														<label>Description</label>
														<div id="summernote3">
														</div>
														<p>Maximum 60 Characters</p>
													</div>
												</div>
												<!-- /Editor -->
											</div>
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
												<div class="form-group add-products">
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
																<div class="form-group add-product">
																	<label>Quantity</label>
																	<input type="text" class="form-control">
																</div>
															</div>
															<div class="col-lg-4 col-sm-6 col-12">
																<div class="form-group add-product">
																	<label>Price</label>
																	<input type="text" class="form-control">
																</div>
															</div>
															<div class="col-lg-4 col-sm-6 col-12">
																<div class="form-group add-product">
																	<label>Tax Type</label>
																	<select class="select">
																		<option>Choose</option>
																		<option>Type</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-4 col-sm-6 col-12">
																<div class="form-group add-product">
																	<label>Discount Type</label>
																	<select class="select">
																		<option>Choose</option>
																		<option>Type</option>
																	</select>
																</div>
															</div>
															<div class="col-lg-4 col-sm-6 col-12">
																<div class="form-group add-product">
																	<label>Discount Value</label>
																	<input type="text" placeholder="Choose">
																</div>
															</div>
															<div class="col-lg-4 col-sm-6 col-12">
																<div class="form-group add-product">
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
																							<i data-feather="plus-circle" class="plus-down-add"></i>
																							<h4>Add Images</h4>
																						</div>
																					</div>
																				</div>
																				<div class="phone-img">
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
															</div>
														</div>						
													</div>
													<div class="tab-pane fade" id="pills-profile" role="tabpanel"
													aria-labelledby="pills-profile-tab">
													<div class="row select-color-add">
														<div class="col-lg-6 col-sm-6 col-12">
															<div class="form-group add-product">
																<label>Variant Attribute</label>
																<div class="row">
																	<div class="col-lg-10 col-sm-10 col-10">
																		<select class="form-control variant-select select-option" id="colorSelect">
																			<option >Choose</option>
																			<option >Color</option>
																			<option value="red" >Red</option>
																			<option value="black">Black</option>
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
																	<div class="col-sm-2">
																		<div class="form-group ">
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
																				<span class="quantity-btn">+<i data-feather="plus-circle" class="plus-circle"></i></span>
																				<input type="text" class="quntity-input" value="2">
																				<span class="quantity-btn"><i data-feather="minus-circle" class="feather-search"></i></span>
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
																				<a class="confirm-text p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-variation">
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
																				<span class="quantity-btn">+<i data-feather="plus-circle" class="plus-circle"></i></span>
																				<input type="text" class="quntity-input" value="3">
																				<span class="quantity-btn"><i data-feather="minus-circle" class="feather-search"></i></span>
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
															<div class="form-group add-product">
																<label>Discount Type</label>
																<select class="select">
																	<option>Choose</option>
																	<option>Type</option>
																</select>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-4 col-sm-6 col-12">
															<div class="form-group add-product">
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
								<div class="btn-addproduct mb-4">
									<a href="product-list.php" class="btn btn-cancel">Reset</a>
									<a href="javascript:void(0);" class="btn btn-submit me-2">Save Product</a>
								</div>
							</div>
						</div>
						<!-- /add -->
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Payroll -->

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
													<div class="dropdown-menu search-dropdown idea" aria-labelledby="dropdownMenuClickable">
														<div class="search-info">
															<p>Black </p>
															<p>Red</p>
															<p>Green</p>
															<p>S</p>
															<p>M</p>
														</div>
													</div>
													<!-- <a class="btn"  id="searchdiv"><img src="assets/img/icons/search.svg" alt="img"></a> -->
												</form>
											</div>
										</li>
										</ul>
									</div>
									<div class="col-lg-6">
									<div class="modal-footer-btn popup">
										<a href="javascript:void(0);" class="btn btn-cancel me-2">Cancel</a>
										<a href="javascript:void(0);" class="btn btn-submit">Create Adjustment</a>
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
									<a href="units.php" class="btn btn-submit">Submit</a>
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
									<a href="units.php" class="btn btn-submit">Submit</a>
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
									<a href="units.php" class="btn btn-submit">Submit</a>
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
											<div class="form-group add-product list">
												<label>Item Code</label>
												<input type="text" class="form-control list" value="455454478844">
												<button type="submit" class="btn btn-primaryadd">
													Generate Code
												</button>
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group image-upload-down">
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
												<option>Choose</option>
												<option>Direct</option>
												<option>Indirect</option>
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
									<a href="warehouse.php" class="btn btn-submit">Submit</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Variatent -->

		<!-- Import Product -->
		<div class="modal fade" id="view-notes">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="page-wrapper-new p-0">
						<div class="content">
							<div class="modal-header border-0 custom-modal-header">
								<div class="page-title">
									<h4>Import Product</h4>
								</div>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body custom-modal-body">
								<form action="product-list.php">
									<div class="row">
										<div class="col-lg-4 col-sm-6 col-12">
											<div class="input-blocks">
												<label>Product</label>
												<select class="select">
													<option>Choose</option>
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
										<div class="col-lg-4 col-sm-6 col-12">
											<div class="input-blocks">
												<label>Category</label>
												<select class="select">
												<option>Choose</option>
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
											<div class="input-blocks">
												<label>Satus</label>
												<select class="select">
												<option>Choose</option>
												<option>Active</option>
												<option>Inactive</option>
												<option>Discontinued</option>
												<option>Out of Stock</option>
												<option>Pending</option>
												<option>Archived</option>
												<option>Pre-Order</option>
												</select>
											</div>
										</div>
										<div class="col-lg-12 col-sm-6 col-12">
											<div class="row">
												<div>
													<div class="modal-footer-btn download-file">
														<a href="javascript:void(0)" class="btn btn-submit">Download Sample File</a>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="input-blocks image-upload-down">
												<label>	Upload CSV File</label>
												<div class="image-upload download">
													<input type="file">
													<div class="image-uploads">
														<img src="assets/img/download-img.png" alt="img">
														<h4>Drag and drop a <span>file to upload</span></h4>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-12 col-sm-6 col-12">
											<div class="mb-3">
												<label class="form-label">Created by</label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="mb-3 input-blocks">
											<label class="form-label">Description</label>
											<textarea class="form-control"></textarea>
											<p class="mt-1">Maximum 60 Characters</p>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="modal-footer-btn">
											<button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
											<button type="submit" class="btn btn-submit">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Import Product -->
		<?php include 'layouts/customizer.php'; ?>		
		<?php include 'layouts/vendor-scripts.php'; ?>	
	</body>
</html>