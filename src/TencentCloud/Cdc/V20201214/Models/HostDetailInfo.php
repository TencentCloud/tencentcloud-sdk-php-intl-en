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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getHostTypeFamily() Obtain 
 * @method void setHostTypeFamily(string $HostTypeFamily) Set 
 * @method float getCpuTotal() Obtain 
 * @method void setCpuTotal(float $CpuTotal) Set 
 * @method float getCpuAvailable() Obtain 
 * @method void setCpuAvailable(float $CpuAvailable) Set 
 * @method float getMemTotal() Obtain 
 * @method void setMemTotal(float $MemTotal) Set 
 * @method float getMemAvailable() Obtain 
 * @method void setMemAvailable(float $MemAvailable) Set 
 */
class HostDetailInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $HostTypeFamily;

    /**
     * @var float 
     */
    public $CpuTotal;

    /**
     * @var float 
     */
    public $CpuAvailable;

    /**
     * @var float 
     */
    public $MemTotal;

    /**
     * @var float 
     */
    public $MemAvailable;

    /**
     * @param string $HostTypeFamily 
     * @param float $CpuTotal 
     * @param float $CpuAvailable 
     * @param float $MemTotal 
     * @param float $MemAvailable 
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
