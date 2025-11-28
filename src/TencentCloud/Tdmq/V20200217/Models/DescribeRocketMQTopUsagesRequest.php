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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRocketMQTopUsages request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getMetricName() Obtain Metric name. support the following:.
consumeLag. specifies the consumer group backlog count.
deadLetterCount. specifies the dead letter count.
Topic production rate.
Topic consumption rate. specifies the Topic consumption rate.
topicStorageSize. specifies the Topic storage space.
Topic API call count.
 * @method void setMetricName(string $MetricName) Set Metric name. support the following:.
consumeLag. specifies the consumer group backlog count.
deadLetterCount. specifies the dead letter count.
Topic production rate.
Topic consumption rate. specifies the Topic consumption rate.
topicStorageSize. specifies the Topic storage space.
Topic API call count.
 * @method integer getLimit() Obtain Sort quantity. The maximum value is 20.
 * @method void setLimit(integer $Limit) Set Sort quantity. The maximum value is 20.
 */
class DescribeRocketMQTopUsagesRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Metric name. support the following:.
consumeLag. specifies the consumer group backlog count.
deadLetterCount. specifies the dead letter count.
Topic production rate.
Topic consumption rate. specifies the Topic consumption rate.
topicStorageSize. specifies the Topic storage space.
Topic API call count.
     */
    public $MetricName;

    /**
     * @var integer Sort quantity. The maximum value is 20.
     */
    public $Limit;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $MetricName Metric name. support the following:.
consumeLag. specifies the consumer group backlog count.
deadLetterCount. specifies the dead letter count.
Topic production rate.
Topic consumption rate. specifies the Topic consumption rate.
topicStorageSize. specifies the Topic storage space.
Topic API call count.
     * @param integer $Limit Sort quantity. The maximum value is 20.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
