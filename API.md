# API Latest Releases
## 5.30.3 (2021-5-27)
**May 27, 2021**
**Enhancements**
*   Added better descriptions to "Add Auto Attendant" form for drop downs
**Bug Fixes**
*   Auto attendant white screen 
*   Auto attendant console error when deleting an announcement
*   Feature access codes updated with better code to prevent react warnings
**Upgraded to React**
*   Group auto attendant menu

<br><br>
## 5.30.2 (2021-5-22)
### Patches 

- Allow device update for SCA bulk actions

<br><br>
## 5.30.1 (2021-5-21)
### Patches 

- Added throwable for user settings

<br><br>
## 5.30.0 (2021-5-21)
### Minor Changes 

- Upgrade from Laravel 5.7 to 5.8
- Upgrade Laravel from 5.8 to 6.0. Few changes as we were proactive in following Laravel suggestions.
- Upgrade CORS
- Upgrade CORS take 2... with a lot of testing. Postman. UI, including Service Provider, Group, Department and Users. View, Add, Update, and Delete.
- Upgrade to 5.8
- Upgrade to 6.x
- Fix code to upgrade to 6.x
- Fix code to upgrade to 7.x
- Keeping Laravel 7,x up to date with changes to the API
- Here&#39;s the update composer files. Compoer 2 is required.
- Fixed exception error handling function.
- Added settings to e911 pull from db
- Added endpoints for e911
- Added logic for user settings
- Added departments module
- Department now can remove a parent department
- Fixed PR for Department
- Set pilotUserId to string
- Allow Group Admins to clone Auto Attendants

### Patches 

- Hot fix alternateTrunkIdentity
- Hot fix alternateTrunkIdentity
- Tablename callback templates fixed
- Acl::adde ACL for user
- Added primery info and public cluster login request
- Allow access device update for SCA

**May 21, 2021**
**Enhancements**
*   Added a classname of panelTitle to the panel header on the dashboards to help override the default text with branding
*   Added e911 component to the user level dashboard that redirects to e911 url
**Bug Fixes**
*   Create group admin would redirect to a blank page
*   Group calling plans individual options were not hiding when deselecting in branding, added a fix to hide the options that are not displayed as 'read'
*   Pilot user id is converted to string
*   CLID address can be set to "none" on the group business profile
*   Edit group business profile link fixed
*   Contact name when changing would cause a white screen for group business profile
*   Address input field would cause a white screen when changing on user profile
*   Enterprise dashboard now reflects what policies are allowed per enterprise admin -- business profile was not responding to these changes
*   Trunk group reroute fixed
**Upgraded to React**
*   Group trunk group
*   Group business profile
*   Group Auto Attendant
*   Group Departments

<br><br>
## 5.29.2 (2021-5-11)
sync with web patch for is pilot user id true or false

<br><br>
## 5.29.1 (2021-5-11)
### Patches 

- Hot fix alternateTrunkIdentity

<br><br>
## 5.29.0 (2021-5-7)
### Minor Changes 

- Password reset userId password expire days bypass
- Token Bypass for password reset
- Added assigned list api endpoint for group dashboard
- Added user modify group id bulk
- Changed blacklist from version 24 to 22 for aim import of group/user level services
- Added blacklist for group service import
- Fix OCI call for Voice Messaging Greetings.
- Added requirement newGroupId for userModifyGroupId Task
- Surgemail base
- Added Start Time and Answer Time UTC to response. Browser will display local time.
- Cleaned up Webex Integration endpoints

### Patches 

- Fixed settings api

<br><br>
## 5.28.2 (2021-4-21)
### Patches 

- Created flexibility and efficiency for odin system settings.

<br><br>
## 5.28.1 (2021-4-14)
### Patches 

- Fixed broken comman parenthesis

<br><br>
## 5.28.0 (2021-4-14)
### Minor Changes 

