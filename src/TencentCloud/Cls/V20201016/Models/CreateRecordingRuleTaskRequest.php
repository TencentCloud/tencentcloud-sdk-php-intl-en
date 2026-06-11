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
 * CreateRecordingRuleTask request structure.
 *
 * @method string getTopicId() Obtain <p>Source metric topic id</p><p>For reference:</p><ul><li><a href="https://www.tencentcloud.com/document/api/614/56454?from_cn_redirect=1">DescribeTopics</a></li><li><a href="https://console.cloud.tencent.com/cls/metric">metric topic</a></li></ul>
 * @method void setTopicId(string $TopicId) Set <p>Source metric topic id</p><p>For reference:</p><ul><li><a href="https://www.tencentcloud.com/document/api/614/56454?from_cn_redirect=1">DescribeTopics</a></li><li><a href="https://console.cloud.tencent.com/cls/metric">metric topic</a></li></ul>
 * @method string getDstTopicId() Obtain <p>Target metric topic id, which can be the same as TopicId.</p>
 * @method void setDstTopicId(string $DstTopicId) Set <p>Target metric topic id, which can be the same as TopicId.</p>
 * @method string getName() Obtain <p>Pre-aggregation task name</p><p>Input parameter restrictions: Only letters, numbers, and underscores are allowed. Cannot begin with an underscore. Less than 256 characters.</p>
 * @method void setName(string $Name) Set <p>Pre-aggregation task name</p><p>Input parameter restrictions: Only letters, numbers, and underscores are allowed. Cannot begin with an underscore. Less than 256 characters.</p>
 * @method integer getEnableFlag() Obtain <p>Task status. Valid values: 1: enabled; 2: disabled.</p>
 * @method void setEnableFlag(integer $EnableFlag) Set <p>Task status. Valid values: 1: enabled; 2: disabled.</p>
 * @method integer getProcessStartTime() Obtain <p>Execution start time, Unix timestamp.</p><p>Unit: ms.</p>
 * @method void setProcessStartTime(integer $ProcessStartTime) Set <p>Execution start time, Unix timestamp.</p><p>Unit: ms.</p>
 * @method integer getProcessPeriod() Obtain <p>Scheduling period (minutes). Supported range (0,1440] minutes.</p>
 * @method void setProcessPeriod(integer $ProcessPeriod) Set <p>Scheduling period (minutes). Supported range (0,1440] minutes.</p>
 * @method integer getProcessDelay() Obtain <p>Execution delay. Set it to 30 seconds to avoid inaccuracy in pre-aggregation task calculation results due to latency in metric reporting.</p><p>Unit: seconds</p>
 * @method void setProcessDelay(integer $ProcessDelay) Set <p>Execution delay. Set it to 30 seconds to avoid inaccuracy in pre-aggregation task calculation results due to latency in metric reporting.</p><p>Unit: seconds</p>
 * @method string getRecordingRuleContent() Obtain <p>Execution statement (PromQL)</p>
 * @method void setRecordingRuleContent(string $RecordingRuleContent) Set <p>Execution statement (PromQL)</p>
 * @method string getMetricName() Obtain <p>Metric name</p>
 * @method void setMetricName(string $MetricName) Set <p>Metric name</p>
 * @method array getCustomMetricLabels() Obtain <p>Metric custom dimension</p>
 * @method void setCustomMetricLabels(array $CustomMetricLabels) Set <p>Metric custom dimension</p>
 * @method integer getHasServicesLog() Obtain <p>Whether to enable the delivery service log. 1: Disabled, 2: Enabled.</p>
 * @method void setHasServicesLog(integer $HasServicesLog) Set <p>Whether to enable the delivery service log. 1: Disabled, 2: Enabled.</p>
 */
class CreateRecordingRuleTaskRequest extends AbstractModel
{
    /**
     * @var string <p>Source metric topic id</p><p>For reference:</p><ul><li><a href="https://www.tencentcloud.com/document/api/614/56454?from_cn_redirect=1">DescribeTopics</a></li><li><a href="https://console.cloud.tencent.com/cls/metric">metric topic</a></li></ul>
     */
    public $TopicId;

    /**
     * @var string <p>Target metric topic id, which can be the same as TopicId.</p>
     */
    public $DstTopicId;

    /**
     * @var string <p>Pre-aggregation task name</p><p>Input parameter restrictions: Only letters, numbers, and underscores are allowed. Cannot begin with an underscore. Less than 256 characters.</p>
     */
    public $Name;

    /**
     * @var integer <p>Task status. Valid values: 1: enabled; 2: disabled.</p>
     */
    public $EnableFlag;

    /**
     * @var integer <p>Execution start time, Unix timestamp.</p><p>Unit: ms.</p>
     */
    public $ProcessStartTime;

    /**
     * @var integer <p>Scheduling period (minutes). Supported range (0,1440] minutes.</p>
     */
    public $ProcessPeriod;

    /**
     * @var integer <p>Execution delay. Set it to 30 seconds to avoid inaccuracy in pre-aggregation task calculation results due to latency in metric reporting.</p><p>Unit: seconds</p>
     */
    public $ProcessDelay;

    /**
     * @var string <p>Execution statement (PromQL)</p>
     */
    public $RecordingRuleContent;

    /**
     * @var string <p>Metric name</p>
     */
    public $MetricName;

    /**
     * @var array <p>Metric custom dimension</p>
     */
    public $CustomMetricLabels;

    /**
     * @var integer <p>Whether to enable the delivery service log. 1: Disabled, 2: Enabled.</p>
     */
    public $HasServicesLog;

    /**
     * @param string $TopicId <p>Source metric topic id</p><p>For reference:</p><ul><li><a href="https://www.tencentcloud.com/document/api/614/56454?from_cn_redirect=1">DescribeTopics</a></li><li><a href="https://console.cloud.tencent.com/cls/metric">metric topic</a></li></ul>
     * @param string $DstTopicId <p>Target metric topic id, which can be the same as TopicId.</p>
     * @param string $Name <p>Pre-aggregation task name</p><p>Input parameter restrictions: Only letters, numbers, and underscores are allowed. Cannot begin with an underscore. Less than 256 characters.</p>
     * @param integer $EnableFlag <p>Task status. Valid values: 1: enabled; 2: disabled.</p>
     * @param integer $ProcessStartTime <p>Execution start time, Unix timestamp.</p><p>Unit: ms.</p>
     * @param integer $ProcessPeriod <p>Scheduling period (minutes). Supported range (0,1440] minutes.</p>
     * @param integer $ProcessDelay <p>Execution delay. Set it to 30 seconds to avoid inaccuracy in pre-aggregation task calculation results due to latency in metric reporting.</p><p>Unit: seconds</p>
     * @param string $RecordingRuleContent <p>Execution statement (PromQL)</p>
     * @param string $MetricName <p>Metric name</p>
     * @param array $CustomMetricLabels <p>Metric custom dimension</p>
     * @param integer $HasServicesLog <p>Whether to enable the delivery service log. 1: Disabled, 2: Enabled.</p>
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

        if (array_key_exists("RecordingRuleContent",$param) and $param["RecordingRuleContent"] !== null) {
            $this->RecordingRuleContent = $param["RecordingRuleContent"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
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
