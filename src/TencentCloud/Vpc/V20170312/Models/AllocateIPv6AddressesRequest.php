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
 * AllocateIPv6Addresses request structure.
 *
 * @method string getAddressName() Obtain EIPv6 name, which is the custom EIPv6 name given by the user when the user applies for the EIPv6. Default: not named.
 * @method void setAddressName(string $AddressName) Set EIPv6 name, which is the custom EIPv6 name given by the user when the user applies for the EIPv6. Default: not named.
 * @method string getAddressType() Obtain Indicates the type of EIPv6. Valid values:

- EIPv6: common IPv6
- HighQualityEIPv6: dedicated IPv6
Note: Contact the product team to enable the dedicated IPv6 allowlist. The dedicated IPv6 is only supported in some regions.

Default: EIPv6.
 * @method void setAddressType(string $AddressType) Set Indicates the type of EIPv6. Valid values:

- EIPv6: common IPv6
- HighQualityEIPv6: dedicated IPv6
Note: Contact the product team to enable the dedicated IPv6 allowlist. The dedicated IPv6 is only supported in some regions.

Default: EIPv6.
 * @method integer getAddressCount() Obtain Number of applied EIPv6 addresses. Default: 1.
 * @method void setAddressCount(integer $AddressCount) Set Number of applied EIPv6 addresses. Default: 1.
 * @method string getInternetChargeType() Obtain Indicates the billing method of EIPv6. Valid values:

