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
namespace TencentCloud\Gwlb\V20240906\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGatewayLoadBalancers request structure.
 *
 * @method array getLoadBalancerIds() Obtain GWLB instance ID. Batch filtering is supported with a maximum of 20 instance IDs.
 * @method void setLoadBalancerIds(array $LoadBalancerIds) Set GWLB instance ID. Batch filtering is supported with a maximum of 20 instance IDs.
 * @method integer getLimit() Obtain Number of GWLB instances returned in a batch, with a default value of 20 and a maximum value of 100.
 * @method void setLimit(integer $Limit) Set Number of GWLB instances returned in a batch, with a default value of 20 and a maximum value of 100.
 * @method integer getOffset() Obtain Starting offset for returning the list of GWLB instances, with a default value of 0.
 * @method void setOffset(integer $Offset) Set Starting offset for returning the list of GWLB instances, with a default value of 0.
 * @method array getFilters() Obtain Filter criteria for querying the CLB details list. For each request, the maximum value of Filters is 10, and the maximum value of Filter.Values is 100.Filter.Name and Filter.Values are both required. Detailed filter criteria are as follows:- name - String - required: No - (filter criteria) filter by GWLB instance name, such as "gwlb-xxxx".- VpcId - String - required: No - (filter criteria) filter by the VPC to which the GWLB instance belongs, such as "vpc-bhqk****".
 * @method void setFilters(array $Filters) Set Filter criteria for querying the CLB details list. For each request, the maximum value of Filters is 10, and the maximum value of Filter.Values is 100.Filter.Name and Filter.Values are both required. Detailed filter criteria are as follows:- name - String - required: No - (filter criteria) filter by GWLB instance name, such as "gwlb-xxxx".- VpcId - String - required: No - (filter criteria) filter by the VPC to which the GWLB instance belongs, such as "vpc-bhqk****".
 * @method string getSearchKey() Obtain Search field, for fuzzy matching of name and VIP.
 * @method void setSearchKey(string $SearchKey) Set Search field, for fuzzy matching of name and VIP.
 */
class DescribeGatewayLoadBalancersRequest extends AbstractModel
{
    /**
     * @var array GWLB instance ID. Batch filtering is supported with a maximum of 20 instance IDs.
     */
    public $LoadBalancerIds;

    /**
     * @var integer Number of GWLB instances returned in a batch, with a default value of 20 and a maximum value of 100.
     */
    public $Limit;

    /**
     * @var integer Starting offset for returning the list of GWLB instances, with a default value of 0.
     */
    public $Offset;

    /**
     * @var array Filter criteria for querying the CLB details list. For each request, the maximum value of Filters is 10, and the maximum value of Filter.Values is 100.Filter.Name and Filter.Values are both required. Detailed filter criteria are as follows:- name - String - required: No - (filter criteria) filter by GWLB instance name, such as "gwlb-xxxx".- VpcId - String - required: No - (filter criteria) filter by the VPC to which the GWLB instance belongs, such as "vpc-bhqk****".
     */
    public $Filters;

    /**
     * @var string Search field, for fuzzy matching of name and VIP.
     */
    public $SearchKey;

    /**
     * @param array $LoadBalancerIds GWLB instance ID. Batch filtering is supported with a maximum of 20 instance IDs.
     * @param integer $Limit Number of GWLB instances returned in a batch, with a default value of 20 and a maximum value of 100.
     * @param integer $Offset Starting offset for returning the list of GWLB instances, with a default value of 0.
     * @param array $Filters Filter criteria for querying the CLB details list. For each request, the maximum value of Filters is 10, and the maximum value of Filter.Values is 100.Filter.Name and Filter.Values are both required. Detailed filter criteria are as follows:- name - String - required: No - (filter criteria) filter by GWLB instance name, such as "gwlb-xxxx".- VpcId - String - required: No - (filter criteria) filter by the VPC to which the GWLB instance belongs, such as "vpc-bhqk****".
     * @param string $SearchKey Search field, for fuzzy matching of name and VIP.
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
        if (array_key_exists("LoadBalancerIds",$param) and $param["LoadBalancerIds"] !== null) {
            $this->LoadBalancerIds = $param["LoadBalancerIds"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }
    }
}
