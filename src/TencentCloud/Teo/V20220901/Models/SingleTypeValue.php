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
 * The dimensional data
 *
 * @method string getMetricName() Obtain The metric name.
 * @method void setMetricName(string $MetricName) Set The metric name.
 * @method integer getDetailData() Obtain The metric value.
 * @method void setDetailData(integer $DetailData) Set The metric value.
 */
class SingleTypeValue extends AbstractModel
{
    /**
     * @var string The metric name.
     */
    public $MetricName;

    /**
     * @var integer The metric value.
     */
    public $DetailData;

    /**
     * @param string $MetricName The metric name.
     * @param integer $DetailData The metric value.
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

        if (array_key_exists("DetailData",$param) and $param["DetailData"] !== null) {
            $this->DetailData = $param["DetailData"];
        }
    }
}
