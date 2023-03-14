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
 * Details of the Anti-DDoS Pro instance
 *
 * @method InstanceRelation getInstanceDetail() Obtain Details of the Anti-DDoS Pro instance
 * @method void setInstanceDetail(InstanceRelation $InstanceDetail) Set Details of the Anti-DDoS Pro instance
 * @method BGPInstanceSpecification getSpecificationLimit() Obtain Specifications of the Anti-DDoS Pro instance
 * @method void setSpecificationLimit(BGPInstanceSpecification $SpecificationLimit) Set Specifications of the Anti-DDoS Pro instance
 * @method BGPInstanceUsages getUsage() Obtain Usage statistics of the Anti-DDoS Pro instance
 * @method void setUsage(BGPInstanceUsages $Usage) Set Usage statistics of the Anti-DDoS Pro instance
 * @method RegionInfo getRegion() Obtain Region of the Anti-DDoS Pro instance
 * @method void setRegion(RegionInfo $Region) Set Region of the Anti-DDoS Pro instance
 * @method string getStatus() Obtain Status of the Anti-DDoS Pro instance. Valid values:
`idle`: The instance is running normally.
`attacking`: The instance is under attack.
`blocking`: The instance is blocked.
`creating`: The instance is being created.
`deblocking`: Unblocking the instance
`isolate`: The instance is being isolated.
 * @method void setStatus(string $Status) Set Status of the Anti-DDoS Pro instance. Valid values:
`idle`: The instance is running normally.
`attacking`: The instance is under attack.
`blocking`: The instance is blocked.
`creating`: The instance is being created.
`deblocking`: Unblocking the instance
`isolate`: The instance is being isolated.
 * @method string getCreatedTime() Obtain Purchase time
 * @method void setCreatedTime(string $CreatedTime) Set Purchase time
 * @method string getExpiredTime() Obtain Expiration time
 * @method void setExpiredTime(string $ExpiredTime) Set Expiration time
 * @method string getName() Obtain Name of the Anti-DDoS Pro instance
 * @method void setName(string $Name) Set Name of the Anti-DDoS Pro instance
 * @method PackInfo getPackInfo() Obtain Details of the package to which the Anti-DDoS Pro instance belongs.
When the package provided is not used by the instance, this field is `null`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setPackInfo(PackInfo $PackInfo) Set Details of the package to which the Anti-DDoS Pro instance belongs.
When the package provided is not used by the instance, this field is `null`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getEipProductInfos() Obtain Details of the cloud product used by the EIP bound to the Anti-DDoS Pro instance
 * @method void setEipProductInfos(array $EipProductInfos) Set Details of the cloud product used by the EIP bound to the Anti-DDoS Pro instance
 * @method string getBoundStatus() Obtain Binding status of the Anti-DDoS Pro instance
`idle`: The instance is bound.
 `bounding`: Binding the instance.
`failed`: Failed to bind
]
 * @method void setBoundStatus(string $BoundStatus) Set Binding status of the Anti-DDoS Pro instance
`idle`: The instance is bound.
 `bounding`: Binding the instance.
`failed`: Failed to bind
]
 * @method string getDDoSLevel() Obtain Layer-4 protection level
 * @method void setDDoSLevel(string $DDoSLevel) Set Layer-4 protection level
 * @method integer getCCEnable() Obtain Status of CC protection
 * @method void setCCEnable(integer $CCEnable) Set Status of CC protection
 * @method array getTagInfoList() Obtain Tags associated with the resource
 * @method void setTagInfoList(array $TagInfoList) Set Tags associated with the resource
 * @method integer getIpCountNewFlag() Obtain New edition of Anti-DDoS Pro
 * @method void setIpCountNewFlag(integer $IpCountNewFlag) Set New edition of Anti-DDoS Pro
 * @method integer getVitalityVersion() Obtain The version of attack defense package
 * @method void setVitalityVersion(integer $VitalityVersion) Set The version of attack defense package
 * @method integer getLine() Obtain Network line
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLine(integer $Line) Set Network line
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getElasticServiceBandwidth() Obtain Whether to enable elastic bandwidth
 * @method void setElasticServiceBandwidth(integer $ElasticServiceBandwidth) Set Whether to enable elastic bandwidth
 * @method integer getGiftServiceBandWidth() Obtain Bandwidth quota given away by Tencent Cloud
 * @method void setGiftServiceBandWidth(integer $GiftServiceBandWidth) Set Bandwidth quota given away by Tencent Cloud
 */
class BGPInstance extends AbstractModel
{
    /**
     * @var InstanceRelation Details of the Anti-DDoS Pro instance
     */
    public $InstanceDetail;

    /**
     * @var BGPInstanceSpecification Specifications of the Anti-DDoS Pro instance
     */
    public $SpecificationLimit;

    /**
     * @var BGPInstanceUsages Usage statistics of the Anti-DDoS Pro instance
     */
    public $Usage;

    /**
     * @var RegionInfo Region of the Anti-DDoS Pro instance
     */
    public $Region;

    /**
     * @var string Status of the Anti-DDoS Pro instance. Valid values:
`idle`: The instance is running normally.
`attacking`: The instance is under attack.
`blocking`: The instance is blocked.
`creating`: The instance is being created.
`deblocking`: Unblocking the instance
`isolate`: The instance is being isolated.
     */
    public $Status;

    /**
     * @var string Purchase time
     */
    public $CreatedTime;

    /**
     * @var string Expiration time
     */
    public $ExpiredTime;

    /**
     * @var string Name of the Anti-DDoS Pro instance
     */
    public $Name;

