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
 * DescribeLoadBalancersDetail request structure.
 *
 * @method integer getLimit() Obtain Number of CLB instance lists returned. Default value: 20; maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of CLB instance lists returned. Default value: 20; maximum value: 100.
 * @method integer getOffset() Obtain Starting offset of the CLB instance list returned. Default value: 0.
 * @method void setOffset(integer $Offset) Set Starting offset of the CLB instance list returned. Default value: 0.
 * @method array getFields() Obtain List of fields. Only fields specified will be returned. If it’s left blank, `null` is returned. The fields `LoadBalancerId` and `LoadBalancerName` are added by default. For details about fields, see <a href="https://intl.cloud.tencent.com/document/api/214/30694?from_cn_redirect=1#LoadBalancerDetail">LoadBalancerDetail</a>.
 * @method void setFields(array $Fields) Set List of fields. Only fields specified will be returned. If it’s left blank, `null` is returned. The fields `LoadBalancerId` and `LoadBalancerName` are added by default. For details about fields, see <a href="https://intl.cloud.tencent.com/document/api/214/30694?from_cn_redirect=1#LoadBalancerDetail">LoadBalancerDetail</a>.
 * @method string getTargetType() Obtain When the Fields include TargetId, TargetAddress, TargetPort, TargetWeight, ListenerId, Protocol, Port, LocationId, Domain, and Url, you must select exporting the Target of the Target GROUP or a non-Target GROUP. valid values: NODE, GROUP.
 * @method void setTargetType(string $TargetType) Set When the Fields include TargetId, TargetAddress, TargetPort, TargetWeight, ListenerId, Protocol, Port, LocationId, Domain, and Url, you must select exporting the Target of the Target GROUP or a non-Target GROUP. valid values: NODE, GROUP.
 * @method array getFilters() Obtain Querying conditions for cloud load balancer detailed information list. detailed filter criteria.
