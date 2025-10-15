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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describes the subtask of a business submission JOB.
 *
 * @method string getJobId() Obtain Job ID of the data exploration.

 * @method void setJobId(string $JobId) Set Job ID of the data exploration.

 * @method string getJobExecutionId() Obtain Query job ID.

 * @method void setJobExecutionId(string $JobExecutionId) Set Query job ID.

 * @method string getJobExecutionName() Obtain Specifies the subquery name.

 * @method void setJobExecutionName(string $JobExecutionName) Set Specifies the subquery name.

 * @method string getScriptContent() Obtain Specifies the subquery sql content.

 * @method void setScriptContent(string $ScriptContent) Set Specifies the subquery sql content.

 * @method string getStatus() Obtain Subquery status.

 * @method void setStatus(string $Status) Set Subquery status.

 * @method string getCreateTime() Obtain Creation time.

 * @method void setCreateTime(string $CreateTime) Set Creation time.

 * @method string getExecuteStageInfo() Obtain Execution phase.

 * @method void setExecuteStageInfo(string $ExecuteStageInfo) Set Execution phase.

 * @method string getLogFilePath() Obtain Log path

 * @method void setLogFilePath(string $LogFilePath) Set Log path

 * @method string getResultFilePath() Obtain Result path for download.

 * @method void setResultFilePath(string $ResultFilePath) Set Result path for download.

 * @method string getResultPreviewFilePath() Obtain Preview result path.

 * @method void setResultPreviewFilePath(string $ResultPreviewFilePath) Set Preview result path.

 * @method integer getResultTotalCount() Obtain Total number of lines in the task execution result.

 * @method void setResultTotalCount(integer $ResultTotalCount) Set Total number of lines in the task execution result.

 * @method string getUpdateTime() Obtain Update time.

 * @method void setUpdateTime(string $UpdateTime) Set Update time.

 * @method string getEndTime() Obtain End time.


 * @method void setEndTime(string $EndTime) Set End time.


 * @method integer getTimeCost() Obtain Duration. specifies the time taken.

 * @method void setTimeCost(integer $TimeCost) Set Duration. specifies the time taken.

 * @method array getContextScriptContent() Obtain SQL content in the context.

 * @method void setContextScriptContent(array $ContextScriptContent) Set SQL content in the context.

 * @method integer getResultPreviewCount() Obtain Specifies the preview row count for task execution results.

 * @method void setResultPreviewCount(integer $ResultPreviewCount) Set Specifies the preview row count for task execution results.

 * @method integer getResultEffectCount() Obtain Specifies the number of affected rows in task execution.

 * @method void setResultEffectCount(integer $ResultEffectCount) Set Specifies the number of affected rows in task execution.

 * @method boolean getCollectingTotalResult() Obtain Whether the full result is being collected: default false. true indicates the full result is being collected, for the frontend to determine whether to continue to poll.

 * @method void setCollectingTotalResult(boolean $CollectingTotalResult) Set Whether the full result is being collected: default false. true indicates the full result is being collected, for the frontend to determine whether to continue to poll.

 * @method boolean getScriptContentTruncate() Obtain Specifies whether to truncate the script content.

 * @method void setScriptContentTruncate(boolean $ScriptContentTruncate) Set Specifies whether to truncate the script content.
 */
class JobExecutionDto extends AbstractModel
{
    /**
     * @var string Job ID of the data exploration.

     */
    public $JobId;

    /**
     * @var string Query job ID.

     */
    public $JobExecutionId;

    /**
     * @var string Specifies the subquery name.

     */
    public $JobExecutionName;

    /**
     * @var string Specifies the subquery sql content.

     */
    public $ScriptContent;

    /**
     * @var string Subquery status.

     */
    public $Status;

    /**
     * @var string Creation time.

     */
    public $CreateTime;

    /**
     * @var string Execution phase.

     */
    public $ExecuteStageInfo;

    /**
     * @var string Log path

     */
    public $LogFilePath;

    /**
     * @var string Result path for download.

     */
    public $ResultFilePath;

    /**
     * @var string Preview result path.

     */
    public $ResultPreviewFilePath;

    /**
     * @var integer Total number of lines in the task execution result.

     */
    public $ResultTotalCount;

    /**
     * @var string Update time.

     */
    public $UpdateTime;

    /**
     * @var string End time.


     */
    public $EndTime;

