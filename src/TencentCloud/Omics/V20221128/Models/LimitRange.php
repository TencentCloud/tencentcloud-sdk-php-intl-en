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
 * Resource limit scope
 *
 * @method string getMaxCPU() Obtain Maximum CPU setting
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxCPU(string $MaxCPU) Set Maximum CPU setting
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMaxMemory() Obtain Maximum memory setting (unit: Mi, Gi, Ti, M, G, and T)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxMemory(string $MaxMemory) Set Maximum memory setting (unit: Mi, Gi, Ti, M, G, and T)
Note: This field may return null, indicating that no valid values can be obtained.
 */
class LimitRange extends AbstractModel
{
    /**
     * @var string Maximum CPU setting
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxCPU;

    /**
     * @var string Maximum memory setting (unit: Mi, Gi, Ti, M, G, and T)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxMemory;

    /**
     * @param string $MaxCPU Maximum CPU setting
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MaxMemory Maximum memory setting (unit: Mi, Gi, Ti, M, G, and T)
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("MaxCPU",$param) and $param["MaxCPU"] !== null) {
            $this->MaxCPU = $param["MaxCPU"];
        }

        if (array_key_exists("MaxMemory",$param) and $param["MaxMemory"] !== null) {
            $this->MaxMemory = $param["MaxMemory"];
        }
    }
}
