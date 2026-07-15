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
 * ScheduledSql task details
 *
 * @method string getTaskId() Obtain <p>ScheduledSql task id</p>
 * @method void setTaskId(string $TaskId) Set <p>ScheduledSql task id</p>
 * @method string getName() Obtain <p>ScheduledSql task name</p>
 * @method void setName(string $Name) Set <p>ScheduledSql task name</p>
 * @method string getSrcTopicId() Obtain <p>Source log topic id.</p>
 * @method void setSrcTopicId(string $SrcTopicId) Set <p>Source log topic id.</p>
 * @method string getSrcTopicName() Obtain <p>source log topic name</p>
 * @method void setSrcTopicName(string $SrcTopicName) Set <p>source log topic name</p>
 * @method ScheduledSqlResouceInfo getDstResource() Obtain <p>Scheduled SQL analysis target topic</p>
 * @method void setDstResource(ScheduledSqlResouceInfo $DstResource) Set <p>Scheduled SQL analysis target topic</p>
 * @method string getCreateTime() Obtain <p>Task creation time. Format: yyyy-MM-dd HH:mm:ss</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Task creation time. Format: yyyy-MM-dd HH:mm:ss</p>
 * @method string getUpdateTime() Obtain <p>Task update time. Format: yyyy-MM-dd HH:mm:ss</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Task update time. Format: yyyy-MM-dd HH:mm:ss</p>
 * @method integer getStatus() Obtain <p>Task status, 1: Running 2: Stopped 3: Exception - Source log topic not found 4: Exception - Target topic not found</p><p>5: Access permission issue 6: Internal fault 7: Other faults</p>
 * @method void setStatus(integer $Status) Set <p>Task status, 1: Running 2: Stopped 3: Exception - Source log topic not found 4: Exception - Target topic not found</p><p>5: Access permission issue 6: Internal fault 7: Other faults</p>
 * @method integer getEnableFlag() Obtain <p>Task status: 1 Enabled, 2 Disabled</p>
 * @method void setEnableFlag(integer $EnableFlag) Set <p>Task status: 1 Enabled, 2 Disabled</p>
 * @method string getScheduledSqlContent() Obtain <p>Query statement</p>
 * @method void setScheduledSqlContent(string $ScheduledSqlContent) Set <p>Query statement</p>
 * @method string getProcessStartTime() Obtain <p>Schedule start time. Format: yyyy-MM-dd HH:mm:ss</p>
 * @method void setProcessStartTime(string $ProcessStartTime) Set <p>Schedule start time. Format: yyyy-MM-dd HH:mm:ss</p>
 * @method integer getProcessType() Obtain <p>Schedule Type: 1 Continuous Running 2 Specified Time Range</p>
 * @method void setProcessType(integer $ProcessType) Set <p>Schedule Type: 1 Continuous Running 2 Specified Time Range</p>
 * @method string getProcessEndTime() Obtain <p>Schedule End Time, format: yyyy-MM-dd HH:mm:ss, required when process_type=2</p>
 * @method void setProcessEndTime(string $ProcessEndTime) Set <p>Schedule End Time, format: yyyy-MM-dd HH:mm:ss, required when process_type=2</p>
 * @method integer getProcessPeriod() Obtain <p>Scheduling Interval (Minutes), 1-1440 minutes</p>
 * @method void setProcessPeriod(integer $ProcessPeriod) Set <p>Scheduling Interval (Minutes), 1-1440 minutes</p>
 * @method string getProcessTimeWindow() Obtain <p>Query Time Window. @m-15m, @m, meaning the last 15 minutes</p>
 * @method void setProcessTimeWindow(string $ProcessTimeWindow) Set <p>Query Time Window. @m-15m, @m, meaning the last 15 minutes</p>
 * @method integer getProcessDelay() Obtain <p>Execution delay (seconds), 0-120 seconds, default 60 seconds</p>
 * @method void setProcessDelay(integer $ProcessDelay) Set <p>Execution delay (seconds), 0-120 seconds, default 60 seconds</p>
 * @method string getSrcTopicRegion() Obtain <p>Regional information of the source topicId. For supported regions, see the <a href="https://www.tencentcloud.com/document/api/614/56474?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">region list</a> document.</p>
 * @method void setSrcTopicRegion(string $SrcTopicRegion) Set <p>Regional information of the source topicId. For supported regions, see the <a href="https://www.tencentcloud.com/document/api/614/56474?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">region list</a> document.</p>
 * @method integer getSyntaxRule() Obtain <p>Syntax rules. 0: Lucene syntax, 1: CQL syntax</p>
 * @method void setSyntaxRule(integer $SyntaxRule) Set <p>Syntax rules. 0: Lucene syntax, 1: CQL syntax</p>
 * @method integer getHasServicesLog() Obtain <p>Whether the delivery service log is enabled. 1: Turn off, 2: Turn on.</p>
 * @method void setHasServicesLog(integer $HasServicesLog) Set <p>Whether the delivery service log is enabled. 1: Turn off, 2: Turn on.</p>
 * @method integer getFullQuery() Obtain <p>Full-text search tag. 1: Off, 2: On.</p>
 * @method void setFullQuery(integer $FullQuery) Set <p>Full-text search tag. 1: Off, 2: On.</p>
 * @method integer getProcessPeriodUnit() Obtain <p>Scheduling cycle time unit</p><p>Value ranges from 1 to 2</p><p>Default value: 1</p><p>Default value 1 (minute), other value 2 (second)</p>
 * @method void setProcessPeriodUnit(integer $ProcessPeriodUnit) Set <p>Scheduling cycle time unit</p><p>Value ranges from 1 to 2</p><p>Default value: 1</p><p>Default value 1 (minute), other value 2 (second)</p>
 */
