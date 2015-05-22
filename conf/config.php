<?php if (!defined('APPLICATION')) exit();

// Conversations
$Configuration['Conversations']['Version'] = '2.1.6';

// Database
$Configuration['Database']['Name'] = 'multitoa_vani169';
$Configuration['Database']['Host'] = 'localhost';
$Configuration['Database']['User'] = 'multitoa_vani169';
$Configuration['Database']['Password'] = '.(P0p596ES';

// EnabledApplications
$Configuration['EnabledApplications']['Conversations'] = 'conversations';
$Configuration['EnabledApplications']['Vanilla'] = 'vanilla';
$Configuration['EnabledApplications']['Yaga'] = 'yaga';

// EnabledPlugins
$Configuration['EnabledPlugins']['HtmLawed'] = 'HtmLawed';
$Configuration['EnabledPlugins']['VanillaInThisDiscussion'] = TRUE;
$Configuration['EnabledPlugins']['Gravatar'] = TRUE;
$Configuration['EnabledPlugins']['Emotify'] = TRUE;
$Configuration['EnabledPlugins']['ProfileExtender'] = TRUE;
$Configuration['EnabledPlugins']['Tagging'] = TRUE;
$Configuration['EnabledPlugins']['VanillaStats'] = TRUE;
$Configuration['EnabledPlugins']['AllViewed'] = TRUE;
$Configuration['EnabledPlugins']['OnlineNow'] = TRUE;
$Configuration['EnabledPlugins']['Quotes'] = TRUE;
$Configuration['EnabledPlugins']['PostCount'] = TRUE;
$Configuration['EnabledPlugins']['YagaRankInMeta'] = TRUE;
$Configuration['EnabledPlugins']['jsconnect'] = TRUE;
$Configuration['EnabledPlugins']['DiscussionPolls'] = TRUE;
$Configuration['EnabledPlugins']['FileUpload'] = TRUE;
$Configuration['EnabledPlugins']['RoleTitle'] = TRUE;
$Configuration['EnabledPlugins']['MyYagaPoints'] = TRUE;
$Configuration['EnabledPlugins']['cleditor'] = TRUE;
$Configuration['EnabledPlugins']['InfiniteScroll'] = TRUE;

