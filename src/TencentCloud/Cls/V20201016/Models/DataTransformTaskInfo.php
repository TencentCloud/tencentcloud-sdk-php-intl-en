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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Basic information of a data processing task
 *
 * @method string getName() Obtain Data processing task name
 * @method void setName(string $Name) Set Data processing task name
 * @method string getTaskId() Obtain Data processing task ID
 * @method void setTaskId(string $TaskId) Set Data processing task ID
 * @method integer getEnableFlag() Obtain Task status. Valid values: 1 (enabled) and 2 (disabled).
 * @method void setEnableFlag(integer $EnableFlag) Set Task status. Valid values: 1 (enabled) and 2 (disabled).
 * @method integer getType() Obtain Processing task type, 1: DSL (processing task using custom language), 2: SQL (processing task using SQL)
 * @method void setType(integer $Type) Set Processing task type, 1: DSL (processing task using custom language), 2: SQL (processing task using SQL)
 * @method string getSrcTopicId() Obtain Source log topic
 * @method void setSrcTopicId(string $SrcTopicId) Set Source log topic
 * @method integer getStatus() Obtain Current task status. Valid values: 1 (preparing), 2 (in progress), 3 (being stopped), and 4 (stopped).
 * @method void setStatus(integer $Status) Set Current task status. Valid values: 1 (preparing), 2 (in progress), 3 (being stopped), and 4 (stopped).
 * @method string getCreateTime() Obtain Creation time.
Time format: yyyy-MM-dd HH:mm:ss
 * @method void setCreateTime(string $CreateTime) Set Creation time.
Time format: yyyy-MM-dd HH:mm:ss
 * @method string getUpdateTime() Obtain Last modification time
Time format: yyyy-MM-dd HH:mm:ss
 * @method void setUpdateTime(string $UpdateTime) Set Last modification time
Time format: yyyy-MM-dd HH:mm:ss
 * @method string getLastEnableTime() Obtain Last enabled time. Modify this time if the cluster needs to be rebuilt.
Time format: yyyy-MM-dd HH:mm:ss
 * @method void setLastEnableTime(string $LastEnableTime) Set Last enabled time. Modify this time if the cluster needs to be rebuilt.
Time format: yyyy-MM-dd HH:mm:ss
 * @method string getSrcTopicName() Obtain Log topic name
 * @method void setSrcTopicName(string $SrcTopicName) Set Log topic name
 * @method string getLogsetId() Obtain Logset ID
 * @method void setLogsetId(string $LogsetId) Set Logset ID
 * @method array getDstResources() Obtain Target topic ID and alias of the data processing task
 * @method void setDstResources(array $DstResources) Set Target topic ID and alias of the data processing task
 * @method string getEtlContent() Obtain Processing logic function.
 * @method void setEtlContent(string $EtlContent) Set Processing logic function.
 * @method string getBackupTopicID() Obtain Fallback Topic ID
 * @method void setBackupTopicID(string $BackupTopicID) Set Fallback Topic ID
 * @method boolean getBackupGiveUpData() Obtain Whether to discard log data after the limit is exceeded
 * @method void setBackupGiveUpData(boolean $BackupGiveUpData) Set Whether to discard log data after the limit is exceeded
 * @method integer getHasServicesLog() Obtain Whether to enable service log shipping. Valid values: 1: disable; 2: enable.
 * @method void setHasServicesLog(integer $HasServicesLog) Set Whether to enable service log shipping. Valid values: 1: disable; 2: enable.
 * @method integer getTaskDstCount() Obtain Number of the target log topics of a task.
 * @method void setTaskDstCount(integer $TaskDstCount) Set Number of the target log topics of a task.
 * @method integer getDataTransformType() Obtain Data processing type. Valid values: 0: standard processing task; 1: pre-processing task.
 * @method void setDataTransformType(integer $DataTransformType) Set Data processing type. Valid values: 0: standard processing task; 1: pre-processing task.
 * @method integer getKeepFailureLog() Obtain Whether to keep the failure log status. Valid values: 1: no; 2: yes.
 * @method void setKeepFailureLog(integer $KeepFailureLog) Set Whether to keep the failure log status. Valid values: 1: no; 2: yes.
 * @method string getFailureLogKey() Obtain Field name of a failed log.
 * @method void setFailureLogKey(string $FailureLogKey) Set Field name of a failed log.
 * @method integer getProcessFromTimestamp() Obtain Specify the start time of data processing (a second-level timestamp).
-For any time range within the log topic lifecycle, if it exceeds the lifecycle, only process the part with data within the lifecycle.
 * @method void setProcessFromTimestamp(integer $ProcessFromTimestamp) Set Specify the start time of data processing (a second-level timestamp).
