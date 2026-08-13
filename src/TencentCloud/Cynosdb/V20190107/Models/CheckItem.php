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
 * @method void setItem(string $Item) Set Check item name
 * @method string getResult() Obtain Verification result of this item
 * @method void setResult(string $Result) Set Verification result of this item
 * @method string getCurrentValue() Obtain Details of validation failed and modification suggestions
 * @method void setCurrentValue(string $CurrentValue) Set Details of validation failed and modification suggestions
 * @method string getExpectedValue() Obtain Detailed explanation of validation failure and modification suggestions
 * @method void setExpectedValue(string $ExpectedValue) Set Detailed explanation of validation failure and modification suggestions
 */
class CheckItem extends AbstractModel
{
    /**
     * @var string Check item name
     */
    public $Item;

    /**
     * @var string Verification result of this item
     */
    public $Result;

    /**
     * @var string Details of validation failed and modification suggestions
     */
    public $CurrentValue;

    /**
     * @var string Detailed explanation of validation failure and modification suggestions
     */
    public $ExpectedValue;

    /**
     * @param string $Item Check item name
     * @param string $Result Verification result of this item
     * @param string $CurrentValue Details of validation failed and modification suggestions
     * @param string $ExpectedValue Detailed explanation of validation failure and modification suggestions
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
