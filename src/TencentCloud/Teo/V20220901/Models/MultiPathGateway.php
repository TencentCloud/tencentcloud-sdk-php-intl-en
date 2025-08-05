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
 * Multi-Channel security gateway details.
 *
 * @method string getGatewayId() Obtain Specifies the gateway ID.
 * @method void setGatewayId(string $GatewayId) Set Specifies the gateway ID.
 * @method string getGatewayName() Obtain Gateway name.
 * @method void setGatewayName(string $GatewayName) Set Gateway name.
 * @method string getGatewayType() Obtain Gateway type. valid values:
<Li>Cloud: cloud gateway,  created and managed by Tencent cloud.</li>
<Li>Private: private gateway, deployed by cutomer.</li>
 * @method void setGatewayType(string $GatewayType) Set Gateway type. valid values:
<Li>Cloud: cloud gateway,  created and managed by Tencent cloud.</li>
<Li>Private: private gateway, deployed by cutomer.</li>
 * @method integer getGatewayPort() Obtain Gateway port. value range: 1-65535 (excluding 8888).
 * @method void setGatewayPort(integer $GatewayPort) Set Gateway port. value range: 1-65535 (excluding 8888).
 * @method string getStatus() Obtain Gateway status. valid values:
<Li>creating: The gateway is being created. </li>
<Li>online: The gateway is online and operational.</li>
<Li>offline: The gateway is offline and unavailable.</li>
<Li>disabled: The gateway has been disabled.</li>
 * @method void setStatus(string $Status) Set Gateway status. valid values:
<Li>creating: The gateway is being created. </li>
<Li>online: The gateway is online and operational.</li>
<Li>offline: The gateway is offline and unavailable.</li>
<Li>disabled: The gateway has been disabled.</li>
 * @method string getGatewayIP() Obtain Gateway IP, in IPv4 format.
 * @method void setGatewayIP(string $GatewayIP) Set Gateway IP, in IPv4 format.
 * @method string getRegionId() Obtain Gateway region Id. which can be obtained from the DescribeMultiPathGatewayRegions API.
 * @method void setRegionId(string $RegionId) Set Gateway region Id. which can be obtained from the DescribeMultiPathGatewayRegions API.
 * @method array getLines() Obtain Line information. The line information will be returned when querying gateway information with DescribeMultiPathGateway ande not returned when querying the gateway list with DescribeMultiPathGateways.
 * @method void setLines(array $Lines) Set Line information. The line information will be returned when querying gateway information with DescribeMultiPathGateway ande not returned when querying the gateway list with DescribeMultiPathGateways.
 */
class MultiPathGateway extends AbstractModel
{
    /**
     * @var string Specifies the gateway ID.
     */
    public $GatewayId;

    /**
     * @var string Gateway name.
     */
    public $GatewayName;

    /**
     * @var string Gateway type. valid values:
<Li>Cloud: cloud gateway,  created and managed by Tencent cloud.</li>
<Li>Private: private gateway, deployed by cutomer.</li>
     */
    public $GatewayType;

    /**
     * @var integer Gateway port. value range: 1-65535 (excluding 8888).
     */
    public $GatewayPort;

    /**
     * @var string Gateway status. valid values:
<Li>creating: The gateway is being created. </li>
<Li>online: The gateway is online and operational.</li>
<Li>offline: The gateway is offline and unavailable.</li>
<Li>disabled: The gateway has been disabled.</li>
     */
    public $Status;

    /**
     * @var string Gateway IP, in IPv4 format.
     */
    public $GatewayIP;

    /**
     * @var string Gateway region Id. which can be obtained from the DescribeMultiPathGatewayRegions API.
     */
    public $RegionId;

    /**
     * @var array Line information. The line information will be returned when querying gateway information with DescribeMultiPathGateway ande not returned when querying the gateway list with DescribeMultiPathGateways.
     */
    public $Lines;

    /**
     * @param string $GatewayId Specifies the gateway ID.
     * @param string $GatewayName Gateway name.
     * @param string $GatewayType Gateway type. valid values:
<Li>Cloud: cloud gateway,  created and managed by Tencent cloud.</li>
<Li>Private: private gateway, deployed by cutomer.</li>
     * @param integer $GatewayPort Gateway port. value range: 1-65535 (excluding 8888).
     * @param string $Status Gateway status. valid values:
<Li>creating: The gateway is being created. </li>
<Li>online: The gateway is online and operational.</li>
<Li>offline: The gateway is offline and unavailable.</li>
<Li>disabled: The gateway has been disabled.</li>
     * @param string $GatewayIP Gateway IP, in IPv4 format.
     * @param string $RegionId Gateway region Id. which can be obtained from the DescribeMultiPathGatewayRegions API.
     * @param array $Lines Line information. The line information will be returned when querying gateway information with DescribeMultiPathGateway ande not returned when querying the gateway list with DescribeMultiPathGateways.
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
    }
}
