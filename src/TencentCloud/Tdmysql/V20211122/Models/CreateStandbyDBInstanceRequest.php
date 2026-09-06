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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateStandbyDBInstance request structure.
 *
 * @method string getPrimaryInstanceId() Obtain <p>Primary instance id</p>
 * @method void setPrimaryInstanceId(string $PrimaryInstanceId) Set <p>Primary instance id</p>
 * @method string getZone() Obtain <p>Creating an Instance Region</p>
 * @method void setZone(string $Zone) Set <p>Creating an Instance Region</p>
 * @method string getVpcId() Obtain <p>Character type vpcid</p>
 * @method void setVpcId(string $VpcId) Set <p>Character type vpcid</p>
 * @method string getSubnetId() Obtain <p>Character type subnetid</p>
 * @method void setSubnetId(string $SubnetId) Set <p>Character type subnetid</p>
 * @method string getSpecCode() Obtain <p>Purchase specification</p>
 * @method void setSpecCode(string $SpecCode) Set <p>Purchase specification</p>
 * @method integer getDisk() Obtain <p>Node disk capacity (unit: GB)</p>
 * @method void setDisk(integer $Disk) Set <p>Node disk capacity (unit: GB)</p>
 * @method integer getStorageNodeNum() Obtain <p>Number of storage nodes</p>
 * @method void setStorageNodeNum(integer $StorageNodeNum) Set <p>Number of storage nodes</p>
 * @method integer getReplications() Obtain <p>Number of node replicas for storage, up to 5, must be an odd number</p>
 * @method void setReplications(integer $Replications) Set <p>Number of node replicas for storage, up to 5, must be an odd number</p>
 * @method integer getFullReplications() Obtain <p>Number of replicas</p>
 * @method void setFullReplications(integer $FullReplications) Set <p>Number of replicas</p>
 * @method string getInstanceName() Obtain <p>Instance name. The required length is 1-60. It can contain Chinese characters, English case, digits, hyphens (-), and underscores (_).</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name. The required length is 1-60. It can contain Chinese characters, English case, digits, hyphens (-), and underscores (_).</p>
 * @method string getTimeUnit() Obtain <p>Time unit. y: year, m: month, d: day</p>
 * @method void setTimeUnit(string $TimeUnit) Set <p>Time unit. y: year, m: month, d: day</p>
 * @method integer getTimeSpan() Obtain <p>Commodity duration size</p>
 * @method void setTimeSpan(integer $TimeSpan) Set <p>Commodity duration size</p>
 * @method integer getStorageNodeCpu() Obtain <p>CPU cores of the storage node</p>
 * @method void setStorageNodeCpu(integer $StorageNodeCpu) Set <p>CPU cores of the storage node</p>
 * @method integer getStorageNodeMem() Obtain <p>Storage node memory size</p>
 * @method void setStorageNodeMem(integer $StorageNodeMem) Set <p>Storage node memory size</p>
 * @method string getPayMode() Obtain <p>Payment mode. 0 means pay-as-you-go/postpaid, 1 means prepaid.</p>
 * @method void setPayMode(string $PayMode) Set <p>Payment mode. 0 means pay-as-you-go/postpaid, 1 means prepaid.</p>
 * @method integer getVport() Obtain <p>Custom port</p>
 * @method void setVport(integer $Vport) Set <p>Custom port</p>
 * @method array getZones() Obtain <p>Multi-AZ availability zone list</p>
 * @method void setZones(array $Zones) Set <p>Multi-AZ availability zone list</p>
 * @method boolean getAutoVoucher() Obtain <p>Whether to use a coupon.</p>
 * @method void setAutoVoucher(boolean $AutoVoucher) Set <p>Whether to use a coupon.</p>
 * @method array getVoucherIds() Obtain <p>Coupon list</p>
 * @method void setVoucherIds(array $VoucherIds) Set <p>Coupon list</p>
 * @method string getInstanceType() Obtain <p>Instance Architecture Type. "hybrid" is supported since v19.0.0</p>
 * @method void setInstanceType(string $InstanceType) Set <p>Instance Architecture Type. "hybrid" is supported since v19.0.0</p>
 * @method string getStorageType() Obtain <p>Disk Type, CLOUD_HSSD enhanced SSD, CLOUD_TCS local SSD disk</p>
 * @method void setStorageType(string $StorageType) Set <p>Disk Type, CLOUD_HSSD enhanced SSD, CLOUD_TCS local SSD disk</p>
 * @method array getResourceTags() Obtain <p>Tag key-value pair array</p>
 * @method void setResourceTags(array $ResourceTags) Set <p>Tag key-value pair array</p>
 * @method string getPrimaryInstanceRegion() Obtain <p>Region of the primary instance</p>
 * @method void setPrimaryInstanceRegion(string $PrimaryInstanceRegion) Set <p>Region of the primary instance</p>
 * @method string getInstanceMode() Obtain <p>Instance mode, normal: standard type; enhanced: enhanced</p>
 * @method void setInstanceMode(string $InstanceMode) Set <p>Instance mode, normal: standard type; enhanced: enhanced</p>
 * @method string getPassword() Obtain <p>dbaadmin password</p>
 * @method void setPassword(string $Password) Set <p>dbaadmin password</p>
 * @method array getSecurityGroupIds() Obtain <p>Bind the security group id list</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set <p>Bind the security group id list</p>
 */
class CreateStandbyDBInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>Primary instance id</p>
     */
    public $PrimaryInstanceId;

    /**
     * @var string <p>Creating an Instance Region</p>
     */
    public $Zone;

    /**
     * @var string <p>Character type vpcid</p>
     */
    public $VpcId;

    /**
     * @var string <p>Character type subnetid</p>
     */
    public $SubnetId;

    /**
     * @var string <p>Purchase specification</p>
     */
    public $SpecCode;

    /**
     * @var integer <p>Node disk capacity (unit: GB)</p>
     */
    public $Disk;

    /**
     * @var integer <p>Number of storage nodes</p>
     */
    public $StorageNodeNum;

    /**
     * @var integer <p>Number of node replicas for storage, up to 5, must be an odd number</p>
     */
    public $Replications;

    /**
     * @var integer <p>Number of replicas</p>
     */
    public $FullReplications;

    /**
     * @var string <p>Instance name. The required length is 1-60. It can contain Chinese characters, English case, digits, hyphens (-), and underscores (_).</p>
     */
    public $InstanceName;

    /**
     * @var string <p>Time unit. y: year, m: month, d: day</p>
     */
    public $TimeUnit;

    /**
     * @var integer <p>Commodity duration size</p>
     */
    public $TimeSpan;

    /**
     * @var integer <p>CPU cores of the storage node</p>
     */
    public $StorageNodeCpu;

    /**
     * @var integer <p>Storage node memory size</p>
     */
    public $StorageNodeMem;

    /**
     * @var string <p>Payment mode. 0 means pay-as-you-go/postpaid, 1 means prepaid.</p>
     */
    public $PayMode;

    /**
     * @var integer <p>Custom port</p>
     */
    public $Vport;

    /**
     * @var array <p>Multi-AZ availability zone list</p>
     */
    public $Zones;

    /**
     * @var boolean <p>Whether to use a coupon.</p>
     */
    public $AutoVoucher;

    /**
     * @var array <p>Coupon list</p>
     */
    public $VoucherIds;

    /**
     * @var string <p>Instance Architecture Type. "hybrid" is supported since v19.0.0</p>
     */
    public $InstanceType;

    /**
     * @var string <p>Disk Type, CLOUD_HSSD enhanced SSD, CLOUD_TCS local SSD disk</p>
     */
    public $StorageType;

    /**
     * @var array <p>Tag key-value pair array</p>
     */
    public $ResourceTags;

    /**
     * @var string <p>Region of the primary instance</p>
     */
    public $PrimaryInstanceRegion;

    /**
     * @var string <p>Instance mode, normal: standard type; enhanced: enhanced</p>
     */
    public $InstanceMode;

    /**
     * @var string <p>dbaadmin password</p>
     */
    public $Password;

    /**
     * @var array <p>Bind the security group id list</p>
     */
    public $SecurityGroupIds;

    /**
     * @param string $PrimaryInstanceId <p>Primary instance id</p>
     * @param string $Zone <p>Creating an Instance Region</p>
     * @param string $VpcId <p>Character type vpcid</p>
     * @param string $SubnetId <p>Character type subnetid</p>
     * @param string $SpecCode <p>Purchase specification</p>
     * @param integer $Disk <p>Node disk capacity (unit: GB)</p>
     * @param integer $StorageNodeNum <p>Number of storage nodes</p>
     * @param integer $Replications <p>Number of node replicas for storage, up to 5, must be an odd number</p>
     * @param integer $FullReplications <p>Number of replicas</p>
     * @param string $InstanceName <p>Instance name. The required length is 1-60. It can contain Chinese characters, English case, digits, hyphens (-), and underscores (_).</p>
     * @param string $TimeUnit <p>Time unit. y: year, m: month, d: day</p>
     * @param integer $TimeSpan <p>Commodity duration size</p>
     * @param integer $StorageNodeCpu <p>CPU cores of the storage node</p>
     * @param integer $StorageNodeMem <p>Storage node memory size</p>
     * @param string $PayMode <p>Payment mode. 0 means pay-as-you-go/postpaid, 1 means prepaid.</p>
     * @param integer $Vport <p>Custom port</p>
     * @param array $Zones <p>Multi-AZ availability zone list</p>
     * @param boolean $AutoVoucher <p>Whether to use a coupon.</p>
     * @param array $VoucherIds <p>Coupon list</p>
     * @param string $InstanceType <p>Instance Architecture Type. "hybrid" is supported since v19.0.0</p>
     * @param string $StorageType <p>Disk Type, CLOUD_HSSD enhanced SSD, CLOUD_TCS local SSD disk</p>
     * @param array $ResourceTags <p>Tag key-value pair array</p>
     * @param string $PrimaryInstanceRegion <p>Region of the primary instance</p>
     * @param string $InstanceMode <p>Instance mode, normal: standard type; enhanced: enhanced</p>
     * @param string $Password <p>dbaadmin password</p>
     * @param array $SecurityGroupIds <p>Bind the security group id list</p>
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
        if (array_key_exists("PrimaryInstanceId",$param) and $param["PrimaryInstanceId"] !== null) {
            $this->PrimaryInstanceId = $param["PrimaryInstanceId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SpecCode",$param) and $param["SpecCode"] !== null) {
            $this->SpecCode = $param["SpecCode"];
        }

        if (array_key_exists("Disk",$param) and $param["Disk"] !== null) {
            $this->Disk = $param["Disk"];
        }

        if (array_key_exists("StorageNodeNum",$param) and $param["StorageNodeNum"] !== null) {
            $this->StorageNodeNum = $param["StorageNodeNum"];
        }

        if (array_key_exists("Replications",$param) and $param["Replications"] !== null) {
            $this->Replications = $param["Replications"];
        }

        if (array_key_exists("FullReplications",$param) and $param["FullReplications"] !== null) {
            $this->FullReplications = $param["FullReplications"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("StorageNodeCpu",$param) and $param["StorageNodeCpu"] !== null) {
            $this->StorageNodeCpu = $param["StorageNodeCpu"];
        }

        if (array_key_exists("StorageNodeMem",$param) and $param["StorageNodeMem"] !== null) {
            $this->StorageNodeMem = $param["StorageNodeMem"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("PrimaryInstanceRegion",$param) and $param["PrimaryInstanceRegion"] !== null) {
            $this->PrimaryInstanceRegion = $param["PrimaryInstanceRegion"];
        }

        if (array_key_exists("InstanceMode",$param) and $param["InstanceMode"] !== null) {
            $this->InstanceMode = $param["InstanceMode"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }
    }
}
