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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLoadBalancers request structure.
 *
 * @method string getEcmRegion() Obtain Region. If this parameter is not specified, the information of all regions will be queried by default.
 * @method void setEcmRegion(string $EcmRegion) Set Region. If this parameter is not specified, the information of all regions will be queried by default.
 * @method array getLoadBalancerIds() Obtain CLB instance ID.
 * @method void setLoadBalancerIds(array $LoadBalancerIds) Set CLB instance ID.
 * @method string getLoadBalancerName() Obtain CLB instance name.
 * @method void setLoadBalancerName(string $LoadBalancerName) Set CLB instance name.
 * @method array getLoadBalancerVips() Obtain VIP address of the CLB instance. There can be multiple addresses.
 * @method void setLoadBalancerVips(array $LoadBalancerVips) Set VIP address of the CLB instance. There can be multiple addresses.
 * @method array getBackendPrivateIps() Obtain Private IP of the real server bound to the CLB.
 * @method void setBackendPrivateIps(array $BackendPrivateIps) Set Private IP of the real server bound to the CLB.
 * @method integer getOffset() Obtain Data offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Data offset. Default value: 0.
 * @method integer getLimit() Obtain Number of returned CLB instances. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned CLB instances. Default value: 20. Maximum value: 100.
 * @method integer getWithBackend() Obtain Whether the CLB instance is bound to a real server. 0: no; 1: yes; -1: query all. 
If this parameter is not specified, all will be queried by default.
 * @method void setWithBackend(integer $WithBackend) Set Whether the CLB instance is bound to a real server. 0: no; 1: yes; -1: query all. 
If this parameter is not specified, all will be queried by default.
 * @method string getVpcId() Obtain Unique VPC ID of the CLB instance, such as `vpc-bhqkbhdx`.
 * @method void setVpcId(string $VpcId) Set Unique VPC ID of the CLB instance, such as `vpc-bhqkbhdx`.
 * @method array getFilters() Obtain Each request can contain up to 10 `Filters` and 100 `Filter.Values`. The detailed filters are as follows:
tag-key - String - Required: no - (Filter) Filter by tag key.
 * @method void setFilters(array $Filters) Set Each request can contain up to 10 `Filters` and 100 `Filter.Values`. The detailed filters are as follows:
tag-key - String - Required: no - (Filter) Filter by tag key.
 * @method string getSecurityGroup() Obtain Security group.
 * @method void setSecurityGroup(string $SecurityGroup) Set Security group.
 */
class DescribeLoadBalancersRequest extends AbstractModel
{
    /**
     * @var string Region. If this parameter is not specified, the information of all regions will be queried by default.
     */
    public $EcmRegion;

    /**
     * @var array CLB instance ID.
     */
    public $LoadBalancerIds;

    /**
     * @var string CLB instance name.
     */
    public $LoadBalancerName;

    /**
     * @var array VIP address of the CLB instance. There can be multiple addresses.
     */
    public $LoadBalancerVips;

    /**
     * @var array Private IP of the real server bound to the CLB.
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
     * @var integer Whether the CLB instance is bound to a real server. 0: no; 1: yes; -1: query all. 
If this parameter is not specified, all will be queried by default.
     */
    public $WithBackend;

    /**
     * @var string Unique VPC ID of the CLB instance, such as `vpc-bhqkbhdx`.
     */
    public $VpcId;

    /**
     * @var array Each request can contain up to 10 `Filters` and 100 `Filter.Values`. The detailed filters are as follows:
tag-key - String - Required: no - (Filter) Filter by tag key.
     */
    public $Filters;

    /**
     * @var string Security group.
     */
    public $SecurityGroup;

    /**
     * @param string $EcmRegion Region. If this parameter is not specified, the information of all regions will be queried by default.
     * @param array $LoadBalancerIds CLB instance ID.
     * @param string $LoadBalancerName CLB instance name.
     * @param array $LoadBalancerVips VIP address of the CLB instance. There can be multiple addresses.
     * @param array $BackendPrivateIps Private IP of the real server bound to the CLB.
     * @param integer $Offset Data offset. Default value: 0.
     * @param integer $Limit Number of returned CLB instances. Default value: 20. Maximum value: 100.
     * @param integer $WithBackend Whether the CLB instance is bound to a real server. 0: no; 1: yes; -1: query all. 
If this parameter is not specified, all will be queried by default.
     * @param string $VpcId Unique VPC ID of the CLB instance, such as `vpc-bhqkbhdx`.
     * @param array $Filters Each request can contain up to 10 `Filters` and 100 `Filter.Values`. The detailed filters are as follows:
tag-key - String - Required: no - (Filter) Filter by tag key.
     * @param string $SecurityGroup Security group.
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
        if (array_key_exists("EcmRegion",$param) and $param["EcmRegion"] !== null) {
            $this->EcmRegion = $param["EcmRegion"];
        }

        if (array_key_exists("LoadBalancerIds",$param) and $param["LoadBalancerIds"] !== null) {
            $this->LoadBalancerIds = $param["LoadBalancerIds"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("LoadBalancerVips",$param) and $param["LoadBalancerVips"] !== null) {
            $this->LoadBalancerVips = $param["LoadBalancerVips"];
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

        if (array_key_exists("WithBackend",$param) and $param["WithBackend"] !== null) {
            $this->WithBackend = $param["WithBackend"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }
    }
}
