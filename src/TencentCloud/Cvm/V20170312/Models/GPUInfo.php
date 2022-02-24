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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GPU information of the instance
 *
 * @method float getGPUCount() Obtain Number of GPUs. 
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setGPUCount(float $GPUCount) Set Number of GPUs. 
Note: this field may return `null`, indicating that no valid value can be found.
 * @method array getGPUId() Obtain GPU address
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setGPUId(array $GPUId) Set GPU address
Note: this field may return `null`, indicating that no valid value can be found.
 * @method string getGPUType() Obtain GPU type of the instance.
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setGPUType(string $GPUType) Set GPU type of the instance.
Note: this field may return `null`, indicating that no valid value can be found.
 */
class GPUInfo extends AbstractModel
{
    /**
     * @var float Number of GPUs. 
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $GPUCount;

    /**
     * @var array GPU address
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $GPUId;

    /**
     * @var string GPU type of the instance.
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $GPUType;

    /**
     * @param float $GPUCount Number of GPUs. 
Note: this field may return `null`, indicating that no valid value can be found.
     * @param array $GPUId GPU address
Note: this field may return `null`, indicating that no valid value can be found.
     * @param string $GPUType GPU type of the instance.
Note: this field may return `null`, indicating that no valid value can be found.
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
        if (array_key_exists("GPUCount",$param) and $param["GPUCount"] !== null) {
            $this->GPUCount = $param["GPUCount"];
        }

        if (array_key_exists("GPUId",$param) and $param["GPUId"] !== null) {
            $this->GPUId = $param["GPUId"];
        }

        if (array_key_exists("GPUType",$param) and $param["GPUType"] !== null) {
            $this->GPUType = $param["GPUType"];
        }
    }
}
