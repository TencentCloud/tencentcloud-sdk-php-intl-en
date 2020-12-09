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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The gateway traffic monitoring details
 *
 * @method string getPrivateIpAddress() Obtain Origin `IP`.
 * @method void setPrivateIpAddress(string $PrivateIpAddress) Set Origin `IP`.
 * @method integer getInPkg() Obtain Inbound packets.
 * @method void setInPkg(integer $InPkg) Set Inbound packets.
 * @method integer getOutPkg() Obtain Outbound packets.
 * @method void setOutPkg(integer $OutPkg) Set Outbound packets.
 * @method integer getInTraffic() Obtain Inbound traffic, in Byte.
 * @method void setInTraffic(integer $InTraffic) Set Inbound traffic, in Byte.
 * @method integer getOutTraffic() Obtain Outbound traffic, in Byte.
 * @method void setOutTraffic(integer $OutTraffic) Set Outbound traffic, in Byte.
 */
class GatewayFlowMonitorDetail extends AbstractModel
{
    /**
     * @var string Origin `IP`.
     */
    public $PrivateIpAddress;

    /**
     * @var integer Inbound packets.
     */
    public $InPkg;

    /**
     * @var integer Outbound packets.
     */
    public $OutPkg;

    /**
     * @var integer Inbound traffic, in Byte.
     */
    public $InTraffic;

    /**
     * @var integer Outbound traffic, in Byte.
     */
    public $OutTraffic;

    /**
     * @param string $PrivateIpAddress Origin `IP`.
     * @param integer $InPkg Inbound packets.
     * @param integer $OutPkg Outbound packets.
     * @param integer $InTraffic Inbound traffic, in Byte.
     * @param integer $OutTraffic Outbound traffic, in Byte.
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
    }
}
