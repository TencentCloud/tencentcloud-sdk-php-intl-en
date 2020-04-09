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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Average instance CPU utilization
 *
 * @method integer getCpuCore() Obtain CPU core number
 * @method void setCpuCore(integer $CpuCore) Set CPU core number
 * @method array getRate() Obtain CPU utilization
 * @method void setRate(array $Rate) Set CPU utilization
 */
class DeviceCpuRateInfo extends AbstractModel
{
    /**
     * @var integer CPU core number
     */
    public $CpuCore;

    /**
     * @var array CPU utilization
     */
    public $Rate;

    /**
     * @param integer $CpuCore CPU core number
     * @param array $Rate CPU utilization
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
        if (array_key_exists("CpuCore",$param) and $param["CpuCore"] !== null) {
            $this->CpuCore = $param["CpuCore"];
        }

        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }
    }
}
