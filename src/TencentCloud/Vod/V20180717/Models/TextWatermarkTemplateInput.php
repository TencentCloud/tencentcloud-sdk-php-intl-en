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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Text watermarking template
 *
 * @method string getFontType() Obtain Font type. Currently, two types are supported:
<li>simkai.ttf: both Chinese and English are supported;</li>
<li>arial.ttf: only English is supported.</li>
 * @method void setFontType(string $FontType) Set Font type. Currently, two types are supported:
<li>simkai.ttf: both Chinese and English are supported;</li>
<li>arial.ttf: only English is supported.</li>
 * @method string getFontSize() Obtain Font size in Npx format where N is a numeric value.
 * @method void setFontSize(string $FontSize) Set Font size in Npx format where N is a numeric value.
 * @method string getFontColor() Obtain Font color in 0xRRGGBB format. Default value: 0xFFFFFF (white).
 * @method void setFontColor(string $FontColor) Set Font color in 0xRRGGBB format. Default value: 0xFFFFFF (white).
 * @method float getFontAlpha() Obtain Text transparency. Value range: (0, 1]
<li>0: completely transparent</li>
<li>1: completely opaque</li>
Default value: 1.
 * @method void setFontAlpha(float $FontAlpha) Set Text transparency. Value range: (0, 1]
<li>0: completely transparent</li>
<li>1: completely opaque</li>
Default value: 1.
 */
class TextWatermarkTemplateInput extends AbstractModel
{
    /**
     * @var string Font type. Currently, two types are supported:
<li>simkai.ttf: both Chinese and English are supported;</li>
<li>arial.ttf: only English is supported.</li>
     */
    public $FontType;

    /**
     * @var string Font size in Npx format where N is a numeric value.
     */
    public $FontSize;

    /**
     * @var string Font color in 0xRRGGBB format. Default value: 0xFFFFFF (white).
     */
    public $FontColor;

    /**
     * @var float Text transparency. Value range: (0, 1]
<li>0: completely transparent</li>
<li>1: completely opaque</li>
Default value: 1.
     */
    public $FontAlpha;

    /**
     * @param string $FontType Font type. Currently, two types are supported:
<li>simkai.ttf: both Chinese and English are supported;</li>
<li>arial.ttf: only English is supported.</li>
     * @param string $FontSize Font size in Npx format where N is a numeric value.
     * @param string $FontColor Font color in 0xRRGGBB format. Default value: 0xFFFFFF (white).
     * @param float $FontAlpha Text transparency. Value range: (0, 1]
<li>0: completely transparent</li>
<li>1: completely opaque</li>
Default value: 1.
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
