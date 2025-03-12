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
<ul style="margin:0"><li>For bill-by-IP account beta users, the bandwidth cap range is determined by the EIP billing mode. <ul><li>`BANDWIDTH_PACKAGE`: 1 Mbps to 2000 Mbps</li>
<li>`BANDWIDTH_POSTPAID_BY_HOUR`: 1 Mbps to 100 Mbps</li>
<li>`BANDWIDTH_PREPAID_BY_MONTH`: 1 Mbps to 200 Mbps</li>
<li>`TRAFFIC_POSTPAID_BY_HOUR`: 1 Mbps to 100 Mbps</li></ul>Default value: 1 Mbps </li>
<li>If you are not a bill-by-IP account beta user, the EIP outbound bandwidth cap is subject to the bandwidth cap of the instance bound to the EIP. Therefore, you do not need to pass in this parameter. </li></ul>
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set The EIP outbound bandwidth cap, in Mbps.
<ul style="margin:0"><li>For bill-by-IP account beta users, the bandwidth cap range is determined by the EIP billing mode. <ul><li>`BANDWIDTH_PACKAGE`: 1 Mbps to 2000 Mbps</li>
<li>`BANDWIDTH_POSTPAID_BY_HOUR`: 1 Mbps to 100 Mbps</li>
<li>`BANDWIDTH_PREPAID_BY_MONTH`: 1 Mbps to 200 Mbps</li>
<li>`TRAFFIC_POSTPAID_BY_HOUR`: 1 Mbps to 100 Mbps</li></ul>Default value: 1 Mbps </li>
<li>If you are not a bill-by-IP account beta user, the EIP outbound bandwidth cap is subject to the bandwidth cap of the instance bound to the EIP. Therefore, you do not need to pass in this parameter. </li></ul>
 * @method AddressChargePrepaid getAddressChargePrepaid() Obtain A required billing parameter for an EIP billed by monthly bandwidth subscription. For EIPs using other billing modes, it can be ignored.
 * @method void setAddressChargePrepaid(AddressChargePrepaid $AddressChargePrepaid) Set A required billing parameter for an EIP billed by monthly bandwidth subscription. For EIPs using other billing modes, it can be ignored.
 * @method string getAddressType() Obtain EIP type. Default value: EIP.