- Added enterprises for webex
- Added sers and enterprises to webex
- Updated OAuth2 webex connector
- Updated webex odin api
- Changed users to subscribers
- Removed users.php
- Webex OAuth2 integration
- Task engine webex
- Added webex verify
- Created webex endpoints to execute actions into webex from odin
- Add email verify with webex and BW
- Added service provider exists so it doesn&#39;t ovewrite the profile on the serice provider
- Alternative to overwriting service provider
- Switched Arr::get to data_get
- Added Report Interface
- Added cloud build develop
- Added user service settings endpoint

### Patches 

- Webex code
- Moved construct to top of class
- Removed commented code
- Removed unused use statement
- Removed users concat doesn&#39;t apply in description
- Refactored code to be more flexible. Move functionality out of Controller and into a Class.

<br><br>
## 5.27.0 (2021-4-12)
### Minor Changes 

- Added task reporting engine

### Patches 

- Added service provider exists so it doesn&#39;t ovewrite the profile on the serice provider
- Group call center removed depracated code
- Moved construct to top of class
- Switched Arr::get to data_get
- Fixed data_get
- Added Report Interface
- Removed unused use statement
- Removed users concat doesn&#39;t apply in description

<br><br>
## 5.26.8 (2021-4-8)
### Patches 

- Fixed user department inventory
- Added check for allow password reset username

<br><br>
## 5.26.7 (2021-4-6)
### Patches 

- Fixed user inventory query to account for inTrunkGroup and department

<br><br>
## 5.26.6 (2021-4-6)
### Patches 

- Changed retries from 4 to 6 for inventory

<br><br>
## 5.26.5 (2021-4-5)
### Patches 

- Added details to users and groups inventory

<br><br>
## 5.26.4 (2021-4-2)
### Patches 

- Moved to jobs from events to process data
- Added jobs for inventory

<br><br>
## 5.26.3 (2021-4-1)
### Patches 

- Added retry queue

<br><br>
## 5.26.2 (2021-3-31)
### Patches 

- Added agent unavailable code for user access
- Added integrated IMP callback migration
- Refresh session token before token check

<br><br>
## 5.26.1 (2021-3-24)
### Patches 

- Added service provider trunk group call capacity to inventory
- Added group trunk group capacity to inventory

<br><br>
## 5.26.0 (2021-3-23)
### Minor Changes 

- Voice portal calling callback
- Added voice portal calling callback and api v1 support
March 23rd 2021
 

### Enhancements

- Quality of life updates for Sip Trunking small component enhancements and tweaks
- Added a new feature: Voice Portal Calling
- Created a new callback for Voice Portal Calling - can be turned off to set Voice Portal Calling to inactive when assigning it or vice versa
- Agent unavailable codes was added as a service
- Added Emergency Call Notification to SYS/ENT/SP/GRP Dashboards for BroadWorks version 23.
 
### Bug Fixes

