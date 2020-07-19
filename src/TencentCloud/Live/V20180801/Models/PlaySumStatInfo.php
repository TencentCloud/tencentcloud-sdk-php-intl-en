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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Aggregated playback statistics.
 *
 * @method string getName() Obtain Domain name or stream ID.
 * @method void setName(string $Name) Set Domain name or stream ID.
 * @method float getAvgFluxPerSecond() Obtain Average download speed,
In MB/s.
Calculation formula: average download speed per minute.
 * @method void setAvgFluxPerSecond(float $AvgFluxPerSecond) Set Average download speed,
In MB/s.
Calculation formula: average download speed per minute.
 * @method float getTotalFlux() Obtain Total traffic in MB.
 * @method void setTotalFlux(float $TotalFlux) Set Total traffic in MB.
 * @method integer getTotalRequest() Obtain Total number of requests.
 * @method void setTotalRequest(integer $TotalRequest) Set Total number of requests.
 */
class PlaySumStatInfo extends AbstractModel
{
    /**
     * @var string Domain name or stream ID.
     */
    public $Name;

    /**
     * @var float Average download speed,
In MB/s.
Calculation formula: average download speed per minute.
     */
    public $AvgFluxPerSecond;

    /**
     * @var float Total traffic in MB.
     */
    public $TotalFlux;

    /**
     * @var integer Total number of requests.
     */
    public $TotalRequest;

    /**
     * @param string $Name Domain name or stream ID.
     * @param float $AvgFluxPerSecond Average download speed,
In MB/s.
Calculation formula: average download speed per minute.
     * @param float $TotalFlux Total traffic in MB.
     * @param integer $TotalRequest Total number of requests.
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

        if (array_key_exists("AvgFluxPerSecond",$param) and $param["AvgFluxPerSecond"] !== null) {
            $this->AvgFluxPerSecond = $param["AvgFluxPerSecond"];
        }

        if (array_key_exists("TotalFlux",$param) and $param["TotalFlux"] !== null) {
            $this->TotalFlux = $param["TotalFlux"];
        }

        if (array_key_exists("TotalRequest",$param) and $param["TotalRequest"] !== null) {
            $this->TotalRequest = $param["TotalRequest"];
        }
    }
}
