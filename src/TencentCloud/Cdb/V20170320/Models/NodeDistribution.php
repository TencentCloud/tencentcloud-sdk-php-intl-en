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
 * Node distribution of the dedicated cluster CDB instance
 *
 * @method string getNode() Obtain Host ID of the Master node of the primary instance or host ID of the read-only instance
 * @method void setNode(string $Node) Set Host ID of the Master node of the primary instance or host ID of the read-only instance
 * @method string getSlaveNodeOne() Obtain Host ID where the first Slave node of the primary instance resides
 * @method void setSlaveNodeOne(string $SlaveNodeOne) Set Host ID where the first Slave node of the primary instance resides
 * @method string getSlaveNodeTwo() Obtain Host ID where the second Slave node of the primary instance resides
 * @method void setSlaveNodeTwo(string $SlaveNodeTwo) Set Host ID where the second Slave node of the primary instance resides
 */
class NodeDistribution extends AbstractModel
{
    /**
     * @var string Host ID of the Master node of the primary instance or host ID of the read-only instance
     */
    public $Node;

    /**
     * @var string Host ID where the first Slave node of the primary instance resides
     */
    public $SlaveNodeOne;

    /**
     * @var string Host ID where the second Slave node of the primary instance resides
     */
    public $SlaveNodeTwo;

    /**
     * @param string $Node Host ID of the Master node of the primary instance or host ID of the read-only instance
     * @param string $SlaveNodeOne Host ID where the first Slave node of the primary instance resides
     * @param string $SlaveNodeTwo Host ID where the second Slave node of the primary instance resides
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
        if (array_key_exists("Node",$param) and $param["Node"] !== null) {
            $this->Node = $param["Node"];
        }

        if (array_key_exists("SlaveNodeOne",$param) and $param["SlaveNodeOne"] !== null) {
            $this->SlaveNodeOne = $param["SlaveNodeOne"];
        }

        if (array_key_exists("SlaveNodeTwo",$param) and $param["SlaveNodeTwo"] !== null) {
            $this->SlaveNodeTwo = $param["SlaveNodeTwo"];
        }
    }
}
