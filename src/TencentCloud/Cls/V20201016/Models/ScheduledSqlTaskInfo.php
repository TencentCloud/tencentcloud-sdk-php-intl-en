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
 * @method string getTaskId() Obtain ScheduledSql task id
 * @method void setTaskId(string $TaskId) Set ScheduledSql task id
 * @method string getName() Obtain ScheduledSql task name
 * @method void setName(string $Name) Set ScheduledSql task name
 * @method string getSrcTopicId() Obtain Source Log Topic ID
 * @method void setSrcTopicId(string $SrcTopicId) Set Source Log Topic ID
 * @method string getSrcTopicName() Obtain Source Log Topic Name
 * @method void setSrcTopicName(string $SrcTopicName) Set Source Log Topic Name
 * @method ScheduledSqlResouceInfo getDstResource() Obtain Scheduled SQL analysis of target topic
 * @method void setDstResource(ScheduledSqlResouceInfo $DstResource) Set Scheduled SQL analysis of target topic
 * @method string getCreateTime() Obtain Task creation time. Format: yyyy-MM-dd HH:mm:ss
 * @method void setCreateTime(string $CreateTime) Set Task creation time. Format: yyyy-MM-dd HH:mm:ss
 * @method string getUpdateTime() Obtain Task update time. Format: yyyy-MM-dd HH:mm:ss
 * @method void setUpdateTime(string $UpdateTime) Set Task update time. Format: yyyy-MM-dd HH:mm:ss
 * @method integer getStatus() Obtain Task status: 1: Running 2: Stop 3: Exception - Source log topic not found 4: Exception - target topic not found5: Access permission issue 6: Internal failure 7: Other faults
 * @method void setStatus(integer $Status) Set Task status: 1: Running 2: Stop 3: Exception - Source log topic not found 4: Exception - target topic not found5: Access permission issue 6: Internal failure 7: Other faults
 * @method integer getEnableFlag() Obtain Task status: 1 Enabled, 2 Disabled
 * @method void setEnableFlag(integer $EnableFlag) Set Task status: 1 Enabled, 2 Disabled
 * @method string getScheduledSqlContent() Obtain Queries statements
 * @method void setScheduledSqlContent(string $ScheduledSqlContent) Set Queries statements
 * @method string getProcessStartTime() Obtain Schedule start time. Format: yyyy-MM-dd HH:mm:ss
 * @method void setProcessStartTime(string $ProcessStartTime) Set Schedule start time. Format: yyyy-MM-dd HH:mm:ss
 * @method integer getProcessType() Obtain Schedule Type: 1 Continuous Running 2 Specified Time Range
 * @method void setProcessType(integer $ProcessType) Set Schedule Type: 1 Continuous Running 2 Specified Time Range
 * @method string getProcessEndTime() Obtain Schedule End Time, format: yyyy-MM-dd HH:mm:ss, required when process_type=2
 * @method void setProcessEndTime(string $ProcessEndTime) Set Schedule End Time, format: yyyy-MM-dd HH:mm:ss, required when process_type=2
 * @method integer getProcessPeriod() Obtain Scheduling cycle (minutes), 1-1440 minutes
 * @method void setProcessPeriod(integer $ProcessPeriod) Set Scheduling cycle (minutes), 1-1440 minutes
 * @method string getProcessTimeWindow() Obtain Query Time Window. @m-15m, @m, meaning the last 15 minutes
 * @method void setProcessTimeWindow(string $ProcessTimeWindow) Set Query Time Window. @m-15m, @m, meaning the last 15 minutes
 * @method integer getProcessDelay() Obtain Execution delay (seconds), 0-120 seconds, default 60
 * @method void setProcessDelay(integer $ProcessDelay) Set Execution delay (seconds), 0-120 seconds, default 60
 * @method string getSrcTopicRegion() Obtain Regional information of the source topicId. Supported regions are listed in the region list document (https://www.tencentcloud.com/document/api/614/56474?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8).
 * @method void setSrcTopicRegion(string $SrcTopicRegion) Set Regional information of the source topicId. Supported regions are listed in the region list document (https://www.tencentcloud.com/document/api/614/56474?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8).
 * @method integer getSyntaxRule() Obtain Syntax rules. 0: Lucene syntax; 1: CQL syntax.
 * @method void setSyntaxRule(integer $SyntaxRule) Set Syntax rules. 0: Lucene syntax; 1: CQL syntax.
 * @method integer getHasServicesLog() Obtain Whether to enable service log shipping. Valid values: 1: disable; 2: enable.
 * @method void setHasServicesLog(integer $HasServicesLog) Set Whether to enable service log shipping. Valid values: 1: disable; 2: enable.
 * @method integer getFullQuery() Obtain Full-text search tag. 1: Off, 2: On.
 * @method void setFullQuery(integer $FullQuery) Set Full-text search tag. 1: Off, 2: On.
 */
class ScheduledSqlTaskInfo extends AbstractModel
{
    /**
     * @var string ScheduledSql task id
     */
    public $TaskId;

    /**
     * @var string ScheduledSql task name
     */
    public $Name;

    /**
     * @var string Source Log Topic ID
     */
    public $SrcTopicId;

    /**
     * @var string Source Log Topic Name
     */
    public $SrcTopicName;

    /**
     * @var ScheduledSqlResouceInfo Scheduled SQL analysis of target topic
     */
    public $DstResource;

    /**
     * @var string Task creation time. Format: yyyy-MM-dd HH:mm:ss
     */
    public $CreateTime;

    /**
     * @var string Task update time. Format: yyyy-MM-dd HH:mm:ss
     */
    public $UpdateTime;

    /**
     * @var integer Task status: 1: Running 2: Stop 3: Exception - Source log topic not found 4: Exception - target topic not found5: Access permission issue 6: Internal failure 7: Other faults
     */
    public $Status;

    /**
     * @var integer Task status: 1 Enabled, 2 Disabled
     */
    public $EnableFlag;

    /**
     * @var string Queries statements
     */
    public $ScheduledSqlContent;

    /**
     * @var string Schedule start time. Format: yyyy-MM-dd HH:mm:ss
     */
    public $ProcessStartTime;

    /**
     * @var integer Schedule Type: 1 Continuous Running 2 Specified Time Range
     */
    public $ProcessType;

    /**
     * @var string Schedule End Time, format: yyyy-MM-dd HH:mm:ss, required when process_type=2
     */
    public $ProcessEndTime;

    /**
     * @var integer Scheduling cycle (minutes), 1-1440 minutes
     */
    public $ProcessPeriod;

    /**
     * @var string Query Time Window. @m-15m, @m, meaning the last 15 minutes
     */
    public $ProcessTimeWindow;

    /**
     * @var integer Execution delay (seconds), 0-120 seconds, default 60
     */
    public $ProcessDelay;

    /**
     * @var string Regional information of the source topicId. Supported regions are listed in the region list document (https://www.tencentcloud.com/document/api/614/56474?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8).
     */
    public $SrcTopicRegion;

    /**
     * @var integer Syntax rules. 0: Lucene syntax; 1: CQL syntax.
     */
    public $SyntaxRule;

    /**
     * @var integer Whether to enable service log shipping. Valid values: 1: disable; 2: enable.
     */
    public $HasServicesLog;

    /**
     * @var integer Full-text search tag. 1: Off, 2: On.
     */
    public $FullQuery;

    /**
     * @param string $TaskId ScheduledSql task id
     * @param string $Name ScheduledSql task name
     * @param string $SrcTopicId Source Log Topic ID
     * @param string $SrcTopicName Source Log Topic Name
     * @param ScheduledSqlResouceInfo $DstResource Scheduled SQL analysis of target topic
     * @param string $CreateTime Task creation time. Format: yyyy-MM-dd HH:mm:ss
     * @param string $UpdateTime Task update time. Format: yyyy-MM-dd HH:mm:ss
     * @param integer $Status Task status: 1: Running 2: Stop 3: Exception - Source log topic not found 4: Exception - target topic not found5: Access permission issue 6: Internal failure 7: Other faults
     * @param integer $EnableFlag Task status: 1 Enabled, 2 Disabled
     * @param string $ScheduledSqlContent Queries statements
     * @param string $ProcessStartTime Schedule start time. Format: yyyy-MM-dd HH:mm:ss
     * @param integer $ProcessType Schedule Type: 1 Continuous Running 2 Specified Time Range
     * @param string $ProcessEndTime Schedule End Time, format: yyyy-MM-dd HH:mm:ss, required when process_type=2
     * @param integer $ProcessPeriod Scheduling cycle (minutes), 1-1440 minutes
     * @param string $ProcessTimeWindow Query Time Window. @m-15m, @m, meaning the last 15 minutes
     * @param integer $ProcessDelay Execution delay (seconds), 0-120 seconds, default 60
     * @param string $SrcTopicRegion Regional information of the source topicId. Supported regions are listed in the region list document (https://www.tencentcloud.com/document/api/614/56474?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8).
     * @param integer $SyntaxRule Syntax rules. 0: Lucene syntax; 1: CQL syntax.
     * @param integer $HasServicesLog Whether to enable service log shipping. Valid values: 1: disable; 2: enable.
     * @param integer $FullQuery Full-text search tag. 1: Off, 2: On.
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
    }
}
