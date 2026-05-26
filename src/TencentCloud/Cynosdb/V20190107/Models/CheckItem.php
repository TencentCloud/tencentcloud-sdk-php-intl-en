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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Check item
 *
 * @method string getItem() Obtain Check item name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setItem(string $Item) Set Check item name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getResult() Obtain Verification result of this item
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResult(string $Result) Set Verification result of this item
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCurrentValue() Obtain Detailed explanation of validation failure and modification suggestions
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCurrentValue(string $CurrentValue) Set Detailed explanation of validation failure and modification suggestions
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpectedValue() Obtain Details of validation failure and modification suggestions
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpectedValue(string $ExpectedValue) Set Details of validation failure and modification suggestions
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CheckItem extends AbstractModel
{
    /**
     * @var string Check item name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Item;

    /**
     * @var string Verification result of this item
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Result;

    /**
     * @var string Detailed explanation of validation failure and modification suggestions
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CurrentValue;

    /**
     * @var string Details of validation failure and modification suggestions
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpectedValue;

    /**
     * @param string $Item Check item name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Result Verification result of this item
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CurrentValue Detailed explanation of validation failure and modification suggestions
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpectedValue Details of validation failure and modification suggestions
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
        if (array_key_exists("Item",$param) and $param["Item"] !== null) {
            $this->Item = $param["Item"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("CurrentValue",$param) and $param["CurrentValue"] !== null) {
            $this->CurrentValue = $param["CurrentValue"];
        }

        if (array_key_exists("ExpectedValue",$param) and $param["ExpectedValue"] !== null) {
            $this->ExpectedValue = $param["ExpectedValue"];
        }
    }
}
