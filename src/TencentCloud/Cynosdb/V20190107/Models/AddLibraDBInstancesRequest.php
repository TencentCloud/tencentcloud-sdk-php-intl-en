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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddLibraDBInstances request structure.
 *
 * @method string getZone() Obtain Availability zone
 * @method void setZone(string $Zone) Set Availability zone
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method integer getCpu() Obtain CPU cores
 * @method void setCpu(integer $Cpu) Set CPU cores
 * @method integer getMem() Obtain Memory in GB
 * @method void setMem(integer $Mem) Set Memory in GB
 * @method integer getStorageSize() Obtain Disk size.
 * @method void setStorageSize(integer $StorageSize) Set Disk size.
 * @method integer getPayMode() Obtain Payment mode
 * @method void setPayMode(integer $PayMode) Set Payment mode
 * @method Objects getObjects() Obtain Sync object list
 * @method void setObjects(Objects $Objects) Set Sync object list
 * @method integer getPort() Obtain Port used when adding new RO groups, value range [0,65535)
 * @method void setPort(integer $Port) Set Port used when adding new RO groups, value range [0,65535)
 * @method integer getGoodsNum() Obtain Number of newly-added read-only instances, value range (0,15]
 * @method void setGoodsNum(integer $GoodsNum) Set Number of newly-added read-only instances, value range (0,15]
 * @method string getInstanceName() Obtain Instance name, string length range [0,64), value range uppercase and lowercase letters, digits 0-9, '_', '-', '.'
 * @method void setInstanceName(string $InstanceName) Set Instance name, string length range [0,64), value range uppercase and lowercase letters, digits 0-9, '_', '-', '.'
 * @method integer getReplicasNum() Obtain Number of replicas
 * @method void setReplicasNum(integer $ReplicasNum) Set Number of replicas
 * @method string getInstanceType() Obtain Value is 'Exclusive' when ReplicasNum>1 or ReplicasNum=1 and Cpu>=32 cores, and 'Common' in other scenarios.
 * @method void setInstanceType(string $InstanceType) Set Value is 'Exclusive' when ReplicasNum>1 or ReplicasNum=1 and Cpu>=32 cores, and 'Common' in other scenarios.
 * @method string getStorageType() Obtain Disk type.
 * @method void setStorageType(string $StorageType) Set Disk type.
 * @method integer getAutoVoucher() Obtain Whether to automatically select a voucher. 1: Yes; 0: No. Default is 0.
 * @method void setAutoVoucher(integer $AutoVoucher) Set Whether to automatically select a voucher. 1: Yes; 0: No. Default is 0.
 * @method string getOrderSource() Obtain Order source, string length range [0,64)
 * @method void setOrderSource(string $OrderSource) Set Order source, string length range [0,64)
 * @method integer getDealMode() Obtain Transaction mode 0-Place order and pay 1-Place order
 * @method void setDealMode(integer $DealMode) Set Transaction mode 0-Place order and pay 1-Place order
 * @method string getVpcId() Obtain ID of the associated VPC network.
 * @method void setVpcId(string $VpcId) Set ID of the associated VPC network.
 * @method string getSubnetId() Obtain Subnet ID. If VpcId is set up, SubnetId is required.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID. If VpcId is set up, SubnetId is required.
 * @method array getSecurityGroupIds() Obtain Security group ID. You can specify security groups when creating a read-only instance.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group ID. You can specify security groups when creating a read-only instance.
 * @method string getLibraDBVersion() Obtain Analysis engine version
 * @method void setLibraDBVersion(string $LibraDBVersion) Set Analysis engine version
 * @method integer getTimeSpan() Obtain Purchase period, combined with TimeUnit for the changes to take effect
 * @method void setTimeSpan(integer $TimeSpan) Set Purchase period, combined with TimeUnit for the changes to take effect
 * @method string getTimeUnit() Obtain Duration unit, takes effect when combined with TimeSpan. Options: day:d, month:m
 * @method void setTimeUnit(string $TimeUnit) Set Duration unit, takes effect when combined with TimeSpan. Options: day:d, month:m
 * @method string getSrcInstanceId() Obtain Source instance id
 * @method void setSrcInstanceId(string $SrcInstanceId) Set Source instance id
 */
class AddLibraDBInstancesRequest extends AbstractModel
{
    /**
     * @var string Availability zone
     */
    public $Zone;

    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var integer CPU cores
     */
    public $Cpu;

    /**
     * @var integer Memory in GB
     */
    public $Mem;

    /**
     * @var integer Disk size.
     */
    public $StorageSize;