-For any time range within the log topic lifecycle, if it exceeds the lifecycle, only process the part with data within the lifecycle.
 * @method integer getProcessToTimestamp() Obtain Specify the end time of data processing, a Unix second-level timestamp.
1. Cannot specify a future time
2. If left blank, it means that the task will run constantly.
 * @method void setProcessToTimestamp(integer $ProcessToTimestamp) Set Specify the end time of data processing, a Unix second-level timestamp.
1. Cannot specify a future time
2. If left blank, it means that the task will run constantly.
 * @method array getDataTransformSqlDataSources() Obtain sql data source information
 * @method void setDataTransformSqlDataSources(array $DataTransformSqlDataSources) Set sql data source information
 * @method array getEnvInfos() Obtain Environment variable.
 * @method void setEnvInfos(array $EnvInfos) Set Environment variable.
 */
class DataTransformTaskInfo extends AbstractModel
{
    /**
     * @var string Data processing task name
     */
    public $Name;

    /**
     * @var string Data processing task ID
     */
    public $TaskId;

    /**
     * @var integer Task status. Valid values: 1 (enabled) and 2 (disabled).
     */
    public $EnableFlag;

    /**
     * @var integer Processing task type, 1: DSL (processing task using custom language), 2: SQL (processing task using SQL)
     */
    public $Type;

    /**
     * @var string Source log topic
     */
    public $SrcTopicId;

    /**
     * @var integer Current task status. Valid values: 1 (preparing), 2 (in progress), 3 (being stopped), and 4 (stopped).
     */
    public $Status;

    /**
     * @var string Creation time.
Time format: yyyy-MM-dd HH:mm:ss
     */
    public $CreateTime;

    /**
     * @var string Last modification time
Time format: yyyy-MM-dd HH:mm:ss
     */
    public $UpdateTime;

    /**
     * @var string Last enabled time. Modify this time if the cluster needs to be rebuilt.
Time format: yyyy-MM-dd HH:mm:ss
     */
    public $LastEnableTime;

    /**
     * @var string Log topic name
     */
    public $SrcTopicName;

    /**
     * @var string Logset ID
     */
    public $LogsetId;

    /**
     * @var array Target topic ID and alias of the data processing task
     */
    public $DstResources;

    /**
     * @var string Processing logic function.
     */
    public $EtlContent;

    /**
     * @var string Fallback Topic ID
     */
    public $BackupTopicID;

    /**
     * @var boolean Whether to discard log data after the limit is exceeded
     */
    public $BackupGiveUpData;

    /**
     * @var integer Whether to enable service log shipping. Valid values: 1: disable; 2: enable.
     */
    public $HasServicesLog;

    /**
     * @var integer Number of the target log topics of a task.
     */
    public $TaskDstCount;

    /**
     * @var integer Data processing type. Valid values: 0: standard processing task; 1: pre-processing task.
     */
    public $DataTransformType;

    /**
     * @var integer Whether to keep the failure log status. Valid values: 1: no; 2: yes.
     */
    public $KeepFailureLog;

    /**
     * @var string Field name of a failed log.
     */
    public $FailureLogKey;

    /**
     * @var integer Specify the start time of data processing (a second-level timestamp).
-For any time range within the log topic lifecycle, if it exceeds the lifecycle, only process the part with data within the lifecycle.
     */
    public $ProcessFromTimestamp;

    /**
     * @var integer Specify the end time of data processing, a Unix second-level timestamp.
1. Cannot specify a future time
2. If left blank, it means that the task will run constantly.
     */
    public $ProcessToTimestamp;

    /**
     * @var array sql data source information
     */
    public $DataTransformSqlDataSources;

    /**
     * @var array Environment variable.
     */
    public $EnvInfos;

