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
 * Task information
 *
 * @method integer getID() Obtain Task id
 * @method void setID(integer $ID) Set Task id
 * @method integer getAppId() Obtain User appid
 * @method void setAppId(integer $AppId) Set User appid
 * @method string getClusterId() Obtain cluster id
 * @method void setClusterId(string $ClusterId) Set cluster id
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 * @method string getCreateTime() Obtain Task Creation Time
 * @method void setCreateTime(string $CreateTime) Set Task Creation Time
 * @method string getDelayTime() Obtain Specifies the delayed execution time.
 * @method void setDelayTime(string $DelayTime) Set Specifies the delayed execution time.
 * @method string getErrMsg() Obtain Task failure information.
 * @method void setErrMsg(string $ErrMsg) Set Task failure information.
 * @method integer getFlowId() Obtain asynchronous task flow id
 * @method void setFlowId(integer $FlowId) Set asynchronous task flow id
 * @method string getInput() Obtain task input information
 * @method void setInput(string $Input) Set task input information
 * @method string getInstanceGrpId() Obtain instance group id
 * @method void setInstanceGrpId(string $InstanceGrpId) Set instance group id
 * @method string getInstanceGroupId() Obtain instance group id
 * @method void setInstanceGroupId(string $InstanceGroupId) Set instance group id
 * @method string getInstanceId() Obtain Instance id
 * @method void setInstanceId(string $InstanceId) Set Instance id
 * @method string getObjectId() Obtain Task Operation Target id
 * @method void setObjectId(string $ObjectId) Set Task Operation Target id
 * @method string getObjectType() Obtain Task Operation Target Type
 * @method void setObjectType(string $ObjectType) Set Task Operation Target Type
 * @method string getOperator() Obtain Operator uin
 * @method void setOperator(string $Operator) Set Operator uin
 * @method string getOutput() Obtain task output information
 * @method void setOutput(string $Output) Set task output information
 * @method string getStatus() Obtain Task Status
 * @method void setStatus(string $Status) Set Task Status
 * @method string getTaskType() Obtain task type
 * @method void setTaskType(string $TaskType) Set task type
 * @method integer getTriggerTaskId() Obtain Parent Task ID that Triggered This Task
 * @method void setTriggerTaskId(integer $TriggerTaskId) Set Parent Task ID that Triggered This Task
 * @method string getUpdateTime() Obtain Update Time
 * @method void setUpdateTime(string $UpdateTime) Set Update Time
 * @method string getStartTime() Obtain Task Start Time
 * @method void setStartTime(string $StartTime) Set Task Start Time
 * @method string getEndTime() Obtain Task End Time
 * @method void setEndTime(string $EndTime) Set Task End Time
 * @method string getClusterName() Obtain Cluster Name
 * @method void setClusterName(string $ClusterName) Set Cluster Name
 * @method string getInstanceName() Obtain Instance Name
 * @method void setInstanceName(string $InstanceName) Set Instance Name
 * @method integer getProcess() Obtain Task Progress
 * @method void setProcess(integer $Process) Set Task Progress
 * @method array getModifyParamsData() Obtain Parameter Modification Task Information
 * @method void setModifyParamsData(array $ModifyParamsData) Set Parameter Modification Task Information
 * @method CreateClustersData getCreateClustersData() Obtain Create cluster task information.
 * @method void setCreateClustersData(CreateClustersData $CreateClustersData) Set Create cluster task information.
 * @method RollbackData getRollbackData() Obtain Cluster rollback task information.
 * @method void setRollbackData(RollbackData $RollbackData) Set Cluster rollback task information.
 * @method ModifyInstanceData getModifyInstanceData() Obtain Instance configuration change task information.
 * @method void setModifyInstanceData(ModifyInstanceData $ModifyInstanceData) Set Instance configuration change task information.
 * @method ManualBackupData getManualBackupData() Obtain Manual Backup Task Information
 * @method void setManualBackupData(ManualBackupData $ManualBackupData) Set Manual Backup Task Information
 * @method ModifyDbVersionData getModifyDbVersionData() Obtain Modify kernel version task information.
 * @method void setModifyDbVersionData(ModifyDbVersionData $ModifyDbVersionData) Set Modify kernel version task information.
 * @method ClusterSlaveData getClusterSlaveData() Obtain Cluster availability zone information.
 * @method void setClusterSlaveData(ClusterSlaveData $ClusterSlaveData) Set Cluster availability zone information.
 * @method SwitchClusterLogBin getSwitchClusterLogBin() Obtain Cluster Log Conversion
 * @method void setSwitchClusterLogBin(SwitchClusterLogBin $SwitchClusterLogBin) Set Cluster Log Conversion
 * @method BizTaskModifyParamsData getModifyInstanceParamsData() Obtain Instance Parameter Modification
 * @method void setModifyInstanceParamsData(BizTaskModifyParamsData $ModifyInstanceParamsData) Set Instance Parameter Modification
 * @method TaskMaintainInfo getTaskMaintainInfo() Obtain Maintenance time.
 * @method void setTaskMaintainInfo(TaskMaintainInfo $TaskMaintainInfo) Set Maintenance time.
 * @method array getInstanceCLSDeliveryInfos() Obtain Instance log delivery information.

 * @method void setInstanceCLSDeliveryInfos(array $InstanceCLSDeliveryInfos) Set Instance log delivery information.

 * @method TaskProgressInfo getTaskProgressInfo() Obtain Task progress information.
 * @method void setTaskProgressInfo(TaskProgressInfo $TaskProgressInfo) Set Task progress information.
 */
