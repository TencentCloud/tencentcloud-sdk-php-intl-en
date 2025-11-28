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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCustomizedConfigList request structure.
 *
 * @method string getConfigType() Obtain Configuration type. Valid values: `CLB` (CLB-specific configs), `SERVER` (domain name-specific configs), and `LOCATION` (forwarding rule-specific configs).
 * @method void setConfigType(string $ConfigType) Set Configuration type. Valid values: `CLB` (CLB-specific configs), `SERVER` (domain name-specific configs), and `LOCATION` (forwarding rule-specific configs).
 * @method integer getOffset() Obtain Pagination offset. defaults to 0.
 * @method void setOffset(integer $Offset) Set Pagination offset. defaults to 0.
 * @method integer getLimit() Obtain Number of results. default value: 20.
 * @method void setLimit(integer $Limit) Set Number of results. default value: 20.
 * @method string getConfigName() Obtain Specifies the name of configs to query. Fuzzy match is supported.
 * @method void setConfigName(string $ConfigName) Set Specifies the name of configs to query. Fuzzy match is supported.
 * @method array getUconfigIds() Obtain Configuration ID, can be accessed through the [DescribeCustomizedConfigList](https://www.tencentcloud.comom/document/api/214/60009?from_cn_redirect=1) api.
 * @method void setUconfigIds(array $UconfigIds) Set Configuration ID, can be accessed through the [DescribeCustomizedConfigList](https://www.tencentcloud.comom/document/api/214/60009?from_cn_redirect=1) api.
 * @method array getFilters() Obtain Filter criteria as follows:.
- loadbalancer-id
Filter by [cloud load balancer ID]. instance billing mode such as lb-9vxezxza.
Type: String.
Required: No
Method for obtaining: [DescribeLoadBalancers](https://www.tencentcloud.comom/document/product/1108/48459?from_cn_redirect=1).
- vip
Filter by [clb VIP]. network billing mode such as "1.1.1.1", "2204::22:3".
Type: String.
Required: No
Method for obtaining: [DescribeLoadBalancers](https://www.tencentcloud.comom/document/product/1108/48459?from_cn_redirect=1).
 * @method void setFilters(array $Filters) Set Filter criteria as follows:.
- loadbalancer-id
Filter by [cloud load balancer ID]. instance billing mode such as lb-9vxezxza.
Type: String.
Required: No
Method for obtaining: [DescribeLoadBalancers](https://www.tencentcloud.comom/document/product/1108/48459?from_cn_redirect=1).
- vip
Filter by [clb VIP]. network billing mode such as "1.1.1.1", "2204::22:3".
Type: String.
Required: No
Method for obtaining: [DescribeLoadBalancers](https://www.tencentcloud.comom/document/product/1108/48459?from_cn_redirect=1).
 */
class DescribeCustomizedConfigListRequest extends AbstractModel
{
    /**
     * @var string Configuration type. Valid values: `CLB` (CLB-specific configs), `SERVER` (domain name-specific configs), and `LOCATION` (forwarding rule-specific configs).
     */
    public $ConfigType;

    /**
     * @var integer Pagination offset. defaults to 0.
     */
    public $Offset;

    /**
     * @var integer Number of results. default value: 20.
     */
    public $Limit;

    /**
     * @var string Specifies the name of configs to query. Fuzzy match is supported.
     */
    public $ConfigName;

    /**
     * @var array Configuration ID, can be accessed through the [DescribeCustomizedConfigList](https://www.tencentcloud.comom/document/api/214/60009?from_cn_redirect=1) api.
     */
    public $UconfigIds;

    /**
     * @var array Filter criteria as follows:.
- loadbalancer-id
Filter by [cloud load balancer ID]. instance billing mode such as lb-9vxezxza.
Type: String.
Required: No
Method for obtaining: [DescribeLoadBalancers](https://www.tencentcloud.comom/document/product/1108/48459?from_cn_redirect=1).
- vip
Filter by [clb VIP]. network billing mode such as "1.1.1.1", "2204::22:3".
Type: String.
Required: No
Method for obtaining: [DescribeLoadBalancers](https://www.tencentcloud.comom/document/product/1108/48459?from_cn_redirect=1).
     */
    public $Filters;

    /**
     * @param string $ConfigType Configuration type. Valid values: `CLB` (CLB-specific configs), `SERVER` (domain name-specific configs), and `LOCATION` (forwarding rule-specific configs).
     * @param integer $Offset Pagination offset. defaults to 0.
     * @param integer $Limit Number of results. default value: 20.
     * @param string $ConfigName Specifies the name of configs to query. Fuzzy match is supported.
     * @param array $UconfigIds Configuration ID, can be accessed through the [DescribeCustomizedConfigList](https://www.tencentcloud.comom/document/api/214/60009?from_cn_redirect=1) api.
     * @param array $Filters Filter criteria as follows:.
- loadbalancer-id
Filter by [cloud load balancer ID]. instance billing mode such as lb-9vxezxza.
Type: String.
Required: No
Method for obtaining: [DescribeLoadBalancers](https://www.tencentcloud.comom/document/product/1108/48459?from_cn_redirect=1).
- vip
Filter by [clb VIP]. network billing mode such as "1.1.1.1", "2204::22:3".
Type: String.
Required: No
Method for obtaining: [DescribeLoadBalancers](https://www.tencentcloud.comom/document/product/1108/48459?from_cn_redirect=1).
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
        if (array_key_exists("ConfigType",$param) and $param["ConfigType"] !== null) {
            $this->ConfigType = $param["ConfigType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("UconfigIds",$param) and $param["UconfigIds"] !== null) {
            $this->UconfigIds = $param["UconfigIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
