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
 * Task Information
 *
 * @method integer getID() Obtain <p>Task ID.</p>
 * @method void setID(integer $ID) Set <p>Task ID.</p>
 * @method integer getAppId() Obtain <p>User appid</p>
 * @method void setAppId(integer $AppId) Set <p>User appid</p>
 * @method string getClusterId() Obtain <p>Cluster ID.</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID.</p>
 * @method string getRegion() Obtain <p>Region</p>
 * @method void setRegion(string $Region) Set <p>Region</p>
 * @method string getCreateTime() Obtain <p>Task creation time</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Task creation time</p>
 * @method string getDelayTime() Obtain <p>Delayed execution time</p>
 * @method void setDelayTime(string $DelayTime) Set <p>Delayed execution time</p>
 * @method string getErrMsg() Obtain <p>Task failure information</p>
 * @method void setErrMsg(string $ErrMsg) Set <p>Task failure information</p>
 * @method integer getFlowId() Obtain <p>Asynchronous task flow id</p>
 * @method void setFlowId(integer $FlowId) Set <p>Asynchronous task flow id</p>
 * @method string getInput() Obtain <p>Task input information</p>
 * @method void setInput(string $Input) Set <p>Task input information</p>
 * @method string getInstanceGrpId() Obtain <p>Instance group id.</p>
 * @method void setInstanceGrpId(string $InstanceGrpId) Set <p>Instance group id.</p>
 * @method string getInstanceGroupId() Obtain <p>Instance group id.</p>
 * @method void setInstanceGroupId(string $InstanceGroupId) Set <p>Instance group id.</p>
 * @method string getInstanceId() Obtain <p>Instance id</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance id</p>
 * @method string getObjectId() Obtain <p>Task operation object id</p>
 * @method void setObjectId(string $ObjectId) Set <p>Task operation object id</p>
 * @method string getObjectType() Obtain <p>Task operation object type.</p>
 * @method void setObjectType(string $ObjectType) Set <p>Task operation object type.</p>
 * @method string getOperator() Obtain <p>Operator uin</p>
 * @method void setOperator(string $Operator) Set <p>Operator uin</p>
 * @method string getOutput() Obtain <p>Task output information</p>
 * @method void setOutput(string $Output) Set <p>Task output information</p>
 * @method string getStatus() Obtain <p>Task status</p>
 * @method void setStatus(string $Status) Set <p>Task status</p>
 * @method string getTaskType() Obtain <p>Task type</p>
 * @method void setTaskType(string $TaskType) Set <p>Task type</p>
 * @method integer getTriggerTaskId() Obtain <p>Parent task ID that triggers this task</p>
 * @method void setTriggerTaskId(integer $TriggerTaskId) Set <p>Parent task ID that triggers this task</p>
 * @method string getUpdateTime() Obtain <p>Update time.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time.</p>
 * @method string getStartTime() Obtain <p>Task start time</p>
 * @method void setStartTime(string $StartTime) Set <p>Task start time</p>
 * @method string getEndTime() Obtain <p>Task end time</p>
 * @method void setEndTime(string $EndTime) Set <p>Task end time</p>
 * @method string getClusterName() Obtain <p>Cluster name.</p>
 * @method void setClusterName(string $ClusterName) Set <p>Cluster name.</p>
 * @method string getInstanceName() Obtain <p>Instance name</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name</p>
 * @method integer getProcess() Obtain <p>Task progress</p>
 * @method void setProcess(integer $Process) Set <p>Task progress</p>
 * @method array getModifyParamsData() Obtain <p>Modify parameter task information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModifyParamsData(array $ModifyParamsData) Set <p>Modify parameter task information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method CreateClustersData getCreateClustersData() Obtain <p>Create cluster task information</p>
 * @method void setCreateClustersData(CreateClustersData $CreateClustersData) Set <p>Create cluster task information</p>
 * @method RollbackData getRollbackData() Obtain <p>Cluster rollback task information</p>
 * @method void setRollbackData(RollbackData $RollbackData) Set <p>Cluster rollback task information</p>
 * @method ModifyInstanceData getModifyInstanceData() Obtain <p>Instance configuration change task information</p>
 * @method void setModifyInstanceData(ModifyInstanceData $ModifyInstanceData) Set <p>Instance configuration change task information</p>
 * @method ManualBackupData getManualBackupData() Obtain <p>Manual backup task information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setManualBackupData(ManualBackupData $ManualBackupData) Set <p>Manual backup task information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ModifyDbVersionData getModifyDbVersionData() Obtain <p>Modify kernel version task information</p>
 * @method void setModifyDbVersionData(ModifyDbVersionData $ModifyDbVersionData) Set <p>Modify kernel version task information</p>
 * @method ClusterSlaveData getClusterSlaveData() Obtain <p>Cluster Availability Zone Information</p>
 * @method void setClusterSlaveData(ClusterSlaveData $ClusterSlaveData) Set <p>Cluster Availability Zone Information</p>
 * @method SwitchClusterLogBin getSwitchClusterLogBin() Obtain <p>Convert cluster logs</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSwitchClusterLogBin(SwitchClusterLogBin $SwitchClusterLogBin) Set <p>Convert cluster logs</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method BizTaskModifyParamsData getModifyInstanceParamsData() Obtain <p>Modify instance parameter data</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModifyInstanceParamsData(BizTaskModifyParamsData $ModifyInstanceParamsData) Set <p>Modify instance parameter data</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TaskMaintainInfo getTaskMaintainInfo() Obtain <p>Maintenance time</p>
 * @method void setTaskMaintainInfo(TaskMaintainInfo $TaskMaintainInfo) Set <p>Maintenance time</p>
 * @method array getInstanceCLSDeliveryInfos() Obtain <p>Instance Log Delivery Information</p>
 * @method void setInstanceCLSDeliveryInfos(array $InstanceCLSDeliveryInfos) Set <p>Instance Log Delivery Information</p>
 * @method TaskProgressInfo getTaskProgressInfo() Obtain <p>Task progress information</p>
 * @method void setTaskProgressInfo(TaskProgressInfo $TaskProgressInfo) Set <p>Task progress information</p>
 * @method GdnTaskInfo getGdnTaskInfo() Obtain <p>Global database network task</p>
 * @method void setGdnTaskInfo(GdnTaskInfo $GdnTaskInfo) Set <p>Global database network task</p>
 * @method string getVaultId() Obtain <p>Safe id</p>
 * @method void setVaultId(string $VaultId) Set <p>Safe id</p>
 * @method string getVaultName() Obtain <p>Safe name</p>
 * @method void setVaultName(string $VaultName) Set <p>Safe name</p>
 * @method AIOptimizerTaskData getAIOptimizerTaskData() Obtain <p>AI optimizer task information</p>
 * @method void setAIOptimizerTaskData(AIOptimizerTaskData $AIOptimizerTaskData) Set <p>AI optimizer task information</p>
 */
