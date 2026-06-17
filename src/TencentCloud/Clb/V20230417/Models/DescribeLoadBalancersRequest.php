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
 * DescribeLoadBalancers request structure.
 *
 * @method array getLoadBalancerIds() Obtain CLB instance ID. There can be up to 20 IDs.
 * @method void setLoadBalancerIds(array $LoadBalancerIds) Set CLB instance ID. There can be up to 20 IDs.
 * @method string getLoadBalancerType() Obtain Network type of the CLB instance:
OPEN: Public network attribute. INTERNAL: Private network attribute.
 * @method void setLoadBalancerType(string $LoadBalancerType) Set Network type of the CLB instance:
OPEN: Public network attribute. INTERNAL: Private network attribute.
 * @method integer getForward() Obtain CLB instance type. 1: General CLB instance; 0: Classic CLB instance. If this parameter is not specified, all types of CLB instances will be queried.
 * @method void setForward(integer $Forward) Set CLB instance type. 1: General CLB instance; 0: Classic CLB instance. If this parameter is not specified, all types of CLB instances will be queried.
 * @method string getLoadBalancerName() Obtain CLB instance name.
 * @method void setLoadBalancerName(string $LoadBalancerName) Set CLB instance name.
 * @method string getDomain() Obtain Domain name assigned for a CLB instance by the cloud platform.
 * @method void setDomain(string $Domain) Set Domain name assigned for a CLB instance by the cloud platform.
 * @method array getLoadBalancerVips() Obtain VIP address of a CLB instance (there can be multiple addresses).
 * @method void setLoadBalancerVips(array $LoadBalancerVips) Set VIP address of a CLB instance (there can be multiple addresses).
 * @method array getBackendPublicIps() Obtain The public network IP of the backend service bound to Cloud Load Balancer (CLB) only supports querying the public IP of Cloud Virtual Machine (CVM).
 * @method void setBackendPublicIps(array $BackendPublicIps) Set The public network IP of the backend service bound to Cloud Load Balancer (CLB) only supports querying the public IP of Cloud Virtual Machine (CVM).
 * @method array getBackendPrivateIps() Obtain The private network IP of the backend service bound to Cloud Load Balancer (CLB) only supports querying the private IP address of Cloud Virtual Machine (CVM).
 * @method void setBackendPrivateIps(array $BackendPrivateIps) Set The private network IP of the backend service bound to Cloud Load Balancer (CLB) only supports querying the private IP address of Cloud Virtual Machine (CVM).
 * @method integer getOffset() Obtain Data offset. Default: 0.
 * @method void setOffset(integer $Offset) Set Data offset. Default: 0.
 * @method integer getLimit() Obtain Number of CLB instances returned. Default: 20. Maximum: 100.
 * @method void setLimit(integer $Limit) Set Number of CLB instances returned. Default: 20. Maximum: 100.
 * @method string getOrderBy() Obtain A sorting parameter. Valid values: LoadBalancerName, CreateTime, Domain, and LoadBalancerType.
 * @method void setOrderBy(string $OrderBy) Set A sorting parameter. Valid values: LoadBalancerName, CreateTime, Domain, and LoadBalancerType.
 * @method integer getOrderType() Obtain 1: Reverse; 0: Sequential. Default: reverse by creation time
 * @method void setOrderType(integer $OrderType) Set 1: Reverse; 0: Sequential. Default: reverse by creation time
 * @method string getSearchKey() Obtain Search field, supporting fuzzy match by name, domain, and VIP.
 * @method void setSearchKey(string $SearchKey) Set Search field, supporting fuzzy match by name, domain, and VIP.
 * @method integer getProjectId() Obtain The ID of the project to which the CLB instance belongs. This parameter can be obtained through the DescribeProject API.
 * @method void setProjectId(integer $ProjectId) Set The ID of the project to which the CLB instance belongs. This parameter can be obtained through the DescribeProject API.
 * @method integer getWithRs() Obtain Whether CLB is bound to a real server. 0: No; 1: Yes; -1: Query all.
 * @method void setWithRs(integer $WithRs) Set Whether CLB is bound to a real server. 0: No; 1: Yes; -1: Query all.
 * @method string getVpcId() Obtain Unique VPC ID of the CLB instance, such as vpc-bhqkbhdx
Basic network allows input '0'.
 * @method void setVpcId(string $VpcId) Set Unique VPC ID of the CLB instance, such as vpc-bhqkbhdx
