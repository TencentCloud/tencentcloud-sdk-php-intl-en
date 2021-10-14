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
 * Instance details
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getName() Obtain Instance name
 * @method void setName(string $Name) Set Instance name
 * @method integer getProjectId() Obtain Project ID of instance
 * @method void setProjectId(integer $ProjectId) Set Project ID of instance
 * @method integer getRegionId() Obtain Instance region ID
 * @method void setRegionId(integer $RegionId) Set Instance region ID
 * @method integer getZoneId() Obtain Instance AZ ID
 * @method void setZoneId(integer $ZoneId) Set Instance AZ ID
 * @method integer getVpcId() Obtain Instance VPC ID, which will be 0 if the basic network is used
 * @method void setVpcId(integer $VpcId) Set Instance VPC ID, which will be 0 if the basic network is used
 * @method integer getSubnetId() Obtain Instance VPC subnet ID, which will be 0 if the basic network is used
 * @method void setSubnetId(integer $SubnetId) Set Instance VPC subnet ID, which will be 0 if the basic network is used
 * @method integer getStatus() Obtain Instance status. Valid values: <li>1: creating</li> <li>2: running</li> <li>3: instance operations restricted (due to the ongoing primary-replica switch)</li> <li>4: isolated</li> <li>5: repossessing</li> <li>6: repossessed</li> <li>7: running tasks (such as backup and rollback tasks)</li> <li>8: eliminated</li> <li>9: expanding capacity</li> <li>10: migrating</li> <li>11: read-only</li> <li>12: restarting</li>  <li>13: modifying configuration and waiting for switch</li> <li>14: implementing pub/sub</li> <li>15: modifying pub/sub configuration</li> <li>16: modifying configuration and switching</li> <li>17: creating read-only instances</li>
 * @method void setStatus(integer $Status) Set Instance status. Valid values: <li>1: creating</li> <li>2: running</li> <li>3: instance operations restricted (due to the ongoing primary-replica switch)</li> <li>4: isolated</li> <li>5: repossessing</li> <li>6: repossessed</li> <li>7: running tasks (such as backup and rollback tasks)</li> <li>8: eliminated</li> <li>9: expanding capacity</li> <li>10: migrating</li> <li>11: read-only</li> <li>12: restarting</li>  <li>13: modifying configuration and waiting for switch</li> <li>14: implementing pub/sub</li> <li>15: modifying pub/sub configuration</li> <li>16: modifying configuration and switching</li> <li>17: creating read-only instances</li>
 * @method string getVip() Obtain Instance access IP
 * @method void setVip(string $Vip) Set Instance access IP
 * @method integer getVport() Obtain Instance access port
 * @method void setVport(integer $Vport) Set Instance access port
 * @method string getCreateTime() Obtain Instance creation time
 * @method void setCreateTime(string $CreateTime) Set Instance creation time
 * @method string getUpdateTime() Obtain Instance update time
 * @method void setUpdateTime(string $UpdateTime) Set Instance update time
 * @method string getStartTime() Obtain Instance billing start time
 * @method void setStartTime(string $StartTime) Set Instance billing start time
 * @method string getEndTime() Obtain Instance billing end time
 * @method void setEndTime(string $EndTime) Set Instance billing end time
 * @method string getIsolateTime() Obtain Instance isolation time
 * @method void setIsolateTime(string $IsolateTime) Set Instance isolation time
 * @method integer getMemory() Obtain Instance memory size in GB
 * @method void setMemory(integer $Memory) Set Instance memory size in GB
 * @method integer getUsedStorage() Obtain Used storage capacity of instance in GB
 * @method void setUsedStorage(integer $UsedStorage) Set Used storage capacity of instance in GB
 * @method integer getStorage() Obtain Instance storage capacity in GB
 * @method void setStorage(integer $Storage) Set Instance storage capacity in GB
 * @method string getVersionName() Obtain Instance version
 * @method void setVersionName(string $VersionName) Set Instance version
 * @method integer getRenewFlag() Obtain Instance renewal flag
 * @method void setRenewFlag(integer $RenewFlag) Set Instance renewal flag
 * @method integer getModel() Obtain High-availability instance type. Valid values: 1 (dual-server high-availability), 2 (standalone), 3 (multi-AZ), 4 (multi-AZ cluster), 5 (cluster), 9 (private consumption)
 * @method void setModel(integer $Model) Set High-availability instance type. Valid values: 1 (dual-server high-availability), 2 (standalone), 3 (multi-AZ), 4 (multi-AZ cluster), 5 (cluster), 9 (private consumption)
 * @method string getRegion() Obtain Instance region name, such as ap-guangzhou
 * @method void setRegion(string $Region) Set Instance region name, such as ap-guangzhou
 * @method string getZone() Obtain Instance AZ name, such as ap-guangzhou-1
 * @method void setZone(string $Zone) Set Instance AZ name, such as ap-guangzhou-1
 * @method string getBackupTime() Obtain Backup time point
 * @method void setBackupTime(string $BackupTime) Set Backup time point
 * @method integer getPayMode() Obtain Instance billing mode. 0: pay-as-you-go
 * @method void setPayMode(integer $PayMode) Set Instance billing mode. 0: pay-as-you-go
 * @method string getUid() Obtain Instance UID
 * @method void setUid(string $Uid) Set Instance UID
 * @method integer getCpu() Obtain Number of CPU cores of instance
 * @method void setCpu(integer $Cpu) Set Number of CPU cores of instance
 * @method string getVersion() Obtain Instance version code
 * @method void setVersion(string $Version) Set Instance version code
 * @method string getType() Obtain Physical server code
 * @method void setType(string $Type) Set Physical server code
 * @method integer getPid() Obtain Billing ID
 * @method void setPid(integer $Pid) Set Billing ID
 * @method string getUniqVpcId() Obtain Unique string-type ID of instance VPC in the format of `vpc-xxx`, which is an empty string if the basic network is used
 * @method void setUniqVpcId(string $UniqVpcId) Set Unique string-type ID of instance VPC in the format of `vpc-xxx`, which is an empty string if the basic network is used
 * @method string getUniqSubnetId() Obtain Unique string-type ID of instance subnet in the format of `subnet-xxx`, which is an empty string if the basic network is used
 * @method void setUniqSubnetId(string $UniqSubnetId) Set Unique string-type ID of instance subnet in the format of `subnet-xxx`, which is an empty string if the basic network is used
 * @method string getIsolateOperator() Obtain Instance isolation.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsolateOperator(string $IsolateOperator) Set Instance isolation.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSubFlag() Obtain Pub/sub flag. Valid values: SUB (subscribe instance), PUB (publish instance). If it is left empty, it refers to a regular instance without a pub/sub design.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSubFlag(string $SubFlag) Set Pub/sub flag. Valid values: SUB (subscribe instance), PUB (publish instance). If it is left empty, it refers to a regular instance without a pub/sub design.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getROFlag() Obtain Read-only flag. Valid values: RO (read-only instance), MASTER (primary instance with read-only instances). If it is left empty, it refers to an instance which is not read-only and has no RO group.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setROFlag(string $ROFlag) Set Read-only flag. Valid values: RO (read-only instance), MASTER (primary instance with read-only instances). If it is left empty, it refers to an instance which is not read-only and has no RO group.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getHAFlag() Obtain Disaster recovery type. Valid values: MIRROR (image), ALWAYSON (AlwaysOn), SINGLE (singleton).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHAFlag(string $HAFlag) Set Disaster recovery type. Valid values: MIRROR (image), ALWAYSON (AlwaysOn), SINGLE (singleton).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getResourceTags() Obtain The list of tags associated with the instance
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setResourceTags(array $ResourceTags) Set The list of tags associated with the instance
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getBackupModel() Obtain Backup mode. Valid values: `master_pkg` (archive the backup files of the primary node (default value)), `master_no_pkg` (do not archive the backup files of the primary node), `slave_pkg` (archive the backup files of the replica node (valid for Always On clusters)), `slave_no_pkg` (do not archive the backup files of the replica node (valid for Always On clusters)). This parameter is invalid for read-only instances.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setBackupModel(string $BackupModel) Set Backup mode. Valid values: `master_pkg` (archive the backup files of the primary node (default value)), `master_no_pkg` (do not archive the backup files of the primary node), `slave_pkg` (archive the backup files of the replica node (valid for Always On clusters)), `slave_no_pkg` (do not archive the backup files of the replica node (valid for Always On clusters)). This parameter is invalid for read-only instances.
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class DBInstance extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $Name;

    /**
     * @var integer Project ID of instance
     */
    public $ProjectId;

    /**
     * @var integer Instance region ID
     */
    public $RegionId;

    /**
     * @var integer Instance AZ ID
     */
    public $ZoneId;

    /**
     * @var integer Instance VPC ID, which will be 0 if the basic network is used
     */
    public $VpcId;

    /**
     * @var integer Instance VPC subnet ID, which will be 0 if the basic network is used
     */
    public $SubnetId;

    /**
     * @var integer Instance status. Valid values: <li>1: creating</li> <li>2: running</li> <li>3: instance operations restricted (due to the ongoing primary-replica switch)</li> <li>4: isolated</li> <li>5: repossessing</li> <li>6: repossessed</li> <li>7: running tasks (such as backup and rollback tasks)</li> <li>8: eliminated</li> <li>9: expanding capacity</li> <li>10: migrating</li> <li>11: read-only</li> <li>12: restarting</li>  <li>13: modifying configuration and waiting for switch</li> <li>14: implementing pub/sub</li> <li>15: modifying pub/sub configuration</li> <li>16: modifying configuration and switching</li> <li>17: creating read-only instances</li>
     */
    public $Status;

    /**
     * @var string Instance access IP
     */
    public $Vip;

    /**
     * @var integer Instance access port
     */
    public $Vport;

    /**
     * @var string Instance creation time
     */
    public $CreateTime;

    /**
     * @var string Instance update time
     */
    public $UpdateTime;

    /**
     * @var string Instance billing start time
     */
    public $StartTime;

    /**
     * @var string Instance billing end time
     */
    public $EndTime;

    /**
     * @var string Instance isolation time
     */
    public $IsolateTime;

    /**
     * @var integer Instance memory size in GB
     */
    public $Memory;

    /**
     * @var integer Used storage capacity of instance in GB
     */
    public $UsedStorage;

    /**
     * @var integer Instance storage capacity in GB
     */
    public $Storage;

    /**
     * @var string Instance version
     */
    public $VersionName;

    /**
     * @var integer Instance renewal flag
     */
    public $RenewFlag;

    /**
     * @var integer High-availability instance type. Valid values: 1 (dual-server high-availability), 2 (standalone), 3 (multi-AZ), 4 (multi-AZ cluster), 5 (cluster), 9 (private consumption)
     */
    public $Model;

    /**
     * @var string Instance region name, such as ap-guangzhou
     */
    public $Region;

    /**
     * @var string Instance AZ name, such as ap-guangzhou-1
     */
    public $Zone;

    /**
     * @var string Backup time point
     */
    public $BackupTime;

    /**
     * @var integer Instance billing mode. 0: pay-as-you-go
     */
    public $PayMode;

    /**
     * @var string Instance UID
     */
    public $Uid;

    /**
     * @var integer Number of CPU cores of instance
     */
    public $Cpu;

    /**
     * @var string Instance version code
     */
    public $Version;

    /**
     * @var string Physical server code
     */
    public $Type;

    /**
     * @var integer Billing ID
     */
    public $Pid;

    /**
     * @var string Unique string-type ID of instance VPC in the format of `vpc-xxx`, which is an empty string if the basic network is used
     */
    public $UniqVpcId;

    /**
     * @var string Unique string-type ID of instance subnet in the format of `subnet-xxx`, which is an empty string if the basic network is used
     */
    public $UniqSubnetId;

    /**
     * @var string Instance isolation.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IsolateOperator;

    /**
     * @var string Pub/sub flag. Valid values: SUB (subscribe instance), PUB (publish instance). If it is left empty, it refers to a regular instance without a pub/sub design.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SubFlag;

    /**
     * @var string Read-only flag. Valid values: RO (read-only instance), MASTER (primary instance with read-only instances). If it is left empty, it refers to an instance which is not read-only and has no RO group.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ROFlag;

    /**
     * @var string Disaster recovery type. Valid values: MIRROR (image), ALWAYSON (AlwaysOn), SINGLE (singleton).
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $HAFlag;

    /**
     * @var array The list of tags associated with the instance
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ResourceTags;

    /**
     * @var string Backup mode. Valid values: `master_pkg` (archive the backup files of the primary node (default value)), `master_no_pkg` (do not archive the backup files of the primary node), `slave_pkg` (archive the backup files of the replica node (valid for Always On clusters)), `slave_no_pkg` (do not archive the backup files of the replica node (valid for Always On clusters)). This parameter is invalid for read-only instances.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $BackupModel;

    /**
     * @param string $InstanceId Instance ID
     * @param string $Name Instance name
     * @param integer $ProjectId Project ID of instance
     * @param integer $RegionId Instance region ID
     * @param integer $ZoneId Instance AZ ID
     * @param integer $VpcId Instance VPC ID, which will be 0 if the basic network is used
     * @param integer $SubnetId Instance VPC subnet ID, which will be 0 if the basic network is used
     * @param integer $Status Instance status. Valid values: <li>1: creating</li> <li>2: running</li> <li>3: instance operations restricted (due to the ongoing primary-replica switch)</li> <li>4: isolated</li> <li>5: repossessing</li> <li>6: repossessed</li> <li>7: running tasks (such as backup and rollback tasks)</li> <li>8: eliminated</li> <li>9: expanding capacity</li> <li>10: migrating</li> <li>11: read-only</li> <li>12: restarting</li>  <li>13: modifying configuration and waiting for switch</li> <li>14: implementing pub/sub</li> <li>15: modifying pub/sub configuration</li> <li>16: modifying configuration and switching</li> <li>17: creating read-only instances</li>
     * @param string $Vip Instance access IP
     * @param integer $Vport Instance access port
     * @param string $CreateTime Instance creation time
     * @param string $UpdateTime Instance update time
     * @param string $StartTime Instance billing start time
     * @param string $EndTime Instance billing end time
     * @param string $IsolateTime Instance isolation time
     * @param integer $Memory Instance memory size in GB
     * @param integer $UsedStorage Used storage capacity of instance in GB
     * @param integer $Storage Instance storage capacity in GB
     * @param string $VersionName Instance version
     * @param integer $RenewFlag Instance renewal flag
     * @param integer $Model High-availability instance type. Valid values: 1 (dual-server high-availability), 2 (standalone), 3 (multi-AZ), 4 (multi-AZ cluster), 5 (cluster), 9 (private consumption)
     * @param string $Region Instance region name, such as ap-guangzhou
     * @param string $Zone Instance AZ name, such as ap-guangzhou-1
     * @param string $BackupTime Backup time point
     * @param integer $PayMode Instance billing mode. 0: pay-as-you-go
     * @param string $Uid Instance UID
     * @param integer $Cpu Number of CPU cores of instance
     * @param string $Version Instance version code
     * @param string $Type Physical server code
     * @param integer $Pid Billing ID
     * @param string $UniqVpcId Unique string-type ID of instance VPC in the format of `vpc-xxx`, which is an empty string if the basic network is used
     * @param string $UniqSubnetId Unique string-type ID of instance subnet in the format of `subnet-xxx`, which is an empty string if the basic network is used
     * @param string $IsolateOperator Instance isolation.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $SubFlag Pub/sub flag. Valid values: SUB (subscribe instance), PUB (publish instance). If it is left empty, it refers to a regular instance without a pub/sub design.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ROFlag Read-only flag. Valid values: RO (read-only instance), MASTER (primary instance with read-only instances). If it is left empty, it refers to an instance which is not read-only and has no RO group.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $HAFlag Disaster recovery type. Valid values: MIRROR (image), ALWAYSON (AlwaysOn), SINGLE (singleton).
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $ResourceTags The list of tags associated with the instance
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $BackupModel Backup mode. Valid values: `master_pkg` (archive the backup files of the primary node (default value)), `master_no_pkg` (do not archive the backup files of the primary node), `slave_pkg` (archive the backup files of the replica node (valid for Always On clusters)), `slave_no_pkg` (do not archive the backup files of the replica node (valid for Always On clusters)). This parameter is invalid for read-only instances.
Note: this field may return `null`, indicating that no valid values can be obtained.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("UsedStorage",$param) and $param["UsedStorage"] !== null) {
            $this->UsedStorage = $param["UsedStorage"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("BackupTime",$param) and $param["BackupTime"] !== null) {
            $this->BackupTime = $param["BackupTime"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("IsolateOperator",$param) and $param["IsolateOperator"] !== null) {
            $this->IsolateOperator = $param["IsolateOperator"];
        }

        if (array_key_exists("SubFlag",$param) and $param["SubFlag"] !== null) {
            $this->SubFlag = $param["SubFlag"];
        }

        if (array_key_exists("ROFlag",$param) and $param["ROFlag"] !== null) {
            $this->ROFlag = $param["ROFlag"];
        }

        if (array_key_exists("HAFlag",$param) and $param["HAFlag"] !== null) {
            $this->HAFlag = $param["HAFlag"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("BackupModel",$param) and $param["BackupModel"] !== null) {
            $this->BackupModel = $param["BackupModel"];
        }
    }
}