// Garden
$Configuration['Garden']['Title'] = 'Multitoad';
$Configuration['Garden']['Cookie']['Salt'] = 'EDUN6YRUXD';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Registration']['ConfirmEmail'] = '1';
$Configuration['Garden']['Registration']['ApplicantRoleID'] = 0;
$Configuration['Garden']['Registration']['DefaultRoles'] = array('5');
$Configuration['Garden']['Registration']['ConfirmEmailRole'] = '1';
$Configuration['Garden']['Registration']['Method'] = 'Captcha';
$Configuration['Garden']['Registration']['CaptchaPrivateKey'] = '6Lc0FQUTAAAAAECBe0H6i5zr0WOl4jxhNC_UWWjS';
$Configuration['Garden']['Registration']['CaptchaPublicKey'] = '6Lc0FQUTAAAAAHOwEc39tcZePppXzm5PuLPDDv06';
$Configuration['Garden']['Registration']['InviteExpiration'] = '-1 week';
$Configuration['Garden']['Registration']['InviteRoles']['1'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['5'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['2'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['3'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['4'] = '0';
$Configuration['Garden']['Email']['SupportName'] = 'Multitoad';
$Configuration['Garden']['InputFormatter'] = 'Html';
$Configuration['Garden']['Html']['SafeStyles'] = FALSE;
$Configuration['Garden']['Version'] = '2.1.6';
$Configuration['Garden']['RewriteUrls'] = TRUE;
$Configuration['Garden']['Cdns']['Disable'] = FALSE;
$Configuration['Garden']['CanProcessImages'] = TRUE;
$Configuration['Garden']['SystemUserID'] = '2';
$Configuration['Garden']['Installed'] = TRUE;
$Configuration['Garden']['InstallationID'] = 'B2B0-7191D6FB-599AAEBC';
$Configuration['Garden']['InstallationSecret'] = '3a360fbdefb08249f0f18d362d623a56be5ea8f4';
$Configuration['Garden']['Format']['Hashtags'] = FALSE;
$Configuration['Garden']['Theme'] = 'multitoad';
$Configuration['Garden']['Embed']['Allow'] = TRUE;
$Configuration['Garden']['Embed']['RemoteUrl'] = 'http://multitoad.com/discussions-2/';
$Configuration['Garden']['EditContentTimeout'] = '3600';
$Configuration['Garden']['Messages']['Cache'] = array('[Base]', 'Vanilla/Discussions/Index');
$Configuration['Garden']['Thumbnail']['Size'] = 100;

// InfiniteScroll
$Configuration['InfiniteScroll']['Discussion'] = '';
$Configuration['InfiniteScroll']['DiscussionList'] = '1';
$Configuration['InfiniteScroll']['Mobile'] = '1';
$Configuration['InfiniteScroll']['Hotkey'] = 'j';
$Configuration['InfiniteScroll']['NavPosition'] = '2';
$Configuration['InfiniteScroll']['NavStyle'] = '0';
$Configuration['InfiniteScroll']['ProgressColor'] = 'transparent';

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';
$Configuration['Plugins']['GettingStarted']['Plugins'] = '1';
$Configuration['Plugins']['GettingStarted']['Categories'] = '1';
$Configuration['Plugins']['GettingStarted']['Discussion'] = '1';
$Configuration['Plugins']['GettingStarted']['Profile'] = '1';
$Configuration['Plugins']['GettingStarted']['Registration'] = '1';
$Configuration['Plugins']['DiscussionPolls']['EnableShowResults'] = '1';
$Configuration['Plugins']['DiscussionPolls']['DisablePollTitle'] = FALSE;
$Configuration['Plugins']['FileUpload']['Enabled'] = TRUE;
$Configuration['Plugins']['OnlineNow']['Frequency'] = '180';
$Configuration['Plugins']['OnlineNow']['Location']['Show'] = 'every';
$Configuration['Plugins']['OnlineNow']['Hide'] = FALSE;
$Configuration['Plugins']['KarmaBank']['Version'] = '0.9.7.3b';
$Configuration['Plugins']['KarmaBank']['Enabled'] = TRUE;
$Configuration['Plugins']['KarmaBank']['StartingBalance'] = '1.00';
$Configuration['Plugins']['KarmaBank']['CommentShowBalance'] = FALSE;
$Configuration['Plugins']['Signatures']['HideGuest'] = '';
$Configuration['Plugins']['Signatures']['HideEmbed'] = '1';
$Configuration['Plugins']['Signatures']['AllowImages'] = '';
$Configuration['Plugins']['Formatting']['Enabled'] = FALSE;

// ProfileExtender
$Configuration['ProfileExtender']['Fields']['SteamUsername']['FormType'] = 'TextBox';
$Configuration['ProfileExtender']['Fields']['SteamUsername']['Label'] = 'Steam Username';
$Configuration['ProfileExtender']['Fields']['SteamUsername']['Options'] = '';
$Configuration['ProfileExtender']['Fields']['SteamUsername']['OnRegister'] = '1';
$Configuration['ProfileExtender']['Fields']['SteamUsername']['OnProfile'] = '1';
$Configuration['ProfileExtender']['Fields']['SteamUsername']['Required'] = FALSE;
$Configuration['ProfileExtender']['Fields']['XboxGamertag']['FormType'] = 'TextBox';
$Configuration['ProfileExtender']['Fields']['XboxGamertag']['Label'] = 'Xbox Gamertag';
$Configuration['ProfileExtender']['Fields']['XboxGamertag']['Options'] = '';
$Configuration['ProfileExtender']['Fields']['XboxGamertag']['OnRegister'] = '1';
$Configuration['ProfileExtender']['Fields']['XboxGamertag']['OnProfile'] = '1';
$Configuration['ProfileExtender']['Fields']['XboxGamertag']['Required'] = FALSE;
$Configuration['ProfileExtender']['Fields']['NintendoID']['FormType'] = 'TextBox';
$Configuration['ProfileExtender']['Fields']['NintendoID']['Label'] = 'Nintendo ID';
$Configuration['ProfileExtender']['Fields']['NintendoID']['Options'] = '';
$Configuration['ProfileExtender']['Fields']['NintendoID']['OnRegister'] = '1';
$Configuration['ProfileExtender']['Fields']['NintendoID']['OnProfile'] = '1';
$Configuration['ProfileExtender']['Fields']['NintendoID']['Required'] = FALSE;
$Configuration['ProfileExtender']['Fields']['PSNOnlineID']['FormType'] = 'TextBox';
$Configuration['ProfileExtender']['Fields']['PSNOnlineID']['Label'] = 'PSN Online ID';
$Configuration['ProfileExtender']['Fields']['PSNOnlineID']['Options'] = '';
$Configuration['ProfileExtender']['Fields']['PSNOnlineID']['OnProfile'] = '1';
$Configuration['ProfileExtender']['Fields']['PSNOnlineID']['Required'] = FALSE;
$Configuration['ProfileExtender']['Fields']['PSNOnlineID']['OnRegister'] = '1';
$Configuration['ProfileExtender']['Fields']['PSNOnlineID']['Name'] = 'PSNOnlineID';

// Routes
$Configuration['Routes']['DefaultController'] = array('discussions', 'Internal');

// Vanilla
$Configuration['Vanilla']['Version'] = '2.1.6';
$Configuration['Vanilla']['Discussions']['Layout'] = 'table';
$Configuration['Vanilla']['Discussions']['PerPage'] = '30';
$Configuration['Vanilla']['Categories']['Layout'] = 'table';
$Configuration['Vanilla']['Comments']['AutoRefresh'] = NULL;
$Configuration['Vanilla']['Comments']['PerPage'] = '30';
$Configuration['Vanilla']['Archive']['Date'] = '';
$Configuration['Vanilla']['Archive']['Exclude'] = FALSE;
$Configuration['Vanilla']['AdminCheckboxes']['Use'] = FALSE;
$Configuration['Vanilla']['Discussion']['SpamCount'] = '3';
$Configuration['Vanilla']['Discussion']['SpamTime'] = '60';
$Configuration['Vanilla']['Discussion']['SpamLock'] = '120';
$Configuration['Vanilla']['Comment']['SpamCount'] = '5';
$Configuration['Vanilla']['Comment']['SpamTime'] = '60';
$Configuration['Vanilla']['Comment']['SpamLock'] = '120';
$Configuration['Vanilla']['Comment']['MaxLength'] = '20000';

// Yaga
$Configuration['Yaga']['Version'] = '1.0.3';
$Configuration['Yaga']['Reactions']['Enabled'] = '1';
$Configuration['Yaga']['Badges']['Enabled'] = '1';
$Configuration['Yaga']['Ranks']['Enabled'] = '1';
$Configuration['Yaga']['Ranks']['Photo'] = '/uploads/yaga/42LDYMMS7TET.jpg';
$Configuration['Yaga']['LeaderBoard']['Enabled'] = '1';
$Configuration['Yaga']['LeaderBoard']['Limit'] = '8';

// Last edited by JAGYOOAR (199.191.110.60)2015-05-22 15:02:04
