<?php
const SUBSCRIPTIONS_FILE = 'subscriptions.ser';

function allSubscriptions()
{
    if (!file_exists(SUBSCRIPTIONS_FILE)) {
        return [];
    }

    $fileContent = file_get_contents(SUBSCRIPTIONS_FILE);
    $subscriptions = unserialize($fileContent);

    return $subscriptions ? $subscriptions : [];
}

function addSubscription($params)
{
    $subscriptions = allSubscriptions();
    $subscriptions[] = $params;
    file_put_contents(SUBSCRIPTIONS_FILE, serialize($subscriptions));
}
?>
