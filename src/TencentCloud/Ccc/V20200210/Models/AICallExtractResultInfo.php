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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Specific information of AI call result.
 *
 * @method string getText() Obtain The extracted type is text.
 * @method void setText(string $Text) Set The extracted type is text.
 * @method array getChosen() Obtain The extracted type is option.
 * @method void setChosen(array $Chosen) Set The extracted type is option.
 * @method boolean getBoolean() Obtain The extracted type is a boolean value.
 * @method void setBoolean(boolean $Boolean) Set The extracted type is a boolean value.
 * @method float getNumber() Obtain The extracted type is a number.
 * @method void setNumber(float $Number) Set The extracted type is a number.
 */
class AICallExtractResultInfo extends AbstractModel
{
    /**
     * @var string The extracted type is text.
     */
    public $Text;

    /**
     * @var array The extracted type is option.
     */
    public $Chosen;

    /**
     * @var boolean The extracted type is a boolean value.
     */
    public $Boolean;

    /**
     * @var float The extracted type is a number.
     */
    public $Number;

    /**
     * @param string $Text The extracted type is text.
     * @param array $Chosen The extracted type is option.
     * @param boolean $Boolean The extracted type is a boolean value.
     * @param float $Number The extracted type is a number.
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

        if (array_key_exists("Chosen",$param) and $param["Chosen"] !== null) {
            $this->Chosen = $param["Chosen"];
        }

        if (array_key_exists("Boolean",$param) and $param["Boolean"] !== null) {
            $this->Boolean = $param["Boolean"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }
    }
}
