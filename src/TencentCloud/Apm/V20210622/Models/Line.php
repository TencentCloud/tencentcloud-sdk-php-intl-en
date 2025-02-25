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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Metric curve data.
 *
 * @method string getMetricName() Obtain Metric name.
 * @method void setMetricName(string $MetricName) Set Metric name.
 * @method string getMetricNameCN() Obtain Metric chinese name.
 * @method void setMetricNameCN(string $MetricNameCN) Set Metric chinese name.
 * @method array getTimeSerial() Obtain Time series.
 * @method void setTimeSerial(array $TimeSerial) Set Time series.
 * @method array getDataSerial() Obtain Data sequence.
 * @method void setDataSerial(array $DataSerial) Set Data sequence.
 * @method array getTags() Obtain Dimension list.
 * @method void setTags(array $Tags) Set Dimension list.
 */
class Line extends AbstractModel
{
    /**
     * @var string Metric name.
     */
    public $MetricName;

    /**
     * @var string Metric chinese name.
     */
    public $MetricNameCN;

    /**
     * @var array Time series.
     */
    public $TimeSerial;

    /**
     * @var array Data sequence.
     */
    public $DataSerial;

    /**
     * @var array Dimension list.
     */
    public $Tags;

    /**
     * @param string $MetricName Metric name.
     * @param string $MetricNameCN Metric chinese name.
     * @param array $TimeSerial Time series.
     * @param array $DataSerial Data sequence.
     * @param array $Tags Dimension list.
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

        if (array_key_exists("MetricNameCN",$param) and $param["MetricNameCN"] !== null) {
            $this->MetricNameCN = $param["MetricNameCN"];
        }

        if (array_key_exists("TimeSerial",$param) and $param["TimeSerial"] !== null) {
            $this->TimeSerial = $param["TimeSerial"];
        }

        if (array_key_exists("DataSerial",$param) and $param["DataSerial"] !== null) {
            $this->DataSerial = $param["DataSerial"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ApmTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
