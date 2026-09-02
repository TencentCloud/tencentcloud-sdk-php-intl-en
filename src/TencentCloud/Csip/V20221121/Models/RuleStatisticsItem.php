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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Statistical information of rules
 *
 * @method string getText() Obtain <p>Name.</p>
 * @method void setText(string $Text) Set <p>Name.</p>
 * @method string getValue() Obtain <p>Value.</p>
 * @method void setValue(string $Value) Set <p>Value.</p>
 * @method string getCount() Obtain <p>Statistical information</p>
 * @method void setCount(string $Count) Set <p>Statistical information</p>
 */
class RuleStatisticsItem extends AbstractModel
{
    /**
     * @var string <p>Name.</p>
     */
    public $Text;

    /**
     * @var string <p>Value.</p>
     */
    public $Value;

    /**
     * @var string <p>Statistical information</p>
     */
    public $Count;

    /**
     * @param string $Text <p>Name.</p>
     * @param string $Value <p>Value.</p>
     * @param string $Count <p>Statistical information</p>
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
