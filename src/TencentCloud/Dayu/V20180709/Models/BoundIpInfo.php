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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP object bound to Anti-DDoS Pro
 *
 * @method string getIp() Obtain IP address
 * @method void setIp(string $Ip) Set IP address
 * @method string getBizType() Obtain Category of product that can be bound. Valid values: public (CVM and CLB), bm (BM), eni (ENI), vpngw (VPN gateway), natgw (NAT gateway), waf (WAF), fpc (financial products), gaap (GAAP), and other (Hosted IP).
 * @method void setBizType(string $BizType) Set Category of product that can be bound. Valid values: public (CVM and CLB), bm (BM), eni (ENI), vpngw (VPN gateway), natgw (NAT gateway), waf (WAF), fpc (financial products), gaap (GAAP), and other (Hosted IP).
 * @method string getDeviceType() Obtain Subtype under product type. Valid values: [cvm (CVM), lb (CLB), eni (ENI), vpngw (VPN), natgw (NAT), waf (WAF), fpc (finance), gaap (GAAP), other (hosted IP), eip (BM EIP)]
 * @method void setDeviceType(string $DeviceType) Set Subtype under product type. Valid values: [cvm (CVM), lb (CLB), eni (ENI), vpngw (VPN), natgw (NAT), waf (WAF), fpc (finance), gaap (GAAP), other (hosted IP), eip (BM EIP)]
 * @method string getInstanceId() Obtain Resource instance ID of IP. This field is required when binding a new IP. For example, if it is an ENI IP, enter `ID(eni-*)` of the ENI for `InstanceId`; if it is a hosted IP without corresponding resource instance ID, enter "none";
 * @method void setInstanceId(string $InstanceId) Set Resource instance ID of IP. This field is required when binding a new IP. For example, if it is an ENI IP, enter `ID(eni-*)` of the ENI for `InstanceId`; if it is a hosted IP without corresponding resource instance ID, enter "none";
 */
class BoundIpInfo extends AbstractModel
{
    /**
     * @var string IP address
     */
    public $Ip;

    /**
     * @var string Category of product that can be bound. Valid values: public (CVM and CLB), bm (BM), eni (ENI), vpngw (VPN gateway), natgw (NAT gateway), waf (WAF), fpc (financial products), gaap (GAAP), and other (Hosted IP).
     */
    public $BizType;

    /**
     * @var string Subtype under product type. Valid values: [cvm (CVM), lb (CLB), eni (ENI), vpngw (VPN), natgw (NAT), waf (WAF), fpc (finance), gaap (GAAP), other (hosted IP), eip (BM EIP)]
     */
    public $DeviceType;

    /**
     * @var string Resource instance ID of IP. This field is required when binding a new IP. For example, if it is an ENI IP, enter `ID(eni-*)` of the ENI for `InstanceId`; if it is a hosted IP without corresponding resource instance ID, enter "none";
     */
    public $InstanceId;

    /**
     * @param string $Ip IP address
     * @param string $BizType Category of product that can be bound. Valid values: public (CVM and CLB), bm (BM), eni (ENI), vpngw (VPN gateway), natgw (NAT gateway), waf (WAF), fpc (financial products), gaap (GAAP), and other (Hosted IP).
     * @param string $DeviceType Subtype under product type. Valid values: [cvm (CVM), lb (CLB), eni (ENI), vpngw (VPN), natgw (NAT), waf (WAF), fpc (finance), gaap (GAAP), other (hosted IP), eip (BM EIP)]
     * @param string $InstanceId Resource instance ID of IP. This field is required when binding a new IP. For example, if it is an ENI IP, enter `ID(eni-*)` of the ENI for `InstanceId`; if it is a hosted IP without corresponding resource instance ID, enter "none";
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
