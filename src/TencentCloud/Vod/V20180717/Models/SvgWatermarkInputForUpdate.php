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
 * SVG watermark template input parameters.
 *
 * @method string getWidth() Obtain Width of a watermark, supporting six formats: px, %, W%, H%, S%, and L%.
<li>If a string ends with px, it means the watermark Width is in pixels. For example, 100px means the Width is 100 pixels. If 0px is entered and
When Height is not 0px, it means the width of the watermark is proportionally scaled based on the original SVG image. When both Width and Height are set to 0px, it means the width of the watermark is the width of the original SVG image.</li>
<li>If a string ends with W%, it indicates that the `Width` of a watermark is a percentage of a video's width. For example, `10W%` means that `Width` is 10% of a video's width.</li>
<li>If a string ends with H%, it indicates that the `Width` of a watermark is a percentage of a video's height. For example, `10H%` means that `Width` is 10% of a video's height.</li>
<li>If a string ends with S%, it indicates that the `Width` of a watermark is a percentage of a video's short side. For example, `10S%` means that `Width` is 10% of a video's short side.</li>
<li>If a string ends with L%, it indicates that the `Width` of a watermark is a percentage of the long side of the video. For example, `10L%` means that `Width` is 10% of the long side of the video.</li>
<li>When the string ends with %, it has the same meaning as W%.</li>
Default value: 10W%.
 * @method void setWidth(string $Width) Set Width of a watermark, supporting six formats: px, %, W%, H%, S%, and L%.
<li>If a string ends with px, it means the watermark Width is in pixels. For example, 100px means the Width is 100 pixels. If 0px is entered and
When Height is not 0px, it means the width of the watermark is proportionally scaled based on the original SVG image. When both Width and Height are set to 0px, it means the width of the watermark is the width of the original SVG image.</li>
<li>If a string ends with W%, it indicates that the `Width` of a watermark is a percentage of a video's width. For example, `10W%` means that `Width` is 10% of a video's width.</li>
<li>If a string ends with H%, it indicates that the `Width` of a watermark is a percentage of a video's height. For example, `10H%` means that `Width` is 10% of a video's height.</li>
<li>If a string ends with S%, it indicates that the `Width` of a watermark is a percentage of a video's short side. For example, `10S%` means that `Width` is 10% of a video's short side.</li>
<li>If a string ends with L%, it indicates that the `Width` of a watermark is a percentage of the long side of the video. For example, `10L%` means that `Width` is 10% of the long side of the video.</li>
<li>When the string ends with %, it has the same meaning as W%.</li>
Default value: 10W%.
 * @method string getHeight() Obtain Height of a watermark, supporting six formats: px, %, W%, H%, S%, and L%.
<li>If a string ends with px, the watermark Height is in pixels. For example, 100px means the Height is 100 pixels. If 0px is entered and
When Width is not 0px, it means the height of the watermark is proportionally scaled based on the original SVG image. When both Width and Height are 0px, it means the height of the watermark is the height of the original SVG image.</li>
<li>If a string ends with W%, it indicates that the `Height` of a watermark is a percentage of a video's width. For example, `10W%` means that `Height` is 10% of a video's width.</li>
<li>If a string ends with H%, it indicates that the `Height` of a watermark is a percentage of a video's height. For example, `10H%` means that `Height` is 10% of a video's height.</li>
<li>If a string ends with S%, it indicates that the `Height` of a watermark is a percentage of the video's short side. For example, `10S%` means that `Height` is 10% of the video's short side.</li>
<li>If a string ends with L%, it indicates that the `Height` of a watermark is a percentage of the long side of a video. For example, `10L%` means that `Height` is 10% of the long side of a video.</li>
<li>When the string ends with %, it has the same meaning as H%.</li>
Default value: 0px.
 * @method void setHeight(string $Height) Set Height of a watermark, supporting six formats: px, %, W%, H%, S%, and L%.
<li>If a string ends with px, the watermark Height is in pixels. For example, 100px means the Height is 100 pixels. If 0px is entered and
When Width is not 0px, it means the height of the watermark is proportionally scaled based on the original SVG image. When both Width and Height are 0px, it means the height of the watermark is the height of the original SVG image.</li>
<li>If a string ends with W%, it indicates that the `Height` of a watermark is a percentage of a video's width. For example, `10W%` means that `Height` is 10% of a video's width.</li>
<li>If a string ends with H%, it indicates that the `Height` of a watermark is a percentage of a video's height. For example, `10H%` means that `Height` is 10% of a video's height.</li>
<li>If a string ends with S%, it indicates that the `Height` of a watermark is a percentage of the video's short side. For example, `10S%` means that `Height` is 10% of the video's short side.</li>
<li>If a string ends with L%, it indicates that the `Height` of a watermark is a percentage of the long side of a video. For example, `10L%` means that `Height` is 10% of the long side of a video.</li>
<li>When the string ends with %, it has the same meaning as H%.</li>
Default value: 0px.
 * @method WatermarkCycleConfigForUpdate getCycleConfig() Obtain Watermark period configuration, which is used to configure the periodic display and hiding of watermarks.
