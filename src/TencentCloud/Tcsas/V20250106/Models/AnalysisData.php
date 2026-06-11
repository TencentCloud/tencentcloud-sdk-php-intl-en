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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data analysis API response value object. key is the data time, and number is the data value.
 *
 * @method string getDataTime() Obtain <p>Data time.</p>
 * @method void setDataTime(string $DataTime) Set <p>Data time.</p>
 * @method string getNumber() Obtain <p>Data value.</p>
 * @method void setNumber(string $Number) Set <p>Data value.</p>
 */
class AnalysisData extends AbstractModel
{
    /**
     * @var string <p>Data time.</p>
     */
    public $DataTime;

    /**
     * @var string <p>Data value.</p>
     */
    public $Number;

    /**
     * @param string $DataTime <p>Data time.</p>
     * @param string $Number <p>Data value.</p>
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
        if (array_key_exists("DataTime",$param) and $param["DataTime"] !== null) {
            $this->DataTime = $param["DataTime"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }
    }
}
