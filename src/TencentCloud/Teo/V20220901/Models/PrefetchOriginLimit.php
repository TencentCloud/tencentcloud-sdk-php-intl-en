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
 * Origin speed limit details.
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
 * @method string getCreateTime() Obtain Describes the time when the origin-pull speed limit was created.
 * @method void setCreateTime(string $CreateTime) Set Describes the time when the origin-pull speed limit was created.
 * @method string getUpdateTime() Obtain Describes the time when the origin-pull speed limit is updated.
 * @method void setUpdateTime(string $UpdateTime) Set Describes the time when the origin-pull speed limit is updated.
 */
class PrefetchOriginLimit extends AbstractModel
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
     * @var string Describes the time when the origin-pull speed limit was created.
     */
    public $CreateTime;

    /**
     * @var string Describes the time when the origin-pull speed limit is updated.
     */
    public $UpdateTime;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $DomainName Acceleration domain name.
     * @param string $Area Specifies the acceleration region with origin-pull speed limit.
During preheating, the acceleration region will be subject to the configured Bandwidth value limit. valid values:.
<Li>Overseas: global availability zone (excluding the chinese mainland);</li>.
<Li>MainlandChina: chinese mainland availability zone.</li>.
     * @param integer $Bandwidth Specifies the bandwidth limit for origin-pull.
Specifies the upper limit of bandwidth returning to the origin server during preheating. value ranges from 100 to 100,000 Mbps.
     * @param string $CreateTime Describes the time when the origin-pull speed limit was created.
     * @param string $UpdateTime Describes the time when the origin-pull speed limit is updated.
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
