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
 * AllocateAddresses request structure.
 *
 * @method integer getAddressCount() Obtain The number of EIPs. Default: 1.
 * @method void setAddressCount(integer $AddressCount) Set The number of EIPs. Default: 1.
 * @method string getInternetServiceProvider() Obtain The EIP line type. Default: BGP.
<ul style="margin:0"><li>For a user who has activated the static single-line IP allowlist, possible values are:<ul><li>CMCC: China Mobile</li>
<li>CTCC: China Telecom</li>
<li>CUCC: China Unicom</li></ul>Note: Only certain regions support static single-line IP addresses.</li></ul>
 * @method void setInternetServiceProvider(string $InternetServiceProvider) Set The EIP line type. Default: BGP.
<ul style="margin:0"><li>For a user who has activated the static single-line IP allowlist, possible values are:<ul><li>CMCC: China Mobile</li>
<li>CTCC: China Telecom</li>
<li>CUCC: China Unicom</li></ul>Note: Only certain regions support static single-line IP addresses.</li></ul>
 * @method string getInternetChargeType() Obtain The EIP billing method.
<ul style="margin:0"><li>For bill-by-IP account beta users, valid values: <ul><li>BANDWIDTH_PACKAGE: paid by the [bandwidth package](https://intl.cloud.tencent.com/document/product/684/15255?from_cn_redirect=1)(who must also be bandwidth package beta users)</li>
<li>BANDWIDTH_POSTPAID_BY_HOUR: billed by hourly bandwidth on a pay-as-you-go basis</li>
<li>BANDWIDTH_PREPAID_BY_MONTH: monthly bandwidth subscription</li>
<li>TRAFFIC_POSTPAID_BY_HOUR: billed by hourly traffic on a pay-as-you-go basis</li></ul>Default value: TRAFFIC_POSTPAID_BY_HOUR</li>
<li>If you are not a bill-by-IP account beta user, the EIP billing is the same as that for the instance bound to the EIP. Therefore, you do not need to pass in this parameter.</li></ul>
 * @method void setInternetChargeType(string $InternetChargeType) Set The EIP billing method.
<ul style="margin:0"><li>For bill-by-IP account beta users, valid values: <ul><li>BANDWIDTH_PACKAGE: paid by the [bandwidth package](https://intl.cloud.tencent.com/document/product/684/15255?from_cn_redirect=1)(who must also be bandwidth package beta users)</li>
<li>BANDWIDTH_POSTPAID_BY_HOUR: billed by hourly bandwidth on a pay-as-you-go basis</li>
<li>BANDWIDTH_PREPAID_BY_MONTH: monthly bandwidth subscription</li>
<li>TRAFFIC_POSTPAID_BY_HOUR: billed by hourly traffic on a pay-as-you-go basis</li></ul>Default value: TRAFFIC_POSTPAID_BY_HOUR</li>
<li>If you are not a bill-by-IP account beta user, the EIP billing is the same as that for the instance bound to the EIP. Therefore, you do not need to pass in this parameter.</li></ul>
 * @method integer getInternetMaxBandwidthOut() Obtain The EIP outbound bandwidth cap, in Mbps.
<ul style="margin:0"><li>For bill-by-IP account beta users, valid values:<ul><li>BANDWIDTH_PACKAGE: 1 Mbps to 1000 Mbps</li>
<li>BANDWIDTH_POSTPAID_BY_HOUR: 1 Mbps to 100 Mbps</li>
<li>BANDWIDTH_PREPAID_BY_MONTH: 1 Mbps to 200 Mbps</li>
<li>TRAFFIC_POSTPAID_BY_HOUR: 1 Mbps to 100 Mbps</li></ul>Default value: 1 Mbps</li>
<li>If you are not a bill-by-IP account beta user, the EIP outbound bandwidth cap is subject to that of the instance bound to the EIP. Therefore, you do not need to pass in this parameter.</li></ul>
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set The EIP outbound bandwidth cap, in Mbps.
<ul style="margin:0"><li>For bill-by-IP account beta users, valid values:<ul><li>BANDWIDTH_PACKAGE: 1 Mbps to 1000 Mbps</li>
<li>BANDWIDTH_POSTPAID_BY_HOUR: 1 Mbps to 100 Mbps</li>
<li>BANDWIDTH_PREPAID_BY_MONTH: 1 Mbps to 200 Mbps</li>
<li>TRAFFIC_POSTPAID_BY_HOUR: 1 Mbps to 100 Mbps</li></ul>Default value: 1 Mbps</li>
<li>If you are not a bill-by-IP account beta user, the EIP outbound bandwidth cap is subject to that of the instance bound to the EIP. Therefore, you do not need to pass in this parameter.</li></ul>
 * @method AddressChargePrepaid getAddressChargePrepaid() Obtain A required billing parameter for an EIP billed by monthly bandwidth subscription. For EIPs using other billing modes, it can be ignored.
 * @method void setAddressChargePrepaid(AddressChargePrepaid $AddressChargePrepaid) Set A required billing parameter for an EIP billed by monthly bandwidth subscription. For EIPs using other billing modes, it can be ignored.
 * @method string getAddressType() Obtain The EIP type. Default: EIP.
<ul style="margin:0"><li>For a user who has activated the AIA allowlist, possible values are:<ul><li>AnycastEIP: an Anycast EIP address. For more information, see [Anycast Internet Acceleration](https://intl.cloud.tencent.com/document/product/644?from_cn_redirect=1).</li></ul>Note: Only certain regions support Anycast EIPs.</li></ul>
 * @method void setAddressType(string $AddressType) Set The EIP type. Default: EIP.
<ul style="margin:0"><li>For a user who has activated the AIA allowlist, possible values are:<ul><li>AnycastEIP: an Anycast EIP address. For more information, see [Anycast Internet Acceleration](https://intl.cloud.tencent.com/document/product/644?from_cn_redirect=1).</li></ul>Note: Only certain regions support Anycast EIPs.</li></ul>
 * @method string getAnycastZone() Obtain Anycast publishing region
<ul style="margin:0"><li>Valid for users who have activated AIA. Values:<ul><li>ANYCAST_ZONE_GLOBAL: global publishing region </li><li>ANYCAST_ZONE_OVERSEAS: overseas publishing region</li><li><b>**[Disused]**</b> ANYCAST_ZONE_A: publishing region A (updated to ANYCAST_ZONE_GLOBAL)</li><li><b>**[Disused]**</b> ANYCAST_ZONE_B: publishing region B (updated to ANYCAST_ZONE_GLOBAL)</li></ul>Default: ANYCAST_ZONE_OVERSEAS.</li></ul>
 * @method void setAnycastZone(string $AnycastZone) Set Anycast publishing region
<ul style="margin:0"><li>Valid for users who have activated AIA. Values:<ul><li>ANYCAST_ZONE_GLOBAL: global publishing region </li><li>ANYCAST_ZONE_OVERSEAS: overseas publishing region</li><li><b>**[Disused]**</b> ANYCAST_ZONE_A: publishing region A (updated to ANYCAST_ZONE_GLOBAL)</li><li><b>**[Disused]**</b> ANYCAST_ZONE_B: publishing region B (updated to ANYCAST_ZONE_GLOBAL)</li></ul>Default: ANYCAST_ZONE_OVERSEAS.</li></ul>
 * @method boolean getApplicableForCLB() Obtain <b>**[Disused]**</b>
Whether the Anycast EIP can be bound to CLB instances.
<ul style="margin:0"><li>Valid for users who have activated the AIA. Values:<ul><li>TRUE: the Anycast EIP can be bound to CLB instances.</li>
<li>FALSE: the Anycast EIP can be bound to CVMs, NAT gateways, and HAVIPs.</li></ul>Default: FALSE.</li></ul>
 * @method void setApplicableForCLB(boolean $ApplicableForCLB) Set <b>**[Disused]**</b>
Whether the Anycast EIP can be bound to CLB instances.
<ul style="margin:0"><li>Valid for users who have activated the AIA. Values:<ul><li>TRUE: the Anycast EIP can be bound to CLB instances.</li>
<li>FALSE: the Anycast EIP can be bound to CVMs, NAT gateways, and HAVIPs.</li></ul>Default: FALSE.</li></ul>
 * @method array getTags() Obtain List of tags to be bound.
 * @method void setTags(array $Tags) Set List of tags to be bound.
 * @method string getBandwidthPackageId() Obtain The unique ID of a BGP bandwidth package. If you configure this parameter and set InternetChargeType as BANDWIDTH_PACKAGE, the new EIP is added to this package and billed by the bandwidth package mode.
 * @method void setBandwidthPackageId(string $BandwidthPackageId) Set The unique ID of a BGP bandwidth package. If you configure this parameter and set InternetChargeType as BANDWIDTH_PACKAGE, the new EIP is added to this package and billed by the bandwidth package mode.
 */
class AllocateAddressesRequest extends AbstractModel
{
    /**
     * @var integer The number of EIPs. Default: 1.
     */
    public $AddressCount;

    /**
     * @var string The EIP line type. Default: BGP.
<ul style="margin:0"><li>For a user who has activated the static single-line IP allowlist, possible values are:<ul><li>CMCC: China Mobile</li>
<li>CTCC: China Telecom</li>
<li>CUCC: China Unicom</li></ul>Note: Only certain regions support static single-line IP addresses.</li></ul>
     */
    public $InternetServiceProvider;

    /**
     * @var string The EIP billing method.
<ul style="margin:0"><li>For bill-by-IP account beta users, valid values: <ul><li>BANDWIDTH_PACKAGE: paid by the [bandwidth package](https://intl.cloud.tencent.com/document/product/684/15255?from_cn_redirect=1)(who must also be bandwidth package beta users)</li>
<li>BANDWIDTH_POSTPAID_BY_HOUR: billed by hourly bandwidth on a pay-as-you-go basis</li>
<li>BANDWIDTH_PREPAID_BY_MONTH: monthly bandwidth subscription</li>
<li>TRAFFIC_POSTPAID_BY_HOUR: billed by hourly traffic on a pay-as-you-go basis</li></ul>Default value: TRAFFIC_POSTPAID_BY_HOUR</li>
<li>If you are not a bill-by-IP account beta user, the EIP billing is the same as that for the instance bound to the EIP. Therefore, you do not need to pass in this parameter.</li></ul>
     */
    public $InternetChargeType;

    /**
     * @var integer The EIP outbound bandwidth cap, in Mbps.
<ul style="margin:0"><li>For bill-by-IP account beta users, valid values:<ul><li>BANDWIDTH_PACKAGE: 1 Mbps to 1000 Mbps</li>
<li>BANDWIDTH_POSTPAID_BY_HOUR: 1 Mbps to 100 Mbps</li>
<li>BANDWIDTH_PREPAID_BY_MONTH: 1 Mbps to 200 Mbps</li>
<li>TRAFFIC_POSTPAID_BY_HOUR: 1 Mbps to 100 Mbps</li></ul>Default value: 1 Mbps</li>
<li>If you are not a bill-by-IP account beta user, the EIP outbound bandwidth cap is subject to that of the instance bound to the EIP. Therefore, you do not need to pass in this parameter.</li></ul>
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var AddressChargePrepaid A required billing parameter for an EIP billed by monthly bandwidth subscription. For EIPs using other billing modes, it can be ignored.
     */
    public $AddressChargePrepaid;

    /**
     * @var string The EIP type. Default: EIP.
<ul style="margin:0"><li>For a user who has activated the AIA allowlist, possible values are:<ul><li>AnycastEIP: an Anycast EIP address. For more information, see [Anycast Internet Acceleration](https://intl.cloud.tencent.com/document/product/644?from_cn_redirect=1).</li></ul>Note: Only certain regions support Anycast EIPs.</li></ul>
     */
    public $AddressType;

    /**
     * @var string Anycast publishing region
<ul style="margin:0"><li>Valid for users who have activated AIA. Values:<ul><li>ANYCAST_ZONE_GLOBAL: global publishing region </li><li>ANYCAST_ZONE_OVERSEAS: overseas publishing region</li><li><b>**[Disused]**</b> ANYCAST_ZONE_A: publishing region A (updated to ANYCAST_ZONE_GLOBAL)</li><li><b>**[Disused]**</b> ANYCAST_ZONE_B: publishing region B (updated to ANYCAST_ZONE_GLOBAL)</li></ul>Default: ANYCAST_ZONE_OVERSEAS.</li></ul>
     */
    public $AnycastZone;

    /**
     * @var boolean <b>**[Disused]**</b>
Whether the Anycast EIP can be bound to CLB instances.
<ul style="margin:0"><li>Valid for users who have activated the AIA. Values:<ul><li>TRUE: the Anycast EIP can be bound to CLB instances.</li>
<li>FALSE: the Anycast EIP can be bound to CVMs, NAT gateways, and HAVIPs.</li></ul>Default: FALSE.</li></ul>
     */
    public $ApplicableForCLB;

    /**
     * @var array List of tags to be bound.
     */
    public $Tags;

    /**
     * @var string The unique ID of a BGP bandwidth package. If you configure this parameter and set InternetChargeType as BANDWIDTH_PACKAGE, the new EIP is added to this package and billed by the bandwidth package mode.
     */
    public $BandwidthPackageId;

    /**
     * @param integer $AddressCount The number of EIPs. Default: 1.
     * @param string $InternetServiceProvider The EIP line type. Default: BGP.
<ul style="margin:0"><li>For a user who has activated the static single-line IP allowlist, possible values are:<ul><li>CMCC: China Mobile</li>
<li>CTCC: China Telecom</li>
<li>CUCC: China Unicom</li></ul>Note: Only certain regions support static single-line IP addresses.</li></ul>
     * @param string $InternetChargeType The EIP billing method.
<ul style="margin:0"><li>For bill-by-IP account beta users, valid values: <ul><li>BANDWIDTH_PACKAGE: paid by the [bandwidth package](https://intl.cloud.tencent.com/document/product/684/15255?from_cn_redirect=1)(who must also be bandwidth package beta users)</li>
<li>BANDWIDTH_POSTPAID_BY_HOUR: billed by hourly bandwidth on a pay-as-you-go basis</li>
<li>BANDWIDTH_PREPAID_BY_MONTH: monthly bandwidth subscription</li>
<li>TRAFFIC_POSTPAID_BY_HOUR: billed by hourly traffic on a pay-as-you-go basis</li></ul>Default value: TRAFFIC_POSTPAID_BY_HOUR</li>
<li>If you are not a bill-by-IP account beta user, the EIP billing is the same as that for the instance bound to the EIP. Therefore, you do not need to pass in this parameter.</li></ul>
     * @param integer $InternetMaxBandwidthOut The EIP outbound bandwidth cap, in Mbps.
<ul style="margin:0"><li>For bill-by-IP account beta users, valid values:<ul><li>BANDWIDTH_PACKAGE: 1 Mbps to 1000 Mbps</li>
<li>BANDWIDTH_POSTPAID_BY_HOUR: 1 Mbps to 100 Mbps</li>
<li>BANDWIDTH_PREPAID_BY_MONTH: 1 Mbps to 200 Mbps</li>
<li>TRAFFIC_POSTPAID_BY_HOUR: 1 Mbps to 100 Mbps</li></ul>Default value: 1 Mbps</li>
<li>If you are not a bill-by-IP account beta user, the EIP outbound bandwidth cap is subject to that of the instance bound to the EIP. Therefore, you do not need to pass in this parameter.</li></ul>
     * @param AddressChargePrepaid $AddressChargePrepaid A required billing parameter for an EIP billed by monthly bandwidth subscription. For EIPs using other billing modes, it can be ignored.
     * @param string $AddressType The EIP type. Default: EIP.
<ul style="margin:0"><li>For a user who has activated the AIA allowlist, possible values are:<ul><li>AnycastEIP: an Anycast EIP address. For more information, see [Anycast Internet Acceleration](https://intl.cloud.tencent.com/document/product/644?from_cn_redirect=1).</li></ul>Note: Only certain regions support Anycast EIPs.</li></ul>
     * @param string $AnycastZone Anycast publishing region
<ul style="margin:0"><li>Valid for users who have activated AIA. Values:<ul><li>ANYCAST_ZONE_GLOBAL: global publishing region </li><li>ANYCAST_ZONE_OVERSEAS: overseas publishing region</li><li><b>**[Disused]**</b> ANYCAST_ZONE_A: publishing region A (updated to ANYCAST_ZONE_GLOBAL)</li><li><b>**[Disused]**</b> ANYCAST_ZONE_B: publishing region B (updated to ANYCAST_ZONE_GLOBAL)</li></ul>Default: ANYCAST_ZONE_OVERSEAS.</li></ul>
     * @param boolean $ApplicableForCLB <b>**[Disused]**</b>
Whether the Anycast EIP can be bound to CLB instances.
<ul style="margin:0"><li>Valid for users who have activated the AIA. Values:<ul><li>TRUE: the Anycast EIP can be bound to CLB instances.</li>
<li>FALSE: the Anycast EIP can be bound to CVMs, NAT gateways, and HAVIPs.</li></ul>Default: FALSE.</li></ul>
     * @param array $Tags List of tags to be bound.
     * @param string $BandwidthPackageId The unique ID of a BGP bandwidth package. If you configure this parameter and set InternetChargeType as BANDWIDTH_PACKAGE, the new EIP is added to this package and billed by the bandwidth package mode.
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
        if (array_key_exists("AddressCount",$param) and $param["AddressCount"] !== null) {
            $this->AddressCount = $param["AddressCount"];
        }

        if (array_key_exists("InternetServiceProvider",$param) and $param["InternetServiceProvider"] !== null) {
            $this->InternetServiceProvider = $param["InternetServiceProvider"];
        }

        if (array_key_exists("InternetChargeType",$param) and $param["InternetChargeType"] !== null) {
            $this->InternetChargeType = $param["InternetChargeType"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("AddressChargePrepaid",$param) and $param["AddressChargePrepaid"] !== null) {
            $this->AddressChargePrepaid = new AddressChargePrepaid();
            $this->AddressChargePrepaid->deserialize($param["AddressChargePrepaid"]);
        }

        if (array_key_exists("AddressType",$param) and $param["AddressType"] !== null) {
            $this->AddressType = $param["AddressType"];
        }

        if (array_key_exists("AnycastZone",$param) and $param["AnycastZone"] !== null) {
            $this->AnycastZone = $param["AnycastZone"];
        }

        if (array_key_exists("ApplicableForCLB",$param) and $param["ApplicableForCLB"] !== null) {
            $this->ApplicableForCLB = $param["ApplicableForCLB"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }
    }
}
