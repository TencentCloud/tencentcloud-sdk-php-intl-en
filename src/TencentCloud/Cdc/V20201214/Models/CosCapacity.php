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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Capacity of COS in CDC
 *
 * @method float getTotalCapacity() Obtain Total capacity, in GB
 * @method void setTotalCapacity(float $TotalCapacity) Set Total capacity, in GB
 * @method float getTotalFreeCapacity() Obtain Available capacity, in GB
 * @method void setTotalFreeCapacity(float $TotalFreeCapacity) Set Available capacity, in GB
 * @method float getTotalUsedCapacity() Obtain Used capacity, in GB
 * @method void setTotalUsedCapacity(float $TotalUsedCapacity) Set Used capacity, in GB
 */
class CosCapacity extends AbstractModel
{
    /**
     * @var float Total capacity, in GB
     */
    public $TotalCapacity;

    /**
     * @var float Available capacity, in GB
     */
    public $TotalFreeCapacity;

    /**
     * @var float Used capacity, in GB
     */
    public $TotalUsedCapacity;

    /**
     * @param float $TotalCapacity Total capacity, in GB
     * @param float $TotalFreeCapacity Available capacity, in GB
     * @param float $TotalUsedCapacity Used capacity, in GB
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
        if (array_key_exists("TotalCapacity",$param) and $param["TotalCapacity"] !== null) {
            $this->TotalCapacity = $param["TotalCapacity"];
        }

        if (array_key_exists("TotalFreeCapacity",$param) and $param["TotalFreeCapacity"] !== null) {
            $this->TotalFreeCapacity = $param["TotalFreeCapacity"];
        }

        if (array_key_exists("TotalUsedCapacity",$param) and $param["TotalUsedCapacity"] !== null) {
            $this->TotalUsedCapacity = $param["TotalUsedCapacity"];
        }
    }
}
