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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeK8sApiAbnormalRuleList request structure.
 *
 * @method string getBy() Obtain Sorting field.
<li>`UpdateTime` - String - Optional - Last updated</li>
<li>`EffectClusterCount` - String - Optional - Number of clusters affected</li>
 * @method void setBy(string $By) Set Sorting field.
<li>`UpdateTime` - String - Optional - Last updated</li>
<li>`EffectClusterCount` - String - Optional - Number of clusters affected</li>
 * @method array getFilters() Obtain Filter criteria
<li>RuleType - string - required: no - rule type</li>
<li>Status - string - required: no - status</li>
<li>RuleName - string - required: no - rule name (fuzzy query)</li>
<li>ClusterName - string - Required: No - Cluster name. Fuzzy search for rules bound to the cluster (including full cluster rules).</li>
<li>ClusterID - string - Required: No - Cluster ID. Fuzzy search for rules bound to the cluster (including cluster rules).</li>
<li>RuleAction - string - Required: No - Execution action filter. Value: RULE_MODE_ALERT (alert), RULE_MODE_HOLDUP (intercept)</li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>RuleType - string - required: no - rule type</li>
<li>Status - string - required: no - status</li>
<li>RuleName - string - required: no - rule name (fuzzy query)</li>
<li>ClusterName - string - Required: No - Cluster name. Fuzzy search for rules bound to the cluster (including full cluster rules).</li>
<li>ClusterID - string - Required: No - Cluster ID. Fuzzy search for rules bound to the cluster (including cluster rules).</li>
<li>RuleAction - string - Required: No - Execution action filter. Value: RULE_MODE_ALERT (alert), RULE_MODE_HOLDUP (intercept)</li>
 * @method integer getLimit() Obtain The number of results returned. Default value: 10. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set The number of results returned. Default value: 10. Maximum value: 100.
 * @method integer getOffset() Obtain Offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0
 * @method string getOrder() Obtain Sort order
 * @method void setOrder(string $Order) Set Sort order
 */
class DescribeK8sApiAbnormalRuleListRequest extends AbstractModel
{
    /**
     * @var string Sorting field.
<li>`UpdateTime` - String - Optional - Last updated</li>
<li>`EffectClusterCount` - String - Optional - Number of clusters affected</li>
     */
    public $By;

    /**
     * @var array Filter criteria
<li>RuleType - string - required: no - rule type</li>
<li>Status - string - required: no - status</li>
<li>RuleName - string - required: no - rule name (fuzzy query)</li>
<li>ClusterName - string - Required: No - Cluster name. Fuzzy search for rules bound to the cluster (including full cluster rules).</li>
<li>ClusterID - string - Required: No - Cluster ID. Fuzzy search for rules bound to the cluster (including cluster rules).</li>
<li>RuleAction - string - Required: No - Execution action filter. Value: RULE_MODE_ALERT (alert), RULE_MODE_HOLDUP (intercept)</li>
     */
    public $Filters;

    /**
     * @var integer The number of results returned. Default value: 10. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0
     */
    public $Offset;

    /**
     * @var string Sort order
     */
    public $Order;

    /**
     * @param string $By Sorting field.
<li>`UpdateTime` - String - Optional - Last updated</li>
<li>`EffectClusterCount` - String - Optional - Number of clusters affected</li>
     * @param array $Filters Filter criteria
<li>RuleType - string - required: no - rule type</li>
<li>Status - string - required: no - status</li>
<li>RuleName - string - required: no - rule name (fuzzy query)</li>
<li>ClusterName - string - Required: No - Cluster name. Fuzzy search for rules bound to the cluster (including full cluster rules).</li>
<li>ClusterID - string - Required: No - Cluster ID. Fuzzy search for rules bound to the cluster (including cluster rules).</li>
<li>RuleAction - string - Required: No - Execution action filter. Value: RULE_MODE_ALERT (alert), RULE_MODE_HOLDUP (intercept)</li>
     * @param integer $Limit The number of results returned. Default value: 10. Maximum value: 100.
     * @param integer $Offset Offset. Default value: 0
     * @param string $Order Sort order
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
        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new RunTimeFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
