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
 * ModifyApmPrometheusRule request structure.
 *
 * @method integer getId() Obtain Rule ID
 * @method void setId(integer $Id) Set Rule ID
 * @method string getInstanceId() Obtain Business system ID
 * @method void setInstanceId(string $InstanceId) Set Business system ID
 * @method string getName() Obtain Specifies the rule name to modify.
 * @method void setName(string $Name) Set Specifies the rule name to modify.
 * @method integer getStatus() Obtain Rule status: 1 (enabled), 2 (disabled), 3 (deleted).
 * @method void setStatus(integer $Status) Set Rule status: 1 (enabled), 2 (disabled), 3 (deleted).
 * @method string getServiceName() Obtain Applications where the rule takes effect. input an empty string for all applications. if this is not modified, pass the old rule.
 * @method void setServiceName(string $ServiceName) Set Applications where the rule takes effect. input an empty string for all applications. if this is not modified, pass the old rule.
 * @method integer getMetricMatchType() Obtain Match type: 0 - precision match, 1 - prefix match, 2 - suffix match (if not modified, the old rule must be passed).
 * @method void setMetricMatchType(integer $MetricMatchType) Set Match type: 0 - precision match, 1 - prefix match, 2 - suffix match (if not modified, the old rule must be passed).
 * @method string getMetricNameRule() Obtain Specifies the rule for customer-defined metric names with cache hit.
 * @method void setMetricNameRule(string $MetricNameRule) Set Specifies the rule for customer-defined metric names with cache hit.
 */
class ModifyApmPrometheusRuleRequest extends AbstractModel
{
    /**
     * @var integer Rule ID
     */
    public $Id;

    /**
     * @var string Business system ID
     */
    public $InstanceId;

    /**
     * @var string Specifies the rule name to modify.
     */
    public $Name;

    /**
     * @var integer Rule status: 1 (enabled), 2 (disabled), 3 (deleted).
     */
    public $Status;

    /**
     * @var string Applications where the rule takes effect. input an empty string for all applications. if this is not modified, pass the old rule.
     */
    public $ServiceName;

    /**
     * @var integer Match type: 0 - precision match, 1 - prefix match, 2 - suffix match (if not modified, the old rule must be passed).
     */
    public $MetricMatchType;

    /**
     * @var string Specifies the rule for customer-defined metric names with cache hit.
     */
    public $MetricNameRule;

    /**
     * @param integer $Id Rule ID
     * @param string $InstanceId Business system ID
     * @param string $Name Specifies the rule name to modify.
     * @param integer $Status Rule status: 1 (enabled), 2 (disabled), 3 (deleted).
     * @param string $ServiceName Applications where the rule takes effect. input an empty string for all applications. if this is not modified, pass the old rule.
     * @param integer $MetricMatchType Match type: 0 - precision match, 1 - prefix match, 2 - suffix match (if not modified, the old rule must be passed).
     * @param string $MetricNameRule Specifies the rule for customer-defined metric names with cache hit.
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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
    }
}
