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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describes the accessibility of an instance in the public network, including its network billing method, maximum bandwidth, etc.
 *
 * @method string getInternetChargeType() Obtain Network connection billing plan. Valid value:

<li>TRAFFIC_POSTPAID_BY_HOUR: pay after use. You are billed for your traffic, by the hour. </li>
<li>BANDWIDTH_PACKAGE: Bandwidth package user. </li>
 * @method void setInternetChargeType(string $InternetChargeType) Set Network connection billing plan. Valid value:

<li>TRAFFIC_POSTPAID_BY_HOUR: pay after use. You are billed for your traffic, by the hour. </li>
<li>BANDWIDTH_PACKAGE: Bandwidth package user. </li>
 * @method integer getInternetMaxBandwidthOut() Obtain The maximum outbound bandwidth of the public network, in Mbps. The default value is 0 Mbps. The upper limit of bandwidth varies for different models. For more information, see [Purchase Network Bandwidth](https://intl.cloud.tencent.com/document/product/213/12523?from_cn_redirect=1).
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set The maximum outbound bandwidth of the public network, in Mbps. The default value is 0 Mbps. The upper limit of bandwidth varies for different models. For more information, see [Purchase Network Bandwidth](https://intl.cloud.tencent.com/document/product/213/12523?from_cn_redirect=1).
 * @method boolean getPublicIpAssigned() Obtain Whether to allocate a public IP address. Valid values:<br><li>true: Allocate a public IP address.</li><li>false: Do not allocate a public IP address.</li><br>When the public network bandwidth is greater than 0 Mbps, you can choose whether to enable the public IP address. The public IP address is enabled by default. When the public network bandwidth is 0, allocating the public IP address is not supported. This parameter is only used as an input parameter in the RunInstances API.
 * @method void setPublicIpAssigned(boolean $PublicIpAssigned) Set Whether to allocate a public IP address. Valid values:<br><li>true: Allocate a public IP address.</li><li>false: Do not allocate a public IP address.</li><br>When the public network bandwidth is greater than 0 Mbps, you can choose whether to enable the public IP address. The public IP address is enabled by default. When the public network bandwidth is 0, allocating the public IP address is not supported. This parameter is only used as an input parameter in the RunInstances API.
 * @method string getBandwidthPackageId() Obtain Bandwidth package ID. it can be obtained through the `BandwidthPackageId` in the return value from the DescribeBandwidthPackages api. this parameter is used as an input parameter only in the RunInstances api.
 * @method void setBandwidthPackageId(string $BandwidthPackageId) Set Bandwidth package ID. it can be obtained through the `BandwidthPackageId` in the return value from the DescribeBandwidthPackages api. this parameter is used as an input parameter only in the RunInstances api.
 * @method string getInternetServiceProvider() Obtain Describes the line type. for details, refer to [EIP IP address types](https://www.tencentcloud.com/zh/document/product/213/5733). default value: `BGP`.
 <li>BGP Default: BGP</li>
For a user who has activated the static single-line IP allowlist, possible values are:
 <li>CMCC: China Mobile</li> <li>CTCC: China Telecom</li> <li>CUCC: China Unicom</li>
Note: Only certain regions support static single-line IP addresses.
 * @method void setInternetServiceProvider(string $InternetServiceProvider) Set Describes the line type. for details, refer to [EIP IP address types](https://www.tencentcloud.com/zh/document/product/213/5733). default value: `BGP`.
 <li>BGP Default: BGP</li>
For a user who has activated the static single-line IP allowlist, possible values are:
 <li>CMCC: China Mobile</li> <li>CTCC: China Telecom</li> <li>CUCC: China Unicom</li>
Note: Only certain regions support static single-line IP addresses.
 * @method string getIPv4AddressType() Obtain Type of public IP address.

<li> WanIP: Ordinary public IP address. </li> <li> HighQualityEIP: High Quality EIP is supported only in Singapore and Hong Kong. </li> <li> AntiDDoSEIP: Anti-DDoS IP is supported only in specific regions. For details, see [EIP Product Overview](https://www.tencentcloud.com/zh/document/product/213/5733). </li> 
Specify the type of public IPv4 address to assign a public IPv4 address to the resource. HighQualityEIP and AntiDDoSEIP features are gradually released in select regions.
This feature is currently in gradually released phase. To access it, please [contact us](https://console.tencentcloud.com/workorder).
 * @method void setIPv4AddressType(string $IPv4AddressType) Set Type of public IP address.

<li> WanIP: Ordinary public IP address. </li> <li> HighQualityEIP: High Quality EIP is supported only in Singapore and Hong Kong. </li> <li> AntiDDoSEIP: Anti-DDoS IP is supported only in specific regions. For details, see [EIP Product Overview](https://www.tencentcloud.com/zh/document/product/213/5733). </li> 
Specify the type of public IPv4 address to assign a public IPv4 address to the resource. HighQualityEIP and AntiDDoSEIP features are gradually released in select regions.
This feature is currently in gradually released phase. To access it, please [contact us](https://console.tencentcloud.com/workorder).
 * @method string getIPv6AddressType() Obtain Indicates the type of EIPv6. Valid values:

<li>EIPv6: common IPv6</li>
<li>HighQualityEIPv6: High Quality EIPv6</li>
Note: Contact the product team to enable the dedicated IPv6 allowlist. The dedicated IPv6 is only supported in some regions. 

Default: `EIPv6`

This feature is currently in gradually released phase. To access it, please [contact us](https://console.tencentcloud.com/workorder).
 * @method void setIPv6AddressType(string $IPv6AddressType) Set Indicates the type of EIPv6. Valid values:

<li>EIPv6: common IPv6</li>
<li>HighQualityEIPv6: High Quality EIPv6</li>
Note: Contact the product team to enable the dedicated IPv6 allowlist. The dedicated IPv6 is only supported in some regions. 

Default: `EIPv6`

This feature is currently in gradually released phase. To access it, please [contact us](https://console.tencentcloud.com/workorder).
 * @method string getAntiDDoSPackageId() Obtain Anti-DDoS service package ID. This is required when you want to request an Anti-DDoS IP.
 * @method void setAntiDDoSPackageId(string $AntiDDoSPackageId) Set Anti-DDoS service package ID. This is required when you want to request an Anti-DDoS IP.
 */
class InternetAccessible extends AbstractModel
{
    /**
     * @var string Network connection billing plan. Valid value:

<li>TRAFFIC_POSTPAID_BY_HOUR: pay after use. You are billed for your traffic, by the hour. </li>
<li>BANDWIDTH_PACKAGE: Bandwidth package user. </li>
     */
    public $InternetChargeType;

    /**
     * @var integer The maximum outbound bandwidth of the public network, in Mbps. The default value is 0 Mbps. The upper limit of bandwidth varies for different models. For more information, see [Purchase Network Bandwidth](https://intl.cloud.tencent.com/document/product/213/12523?from_cn_redirect=1).
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var boolean Whether to allocate a public IP address. Valid values:<br><li>true: Allocate a public IP address.</li><li>false: Do not allocate a public IP address.</li><br>When the public network bandwidth is greater than 0 Mbps, you can choose whether to enable the public IP address. The public IP address is enabled by default. When the public network bandwidth is 0, allocating the public IP address is not supported. This parameter is only used as an input parameter in the RunInstances API.
     */
    public $PublicIpAssigned;

    /**
     * @var string Bandwidth package ID. it can be obtained through the `BandwidthPackageId` in the return value from the DescribeBandwidthPackages api. this parameter is used as an input parameter only in the RunInstances api.
     */
    public $BandwidthPackageId;

    /**
     * @var string Describes the line type. for details, refer to [EIP IP address types](https://www.tencentcloud.com/zh/document/product/213/5733). default value: `BGP`.
 <li>BGP Default: BGP</li>
For a user who has activated the static single-line IP allowlist, possible values are:
 <li>CMCC: China Mobile</li> <li>CTCC: China Telecom</li> <li>CUCC: China Unicom</li>
Note: Only certain regions support static single-line IP addresses.
     */
    public $InternetServiceProvider;

    /**
     * @var string Type of public IP address.

<li> WanIP: Ordinary public IP address. </li> <li> HighQualityEIP: High Quality EIP is supported only in Singapore and Hong Kong. </li> <li> AntiDDoSEIP: Anti-DDoS IP is supported only in specific regions. For details, see [EIP Product Overview](https://www.tencentcloud.com/zh/document/product/213/5733). </li> 
Specify the type of public IPv4 address to assign a public IPv4 address to the resource. HighQualityEIP and AntiDDoSEIP features are gradually released in select regions.
This feature is currently in gradually released phase. To access it, please [contact us](https://console.tencentcloud.com/workorder).
     */
    public $IPv4AddressType;

    /**
     * @var string Indicates the type of EIPv6. Valid values:

<li>EIPv6: common IPv6</li>
<li>HighQualityEIPv6: High Quality EIPv6</li>
Note: Contact the product team to enable the dedicated IPv6 allowlist. The dedicated IPv6 is only supported in some regions. 

Default: `EIPv6`

This feature is currently in gradually released phase. To access it, please [contact us](https://console.tencentcloud.com/workorder).
     */
    public $IPv6AddressType;

    /**
     * @var string Anti-DDoS service package ID. This is required when you want to request an Anti-DDoS IP.
     */
    public $AntiDDoSPackageId;

    /**
     * @param string $InternetChargeType Network connection billing plan. Valid value:

<li>TRAFFIC_POSTPAID_BY_HOUR: pay after use. You are billed for your traffic, by the hour. </li>
<li>BANDWIDTH_PACKAGE: Bandwidth package user. </li>
     * @param integer $InternetMaxBandwidthOut The maximum outbound bandwidth of the public network, in Mbps. The default value is 0 Mbps. The upper limit of bandwidth varies for different models. For more information, see [Purchase Network Bandwidth](https://intl.cloud.tencent.com/document/product/213/12523?from_cn_redirect=1).
     * @param boolean $PublicIpAssigned Whether to allocate a public IP address. Valid values:<br><li>true: Allocate a public IP address.</li><li>false: Do not allocate a public IP address.</li><br>When the public network bandwidth is greater than 0 Mbps, you can choose whether to enable the public IP address. The public IP address is enabled by default. When the public network bandwidth is 0, allocating the public IP address is not supported. This parameter is only used as an input parameter in the RunInstances API.
     * @param string $BandwidthPackageId Bandwidth package ID. it can be obtained through the `BandwidthPackageId` in the return value from the DescribeBandwidthPackages api. this parameter is used as an input parameter only in the RunInstances api.
     * @param string $InternetServiceProvider Describes the line type. for details, refer to [EIP IP address types](https://www.tencentcloud.com/zh/document/product/213/5733). default value: `BGP`.
 <li>BGP Default: BGP</li>
For a user who has activated the static single-line IP allowlist, possible values are:
 <li>CMCC: China Mobile</li> <li>CTCC: China Telecom</li> <li>CUCC: China Unicom</li>
Note: Only certain regions support static single-line IP addresses.
     * @param string $IPv4AddressType Type of public IP address.

<li> WanIP: Ordinary public IP address. </li> <li> HighQualityEIP: High Quality EIP is supported only in Singapore and Hong Kong. </li> <li> AntiDDoSEIP: Anti-DDoS IP is supported only in specific regions. For details, see [EIP Product Overview](https://www.tencentcloud.com/zh/document/product/213/5733). </li> 
Specify the type of public IPv4 address to assign a public IPv4 address to the resource. HighQualityEIP and AntiDDoSEIP features are gradually released in select regions.
This feature is currently in gradually released phase. To access it, please [contact us](https://console.tencentcloud.com/workorder).
     * @param string $IPv6AddressType Indicates the type of EIPv6. Valid values:

<li>EIPv6: common IPv6</li>
<li>HighQualityEIPv6: High Quality EIPv6</li>
Note: Contact the product team to enable the dedicated IPv6 allowlist. The dedicated IPv6 is only supported in some regions. 

Default: `EIPv6`

This feature is currently in gradually released phase. To access it, please [contact us](https://console.tencentcloud.com/workorder).
     * @param string $AntiDDoSPackageId Anti-DDoS service package ID. This is required when you want to request an Anti-DDoS IP.
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
        if (array_key_exists("InternetChargeType",$param) and $param["InternetChargeType"] !== null) {
            $this->InternetChargeType = $param["InternetChargeType"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("PublicIpAssigned",$param) and $param["PublicIpAssigned"] !== null) {
            $this->PublicIpAssigned = $param["PublicIpAssigned"];
        }

        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }

        if (array_key_exists("InternetServiceProvider",$param) and $param["InternetServiceProvider"] !== null) {
            $this->InternetServiceProvider = $param["InternetServiceProvider"];
        }

        if (array_key_exists("IPv4AddressType",$param) and $param["IPv4AddressType"] !== null) {
            $this->IPv4AddressType = $param["IPv4AddressType"];
        }

        if (array_key_exists("IPv6AddressType",$param) and $param["IPv6AddressType"] !== null) {
            $this->IPv6AddressType = $param["IPv6AddressType"];
        }

        if (array_key_exists("AntiDDoSPackageId",$param) and $param["AntiDDoSPackageId"] !== null) {
            $this->AntiDDoSPackageId = $param["AntiDDoSPackageId"];
        }
    }
}
