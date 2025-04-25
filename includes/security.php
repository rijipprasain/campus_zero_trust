<?php
function verifyDevice($user, $input_device) {
    $devices = array_filter([$user['trusted_device_1'], $user['trusted_device_2']]);
    return in_array(strtolower($input_device), array_map('strtolower', $devices));
}

function verifyLocation($user, $input_country) {
    return strtolower($input_country) === strtolower($user['allowed_country']);
}
?>