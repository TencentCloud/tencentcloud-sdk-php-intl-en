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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyModuleStatus request structure.
 *
 * @method string getDomain() Obtain Domain to be set
 * @method void setDomain(string $Domain) Set Domain to be set
 * @method integer getWebSecurity() Obtain Enabling status of the web security module. The value is 0 or 1.
 * @method void setWebSecurity(integer $WebSecurity) Set Enabling status of the web security module. The value is 0 or 1.
 * @method integer getAccessControl() Obtain Access control module switch: 0 or 1
 * @method void setAccessControl(integer $AccessControl) Set Access control module switch: 0 or 1
 * @method integer getCcProtection() Obtain CC module switch, 0 or 1
 * @method void setCcProtection(integer $CcProtection) Set CC module switch, 0 or 1
 * @method integer getApiProtection() Obtain API security module switch, 0 or 1
 * @method void setApiProtection(integer $ApiProtection) Set API security module switch, 0 or 1
 * @method integer getAntiTamper() Obtain Tamper-proof module switch: 0 or 1
 * @method void setAntiTamper(integer $AntiTamper) Set Tamper-proof module switch: 0 or 1
 * @method integer getAntiLeakage() Obtain Leakage prevention module switch: 0 or 1
 * @method void setAntiLeakage(integer $AntiLeakage) Set Leakage prevention module switch: 0 or 1
 * @method integer getRateLimit() Obtain Traffic limiting module switch: 0 or 1
 * @method void setRateLimit(integer $RateLimit) Set Traffic limiting module switch: 0 or 1
 */
class ModifyModuleStatusRequest extends AbstractModel
{
    /**
     * @var string Domain to be set
     */
    public $Domain;

    /**
     * @var integer Enabling status of the web security module. The value is 0 or 1.
     */
    public $WebSecurity;

    /**
     * @var integer Access control module switch: 0 or 1
     */
    public $AccessControl;

    /**
     * @var integer CC module switch, 0 or 1
     */
    public $CcProtection;

    /**
     * @var integer API security module switch, 0 or 1
     */
    public $ApiProtection;

    /**
     * @var integer Tamper-proof module switch: 0 or 1
     */
    public $AntiTamper;

    /**
     * @var integer Leakage prevention module switch: 0 or 1
     */
    public $AntiLeakage;

    /**
     * @var integer Traffic limiting module switch: 0 or 1
     */
    public $RateLimit;

    /**
     * @param string $Domain Domain to be set
     * @param integer $WebSecurity Enabling status of the web security module. The value is 0 or 1.
     * @param integer $AccessControl Access control module switch: 0 or 1
     * @param integer $CcProtection CC module switch, 0 or 1
     * @param integer $ApiProtection API security module switch, 0 or 1
     * @param integer $AntiTamper Tamper-proof module switch: 0 or 1
     * @param integer $AntiLeakage Leakage prevention module switch: 0 or 1
     * @param integer $RateLimit Traffic limiting module switch: 0 or 1
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("WebSecurity",$param) and $param["WebSecurity"] !== null) {
            $this->WebSecurity = $param["WebSecurity"];
        }

        if (array_key_exists("AccessControl",$param) and $param["AccessControl"] !== null) {
            $this->AccessControl = $param["AccessControl"];
        }

        if (array_key_exists("CcProtection",$param) and $param["CcProtection"] !== null) {
            $this->CcProtection = $param["CcProtection"];
        }

        if (array_key_exists("ApiProtection",$param) and $param["ApiProtection"] !== null) {
            $this->ApiProtection = $param["ApiProtection"];
        }

        if (array_key_exists("AntiTamper",$param) and $param["AntiTamper"] !== null) {
            $this->AntiTamper = $param["AntiTamper"];
        }

        if (array_key_exists("AntiLeakage",$param) and $param["AntiLeakage"] !== null) {
            $this->AntiLeakage = $param["AntiLeakage"];
        }

        if (array_key_exists("RateLimit",$param) and $param["RateLimit"] !== null) {
            $this->RateLimit = $param["RateLimit"];
        }
    }
}
