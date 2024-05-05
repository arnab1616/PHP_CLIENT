<?php
        function fetchIpAddress() {
        $ipApiUrl = 'https://api.ipify.org?format=json';
        $response = file_get_contents($ipApiUrl);
        if ($response !== false) {
            $data = json_decode($response, true);
            return $data['ip'];
        } else {
            return null;
        }
        }

        function getGeolocation($ip) {
        $geoApiUrl = "https://ipapi.co/$ip/json/";
        $response = file_get_contents($geoApiUrl);
        if ($response !== false) {
            $data = json_decode($response, true);
            return [
            'city' => $data['city'],
            'region' => $data['region'],
            'country' => $data['country_name'],
            'latitude' => $data['latitude'],
            'longitude' => $data['longitude'],
            ];
        } else {
            return null;
        }
        }

        function fetchUserLocation() {
        $ipAddress = fetchIpAddress();
        if ($ipAddress) {
            $locationData = getGeolocation($ipAddress);
            if ($locationData) {
            echo 'User Location: ' . print_r($locationData, true);
            
            // Set cookie
            // setcookie('userLocation', json_encode($locationData), time() + 365 * 24 * 60 * 60, '/');
            } else {
            echo 'Error fetching geolocation.';
            }
        } else {
            echo 'Error fetching IP address.';
        }
        }

        fetchUserLocation();
    ?>