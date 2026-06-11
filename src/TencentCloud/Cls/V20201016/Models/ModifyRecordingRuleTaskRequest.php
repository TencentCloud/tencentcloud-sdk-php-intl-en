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
 * ModifyRecordingRuleTask request structure.
 *
 * @method string getTaskId() Obtain <p>Task ID.</p>
 * @method void setTaskId(string $TaskId) Set <p>Task ID.</p>
 * @method string getTopicId() Obtain <p>Source metric topic id</p>
 * @method void setTopicId(string $TopicId) Set <p>Source metric topic id</p>
 * @method string getDstTopicId() Obtain <p>Target metric topic id.</p>
 * @method void setDstTopicId(string $DstTopicId) Set <p>Target metric topic id.</p>
 * @method string getName() Obtain <p>Task Name</p>
 * @method void setName(string $Name) Set <p>Task Name</p>
 * @method integer getEnableFlag() Obtain <p>Task start status. 1: Enabled, 2: Disabled</p>
 * @method void setEnableFlag(integer $EnableFlag) Set <p>Task start status. 1: Enabled, 2: Disabled</p>
 * @method integer getProcessStartTime() Obtain <p>Schedule start time, Unix timestamp, in milliseconds</p>
 * @method void setProcessStartTime(integer $ProcessStartTime) Set <p>Schedule start time, Unix timestamp, in milliseconds</p>
 * @method integer getProcessPeriod() Obtain <p>Scheduling interval (minutes), supported range (0,1440] minutes.</p>
 * @method void setProcessPeriod(integer $ProcessPeriod) Set <p>Scheduling interval (minutes), supported range (0,1440] minutes.</p>
 * @method integer getProcessDelay() Obtain <p>Execution Delay (Seconds)</p>
 * @method void setProcessDelay(integer $ProcessDelay) Set <p>Execution Delay (Seconds)</p>
 * @method string getMetricName() Obtain <p>Metric name</p>
 * @method void setMetricName(string $MetricName) Set <p>Metric name</p>
 * @method string getRecordingRuleContent() Obtain <p>Execution statement (PromQL)</p>
 * @method void setRecordingRuleContent(string $RecordingRuleContent) Set <p>Execution statement (PromQL)</p>
 * @method array getCustomMetricLabels() Obtain <p>Custom metric name</p>
 * @method void setCustomMetricLabels(array $CustomMetricLabels) Set <p>Custom metric name</p>
 * @method integer getHasServicesLog() Obtain <p>Whether to enable service log shipping. Valid values: 1: disable; 2: enable.</p>
 * @method void setHasServicesLog(integer $HasServicesLog) Set <p>Whether to enable service log shipping. Valid values: 1: disable; 2: enable.</p>
 */
class ModifyRecordingRuleTaskRequest extends AbstractModel
{
    /**
     * @var string <p>Task ID.</p>
     */
    public $TaskId;

    /**
     * @var string <p>Source metric topic id</p>
     */
    public $TopicId;

    /**
     * @var string <p>Target metric topic id.</p>
     */
    public $DstTopicId;

    /**
     * @var string <p>Task Name</p>
     */
    public $Name;

    /**
     * @var integer <p>Task start status. 1: Enabled, 2: Disabled</p>
     */
    public $EnableFlag;

    /**
     * @var integer <p>Schedule start time, Unix timestamp, in milliseconds</p>
     */
    public $ProcessStartTime;

    /**
     * @var integer <p>Scheduling interval (minutes), supported range (0,1440] minutes.</p>
     */
    public $ProcessPeriod;

    /**
     * @var integer <p>Execution Delay (Seconds)</p>
     */
    public $ProcessDelay;

    /**
     * @var string <p>Metric name</p>
     */
    public $MetricName;

    /**
     * @var string <p>Execution statement (PromQL)</p>
     */
    public $RecordingRuleContent;

    /**
     * @var array <p>Custom metric name</p>
     */
    public $CustomMetricLabels;

    /**
     * @var integer <p>Whether to enable service log shipping. Valid values: 1: disable; 2: enable.</p>
     */
    public $HasServicesLog;

    /**
     * @param string $TaskId <p>Task ID.</p>
     * @param string $TopicId <p>Source metric topic id</p>
     * @param string $DstTopicId <p>Target metric topic id.</p>
     * @param string $Name <p>Task Name</p>
     * @param integer $EnableFlag <p>Task start status. 1: Enabled, 2: Disabled</p>
     * @param integer $ProcessStartTime <p>Schedule start time, Unix timestamp, in milliseconds</p>
     * @param integer $ProcessPeriod <p>Scheduling interval (minutes), supported range (0,1440] minutes.</p>
     * @param integer $ProcessDelay <p>Execution Delay (Seconds)</p>
     * @param string $MetricName <p>Metric name</p>
     * @param string $RecordingRuleContent <p>Execution statement (PromQL)</p>
     * @param array $CustomMetricLabels <p>Custom metric name</p>
     * @param integer $HasServicesLog <p>Whether to enable service log shipping. Valid values: 1: disable; 2: enable.</p>
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

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("DstTopicId",$param) and $param["DstTopicId"] !== null) {
            $this->DstTopicId = $param["DstTopicId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("EnableFlag",$param) and $param["EnableFlag"] !== null) {
            $this->EnableFlag = $param["EnableFlag"];
        }

        if (array_key_exists("ProcessStartTime",$param) and $param["ProcessStartTime"] !== null) {
            $this->ProcessStartTime = $param["ProcessStartTime"];
        }

        if (array_key_exists("ProcessPeriod",$param) and $param["ProcessPeriod"] !== null) {
            $this->ProcessPeriod = $param["ProcessPeriod"];
        }

        if (array_key_exists("ProcessDelay",$param) and $param["ProcessDelay"] !== null) {
            $this->ProcessDelay = $param["ProcessDelay"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("RecordingRuleContent",$param) and $param["RecordingRuleContent"] !== null) {
            $this->RecordingRuleContent = $param["RecordingRuleContent"];
        }

        if (array_key_exists("CustomMetricLabels",$param) and $param["CustomMetricLabels"] !== null) {
            $this->CustomMetricLabels = [];
            foreach ($param["CustomMetricLabels"] as $key => $value){
                $obj = new MetricLabel();
                $obj->deserialize($value);
                array_push($this->CustomMetricLabels, $obj);
            }
        }

        if (array_key_exists("HasServicesLog",$param) and $param["HasServicesLog"] !== null) {
            $this->HasServicesLog = $param["HasServicesLog"];
        }
    }
}
