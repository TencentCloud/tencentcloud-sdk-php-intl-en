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
 * Shows the association between the apm business system and prometheus in the return format.
 *
 * @method integer getId() Obtain Metric match rule ID.
 * @method void setId(integer $Id) Set Metric match rule ID.
 * @method string getName() Obtain Metric match rule name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Metric match rule name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getServiceName() Obtain Applications where the rule takes effect. input an empty string for all applications.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServiceName(string $ServiceName) Set Applications where the rule takes effect. input an empty string for all applications.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Specifies the metric match rule status: 1 (enabled), 2 (disabled).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Specifies the metric match rule status: 1 (enabled), 2 (disabled).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMetricNameRule() Obtain Specifies the metric match rule.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMetricNameRule(string $MetricNameRule) Set Specifies the metric match rule.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMetricMatchType() Obtain Match type: 0 - precision match, 1 - prefix match, 2 - suffix match.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMetricMatchType(integer $MetricMatchType) Set Match type: 0 - precision match, 1 - prefix match, 2 - suffix match.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ApmPrometheusRules extends AbstractModel
{
    /**
     * @var integer Metric match rule ID.
     */
    public $Id;

    /**
     * @var string Metric match rule name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Applications where the rule takes effect. input an empty string for all applications.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceName;

    /**
     * @var integer Specifies the metric match rule status: 1 (enabled), 2 (disabled).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Specifies the metric match rule.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MetricNameRule;

    /**
     * @var integer Match type: 0 - precision match, 1 - prefix match, 2 - suffix match.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MetricMatchType;

    /**
     * @param integer $Id Metric match rule ID.
     * @param string $Name Metric match rule name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceName Applications where the rule takes effect. input an empty string for all applications.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Specifies the metric match rule status: 1 (enabled), 2 (disabled).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MetricNameRule Specifies the metric match rule.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MetricMatchType Match type: 0 - precision match, 1 - prefix match, 2 - suffix match.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MetricNameRule",$param) and $param["MetricNameRule"] !== null) {
            $this->MetricNameRule = $param["MetricNameRule"];
        }

        if (array_key_exists("MetricMatchType",$param) and $param["MetricMatchType"] !== null) {
            $this->MetricMatchType = $param["MetricMatchType"];
        }
    }
}
