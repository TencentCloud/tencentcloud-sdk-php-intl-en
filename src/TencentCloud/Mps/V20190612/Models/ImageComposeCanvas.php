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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Canvas parameter of the layer fusion feature for image processing
 *
 * @method integer getWidth() Obtain <p>Canvas width, value ranges from 1 to 10240. Set both this and Height at the same time.</p>
 * @method void setWidth(integer $Width) Set <p>Canvas width, value ranges from 1 to 10240. Set both this and Height at the same time.</p>
 * @method integer getHeight() Obtain <p>Canvas height, in the range of [1, 10240]. Set it simultaneously with Width.</p>
 * @method void setHeight(integer $Height) Set <p>Canvas height, in the range of [1, 10240]. Set it simultaneously with Width.</p>
 * @method string getBackground() Obtain <p>Canvas background color, unified as an 8-digit hexadecimal #RRGGBBAA (including alpha), used as the canvas background color. Default #00000000 (fully transparent). Example: #FFFFFFFF opaque white, #FFFFFF80 semi-transparent white.</p><p>When the output format does not support transparent channel (such as JPEG), transparent areas are collapsed according to the RGB of this background color. The default value will get a black background. If a white background is required, explicitly pass #FFFFFFFF.</p>
 * @method void setBackground(string $Background) Set <p>Canvas background color, unified as an 8-digit hexadecimal #RRGGBBAA (including alpha), used as the canvas background color. Default #00000000 (fully transparent). Example: #FFFFFFFF opaque white, #FFFFFF80 semi-transparent white.</p><p>When the output format does not support transparent channel (such as JPEG), transparent areas are collapsed according to the RGB of this background color. The default value will get a black background. If a white background is required, explicitly pass #FFFFFFFF.</p>
 */
class ImageComposeCanvas extends AbstractModel
{
    /**
     * @var integer <p>Canvas width, value ranges from 1 to 10240. Set both this and Height at the same time.</p>
     */
    public $Width;

    /**
     * @var integer <p>Canvas height, in the range of [1, 10240]. Set it simultaneously with Width.</p>
     */
    public $Height;

    /**
     * @var string <p>Canvas background color, unified as an 8-digit hexadecimal #RRGGBBAA (including alpha), used as the canvas background color. Default #00000000 (fully transparent). Example: #FFFFFFFF opaque white, #FFFFFF80 semi-transparent white.</p><p>When the output format does not support transparent channel (such as JPEG), transparent areas are collapsed according to the RGB of this background color. The default value will get a black background. If a white background is required, explicitly pass #FFFFFFFF.</p>
     */
    public $Background;

    /**
     * @param integer $Width <p>Canvas width, value ranges from 1 to 10240. Set both this and Height at the same time.</p>
     * @param integer $Height <p>Canvas height, in the range of [1, 10240]. Set it simultaneously with Width.</p>
     * @param string $Background <p>Canvas background color, unified as an 8-digit hexadecimal #RRGGBBAA (including alpha), used as the canvas background color. Default #00000000 (fully transparent). Example: #FFFFFFFF opaque white, #FFFFFF80 semi-transparent white.</p><p>When the output format does not support transparent channel (such as JPEG), transparent areas are collapsed according to the RGB of this background color. The default value will get a black background. If a white background is required, explicitly pass #FFFFFFFF.</p>
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
        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Background",$param) and $param["Background"] !== null) {
            $this->Background = $param["Background"];
        }
    }
}
