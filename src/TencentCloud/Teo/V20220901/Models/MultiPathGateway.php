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
 * Multi-channel security gateway details
 *
 * @method string getGatewayId() Obtain Gateway ID.
 * @method void setGatewayId(string $GatewayId) Set Gateway ID.
 * @method string getGatewayName() Obtain Gateway name.
 * @method void setGatewayName(string $GatewayName) Set Gateway name.
 * @method string getGatewayType() Obtain Gateway type. Valid values:
<li> cloud: Cloud Gateway, a gateway created and managed by Tencent Cloud.</li>
<li> private: private gateway, a Private Gateway deployed by the user.</li>
 * @method void setGatewayType(string $GatewayType) Set Gateway type. Valid values:
<li> cloud: Cloud Gateway, a gateway created and managed by Tencent Cloud.</li>
<li> private: private gateway, a Private Gateway deployed by the user.</li>
 * @method integer getGatewayPort() Obtain Gateway port. Range: 1–65535 (excluding 8888).
 * @method void setGatewayPort(integer $GatewayPort) Set Gateway port. Range: 1–65535 (excluding 8888).
 * @method string getStatus() Obtain Gateway status. Valid values:
<li> creating : Creating;</li>
<li> online : Online;</li>
<li> offline : Offline;</li>
<li> disable : disabled.</li>
 * @method void setStatus(string $Status) Set Gateway status. Valid values:
<li> creating : Creating;</li>
<li> online : Online;</li>
<li> offline : Offline;</li>
<li> disable : disabled.</li>
 * @method string getGatewayIP() Obtain Gateway IP in IPv4 format.
 * @method void setGatewayIP(string $GatewayIP) Set Gateway IP in IPv4 format.
 * @method string getRegionId() Obtain Gateway region ID. You can obtain the RegionId list through the DescribeMultiPathGatewayRegions API.
 * @method void setRegionId(string $RegionId) Set Gateway region ID. You can obtain the RegionId list through the DescribeMultiPathGatewayRegions API.
 * @method array getLines() Obtain Line information. It will be returned when querying gateway information details via DescribeMultiPathGateway, but not when querying the gateway list via DescribeMultiPathGateways.
 * @method void setLines(array $Lines) Set Line information. It will be returned when querying gateway information details via DescribeMultiPathGateway, but not when querying the gateway list via DescribeMultiPathGateways.
 * @method string getNeedConfirm() Obtain Whether the origin-pull IP list of the gateway has changed and needs confirmation. Valid values: <li>true: The origin-pull IP list has changed and needs confirmation;</li><li>false: The origin-pull IP list has not changed and does not need confirmation.</li>
 * @method void setNeedConfirm(string $NeedConfirm) Set Whether the origin-pull IP list of the gateway has changed and needs confirmation. Valid values: <li>true: The origin-pull IP list has changed and needs confirmation;</li><li>false: The origin-pull IP list has not changed and does not need confirmation.</li>
 */
class MultiPathGateway extends AbstractModel
{
    /**
     * @var string Gateway ID.
     */
    public $GatewayId;

    /**
     * @var string Gateway name.
     */
    public $GatewayName;

    /**
     * @var string Gateway type. Valid values:
<li> cloud: Cloud Gateway, a gateway created and managed by Tencent Cloud.</li>
<li> private: private gateway, a Private Gateway deployed by the user.</li>
     */
    public $GatewayType;

    /**
     * @var integer Gateway port. Range: 1–65535 (excluding 8888).
     */
    public $GatewayPort;

    /**
     * @var string Gateway status. Valid values:
<li> creating : Creating;</li>
<li> online : Online;</li>
<li> offline : Offline;</li>
<li> disable : disabled.</li>
     */
    public $Status;

    /**
     * @var string Gateway IP in IPv4 format.
     */
    public $GatewayIP;

    /**
     * @var string Gateway region ID. You can obtain the RegionId list through the DescribeMultiPathGatewayRegions API.
     */
    public $RegionId;

    /**
     * @var array Line information. It will be returned when querying gateway information details via DescribeMultiPathGateway, but not when querying the gateway list via DescribeMultiPathGateways.
     */
    public $Lines;

    /**
     * @var string Whether the origin-pull IP list of the gateway has changed and needs confirmation. Valid values: <li>true: The origin-pull IP list has changed and needs confirmation;</li><li>false: The origin-pull IP list has not changed and does not need confirmation.</li>
     */
    public $NeedConfirm;

    /**
     * @param string $GatewayId Gateway ID.
     * @param string $GatewayName Gateway name.
     * @param string $GatewayType Gateway type. Valid values:
<li> cloud: Cloud Gateway, a gateway created and managed by Tencent Cloud.</li>
<li> private: private gateway, a Private Gateway deployed by the user.</li>
     * @param integer $GatewayPort Gateway port. Range: 1–65535 (excluding 8888).
     * @param string $Status Gateway status. Valid values:
<li> creating : Creating;</li>
<li> online : Online;</li>
<li> offline : Offline;</li>
<li> disable : disabled.</li>
     * @param string $GatewayIP Gateway IP in IPv4 format.
     * @param string $RegionId Gateway region ID. You can obtain the RegionId list through the DescribeMultiPathGatewayRegions API.
     * @param array $Lines Line information. It will be returned when querying gateway information details via DescribeMultiPathGateway, but not when querying the gateway list via DescribeMultiPathGateways.
     * @param string $NeedConfirm Whether the origin-pull IP list of the gateway has changed and needs confirmation. Valid values: <li>true: The origin-pull IP list has changed and needs confirmation;</li><li>false: The origin-pull IP list has not changed and does not need confirmation.</li>
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("GatewayName",$param) and $param["GatewayName"] !== null) {
            $this->GatewayName = $param["GatewayName"];
        }

        if (array_key_exists("GatewayType",$param) and $param["GatewayType"] !== null) {
            $this->GatewayType = $param["GatewayType"];
        }

        if (array_key_exists("GatewayPort",$param) and $param["GatewayPort"] !== null) {
            $this->GatewayPort = $param["GatewayPort"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("GatewayIP",$param) and $param["GatewayIP"] !== null) {
            $this->GatewayIP = $param["GatewayIP"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("Lines",$param) and $param["Lines"] !== null) {
            $this->Lines = [];
            foreach ($param["Lines"] as $key => $value){
                $obj = new MultiPathGatewayLine();
                $obj->deserialize($value);
                array_push($this->Lines, $obj);
            }
        }

        if (array_key_exists("NeedConfirm",$param) and $param["NeedConfirm"] !== null) {
            $this->NeedConfirm = $param["NeedConfirm"];
        }
    }
}
