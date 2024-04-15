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
 * @method string getSrcTopicId() Obtain Source log topic
 * @method void setSrcTopicId(string $SrcTopicId) Set Source log topic
 * @method string getName() Obtain Task name
 * @method void setName(string $Name) Set Task name
 * @method integer getEnableFlag() Obtain Task start status. 1: Enabled, 2: Disabled
 * @method void setEnableFlag(integer $EnableFlag) Set Task start status. 1: Enabled, 2: Disabled
 * @method ScheduledSqlResouceInfo getDstResource() Obtain Target log topic for scheduled SQL analysis
 * @method void setDstResource(ScheduledSqlResouceInfo $DstResource) Set Target log topic for scheduled SQL analysis
 * @method string getScheduledSqlContent() Obtain Query statement
 * @method void setScheduledSqlContent(string $ScheduledSqlContent) Set Query statement
 * @method integer getProcessStartTime() Obtain Schedule start time, Unix timestamp, in milliseconds
 * @method void setProcessStartTime(integer $ProcessStartTime) Set Schedule start time, Unix timestamp, in milliseconds
 * @method integer getProcessType() Obtain Schedule type: 1: Continuous running; 2: Specified time range
 * @method void setProcessType(integer $ProcessType) Set Schedule type: 1: Continuous running; 2: Specified time range
 * @method integer getProcessPeriod() Obtain Scheduling interval (minutes)
 * @method void setProcessPeriod(integer $ProcessPeriod) Set Scheduling interval (minutes)
 * @method string getProcessTimeWindow() Obtain Time window for a single query. If your target topic is a metric topic, it is recommended that the size of this parameter not exceed 30 minutes, otherwise, metric conversion may fail.
 * @method void setProcessTimeWindow(string $ProcessTimeWindow) Set Time window for a single query. If your target topic is a metric topic, it is recommended that the size of this parameter not exceed 30 minutes, otherwise, metric conversion may fail.
 * @method integer getProcessDelay() Obtain Execution delay (Seconds)
 * @method void setProcessDelay(integer $ProcessDelay) Set Execution delay (Seconds)
 * @method string getSrcTopicRegion() Obtain Source topic ID region information
 * @method void setSrcTopicRegion(string $SrcTopicRegion) Set Source topic ID region information
 * @method integer getProcessEndTime() Obtain Schedule end time. Required field when ProcessType=2, Unix timestamp, in milliseconds
 * @method void setProcessEndTime(integer $ProcessEndTime) Set Schedule end time. Required field when ProcessType=2, Unix timestamp, in milliseconds
 * @method integer getSyntaxRule() Obtain Query syntax rules. Default value is 0. 0: Lucene syntax, 1: CQL syntax
 * @method void setSyntaxRule(integer $SyntaxRule) Set Query syntax rules. Default value is 0. 0: Lucene syntax, 1: CQL syntax
 */
class CreateScheduledSqlRequest extends AbstractModel
{
    /**
     * @var string Source log topic
     */
    public $SrcTopicId;

    /**
     * @var string Task name
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
     * @var string Query statement
     */
    public $ScheduledSqlContent;

    /**
     * @var integer Schedule start time, Unix timestamp, in milliseconds
     */
    public $ProcessStartTime;

    /**
     * @var integer Schedule type: 1: Continuous running; 2: Specified time range
     */
    public $ProcessType;

    /**
     * @var integer Scheduling interval (minutes)
     */
    public $ProcessPeriod;

    /**
     * @var string Time window for a single query. If your target topic is a metric topic, it is recommended that the size of this parameter not exceed 30 minutes, otherwise, metric conversion may fail.
     */
    public $ProcessTimeWindow;

    /**
     * @var integer Execution delay (Seconds)
     */
    public $ProcessDelay;

    /**
     * @var string Source topic ID region information
     */
    public $SrcTopicRegion;

    /**
     * @var integer Schedule end time. Required field when ProcessType=2, Unix timestamp, in milliseconds
     */
    public $ProcessEndTime;

    /**
     * @var integer Query syntax rules. Default value is 0. 0: Lucene syntax, 1: CQL syntax
     */
    public $SyntaxRule;

    /**
     * @param string $SrcTopicId Source log topic
     * @param string $Name Task name
     * @param integer $EnableFlag Task start status. 1: Enabled, 2: Disabled
     * @param ScheduledSqlResouceInfo $DstResource Target log topic for scheduled SQL analysis
     * @param string $ScheduledSqlContent Query statement
     * @param integer $ProcessStartTime Schedule start time, Unix timestamp, in milliseconds
     * @param integer $ProcessType Schedule type: 1: Continuous running; 2: Specified time range
     * @param integer $ProcessPeriod Scheduling interval (minutes)
     * @param string $ProcessTimeWindow Time window for a single query. If your target topic is a metric topic, it is recommended that the size of this parameter not exceed 30 minutes, otherwise, metric conversion may fail.
     * @param integer $ProcessDelay Execution delay (Seconds)
     * @param string $SrcTopicRegion Source topic ID region information
     * @param integer $ProcessEndTime Schedule end time. Required field when ProcessType=2, Unix timestamp, in milliseconds
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
