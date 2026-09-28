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
 * DescribeListenerHealthStatus request structure.
 *
 * @method string getListenerId() Obtain Listener ID, in the format of lst- followed by 8 alphanumeric characters.
 * @method void setListenerId(string $ListenerId) Set Listener ID, in the format of lst- followed by 8 alphanumeric characters.
 * @method string getLoadBalancerId() Obtain Cloud Load Balancer instance ID. The format is alb- followed by 8 alphanumeric characters.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set Cloud Load Balancer instance ID. The format is alb- followed by 8 alphanumeric characters.
 * @method boolean getIncludeRule() Obtain Whether the health check result contains forwarding rules. If false, only return the health status of the default forwarding rule. If true, return the health status of all rules (including the default rule).
Valid values:
true: yes
`false` (default value): no.
 * @method void setIncludeRule(boolean $IncludeRule) Set Whether the health check result contains forwarding rules. If false, only return the health status of the default forwarding rule. If true, return the health status of all rules (including the default rule).
Valid values:
true: yes
`false` (default value): no.
 * @method integer getMaxResults() Obtain Maximum number of data records read this time.
Value: 1-100.
Default value: 20
 * @method void setMaxResults(integer $MaxResults) Set Maximum number of data records read this time.
Value: 1-100.
Default value: 20
 * @method string getNextToken() Obtain Token for querying the next page. Not required for the first query.
 * @method void setNextToken(string $NextToken) Set Token for querying the next page. Not required for the first query.
 */
class DescribeListenerHealthStatusRequest extends AbstractModel
{
    /**
     * @var string Listener ID, in the format of lst- followed by 8 alphanumeric characters.
     */
    public $ListenerId;

    /**
     * @var string Cloud Load Balancer instance ID. The format is alb- followed by 8 alphanumeric characters.
     */
    public $LoadBalancerId;

    /**
     * @var boolean Whether the health check result contains forwarding rules. If false, only return the health status of the default forwarding rule. If true, return the health status of all rules (including the default rule).
Valid values:
true: yes
`false` (default value): no.
     */
    public $IncludeRule;

    /**
     * @var integer Maximum number of data records read this time.
Value: 1-100.
Default value: 20
     */
    public $MaxResults;

    /**
     * @var string Token for querying the next page. Not required for the first query.
     */
    public $NextToken;

    /**
     * @param string $ListenerId Listener ID, in the format of lst- followed by 8 alphanumeric characters.
     * @param string $LoadBalancerId Cloud Load Balancer instance ID. The format is alb- followed by 8 alphanumeric characters.
     * @param boolean $IncludeRule Whether the health check result contains forwarding rules. If false, only return the health status of the default forwarding rule. If true, return the health status of all rules (including the default rule).
Valid values:
true: yes
`false` (default value): no.
     * @param integer $MaxResults Maximum number of data records read this time.
Value: 1-100.
Default value: 20
     * @param string $NextToken Token for querying the next page. Not required for the first query.
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

        if (array_key_exists("IncludeRule",$param) and $param["IncludeRule"] !== null) {
            $this->IncludeRule = $param["IncludeRule"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }
    }
}