    /**
     * @var PackInfo Details of the package to which the Anti-DDoS Pro instance belongs.
When the package provided is not used by the instance, this field is `null`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $PackInfo;

    /**
     * @var array Details of the cloud product used by the EIP bound to the Anti-DDoS Pro instance
     */
    public $EipProductInfos;

    /**
     * @var string Binding status of the Anti-DDoS Pro instance
`idle`: The instance is bound.
 `bounding`: Binding the instance.
`failed`: Failed to bind
]
     */
    public $BoundStatus;

    /**
     * @var string Layer-4 protection level
     */
    public $DDoSLevel;

    /**
     * @var integer Status of CC protection
     */
    public $CCEnable;

    /**
     * @var array Tags associated with the resource
     */
    public $TagInfoList;

    /**
     * @var integer New edition of Anti-DDoS Pro
     */
    public $IpCountNewFlag;

    /**
     * @var integer The version of attack defense package
     */
    public $VitalityVersion;

    /**
     * @var integer Network line
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Line;

    /**
     * @var integer Whether to enable elastic bandwidth
     */
    public $ElasticServiceBandwidth;

    /**
     * @var integer Bandwidth quota given away by Tencent Cloud
     */
    public $GiftServiceBandWidth;

    /**
     * @param InstanceRelation $InstanceDetail Details of the Anti-DDoS Pro instance
     * @param BGPInstanceSpecification $SpecificationLimit Specifications of the Anti-DDoS Pro instance
     * @param BGPInstanceUsages $Usage Usage statistics of the Anti-DDoS Pro instance
     * @param RegionInfo $Region Region of the Anti-DDoS Pro instance
     * @param string $Status Status of the Anti-DDoS Pro instance. Valid values:
`idle`: The instance is running normally.
`attacking`: The instance is under attack.
`blocking`: The instance is blocked.
`creating`: The instance is being created.
`deblocking`: Unblocking the instance
`isolate`: The instance is being isolated.
     * @param string $CreatedTime Purchase time
     * @param string $ExpiredTime Expiration time
     * @param string $Name Name of the Anti-DDoS Pro instance
     * @param PackInfo $PackInfo Details of the package to which the Anti-DDoS Pro instance belongs.
When the package provided is not used by the instance, this field is `null`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $EipProductInfos Details of the cloud product used by the EIP bound to the Anti-DDoS Pro instance
     * @param string $BoundStatus Binding status of the Anti-DDoS Pro instance
`idle`: The instance is bound.
 `bounding`: Binding the instance.
`failed`: Failed to bind
]
     * @param string $DDoSLevel Layer-4 protection level
     * @param integer $CCEnable Status of CC protection
     * @param array $TagInfoList Tags associated with the resource
     * @param integer $IpCountNewFlag New edition of Anti-DDoS Pro
     * @param integer $VitalityVersion The version of attack defense package
     * @param integer $Line Network line
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ElasticServiceBandwidth Whether to enable elastic bandwidth
     * @param integer $GiftServiceBandWidth Bandwidth quota given away by Tencent Cloud
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
            $this->SpecificationLimit = new BGPInstanceSpecification();
            $this->SpecificationLimit->deserialize($param["SpecificationLimit"]);
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = new BGPInstanceUsages();
            $this->Usage->deserialize($param["Usage"]);
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = new RegionInfo();
            $this->Region->deserialize($param["Region"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PackInfo",$param) and $param["PackInfo"] !== null) {
            $this->PackInfo = new PackInfo();
            $this->PackInfo->deserialize($param["PackInfo"]);
        }

        if (array_key_exists("EipProductInfos",$param) and $param["EipProductInfos"] !== null) {
            $this->EipProductInfos = [];
            foreach ($param["EipProductInfos"] as $key => $value){
                $obj = new EipProductInfo();
                $obj->deserialize($value);
                array_push($this->EipProductInfos, $obj);
            }
        }

        if (array_key_exists("BoundStatus",$param) and $param["BoundStatus"] !== null) {
            $this->BoundStatus = $param["BoundStatus"];
        }

        if (array_key_exists("DDoSLevel",$param) and $param["DDoSLevel"] !== null) {
            $this->DDoSLevel = $param["DDoSLevel"];
        }

        if (array_key_exists("CCEnable",$param) and $param["CCEnable"] !== null) {
            $this->CCEnable = $param["CCEnable"];
        }

        if (array_key_exists("TagInfoList",$param) and $param["TagInfoList"] !== null) {
            $this->TagInfoList = [];
            foreach ($param["TagInfoList"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagInfoList, $obj);
            }
        }

        if (array_key_exists("IpCountNewFlag",$param) and $param["IpCountNewFlag"] !== null) {
            $this->IpCountNewFlag = $param["IpCountNewFlag"];
        }

        if (array_key_exists("VitalityVersion",$param) and $param["VitalityVersion"] !== null) {
            $this->VitalityVersion = $param["VitalityVersion"];
        }

        if (array_key_exists("Line",$param) and $param["Line"] !== null) {
            $this->Line = $param["Line"];
        }

        if (array_key_exists("ElasticServiceBandwidth",$param) and $param["ElasticServiceBandwidth"] !== null) {
            $this->ElasticServiceBandwidth = $param["ElasticServiceBandwidth"];
        }

        if (array_key_exists("GiftServiceBandWidth",$param) and $param["GiftServiceBandWidth"] !== null) {
            $this->GiftServiceBandWidth = $param["GiftServiceBandWidth"];
        }
    }
}
