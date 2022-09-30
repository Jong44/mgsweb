<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
|  Google API Configuration
| -------------------------------------------------------------------
| 
| To get API details you have to create a Google Project
| at Google API Console (https://console.developers.google.com)
| 
|  client_id         string   Your Google API Client ID.
|  client_secret     string   Your Google API Client secret.
|  redirect_uri      string   URL to redirect back to after login.
|  application_name  string   Your Google application name.
|  api_key           string   Developer key.
|  scopes            string   Specify scopes
*/
$config['google']['client_id']        = '234935343057-fksqccf3gapio6bslves50pp45hjlhce.apps.googleusercontent.com';
$config['google']['client_secret']    = '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';
$config['google']['redirect_uri']     = 'http://localhost/mgsweb/user/career/';
$config['google']['application_name'] = 'careerWeb';
$config['google']['api_key']          = '';
$config['google']['scopes']           = array();