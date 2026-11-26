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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Currently effective origin-pull IP range.
 *
 * @method Addresses getEntireAddresses() Obtain Origin-pull IP range details.
 * @method void setEntireAddresses(Addresses $EntireAddresses) Set Origin-pull IP range details.
 * @method string getVersion() Obtain Version.
 * @method void setVersion(string $Version) Set Version.
 * @method string getActiveTime() Obtain Version effective time, which adopts Beijing time (UTC+8) and follows the date and time format of the ISO 8601 standard.
 * @method void setActiveTime(string $ActiveTime) Set Version effective time, which adopts Beijing time (UTC+8) and follows the date and time format of the ISO 8601 standard.
 * @method string getIsPlaned() Obtain This parameter is used to record whether "I have updated to the latest origin-pull IP range" is confirmed before the current version takes effect. Valid values:
<li>true: When the version takes effect, the confirmation of updating to the latest origin-pull IP is completed;</li>
<li>false: When the version takes effect, the confirmation of updating to the latest origin-pull IP is not completed, and the origin-pull IP range is forcibly updated to the latest version by the backend.</li>Note: When this parameter returns false, confirm in time whether your origin server firewall configuration has been updated to the latest origin-pull IP range to avoid origin-pull failure.
 * @method void setIsPlaned(string $IsPlaned) Set This parameter is used to record whether "I have updated to the latest origin-pull IP range" is confirmed before the current version takes effect. Valid values:
<li>true: When the version takes effect, the confirmation of updating to the latest origin-pull IP is completed;</li>
<li>false: When the version takes effect, the confirmation of updating to the latest origin-pull IP is not completed, and the origin-pull IP range is forcibly updated to the latest version by the backend.</li>Note: When this parameter returns false, confirm in time whether your origin server firewall configuration has been updated to the latest origin-pull IP range to avoid origin-pull failure.
 */
class CurrentOriginACL extends AbstractModel
{
    /**
     * @var Addresses Origin-pull IP range details.
     */
    public $EntireAddresses;

    /**
     * @var string Version.
     */
    public $Version;

    /**
     * @var string Version effective time, which adopts Beijing time (UTC+8) and follows the date and time format of the ISO 8601 standard.
     */
    public $ActiveTime;

    /**
     * @var string This parameter is used to record whether "I have updated to the latest origin-pull IP range" is confirmed before the current version takes effect. Valid values:
<li>true: When the version takes effect, the confirmation of updating to the latest origin-pull IP is completed;</li>
<li>false: When the version takes effect, the confirmation of updating to the latest origin-pull IP is not completed, and the origin-pull IP range is forcibly updated to the latest version by the backend.</li>Note: When this parameter returns false, confirm in time whether your origin server firewall configuration has been updated to the latest origin-pull IP range to avoid origin-pull failure.
     */
    public $IsPlaned;

    /**
     * @param Addresses $EntireAddresses Origin-pull IP range details.
     * @param string $Version Version.
     * @param string $ActiveTime Version effective time, which adopts Beijing time (UTC+8) and follows the date and time format of the ISO 8601 standard.
     * @param string $IsPlaned This parameter is used to record whether "I have updated to the latest origin-pull IP range" is confirmed before the current version takes effect. Valid values:
<li>true: When the version takes effect, the confirmation of updating to the latest origin-pull IP is completed;</li>
<li>false: When the version takes effect, the confirmation of updating to the latest origin-pull IP is not completed, and the origin-pull IP range is forcibly updated to the latest version by the backend.</li>Note: When this parameter returns false, confirm in time whether your origin server firewall configuration has been updated to the latest origin-pull IP range to avoid origin-pull failure.
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
        if (array_key_exists("EntireAddresses",$param) and $param["EntireAddresses"] !== null) {
            $this->EntireAddresses = new Addresses();
            $this->EntireAddresses->deserialize($param["EntireAddresses"]);
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("ActiveTime",$param) and $param["ActiveTime"] !== null) {
            $this->ActiveTime = $param["ActiveTime"];
        }

        if (array_key_exists("IsPlaned",$param) and $param["IsPlaned"] !== null) {
            $this->IsPlaned = $param["IsPlaned"];
        }
    }
}
