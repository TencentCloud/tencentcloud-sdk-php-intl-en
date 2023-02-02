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
 * CreateAlertRule request structure.
 *
 * @method string getInstanceId() Obtain TMP instance ID, such as “prom-abcd1234”.
 * @method void setInstanceId(string $InstanceId) Set TMP instance ID, such as “prom-abcd1234”.
 * @method string getRuleName() Obtain Rule name
 * @method void setRuleName(string $RuleName) Set Rule name
 * @method string getExpr() Obtain Alerting rule expression. For more information, see <a href="https://www.tencentcloud.com/document/product/1116/43192?lang=en&pg=">Alerting Rule Description</a>
 * @method void setExpr(string $Expr) Set Alerting rule expression. For more information, see <a href="https://www.tencentcloud.com/document/product/1116/43192?lang=en&pg=">Alerting Rule Description</a>
 * @method array getReceivers() Obtain List of alert notification template IDs
 * @method void setReceivers(array $Receivers) Set List of alert notification template IDs
 * @method integer getRuleState() Obtain Rule status code. Valid values:
<li>2=RuleEnabled</li>
<li>3=RuleDisabled</li>
 * @method void setRuleState(integer $RuleState) Set Rule status code. Valid values:
<li>2=RuleEnabled</li>
<li>3=RuleDisabled</li>
 * @method string getDuration() Obtain Rule alert duration
 * @method void setDuration(string $Duration) Set Rule alert duration
 * @method array getLabels() Obtain List of tags
 * @method void setLabels(array $Labels) Set List of tags
 * @method array getAnnotations() Obtain List of annotations.

Alert object and alert message are special fields of Prometheus Rule Annotations, which need to be passed in through `annotations` and correspond to `summary` and `description` keys respectively.
 * @method void setAnnotations(array $Annotations) Set List of annotations.

Alert object and alert message are special fields of Prometheus Rule Annotations, which need to be passed in through `annotations` and correspond to `summary` and `description` keys respectively.
 * @method string getType() Obtain Alerting rule template category
 * @method void setType(string $Type) Set Alerting rule template category
 */
class CreateAlertRuleRequest extends AbstractModel
{
    /**
     * @var string TMP instance ID, such as “prom-abcd1234”.
     */
    public $InstanceId;

    /**
     * @var string Rule name
     */
    public $RuleName;

    /**
     * @var string Alerting rule expression. For more information, see <a href="https://www.tencentcloud.com/document/product/1116/43192?lang=en&pg=">Alerting Rule Description</a>
     */
    public $Expr;

    /**
     * @var array List of alert notification template IDs
     */
    public $Receivers;

    /**
     * @var integer Rule status code. Valid values:
<li>2=RuleEnabled</li>
<li>3=RuleDisabled</li>
     */
    public $RuleState;

    /**
     * @var string Rule alert duration
     */
    public $Duration;

    /**
     * @var array List of tags
     */
    public $Labels;

    /**
     * @var array List of annotations.

Alert object and alert message are special fields of Prometheus Rule Annotations, which need to be passed in through `annotations` and correspond to `summary` and `description` keys respectively.
     */
    public $Annotations;

    /**
     * @var string Alerting rule template category
     */
    public $Type;

    /**
     * @param string $InstanceId TMP instance ID, such as “prom-abcd1234”.
     * @param string $RuleName Rule name
     * @param string $Expr Alerting rule expression. For more information, see <a href="https://www.tencentcloud.com/document/product/1116/43192?lang=en&pg=">Alerting Rule Description</a>
     * @param array $Receivers List of alert notification template IDs
     * @param integer $RuleState Rule status code. Valid values:
<li>2=RuleEnabled</li>
<li>3=RuleDisabled</li>
     * @param string $Duration Rule alert duration
     * @param array $Labels List of tags
     * @param array $Annotations List of annotations.

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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Expr",$param) and $param["Expr"] !== null) {
            $this->Expr = $param["Expr"];
        }

        if (array_key_exists("Receivers",$param) and $param["Receivers"] !== null) {
            $this->Receivers = $param["Receivers"];
        }

        if (array_key_exists("RuleState",$param) and $param["RuleState"] !== null) {
            $this->RuleState = $param["RuleState"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
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
