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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Overview data.
 *
 * @method string getMetric() Obtain Metric name.
 * @method void setMetric(string $Metric) Set Metric name.
 * @method integer getFirst() Obtain First data timestamp.
 * @method void setFirst(integer $First) Set First data timestamp.
 * @method integer getLast() Obtain Last data timestamp.
 * @method void setLast(integer $Last) Set Last data timestamp.
 * @method integer getInterval() Obtain Sampling point time interval.
 * @method void setInterval(integer $Interval) Set Sampling point time interval.
 * @method array getDataPoints() Obtain Sampling point data.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataPoints(array $DataPoints) Set Sampling point data.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MetricTags getTags() Obtain Metric tags.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(MetricTags $Tags) Set Metric tags.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class OverviewMetricData extends AbstractModel
{
    /**
     * @var string Metric name.
     */
    public $Metric;

    /**
     * @var integer First data timestamp.
     */
    public $First;

    /**
     * @var integer Last data timestamp.
     */
    public $Last;

    /**
     * @var integer Sampling point time interval.
     */
    public $Interval;

    /**
     * @var array Sampling point data.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataPoints;

    /**
     * @var MetricTags Metric tags.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @param string $Metric Metric name.
     * @param integer $First First data timestamp.
     * @param integer $Last Last data timestamp.
     * @param integer $Interval Sampling point time interval.
     * @param array $DataPoints Sampling point data.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MetricTags $Tags Metric tags.
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

        if (array_key_exists("First",$param) and $param["First"] !== null) {
            $this->First = $param["First"];
        }

        if (array_key_exists("Last",$param) and $param["Last"] !== null) {
            $this->Last = $param["Last"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("DataPoints",$param) and $param["DataPoints"] !== null) {
            $this->DataPoints = $param["DataPoints"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = new MetricTags();
            $this->Tags->deserialize($param["Tags"]);
        }
    }
}
