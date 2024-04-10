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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateScheduledSql request structure.
 *
 * @method string getSrcTopicId() Obtain Source Log Topic
 * @method void setSrcTopicId(string $SrcTopicId) Set Source Log Topic
 * @method string getName() Obtain Task Name
 * @method void setName(string $Name) Set Task Name
 * @method integer getEnableFlag() Obtain Task start status. 1: Enabled, 2: Disabled
 * @method void setEnableFlag(integer $EnableFlag) Set Task start status. 1: Enabled, 2: Disabled
 * @method ScheduledSqlResouceInfo getDstResource() Obtain Target log topic for scheduled SQL analysis
 * @method void setDstResource(ScheduledSqlResouceInfo $DstResource) Set Target log topic for scheduled SQL analysis
 * @method string getScheduledSqlContent() Obtain Query Statement
 * @method void setScheduledSqlContent(string $ScheduledSqlContent) Set Query Statement
 * @method integer getProcessStartTime() Obtain Schedule Start Time, Unix timestamp, in milliseconds
 * @method void setProcessStartTime(integer $ProcessStartTime) Set Schedule Start Time, Unix timestamp, in milliseconds
 * @method integer getProcessType() Obtain Schedule Type: 1 Continuous Running 2 Specified Time Range
 * @method void setProcessType(integer $ProcessType) Set Schedule Type: 1 Continuous Running 2 Specified Time Range
 * @method integer getProcessPeriod() Obtain Scheduling Interval (Minutes)
 * @method void setProcessPeriod(integer $ProcessPeriod) Set Scheduling Interval (Minutes)
 * @method string getProcessTimeWindow() Obtain Time window for a single query. If your target topic is a metric topic, it is recommended that the size of this parameter not exceed 30 minutes, otherwise, metric conversion may fail.
 * @method void setProcessTimeWindow(string $ProcessTimeWindow) Set Time window for a single query. If your target topic is a metric topic, it is recommended that the size of this parameter not exceed 30 minutes, otherwise, metric conversion may fail.
 * @method integer getProcessDelay() Obtain Execution Delay (Seconds)
 * @method void setProcessDelay(integer $ProcessDelay) Set Execution Delay (Seconds)
 * @method string getSrcTopicRegion() Obtain Source Topic ID Region Information
 * @method void setSrcTopicRegion(string $SrcTopicRegion) Set Source Topic ID Region Information
 * @method integer getProcessEndTime() Obtain Schedule End Time. Required field when ProcessType=2, Unix timestamp, in milliseconds
 * @method void setProcessEndTime(integer $ProcessEndTime) Set Schedule End Time. Required field when ProcessType=2, Unix timestamp, in milliseconds
 * @method integer getSyntaxRule() Obtain Query syntax rules. Default value is 0. 0: Lucene syntax, 1: CQL syntax
 * @method void setSyntaxRule(integer $SyntaxRule) Set Query syntax rules. Default value is 0. 0: Lucene syntax, 1: CQL syntax
 */
class CreateScheduledSqlRequest extends AbstractModel
{
    /**
     * @var string Source Log Topic
     */
    public $SrcTopicId;

    /**
     * @var string Task Name
     */
    public $Name;

    /**
     * @var integer Task start status. 1: Enabled, 2: Disabled
     */
    public $EnableFlag;

    /**
     * @var ScheduledSqlResouceInfo Target log topic for scheduled SQL analysis
     */
    public $DstResource;

    /**
     * @var string Query Statement
     */
    public $ScheduledSqlContent;

    /**
     * @var integer Schedule Start Time, Unix timestamp, in milliseconds
     */
    public $ProcessStartTime;

    /**
     * @var integer Schedule Type: 1 Continuous Running 2 Specified Time Range
     */
    public $ProcessType;

    /**
     * @var integer Scheduling Interval (Minutes)
     */
    public $ProcessPeriod;

    /**
     * @var string Time window for a single query. If your target topic is a metric topic, it is recommended that the size of this parameter not exceed 30 minutes, otherwise, metric conversion may fail.
     */
    public $ProcessTimeWindow;

    /**
     * @var integer Execution Delay (Seconds)
     */
    public $ProcessDelay;

    /**
     * @var string Source Topic ID Region Information
     */
    public $SrcTopicRegion;

    /**
     * @var integer Schedule End Time. Required field when ProcessType=2, Unix timestamp, in milliseconds
     */
    public $ProcessEndTime;

    /**
     * @var integer Query syntax rules. Default value is 0. 0: Lucene syntax, 1: CQL syntax
     */
    public $SyntaxRule;

    /**
     * @param string $SrcTopicId Source Log Topic
     * @param string $Name Task Name
     * @param integer $EnableFlag Task start status. 1: Enabled, 2: Disabled
     * @param ScheduledSqlResouceInfo $DstResource Target log topic for scheduled SQL analysis
     * @param string $ScheduledSqlContent Query Statement
     * @param integer $ProcessStartTime Schedule Start Time, Unix timestamp, in milliseconds
     * @param integer $ProcessType Schedule Type: 1 Continuous Running 2 Specified Time Range
     * @param integer $ProcessPeriod Scheduling Interval (Minutes)
     * @param string $ProcessTimeWindow Time window for a single query. If your target topic is a metric topic, it is recommended that the size of this parameter not exceed 30 minutes, otherwise, metric conversion may fail.
     * @param integer $ProcessDelay Execution Delay (Seconds)
     * @param string $SrcTopicRegion Source Topic ID Region Information
     * @param integer $ProcessEndTime Schedule End Time. Required field when ProcessType=2, Unix timestamp, in milliseconds
     * @param integer $SyntaxRule Query syntax rules. Default value is 0. 0: Lucene syntax, 1: CQL syntax
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

        if (array_key_exists("ProcessEndTime",$param) and $param["ProcessEndTime"] !== null) {
            $this->ProcessEndTime = $param["ProcessEndTime"];
        }

        if (array_key_exists("SyntaxRule",$param) and $param["SyntaxRule"] !== null) {
            $this->SyntaxRule = $param["SyntaxRule"];
        }
    }
}
