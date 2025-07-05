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
 * @method boolean getOAuthEnable() Obtain Enable or disable authentication.True: Enable;False: Disable.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOAuthEnable(boolean $OAuthEnable) Set Enable or disable authentication.True: Enable;False: Disable.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOAuthFailureStatus() Obtain Whether to reject or allow the request if all IAPs fail. BYPASS: Allow;REJECT: Reject.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOAuthFailureStatus(string $OAuthFailureStatus) Set Whether to reject or allow the request if all IAPs fail. BYPASS: Allow;REJECT: Reject.Note: This field may return null, indicating that no valid values can be obtained.
 */
class OAuth extends AbstractModel
{
    /**
     * @var boolean Enable or disable authentication.True: Enable;False: Disable.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OAuthEnable;

    /**
     * @var string Whether to reject or allow the request if all IAPs fail. BYPASS: Allow;REJECT: Reject.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OAuthFailureStatus;

    /**
     * @param boolean $OAuthEnable Enable or disable authentication.True: Enable;False: Disable.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OAuthFailureStatus Whether to reject or allow the request if all IAPs fail. BYPASS: Allow;REJECT: Reject.Note: This field may return null, indicating that no valid values can be obtained.
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
