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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Anti-DDoS Advanced instance details
 *
 * @method InstanceRelation getInstanceDetail() Obtain Anti-DDoS instance details
 * @method void setInstanceDetail(InstanceRelation $InstanceDetail) Set Anti-DDoS instance details
 * @method BGPIPInstanceSpecification getSpecificationLimit() Obtain Anti-DDoS instance specifications
 * @method void setSpecificationLimit(BGPIPInstanceSpecification $SpecificationLimit) Set Anti-DDoS instance specifications
 * @method BGPIPInstanceUsages getUsage() Obtain Anti-DDoS instance usage statistics
 * @method void setUsage(BGPIPInstanceUsages $Usage) Set Anti-DDoS instance usage statistics
 * @method RegionInfo getRegion() Obtain Region of the Anti-DDoS instance
 * @method void setRegion(RegionInfo $Region) Set Region of the Anti-DDoS instance
 * @method string getStatus() Obtain Status of the Anti-DDoS instance. Valid values:
`idle`: running
`attacking`: under attacks
`blocking`: blocked
`creating`: creating
`deblocking`: unblocking
`isolate`: reprocessed and isolated
 * @method void setStatus(string $Status) Set Status of the Anti-DDoS instance. Valid values:
`idle`: running
`attacking`: under attacks
`blocking`: blocked
`creating`: creating
`deblocking`: unblocking
`isolate`: reprocessed and isolated
 * @method string getExpiredTime() Obtain Purchase time
 * @method void setExpiredTime(string $ExpiredTime) Set Purchase time
 * @method string getCreatedTime() Obtain Expired At
 * @method void setCreatedTime(string $CreatedTime) Set Expired At
 * @method string getName() Obtain Name of the Anti-DDoS instance
 * @method void setName(string $Name) Set Name of the Anti-DDoS instance
 * @method PackInfo getPackInfo() Obtain Package details of the Anti-DDoS instance.
