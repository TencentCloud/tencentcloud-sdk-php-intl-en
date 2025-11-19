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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateApmPrometheusRule request structure.
 *
 * @method string getName() Obtain Metric match rule name.
 * @method void setName(string $Name) Set Metric match rule name.
 * @method string getServiceName() Obtain Applications where the rule takes effect. input an empty string for all applications.
 * @method void setServiceName(string $ServiceName) Set Applications where the rule takes effect. input an empty string for all applications.
 * @method integer getMetricMatchType() Obtain Match type: 0 - precision match, 1 - prefix match, 2 - suffix match.
 * @method void setMetricMatchType(integer $MetricMatchType) Set Match type: 0 - precision match, 1 - prefix match, 2 - suffix match.
 * @method string getMetricNameRule() Obtain Specifies the rule for customer-defined metric names with cache hit.
 * @method void setMetricNameRule(string $MetricNameRule) Set Specifies the rule for customer-defined metric names with cache hit.
 * @method string getInstanceId() Obtain Business system ID
 * @method void setInstanceId(string $InstanceId) Set Business system ID
 */
class CreateApmPrometheusRuleRequest extends AbstractModel
{
    /**
     * @var string Metric match rule name.
     */
    public $Name;

    /**
     * @var string Applications where the rule takes effect. input an empty string for all applications.
     */
    public $ServiceName;

    /**
     * @var integer Match type: 0 - precision match, 1 - prefix match, 2 - suffix match.
     */
    public $MetricMatchType;

    /**
     * @var string Specifies the rule for customer-defined metric names with cache hit.
     */
    public $MetricNameRule;

    /**
     * @var string Business system ID
     */
    public $InstanceId;

    /**
     * @param string $Name Metric match rule name.
     * @param string $ServiceName Applications where the rule takes effect. input an empty string for all applications.
     * @param integer $MetricMatchType Match type: 0 - precision match, 1 - prefix match, 2 - suffix match.
     * @param string $MetricNameRule Specifies the rule for customer-defined metric names with cache hit.
     * @param string $InstanceId Business system ID
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("MetricMatchType",$param) and $param["MetricMatchType"] !== null) {
            $this->MetricMatchType = $param["MetricMatchType"];
        }

        if (array_key_exists("MetricNameRule",$param) and $param["MetricNameRule"] !== null) {
            $this->MetricNameRule = $param["MetricNameRule"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
