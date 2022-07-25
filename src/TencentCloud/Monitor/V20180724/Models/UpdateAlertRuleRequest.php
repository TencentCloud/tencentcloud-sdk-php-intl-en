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
 * UpdateAlertRule request structure.
 *
 * @method string getRuleId() Obtain Prometheus alerting rule ID
 * @method void setRuleId(string $RuleId) Set Prometheus alerting rule ID
 * @method string getInstanceId() Obtain Prometheus instance ID
 * @method void setInstanceId(string $InstanceId) Set Prometheus instance ID
 * @method integer getRuleState() Obtain Rule status code. Valid values:
<li>1=RuleDeleted</li>
<li>2=RuleEnabled</li>
<li>3=RuleDisabled</li>
Default value: 2 (enabled).
 * @method void setRuleState(integer $RuleState) Set Rule status code. Valid values:
<li>1=RuleDeleted</li>
<li>2=RuleEnabled</li>
<li>3=RuleDisabled</li>
Default value: 2 (enabled).
 * @method string getRuleName() Obtain Alerting rule name
 * @method void setRuleName(string $RuleName) Set Alerting rule name
 * @method string getExpr() Obtain Alerting rule expression
 * @method void setExpr(string $Expr) Set Alerting rule expression
 * @method string getDuration() Obtain Alerting rule duration
 * @method void setDuration(string $Duration) Set Alerting rule duration
 * @method array getReceivers() Obtain List of alerting rule recipient groups
 * @method void setReceivers(array $Receivers) Set List of alerting rule recipient groups
 * @method array getLabels() Obtain List of alerting rule tags
 * @method void setLabels(array $Labels) Set List of alerting rule tags
 * @method array getAnnotations() Obtain List of alerting rule annotations.

Alert object and alert message are special fields of Prometheus Rule Annotations, which need to be passed in through `annotations` and correspond to `summary` and `description` keys respectively.
 * @method void setAnnotations(array $Annotations) Set List of alerting rule annotations.

Alert object and alert message are special fields of Prometheus Rule Annotations, which need to be passed in through `annotations` and correspond to `summary` and `description` keys respectively.
 * @method string getType() Obtain Alerting rule template category
 * @method void setType(string $Type) Set Alerting rule template category
 */
class UpdateAlertRuleRequest extends AbstractModel
{
    /**
     * @var string Prometheus alerting rule ID
     */
    public $RuleId;

    /**
     * @var string Prometheus instance ID
     */
    public $InstanceId;

    /**
     * @var integer Rule status code. Valid values:
<li>1=RuleDeleted</li>
<li>2=RuleEnabled</li>
<li>3=RuleDisabled</li>
Default value: 2 (enabled).
     */
    public $RuleState;

    /**
     * @var string Alerting rule name
     */
    public $RuleName;

    /**
     * @var string Alerting rule expression
     */
    public $Expr;

    /**
     * @var string Alerting rule duration
     */
    public $Duration;

    /**
     * @var array List of alerting rule recipient groups
     */
    public $Receivers;

    /**
     * @var array List of alerting rule tags
     */
    public $Labels;

    /**
     * @var array List of alerting rule annotations.

Alert object and alert message are special fields of Prometheus Rule Annotations, which need to be passed in through `annotations` and correspond to `summary` and `description` keys respectively.
     */
    public $Annotations;

    /**
     * @var string Alerting rule template category
     */
    public $Type;

    /**
     * @param string $RuleId Prometheus alerting rule ID
     * @param string $InstanceId Prometheus instance ID
     * @param integer $RuleState Rule status code. Valid values:
<li>1=RuleDeleted</li>
<li>2=RuleEnabled</li>
<li>3=RuleDisabled</li>
Default value: 2 (enabled).
     * @param string $RuleName Alerting rule name
     * @param string $Expr Alerting rule expression
     * @param string $Duration Alerting rule duration
     * @param array $Receivers List of alerting rule recipient groups
     * @param array $Labels List of alerting rule tags
     * @param array $Annotations List of alerting rule annotations.

Alert object and alert message are special fields of Prometheus Rule Annotations, which need to be passed in through `annotations` and correspond to `summary` and `description` keys respectively.
     * @param string $Type Alerting rule template category
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RuleState",$param) and $param["RuleState"] !== null) {
            $this->RuleState = $param["RuleState"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Expr",$param) and $param["Expr"] !== null) {
            $this->Expr = $param["Expr"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Receivers",$param) and $param["Receivers"] !== null) {
            $this->Receivers = $param["Receivers"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new PrometheusRuleKV();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Annotations",$param) and $param["Annotations"] !== null) {
            $this->Annotations = [];
            foreach ($param["Annotations"] as $key => $value){
                $obj = new PrometheusRuleKV();
                $obj->deserialize($value);
                array_push($this->Annotations, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