- loadbalancer-id
Filter by [clb ID], for example: lb-rbw5skde.
Type: String.
Required: No
Method for obtaining: [DescribeLoadBalancers](https://www.tencentcloud.com/document/product/1108/48459?from_cn_redirect=1).
- project-id
Filters by [project ID]. for example: "0", "123".
Type: String.
Required: No
Method for obtaining: [DescribeProject](https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1).
- network
Filters by [clb network type]. for example: Public.
Type: String.
Required: No
Valid values: Private (Private network), Public (Public network).
- vip
Filter by [cloud load balancer VIP], such as "1.1.1.1", "2204::22:3".
Type: String.
Required: No
- vpcid
Filter by the vpc to which the cloud load balancer belongs, such as "vpc-12345678".
Type: String.
Required: No
Method for obtaining: [DescribeZones](https://www.tencentcloud.com/document/product/213/15707?from_cn_redirect=1).
- target-ip
Filters by the private network IP of the backend destination. for example: "1.1.1.1", "2203::214:4".
Type: String.
Required: No
- zone
Filter by [availability zone of the cloud load balancer]. for example: "ap-guangzhou-1".
Type: String.
Required: No
Method for obtaining: [DescribeZones](https://www.tencentcloud.com/document/product/213/15707?from_cn_redirect=1).
- tag-key
Filters by [tag key of the cloud load balancer tag], for example: "name".
Type: String.
Required: No
Method for obtaining: [DescribeTags](https://www.tencentcloud.com/document/api/651/35316?from_cn_redirect=1).
- tag:*
Filter by [cloud load balancer tag], where ':' is followed by the tag key. for example, to filter by tag key 'name' with tag Values 'zhangsan' and 'lisi', use {"name": "tag:name","Values": ["zhangsan", "lisi"]}.
Type: String.
Required: No
Method for obtaining: [DescribeTagKeys](https://www.tencentcloud.com/document/api/651/35318?from_cn_redirect=1).
- fuzzy-search
Searches by [clb VIP, clb name] using fuzzy search, for example: "1.1".
Type: String.
Required: No
 * @method void setFilters(array $Filters) Set Querying conditions for cloud load balancer detailed information list. detailed filter criteria.
- loadbalancer-id
Filter by [clb ID], for example: lb-rbw5skde.
Type: String.
Required: No
Method for obtaining: [DescribeLoadBalancers](https://www.tencentcloud.com/document/product/1108/48459?from_cn_redirect=1).
- project-id
Filters by [project ID]. for example: "0", "123".
Type: String.
Required: No
Method for obtaining: [DescribeProject](https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1).
- network
Filters by [clb network type]. for example: Public.
Type: String.
Required: No
Valid values: Private (Private network), Public (Public network).
- vip
Filter by [cloud load balancer VIP], such as "1.1.1.1", "2204::22:3".
Type: String.
Required: No
- vpcid
Filter by the vpc to which the cloud load balancer belongs, such as "vpc-12345678".
Type: String.
Required: No
Method for obtaining: [DescribeZones](https://www.tencentcloud.com/document/product/213/15707?from_cn_redirect=1).
- target-ip
Filters by the private network IP of the backend destination. for example: "1.1.1.1", "2203::214:4".
Type: String.
Required: No
- zone
Filter by [availability zone of the cloud load balancer]. for example: "ap-guangzhou-1".
Type: String.
Required: No
Method for obtaining: [DescribeZones](https://www.tencentcloud.com/document/product/213/15707?from_cn_redirect=1).
- tag-key
Filters by [tag key of the cloud load balancer tag], for example: "name".
Type: String.
Required: No
Method for obtaining: [DescribeTags](https://www.tencentcloud.com/document/api/651/35316?from_cn_redirect=1).
- tag:*
Filter by [cloud load balancer tag], where ':' is followed by the tag key. for example, to filter by tag key 'name' with tag Values 'zhangsan' and 'lisi', use {"name": "tag:name","Values": ["zhangsan", "lisi"]}.
Type: String.
Required: No
Method for obtaining: [DescribeTagKeys](https://www.tencentcloud.com/document/api/651/35318?from_cn_redirect=1).
- fuzzy-search
Searches by [clb VIP, clb name] using fuzzy search, for example: "1.1".
Type: String.
Required: No
 */
class DescribeLoadBalancersDetailRequest extends AbstractModel
{
    /**
     * @var integer Number of CLB instance lists returned. Default value: 20; maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Starting offset of the CLB instance list returned. Default value: 0.
     */
    public $Offset;

    /**
     * @var array List of fields. Only fields specified will be returned. If it’s left blank, `null` is returned. The fields `LoadBalancerId` and `LoadBalancerName` are added by default. For details about fields, see <a href="https://intl.cloud.tencent.com/document/api/214/30694?from_cn_redirect=1#LoadBalancerDetail">LoadBalancerDetail</a>.
     */
    public $Fields;

    /**
     * @var string When the Fields include TargetId, TargetAddress, TargetPort, TargetWeight, ListenerId, Protocol, Port, LocationId, Domain, and Url, you must select exporting the Target of the Target GROUP or a non-Target GROUP. valid values: NODE, GROUP.
     */
    public $TargetType;

    /**
     * @var array Querying conditions for cloud load balancer detailed information list. detailed filter criteria.
- loadbalancer-id
Filter by [clb ID], for example: lb-rbw5skde.
Type: String.
Required: No
Method for obtaining: [DescribeLoadBalancers](https://www.tencentcloud.com/document/product/1108/48459?from_cn_redirect=1).
- project-id
Filters by [project ID]. for example: "0", "123".
Type: String.
Required: No
Method for obtaining: [DescribeProject](https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1).
- network
Filters by [clb network type]. for example: Public.
Type: String.
Required: No
Valid values: Private (Private network), Public (Public network).
- vip
Filter by [cloud load balancer VIP], such as "1.1.1.1", "2204::22:3".
Type: String.
Required: No
- vpcid
Filter by the vpc to which the cloud load balancer belongs, such as "vpc-12345678".
Type: String.
Required: No
Method for obtaining: [DescribeZones](https://www.tencentcloud.com/document/product/213/15707?from_cn_redirect=1).
- target-ip
Filters by the private network IP of the backend destination. for example: "1.1.1.1", "2203::214:4".
Type: String.
Required: No
- zone
Filter by [availability zone of the cloud load balancer]. for example: "ap-guangzhou-1".
Type: String.
Required: No
Method for obtaining: [DescribeZones](https://www.tencentcloud.com/document/product/213/15707?from_cn_redirect=1).
- tag-key
Filters by [tag key of the cloud load balancer tag], for example: "name".
Type: String.
Required: No
Method for obtaining: [DescribeTags](https://www.tencentcloud.com/document/api/651/35316?from_cn_redirect=1).
- tag:*
Filter by [cloud load balancer tag], where ':' is followed by the tag key. for example, to filter by tag key 'name' with tag Values 'zhangsan' and 'lisi', use {"name": "tag:name","Values": ["zhangsan", "lisi"]}.
Type: String.
Required: No
Method for obtaining: [DescribeTagKeys](https://www.tencentcloud.com/document/api/651/35318?from_cn_redirect=1).
- fuzzy-search
Searches by [clb VIP, clb name] using fuzzy search, for example: "1.1".
Type: String.
Required: No
     */
    public $Filters;

    /**
     * @param integer $Limit Number of CLB instance lists returned. Default value: 20; maximum value: 100.
     * @param integer $Offset Starting offset of the CLB instance list returned. Default value: 0.
     * @param array $Fields List of fields. Only fields specified will be returned. If it’s left blank, `null` is returned. The fields `LoadBalancerId` and `LoadBalancerName` are added by default. For details about fields, see <a href="https://intl.cloud.tencent.com/document/api/214/30694?from_cn_redirect=1#LoadBalancerDetail">LoadBalancerDetail</a>.
     * @param string $TargetType When the Fields include TargetId, TargetAddress, TargetPort, TargetWeight, ListenerId, Protocol, Port, LocationId, Domain, and Url, you must select exporting the Target of the Target GROUP or a non-Target GROUP. valid values: NODE, GROUP.
     * @param array $Filters Querying conditions for cloud load balancer detailed information list. detailed filter criteria.
- loadbalancer-id
Filter by [clb ID], for example: lb-rbw5skde.
Type: String.
Required: No
Method for obtaining: [DescribeLoadBalancers](https://www.tencentcloud.com/document/product/1108/48459?from_cn_redirect=1).
- project-id
Filters by [project ID]. for example: "0", "123".
Type: String.
Required: No
Method for obtaining: [DescribeProject](https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1).
- network
Filters by [clb network type]. for example: Public.
Type: String.
Required: No
Valid values: Private (Private network), Public (Public network).
- vip
Filter by [cloud load balancer VIP], such as "1.1.1.1", "2204::22:3".
Type: String.
Required: No
- vpcid
Filter by the vpc to which the cloud load balancer belongs, such as "vpc-12345678".
Type: String.
Required: No
Method for obtaining: [DescribeZones](https://www.tencentcloud.com/document/product/213/15707?from_cn_redirect=1).
- target-ip
Filters by the private network IP of the backend destination. for example: "1.1.1.1", "2203::214:4".
Type: String.
Required: No
- zone
Filter by [availability zone of the cloud load balancer]. for example: "ap-guangzhou-1".
Type: String.
Required: No
Method for obtaining: [DescribeZones](https://www.tencentcloud.com/document/product/213/15707?from_cn_redirect=1).
- tag-key
Filters by [tag key of the cloud load balancer tag], for example: "name".
Type: String.
Required: No
Method for obtaining: [DescribeTags](https://www.tencentcloud.com/document/api/651/35316?from_cn_redirect=1).
- tag:*
Filter by [cloud load balancer tag], where ':' is followed by the tag key. for example, to filter by tag key 'name' with tag Values 'zhangsan' and 'lisi', use {"name": "tag:name","Values": ["zhangsan", "lisi"]}.
Type: String.
Required: No
Method for obtaining: [DescribeTagKeys](https://www.tencentcloud.com/document/api/651/35318?from_cn_redirect=1).
- fuzzy-search
Searches by [clb VIP, clb name] using fuzzy search, for example: "1.1".
Type: String.
Required: No
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = $param["Fields"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
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
