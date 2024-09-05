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
 * @method string getLoadBalancerName() Obtain CLB instance name.
 * @method void setLoadBalancerName(string $LoadBalancerName) Set CLB instance name.
 * @method string getDomain() Obtain The domain name that Tencent Cloud assigned for the CLB instance.
 * @method void setDomain(string $Domain) Set The domain name that Tencent Cloud assigned for the CLB instance.
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
 * @method string getOrderBy() Obtain Sort by parameter. Value range: LoadBalancerName, CreateTime, Domain, LoadBalancerType.
 * @method void setOrderBy(string $OrderBy) Set Sort by parameter. Value range: LoadBalancerName, CreateTime, Domain, LoadBalancerType.
 * @method integer getOrderType() Obtain 1: reverse; 0: sequential. Default value: reverse by creation time |
 * @method void setOrderType(integer $OrderType) Set 1: reverse; 0: sequential. Default value: reverse by creation time |
 * @method string getSearchKey() Obtain Search field which fuzzy matches name, domain name, or VIP.
 * @method void setSearchKey(string $SearchKey) Set Search field which fuzzy matches name, domain name, or VIP.
 * @method integer getProjectId() Obtain ID of the project to which a CLB instance belongs, which can be obtained through the DescribeProject API.
 * @method void setProjectId(integer $ProjectId) Set ID of the project to which a CLB instance belongs, which can be obtained through the DescribeProject API.
 * @method integer getWithRs() Obtain Whether a CLB instance is bound to a real server. 0: no; 1: yes; -1: query all.
 * @method void setWithRs(integer $WithRs) Set Whether a CLB instance is bound to a real server. 0: no; 1: yes; -1: query all.
 * @method string getVpcId() Obtain VPC where a CLB instance resides, such as vpc-bhqkbhdx.
Basic network does not support queries by VpcId.
 * @method void setVpcId(string $VpcId) Set VPC where a CLB instance resides, such as vpc-bhqkbhdx.
Basic network does not support queries by VpcId.
 * @method string getSecurityGroup() Obtain Security group ID, e.g., `sg-m1cc****`.
 * @method void setSecurityGroup(string $SecurityGroup) Set Security group ID, e.g., `sg-m1cc****`.
 * @method string getMasterZone() Obtain Primary availability zone ID, such as 100001 (corresponding to Guangzhou Zone 1). You can obtain the list of availability zones through [DescribeZones](https://intl.cloud.tencent.com/document/product/213/15707?from_cn_redirect=1).
 * @method void setMasterZone(string $MasterZone) Set Primary availability zone ID, such as 100001 (corresponding to Guangzhou Zone 1). You can obtain the list of availability zones through [DescribeZones](https://intl.cloud.tencent.com/document/product/213/15707?from_cn_redirect=1).
 * @method array getFilters() Obtain Each request can have up to 10 `Filters` and 100 `Filter.Values`. Detailed filter conditions:
<li> internet-charge-type - Type: String - Required: No - Filter by CLB network billing mode, including `TRAFFIC_POSTPAID_BY_HOUR`</li>
 * @method void setFilters(array $Filters) Set Each request can have up to 10 `Filters` and 100 `Filter.Values`. Detailed filter conditions:
<li> internet-charge-type - Type: String - Required: No - Filter by CLB network billing mode, including `TRAFFIC_POSTPAID_BY_HOUR`</li>
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
     * @var string CLB instance name.
     */
    public $LoadBalancerName;

    /**
     * @var string The domain name that Tencent Cloud assigned for the CLB instance.
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
     * @var string Sort by parameter. Value range: LoadBalancerName, CreateTime, Domain, LoadBalancerType.
     */
    public $OrderBy;

    /**
     * @var integer 1: reverse; 0: sequential. Default value: reverse by creation time |
     */
    public $OrderType;

    /**
     * @var string Search field which fuzzy matches name, domain name, or VIP.
     */
    public $SearchKey;

    /**
     * @var integer ID of the project to which a CLB instance belongs, which can be obtained through the DescribeProject API.
     */
    public $ProjectId;

    /**
     * @var integer Whether a CLB instance is bound to a real server. 0: no; 1: yes; -1: query all.
     */
    public $WithRs;

    /**
     * @var string VPC where a CLB instance resides, such as vpc-bhqkbhdx.
Basic network does not support queries by VpcId.
     */
    public $VpcId;

    /**
     * @var string Security group ID, e.g., `sg-m1cc****`.
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
     * @param array $LoadBalancerIds CLB instance IDs. There can be up to 20 IDs.
     * @param string $LoadBalancerType CLB instance network type:
OPEN: public network; INTERNAL: private network.
     * @param integer $Forward CLB instance type. 1: generic CLB instance; 0: classic CLB instance
     * @param string $LoadBalancerName CLB instance name.
     * @param string $Domain The domain name that Tencent Cloud assigned for the CLB instance.
     * @param array $LoadBalancerVips VIP address of a CLB instance (there can be multiple addresses)
     * @param array $BackendPublicIps Public IPs of the backend services bound with the load balancer. Only the public IPs of CVMs are supported now.
     * @param array $BackendPrivateIps Private IPs of the backend services bound with the load balancer. Only the private IPs of CVMs are supported now.
     * @param integer $Offset Data offset. Default value: 0.
     * @param integer $Limit Number of returned CLB instances. Default value: 20. Maximum value: 100.
     * @param string $OrderBy Sort by parameter. Value range: LoadBalancerName, CreateTime, Domain, LoadBalancerType.
     * @param integer $OrderType 1: reverse; 0: sequential. Default value: reverse by creation time |
     * @param string $SearchKey Search field which fuzzy matches name, domain name, or VIP.
     * @param integer $ProjectId ID of the project to which a CLB instance belongs, which can be obtained through the DescribeProject API.
     * @param integer $WithRs Whether a CLB instance is bound to a real server. 0: no; 1: yes; -1: query all.
     * @param string $VpcId VPC where a CLB instance resides, such as vpc-bhqkbhdx.
Basic network does not support queries by VpcId.
     * @param string $SecurityGroup Security group ID, e.g., `sg-m1cc****`.
     * @param string $MasterZone Primary availability zone ID, such as 100001 (corresponding to Guangzhou Zone 1). You can obtain the list of availability zones through [DescribeZones](https://intl.cloud.tencent.com/document/product/213/15707?from_cn_redirect=1).
     * @param array $Filters Each request can have up to 10 `Filters` and 100 `Filter.Values`. Detailed filter conditions:
<li> internet-charge-type - Type: String - Required: No - Filter by CLB network billing mode, including `TRAFFIC_POSTPAID_BY_HOUR`</li>
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
    }
}
