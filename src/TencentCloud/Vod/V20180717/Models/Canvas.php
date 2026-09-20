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
 * Canvas information. In video production, if the source material (video or image) cannot fill the output video window, the set canvas is used to draw the background.
 *
 * @method string getColor() Obtain Background color. Valid values:
<li>Black: black background</li>
<li>White: white background</li>
Default value: Black.
 * @method void setColor(string $Color) Set Background color. Valid values:
<li>Black: black background</li>
<li>White: white background</li>
Default value: Black.
 * @method integer getWidth() Obtain Canvas width, i.e., the width of the output video. Value range: 0-3840. Unit: px.
Default value: 0, which means the video width is the same as that of the first video clip on the first video track.
 * @method void setWidth(integer $Width) Set Canvas width, i.e., the width of the output video. Value range: 0-3840. Unit: px.
Default value: 0, which means the video width is the same as that of the first video clip on the first video track.
 * @method integer getHeight() Obtain Canvas height, i.e. the height (or long side) of the output video. Value range: 0–3840. Unit: px.
Default value: 0, which means the video height is the same as that of the first video clip on the first video track.
 * @method void setHeight(integer $Height) Set Canvas height, i.e. the height (or long side) of the output video. Value range: 0–3840. Unit: px.
Default value: 0, which means the video height is the same as that of the first video clip on the first video track.
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
     * @var integer Canvas width, i.e., the width of the output video. Value range: 0-3840. Unit: px.
Default value: 0, which means the video width is the same as that of the first video clip on the first video track.
     */
    public $Width;

    /**
     * @var integer Canvas height, i.e. the height (or long side) of the output video. Value range: 0–3840. Unit: px.
Default value: 0, which means the video height is the same as that of the first video clip on the first video track.
     */
    public $Height;

    /**
     * @param string $Color Background color. Valid values:
<li>Black: black background</li>
<li>White: white background</li>
Default value: Black.
     * @param integer $Width Canvas width, i.e., the width of the output video. Value range: 0-3840. Unit: px.
Default value: 0, which means the video width is the same as that of the first video clip on the first video track.
     * @param integer $Height Canvas height, i.e. the height (or long side) of the output video. Value range: 0–3840. Unit: px.
Default value: 0, which means the video height is the same as that of the first video clip on the first video track.
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
