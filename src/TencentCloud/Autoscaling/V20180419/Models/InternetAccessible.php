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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * This describes the internet accessibility of the instance created by a launch configuration and declares the internet usage billing method of the instance and the maximum bandwidth
 *
 * @method string getInternetChargeType() Obtain Network billing type. Valid values: <li>BANDWIDTH_PREPAID: prepaid by bandwidth;</li> <li>TRAFFIC_POSTPAID_BY_HOUR: postpaid by traffic per hour;</li> <li>BANDWIDTH_POSTPAID_BY_HOUR: postpaid by bandwidth per hour;</li> <li>BANDWIDTH_PACKAGE: bandwidth package users.</li> Default value: TRAFFIC_POSTPAID_BY_HOUR.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInternetChargeType(string $InternetChargeType) Set Network billing type. Valid values: <li>BANDWIDTH_PREPAID: prepaid by bandwidth;</li> <li>TRAFFIC_POSTPAID_BY_HOUR: postpaid by traffic per hour;</li> <li>BANDWIDTH_POSTPAID_BY_HOUR: postpaid by bandwidth per hour;</li> <li>BANDWIDTH_PACKAGE: bandwidth package users.</li> Default value: TRAFFIC_POSTPAID_BY_HOUR.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getInternetMaxBandwidthOut() Obtain The maximum outbound bandwidth in Mbps of the public network. The default value is 0 Mbps. The upper limit of bandwidth varies by model. For more information, see [Purchase Network Bandwidth](https://intl.cloud.tencent.com/document/product/213/509?from_cn_redirect=1).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set The maximum outbound bandwidth in Mbps of the public network. The default value is 0 Mbps. The upper limit of bandwidth varies by model. For more information, see [Purchase Network Bandwidth](https://intl.cloud.tencent.com/document/product/213/509?from_cn_redirect=1).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getPublicIpAssigned() Obtain Whether to assign a public IP address. Valid values: <li>TRUE: Allocate a public IP address.</li> <li>FALSE: Do not allocate a public IP address.</li> When the public network bandwidth is greater than 0 Mbps, you can choose whether to enable this feature based on your needs. By default, this feature is enabled. When the public network bandwidth is 0, public IP address assignment is not allowed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPublicIpAssigned(boolean $PublicIpAssigned) Set Whether to assign a public IP address. Valid values: <li>TRUE: Allocate a public IP address.</li> <li>FALSE: Do not allocate a public IP address.</li> When the public network bandwidth is greater than 0 Mbps, you can choose whether to enable this feature based on your needs. By default, this feature is enabled. When the public network bandwidth is 0, public IP address assignment is not allowed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBandwidthPackageId() Obtain Bandwidth package ID. You can obtain the ID from the `BandwidthPackageId` field in the response of the [DescribeBandwidthPackages](https://intl.cloud.tencent.com/document/api/215/19209?from_cn_redirect=1) API.
Note: this field may return null, indicating that no valid value was found.
 * @method void setBandwidthPackageId(string $BandwidthPackageId) Set Bandwidth package ID. You can obtain the ID from the `BandwidthPackageId` field in the response of the [DescribeBandwidthPackages](https://intl.cloud.tencent.com/document/api/215/19209?from_cn_redirect=1) API.
Note: this field may return null, indicating that no valid value was found.
 * @method string getInternetServiceProvider() Obtain Describes the line type. For details, refer to [EIP Product Overview](https://www.tencentcloud.com/document/product/213/5733). default value: `BGP`.

<Li>BGP: general bgp line.</li>
For a user who has enabled the static single-line IP allowlist, valid values include:
 <li>CMCC: China Mobile</li> <li>CTCC: China Telecom</li> <li>CUCC: China Unicom</li>
Note: Only certain regions support static single-line IP addresses.

 * @method void setInternetServiceProvider(string $InternetServiceProvider) Set Describes the line type. For details, refer to [EIP Product Overview](https://www.tencentcloud.com/document/product/213/5733). default value: `BGP`.

<Li>BGP: general bgp line.</li>
For a user who has enabled the static single-line IP allowlist, valid values include:
 <li>CMCC: China Mobile</li> <li>CTCC: China Telecom</li> <li>CUCC: China Unicom</li>
Note: Only certain regions support static single-line IP addresses.

 * @method string getIPv4AddressType() Obtain Type of public IP address.

<li> WanIP: Ordinary public IP address. </li> <li> HighQualityEIP: High Quality EIP is supported only in Singapore and Hong Kong. </li> <li> AntiDDoSEIP: Anti-DDoS IP is supported only in specific regions. For details, see [EIP Product Overview](https://www.tencentcloud.com/document/product/213/5733). </li> 
Specify the type of public IPv4 address to assign a public IPv4 address to the resource. HighQualityEIP and AntiDDoSEIP features are gradually released in select regions. For usage, [submit a ticket for consultation](https://console.tencentcloud.com/workorder).
 * @method void setIPv4AddressType(string $IPv4AddressType) Set Type of public IP address.

<li> WanIP: Ordinary public IP address. </li> <li> HighQualityEIP: High Quality EIP is supported only in Singapore and Hong Kong. </li> <li> AntiDDoSEIP: Anti-DDoS IP is supported only in specific regions. For details, see [EIP Product Overview](https://www.tencentcloud.com/document/product/213/5733). </li> 
Specify the type of public IPv4 address to assign a public IPv4 address to the resource. HighQualityEIP and AntiDDoSEIP features are gradually released in select regions. For usage, [submit a ticket for consultation](https://console.tencentcloud.com/workorder).
 * @method string getAntiDDoSPackageId() Obtain Anti-DDoS service package ID. This is required when you want to request an Anti-DDoS IP.
 * @method void setAntiDDoSPackageId(string $AntiDDoSPackageId) Set Anti-DDoS service package ID. This is required when you want to request an Anti-DDoS IP.
 * @method boolean getIsKeepEIP() Obtain Whether to delete the bound EIP(HighQualityEIP and AntiDDoSEIP) when the instance is destroyed.

Range of values:

<li>TRUE: retain the EIP</li> <li>FALSE: not retain the EIP</li>Note that when the IPv4AddressType field specifies the EIP type, the default behavior is not to retain the EIP. 
WanIP is unaffected by this field and will always be deleted with the instance. 
Changing this field configuration will take effect immediately for resources already bound to a scaling group.
 * @method void setIsKeepEIP(boolean $IsKeepEIP) Set Whether to delete the bound EIP(HighQualityEIP and AntiDDoSEIP) when the instance is destroyed.

Range of values:

<li>TRUE: retain the EIP</li> <li>FALSE: not retain the EIP</li>Note that when the IPv4AddressType field specifies the EIP type, the default behavior is not to retain the EIP. 
WanIP is unaffected by this field and will always be deleted with the instance. 
Changing this field configuration will take effect immediately for resources already bound to a scaling group.
 */
class InternetAccessible extends AbstractModel
{
    /**
     * @var string Network billing type. Valid values: <li>BANDWIDTH_PREPAID: prepaid by bandwidth;</li> <li>TRAFFIC_POSTPAID_BY_HOUR: postpaid by traffic per hour;</li> <li>BANDWIDTH_POSTPAID_BY_HOUR: postpaid by bandwidth per hour;</li> <li>BANDWIDTH_PACKAGE: bandwidth package users.</li> Default value: TRAFFIC_POSTPAID_BY_HOUR.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InternetChargeType;

    /**
     * @var integer The maximum outbound bandwidth in Mbps of the public network. The default value is 0 Mbps. The upper limit of bandwidth varies by model. For more information, see [Purchase Network Bandwidth](https://intl.cloud.tencent.com/document/product/213/509?from_cn_redirect=1).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var boolean Whether to assign a public IP address. Valid values: <li>TRUE: Allocate a public IP address.</li> <li>FALSE: Do not allocate a public IP address.</li> When the public network bandwidth is greater than 0 Mbps, you can choose whether to enable this feature based on your needs. By default, this feature is enabled. When the public network bandwidth is 0, public IP address assignment is not allowed.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PublicIpAssigned;

    /**
     * @var string Bandwidth package ID. You can obtain the ID from the `BandwidthPackageId` field in the response of the [DescribeBandwidthPackages](https://intl.cloud.tencent.com/document/api/215/19209?from_cn_redirect=1) API.
Note: this field may return null, indicating that no valid value was found.
     */
    public $BandwidthPackageId;

    /**
     * @var string Describes the line type. For details, refer to [EIP Product Overview](https://www.tencentcloud.com/document/product/213/5733). default value: `BGP`.

<Li>BGP: general bgp line.</li>
For a user who has enabled the static single-line IP allowlist, valid values include:
 <li>CMCC: China Mobile</li> <li>CTCC: China Telecom</li> <li>CUCC: China Unicom</li>
Note: Only certain regions support static single-line IP addresses.

     */
    public $InternetServiceProvider;

    /**
     * @var string Type of public IP address.

<li> WanIP: Ordinary public IP address. </li> <li> HighQualityEIP: High Quality EIP is supported only in Singapore and Hong Kong. </li> <li> AntiDDoSEIP: Anti-DDoS IP is supported only in specific regions. For details, see [EIP Product Overview](https://www.tencentcloud.com/document/product/213/5733). </li> 
Specify the type of public IPv4 address to assign a public IPv4 address to the resource. HighQualityEIP and AntiDDoSEIP features are gradually released in select regions. For usage, [submit a ticket for consultation](https://console.tencentcloud.com/workorder).
     */
    public $IPv4AddressType;

    /**
     * @var string Anti-DDoS service package ID. This is required when you want to request an Anti-DDoS IP.
     */
    public $AntiDDoSPackageId;

    /**
     * @var boolean Whether to delete the bound EIP(HighQualityEIP and AntiDDoSEIP) when the instance is destroyed.

Range of values:

<li>TRUE: retain the EIP</li> <li>FALSE: not retain the EIP</li>Note that when the IPv4AddressType field specifies the EIP type, the default behavior is not to retain the EIP. 
WanIP is unaffected by this field and will always be deleted with the instance. 
Changing this field configuration will take effect immediately for resources already bound to a scaling group.
     */
    public $IsKeepEIP;

    /**
     * @param string $InternetChargeType Network billing type. Valid values: <li>BANDWIDTH_PREPAID: prepaid by bandwidth;</li> <li>TRAFFIC_POSTPAID_BY_HOUR: postpaid by traffic per hour;</li> <li>BANDWIDTH_POSTPAID_BY_HOUR: postpaid by bandwidth per hour;</li> <li>BANDWIDTH_PACKAGE: bandwidth package users.</li> Default value: TRAFFIC_POSTPAID_BY_HOUR.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $InternetMaxBandwidthOut The maximum outbound bandwidth in Mbps of the public network. The default value is 0 Mbps. The upper limit of bandwidth varies by model. For more information, see [Purchase Network Bandwidth](https://intl.cloud.tencent.com/document/product/213/509?from_cn_redirect=1).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $PublicIpAssigned Whether to assign a public IP address. Valid values: <li>TRUE: Allocate a public IP address.</li> <li>FALSE: Do not allocate a public IP address.</li> When the public network bandwidth is greater than 0 Mbps, you can choose whether to enable this feature based on your needs. By default, this feature is enabled. When the public network bandwidth is 0, public IP address assignment is not allowed.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BandwidthPackageId Bandwidth package ID. You can obtain the ID from the `BandwidthPackageId` field in the response of the [DescribeBandwidthPackages](https://intl.cloud.tencent.com/document/api/215/19209?from_cn_redirect=1) API.
Note: this field may return null, indicating that no valid value was found.
     * @param string $InternetServiceProvider Describes the line type. For details, refer to [EIP Product Overview](https://www.tencentcloud.com/document/product/213/5733). default value: `BGP`.

<Li>BGP: general bgp line.</li>
For a user who has enabled the static single-line IP allowlist, valid values include:
 <li>CMCC: China Mobile</li> <li>CTCC: China Telecom</li> <li>CUCC: China Unicom</li>
Note: Only certain regions support static single-line IP addresses.

     * @param string $IPv4AddressType Type of public IP address.

<li> WanIP: Ordinary public IP address. </li> <li> HighQualityEIP: High Quality EIP is supported only in Singapore and Hong Kong. </li> <li> AntiDDoSEIP: Anti-DDoS IP is supported only in specific regions. For details, see [EIP Product Overview](https://www.tencentcloud.com/document/product/213/5733). </li> 
Specify the type of public IPv4 address to assign a public IPv4 address to the resource. HighQualityEIP and AntiDDoSEIP features are gradually released in select regions. For usage, [submit a ticket for consultation](https://console.tencentcloud.com/workorder).
     * @param string $AntiDDoSPackageId Anti-DDoS service package ID. This is required when you want to request an Anti-DDoS IP.
     * @param boolean $IsKeepEIP Whether to delete the bound EIP(HighQualityEIP and AntiDDoSEIP) when the instance is destroyed.

Range of values:

<li>TRUE: retain the EIP</li> <li>FALSE: not retain the EIP</li>Note that when the IPv4AddressType field specifies the EIP type, the default behavior is not to retain the EIP. 
WanIP is unaffected by this field and will always be deleted with the instance. 
Changing this field configuration will take effect immediately for resources already bound to a scaling group.
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

        if (array_key_exists("AntiDDoSPackageId",$param) and $param["AntiDDoSPackageId"] !== null) {
            $this->AntiDDoSPackageId = $param["AntiDDoSPackageId"];
        }

        if (array_key_exists("IsKeepEIP",$param) and $param["IsKeepEIP"] !== null) {
            $this->IsKeepEIP = $param["IsKeepEIP"];
        }
    }
}
