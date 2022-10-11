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
 * @method string getIPAddressVersion() Obtain IP version. Valid values: `IPv4` (default), `IPv6`.
 * @method void setIPAddressVersion(string $IPAddressVersion) Set IP version. Valid values: `IPv4` (default), `IPv6`.
 * @method string getNetworkType() Obtain Network type. Valid values: `normal` (default), `cn2`
 * @method void setNetworkType(string $NetworkType) Set Network type. Valid values: `normal` (default), `cn2`
 * @method string getPackageType() Obtain Package type of connection groups. Valid values: `Thunder` (general), `Accelerator` (specific for games), and `CrossBorder` (cross-MLC-border connection).
 * @method void setPackageType(string $PackageType) Set Package type of connection groups. Valid values: `Thunder` (general), `Accelerator` (specific for games), and `CrossBorder` (cross-MLC-border connection).
 * @method integer getHttp3Supported() Obtain (Disused) HTTP3.0 is supported by default when `IPAddressVersion` is `IPv4`.
 * @method void setHttp3Supported(integer $Http3Supported) Set (Disused) HTTP3.0 is supported by default when `IPAddressVersion` is `IPv4`.
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
     * @var string IP version. Valid values: `IPv4` (default), `IPv6`.
     */
    public $IPAddressVersion;

    /**
     * @var string Network type. Valid values: `normal` (default), `cn2`
     */
    public $NetworkType;

    /**
     * @var string Package type of connection groups. Valid values: `Thunder` (general), `Accelerator` (specific for games), and `CrossBorder` (cross-MLC-border connection).
     */
    public $PackageType;

    /**
     * @var integer (Disused) HTTP3.0 is supported by default when `IPAddressVersion` is `IPv4`.
     */
    public $Http3Supported;

    /**
     * @param string $AccessRegion Acceleration region name.
     * @param integer $Bandwidth Connection bandwidth cap. Unit: Mbps.
     * @param string $DestRegion Origin server region name. It's an old parameter, please switch to RealServerRegion.
     * @param integer $Concurrency Upper limit of connection concurrence, which indicates a number of simultaneous online connections. Unit: 10,000 connections. It's an old parameter, please switch to Concurrent.
     * @param string $RealServerRegion Origin server region name; It's a new parameter.
     * @param integer $Concurrent Upper limit of connection concurrence, which indicates a number of simultaneous online connections. Unit: 10,000 connections. It's a new parameter.
     * @param integer $BillingType Billing mode. Valid values: 0: bill-by-bandwidth (default value); 1: bill-by-traffic.
     * @param string $IPAddressVersion IP version. Valid values: `IPv4` (default), `IPv6`.
     * @param string $NetworkType Network type. Valid values: `normal` (default), `cn2`
     * @param string $PackageType Package type of connection groups. Valid values: `Thunder` (general), `Accelerator` (specific for games), and `CrossBorder` (cross-MLC-border connection).
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
