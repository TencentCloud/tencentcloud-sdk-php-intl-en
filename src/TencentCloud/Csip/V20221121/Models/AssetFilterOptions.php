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
 * Asset filter options
 *
 * @method string getText() Obtain <p>Display value.</p>
 * @method void setText(string $Text) Set <p>Display value.</p>
 * @method string getValue() Obtain <p>Actual value.</p>
 * @method void setValue(string $Value) Set <p>Actual value.</p>
 * @method string getStyle() Obtain <p>Style</p>
 * @method void setStyle(string $Style) Set <p>Style</p>
 */
class AssetFilterOptions extends AbstractModel
{
    /**
     * @var string <p>Display value.</p>
     */
    public $Text;

    /**
     * @var string <p>Actual value.</p>
     */
    public $Value;

    /**
     * @var string <p>Style</p>
     */
    public $Style;

    /**
     * @param string $Text <p>Display value.</p>
     * @param string $Value <p>Actual value.</p>
     * @param string $Style <p>Style</p>
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

        if (array_key_exists("Style",$param) and $param["Style"] !== null) {
            $this->Style = $param["Style"];
        }
    }
}
