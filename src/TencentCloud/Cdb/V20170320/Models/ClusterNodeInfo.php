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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster Edition instance node information.
 *
 * @method string getNodeId() Obtain node id.
 * @method void setNodeId(string $NodeId) Set node id.
 * @method string getRole() Obtain Node role.
 * @method void setRole(string $Role) Set Node role.
 * @method string getZone() Obtain Node AZ.
 * @method void setZone(string $Zone) Set Node AZ.
 * @method integer getWeight() Obtain Weight of the node
 * @method void setWeight(integer $Weight) Set Weight of the node
 * @method string getStatus() Obtain Node status.
 * @method void setStatus(string $Status) Set Node status.
 */
class ClusterNodeInfo extends AbstractModel
{
    /**
     * @var string node id.
     */
    public $NodeId;

    /**
     * @var string Node role.
     */
    public $Role;

    /**
     * @var string Node AZ.
     */
    public $Zone;

    /**
     * @var integer Weight of the node
     */
    public $Weight;

    /**
     * @var string Node status.
     */
    public $Status;

    /**
     * @param string $NodeId node id.
     * @param string $Role Node role.
     * @param string $Zone Node AZ.
     * @param integer $Weight Weight of the node
     * @param string $Status Node status.
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
        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
