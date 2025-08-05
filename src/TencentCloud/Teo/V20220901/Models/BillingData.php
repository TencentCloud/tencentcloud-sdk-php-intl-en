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
 * @method string getTime() Obtain Specifies the data timestamp.
 * @method void setTime(string $Time) Set Specifies the data timestamp.
 * @method integer getValue() Obtain Value.
 * @method void setValue(integer $Value) Set Value.
 * @method string getZoneId() Obtain Site ID of the associated data point. if the content identifier feature is enabled, this item is the content identifier.
 * @method void setZoneId(string $ZoneId) Set Site ID of the associated data point. if the content identifier feature is enabled, this item is the content identifier.
 * @method string getHost() Obtain Specifies the domain name of the data point.
 * @method void setHost(string $Host) Set Specifies the domain name of the data point.
 * @method string getProxyId() Obtain Specifies the layer-4 proxy instance ID the data point belongs to.
 * @method void setProxyId(string $ProxyId) Set Specifies the layer-4 proxy instance ID the data point belongs to.
 * @method string getRegionId() Obtain Specifies the billing region ID the data point belongs to. the billing region is determined by the EdgeOne node region where the actual service user client is located. valid values: <li>CH: chinese mainland</li><li>AF: africa</li><li>AS1: asia pacific zone 1</li><li>AS2: asia pacific zone 2</li><li>AS3: asia pacific zone 3</li><li>EU: europe</li><li>MidEast: middle east</li><li>NA: north america</li><li>SA: south america</li>.
 * @method void setRegionId(string $RegionId) Set Specifies the billing region ID the data point belongs to. the billing region is determined by the EdgeOne node region where the actual service user client is located. valid values: <li>CH: chinese mainland</li><li>AF: africa</li><li>AS1: asia pacific zone 1</li><li>AS2: asia pacific zone 2</li><li>AS3: asia pacific zone 3</li><li>EU: europe</li><li>MidEast: middle east</li><li>NA: north america</li><li>SA: south america</li>.
 */
class BillingData extends AbstractModel
{
    /**
     * @var string Specifies the data timestamp.
     */
    public $Time;

    /**
     * @var integer Value.
     */
    public $Value;

    /**
     * @var string Site ID of the associated data point. if the content identifier feature is enabled, this item is the content identifier.
     */
    public $ZoneId;

    /**
     * @var string Specifies the domain name of the data point.
     */
    public $Host;

    /**
     * @var string Specifies the layer-4 proxy instance ID the data point belongs to.
     */
    public $ProxyId;

    /**
     * @var string Specifies the billing region ID the data point belongs to. the billing region is determined by the EdgeOne node region where the actual service user client is located. valid values: <li>CH: chinese mainland</li><li>AF: africa</li><li>AS1: asia pacific zone 1</li><li>AS2: asia pacific zone 2</li><li>AS3: asia pacific zone 3</li><li>EU: europe</li><li>MidEast: middle east</li><li>NA: north america</li><li>SA: south america</li>.
     */
    public $RegionId;

    /**
     * @param string $Time Specifies the data timestamp.
     * @param integer $Value Value.
     * @param string $ZoneId Site ID of the associated data point. if the content identifier feature is enabled, this item is the content identifier.
     * @param string $Host Specifies the domain name of the data point.
     * @param string $ProxyId Specifies the layer-4 proxy instance ID the data point belongs to.
     * @param string $RegionId Specifies the billing region ID the data point belongs to. the billing region is determined by the EdgeOne node region where the actual service user client is located. valid values: <li>CH: chinese mainland</li><li>AF: africa</li><li>AS1: asia pacific zone 1</li><li>AS2: asia pacific zone 2</li><li>AS3: asia pacific zone 3</li><li>EU: europe</li><li>MidEast: middle east</li><li>NA: north america</li><li>SA: south america</li>.
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
