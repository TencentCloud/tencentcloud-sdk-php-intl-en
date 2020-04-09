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
 *  CPU load
 *
 * @method array getRate() Obtain Average instance CPU utilization
 * @method void setRate(array $Rate) Set Average instance CPU utilization
 * @method array getLoad() Obtain CPU monitoring data of the instance
 * @method void setLoad(array $Load) Set CPU monitoring data of the instance
 */
class DeviceCpuInfo extends AbstractModel
{
    /**
     * @var array Average instance CPU utilization
     */
    public $Rate;

    /**
     * @var array CPU monitoring data of the instance
     */
    public $Load;

    /**
     * @param array $Rate Average instance CPU utilization
     * @param array $Load CPU monitoring data of the instance
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
        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = [];
            foreach ($param["Rate"] as $key => $value){
                $obj = new DeviceCpuRateInfo();
                $obj->deserialize($value);
                array_push($this->Rate, $obj);
            }
        }

        if (array_key_exists("Load",$param) and $param["Load"] !== null) {
            $this->Load = $param["Load"];
        }
    }
}
