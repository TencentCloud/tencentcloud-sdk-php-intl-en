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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OAuth configuration information.
 *
 * @method boolean getOAuthEnable() Obtain Specifies whether to turn on or off authentication.
True: enable.
False: disabled.
Disabled by default.
 * @method void setOAuthEnable(boolean $OAuthEnable) Set Specifies whether to turn on or off authentication.
True: enable.
False: disabled.
Disabled by default.
 * @method string getOAuthFailureStatus() Obtain Deny requests or allow when all iaps fail.
BYPASS: specifies the bypass.
REJECT.
Defaults to BYPASS.
 * @method void setOAuthFailureStatus(string $OAuthFailureStatus) Set Deny requests or allow when all iaps fail.
BYPASS: specifies the bypass.
REJECT.
Defaults to BYPASS.
 */
class OAuth extends AbstractModel
{
    /**
     * @var boolean Specifies whether to turn on or off authentication.
True: enable.
False: disabled.
Disabled by default.
     */
    public $OAuthEnable;

    /**
     * @var string Deny requests or allow when all iaps fail.
BYPASS: specifies the bypass.
REJECT.
Defaults to BYPASS.
     */
    public $OAuthFailureStatus;

    /**
     * @param boolean $OAuthEnable Specifies whether to turn on or off authentication.
True: enable.
False: disabled.
Disabled by default.
     * @param string $OAuthFailureStatus Deny requests or allow when all iaps fail.
BYPASS: specifies the bypass.
REJECT.
Defaults to BYPASS.
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
        if (array_key_exists("OAuthEnable",$param) and $param["OAuthEnable"] !== null) {
            $this->OAuthEnable = $param["OAuthEnable"];
        }

        if (array_key_exists("OAuthFailureStatus",$param) and $param["OAuthFailureStatus"] !== null) {
            $this->OAuthFailureStatus = $param["OAuthFailureStatus"];
        }
    }
}
