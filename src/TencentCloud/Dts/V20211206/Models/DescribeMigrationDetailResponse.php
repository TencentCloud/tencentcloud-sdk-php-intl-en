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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMigrationDetail response structure.
 *
 * @method string getJobId() Obtain Data migration task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJobId(string $JobId) Set Data migration task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getJobName() Obtain Data migration task name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJobName(string $JobName) Set Data migration task name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Task creation (submission) time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Task creation (submission) time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Task update time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Task update time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStartTime() Obtain Task start time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Task start time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain Task end time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set Task end time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBriefMsg() Obtain Migration task error message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBriefMsg(string $BriefMsg) Set Migration task error message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Task status. Valid values: `created`(Created), `checking` (Checking), `checkPass` (Check passed), `checkNotPass` (Check not passed), `readyRun` (Ready for running), `running` (Running), `readyComplete` (Preparation completed), `success` (Successful), `failed` (Failed), `stopping` (Stopping), `completing` (Completing), `pausing` (Pausing), `manualPaused` (Paused). Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Task status. Valid values: `created`(Created), `checking` (Checking), `checkPass` (Check passed), `checkNotPass` (Check not passed), `readyRun` (Ready for running), `running` (Running), `readyComplete` (Preparation completed), `success` (Successful), `failed` (Failed), `stopping` (Stopping), `completing` (Completing), `pausing` (Pausing), `manualPaused` (Paused). Note: This field may return null, indicating that no valid values can be obtained.
 * @method MigrateAction getAction() Obtain Task operation information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAction(MigrateAction $Action) Set Task operation information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MigrateDetailInfo getStepInfo() Obtain Information of the migration task execution process. The check and migration step information will be displayed in the check and migration stages respectively.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStepInfo(MigrateDetailInfo $StepInfo) Set Information of the migration task execution process. The check and migration step information will be displayed in the check and migration stages respectively.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method DBEndpointInfo getSrcInfo() Obtain Source instance information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSrcInfo(DBEndpointInfo $SrcInfo) Set Source instance information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method DBEndpointInfo getDstInfo() Obtain Target database information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDstInfo(DBEndpointInfo $DstInfo) Set Target database information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method CompareTaskInfo getCompareTask() Obtain Data consistency check result
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCompareTask(CompareTaskInfo $CompareTask) Set Data consistency check result
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tag information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRunMode() Obtain Running mode. Valid values: `immediate`, `timed`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRunMode(string $RunMode) Set Running mode. Valid values: `immediate`, `timed`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpectRunTime() Obtain Expected start time in the format of "2006-01-02 15:04:05", which is required if `RunMode` is `timed`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpectRunTime(string $ExpectRunTime) Set Expected start time in the format of "2006-01-02 15:04:05", which is required if `RunMode` is `timed`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MigrateOption getMigrateOption() Obtain Migration options, which describe how the task performs migration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMigrateOption(MigrateOption $MigrateOption) Set Migration options, which describe how the task performs migration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method CheckStepInfo getCheckStepInfo() Obtain Check task running details
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCheckStepInfo(CheckStepInfo $CheckStepInfo) Set Check task running details
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TradeInfo getTradeInfo() Obtain Billing information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTradeInfo(TradeInfo $TradeInfo) Set Billing information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getErrorInfo() Obtain Task error information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrorInfo(array $ErrorInfo) Set Task error information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDumperResumeCtrl() Obtain Whether the task can be reentered in the full export stage. Valid values: `yes`, `no`. `yes`: The current task can be reentered. `no`: The current task is in the full export stage which cannot be reentered. If the value of this parameter is `no`, the checkpoint restart is not supported when the task is restarted in the export stage.
 * @method void setDumperResumeCtrl(string $DumperResumeCtrl) Set Whether the task can be reentered in the full export stage. Valid values: `yes`, `no`. `yes`: The current task can be reentered. `no`: The current task is in the full export stage which cannot be reentered. If the value of this parameter is `no`, the checkpoint restart is not supported when the task is restarted in the export stage.
 * @method RateLimitOption getRateLimitOption() Obtain Task throttling information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRateLimitOption(RateLimitOption $RateLimitOption) Set Task throttling information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeMigrationDetailResponse extends AbstractModel
{
    /**
     * @var string Data migration task ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JobId;

    /**
     * @var string Data migration task name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JobName;

    /**
     * @var string Task creation (submission) time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Task update time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string Task start time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var string Task end time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var string Migration task error message
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BriefMsg;

    /**
     * @var string Task status. Valid values: `created`(Created), `checking` (Checking), `checkPass` (Check passed), `checkNotPass` (Check not passed), `readyRun` (Ready for running), `running` (Running), `readyComplete` (Preparation completed), `success` (Successful), `failed` (Failed), `stopping` (Stopping), `completing` (Completing), `pausing` (Pausing), `manualPaused` (Paused). Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var MigrateAction Task operation information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Action;

    /**
     * @var MigrateDetailInfo Information of the migration task execution process. The check and migration step information will be displayed in the check and migration stages respectively.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StepInfo;

    /**
     * @var DBEndpointInfo Source instance information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SrcInfo;

    /**
     * @var DBEndpointInfo Target database information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DstInfo;

    /**
     * @var CompareTaskInfo Data consistency check result
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CompareTask;

    /**
     * @var array Tag information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var string Running mode. Valid values: `immediate`, `timed`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RunMode;

    /**
     * @var string Expected start time in the format of "2006-01-02 15:04:05", which is required if `RunMode` is `timed`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpectRunTime;

    /**
     * @var MigrateOption Migration options, which describe how the task performs migration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MigrateOption;

    /**
     * @var CheckStepInfo Check task running details
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CheckStepInfo;

    /**
     * @var TradeInfo Billing information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TradeInfo;

    /**
     * @var array Task error information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorInfo;

    /**
     * @var string Whether the task can be reentered in the full export stage. Valid values: `yes`, `no`. `yes`: The current task can be reentered. `no`: The current task is in the full export stage which cannot be reentered. If the value of this parameter is `no`, the checkpoint restart is not supported when the task is restarted in the export stage.
     */
    public $DumperResumeCtrl;

    /**
     * @var RateLimitOption Task throttling information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RateLimitOption;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $JobId Data migration task ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $JobName Data migration task name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Task creation (submission) time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Task update time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StartTime Task start time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime Task end time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BriefMsg Migration task error message
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Task status. Valid values: `created`(Created), `checking` (Checking), `checkPass` (Check passed), `checkNotPass` (Check not passed), `readyRun` (Ready for running), `running` (Running), `readyComplete` (Preparation completed), `success` (Successful), `failed` (Failed), `stopping` (Stopping), `completing` (Completing), `pausing` (Pausing), `manualPaused` (Paused). Note: This field may return null, indicating that no valid values can be obtained.
     * @param MigrateAction $Action Task operation information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MigrateDetailInfo $StepInfo Information of the migration task execution process. The check and migration step information will be displayed in the check and migration stages respectively.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param DBEndpointInfo $SrcInfo Source instance information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param DBEndpointInfo $DstInfo Target database information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param CompareTaskInfo $CompareTask Data consistency check result
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Tag information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RunMode Running mode. Valid values: `immediate`, `timed`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpectRunTime Expected start time in the format of "2006-01-02 15:04:05", which is required if `RunMode` is `timed`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MigrateOption $MigrateOption Migration options, which describe how the task performs migration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param CheckStepInfo $CheckStepInfo Check task running details
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TradeInfo $TradeInfo Billing information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ErrorInfo Task error information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DumperResumeCtrl Whether the task can be reentered in the full export stage. Valid values: `yes`, `no`. `yes`: The current task can be reentered. `no`: The current task is in the full export stage which cannot be reentered. If the value of this parameter is `no`, the checkpoint restart is not supported when the task is restarted in the export stage.
     * @param RateLimitOption $RateLimitOption Task throttling information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
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

        if (array_key_exists("BriefMsg",$param) and $param["BriefMsg"] !== null) {
            $this->BriefMsg = $param["BriefMsg"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = new MigrateAction();
            $this->Action->deserialize($param["Action"]);
        }

        if (array_key_exists("StepInfo",$param) and $param["StepInfo"] !== null) {
            $this->StepInfo = new MigrateDetailInfo();
            $this->StepInfo->deserialize($param["StepInfo"]);
        }

        if (array_key_exists("SrcInfo",$param) and $param["SrcInfo"] !== null) {
            $this->SrcInfo = new DBEndpointInfo();
            $this->SrcInfo->deserialize($param["SrcInfo"]);
        }

        if (array_key_exists("DstInfo",$param) and $param["DstInfo"] !== null) {
            $this->DstInfo = new DBEndpointInfo();
            $this->DstInfo->deserialize($param["DstInfo"]);
        }

        if (array_key_exists("CompareTask",$param) and $param["CompareTask"] !== null) {
            $this->CompareTask = new CompareTaskInfo();
            $this->CompareTask->deserialize($param["CompareTask"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagItem();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("RunMode",$param) and $param["RunMode"] !== null) {
            $this->RunMode = $param["RunMode"];
        }

        if (array_key_exists("ExpectRunTime",$param) and $param["ExpectRunTime"] !== null) {
            $this->ExpectRunTime = $param["ExpectRunTime"];
        }

        if (array_key_exists("MigrateOption",$param) and $param["MigrateOption"] !== null) {
            $this->MigrateOption = new MigrateOption();
            $this->MigrateOption->deserialize($param["MigrateOption"]);
        }

        if (array_key_exists("CheckStepInfo",$param) and $param["CheckStepInfo"] !== null) {
            $this->CheckStepInfo = new CheckStepInfo();
            $this->CheckStepInfo->deserialize($param["CheckStepInfo"]);
        }

        if (array_key_exists("TradeInfo",$param) and $param["TradeInfo"] !== null) {
            $this->TradeInfo = new TradeInfo();
            $this->TradeInfo->deserialize($param["TradeInfo"]);
        }

        if (array_key_exists("ErrorInfo",$param) and $param["ErrorInfo"] !== null) {
            $this->ErrorInfo = [];
            foreach ($param["ErrorInfo"] as $key => $value){
                $obj = new ErrorInfoItem();
                $obj->deserialize($value);
                array_push($this->ErrorInfo, $obj);
            }
        }

        if (array_key_exists("DumperResumeCtrl",$param) and $param["DumperResumeCtrl"] !== null) {
            $this->DumperResumeCtrl = $param["DumperResumeCtrl"];
        }

        if (array_key_exists("RateLimitOption",$param) and $param["RateLimitOption"] !== null) {
            $this->RateLimitOption = new RateLimitOption();
            $this->RateLimitOption->deserialize($param["RateLimitOption"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