class BizTaskInfo extends AbstractModel
{
    /**
     * @var integer <p>Task ID.</p>
     */
    public $ID;

    /**
     * @var integer <p>User appid</p>
     */
    public $AppId;

    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterId;

    /**
     * @var string <p>Region</p>
     */
    public $Region;

    /**
     * @var string <p>Task creation time</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Delayed execution time</p>
     */
    public $DelayTime;

    /**
     * @var string <p>Task failure information</p>
     */
    public $ErrMsg;

    /**
     * @var integer <p>Asynchronous task flow id</p>
     */
    public $FlowId;

    /**
     * @var string <p>Task input information</p>
     */
    public $Input;

    /**
     * @var string <p>Instance group id.</p>
     * @deprecated
     */
    public $InstanceGrpId;

    /**
     * @var string <p>Instance group id.</p>
     */
    public $InstanceGroupId;

    /**
     * @var string <p>Instance id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Task operation object id</p>
     */
    public $ObjectId;

    /**
     * @var string <p>Task operation object type.</p>
     */
    public $ObjectType;

    /**
     * @var string <p>Operator uin</p>
     */
    public $Operator;

    /**
     * @var string <p>Task output information</p>
     */
    public $Output;

    /**
     * @var string <p>Task status</p>
     */
    public $Status;

    /**
     * @var string <p>Task type</p>
     */
    public $TaskType;

    /**
     * @var integer <p>Parent task ID that triggers this task</p>
     */
    public $TriggerTaskId;

    /**
     * @var string <p>Update time.</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>Task start time</p>
     */
    public $StartTime;

    /**
     * @var string <p>Task end time</p>
     */
    public $EndTime;

    /**
     * @var string <p>Cluster name.</p>
     */
    public $ClusterName;

    /**
     * @var string <p>Instance name</p>
     */
    public $InstanceName;

    /**
     * @var integer <p>Task progress</p>
     */
    public $Process;

    /**
     * @var array <p>Modify parameter task information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $ModifyParamsData;

    /**
     * @var CreateClustersData <p>Create cluster task information</p>
     */
    public $CreateClustersData;

    /**
     * @var RollbackData <p>Cluster rollback task information</p>
     */
    public $RollbackData;

    /**
     * @var ModifyInstanceData <p>Instance configuration change task information</p>
     */
    public $ModifyInstanceData;

