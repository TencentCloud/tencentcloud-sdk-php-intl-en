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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The security data queried by metric
 *
 * @method string getMetric() Obtain The metric name.
 * @method void setMetric(string $Metric) Set The metric name.
 * @method array getDetail() Obtain The time-series data details.
 * @method void setDetail(array $Detail) Set The time-series data details.
 * @method integer getMax() Obtain The maximum value.
 * @method void setMax(integer $Max) Set The maximum value.
 * @method float getAvg() Obtain The average value.
 * @method void setAvg(float $Avg) Set The average value.
 * @method float getSum() Obtain Sum
 * @method void setSum(float $Sum) Set Sum
 */
class SecEntryValue extends AbstractModel
{
    /**
     * @var string The metric name.
     */
    public $Metric;

    /**
     * @var array The time-series data details.
     */
    public $Detail;

    /**
     * @var integer The maximum value.
     */
    public $Max;

    /**
     * @var float The average value.
     */
    public $Avg;

    /**
     * @var float Sum
     */
    public $Sum;

    /**
     * @param string $Metric The metric name.
     * @param array $Detail The time-series data details.
     * @param integer $Max The maximum value.
     * @param float $Avg The average value.
     * @param float $Sum Sum
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
        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = [];
            foreach ($param["Detail"] as $key => $value){
                $obj = new TimingDataItem();
                $obj->deserialize($value);
                array_push($this->Detail, $obj);
            }
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }

        if (array_key_exists("Avg",$param) and $param["Avg"] !== null) {
            $this->Avg = $param["Avg"];
        }

        if (array_key_exists("Sum",$param) and $param["Sum"] !== null) {
            $this->Sum = $param["Sum"];
        }
    }
}
