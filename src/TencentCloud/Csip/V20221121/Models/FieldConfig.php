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
 * Asset detail field configuration
 *
 * @method string getLabel() Obtain <p>Field display</p>
 * @method void setLabel(string $Label) Set <p>Field display</p>
 * @method string getValue() Obtain <p>Field value</p>
 * @method void setValue(string $Value) Set <p>Field value</p>
 * @method FieldStyle getStyle() Obtain <p>Field style configuration</p>
 * @method void setStyle(FieldStyle $Style) Set <p>Field style configuration</p>
 * @method integer getValueCount() Obtain <p>Field content quantity.</p>
 * @method void setValueCount(integer $ValueCount) Set <p>Field content quantity.</p>
 */
class FieldConfig extends AbstractModel
{
    /**
     * @var string <p>Field display</p>
     */
    public $Label;

    /**
     * @var string <p>Field value</p>
     */
    public $Value;

    /**
     * @var FieldStyle <p>Field style configuration</p>
     */
    public $Style;

    /**
     * @var integer <p>Field content quantity.</p>
     */
    public $ValueCount;

    /**
     * @param string $Label <p>Field display</p>
     * @param string $Value <p>Field value</p>
     * @param FieldStyle $Style <p>Field style configuration</p>
     * @param integer $ValueCount <p>Field content quantity.</p>
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Style",$param) and $param["Style"] !== null) {
            $this->Style = new FieldStyle();
            $this->Style->deserialize($param["Style"]);
        }

        if (array_key_exists("ValueCount",$param) and $param["ValueCount"] !== null) {
            $this->ValueCount = $param["ValueCount"];
        }
    }
}
