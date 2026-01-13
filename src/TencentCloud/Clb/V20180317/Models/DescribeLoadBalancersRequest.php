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
 * DescribeLoadBalancers request structure.
 *
 * @method array getLoadBalancerIds() Obtain CLB instance IDs. There can be up to 20 IDs.
 * @method void setLoadBalancerIds(array $LoadBalancerIds) Set CLB instance IDs. There can be up to 20 IDs.
 * @method string getLoadBalancerType() Obtain CLB instance network type:
OPEN: public network; INTERNAL: private network.
 * @method void setLoadBalancerType(string $LoadBalancerType) Set CLB instance network type:
OPEN: public network; INTERNAL: private network.
 * @method integer getForward() Obtain CLB instance type. 1: generic CLB instance; 0: classic CLB instance
 * @method void setForward(integer $Forward) Set CLB instance type. 1: generic CLB instance; 0: classic CLB instance
 * @method string getLoadBalancerName() Obtain Specifies the name of the clb instance. fuzzy query is supported.
 * @method void setLoadBalancerName(string $LoadBalancerName) Set Specifies the name of the clb instance. fuzzy query is supported.
 * @method string getDomain() Obtain Tencent cloud assigns a domain name to the cloud load balancer instance. fuzzy query is supported.
 * @method void setDomain(string $Domain) Set Tencent cloud assigns a domain name to the cloud load balancer instance. fuzzy query is supported.
 * @method array getLoadBalancerVips() Obtain VIP address of a CLB instance (there can be multiple addresses)
 * @method void setLoadBalancerVips(array $LoadBalancerVips) Set VIP address of a CLB instance (there can be multiple addresses)
 * @method array getBackendPublicIps() Obtain Public IPs of the backend services bound with the load balancer. Only the public IPs of CVMs are supported now.
 * @method void setBackendPublicIps(array $BackendPublicIps) Set Public IPs of the backend services bound with the load balancer. Only the public IPs of CVMs are supported now.
 * @method array getBackendPrivateIps() Obtain Private IPs of the backend services bound with the load balancer. Only the private IPs of CVMs are supported now.
 * @method void setBackendPrivateIps(array $BackendPrivateIps) Set Private IPs of the backend services bound with the load balancer. Only the private IPs of CVMs are supported now.
 * @method integer getOffset() Obtain Data offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Data offset. Default value: 0.
 * @method integer getLimit() Obtain Number of returned CLB instances. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned CLB instances. Default value: 20. Maximum value: 100.
 * @method string getOrderBy() Obtain Sorting parameter. supports the following fields:.
- LoadBalancerName
- CreateTime
- Domain
- LoadBalancerType

Defaults to CreateTime.

 * @method void setOrderBy(string $OrderBy) Set Sorting parameter. supports the following fields:.
- LoadBalancerName
- CreateTime
- Domain
- LoadBalancerType

