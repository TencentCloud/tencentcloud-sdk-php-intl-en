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
 * DescribeLoadBalancers request structure.
 *
 * @method array getFilters() Obtain <p>Query filter criteria, supporting the following fields</p><ul><li><strong>LoadBalancerId</strong>: Cloud Load Balancer instance ID</li><li><strong>LoadBalancerName</strong>: CLB name</li><li><strong>LoadBalancerStatus</strong>: load balancing status</li><li><strong>VpcId</strong>: VPC ID</li><li><strong>tag:tag-key</strong>: filter by tag key-value pair. Replace tag-key with the actual tag key. For example, <code>tag:env</code> means filtering by the tag key <code>env</code>.</li><li><strong>AddressType</strong>: network type<ul><li><strong>Intranet</strong>: private network</li><li><strong>Internet</strong>: public network</li></ul></li><li><strong>AddressIpVersion</strong>:<ul><li><strong>IPv4</strong>: IPv4 address</li><li><strong>IPv6</strong>: IPv6 address</li></ul></li><li><strong>SecurityGroupId</strong>: security group ID</li></ul>
 * @method void setFilters(array $Filters) Set <p>Query filter criteria, supporting the following fields</p><ul><li><strong>LoadBalancerId</strong>: Cloud Load Balancer instance ID</li><li><strong>LoadBalancerName</strong>: CLB name</li><li><strong>LoadBalancerStatus</strong>: load balancing status</li><li><strong>VpcId</strong>: VPC ID</li><li><strong>tag:tag-key</strong>: filter by tag key-value pair. Replace tag-key with the actual tag key. For example, <code>tag:env</code> means filtering by the tag key <code>env</code>.</li><li><strong>AddressType</strong>: network type<ul><li><strong>Intranet</strong>: private network</li><li><strong>Internet</strong>: public network</li></ul></li><li><strong>AddressIpVersion</strong>:<ul><li><strong>IPv4</strong>: IPv4 address</li><li><strong>IPv6</strong>: IPv6 address</li></ul></li><li><strong>SecurityGroupId</strong>: security group ID</li></ul>
 * @method integer getMaxResults() Obtain <p>Number of entries displayed each time during a batch query. Value range: <strong>1</strong>–<strong>100</strong>. Default value: <strong>20</strong>.</p>
 * @method void setMaxResults(integer $MaxResults) Set <p>Number of entries displayed each time during a batch query. Value range: <strong>1</strong>–<strong>100</strong>. Default value: <strong>20</strong>.</p>
 * @method string getNextToken() Obtain <p>Whether there is a token for the next query. Value:</p><ul><li>Not required for the first query or when there is no next query.</li><li>If there is a next query, the value is the <strong>NextToken</strong> returned from the last API call.</li></ul>
 * @method void setNextToken(string $NextToken) Set <p>Whether there is a token for the next query. Value:</p><ul><li>Not required for the first query or when there is no next query.</li><li>If there is a next query, the value is the <strong>NextToken</strong> returned from the last API call.</li></ul>
 */
class DescribeLoadBalancersRequest extends AbstractModel
{
    /**
     * @var array <p>Query filter criteria, supporting the following fields</p><ul><li><strong>LoadBalancerId</strong>: Cloud Load Balancer instance ID</li><li><strong>LoadBalancerName</strong>: CLB name</li><li><strong>LoadBalancerStatus</strong>: load balancing status</li><li><strong>VpcId</strong>: VPC ID</li><li><strong>tag:tag-key</strong>: filter by tag key-value pair. Replace tag-key with the actual tag key. For example, <code>tag:env</code> means filtering by the tag key <code>env</code>.</li><li><strong>AddressType</strong>: network type<ul><li><strong>Intranet</strong>: private network</li><li><strong>Internet</strong>: public network</li></ul></li><li><strong>AddressIpVersion</strong>:<ul><li><strong>IPv4</strong>: IPv4 address</li><li><strong>IPv6</strong>: IPv6 address</li></ul></li><li><strong>SecurityGroupId</strong>: security group ID</li></ul>
     */
    public $Filters;

    /**
     * @var integer <p>Number of entries displayed each time during a batch query. Value range: <strong>1</strong>–<strong>100</strong>. Default value: <strong>20</strong>.</p>
     */
    public $MaxResults;

    /**
     * @var string <p>Whether there is a token for the next query. Value:</p><ul><li>Not required for the first query or when there is no next query.</li><li>If there is a next query, the value is the <strong>NextToken</strong> returned from the last API call.</li></ul>
     */
    public $NextToken;

    /**
     * @param array $Filters <p>Query filter criteria, supporting the following fields</p><ul><li><strong>LoadBalancerId</strong>: Cloud Load Balancer instance ID</li><li><strong>LoadBalancerName</strong>: CLB name</li><li><strong>LoadBalancerStatus</strong>: load balancing status</li><li><strong>VpcId</strong>: VPC ID</li><li><strong>tag:tag-key</strong>: filter by tag key-value pair. Replace tag-key with the actual tag key. For example, <code>tag:env</code> means filtering by the tag key <code>env</code>.</li><li><strong>AddressType</strong>: network type<ul><li><strong>Intranet</strong>: private network</li><li><strong>Internet</strong>: public network</li></ul></li><li><strong>AddressIpVersion</strong>:<ul><li><strong>IPv4</strong>: IPv4 address</li><li><strong>IPv6</strong>: IPv6 address</li></ul></li><li><strong>SecurityGroupId</strong>: security group ID</li></ul>
     * @param integer $MaxResults <p>Number of entries displayed each time during a batch query. Value range: <strong>1</strong>–<strong>100</strong>. Default value: <strong>20</strong>.</p>
     * @param string $NextToken <p>Whether there is a token for the next query. Value:</p><ul><li>Not required for the first query or when there is no next query.</li><li>If there is a next query, the value is the <strong>NextToken</strong> returned from the last API call.</li></ul>
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
    }
}
