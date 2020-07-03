<?php

// resources/lang/en/messages.php

return [
    /*
    |--------------------------------------------------------------------------
    | Message Language Lines
    |--------------------------------------------------------------------------
    |   Coding : 'welcome' => 'Welcome to our application',
    |   Use it : {{ __('message.welcome')}}
    |   Display : Welcome to our application
    |
    */

    // Common Message
    'button_add_new' => 'Add new',
    'add_new'   => 'Add New',
    'cancel'    => 'Cancel',
    'category'  => 'Category',
    'create' => "Create",
    'created_at' => "Created Date",
    'date'      => 'Date',
    'end_date' => "End Date",
    'i_forgot_my_password' => 'I forgot my password',
    'month'     => 'Month',
    'welcome'   => 'Welcome to our application',
    'you_are_not_login' => "You're not login !",
    'remember_me' => 'Remember me',
    'start_date' => "Start Date",
    'search' => "Search",
    'updated_at' => "Updated Date",
    'sign_in' => 'Sign In',
    'sign_in_to_start_your_session' => 'Sign in to start your session',
    'update' => 'Update',
    'total' => 'Total',
    'register_a_new_membership' => 'Register a new membership',
    'register' => 'Register',

    //Dashboard
    'dashboard'             => 'Dashboard',
    'effort_effeciency'     => 'Effort Effeciency',
    'next_invoice_project'     => 'Next Invoice Project',

    // Effort
    'effort_detail'     => 'Effort Detail',

    // Customer
    'customer' => 'Customer',
    'customer' => [
        '' => 'Customer',
        'screen_name_list' => 'Customer List',
        'screen_name_add_new' => 'Customer Addnew',
        'screen_name_edit' => 'Customer Edit',
        'id'      => 'Customer ID',
        'name'      => 'Customer Name',
        'code'      => 'Customer Code',
        'address' => 'Address',
        'country' => 'Country',
        'phone' => 'Phone',
        'manage_side' => 'Manage Side',
        'person_in_charge' => 'Person In Charge',
        'pic_mail' => 'PIC Mail',
        'relation_from' => 'Relation From',
        'sales_person' => 'Sales Person',
        'sales_pic' => 'Sales PIC',
        'status' => 'Status',
    ],

    // Project
    'project'   => 'Project',
    'project' => [
        ''                  => 'Project',
        'id'                => 'Project Name',
        'code'              => 'Project Code',
        'name'              => 'Project Name',
        'manager'           => 'Project Manager',
        'timesheet_due_day' => 'Timesheet Due Day',
        'project_type'      => 'Project Type',
        'timesheet'         => 'TimeSheet',
        'monthly_invoice'   => 'Monthly Invoice',
        'invoice_due_day'   => 'Invoice Due Day',
        'resource_type'     => 'Resource Type',
        'status'            => 'Status',
    ],
    'project_list' => 'Project List',
    'view_close_project' => 'View Close Project',
    'project_addnew' => 'Project Addnew',
    'project_edit' => 'Project Edit',
    'can_not_delete_this_project' => 'Can not delete this project !',
    'project_status' => 'Project Status',

    // Estimation
    'estimation' => 'Estimation',
    'estimation' => [
        '' => 'Estimation',
        'screen_name_list' => 'Estimation List',
        'screen_name_add_new' => 'Estimation Addnew',
        'screen_name_edit' => 'Estimation Edit',
        'project_name'      => 'Project Name',
        'code'      => 'Estimation Code',
        'currency' => 'Currency',
        'unit_price' => 'Unit Price',
        'billable_effort' => 'Billable Effort',
        'total_amount' => 'Total Amount',
        'total_exchange_to_vnd' => 'Total Exchange To VND',
        'estimation_type' => 'Estimation Type',
    ],

    // Exchange rate

    // User
    'user' => 'User',
    'user' => [
        ''   => "User",
        'add_new'  => 'Add New',
        'account'  => 'Account',
        'full_name'  => 'Full Name',
        'department'  => 'Department',
        'role'  => 'Role',
        'status'  => 'Status',
        'more'  => 'More',
        'add_new_user'  => 'Add New User',
        'development'  => 'Development',
        'bod'  => 'BOD',
        'hr'  => 'HR',
        'password'  => 'Password',
        'confirmation'  => 'Confirmation',
        'confir' => "Passwords do not match.",
        'edit_user'  => 'Edit User',
        'choose_pw_generatepw' => "Choose enter Password or Generate Password.",
        'just_pw_gpw'  => 'Just enter password or Generate Password',
    ],
    // Cost
    'cost_overview' => 'Cost Overview',
    'cost' => [
        'name'      => 'Cost Name',
    ],
    'category'      => 'Category',
    'currency'      => 'Currency',
    'unit_price'    => 'Unit Price',
    'number'        => 'Number',
    'total_amount'  => 'Total Amount',
    'to_vnd'        => 'To VND',
    'status'        => 'Status',
    'note'          => 'Note',
    'attack_file'   => 'Attack File',
    'quantity'      => 'Quantity',
    'amount_to_vnd' => 'Amount2VND',
    'attachment'    => 'Attachment',
    'cost_edit'     => 'CostEdit',
    'cost_addnew'   => 'Cost Addnew',
    'select'        => 'Select',
    'attachment'    => 'Attachment',
    'choose_files'    => 'Choose Files',

    // Rate messages

    'rate' => 'Rate',
    'rate' => [
        'rate'   => "Rate",
        'year'   => "Year",
        'rate_list'   => "Rate List",
        'rate_add'   => "Rate Add New",
        'rate_edit'   => "Rate Edit",
        'year_month'  => 'Year.Month',
        'base_currency'  => 'Base Currency',
        'exchange_currency'  => 'Exchange Currency',
    ],

    // Effort messages
    'invoice' => 'Invoice',
    'invoice' => [
        'invoice'   => "Invoice",
        'invoice_no'  => 'Invoice No',
        'to_customer'  => 'To Customer',
        'invoice_date'  => 'Invoice Date',
        'currency'  => 'Currency',
        'amount'  => 'Amount',
        'status'  => 'Status',
        'notes'  => 'Notes',
        'tax_rate'  => 'Tax Rate',
        'invoice_language'  => 'Invoice Language',
        'invoice_due_date'  => 'Payment Due Date',
        'banking_name'  => 'Banking Name',
        'banking_account'  => 'Banking Account',
        'project'  => 'Project',
        'estimation' => "Estimation",
        'edit_user'  => 'Edit User',
        'estimation_invoice' => "Estimation",
        'unit_price'  => 'Unit Price',
        'quantity'  => 'Quantity',
        'export'  => 'Export Excel',
        'invoice_add' => 'Invoice Add New',
        'invoice_edit' => 'Invoice Edit',
        'sub_total' => 'Sub Total',
        'tax' => 'Tax',
        'total_amount' => 'Total Amount',
        'total_in_words' => 'Total In Words',
        'submit' => 'Submit'
    ],

];