    /**
     * @var integer Duration. specifies the time taken.

     */
    public $TimeCost;

    /**
     * @var array SQL content in the context.

     */
    public $ContextScriptContent;

    /**
     * @var integer Specifies the preview row count for task execution results.

     */
    public $ResultPreviewCount;

    /**
     * @var integer Specifies the number of affected rows in task execution.

     */
    public $ResultEffectCount;

    /**
     * @var boolean Whether the full result is being collected: default false. true indicates the full result is being collected, for the frontend to determine whether to continue to poll.

     */
    public $CollectingTotalResult;

    /**
     * @var boolean Specifies whether to truncate the script content.

     */
    public $ScriptContentTruncate;

    /**
     * @param string $JobId Job ID of the data exploration.

     * @param string $JobExecutionId Query job ID.

     * @param string $JobExecutionName Specifies the subquery name.

     * @param string $ScriptContent Specifies the subquery sql content.

     * @param string $Status Subquery status.

     * @param string $CreateTime Creation time.

     * @param string $ExecuteStageInfo Execution phase.

     * @param string $LogFilePath Log path

     * @param string $ResultFilePath Result path for download.

     * @param string $ResultPreviewFilePath Preview result path.

     * @param integer $ResultTotalCount Total number of lines in the task execution result.

     * @param string $UpdateTime Update time.

     * @param string $EndTime End time.


     * @param integer $TimeCost Duration. specifies the time taken.

     * @param array $ContextScriptContent SQL content in the context.

     * @param integer $ResultPreviewCount Specifies the preview row count for task execution results.

     * @param integer $ResultEffectCount Specifies the number of affected rows in task execution.

     * @param boolean $CollectingTotalResult Whether the full result is being collected: default false. true indicates the full result is being collected, for the frontend to determine whether to continue to poll.

     * @param boolean $ScriptContentTruncate Specifies whether to truncate the script content.
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobExecutionId",$param) and $param["JobExecutionId"] !== null) {
            $this->JobExecutionId = $param["JobExecutionId"];
        }

        if (array_key_exists("JobExecutionName",$param) and $param["JobExecutionName"] !== null) {
            $this->JobExecutionName = $param["JobExecutionName"];
        }

        if (array_key_exists("ScriptContent",$param) and $param["ScriptContent"] !== null) {
            $this->ScriptContent = $param["ScriptContent"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExecuteStageInfo",$param) and $param["ExecuteStageInfo"] !== null) {
            $this->ExecuteStageInfo = $param["ExecuteStageInfo"];
        }

        if (array_key_exists("LogFilePath",$param) and $param["LogFilePath"] !== null) {
            $this->LogFilePath = $param["LogFilePath"];
        }

        if (array_key_exists("ResultFilePath",$param) and $param["ResultFilePath"] !== null) {
            $this->ResultFilePath = $param["ResultFilePath"];
        }

        if (array_key_exists("ResultPreviewFilePath",$param) and $param["ResultPreviewFilePath"] !== null) {
            $this->ResultPreviewFilePath = $param["ResultPreviewFilePath"];
        }

        if (array_key_exists("ResultTotalCount",$param) and $param["ResultTotalCount"] !== null) {
            $this->ResultTotalCount = $param["ResultTotalCount"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TimeCost",$param) and $param["TimeCost"] !== null) {
            $this->TimeCost = $param["TimeCost"];
        }

        if (array_key_exists("ContextScriptContent",$param) and $param["ContextScriptContent"] !== null) {
            $this->ContextScriptContent = $param["ContextScriptContent"];
        }

        if (array_key_exists("ResultPreviewCount",$param) and $param["ResultPreviewCount"] !== null) {
            $this->ResultPreviewCount = $param["ResultPreviewCount"];
        }

        if (array_key_exists("ResultEffectCount",$param) and $param["ResultEffectCount"] !== null) {
            $this->ResultEffectCount = $param["ResultEffectCount"];
        }

        if (array_key_exists("CollectingTotalResult",$param) and $param["CollectingTotalResult"] !== null) {
            $this->CollectingTotalResult = $param["CollectingTotalResult"];
        }

        if (array_key_exists("ScriptContentTruncate",$param) and $param["ScriptContentTruncate"] !== null) {
            $this->ScriptContentTruncate = $param["ScriptContentTruncate"];
        }
    }
}
