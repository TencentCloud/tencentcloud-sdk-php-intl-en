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
 * ModifyPrefetchOriginLimit request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getDomainName() Obtain Acceleration domain name.
 * @method void setDomainName(string $DomainName) Set Acceleration domain name.
 * @method string getArea() Obtain Specifies the acceleration region with origin-pull speed limit.
During preheating, the acceleration region will be subject to the configured Bandwidth value limit. valid values:.
<Li>Overseas: global availability zone (excluding the chinese mainland);</li>.
<Li>MainlandChina: chinese mainland availability zone.</li>.
 * @method void setArea(string $Area) Set Specifies the acceleration region with origin-pull speed limit.
During preheating, the acceleration region will be subject to the configured Bandwidth value limit. valid values:.
<Li>Overseas: global availability zone (excluding the chinese mainland);</li>.
<Li>MainlandChina: chinese mainland availability zone.</li>.
 * @method integer getBandwidth() Obtain Specifies the bandwidth limit for origin-pull.
Specifies the upper limit of bandwidth returning to the origin server during preheating. value ranges from 100 to 100,000 Mbps.
 * @method void setBandwidth(integer $Bandwidth) Set Specifies the bandwidth limit for origin-pull.
Specifies the upper limit of bandwidth returning to the origin server during preheating. value ranges from 100 to 100,000 Mbps.
 * @method string getEnabled() Obtain Specifies the control switch for origin-pull rate limiting.
Used to enable/delete the origin-pull speed limit. valid values:.
<li>on: enablement limit.</li>.
<li>off: delete restriction.</li>.
 * @method void setEnabled(string $Enabled) Set Specifies the control switch for origin-pull rate limiting.
Used to enable/delete the origin-pull speed limit. valid values:.
<li>on: enablement limit.</li>.
<li>off: delete restriction.</li>.
 */
class ModifyPrefetchOriginLimitRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Acceleration domain name.
     */
    public $DomainName;

    /**
     * @var string Specifies the acceleration region with origin-pull speed limit.
During preheating, the acceleration region will be subject to the configured Bandwidth value limit. valid values:.
<Li>Overseas: global availability zone (excluding the chinese mainland);</li>.
<Li>MainlandChina: chinese mainland availability zone.</li>.
     */
    public $Area;

    /**
     * @var integer Specifies the bandwidth limit for origin-pull.
Specifies the upper limit of bandwidth returning to the origin server during preheating. value ranges from 100 to 100,000 Mbps.
     */
    public $Bandwidth;

    /**
     * @var string Specifies the control switch for origin-pull rate limiting.
Used to enable/delete the origin-pull speed limit. valid values:.
<li>on: enablement limit.</li>.
<li>off: delete restriction.</li>.
     */
    public $Enabled;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $DomainName Acceleration domain name.
     * @param string $Area Specifies the acceleration region with origin-pull speed limit.
During preheating, the acceleration region will be subject to the configured Bandwidth value limit. valid values:.
<Li>Overseas: global availability zone (excluding the chinese mainland);</li>.
<Li>MainlandChina: chinese mainland availability zone.</li>.
     * @param integer $Bandwidth Specifies the bandwidth limit for origin-pull.
Specifies the upper limit of bandwidth returning to the origin server during preheating. value ranges from 100 to 100,000 Mbps.
     * @param string $Enabled Specifies the control switch for origin-pull rate limiting.
Used to enable/delete the origin-pull speed limit. valid values:.
<li>on: enablement limit.</li>.
<li>off: delete restriction.</li>.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
