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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Metric provided by PTS with labels and values.
 *
 * @method string getMetricName() Obtain Metric name.
 * @method void setMetricName(string $MetricName) Set Metric name.
 * @method array getLabelValuesSet() Obtain Labels and values.
 * @method void setLabelValuesSet(array $LabelValuesSet) Set Labels and values.
 */
class MetricLabelWithValues extends AbstractModel
{
    /**
     * @var string Metric name.
     */
    public $MetricName;

    /**
     * @var array Labels and values.
     */
    public $LabelValuesSet;

    /**
     * @param string $MetricName Metric name.
     * @param array $LabelValuesSet Labels and values.
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
        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("LabelValuesSet",$param) and $param["LabelValuesSet"] !== null) {
            $this->LabelValuesSet = [];
            foreach ($param["LabelValuesSet"] as $key => $value){
                $obj = new LabelWithValues();
                $obj->deserialize($value);
                array_push($this->LabelValuesSet, $obj);
            }
        }
    }
}
