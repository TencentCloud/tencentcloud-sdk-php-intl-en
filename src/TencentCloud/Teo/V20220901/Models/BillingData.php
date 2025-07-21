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
 * Billing data item
 *
 * @method string getTime() Obtain Data timestamp.
 * @method void setTime(string $Time) Set Data timestamp.
 * @method integer getValue() Obtain Value.
 * @method void setValue(integer $Value) Set Value.
 * @method string getZoneId() Obtain Zone ID (or content identifier if enabled).
 * @method void setZoneId(string $ZoneId) Set Zone ID (or content identifier if enabled).
 * @method string getHost() Obtain Domain name.
 * @method void setHost(string $Host) Set Domain name.
 * @method string getProxyId() Obtain Layer-4 proxy instance ID.
 * @method void setProxyId(string $ProxyId) Set Layer-4 proxy instance ID.
 * @method string getRegionId() Obtain Billing region (based on EdgeOne node location). Values: 
<li>CH: Mainland China</li> <li>AF: Africa</li> <li>AS1: Asia Pacific Region 1</li> <li>AS2: Asia Pacific Region 2</li> <li>AS3: Asia Pacific Region 3</li> <li>EU: Europe</li> <li>MidEast: Middle East</li> <li>NA: North America</li> <li>SA: South America</li>
 * @method void setRegionId(string $RegionId) Set Billing region (based on EdgeOne node location). Values: 
<li>CH: Mainland China</li> <li>AF: Africa</li> <li>AS1: Asia Pacific Region 1</li> <li>AS2: Asia Pacific Region 2</li> <li>AS3: Asia Pacific Region 3</li> <li>EU: Europe</li> <li>MidEast: Middle East</li> <li>NA: North America</li> <li>SA: South America</li>
 */
class BillingData extends AbstractModel
{
    /**
     * @var string Data timestamp.
     */
    public $Time;

    /**
     * @var integer Value.
     */
    public $Value;

    /**
     * @var string Zone ID (or content identifier if enabled).
     */
    public $ZoneId;

    /**
     * @var string Domain name.
     */
    public $Host;

    /**
     * @var string Layer-4 proxy instance ID.
     */
    public $ProxyId;

    /**
     * @var string Billing region (based on EdgeOne node location). Values: 
<li>CH: Mainland China</li> <li>AF: Africa</li> <li>AS1: Asia Pacific Region 1</li> <li>AS2: Asia Pacific Region 2</li> <li>AS3: Asia Pacific Region 3</li> <li>EU: Europe</li> <li>MidEast: Middle East</li> <li>NA: North America</li> <li>SA: South America</li>
     */
    public $RegionId;

    /**
     * @param string $Time Data timestamp.
     * @param integer $Value Value.
     * @param string $ZoneId Zone ID (or content identifier if enabled).
     * @param string $Host Domain name.
     * @param string $ProxyId Layer-4 proxy instance ID.
     * @param string $RegionId Billing region (based on EdgeOne node location). Values: 
<li>CH: Mainland China</li> <li>AF: Africa</li> <li>AS1: Asia Pacific Region 1</li> <li>AS2: Asia Pacific Region 2</li> <li>AS3: Asia Pacific Region 3</li> <li>EU: Europe</li> <li>MidEast: Middle East</li> <li>NA: North America</li> <li>SA: South America</li>
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
