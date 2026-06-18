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
 * CreateDBInstances request structure.
 *
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
 * @method integer getInstanceCount() Obtain <p>Instance count. Maximum is 10.</p>
 * @method void setInstanceCount(integer $InstanceCount) Set <p>Instance count. Maximum is 10.</p>
 * @method integer getFullReplications() Obtain <p>Number of replicas</p>
 * @method void setFullReplications(integer $FullReplications) Set <p>Number of replicas</p>
 * @method string getCreateVersion() Obtain <p>Create an instance version, using the current latest version by default</p>
 * @method void setCreateVersion(string $CreateVersion) Set <p>Create an instance version, using the current latest version by default</p>
 * @method string getInstanceName() Obtain <p>Instance name. The required length is 1-60. It can contain Chinese characters, English case, digits, hyphens (-), and underscores (_).</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name. The required length is 1-60. It can contain Chinese characters, English case, digits, hyphens (-), and underscores (_).</p>
 * @method array getResourceTags() Obtain <p>Tag key-value pair array</p>
 * @method void setResourceTags(array $ResourceTags) Set <p>Tag key-value pair array</p>
 * @method array getInitParams() Obtain <p>Initialize instance parameters. For example:<br>character_set_server (character set, defaults to utf8),<br>lower_case_table_names (table name case sensitivity, 0 - sensitive; 1 - insensitive, default is 0)</p>
 * @method void setInitParams(array $InitParams) Set <p>Initialize instance parameters. For example:<br>character_set_server (character set, defaults to utf8),<br>lower_case_table_names (table name case sensitivity, 0 - sensitive; 1 - insensitive, default is 0)</p>
 * @method string getTimeUnit() Obtain <p>Time unit, m: month</p>
 * @method void setTimeUnit(string $TimeUnit) Set <p>Time unit, m: month</p>
 * @method integer getTimeSpan() Obtain <p>Commodity duration size</p>
 * @method void setTimeSpan(integer $TimeSpan) Set <p>Commodity duration size</p>
 * @method integer getStorageNodeCpu() Obtain <p>CPU cores of the storage node</p>
 * @method void setStorageNodeCpu(integer $StorageNodeCpu) Set <p>CPU cores of the storage node</p>
 * @method integer getStorageNodeMem() Obtain <p>Storage node memory size</p>
 * @method void setStorageNodeMem(integer $StorageNodeMem) Set <p>Storage node memory size</p>
 * @method string getPayMode() Obtain <p>Payment mode. 0 means pay-as-you-go/postpaid, 1 means prepaid.</p>
 * @method void setPayMode(string $PayMode) Set <p>Payment mode. 0 means pay-as-you-go/postpaid, 1 means prepaid.</p>
 * @method integer getMCNum() Obtain <p>Number of control nodes</p>
 * @method void setMCNum(integer $MCNum) Set <p>Number of control nodes</p>
 * @method integer getVport() Obtain <p>Custom port</p>
 * @method void setVport(integer $Vport) Set <p>Custom port</p>
 * @method array getZones() Obtain <p>Multi-AZ availability zone list</p>
 * @method void setZones(array $Zones) Set <p>Multi-AZ availability zone list</p>
 * @method boolean getAutoVoucher() Obtain <p>Whether to use a coupon.</p>
 * @method void setAutoVoucher(boolean $AutoVoucher) Set <p>Whether to use a coupon.</p>
 * @method array getVoucherIds() Obtain <p>Coupon list</p>
 * @method void setVoucherIds(array $VoucherIds) Set <p>Coupon list</p>
 * @method string getInstanceType() Obtain <p>Instance Architecture Type, separate: decoupled architecture; hybrid: peer-to-peer architecture</p>
 * @method void setInstanceType(string $InstanceType) Set <p>Instance Architecture Type, separate: decoupled architecture; hybrid: peer-to-peer architecture</p>
 * @method string getStorageType() Obtain <p>Disk Type, CLOUD_HSSD enhanced SSD, CLOUD_TCS local SSD disk</p>
 * @method void setStorageType(string $StorageType) Set <p>Disk Type, CLOUD_HSSD enhanced SSD, CLOUD_TCS local SSD disk</p>
 * @method integer getAZMode() Obtain <p>AZ mode. 1: Single AZ, 2: Multi-AZ non-primary AZ, 3: Multi-AZ primary AZ</p>
 * @method void setAZMode(integer $AZMode) Set <p>AZ mode. 1: Single AZ, 2: Multi-AZ non-primary AZ, 3: Multi-AZ primary AZ</p>
 * @method string getInstanceMode() Obtain <p>Instance mode</p>
 * @method void setInstanceMode(string $InstanceMode) Set <p>Instance mode</p>
 * @method string getTemplateId() Obtain <p>Parameter template id</p>
 * @method void setTemplateId(string $TemplateId) Set <p>Parameter template id</p>
 * @method string getSQLMode() Obtain <p>Compatible mode, enum:MySQL,HBase</p>
 * @method void setSQLMode(string $SQLMode) Set <p>Compatible mode, enum:MySQL,HBase</p>
 * @method AutoScalingConfig getAutoScaleConfig() Obtain <p>ccu configuration of the svls instance</p>
 * @method void setAutoScaleConfig(AutoScalingConfig $AutoScaleConfig) Set <p>ccu configuration of the svls instance</p>
 * @method array getSecurityGroupIds() Obtain <p>Bind to security group list</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set <p>Bind to security group list</p>
 * @method string getUserName() Obtain <p>root userName. The default is dbaadmin in the current version. It will reset to dbaadmin even if a value is passed.</p>
 * @method void setUserName(string $UserName) Set <p>root userName. The default is dbaadmin in the current version. It will reset to dbaadmin even if a value is passed.</p>
 * @method string getPassword() Obtain <p>dbaadmin password</p>
 * @method void setPassword(string $Password) Set <p>dbaadmin password</p>
 * @method integer getEncryptionEnable() Obtain <p>Whether transparent data encryption is enabled. 0: not enabled; 1: enabled</p>
 * @method void setEncryptionEnable(integer $EncryptionEnable) Set <p>Whether transparent data encryption is enabled. 0: not enabled; 1: enabled</p>
 */
