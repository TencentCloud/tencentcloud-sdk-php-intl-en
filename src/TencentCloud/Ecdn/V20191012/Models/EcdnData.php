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
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Detailed access data type
 *
 * @method array getMetrics() Obtain Queries the specified metric. Valid values: Bandwidth, Flux, Request, Delay, status code, LogBandwidth, LogFlux, LogRequest
 * @method void setMetrics(array $Metrics) Set Queries the specified metric. Valid values: Bandwidth, Flux, Request, Delay, status code, LogBandwidth, LogFlux, LogRequest
 * @method array getDetailData() Obtain Detailed data collection
 * @method void setDetailData(array $DetailData) Set Detailed data collection
 */
class EcdnData extends AbstractModel
{
    /**
     * @var array Queries the specified metric. Valid values: Bandwidth, Flux, Request, Delay, status code, LogBandwidth, LogFlux, LogRequest
     */
    public $Metrics;

    /**
     * @var array Detailed data collection
     */
    public $DetailData;

    /**
     * @param array $Metrics Queries the specified metric. Valid values: Bandwidth, Flux, Request, Delay, status code, LogBandwidth, LogFlux, LogRequest
     * @param array $DetailData Detailed data collection
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
        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = $param["Metrics"];
        }

        if (array_key_exists("DetailData",$param) and $param["DetailData"] !== null) {
            $this->DetailData = [];
            foreach ($param["DetailData"] as $key => $value){
                $obj = new TimestampData();
                $obj->deserialize($value);
                array_push($this->DetailData, $obj);
            }
        }
    }
}
