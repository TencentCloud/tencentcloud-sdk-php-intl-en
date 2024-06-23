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
 * Trial Run Record
 *
 * @method string getTaskSource() Obtain Task Source
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskSource(string $TaskSource) Set Task Source
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getJobId() Obtain Orchestration Space jobId
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setJobId(string $JobId) Set Orchestration Space jobId
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getRecordId() Obtain Task Submission Record Id
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRecordId(integer $RecordId) Set Task Submission Record Id
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getSonRecordId() Obtain Subtask record id
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSonRecordId(integer $SonRecordId) Set Subtask record id
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getInstanceId() Obtain Task instance Id
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Task instance Id
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskId() Obtain For orchestration space, the task id; for development space, the script id
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskId(string $TaskId) Set For orchestration space, the task id; for development space, the script id
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRemotePath() Obtain Script COS address
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRemotePath(string $RemotePath) Set Script COS address
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getScriptContent() Obtain Trial run content
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setScriptContent(string $ScriptContent) Set Trial run content
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreateTime() Obtain Task submission time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Task submission time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getStartTime() Obtain Task start time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStartTime(string $StartTime) Set Task start time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDuration() Obtain Running duration (seconds)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDuration(string $Duration) Set Running duration (seconds)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getStatus() Obtain Trial run status
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStatus(string $Status) Set Trial run status
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskName() Obtain For orchestration space, the task name; for development space, the script name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskName(string $TaskName) Set For orchestration space, the task name; for development space, the script name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getSubmitUserName() Obtain Trial run submitter
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSubmitUserName(string $SubmitUserName) Set Trial run submitter
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getSubmitUserId() Obtain Trial run submitter userId
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSubmitUserId(string $SubmitUserId) Set Trial run submitter userId
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskType() Obtain Task TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskType(string $TaskType) Set Task TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getHasResultSet() Obtain Contains result set
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setHasResultSet(boolean $HasResultSet) Set Contains result set
Note: This field may return null, indicating that no valid value can be obtained.
 */
class DrInstanceOpsDto extends AbstractModel
{
    /**
     * @var string Task Source
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskSource;

    /**
     * @var string Orchestration Space jobId
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $JobId;

    /**
     * @var integer Task Submission Record Id
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RecordId;

    /**
     * @var integer Subtask record id
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SonRecordId;

    /**
     * @var string Task instance Id
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceId;

    /**
     * @var string For orchestration space, the task id; for development space, the script id
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskId;

    /**
     * @var string Script COS address
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RemotePath;

    /**
     * @var string Trial run content
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ScriptContent;

    /**
     * @var string Task submission time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Task start time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $StartTime;

    /**
     * @var string Running duration (seconds)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Duration;

    /**
     * @var string Trial run status
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Status;

    /**
     * @var string For orchestration space, the task name; for development space, the script name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskName;

    /**
     * @var string Trial run submitter
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SubmitUserName;

    /**
     * @var string Trial run submitter userId
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SubmitUserId;

    /**
     * @var string Task TypeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskType;

    /**
     * @var boolean Contains result set
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $HasResultSet;

    /**
     * @param string $TaskSource Task Source
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $JobId Orchestration Space jobId
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $RecordId Task Submission Record Id
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $SonRecordId Subtask record id
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $InstanceId Task instance Id
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskId For orchestration space, the task id; for development space, the script id
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $RemotePath Script COS address
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ScriptContent Trial run content
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreateTime Task submission time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $StartTime Task start time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Duration Running duration (seconds)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Status Trial run status
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskName For orchestration space, the task name; for development space, the script name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $SubmitUserName Trial run submitter
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $SubmitUserId Trial run submitter userId
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskType Task TypeNote: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $HasResultSet Contains result set
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("TaskSource",$param) and $param["TaskSource"] !== null) {
            $this->TaskSource = $param["TaskSource"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("SonRecordId",$param) and $param["SonRecordId"] !== null) {
            $this->SonRecordId = $param["SonRecordId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("RemotePath",$param) and $param["RemotePath"] !== null) {
            $this->RemotePath = $param["RemotePath"];
        }

        if (array_key_exists("ScriptContent",$param) and $param["ScriptContent"] !== null) {
            $this->ScriptContent = $param["ScriptContent"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("SubmitUserName",$param) and $param["SubmitUserName"] !== null) {
            $this->SubmitUserName = $param["SubmitUserName"];
        }

        if (array_key_exists("SubmitUserId",$param) and $param["SubmitUserId"] !== null) {
            $this->SubmitUserId = $param["SubmitUserId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("HasResultSet",$param) and $param["HasResultSet"] !== null) {
            $this->HasResultSet = $param["HasResultSet"];
        }
    }
}
