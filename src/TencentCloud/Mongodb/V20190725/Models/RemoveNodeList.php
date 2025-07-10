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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node details of an instance to be modified.
 *
 * @method string getRole() Obtain Roles of nodes to be deleted.
 - SECONDARY: Mongod secondary node.
 - READONLY: read-only node.
 - MONGOS: Mongos node.
 * @method void setRole(string $Role) Set Roles of nodes to be deleted.
 - SECONDARY: Mongod secondary node.
 - READONLY: read-only node.
 - MONGOS: Mongos node.
 * @method string getNodeName() Obtain IDs of nodes to be deleted. For a sharded cluster instance, specify the IDs of nodes to be deleted on one shard. Nodes with the same IDs on other shards will also be deleted.

 - Obtaining method: Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/), go to the **Node Management** tab, and obtain the **node IDs**.
 - Note: For a sharded cluster instance, specify the IDs of nodes on shard 0. For example, cmgo-6hfk****_0-node-primary.
 * @method void setNodeName(string $NodeName) Set IDs of nodes to be deleted. For a sharded cluster instance, specify the IDs of nodes to be deleted on one shard. Nodes with the same IDs on other shards will also be deleted.

 - Obtaining method: Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/), go to the **Node Management** tab, and obtain the **node IDs**.
 - Note: For a sharded cluster instance, specify the IDs of nodes on shard 0. For example, cmgo-6hfk****_0-node-primary.
 * @method string getZone() Obtain AZs corresponding to the nodes.
 - Single AZ: All nodes are in the same AZ.
 - Multiple AZs: The current standard specification involves three AZs. The primary and secondary nodes are not in the same AZ. Note: AZs corresponding to the nodes to be deleted should be specified. After deletion, the number of nodes in any two AZs should be larger than that in the third AZ.
 * @method void setZone(string $Zone) Set AZs corresponding to the nodes.
 - Single AZ: All nodes are in the same AZ.
 - Multiple AZs: The current standard specification involves three AZs. The primary and secondary nodes are not in the same AZ. Note: AZs corresponding to the nodes to be deleted should be specified. After deletion, the number of nodes in any two AZs should be larger than that in the third AZ.
 */
class RemoveNodeList extends AbstractModel
{
    /**
     * @var string Roles of nodes to be deleted.
 - SECONDARY: Mongod secondary node.
 - READONLY: read-only node.
 - MONGOS: Mongos node.
     */
    public $Role;

    /**
     * @var string IDs of nodes to be deleted. For a sharded cluster instance, specify the IDs of nodes to be deleted on one shard. Nodes with the same IDs on other shards will also be deleted.

 - Obtaining method: Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/), go to the **Node Management** tab, and obtain the **node IDs**.
 - Note: For a sharded cluster instance, specify the IDs of nodes on shard 0. For example, cmgo-6hfk****_0-node-primary.
     */
    public $NodeName;

    /**
     * @var string AZs corresponding to the nodes.
 - Single AZ: All nodes are in the same AZ.
 - Multiple AZs: The current standard specification involves three AZs. The primary and secondary nodes are not in the same AZ. Note: AZs corresponding to the nodes to be deleted should be specified. After deletion, the number of nodes in any two AZs should be larger than that in the third AZ.
     */
    public $Zone;

    /**
     * @param string $Role Roles of nodes to be deleted.
 - SECONDARY: Mongod secondary node.
 - READONLY: read-only node.
 - MONGOS: Mongos node.
     * @param string $NodeName IDs of nodes to be deleted. For a sharded cluster instance, specify the IDs of nodes to be deleted on one shard. Nodes with the same IDs on other shards will also be deleted.

 - Obtaining method: Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/), go to the **Node Management** tab, and obtain the **node IDs**.
 - Note: For a sharded cluster instance, specify the IDs of nodes on shard 0. For example, cmgo-6hfk****_0-node-primary.
     * @param string $Zone AZs corresponding to the nodes.
 - Single AZ: All nodes are in the same AZ.
 - Multiple AZs: The current standard specification involves three AZs. The primary and secondary nodes are not in the same AZ. Note: AZs corresponding to the nodes to be deleted should be specified. After deletion, the number of nodes in any two AZs should be larger than that in the third AZ.
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
        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
