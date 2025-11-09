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
 * Describes the currently effective IP range for origin servers.
 *
 * @method Addresses getEntireAddresses() Obtain Describes the IP range details for origin servers.
 * @method void setEntireAddresses(Addresses $EntireAddresses) Set Describes the IP range details for origin servers.
 * @method integer getVersion() Obtain Specifies the version number.
 * @method void setVersion(integer $Version) Set Specifies the version number.
 * @method string getIsPlaned() Obtain This parameter records whether "i have updated to the latest origin IP range" is completed before taking effect. valid values:.
<li>true: confirms the update to the latest origin IP is completed.</li>.
<li>false: indicates the update to the latest origin IP is not completed.</li>.
Note: when false is returned for this parameter, please confirm in time whether your origin server firewall configuration has been updated to the latest IP range to avoid origin-pull failure.
 * @method void setIsPlaned(string $IsPlaned) Set This parameter records whether "i have updated to the latest origin IP range" is completed before taking effect. valid values:.
<li>true: confirms the update to the latest origin IP is completed.</li>.
<li>false: indicates the update to the latest origin IP is not completed.</li>.
Note: when false is returned for this parameter, please confirm in time whether your origin server firewall configuration has been updated to the latest IP range to avoid origin-pull failure.
 */
class MultiPathGatewayCurrentOriginACL extends AbstractModel
{
    /**
     * @var Addresses Describes the IP range details for origin servers.
     */
    public $EntireAddresses;

    /**
     * @var integer Specifies the version number.
     */
    public $Version;

    /**
     * @var string This parameter records whether "i have updated to the latest origin IP range" is completed before taking effect. valid values:.
<li>true: confirms the update to the latest origin IP is completed.</li>.
<li>false: indicates the update to the latest origin IP is not completed.</li>.
Note: when false is returned for this parameter, please confirm in time whether your origin server firewall configuration has been updated to the latest IP range to avoid origin-pull failure.
     */
    public $IsPlaned;

    /**
     * @param Addresses $EntireAddresses Describes the IP range details for origin servers.
     * @param integer $Version Specifies the version number.
     * @param string $IsPlaned This parameter records whether "i have updated to the latest origin IP range" is completed before taking effect. valid values:.
<li>true: confirms the update to the latest origin IP is completed.</li>.
<li>false: indicates the update to the latest origin IP is not completed.</li>.
Note: when false is returned for this parameter, please confirm in time whether your origin server firewall configuration has been updated to the latest IP range to avoid origin-pull failure.
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

        if (array_key_exists("IsPlaned",$param) and $param["IsPlaned"] !== null) {
            $this->IsPlaned = $param["IsPlaned"];
        }
    }
}
