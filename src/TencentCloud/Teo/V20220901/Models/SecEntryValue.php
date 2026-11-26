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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Security data dimension value information
 *
 * @method string getMetric() Obtain Metric name.
 * @method void setMetric(string $Metric) Set Metric name.
 * @method array getDetail() Obtain Details of time series data.
 * @method void setDetail(array $Detail) Set Details of time series data.
 * @method integer getMax() Obtain Maximum value.
 * @method void setMax(integer $Max) Set Maximum value.
 * @method float getAvg() Obtain Mean.
 * @method void setAvg(float $Avg) Set Mean.
 * @method float getSum() Obtain Total data.
 * @method void setSum(float $Sum) Set Total data.
 */
class SecEntryValue extends AbstractModel
{
    /**
     * @var string Metric name.
     */
    public $Metric;

    /**
     * @var array Details of time series data.
     */
    public $Detail;

    /**
     * @var integer Maximum value.
     */
    public $Max;

    /**
     * @var float Mean.
     */
    public $Avg;

    /**
     * @var float Total data.
     */
    public $Sum;

    /**
     * @param string $Metric Metric name.
     * @param array $Detail Details of time series data.
     * @param integer $Max Maximum value.
     * @param float $Avg Mean.
     * @param float $Sum Total data.
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
