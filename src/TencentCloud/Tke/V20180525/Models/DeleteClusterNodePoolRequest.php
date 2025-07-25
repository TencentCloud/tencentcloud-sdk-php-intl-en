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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteClusterNodePool request structure.
 *
 * @method string getClusterId() Obtain ClusterId of a node pool
 * @method void setClusterId(string $ClusterId) Set ClusterId of a node pool
 * @method array getNodePoolIds() Obtain IDs of node pools to delete
 * @method void setNodePoolIds(array $NodePoolIds) Set IDs of node pools to delete
 * @method boolean getKeepInstance() Obtain Indicates whether nodes in a node pool are retained when the node pool is deleted. (The nodes are removed from the cluster. However, the corresponding instances will not be terminated.)
 * @method void setKeepInstance(boolean $KeepInstance) Set Indicates whether nodes in a node pool are retained when the node pool is deleted. (The nodes are removed from the cluster. However, the corresponding instances will not be terminated.)
 */
class DeleteClusterNodePoolRequest extends AbstractModel
{
    /**
     * @var string ClusterId of a node pool
     */
    public $ClusterId;

    /**
     * @var array IDs of node pools to delete
     */
    public $NodePoolIds;

    /**
     * @var boolean Indicates whether nodes in a node pool are retained when the node pool is deleted. (The nodes are removed from the cluster. However, the corresponding instances will not be terminated.)
     */
    public $KeepInstance;

    /**
     * @param string $ClusterId ClusterId of a node pool
     * @param array $NodePoolIds IDs of node pools to delete
     * @param boolean $KeepInstance Indicates whether nodes in a node pool are retained when the node pool is deleted. (The nodes are removed from the cluster. However, the corresponding instances will not be terminated.)
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

        if (array_key_exists("NodePoolIds",$param) and $param["NodePoolIds"] !== null) {
            $this->NodePoolIds = $param["NodePoolIds"];
        }

        if (array_key_exists("KeepInstance",$param) and $param["KeepInstance"] !== null) {
            $this->KeepInstance = $param["KeepInstance"];
        }
    }
}