- Small typo fixed when searching for any service/user/ect.
- VDM quick link no longer displays on dashboard if it is not active
- Corrected display of select supervisors from assigned agents for call centers to LastName, FirstName to (previously displayed as "FirstName, LastName)
- Emergency call notification service no longer displays blank screen
- Removed AIM from displaying twice in the left hand menu
- Agent Unavailable Codes - fixed form submission error
- Agent Unavailable Codes - UI bug fixed involving the active switch button
 
### Upgrades

- User flexible seating host has been upgraded to React.
- User Calling Plans Auth Codes has been upgraded to React
- UI has been updated to include Required * fields
- UI has been updated to change cursor to "pointer" when hovering over delete code button
- Flexible Seating Guest has been upgraded to React
- User Profile has been upgraded to React.
- CLID names can no longer be updated as a User level login
- Required fields now have a * to indicated which are required

<br><br>
## 5.25.0 (2021-3-17)
sync with web

<br><br>
## 5.24.0 (2021-3-17)
sync with api

<br><br>
## 5.23.0 (2021-3-17)
### Minor Changes 

- Return if service provider id is already the same from profile do not try to create

<br><br>
## 5.22.8 (2021-3-16)
sync with web

<br><br>
## 5.22.7 (2021-3-16)
sync with odinweb

<br><br>
## 5.22.6 (2021-3-16)
sync with web

<br><br>
## 5.22.5 (2021-3-11)
### Patches 

- Strpos for faster processing

<br><br>
## 5.22.4 (2021-3-11)
### Patches 

- Fixed the groupTable delete
- Fixed minUpdate function in models
- Fixed integer returns on serviceProviderId and groupId
- Added string conversion to broadworks ids that are coming back is integer
- Added locationDialingCode and zipOrPostalCode to string conversion
- Fixed key lookup special columns

<br><br>
## 5.22.3 (2021-3-11)
### Patches 

- Fixed tblUsers minUpdated delete

<br><br>
## 5.22.2 (2021-3-11)
### Patches 

- Delete by now date group and user inventory

<br><br>
## 5.22.1 (2021-3-11)
### Patches 

- Added min updated as delete for inventory

<br><br>
## 5.22.0 (2021-3-11)
### Minor Changes 

- Reporting/Inventory queue added to api tools

<br><br>
## 5.21.0 (2021-3-9)
sync with odinweb

<br><br>
## 5.20.3 (2021-3-9)
### Patches 

- Added trunk group call capacity to clone

<br><br>
## 5.20.2 (2021-3-4)
### Patches 

- Fixed url https for phonism device management

<br><br>
## 5.20.1 (2021-3-3)
### Patches 

- Fixed is-active for connector

<br><br>
## 5.20.0 (2021-3-3)
### Minor Changes 

- Added branding module phonism disabled by default

<br><br>
## 5.19.9 (2021-3-3)
### sync with odin web 

- #867 service calling plans changes
- Group Calling Plans Menu Fix

<br><br>
## 5.19.8 (2021-3-3)
- sync with odinweb
- Alternate Numbers TN field caused logout on User login

<br><br>
## 5.19.7 (2021-3-3)
### Patches 

- Added base classes for webex

<br><br>
## 5.19.6 (2021-3-2)
sync with odinweb

<br><br>
## 5.19.5 (2021-3-2)
sync with odin web

<br><br>
## 5.19.4 (2021-3-2)
### Patches 

-sync with API server

<br><br>
## 5.19.3 (2021-2-24)
### Patches 

> fixed the json post to phonism where the options are being sent down as a json array of options to phonism client

```php
$res = $this->client->request($method, self::$URL . $url, ['json' => $options]);
```



<br><br>
## 5.19.2 (2021-2-24)
# odin-api release notes

## Mac Address Fix (2021-02-24) (5.19.2) 

>fixed the response of *macAddress* integer to string for macAddresses with only numbers.
>
>This impacted all levels of devices **System**, **ServiceProvider** and **Group**  *devices*.
>
>Example: *macAddress*: **556688995566** is now *macAddress*: **"556688995566"**

Before

```json
{
    "serviceProviderId": "ent.odin",
    "groupId": "grp.odin",
    "deviceName": "1000_1_grp.odin",
    "deviceType": "Polycom VVX 500 DM",
    "protocol": "SIP 2.0",
    "macAddress": 556688995566,
}
```

After
```json
{
    "serviceProviderId": "ent.odin",
    "groupId": "grp.odin",
    "deviceName": "1000_1_grp.odin",
    "deviceType": "Polycom VVX 500 DM",
    "protocol": "SIP 2.0",
    "macAddress": "556688995566",
}

```

<br><br>
## 5.19.1 (2021-2-23)
### Patches 

- Fixed build error with reseller emergency notification

<br><br>
## 5.19.0 (2021-2-23)
5.19.0

<br><br>
## 5.18.0 (2021-2-23)
### Minor Changes 

- Added user in trunk group search option
- Added executive to product module
- Added endpoints for group, reseller and system call notifications
- Fixed bug with multi-tenant reset passwords.
- Removed caching for system domain default
- ConferenceURI needs to be unique when cloning set to null
- Move migration to it&#39;s own PR. We can than get the Resellers and SP/Ent set up before releasing the code.
- Added alertingCallingLineIdPhoneNumberMode exe
- Added fields to Executive response. Also, updated Helper::debug function to show method and class automatically.

<br><br>
## 5.17.1 (2021-1-29)
### Patches 

- Added AIM for executive assistant
- Added call center monitoring AIM agent request

<br><br>
## 5.17.0 (2021-1-28)
### Minor Changes 

- Fixed internal source and source moh
- Fixed logic for auto generate password
- Added user update task
- Moved AIM service packs
- Added password rules to clone
- Merge pull request #159 from parkbenchsolutions/clone/password-rules
- Fixed useServiceProviderDCLIDSetting
- Testing r24 import exclude deprecated services
- 3G/4G Continuity has been removed in r24 aim
- Fixed group services AIM import
- Added deprecated r24 group services
- Removed allowMobileDNForRedirectingIdentity
- Added executive assistant
- Added executive assistants
- Added executive filtering
- Added exective criteria filtering
- Added available users to executive assistant
- Added executive screening and alerting
- Fixed user communication barring delete

<br><br>
## 5.16.0 (2021-1-19)
### Minor Changes 

- Added user-music-onhold-user
- Added unavailable code settings
- Update UserMusicOnHoldController.php
- Update EnterpriseCallCenterAgentUnavailableCodeModifyRequest.blade.php
- Added group service instance privacy
- Added Service Provider Emergency Call Notification
- Added service provider integrated IMP settings
- Added integrated imp service provider
- Added task for user voice messaging
- Added bulk group trunk group create task
- Added call center types to product master table
- Added bulk group trunk group
- Fixed ent call center unavailable agent code settings
- Added isPilotUser to user create
- Added task as setupNumber
- Added premium indicator to product master services
- Added premium enterprse services as indicator intable

<br><br>
## 5.15.1 (2020-12-21)
### Patches 

- Fixed EOD

<br><br>
## 5.15.0 (2020-12-21)
### Minor Changes 

- Added cache to the system domains and the software version
- Fixed call forwarding selective import
- Fixed call forwarding selective AIM import
- Fixed service provider dn AIM import
- Fixed call capacity issues AIM import for new group id
- Service Provider Schedules and Event APIs
- Fixed bug with group incoming calling plans import
- Added clone-aim-api for service provider schedules
- Fixed max failed login attempts and password expires days when updating a zero value
- Fixed cfa for users
- Added error checking for user voice messaging AIM
- Added code for submenu to not abort of fail aim
- Fixed dnis issue for aim
- Added controller and routes
- Added api cor call center agent unavailable
- Remove event comments and added xsd document to Enterprise Call Center Request
- Added api route for enterprise call center enhanced reporting
- Fix service provider schedule aim import
- Fixed enterprise schedules AIM and update function
- Fixed voice messaging portal AIM

<br><br>
## 5.14.2 (2020-12-3)
### Patches 

- Submenu aa aim
- Added branding module service provider call processing policies
- Added Conference URI field
- Added import for submenu code
- Added code to check to see if the dn is assigned during a bulk user create if so ignore the number process

<br><br>
## 5.14.1 (2020-12-1)
### Patches 

- Fixed bug with close

<br><br>
## 5.14.0 (2020-11-30)
### Minor Changes 

- Added timeZone conversion to fix utc client side issue
- AIM fixed speed dial 100 bug when speedCodes is empty
- Checking for criteria selective call acceptance and communictor service on import
- Added update to import of group dn
- Activate dn after assignment
- Added changed for group dn create and group dn update and group create for aim
- Fixed selective call acceptance bug
- Added aim group call center enhanced reporting check
- Added announcement capture for auto attendant

<br><br>
## 5.13.6 (2020-11-18)
### Patches 

- Added group calling plan digit pattern to AIM
- Added 2nd group modify
- Added aim password passcode rules group and service provider

<br><br>
## 5.13.5 (2020-11-16)
Fix Group Extension Audit

<br><br>
## 5.13.4 (2020-11-11)
### Patches 

- Patched password rules ending comma

<br><br>
## 5.13.3 (2020-11-11)
### Patches 

- Added password generator class code
- Added passcode rules password rules generate
- Added sip password generate
- Fixed passcode rules generator for login type
- Fixed user password login for comm pilot

<br><br>
## 5.13.2 (2020-10-30)
### Patches 

- Voice messaging response undefined response bug fixed

<br><br>
## 5.13.1 (2020-10-30)
### Patches 

- Added branding application type
- Added nav bar category
- Added branding modules for group and user calling plans

<br><br>
## 5.13.0 (2020-10-23)
### Minor Changes 

- Fixed media set names
- Added database migration for menu bar
- Added api return for top menu style large and page top menu title

<br><br>
## 5.12.0 (2020-10-16)
### Minor Changes 

- Added new oci call v22v2 for call processing policies
- Service instance profile alias for group level services
- Added device tag events
- Added resource to cloning
- Added delete to brandind resources
- Fixed response for visual voicemail where no messages are found
- Fixed voice messaging when one message is returned
- Fixed account authorization codes for groups
- Added forgot password and reset password to template branding
- Added columns to resetPassword and forgotPassword
- Added group call processing policy version 22
- Added system media support
- Media to Media
- Make email case insensitive
- Added serviceProviderId groupId deviceName to tag change event
- Fixed service provider call processing policy bug for enterprise calls
- Added group call processing policy for 21sp1
- Added group call processing policy call 21sp1
- Added user speed dial 100 bulk task
- Fixed call processing version 22 get request
- Fixed authentication bulk to check if service is assigned
- Merge pull request #101 from parkbenchsolutions/branding/account-auth-codes

### Patches 

- Added system media set name api
- Added speed dial 100 trait
- Merge pull request #100 from parkbenchsolutions/feature/speed-dial-100-002
- Added account auth code admin login history and support to branding

<br><br>
## 5.11.4 (2020-9-30)
### Patches 

- Fixed blacklisted
- Added check for product masters values

<br><br>
## 5.11.3 (2020-9-29)
### Patches 

- Ordered options for group bulk clone

<br><br>
## 5.11.2 (2020-9-25)
sync with api

<br><br>
## 5.11.1 (2020-9-25)
sync with api

<br><br>
## 5.11.0 (2020-9-25)
### Minor Changes 

- Fixed message list for read and unread
- Added service provider delete to product master
- Added visual voicemail to branding
- Added branding modules for enterprise trunk, trunk call capacity, groups, branding, event history, settings, event history, settings

### Patches 

- Fix Pre Alerting IsActive Bug
- Merge pull request #76 from parkbenchsolutions/bug/445-isActive-bug
- Removed mediaContent from json message visual voice mail

<br><br>
## 5.10.17 (2020-9-16)
### Patches 

- Added voice message media content raw, AIM checking if userCustomUserNamePassword === true

<br><br>
## 5.10.16 (2020-9-11)
### Patches 

- Updated Get User to work with Forgot Password

<br><br>
## 5.10.15 (2020-9-9)
### Patches 

- Fixed event logging permissions for service provider id login

<br><br>
## 5.10.14 (2020-9-9)
### Patches 

- Added endpoints, AIM and added missing fields from blade file.
- Added vvm stream
- Added event restictions based on login type
- Added user_login_type restriction for events view
- Added visual voicemail xsi-actions and api endpoints
- Removed debug messages from vvm
- Set verify cert for xsi

<br><br>
## 5.10.13 (2020-9-1)
### Patches 

- Added user id to event history endpoint

<br><br>
## 5.10.12 (2020-8-27)
### Patches 

- Fixed cloudbuild-tag with ending quote

<br><br>
## 5.10.11 (2020-8-27)
### Patches 

- Added AIM to Emergency Zones for System, Reseller, and Group.
- Cleaned up emergency response to simplify payload
- Fixed controller security.
- Blade file needed to be updated to fix the saving of the blacklisted field

<br><br>
## 5.10.10 (2020-8-26)
sync with api

<br><br>
## 5.10.9 (2020-8-21)
### Patches 

- Added detailed product descriptions to branding

<br><br>
## 5.10.8 (2020-8-20)
sync with web

<br><br>
## 5.10.7 (2020-8-20)
sync

<br><br>
## 5.10.6 (2020-8-20)
sync

<br><br>
## 5.10.5 (2020-8-20)
### Patches 

- Added system feature access code and user modify group id
- Added system feature access code to aim
- Removed foreign key restraint from branding emails
- Added foreign key index names to delete list
- Added user authentication change password to event

<br><br>
## 5.10.4 (2020-8-18)
### Patches 

- Added AIM for Supervised Agents
- Added dashboard to branding modules
- Added modules delete group, group web policy, numbers and user call report to branding
- Added panel headers images to branding template
- Added network class of service to branding module
- Added user branding modules and group image template return
- Added branding modules for user calling plans and user service settings add ui panels logs at user level
- Add user quick links panel logo
- Fixed inbound and outbound time user call reports
- Added system password rules and return json object on group password modify

<br><br>
## 5.10.3 (2020-8-4)
### Patches 

- Added Group Account Authorization Codes OCI calls
- Fix formatting and removed debug code
- Group Account Authorization Codes
- Added Group Account/Authorization Codes to AIM

<br><br>
## 5.10.2 (2020-8-3)
### Patches 

- Changed the alternateUserId login pattern

<br><br>
## 5.10.1 (2020-7-29)
### Patches 
- Retry login token for failed ocs_connections
- Added Audit and Import for Pre Alerting
- Initial blade files commit for User Pre Alerting Announcement
- Update pre-alerting
- Added pre-alerting announcement to AIM
- Fix to allow no criteria for a user
- Added push to talk callback
- Added group voice messaging portal callback
- Fixed duplicate criteria on POST call

<br><br>
## 5.10.0 (2020-7-29)
### Minor Changes 

- Initial blade files commit for User Pre Alerting Announcement
- Finished endpoints for User Pre Alerting Announcement
- Added Audit and Import for Pre Alerting
- Added pre-alerting announcement to AIM
- Merge pull request #61 from parkbenchsolutions/feature/418-call-center-renaming
- Fix to allow no criteria for a user

### Patches 

- Update pre-alerting
- Retry login token for failed ocs_connections
- Fixing naming problem with user call centers supervisor agents functions

<br><br>
## 5.9.36 (2020-7-23)
### Patches 

- Added optional fields for user password modify bulk task

<br><br>
## 5.9.35 (2020-7-22)
### Patches 

- Add Endpoints for Call Center Supervisor Agents
- Removed debug message from the log files.
- Added Audit and imports to Call Center Supervisor Agents

<br><br>
## 5.9.34 (2020-7-20)
### Patches 

- Added deviceTags to group list request
- Merge branch &#39;master&#39; into feature/a32-forgot-password-bw-cluster
- Misspelled controller name.
- Added Call to Number Array for all responses: none, one and more than one.
- Merge pull request #49 from parkbenchsolutions/bug/403-call-to-numbers-return-as-array
- Fixed select call acceptance for formatting call to numbers with array. Fixed response with Priority Alerting
- Fixed call to numbers to always be arrays
- Fixed formatting of callsToNumber across all the endpoints
- Fix code formatting
- Fixed bug with changing criteria name
- Update Call To Numbers response to alway be an array
- Fixed the response error when changing name

<br><br>
## 5.9.33 (2020-7-9)
sync with web

<br><br>
## 5.9.32 (2020-7-8)
### Patches 

- SendResetLink

<br><br>
## 5.9.31 (2020-7-8)
### Patches 

- Passing db to password reset

<br><br>
## 5.9.30 (2020-7-8)
### Patches 

- Added Helpers

<br><br>
## 5.9.29 (2020-7-8)
### Patches 

- Debug statements

<br><br>
## 5.9.28 (2020-7-8)
### Patches 

- Added database api user to Send Email

<br><br>
## 5.9.27 (2020-7-8)
### Patches 

- Email event trigger from database

<br><br>
## 5.9.26 (2020-7-8)
### Patches 

- Added db controller for self service controller

<br><br>
## 5.9.25 (2020-7-8)
5.9.25

<br><br>
## 5.9.24 (2020-7-8)
### Patches 

- Fixed cloud build

<br><br>