    /**
     * @var ManualBackupData <p>Manual backup task information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ManualBackupData;

    /**
     * @var ModifyDbVersionData <p>Modify kernel version task information</p>
     */
    public $ModifyDbVersionData;

    /**
     * @var ClusterSlaveData <p>Cluster Availability Zone Information</p>
     */
    public $ClusterSlaveData;

    /**
     * @var SwitchClusterLogBin <p>Convert cluster logs</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SwitchClusterLogBin;

    /**
     * @var BizTaskModifyParamsData <p>Modify instance parameter data</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ModifyInstanceParamsData;

    /**
     * @var TaskMaintainInfo <p>Maintenance time</p>
     */
    public $TaskMaintainInfo;

    /**
     * @var array <p>Instance Log Delivery Information</p>
     */
    public $InstanceCLSDeliveryInfos;

    /**
     * @var TaskProgressInfo <p>Task progress information</p>
     */
    public $TaskProgressInfo;

    /**
     * @var GdnTaskInfo <p>Global database network task</p>
     */
    public $GdnTaskInfo;

    /**
     * @var string <p>Safe id</p>
     */
    public $VaultId;

    /**
     * @var string <p>Safe name</p>
     */
    public $VaultName;

    /**
     * @var AIOptimizerTaskData <p>AI optimizer task information</p>
     */
    public $AIOptimizerTaskData;

