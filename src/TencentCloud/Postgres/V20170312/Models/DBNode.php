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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describes the instance node information, including the node type, availability zone where the node is located, and dedicated cluster where the node resides.
 *
 * @method string getRole() Obtain Node type. Valid values:
`Primary`;
`Standby`.
 * @method void setRole(string $Role) Set Node type. Valid values:
`Primary`;
`Standby`.
 * @method string getZone() Obtain AZ where the node resides, such as ap-guangzhou-1.
 * @method void setZone(string $Zone) Set AZ where the node resides, such as ap-guangzhou-1.
 * @method string getDedicatedClusterId() Obtain CDC ID.
 * @method void setDedicatedClusterId(string $DedicatedClusterId) Set CDC ID.
 */
class DBNode extends AbstractModel
{
    /**
     * @var string Node type. Valid values:
`Primary`;
`Standby`.
     */
    public $Role;

    /**
     * @var string AZ where the node resides, such as ap-guangzhou-1.
     */
    public $Zone;

    /**
     * @var string CDC ID.
     */
    public $DedicatedClusterId;

    /**
     * @param string $Role Node type. Valid values:
`Primary`;
`Standby`.
     * @param string $Zone AZ where the node resides, such as ap-guangzhou-1.
     * @param string $DedicatedClusterId CDC ID.
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

        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }
    }
}
