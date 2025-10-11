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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GPU information of the instance
 *
 * @method float getGPUCount() Obtain Specifies the GPU count of the instance. a value less than 1 indicates VGPU type, and a value larger than 1 indicates GPU passthrough type.
 * @method void setGPUCount(float $GPUCount) Set Specifies the GPU count of the instance. a value less than 1 indicates VGPU type, and a value larger than 1 indicates GPU passthrough type.
 * @method array getGPUId() Obtain Specifies the GPU address of the instance.
 * @method void setGPUId(array $GPUId) Set Specifies the GPU address of the instance.
 * @method string getGPUType() Obtain Specifies the GPU type of the instance.
 * @method void setGPUType(string $GPUType) Set Specifies the GPU type of the instance.
 */
class GPUInfo extends AbstractModel
{
    /**
     * @var float Specifies the GPU count of the instance. a value less than 1 indicates VGPU type, and a value larger than 1 indicates GPU passthrough type.
     */
    public $GPUCount;

    /**
     * @var array Specifies the GPU address of the instance.
     */
    public $GPUId;

    /**
     * @var string Specifies the GPU type of the instance.
     */
    public $GPUType;

    /**
     * @param float $GPUCount Specifies the GPU count of the instance. a value less than 1 indicates VGPU type, and a value larger than 1 indicates GPU passthrough type.
     * @param array $GPUId Specifies the GPU address of the instance.
     * @param string $GPUType Specifies the GPU type of the instance.
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
