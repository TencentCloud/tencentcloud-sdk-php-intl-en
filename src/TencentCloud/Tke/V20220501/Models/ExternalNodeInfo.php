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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Third-party node
 *
 * @method string getName() Obtain Third-party node name
 * @method void setName(string $Name) Set Third-party node name
 * @method integer getCPU() Obtain Number of CPU cores (unit: cores)
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setCPU(integer $CPU) Set Number of CPU cores (unit: cores)
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method integer getMemory() Obtain Node memory capacity (unit: `GB`)
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setMemory(integer $Memory) Set Node memory capacity (unit: `GB`)
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getK8SVersion() Obtain kubelet version information of third-party nodes
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setK8SVersion(string $K8SVersion) Set kubelet version information of third-party nodes
Note: This field may return "null", indicating that no valid value can be obtained.
 */
class ExternalNodeInfo extends AbstractModel
{
    /**
     * @var string Third-party node name
     */
    public $Name;

    /**
     * @var integer Number of CPU cores (unit: cores)
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $CPU;

    /**
     * @var integer Node memory capacity (unit: `GB`)
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Memory;

    /**
     * @var string kubelet version information of third-party nodes
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $K8SVersion;

    /**
     * @param string $Name Third-party node name
     * @param integer $CPU Number of CPU cores (unit: cores)
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param integer $Memory Node memory capacity (unit: `GB`)
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $K8SVersion kubelet version information of third-party nodes
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("K8SVersion",$param) and $param["K8SVersion"] !== null) {
            $this->K8SVersion = $param["K8SVersion"];
        }
    }
}
