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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance node information
 *
 * @method string getNodeId() Obtain Node ID
 * @method void setNodeId(string $NodeId) Set Node ID
 * @method string getRole() Obtain Node role. Valid values: `master`, `slave`
 * @method void setRole(string $Role) Set Node role. Valid values: `master`, `slave`
 */
class NodeInfo extends AbstractModel
{
    /**
     * @var string Node ID
     */
    public $NodeId;

    /**
     * @var string Node role. Valid values: `master`, `slave`
     */
    public $Role;

    /**
     * @param string $NodeId Node ID
     * @param string $Role Node role. Valid values: `master`, `slave`
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
    }
}
