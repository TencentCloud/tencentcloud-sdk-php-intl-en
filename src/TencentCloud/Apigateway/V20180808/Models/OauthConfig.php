<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OAuth authorization configuration information
 *
 * @method string getPublicKey() Obtain Public key for user token verification.
 * @method void setPublicKey(string $PublicKey) Set Public key for user token verification.
 * @method string getTokenLocation() Obtain Token delivery location.
 * @method void setTokenLocation(string $TokenLocation) Set Token delivery location.
 * @method string getLoginRedirectUrl() Obtain Redirect address, which is used to guide user logins.
 * @method void setLoginRedirectUrl(string $LoginRedirectUrl) Set Redirect address, which is used to guide user logins.
 */
class OauthConfig extends AbstractModel
{
    /**
     * @var string Public key for user token verification.
     */
    public $PublicKey;

    /**
     * @var string Token delivery location.
     */
    public $TokenLocation;

    /**
     * @var string Redirect address, which is used to guide user logins.
     */
    public $LoginRedirectUrl;

    /**
     * @param string $PublicKey Public key for user token verification.
     * @param string $TokenLocation Token delivery location.
     * @param string $LoginRedirectUrl Redirect address, which is used to guide user logins.
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
        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }

        if (array_key_exists("TokenLocation",$param) and $param["TokenLocation"] !== null) {
            $this->TokenLocation = $param["TokenLocation"];
        }

        if (array_key_exists("LoginRedirectUrl",$param) and $param["LoginRedirectUrl"] !== null) {
            $this->LoginRedirectUrl = $param["LoginRedirectUrl"];
        }
    }
}
