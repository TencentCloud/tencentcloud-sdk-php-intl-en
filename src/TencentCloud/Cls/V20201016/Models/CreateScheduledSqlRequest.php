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
 * CreateScheduledSql request structure.
 *
 * @method string getSrcTopicId() Obtain <p>Source log topic ID - Obtain the log topic ID by <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">searching the log topic list</a>.</p>
 * @method void setSrcTopicId(string $SrcTopicId) Set <p>Source log topic ID - Obtain the log topic ID by <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">searching the log topic list</a>.</p>
 * @method string getName() Obtain <p>Task name, 0-255 characters</p>
 * @method void setName(string $Name) Set <p>Task name, 0-255 characters</p>
 * @method integer getEnableFlag() Obtain <p>Task start status. 1: Enabled, 2: Disabled</p>
 * @method void setEnableFlag(integer $EnableFlag) Set <p>Task start status. 1: Enabled, 2: Disabled</p>
 * @method ScheduledSqlResouceInfo getDstResource() Obtain <p>Target log topic for scheduled SQL analysis</p>
 * @method void setDstResource(ScheduledSqlResouceInfo $DstResource) Set <p>Target log topic for scheduled SQL analysis</p>
 * @method string getScheduledSqlContent() Obtain <p>Query statement</p>
 * @method void setScheduledSqlContent(string $ScheduledSqlContent) Set <p>Query statement</p>
 * @method integer getProcessStartTime() Obtain <p>Schedule start time, Unix timestamp, in milliseconds</p>
 * @method void setProcessStartTime(integer $ProcessStartTime) Set <p>Schedule start time, Unix timestamp, in milliseconds</p>
 * @method integer getProcessType() Obtain <p>Schedule Type: 1 Continuous Running 2 Specified Time Range</p>
 * @method void setProcessType(integer $ProcessType) Set <p>Schedule Type: 1 Continuous Running 2 Specified Time Range</p>
 * @method integer getProcessPeriod() Obtain <p>Scheduling Interval (Minutes), 1-1440 minutes</p>
 * @method void setProcessPeriod(integer $ProcessPeriod) Set <p>Scheduling Interval (Minutes), 1-1440 minutes</p>
 * @method string getProcessTimeWindow() Obtain <p>Time window for a single query. If your target topic is a metric topic, it is recommended that the size of this parameter not exceed 30 minutes, otherwise, metric conversion may fail.</p>
 * @method void setProcessTimeWindow(string $ProcessTimeWindow) Set <p>Time window for a single query. If your target topic is a metric topic, it is recommended that the size of this parameter not exceed 30 minutes, otherwise, metric conversion may fail.</p>
 * @method integer getProcessDelay() Obtain <p>Execution delay (seconds), 0-120 seconds, default 60 seconds</p>
 * @method void setProcessDelay(integer $ProcessDelay) Set <p>Execution delay (seconds), 0-120 seconds, default 60 seconds</p>
 * @method string getSrcTopicRegion() Obtain <p>Regional information of the source topicId. For supported regions, see the <a href="https://www.tencentcloud.com/document/api/614/56474?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">region list</a> document.</p>
 * @method void setSrcTopicRegion(string $SrcTopicRegion) Set <p>Regional information of the source topicId. For supported regions, see the <a href="https://www.tencentcloud.com/document/api/614/56474?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">region list</a> document.</p>
 * @method integer getProcessPeriodUnit() Obtain <p>Scheduling Time Unit</p><p>Value ranges from 1 to 2</p><p>Default value: 1</p><p>The default value is 1 (minute), and the additional value is 2 (second).</p>
 * @method void setProcessPeriodUnit(integer $ProcessPeriodUnit) Set <p>Scheduling Time Unit</p><p>Value ranges from 1 to 2</p><p>Default value: 1</p><p>The default value is 1 (minute), and the additional value is 2 (second).</p>
 * @method integer getProcessEndTime() Obtain <p>Schedule End Time, required when ProcessType=2, Unix timestamp, in milliseconds</p>
 * @method void setProcessEndTime(integer $ProcessEndTime) Set <p>Schedule End Time, required when ProcessType=2, Unix timestamp, in milliseconds</p>
 * @method integer getSyntaxRule() Obtain <p>Query syntax rules. Default value: 0. 0: Lucene syntax, 1: CQL syntax</p>
 * @method void setSyntaxRule(integer $SyntaxRule) Set <p>Query syntax rules. Default value: 0. 0: Lucene syntax, 1: CQL syntax</p>
 * @method integer getHasServicesLog() Obtain <p>Whether to enable delivery service log. 1: Disabled, 2: Enabled.</p>
 * @method void setHasServicesLog(integer $HasServicesLog) Set <p>Whether to enable delivery service log. 1: Disabled, 2: Enabled.</p>
 * @method integer getFullQuery() Obtain <p>Full-text search tag. 1: Off, 2: On. Default: 1</p>
 * @method void setFullQuery(integer $FullQuery) Set <p>Full-text search tag. 1: Off, 2: On. Default: 1</p>
 */