    /**
     * @param string $Name Data processing task name
     * @param string $TaskId Data processing task ID
     * @param integer $EnableFlag Task status. Valid values: 1 (enabled) and 2 (disabled).
     * @param integer $Type Processing task type, 1: DSL (processing task using custom language), 2: SQL (processing task using SQL)
     * @param string $SrcTopicId Source log topic
     * @param integer $Status Current task status. Valid values: 1 (preparing), 2 (in progress), 3 (being stopped), and 4 (stopped).
     * @param string $CreateTime Creation time.
Time format: yyyy-MM-dd HH:mm:ss
     * @param string $UpdateTime Last modification time
Time format: yyyy-MM-dd HH:mm:ss
     * @param string $LastEnableTime Last enabled time. Modify this time if the cluster needs to be rebuilt.
Time format: yyyy-MM-dd HH:mm:ss
     * @param string $SrcTopicName Log topic name
     * @param string $LogsetId Logset ID
     * @param array $DstResources Target topic ID and alias of the data processing task
     * @param string $EtlContent Processing logic function.
     * @param string $BackupTopicID Fallback Topic ID
     * @param boolean $BackupGiveUpData Whether to discard log data after the limit is exceeded
     * @param integer $HasServicesLog Whether to enable service log shipping. Valid values: 1: disable; 2: enable.
     * @param integer $TaskDstCount Number of the target log topics of a task.
     * @param integer $DataTransformType Data processing type. Valid values: 0: standard processing task; 1: pre-processing task.
     * @param integer $KeepFailureLog Whether to keep the failure log status. Valid values: 1: no; 2: yes.
     * @param string $FailureLogKey Field name of a failed log.
     * @param integer $ProcessFromTimestamp Specify the start time of data processing (a second-level timestamp).
-For any time range within the log topic lifecycle, if it exceeds the lifecycle, only process the part with data within the lifecycle.
     * @param integer $ProcessToTimestamp Specify the end time of data processing, a Unix second-level timestamp.
1. Cannot specify a future time
2. If left blank, it means that the task will run constantly.
     * @param array $DataTransformSqlDataSources sql data source information
     * @param array $EnvInfos Environment variable.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("EnableFlag",$param) and $param["EnableFlag"] !== null) {
            $this->EnableFlag = $param["EnableFlag"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SrcTopicId",$param) and $param["SrcTopicId"] !== null) {
            $this->SrcTopicId = $param["SrcTopicId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("LastEnableTime",$param) and $param["LastEnableTime"] !== null) {
            $this->LastEnableTime = $param["LastEnableTime"];
        }

        if (array_key_exists("SrcTopicName",$param) and $param["SrcTopicName"] !== null) {
            $this->SrcTopicName = $param["SrcTopicName"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("DstResources",$param) and $param["DstResources"] !== null) {
            $this->DstResources = [];
            foreach ($param["DstResources"] as $key => $value){
                $obj = new DataTransformResouceInfo();
                $obj->deserialize($value);
                array_push($this->DstResources, $obj);
            }
        }

        if (array_key_exists("EtlContent",$param) and $param["EtlContent"] !== null) {
            $this->EtlContent = $param["EtlContent"];
        }

        if (array_key_exists("BackupTopicID",$param) and $param["BackupTopicID"] !== null) {
            $this->BackupTopicID = $param["BackupTopicID"];
        }

        if (array_key_exists("BackupGiveUpData",$param) and $param["BackupGiveUpData"] !== null) {
            $this->BackupGiveUpData = $param["BackupGiveUpData"];
        }

        if (array_key_exists("HasServicesLog",$param) and $param["HasServicesLog"] !== null) {
            $this->HasServicesLog = $param["HasServicesLog"];
        }

        if (array_key_exists("TaskDstCount",$param) and $param["TaskDstCount"] !== null) {
            $this->TaskDstCount = $param["TaskDstCount"];
        }

        if (array_key_exists("DataTransformType",$param) and $param["DataTransformType"] !== null) {
            $this->DataTransformType = $param["DataTransformType"];
        }

        if (array_key_exists("KeepFailureLog",$param) and $param["KeepFailureLog"] !== null) {
            $this->KeepFailureLog = $param["KeepFailureLog"];
        }

        if (array_key_exists("FailureLogKey",$param) and $param["FailureLogKey"] !== null) {
            $this->FailureLogKey = $param["FailureLogKey"];
        }

        if (array_key_exists("ProcessFromTimestamp",$param) and $param["ProcessFromTimestamp"] !== null) {
            $this->ProcessFromTimestamp = $param["ProcessFromTimestamp"];
        }

        if (array_key_exists("ProcessToTimestamp",$param) and $param["ProcessToTimestamp"] !== null) {
            $this->ProcessToTimestamp = $param["ProcessToTimestamp"];
        }

        if (array_key_exists("DataTransformSqlDataSources",$param) and $param["DataTransformSqlDataSources"] !== null) {
            $this->DataTransformSqlDataSources = [];
            foreach ($param["DataTransformSqlDataSources"] as $key => $value){
                $obj = new DataTransformSqlDataSource();
                $obj->deserialize($value);
                array_push($this->DataTransformSqlDataSources, $obj);
            }
        }

        if (array_key_exists("EnvInfos",$param) and $param["EnvInfos"] !== null) {
            $this->EnvInfos = [];
            foreach ($param["EnvInfos"] as $key => $value){
                $obj = new EnvInfo();
                $obj->deserialize($value);
                array_push($this->EnvInfos, $obj);
            }
        }
    }
}