- BANDWIDTH_PACKAGE: billed by [Bandwidth Package](https://intl.cloud.tencent.com/document/product/684/15255?from_cn_redirect=1)
- TRAFFIC_POSTPAID_BY_HOUR: postpaid by traffic on an hourly basis

Default: TRAFFIC_POSTPAID_BY_HOUR.
 * @method void setInternetChargeType(string $InternetChargeType) Set Indicates the billing method of EIPv6. Valid values:

- BANDWIDTH_PACKAGE: billed by [Bandwidth Package](https://intl.cloud.tencent.com/document/product/684/15255?from_cn_redirect=1)
- TRAFFIC_POSTPAID_BY_HOUR: postpaid by traffic on an hourly basis

Default: TRAFFIC_POSTPAID_BY_HOUR.
 * @method string getInternetServiceProvider() Obtain Indicates the type of EIPv6 line. Default: BGP.

For a user who has enabled the static single-line IP allowlist, valid values include:
- CMCC: China Mobile
- CTCC: China Telecom
- CUCC: China Unicom
Note: The static single-line IP is only supported in some regions.
 * @method void setInternetServiceProvider(string $InternetServiceProvider) Set Indicates the type of EIPv6 line. Default: BGP.

For a user who has enabled the static single-line IP allowlist, valid values include:
- CMCC: China Mobile
- CTCC: China Telecom
- CUCC: China Unicom
Note: The static single-line IP is only supported in some regions.
 * @method integer getInternetMaxBandwidthOut() Obtain EIPv6 bandwidth cap, in Mbps.

Valid values depend on the EIP billing method:

- BANDWIDTH_PACKAGE: 1 Mbps to 2000 Mbps
- TRAFFIC_POSTPAID_BY_HOUR: 1 Mbps to 100 Mbps

Default: 1 Mbps.
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set EIPv6 bandwidth cap, in Mbps.

Valid values depend on the EIP billing method:

- BANDWIDTH_PACKAGE: 1 Mbps to 2000 Mbps
- TRAFFIC_POSTPAID_BY_HOUR: 1 Mbps to 100 Mbps

Default: 1 Mbps.
 * @method string getBandwidthPackageId() Obtain Unique ID of the bandwidth package.
Setting this parameter and having InternetChargeType as BANDWIDTH_PACKAGE indicate that the created EIP will join this BGP bandwidth package and the billing method of bandwidth package will be adopted.
 * @method void setBandwidthPackageId(string $BandwidthPackageId) Set Unique ID of the bandwidth package.
Setting this parameter and having InternetChargeType as BANDWIDTH_PACKAGE indicate that the created EIP will join this BGP bandwidth package and the billing method of bandwidth package will be adopted.
 * @method array getTags() Obtain List of tags to be associated.
 * @method void setTags(array $Tags) Set List of tags to be associated.
 * @method string getEgress() Obtain EIPv6 network egress. Valid values:

- CENTER_EGRESS_1: Central egress point 1
- CENTER_EGRESS_2: Central egress point 2
- CENTER_EGRESS_3: Central egress point 3
Note: The network egress for different Internet Service Providers (ISPs) or resource types requires contacting the product team for enablement.

Default: CENTER_EGRESS_1.
 * @method void setEgress(string $Egress) Set EIPv6 network egress. Valid values:

- CENTER_EGRESS_1: Central egress point 1
- CENTER_EGRESS_2: Central egress point 2
- CENTER_EGRESS_3: Central egress point 3
Note: The network egress for different Internet Service Providers (ISPs) or resource types requires contacting the product team for enablement.

Default: CENTER_EGRESS_1.
 */
class AllocateIPv6AddressesRequest extends AbstractModel
{
    /**
     * @var string EIPv6 name, which is the custom EIPv6 name given by the user when the user applies for the EIPv6. Default: not named.
     */
    public $AddressName;

    /**
     * @var string Indicates the type of EIPv6. Valid values:

- EIPv6: common IPv6
- HighQualityEIPv6: dedicated IPv6
Note: Contact the product team to enable the dedicated IPv6 allowlist. The dedicated IPv6 is only supported in some regions.

Default: EIPv6.
     */
    public $AddressType;

    /**
     * @var integer Number of applied EIPv6 addresses. Default: 1.
     */
    public $AddressCount;

    /**
     * @var string Indicates the billing method of EIPv6. Valid values:

- BANDWIDTH_PACKAGE: billed by [Bandwidth Package](https://intl.cloud.tencent.com/document/product/684/15255?from_cn_redirect=1)
- TRAFFIC_POSTPAID_BY_HOUR: postpaid by traffic on an hourly basis

Default: TRAFFIC_POSTPAID_BY_HOUR.
     */
    public $InternetChargeType;

    /**
     * @var string Indicates the type of EIPv6 line. Default: BGP.

For a user who has enabled the static single-line IP allowlist, valid values include:
- CMCC: China Mobile
- CTCC: China Telecom
- CUCC: China Unicom
Note: The static single-line IP is only supported in some regions.
     */
    public $InternetServiceProvider;

    /**
     * @var integer EIPv6 bandwidth cap, in Mbps.

Valid values depend on the EIP billing method:

- BANDWIDTH_PACKAGE: 1 Mbps to 2000 Mbps
- TRAFFIC_POSTPAID_BY_HOUR: 1 Mbps to 100 Mbps

Default: 1 Mbps.
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string Unique ID of the bandwidth package.
Setting this parameter and having InternetChargeType as BANDWIDTH_PACKAGE indicate that the created EIP will join this BGP bandwidth package and the billing method of bandwidth package will be adopted.
     */
    public $BandwidthPackageId;

    /**
     * @var array List of tags to be associated.
     */
    public $Tags;

    /**
     * @var string EIPv6 network egress. Valid values:

- CENTER_EGRESS_1: Central egress point 1
- CENTER_EGRESS_2: Central egress point 2
- CENTER_EGRESS_3: Central egress point 3
Note: The network egress for different Internet Service Providers (ISPs) or resource types requires contacting the product team for enablement.

Default: CENTER_EGRESS_1.
     */
    public $Egress;

    /**
     * @param string $AddressName EIPv6 name, which is the custom EIPv6 name given by the user when the user applies for the EIPv6. Default: not named.
     * @param string $AddressType Indicates the type of EIPv6. Valid values:

- EIPv6: common IPv6
- HighQualityEIPv6: dedicated IPv6
Note: Contact the product team to enable the dedicated IPv6 allowlist. The dedicated IPv6 is only supported in some regions.

Default: EIPv6.
     * @param integer $AddressCount Number of applied EIPv6 addresses. Default: 1.
     * @param string $InternetChargeType Indicates the billing method of EIPv6. Valid values:

- BANDWIDTH_PACKAGE: billed by [Bandwidth Package](https://intl.cloud.tencent.com/document/product/684/15255?from_cn_redirect=1)
- TRAFFIC_POSTPAID_BY_HOUR: postpaid by traffic on an hourly basis

Default: TRAFFIC_POSTPAID_BY_HOUR.
     * @param string $InternetServiceProvider Indicates the type of EIPv6 line. Default: BGP.

For a user who has enabled the static single-line IP allowlist, valid values include:
- CMCC: China Mobile
- CTCC: China Telecom
- CUCC: China Unicom
Note: The static single-line IP is only supported in some regions.
     * @param integer $InternetMaxBandwidthOut EIPv6 bandwidth cap, in Mbps.

Valid values depend on the EIP billing method:

- BANDWIDTH_PACKAGE: 1 Mbps to 2000 Mbps
- TRAFFIC_POSTPAID_BY_HOUR: 1 Mbps to 100 Mbps

Default: 1 Mbps.
     * @param string $BandwidthPackageId Unique ID of the bandwidth package.
Setting this parameter and having InternetChargeType as BANDWIDTH_PACKAGE indicate that the created EIP will join this BGP bandwidth package and the billing method of bandwidth package will be adopted.
     * @param array $Tags List of tags to be associated.
     * @param string $Egress EIPv6 network egress. Valid values:

- CENTER_EGRESS_1: Central egress point 1
- CENTER_EGRESS_2: Central egress point 2
- CENTER_EGRESS_3: Central egress point 3
Note: The network egress for different Internet Service Providers (ISPs) or resource types requires contacting the product team for enablement.

Default: CENTER_EGRESS_1.
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
        if (array_key_exists("AddressName",$param) and $param["AddressName"] !== null) {
            $this->AddressName = $param["AddressName"];
        }

        if (array_key_exists("AddressType",$param) and $param["AddressType"] !== null) {
            $this->AddressType = $param["AddressType"];
        }

        if (array_key_exists("AddressCount",$param) and $param["AddressCount"] !== null) {
            $this->AddressCount = $param["AddressCount"];
        }

        if (array_key_exists("InternetChargeType",$param) and $param["InternetChargeType"] !== null) {
            $this->InternetChargeType = $param["InternetChargeType"];
        }

        if (array_key_exists("InternetServiceProvider",$param) and $param["InternetServiceProvider"] !== null) {
            $this->InternetServiceProvider = $param["InternetServiceProvider"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Egress",$param) and $param["Egress"] !== null) {
            $this->Egress = $param["Egress"];
        }
    }
}
