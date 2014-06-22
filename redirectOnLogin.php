<?php
if ($modx->event->name !== 'OnWebLogin')
    return;
$usergroups = $user->getUserGroupNames();
if(empty($usergroups))
    return;
switch (TRUE) {
	//add own cases
    case in_array('gebruikers', $usergroups):
        $resource_id = '2';
        break;
    default:
        $resource_id = '1';
        break;
}
$url = $modx->makeUrl($resource_id);
$modx->sendRedirect($url);
return;