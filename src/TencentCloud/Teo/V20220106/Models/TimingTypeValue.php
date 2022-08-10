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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Detailed data of time series type
 *
 * @method integer getSum() Obtain Sum
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSum(integer $Sum) Set Sum
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMax() Obtain Maximum
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMax(integer $Max) Set Maximum
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAvg() Obtain Average
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAvg(integer $Avg) Set Average
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMetricName() Obtain Metric name
 * @method void setMetricName(string $MetricName) Set Metric name
 * @method array getDetailData() Obtain This field will be disused soon. Use the `Detail` field instead.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDetailData(array $DetailData) Set This field will be disused soon. Use the `Detail` field instead.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDetail() Obtain Detailed data
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDetail(array $Detail) Set Detailed data
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TimingTypeValue extends AbstractModel
{
    /**
     * @var integer Sum
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Sum;

    /**
     * @var integer Maximum
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Max;

    /**
     * @var integer Average
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Avg;

    /**
     * @var string Metric name
     */
    public $MetricName;

    /**
     * @var array This field will be disused soon. Use the `Detail` field instead.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DetailData;

    /**
     * @var array Detailed data
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Detail;

    /**
     * @param integer $Sum Sum
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Max Maximum
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Avg Average
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MetricName Metric name
     * @param array $DetailData This field will be disused soon. Use the `Detail` field instead.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Detail Detailed data
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("DetailData",$param) and $param["DetailData"] !== null) {
            $this->DetailData = $param["DetailData"];
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