class BizTaskInfo extends AbstractModel
{
    /**
     * @var integer Task id
     */
    public $ID;

    /**
     * @var integer User appid
     */
    public $AppId;

    /**
     * @var string cluster id
     */
    public $ClusterId;

    /**
     * @var string Region
     */
    public $Region;

    /**
     * @var string Task Creation Time
     */
    public $CreateTime;

    /**
     * @var string Specifies the delayed execution time.
     */
    public $DelayTime;

    /**
     * @var string Task failure information.
     */
    public $ErrMsg;

    /**
     * @var integer asynchronous task flow id
     */
    public $FlowId;

    /**
     * @var string task input information
     */
    public $Input;

    /**
     * @var string instance group id
     * @deprecated
     */
    public $InstanceGrpId;

    /**
     * @var string instance group id
     */
    public $InstanceGroupId;

    /**
     * @var string Instance id
     */
    public $InstanceId;

    /**
     * @var string Task Operation Target id
     */
    public $ObjectId;

    /**
     * @var string Task Operation Target Type
     */
    public $ObjectType;

    /**
     * @var string Operator uin
     */
    public $Operator;

    /**
     * @var string task output information
     */
    public $Output;

    /**
     * @var string Task Status
     */
    public $Status;

    /**
     * @var string task type
     */
    public $TaskType;

    /**
     * @var integer Parent Task ID that Triggered This Task
     */
    public $TriggerTaskId;

    /**
     * @var string Update Time
     */
    public $UpdateTime;

    /**
     * @var string Task Start Time
     */
    public $StartTime;

    /**
     * @var string Task End Time
     */
    public $EndTime;

    /**
     * @var string Cluster Name
     */
    public $ClusterName;

    /**
     * @var string Instance Name
     */
    public $InstanceName;

    /**
     * @var integer Task Progress
     */
    public $Process;

    /**
     * @var array Parameter Modification Task Information
     * @deprecated
     */
    public $ModifyParamsData;

    /**
     * @var CreateClustersData Create cluster task information.
     */
    public $CreateClustersData;

    /**
     * @var RollbackData Cluster rollback task information.
     */
    public $RollbackData;

    /**
     * @var ModifyInstanceData Instance configuration change task information.
     */
    public $ModifyInstanceData;

    /**
     * @var ManualBackupData Manual Backup Task Information
     */
    public $ManualBackupData;

    /**
     * @var ModifyDbVersionData Modify kernel version task information.
     */
    public $ModifyDbVersionData;

    /**
     * @var ClusterSlaveData Cluster availability zone information.
     */
    public $ClusterSlaveData;

    /**
     * @var SwitchClusterLogBin Cluster Log Conversion
     */
    public $SwitchClusterLogBin;

    /**
     * @var BizTaskModifyParamsData Instance Parameter Modification
     */
    public $ModifyInstanceParamsData;

    /**
     * @var TaskMaintainInfo Maintenance time.
     */
    public $TaskMaintainInfo;

    /**
     * @var array Instance log delivery information.

     */
    public $InstanceCLSDeliveryInfos;

    /**
     * @var TaskProgressInfo Task progress information.
     */
    public $TaskProgressInfo;

    /**
     * @param integer $ID Task id
     * @param integer $AppId User appid
     * @param string $ClusterId cluster id
     * @param string $Region Region
     * @param string $CreateTime Task Creation Time
     * @param string $DelayTime Specifies the delayed execution time.
     * @param string $ErrMsg Task failure information.
     * @param integer $FlowId asynchronous task flow id
     * @param string $Input task input information
     * @param string $InstanceGrpId instance group id
     * @param string $InstanceGroupId instance group id
     * @param string $InstanceId Instance id
     * @param string $ObjectId Task Operation Target id
     * @param string $ObjectType Task Operation Target Type
     * @param string $Operator Operator uin
     * @param string $Output task output information
     * @param string $Status Task Status
     * @param string $TaskType task type
     * @param integer $TriggerTaskId Parent Task ID that Triggered This Task
     * @param string $UpdateTime Update Time
     * @param string $StartTime Task Start Time
     * @param string $EndTime Task End Time
     * @param string $ClusterName Cluster Name
     * @param string $InstanceName Instance Name
     * @param integer $Process Task Progress
     * @param array $ModifyParamsData Parameter Modification Task Information
     * @param CreateClustersData $CreateClustersData Create cluster task information.
     * @param RollbackData $RollbackData Cluster rollback task information.
     * @param ModifyInstanceData $ModifyInstanceData Instance configuration change task information.
     * @param ManualBackupData $ManualBackupData Manual Backup Task Information
     * @param ModifyDbVersionData $ModifyDbVersionData Modify kernel version task information.
     * @param ClusterSlaveData $ClusterSlaveData Cluster availability zone information.
     * @param SwitchClusterLogBin $SwitchClusterLogBin Cluster Log Conversion
     * @param BizTaskModifyParamsData $ModifyInstanceParamsData Instance Parameter Modification
     * @param TaskMaintainInfo $TaskMaintainInfo Maintenance time.
     * @param array $InstanceCLSDeliveryInfos Instance log delivery information.

     * @param TaskProgressInfo $TaskProgressInfo Task progress information.
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
    }
}
