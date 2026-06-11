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
 * DeleteMachine request structure.
 *
 * @method string getUuid() Obtain Agent UUID
 * @method void setUuid(string $Uuid) Set Agent UUID
 * @method array getNodeUniqueIds() Obtain Super Node Unique ID
 * @method void setNodeUniqueIds(array $NodeUniqueIds) Set Super Node Unique ID
 * @method array getUUIDs() Obtain UUID list
 * @method void setUUIDs(array $UUIDs) Set UUID list
 */
class DeleteMachineRequest extends AbstractModel
{
    /**
     * @var string Agent UUID
     */
    public $Uuid;

    /**
     * @var array Super Node Unique ID
     */
    public $NodeUniqueIds;

    /**
     * @var array UUID list
     */
    public $UUIDs;

    /**
     * @param string $Uuid Agent UUID
     * @param array $NodeUniqueIds Super Node Unique ID
     * @param array $UUIDs UUID list
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
        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("NodeUniqueIds",$param) and $param["NodeUniqueIds"] !== null) {
            $this->NodeUniqueIds = $param["NodeUniqueIds"];
        }

        if (array_key_exists("UUIDs",$param) and $param["UUIDs"] !== null) {
            $this->UUIDs = $param["UUIDs"];
        }
    }
}
