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
 * Asset filter configurator
 *
 * @method string getAttr() Obtain <p>Query attributes</p>
 * @method void setAttr(string $Attr) Set <p>Query attributes</p>
 * @method string getLabel() Obtain <p>Show</p>
 * @method void setLabel(string $Label) Set <p>Show</p>
 * @method string getStyle() Obtain <p>Style</p>
 * @method void setStyle(string $Style) Set <p>Style</p>
 * @method string getValue() Obtain <p>Value.</p>
 * @method void setValue(string $Value) Set <p>Value.</p>
 * @method string getLabelEn() Obtain <p>Show in English</p>
 * @method void setLabelEn(string $LabelEn) Set <p>Show in English</p>
 * @method array getOptions() Obtain <p>Asset private field filter</p>
 * @method void setOptions(array $Options) Set <p>Asset private field filter</p>
 */
class AssetFilterConfig extends AbstractModel
{
    /**
     * @var string <p>Query attributes</p>
     */
    public $Attr;

    /**
     * @var string <p>Show</p>
     */
    public $Label;

    /**
     * @var string <p>Style</p>
     */
    public $Style;

    /**
     * @var string <p>Value.</p>
     */
    public $Value;

    /**
     * @var string <p>Show in English</p>
     */
    public $LabelEn;

    /**
     * @var array <p>Asset private field filter</p>
     */
    public $Options;

    /**
     * @param string $Attr <p>Query attributes</p>
     * @param string $Label <p>Show</p>
     * @param string $Style <p>Style</p>
     * @param string $Value <p>Value.</p>
     * @param string $LabelEn <p>Show in English</p>
     * @param array $Options <p>Asset private field filter</p>
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
        if (array_key_exists("Attr",$param) and $param["Attr"] !== null) {
            $this->Attr = $param["Attr"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Style",$param) and $param["Style"] !== null) {
            $this->Style = $param["Style"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("LabelEn",$param) and $param["LabelEn"] !== null) {
            $this->LabelEn = $param["LabelEn"];
        }

        if (array_key_exists("Options",$param) and $param["Options"] !== null) {
            $this->Options = [];
            foreach ($param["Options"] as $key => $value){
                $obj = new AssetFilterOptions();
                $obj->deserialize($value);
                array_push($this->Options, $obj);
            }
        }
    }
}
