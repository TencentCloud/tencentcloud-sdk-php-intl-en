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
 * Node pool AS configuration
 *
 * @method integer getMinReplicas() Obtain Node pool minimum replica count
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setMinReplicas(integer $MinReplicas) Set Node pool minimum replica count
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method integer getMaxReplicas() Obtain Node pool maximum replica count
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setMaxReplicas(integer $MaxReplicas) Set Node pool maximum replica count
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getCreatePolicy() Obtain Node pool scaling policy. ZoneEquality: Scatter across multiple availability zones; ZonePriority: Prioritize preferred availability zones;
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setCreatePolicy(string $CreatePolicy) Set Node pool scaling policy. ZoneEquality: Scatter across multiple availability zones; ZonePriority: Prioritize preferred availability zones;
Note: This field may return "null", indicating that no valid value can be obtained.
 */
class MachineSetScaling extends AbstractModel
{
    /**
     * @var integer Node pool minimum replica count
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $MinReplicas;

    /**
     * @var integer Node pool maximum replica count
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $MaxReplicas;

    /**
     * @var string Node pool scaling policy. ZoneEquality: Scatter across multiple availability zones; ZonePriority: Prioritize preferred availability zones;
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $CreatePolicy;

    /**
     * @param integer $MinReplicas Node pool minimum replica count
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param integer $MaxReplicas Node pool maximum replica count
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $CreatePolicy Node pool scaling policy. ZoneEquality: Scatter across multiple availability zones; ZonePriority: Prioritize preferred availability zones;
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
        if (array_key_exists("MinReplicas",$param) and $param["MinReplicas"] !== null) {
            $this->MinReplicas = $param["MinReplicas"];
        }

        if (array_key_exists("MaxReplicas",$param) and $param["MaxReplicas"] !== null) {
            $this->MaxReplicas = $param["MaxReplicas"];
        }

        if (array_key_exists("CreatePolicy",$param) and $param["CreatePolicy"] !== null) {
            $this->CreatePolicy = $param["CreatePolicy"];
        }
    }
}
