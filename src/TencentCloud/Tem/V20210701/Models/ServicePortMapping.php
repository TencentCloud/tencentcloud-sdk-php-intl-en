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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Port mapping details
 *
 * @method string getType() Obtain Specifies how a layer-4 proxy is created.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Specifies how a layer-4 proxy is created.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getServiceName() Obtain Application name
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setServiceName(string $ServiceName) Set Application name
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getClusterIp() Obtain VIP for access within the environment
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setClusterIp(string $ClusterIp) Set VIP for access within the environment
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getExternalIp() Obtain Cluster external IP
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setExternalIp(string $ExternalIp) Set Cluster external IP
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getSubnetId() Obtain Subnet ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getVpcId() Obtain VPC ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set VPC ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getLoadBalanceId() Obtain Load balancer ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setLoadBalanceId(string $LoadBalanceId) Set Load balancer ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getYaml() Obtain YAML contents
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setYaml(string $Yaml) Set YAML contents
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getPorts() Obtain List of exposed ports
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setPorts(array $Ports) Set List of exposed ports
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getPortMappingItemList() Obtain Port mapping array 
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setPortMappingItemList(array $PortMappingItemList) Set Port mapping array 
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getExternalDomain() Obtain CLB domain name
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setExternalDomain(string $ExternalDomain) Set CLB domain name
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class ServicePortMapping extends AbstractModel
{
    /**
     * @var string Specifies how a layer-4 proxy is created.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Application name
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ServiceName;

    /**
     * @var string VIP for access within the environment
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ClusterIp;

    /**
     * @var string Cluster external IP
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ExternalIp;

    /**
     * @var string Subnet ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $SubnetId;

    /**
     * @var string VPC ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var string Load balancer ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $LoadBalanceId;

    /**
     * @var string YAML contents
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Yaml;

    /**
     * @var array List of exposed ports
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Ports;

    /**
     * @var array Port mapping array 
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $PortMappingItemList;

    /**
     * @var string CLB domain name
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ExternalDomain;

    /**
     * @param string $Type Specifies how a layer-4 proxy is created.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $ServiceName Application name
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $ClusterIp VIP for access within the environment
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $ExternalIp Cluster external IP
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $SubnetId Subnet ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $VpcId VPC ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $LoadBalanceId Load balancer ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Yaml YAML contents
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $Ports List of exposed ports
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $PortMappingItemList Port mapping array 
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $ExternalDomain CLB domain name
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ClusterIp",$param) and $param["ClusterIp"] !== null) {
            $this->ClusterIp = $param["ClusterIp"];
        }

        if (array_key_exists("ExternalIp",$param) and $param["ExternalIp"] !== null) {
            $this->ExternalIp = $param["ExternalIp"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("LoadBalanceId",$param) and $param["LoadBalanceId"] !== null) {
            $this->LoadBalanceId = $param["LoadBalanceId"];
        }

        if (array_key_exists("Yaml",$param) and $param["Yaml"] !== null) {
            $this->Yaml = $param["Yaml"];
        }

        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            $this->Ports = $param["Ports"];
        }

        if (array_key_exists("PortMappingItemList",$param) and $param["PortMappingItemList"] !== null) {
            $this->PortMappingItemList = [];
            foreach ($param["PortMappingItemList"] as $key => $value){
                $obj = new ServicePortMappingItem();
                $obj->deserialize($value);
                array_push($this->PortMappingItemList, $obj);
            }
        }

        if (array_key_exists("ExternalDomain",$param) and $param["ExternalDomain"] !== null) {
            $this->ExternalDomain = $param["ExternalDomain"];
        }
    }
}
