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
 * Anti-DDoS Pro instance details
 *
 * @method InstanceRelation getInstanceDetail() Obtain Anti-DDoS instance details
 * @method void setInstanceDetail(InstanceRelation $InstanceDetail) Set Anti-DDoS instance details
 * @method BGPInstanceSpecification getSpecificationLimit() Obtain Anti-DDoS instance specifications
 * @method void setSpecificationLimit(BGPInstanceSpecification $SpecificationLimit) Set Anti-DDoS instance specifications
 * @method BGPInstanceUsages getUsage() Obtain Anti-DDoS instance usage statistics
 * @method void setUsage(BGPInstanceUsages $Usage) Set Anti-DDoS instance usage statistics
 * @method RegionInfo getRegion() Obtain Region of the Anti-DDoS instance
 * @method void setRegion(RegionInfo $Region) Set Region of the Anti-DDoS instance
 * @method string getStatus() Obtain Status of the Anti-DDoS instance. Valid values:
`idle`: running
`attacking`: under attacks
`blocking`: blocked
`creating`: creating
`deblocking`: unblocked
`isolate`: isolated
 * @method void setStatus(string $Status) Set Status of the Anti-DDoS instance. Valid values:
`idle`: running
`attacking`: under attacks
`blocking`: blocked
`creating`: creating
`deblocking`: unblocked
`isolate`: isolated
 * @method string getCreatedTime() Obtain Purchase Time
 * @method void setCreatedTime(string $CreatedTime) Set Purchase Time
 * @method string getExpiredTime() Obtain Expiration time
 * @method void setExpiredTime(string $ExpiredTime) Set Expiration time
 * @method string getName() Obtain Name of the Anti-DDoS instance
 * @method void setName(string $Name) Set Name of the Anti-DDoS instance
 * @method PackInfo getPackInfo() Obtain Package details of the Anti-DDoS instance.
Note: This field is `null` for an Anti-DDoS instance without using a package.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setPackInfo(PackInfo $PackInfo) Set Package details of the Anti-DDoS instance.
Note: This field is `null` for an Anti-DDoS instance without using a package.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getEipProductInfos() Obtain Details of the cloud product used by the EIP bound to the Anti-DDoS Pro instance
 * @method void setEipProductInfos(array $EipProductInfos) Set Details of the cloud product used by the EIP bound to the Anti-DDoS Pro instance
 * @method string getBoundStatus() Obtain Binding status of the Anti-DDoS Pro instance
`idle`: the instance is bound.
 `bounding`: the instance is in binding.
`failed`: the binding failed.
]
 * @method void setBoundStatus(string $BoundStatus) Set Binding status of the Anti-DDoS Pro instance
`idle`: the instance is bound.
 `bounding`: the instance is in binding.
`failed`: the binding failed.
]
 * @method string getDDoSLevel() Obtain Layer-4 protection level
 * @method void setDDoSLevel(string $DDoSLevel) Set Layer-4 protection level
 * @method integer getCCEnable() Obtain CC protection switch
 * @method void setCCEnable(integer $CCEnable) Set CC protection switch
 */
class BGPInstance extends AbstractModel
{
    /**
     * @var InstanceRelation Anti-DDoS instance details
     */
    public $InstanceDetail;

    /**
     * @var BGPInstanceSpecification Anti-DDoS instance specifications
     */
    public $SpecificationLimit;

    /**
     * @var BGPInstanceUsages Anti-DDoS instance usage statistics
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
`deblocking`: unblocked
`isolate`: isolated
     */
    public $Status;

    /**
     * @var string Purchase Time
     */
    public $CreatedTime;

    /**
     * @var string Expiration time
     */
    public $ExpiredTime;

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
     * @var array Details of the cloud product used by the EIP bound to the Anti-DDoS Pro instance
     */
    public $EipProductInfos;

    /**
     * @var string Binding status of the Anti-DDoS Pro instance
`idle`: the instance is bound.
 `bounding`: the instance is in binding.
`failed`: the binding failed.
]
     */
    public $BoundStatus;

    /**
     * @var string Layer-4 protection level
     */
    public $DDoSLevel;

    /**
     * @var integer CC protection switch
     */
    public $CCEnable;

    /**
     * @param InstanceRelation $InstanceDetail Anti-DDoS instance details
     * @param BGPInstanceSpecification $SpecificationLimit Anti-DDoS instance specifications
     * @param BGPInstanceUsages $Usage Anti-DDoS instance usage statistics
     * @param RegionInfo $Region Region of the Anti-DDoS instance
     * @param string $Status Status of the Anti-DDoS instance. Valid values:
`idle`: running
`attacking`: under attacks
`blocking`: blocked
`creating`: creating
`deblocking`: unblocked
`isolate`: isolated
     * @param string $CreatedTime Purchase Time
     * @param string $ExpiredTime Expiration time
     * @param string $Name Name of the Anti-DDoS instance
     * @param PackInfo $PackInfo Package details of the Anti-DDoS instance.
Note: This field is `null` for an Anti-DDoS instance without using a package.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $EipProductInfos Details of the cloud product used by the EIP bound to the Anti-DDoS Pro instance
     * @param string $BoundStatus Binding status of the Anti-DDoS Pro instance
`idle`: the instance is bound.
 `bounding`: the instance is in binding.
`failed`: the binding failed.
]
     * @param string $DDoSLevel Layer-4 protection level
     * @param integer $CCEnable CC protection switch
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
    }
}
