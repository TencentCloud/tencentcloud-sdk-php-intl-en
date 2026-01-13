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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Prometheus alert rule information within the group.
 *
 * @method string getRuleName() Obtain Alert rule name. same name is not allowed in the same Alert group.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleName(string $RuleName) Set Alert rule name. same name is not allowed in the same Alert group.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getLabels() Obtain Prometheus alert label list.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLabels(array $Labels) Set Prometheus alert label list.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAnnotations() Obtain Prometheus alert annotation list.

Alarm object and Alarm message are special fields of Prometheus Rule Annotations. they need to pass through Annotations for transmission. the corresponding keys are summary and description respectively.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAnnotations(array $Annotations) Set Prometheus alert annotation list.

Alarm object and Alarm message are special fields of Prometheus Rule Annotations. they need to pass through Annotations for transmission. the corresponding keys are summary and description respectively.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDuration() Obtain Alert will be triggered after 'Expr' satisfied for 'Duration'.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDuration(string $Duration) Set Alert will be triggered after 'Expr' satisfied for 'Duration'.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpr() Obtain Alert expression. see <a href="https://www.tencentcloud.com/document/product/1416/56008?from_cn_redirect=1">alert rule description</a>.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpr(string $Expr) Set Alert expression. see <a href="https://www.tencentcloud.com/document/product/1416/56008?from_cn_redirect=1">alert rule description</a>.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getState() Obtain Alert rule status.
2 - enable.
3 - disabled.
Enabled by default if left empty.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setState(integer $State) Set Alert rule status.
2 - enable.
3 - disabled.
Enabled by default if left empty.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PrometheusAlertGroupRuleSet extends AbstractModel
{
    /**
     * @var string Alert rule name. same name is not allowed in the same Alert group.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleName;

    /**
     * @var array Prometheus alert label list.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Labels;

    /**
     * @var array Prometheus alert annotation list.

Alarm object and Alarm message are special fields of Prometheus Rule Annotations. they need to pass through Annotations for transmission. the corresponding keys are summary and description respectively.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Annotations;

    /**
     * @var string Alert will be triggered after 'Expr' satisfied for 'Duration'.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Duration;

    /**
     * @var string Alert expression. see <a href="https://www.tencentcloud.com/document/product/1416/56008?from_cn_redirect=1">alert rule description</a>.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Expr;

    /**
     * @var integer Alert rule status.
2 - enable.
3 - disabled.
Enabled by default if left empty.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $State;

    /**
     * @param string $RuleName Alert rule name. same name is not allowed in the same Alert group.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Labels Prometheus alert label list.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Annotations Prometheus alert annotation list.

Alarm object and Alarm message are special fields of Prometheus Rule Annotations. they need to pass through Annotations for transmission. the corresponding keys are summary and description respectively.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Duration Alert will be triggered after 'Expr' satisfied for 'Duration'.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Expr Alert expression. see <a href="https://www.tencentcloud.com/document/product/1416/56008?from_cn_redirect=1">alert rule description</a>.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $State Alert rule status.
2 - enable.
3 - disabled.
Enabled by default if left empty.
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
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

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Expr",$param) and $param["Expr"] !== null) {
            $this->Expr = $param["Expr"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }
    }
}
