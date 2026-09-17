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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Traffic monitoring details of the NAT gateway.
 *
 * @method string getPrivateIpAddress() Obtain Source `IP` address.
 * @method void setPrivateIpAddress(string $PrivateIpAddress) Set Source `IP` address.
 * @method integer getInPkg() Obtain Number of inbound packets.
 * @method void setInPkg(integer $InPkg) Set Number of inbound packets.
 * @method integer getOutPkg() Obtain Number of outbound packets.
 * @method void setOutPkg(integer $OutPkg) Set Number of outbound packets.
 * @method integer getInTraffic() Obtain Inbound traffic. Unit: `bytes`.
 * @method void setInTraffic(integer $InTraffic) Set Inbound traffic. Unit: `bytes`.
 * @method integer getOutTraffic() Obtain Outbound traffic. Unit: `bytes`.
 * @method void setOutTraffic(integer $OutTraffic) Set Outbound traffic. Unit: `bytes`.
 * @method integer getConcurrentConnectionCount() Obtain Number of concurrent connections. Only standard NAT gateways support this parameter.
 * @method void setConcurrentConnectionCount(integer $ConcurrentConnectionCount) Set Number of concurrent connections. Only standard NAT gateways support this parameter.
 * @method integer getNewConnectionRate() Obtain New connection rate. Only standard NAT gateways support this parameter.
 * @method void setNewConnectionRate(integer $NewConnectionRate) Set New connection rate. Only standard NAT gateways support this parameter.
 */
class NatGatewayFlowMonitorDetail extends AbstractModel
{
    /**
     * @var string Source `IP` address.
     */
    public $PrivateIpAddress;

    /**
     * @var integer Number of inbound packets.
     */
    public $InPkg;

    /**
     * @var integer Number of outbound packets.
     */
    public $OutPkg;

    /**
     * @var integer Inbound traffic. Unit: `bytes`.
     */
    public $InTraffic;

    /**
     * @var integer Outbound traffic. Unit: `bytes`.
     */
    public $OutTraffic;

    /**
     * @var integer Number of concurrent connections. Only standard NAT gateways support this parameter.
     */
    public $ConcurrentConnectionCount;

    /**
     * @var integer New connection rate. Only standard NAT gateways support this parameter.
     */
    public $NewConnectionRate;

    /**
     * @param string $PrivateIpAddress Source `IP` address.
     * @param integer $InPkg Number of inbound packets.
     * @param integer $OutPkg Number of outbound packets.
     * @param integer $InTraffic Inbound traffic. Unit: `bytes`.
     * @param integer $OutTraffic Outbound traffic. Unit: `bytes`.
     * @param integer $ConcurrentConnectionCount Number of concurrent connections. Only standard NAT gateways support this parameter.
     * @param integer $NewConnectionRate New connection rate. Only standard NAT gateways support this parameter.
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
        if (array_key_exists("PrivateIpAddress",$param) and $param["PrivateIpAddress"] !== null) {
            $this->PrivateIpAddress = $param["PrivateIpAddress"];
        }

        if (array_key_exists("InPkg",$param) and $param["InPkg"] !== null) {
            $this->InPkg = $param["InPkg"];
        }

        if (array_key_exists("OutPkg",$param) and $param["OutPkg"] !== null) {
            $this->OutPkg = $param["OutPkg"];
        }

        if (array_key_exists("InTraffic",$param) and $param["InTraffic"] !== null) {
            $this->InTraffic = $param["InTraffic"];
        }

        if (array_key_exists("OutTraffic",$param) and $param["OutTraffic"] !== null) {
            $this->OutTraffic = $param["OutTraffic"];
        }

        if (array_key_exists("ConcurrentConnectionCount",$param) and $param["ConcurrentConnectionCount"] !== null) {
            $this->ConcurrentConnectionCount = $param["ConcurrentConnectionCount"];
        }

        if (array_key_exists("NewConnectionRate",$param) and $param["NewConnectionRate"] !== null) {
            $this->NewConnectionRate = $param["NewConnectionRate"];
        }
    }
}
