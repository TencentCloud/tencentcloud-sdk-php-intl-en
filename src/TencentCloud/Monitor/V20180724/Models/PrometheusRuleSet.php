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
 * Set of Prometheus alerting rules
 *
 * @method string getRuleId() Obtain Rule ID
 * @method void setRuleId(string $RuleId) Set Rule ID
 * @method string getRuleName() Obtain Rule name
 * @method void setRuleName(string $RuleName) Set Rule name
 * @method integer getRuleState() Obtain Rule status code
 * @method void setRuleState(integer $RuleState) Set Rule status code
 * @method string getType() Obtain Rule category
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Rule category
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getLabels() Obtain List of rule tags
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLabels(array $Labels) Set List of rule tags
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAnnotations() Obtain List of rule annotations
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAnnotations(array $Annotations) Set List of rule annotations
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpr() Obtain Rule expression
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpr(string $Expr) Set Rule expression
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDuration() Obtain Rule alert duration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDuration(string $Duration) Set Rule alert duration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getReceivers() Obtain List of alert recipient groups
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReceivers(array $Receivers) Set List of alert recipient groups
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHealth() Obtain Rule status. Valid values:
<li>unknown: Unknown</li>
<li>pending: Loading</li>
<li>ok: Running</li>
<li>err: Error</li>
 * @method void setHealth(string $Health) Set Rule status. Valid values:
<li>unknown: Unknown</li>
<li>pending: Loading</li>
<li>ok: Running</li>
<li>err: Error</li>
 * @method string getCreatedAt() Obtain Rule creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedAt(string $CreatedAt) Set Rule creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdatedAt() Obtain Rule update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdatedAt(string $UpdatedAt) Set Rule update time
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PrometheusRuleSet extends AbstractModel
{
    /**
     * @var string Rule ID
     */
    public $RuleId;

    /**
     * @var string Rule name
     */
    public $RuleName;

    /**
     * @var integer Rule status code
     */
    public $RuleState;

    /**
     * @var string Rule category
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var array List of rule tags
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Labels;

    /**
     * @var array List of rule annotations
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Annotations;

    /**
     * @var string Rule expression
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Expr;

    /**
     * @var string Rule alert duration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Duration;

    /**
     * @var array List of alert recipient groups
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Receivers;

    /**
     * @var string Rule status. Valid values:
<li>unknown: Unknown</li>
<li>pending: Loading</li>
<li>ok: Running</li>
<li>err: Error</li>
     */
    public $Health;

    /**
     * @var string Rule creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedAt;

    /**
     * @var string Rule update time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdatedAt;

    /**
     * @param string $RuleId Rule ID
     * @param string $RuleName Rule name
     * @param integer $RuleState Rule status code
     * @param string $Type Rule category
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Labels List of rule tags
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Annotations List of rule annotations
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Expr Rule expression
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Duration Rule alert duration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Receivers List of alert recipient groups
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Health Rule status. Valid values:
<li>unknown: Unknown</li>
<li>pending: Loading</li>
<li>ok: Running</li>
<li>err: Error</li>
     * @param string $CreatedAt Rule creation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdatedAt Rule update time
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleState",$param) and $param["RuleState"] !== null) {
            $this->RuleState = $param["RuleState"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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

        if (array_key_exists("Expr",$param) and $param["Expr"] !== null) {
            $this->Expr = $param["Expr"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Receivers",$param) and $param["Receivers"] !== null) {
            $this->Receivers = $param["Receivers"];
        }

        if (array_key_exists("Health",$param) and $param["Health"] !== null) {
            $this->Health = $param["Health"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}
