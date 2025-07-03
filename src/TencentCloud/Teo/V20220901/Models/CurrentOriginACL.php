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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Currently effective origin ACLs.
 *
 * @method Addresses getEntireAddresses() Obtain IP range details.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setEntireAddresses(Addresses $EntireAddresses) Set IP range details.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method string getVersion() Obtain Version number.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setVersion(string $Version) Set Version number.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method string getActiveTime() Obtain Version effective time in UTC+8, following the date and time format of the ISO 8601 standard.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setActiveTime(string $ActiveTime) Set Version effective time in UTC+8, following the date and time format of the ISO 8601 standard.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method string getIsPlaned() Obtain This parameter is used to record whether "I've upgraded to the lastest verison" is completed before the origin ACLs version is effective. valid values:.
- true: specifies that the version is effective and the update to the latest version is confirmed.
- false: when the version takes effect, the confirmation of updating to the latest origin ACLs are not completed. The IP range is forcibly updated to the latest version in the backend. When this parameter returns false, please confirm in time whether your origin server firewall configuration has been updated to the latest version to avoid origin-pull failure.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setIsPlaned(string $IsPlaned) Set This parameter is used to record whether "I've upgraded to the lastest verison" is completed before the origin ACLs version is effective. valid values:.
- true: specifies that the version is effective and the update to the latest version is confirmed.
- false: when the version takes effect, the confirmation of updating to the latest origin ACLs are not completed. The IP range is forcibly updated to the latest version in the backend. When this parameter returns false, please confirm in time whether your origin server firewall configuration has been updated to the latest version to avoid origin-pull failure.
Note: This field may return null, which indicates a failure to obtain a valid value.
 */
class CurrentOriginACL extends AbstractModel
{
    /**
     * @var Addresses IP range details.
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $EntireAddresses;

    /**
     * @var string Version number.
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $Version;

    /**
     * @var string Version effective time in UTC+8, following the date and time format of the ISO 8601 standard.
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $ActiveTime;

    /**
     * @var string This parameter is used to record whether "I've upgraded to the lastest verison" is completed before the origin ACLs version is effective. valid values:.
- true: specifies that the version is effective and the update to the latest version is confirmed.
- false: when the version takes effect, the confirmation of updating to the latest origin ACLs are not completed. The IP range is forcibly updated to the latest version in the backend. When this parameter returns false, please confirm in time whether your origin server firewall configuration has been updated to the latest version to avoid origin-pull failure.
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $IsPlaned;

    /**
     * @param Addresses $EntireAddresses IP range details.
Note: This field may return null, which indicates a failure to obtain a valid value.
     * @param string $Version Version number.
Note: This field may return null, which indicates a failure to obtain a valid value.
     * @param string $ActiveTime Version effective time in UTC+8, following the date and time format of the ISO 8601 standard.
Note: This field may return null, which indicates a failure to obtain a valid value.
     * @param string $IsPlaned This parameter is used to record whether "I've upgraded to the lastest verison" is completed before the origin ACLs version is effective. valid values:.
- true: specifies that the version is effective and the update to the latest version is confirmed.
- false: when the version takes effect, the confirmation of updating to the latest origin ACLs are not completed. The IP range is forcibly updated to the latest version in the backend. When this parameter returns false, please confirm in time whether your origin server firewall configuration has been updated to the latest version to avoid origin-pull failure.
Note: This field may return null, which indicates a failure to obtain a valid value.
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
