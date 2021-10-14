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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCluster request structure.
 *
 * @method string getIdlType() Obtain Cluster data description language type, such as `PROTO`, `TDR`, or `MIX`
 * @method void setIdlType(string $IdlType) Set Cluster data description language type, such as `PROTO`, `TDR`, or `MIX`
 * @method string getClusterName() Obtain Cluster name, which can contain up to 32 letters and digits
 * @method void setClusterName(string $ClusterName) Set Cluster name, which can contain up to 32 letters and digits
 * @method string getVpcId() Obtain ID of the VPC instance bound to a cluster in the format of `vpc-f49l6u0z`
 * @method void setVpcId(string $VpcId) Set ID of the VPC instance bound to a cluster in the format of `vpc-f49l6u0z`
 * @method string getSubnetId() Obtain ID of the subnet instance bound to a cluster in the format of `subnet-pxir56ns`
 * @method void setSubnetId(string $SubnetId) Set ID of the subnet instance bound to a cluster in the format of `subnet-pxir56ns`
 * @method string getPassword() Obtain Cluster access password, which must contain lowercase letters (a-z), uppercase letters (A-Z), and digits (0-9).
 * @method void setPassword(string $Password) Set Cluster access password, which must contain lowercase letters (a-z), uppercase letters (A-Z), and digits (0-9).
 * @method array getResourceTags() Obtain Cluster tag list
 * @method void setResourceTags(array $ResourceTags) Set Cluster tag list
 * @method integer getIpv6Enable() Obtain Whether to enable IPv6 address access for clusters
 * @method void setIpv6Enable(integer $Ipv6Enable) Set Whether to enable IPv6 address access for clusters
 * @method array getServerList() Obtain Information of the machine at the storage layer (tcapsvr) in a dedicated cluster
 * @method void setServerList(array $ServerList) Set Information of the machine at the storage layer (tcapsvr) in a dedicated cluster
 * @method array getProxyList() Obtain Information of the machine at the access layer (tcaproxy) in a dedicated cluster
 * @method void setProxyList(array $ProxyList) Set Information of the machine at the access layer (tcaproxy) in a dedicated cluster
 * @method integer getClusterType() Obtain Cluster type. Valid values: `1` (standard), `2` (dedicated)
 * @method void setClusterType(integer $ClusterType) Set Cluster type. Valid values: `1` (standard), `2` (dedicated)
 * @method integer getAuthType() Obtain Authentication type. Valid values: `0` (static password), `1` (signature)
 * @method void setAuthType(integer $AuthType) Set Authentication type. Valid values: `0` (static password), `1` (signature)
 */
class CreateClusterRequest extends AbstractModel
{
    /**
     * @var string Cluster data description language type, such as `PROTO`, `TDR`, or `MIX`
     */
    public $IdlType;

    /**
     * @var string Cluster name, which can contain up to 32 letters and digits
     */
    public $ClusterName;

    /**
     * @var string ID of the VPC instance bound to a cluster in the format of `vpc-f49l6u0z`
     */
    public $VpcId;

    /**
     * @var string ID of the subnet instance bound to a cluster in the format of `subnet-pxir56ns`
     */
    public $SubnetId;

    /**
     * @var string Cluster access password, which must contain lowercase letters (a-z), uppercase letters (A-Z), and digits (0-9).
     */
    public $Password;

    /**
     * @var array Cluster tag list
     */
    public $ResourceTags;

    /**
     * @var integer Whether to enable IPv6 address access for clusters
     */
    public $Ipv6Enable;

    /**
     * @var array Information of the machine at the storage layer (tcapsvr) in a dedicated cluster
     */
    public $ServerList;

    /**
     * @var array Information of the machine at the access layer (tcaproxy) in a dedicated cluster
     */
    public $ProxyList;

    /**
     * @var integer Cluster type. Valid values: `1` (standard), `2` (dedicated)
     */
    public $ClusterType;

    /**
     * @var integer Authentication type. Valid values: `0` (static password), `1` (signature)
     */
    public $AuthType;

    /**
     * @param string $IdlType Cluster data description language type, such as `PROTO`, `TDR`, or `MIX`
     * @param string $ClusterName Cluster name, which can contain up to 32 letters and digits
     * @param string $VpcId ID of the VPC instance bound to a cluster in the format of `vpc-f49l6u0z`
     * @param string $SubnetId ID of the subnet instance bound to a cluster in the format of `subnet-pxir56ns`
     * @param string $Password Cluster access password, which must contain lowercase letters (a-z), uppercase letters (A-Z), and digits (0-9).
     * @param array $ResourceTags Cluster tag list
     * @param integer $Ipv6Enable Whether to enable IPv6 address access for clusters
     * @param array $ServerList Information of the machine at the storage layer (tcapsvr) in a dedicated cluster
     * @param array $ProxyList Information of the machine at the access layer (tcaproxy) in a dedicated cluster
     * @param integer $ClusterType Cluster type. Valid values: `1` (standard), `2` (dedicated)
     * @param integer $AuthType Authentication type. Valid values: `0` (static password), `1` (signature)
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
        if (array_key_exists("IdlType",$param) and $param["IdlType"] !== null) {
            $this->IdlType = $param["IdlType"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new TagInfoUnit();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("Ipv6Enable",$param) and $param["Ipv6Enable"] !== null) {
            $this->Ipv6Enable = $param["Ipv6Enable"];
        }

        if (array_key_exists("ServerList",$param) and $param["ServerList"] !== null) {
            $this->ServerList = [];
            foreach ($param["ServerList"] as $key => $value){
                $obj = new MachineInfo();
                $obj->deserialize($value);
                array_push($this->ServerList, $obj);
            }
        }

        if (array_key_exists("ProxyList",$param) and $param["ProxyList"] !== null) {
            $this->ProxyList = [];
            foreach ($param["ProxyList"] as $key => $value){
                $obj = new MachineInfo();
                $obj->deserialize($value);
                array_push($this->ProxyList, $obj);
            }
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }
    }
}
