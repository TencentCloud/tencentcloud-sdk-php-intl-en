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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Bandwidth information
 *
 * @method string getTime() Obtain Format of return value:
yyyy-mm-dd HH:MM:SS
The time accuracy matches with the query granularity.
 * @method void setTime(string $Time) Set Format of return value:
yyyy-mm-dd HH:MM:SS
The time accuracy matches with the query granularity.
 * @method float getBandwidth() Obtain Bandwidth.
 * @method void setBandwidth(float $Bandwidth) Set Bandwidth.
 */
class BandwidthInfo extends AbstractModel
{
    /**
     * @var string Format of return value:
yyyy-mm-dd HH:MM:SS
The time accuracy matches with the query granularity.
     */
    public $Time;

    /**
     * @var float Bandwidth.
     */
    public $Bandwidth;

    /**
     * @param string $Time Format of return value:
yyyy-mm-dd HH:MM:SS
The time accuracy matches with the query granularity.
     * @param float $Bandwidth Bandwidth.
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

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }
    }
}
