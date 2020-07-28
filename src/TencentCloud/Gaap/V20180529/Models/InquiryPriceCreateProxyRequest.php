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
 * InquiryPriceCreateProxy request structure.
 *
 * @method string getAccessRegion() Obtain Acceleration region name.
 * @method void setAccessRegion(string $AccessRegion) Set Acceleration region name.
 * @method integer getBandwidth() Obtain Connection bandwidth cap. Unit: Mbps.
 * @method void setBandwidth(integer $Bandwidth) Set Connection bandwidth cap. Unit: Mbps.
 * @method string getDestRegion() Obtain Origin server region name. It's an old parameter, please switch to RealServerRegion.
 * @method void setDestRegion(string $DestRegion) Set Origin server region name. It's an old parameter, please switch to RealServerRegion.
 * @method integer getConcurrency() Obtain Upper limit of connection concurrence, which indicates a number of simultaneous online connections. Unit: 10,000 connections. It's an old parameter, please switch to Concurrent.
 * @method void setConcurrency(integer $Concurrency) Set Upper limit of connection concurrence, which indicates a number of simultaneous online connections. Unit: 10,000 connections. It's an old parameter, please switch to Concurrent.
 * @method string getRealServerRegion() Obtain Origin server region name; It's a new parameter.
 * @method void setRealServerRegion(string $RealServerRegion) Set Origin server region name; It's a new parameter.
 * @method integer getConcurrent() Obtain Upper limit of connection concurrence, which indicates a number of simultaneous online connections. Unit: 10,000 connections. It's a new parameter.
 * @method void setConcurrent(integer $Concurrent) Set Upper limit of connection concurrence, which indicates a number of simultaneous online connections. Unit: 10,000 connections. It's a new parameter.
 * @method integer getBillingType() Obtain Billing mode. Valid values: 0: bill-by-bandwidth (default value); 1: bill-by-traffic.
 * @method void setBillingType(integer $BillingType) Set Billing mode. Valid values: 0: bill-by-bandwidth (default value); 1: bill-by-traffic.
 */
class InquiryPriceCreateProxyRequest extends AbstractModel
{
    /**
     * @var string Acceleration region name.
     */
    public $AccessRegion;

    /**
     * @var integer Connection bandwidth cap. Unit: Mbps.
     */
    public $Bandwidth;

    /**
     * @var string Origin server region name. It's an old parameter, please switch to RealServerRegion.
     */
    public $DestRegion;

    /**
     * @var integer Upper limit of connection concurrence, which indicates a number of simultaneous online connections. Unit: 10,000 connections. It's an old parameter, please switch to Concurrent.
     */
    public $Concurrency;

    /**
     * @var string Origin server region name; It's a new parameter.
     */
    public $RealServerRegion;

    /**
     * @var integer Upper limit of connection concurrence, which indicates a number of simultaneous online connections. Unit: 10,000 connections. It's a new parameter.
     */
    public $Concurrent;

    /**
     * @var integer Billing mode. Valid values: 0: bill-by-bandwidth (default value); 1: bill-by-traffic.
     */
    public $BillingType;

    /**
     * @param string $AccessRegion Acceleration region name.
     * @param integer $Bandwidth Connection bandwidth cap. Unit: Mbps.
     * @param string $DestRegion Origin server region name. It's an old parameter, please switch to RealServerRegion.
     * @param integer $Concurrency Upper limit of connection concurrence, which indicates a number of simultaneous online connections. Unit: 10,000 connections. It's an old parameter, please switch to Concurrent.
     * @param string $RealServerRegion Origin server region name; It's a new parameter.
     * @param integer $Concurrent Upper limit of connection concurrence, which indicates a number of simultaneous online connections. Unit: 10,000 connections. It's a new parameter.
     * @param integer $BillingType Billing mode. Valid values: 0: bill-by-bandwidth (default value); 1: bill-by-traffic.
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

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("DestRegion",$param) and $param["DestRegion"] !== null) {
            $this->DestRegion = $param["DestRegion"];
        }

        if (array_key_exists("Concurrency",$param) and $param["Concurrency"] !== null) {
            $this->Concurrency = $param["Concurrency"];
        }

        if (array_key_exists("RealServerRegion",$param) and $param["RealServerRegion"] !== null) {
            $this->RealServerRegion = $param["RealServerRegion"];
        }

        if (array_key_exists("Concurrent",$param) and $param["Concurrent"] !== null) {
            $this->Concurrent = $param["Concurrent"];
        }

        if (array_key_exists("BillingType",$param) and $param["BillingType"] !== null) {
            $this->BillingType = $param["BillingType"];
        }
    }
}
