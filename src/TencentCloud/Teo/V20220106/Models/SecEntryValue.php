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
 * Corresponding value of security data entry
 *
 * @method string getMetric() Obtain Metric name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMetric(string $Metric) Set Metric name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDetail() Obtain Metric data details
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDetail(array $Detail) Set Metric data details
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMax() Obtain Maximum
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMax(integer $Max) Set Maximum
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getAvg() Obtain Average
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAvg(float $Avg) Set Average
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getSum() Obtain Sum
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSum(float $Sum) Set Sum
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SecEntryValue extends AbstractModel
{
    /**
     * @var string Metric name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Metric;

    /**
     * @var array Metric data details
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Detail;

    /**
     * @var integer Maximum
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Max;

    /**
     * @var float Average
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Avg;

    /**
     * @var float Sum
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Sum;

    /**
     * @param string $Metric Metric name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Detail Metric data details
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Max Maximum
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $Avg Average
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $Sum Sum
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