class CreateDBInstancesRequest extends AbstractModel
{
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
     * @var integer <p>Instance count. Maximum is 10.</p>
     */
    public $InstanceCount;

    /**
     * @var integer <p>Number of replicas</p>
     */
    public $FullReplications;

    /**
     * @var string <p>Create an instance version, using the current latest version by default</p>
     */
    public $CreateVersion;

    /**
     * @var string <p>Instance name. The required length is 1-60. It can contain Chinese characters, English case, digits, hyphens (-), and underscores (_).</p>
     */
    public $InstanceName;

    /**
     * @var array <p>Tag key-value pair array</p>
     */
    public $ResourceTags;

    /**
     * @var array <p>Initialize instance parameters. For example:<br>character_set_server (character set, defaults to utf8),<br>lower_case_table_names (table name case sensitivity, 0 - sensitive; 1 - insensitive, default is 0)</p>
     */
    public $InitParams;

    /**
     * @var string <p>Time unit, m: month</p>
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
     * @var integer <p>Number of control nodes</p>
     */
    public $MCNum;

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
     * @var string <p>Instance Architecture Type, separate: decoupled architecture; hybrid: peer-to-peer architecture</p>
     */
    public $InstanceType;

    /**
     * @var string <p>Disk Type, CLOUD_HSSD enhanced SSD, CLOUD_TCS local SSD disk</p>
     */
    public $StorageType;

    /**
     * @var integer <p>AZ mode. 1: Single AZ, 2: Multi-AZ non-primary AZ, 3: Multi-AZ primary AZ</p>
     */
    public $AZMode;

    /**
     * @var string <p>Instance mode</p>
     */
    public $InstanceMode;

    /**
     * @var string <p>Parameter template id</p>
     */
    public $TemplateId;

    /**
     * @var string <p>Compatible mode, enum:MySQL,HBase</p>
     */
    public $SQLMode;

    /**
     * @var AutoScalingConfig <p>ccu configuration of the svls instance</p>
     */
    public $AutoScaleConfig;

    /**
     * @var array <p>Bind to security group list</p>
     */
    public $SecurityGroupIds;

    /**
     * @var string <p>root userName. The default is dbaadmin in the current version. It will reset to dbaadmin even if a value is passed.</p>
     */
    public $UserName;

    /**
     * @var string <p>dbaadmin password</p>
     */
    public $Password;

    /**
     * @var integer <p>Whether transparent data encryption is enabled. 0: not enabled; 1: enabled</p>
     */
    public $EncryptionEnable;