class ScheduledSqlTaskInfo extends AbstractModel
{
    /**
     * @var string <p>ScheduledSql task id</p>
     */
    public $TaskId;

    /**
     * @var string <p>ScheduledSql task name</p>
     */
    public $Name;

    /**
     * @var string <p>Source log topic id.</p>
     */
    public $SrcTopicId;

    /**
     * @var string <p>source log topic name</p>
     */
    public $SrcTopicName;

    /**
     * @var ScheduledSqlResouceInfo <p>Scheduled SQL analysis target topic</p>
     */
    public $DstResource;

    /**
     * @var string <p>Task creation time. Format: yyyy-MM-dd HH:mm:ss</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Task update time. Format: yyyy-MM-dd HH:mm:ss</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>Task status, 1: Running 2: Stopped 3: Exception - Source log topic not found 4: Exception - Target topic not found</p><p>5: Access permission issue 6: Internal fault 7: Other faults</p>
     */
    public $Status;

    /**
     * @var integer <p>Task status: 1 Enabled, 2 Disabled</p>
     */
    public $EnableFlag;

    /**
     * @var string <p>Query statement</p>
     */
    public $ScheduledSqlContent;

    /**
     * @var string <p>Schedule start time. Format: yyyy-MM-dd HH:mm:ss</p>
     */
    public $ProcessStartTime;

    /**
     * @var integer <p>Schedule Type: 1 Continuous Running 2 Specified Time Range</p>
     */
    public $ProcessType;

    /**
     * @var string <p>Schedule End Time, format: yyyy-MM-dd HH:mm:ss, required when process_type=2</p>
     */
    public $ProcessEndTime;

    /**
     * @var integer <p>Scheduling Interval (Minutes), 1-1440 minutes</p>
     */
    public $ProcessPeriod;

    /**
     * @var string <p>Query Time Window. @m-15m, @m, meaning the last 15 minutes</p>
     */
    public $ProcessTimeWindow;

    /**
     * @var integer <p>Execution delay (seconds), 0-120 seconds, default 60 seconds</p>
     */
    public $ProcessDelay;

    /**
     * @var string <p>Regional information of the source topicId. For supported regions, see the <a href="https://www.tencentcloud.com/document/api/614/56474?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">region list</a> document.</p>
     */
    public $SrcTopicRegion;

    /**
     * @var integer <p>Syntax rules. 0: Lucene syntax, 1: CQL syntax</p>
     */
    public $SyntaxRule;

    /**
     * @var integer <p>Whether the delivery service log is enabled. 1: Turn off, 2: Turn on.</p>
     */
    public $HasServicesLog;

    /**
     * @var integer <p>Full-text search tag. 1: Off, 2: On.</p>
     */
    public $FullQuery;

    /**
     * @var integer <p>Scheduling cycle time unit</p><p>Value ranges from 1 to 2</p><p>Default value: 1</p><p>Default value 1 (minute), other value 2 (second)</p>
     */
    public $ProcessPeriodUnit;

