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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pod floating specifications
 *
 * @method float getRequestCpu() Obtain Minimum number of required CPU cores.
 * @method void setRequestCpu(float $RequestCpu) Set Minimum number of required CPU cores.
 * @method float getLimitCpu() Obtain Maximum number of required CPU cores.
 * @method void setLimitCpu(float $LimitCpu) Set Maximum number of required CPU cores.
 * @method float getRequestMemory() Obtain Minimum required memory capacity (MB).
 * @method void setRequestMemory(float $RequestMemory) Set Minimum required memory capacity (MB).
 * @method float getLimitMemory() Obtain Maximum required memory capacity (MB).
 * @method void setLimitMemory(float $LimitMemory) Set Maximum required memory capacity (MB).
 */
class DynamicPodSpec extends AbstractModel
{
    /**
     * @var float Minimum number of required CPU cores.
     */
    public $RequestCpu;

    /**
     * @var float Maximum number of required CPU cores.
     */
    public $LimitCpu;

    /**
     * @var float Minimum required memory capacity (MB).
     */
    public $RequestMemory;

    /**
     * @var float Maximum required memory capacity (MB).
     */
    public $LimitMemory;

    /**
     * @param float $RequestCpu Minimum number of required CPU cores.
     * @param float $LimitCpu Maximum number of required CPU cores.
     * @param float $RequestMemory Minimum required memory capacity (MB).
     * @param float $LimitMemory Maximum required memory capacity (MB).
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
        if (array_key_exists("RequestCpu",$param) and $param["RequestCpu"] !== null) {
            $this->RequestCpu = $param["RequestCpu"];
        }

        if (array_key_exists("LimitCpu",$param) and $param["LimitCpu"] !== null) {
            $this->LimitCpu = $param["LimitCpu"];
        }

        if (array_key_exists("RequestMemory",$param) and $param["RequestMemory"] !== null) {
            $this->RequestMemory = $param["RequestMemory"];
        }

        if (array_key_exists("LimitMemory",$param) and $param["LimitMemory"] !== null) {
            $this->LimitMemory = $param["LimitMemory"];
        }
    }
}
