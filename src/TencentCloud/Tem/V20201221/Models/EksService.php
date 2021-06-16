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
 * eks service info
 *
 * @method string getName() Obtain service name
 * @method void setName(string $Name) Set service name
 * @method array getPorts() Obtain 
 * @method void setPorts(array $Ports) Set 
 * @method string getYaml() Obtain 
 * @method void setYaml(string $Yaml) Set 
 * @method string getServiceName() Obtain 
 * @method void setServiceName(string $ServiceName) Set 
 * @method string getVersionName() Obtain 
 * @method void setVersionName(string $VersionName) Set 
 * @method array getClusterIp() Obtain 
 * @method void setClusterIp(array $ClusterIp) Set 
 * @method string getExternalIp() Obtain 
 * @method void setExternalIp(string $ExternalIp) Set 
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method string getSubnetId() Obtain 
 * @method void setSubnetId(string $SubnetId) Set 
 * @method string getLoadBalanceId() Obtain 
 * @method void setLoadBalanceId(string $LoadBalanceId) Set 
 * @method array getPortMappings() Obtain 
 * @method void setPortMappings(array $PortMappings) Set 
 */
class EksService extends AbstractModel
{
    /**
     * @var string service name
     */
    public $Name;

    /**
     * @var array 
     */
    public $Ports;

    /**
     * @var string 
     */
    public $Yaml;

    /**
     * @var string 
     */
    public $ServiceName;

    /**
     * @var string 
     */
    public $VersionName;

    /**
     * @var array 
     */
    public $ClusterIp;

    /**
     * @var string 
     */
    public $ExternalIp;

    /**
     * @var string 
     */
    public $Type;

    /**
     * @var string 
     */
    public $SubnetId;

    /**
     * @var string 
     */
    public $LoadBalanceId;

    /**
     * @var array 
     */
    public $PortMappings;

    /**
     * @param string $Name service name
     * @param array $Ports 
     * @param string $Yaml 
     * @param string $ServiceName 
     * @param string $VersionName 
     * @param array $ClusterIp 
     * @param string $ExternalIp 
     * @param string $Type 
     * @param string $SubnetId 
     * @param string $LoadBalanceId 
     * @param array $PortMappings 
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
