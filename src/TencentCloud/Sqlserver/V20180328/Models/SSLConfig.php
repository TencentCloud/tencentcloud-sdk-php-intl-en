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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SSL Encryption Configuration
 *
 * @method string getEncryption() Obtain SSL Encryption Status
enable - Enabled
disable - Disabled
enable_doing - Enabling
disable_doing - Disabling
renew_doing - Updating
wait_doing - Waiting to be executed during maintenance window
 * @method void setEncryption(string $Encryption) Set SSL Encryption Status
enable - Enabled
disable - Disabled
enable_doing - Enabling
disable_doing - Disabling
renew_doing - Updating
wait_doing - Waiting to be executed during maintenance window
 * @method string getSSLValidityPeriod() Obtain SSL Certificates Validity Period, Time Format YYYY-MM-DD HH:MM:SS
 * @method void setSSLValidityPeriod(string $SSLValidityPeriod) Set SSL Certificates Validity Period, Time Format YYYY-MM-DD HH:MM:SS
 * @method integer getSSLValidity() Obtain SSL Certificates Validity: 0 - Invalid, 1 - Valid
 * @method void setSSLValidity(integer $SSLValidity) Set SSL Certificates Validity: 0 - Invalid, 1 - Valid
 */
class SSLConfig extends AbstractModel
{
    /**
     * @var string SSL Encryption Status
enable - Enabled
disable - Disabled
enable_doing - Enabling
disable_doing - Disabling
renew_doing - Updating
wait_doing - Waiting to be executed during maintenance window
     */
    public $Encryption;

    /**
     * @var string SSL Certificates Validity Period, Time Format YYYY-MM-DD HH:MM:SS
     */
    public $SSLValidityPeriod;

    /**
     * @var integer SSL Certificates Validity: 0 - Invalid, 1 - Valid
     */
    public $SSLValidity;

    /**
     * @param string $Encryption SSL Encryption Status
enable - Enabled
disable - Disabled
enable_doing - Enabling
disable_doing - Disabling
renew_doing - Updating
wait_doing - Waiting to be executed during maintenance window
     * @param string $SSLValidityPeriod SSL Certificates Validity Period, Time Format YYYY-MM-DD HH:MM:SS
     * @param integer $SSLValidity SSL Certificates Validity: 0 - Invalid, 1 - Valid
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
        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = $param["Encryption"];
        }

        if (array_key_exists("SSLValidityPeriod",$param) and $param["SSLValidityPeriod"] !== null) {
            $this->SSLValidityPeriod = $param["SSLValidityPeriod"];
        }

        if (array_key_exists("SSLValidity",$param) and $param["SSLValidity"] !== null) {
            $this->SSLValidity = $param["SSLValidity"];
        }
    }
}