Note: This field is `null` for an Anti-DDoS instance without using a package.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setPackInfo(PackInfo $PackInfo) Set Package details of the Anti-DDoS instance.
Note: This field is `null` for an Anti-DDoS instance without using a package.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method StaticPackRelation getStaticPackRelation() Obtain Non-BGP package details of the Anti-DDoS instance.
Note: This field is `null` for an Anti-DDoS instance without using a non-BGP package.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setStaticPackRelation(StaticPackRelation $StaticPackRelation) Set Non-BGP package details of the Anti-DDoS instance.
Note: This field is `null` for an Anti-DDoS instance without using a non-BGP package.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getZoneId() Obtain Specifies the ISP. `0`: Chinese mainland ISPs (default); `1`：Radware；`2`: Tencent; `3`: NSFOCUS. Note that `1`, `2` and `3` are used for services outside the Chinese mainland.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setZoneId(integer $ZoneId) Set Specifies the ISP. `0`: Chinese mainland ISPs (default); `1`：Radware；`2`: Tencent; `3`: NSFOCUS. Note that `1`, `2` and `3` are used for services outside the Chinese mainland.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getTgw() Obtain Used to differentiate clusters
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setTgw(integer $Tgw) Set Used to differentiate clusters
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getEipAddressStatus() Obtain EIP states: `CREATING`, `BINDING`, `BIND`, `UNBINDING`, `UNBIND`, `OFFLINING`, and `BIND_ENI`. The EIP must be bound to an Anti-DDoS Advanced instance.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setEipAddressStatus(string $EipAddressStatus) Set EIP states: `CREATING`, `BINDING`, `BIND`, `UNBINDING`, `UNBIND`, `OFFLINING`, and `BIND_ENI`. The EIP must be bound to an Anti-DDoS Advanced instance.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getEipFlag() Obtain Whether it is an Anti-DDoS EIP instance. `1`: Yes; `0`: No.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setEipFlag(integer $EipFlag) Set Whether it is an Anti-DDoS EIP instance. `1`: Yes; `0`: No.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method EipAddressPackRelation getEipAddressPackRelation() Obtain EIP package details of the Anti-DDoS Advanced instance.
Note: This field is `null` for an Anti-DDoS Advanced instance without using an EIP package.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setEipAddressPackRelation(EipAddressPackRelation $EipAddressPackRelation) Set EIP package details of the Anti-DDoS Advanced instance.
Note: This field is `null` for an Anti-DDoS Advanced instance without using an EIP package.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method EipAddressRelation getEipAddressInfo() Obtain Details of the Anti-DDoS Advanced instance bound to the EIP.
Note: This field is `null` if the EIP is not bound to an Anti-DDoS Advanced instance.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setEipAddressInfo(EipAddressRelation $EipAddressInfo) Set Details of the Anti-DDoS Advanced instance bound to the EIP.
Note: This field is `null` if the EIP is not bound to an Anti-DDoS Advanced instance.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getDomain() Obtain Recommended domain name for clients to access.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) Set Recommended domain name for clients to access.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getDamDDoSStatus() Obtain Whether to enable Sec-MCA. Valid values: `1` (enabled) and `0` (disabled).
 * @method void setDamDDoSStatus(integer $DamDDoSStatus) Set Whether to enable Sec-MCA. Valid values: `1` (enabled) and `0` (disabled).
 * @method integer getV6Flag() Obtain Whether it’s an IPv6 address. `1`: Yes; `0`: No.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setV6Flag(integer $V6Flag) Set Whether it’s an IPv6 address. `1`: Yes; `0`: No.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getBGPIPChannelFlag() Obtain Whether it’s an Anti-DDoS Advanced instance from Tencent Cloud channels. `1`: Yes; `0`: No.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setBGPIPChannelFlag(integer $BGPIPChannelFlag) Set Whether it’s an Anti-DDoS Advanced instance from Tencent Cloud channels. `1`: Yes; `0`: No.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getTagInfoList() Obtain Tag that the Anti-DDoS Advanced instance is associated with
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setTagInfoList(array $TagInfoList) Set Tag that the Anti-DDoS Advanced instance is associated with
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method AnycastOutPackRelation getAnycastOutPackRelation() Obtain All-out package details of the instance
When an all-out package is not used by the instance, this field is `null`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setAnycastOutPackRelation(AnycastOutPackRelation $AnycastOutPackRelation) Set All-out package details of the instance
When an all-out package is not used by the instance, this field is `null`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getInstanceVersion() Obtain Edition of the instance
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setInstanceVersion(integer $InstanceVersion) Set Edition of the instance
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getConvoyId() Obtain Convoy instance ID
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setConvoyId(string $ConvoyId) Set Convoy instance ID
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getElasticBandwidth() Obtain Pay-as-you-go bandwidth
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setElasticBandwidth(integer $ElasticBandwidth) Set Pay-as-you-go bandwidth
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getEOFlag() Obtain Whether it’s the IP broadcasted by EdgeOne. Values: `1` (yes), `0` (no)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEOFlag(integer $EOFlag) Set Whether it’s the IP broadcasted by EdgeOne. Values: `1` (yes), `0` (no)
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BGPIPInstance extends AbstractModel
{
    /**
     * @var InstanceRelation Anti-DDoS instance details
     */
    public $InstanceDetail;

    /**
     * @var BGPIPInstanceSpecification Anti-DDoS instance specifications
     */
    public $SpecificationLimit;

    /**
     * @var BGPIPInstanceUsages Anti-DDoS instance usage statistics
     */
    public $Usage;

    /**
     * @var RegionInfo Region of the Anti-DDoS instance
     */
    public $Region;

    /**
     * @var string Status of the Anti-DDoS instance. Valid values:
`idle`: running
`attacking`: under attacks
`blocking`: blocked
`creating`: creating
`deblocking`: unblocking
`isolate`: reprocessed and isolated
     */
    public $Status;

    /**
     * @var string Purchase time
     */
    public $ExpiredTime;

    /**
     * @var string Expired At
     */
    public $CreatedTime;

    /**
     * @var string Name of the Anti-DDoS instance
     */
    public $Name;

    /**
     * @var PackInfo Package details of the Anti-DDoS instance.
Note: This field is `null` for an Anti-DDoS instance without using a package.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $PackInfo;

    /**
     * @var StaticPackRelation Non-BGP package details of the Anti-DDoS instance.
Note: This field is `null` for an Anti-DDoS instance without using a non-BGP package.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $StaticPackRelation;

    /**
     * @var integer Specifies the ISP. `0`: Chinese mainland ISPs (default); `1`：Radware；`2`: Tencent; `3`: NSFOCUS. Note that `1`, `2` and `3` are used for services outside the Chinese mainland.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ZoneId;

    /**
     * @var integer Used to differentiate clusters
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Tgw;

    /**
     * @var string EIP states: `CREATING`, `BINDING`, `BIND`, `UNBINDING`, `UNBIND`, `OFFLINING`, and `BIND_ENI`. The EIP must be bound to an Anti-DDoS Advanced instance.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $EipAddressStatus;

    /**
     * @var integer Whether it is an Anti-DDoS EIP instance. `1`: Yes; `0`: No.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $EipFlag;

    /**
     * @var EipAddressPackRelation EIP package details of the Anti-DDoS Advanced instance.
Note: This field is `null` for an Anti-DDoS Advanced instance without using an EIP package.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $EipAddressPackRelation;

    /**
     * @var EipAddressRelation Details of the Anti-DDoS Advanced instance bound to the EIP.
Note: This field is `null` if the EIP is not bound to an Anti-DDoS Advanced instance.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $EipAddressInfo;

    /**
     * @var string Recommended domain name for clients to access.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @var integer Whether to enable Sec-MCA. Valid values: `1` (enabled) and `0` (disabled).
     */
    public $DamDDoSStatus;

    /**
     * @var integer Whether it’s an IPv6 address. `1`: Yes; `0`: No.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $V6Flag;

    /**
     * @var integer Whether it’s an Anti-DDoS Advanced instance from Tencent Cloud channels. `1`: Yes; `0`: No.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $BGPIPChannelFlag;

    /**
     * @var array Tag that the Anti-DDoS Advanced instance is associated with
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $TagInfoList;

    /**
     * @var AnycastOutPackRelation All-out package details of the instance
When an all-out package is not used by the instance, this field is `null`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $AnycastOutPackRelation;

    /**
     * @var integer Edition of the instance
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $InstanceVersion;

    /**
     * @var string Convoy instance ID
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ConvoyId;

    /**
     * @var integer Pay-as-you-go bandwidth
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ElasticBandwidth;

    /**
     * @var integer Whether it’s the IP broadcasted by EdgeOne. Values: `1` (yes), `0` (no)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EOFlag;

    /**
     * @param InstanceRelation $InstanceDetail Anti-DDoS instance details
     * @param BGPIPInstanceSpecification $SpecificationLimit Anti-DDoS instance specifications
     * @param BGPIPInstanceUsages $Usage Anti-DDoS instance usage statistics
     * @param RegionInfo $Region Region of the Anti-DDoS instance
     * @param string $Status Status of the Anti-DDoS instance. Valid values:
`idle`: running
`attacking`: under attacks
`blocking`: blocked
`creating`: creating
`deblocking`: unblocking
`isolate`: reprocessed and isolated
     * @param string $ExpiredTime Purchase time
     * @param string $CreatedTime Expired At
     * @param string $Name Name of the Anti-DDoS instance
     * @param PackInfo $PackInfo Package details of the Anti-DDoS instance.
Note: This field is `null` for an Anti-DDoS instance without using a package.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param StaticPackRelation $StaticPackRelation Non-BGP package details of the Anti-DDoS instance.
Note: This field is `null` for an Anti-DDoS instance without using a non-BGP package.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $ZoneId Specifies the ISP. `0`: Chinese mainland ISPs (default); `1`：Radware；`2`: Tencent; `3`: NSFOCUS. Note that `1`, `2` and `3` are used for services outside the Chinese mainland.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $Tgw Used to differentiate clusters
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $EipAddressStatus EIP states: `CREATING`, `BINDING`, `BIND`, `UNBINDING`, `UNBIND`, `OFFLINING`, and `BIND_ENI`. The EIP must be bound to an Anti-DDoS Advanced instance.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $EipFlag Whether it is an Anti-DDoS EIP instance. `1`: Yes; `0`: No.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param EipAddressPackRelation $EipAddressPackRelation EIP package details of the Anti-DDoS Advanced instance.
Note: This field is `null` for an Anti-DDoS Advanced instance without using an EIP package.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param EipAddressRelation $EipAddressInfo Details of the Anti-DDoS Advanced instance bound to the EIP.
Note: This field is `null` if the EIP is not bound to an Anti-DDoS Advanced instance.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Domain Recommended domain name for clients to access.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $DamDDoSStatus Whether to enable Sec-MCA. Valid values: `1` (enabled) and `0` (disabled).
     * @param integer $V6Flag Whether it’s an IPv6 address. `1`: Yes; `0`: No.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $BGPIPChannelFlag Whether it’s an Anti-DDoS Advanced instance from Tencent Cloud channels. `1`: Yes; `0`: No.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $TagInfoList Tag that the Anti-DDoS Advanced instance is associated with
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param AnycastOutPackRelation $AnycastOutPackRelation All-out package details of the instance
When an all-out package is not used by the instance, this field is `null`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $InstanceVersion Edition of the instance
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $ConvoyId Convoy instance ID
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $ElasticBandwidth Pay-as-you-go bandwidth
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $EOFlag Whether it’s the IP broadcasted by EdgeOne. Values: `1` (yes), `0` (no)
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("InstanceDetail",$param) and $param["InstanceDetail"] !== null) {
            $this->InstanceDetail = new InstanceRelation();
            $this->InstanceDetail->deserialize($param["InstanceDetail"]);
        }

        if (array_key_exists("SpecificationLimit",$param) and $param["SpecificationLimit"] !== null) {
            $this->SpecificationLimit = new BGPIPInstanceSpecification();
            $this->SpecificationLimit->deserialize($param["SpecificationLimit"]);
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = new BGPIPInstanceUsages();
            $this->Usage->deserialize($param["Usage"]);
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = new RegionInfo();
            $this->Region->deserialize($param["Region"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PackInfo",$param) and $param["PackInfo"] !== null) {
            $this->PackInfo = new PackInfo();
            $this->PackInfo->deserialize($param["PackInfo"]);
        }

        if (array_key_exists("StaticPackRelation",$param) and $param["StaticPackRelation"] !== null) {
            $this->StaticPackRelation = new StaticPackRelation();
            $this->StaticPackRelation->deserialize($param["StaticPackRelation"]);
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Tgw",$param) and $param["Tgw"] !== null) {
            $this->Tgw = $param["Tgw"];
        }

        if (array_key_exists("EipAddressStatus",$param) and $param["EipAddressStatus"] !== null) {
            $this->EipAddressStatus = $param["EipAddressStatus"];
        }

        if (array_key_exists("EipFlag",$param) and $param["EipFlag"] !== null) {
            $this->EipFlag = $param["EipFlag"];
        }

        if (array_key_exists("EipAddressPackRelation",$param) and $param["EipAddressPackRelation"] !== null) {
            $this->EipAddressPackRelation = new EipAddressPackRelation();
            $this->EipAddressPackRelation->deserialize($param["EipAddressPackRelation"]);
        }

        if (array_key_exists("EipAddressInfo",$param) and $param["EipAddressInfo"] !== null) {
            $this->EipAddressInfo = new EipAddressRelation();
            $this->EipAddressInfo->deserialize($param["EipAddressInfo"]);
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DamDDoSStatus",$param) and $param["DamDDoSStatus"] !== null) {
            $this->DamDDoSStatus = $param["DamDDoSStatus"];
        }

        if (array_key_exists("V6Flag",$param) and $param["V6Flag"] !== null) {
            $this->V6Flag = $param["V6Flag"];
        }

        if (array_key_exists("BGPIPChannelFlag",$param) and $param["BGPIPChannelFlag"] !== null) {
            $this->BGPIPChannelFlag = $param["BGPIPChannelFlag"];
        }

        if (array_key_exists("TagInfoList",$param) and $param["TagInfoList"] !== null) {
            $this->TagInfoList = [];
            foreach ($param["TagInfoList"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagInfoList, $obj);
            }
        }

        if (array_key_exists("AnycastOutPackRelation",$param) and $param["AnycastOutPackRelation"] !== null) {
            $this->AnycastOutPackRelation = new AnycastOutPackRelation();
            $this->AnycastOutPackRelation->deserialize($param["AnycastOutPackRelation"]);
        }

        if (array_key_exists("InstanceVersion",$param) and $param["InstanceVersion"] !== null) {
            $this->InstanceVersion = $param["InstanceVersion"];
        }

        if (array_key_exists("ConvoyId",$param) and $param["ConvoyId"] !== null) {
            $this->ConvoyId = $param["ConvoyId"];
        }

        if (array_key_exists("ElasticBandwidth",$param) and $param["ElasticBandwidth"] !== null) {
            $this->ElasticBandwidth = $param["ElasticBandwidth"];
        }

        if (array_key_exists("EOFlag",$param) and $param["EOFlag"] !== null) {
            $this->EOFlag = $param["EOFlag"];
        }
    }
}