Basic network allows input '0'.
 * @method string getSecurityGroup() Obtain Security group ID, for example sg-m1cc****.
 * @method void setSecurityGroup(string $SecurityGroup) Set Security group ID, for example sg-m1cc****.
 * @method string getMasterZone() Obtain Primary availability zone ID, such as 100001 (corresponding to Guangzhou Zone 1). You can obtain the list of availability zones through [DescribeZones](https://www.tencentcloud.com/document/product/213/15707?from_cn_redirect=1).
 * @method void setMasterZone(string $MasterZone) Set Primary availability zone ID, such as 100001 (corresponding to Guangzhou Zone 1). You can obtain the list of availability zones through [DescribeZones](https://www.tencentcloud.com/document/product/213/15707?from_cn_redirect=1).
 * @method array getFilters() Obtain Each request can have up to 10 `Filters` values and 100 `Filter.Values` values.<br/>`Filter.Name` and `Filter.Values` are required items. The detailed filter criteria are as follows:
<li> charge-type - String - Required: No - (Filter condition) Filter by the CLB instance billing mode, including "PREPAID", "POSTPAID_BY_HOUR".</li>
<li> internet-charge-type - String - Required: No - (Filter condition) Filter by CLB network billing mode, including "BANDWIDTH_PREPAID", "TRAFFIC_POSTPAID_BY_HOUR", "BANDWIDTH_POSTPAID_BY_HOUR", "BANDWIDTH_PACKAGE".</li>
<li> master-zone-id - String - Required: No - (Filter condition) Filter by primary AZ ID of CLB, such as "100001" (corresponding to Guangzhou Zone 1).</li>
<li>tag-key - String - required: no - (filter condition) filter by CLB tag key.</li>
<li>tag:tag-key - String - Required: no - (Filter condition) Filter by CLB Tag key-value pair. Replace tag-key with a specific tag key.</li>
<li> function-name - String - Required: No - (Filter condition) Filter by the function name of the Serverless Cloud Function (SCF) bound to the CLB backend.</li>
<li> vip-isp - String - Required: No - (Filter condition) Filter by operator type of CLB VIP, such as "BGP", "INTERNAL", "CMCC", "CTCC", "CUCC".</li>
<li>sla-type - String - required: no - (filter condition) filter by CLB performance capacity specification, including "clb.c2.medium", "clb.c3.small", "clb.c3.medium", "clb.c4.small", "clb.c4.medium", "clb.c4.large", "clb.c4.xlarge".</li>
 * @method void setFilters(array $Filters) Set Each request can have up to 10 `Filters` values and 100 `Filter.Values` values.<br/>`Filter.Name` and `Filter.Values` are required items. The detailed filter criteria are as follows:
<li> charge-type - String - Required: No - (Filter condition) Filter by the CLB instance billing mode, including "PREPAID", "POSTPAID_BY_HOUR".</li>
<li> internet-charge-type - String - Required: No - (Filter condition) Filter by CLB network billing mode, including "BANDWIDTH_PREPAID", "TRAFFIC_POSTPAID_BY_HOUR", "BANDWIDTH_POSTPAID_BY_HOUR", "BANDWIDTH_PACKAGE".</li>
<li> master-zone-id - String - Required: No - (Filter condition) Filter by primary AZ ID of CLB, such as "100001" (corresponding to Guangzhou Zone 1).</li>
<li>tag-key - String - required: no - (filter condition) filter by CLB tag key.</li>
<li>tag:tag-key - String - Required: no - (Filter condition) Filter by CLB Tag key-value pair. Replace tag-key with a specific tag key.</li>
<li> function-name - String - Required: No - (Filter condition) Filter by the function name of the Serverless Cloud Function (SCF) bound to the CLB backend.</li>
<li> vip-isp - String - Required: No - (Filter condition) Filter by operator type of CLB VIP, such as "BGP", "INTERNAL", "CMCC", "CTCC", "CUCC".</li>
<li>sla-type - String - required: no - (filter condition) filter by CLB performance capacity specification, including "clb.c2.medium", "clb.c3.small", "clb.c3.medium", "clb.c4.small", "clb.c4.medium", "clb.c4.large", "clb.c4.xlarge".</li>
 * @method array getAdditionalFields() Obtain Select the expansion fields to return. If not specified, expansion fields are not returned by default. The supported expansion fields are as follows:
<li> TargetCount: Number of real servers bound to it</li>
 * @method void setAdditionalFields(array $AdditionalFields) Set Select the expansion fields to return. If not specified, expansion fields are not returned by default. The supported expansion fields are as follows:
<li> TargetCount: Number of real servers bound to it</li>
 */
class DescribeLoadBalancersRequest extends AbstractModel
{
    /**
     * @var array CLB instance ID. There can be up to 20 IDs.
     */
    public $LoadBalancerIds;

    /**
     * @var string Network type of the CLB instance:
OPEN: Public network attribute. INTERNAL: Private network attribute.
     */
    public $LoadBalancerType;

    /**
     * @var integer CLB instance type. 1: General CLB instance; 0: Classic CLB instance. If this parameter is not specified, all types of CLB instances will be queried.
     */
    public $Forward;

    /**
     * @var string CLB instance name.
     */
    public $LoadBalancerName;

    /**
     * @var string Domain name assigned for a CLB instance by the cloud platform.
     */
    public $Domain;

    /**
     * @var array VIP address of a CLB instance (there can be multiple addresses).
     */
    public $LoadBalancerVips;

    /**
     * @var array The public network IP of the backend service bound to Cloud Load Balancer (CLB) only supports querying the public IP of Cloud Virtual Machine (CVM).
     */
    public $BackendPublicIps;

    /**
     * @var array The private network IP of the backend service bound to Cloud Load Balancer (CLB) only supports querying the private IP address of Cloud Virtual Machine (CVM).
     */
    public $BackendPrivateIps;

    /**
     * @var integer Data offset. Default: 0.
     */
    public $Offset;

    /**
     * @var integer Number of CLB instances returned. Default: 20. Maximum: 100.
     */
    public $Limit;

    /**
     * @var string A sorting parameter. Valid values: LoadBalancerName, CreateTime, Domain, and LoadBalancerType.
     */
    public $OrderBy;

    /**
     * @var integer 1: Reverse; 0: Sequential. Default: reverse by creation time
     */
    public $OrderType;

    /**
     * @var string Search field, supporting fuzzy match by name, domain, and VIP.
     */
    public $SearchKey;

    /**
     * @var integer The ID of the project to which the CLB instance belongs. This parameter can be obtained through the DescribeProject API.
     */
    public $ProjectId;

    /**
     * @var integer Whether CLB is bound to a real server. 0: No; 1: Yes; -1: Query all.
     */
    public $WithRs;

    /**
     * @var string Unique VPC ID of the CLB instance, such as vpc-bhqkbhdx
Basic network allows input '0'.
     */
    public $VpcId;

    /**
     * @var string Security group ID, for example sg-m1cc****.
     */
    public $SecurityGroup;

    /**
     * @var string Primary availability zone ID, such as 100001 (corresponding to Guangzhou Zone 1). You can obtain the list of availability zones through [DescribeZones](https://www.tencentcloud.com/document/product/213/15707?from_cn_redirect=1).
     */
    public $MasterZone;

    /**
     * @var array Each request can have up to 10 `Filters` values and 100 `Filter.Values` values.<br/>`Filter.Name` and `Filter.Values` are required items. The detailed filter criteria are as follows:
<li> charge-type - String - Required: No - (Filter condition) Filter by the CLB instance billing mode, including "PREPAID", "POSTPAID_BY_HOUR".</li>
<li> internet-charge-type - String - Required: No - (Filter condition) Filter by CLB network billing mode, including "BANDWIDTH_PREPAID", "TRAFFIC_POSTPAID_BY_HOUR", "BANDWIDTH_POSTPAID_BY_HOUR", "BANDWIDTH_PACKAGE".</li>
<li> master-zone-id - String - Required: No - (Filter condition) Filter by primary AZ ID of CLB, such as "100001" (corresponding to Guangzhou Zone 1).</li>
<li>tag-key - String - required: no - (filter condition) filter by CLB tag key.</li>
<li>tag:tag-key - String - Required: no - (Filter condition) Filter by CLB Tag key-value pair. Replace tag-key with a specific tag key.</li>
<li> function-name - String - Required: No - (Filter condition) Filter by the function name of the Serverless Cloud Function (SCF) bound to the CLB backend.</li>
<li> vip-isp - String - Required: No - (Filter condition) Filter by operator type of CLB VIP, such as "BGP", "INTERNAL", "CMCC", "CTCC", "CUCC".</li>
<li>sla-type - String - required: no - (filter condition) filter by CLB performance capacity specification, including "clb.c2.medium", "clb.c3.small", "clb.c3.medium", "clb.c4.small", "clb.c4.medium", "clb.c4.large", "clb.c4.xlarge".</li>
     */
    public $Filters;

    /**
     * @var array Select the expansion fields to return. If not specified, expansion fields are not returned by default. The supported expansion fields are as follows:
<li> TargetCount: Number of real servers bound to it</li>
     */
    public $AdditionalFields;

    /**
     * @param array $LoadBalancerIds CLB instance ID. There can be up to 20 IDs.
     * @param string $LoadBalancerType Network type of the CLB instance:
OPEN: Public network attribute. INTERNAL: Private network attribute.
     * @param integer $Forward CLB instance type. 1: General CLB instance; 0: Classic CLB instance. If this parameter is not specified, all types of CLB instances will be queried.
     * @param string $LoadBalancerName CLB instance name.
     * @param string $Domain Domain name assigned for a CLB instance by the cloud platform.
     * @param array $LoadBalancerVips VIP address of a CLB instance (there can be multiple addresses).
     * @param array $BackendPublicIps The public network IP of the backend service bound to Cloud Load Balancer (CLB) only supports querying the public IP of Cloud Virtual Machine (CVM).
     * @param array $BackendPrivateIps The private network IP of the backend service bound to Cloud Load Balancer (CLB) only supports querying the private IP address of Cloud Virtual Machine (CVM).
     * @param integer $Offset Data offset. Default: 0.
     * @param integer $Limit Number of CLB instances returned. Default: 20. Maximum: 100.
     * @param string $OrderBy A sorting parameter. Valid values: LoadBalancerName, CreateTime, Domain, and LoadBalancerType.
     * @param integer $OrderType 1: Reverse; 0: Sequential. Default: reverse by creation time
     * @param string $SearchKey Search field, supporting fuzzy match by name, domain, and VIP.
     * @param integer $ProjectId The ID of the project to which the CLB instance belongs. This parameter can be obtained through the DescribeProject API.
     * @param integer $WithRs Whether CLB is bound to a real server. 0: No; 1: Yes; -1: Query all.
     * @param string $VpcId Unique VPC ID of the CLB instance, such as vpc-bhqkbhdx
Basic network allows input '0'.
     * @param string $SecurityGroup Security group ID, for example sg-m1cc****.
     * @param string $MasterZone Primary availability zone ID, such as 100001 (corresponding to Guangzhou Zone 1). You can obtain the list of availability zones through [DescribeZones](https://www.tencentcloud.com/document/product/213/15707?from_cn_redirect=1).
     * @param array $Filters Each request can have up to 10 `Filters` values and 100 `Filter.Values` values.<br/>`Filter.Name` and `Filter.Values` are required items. The detailed filter criteria are as follows:
<li> charge-type - String - Required: No - (Filter condition) Filter by the CLB instance billing mode, including "PREPAID", "POSTPAID_BY_HOUR".</li>
<li> internet-charge-type - String - Required: No - (Filter condition) Filter by CLB network billing mode, including "BANDWIDTH_PREPAID", "TRAFFIC_POSTPAID_BY_HOUR", "BANDWIDTH_POSTPAID_BY_HOUR", "BANDWIDTH_PACKAGE".</li>
<li> master-zone-id - String - Required: No - (Filter condition) Filter by primary AZ ID of CLB, such as "100001" (corresponding to Guangzhou Zone 1).</li>
<li>tag-key - String - required: no - (filter condition) filter by CLB tag key.</li>
<li>tag:tag-key - String - Required: no - (Filter condition) Filter by CLB Tag key-value pair. Replace tag-key with a specific tag key.</li>
<li> function-name - String - Required: No - (Filter condition) Filter by the function name of the Serverless Cloud Function (SCF) bound to the CLB backend.</li>
<li> vip-isp - String - Required: No - (Filter condition) Filter by operator type of CLB VIP, such as "BGP", "INTERNAL", "CMCC", "CTCC", "CUCC".</li>
<li>sla-type - String - required: no - (filter condition) filter by CLB performance capacity specification, including "clb.c2.medium", "clb.c3.small", "clb.c3.medium", "clb.c4.small", "clb.c4.medium", "clb.c4.large", "clb.c4.xlarge".</li>
     * @param array $AdditionalFields Select the expansion fields to return. If not specified, expansion fields are not returned by default. The supported expansion fields are as follows:
<li> TargetCount: Number of real servers bound to it</li>
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

        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
        }

        if (array_key_exists("Forward",$param) and $param["Forward"] !== null) {
            $this->Forward = $param["Forward"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("LoadBalancerVips",$param) and $param["LoadBalancerVips"] !== null) {
            $this->LoadBalancerVips = $param["LoadBalancerVips"];
        }

        if (array_key_exists("BackendPublicIps",$param) and $param["BackendPublicIps"] !== null) {
            $this->BackendPublicIps = $param["BackendPublicIps"];
        }

        if (array_key_exists("BackendPrivateIps",$param) and $param["BackendPrivateIps"] !== null) {
            $this->BackendPrivateIps = $param["BackendPrivateIps"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("WithRs",$param) and $param["WithRs"] !== null) {
            $this->WithRs = $param["WithRs"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }

        if (array_key_exists("MasterZone",$param) and $param["MasterZone"] !== null) {
            $this->MasterZone = $param["MasterZone"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("AdditionalFields",$param) and $param["AdditionalFields"] !== null) {
            $this->AdditionalFields = $param["AdditionalFields"];
        }
    }
}