    /**
     * @var integer Payment mode
     */
    public $PayMode;

    /**
     * @var Objects Sync object list
     */
    public $Objects;

    /**
     * @var integer Port used when adding new RO groups, value range [0,65535)
     */
    public $Port;

    /**
     * @var integer Number of newly-added read-only instances, value range (0,15]
     */
    public $GoodsNum;

    /**
     * @var string Instance name, string length range [0,64), value range uppercase and lowercase letters, digits 0-9, '_', '-', '.'
     */
    public $InstanceName;

    /**
     * @var integer Number of replicas
     */
    public $ReplicasNum;

    /**
     * @var string Value is 'Exclusive' when ReplicasNum>1 or ReplicasNum=1 and Cpu>=32 cores, and 'Common' in other scenarios.
     */
    public $InstanceType;

    /**
     * @var string Disk type.
     */
    public $StorageType;

    /**
     * @var integer Whether to automatically select a voucher. 1: Yes; 0: No. Default is 0.
     */
    public $AutoVoucher;

    /**
     * @var string Order source, string length range [0,64)
     */
    public $OrderSource;

    /**
     * @var integer Transaction mode 0-Place order and pay 1-Place order
     */
    public $DealMode;

    /**
     * @var string ID of the associated VPC network.
     */
    public $VpcId;

    /**
     * @var string Subnet ID. If VpcId is set up, SubnetId is required.
     */
    public $SubnetId;

    /**
     * @var array Security group ID. You can specify security groups when creating a read-only instance.
     */
    public $SecurityGroupIds;

    /**
     * @var string Analysis engine version
     */
    public $LibraDBVersion;

    /**
     * @var integer Purchase period, combined with TimeUnit for the changes to take effect
     */
    public $TimeSpan;

    /**
     * @var string Duration unit, takes effect when combined with TimeSpan. Options: day:d, month:m
     */
    public $TimeUnit;

    /**
     * @var string Source instance id
     */
    public $SrcInstanceId;

    /**
     * @param string $Zone Availability zone
     * @param string $ClusterId Cluster ID
     * @param integer $Cpu CPU cores
     * @param integer $Mem Memory in GB
     * @param integer $StorageSize Disk size.
     * @param integer $PayMode Payment mode
     * @param Objects $Objects Sync object list
     * @param integer $Port Port used when adding new RO groups, value range [0,65535)
     * @param integer $GoodsNum Number of newly-added read-only instances, value range (0,15]
     * @param string $InstanceName Instance name, string length range [0,64), value range uppercase and lowercase letters, digits 0-9, '_', '-', '.'
     * @param integer $ReplicasNum Number of replicas
     * @param string $InstanceType Value is 'Exclusive' when ReplicasNum>1 or ReplicasNum=1 and Cpu>=32 cores, and 'Common' in other scenarios.
     * @param string $StorageType Disk type.
     * @param integer $AutoVoucher Whether to automatically select a voucher. 1: Yes; 0: No. Default is 0.
     * @param string $OrderSource Order source, string length range [0,64)
     * @param integer $DealMode Transaction mode 0-Place order and pay 1-Place order
     * @param string $VpcId ID of the associated VPC network.
     * @param string $SubnetId Subnet ID. If VpcId is set up, SubnetId is required.
     * @param array $SecurityGroupIds Security group ID. You can specify security groups when creating a read-only instance.
     * @param string $LibraDBVersion Analysis engine version
     * @param integer $TimeSpan Purchase period, combined with TimeUnit for the changes to take effect
     * @param string $TimeUnit Duration unit, takes effect when combined with TimeSpan. Options: day:d, month:m
     * @param string $SrcInstanceId Source instance id
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Objects",$param) and $param["Objects"] !== null) {
            $this->Objects = new Objects();
            $this->Objects->deserialize($param["Objects"]);
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ReplicasNum",$param) and $param["ReplicasNum"] !== null) {
            $this->ReplicasNum = $param["ReplicasNum"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("OrderSource",$param) and $param["OrderSource"] !== null) {
            $this->OrderSource = $param["OrderSource"];
        }

        if (array_key_exists("DealMode",$param) and $param["DealMode"] !== null) {
            $this->DealMode = $param["DealMode"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("LibraDBVersion",$param) and $param["LibraDBVersion"] !== null) {
            $this->LibraDBVersion = $param["LibraDBVersion"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("SrcInstanceId",$param) and $param["SrcInstanceId"] !== null) {
            $this->SrcInstanceId = $param["SrcInstanceId"];
        }
    }
}