<ul style="margin:0"><li>For beta users of AIA, the value can be:</li></ul>`AnycastEIP`: an AIA IP address. For more information, see [Anycast Internet Acceleration](https://intl.cloud.tencent.com/document/product/644?from_cn_redirect=1).</li></ul>Note: Anycast EIPs are supported only in partial regions. </li></ul>
<ul style="margin:0"><li>For beta users of dedicated IP, the value can be: <ul><li>`HighQualityEIP`: Dedicated IP</li></ul>Note that dedicated IPs are only available in partial regions. </li></ul>
</ul>
<ul style="margin:0"><li>For beta users of Anti-DDoS IP, the value can be: <ul><li>`AntiDDoSEIP`: Anti-DDoS EIP</li></ul>Note that Anti-DDoS IPs are only available in partial regions. </li></ul>
 * @method void setAddressType(string $AddressType) Set EIP type. Default value: EIP.
<ul style="margin:0"><li>For beta users of AIA, the value can be:</li></ul>`AnycastEIP`: an AIA IP address. For more information, see [Anycast Internet Acceleration](https://intl.cloud.tencent.com/document/product/644?from_cn_redirect=1).</li></ul>Note: Anycast EIPs are supported only in partial regions. </li></ul>
<ul style="margin:0"><li>For beta users of dedicated IP, the value can be: <ul><li>`HighQualityEIP`: Dedicated IP</li></ul>Note that dedicated IPs are only available in partial regions. </li></ul>
</ul>
<ul style="margin:0"><li>For beta users of Anti-DDoS IP, the value can be: <ul><li>`AntiDDoSEIP`: Anti-DDoS EIP</li></ul>Note that Anti-DDoS IPs are only available in partial regions. </li></ul>
 * @method string getAnycastZone() Obtain Anycast publishing region
<ul style="margin:0"><li>Valid for users who have activated AIA. Values:<ul><li>ANYCAST_ZONE_GLOBAL: global publishing region </li><li>ANYCAST_ZONE_OVERSEAS: overseas publishing region</li><li><b>**[Disused]**</b> ANYCAST_ZONE_A: publishing region A (updated to ANYCAST_ZONE_GLOBAL)</li><li><b>**[Disused]**</b> ANYCAST_ZONE_B: publishing region B (updated to ANYCAST_ZONE_GLOBAL)</li></ul>Default: ANYCAST_ZONE_OVERSEAS.</li></ul>
 * @method void setAnycastZone(string $AnycastZone) Set Anycast publishing region
<ul style="margin:0"><li>Valid for users who have activated AIA. Values:<ul><li>ANYCAST_ZONE_GLOBAL: global publishing region </li><li>ANYCAST_ZONE_OVERSEAS: overseas publishing region</li><li><b>**[Disused]**</b> ANYCAST_ZONE_A: publishing region A (updated to ANYCAST_ZONE_GLOBAL)</li><li><b>**[Disused]**</b> ANYCAST_ZONE_B: publishing region B (updated to ANYCAST_ZONE_GLOBAL)</li></ul>Default: ANYCAST_ZONE_OVERSEAS.</li></ul>
 * @method array getVipCluster() Obtain 
 * @method void setVipCluster(array $VipCluster) Set 
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
 * @method string getAddressName() Obtain EIP name, which is the custom EIP name given by the user when applying for the EIP. Default: not named
 * @method void setAddressName(string $AddressName) Set EIP name, which is the custom EIP name given by the user when applying for the EIP. Default: not named
 * @method string getDedicatedClusterId() Obtain 
 * @method void setDedicatedClusterId(string $DedicatedClusterId) Set 
 * @method boolean getIsDedicatedAddressPool() Obtain 
 * @method void setIsDedicatedAddressPool(boolean $IsDedicatedAddressPool) Set 
 * @method string getEgress() Obtain Network egress. It defaults to `center_egress1`.
 * @method void setEgress(string $Egress) Set Network egress. It defaults to `center_egress1`.
 * @method string getAntiDDoSPackageId() Obtain Anti-DDoS service package ID. This is required when you want to request an Anti-DDoS IP.
 * @method void setAntiDDoSPackageId(string $AntiDDoSPackageId) Set Anti-DDoS service package ID. This is required when you want to request an Anti-DDoS IP.
 * @method string getClientToken() Obtain A string used to ensure the idempotency of the request. Generate a value based on your client. This can ensure that the value is unique for different requests. It only supports ASCII characters and can contain up to 64 characters. 
 * @method void setClientToken(string $ClientToken) Set A string used to ensure the idempotency of the request. Generate a value based on your client. This can ensure that the value is unique for different requests. It only supports ASCII characters and can contain up to 64 characters. 
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
<ul style="margin:0"><li>For bill-by-IP account beta users, the bandwidth cap range is determined by the EIP billing mode. <ul><li>`BANDWIDTH_PACKAGE`: 1 Mbps to 2000 Mbps</li>
<li>`BANDWIDTH_POSTPAID_BY_HOUR`: 1 Mbps to 100 Mbps</li>
<li>`BANDWIDTH_PREPAID_BY_MONTH`: 1 Mbps to 200 Mbps</li>
<li>`TRAFFIC_POSTPAID_BY_HOUR`: 1 Mbps to 100 Mbps</li></ul>Default value: 1 Mbps </li>
<li>If you are not a bill-by-IP account beta user, the EIP outbound bandwidth cap is subject to the bandwidth cap of the instance bound to the EIP. Therefore, you do not need to pass in this parameter. </li></ul>
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var AddressChargePrepaid A required billing parameter for an EIP billed by monthly bandwidth subscription. For EIPs using other billing modes, it can be ignored.
     */
    public $AddressChargePrepaid;

    /**
     * @var string EIP type. Default value: EIP.
<ul style="margin:0"><li>For beta users of AIA, the value can be:</li></ul>`AnycastEIP`: an AIA IP address. For more information, see [Anycast Internet Acceleration](https://intl.cloud.tencent.com/document/product/644?from_cn_redirect=1).</li></ul>Note: Anycast EIPs are supported only in partial regions. </li></ul>
<ul style="margin:0"><li>For beta users of dedicated IP, the value can be: <ul><li>`HighQualityEIP`: Dedicated IP</li></ul>Note that dedicated IPs are only available in partial regions. </li></ul>
</ul>
<ul style="margin:0"><li>For beta users of Anti-DDoS IP, the value can be: <ul><li>`AntiDDoSEIP`: Anti-DDoS EIP</li></ul>Note that Anti-DDoS IPs are only available in partial regions. </li></ul>
     */
    public $AddressType;

    /**
     * @var string Anycast publishing region
<ul style="margin:0"><li>Valid for users who have activated AIA. Values:<ul><li>ANYCAST_ZONE_GLOBAL: global publishing region </li><li>ANYCAST_ZONE_OVERSEAS: overseas publishing region</li><li><b>**[Disused]**</b> ANYCAST_ZONE_A: publishing region A (updated to ANYCAST_ZONE_GLOBAL)</li><li><b>**[Disused]**</b> ANYCAST_ZONE_B: publishing region B (updated to ANYCAST_ZONE_GLOBAL)</li></ul>Default: ANYCAST_ZONE_OVERSEAS.</li></ul>
     */
    public $AnycastZone;

    /**
     * @var array 
     */
    public $VipCluster;

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
     * @var string EIP name, which is the custom EIP name given by the user when applying for the EIP. Default: not named
     */
    public $AddressName;

    /**
     * @var string 
     */
    public $DedicatedClusterId;

    /**
     * @var boolean 
     */
    public $IsDedicatedAddressPool;

    /**
     * @var string Network egress. It defaults to `center_egress1`.
     */
    public $Egress;

    /**
     * @var string Anti-DDoS service package ID. This is required when you want to request an Anti-DDoS IP.
     */
    public $AntiDDoSPackageId;

    /**
     * @var string A string used to ensure the idempotency of the request. Generate a value based on your client. This can ensure that the value is unique for different requests. It only supports ASCII characters and can contain up to 64 characters. 
     */
    public $ClientToken;

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
<ul style="margin:0"><li>For bill-by-IP account beta users, the bandwidth cap range is determined by the EIP billing mode. <ul><li>`BANDWIDTH_PACKAGE`: 1 Mbps to 2000 Mbps</li>
<li>`BANDWIDTH_POSTPAID_BY_HOUR`: 1 Mbps to 100 Mbps</li>
<li>`BANDWIDTH_PREPAID_BY_MONTH`: 1 Mbps to 200 Mbps</li>
<li>`TRAFFIC_POSTPAID_BY_HOUR`: 1 Mbps to 100 Mbps</li></ul>Default value: 1 Mbps </li>
<li>If you are not a bill-by-IP account beta user, the EIP outbound bandwidth cap is subject to the bandwidth cap of the instance bound to the EIP. Therefore, you do not need to pass in this parameter. </li></ul>
     * @param AddressChargePrepaid $AddressChargePrepaid A required billing parameter for an EIP billed by monthly bandwidth subscription. For EIPs using other billing modes, it can be ignored.
     * @param string $AddressType EIP type. Default value: EIP.
<ul style="margin:0"><li>For beta users of AIA, the value can be:</li></ul>`AnycastEIP`: an AIA IP address. For more information, see [Anycast Internet Acceleration](https://intl.cloud.tencent.com/document/product/644?from_cn_redirect=1).</li></ul>Note: Anycast EIPs are supported only in partial regions. </li></ul>
<ul style="margin:0"><li>For beta users of dedicated IP, the value can be: <ul><li>`HighQualityEIP`: Dedicated IP</li></ul>Note that dedicated IPs are only available in partial regions. </li></ul>
</ul>
<ul style="margin:0"><li>For beta users of Anti-DDoS IP, the value can be: <ul><li>`AntiDDoSEIP`: Anti-DDoS EIP</li></ul>Note that Anti-DDoS IPs are only available in partial regions. </li></ul>
     * @param string $AnycastZone Anycast publishing region
<ul style="margin:0"><li>Valid for users who have activated AIA. Values:<ul><li>ANYCAST_ZONE_GLOBAL: global publishing region </li><li>ANYCAST_ZONE_OVERSEAS: overseas publishing region</li><li><b>**[Disused]**</b> ANYCAST_ZONE_A: publishing region A (updated to ANYCAST_ZONE_GLOBAL)</li><li><b>**[Disused]**</b> ANYCAST_ZONE_B: publishing region B (updated to ANYCAST_ZONE_GLOBAL)</li></ul>Default: ANYCAST_ZONE_OVERSEAS.</li></ul>
     * @param array $VipCluster 
     * @param boolean $ApplicableForCLB <b>**[Disused]**</b>
Whether the Anycast EIP can be bound to CLB instances.
<ul style="margin:0"><li>Valid for users who have activated the AIA. Values:<ul><li>TRUE: the Anycast EIP can be bound to CLB instances.</li>
<li>FALSE: the Anycast EIP can be bound to CVMs, NAT gateways, and HAVIPs.</li></ul>Default: FALSE.</li></ul>
     * @param array $Tags List of tags to be bound.
     * @param string $BandwidthPackageId The unique ID of a BGP bandwidth package. If you configure this parameter and set InternetChargeType as BANDWIDTH_PACKAGE, the new EIP is added to this package and billed by the bandwidth package mode.
     * @param string $AddressName EIP name, which is the custom EIP name given by the user when applying for the EIP. Default: not named
     * @param string $DedicatedClusterId 
     * @param boolean $IsDedicatedAddressPool 
     * @param string $Egress Network egress. It defaults to `center_egress1`.
     * @param string $AntiDDoSPackageId Anti-DDoS service package ID. This is required when you want to request an Anti-DDoS IP.
     * @param string $ClientToken A string used to ensure the idempotency of the request. Generate a value based on your client. This can ensure that the value is unique for different requests. It only supports ASCII characters and can contain up to 64 characters. 
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

        if (array_key_exists("VipCluster",$param) and $param["VipCluster"] !== null) {
            $this->VipCluster = $param["VipCluster"];
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

        if (array_key_exists("AddressName",$param) and $param["AddressName"] !== null) {
            $this->AddressName = $param["AddressName"];
        }

        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }

        if (array_key_exists("IsDedicatedAddressPool",$param) and $param["IsDedicatedAddressPool"] !== null) {
            $this->IsDedicatedAddressPool = $param["IsDedicatedAddressPool"];
        }

        if (array_key_exists("Egress",$param) and $param["Egress"] !== null) {
            $this->Egress = $param["Egress"];
        }

        if (array_key_exists("AntiDDoSPackageId",$param) and $param["AntiDDoSPackageId"] !== null) {
            $this->AntiDDoSPackageId = $param["AntiDDoSPackageId"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }
    }
}
