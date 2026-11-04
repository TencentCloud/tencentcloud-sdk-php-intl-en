<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OAuth 2.0 authorization information
 *
 * @method string getAuthorizationUrl() Obtain url address of the OAuth service provider authorization page
 * @method void setAuthorizationUrl(string $AuthorizationUrl) Set url address of the OAuth service provider authorization page
 * @method string getClientId() Obtain Client ID
 * @method void setClientId(string $ClientId) Set Client ID
 * @method string getClientSecret() Obtain Client Key
 * @method void setClientSecret(string $ClientSecret) Set Client Key
 * @method array getScopeList() Obtain Data scope for the authorization request
 * @method void setScopeList(array $ScopeList) Set Data scope for the authorization request
 * @method string getTokenUrl() Obtain url address for obtaining the access token
 * @method void setTokenUrl(string $TokenUrl) Set url address for obtaining the access token
 */
class OAuthConfig extends AbstractModel
{
    /**
     * @var string url address of the OAuth service provider authorization page
     */
    public $AuthorizationUrl;

    /**
     * @var string Client ID
     */
    public $ClientId;

    /**
     * @var string Client Key
     */
    public $ClientSecret;

    /**
     * @var array Data scope for the authorization request
     */
    public $ScopeList;

    /**
     * @var string url address for obtaining the access token
     */
    public $TokenUrl;

    /**
     * @param string $AuthorizationUrl url address of the OAuth service provider authorization page
     * @param string $ClientId Client ID
     * @param string $ClientSecret Client Key
     * @param array $ScopeList Data scope for the authorization request
     * @param string $TokenUrl url address for obtaining the access token
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AuthorizationUrl",$param) and $param["AuthorizationUrl"] !== null) {
            $this->AuthorizationUrl = $param["AuthorizationUrl"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("ClientSecret",$param) and $param["ClientSecret"] !== null) {
            $this->ClientSecret = $param["ClientSecret"];
        }

        if (array_key_exists("ScopeList",$param) and $param["ScopeList"] !== null) {
            $this->ScopeList = $param["ScopeList"];
        }

        if (array_key_exists("TokenUrl",$param) and $param["TokenUrl"] !== null) {
            $this->TokenUrl = $param["TokenUrl"];
        }
    }
}