    /**
     * @param string $TaskId <p>ScheduledSql task id</p>
     * @param string $Name <p>ScheduledSql task name</p>
     * @param string $SrcTopicId <p>Source log topic id.</p>
     * @param string $SrcTopicName <p>source log topic name</p>
     * @param ScheduledSqlResouceInfo $DstResource <p>Scheduled SQL analysis target topic</p>
     * @param string $CreateTime <p>Task creation time. Format: yyyy-MM-dd HH:mm:ss</p>
     * @param string $UpdateTime <p>Task update time. Format: yyyy-MM-dd HH:mm:ss</p>
     * @param integer $Status <p>Task status, 1: Running 2: Stopped 3: Exception - Source log topic not found 4: Exception - Target topic not found</p><p>5: Access permission issue 6: Internal fault 7: Other faults</p>
     * @param integer $EnableFlag <p>Task status: 1 Enabled, 2 Disabled</p>
     * @param string $ScheduledSqlContent <p>Query statement</p>
     * @param string $ProcessStartTime <p>Schedule start time. Format: yyyy-MM-dd HH:mm:ss</p>
     * @param integer $ProcessType <p>Schedule Type: 1 Continuous Running 2 Specified Time Range</p>
     * @param string $ProcessEndTime <p>Schedule End Time, format: yyyy-MM-dd HH:mm:ss, required when process_type=2</p>
     * @param integer $ProcessPeriod <p>Scheduling Interval (Minutes), 1-1440 minutes</p>
     * @param string $ProcessTimeWindow <p>Query Time Window. @m-15m, @m, meaning the last 15 minutes</p>
     * @param integer $ProcessDelay <p>Execution delay (seconds), 0-120 seconds, default 60 seconds</p>
     * @param string $SrcTopicRegion <p>Regional information of the source topicId. For supported regions, see the <a href="https://www.tencentcloud.com/document/api/614/56474?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">region list</a> document.</p>
     * @param integer $SyntaxRule <p>Syntax rules. 0: Lucene syntax, 1: CQL syntax</p>
     * @param integer $HasServicesLog <p>Whether the delivery service log is enabled. 1: Turn off, 2: Turn on.</p>
     * @param integer $FullQuery <p>Full-text search tag. 1: Off, 2: On.</p>
     * @param integer $ProcessPeriodUnit <p>Scheduling cycle time unit</p><p>Value ranges from 1 to 2</p><p>Default value: 1</p><p>Default value 1 (minute), other value 2 (second)</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SrcTopicId",$param) and $param["SrcTopicId"] !== null) {
            $this->SrcTopicId = $param["SrcTopicId"];
        }

        if (array_key_exists("SrcTopicName",$param) and $param["SrcTopicName"] !== null) {
            $this->SrcTopicName = $param["SrcTopicName"];
        }

        if (array_key_exists("DstResource",$param) and $param["DstResource"] !== null) {
            $this->DstResource = new ScheduledSqlResouceInfo();
            $this->DstResource->deserialize($param["DstResource"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EnableFlag",$param) and $param["EnableFlag"] !== null) {
            $this->EnableFlag = $param["EnableFlag"];
        }

        if (array_key_exists("ScheduledSqlContent",$param) and $param["ScheduledSqlContent"] !== null) {
            $this->ScheduledSqlContent = $param["ScheduledSqlContent"];
        }

        if (array_key_exists("ProcessStartTime",$param) and $param["ProcessStartTime"] !== null) {
            $this->ProcessStartTime = $param["ProcessStartTime"];
        }

        if (array_key_exists("ProcessType",$param) and $param["ProcessType"] !== null) {
            $this->ProcessType = $param["ProcessType"];
        }

        if (array_key_exists("ProcessEndTime",$param) and $param["ProcessEndTime"] !== null) {
            $this->ProcessEndTime = $param["ProcessEndTime"];
        }

        if (array_key_exists("ProcessPeriod",$param) and $param["ProcessPeriod"] !== null) {
            $this->ProcessPeriod = $param["ProcessPeriod"];
        }

        if (array_key_exists("ProcessTimeWindow",$param) and $param["ProcessTimeWindow"] !== null) {
            $this->ProcessTimeWindow = $param["ProcessTimeWindow"];
        }

        if (array_key_exists("ProcessDelay",$param) and $param["ProcessDelay"] !== null) {
            $this->ProcessDelay = $param["ProcessDelay"];
        }

        if (array_key_exists("SrcTopicRegion",$param) and $param["SrcTopicRegion"] !== null) {
            $this->SrcTopicRegion = $param["SrcTopicRegion"];
        }

        if (array_key_exists("SyntaxRule",$param) and $param["SyntaxRule"] !== null) {
            $this->SyntaxRule = $param["SyntaxRule"];
        }

        if (array_key_exists("HasServicesLog",$param) and $param["HasServicesLog"] !== null) {
            $this->HasServicesLog = $param["HasServicesLog"];
        }

        if (array_key_exists("FullQuery",$param) and $param["FullQuery"] !== null) {
            $this->FullQuery = $param["FullQuery"];
        }

        if (array_key_exists("ProcessPeriodUnit",$param) and $param["ProcessPeriodUnit"] !== null) {
            $this->ProcessPeriodUnit = $param["ProcessPeriodUnit"];
        }
    }
}
