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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRocketMQInstanceSpec request structure.
 *
 * @method string getInstanceId() Obtain ID of the exclusive instance
 * @method void setInstanceId(string $InstanceId) Set ID of the exclusive instance
 * @method string getSpecification() Obtain Instance specification.
Valid values: `rocket-vip-basic-1` (Basic),
`rocket-vip-basic-2` (Standard),
`rocket-vip-basic-3` (Advanced I),
`rocket-vip-basic-4` (Advanced II).
 * @method void setSpecification(string $Specification) Set Instance specification.
Valid values: `rocket-vip-basic-1` (Basic),
`rocket-vip-basic-2` (Standard),
`rocket-vip-basic-3` (Advanced I),
`rocket-vip-basic-4` (Advanced II).
 * @method integer getNodeCount() Obtain Node count
 * @method void setNodeCount(integer $NodeCount) Set Node count
 * @method integer getStorageSize() Obtain Storage space in GB
 * @method void setStorageSize(integer $StorageSize) Set Storage space in GB
 */
class ModifyRocketMQInstanceSpecRequest extends AbstractModel
{
    /**
     * @var string ID of the exclusive instance
     */
    public $InstanceId;

    /**
     * @var string Instance specification.
Valid values: `rocket-vip-basic-1` (Basic),
`rocket-vip-basic-2` (Standard),
`rocket-vip-basic-3` (Advanced I),
`rocket-vip-basic-4` (Advanced II).
     */
    public $Specification;

    /**
     * @var integer Node count
     */
    public $NodeCount;

    /**
     * @var integer Storage space in GB
     */
    public $StorageSize;

    /**
     * @param string $InstanceId ID of the exclusive instance
     * @param string $Specification Instance specification.
Valid values: `rocket-vip-basic-1` (Basic),
`rocket-vip-basic-2` (Standard),
`rocket-vip-basic-3` (Advanced I),
`rocket-vip-basic-4` (Advanced II).
     * @param integer $NodeCount Node count
     * @param integer $StorageSize Storage space in GB
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Specification",$param) and $param["Specification"] !== null) {
            $this->Specification = $param["Specification"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }
    }
}