Main usage scenarios: to prevent watermark occlusion in videos, set watermarks in multiple places. These watermarks are displayed and hidden periodically in a fixed sequence.
For example, set four watermarks A, B, C, and D at the top-left corner, top-right corner, bottom-right corner, and bottom-left corner of the video respectively. When the video starts, { A displays for 5 seconds -> B displays for 5 seconds -> C displays for 5 seconds -> D displays for 5 seconds } -> A displays for 5 seconds -> B displays for 5 seconds -> ..., and only one watermark is displayed at any time.
Curly braces {} indicate a long cycle consisting of four watermarks: A, B, C, and D. You can see each long cycle lasts 20 seconds.
You can see that A, B, C, and D are all displayed for 5 seconds and hidden for 15 seconds periodically, and they have a fixed display order.
This configuration item is used to describe the periodic configuration of each watermark.
 * @method void setCycleConfig(WatermarkCycleConfigForUpdate $CycleConfig) Set Watermark period configuration, which is used to configure the periodic display and hiding of watermarks.
Main usage scenarios: to prevent watermark occlusion in videos, set watermarks in multiple places. These watermarks are displayed and hidden periodically in a fixed sequence.
For example, set four watermarks A, B, C, and D at the top-left corner, top-right corner, bottom-right corner, and bottom-left corner of the video respectively. When the video starts, { A displays for 5 seconds -> B displays for 5 seconds -> C displays for 5 seconds -> D displays for 5 seconds } -> A displays for 5 seconds -> B displays for 5 seconds -> ..., and only one watermark is displayed at any time.
Curly braces {} indicate a long cycle consisting of four watermarks: A, B, C, and D. You can see each long cycle lasts 20 seconds.
You can see that A, B, C, and D are all displayed for 5 seconds and hidden for 15 seconds periodically, and they have a fixed display order.
This configuration item is used to describe the periodic configuration of each watermark.
 */
class SvgWatermarkInputForUpdate extends AbstractModel
{
    /**
     * @var string Width of a watermark, supporting six formats: px, %, W%, H%, S%, and L%.
<li>If a string ends with px, it means the watermark Width is in pixels. For example, 100px means the Width is 100 pixels. If 0px is entered and
When Height is not 0px, it means the width of the watermark is proportionally scaled based on the original SVG image. When both Width and Height are set to 0px, it means the width of the watermark is the width of the original SVG image.</li>
<li>If a string ends with W%, it indicates that the `Width` of a watermark is a percentage of a video's width. For example, `10W%` means that `Width` is 10% of a video's width.</li>
<li>If a string ends with H%, it indicates that the `Width` of a watermark is a percentage of a video's height. For example, `10H%` means that `Width` is 10% of a video's height.</li>
<li>If a string ends with S%, it indicates that the `Width` of a watermark is a percentage of a video's short side. For example, `10S%` means that `Width` is 10% of a video's short side.</li>
<li>If a string ends with L%, it indicates that the `Width` of a watermark is a percentage of the long side of the video. For example, `10L%` means that `Width` is 10% of the long side of the video.</li>
<li>When the string ends with %, it has the same meaning as W%.</li>
Default value: 10W%.
     */
    public $Width;

    /**
     * @var string Height of a watermark, supporting six formats: px, %, W%, H%, S%, and L%.
<li>If a string ends with px, the watermark Height is in pixels. For example, 100px means the Height is 100 pixels. If 0px is entered and
When Width is not 0px, it means the height of the watermark is proportionally scaled based on the original SVG image. When both Width and Height are 0px, it means the height of the watermark is the height of the original SVG image.</li>
<li>If a string ends with W%, it indicates that the `Height` of a watermark is a percentage of a video's width. For example, `10W%` means that `Height` is 10% of a video's width.</li>
<li>If a string ends with H%, it indicates that the `Height` of a watermark is a percentage of a video's height. For example, `10H%` means that `Height` is 10% of a video's height.</li>
<li>If a string ends with S%, it indicates that the `Height` of a watermark is a percentage of the video's short side. For example, `10S%` means that `Height` is 10% of the video's short side.</li>
<li>If a string ends with L%, it indicates that the `Height` of a watermark is a percentage of the long side of a video. For example, `10L%` means that `Height` is 10% of the long side of a video.</li>
<li>When the string ends with %, it has the same meaning as H%.</li>
Default value: 0px.
     */
    public $Height;

