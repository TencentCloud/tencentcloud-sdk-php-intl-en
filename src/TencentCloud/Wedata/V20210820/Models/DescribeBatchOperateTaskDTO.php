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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Batch Operation Task List
 *
 * @method string getTaskId() Obtain Task IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskId(string $TaskId) Set Task IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskName() Obtain Task NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskName(string $TaskName) Set Task NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getWorkflowId() Obtain Workflow Id
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow Id
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getWorkflowName() Obtain Workflow name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setWorkflowName(string $WorkflowName) Set Workflow name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getStatus() Obtain StatusNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setStatus(string $Status) Set StatusNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTaskTypeId() Obtain Task IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskTypeId(integer $TaskTypeId) Set Task IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskTypeDesc() Obtain Task TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskTypeDesc(string $TaskTypeDesc) Set Task TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getFolderName() Obtain Folder name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFolderName(string $FolderName) Set Folder name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getFolderId() Obtain Folder IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setFolderId(string $FolderId) Set Folder IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getInCharge() Obtain Owner
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInCharge(string $InCharge) Set Owner
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getSubmit() Obtain Submitted?
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSubmit(integer $Submit) Set Submitted?
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDataEngine() Obtain Engine:
presto\SparkJob\SparkSql
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDataEngine(string $DataEngine) Set Engine:
presto\SparkJob\SparkSql
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getUpdateTime() Obtain Update timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreateTime() Obtain Creation time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCycleUnit() Obtain Cycle type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCycleUnit(string $CycleUnit) Set Cycle type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getScheduleDesc() Obtain Scheduling plan
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setScheduleDesc(string $ScheduleDesc) Set Scheduling plan
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatasourceId() Obtain Data source ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatasourceId(string $DatasourceId) Set Data source ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatasourceType() Obtain Data source typeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatasourceType(string $DatasourceType) Set Data source typeNote: This field may return null, indicating that no valid value can be obtained.
 */
class DescribeBatchOperateTaskDTO extends AbstractModel
{
    /**
     * @var string Task IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskId;

    /**
     * @var string Task NameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskName;

    /**
     * @var string Workflow Id
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $WorkflowId;

    /**
     * @var string Workflow name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $WorkflowName;

    /**
     * @var string StatusNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Status;

    /**
     * @var integer Task IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskTypeId;

    /**
     * @var string Task TypeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskTypeDesc;

    /**
     * @var string Folder name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FolderName;

    /**
     * @var string Folder IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $FolderId;

    /**
     * @var string Owner
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InCharge;

    /**
     * @var integer Submitted?
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Submit;

    /**
     * @var string Engine:
presto\SparkJob\SparkSql
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DataEngine;

    /**
     * @var string Update timeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string Creation time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Cycle type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CycleUnit;

    /**
     * @var string Scheduling plan
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ScheduleDesc;

    /**
     * @var string Data source ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatasourceId;

    /**
     * @var string Data source typeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatasourceType;

    /**
     * @param string $TaskId Task IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskName Task NameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $WorkflowId Workflow Id
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $WorkflowName Workflow name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Status StatusNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TaskTypeId Task IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskTypeDesc Task TypeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $FolderName Folder name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $FolderId Folder IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $InCharge Owner
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Submit Submitted?
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DataEngine Engine:
presto\SparkJob\SparkSql
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $UpdateTime Update timeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreateTime Creation time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CycleUnit Cycle type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ScheduleDesc Scheduling plan
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatasourceId Data source ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatasourceType Data source typeNote: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("TaskTypeDesc",$param) and $param["TaskTypeDesc"] !== null) {
            $this->TaskTypeDesc = $param["TaskTypeDesc"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("Submit",$param) and $param["Submit"] !== null) {
            $this->Submit = $param["Submit"];
        }

        if (array_key_exists("DataEngine",$param) and $param["DataEngine"] !== null) {
            $this->DataEngine = $param["DataEngine"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CycleUnit",$param) and $param["CycleUnit"] !== null) {
            $this->CycleUnit = $param["CycleUnit"];
        }

        if (array_key_exists("ScheduleDesc",$param) and $param["ScheduleDesc"] !== null) {
            $this->ScheduleDesc = $param["ScheduleDesc"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DatasourceType",$param) and $param["DatasourceType"] !== null) {
            $this->DatasourceType = $param["DatasourceType"];
        }
    }
}
