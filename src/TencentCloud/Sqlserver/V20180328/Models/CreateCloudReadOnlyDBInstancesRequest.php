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
 * CreateCloudReadOnlyDBInstances request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of  `mssql-3l3fgqn7`.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of  `mssql-3l3fgqn7`.
 * @method string getZone() Obtain Instance AZ, such as `ap-guangzhou-1` (Guangzhou Zone 1). Purchasable AZs for an instance can be obtained through the`DescribeZones` API.
 * @method void setZone(string $Zone) Set Instance AZ, such as `ap-guangzhou-1` (Guangzhou Zone 1). Purchasable AZs for an instance can be obtained through the`DescribeZones` API.
 * @method integer getReadOnlyGroupType() Obtain Read-only group types. Valid values: `1` (each read-only replica is placed in one auto-created read-only group), `2` (all read-only replicas are placed in one auto-created read-only group), `3` (all read-only replicas are placed in one existing read-only group).
 * @method void setReadOnlyGroupType(integer $ReadOnlyGroupType) Set Read-only group types. Valid values: `1` (each read-only replica is placed in one auto-created read-only group), `2` (all read-only replicas are placed in one auto-created read-only group), `3` (all read-only replicas are placed in one existing read-only group).
 * @method integer getMemory() Obtain Instance memory size in GB
 * @method void setMemory(integer $Memory) Set Instance memory size in GB
 * @method integer getStorage() Obtain Instance disk size in GB
 * @method void setStorage(integer $Storage) Set Instance disk size in GB
 * @method integer getCpu() Obtain Number of instance cores
 * @method void setCpu(integer $Cpu) Set Number of instance cores
 * @method string getMachineType() Obtain The host type of purchased instance. Valid values: `CLOUD_HSSD` (virtual machine with enhanced SSD), `CLOUD_TSSD` (virtual machine with ulTra SSD), `CLOUD_BSSD` (virtual machine with balanced SSD).
 * @method void setMachineType(string $MachineType) Set The host type of purchased instance. Valid values: `CLOUD_HSSD` (virtual machine with enhanced SSD), `CLOUD_TSSD` (virtual machine with ulTra SSD), `CLOUD_BSSD` (virtual machine with balanced SSD).
 * @method integer getReadOnlyGroupForcedUpgrade() Obtain Valid values: `0` (not upgrade the primary instance by default), `1` (upgrade the primary instance to complete the RO deployment).  You need to pass in `1` for this parameter and upgrade the primary instance to cluster edition.
 * @method void setReadOnlyGroupForcedUpgrade(integer $ReadOnlyGroupForcedUpgrade) Set Valid values: `0` (not upgrade the primary instance by default), `1` (upgrade the primary instance to complete the RO deployment).  You need to pass in `1` for this parameter and upgrade the primary instance to cluster edition.
 * @method string getReadOnlyGroupId() Obtain Existing read-only group ID, which is required when `ReadOnlyGroupType` is `3`.
 * @method void setReadOnlyGroupId(string $ReadOnlyGroupId) Set Existing read-only group ID, which is required when `ReadOnlyGroupType` is `3`.
 * @method string getReadOnlyGroupName() Obtain New read-only group ID, which is required when `ReadOnlyGroupType` is `2`.
 * @method void setReadOnlyGroupName(string $ReadOnlyGroupName) Set New read-only group ID, which is required when `ReadOnlyGroupType` is `2`.
 * @method integer getReadOnlyGroupIsOfflineDelay() Obtain Whether delayed read-only instance removal is enabled in a new read-only group, which is required when `ReadOnlyGroupType` is `2`. Valid values: `1` (enabled), `0` (disabled).  The read-only replica will be automatically removed when the delay between it and the primary instance exceeds the threshold.
 * @method void setReadOnlyGroupIsOfflineDelay(integer $ReadOnlyGroupIsOfflineDelay) Set Whether delayed read-only instance removal is enabled in a new read-only group, which is required when `ReadOnlyGroupType` is `2`. Valid values: `1` (enabled), `0` (disabled).  The read-only replica will be automatically removed when the delay between it and the primary instance exceeds the threshold.
 * @method integer getReadOnlyGroupMaxDelayTime() Obtain The delay threshold for a new read-only group, which is required when `ReadOnlyGroupType` is `2` and `ReadOnlyGroupIsOfflineDelay` is `1`.
 * @method void setReadOnlyGroupMaxDelayTime(integer $ReadOnlyGroupMaxDelayTime) Set The delay threshold for a new read-only group, which is required when `ReadOnlyGroupType` is `2` and `ReadOnlyGroupIsOfflineDelay` is `1`.
 * @method integer getReadOnlyGroupMinInGroup() Obtain Minimum number of reserved read-only replicas when the delayed removal is enabled for the new read-only group, which is required when `ReadOnlyGroupType` is `2` and `ReadOnlyGroupIsOfflineDelay` is `1`.
 * @method void setReadOnlyGroupMinInGroup(integer $ReadOnlyGroupMinInGroup) Set Minimum number of reserved read-only replicas when the delayed removal is enabled for the new read-only group, which is required when `ReadOnlyGroupType` is `2` and `ReadOnlyGroupIsOfflineDelay` is `1`.
 * @method string getInstanceChargeType() Obtain Billing mode. Valid values: `PREPAID` (monthly subscription), `POSTPAID` (pay-as-you-go).
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Billing mode. Valid values: `PREPAID` (monthly subscription), `POSTPAID` (pay-as-you-go).
 * @method integer getGoodsNum() Obtain Number of read-only instances to be purchased this time. Default value: `2`.
 * @method void setGoodsNum(integer $GoodsNum) Set Number of read-only instances to be purchased this time. Default value: `2`.
 * @method string getSubnetId() Obtain VPC subnet ID in the format of `subnet-bdoe83fa`. Both `SubnetId` and `VpcId` need to be set or unset at the same time.
 * @method void setSubnetId(string $SubnetId) Set VPC subnet ID in the format of `subnet-bdoe83fa`. Both `SubnetId` and `VpcId` need to be set or unset at the same time.
 * @method string getVpcId() Obtain VPC ID in the format of `vpc-dsp338hz`. Both `SubnetId` and `VpcId` need to be set or unset at the same time.
 * @method void setVpcId(string $VpcId) Set VPC ID in the format of `vpc-dsp338hz`. Both `SubnetId` and `VpcId` need to be set or unset at the same time.
 * @method integer getPeriod() Obtain The purchase period of an instance. Default value: `1` (one month).  Maximum value: `48`.
 * @method void setPeriod(integer $Period) Set The purchase period of an instance. Default value: `1` (one month).  Maximum value: `48`.
 * @method array getSecurityGroupList() Obtain Security group list, which contains security group IDs in the format of `sg-xxx`.
 * @method void setSecurityGroupList(array $SecurityGroupList) Set Security group list, which contains security group IDs in the format of `sg-xxx`.
 * @method integer getAutoVoucher() Obtain Whether to automatically use voucher. Valid values: `0` (no, default), `1` (yes).
 * @method void setAutoVoucher(integer $AutoVoucher) Set Whether to automatically use voucher. Valid values: `0` (no, default), `1` (yes).
 * @method array getVoucherIds() Obtain Array of voucher IDs (currently, only one voucher can be used per order)
 * @method void setVoucherIds(array $VoucherIds) Set Array of voucher IDs (currently, only one voucher can be used per order)
 * @method array getResourceTags() Obtain Tags associated with the instances to be created
 * @method void setResourceTags(array $ResourceTags) Set Tags associated with the instances to be created
 * @method string getCollation() Obtain Collation of system character sets. Default value:  Chinese_PRC_CI_AS
 * @method void setCollation(string $Collation) Set Collation of system character sets. Default value:  Chinese_PRC_CI_AS
 * @method string getTimeZone() Obtain System time zone. Default value:  `China Standard Time`
 * @method void setTimeZone(string $TimeZone) Set System time zone. Default value:  `China Standard Time`
 */
class CreateCloudReadOnlyDBInstancesRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of  `mssql-3l3fgqn7`.
     */
    public $InstanceId;

    /**
     * @var string Instance AZ, such as `ap-guangzhou-1` (Guangzhou Zone 1). Purchasable AZs for an instance can be obtained through the`DescribeZones` API.
     */
    public $Zone;

    /**
     * @var integer Read-only group types. Valid values: `1` (each read-only replica is placed in one auto-created read-only group), `2` (all read-only replicas are placed in one auto-created read-only group), `3` (all read-only replicas are placed in one existing read-only group).
     */
    public $ReadOnlyGroupType;

    /**
     * @var integer Instance memory size in GB
     */
    public $Memory;

    /**
     * @var integer Instance disk size in GB
     */
    public $Storage;

    /**
     * @var integer Number of instance cores
     */
    public $Cpu;

    /**
     * @var string The host type of purchased instance. Valid values: `CLOUD_HSSD` (virtual machine with enhanced SSD), `CLOUD_TSSD` (virtual machine with ulTra SSD), `CLOUD_BSSD` (virtual machine with balanced SSD).
     */
    public $MachineType;

    /**
     * @var integer Valid values: `0` (not upgrade the primary instance by default), `1` (upgrade the primary instance to complete the RO deployment).  You need to pass in `1` for this parameter and upgrade the primary instance to cluster edition.
     */
    public $ReadOnlyGroupForcedUpgrade;

    /**
     * @var string Existing read-only group ID, which is required when `ReadOnlyGroupType` is `3`.
     */
    public $ReadOnlyGroupId;

    /**
     * @var string New read-only group ID, which is required when `ReadOnlyGroupType` is `2`.
     */
    public $ReadOnlyGroupName;

    /**
     * @var integer Whether delayed read-only instance removal is enabled in a new read-only group, which is required when `ReadOnlyGroupType` is `2`. Valid values: `1` (enabled), `0` (disabled).  The read-only replica will be automatically removed when the delay between it and the primary instance exceeds the threshold.
     */
    public $ReadOnlyGroupIsOfflineDelay;

    /**
     * @var integer The delay threshold for a new read-only group, which is required when `ReadOnlyGroupType` is `2` and `ReadOnlyGroupIsOfflineDelay` is `1`.
     */
    public $ReadOnlyGroupMaxDelayTime;

    /**
     * @var integer Minimum number of reserved read-only replicas when the delayed removal is enabled for the new read-only group, which is required when `ReadOnlyGroupType` is `2` and `ReadOnlyGroupIsOfflineDelay` is `1`.
     */
    public $ReadOnlyGroupMinInGroup;

    /**
     * @var string Billing mode. Valid values: `PREPAID` (monthly subscription), `POSTPAID` (pay-as-you-go).
     */
    public $InstanceChargeType;

    /**
     * @var integer Number of read-only instances to be purchased this time. Default value: `2`.
     */
    public $GoodsNum;

    /**
     * @var string VPC subnet ID in the format of `subnet-bdoe83fa`. Both `SubnetId` and `VpcId` need to be set or unset at the same time.
     */
    public $SubnetId;

    /**
     * @var string VPC ID in the format of `vpc-dsp338hz`. Both `SubnetId` and `VpcId` need to be set or unset at the same time.
     */
    public $VpcId;

    /**
     * @var integer The purchase period of an instance. Default value: `1` (one month).  Maximum value: `48`.
     */
    public $Period;

    /**
     * @var array Security group list, which contains security group IDs in the format of `sg-xxx`.
     */
    public $SecurityGroupList;

    /**
     * @var integer Whether to automatically use voucher. Valid values: `0` (no, default), `1` (yes).
     */
    public $AutoVoucher;

    /**
     * @var array Array of voucher IDs (currently, only one voucher can be used per order)
     */
    public $VoucherIds;

    /**
     * @var array Tags associated with the instances to be created
     */
    public $ResourceTags;

    /**
     * @var string Collation of system character sets. Default value:  Chinese_PRC_CI_AS
     */
    public $Collation;

    /**
     * @var string System time zone. Default value:  `China Standard Time`
     */
    public $TimeZone;

    /**
     * @param string $InstanceId Instance ID in the format of  `mssql-3l3fgqn7`.
     * @param string $Zone Instance AZ, such as `ap-guangzhou-1` (Guangzhou Zone 1). Purchasable AZs for an instance can be obtained through the`DescribeZones` API.
     * @param integer $ReadOnlyGroupType Read-only group types. Valid values: `1` (each read-only replica is placed in one auto-created read-only group), `2` (all read-only replicas are placed in one auto-created read-only group), `3` (all read-only replicas are placed in one existing read-only group).
     * @param integer $Memory Instance memory size in GB
     * @param integer $Storage Instance disk size in GB
     * @param integer $Cpu Number of instance cores
     * @param string $MachineType The host type of purchased instance. Valid values: `CLOUD_HSSD` (virtual machine with enhanced SSD), `CLOUD_TSSD` (virtual machine with ulTra SSD), `CLOUD_BSSD` (virtual machine with balanced SSD).
     * @param integer $ReadOnlyGroupForcedUpgrade Valid values: `0` (not upgrade the primary instance by default), `1` (upgrade the primary instance to complete the RO deployment).  You need to pass in `1` for this parameter and upgrade the primary instance to cluster edition.
     * @param string $ReadOnlyGroupId Existing read-only group ID, which is required when `ReadOnlyGroupType` is `3`.
     * @param string $ReadOnlyGroupName New read-only group ID, which is required when `ReadOnlyGroupType` is `2`.
     * @param integer $ReadOnlyGroupIsOfflineDelay Whether delayed read-only instance removal is enabled in a new read-only group, which is required when `ReadOnlyGroupType` is `2`. Valid values: `1` (enabled), `0` (disabled).  The read-only replica will be automatically removed when the delay between it and the primary instance exceeds the threshold.
     * @param integer $ReadOnlyGroupMaxDelayTime The delay threshold for a new read-only group, which is required when `ReadOnlyGroupType` is `2` and `ReadOnlyGroupIsOfflineDelay` is `1`.
     * @param integer $ReadOnlyGroupMinInGroup Minimum number of reserved read-only replicas when the delayed removal is enabled for the new read-only group, which is required when `ReadOnlyGroupType` is `2` and `ReadOnlyGroupIsOfflineDelay` is `1`.
     * @param string $InstanceChargeType Billing mode. Valid values: `PREPAID` (monthly subscription), `POSTPAID` (pay-as-you-go).
     * @param integer $GoodsNum Number of read-only instances to be purchased this time. Default value: `2`.
     * @param string $SubnetId VPC subnet ID in the format of `subnet-bdoe83fa`. Both `SubnetId` and `VpcId` need to be set or unset at the same time.
     * @param string $VpcId VPC ID in the format of `vpc-dsp338hz`. Both `SubnetId` and `VpcId` need to be set or unset at the same time.
     * @param integer $Period The purchase period of an instance. Default value: `1` (one month).  Maximum value: `48`.
     * @param array $SecurityGroupList Security group list, which contains security group IDs in the format of `sg-xxx`.
     * @param integer $AutoVoucher Whether to automatically use voucher. Valid values: `0` (no, default), `1` (yes).
     * @param array $VoucherIds Array of voucher IDs (currently, only one voucher can be used per order)
     * @param array $ResourceTags Tags associated with the instances to be created
     * @param string $Collation Collation of system character sets. Default value:  Chinese_PRC_CI_AS
     * @param string $TimeZone System time zone. Default value:  `China Standard Time`
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

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
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
