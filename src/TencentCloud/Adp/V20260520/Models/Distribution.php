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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Reply type distribution item
 *
 * @method string getCallCount() Obtain <p>Count of calls for this reply method</p>
 * @method void setCallCount(string $CallCount) Set <p>Count of calls for this reply method</p>
 * @method float getPercentage() Obtain <p>Percentage of this reply method in the total number of calls (percentage, 0–100, rounded to two decimal places; all 0 when no data is available, and the sum of all items is 100 when there is data)</p>
 * @method void setPercentage(float $Percentage) Set <p>Percentage of this reply method in the total number of calls (percentage, 0–100, rounded to two decimal places; all 0 when no data is available, and the sum of all items is 100 when there is data)</p>
 * @method string getReplyName() Obtain <p>Reply method name (internationalized according to the request language; falls back to the Enumeration Name of reply_method when i18n is missing)</p>
 * @method void setReplyName(string $ReplyName) Set <p>Reply method name (internationalized according to the request language; falls back to the Enumeration Name of reply_method when i18n is missing)</p>
 */
class Distribution extends AbstractModel
{
    /**
     * @var string <p>Count of calls for this reply method</p>
     */
    public $CallCount;

    /**
     * @var float <p>Percentage of this reply method in the total number of calls (percentage, 0–100, rounded to two decimal places; all 0 when no data is available, and the sum of all items is 100 when there is data)</p>
     */
    public $Percentage;

    /**
     * @var string <p>Reply method name (internationalized according to the request language; falls back to the Enumeration Name of reply_method when i18n is missing)</p>
     */
    public $ReplyName;

    /**
     * @param string $CallCount <p>Count of calls for this reply method</p>
     * @param float $Percentage <p>Percentage of this reply method in the total number of calls (percentage, 0–100, rounded to two decimal places; all 0 when no data is available, and the sum of all items is 100 when there is data)</p>
     * @param string $ReplyName <p>Reply method name (internationalized according to the request language; falls back to the Enumeration Name of reply_method when i18n is missing)</p>
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
        if (array_key_exists("CallCount",$param) and $param["CallCount"] !== null) {
            $this->CallCount = $param["CallCount"];
        }

        if (array_key_exists("Percentage",$param) and $param["Percentage"] !== null) {
            $this->Percentage = $param["Percentage"];
        }

        if (array_key_exists("ReplyName",$param) and $param["ReplyName"] !== null) {
            $this->ReplyName = $param["ReplyName"];
        }
    }
}