    /**
     * @param string $Zone <p>Creating an Instance Region</p>
     * @param string $VpcId <p>Character type vpcid</p>
     * @param string $SubnetId <p>Character type subnetid</p>
     * @param string $SpecCode <p>Purchase specification</p>
     * @param integer $Disk <p>Node disk capacity (unit: GB)</p>
     * @param integer $StorageNodeNum <p>Number of storage nodes</p>
     * @param integer $Replications <p>Number of node replicas for storage, up to 5, must be an odd number</p>
     * @param integer $InstanceCount <p>Instance count. Maximum is 10.</p>
     * @param integer $FullReplications <p>Number of replicas</p>
     * @param string $CreateVersion <p>Create an instance version, using the current latest version by default</p>
     * @param string $InstanceName <p>Instance name. The required length is 1-60. It can contain Chinese characters, English case, digits, hyphens (-), and underscores (_).</p>
     * @param array $ResourceTags <p>Tag key-value pair array</p>
     * @param array $InitParams <p>Initialize instance parameters. For example:<br>character_set_server (character set, defaults to utf8),<br>lower_case_table_names (table name case sensitivity, 0 - sensitive; 1 - insensitive, default is 0)</p>
     * @param string $TimeUnit <p>Time unit, m: month</p>
     * @param integer $TimeSpan <p>Commodity duration size</p>
     * @param integer $StorageNodeCpu <p>CPU cores of the storage node</p>
     * @param integer $StorageNodeMem <p>Storage node memory size</p>
     * @param string $PayMode <p>Payment mode. 0 means pay-as-you-go/postpaid, 1 means prepaid.</p>
     * @param integer $MCNum <p>Number of control nodes</p>
     * @param integer $Vport <p>Custom port</p>
     * @param array $Zones <p>Multi-AZ availability zone list</p>
     * @param boolean $AutoVoucher <p>Whether to use a coupon.</p>
     * @param array $VoucherIds <p>Coupon list</p>
     * @param string $InstanceType <p>Instance Architecture Type, separate: decoupled architecture; hybrid: peer-to-peer architecture</p>
     * @param string $StorageType <p>Disk Type, CLOUD_HSSD enhanced SSD, CLOUD_TCS local SSD disk</p>
     * @param integer $AZMode <p>AZ mode. 1: Single AZ, 2: Multi-AZ non-primary AZ, 3: Multi-AZ primary AZ</p>
     * @param string $InstanceMode <p>Instance mode</p>
     * @param string $TemplateId <p>Parameter template id</p>
     * @param string $SQLMode <p>Compatible mode, enum:MySQL,HBase</p>
     * @param AutoScalingConfig $AutoScaleConfig <p>ccu configuration of the svls instance</p>
     * @param array $SecurityGroupIds <p>Bind to security group list</p>
     * @param string $UserName <p>root userName. The default is dbaadmin in the current version. It will reset to dbaadmin even if a value is passed.</p>
     * @param string $Password <p>dbaadmin password</p>
     * @param integer $EncryptionEnable <p>Whether transparent data encryption is enabled. 0: not enabled; 1: enabled</p>
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

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("FullReplications",$param) and $param["FullReplications"] !== null) {
            $this->FullReplications = $param["FullReplications"];
        }

        if (array_key_exists("CreateVersion",$param) and $param["CreateVersion"] !== null) {
            $this->CreateVersion = $param["CreateVersion"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("InitParams",$param) and $param["InitParams"] !== null) {
            $this->InitParams = [];
            foreach ($param["InitParams"] as $key => $value){
                $obj = new InstanceParam();
                $obj->deserialize($value);
                array_push($this->InitParams, $obj);
            }
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

        if (array_key_exists("MCNum",$param) and $param["MCNum"] !== null) {
            $this->MCNum = $param["MCNum"];
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

        if (array_key_exists("AZMode",$param) and $param["AZMode"] !== null) {
            $this->AZMode = $param["AZMode"];
        }

        if (array_key_exists("InstanceMode",$param) and $param["InstanceMode"] !== null) {
            $this->InstanceMode = $param["InstanceMode"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("SQLMode",$param) and $param["SQLMode"] !== null) {
            $this->SQLMode = $param["SQLMode"];
        }

        if (array_key_exists("AutoScaleConfig",$param) and $param["AutoScaleConfig"] !== null) {
            $this->AutoScaleConfig = new AutoScalingConfig();
            $this->AutoScaleConfig->deserialize($param["AutoScaleConfig"]);
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("EncryptionEnable",$param) and $param["EncryptionEnable"] !== null) {
            $this->EncryptionEnable = $param["EncryptionEnable"];
        }
    }
}
