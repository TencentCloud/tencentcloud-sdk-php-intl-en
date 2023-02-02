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
 * CreateClusterVirtualNode request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getNodePoolId() Obtain Node pool
 * @method void setNodePoolId(string $NodePoolId) Set Node pool
 * @method string getSubnetId() Obtain Subnet
 * @method void setSubnetId(string $SubnetId) Set Subnet
 * @method array getSubnetIds() Obtain List of subnet IDs (this parameter and `SubnetId` are mutually exclusive)
 * @method void setSubnetIds(array $SubnetIds) Set List of subnet IDs (this parameter and `SubnetId` are mutually exclusive)
 * @method array getVirtualNodes() Obtain List of virtual nodes
 * @method void setVirtualNodes(array $VirtualNodes) Set List of virtual nodes
 */
class CreateClusterVirtualNodeRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Node pool
     */
    public $NodePoolId;

    /**
     * @var string Subnet
     */
    public $SubnetId;

    /**
     * @var array List of subnet IDs (this parameter and `SubnetId` are mutually exclusive)
     */
    public $SubnetIds;

    /**
     * @var array List of virtual nodes
     */
    public $VirtualNodes;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $NodePoolId Node pool
     * @param string $SubnetId Subnet
     * @param array $SubnetIds List of subnet IDs (this parameter and `SubnetId` are mutually exclusive)
     * @param array $VirtualNodes List of virtual nodes
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

        if (array_key_exists("NodePoolId",$param) and $param["NodePoolId"] !== null) {
            $this->NodePoolId = $param["NodePoolId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("VirtualNodes",$param) and $param["VirtualNodes"] !== null) {
            $this->VirtualNodes = [];
            foreach ($param["VirtualNodes"] as $key => $value){
                $obj = new VirtualNodeSpec();
                $obj->deserialize($value);
                array_push($this->VirtualNodes, $obj);
            }
        }
    }
}
