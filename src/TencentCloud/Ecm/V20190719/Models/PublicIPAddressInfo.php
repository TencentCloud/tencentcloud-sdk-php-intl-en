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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Public IP information of the instance.
 *
 * @method string getChargeMode() Obtain Billing mode.
 * @method void setChargeMode(string $ChargeMode) Set Billing mode.
 * @method string getPublicIPAddress() Obtain Public IP of the instance.
 * @method void setPublicIPAddress(string $PublicIPAddress) Set Public IP of the instance.
 * @method ISP getISP() Obtain Public IP ISP of the instance.
 * @method void setISP(ISP $ISP) Set Public IP ISP of the instance.
 * @method integer getMaxBandwidthOut() Obtain Outbound bandwidth cap of the instance in Mbps.
 * @method void setMaxBandwidthOut(integer $MaxBandwidthOut) Set Outbound bandwidth cap of the instance in Mbps.
 * @method integer getMaxBandwidthIn() Obtain Inbound bandwidth cap of the instance in Mbps.
 * @method void setMaxBandwidthIn(integer $MaxBandwidthIn) Set Inbound bandwidth cap of the instance in Mbps.
 */
class PublicIPAddressInfo extends AbstractModel
{
    /**
     * @var string Billing mode.
     */
    public $ChargeMode;

    /**
     * @var string Public IP of the instance.
     */
    public $PublicIPAddress;

    /**
     * @var ISP Public IP ISP of the instance.
     */
    public $ISP;

    /**
     * @var integer Outbound bandwidth cap of the instance in Mbps.
     */
    public $MaxBandwidthOut;

    /**
     * @var integer Inbound bandwidth cap of the instance in Mbps.
     */
    public $MaxBandwidthIn;

    /**
     * @param string $ChargeMode Billing mode.
     * @param string $PublicIPAddress Public IP of the instance.
     * @param ISP $ISP Public IP ISP of the instance.
     * @param integer $MaxBandwidthOut Outbound bandwidth cap of the instance in Mbps.
     * @param integer $MaxBandwidthIn Inbound bandwidth cap of the instance in Mbps.
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
        if (array_key_exists("ChargeMode",$param) and $param["ChargeMode"] !== null) {
            $this->ChargeMode = $param["ChargeMode"];
        }

        if (array_key_exists("PublicIPAddress",$param) and $param["PublicIPAddress"] !== null) {
            $this->PublicIPAddress = $param["PublicIPAddress"];
        }

        if (array_key_exists("ISP",$param) and $param["ISP"] !== null) {
            $this->ISP = new ISP();
            $this->ISP->deserialize($param["ISP"]);
        }

        if (array_key_exists("MaxBandwidthOut",$param) and $param["MaxBandwidthOut"] !== null) {
            $this->MaxBandwidthOut = $param["MaxBandwidthOut"];
        }

        if (array_key_exists("MaxBandwidthIn",$param) and $param["MaxBandwidthIn"] !== null) {
            $this->MaxBandwidthIn = $param["MaxBandwidthIn"];
        }
    }
}
