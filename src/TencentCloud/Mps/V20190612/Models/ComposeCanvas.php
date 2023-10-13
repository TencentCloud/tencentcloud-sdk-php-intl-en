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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The canvas information of a video editing/compositing task.
 *
 * @method string getColor() Obtain The RGB value of the background color. The format is #RRGGBB, such as `#F0F0F0`. 
Default value: `#000000` (black).
 * @method void setColor(string $Color) Set The RGB value of the background color. The format is #RRGGBB, such as `#F0F0F0`. 
Default value: `#000000` (black).
 * @method integer getWidth() Obtain The canvas width (px), which is the width of the output video. Value range: 0–3840.  
The default value is `0`, which means that the canvas is as wide as the first video.
 * @method void setWidth(integer $Width) Set The canvas width (px), which is the width of the output video. Value range: 0–3840.  
The default value is `0`, which means that the canvas is as wide as the first video.
 * @method integer getHeight() Obtain The canvas height (px), which is the height of the output video. Value range: 0–3840.  
The default value is `0`, which means that the canvas is as high as the first video.
 * @method void setHeight(integer $Height) Set The canvas height (px), which is the height of the output video. Value range: 0–3840.  
The default value is `0`, which means that the canvas is as high as the first video.
 */
class ComposeCanvas extends AbstractModel
{
    /**
     * @var string The RGB value of the background color. The format is #RRGGBB, such as `#F0F0F0`. 
Default value: `#000000` (black).
     */
    public $Color;

    /**
     * @var integer The canvas width (px), which is the width of the output video. Value range: 0–3840.  
The default value is `0`, which means that the canvas is as wide as the first video.
     */
    public $Width;

    /**
     * @var integer The canvas height (px), which is the height of the output video. Value range: 0–3840.  
The default value is `0`, which means that the canvas is as high as the first video.
     */
    public $Height;

    /**
     * @param string $Color The RGB value of the background color. The format is #RRGGBB, such as `#F0F0F0`. 
Default value: `#000000` (black).
     * @param integer $Width The canvas width (px), which is the width of the output video. Value range: 0–3840.  
The default value is `0`, which means that the canvas is as wide as the first video.
     * @param integer $Height The canvas height (px), which is the height of the output video. Value range: 0–3840.  
The default value is `0`, which means that the canvas is as high as the first video.
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
        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }
    }
}
