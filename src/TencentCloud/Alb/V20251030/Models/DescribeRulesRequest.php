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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRules request structure.
 *
 * @method string getListenerId() Obtain Listener ID, in the format of lst- followed by 8 alphanumeric characters.
 * @method void setListenerId(string $ListenerId) Set Listener ID, in the format of lst- followed by 8 alphanumeric characters.
 * @method string getLoadBalancerId() Obtain CLB instance ID. The format is alb- followed by 8 alphanumeric characters.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID. The format is alb- followed by 8 alphanumeric characters.
 * @method array getFilters() Obtain Supported filter conditions are as follows:
 * @method void setFilters(array $Filters) Set Supported filter conditions are as follows:
 * @method integer getMaxResults() Obtain Number of lists returned. Default value: 20. Maximum value: 100.
 * @method void setMaxResults(integer $MaxResults) Set Number of lists returned. Default value: 20. Maximum value: 100.
 * @method string getNextToken() Obtain Token for the next query. Not required for the first query or when there is no next query. If there is a next query, the value is the NextToken returned from the last API call.
 * @method void setNextToken(string $NextToken) Set Token for the next query. Not required for the first query or when there is no next query. If there is a next query, the value is the NextToken returned from the last API call.
 * @method array getRuleIds() Obtain List of forwarding rule IDs. Each ID is in the format of `rule-` followed by 8 alphanumeric characters.
 * @method void setRuleIds(array $RuleIds) Set List of forwarding rule IDs. Each ID is in the format of `rule-` followed by 8 alphanumeric characters.
 */
class DescribeRulesRequest extends AbstractModel
{
    /**
     * @var string Listener ID, in the format of lst- followed by 8 alphanumeric characters.
     */
    public $ListenerId;

    /**
     * @var string CLB instance ID. The format is alb- followed by 8 alphanumeric characters.
     */
    public $LoadBalancerId;

    /**
     * @var array Supported filter conditions are as follows:
     */
    public $Filters;

    /**
     * @var integer Number of lists returned. Default value: 20. Maximum value: 100.
     */
    public $MaxResults;

    /**
     * @var string Token for the next query. Not required for the first query or when there is no next query. If there is a next query, the value is the NextToken returned from the last API call.
     */
    public $NextToken;

    /**
     * @var array List of forwarding rule IDs. Each ID is in the format of `rule-` followed by 8 alphanumeric characters.
     */
    public $RuleIds;

    /**
     * @param string $ListenerId Listener ID, in the format of lst- followed by 8 alphanumeric characters.
     * @param string $LoadBalancerId CLB instance ID. The format is alb- followed by 8 alphanumeric characters.
     * @param array $Filters Supported filter conditions are as follows:
     * @param integer $MaxResults Number of lists returned. Default value: 20. Maximum value: 100.
     * @param string $NextToken Token for the next query. Not required for the first query or when there is no next query. If there is a next query, the value is the NextToken returned from the last API call.
     * @param array $RuleIds List of forwarding rule IDs. Each ID is in the format of `rule-` followed by 8 alphanumeric characters.
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("RuleIds",$param) and $param["RuleIds"] !== null) {
            $this->RuleIds = $param["RuleIds"];
        }
    }
}
