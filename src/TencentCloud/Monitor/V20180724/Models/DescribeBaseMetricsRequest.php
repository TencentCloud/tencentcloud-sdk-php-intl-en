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
 * @method string getNamespace() Obtain Business namespace
 * @method void setNamespace(string $Namespace) Set Business namespace
 * @method string getMetricName() Obtain Metric name
 * @method void setMetricName(string $MetricName) Set Metric name
 */

/**
 *DescribeBaseMetrics request structure.
 */
class DescribeBaseMetricsRequest extends AbstractModel
{
    /**
     * @var string Business namespace
     */
    public $Namespace;

    /**
     * @var string Metric name
     */
    public $MetricName;
    /**
     * @param string $Namespace Business namespace
     * @param string $MetricName Metric name
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
