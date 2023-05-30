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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Detailed metric data with different tags in billable usage data.
 *
 * @method string getTagName() Obtain Usage metric.
 * @method void setTagName(string $TagName) Set Usage metric.
 * @method float getWeight() Obtain Usage weight.
 * @method void setWeight(float $Weight) Set Usage weight.
 * @method float getValue() Obtain Usage value.
 * @method void setValue(float $Value) Set Usage value.
 */
class Detail extends AbstractModel
{
    /**
     * @var string Usage metric.
     */
    public $TagName;

    /**
     * @var float Usage weight.
     */
    public $Weight;

    /**
     * @var float Usage value.
     */
    public $Value;

    /**
     * @param string $TagName Usage metric.
     * @param float $Weight Usage weight.
     * @param float $Value Usage value.
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
        if (array_key_exists("TagName",$param) and $param["TagName"] !== null) {
            $this->TagName = $param["TagName"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
