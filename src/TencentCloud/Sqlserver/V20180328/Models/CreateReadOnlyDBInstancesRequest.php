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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateReadOnlyDBInstances request structure.
 *
 * @method string getInstanceId() Obtain 
 * @method void setInstanceId(string $InstanceId) Set 
 * @method string getZone() Obtain 
 * @method void setZone(string $Zone) Set 
 * @method integer getReadOnlyGroupType() Obtain 
 * @method void setReadOnlyGroupType(integer $ReadOnlyGroupType) Set 
 * @method integer getMemory() Obtain 
 * @method void setMemory(integer $Memory) Set 
 * @method integer getStorage() Obtain 
 * @method void setStorage(integer $Storage) Set 
 * @method integer getReadOnlyGroupForcedUpgrade() Obtain 
 * @method void setReadOnlyGroupForcedUpgrade(integer $ReadOnlyGroupForcedUpgrade) Set 
 * @method string getReadOnlyGroupId() Obtain 
 * @method void setReadOnlyGroupId(string $ReadOnlyGroupId) Set 
 * @method string getReadOnlyGroupName() Obtain 
 * @method void setReadOnlyGroupName(string $ReadOnlyGroupName) Set 
 * @method integer getReadOnlyGroupIsOfflineDelay() Obtain 
 * @method void setReadOnlyGroupIsOfflineDelay(integer $ReadOnlyGroupIsOfflineDelay) Set 
 * @method integer getReadOnlyGroupMaxDelayTime() Obtain 
 * @method void setReadOnlyGroupMaxDelayTime(integer $ReadOnlyGroupMaxDelayTime) Set 
 * @method integer getReadOnlyGroupMinInGroup() Obtain 
 * @method void setReadOnlyGroupMinInGroup(integer $ReadOnlyGroupMinInGroup) Set 
 * @method string getInstanceChargeType() Obtain 
 * @method void setInstanceChargeType(string $InstanceChargeType) Set 
 * @method integer getGoodsNum() Obtain 
 * @method void setGoodsNum(integer $GoodsNum) Set 
 * @method string getSubnetId() Obtain 
 * @method void setSubnetId(string $SubnetId) Set 
 * @method string getVpcId() Obtain 
 * @method void setVpcId(string $VpcId) Set 
 * @method integer getPeriod() Obtain 
 * @method void setPeriod(integer $Period) Set 
 * @method array getSecurityGroupList() Obtain 
 * @method void setSecurityGroupList(array $SecurityGroupList) Set 
 * @method integer getAutoVoucher() Obtain 
 * @method void setAutoVoucher(integer $AutoVoucher) Set 
 * @method array getVoucherIds() Obtain 
 * @method void setVoucherIds(array $VoucherIds) Set 
 * @method array getResourceTags() Obtain 
 * @method void setResourceTags(array $ResourceTags) Set 
 * @method string getCollation() Obtain 
 * @method void setCollation(string $Collation) Set 
 * @method string getTimeZone() Obtain 
 * @method void setTimeZone(string $TimeZone) Set 
 */
class CreateReadOnlyDBInstancesRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $InstanceId;

    /**
     * @var string 
     */
    public $Zone;

    /**
     * @var integer 
     */
    public $ReadOnlyGroupType;

    /**
     * @var integer 
     */
    public $Memory;

    /**
     * @var integer 
     */
    public $Storage;

    /**
     * @var integer 
     */
    public $ReadOnlyGroupForcedUpgrade;

    /**
     * @var string 
     */
    public $ReadOnlyGroupId;

    /**
     * @var string 
     */
    public $ReadOnlyGroupName;

    /**
     * @var integer 
     */
    public $ReadOnlyGroupIsOfflineDelay;

    /**
     * @var integer 
     */
    public $ReadOnlyGroupMaxDelayTime;

    /**
     * @var integer 
     */
    public $ReadOnlyGroupMinInGroup;

    /**
     * @var string 
     */
    public $InstanceChargeType;

    /**
     * @var integer 
     */
    public $GoodsNum;

    /**
     * @var string 
     */
    public $SubnetId;

    /**
     * @var string 
     */
    public $VpcId;

    /**
     * @var integer 
     */
    public $Period;

    /**
     * @var array 
     */
    public $SecurityGroupList;

    /**
     * @var integer 
     */
    public $AutoVoucher;

    /**
     * @var array 
     */
    public $VoucherIds;

    /**
     * @var array 
     */
    public $ResourceTags;

    /**
     * @var string 
     */
    public $Collation;

    /**
     * @var string 
     */
    public $TimeZone;

    /**
     * @param string $InstanceId 
     * @param string $Zone 
     * @param integer $ReadOnlyGroupType 
     * @param integer $Memory 
     * @param integer $Storage 
     * @param integer $ReadOnlyGroupForcedUpgrade 
     * @param string $ReadOnlyGroupId 
     * @param string $ReadOnlyGroupName 
     * @param integer $ReadOnlyGroupIsOfflineDelay 
     * @param integer $ReadOnlyGroupMaxDelayTime 
     * @param integer $ReadOnlyGroupMinInGroup 
     * @param string $InstanceChargeType 
     * @param integer $GoodsNum 
     * @param string $SubnetId 
     * @param string $VpcId 
     * @param integer $Period 
     * @param array $SecurityGroupList 
     * @param integer $AutoVoucher 
     * @param array $VoucherIds 
     * @param array $ResourceTags 
     * @param string $Collation 
     * @param string $TimeZone 
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ReadOnlyGroupType",$param) and $param["ReadOnlyGroupType"] !== null) {
            $this->ReadOnlyGroupType = $param["ReadOnlyGroupType"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("ReadOnlyGroupForcedUpgrade",$param) and $param["ReadOnlyGroupForcedUpgrade"] !== null) {
            $this->ReadOnlyGroupForcedUpgrade = $param["ReadOnlyGroupForcedUpgrade"];
        }

        if (array_key_exists("ReadOnlyGroupId",$param) and $param["ReadOnlyGroupId"] !== null) {
            $this->ReadOnlyGroupId = $param["ReadOnlyGroupId"];
        }

        if (array_key_exists("ReadOnlyGroupName",$param) and $param["ReadOnlyGroupName"] !== null) {
            $this->ReadOnlyGroupName = $param["ReadOnlyGroupName"];
        }

        if (array_key_exists("ReadOnlyGroupIsOfflineDelay",$param) and $param["ReadOnlyGroupIsOfflineDelay"] !== null) {
            $this->ReadOnlyGroupIsOfflineDelay = $param["ReadOnlyGroupIsOfflineDelay"];
        }

        if (array_key_exists("ReadOnlyGroupMaxDelayTime",$param) and $param["ReadOnlyGroupMaxDelayTime"] !== null) {
            $this->ReadOnlyGroupMaxDelayTime = $param["ReadOnlyGroupMaxDelayTime"];
        }

        if (array_key_exists("ReadOnlyGroupMinInGroup",$param) and $param["ReadOnlyGroupMinInGroup"] !== null) {
            $this->ReadOnlyGroupMinInGroup = $param["ReadOnlyGroupMinInGroup"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("SecurityGroupList",$param) and $param["SecurityGroupList"] !== null) {
            $this->SecurityGroupList = $param["SecurityGroupList"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("Collation",$param) and $param["Collation"] !== null) {
            $this->Collation = $param["Collation"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }
    }
}