    /**
     * @var WatermarkCycleConfigForUpdate Watermark period configuration, which is used to configure the periodic display and hiding of watermarks.
Main usage scenarios: to prevent watermark occlusion in videos, set watermarks in multiple places. These watermarks are displayed and hidden periodically in a fixed sequence.
For example, set four watermarks A, B, C, and D at the top-left corner, top-right corner, bottom-right corner, and bottom-left corner of the video respectively. When the video starts, { A displays for 5 seconds -> B displays for 5 seconds -> C displays for 5 seconds -> D displays for 5 seconds } -> A displays for 5 seconds -> B displays for 5 seconds -> ..., and only one watermark is displayed at any time.
Curly braces {} indicate a long cycle consisting of four watermarks: A, B, C, and D. You can see each long cycle lasts 20 seconds.
You can see that A, B, C, and D are all displayed for 5 seconds and hidden for 15 seconds periodically, and they have a fixed display order.
This configuration item is used to describe the periodic configuration of each watermark.
     * @deprecated
     */
    public $CycleConfig;

    /**
     * @param string $Width Width of a watermark, supporting six formats: px, %, W%, H%, S%, and L%.
<li>If a string ends with px, it means the watermark Width is in pixels. For example, 100px means the Width is 100 pixels. If 0px is entered and
When Height is not 0px, it means the width of the watermark is proportionally scaled based on the original SVG image. When both Width and Height are set to 0px, it means the width of the watermark is the width of the original SVG image.</li>
<li>If a string ends with W%, it indicates that the `Width` of a watermark is a percentage of a video's width. For example, `10W%` means that `Width` is 10% of a video's width.</li>
<li>If a string ends with H%, it indicates that the `Width` of a watermark is a percentage of a video's height. For example, `10H%` means that `Width` is 10% of a video's height.</li>
<li>If a string ends with S%, it indicates that the `Width` of a watermark is a percentage of a video's short side. For example, `10S%` means that `Width` is 10% of a video's short side.</li>
<li>If a string ends with L%, it indicates that the `Width` of a watermark is a percentage of the long side of the video. For example, `10L%` means that `Width` is 10% of the long side of the video.</li>
<li>When the string ends with %, it has the same meaning as W%.</li>
Default value: 10W%.
     * @param string $Height Height of a watermark, supporting six formats: px, %, W%, H%, S%, and L%.
<li>If a string ends with px, the watermark Height is in pixels. For example, 100px means the Height is 100 pixels. If 0px is entered and
When Width is not 0px, it means the height of the watermark is proportionally scaled based on the original SVG image. When both Width and Height are 0px, it means the height of the watermark is the height of the original SVG image.</li>
<li>If a string ends with W%, it indicates that the `Height` of a watermark is a percentage of a video's width. For example, `10W%` means that `Height` is 10% of a video's width.</li>
<li>If a string ends with H%, it indicates that the `Height` of a watermark is a percentage of a video's height. For example, `10H%` means that `Height` is 10% of a video's height.</li>
<li>If a string ends with S%, it indicates that the `Height` of a watermark is a percentage of the video's short side. For example, `10S%` means that `Height` is 10% of the video's short side.</li>
<li>If a string ends with L%, it indicates that the `Height` of a watermark is a percentage of the long side of a video. For example, `10L%` means that `Height` is 10% of the long side of a video.</li>
<li>When the string ends with %, it has the same meaning as H%.</li>
Default value: 0px.
     * @param WatermarkCycleConfigForUpdate $CycleConfig Watermark period configuration, which is used to configure the periodic display and hiding of watermarks.
Main usage scenarios: to prevent watermark occlusion in videos, set watermarks in multiple places. These watermarks are displayed and hidden periodically in a fixed sequence.
For example, set four watermarks A, B, C, and D at the top-left corner, top-right corner, bottom-right corner, and bottom-left corner of the video respectively. When the video starts, { A displays for 5 seconds -> B displays for 5 seconds -> C displays for 5 seconds -> D displays for 5 seconds } -> A displays for 5 seconds -> B displays for 5 seconds -> ..., and only one watermark is displayed at any time.
Curly braces {} indicate a long cycle consisting of four watermarks: A, B, C, and D. You can see each long cycle lasts 20 seconds.
You can see that A, B, C, and D are all displayed for 5 seconds and hidden for 15 seconds periodically, and they have a fixed display order.
This configuration item is used to describe the periodic configuration of each watermark.
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

        if (array_key_exists("CycleConfig",$param) and $param["CycleConfig"] !== null) {
            $this->CycleConfig = new WatermarkCycleConfigForUpdate();
            $this->CycleConfig->deserialize($param["CycleConfig"]);
        }
    }
}
