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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Running information of Redis nodes
 *
 * @method integer getKeys() Obtain Number of keys on the node
 * @method void setKeys(integer $Keys) Set Number of keys on the node
 * @method string getSlot() Obtain Distribution of node slots
 * @method void setSlot(string $Slot) Set Distribution of node slots
 * @method string getNodeId() Obtain Node ID
 * @method void setNodeId(string $NodeId) Set Node ID
 * @method string getStatus() Obtain Node status
 * @method void setStatus(string $Status) Set Node status
 * @method string getRole() Obtain Node role
 * @method void setRole(string $Role) Set Node role
 */
class RedisNode extends AbstractModel
{
    /**
     * @var integer Number of keys on the node
     */
    public $Keys;

    /**
     * @var string Distribution of node slots
     */
    public $Slot;

    /**
     * @var string Node ID
     */
    public $NodeId;

    /**
     * @var string Node status
     */
    public $Status;

    /**
     * @var string Node role
     */
    public $Role;

    /**
     * @param integer $Keys Number of keys on the node
     * @param string $Slot Distribution of node slots
     * @param string $NodeId Node ID
     * @param string $Status Node status
     * @param string $Role Node role
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
        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = $param["Keys"];
        }

        if (array_key_exists("Slot",$param) and $param["Slot"] !== null) {
            $this->Slot = $param["Slot"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }
    }
}