Defaults to CreateTime.

 * @method integer getOrderType() Obtain 1 for descending, 0 for ascending, defaults to 1, sorted by creation time in descending order.
 * @method void setOrderType(integer $OrderType) Set 1 for descending, 0 for ascending, defaults to 1, sorted by creation time in descending order.
 * @method string getSearchKey() Obtain Specifies the fuzzy search field for fuzzy matching the name, domain name, VIP address, or ID of a cloud load balancer instance.
 * @method void setSearchKey(string $SearchKey) Set Specifies the fuzzy search field for fuzzy matching the name, domain name, VIP address, or ID of a cloud load balancer instance.
 * @method integer getProjectId() Obtain Project ID of the cloud load balancer instance. you can call the [DescribeProject](https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1) api to obtain the ID. defaults to all projects if not passed.
 * @method void setProjectId(integer $ProjectId) Set Project ID of the cloud load balancer instance. you can call the [DescribeProject](https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1) api to obtain the ID. defaults to all projects if not passed.
 * @method integer getWithRs() Obtain Whether a CLB instance is bound to a real server. 0: no; 1: yes; -1: query all.
 * @method void setWithRs(integer $WithRs) Set Whether a CLB instance is bound to a real server. 0: no; 1: yes; -1: query all.
 * @method string getVpcId() Obtain Specifies the unique vpc ID of the load balancing instance, such as vpc-bhqkbhdx. you can call the [DescribeVpcs](https://www.tencentcloud.com/document/api/215/15778?from_cn_redirect=1) api to obtain it.
Searches for cloud load balancer of basic network type. allows input '0'.
 * @method void setVpcId(string $VpcId) Set Specifies the unique vpc ID of the load balancing instance, such as vpc-bhqkbhdx. you can call the [DescribeVpcs](https://www.tencentcloud.com/document/api/215/15778?from_cn_redirect=1) api to obtain it.
Searches for cloud load balancer of basic network type. allows input '0'.
 * @method string getSecurityGroup() Obtain Security group ID, such as sg-m1cc****, can be obtained through the API [DescribeSecurityGroups](https://www.tencentcloud.com/document/product/215/15808?from_cn_redirect=1).
 * @method void setSecurityGroup(string $SecurityGroup) Set Security group ID, such as sg-m1cc****, can be obtained through the API [DescribeSecurityGroups](https://www.tencentcloud.com/document/product/215/15808?from_cn_redirect=1).
 * @method string getMasterZone() Obtain Primary availability zone ID, such as 100001 (corresponding to Guangzhou Zone 1). You can obtain the list of availability zones through [DescribeZones](https://intl.cloud.tencent.com/document/product/213/15707?from_cn_redirect=1).
 * @method void setMasterZone(string $MasterZone) Set Primary availability zone ID, such as 100001 (corresponding to Guangzhou Zone 1). You can obtain the list of availability zones through [DescribeZones](https://intl.cloud.tencent.com/document/product/213/15707?from_cn_redirect=1).
 * @method array getFilters() Obtain Each request can have up to 10 `Filters` and 100 `Filter.Values`. Detailed filter conditions:
<li> internet-charge-type - Type: String - Required: No - Filter by CLB network billing mode, including `TRAFFIC_POSTPAID_BY_HOUR`</li>
 * @method void setFilters(array $Filters) Set Each request can have up to 10 `Filters` and 100 `Filter.Values`. Detailed filter conditions:
<li> internet-charge-type - Type: String - Required: No - Filter by CLB network billing mode, including `TRAFFIC_POSTPAID_BY_HOUR`</li>
 * @method array getAdditionalFields() Obtain Specifies the expanded fields to return. not specified, expanded fields do not return by default. supported expanded fields are as follows:.
<Li>TargetCount: specifies the number of real servers bound to it.</li>.
 * @method void setAdditionalFields(array $AdditionalFields) Set Specifies the expanded fields to return. not specified, expanded fields do not return by default. supported expanded fields are as follows:.
<Li>TargetCount: specifies the number of real servers bound to it.</li>.
 */
class DescribeLoadBalancersRequest extends AbstractModel
{
    /**
     * @var array CLB instance IDs. There can be up to 20 IDs.
     */
    public $LoadBalancerIds;

    /**
     * @var string CLB instance network type:
OPEN: public network; INTERNAL: private network.
     */
    public $LoadBalancerType;

    /**
     * @var integer CLB instance type. 1: generic CLB instance; 0: classic CLB instance
     */
    public $Forward;

    /**
     * @var string Specifies the name of the clb instance. fuzzy query is supported.
     */
    public $LoadBalancerName;

    /**
     * @var string Tencent cloud assigns a domain name to the cloud load balancer instance. fuzzy query is supported.
     */
    public $Domain;

    /**
     * @var array VIP address of a CLB instance (there can be multiple addresses)
     */
    public $LoadBalancerVips;

    /**
     * @var array Public IPs of the backend services bound with the load balancer. Only the public IPs of CVMs are supported now.
     */
    public $BackendPublicIps;

    /**
     * @var array Private IPs of the backend services bound with the load balancer. Only the private IPs of CVMs are supported now.
     */
    public $BackendPrivateIps;

    /**
     * @var integer Data offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returned CLB instances. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var string Sorting parameter. supports the following fields:.
- LoadBalancerName
- CreateTime
- Domain
- LoadBalancerType

Defaults to CreateTime.

     */
    public $OrderBy;

    /**
     * @var integer 1 for descending, 0 for ascending, defaults to 1, sorted by creation time in descending order.
     */
    public $OrderType;

    /**
     * @var string Specifies the fuzzy search field for fuzzy matching the name, domain name, VIP address, or ID of a cloud load balancer instance.
     */
    public $SearchKey;

    /**
     * @var integer Project ID of the cloud load balancer instance. you can call the [DescribeProject](https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1) api to obtain the ID. defaults to all projects if not passed.
     */
    public $ProjectId;

    /**
     * @var integer Whether a CLB instance is bound to a real server. 0: no; 1: yes; -1: query all.
     */
    public $WithRs;

    /**
     * @var string Specifies the unique vpc ID of the load balancing instance, such as vpc-bhqkbhdx. you can call the [DescribeVpcs](https://www.tencentcloud.com/document/api/215/15778?from_cn_redirect=1) api to obtain it.
Searches for cloud load balancer of basic network type. allows input '0'.
     */
    public $VpcId;

    /**
     * @var string Security group ID, such as sg-m1cc****, can be obtained through the API [DescribeSecurityGroups](https://www.tencentcloud.com/document/product/215/15808?from_cn_redirect=1).
     */
    public $SecurityGroup;

    /**
     * @var string Primary availability zone ID, such as 100001 (corresponding to Guangzhou Zone 1). You can obtain the list of availability zones through [DescribeZones](https://intl.cloud.tencent.com/document/product/213/15707?from_cn_redirect=1).
     */
    public $MasterZone;

    /**
     * @var array Each request can have up to 10 `Filters` and 100 `Filter.Values`. Detailed filter conditions:
<li> internet-charge-type - Type: String - Required: No - Filter by CLB network billing mode, including `TRAFFIC_POSTPAID_BY_HOUR`</li>
     */
    public $Filters;

    /**
     * @var array Specifies the expanded fields to return. not specified, expanded fields do not return by default. supported expanded fields are as follows:.
<Li>TargetCount: specifies the number of real servers bound to it.</li>.
     */
    public $AdditionalFields;

    /**
     * @param array $LoadBalancerIds CLB instance IDs. There can be up to 20 IDs.
     * @param string $LoadBalancerType CLB instance network type:
OPEN: public network; INTERNAL: private network.
     * @param integer $Forward CLB instance type. 1: generic CLB instance; 0: classic CLB instance
     * @param string $LoadBalancerName Specifies the name of the clb instance. fuzzy query is supported.
     * @param string $Domain Tencent cloud assigns a domain name to the cloud load balancer instance. fuzzy query is supported.
     * @param array $LoadBalancerVips VIP address of a CLB instance (there can be multiple addresses)
     * @param array $BackendPublicIps Public IPs of the backend services bound with the load balancer. Only the public IPs of CVMs are supported now.
     * @param array $BackendPrivateIps Private IPs of the backend services bound with the load balancer. Only the private IPs of CVMs are supported now.
     * @param integer $Offset Data offset. Default value: 0.
     * @param integer $Limit Number of returned CLB instances. Default value: 20. Maximum value: 100.
     * @param string $OrderBy Sorting parameter. supports the following fields:.
- LoadBalancerName
- CreateTime
- Domain
- LoadBalancerType

Defaults to CreateTime.

     * @param integer $OrderType 1 for descending, 0 for ascending, defaults to 1, sorted by creation time in descending order.
     * @param string $SearchKey Specifies the fuzzy search field for fuzzy matching the name, domain name, VIP address, or ID of a cloud load balancer instance.
     * @param integer $ProjectId Project ID of the cloud load balancer instance. you can call the [DescribeProject](https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1) api to obtain the ID. defaults to all projects if not passed.
     * @param integer $WithRs Whether a CLB instance is bound to a real server. 0: no; 1: yes; -1: query all.
     * @param string $VpcId Specifies the unique vpc ID of the load balancing instance, such as vpc-bhqkbhdx. you can call the [DescribeVpcs](https://www.tencentcloud.com/document/api/215/15778?from_cn_redirect=1) api to obtain it.
Searches for cloud load balancer of basic network type. allows input '0'.
     * @param string $SecurityGroup Security group ID, such as sg-m1cc****, can be obtained through the API [DescribeSecurityGroups](https://www.tencentcloud.com/document/product/215/15808?from_cn_redirect=1).
     * @param string $MasterZone Primary availability zone ID, such as 100001 (corresponding to Guangzhou Zone 1). You can obtain the list of availability zones through [DescribeZones](https://intl.cloud.tencent.com/document/product/213/15707?from_cn_redirect=1).
     * @param array $Filters Each request can have up to 10 `Filters` and 100 `Filter.Values`. Detailed filter conditions:
<li> internet-charge-type - Type: String - Required: No - Filter by CLB network billing mode, including `TRAFFIC_POSTPAID_BY_HOUR`</li>
     * @param array $AdditionalFields Specifies the expanded fields to return. not specified, expanded fields do not return by default. supported expanded fields are as follows:.
<Li>TargetCount: specifies the number of real servers bound to it.</li>.
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
