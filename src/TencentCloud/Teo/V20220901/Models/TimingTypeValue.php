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
 * Detailed data of time series type
 *
 * @method integer getSum() Obtain Data and.
 * @method void setSum(integer $Sum) Set Data and.
 * @method integer getMax() Obtain Maximum value.
 * @method void setMax(integer $Max) Set Maximum value.
 * @method integer getAvg() Obtain Mean.
 * @method void setAvg(integer $Avg) Set Mean.
 * @method string getMetricName() Obtain Metric name.
 * @method void setMetricName(string $MetricName) Set Metric name.
 * @method array getDetail() Obtain Details.
 * @method void setDetail(array $Detail) Set Details.
 */
class TimingTypeValue extends AbstractModel
{
    /**
     * @var integer Data and.
     */
    public $Sum;

    /**
     * @var integer Maximum value.
     */
    public $Max;

    /**
     * @var integer Mean.
     */
    public $Avg;

    /**
     * @var string Metric name.
     */
    public $MetricName;

    /**
     * @var array Details.
     */
    public $Detail;

    /**
     * @param integer $Sum Data and.
     * @param integer $Max Maximum value.
     * @param integer $Avg Mean.
     * @param string $MetricName Metric name.
     * @param array $Detail Details.
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
        if (array_key_exists("Sum",$param) and $param["Sum"] !== null) {
            $this->Sum = $param["Sum"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }

        if (array_key_exists("Avg",$param) and $param["Avg"] !== null) {
            $this->Avg = $param["Avg"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = [];
            foreach ($param["Detail"] as $key => $value){
                $obj = new TimingDataItem();
                $obj->deserialize($value);
                array_push($this->Detail, $obj);
            }
        }
    }
}
