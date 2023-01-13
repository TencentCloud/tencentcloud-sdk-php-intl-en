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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Monitoring metric value in float type in a unit of time interval
 *
 * @method array getSeries() Obtain Monitoring metric.
 * @method void setSeries(array $Series) Set Monitoring metric.
 * @method array getTimestamp() Obtain Timestamp corresponding to monitoring metric.
 * @method void setTimestamp(array $Timestamp) Set Timestamp corresponding to monitoring metric.
 */
class MonitorFloatMetricSeriesData extends AbstractModel
{
    /**
     * @var array Monitoring metric.
     */
    public $Series;

    /**
     * @var array Timestamp corresponding to monitoring metric.
     */
    public $Timestamp;

    /**
     * @param array $Series Monitoring metric.
     * @param array $Timestamp Timestamp corresponding to monitoring metric.
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
        if (array_key_exists("Series",$param) and $param["Series"] !== null) {
            $this->Series = [];
            foreach ($param["Series"] as $key => $value){
                $obj = new MonitorFloatMetric();
                $obj->deserialize($value);
                array_push($this->Series, $obj);
            }
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }
    }
}
