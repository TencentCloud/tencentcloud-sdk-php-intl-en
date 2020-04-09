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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Memory monitoring information of the physical server where the instance is located
 *
 * @method array getTotal() Obtain Total memory size in KB, which is the value of `total` in the `Mem:` in the `free` command
 * @method void setTotal(array $Total) Set Total memory size in KB, which is the value of `total` in the `Mem:` in the `free` command
 * @method array getUsed() Obtain Used memory size in KB, which is the value of `used` in the `Mem:` row in the `free` command
 * @method void setUsed(array $Used) Set Used memory size in KB, which is the value of `used` in the `Mem:` row in the `free` command
 */
class DeviceMemInfo extends AbstractModel
{
    /**
     * @var array Total memory size in KB, which is the value of `total` in the `Mem:` in the `free` command
     */
    public $Total;

    /**
     * @var array Used memory size in KB, which is the value of `used` in the `Mem:` row in the `free` command
     */
    public $Used;

    /**
     * @param array $Total Total memory size in KB, which is the value of `total` in the `Mem:` in the `free` command
     * @param array $Used Used memory size in KB, which is the value of `used` in the `Mem:` row in the `free` command
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Used",$param) and $param["Used"] !== null) {
            $this->Used = $param["Used"];
        }
    }
}
