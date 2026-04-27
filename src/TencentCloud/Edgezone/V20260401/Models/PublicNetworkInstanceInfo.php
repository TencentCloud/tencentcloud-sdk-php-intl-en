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
 * Public network instance info, including instance ID, availability zone ID, instance name, line, routing mode, etc.
 *
 * @method string getNetworkInstanceId() Obtain Public network instance ID
 * @method void setNetworkInstanceId(string $NetworkInstanceId) Set Public network instance ID
 * @method string getZoneId() Obtain Availability zone ID.
 * @method void setZoneId(string $ZoneId) Set Availability zone ID.
 * @method string getNetworkInstanceName() Obtain Public network instance name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNetworkInstanceName(string $NetworkInstanceName) Set Public network instance name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBandwidth() Obtain Bandwidth, Unit: Mbps
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBandwidth(integer $Bandwidth) Set Bandwidth, Unit: Mbps
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLine() Obtain Line information
 * @method void setLine(string $Line) Set Line information
 * @method string getRouteMode() Obtain Routing mode, enumeration value: STATIC, BGP, OSPF
 * @method void setRouteMode(string $RouteMode) Set Routing mode, enumeration value: STATIC, BGP, OSPF
 * @method integer getServerCount() Obtain Number of Associated Physical Servers
 * @method void setServerCount(integer $ServerCount) Set Number of Associated Physical Servers
 * @method integer getIpv4Count() Obtain Applied Ipv4 quantity
 * @method void setIpv4Count(integer $Ipv4Count) Set Applied Ipv4 quantity
 * @method integer getIpv6Count() Obtain Number of applied Ipv6 addresses
 * @method void setIpv6Count(integer $Ipv6Count) Set Number of applied Ipv6 addresses
 * @method array getIpv4CidrSet() Obtain Associated Ipv4 subnet
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIpv4CidrSet(array $Ipv4CidrSet) Set Associated Ipv4 subnet
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getIpv6CidrSet() Obtain Associated Ipv6 segment
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIpv6CidrSet(array $Ipv6CidrSet) Set Associated Ipv6 segment
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedAt() Obtain Public network instance creation time
 * @method void setCreatedAt(string $CreatedAt) Set Public network instance creation time
 * @method string getUpdatedAt() Obtain Public network instance last modified
 * @method void setUpdatedAt(string $UpdatedAt) Set Public network instance last modified
 */
class PublicNetworkInstanceInfo extends AbstractModel
{
    /**
     * @var string Public network instance ID
     */
    public $NetworkInstanceId;

    /**
     * @var string Availability zone ID.
     */
    public $ZoneId;

    /**
     * @var string Public network instance name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NetworkInstanceName;

    /**
     * @var integer Bandwidth, Unit: Mbps
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Bandwidth;

    /**
     * @var string Line information
     */
    public $Line;

    /**
     * @var string Routing mode, enumeration value: STATIC, BGP, OSPF
     */
    public $RouteMode;

    /**
     * @var integer Number of Associated Physical Servers
     */
    public $ServerCount;

    /**
     * @var integer Applied Ipv4 quantity
     */
    public $Ipv4Count;

    /**
     * @var integer Number of applied Ipv6 addresses
     */
    public $Ipv6Count;

    /**
     * @var array Associated Ipv4 subnet
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Ipv4CidrSet;

    /**
     * @var array Associated Ipv6 segment
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Ipv6CidrSet;

    /**
     * @var string Public network instance creation time
     */
    public $CreatedAt;

    /**
     * @var string Public network instance last modified
     */
    public $UpdatedAt;

    /**
     * @param string $NetworkInstanceId Public network instance ID
     * @param string $ZoneId Availability zone ID.
     * @param string $NetworkInstanceName Public network instance name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Bandwidth Bandwidth, Unit: Mbps
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Line Line information
     * @param string $RouteMode Routing mode, enumeration value: STATIC, BGP, OSPF
     * @param integer $ServerCount Number of Associated Physical Servers
     * @param integer $Ipv4Count Applied Ipv4 quantity
     * @param integer $Ipv6Count Number of applied Ipv6 addresses
     * @param array $Ipv4CidrSet Associated Ipv4 subnet
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Ipv6CidrSet Associated Ipv6 segment
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedAt Public network instance creation time
     * @param string $UpdatedAt Public network instance last modified
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
        if (array_key_exists("NetworkInstanceId",$param) and $param["NetworkInstanceId"] !== null) {
            $this->NetworkInstanceId = $param["NetworkInstanceId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("NetworkInstanceName",$param) and $param["NetworkInstanceName"] !== null) {
            $this->NetworkInstanceName = $param["NetworkInstanceName"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Line",$param) and $param["Line"] !== null) {
            $this->Line = $param["Line"];
        }

        if (array_key_exists("RouteMode",$param) and $param["RouteMode"] !== null) {
            $this->RouteMode = $param["RouteMode"];
        }

        if (array_key_exists("ServerCount",$param) and $param["ServerCount"] !== null) {
            $this->ServerCount = $param["ServerCount"];
        }

        if (array_key_exists("Ipv4Count",$param) and $param["Ipv4Count"] !== null) {
            $this->Ipv4Count = $param["Ipv4Count"];
        }

        if (array_key_exists("Ipv6Count",$param) and $param["Ipv6Count"] !== null) {
            $this->Ipv6Count = $param["Ipv6Count"];
        }

        if (array_key_exists("Ipv4CidrSet",$param) and $param["Ipv4CidrSet"] !== null) {
            $this->Ipv4CidrSet = [];
            foreach ($param["Ipv4CidrSet"] as $key => $value){
                $obj = new PublicNetworkSegment();
                $obj->deserialize($value);
                array_push($this->Ipv4CidrSet, $obj);
            }
        }

        if (array_key_exists("Ipv6CidrSet",$param) and $param["Ipv6CidrSet"] !== null) {
            $this->Ipv6CidrSet = [];
            foreach ($param["Ipv6CidrSet"] as $key => $value){
                $obj = new PublicNetworkSegment();
                $obj->deserialize($value);
                array_push($this->Ipv6CidrSet, $obj);
            }
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}
