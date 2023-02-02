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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateClusterVirtualNodePool request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getName() Obtain Node pool name
 * @method void setName(string $Name) Set Node pool name
 * @method array getSubnetIds() Obtain List of subnet IDs
 * @method void setSubnetIds(array $SubnetIds) Set List of subnet IDs
 * @method array getSecurityGroupIds() Obtain List of security group IDs
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set List of security group IDs
 * @method array getLabels() Obtain Virtual node labels
 * @method void setLabels(array $Labels) Set Virtual node labels
 * @method array getTaints() Obtain Virtual node taint
 * @method void setTaints(array $Taints) Set Virtual node taint
 * @method array getVirtualNodes() Obtain List of nodes
 * @method void setVirtualNodes(array $VirtualNodes) Set List of nodes
 * @method boolean getDeletionProtection() Obtain Setting of deletion protection
 * @method void setDeletionProtection(boolean $DeletionProtection) Set Setting of deletion protection
 * @method string getOS() Obtain Node pool OS:
- `linux` (default value)
- `windows`
 * @method void setOS(string $OS) Set Node pool OS:
- `linux` (default value)
- `windows`
 */
class CreateClusterVirtualNodePoolRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Node pool name
     */
    public $Name;

    /**
     * @var array List of subnet IDs
     */
    public $SubnetIds;

    /**
     * @var array List of security group IDs
     */
    public $SecurityGroupIds;

    /**
     * @var array Virtual node labels
     */
    public $Labels;

    /**
     * @var array Virtual node taint
     */
    public $Taints;

    /**
     * @var array List of nodes
     */
    public $VirtualNodes;

    /**
     * @var boolean Setting of deletion protection
     */
    public $DeletionProtection;

    /**
     * @var string Node pool OS:
- `linux` (default value)
- `windows`
     */
    public $OS;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $Name Node pool name
     * @param array $SubnetIds List of subnet IDs
     * @param array $SecurityGroupIds List of security group IDs
     * @param array $Labels Virtual node labels
     * @param array $Taints Virtual node taint
     * @param array $VirtualNodes List of nodes
     * @param boolean $DeletionProtection Setting of deletion protection
     * @param string $OS Node pool OS:
- `linux` (default value)
- `windows`
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Taints",$param) and $param["Taints"] !== null) {
            $this->Taints = [];
            foreach ($param["Taints"] as $key => $value){
                $obj = new Taint();
                $obj->deserialize($value);
                array_push($this->Taints, $obj);
            }
        }

        if (array_key_exists("VirtualNodes",$param) and $param["VirtualNodes"] !== null) {
            $this->VirtualNodes = [];
            foreach ($param["VirtualNodes"] as $key => $value){
                $obj = new VirtualNodeSpec();
                $obj->deserialize($value);
                array_push($this->VirtualNodes, $obj);
            }
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }

        if (array_key_exists("OS",$param) and $param["OS"] !== null) {
            $this->OS = $param["OS"];
        }
    }
}
