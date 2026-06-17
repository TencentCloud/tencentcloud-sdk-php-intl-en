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
namespace TencentCloud\Clb\V20230417\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLoadBalancersDetail request structure.
 *
 * @method integer getLimit() Obtain Return the number of Cloud Load Balancer (CLB) lists. Default is 20. Maximum value is 100.
 * @method void setLimit(integer $Limit) Set Return the number of Cloud Load Balancer (CLB) lists. Default is 20. Maximum value is 100.
 * @method integer getOffset() Obtain Starting offset for returning the list of CLB instances, with a default value of 0.
 * @method void setOffset(integer $Offset) Set Starting offset for returning the list of CLB instances, with a default value of 0.
 * @method array getFields() Obtain Select the Fields list to return. The system will only return the Fields filled in Fields. For fillable field details, see <a href="https://www.tencentcloud.com/document/api/214/30694?from_cn_redirect=1#LoadBalancerDetail">LoadBalancerDetail</a>. If a related field is not in Fields, this field returns null. The LoadBalancerId and LoadBalancerName Fields are added by default in Fields.
 * @method void setFields(array $Fields) Set Select the Fields list to return. The system will only return the Fields filled in Fields. For fillable field details, see <a href="https://www.tencentcloud.com/document/api/214/30694?from_cn_redirect=1#LoadBalancerDetail">LoadBalancerDetail</a>. If a related field is not in Fields, this field returns null. The LoadBalancerId and LoadBalancerName Fields are added by default in Fields.
 * @method string getTargetType() Obtain When the Fields include TargetId, TargetAddress, TargetPort, TargetWeight, ListenerId, Protocol, Port, LocationId, Domain, and Url, you must select exporting the Target of the target group or a non-target group. Valid values: NODE, GROUP.
 * @method void setTargetType(string $TargetType) Set When the Fields include TargetId, TargetAddress, TargetPort, TargetWeight, ListenerId, Protocol, Port, LocationId, Domain, and Url, you must select exporting the Target of the target group or a non-target group. Valid values: NODE, GROUP.
 * @method array getFilters() Obtain Query the detailed information list of Cloud Load Balancer. Detailed filter criteria:
<li> loadbalancer-id - String - Required: No - (Filter condition) Filter by CLB ID, for example: "lb-12345678".</li>
<li> project-id - String - Required: No - (Filter condition) Filter by project ID, for example: "0", "123".</li>
<li>network - String - Required: No - (Filter condition) Filter by CLB network type, such as "Public" or "Private".</li>
<li> vip - String - Required: No - (Filter condition) Filter by CLB vip, for example: "1.1.1.1", "2204::22:3".</li>
<li> target-ip - String - Required: No - (Filtering Conditions) Filter by private ip of the target real server, such as "1.1.1.1", "2203::214:4".</li>
<li> vpcid - String - Required: No - (Filter condition) Filter by the associated vpc ID of the Cloud Load Balancer (CLB), such as "vpc-12345678".</li>
<li> zone - String - Required: No - (Filtering Conditions) Filter by the availability zone the load balancing belongs to, such as "ap-guangzhou-1".</li>
<li>tag-key - String - required: no - (filter condition) filter by tag key of Cloud Load Balancer, such as "name".</li>
<li> tag:* - String - Required: No - (Filter criteria) Filter by the tag of Cloud Load Balancer (CLB), where ':' is followed by the tag key. For example, to filter by tag key 'name' and tag values 'zhangsan' and 'lisi', use {"Name": "tag:name","Values": ["zhangsan", "lisi"]}.</li>
<li>fuzzy-search - String - required: no - (filter condition) fuzzy search by CLB Vip and CLB name, for example: "1.1".</li>
 * @method void setFilters(array $Filters) Set Query the detailed information list of Cloud Load Balancer. Detailed filter criteria:
<li> loadbalancer-id - String - Required: No - (Filter condition) Filter by CLB ID, for example: "lb-12345678".</li>
<li> project-id - String - Required: No - (Filter condition) Filter by project ID, for example: "0", "123".</li>
<li>network - String - Required: No - (Filter condition) Filter by CLB network type, such as "Public" or "Private".</li>
<li> vip - String - Required: No - (Filter condition) Filter by CLB vip, for example: "1.1.1.1", "2204::22:3".</li>
<li> target-ip - String - Required: No - (Filtering Conditions) Filter by private ip of the target real server, such as "1.1.1.1", "2203::214:4".</li>
<li> vpcid - String - Required: No - (Filter condition) Filter by the associated vpc ID of the Cloud Load Balancer (CLB), such as "vpc-12345678".</li>
<li> zone - String - Required: No - (Filtering Conditions) Filter by the availability zone the load balancing belongs to, such as "ap-guangzhou-1".</li>
<li>tag-key - String - required: no - (filter condition) filter by tag key of Cloud Load Balancer, such as "name".</li>
<li> tag:* - String - Required: No - (Filter criteria) Filter by the tag of Cloud Load Balancer (CLB), where ':' is followed by the tag key. For example, to filter by tag key 'name' and tag values 'zhangsan' and 'lisi', use {"Name": "tag:name","Values": ["zhangsan", "lisi"]}.</li>
<li>fuzzy-search - String - required: no - (filter condition) fuzzy search by CLB Vip and CLB name, for example: "1.1".</li>
 */
