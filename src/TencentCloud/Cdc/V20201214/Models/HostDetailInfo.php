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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Host Machine Resource Overview Details
 *
 * @method string getHostTypeFamily() Obtain Type Family
 * @method void setHostTypeFamily(string $HostTypeFamily) Set Type Family
 * @method float getCpuTotal() Obtain Total CPU
 * @method void setCpuTotal(float $CpuTotal) Set Total CPU
 * @method float getCpuAvailable() Obtain Available CPU
 * @method void setCpuAvailable(float $CpuAvailable) Set Available CPU
 * @method float getMemTotal() Obtain Total Memory
 * @method void setMemTotal(float $MemTotal) Set Total Memory
 * @method float getMemAvailable() Obtain Available Memory
 * @method void setMemAvailable(float $MemAvailable) Set Available Memory
 */
class HostDetailInfo extends AbstractModel
{
    /**
     * @var string Type Family
     */
    public $HostTypeFamily;

    /**
     * @var float Total CPU
     */
    public $CpuTotal;

    /**
     * @var float Available CPU
     */
    public $CpuAvailable;

    /**
     * @var float Total Memory
     */
    public $MemTotal;

    /**
     * @var float Available Memory
     */
    public $MemAvailable;

    /**
     * @param string $HostTypeFamily Type Family
     * @param float $CpuTotal Total CPU
     * @param float $CpuAvailable Available CPU
     * @param float $MemTotal Total Memory
     * @param float $MemAvailable Available Memory
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
        if (array_key_exists("HostTypeFamily",$param) and $param["HostTypeFamily"] !== null) {
            $this->HostTypeFamily = $param["HostTypeFamily"];
        }

        if (array_key_exists("CpuTotal",$param) and $param["CpuTotal"] !== null) {
            $this->CpuTotal = $param["CpuTotal"];
        }

        if (array_key_exists("CpuAvailable",$param) and $param["CpuAvailable"] !== null) {
            $this->CpuAvailable = $param["CpuAvailable"];
        }

        if (array_key_exists("MemTotal",$param) and $param["MemTotal"] !== null) {
            $this->MemTotal = $param["MemTotal"];
        }

        if (array_key_exists("MemAvailable",$param) and $param["MemAvailable"] !== null) {
            $this->MemAvailable = $param["MemAvailable"];
        }
    }
}
