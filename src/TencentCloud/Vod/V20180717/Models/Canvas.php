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
 * Canvas information. When a video is composed, if the source material (video or image) cannot fill the output video window, the background will be drawn with the set canvas.
 *
 * @method string getColor() Obtain Background color. Valid values:
<li>Black: black background</li>
<li>White: white background</li>
Default value: Black.
 * @method void setColor(string $Color) Set Background color. Valid values:
<li>Black: black background</li>
<li>White: white background</li>
Default value: Black.
 * @method integer getWidth() Obtain Canvas width, that is, the width of the output video, value range: 0~3840, unit: px. 
Default value: 0, which means the video width is the same as the first video clip of the first video track.
 * @method void setWidth(integer $Width) Set Canvas width, that is, the width of the output video, value range: 0~3840, unit: px. 
Default value: 0, which means the video width is the same as the first video clip of the first video track.
 * @method integer getHeight() Obtain Canvas height, that is, the height (or long side) of the output video, value range: 0~3840, unit: px. 
Default value: 0, which means the video height is consistent with the first video clip of the first video track.
 * @method void setHeight(integer $Height) Set Canvas height, that is, the height (or long side) of the output video, value range: 0~3840, unit: px. 
Default value: 0, which means the video height is consistent with the first video clip of the first video track.
 */
class Canvas extends AbstractModel
{
    /**
     * @var string Background color. Valid values:
<li>Black: black background</li>
<li>White: white background</li>
Default value: Black.
     */
    public $Color;

    /**
     * @var integer Canvas width, that is, the width of the output video, value range: 0~3840, unit: px. 
Default value: 0, which means the video width is the same as the first video clip of the first video track.
     */
    public $Width;

    /**
     * @var integer Canvas height, that is, the height (or long side) of the output video, value range: 0~3840, unit: px. 
Default value: 0, which means the video height is consistent with the first video clip of the first video track.
     */
    public $Height;

    /**
     * @param string $Color Background color. Valid values:
<li>Black: black background</li>
<li>White: white background</li>
Default value: Black.
     * @param integer $Width Canvas width, that is, the width of the output video, value range: 0~3840, unit: px. 
Default value: 0, which means the video width is the same as the first video clip of the first video track.
     * @param integer $Height Canvas height, that is, the height (or long side) of the output video, value range: 0~3840, unit: px. 
Default value: 0, which means the video height is consistent with the first video clip of the first video track.
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
