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
 * Prometheus alerting rule
 *
 * @method string getName() Obtain Rule name
 * @method void setName(string $Name) Set Rule name
 * @method string getRule() Obtain Prometheus statement
 * @method void setRule(string $Rule) Set Prometheus statement
 * @method array getLabels() Obtain Additional tags
 * @method void setLabels(array $Labels) Set Additional tags
 * @method string getTemplate() Obtain Alert sending template
 * @method void setTemplate(string $Template) Set Alert sending template
 * @method string getFor() Obtain Duration
 * @method void setFor(string $For) Set Duration
 * @method string getDescribe() Obtain Rule description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescribe(string $Describe) Set Rule description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAnnotations() Obtain See `annotations` in the Prometheus rule
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAnnotations(array $Annotations) Set See `annotations` in the Prometheus rule
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRuleState() Obtain Alerting rule status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleState(integer $RuleState) Set Alerting rule status
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PrometheusAlertRule extends AbstractModel
{
    /**
     * @var string Rule name
     */
    public $Name;

    /**
     * @var string Prometheus statement
     */
    public $Rule;

    /**
     * @var array Additional tags
     */
    public $Labels;

    /**
     * @var string Alert sending template
     */
    public $Template;

    /**
     * @var string Duration
     */
    public $For;

    /**
     * @var string Rule description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Describe;

    /**
     * @var array See `annotations` in the Prometheus rule
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Annotations;

    /**
     * @var integer Alerting rule status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleState;

    /**
     * @param string $Name Rule name
     * @param string $Rule Prometheus statement
     * @param array $Labels Additional tags
     * @param string $Template Alert sending template
     * @param string $For Duration
     * @param string $Describe Rule description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Annotations See `annotations` in the Prometheus rule
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RuleState Alerting rule status
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Template",$param) and $param["Template"] !== null) {
            $this->Template = $param["Template"];
        }

        if (array_key_exists("For",$param) and $param["For"] !== null) {
            $this->For = $param["For"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("Annotations",$param) and $param["Annotations"] !== null) {
            $this->Annotations = [];
            foreach ($param["Annotations"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Annotations, $obj);
            }
        }

        if (array_key_exists("RuleState",$param) and $param["RuleState"] !== null) {
            $this->RuleState = $param["RuleState"];
        }
    }
}
