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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Queries the list of instances and returns their information.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getInstanceName() Obtain Instance name.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
 * @method string getRegion() Obtain Instance region.
 * @method void setRegion(string $Region) Set Instance region.
 * @method integer getHealthScore() Obtain Health score.
 * @method void setHealthScore(integer $HealthScore) Set Health score.
 * @method string getProduct() Obtain Service.
 * @method void setProduct(string $Product) Set Service.
 * @method integer getEventCount() Obtain Number of exceptions.
 * @method void setEventCount(integer $EventCount) Set Number of exceptions.
 * @method integer getInstanceType() Obtain Instance type. Valid values: 1 (MASTER), 2 (DR), 3 (RO), 4 (SDR)
 * @method void setInstanceType(integer $InstanceType) Set Instance type. Valid values: 1 (MASTER), 2 (DR), 3 (RO), 4 (SDR)
 * @method integer getCpu() Obtain Number of cores.
 * @method void setCpu(integer $Cpu) Set Number of cores.
 * @method integer getMemory() Obtain Memory in MB.
 * @method void setMemory(integer $Memory) Set Memory in MB.
 * @method integer getVolume() Obtain Disk storage in GB.
 * @method void setVolume(integer $Volume) Set Disk storage in GB.
 * @method string getEngineVersion() Obtain Database version.
 * @method void setEngineVersion(string $EngineVersion) Set Database version.
 * @method string getVip() Obtain Private network address.
 * @method void setVip(string $Vip) Set Private network address.
 * @method integer getVport() Obtain Private network port.
 * @method void setVport(integer $Vport) Set Private network port.
 * @method string getSource() Obtain Access source.
 * @method void setSource(string $Source) Set Access source.
 * @method string getGroupId() Obtain Group ID.
 * @method void setGroupId(string $GroupId) Set Group ID.
 * @method string getGroupName() Obtain Group name.
 * @method void setGroupName(string $GroupName) Set Group name.
 * @method integer getStatus() Obtain Instance status. Valid values: 0 (delivering), 1 (running), 4 (terminating), 5 (isolated)
 * @method void setStatus(integer $Status) Set Instance status. Valid values: 0 (delivering), 1 (running), 4 (terminating), 5 (isolated)
 * @method string getUniqSubnetId() Obtain Unified subnet ID.
 * @method void setUniqSubnetId(string $UniqSubnetId) Set Unified subnet ID.
 * @method string getDeployMode() Obtain TencentDB instance type.
 * @method void setDeployMode(string $DeployMode) Set TencentDB instance type.
 * @method integer getInitFlag() Obtain TencentDB instance initialization flag. Valid values: 0 (not initialized), 1 (initialized).
 * @method void setInitFlag(integer $InitFlag) Set TencentDB instance initialization flag. Valid values: 0 (not initialized), 1 (initialized).
 * @method integer getTaskStatus() Obtain Task status.
 * @method void setTaskStatus(integer $TaskStatus) Set Task status.
 * @method string getUniqVpcId() Obtain Unified VPC ID.
 * @method void setUniqVpcId(string $UniqVpcId) Set Unified VPC ID.
 * @method InstanceConfs getInstanceConf() Obtain Instance inspection/overview status.
 * @method void setInstanceConf(InstanceConfs $InstanceConf) Set Instance inspection/overview status.
 * @method string getDeadlineTime() Obtain Resource expiration time.
 * @method void setDeadlineTime(string $DeadlineTime) Set Resource expiration time.
 * @method boolean getIsSupported() Obtain Whether it is an instance supported by DBbrain.
 * @method void setIsSupported(boolean $IsSupported) Set Whether it is an instance supported by DBbrain.
 * @method string getSecAuditStatus() Obtain Status of instance security audit log. Valid values: ON (enabled), OFF (disabled).
 * @method void setSecAuditStatus(string $SecAuditStatus) Set Status of instance security audit log. Valid values: ON (enabled), OFF (disabled).
 * @method string getAuditPolicyStatus() Obtain Status of instance audit log. Valid values: ALL_AUDIT (full audit is enabled), RULE_AUDIT (rule audit is enabled), UNBOUND (audit is disabled).
 * @method void setAuditPolicyStatus(string $AuditPolicyStatus) Set Status of instance audit log. Valid values: ALL_AUDIT (full audit is enabled), RULE_AUDIT (rule audit is enabled), UNBOUND (audit is disabled).
 * @method string getAuditRunningStatus() Obtain Running status of instance audit log. Valid values: normal (running), paused (suspension due to overdue payment).
 * @method void setAuditRunningStatus(string $AuditRunningStatus) Set Running status of instance audit log. Valid values: normal (running), paused (suspension due to overdue payment).
 * @method string getInternalVip() Obtain Private VIP 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInternalVip(string $InternalVip) Set Private VIP 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getInternalVport() Obtain Private network port 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInternalVport(integer $InternalVport) Set Private network port 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getClusterId() Obtain Cluster ID. This field is only required for cluster database products like TDSQL-C. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterId(string $ClusterId) Set Cluster ID. This field is only required for cluster database products like TDSQL-C. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClusterName() Obtain Cluster name. This field is only required for cluster database products like TDSQL-C. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterName(string $ClusterName) Set Cluster name. This field is only required for cluster database products like TDSQL-C. 
