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
 * Billing data item.
 *
 * @method string getTime() Obtain Data timestamp.
 * @method void setTime(string $Time) Set Data timestamp.
 * @method integer getValue() Obtain Numeric value.
 * @method void setValue(integer $Value) Set Numeric value.
 * @method string getZoneId() Obtain Site ID to which the data point belongs. If the content identifier feature is used, the value of this item is the content identifier.
 * @method void setZoneId(string $ZoneId) Set Site ID to which the data point belongs. If the content identifier feature is used, the value of this item is the content identifier.
 * @method string getHost() Obtain Domain name to which the data point belongs.
 * @method void setHost(string $Host) Set Domain name to which the data point belongs.
 * @method string getProxyId() Obtain ID of the Layer 4 Proxy instance to which the data point belongs.
 * @method void setProxyId(string $ProxyId) Set ID of the Layer 4 Proxy instance to which the data point belongs.
 * @method string getRegionId() Obtain ID of the billing region to which the data point belongs. The billing region is determined by the region of the EdgeOne node that actually serves the user client. Valid values: <li>CH: Chinese mainland</li><li>AF: Africa</li><li>AS1: Asia Pacific zone 1</li><li>AS2: Asia Pacific zone 2</li><li>AS3: Asia Pacific zone 3</li><li>EU: Europe</li><li>MidEast: Middle East</li><li>NA: North America</li><li> SA: South America</li>
 * @method void setRegionId(string $RegionId) Set ID of the billing region to which the data point belongs. The billing region is determined by the region of the EdgeOne node that actually serves the user client. Valid values: <li>CH: Chinese mainland</li><li>AF: Africa</li><li>AS1: Asia Pacific zone 1</li><li>AS2: Asia Pacific zone 2</li><li>AS3: Asia Pacific zone 3</li><li>EU: Europe</li><li>MidEast: Middle East</li><li>NA: North America</li><li> SA: South America</li>
 */
class BillingData extends AbstractModel
{
    /**
     * @var string Data timestamp.
     */
    public $Time;

    /**
     * @var integer Numeric value.
     */
    public $Value;

    /**
     * @var string Site ID to which the data point belongs. If the content identifier feature is used, the value of this item is the content identifier.
     */
    public $ZoneId;

    /**
     * @var string Domain name to which the data point belongs.
     */
    public $Host;

    /**
     * @var string ID of the Layer 4 Proxy instance to which the data point belongs.
     */
    public $ProxyId;

    /**
     * @var string ID of the billing region to which the data point belongs. The billing region is determined by the region of the EdgeOne node that actually serves the user client. Valid values: <li>CH: Chinese mainland</li><li>AF: Africa</li><li>AS1: Asia Pacific zone 1</li><li>AS2: Asia Pacific zone 2</li><li>AS3: Asia Pacific zone 3</li><li>EU: Europe</li><li>MidEast: Middle East</li><li>NA: North America</li><li> SA: South America</li>
     */
    public $RegionId;

    /**
     * @param string $Time Data timestamp.
     * @param integer $Value Numeric value.
     * @param string $ZoneId Site ID to which the data point belongs. If the content identifier feature is used, the value of this item is the content identifier.
     * @param string $Host Domain name to which the data point belongs.
     * @param string $ProxyId ID of the Layer 4 Proxy instance to which the data point belongs.
     * @param string $RegionId ID of the billing region to which the data point belongs. The billing region is determined by the region of the EdgeOne node that actually serves the user client. Valid values: <li>CH: Chinese mainland</li><li>AF: Africa</li><li>AS1: Asia Pacific zone 1</li><li>AS2: Asia Pacific zone 2</li><li>AS3: Asia Pacific zone 3</li><li>EU: Europe</li><li>MidEast: Middle East</li><li>NA: North America</li><li> SA: South America</li>
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }
    }
}
