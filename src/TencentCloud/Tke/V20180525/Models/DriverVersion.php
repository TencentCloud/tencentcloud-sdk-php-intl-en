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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Version information of GPU driver and CUDA
 *
 * @method string getVersion() Obtain Version of GPU driver or CUDA

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setVersion(string $Version) Set Version of GPU driver or CUDA

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getName() Obtain Name of GPU driver or CUDA

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setName(string $Name) Set Name of GPU driver or CUDA

Note: This field may return "null", indicating that no valid value can be obtained.
 */
class DriverVersion extends AbstractModel
{
    /**
     * @var string Version of GPU driver or CUDA

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Version;

    /**
     * @var string Name of GPU driver or CUDA

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Name;

    /**
     * @param string $Version Version of GPU driver or CUDA

Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $Name Name of GPU driver or CUDA

Note: This field may return "null", indicating that no valid value can be obtained.
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
