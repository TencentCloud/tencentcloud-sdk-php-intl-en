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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * This describes the internet accessibility of the instance created by a launch configuration and declares the internet usage billing method of the instance and the maximum bandwidth
 *
 * @method string getInternetChargeType() Obtain Network billing type. Valid values: <li>BANDWIDTH_PREPAID: prepaid by bandwidth;</li> <li>TRAFFIC_POSTPAID_BY_HOUR: postpaid by traffic per hour;</li> <li>BANDWIDTH_POSTPAID_BY_HOUR: postpaid by bandwidth per hour;</li> <li>BANDWIDTH_PACKAGE: bandwidth package users.</li> Default value: TRAFFIC_POSTPAID_BY_HOUR.
 * @method void setInternetChargeType(string $InternetChargeType) Set Network billing type. Valid values: <li>BANDWIDTH_PREPAID: prepaid by bandwidth;</li> <li>TRAFFIC_POSTPAID_BY_HOUR: postpaid by traffic per hour;</li> <li>BANDWIDTH_POSTPAID_BY_HOUR: postpaid by bandwidth per hour;</li> <li>BANDWIDTH_PACKAGE: bandwidth package users.</li> Default value: TRAFFIC_POSTPAID_BY_HOUR.
 * @method integer getInternetMaxBandwidthOut() Obtain Public network outbound bandwidth cap. Unit: Mbps. Default value: 0 Mbps. Bandwidth cap range varies by model. For specific limitations, see [Purchase Network Bandwidth](https://www.tencentcloud.com/document/product/213/509?from_cn_redirect=1).
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set Public network outbound bandwidth cap. Unit: Mbps. Default value: 0 Mbps. Bandwidth cap range varies by model. For specific limitations, see [Purchase Network Bandwidth](https://www.tencentcloud.com/document/product/213/509?from_cn_redirect=1).
 * @method boolean getPublicIpAssigned() Obtain Whether to assign a public IP address. Valid values: <li>TRUE: Allocate a public IP address.</li><li>FALSE: Do not allocate a public IP address.</li>When the public network bandwidth is greater than 0 Mbps, you can choose whether to enable this feature. By default, a public IP address is assigned. When the public network bandwidth is 0, assigning a public IP address is not allowed.
 * @method void setPublicIpAssigned(boolean $PublicIpAssigned) Set Whether to assign a public IP address. Valid values: <li>TRUE: Allocate a public IP address.</li><li>FALSE: Do not allocate a public IP address.</li>When the public network bandwidth is greater than 0 Mbps, you can choose whether to enable this feature. By default, a public IP address is assigned. When the public network bandwidth is 0, assigning a public IP address is not allowed.
 * @method string getBandwidthPackageId() Obtain Bandwidth package ID, which can be obtained from the `BandwidthPackageId` in the return value from the [DescribeBandwidthPackages](https://www.tencentcloud.com/document/api/215/19209?from_cn_redirect=1) API.
 * @method void setBandwidthPackageId(string $BandwidthPackageId) Set Bandwidth package ID, which can be obtained from the `BandwidthPackageId` in the return value from the [DescribeBandwidthPackages](https://www.tencentcloud.com/document/api/215/19209?from_cn_redirect=1) API.
 * @method string getInternetServiceProvider() Obtain Line type. for details on various types of lines and supported regions, refer to [EIP IP address type](https://www.tencentcloud.com/zh/document/product/213/5733). default value: BGP.

<Li>BGP: general bgp line.</li>.
For a user who has enabled the static single-line IP allowlist, valid values include:.

<Li>CMCC: china mobile.</li>.
<Li>CTCC: china telecom.</li>.
<Li>CUCC: china unicom</li>.
Note: The static single-line IP is only supported in some regions.

 * @method void setInternetServiceProvider(string $InternetServiceProvider) Set Line type. for details on various types of lines and supported regions, refer to [EIP IP address type](https://www.tencentcloud.com/zh/document/product/213/5733). default value: BGP.

<Li>BGP: general bgp line.</li>.
For a user who has enabled the static single-line IP allowlist, valid values include:.

<Li>CMCC: china mobile.</li>.
<Li>CTCC: china telecom.</li>.
<Li>CUCC: china unicom</li>.
Note: The static single-line IP is only supported in some regions.

 * @method string getIPv4AddressType() Obtain Specifies the public IP type.

<Li>WanIP: specifies the public ip address.</li>.
<Li>HighQualityEIP: highqualityip. only Singapore and hong kong (china) support highqualityip.</li>.
<Li>AntiDDoSEIP: anti-ddos eip. only partially supported regions can use anti-ddos eip. details visible in [elastic ip product overview](https://www.tencentcloud.com/zh/document/product/213/5733).</li>. 
If needed to assign an elastic IPv4 address to a resource, specify the elastic IPv4 address type. if only use WanIP, do not set this field.

High quality IP the anti-ddos feature is only in beta test in some regions. if needed, [submit a ticket for consultation](https://console.cloud.tencent.com/workorder/category).
 * @method void setIPv4AddressType(string $IPv4AddressType) Set Specifies the public IP type.

<Li>WanIP: specifies the public ip address.</li>.
<Li>HighQualityEIP: highqualityip. only Singapore and hong kong (china) support highqualityip.</li>.
<Li>AntiDDoSEIP: anti-ddos eip. only partially supported regions can use anti-ddos eip. details visible in [elastic ip product overview](https://www.tencentcloud.com/zh/document/product/213/5733).</li>. 
If needed to assign an elastic IPv4 address to a resource, specify the elastic IPv4 address type. if only use WanIP, do not set this field.

High quality IP the anti-ddos feature is only in beta test in some regions. if needed, [submit a ticket for consultation](https://console.cloud.tencent.com/workorder/category).
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
     */
    public $InternetChargeType;

    /**
     * @var integer Public network outbound bandwidth cap. Unit: Mbps. Default value: 0 Mbps. Bandwidth cap range varies by model. For specific limitations, see [Purchase Network Bandwidth](https://www.tencentcloud.com/document/product/213/509?from_cn_redirect=1).
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var boolean Whether to assign a public IP address. Valid values: <li>TRUE: Allocate a public IP address.</li><li>FALSE: Do not allocate a public IP address.</li>When the public network bandwidth is greater than 0 Mbps, you can choose whether to enable this feature. By default, a public IP address is assigned. When the public network bandwidth is 0, assigning a public IP address is not allowed.
     */
    public $PublicIpAssigned;

    /**
     * @var string Bandwidth package ID, which can be obtained from the `BandwidthPackageId` in the return value from the [DescribeBandwidthPackages](https://www.tencentcloud.com/document/api/215/19209?from_cn_redirect=1) API.
     */
    public $BandwidthPackageId;

    /**
     * @var string Line type. for details on various types of lines and supported regions, refer to [EIP IP address type](https://www.tencentcloud.com/zh/document/product/213/5733). default value: BGP.

<Li>BGP: general bgp line.</li>.
For a user who has enabled the static single-line IP allowlist, valid values include:.

<Li>CMCC: china mobile.</li>.
<Li>CTCC: china telecom.</li>.
<Li>CUCC: china unicom</li>.
Note: The static single-line IP is only supported in some regions.

     */
    public $InternetServiceProvider;

    /**
     * @var string Specifies the public IP type.

<Li>WanIP: specifies the public ip address.</li>.
<Li>HighQualityEIP: highqualityip. only Singapore and hong kong (china) support highqualityip.</li>.
<Li>AntiDDoSEIP: anti-ddos eip. only partially supported regions can use anti-ddos eip. details visible in [elastic ip product overview](https://www.tencentcloud.com/zh/document/product/213/5733).</li>. 
If needed to assign an elastic IPv4 address to a resource, specify the elastic IPv4 address type. if only use WanIP, do not set this field.

High quality IP the anti-ddos feature is only in beta test in some regions. if needed, [submit a ticket for consultation](https://console.cloud.tencent.com/workorder/category).
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
     * @param integer $InternetMaxBandwidthOut Public network outbound bandwidth cap. Unit: Mbps. Default value: 0 Mbps. Bandwidth cap range varies by model. For specific limitations, see [Purchase Network Bandwidth](https://www.tencentcloud.com/document/product/213/509?from_cn_redirect=1).
     * @param boolean $PublicIpAssigned Whether to assign a public IP address. Valid values: <li>TRUE: Allocate a public IP address.</li><li>FALSE: Do not allocate a public IP address.</li>When the public network bandwidth is greater than 0 Mbps, you can choose whether to enable this feature. By default, a public IP address is assigned. When the public network bandwidth is 0, assigning a public IP address is not allowed.
     * @param string $BandwidthPackageId Bandwidth package ID, which can be obtained from the `BandwidthPackageId` in the return value from the [DescribeBandwidthPackages](https://www.tencentcloud.com/document/api/215/19209?from_cn_redirect=1) API.
     * @param string $InternetServiceProvider Line type. for details on various types of lines and supported regions, refer to [EIP IP address type](https://www.tencentcloud.com/zh/document/product/213/5733). default value: BGP.

<Li>BGP: general bgp line.</li>.
For a user who has enabled the static single-line IP allowlist, valid values include:.

<Li>CMCC: china mobile.</li>.
<Li>CTCC: china telecom.</li>.
<Li>CUCC: china unicom</li>.
Note: The static single-line IP is only supported in some regions.

     * @param string $IPv4AddressType Specifies the public IP type.

<Li>WanIP: specifies the public ip address.</li>.
<Li>HighQualityEIP: highqualityip. only Singapore and hong kong (china) support highqualityip.</li>.
<Li>AntiDDoSEIP: anti-ddos eip. only partially supported regions can use anti-ddos eip. details visible in [elastic ip product overview](https://www.tencentcloud.com/zh/document/product/213/5733).</li>. 
If needed to assign an elastic IPv4 address to a resource, specify the elastic IPv4 address type. if only use WanIP, do not set this field.

High quality IP the anti-ddos feature is only in beta test in some regions. if needed, [submit a ticket for consultation](https://console.cloud.tencent.com/workorder/category).
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