Note: This field may return null, indicating that no valid values can be obtained.
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Instance name.
     */
    public $InstanceName;

    /**
     * @var string Instance region.
     */
    public $Region;

    /**
     * @var integer Health score.
     */
    public $HealthScore;

    /**
     * @var string Service.
     */
    public $Product;

    /**
     * @var integer Number of exceptions.
     */
    public $EventCount;

    /**
     * @var integer Instance type. Valid values: 1 (MASTER), 2 (DR), 3 (RO), 4 (SDR)
     */
    public $InstanceType;

    /**
     * @var integer Number of cores.
     */
    public $Cpu;

    /**
     * @var integer Memory in MB.
     */
    public $Memory;

    /**
     * @var integer Disk storage in GB.
     */
    public $Volume;

    /**
     * @var string Database version.
     */
    public $EngineVersion;

    /**
     * @var string Private network address.
     */
    public $Vip;

    /**
     * @var integer Private network port.
     */
    public $Vport;

    /**
     * @var string Access source.
     */
    public $Source;

    /**
     * @var string Group ID.
     */
    public $GroupId;

    /**
     * @var string Group name.
     */
    public $GroupName;

    /**
     * @var integer Instance status. Valid values: 0 (delivering), 1 (running), 4 (terminating), 5 (isolated)
     */
    public $Status;

    /**
     * @var string Unified subnet ID.
     */
    public $UniqSubnetId;

    /**
     * @var string TencentDB instance type.
     */
    public $DeployMode;

    /**
     * @var integer TencentDB instance initialization flag. Valid values: 0 (not initialized), 1 (initialized).
     */
    public $InitFlag;

    /**
     * @var integer Task status.
     */
    public $TaskStatus;

    /**
     * @var string Unified VPC ID.
     */
    public $UniqVpcId;

    /**
     * @var InstanceConfs Instance inspection/overview status.
     */
    public $InstanceConf;

    /**
     * @var string Resource expiration time.
     */
    public $DeadlineTime;

    /**
     * @var boolean Whether it is an instance supported by DBbrain.
     */
    public $IsSupported;

    /**
     * @var string Status of instance security audit log. Valid values: ON (enabled), OFF (disabled).
     */
    public $SecAuditStatus;

    /**
     * @var string Status of instance audit log. Valid values: ALL_AUDIT (full audit is enabled), RULE_AUDIT (rule audit is enabled), UNBOUND (audit is disabled).
     */
    public $AuditPolicyStatus;

    /**
     * @var string Running status of instance audit log. Valid values: normal (running), paused (suspension due to overdue payment).
     */
    public $AuditRunningStatus;

    /**
     * @var string Private VIP 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InternalVip;

    /**
     * @var integer Private network port 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InternalVport;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Cluster ID. This field is only required for cluster database products like TDSQL-C. 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterId;

    /**
     * @var string Cluster name. This field is only required for cluster database products like TDSQL-C. 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterName;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $InstanceName Instance name.
     * @param string $Region Instance region.
     * @param integer $HealthScore Health score.
     * @param string $Product Service.
     * @param integer $EventCount Number of exceptions.
     * @param integer $InstanceType Instance type. Valid values: 1 (MASTER), 2 (DR), 3 (RO), 4 (SDR)
     * @param integer $Cpu Number of cores.
     * @param integer $Memory Memory in MB.
     * @param integer $Volume Disk storage in GB.
     * @param string $EngineVersion Database version.
     * @param string $Vip Private network address.
     * @param integer $Vport Private network port.
     * @param string $Source Access source.
     * @param string $GroupId Group ID.
     * @param string $GroupName Group name.
     * @param integer $Status Instance status. Valid values: 0 (delivering), 1 (running), 4 (terminating), 5 (isolated)
     * @param string $UniqSubnetId Unified subnet ID.
     * @param string $DeployMode TencentDB instance type.
     * @param integer $InitFlag TencentDB instance initialization flag. Valid values: 0 (not initialized), 1 (initialized).
     * @param integer $TaskStatus Task status.
     * @param string $UniqVpcId Unified VPC ID.
     * @param InstanceConfs $InstanceConf Instance inspection/overview status.
     * @param string $DeadlineTime Resource expiration time.
     * @param boolean $IsSupported Whether it is an instance supported by DBbrain.
     * @param string $SecAuditStatus Status of instance security audit log. Valid values: ON (enabled), OFF (disabled).
     * @param string $AuditPolicyStatus Status of instance audit log. Valid values: ALL_AUDIT (full audit is enabled), RULE_AUDIT (rule audit is enabled), UNBOUND (audit is disabled).
     * @param string $AuditRunningStatus Running status of instance audit log. Valid values: normal (running), paused (suspension due to overdue payment).
     * @param string $InternalVip Private VIP 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $InternalVport Private network port 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time
     * @param string $ClusterId Cluster ID. This field is only required for cluster database products like TDSQL-C. 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClusterName Cluster name. This field is only required for cluster database products like TDSQL-C. 
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("HealthScore",$param) and $param["HealthScore"] !== null) {
            $this->HealthScore = $param["HealthScore"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("InitFlag",$param) and $param["InitFlag"] !== null) {
            $this->InitFlag = $param["InitFlag"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("InstanceConf",$param) and $param["InstanceConf"] !== null) {
            $this->InstanceConf = new InstanceConfs();
            $this->InstanceConf->deserialize($param["InstanceConf"]);
        }

        if (array_key_exists("DeadlineTime",$param) and $param["DeadlineTime"] !== null) {
            $this->DeadlineTime = $param["DeadlineTime"];
        }

        if (array_key_exists("IsSupported",$param) and $param["IsSupported"] !== null) {
            $this->IsSupported = $param["IsSupported"];
        }

        if (array_key_exists("SecAuditStatus",$param) and $param["SecAuditStatus"] !== null) {
            $this->SecAuditStatus = $param["SecAuditStatus"];
        }

        if (array_key_exists("AuditPolicyStatus",$param) and $param["AuditPolicyStatus"] !== null) {
            $this->AuditPolicyStatus = $param["AuditPolicyStatus"];
        }

        if (array_key_exists("AuditRunningStatus",$param) and $param["AuditRunningStatus"] !== null) {
            $this->AuditRunningStatus = $param["AuditRunningStatus"];
        }

        if (array_key_exists("InternalVip",$param) and $param["InternalVip"] !== null) {
            $this->InternalVip = $param["InternalVip"];
        }

        if (array_key_exists("InternalVport",$param) and $param["InternalVport"] !== null) {
            $this->InternalVport = $param["InternalVport"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }
    }
}