    /**
     * @param integer $ID <p>Task ID.</p>
     * @param integer $AppId <p>User appid</p>
     * @param string $ClusterId <p>Cluster ID.</p>
     * @param string $Region <p>Region</p>
     * @param string $CreateTime <p>Task creation time</p>
     * @param string $DelayTime <p>Delayed execution time</p>
     * @param string $ErrMsg <p>Task failure information</p>
     * @param integer $FlowId <p>Asynchronous task flow id</p>
     * @param string $Input <p>Task input information</p>
     * @param string $InstanceGrpId <p>Instance group id.</p>
     * @param string $InstanceGroupId <p>Instance group id.</p>
     * @param string $InstanceId <p>Instance id</p>
     * @param string $ObjectId <p>Task operation object id</p>
     * @param string $ObjectType <p>Task operation object type.</p>
     * @param string $Operator <p>Operator uin</p>
     * @param string $Output <p>Task output information</p>
     * @param string $Status <p>Task status</p>
     * @param string $TaskType <p>Task type</p>
     * @param integer $TriggerTaskId <p>Parent task ID that triggers this task</p>
     * @param string $UpdateTime <p>Update time.</p>
     * @param string $StartTime <p>Task start time</p>
     * @param string $EndTime <p>Task end time</p>
     * @param string $ClusterName <p>Cluster name.</p>
     * @param string $InstanceName <p>Instance name</p>
     * @param integer $Process <p>Task progress</p>
     * @param array $ModifyParamsData <p>Modify parameter task information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param CreateClustersData $CreateClustersData <p>Create cluster task information</p>
     * @param RollbackData $RollbackData <p>Cluster rollback task information</p>
     * @param ModifyInstanceData $ModifyInstanceData <p>Instance configuration change task information</p>
     * @param ManualBackupData $ManualBackupData <p>Manual backup task information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ModifyDbVersionData $ModifyDbVersionData <p>Modify kernel version task information</p>
     * @param ClusterSlaveData $ClusterSlaveData <p>Cluster Availability Zone Information</p>
     * @param SwitchClusterLogBin $SwitchClusterLogBin <p>Convert cluster logs</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param BizTaskModifyParamsData $ModifyInstanceParamsData <p>Modify instance parameter data</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TaskMaintainInfo $TaskMaintainInfo <p>Maintenance time</p>
     * @param array $InstanceCLSDeliveryInfos <p>Instance Log Delivery Information</p>
     * @param TaskProgressInfo $TaskProgressInfo <p>Task progress information</p>
     * @param GdnTaskInfo $GdnTaskInfo <p>Global database network task</p>
     * @param string $VaultId <p>Safe id</p>
     * @param string $VaultName <p>Safe name</p>
     * @param AIOptimizerTaskData $AIOptimizerTaskData <p>AI optimizer task information</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = $param["Input"];
        }

        if (array_key_exists("InstanceGrpId",$param) and $param["InstanceGrpId"] !== null) {
            $this->InstanceGrpId = $param["InstanceGrpId"];
        }

        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ObjectId",$param) and $param["ObjectId"] !== null) {
            $this->ObjectId = $param["ObjectId"];
        }

        if (array_key_exists("ObjectType",$param) and $param["ObjectType"] !== null) {
            $this->ObjectType = $param["ObjectType"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = $param["Output"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TriggerTaskId",$param) and $param["TriggerTaskId"] !== null) {
            $this->TriggerTaskId = $param["TriggerTaskId"];
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

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Process",$param) and $param["Process"] !== null) {
            $this->Process = $param["Process"];
        }

        if (array_key_exists("ModifyParamsData",$param) and $param["ModifyParamsData"] !== null) {
            $this->ModifyParamsData = [];
            foreach ($param["ModifyParamsData"] as $key => $value){
                $obj = new ModifyParamsData();
                $obj->deserialize($value);
                array_push($this->ModifyParamsData, $obj);
            }
        }

        if (array_key_exists("CreateClustersData",$param) and $param["CreateClustersData"] !== null) {
            $this->CreateClustersData = new CreateClustersData();
            $this->CreateClustersData->deserialize($param["CreateClustersData"]);
        }

        if (array_key_exists("RollbackData",$param) and $param["RollbackData"] !== null) {
            $this->RollbackData = new RollbackData();
            $this->RollbackData->deserialize($param["RollbackData"]);
        }

        if (array_key_exists("ModifyInstanceData",$param) and $param["ModifyInstanceData"] !== null) {
            $this->ModifyInstanceData = new ModifyInstanceData();
            $this->ModifyInstanceData->deserialize($param["ModifyInstanceData"]);
        }

        if (array_key_exists("ManualBackupData",$param) and $param["ManualBackupData"] !== null) {
            $this->ManualBackupData = new ManualBackupData();
            $this->ManualBackupData->deserialize($param["ManualBackupData"]);
        }

        if (array_key_exists("ModifyDbVersionData",$param) and $param["ModifyDbVersionData"] !== null) {
            $this->ModifyDbVersionData = new ModifyDbVersionData();
            $this->ModifyDbVersionData->deserialize($param["ModifyDbVersionData"]);
        }

        if (array_key_exists("ClusterSlaveData",$param) and $param["ClusterSlaveData"] !== null) {
            $this->ClusterSlaveData = new ClusterSlaveData();
            $this->ClusterSlaveData->deserialize($param["ClusterSlaveData"]);
        }

        if (array_key_exists("SwitchClusterLogBin",$param) and $param["SwitchClusterLogBin"] !== null) {
            $this->SwitchClusterLogBin = new SwitchClusterLogBin();
            $this->SwitchClusterLogBin->deserialize($param["SwitchClusterLogBin"]);
        }

        if (array_key_exists("ModifyInstanceParamsData",$param) and $param["ModifyInstanceParamsData"] !== null) {
            $this->ModifyInstanceParamsData = new BizTaskModifyParamsData();
            $this->ModifyInstanceParamsData->deserialize($param["ModifyInstanceParamsData"]);
        }

        if (array_key_exists("TaskMaintainInfo",$param) and $param["TaskMaintainInfo"] !== null) {
            $this->TaskMaintainInfo = new TaskMaintainInfo();
            $this->TaskMaintainInfo->deserialize($param["TaskMaintainInfo"]);
        }

        if (array_key_exists("InstanceCLSDeliveryInfos",$param) and $param["InstanceCLSDeliveryInfos"] !== null) {
            $this->InstanceCLSDeliveryInfos = [];
            foreach ($param["InstanceCLSDeliveryInfos"] as $key => $value){
                $obj = new InstanceCLSDeliveryInfo();
                $obj->deserialize($value);
                array_push($this->InstanceCLSDeliveryInfos, $obj);
            }
        }

        if (array_key_exists("TaskProgressInfo",$param) and $param["TaskProgressInfo"] !== null) {
            $this->TaskProgressInfo = new TaskProgressInfo();
            $this->TaskProgressInfo->deserialize($param["TaskProgressInfo"]);
        }

        if (array_key_exists("GdnTaskInfo",$param) and $param["GdnTaskInfo"] !== null) {
            $this->GdnTaskInfo = new GdnTaskInfo();
            $this->GdnTaskInfo->deserialize($param["GdnTaskInfo"]);
        }

        if (array_key_exists("VaultId",$param) and $param["VaultId"] !== null) {
            $this->VaultId = $param["VaultId"];
        }

        if (array_key_exists("VaultName",$param) and $param["VaultName"] !== null) {
            $this->VaultName = $param["VaultName"];
        }

        if (array_key_exists("AIOptimizerTaskData",$param) and $param["AIOptimizerTaskData"] !== null) {
            $this->AIOptimizerTaskData = new AIOptimizerTaskData();
            $this->AIOptimizerTaskData->deserialize($param["AIOptimizerTaskData"]);
        }
    }
}
