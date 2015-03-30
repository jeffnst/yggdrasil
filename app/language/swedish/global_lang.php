<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * App  
 *
 * A simple, fast, contact and software licenses software
 *
 * @package		App
 * @author		App Dev Team
*/

// ------------------------------------------------------------------------

$lang = array(

	/** Global Words **/
 	'global:home' => 'Hem',
 	'global:about' => 'Om',
 	'global:import' => 'Importera',
    
 	'global:overview' => 'Översikt',
 	'global:error' => 'Fel',
	'global:version' => 'App :1',
	'global:allrelatedmediacopyright' => 'App är Copyright: 1: 2:',
	'global:insecure_action' => 'Osäkra åtgärd försökte men fångas',
    
        'global:campaigns'              =>  'Kampanjer',
        'global:media_contacts'         =>  'Media Kontakt',
        'global:media_distribution'     =>  'Media Distribution',
        'global:media_orientation'      =>  'Media Orientering',
        'global:media_segmentation'     =>  'Media Segmentation',
        'global:media_type'             =>  'Medietyp',
    
        'global:maps' => 'Media Karta',
    
        'global:library' => 'Bibliotek',
        'global:action' => 'Åtgärd',    
    
        'global:enter' => 'Enter',    
        'global:logviewer' => 'Logga Utdrag Viewer',    
        'global:download' => 'Ladda Ner',
        'global:sync' => 'Sync',
        'global:check' => 'Kontrollera MGO/FW',
      
        'global:config'  => 'Inställningar',
        'global:country' => 'Land',
        'global:martial' => 'Martial',
        'global:meals' => 'Måltider',
        'global:passport' => 'Passport',
        'global:rank' => 'Rank',
        'global:ships' => 'Ships',
        'global:type' => 'Type',
    
	'global:upload_failed' => 'There was a problem uploading your file. Please try again. If the problem persists, please contact support@thunderbeaardesign.com.',
	'global:upload_not_allowed' => 'The file type of the file you were trying to upload is not allowed. If you need to upload a file of that type, please compress it into a .zip or any other archive format you might find appropriate.',
	'global:copied' => 'Copied!',
	'global:users' => 'Users',
	'global:noonreport' => 'Noon Report',    
	'global:schedule' => 'Schedule',    
	'global:people' => 'People',
	'global:whois' => 'Who is onboard',    
	'global:database' => 'Database',    
	'global:couldnotsendemail' => 'Could not send the email.  Please check your settings.',
	'global:emailsent' => 'Email has been sent!',
	'global:yes' => 'Yes',
	'global:no' => 'No',
	'global:dontshowagain' => "Don't show this again",
	'global:enable' => 'Enable',
	'global:is_enabled' => 'Enabled?',
	'global:is_completed' => 'Completed?',
	'global:Y' => 'Y',
	'global:N' => 'N',
	'global:notes' => 'Notes',
	'global:description' => 'Description', 
	'global:backtoadmin' => 'Back to Admin',
	'global:type' => 'Type',
	'global:name'		=>	'Name',
	'global:first_name'		=>	'First Name',
	'global:last_name'		=>	'Last Name',
	'global:for'	=>	'for',
	'global:from'	=>	'from',
	'global:phone'		=>	'Phone',
	'global:email'		=>	'Email',
	'global:contacts'	=>	'Contacts',
	'global:week' => 'Weekly',
	'global:quarterly' => 'Quarterly',
        'global:every_six_months' => 'Every 6 months',
        'global:biyearly' => 'Every 2 years',
	'global:month' => 'Monthly',
	'global:year' => 'Yearly',
	'global:fax'		=>	'Fax',
	'global:mobile'		=>	'Mobile',
	'global:address'	=>	'Address',
	'global:api_key' => 'API Key',
	'global:website'	=>	'Website',
	'global:action'		=>	'Action',
	'global:items'		=>	'Items',
	'global:dashboard'	=> 'Dashboard',
	'global:settings'	=> 'Settings',
        'global:sync'           =>  'Sync',
	'global:changepassword' => 'Change Password',
	'global:logout' 	=> 'Log Out',
	'global:status' => 'Status',
	'global:user' => 'User',
	'global:title' => 'Title',
	'global:subtitle' => 'Subtitle',
	'global:to' => 'To (separate multiple addresses with a comma)',
	'global:subject' => 'Subject',
	'global:thanks' => 'Thanks!',
	'global:reports' => 'Reports',
	'global:item' => 'Item',
	'global:report' => 'Report',
	'global:saveandinsert' => 'Save and Insert',
	'global:details'	=>	'Details',
	'global:license_key' => 'License Key',
	'global:version' => 'Version',
	'global:content' => 'Content',
	'global:add'	=>	'Add',
	'global:edit'	=>	'Edit',
	'global:read'	=>	'Read',
	'global:view'	=>	'View',    
	'global:resend'	=>	'Resend',
	'global:sent' =>        'Sent',
	'global:not_sent' =>    'Not sent',
	'global:view'	=>	'View',
	'global:delete'	=>	'Delete',
	'global:remove'	=>	'Remove',
	'global:sort'	=>	'Sort',
	'global:deleteitem' => 'Delete Item',
	'global:dragtoreorder' => 'Drag To Reorder',
	'global:start' => 'Start',
	'global:stop' => 'Stop',
	'global:created'	=>	'Created',
	'global:updated'	=>	'Updated',
	'global:update'	=>	'Update',
	'global:yesdelete' => 'Yes, delete!',
	'global:confirm_emphisised'	=>	'There is no going back!',
	'global:color' => 'Color',
	'global:save' => 'Save',
	'global:unknown' => 'Unknown',
	'global:upload_ini_size' => 'The file you uploaded exceeds the size limit imposed by your PHP installation.',
	'global:upload_error' => 'A problem occurred while uploading the file. Please try again.',
	'global:recurring' => 'Recurring',
	'global:unsent' => 'Unsent',
	'global:duplicate' => 'Duplicate',
	'global:urltosend'	=>	'Here is the url to send:',
	'global:copytoclipboard'	=>	'Copy to clipboard',
        'global:id'           =>	'Id',
        'global:name'         =>	'Family Names',
        'global:rank'         =>	'Rank',
        'global:nationality'  =>	'Nationality',
        'global:dateofbirth'  =>	'Date of birth',
        'global:placeofbirth' =>	'Place of birth',
        'global:passportno'   =>	'Passport Number',
        'global:typeofid'     =>	'Type of id',
        'global:viewpdf'   =>	'PDF',
        'global:excel'   =>	'Excel',
        'global:knowas'   =>	'Know as',
        'global:lastname'   =>	'Last Name',
        'global:fullname'   =>  'Last, Frist Name',
        'global:nickname'   =>  'Nick Name',
        'global:list'   =>  'List',
        'global:residence' => 'Residence',
    
	'global:optional_increment' => '<strong>Optional</strong> - will auto increment',

	'login:ahoy' => 'Ahoy!',
	'login:readytodothis' => 'Ready to do this?',
	'login:sup' => 'Sup?',
	'global:actions' => 'Actions',
        'global:media' => 'Media',
        'global:socialmedia' => 'Social Media',
    
        'global:search' => 'Search',
        'global:addarticle' => 'Add Article',
        'global:socialmedia' => 'Social Media',
        'global:twitter' => 'twitter',
        'global:facebook' => 'facebook',

        'global:reportslisting' => 'Reports Listing',
        'global:createreports' => 'Create Reports from Templates',
        'global:mediareport' => 'Media Report',
        'global:socialreport' => 'Social Report',
        'global:relationship' => 'Media Relationship Report',
        'global:topmedia' => 'Top Media Report',
        'global:topjournalist' => 'Top Journalist Report',
        'global:topsocial' => 'Top Social Report',
    
        'global:analysis' => 'Analysis',
        'global:contacts' => 'Contacts',

        'global:newjournalist' => 'New Journalist',
        'global:newmedia' => 'New Media',
        'global:newactivity' => 'New Activity',
        'global:newemail' => 'New Email',
        'global:importcontacts' => 'Import Contacts',
        'global:importactvities' => 'Import Activities',
        'global:newgroup' => 'New Group',
        'global:managegroup' => 'Manage Groups',
        'global:newtag' => 'New Tag',
        'global:managetags' => 'Manage Tags (Categories)',
        'global:findandmerge' => 'Find and Merge Duplicate Contacts',
    
        'global:feeds' => 'Feeds',
    
        'global:admin' => 'Admin',    
    
        'global:hitwords' => 'Hitwords',
        'global:keywords' => 'Keywords',
        'global:journalists' => 'Journalists',
        'global:media' => 'Media',
        'global:wires' => 'Wires',
        'global:frames' => 'Frames',
        'global:stats' => 'Media Analysis',

	/** Greetings **/
	'global:greetings'	=>	array('Ahoi!', 'Hello,', 'Hey,', 'Sup,'),
	/** End Greetings **/

	/** Dashboard **/	
	'dashboard:expectedcrue'    => 'Crue Expected',
        'dashboard:peopleonboard'   => 'People On Board',
        'dashboard:users'           => 'Journalist',
        'dashboard:media'           => 'Media',
        'dashboard:insights'        => 'Insights',    
        'dashboard:networkmap'      => 'Networkmap',        
    
    
	/** End Dashboard **/


	/** Users **/

	// ==============================
	// = LOGIN PAGE COMPLETED - Lee =
	// ==============================
	'login:forgotinstructions'	=>	'Please enter your email address so we can send you an email to reset your password.',
	'login:reset'				=>	'Reset &raquo;',
	'login:reset'				=>	'Reset Password',
	'login:username'			=>	'Username',
	'login:password'			=>	'Password',
	'login:changepassword'		=>	'Change Password',
	'login:email'				=>	'Email Address',
	'login:login'				=>	'Login',
	'login:logout'				=>	'Logout',
	'login:remember'			=>	'Remember Me',
	'login:forgot'				=>	'Forgot your password?',
	'login:cancel'				=>	'&laquo; Cancel',
	/** End Users **/
		
	/** Contact Log **/
	'contact:title'			=>	'Recent Contact History',
	'contact:method'		=>	'Contact Method',
	'contact:contact'		=>	'Contact',
	'contact:subject'		=>	'Subject',
	'contact:content'		=>	'Content',
	'contact:method'		=>	'Contact Method',
	// 'contact:view_all'		=>	'View All',
	/** End Contact Log **/

	/** Reports **/
	'reports:pership' => 'per ship',
	'reports:datefrom' => 'From',
	'reports:allships' => 'All ships',
	'reports:dateto' => 'To',
	'reports:byship' => 'Ship',

	'reports:view' => 'View Report',
	'reports:show_all' => 'Show Reports',
	'reports:nodata' => 'No :1.',
	/** End Reports **/
	
	/** Users **/
	'users:create_user' => 'Create User',
	
	/** Settings **/
    
        'settings:allowed_extensions' => 'Allowed Upload Extensions',
        'settings:comma_separated' => 'comma-separated',
        'settings:pdf_page_size' => 'PDF Page Size',
        'settings:testemailsettings' => 'Test Email Settings',
        'settings:items_per_page' => 'Items Per Page',
        'settings:items_per_page_explain' => 'Number of items to show per page.',
	'settings:send_x_days_before' => 'Default "send days before"',
	'settings:file_to_import' => 'File To Import',
        'settings:export_types' => 'App exports everything in JSON format.',
	'settings:file_should_be_csv' => 'App will process your file and import everything in it.',
	'settings:importnow' => 'Import now!',
	'settings:whatimporting' => 'What are you importing?',
	'settings:whatexporting' => 'What are you exporting?',
	'settings:nouploadedimportfile' => 'You did not upload a file to import.',
	'settings:import' => 'Import',
        'settings:imported_entries' => 'Imported :1 entries successfully.',
        'settings:xwereduplicates' => ':1 were duplicates, and were ignored.',
        'settings:import_desc' => 'Import data into App.',
	'settings:export' => 'Export',
	'settings:exportnow' => 'Export now!',
	'settings:importexport' => 'Import / Export',
	'settings:removelogo' => 'Remove Logo',
	'settings:wrong_license_key' => 'The license key you have entered is not valid.',
	'settings:noopenssl' => 'Your PHP server does not have OpenSSL configured, which means you can\'t use Gmail or Google Apps for sending email. Please contact your host and let them know you need OpenSSL.',
	'settings:logoremoved' => 'Logo removed successfully!',
	'settings:save' => 'Save Settings',
	'settings:logodimensions' => 'The logo should be 178 pixels wide and 56 pixels tall.',
	'settings:logoformatsallowed' => 'BMP, PNG, JPG (JPEG) and GIF are allowed.',
	'settings:ftp_user' => 'FTP User',
	'settings:ftp_pass' => 'FTP Password',
	'settings:ftp_path' => 'FTP Path',
	'settings:ftp_port' => 'FTP Port',
	'settings:ftp_pasv' => 'Passive Mode?',
	'settings:nophpupdates' => "Because of the way your server is configured, you need to enter your FTP details so that App can update itself. These details are used internally by App and are never transmitted to anyone.",
	'settings:ftp_host' => 'FTP Host',
	'settings:uptodate' => 'App is up to date (:1)',
	'settings:newversionavailable' => 'There is a new version of App available (:1)!',
	'settings:updatenow' => 'Update now!',
	'settings:youneedtoconfigurefirst' => 'Your App is not yet configured to update itself. Please enter your FTP details below, then press "Save Settings".<br /> App will then let you update.',
	'settings:general' => 'General',
	'settings:email_templates' => 'Emails',
	'settings:branding' => 'Branding',
	'settings:feeds' => 'Feeds',
	'settings:api_keys' => 'API Keys',

        'settings:site_name' => 'Site name',
	'settings:language' => 'Språk',
	'settings:timezone' => 'Timezone',
	'settings:notify_email' => 'Notify email',
	'settings:theme' => 'Frontend Theme',
	'settings:admin_theme' => 'Theme',
	'settings:admin_name' => 'Admin name',
	'settings:date_format' => 'Date format',
	'settings:task_time_interval' => 'Task Time Interval',
	'settings:mailing_address' => 'Mailing Address',
	
        'settings:default_subject' => 'Default Subject',
        'settings:default_contents' => 'Default Message',
	
	'settings:logo' => 'Your logo',
	'settings:frontend_css' => 'Frontend Custom CSS',
	'settings:backend_css' => 'Backend Custom CSS',
	
	'settings:rss_password' => 'RSS Password',
	'settings:default_feeds' => 'Default Feeds',
	'settings:cron_job_feed' => 'Cron Job',
	'settings:feed_generator' => 'Feed Generator',
	'settings:your_link' => 'Your Link',
	'settings:bcc' => 'BCC',
	'settings:automaticallybccclientemail' => 'Automatically send a copy of the email to the notify email (defined above)',
	'settings:api_note' => 'Name / Note',
	'settings:api_key' => 'Key',
        'settings:noonreport' => 'Noon Report',
        'settings:custom_css' => 'Custom CSS',
        'settings:plugins'  => 'Plugins',
        'settings:applications'  => 'Application',
    
        'settings:authentication' => 'Authentication',
        'settings:LDAP' => 'LDAP Authentication',
        'settings:ldap_connect' => 'ldap conenct',
        'settings:ldap_port'    => 'ldap port',
        'settings:ldap_dc'      => 'ldap_dc',
    
    
    
        'settings:ldapauthnotify' => 'Set the LDAP details',
        'settings:local' => 'Local Authentication',
        'settings:google' => 'Google Authenitcation',	
        'settings:google_client_id' => 'Google Client ID:',	
        'settings:google_email_address' => 'Google Email address:',	
        'settings:google_client_secret' => 'Google Client secret',	
        'settings:google_redirect_uri' => 'Redirect URIs',	
        'settings:google_javascript_origins' => 'Google JavaScripts Origins',
        'settings:google_API_key' => 'google_API_key',
		
	/** End Settings **/

        /** General Admin **/
	'general:id' => 'Id',
	'general:title' => 'Title',
	'general:status' => 'Status',
    	'general:actions' => 'Actions',
        'general:save' => 'save',
        'general:delete' => 'delete',

	/** Wires **/
	'wires:add_a_new_wire' => 'Add a new wire',
	'wires:add_wire' => 'add wire',
    
	/** Keywords **/
	'keywords:create_user' => 'Create User',
        
    	/** Media **/
	'media:create_user' => 'Create User',
        'media:media_active' => 'MEDIA ACTIVE',   
        'media:domain' => 'DOMAIN',
        'media:owner'   => 'COMPANY',
        'media:segmentation' => 'SEGMENTATION',
        'media:national' => 'National',
        'media:active' => 'Media Active',
        'media:contacts' => 'CONTACTS',
        'media:publisher' => 'PUBLISHER',
        'media:location' =>  'COUNTRY',
        'media:distribution' => 'DISTRIBUTION',
        'media:type' => 'MEDIA TYPE',
        'media:wire_service' => 'Wire Service', 
        'media:orientation' => 'ORIENTATION',
        'media:add_a_new_segment' => 'Add a new segment',
        'media:segment_in_the_database' => 'Segment in the database',
        'media:media' => 'Media',
        'media:create_item' => 'Create Item',    
        'media:only_show_media_without_meta-data' => 'Only show media without meta-data',
        'media:media_types_in_the_database' => 'Media types in database',
        'media:add_a_new_media_type' => 'Add a new media type',
        'media:add_media_type' => 'Add Media Type',
        'media:country' => 'Country',

        'orientations:add_a_new_media_orientation' => 'Add a new media orientation',
        'orientations:add_media_orientation' => 'Add Media Oreintation',
        'orientations:orientations_in_the_database' => 'Media orientations in the database',

        'contacts:add_a_new_media_contacts' => 'Add a new media contacts',
        'contacts:contacts_in_the_database' => 'Media contacts in the database',
        'contacts:add_media_contacts' => 'Add Media Contacts',
    
        'distributions:add_a_new_media_distribution' => 'Add a new media distributions',
        'distributions:add_media_distribution' => 'Add Media Distribution',
        'distributions:media_distributions_in_the_database' => 'Media distributions in the database',
    
        'media_segmentation:add_a_new_segmentation' => 'Add a new media segmentation',
        'media_segmentation:add_media_segmentation' => 'Add Media Segmentation',
        'media_segmentation:segmentation_in_the_database' => 'Media segemntations in the database',
    
    
        /** Feeds  **/
        'feeds:url' => 'Url',    
        'feeds:checktime' => 'Checktime',
        'feeds:add_a_new_feed' => 'Add a new feed',
        'feeds:feeds_in_the_database' => 'Feeds In The Database',

        /** Campaigns  **/
        'campaign:add_a_new_campaign' => 'ADD A NEW CAMPAIGN',    
        'campaign:add_campaign' => 'Add Campaign',
    
        /** Insights  **/
        'insights:main' => 'Main',    
        'insights:timeline' => 'Timeline',

        /** Library  **/
        'library:add_a_new_library_item' => 'Add a new library item',    
        'library:add_library_item' => 'Add library item',        
        'library:items_in_the_library' => 'Items in the library',
        'library:publication_date' => 'Publication Date',
        'library:create_item' => 'Create Item',        
        'library:library' => 'Library',
        'library:title' => 'Title',
        'library:author' => 'Author',
        'library:publisher' => 'Publisher',
        'library:organisation' => 'Organisation',
        'library:ISBN' => 'ISBN',
        'library:internal' => 'Internal',
        'library:annotation' => 'Annotation',
        'library:file_name' => 'File Name',
        'library:URL-FTP' => 'URL-FTP',
        'library:date_added' => 'Date Added',
        'library:name' => 'Name',
        'library:economics_politics' => 'Economics/Politics',
        'library:organisms' => 'Organisms',
        'library:substances' => 'Substances',
        'library:biosphere' => 'Biosphere',
        'library:health' => 'Health',
        'library:GPspecials' => 'GP specials',
        'library:type' => 'Type',
        'library:language' => 'Language',
        'library:oldDB' => 'old DB',
        'library:oldID' => 'old ID',
        'library:oldKeyword' => 'old Keyword',
        'library:archive_location' => 'Archieve Location',
        'library:archive_number' => 'Archieve Number',
        'library:archive_status' => 'Archieve Status',
        'library:archieve_date' => 'Archieve Date',
        'library:archieve_comment' => 'Archieve Comment',
        'library:companies' => 'Companies',
        'library:dunnos' => 'Dunnos',
        'library:int_classification' => 'International Classification',
        'library:human_activity' => 'Human Activity',
        'library:geography' => 'Geography',
        'library:full_text' => 'Full Text',

        /** MIS Report  **/    
        'misreport:misreport'  => 'MIS Reports',
        'misreport:odp'  => '3 years ODP',
        'misreport:programme'  => '80/20 Programme Expenditure',
        'misreport:adhoc'  => 'Ad Hoc',
        'misreport:financial'  => 'Financial',
        'misreport:governance'  => 'Governance',
        'misreport:hr'  => 'People and HR',
        'misreport:pm'  => 'Project Management',
        'misreport:globalgrowth' => 'Global Growth',
        'misreport:growthtarget' => 'FR Growth Target',
        'misreport:hrstaff' => 'HR Staff Info',
        'misreport:contributionglobal' => 'Contribution Global',    

        /** Action  **/
    
        'action:action' => 'Action',
        'action:action_data' => 'Action Data',             
);