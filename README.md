# QuidPHP/Core
[![Release](https://img.shields.io/github/v/release/quidphp/core)](https://packagist.org/packages/quidphp/core)
[![License](https://img.shields.io/github/license/quidphp/core)](https://github.com/quidphp/core/blob/master/LICENSE)
[![PHP Version](https://img.shields.io/packagist/php-v/quidphp/core)](https://www.php.net)
[![Style CI](https://styleci.io/repos/203755370/shield)](https://styleci.io)
[![Code Size](https://img.shields.io/github/languages/code-size/quidphp/core)](https://github.com/quidphp/core)

## About
**QuidPHP/Core** provides PHP, JS and SCSS components for QuidPHP application and CMS. It is part of the [QuidPHP](https://github.com/quidphp/project) package. 

## License
**QuidPHP/Core** is available as an open-source software under the [MIT license](LICENSE).

## Installation
**QuidPHP/Core** can be easily installed with [Composer](https://getcomposer.org). It is available on [Packagist](https://packagist.org/packages/quidphp/core).
``` bash
$ composer require quidphp/core
```
Once installed, the **Quid\Core** namespace will be available within your PHP application.

## Requirement
**QuidPHP/Core** requires the following:
- PHP 7.2+ with fileinfo, curl, openssl, posix, PDO and pdo_mysql

## Included
**QuidPHP/Core** comes bundled with the following:
- [jquery/jquery](https://github.com/jquery/jquery)
- [jquery/jquery-ui](https://github.com/jquery/jquery-ui)
- [necolas/normalize.css](https://github.com/necolas/normalize.css)

## Dependency
**QuidPHP/Core** has the following dependency:
- [quidphp/base](https://github.com/quidphp/base)
- [quidphp/main](https://github.com/quidphp/main)
- [quidphp/orm](https://github.com/quidphp/orm)
- [quidphp/routing](https://github.com/quidphp/routing)
- [verot/class.upload.php](https://github.com/verot/class.upload.php)
- [phpmailer/phpmailer](https://github.com/phpmailer/phpmailer)
- [tedivm/jshrink](https://github.com/tedious/JShrink)
- [leafo/scssphp](https://github.com/scssphp/scssphp)
All dependencies will be resolved by using the Composer installation process.

## Testing
**QuidPHP/Core** testsuite can be run by creating a new [quidphp/project](https://github.com/quidphp/project). All tests and assertions are part of the [quidphp/test](https://github.com/quidphp/test) repository.

## Comment
**QuidPHP/Core** code is commented and all methods are explained. However, the method and property comments are currently written in French.

## Convention
**QuidPHP/Core** is built on the following conventions:
- *Traits*: Traits filenames start with an underscore (_).
- *Coding*: No curly braces are used in a IF statement if the condition can be resolved in only one statement.
- *Type*: Files, function arguments and return types are strict typed.
- *Config*: A special $config static property exists in all classes. This property gets recursively merged with the parents' property on initialization.

## Overview
**QuidPHP/Core** contains 263 PHP classes and traits. Here is an overview:
- [App](src/App)
    - [Error](src/App/Error.php) | Abstract class for the error route of the application
    - [Home](src/App/Home.php) | Abstract class for the home route of the application
    - [Robots](src/App/Robots.php) | Class for the robots.txt route of the application
    - [Sitemap](src/App/Sitemap.php) | Class for the sitemap.xml route of the application
- [Boot](src/Boot.php)
- [BootException](src/BootException.php)
- [Cell](src/Cell.php)
    - [Date](src/Cell/Date.php) | Class to work with a cell containing a date value
    - [Enum](src/Cell/Enum.php) | Class to manage a cell containing a single relation (enum)
    - [Files](src/Cell/Files.php) | Abstract class extendend by the media and medias cells
    - [Floating](src/Cell/Floating.php) | Class to work with a cell containing a floating value
    - [Integer](src/Cell/Integer.php) | Class to manage a cell containing an integer value
    - [JsonArray](src/Cell/JsonArray.php) | Class to manage a cell containing a json array
    - [JsonArrayRelation](src/Cell/JsonArrayRelation.php) | Class to manage a cell containing a relation value to another cell containing a json array
    - [Media](src/Cell/Media.php) | Class to work with a cell containing a value which is a link to a file
    - [Medias](src/Cell/Medias.php) | Class to manage a cell containing a value which is a link to many files
    - [Primary](src/Cell/Primary.php) | Class for dealing with a the cell of a column which has an auto increment primary key
    - [Relation](src/Cell/Relation.php) | Abstract class extendend by the enum and set cells
    - [Set](src/Cell/Set.php) | Class to manage a cell containing many relations separated by comma (set)
    - [UserPasswordReset](src/Cell/UserPasswordReset.php) | Class to work with a password reset column within a user table
    - [Video](src/Cell/Video.php) | Class to manage a cell containing a video from a third-party service
- [Cells](src/Cells.php)
- [Cms](src/Cms)
    - [About](src/Cms/About.php) | Class for the about popup route of the CMS
    - [Account](src/Cms/Account.php) | Class for the account route of the CMS, by default redirects to the user's specific route
    - [AccountChangePassword](src/Cms/AccountChangePassword.php) | Class for the change password route in the CMS
    - [AccountChangePasswordSubmit](src/Cms/AccountChangePasswordSubmit.php) | Class for the submit change password route in the CMS
    - [ActivatePassword](src/Cms/ActivatePassword.php) | Class for the activate password in the CMS
    - [Error](src/Cms/Error.php) | Class for the error route of the CMS
    - [General](src/Cms/General.php) | Class for the general navigation route of the CMS
    - [GeneralDelete](src/Cms/GeneralDelete.php) | Class for the route which allows to delete rows from the general navigation page of the CMS
    - [GeneralExport](src/Cms/GeneralExport.php) | Class for the route which generates the CSV export for the CMS
    - [GeneralExportDialog](src/Cms/GeneralExportDialog.php) | Class for the general export popup route of the CMS
    - [GeneralRelation](src/Cms/GeneralRelation.php) | Class for the route which manages the filters for the general navigation page of the CMS
    - [GeneralTruncate](src/Cms/GeneralTruncate.php) | Class for the route which allows to truncate a table from the general navigation page of the CMS
    - [Home](src/Cms/Home.php) | Class for the home route of the CMS
    - [HomeSearch](src/Cms/HomeSearch.php) | Class for the global search route accessible from the homepage of the CMS
    - [Login](src/Cms/Login.php) | Class for the login route of the CMS
    - [LoginSubmit](src/Cms/LoginSubmit.php) | Class for the login submit route of the CMS
    - [Logout](src/Cms/Logout.php) | Class for the logout route of the CMS
    - [Register](src/Cms/Register.php) | Class for the register route of the CMS
    - [RegisterSubmit](src/Cms/RegisterSubmit.php) | Class for the register submit route of the CMS
    - [ResetPassword](src/Cms/ResetPassword.php) | Class for the reset password route of the CMS
    - [ResetPasswordSubmit](src/Cms/ResetPasswordSubmit.php) | Class for the submit reset password route of the CMS
    - [Robots](src/Cms/Robots.php) | Class for the robots.txt route of the CMS
    - [Sitemap](src/Cms/Sitemap.php) | Class for the sitemap.xml route of the CMS
    - [Specific](src/Cms/Specific.php) | Class for the specific route of the CMS, generates the update form for a row
    - [SpecificAdd](src/Cms/SpecificAdd.php) | Class for the specific add route of the CMS, generates the insert form for a row
    - [SpecificAddSubmit](src/Cms/SpecificAddSubmit.php) | Class for the submit specific add route, to process the insertion of a new row in the CMS
    - [SpecificCalendar](src/Cms/SpecificCalendar.php) | Class for the calendar widget route of the CMS
    - [SpecificDelete](src/Cms/SpecificDelete.php) | Class for the specific delete route, to process a row deletion in the CMS
    - [SpecificDispatch](src/Cms/SpecificDispatch.php) | Class for the specific dispatch route, directs to the proper dispatch route of the CMS
    - [SpecificDownload](src/Cms/SpecificDownload.php) | Class for the file download route of the CMS
    - [SpecificDuplicate](src/Cms/SpecificDuplicate.php) | Class for the specific duplicate route, to process a row duplication in the CMS
    - [SpecificRelation](src/Cms/SpecificRelation.php) | Class for the route which manages specific relation - enumSet inputs in the specific form
    - [SpecificSubmit](src/Cms/SpecificSubmit.php) | Class for the submit specific route, to process the update of a row in the CMS
    - [SpecificTableRelation](src/Cms/SpecificTableRelation.php) | Class for the route which manages table relation, used by some inputs in the CMS
    - [SpecificUserWelcome](src/Cms/SpecificUserWelcome.php) | Class for the specific user welcome route which can send a welcome email to the user
    - [_common](src/Cms/_common.php) | Trait that provides commonly used methods for the CMS
    - [_export](src/Cms/_export.php) | Trait that provides commonly used methods for exporting data from the CMS
    - [_general](src/Cms/_general.php) | Trait that provides commonly used methods related to the general navigation route of the CMS
    - [_module](src/Cms/_module.php) | Trait that provides some initial configuration for a CMS module route
    - [_nobody](src/Cms/_nobody.php) | Trait which provides commonly used methods for routes where the user is not logged in the CMS
    - [_page](src/Cms/_page.php) | Trait that provides some pratical methods to work with page route within the CMS
    - [_specific](src/Cms/_specific.php) | Trait that provides commonly used methods for the specific routes of the CMS
    - [_specificSubmit](src/Cms/_specificSubmit.php) | Trait that provides commonly used methods for the specific submit routes of the CMS
    - [_template](src/Cms/_template.php) | Trait that grants the methods to generate the CMS HTML template
- [Col](src/Col.php)
    - [Active](src/Col/Active.php) | Class for the active column - a simple yes checkbox
    - [Auto](src/Col/Auto.php) | Class for the auto column, generate itself automatically using the data from other cells
    - [Boolean](src/Col/Boolean.php) | Class for the boolean column - a simple yes/no enum relation
    - [Context](src/Col/Context.php) | Class for the context column, updates itself automatically on commit
    - [ContextType](src/Col/ContextType.php) | Class for the contextType column, a checkbox set relation with all boot types (like app, cms)
    - [CountCommit](src/Col/CountCommit.php) | Class for the countCommit column, increments itself automatically on commit
    - [Date](src/Col/Date.php) | Class for the date column, supports many date formats
    - [DateAdd](src/Col/DateAdd.php) | Class for the dateAdd column, current timestamp is added automatically on insert
    - [DateLogin](src/Col/DateLogin.php) | Class for the dateLogin column, current timestamp is applied automatically when the user logs in
    - [DateModify](src/Col/DateModify.php) | Class for the dateModify column, current timestamp is updated automatically on update
    - [Email](src/Col/Email.php) | Class for a column managing email
    - [Enum](src/Col/Enum.php) | Class for a column containing an enum relation (one)
    - [Error](src/Col/Error.php) | Class for a column that manages an error object as a value
    - [Excerpt](src/Col/Excerpt.php) | Class for a column which contains an excerpt of a longer value
    - [Files](src/Col/Files.php) | Abstract class extendend by the media and medias cols
    - [Floating](src/Col/Floating.php) | Class for a column which deals with floating values
    - [Fragment](src/Col/Fragment.php) | Class for a column which contains URI fragments
    - [Integer](src/Col/Integer.php) | Class for a column which deals with integer values
    - [Json](src/Col/Json.php) | Class for a column which manages json values
    - [JsonArray](src/Col/JsonArray.php) | Class for a column which offers a special input for json values
    - [JsonArrayRelation](src/Col/JsonArrayRelation.php) | Class to manage a column containing a relation value to another column which is a jsonArray
    - [JsonExport](src/Col/JsonExport.php) | Class for a column which contains json which should be exported (similar to var_export)
    - [Media](src/Col/Media.php) | Class to work with a column containing a value which is a link to a file
    - [Medias](src/Col/Medias.php) | Class to work with a column containing a value which is a link to many files
    - [Phone](src/Col/Phone.php) | Class for a column managing phone numbers, automatically formats the value
    - [Pointer](src/Col/Pointer.php) | Class for a column which the value is a pointer to another row in the database
    - [Primary](src/Col/Primary.php) | Class for dealing with a column which has an auto increment primary key
    - [Relation](src/Col/Relation.php) | Abstract class extendend by the enum and set columns
    - [Request](src/Col/Request.php) | Class for a column that manages a request object as a value
    - [RequestIp](src/Col/RequestIp.php) | Class for a column which applies the current request ip as value on commit
    - [Serialize](src/Col/Serialize.php) | Class for a column which should serialize its value
    - [Session](src/Col/Session.php) | Class for a column which should store current session id
    - [Set](src/Col/Set.php) | Class for a column containing a set relation (many)
    - [Slug](src/Col/Slug.php) | Class for a column dealing with URI slug
    - [SlugPath](src/Col/SlugPath.php) | Class for a column dealing with URI slug within a URI path
    - [Textarea](src/Col/Textarea.php) | Class for a column which is editable through a textarea input
    - [Timezone](src/Col/Timezone.php) | Class for a column which is a enum relation to the PHP timezone array
    - [UserActive](src/Col/UserActive.php) | Class for the column which manages the active field for the user row
    - [UserAdd](src/Col/UserAdd.php) | Class for the userAdd column, user_id is added automatically on insert
    - [UserCommit](src/Col/UserCommit.php) | Class for the userCommit column, user_id is added automatically on commit
    - [UserModify](src/Col/UserModify.php) | Class for the userModify column, user_id is added automatically on update
    - [UserPassword](src/Col/UserPassword.php) | Class for the column which manages the password field for the user row
    - [UserPasswordReset](src/Col/UserPasswordReset.php) | Class for the userPasswordReset column of a user row
    - [UserRole](src/Col/UserRole.php) | Class for the column which manages the role field for the user row
    - [Username](src/Col/Username.php) | Class for the username column of a user row
    - [Video](src/Col/Video.php) | Abstract class for a column containing a video from a third-party service
    - [Yes](src/Col/Yes.php) | Class for the yes column - a simple yes checkbox
- [Cols](src/Cols.php)
- [Com](src/Com.php)
- [Db](src/Db.php)
- [Error](src/Error.php)
- [File](src/File.php)
    - [Audio](src/File/Audio.php) | Class for an audio file (like mp3)
    - [Binary](src/File/Binary.php) | Abstract class for a binary file
    - [Cache](src/File/Cache.php) | Class for a cache storage file
    - [Calendar](src/File/Calendar.php) | Class for a calendar file (like ics)
    - [Css](src/File/Css.php) | Class for a css or scss file
    - [Csv](src/File/Csv.php) | Class for a csv file
    - [Doc](src/File/Doc.php) | Class for a doc file, like microsoft word
    - [Dump](src/File/Dump.php) | Class for file which contains an exported value (similar to var_export)
    - [Email](src/File/Email.php) | Class for a file which is an email (in json format)
    - [Error](src/File/Error.php) | Class for an error storage file
    - [Font](src/File/Font.php) | Class for a font file (like ttf)
    - [Html](src/File/Html.php) | Class for an html file
    - [Image](src/File/Image.php) | Abstract class for an image file (raster or vector)
    - [ImageRaster](src/File/ImageRaster.php) | Class for a pixelated image file
    - [ImageVector](src/File/ImageVector.php) | Class for a vector image file (like svg)
    - [Js](src/File/Js.php) | Class for a js file
    - [Json](src/File/Json.php) | Class for a json file
    - [Log](src/File/Log.php) | Class for a log storage file
    - [Pdf](src/File/Pdf.php) | Class for pdf file
    - [Php](src/File/Php.php) | Class for a php file
    - [Queue](src/File/Queue.php) | Class for a queue storage file
    - [Serialize](src/File/Serialize.php) | Class for a file with content that should be serialized
    - [Session](src/File/Session.php) | Class for a session storage file, which is serialized
    - [Text](src/File/Text.php) | Abstract class for a text file
    - [Txt](src/File/Txt.php) | Class for txt file (like txt)
    - [Video](src/File/Video.php) | Class for a video file (like mp4)
    - [Xml](src/File/Xml.php) | Class for an xml file
    - [Zip](src/File/Zip.php) | Class for a zip file
- [Files](src/Files.php)
- [Flash](src/Flash.php)
- [Lang](src/Lang.php)
    - [En](src/Lang/En.php) | English language content used by this namespace
    - [Fr](src/Lang/Fr.php) | French language content used by this namespace
    - [_overload](src/Lang/_overload.php) | Trait which implements the overload logic for the lang classes
- [Nav](src/Nav.php)
- [Redirection](src/Redirection.php)
- [Request](src/Request.php)
- [RequestHistory](src/RequestHistory.php)
- [Response](src/Response.php)
- [Role](src/Role.php)
    - [Admin](src/Role/Admin.php) | Class which contains the default configuration for the admin role
    - [Contributor](src/Role/Contributor.php) | Class which contains the default configuration for the contributor role (disabled per default)
    - [Cron](src/Role/Cron.php) | Class which contains the default configuration for the cron role (disabled per default)
    - [Editor](src/Role/Editor.php) | Class which contains the default configuration for the editor role
    - [Nobody](src/Role/Nobody.php) | Class that issues default configuration for the nobody role
    - [Shared](src/Role/Shared.php) | Class that contains the default configuration for the shared role (disabled per default)
    - [SubAdmin](src/Role/SubAdmin.php) | Class that contains the default configuration for the subAdmin role (disabled per default)
    - [User](src/Role/User.php) | Class that contains the default configuration for the user role (disabled per default)
- [Roles](src/Roles.php)
- [Route](src/Route.php)
    - [Account](src/Route/Account.php)
    - [AccountChangePassword](src/Route/AccountChangePassword.php)
    - [AccountChangePasswordSubmit](src/Route/AccountChangePasswordSubmit.php)
    - [AccountSubmit](src/Route/AccountSubmit.php)
    - [ActivatePassword](src/Route/ActivatePassword.php)
    - [Error](src/Route/Error.php)
    - [Home](src/Route/Home.php)
    - [Login](src/Route/Login.php)
    - [LoginSubmit](src/Route/LoginSubmit.php)
    - [Logout](src/Route/Logout.php)
    - [Register](src/Route/Register.php)
    - [RegisterSubmit](src/Route/RegisterSubmit.php)
    - [ResetPassword](src/Route/ResetPassword.php)
    - [ResetPasswordSubmit](src/Route/ResetPasswordSubmit.php)
    - [Robots](src/Route/Robots.php)
    - [Sitemap](src/Route/Sitemap.php)
    - [_calendar](src/Route/_calendar.php)
    - [_colRelation](src/Route/_colRelation.php)
    - [_download](src/Route/_download.php)
    - [_formSubmit](src/Route/_formSubmit.php)
    - [_general](src/Route/_general.php)
    - [_generalPager](src/Route/_generalPager.php)
    - [_generalRelation](src/Route/_generalRelation.php)
    - [_generalSegment](src/Route/_generalSegment.php)
    - [_nobody](src/Route/_nobody.php)
    - [_relation](src/Route/_relation.php)
    - [_search](src/Route/_search.php)
    - [_specific](src/Route/_specific.php)
    - [_specificNav](src/Route/_specificNav.php)
    - [_specificPrimary](src/Route/_specificPrimary.php)
    - [_specificRelation](src/Route/_specificRelation.php)
    - [_tableRelation](src/Route/_tableRelation.php)
- [Routes](src/Routes.php)
- [Row](src/Row.php)
    - [Email](src/Row/Email.php) | Class to deal with a row of the email table, contains the emailModels
    - [Lang](src/Row/Lang.php) | Class to work with row of the lang table, contains the text and translations
    - [Log](src/Row/Log.php) | Class to represent a row of the log table, stores user activities
    - [LogCron](src/Row/LogCron.php) | Class to represent a row of the logCron table, stores cron jobs results
    - [LogEmail](src/Row/LogEmail.php) | Class to represent a row of the logEmail table, stores emails sent
    - [LogError](src/Row/LogError.php) | Class to represent a row of the logError table, stores error objects
    - [LogHttp](src/Row/LogHttp.php) | Class to represent a row of the logHttp table, stores bad http requests
    - [LogSql](src/Row/LogSql.php) | Class to represent a row of the logSql table, stores sql queries
    - [QueueEmail](src/Row/QueueEmail.php) | Class to deal with a row of the queueEmail table, stores the email to send
    - [Redirection](src/Row/Redirection.php) | Class to work with row of the redirection table
    - [Session](src/Row/Session.php) | Class to work with row of the session table
    - [User](src/Row/User.php) | Class for a row of the user table
    - [_log](src/Row/_log.php) | Trait that adds log-related methods to a row
    - [_new](src/Row/_new.php) | That that grants access some methods which allows to create rows statically
    - [_queue](src/Row/_queue.php) | Trait that adds queuing-related methods to a row
- [Rows](src/Rows.php)
- [RowsIndex](src/RowsIndex.php)
- [Segment](src/Segment)
    - [_boolean](src/Segment/_boolean.php) | Trait that issues a method to deal with boolean route segment (1 or 0)
    - [_col](src/Segment/_col.php) | Trait to manage a route segment which must contain a column name or object
    - [_colRelation](src/Segment/_colRelation.php) | Trait to work with a route segment which must contain a column with a relation
    - [_cols](src/Segment/_cols.php) | Trait to manage a route segment which must contain many columns
    - [_direction](src/Segment/_direction.php) | Trait to deal with a route segment which must contain a sorting direction
    - [_filter](src/Segment/_filter.php) | Trait to manage a complex route segment which contains filtering directive
    - [_int](src/Segment/_int.php) | Trait that issues a method to deal with a simple integer route segment
    - [_limit](src/Segment/_limit.php) | Trait that issues a method to deal with a limit route segment (max per page)
    - [_order](src/Segment/_order.php) | Trait to manage a route segment which must contain an orderable column
    - [_orderColRelation](src/Segment/_orderColRelation.php) | Trait to work with route segment which must contain an orderable column relation
    - [_orderTableRelation](src/Segment/_orderTableRelation.php) | Trait to manage a route segment which must contain an orderable table relation
    - [_page](src/Segment/_page.php) | Trait that issues a method to deal with a page route segment (page number)
    - [_pointer](src/Segment/_pointer.php) | Trait to work with a pointer route segment (value which contains a table and row)
    - [_primaries](src/Segment/_primaries.php) | Trait to deal with a route segment which must contain many rows
    - [_primary](src/Segment/_primary.php) | Trait to work with a route segment which must contain a row id or object
    - [_selected](src/Segment/_selected.php) | Trait that provides logic to deal with a route segment which represents a selected value
    - [_slug](src/Segment/_slug.php) | Trait that issues methods to work with a standard slug route segment
    - [_str](src/Segment/_str.php) | Trait that issues a method to deal with a simple string route segment
    - [_table](src/Segment/_table.php) | Trait to work with a route segment which must contain a table name or object
    - [_timestamp](src/Segment/_timestamp.php) | Trait to deal with a route segment which contains a timestamp
    - [_timestampMonth](src/Segment/_timestampMonth.php) | Trait to work with a route segment which contains the timestamp of a month
    - [_yes](src/Segment/_yes.php) | Trait that issues a method to deal with yes route segment (1)
- [Service](src/Service.php)
    - [ClassUpload](src/Service/ClassUpload.php) | Class that provides methods to use verot/class.upload.php for resizing images
    - [JShrink](src/Service/JShrink.php) | Class that provides methods to use tedivm/jshrink for minifying javascript
    - [Ldap](src/Service/Ldap.php) | Class that grants some methods to connect to a ldap server
    - [PhpConcatenator](src/Service/PhpConcatenator.php) | Class used for concatenating a bunch of php files within a single one
    - [PhpMailer](src/Service/PhpMailer.php) | Class that provides methods to use phpmailer/phpmailer in order to send emails
    - [ScssPhp](src/Service/ScssPhp.php) | Class that grants methods to use leafo/scssphp for compiling scss files
- [ServiceMailer](src/ServiceMailer.php)
- [ServiceRequest](src/ServiceRequest.php)
- [ServiceVideo](src/ServiceVideo.php)
- [Services](src/Services.php)
- [Session](src/Session.php)
- [Table](src/Table.php)
- [Tables](src/Tables.php)
- [Widget](src/Widget.php)
    - [Calendar](src/Widget/Calendar.php) | Class that provides logic for the calendar widget
- [_access](src/_access.php)
- [_bootAccess](src/_bootAccess.php)
- [_dbAccess](src/_dbAccess.php)
- [_fullAccess](src/_fullAccess.php)
- [_routeAttr](src/_routeAttr.php)

## JavaScript
**QuidPHP/Core** also contains 0 javascript files. Here is an overview:
- Lorem ipsum

## SCSS
**QuidPHP/Core** also contains 0 scss files. Here is an overview:
- Lorem ipsum