<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-light.png') }}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span>@lang('translation.menu')</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('sales.landing')}}" role="button">
                        <i data-feather="home" class="icon-dual"></i> <span>HOME</span>
                    </a>
                </li> <!-- end Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarApps">
                        <i data-feather="grid" class="ri-pages-line"></i> <span>APPLICATION</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="sales.application.add-cro-form" class="nav-link">Add CRO</a>
                            </li>
                            <li class="nav-item">
                                <a href="sales.application.change-cro-form" class="nav-link">Change CRO</a>
                            </li>
                            <li class="nav-item">
                                <a href="sales.application.add-village-form" class="nav-link">Add Village</a>
                            </li>
                            <li class="nav-item">
                                <a href="sales.application.create-root-form" class="nav-link">Root Create</a>
                            </li>
                            <li class="nav-item">
                                <a href="sales.application.basic-details-form" class="nav-link">Basic Details</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">WE</a>
                            </li>
                            <li class="nav-item">
                                <a href="sales.application.family-details-form" class="nav-link">Family Details</a>
                            </li>
                            <li class="nav-item">
                                <a href="sales.application.guarantor-details-01-form" class="nav-link">Guarantor 01 Details</a>
                            </li>
                            <li class="nav-item">
                                <a href="sales.application.guarantor-details-02-form" class="nav-link">Guarantor 02 Details</a>
                            </li>
                            <li class="nav-item">
                                <a href="sales.application.guarantor-details-03-form" class="nav-link">Guarantor 03 Details</a>
                            </li>
                            <li class="nav-item">
                                <a href="sales.application.pdc-security-form" class="nav-link">PDC Security</a>
                            </li>
                            <li class="nav-item">
                                <a href="sales.application.business-details-form" class="nav-link">Financial Detail (Business Details)</a>
                            </li>
                            <li class="nav-item">
                                <a href="sales.application.loan-details-form" class="nav-link">Loan Detail</a>
                            </li>
                            <li class="nav-item">
                                <a href="sales.application.recovery-holiday" class="nav-link">Add Holiday</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarLayouts">
                        <i data-feather="layout" class="icon-dual"></i> <span>APPROVALS</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="sales.approvals.first-approval-details-form" class="nav-link">First Approval</a>
                            </li>
                            <li class="nav-item">
                                <a href="sales.approvals.loan-approval-details-form" class="nav-link">Loan Approval</a>
                            </li>
                            <li class="nav-item">
                                <a href="sales.approvals.cheque-approval-form" class="nav-link">Cheque Approval</a>
                            </li>
                            <li class="nav-item">
                                <a href="sales.approvals.voucher-print-form" class="nav-link">Voucher Print</a>
                            </li>
                            <li class="nav-item">
                                <a href="sales.approvals.voucher-encash" class="nav-link">Voucher Encash</a>
                            </li>
                            <li class="nav-item">
                                <a href="sales.approvals.document-form" class="nav-link">Document</a>
                            </li>
                            <li class="nav-item">
                                <a href="sales.approvals.settlement-rebate-approval-form" class="nav-link">Settlement & Rebate</a>
                            </li>
                            <li class="nav-item">
                                <a href="sales.approvals.rebate-approval-form" class="nav-link">Rebate Approval</a>
                            </li>
                            <li class="nav-item">
                                <a href="sales.approvals.write-off" class="nav-link">Write Off</a>
                            </li>
                            <li class="nav-item">
                                <a href="sales.approvals.loan-re-shedule" class="nav-link">Loan Re-Schedule</a>
                            </li>
                            <li class="nav-item">
                                <a href="sales.approvals.loan-cancel" class="nav-link">Loan Cancel</a>
                            </li>
                            <li class="nav-item">
                                <a href="sales.approvals.customer-history" class="nav-link">Add Customer History</a>
                            </li>
                            <li class="nav-item">
                                <a href="sales.approvals.reminder-letter" class="nav-link">Reminder Letter</a>
                            </li>
                            <li class="nav-item">
                                <a href="sales.approvals.letter-inactive" class="nav-link">Letter Inactive</a>
                            </li>
                        </ul>
                    </div>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarAuth">
                        <i data-feather="users" class="icon-dual"></i> <span>INSTALLMENT</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAuth">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-calendar" class="nav-link">Cash Installment</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-chat" class="nav-link">Cheque Installment</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link">Receipt Cancel</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-calendar" class="nav-link">Cheque Return</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-chat" class="nav-link">Down Payment</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link">Voucher Cancel</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-calendar" class="nav-link">Cheque Cancel</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-chat" class="nav-link">Credit Note</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link">PRO-IT-Payment Approval</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-calendar" class="nav-link">Cash in Hand to Bank</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarPages">
                        <i data-feather="command" class="icon-dual"></i> <span>REPORT</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-calendar" class="nav-link">Arrears Detail</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-chat" class="nav-link">Client Details</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link">Financial Details</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-calendar" class="nav-link">Center Details</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-chat" class="nav-link">Cheque Printing Detail</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link">Master Sheet</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-calendar" class="nav-link">Family Details</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-chat" class="nav-link">Installment Detail</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link">Insurance Detail</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-calendar" class="nav-link">Ledger Card</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-chat" class="nav-link">Loan Details</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link">Receipt Cancel Details</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link">Recovery Holiday Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link">Insurance Detail</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-calendar" class="nav-link">Ledger Card</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-chat" class="nav-link">Loan Details</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-chat" class="nav-link">Not Paid Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link">Receipt Cancel Details</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link">Recovery Holiday Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link">Down Payment Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-calendar" class="nav-link">Voucher Printing Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-chat" class="nav-link">CRO Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link">Cheque Cancel Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link">Voucher Cancel Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link">Cheque Removal Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link">Debit Run Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link">Due Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link">Collection Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link">Customer History Sheet</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link">Credit Note Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link">Rebate Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link">Maturity Analysis-Capital</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link">Maturity Analysis -Interest</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link">Letter Generator Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link">Portfolio Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link">Voucher Encash Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link">Other Income Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link">Default Income Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link">POS Transaction Report</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
