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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Time series returned for the queried metric.
 *
 * @method integer getTime() Obtain Unix timestamp in seconds.
 * @method void setTime(integer $Time) Set Unix timestamp in seconds.
 * @method float getValue() Obtain Current value of the queried metric.
 * @method void setValue(float $Value) Set Current value of the queried metric.
 */
class TimeValue extends AbstractModel
{
    /**
     * @var integer Unix timestamp in seconds.
     */
    public $Time;

    /**
     * @var float Current value of the queried metric.
     */
    public $Value;

    /**
     * @param integer $Time Unix timestamp in seconds.
     * @param float $Value Current value of the queried metric.
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
