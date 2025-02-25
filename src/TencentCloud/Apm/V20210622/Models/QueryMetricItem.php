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
 * Querying.
 *
 * @method string getMetricName() Obtain Metric name.
 * @method void setMetricName(string $MetricName) Set Metric name.
 * @method array getCompares() Obtain Year-Over-Year comparison is now supported for comparebyyesterday (compared to yesterday) and comparebylastweek (compared to last week). 
 * @method void setCompares(array $Compares) Set Year-Over-Year comparison is now supported for comparebyyesterday (compared to yesterday) and comparebylastweek (compared to last week). 
 * @method string getCompare() Obtain Year-On-Year, deprecated, not recommended for use.
 * @method void setCompare(string $Compare) Set Year-On-Year, deprecated, not recommended for use.
 */
class QueryMetricItem extends AbstractModel
{
    /**
     * @var string Metric name.
     */
    public $MetricName;

    /**
     * @var array Year-Over-Year comparison is now supported for comparebyyesterday (compared to yesterday) and comparebylastweek (compared to last week). 
     */
    public $Compares;

    /**
     * @var string Year-On-Year, deprecated, not recommended for use.
     */
    public $Compare;

    /**
     * @param string $MetricName Metric name.
     * @param array $Compares Year-Over-Year comparison is now supported for comparebyyesterday (compared to yesterday) and comparebylastweek (compared to last week). 
     * @param string $Compare Year-On-Year, deprecated, not recommended for use.
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

        if (array_key_exists("Compares",$param) and $param["Compares"] !== null) {
            $this->Compares = $param["Compares"];
        }

        if (array_key_exists("Compare",$param) and $param["Compare"] !== null) {
            $this->Compare = $param["Compare"];
        }
    }
}
