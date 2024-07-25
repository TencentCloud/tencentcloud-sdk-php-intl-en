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
 * Resource quota
 *
 * @method string getCPULimit() Obtain CPU limit setting
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCPULimit(string $CPULimit) Set CPU limit setting
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMemoryLimit() Obtain Memory limit setting (Unit: Mi, Gi, Ti, M, G, and T)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMemoryLimit(string $MemoryLimit) Set Memory limit setting (Unit: Mi, Gi, Ti, M, G, and T)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPods() Obtain Pod quantity setting
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPods(string $Pods) Set Pod quantity setting
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ResourceQuota extends AbstractModel
{
    /**
     * @var string CPU limit setting
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CPULimit;

    /**
     * @var string Memory limit setting (Unit: Mi, Gi, Ti, M, G, and T)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MemoryLimit;

    /**
     * @var string Pod quantity setting
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Pods;

    /**
     * @param string $CPULimit CPU limit setting
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MemoryLimit Memory limit setting (Unit: Mi, Gi, Ti, M, G, and T)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Pods Pod quantity setting
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
        if (array_key_exists("CPULimit",$param) and $param["CPULimit"] !== null) {
            $this->CPULimit = $param["CPULimit"];
        }

        if (array_key_exists("MemoryLimit",$param) and $param["MemoryLimit"] !== null) {
            $this->MemoryLimit = $param["MemoryLimit"];
        }

        if (array_key_exists("Pods",$param) and $param["Pods"] !== null) {
            $this->Pods = $param["Pods"];
        }
    }
}
