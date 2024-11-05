<?php
    $link = $_SERVER['PHP_SELF'];
    $link_array = explode('/',$link);
    $page = end($link_array);
?>
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Main</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page =='index.php'||$page == '/'||$page == 'sales-dashboard.php') ? 'active subdrop' : '' ;?>"><i
                                    data-feather="grid"></i><span>Dashboard</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="index.php"
                                        class="<?php echo ($page =='index.php'||$page == '/') ? 'active' : '' ;?>">Admin Dashboard</a></li>
                                <li><a href="sales-dashboard.php"
                                        class="<?php echo ($page =='sales-dashboard.php') ? 'active' : '' ;?>">Sales Dashboard</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page =='chat.php'||$page == 'file-manager.php'||$page == 'file-archived.php'||$page =='file-document.php'||$page =='file-favourites.php'||$page =='file-manager-seleted.php'||$page =='file-recent.php'||$page =='file-shared.php'||$page =='notes.php'||$page == 'todo.php'||$page == 'email.php'||$page == 'calendar.php'||$page == 'call-history.php'||$page == 'audio-call.php'||$page == 'video-call.php'||$page =='file-manager-deleted.php') ? 'active subdrop' : '' ;?> "><i
                                    data-feather="smartphone"></i><span>Application</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="under-maintenance.php"
                                        class="<?php echo ($page =='under-maintenance.php') ? 'active' : '' ;?>">CCTV Cameras</a></li>
                                <li class="submenu submenu-two"><a href="javascript:void(0);"
                                        class="<?php echo ($page =='under-maintenance.php'||$page == 'audio-call.php'||$page == 'call-history.php') ? 'active subdrop' : ''  ;?>">Front Camera<span
                                            class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a class="<?php echo ($page =='video-call.php') ? 'active' : '' ;?>"
                                                href="under-maintenance.php">CCTV</a></li>
                                        <li><a class="<?php echo ($page =='audio-call.php') ? 'active' : '' ;?>"
                                                href="under-maintenance.php">Audio Call</a></li>
                                        <li><a class="<?php echo ($page =='call-history.php') ? 'active' : '' ;?>"
                                                href="under-maintenance.php">Call History</a></li>
                                    </ul>
                                </li>
                                <li><a class="<?php echo ($page =='under-maintenance.php') ? 'active' : '';?>"
                                        href="under-maintenance.php">Notes</a></li>
                                <li><a class="<?php echo ($page =='under-maintenance.php'||$page == 'file-archived.php'||$page =='file-document.php'||$page =='file-favourites.php'||$page =='file-manager-seleted.php'||$page =='file-recent.php'||$page =='file-shared.php'||$page =='file-manager-deleted.php') ? 'active' : '' ;?>"
                                        href="under-maintenance.php">File Manager</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Inventory</h6>
                    <ul>
                        <li class="<?php echo ($page =='product-list.php'||$page =='product-details.php') ? 'active' : '' ;?>"><a
                                href="product-list.php"><i data-feather="box"></i><span>Products</span></a>
                        </li>
                        <li class="<?php echo ($page =='add-product.php'||$page =='edit-product.php') ? 'active' : '' ;?>"><a
                                href="add-product.php"><i data-feather="plus-square"></i><span>Create
                                    Product</span></a></li>
                        <li class="<?php echo ($page =='expired-products.php') ? 'active' : '' ;?>"><a
                                href="expired-products.php"><i data-feather="codesandbox"></i><span>Expired
                                    Products</span></a></li>
                        <li class="<?php echo ($page =='low-stocks.php') ? 'active' : '' ;?>"><a
                                href="low-stocks.php"><i data-feather="trending-down"></i><span>Low
                                    Stocks</span></a></li>
                        <li class="<?php echo ($page =='category-list.php') ? 'active' : '' ;?>"><a
                                href="category-list.php"><i
                                    data-feather="codepen"></i><span>Category</span></a></li>
                        <li class="<?php echo ($page =='sub-categories.php') ? 'active' : '' ;?>"><a
                                href="sub-categories.php"><i data-feather="speaker"></i><span>Sub
                                    Category</span></a></li>
                        <li class="<?php echo ($page =='brand-list.php') ? 'active' : '' ;?>"><a
                                href="brand-list.php"><i data-feather="tag"></i><span>Brands</span></a></li>
                        <li class="<?php echo ($page =='units.php') ? 'active' : '' ;?>"><a href="units.php"><i
                                    data-feather="speaker"></i><span>Units</span></a></li>
                        <li class="<?php echo ($page =='varriant-attributes.php') ? 'active' : '' ;?>"><a
                                href="varriant-attributes.php"><i data-feather="layers"></i><span>Variant
                                    Attributes</span></a></li>
                        <li class="<?php echo ($page =='warranty.php') ? 'active' : '' ;?>"><a href="warranty.php"><i
                                    data-feather="bookmark"></i><span>Warranties</span></a>
                        </li>
                        <li class="<?php echo ($page =='barcode.php') ? 'active' : '' ;?>"><a href="barcode.php"><i
                                    data-feather="align-justify"></i><span>Print
                                    Barcode</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Stock</h6>
                    <ul>
                        <li class="<?php echo ($page =='manage-stocks.php') ? 'active' : '' ;?>"><a
                                href="manage-stocks.php"><i data-feather="package"></i><span>Manage
                                    Stock</span></a></li>
                        <li class="<?php echo ($page =='stock-adjustment.php') ? 'active' : '' ;?>"><a
                                href="stock-adjustment.php"><i data-feather="clipboard"></i><span>Stock
                                    Adjustment</span></a></li>
                        <li class="<?php echo ($page =='stock-transfer.php') ? 'active' : '' ;?>"><a
                                href="stock-transfer.php"><i data-feather="truck"></i><span>Stock
                                    Transfer</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Sales</h6>
                    <ul>
                        <li class="<?php echo ($page =='sales-list.php') ? 'active' : '' ;?>"><a
                                href="sales-list.php"><i
                                    data-feather="shopping-cart"></i><span>Sales</span></a></li>
                        <li class="<?php echo ($page =='invoice-report.php') ? 'active' : '' ;?>"><a
                                href="invoice-report.php"><i
                                    data-feather="file-text"></i><span>Invoices</span></a></li>
                        <li class="<?php echo ($page =='sales-returns.php') ? 'active' : '' ;?>"><a
                                href="sales-returns.php"><i data-feather="copy"></i><span>Sales
                                    Return</span></a></li>
                        <li class="<?php echo ($page =='quotation-list.php') ? 'active' : '' ;?>"><a
                                href="quotation-list.php"><i
                                    data-feather="save"></i><span>Quotation</span></a>
                        </li>
                        <li class="<?php echo ($page =='pos.php') ? 'active' : '' ;?>"><a href="pos.php"><i
                                    data-feather="hard-drive"></i><span>POS</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Promo</h6>
                    <ul>
                        <li class="<?php echo ($page =='coupons.php') ? 'active' : '' ;?>"><a href="coupons.php"><i
                                    data-feather="shopping-cart"></i><span>Coupons</span></a>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Purchases</h6>
                    <ul>
                        <li class="<?php echo ($page =='purchase-list.php') ? 'active' : '' ;?>"><a
                                href="purchase-list.php"><i
                                    data-feather="shopping-bag"></i><span>Purchases</span></a></li>
                        <li class="<?php echo ($page =='purchase-order-report.php') ? 'active' : '' ;?>"><a
                                href="purchase-order-report.php"><i
                                    data-feather="file-minus"></i><span>Purchase Order</span></a></li>
                        <li class="<?php echo ($page =='purchase-returns.php') ? 'active' : '' ;?>"><a
                                href="purchase-returns.php"><i data-feather="refresh-cw"></i><span>Purchase
                                    Return</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Finance & Accounts</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page =='expense-list.php'||$page == 'expense-category.php') ? 'active subdrop' : '' ;?>"><i
                                    data-feather="file-text"></i><span>Expenses</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="expense-list.php"
                                        class="<?php echo ($page =='expense-list.php') ? 'active' : '' ;?>">Expenses</a></li>
                                <li><a href="expense-category.php"
                                        class="<?php echo ($page =='expense-category.php') ? 'active' : '' ;?>">Expense
                                        Category</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Peoples</h6>
                    <ul>
                        <li class="<?php echo ($page =='customers.php') ? 'active' : '' ;?>"><a
                                href="customers.php"><i data-feather="user"></i><span>Customers</span></a>
                        </li>
                        <li class="<?php echo ($page =='suppliers.php') ? 'active' : '' ;?>"><a
                                href="suppliers.php"><i data-feather="users"></i><span>Suppliers</span></a>
                        </li>
                        <li class="<?php echo ($page =='store-list.php') ? 'active' : '' ;?>"><a
                                href="store-list.php"><i data-feather="home"></i><span>Stores</span></a>
                        </li>
                        <li class="<?php echo ($page =='warehouse.php') ? 'active' : '' ;?>"><a
                                href="warehouse.php"><i
                                    data-feather="archive"></i><span>Warehouses</span></a>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Reports</h6>
                    <ul>
                        <li class="<?php echo ($page =='sales-report.php') ? 'active' : '' ;?>"><a
                                href="sales-report.php"><i data-feather="bar-chart-2"></i><span>Sales
                                    Report</span></a></li>
                        <li class="<?php echo ($page =='purchase-report.php') ? 'active' : '' ;?>"><a
                                href="purchase-report.php"><i data-feather="pie-chart"></i><span>Purchase
                                    report</span></a></li>
                        <li class="<?php echo ($page =='inventory-report.php') ? 'active' : '' ;?>"><a
                                href="inventory-report.php"><i data-feather="inbox"></i><span>Inventory
                                    Report</span></a></li>
                        <li class="<?php echo ($page =='invoice-report.php') ? 'active' : '' ;?>"><a
                                href="invoice-report.php"><i data-feather="file"></i><span>Invoice
                                    Report</span></a></li>
                        <li class="<?php echo ($page =='supplier-report.php') ? 'active' : '' ;?>"><a
                                href="supplier-report.php"><i data-feather="user-check"></i><span>Supplier
                                    Report</span></a></li>
                        <li class="<?php echo ($page =='customer-report.php') ? 'active' : '' ;?>"><a
                                href="customer-report.php"><i data-feather="user"></i><span>Customer
                                    Report</span></a></li>
                        <li class="<?php echo ($page =='expense-report.php') ? 'active' : '' ;?>"><a
                                href="expense-report.php"><i data-feather="file"></i><span>Expense
                                    Report</span></a></li>
                        <li class="<?php echo ($page =='income-report.php') ? 'active' : '' ;?>"><a
                                href="income-report.php"><i data-feather="bar-chart"></i><span>Income
                                    Report</span></a></li>
                        <li class="<?php echo ($page =='tax-reports.php') ? 'active' : '' ;?>"><a
                                href="tax-reports.php"><i data-feather="database"></i><span>Tax
                                    Report</span></a></li>
                        <li class="<?php echo ($page =='profit-and-loss.php') ? 'active' : '' ;?>"><a
                                href="profit-and-loss.php"><i data-feather="pie-chart"></i><span>Profit &
                                    Loss</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">User Management</h6>
                    <ul>
                        <li class="<?php echo ($page =='users.php') ? 'active' : '' ;?>"><a href="users.php"><i
                                    data-feather="user-check"></i><span>Users</span></a>
                        </li>
                        <li class="<?php echo ($page =='roles-permissions.php'||$page =='permissions.php') ? 'active' : '' ;?>"><a
                                href="roles-permissions.php"><i data-feather="shield"></i><span>Roles &
                                    Permissions</span></a></li>
                        <li class="<?php echo ($page =='delete-account.php') ? 'active' : '' ;?>"><a
                                href="delete-account.php"><i data-feather="lock"></i><span>Delete Account
                                    Request</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Settings</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page =='general-settings.php'||$page == 'security-settings.php'||$page == 'notification.php'||$page =='connected-apps.php') ? 'active subdrop' : '' ;?>"><i
                                    data-feather="settings"></i><span>General
                                    Settings</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="general-settings.php"
                                        class="<?php echo ($page =='general-settings.php') ? 'active' : '' ;?>">Profile</a>
                                </li>
                                <li><a href="security-settings.php"
                                        class="<?php echo ($page =='security-settings.php') ? 'active' : '' ;?>">Security</a>
                                </li>
                                <li><a href="notification.php"
                                        class="<?php echo ($page =='notification.php') ? 'active' : '' ;?>">Notifications</a>
                                </li>
                                <li><a href="connected-apps.php"
                                        class="<?php echo ($page =='connected-apps.php') ? 'active' : '' ;?>">Connected
                                        Apps</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page =='system-settings.php'||$page == 'company-settings.php'||$page == 'localization-settings.php'||$page == 'prefixes.php'||$page == 'preference.php'||$page == 'appearance.php'||$page == 'social-authentication.php'||$page == 'language-settings.php'||$page =='language-settings-web.php') ? 'active subdrop' : '' ;?>"><i
                                    data-feather="globe"></i><span>Website
                                    Settings</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="system-settings.php"
                                        class="<?php echo ($page =='system-settings.php') ? 'active' : ''  ;?>">System
                                        Settings</a></li>
                                <li><a href="company-settings.php"
                                        class="<?php echo ($page =='company-settings.php') ? 'active' : ''  ;?>">Company
                                        Settings </a></li>
                                <li><a href="localization-settings.php"
                                        class="<?php echo ($page =='localization-settings.php') ? 'active' : ''  ;?>">Localization</a>
                                </li>
                                <li><a href="prefixes.php"
                                        class="<?php echo ($page =='prefixes.php') ? 'active' : ''  ;?>">Prefixes</a></li>
                                <li><a href="preference.php"
                                        class="<?php echo ($page =='preference.php') ? 'active' : ''  ;?>">Preference</a></li>
                                <li><a href="appearance.php"
                                        class="<?php echo ($page =='appearance.php') ? 'active' : ''  ;?>">Appearance</a></li>
                                <li><a href="social-authentication.php"
                                        class="<?php echo ($page =='social-authentication.php') ? 'active' : ''  ;?>">Social
                                        Authentication</a></li>
                                <li><a href="language-settings.php"
                                        class="<?php echo ($page =='language-settings.php'||$page =='language-settings-web.php') ? 'active' : ''  ;?>">Language</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page =='invoice-.phpsettings'||$page == 'printer-settings.php'||$page == 'pos-settings.php'||$page == 'custom-fields.php') ? 'active subdrop' : '' ;?>"><i
                                    data-feather="smartphone"></i>
                                <span>App Settings</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="invoice-settings.php"
                                        class="<?php echo ($page =='invoice-settings.php') ? 'active' : '' ;?>">Invoice</a>
                                </li>
                                <li><a href="printer-settings.php"
                                        class="<?php echo ($page =='printer-settings.php') ? 'active' : '' ;?>">Printer</a>
                                </li>
                                <li><a href="pos-settings.php"
                                        class="<?php echo ($page =='pos-settings.php') ? 'active' : '' ;?>">POS</a></li>
                                <li><a href="custom-fields.php"
                                        class="<?php echo ($page =='custom-fields.php') ? 'active' : '' ;?>">Custom Fields</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page =='email-settings.php'||$page == 'sms-gateway.php'||$page == 'otp-settings.php'||$page =='gdpr-settings.php') ? 'active subdrop' : '' ;?>"><i
                                    data-feather="monitor"></i>
                                <span>System Settings</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="email-settings.php"
                                        class="<?php echo ($page =='email-settings.php') ? 'active' : '' ;?>">Email</a></li>
                                <li><a href="sms-gateway.php"
                                        class="<?php echo ($page =='sms-gateway.php') ? 'active' : '' ;?>">SMS Gateways</a>
                                </li>
                                <li><a href="otp-settings.php"
                                        class="<?php echo ($page =='otp-settings.php') ? 'active' : '' ;?>">OTP</a></li>
                                <li><a href="gdpr-settings.php"
                                        class="<?php echo ($page =='gdpr-settings.php') ? 'active' : '' ;?>">GDPR Cookies</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page =='payment-gateway-settings.php'||$page =='bank-settings-grid.php'||$page =='bank-settings-list.php'||$page =='tax-rates.php'||$page == 'currency-settings.php') ? 'active subdrop' : '' ;?>"><i
                                    data-feather="dollar-sign"></i>
                                <span>Settings</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="payment-gateway-settings.php"
                                        class="<?php echo ($page =='payment-gateway-settings.php') ? 'active' : '';?>">Payment
                                        Gateway</a></li>
                                <li><a href="bank-settings-grid.php"
                                        class="<?php echo ($page =='bank-settings-grid.php'||$page =='bank-settings-list.php') ? 'active' : '' ;?>">Bank
                                        Accounts</a></li>
                                <li><a href="tax-rates.php"
                                        class="<?php echo ($page =='tax-rates.php') ? 'active' : '' ;?>">Tax Rates</a></li>
                                <li><a href="currency-settings.php"
                                        class="<?php echo ($page =='currency-settings.php') ? 'active' : '' ;?>">Currencies</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page =='storage-settings.php'||$page == 'ban-ip-address.php') ? 'active subdrop' : '' ;?> "><i
                                    data-feather="hexagon"></i>
                                <span>Other Settings</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="storage-settings.php"
                                        class="<?php echo ($page =='storage-settings.php') ? 'active' : '' ;?>">Storage</a>
                                </li>
                                <li><a href="ban-ip-address.php"
                                        class="<?php echo ($page =='ban-ip-address.php') ? 'active' : '' ;?>">Ban IP
                                        Address</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo ($page =='signin.php') ? 'active' : '' ;?>">
                            <a href="signin.php"><i data-feather="log-out"></i><span>Logout</span> </a>
                        </li>
                    </ul>
                </li>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->