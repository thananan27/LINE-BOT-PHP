<?php
$access_token = 'z+NI9cKbWu9wprSHuvta4EV+kfMhnintttWNxhYyErPoIvVOP/2yw7Zt2OS6JxI78U1/jn2reZAyutSTuGAPLOvfLg3jlakTRw8cb20yAVXrvs0RqYFzarIVHXA533mGLs43tttDzr0XlPk4ChldqwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
