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
 * Resource information for ScheduledSql
 *
 * @method string getTopicId() Obtain Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
 * @method void setTopicId(string $TopicId) Set Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
 * @method string getRegion() Obtain Regional information of the topic. Cross-region selection is not supported currently. For supported regions, see the region list (https://www.tencentcloud.com/document/api/614/56474?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8) document.
 * @method void setRegion(string $Region) Set Regional information of the topic. Cross-region selection is not supported currently. For supported regions, see the region list (https://www.tencentcloud.com/document/api/614/56474?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8) document.
 * @method integer getBizType() Obtain Topic type: 0 for log topic, and 1 for metric topic
 * @method void setBizType(integer $BizType) Set Topic type: 0 for log topic, and 1 for metric topic
 * @method string getMetricName() Obtain Metric name. When BizType is 1, MetricName needs to be specified.
 * @method void setMetricName(string $MetricName) Set Metric name. When BizType is 1, MetricName needs to be specified.
 * @method array getMetricNames() Obtain Metric NameWhen BizType is 1, prioritize using the MetricNames field. Multiple metrics can only be filled in the MetricNames field, while it's recommended to fill a single metric in the MetricName field.
 * @method void setMetricNames(array $MetricNames) Set Metric NameWhen BizType is 1, prioritize using the MetricNames field. Multiple metrics can only be filled in the MetricNames field, while it's recommended to fill a single metric in the MetricName field.
 * @method array getMetricLabels() Obtain Metric dimension. Not accept time type.
 * @method void setMetricLabels(array $MetricLabels) Set Metric dimension. Not accept time type.
 * @method string getCustomTime() Obtain Metric timestamp. The default value is the left time point of the SQL query time range, but you can also specify other fields (The type is uinx time, TimeStamp, and precision millisecond) as the metric timestamp.
 * @method void setCustomTime(string $CustomTime) Set Metric timestamp. The default value is the left time point of the SQL query time range, but you can also specify other fields (The type is uinx time, TimeStamp, and precision millisecond) as the metric timestamp.
 * @method array getCustomMetricLabels() Obtain In addition to MetricLabels, this parameter can be used to supplement static dimensions for the metric.
Dimension names must start with a letter or underscore, followed by letters, digits, or underscores, with a length less than or equal to 1024 bytes.
 * @method void setCustomMetricLabels(array $CustomMetricLabels) Set In addition to MetricLabels, this parameter can be used to supplement static dimensions for the metric.
Dimension names must start with a letter or underscore, followed by letters, digits, or underscores, with a length less than or equal to 1024 bytes.
 */
class ScheduledSqlResouceInfo extends AbstractModel
{
    /**
     * @var string Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
     */
    public $TopicId;

    /**
     * @var string Regional information of the topic. Cross-region selection is not supported currently. For supported regions, see the region list (https://www.tencentcloud.com/document/api/614/56474?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8) document.
     */
    public $Region;

    /**
     * @var integer Topic type: 0 for log topic, and 1 for metric topic
     */
    public $BizType;

    /**
     * @var string Metric name. When BizType is 1, MetricName needs to be specified.
     */
    public $MetricName;

    /**
     * @var array Metric NameWhen BizType is 1, prioritize using the MetricNames field. Multiple metrics can only be filled in the MetricNames field, while it's recommended to fill a single metric in the MetricName field.
     */
    public $MetricNames;

    /**
     * @var array Metric dimension. Not accept time type.
     */
    public $MetricLabels;

    /**
     * @var string Metric timestamp. The default value is the left time point of the SQL query time range, but you can also specify other fields (The type is uinx time, TimeStamp, and precision millisecond) as the metric timestamp.
     */
    public $CustomTime;

    /**
     * @var array In addition to MetricLabels, this parameter can be used to supplement static dimensions for the metric.
Dimension names must start with a letter or underscore, followed by letters, digits, or underscores, with a length less than or equal to 1024 bytes.
     */
    public $CustomMetricLabels;

    /**
     * @param string $TopicId Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
     * @param string $Region Regional information of the topic. Cross-region selection is not supported currently. For supported regions, see the region list (https://www.tencentcloud.com/document/api/614/56474?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8) document.
     * @param integer $BizType Topic type: 0 for log topic, and 1 for metric topic
     * @param string $MetricName Metric name. When BizType is 1, MetricName needs to be specified.
     * @param array $MetricNames Metric NameWhen BizType is 1, prioritize using the MetricNames field. Multiple metrics can only be filled in the MetricNames field, while it's recommended to fill a single metric in the MetricName field.
     * @param array $MetricLabels Metric dimension. Not accept time type.
     * @param string $CustomTime Metric timestamp. The default value is the left time point of the SQL query time range, but you can also specify other fields (The type is uinx time, TimeStamp, and precision millisecond) as the metric timestamp.
     * @param array $CustomMetricLabels In addition to MetricLabels, this parameter can be used to supplement static dimensions for the metric.
Dimension names must start with a letter or underscore, followed by letters, digits, or underscores, with a length less than or equal to 1024 bytes.
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("MetricNames",$param) and $param["MetricNames"] !== null) {
            $this->MetricNames = $param["MetricNames"];
        }

        if (array_key_exists("MetricLabels",$param) and $param["MetricLabels"] !== null) {
            $this->MetricLabels = $param["MetricLabels"];
        }

        if (array_key_exists("CustomTime",$param) and $param["CustomTime"] !== null) {
            $this->CustomTime = $param["CustomTime"];
        }

        if (array_key_exists("CustomMetricLabels",$param) and $param["CustomMetricLabels"] !== null) {
            $this->CustomMetricLabels = [];
            foreach ($param["CustomMetricLabels"] as $key => $value){
                $obj = new MetricLabel();
                $obj->deserialize($value);
                array_push($this->CustomMetricLabels, $obj);
            }
        }
    }
}
