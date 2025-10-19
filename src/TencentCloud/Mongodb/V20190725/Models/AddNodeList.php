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
 * Node details of the instance to be modified.
 *
 * @method string getRole() Obtain Roles of nodes to be added.
 - SECONDARY: Mongod node.
 - READONLY: read-only node.
 - MONGOS: Mongos node.
 * @method void setRole(string $Role) Set Roles of nodes to be added.
 - SECONDARY: Mongod node.
 - READONLY: read-only node.
 - MONGOS: Mongos node.
 * @method string getZone() Obtain AZ corresponding to the node. For the currently supported AZs, see [Regions and AZs](https://www.tencentcloud.comom/document/product/240/3637?from_cn_redirect=1).
- Single AZ: All nodes are in the same AZ.
- Multiple AZs: The current standard specification involves three AZs. The primary and secondary nodes are not in the same AZ. Note: AZs corresponding to the nodes to be added should be specified. After addition, the number of nodes in any 2 AZs should be greater than that in the third AZ.
 * @method void setZone(string $Zone) Set AZ corresponding to the node. For the currently supported AZs, see [Regions and AZs](https://www.tencentcloud.comom/document/product/240/3637?from_cn_redirect=1).
- Single AZ: All nodes are in the same AZ.
- Multiple AZs: The current standard specification involves three AZs. The primary and secondary nodes are not in the same AZ. Note: AZs corresponding to the nodes to be added should be specified. After addition, the number of nodes in any 2 AZs should be greater than that in the third AZ.
 */
class AddNodeList extends AbstractModel
{
    /**
     * @var string Roles of nodes to be added.
 - SECONDARY: Mongod node.
 - READONLY: read-only node.
 - MONGOS: Mongos node.
     */
    public $Role;

    /**
     * @var string AZ corresponding to the node. For the currently supported AZs, see [Regions and AZs](https://www.tencentcloud.comom/document/product/240/3637?from_cn_redirect=1).
- Single AZ: All nodes are in the same AZ.
- Multiple AZs: The current standard specification involves three AZs. The primary and secondary nodes are not in the same AZ. Note: AZs corresponding to the nodes to be added should be specified. After addition, the number of nodes in any 2 AZs should be greater than that in the third AZ.
     */
    public $Zone;

    /**
     * @param string $Role Roles of nodes to be added.
 - SECONDARY: Mongod node.
 - READONLY: read-only node.
 - MONGOS: Mongos node.
     * @param string $Zone AZ corresponding to the node. For the currently supported AZs, see [Regions and AZs](https://www.tencentcloud.comom/document/product/240/3637?from_cn_redirect=1).
- Single AZ: All nodes are in the same AZ.
- Multiple AZs: The current standard specification involves three AZs. The primary and secondary nodes are not in the same AZ. Note: AZs corresponding to the nodes to be added should be specified. After addition, the number of nodes in any 2 AZs should be greater than that in the third AZ.
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

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
