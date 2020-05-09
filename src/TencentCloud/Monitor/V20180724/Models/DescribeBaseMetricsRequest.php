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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBaseMetrics request structure.
 *
 * @method string getNamespace() Obtain Service namespace. Different Tencent Cloud services have different namespaces. For more information on service namespaces, see the monitoring API documentation of each product. For example, you can see [CVM Monitoring APIs](https://cloud.tencent.com/document/api/248/30385) for the namespace of CVM.
 * @method void setNamespace(string $Namespace) Set Service namespace. Different Tencent Cloud services have different namespaces. For more information on service namespaces, see the monitoring API documentation of each product. For example, you can see [CVM Monitoring APIs](https://cloud.tencent.com/document/api/248/30385) for the namespace of CVM.
 * @method string getMetricName() Obtain Metric name. Different Tencent Cloud services have different metric names. For more information on service metric names, see the monitoring API documentation of each product. For example, you can see the [CVM Monitoring APIs](https://cloud.tencent.com/document/api/248/30385) for the metric names of CVM.
 * @method void setMetricName(string $MetricName) Set Metric name. Different Tencent Cloud services have different metric names. For more information on service metric names, see the monitoring API documentation of each product. For example, you can see the [CVM Monitoring APIs](https://cloud.tencent.com/document/api/248/30385) for the metric names of CVM.
 */
class DescribeBaseMetricsRequest extends AbstractModel
{
    /**
     * @var string Service namespace. Different Tencent Cloud services have different namespaces. For more information on service namespaces, see the monitoring API documentation of each product. For example, you can see [CVM Monitoring APIs](https://cloud.tencent.com/document/api/248/30385) for the namespace of CVM.
     */
    public $Namespace;

    /**
     * @var string Metric name. Different Tencent Cloud services have different metric names. For more information on service metric names, see the monitoring API documentation of each product. For example, you can see the [CVM Monitoring APIs](https://cloud.tencent.com/document/api/248/30385) for the metric names of CVM.
     */
    public $MetricName;

    /**
     * @param string $Namespace Service namespace. Different Tencent Cloud services have different namespaces. For more information on service namespaces, see the monitoring API documentation of each product. For example, you can see [CVM Monitoring APIs](https://cloud.tencent.com/document/api/248/30385) for the namespace of CVM.
     * @param string $MetricName Metric name. Different Tencent Cloud services have different metric names. For more information on service metric names, see the monitoring API documentation of each product. For example, you can see the [CVM Monitoring APIs](https://cloud.tencent.com/document/api/248/30385) for the metric names of CVM.
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }
    }
}
