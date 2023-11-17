<div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
          <div id="sidebar-menu" class="sidebar-menu">
            <ul>
            {{-- @if(auth()->user()->StaffUsers->role === 'Manager') --}}
              <li class="active">
                <a href="index.html">
                <img src="assets/img/icons/dashboard.svg" alt="img" /><span>
                    Dashboard</span
                  >
                </a>
              </li>
              {{-- @endif
              @if(auth()->user()->StaffUsers->role === 'Manager' || auth()->user()->StaffUsers->role === 'Chef') --}}
              <li class="submenu">
                <a href="javascript:void(0);"
                  ><img src="assets/img/icons/product.svg" alt="img" /><span
                    >Menu</span
                  >
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="MenuList.html">Menu List</a></li>
                  <li><a href="MenuCategory.html">Menu Category</a></li>
                  <li><a href="MenuAvailable.html">Menu Available</a></li>
                </ul>
              </li>
              {{-- @endif
              @if(auth()->user()->StaffUsers->role === 'Manager' || auth()->user()->StaffUsers->role === 'Chef') --}}
              <li class="submenu">
                <a href="javascript:void(0);"
                  ><img src="assets/img/icons/sales1.svg" alt="img" /><span
                    >Inventory</span
                  >
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="inventoryStatus.html">Inventory Status</a></li>
                  <li><a href="inventoryCategory.html">Stocks Category</a></li>
                  <li>
                    <a href="inventoryPurchaseOrder.html">Restocking History</a>
                  </li>
                  <li>
                    <a href="inventoryRestocking.html">Inventory Restocking</a>
                  </li>
                </ul>
              </li>
              {{-- @endif
              @if(auth()->user()->StaffUsers->role === 'Manager') --}}
              <li class="submenu">
                <a href="javascript:void(0);"
                  ><img src="assets/img/icons/expense1.svg" alt="img" /><span
                    >Expenses</span
                  >
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="expenses.html">Expenses List</a></li>
                </ul>
              </li>
              {{-- @elseif(auth()->user()->StaffUsers->role === 'Manager' || auth()->user()->StaffUsers->role === 'Chef'
              || auth()->user()->StaffUsers->role === 'Cashier' || auth()->user()->StaffUsers->role === 'Waiter') --}}
              <li class="submenu">
                <a href="javascript:void(0);"
                  ><img src="assets/img/icons/purchase1.svg" alt="img" /><span
                    >Orders</span
                  >
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="OrderList.html">Order List</a></li>
                </ul>
              </li>
              {{-- @elseif(auth()->user()->StaffUsers->role === 'Manager') --}}
              <li class="submenu">
                <a href="javascript:void(0);"
                  ><img src="assets/img/icons/purchase1.svg" alt="img" /><span
                    >Reservation</span
                  >
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="reservationStatus.html">Reservation List</a></li>
                </ul>
              </li>
              {{-- @elseif(auth()->user()->StaffUsers->role === 'Manager' || auth()->user()->StaffUsers->role === 'Cashier') --}}
              <li class="submenu">
                <a href="javascript:void(0);"
                  ><img src="assets/img/icons/quotation1.svg" alt="img" /><span
                    >Point of Sales</span
                  >
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="pos.html">Point of Sales</a></li>
                </ul>
              </li>
              {{-- @elseif(auth()->user()->StaffUsers->role === 'Manager' || auth()->user()->StaffUsers->role === 'Cashier') --}}
              <li class="submenu">
                <a href="javascript:void(0);"
                  ><img src="assets/img/icons/transcation.svg" alt="img" /><span
                    >Transaction</span
                  >
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li>
                    <a href="transactionPlacedOrderList.html"
                      >Placed Orders List</a
                    >
                  </li>
                  <li>
                    <a href="transactionPaidOrderList.html">Paid Orders List</a>
                  </li>
                  <li>
                    <a href="transactionReservationList.html"
                      >Reservations List</a
                    >
                  </li>
                </ul>
              </li>
              {{-- @elseif(auth()->user()->StaffUsers->role === 'Manager') --}}
              <li class="submenu">
                <a href="javascript:void(0);"
                  ><img src="assets/img/icons/time.svg" alt="img" /><span
                    >Sales</span
                  >
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="salesdaily.html">Sales List</a></li>
                  <li><a href="salesmonthly.html">Income Statement</a></li>
                  <li><a href="salesReport.html">Sales Report</a></li>
                </ul>
              </li>
              {{-- @elseif(auth()->user()->StaffUsers->role === 'Admin') --}}
              <li class="submenu">
                <a href="javascript:void(0);"
                  ><img src="assets/img/icons/places.svg" alt="img" /><span
                    >Branch</span
                  >
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="branch.html">Branch List</a></li>
                </ul>
              </li>
              {{-- @elseif(auth()->user()->StaffUsers->role === 'Admin') --}}
              <li class="submenu">
                <a href="javascript:void(0);"
                  ><img src="assets/img/icons/users1.svg" alt="img" /><span
                    >Users</span
                  >
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="userlists.html">Users List</a></li>
                </ul>
              </li>
              {{-- @endif --}}
            </ul>
          </div>
        </div>
      </div>