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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAsset request structure.
 *
 * @method boolean getAll() Obtain Synchronizes all regular nodes.
 * @method void setAll(boolean $All) Set Synchronizes all regular nodes.
 * @method array getHosts() Obtain List of UUIDs of hosts to be synchronized. 
 * @method void setHosts(array $Hosts) Set List of UUIDs of hosts to be synchronized. 
 * @method boolean getAllSuperHost() Obtain Synchronizes all super nodes.
 * @method void setAllSuperHost(boolean $AllSuperHost) Set Synchronizes all super nodes.
 * @method array getNodeUniqueIds() Obtain Unique IDs of super nodes to be synchronized.
 * @method void setNodeUniqueIds(array $NodeUniqueIds) Set Unique IDs of super nodes to be synchronized.
 * @method integer getTimeoutSec() Obtain Timeout (in seconds). Minimum value: 3600.
 * @method void setTimeoutSec(integer $TimeoutSec) Set Timeout (in seconds). Minimum value: 3600.
 */
class ModifyAssetRequest extends AbstractModel
{
    /**
     * @var boolean Synchronizes all regular nodes.
     */
    public $All;

    /**
     * @var array List of UUIDs of hosts to be synchronized. 
     */
    public $Hosts;

    /**
     * @var boolean Synchronizes all super nodes.
     */
    public $AllSuperHost;

    /**
     * @var array Unique IDs of super nodes to be synchronized.
     */
    public $NodeUniqueIds;

    /**
     * @var integer Timeout (in seconds). Minimum value: 3600.
     */
    public $TimeoutSec;

    /**
     * @param boolean $All Synchronizes all regular nodes.
     * @param array $Hosts List of UUIDs of hosts to be synchronized. 
     * @param boolean $AllSuperHost Synchronizes all super nodes.
     * @param array $NodeUniqueIds Unique IDs of super nodes to be synchronized.
     * @param integer $TimeoutSec Timeout (in seconds). Minimum value: 3600.
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
        if (array_key_exists("All",$param) and $param["All"] !== null) {
            $this->All = $param["All"];
        }

        if (array_key_exists("Hosts",$param) and $param["Hosts"] !== null) {
            $this->Hosts = $param["Hosts"];
        }

        if (array_key_exists("AllSuperHost",$param) and $param["AllSuperHost"] !== null) {
            $this->AllSuperHost = $param["AllSuperHost"];
        }

        if (array_key_exists("NodeUniqueIds",$param) and $param["NodeUniqueIds"] !== null) {
            $this->NodeUniqueIds = $param["NodeUniqueIds"];
        }

        if (array_key_exists("TimeoutSec",$param) and $param["TimeoutSec"] !== null) {
            $this->TimeoutSec = $param["TimeoutSec"];
        }
    }
}
