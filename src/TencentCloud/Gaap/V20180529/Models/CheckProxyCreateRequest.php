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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckProxyCreate request structure.
 *
 * @method string getAccessRegion() Obtain Access (acceleration) region of the connection. The value can be obtained via the DescribeAccessRegionsByDestRegion API.
 * @method void setAccessRegion(string $AccessRegion) Set Access (acceleration) region of the connection. The value can be obtained via the DescribeAccessRegionsByDestRegion API.
 * @method string getRealServerRegion() Obtain Origin server region of the connection. The value can be obtained via the DescribeDestRegions API.
 * @method void setRealServerRegion(string $RealServerRegion) Set Origin server region of the connection. The value can be obtained via the DescribeDestRegions API.
 * @method integer getBandwidth() Obtain Connection bandwidth cap. Unit: Mbps.
 * @method void setBandwidth(integer $Bandwidth) Set Connection bandwidth cap. Unit: Mbps.
 * @method integer getConcurrent() Obtain Connection concurrence cap, which indicates the maximum number of simultaneous online connections. Unit: 10,000 connections.
 * @method void setConcurrent(integer $Concurrent) Set Connection concurrence cap, which indicates the maximum number of simultaneous online connections. Unit: 10,000 connections.
 * @method string getGroupId() Obtain Connection group ID that needs to be entered when a connection is created in a connection group
 * @method void setGroupId(string $GroupId) Set Connection group ID that needs to be entered when a connection is created in a connection group
 * @method string getIPAddressVersion() Obtain IP version. Valid values: `IPv4` (default), `IPv6`.
 * @method void setIPAddressVersion(string $IPAddressVersion) Set IP version. Valid values: `IPv4` (default), `IPv6`.
 * @method string getNetworkType() Obtain Network type. Valid values: `normal` (default), `cn2`
 * @method void setNetworkType(string $NetworkType) Set Network type. Valid values: `normal` (default), `cn2`
 * @method string getPackageType() Obtain Package type of connection groups. Valid values: `Thunder` (general connection group), `Accelerator` (game accelerator connection group), and `CrossBorder` (cross-border connection group).
 * @method void setPackageType(string $PackageType) Set Package type of connection groups. Valid values: `Thunder` (general connection group), `Accelerator` (game accelerator connection group), and `CrossBorder` (cross-border connection group).
 * @method integer getHttp3Supported() Obtain (Disused) HTTP3.0 is supported by default when `IPAddressVersion` is `IPv4`.
 * @method void setHttp3Supported(integer $Http3Supported) Set (Disused) HTTP3.0 is supported by default when `IPAddressVersion` is `IPv4`.
 */
class CheckProxyCreateRequest extends AbstractModel
{
    /**
     * @var string Access (acceleration) region of the connection. The value can be obtained via the DescribeAccessRegionsByDestRegion API.
     */
    public $AccessRegion;

    /**
     * @var string Origin server region of the connection. The value can be obtained via the DescribeDestRegions API.
     */
    public $RealServerRegion;

    /**
     * @var integer Connection bandwidth cap. Unit: Mbps.
     */
    public $Bandwidth;

    /**
     * @var integer Connection concurrence cap, which indicates the maximum number of simultaneous online connections. Unit: 10,000 connections.
     */
    public $Concurrent;

    /**
     * @var string Connection group ID that needs to be entered when a connection is created in a connection group
     */
    public $GroupId;

    /**
     * @var string IP version. Valid values: `IPv4` (default), `IPv6`.
     */
    public $IPAddressVersion;

    /**
     * @var string Network type. Valid values: `normal` (default), `cn2`
     */
    public $NetworkType;

    /**
     * @var string Package type of connection groups. Valid values: `Thunder` (general connection group), `Accelerator` (game accelerator connection group), and `CrossBorder` (cross-border connection group).
     */
    public $PackageType;

    /**
     * @var integer (Disused) HTTP3.0 is supported by default when `IPAddressVersion` is `IPv4`.
     */
    public $Http3Supported;

    /**
     * @param string $AccessRegion Access (acceleration) region of the connection. The value can be obtained via the DescribeAccessRegionsByDestRegion API.
     * @param string $RealServerRegion Origin server region of the connection. The value can be obtained via the DescribeDestRegions API.
     * @param integer $Bandwidth Connection bandwidth cap. Unit: Mbps.
     * @param integer $Concurrent Connection concurrence cap, which indicates the maximum number of simultaneous online connections. Unit: 10,000 connections.
     * @param string $GroupId Connection group ID that needs to be entered when a connection is created in a connection group
     * @param string $IPAddressVersion IP version. Valid values: `IPv4` (default), `IPv6`.
     * @param string $NetworkType Network type. Valid values: `normal` (default), `cn2`
     * @param string $PackageType Package type of connection groups. Valid values: `Thunder` (general connection group), `Accelerator` (game accelerator connection group), and `CrossBorder` (cross-border connection group).
     * @param integer $Http3Supported (Disused) HTTP3.0 is supported by default when `IPAddressVersion` is `IPv4`.
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
        if (array_key_exists("AccessRegion",$param) and $param["AccessRegion"] !== null) {
            $this->AccessRegion = $param["AccessRegion"];
        }

        if (array_key_exists("RealServerRegion",$param) and $param["RealServerRegion"] !== null) {
            $this->RealServerRegion = $param["RealServerRegion"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Concurrent",$param) and $param["Concurrent"] !== null) {
            $this->Concurrent = $param["Concurrent"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("IPAddressVersion",$param) and $param["IPAddressVersion"] !== null) {
            $this->IPAddressVersion = $param["IPAddressVersion"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("Http3Supported",$param) and $param["Http3Supported"] !== null) {
            $this->Http3Supported = $param["Http3Supported"];
        }
    }
}