class DescribeLoadBalancersDetailRequest extends AbstractModel
{
    /**
     * @var integer Return the number of Cloud Load Balancer (CLB) lists. Default is 20. Maximum value is 100.
     */
    public $Limit;

    /**
     * @var integer Starting offset for returning the list of CLB instances, with a default value of 0.
     */
    public $Offset;

    /**
     * @var array Select the Fields list to return. The system will only return the Fields filled in Fields. For fillable field details, see <a href="https://www.tencentcloud.com/document/api/214/30694?from_cn_redirect=1#LoadBalancerDetail">LoadBalancerDetail</a>. If a related field is not in Fields, this field returns null. The LoadBalancerId and LoadBalancerName Fields are added by default in Fields.
     */
    public $Fields;

    /**
     * @var string When the Fields include TargetId, TargetAddress, TargetPort, TargetWeight, ListenerId, Protocol, Port, LocationId, Domain, and Url, you must select exporting the Target of the target group or a non-target group. Valid values: NODE, GROUP.
     */
    public $TargetType;

    /**
     * @var array Query the detailed information list of Cloud Load Balancer. Detailed filter criteria:
<li> loadbalancer-id - String - Required: No - (Filter condition) Filter by CLB ID, for example: "lb-12345678".</li>
<li> project-id - String - Required: No - (Filter condition) Filter by project ID, for example: "0", "123".</li>
<li>network - String - Required: No - (Filter condition) Filter by CLB network type, such as "Public" or "Private".</li>
<li> vip - String - Required: No - (Filter condition) Filter by CLB vip, for example: "1.1.1.1", "2204::22:3".</li>
<li> target-ip - String - Required: No - (Filtering Conditions) Filter by private ip of the target real server, such as "1.1.1.1", "2203::214:4".</li>
<li> vpcid - String - Required: No - (Filter condition) Filter by the associated vpc ID of the Cloud Load Balancer (CLB), such as "vpc-12345678".</li>
<li> zone - String - Required: No - (Filtering Conditions) Filter by the availability zone the load balancing belongs to, such as "ap-guangzhou-1".</li>
<li>tag-key - String - required: no - (filter condition) filter by tag key of Cloud Load Balancer, such as "name".</li>
<li> tag:* - String - Required: No - (Filter criteria) Filter by the tag of Cloud Load Balancer (CLB), where ':' is followed by the tag key. For example, to filter by tag key 'name' and tag values 'zhangsan' and 'lisi', use {"Name": "tag:name","Values": ["zhangsan", "lisi"]}.</li>
<li>fuzzy-search - String - required: no - (filter condition) fuzzy search by CLB Vip and CLB name, for example: "1.1".</li>
     */
    public $Filters;

    /**
     * @param integer $Limit Return the number of Cloud Load Balancer (CLB) lists. Default is 20. Maximum value is 100.
     * @param integer $Offset Starting offset for returning the list of CLB instances, with a default value of 0.
     * @param array $Fields Select the Fields list to return. The system will only return the Fields filled in Fields. For fillable field details, see <a href="https://www.tencentcloud.com/document/api/214/30694?from_cn_redirect=1#LoadBalancerDetail">LoadBalancerDetail</a>. If a related field is not in Fields, this field returns null. The LoadBalancerId and LoadBalancerName Fields are added by default in Fields.
     * @param string $TargetType When the Fields include TargetId, TargetAddress, TargetPort, TargetWeight, ListenerId, Protocol, Port, LocationId, Domain, and Url, you must select exporting the Target of the target group or a non-target group. Valid values: NODE, GROUP.
     * @param array $Filters Query the detailed information list of Cloud Load Balancer. Detailed filter criteria:
<li> loadbalancer-id - String - Required: No - (Filter condition) Filter by CLB ID, for example: "lb-12345678".</li>
<li> project-id - String - Required: No - (Filter condition) Filter by project ID, for example: "0", "123".</li>
<li>network - String - Required: No - (Filter condition) Filter by CLB network type, such as "Public" or "Private".</li>
<li> vip - String - Required: No - (Filter condition) Filter by CLB vip, for example: "1.1.1.1", "2204::22:3".</li>
<li> target-ip - String - Required: No - (Filtering Conditions) Filter by private ip of the target real server, such as "1.1.1.1", "2203::214:4".</li>
<li> vpcid - String - Required: No - (Filter condition) Filter by the associated vpc ID of the Cloud Load Balancer (CLB), such as "vpc-12345678".</li>
<li> zone - String - Required: No - (Filtering Conditions) Filter by the availability zone the load balancing belongs to, such as "ap-guangzhou-1".</li>
<li>tag-key - String - required: no - (filter condition) filter by tag key of Cloud Load Balancer, such as "name".</li>
<li> tag:* - String - Required: No - (Filter criteria) Filter by the tag of Cloud Load Balancer (CLB), where ':' is followed by the tag key. For example, to filter by tag key 'name' and tag values 'zhangsan' and 'lisi', use {"Name": "tag:name","Values": ["zhangsan", "lisi"]}.</li>
<li>fuzzy-search - String - required: no - (filter condition) fuzzy search by CLB Vip and CLB name, for example: "1.1".</li>
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
