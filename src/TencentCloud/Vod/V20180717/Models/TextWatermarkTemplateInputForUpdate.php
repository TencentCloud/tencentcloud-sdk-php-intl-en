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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getFontType() Obtain 
 * @method void setFontType(string $FontType) Set 
 * @method string getFontSize() Obtain 
 * @method void setFontSize(string $FontSize) Set 
 * @method string getFontColor() Obtain 
 * @method void setFontColor(string $FontColor) Set 
 * @method float getFontAlpha() Obtain 
 * @method void setFontAlpha(float $FontAlpha) Set 
 */
class TextWatermarkTemplateInputForUpdate extends AbstractModel
{
    /**
     * @var string 
     */
    public $FontType;

    /**
     * @var string 
     */
    public $FontSize;

    /**
     * @var string 
     */
    public $FontColor;

    /**
     * @var float 
     */
    public $FontAlpha;

    /**
     * @param string $FontType 
     * @param string $FontSize 
     * @param string $FontColor 
     * @param float $FontAlpha 
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
        if (array_key_exists("FontType",$param) and $param["FontType"] !== null) {
            $this->FontType = $param["FontType"];
        }

        if (array_key_exists("FontSize",$param) and $param["FontSize"] !== null) {
            $this->FontSize = $param["FontSize"];
        }

        if (array_key_exists("FontColor",$param) and $param["FontColor"] !== null) {
            $this->FontColor = $param["FontColor"];
        }

        if (array_key_exists("FontAlpha",$param) and $param["FontAlpha"] !== null) {
            $this->FontAlpha = $param["FontAlpha"];
        }
    }
}
