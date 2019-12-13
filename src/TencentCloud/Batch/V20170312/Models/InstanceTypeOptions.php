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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getCPU() 获取Number of CPU cores.
 * @method void setCPU(integer $CPU) 设置Number of CPU cores.
 * @method integer getMemory() 获取Memory size in GB.
 * @method void setMemory(integer $Memory) 设置Memory size in GB.
 * @method array getInstanceCategories() 获取Instance model category. Value range: "ALL", "GENERAL", "GENERAL_2", "GENERAL_3", "COMPUTE", "COMPUTE_2", and "COMPUTE_3". Default value: "ALL".
 * @method void setInstanceCategories(array $InstanceCategories) 设置Instance model category. Value range: "ALL", "GENERAL", "GENERAL_2", "GENERAL_3", "COMPUTE", "COMPUTE_2", and "COMPUTE_3". Default value: "ALL".
 */

/**
 *Instance model configuration.
 */
class InstanceTypeOptions extends AbstractModel
{
    /**
     * @var integer Number of CPU cores.
     */
    public $CPU;

    /**
     * @var integer Memory size in GB.
     */
    public $Memory;

    /**
     * @var array Instance model category. Value range: "ALL", "GENERAL", "GENERAL_2", "GENERAL_3", "COMPUTE", "COMPUTE_2", and "COMPUTE_3". Default value: "ALL".
     */
    public $InstanceCategories;
    /**
     * @param integer $CPU Number of CPU cores.
     * @param integer $Memory Memory size in GB.
     * @param array $InstanceCategories Instance model category. Value range: "ALL", "GENERAL", "GENERAL_2", "GENERAL_3", "COMPUTE", "COMPUTE_2", and "COMPUTE_3". Default value: "ALL".
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("InstanceCategories",$param) and $param["InstanceCategories"] !== null) {
            $this->InstanceCategories = $param["InstanceCategories"];
        }
    }
}
