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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EKS service information
 *
 * @method string getName() Obtain Service name
 * @method void setName(string $Name) Set Service name
 * @method array getPorts() Obtain Available ports
 * @method void setPorts(array $Ports) Set Available ports
 * @method string getYaml() Obtain Yaml contents
 * @method void setYaml(string $Yaml) Set Yaml contents
 * @method string getServiceName() Obtain Service name
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setServiceName(string $ServiceName) Set Service name
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method string getVersionName() Obtain Version name
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setVersionName(string $VersionName) Set Version name
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method array getClusterIp() Obtain Private IP
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setClusterIp(array $ClusterIp) Set Private IP
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method string getExternalIp() Obtain Public IP
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setExternalIp(string $ExternalIp) Set Public IP
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method string getType() Obtain The access type. Valid values:
- EXTERNAL (internet access)
- VPC（Intra-VPC access)
- CLUSTER (Intra-cluster access)
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setType(string $Type) Set The access type. Valid values:
- EXTERNAL (internet access)
- VPC（Intra-VPC access)
- CLUSTER (Intra-cluster access)
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method string getSubnetId() Obtain Subnet ID. It is filled when the access type is `VPC`.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID. It is filled when the access type is `VPC`.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getLoadBalanceId() Obtain Load balancer ID. It is filled when the access type is `EXTERNAL` or `CLUSTER`. It’s created automatically by default.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setLoadBalanceId(string $LoadBalanceId) Set Load balancer ID. It is filled when the access type is `EXTERNAL` or `CLUSTER`. It’s created automatically by default.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method array getPortMappings() Obtain Port Mapping
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setPortMappings(array $PortMappings) Set Port Mapping
Note: this field may return `null`, indicating that no valid value can be obtained.
 */
class EksService extends AbstractModel
{
    /**
     * @var string Service name
     */
    public $Name;

    /**
     * @var array Available ports
     */
    public $Ports;

    /**
     * @var string Yaml contents
     */
    public $Yaml;

    /**
     * @var string Service name
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $ServiceName;

    /**
     * @var string Version name
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $VersionName;

    /**
     * @var array Private IP
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $ClusterIp;

    /**
     * @var string Public IP
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $ExternalIp;

    /**
     * @var string The access type. Valid values:
- EXTERNAL (internet access)
- VPC（Intra-VPC access)
- CLUSTER (Intra-cluster access)
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $Type;

    /**
     * @var string Subnet ID. It is filled when the access type is `VPC`.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $SubnetId;

    /**
     * @var string Load balancer ID. It is filled when the access type is `EXTERNAL` or `CLUSTER`. It’s created automatically by default.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $LoadBalanceId;

    /**
     * @var array Port Mapping
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $PortMappings;

    /**
     * @param string $Name Service name
     * @param array $Ports Available ports
     * @param string $Yaml Yaml contents
     * @param string $ServiceName Service name
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param string $VersionName Version name
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param array $ClusterIp Private IP
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param string $ExternalIp Public IP
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param string $Type The access type. Valid values:
- EXTERNAL (internet access)
- VPC（Intra-VPC access)
- CLUSTER (Intra-cluster access)
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param string $SubnetId Subnet ID. It is filled when the access type is `VPC`.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $LoadBalanceId Load balancer ID. It is filled when the access type is `EXTERNAL` or `CLUSTER`. It’s created automatically by default.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param array $PortMappings Port Mapping
Note: this field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            $this->Ports = $param["Ports"];
        }

        if (array_key_exists("Yaml",$param) and $param["Yaml"] !== null) {
            $this->Yaml = $param["Yaml"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("ClusterIp",$param) and $param["ClusterIp"] !== null) {
            $this->ClusterIp = $param["ClusterIp"];
        }

        if (array_key_exists("ExternalIp",$param) and $param["ExternalIp"] !== null) {
            $this->ExternalIp = $param["ExternalIp"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("LoadBalanceId",$param) and $param["LoadBalanceId"] !== null) {
            $this->LoadBalanceId = $param["LoadBalanceId"];
        }

        if (array_key_exists("PortMappings",$param) and $param["PortMappings"] !== null) {
            $this->PortMappings = [];
            foreach ($param["PortMappings"] as $key => $value){
                $obj = new PortMapping();
                $obj->deserialize($value);
                array_push($this->PortMappings, $obj);
            }
        }
    }
}
