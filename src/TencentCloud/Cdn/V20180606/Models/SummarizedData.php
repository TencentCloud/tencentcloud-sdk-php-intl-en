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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Aggregated value, which is aggregated from all data of each metric. Aggregation methods are used depending on the metric attributes.
 *
 * @method string getName() Obtain Aggregation method, which can be:
`sum`: Aggregate summation
`max`: Maximum value. In bandwidth mode, the peak bandwidth is calculated based on the data aggregated in 5 minutes.
`avg`: Average value
 * @method void setName(string $Name) Set Aggregation method, which can be:
`sum`: Aggregate summation
`max`: Maximum value. In bandwidth mode, the peak bandwidth is calculated based on the data aggregated in 5 minutes.
`avg`: Average value
 * @method float getValue() Obtain Aggregated value
 * @method void setValue(float $Value) Set Aggregated value
 */
class SummarizedData extends AbstractModel
{
    /**
     * @var string Aggregation method, which can be:
`sum`: Aggregate summation
`max`: Maximum value. In bandwidth mode, the peak bandwidth is calculated based on the data aggregated in 5 minutes.
`avg`: Average value
     */
    public $Name;

    /**
     * @var float Aggregated value
     */
    public $Value;

    /**
     * @param string $Name Aggregation method, which can be:
`sum`: Aggregate summation
`max`: Maximum value. In bandwidth mode, the peak bandwidth is calculated based on the data aggregated in 5 minutes.
`avg`: Average value
     * @param float $Value Aggregated value
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