class CreateScheduledSqlRequest extends AbstractModel
{
    /**
     * @var string <p>Source log topic ID - Obtain the log topic ID by <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">searching the log topic list</a>.</p>
     */
    public $SrcTopicId;

    /**
     * @var string <p>Task name, 0-255 characters</p>
     */
    public $Name;

    /**
     * @var integer <p>Task start status. 1: Enabled, 2: Disabled</p>
     */
    public $EnableFlag;

    /**
     * @var ScheduledSqlResouceInfo <p>Target log topic for scheduled SQL analysis</p>
     */
    public $DstResource;

    /**
     * @var string <p>Query statement</p>
     */
    public $ScheduledSqlContent;

    /**
     * @var integer <p>Schedule start time, Unix timestamp, in milliseconds</p>
     */
    public $ProcessStartTime;

    /**
     * @var integer <p>Schedule Type: 1 Continuous Running 2 Specified Time Range</p>
     */
    public $ProcessType;

    /**
     * @var integer <p>Scheduling Interval (Minutes), 1-1440 minutes</p>
     */
    public $ProcessPeriod;

    /**
     * @var string <p>Time window for a single query. If your target topic is a metric topic, it is recommended that the size of this parameter not exceed 30 minutes, otherwise, metric conversion may fail.</p>
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
     * @var integer <p>Scheduling Time Unit</p><p>Value ranges from 1 to 2</p><p>Default value: 1</p><p>The default value is 1 (minute), and the additional value is 2 (second).</p>
     */
    public $ProcessPeriodUnit;

    /**
     * @var integer <p>Schedule End Time, required when ProcessType=2, Unix timestamp, in milliseconds</p>
     */
    public $ProcessEndTime;

    /**
     * @var integer <p>Query syntax rules. Default value: 0. 0: Lucene syntax, 1: CQL syntax</p>
     */
    public $SyntaxRule;

    /**
     * @var integer <p>Whether to enable delivery service log. 1: Disabled, 2: Enabled.</p>
     */
    public $HasServicesLog;

    /**
     * @var integer <p>Full-text search tag. 1: Off, 2: On. Default: 1</p>
     */
    public $FullQuery;

    /**
     * @param string $SrcTopicId <p>Source log topic ID - Obtain the log topic ID by <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">searching the log topic list</a>.</p>
     * @param string $Name <p>Task name, 0-255 characters</p>
     * @param integer $EnableFlag <p>Task start status. 1: Enabled, 2: Disabled</p>
     * @param ScheduledSqlResouceInfo $DstResource <p>Target log topic for scheduled SQL analysis</p>
     * @param string $ScheduledSqlContent <p>Query statement</p>
     * @param integer $ProcessStartTime <p>Schedule start time, Unix timestamp, in milliseconds</p>
     * @param integer $ProcessType <p>Schedule Type: 1 Continuous Running 2 Specified Time Range</p>
     * @param integer $ProcessPeriod <p>Scheduling Interval (Minutes), 1-1440 minutes</p>
     * @param string $ProcessTimeWindow <p>Time window for a single query. If your target topic is a metric topic, it is recommended that the size of this parameter not exceed 30 minutes, otherwise, metric conversion may fail.</p>
     * @param integer $ProcessDelay <p>Execution delay (seconds), 0-120 seconds, default 60 seconds</p>
     * @param string $SrcTopicRegion <p>Regional information of the source topicId. For supported regions, see the <a href="https://www.tencentcloud.com/document/api/614/56474?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">region list</a> document.</p>
     * @param integer $ProcessPeriodUnit <p>Scheduling Time Unit</p><p>Value ranges from 1 to 2</p><p>Default value: 1</p><p>The default value is 1 (minute), and the additional value is 2 (second).</p>
     * @param integer $ProcessEndTime <p>Schedule End Time, required when ProcessType=2, Unix timestamp, in milliseconds</p>
     * @param integer $SyntaxRule <p>Query syntax rules. Default value: 0. 0: Lucene syntax, 1: CQL syntax</p>
     * @param integer $HasServicesLog <p>Whether to enable delivery service log. 1: Disabled, 2: Enabled.</p>
     * @param integer $FullQuery <p>Full-text search tag. 1: Off, 2: On. Default: 1</p>
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
        if (array_key_exists("SrcTopicId",$param) and $param["SrcTopicId"] !== null) {
            $this->SrcTopicId = $param["SrcTopicId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("EnableFlag",$param) and $param["EnableFlag"] !== null) {
            $this->EnableFlag = $param["EnableFlag"];
        }

        if (array_key_exists("DstResource",$param) and $param["DstResource"] !== null) {
            $this->DstResource = new ScheduledSqlResouceInfo();
            $this->DstResource->deserialize($param["DstResource"]);
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

        if (array_key_exists("ProcessPeriodUnit",$param) and $param["ProcessPeriodUnit"] !== null) {
            $this->ProcessPeriodUnit = $param["ProcessPeriodUnit"];
        }

        if (array_key_exists("ProcessEndTime",$param) and $param["ProcessEndTime"] !== null) {
            $this->ProcessEndTime = $param["ProcessEndTime"];
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
