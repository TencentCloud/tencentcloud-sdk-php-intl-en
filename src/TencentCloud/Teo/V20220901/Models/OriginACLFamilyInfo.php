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
 * Version information of origin-pull IP ranges.
 *
 * @method string getVersion() Obtain Origin protection version number.
Format description:
Standard version.
<li>gaz-xxxxx: global;</li>
<li>mlc-xxxxx: China;</li>
<li>emc-xxxxx: overseas (worldwide excluding China);</li>
Simplified edition (platform-level version)
<li>plat-gaz-xxxxxx: Simplified global edition;</li>
<li>plat-mlc-xxxxxx: Simplified China version;</li>
<li>plat-emc-xxxxxx: Simplified overseas (global excluding China) edition;</li>
Abbreviation description:
<li>gaz:Global AZ Availability Zone;</li>
<li>mlc:mainlandChina;</li>
<li>emc:Exclude mainlandChina.</li>
 * @method void setVersion(string $Version) Set Origin protection version number.
Format description:
Standard version.
<li>gaz-xxxxx: global;</li>
<li>mlc-xxxxx: China;</li>
<li>emc-xxxxx: overseas (worldwide excluding China);</li>
Simplified edition (platform-level version)
<li>plat-gaz-xxxxxx: Simplified global edition;</li>
<li>plat-mlc-xxxxxx: Simplified China version;</li>
<li>plat-emc-xxxxxx: Simplified overseas (global excluding China) edition;</li>
Abbreviation description:
<li>gaz:Global AZ Availability Zone;</li>
<li>mlc:mainlandChina;</li>
<li>emc:Exclude mainlandChina.</li>
 * @method string getActiveTime() Obtain Version effective time, which adopts Beijing time (UTC+8) and follows the date and time format of the ISO 8601 standard.
 * @method void setActiveTime(string $ActiveTime) Set Version effective time, which adopts Beijing time (UTC+8) and follows the date and time format of the ISO 8601 standard.
 * @method Addresses getEntireAddresses() Obtain Origin-pull IP range details.	
 * @method void setEntireAddresses(Addresses $EntireAddresses) Set Origin-pull IP range details.	
 * @method string getOriginACLFamily() Obtain Origin protection origin-pull ACL control domain. Parameter values are as follows:
<li>gaz: standard global availability zone control domain;</li>
<li>mlc: standard Chinese mainland availability zone control domain;</li>
<li>emc: standard worldwide (excluding Chinese mainland) availability zone control domain;</li>
<li>plat-gaz: simplified global availability zone control domain;</li>
<li>plat-mlc: Simplified Chinese mainland availability zone control domain;</li>
<li>plat-emc: Simplified global (excluding Chinese mainland) availability zone control domain;</li>
 * @method void setOriginACLFamily(string $OriginACLFamily) Set Origin protection origin-pull ACL control domain. Parameter values are as follows:
<li>gaz: standard global availability zone control domain;</li>
<li>mlc: standard Chinese mainland availability zone control domain;</li>
<li>emc: standard worldwide (excluding Chinese mainland) availability zone control domain;</li>
<li>plat-gaz: simplified global availability zone control domain;</li>
<li>plat-mlc: Simplified Chinese mainland availability zone control domain;</li>
<li>plat-emc: Simplified global (excluding Chinese mainland) availability zone control domain;</li>
 */
class OriginACLFamilyInfo extends AbstractModel
{
    /**
     * @var string Origin protection version number.
Format description:
Standard version.
<li>gaz-xxxxx: global;</li>
<li>mlc-xxxxx: China;</li>
<li>emc-xxxxx: overseas (worldwide excluding China);</li>
Simplified edition (platform-level version)
<li>plat-gaz-xxxxxx: Simplified global edition;</li>
<li>plat-mlc-xxxxxx: Simplified China version;</li>
<li>plat-emc-xxxxxx: Simplified overseas (global excluding China) edition;</li>
Abbreviation description:
<li>gaz:Global AZ Availability Zone;</li>
<li>mlc:mainlandChina;</li>
<li>emc:Exclude mainlandChina.</li>
     */
    public $Version;

    /**
     * @var string Version effective time, which adopts Beijing time (UTC+8) and follows the date and time format of the ISO 8601 standard.
     */
    public $ActiveTime;

    /**
     * @var Addresses Origin-pull IP range details.	
     */
    public $EntireAddresses;

    /**
     * @var string Origin protection origin-pull ACL control domain. Parameter values are as follows:
<li>gaz: standard global availability zone control domain;</li>
<li>mlc: standard Chinese mainland availability zone control domain;</li>
<li>emc: standard worldwide (excluding Chinese mainland) availability zone control domain;</li>
<li>plat-gaz: simplified global availability zone control domain;</li>
<li>plat-mlc: Simplified Chinese mainland availability zone control domain;</li>
<li>plat-emc: Simplified global (excluding Chinese mainland) availability zone control domain;</li>
     */
    public $OriginACLFamily;

    /**
     * @param string $Version Origin protection version number.
Format description:
Standard version.
<li>gaz-xxxxx: global;</li>
<li>mlc-xxxxx: China;</li>
<li>emc-xxxxx: overseas (worldwide excluding China);</li>
Simplified edition (platform-level version)
<li>plat-gaz-xxxxxx: Simplified global edition;</li>
<li>plat-mlc-xxxxxx: Simplified China version;</li>
<li>plat-emc-xxxxxx: Simplified overseas (global excluding China) edition;</li>
Abbreviation description:
<li>gaz:Global AZ Availability Zone;</li>
<li>mlc:mainlandChina;</li>
<li>emc:Exclude mainlandChina.</li>
     * @param string $ActiveTime Version effective time, which adopts Beijing time (UTC+8) and follows the date and time format of the ISO 8601 standard.
     * @param Addresses $EntireAddresses Origin-pull IP range details.	
     * @param string $OriginACLFamily Origin protection origin-pull ACL control domain. Parameter values are as follows:
<li>gaz: standard global availability zone control domain;</li>
<li>mlc: standard Chinese mainland availability zone control domain;</li>
<li>emc: standard worldwide (excluding Chinese mainland) availability zone control domain;</li>
<li>plat-gaz: simplified global availability zone control domain;</li>
<li>plat-mlc: Simplified Chinese mainland availability zone control domain;</li>
<li>plat-emc: Simplified global (excluding Chinese mainland) availability zone control domain;</li>
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("ActiveTime",$param) and $param["ActiveTime"] !== null) {
            $this->ActiveTime = $param["ActiveTime"];
        }

        if (array_key_exists("EntireAddresses",$param) and $param["EntireAddresses"] !== null) {
            $this->EntireAddresses = new Addresses();
            $this->EntireAddresses->deserialize($param["EntireAddresses"]);
        }

        if (array_key_exists("OriginACLFamily",$param) and $param["OriginACLFamily"] !== null) {
            $this->OriginACLFamily = $param["OriginACLFamily"];
        }
    }
}
