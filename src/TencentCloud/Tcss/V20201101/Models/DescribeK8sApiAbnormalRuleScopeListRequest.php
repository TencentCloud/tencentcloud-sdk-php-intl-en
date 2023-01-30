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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeK8sApiAbnormalRuleScopeList request structure.
 *
 * @method string getRuleID() Obtain Rule ID
 * @method void setRuleID(string $RuleID) Set Rule ID
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method integer getLimit() Obtain The number of results returned. Default value: 10. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set The number of results returned. Default value: 10. Maximum value: 100.
 * @method array getFilters() Obtain Filters.
<li>`Action` - String - Optional - Filter by action</li>
<li>`RiskLevel` - String - Optional - Threat level</li>
 * @method void setFilters(array $Filters) Set Filters.
<li>`Action` - String - Optional - Filter by action</li>
<li>`RiskLevel` - String - Optional - Threat level</li>
 */
class DescribeK8sApiAbnormalRuleScopeListRequest extends AbstractModel
{
    /**
     * @var string Rule ID
     */
    public $RuleID;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var integer The number of results returned. Default value: 10. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var array Filters.
<li>`Action` - String - Optional - Filter by action</li>
<li>`RiskLevel` - String - Optional - Threat level</li>
     */
    public $Filters;

    /**
     * @param string $RuleID Rule ID
     * @param integer $Offset Offset
     * @param integer $Limit The number of results returned. Default value: 10. Maximum value: 100.
     * @param array $Filters Filters.
<li>`Action` - String - Optional - Filter by action</li>
<li>`RiskLevel` - String - Optional - Threat level</li>
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
        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new RunTimeFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
