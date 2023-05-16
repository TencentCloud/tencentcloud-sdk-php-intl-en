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
 * Bandwidth and traffic information.
 *
 * @method string getTime() Obtain Time point in the format of `yyyy-mm-dd HH:MM:SS`.
 * @method void setTime(string $Time) Set Time point in the format of `yyyy-mm-dd HH:MM:SS`.
 * @method float getBandwidth() Obtain Bandwidth in Mbps.
 * @method void setBandwidth(float $Bandwidth) Set Bandwidth in Mbps.
 * @method float getFlux() Obtain Traffic in MB.
 * @method void setFlux(float $Flux) Set Traffic in MB.
 * @method string getPeakTime() Obtain Time point of peak value in the format of `yyyy-mm-dd HH:MM:SS`. As raw data is at a 5-minute granularity, if data at a 1-hour or 1-day granularity is queried, the time point of peak bandwidth value at the corresponding granularity will be returned.
 * @method void setPeakTime(string $PeakTime) Set Time point of peak value in the format of `yyyy-mm-dd HH:MM:SS`. As raw data is at a 5-minute granularity, if data at a 1-hour or 1-day granularity is queried, the time point of peak bandwidth value at the corresponding granularity will be returned.
 */
class BillDataInfo extends AbstractModel
{
    /**
     * @var string Time point in the format of `yyyy-mm-dd HH:MM:SS`.
     */
    public $Time;

    /**
     * @var float Bandwidth in Mbps.
     */
    public $Bandwidth;

    /**
     * @var float Traffic in MB.
     */
    public $Flux;

    /**
     * @var string Time point of peak value in the format of `yyyy-mm-dd HH:MM:SS`. As raw data is at a 5-minute granularity, if data at a 1-hour or 1-day granularity is queried, the time point of peak bandwidth value at the corresponding granularity will be returned.
     */
    public $PeakTime;

    /**
     * @param string $Time Time point in the format of `yyyy-mm-dd HH:MM:SS`.
     * @param float $Bandwidth Bandwidth in Mbps.
     * @param float $Flux Traffic in MB.
     * @param string $PeakTime Time point of peak value in the format of `yyyy-mm-dd HH:MM:SS`. As raw data is at a 5-minute granularity, if data at a 1-hour or 1-day granularity is queried, the time point of peak bandwidth value at the corresponding granularity will be returned.
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

        if (array_key_exists("Flux",$param) and $param["Flux"] !== null) {
            $this->Flux = $param["Flux"];
        }

        if (array_key_exists("PeakTime",$param) and $param["PeakTime"] !== null) {
            $this->PeakTime = $param["PeakTime"];
        }
    }
}
