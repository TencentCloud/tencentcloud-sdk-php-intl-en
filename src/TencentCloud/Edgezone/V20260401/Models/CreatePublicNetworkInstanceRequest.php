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
namespace TencentCloud\Edgezone\V20260401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePublicNetworkInstance request structure.
 *
 * @method string getZoneId() Obtain Availability zone ID.
 * @method void setZoneId(string $ZoneId) Set Availability zone ID.
 * @method string getNetworkInstanceName() Obtain Public network instance name
 * @method void setNetworkInstanceName(string $NetworkInstanceName) Set Public network instance name
 * @method string getLine() Obtain Network line
 * @method void setLine(string $Line) Set Network line
 * @method string getRouteMode() Obtain Routing mode
 * @method void setRouteMode(string $RouteMode) Set Routing mode
 * @method integer getBandwidth() Obtain Public network bandwidth (Mbps)
 * @method void setBandwidth(integer $Bandwidth) Set Public network bandwidth (Mbps)
 */
class CreatePublicNetworkInstanceRequest extends AbstractModel
{
    /**
     * @var string Availability zone ID.
     */
    public $ZoneId;

    /**
     * @var string Public network instance name
     */
    public $NetworkInstanceName;

    /**
     * @var string Network line
     */
    public $Line;

    /**
     * @var string Routing mode
     */
    public $RouteMode;

    /**
     * @var integer Public network bandwidth (Mbps)
     */
    public $Bandwidth;

    /**
     * @param string $ZoneId Availability zone ID.
     * @param string $NetworkInstanceName Public network instance name
     * @param string $Line Network line
     * @param string $RouteMode Routing mode
     * @param integer $Bandwidth Public network bandwidth (Mbps)
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

        if (array_key_exists("NetworkInstanceName",$param) and $param["NetworkInstanceName"] !== null) {
            $this->NetworkInstanceName = $param["NetworkInstanceName"];
        }

        if (array_key_exists("Line",$param) and $param["Line"] !== null) {
            $this->Line = $param["Line"];
        }

        if (array_key_exists("RouteMode",$param) and $param["RouteMode"] !== null) {
            $this->RouteMode = $param["RouteMode"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }
    }
}
