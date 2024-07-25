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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CFS configuration
 *
 * @method string getStorageType() Obtain CFS type. Valid values:
- SD: standard
- HP: high-performance
- TB: standard Turbo
- TP: high-performance Turbo
 * @method void setStorageType(string $StorageType) Set CFS type. Valid values:
- SD: standard
- HP: high-performance
- TB: standard Turbo
- TP: high-performance Turbo
 * @method string getZone() Obtain CFS availability zone
 * @method void setZone(string $Zone) Set CFS availability zone
 * @method integer getCapacity() Obtain CFS capacity in GiB, required for the Turbo series
- Standard Turbo has a minimum capacity of 40 TiB, or 40,960 GiB; the capacity expansion step is 20 TiB, or 20,480 GiB.
- High-performance Turbo has a minimum capacity of 20 TiB, or 20,480 GiB; the capacity expansion step is 10 TiB, or 10,240 GiB.
 * @method void setCapacity(integer $Capacity) Set CFS capacity in GiB, required for the Turbo series
- Standard Turbo has a minimum capacity of 40 TiB, or 40,960 GiB; the capacity expansion step is 20 TiB, or 20,480 GiB.
- High-performance Turbo has a minimum capacity of 20 TiB, or 20,480 GiB; the capacity expansion step is 10 TiB, or 10,240 GiB.
 */
class StorageOption extends AbstractModel
{
    /**
     * @var string CFS type. Valid values:
- SD: standard
- HP: high-performance
- TB: standard Turbo
- TP: high-performance Turbo
     */
    public $StorageType;

    /**
     * @var string CFS availability zone
     */
    public $Zone;

    /**
     * @var integer CFS capacity in GiB, required for the Turbo series
- Standard Turbo has a minimum capacity of 40 TiB, or 40,960 GiB; the capacity expansion step is 20 TiB, or 20,480 GiB.
- High-performance Turbo has a minimum capacity of 20 TiB, or 20,480 GiB; the capacity expansion step is 10 TiB, or 10,240 GiB.
     */
    public $Capacity;

    /**
     * @param string $StorageType CFS type. Valid values:
- SD: standard
- HP: high-performance
- TB: standard Turbo
- TP: high-performance Turbo
     * @param string $Zone CFS availability zone
     * @param integer $Capacity CFS capacity in GiB, required for the Turbo series
- Standard Turbo has a minimum capacity of 40 TiB, or 40,960 GiB; the capacity expansion step is 20 TiB, or 20,480 GiB.
- High-performance Turbo has a minimum capacity of 20 TiB, or 20,480 GiB; the capacity expansion step is 10 TiB, or 10,240 GiB.
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
        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Capacity",$param) and $param["Capacity"] !== null) {
            $this->Capacity = $param["Capacity"];
        }
    }
}
