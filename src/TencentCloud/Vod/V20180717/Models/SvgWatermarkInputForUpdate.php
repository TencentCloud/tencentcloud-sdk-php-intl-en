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
 * Input parameter of SVG watermarking template
 *
 * @method string getWidth() Obtain Watermark width, which supports six formats of px, %, W%, H%, S%, and L%:
<li>If the string ends in px, the `Width` of the watermark will be in px; for example, `100px` means that `Width` is 100 px; if `0px` is entered
 and `Height` is not `0px`, the watermark width will be proportionally scaled based on the source SVG image; if `0px` is entered for both `Width` and `Height`, the watermark width will be the width of the source SVG image;</li>
<li>If the string ends in `W%`, the `Width` of the watermark will be the specified percentage of the video width; for example, `10W%` means that `Width` is 10% of the video width;</li>
<li>If the string ends in `H%`, the `Width` of the watermark will be the specified percentage of the video height; for example, `10H%` means that `Width` is 10% of the video height;</li>
<li>If the string ends in `S%`, the `Width` of the watermark will be the specified percentage of the short side of the video; for example, `10S%` means that `Width` is 10% of the short side of the video;</li>
<li>If the string ends in `L%`, the `Width` of the watermark will be the specified percentage of the long side of the video; for example, `10L%` means that `Width` is 10% of the long side of the video;</li>
<li>If the string ends in %, the meaning is the same as `W%`.</li>
Default value: 10W%.
 * @method void setWidth(string $Width) Set Watermark width, which supports six formats of px, %, W%, H%, S%, and L%:
<li>If the string ends in px, the `Width` of the watermark will be in px; for example, `100px` means that `Width` is 100 px; if `0px` is entered
 and `Height` is not `0px`, the watermark width will be proportionally scaled based on the source SVG image; if `0px` is entered for both `Width` and `Height`, the watermark width will be the width of the source SVG image;</li>
<li>If the string ends in `W%`, the `Width` of the watermark will be the specified percentage of the video width; for example, `10W%` means that `Width` is 10% of the video width;</li>
<li>If the string ends in `H%`, the `Width` of the watermark will be the specified percentage of the video height; for example, `10H%` means that `Width` is 10% of the video height;</li>
<li>If the string ends in `S%`, the `Width` of the watermark will be the specified percentage of the short side of the video; for example, `10S%` means that `Width` is 10% of the short side of the video;</li>
<li>If the string ends in `L%`, the `Width` of the watermark will be the specified percentage of the long side of the video; for example, `10L%` means that `Width` is 10% of the long side of the video;</li>
<li>If the string ends in %, the meaning is the same as `W%`.</li>
Default value: 10W%.
 * @method string getHeight() Obtain Watermark height, which supports six formats of px, %, W%, H%, S%, and L%:
<li>If the string ends in px, the `Height` of the watermark will be in px; for example, `100px` means that `Height` is 100 px; if `0px` is entered
 and `Width` is not `0px`, the watermark height will be proportionally scaled based on the source SVG image; if `0px` is entered for both `Width` and `Height`, the watermark height will be the height of the source SVG image;</li>
<li>If the string ends in `W%`, the `Height` of the watermark will be the specified percentage of the video width; for example, `10W%` means that `Height` is 10% of the video width;</li>
<li>If the string ends in `H%`, the `Height` of the watermark will be the specified percentage of the video height; for example, `10H%` means that `Height` is 10% of the video height;</li>
<li>If the string ends in `S%`, the `Height` of the watermark will be the specified percentage of the short side of the video; for example, `10S%` means that `Height` is 10% of the short side of the video;</li>
<li>If the string ends in `L%`, the `Height` of the watermark will be the specified percentage of the long side of the video; for example, `10L%` means that `Height` is 10% of the long side of the video;</li>
<li>If the string ends in %, the meaning is the same as `H%`.
Default value: 0 px.
 * @method void setHeight(string $Height) Set Watermark height, which supports six formats of px, %, W%, H%, S%, and L%:
<li>If the string ends in px, the `Height` of the watermark will be in px; for example, `100px` means that `Height` is 100 px; if `0px` is entered
 and `Width` is not `0px`, the watermark height will be proportionally scaled based on the source SVG image; if `0px` is entered for both `Width` and `Height`, the watermark height will be the height of the source SVG image;</li>
<li>If the string ends in `W%`, the `Height` of the watermark will be the specified percentage of the video width; for example, `10W%` means that `Height` is 10% of the video width;</li>
<li>If the string ends in `H%`, the `Height` of the watermark will be the specified percentage of the video height; for example, `10H%` means that `Height` is 10% of the video height;</li>
<li>If the string ends in `S%`, the `Height` of the watermark will be the specified percentage of the short side of the video; for example, `10S%` means that `Height` is 10% of the short side of the video;</li>
<li>If the string ends in `L%`, the `Height` of the watermark will be the specified percentage of the long side of the video; for example, `10L%` means that `Height` is 10% of the long side of the video;</li>
<li>If the string ends in %, the meaning is the same as `H%`.
Default value: 0 px.
 * @method WatermarkCycleConfigForUpdate getCycleConfig() Obtain Watermark period configuration is used to configure the watermark to be displayed and hidden periodically. 
The main usage scenario is: in order to prevent video from being blocked, watermarks are set in multiple places on the video. These watermarks are periodically displayed and hidden in a fixed order. 
For example, set four watermarks A, B, C, and D to be located in the upper left corner, upper right corner, lower right corner, and lower left corner of the video respectively. When the video starts, { A displays for 5 seconds -> B displays for 5 seconds -> C Display for 5 seconds -> D Display for 5 seconds} -> A Display for 5 seconds -> B Display for 5 seconds -> ..., only one watermark is displayed at any time. 
The curly brackets {} represent a large cycle consisting of 4 watermarks A, B, C, and D. It can be seen that each large cycle lasts 20 seconds. 
It can be seen that A, B, C, and D are periodically displayed for 5 seconds and hidden for 15 seconds, and the four have a fixed display order. 
This configuration item is used to describe the periodic configuration of a single watermark.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCycleConfig(WatermarkCycleConfigForUpdate $CycleConfig) Set Watermark period configuration is used to configure the watermark to be displayed and hidden periodically. 
The main usage scenario is: in order to prevent video from being blocked, watermarks are set in multiple places on the video. These watermarks are periodically displayed and hidden in a fixed order. 
For example, set four watermarks A, B, C, and D to be located in the upper left corner, upper right corner, lower right corner, and lower left corner of the video respectively. When the video starts, { A displays for 5 seconds -> B displays for 5 seconds -> C Display for 5 seconds -> D Display for 5 seconds} -> A Display for 5 seconds -> B Display for 5 seconds -> ..., only one watermark is displayed at any time. 
The curly brackets {} represent a large cycle consisting of 4 watermarks A, B, C, and D. It can be seen that each large cycle lasts 20 seconds. 
It can be seen that A, B, C, and D are periodically displayed for 5 seconds and hidden for 15 seconds, and the four have a fixed display order. 
This configuration item is used to describe the periodic configuration of a single watermark.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class SvgWatermarkInputForUpdate extends AbstractModel
{
    /**
     * @var string Watermark width, which supports six formats of px, %, W%, H%, S%, and L%:
<li>If the string ends in px, the `Width` of the watermark will be in px; for example, `100px` means that `Width` is 100 px; if `0px` is entered
 and `Height` is not `0px`, the watermark width will be proportionally scaled based on the source SVG image; if `0px` is entered for both `Width` and `Height`, the watermark width will be the width of the source SVG image;</li>
<li>If the string ends in `W%`, the `Width` of the watermark will be the specified percentage of the video width; for example, `10W%` means that `Width` is 10% of the video width;</li>
<li>If the string ends in `H%`, the `Width` of the watermark will be the specified percentage of the video height; for example, `10H%` means that `Width` is 10% of the video height;</li>
<li>If the string ends in `S%`, the `Width` of the watermark will be the specified percentage of the short side of the video; for example, `10S%` means that `Width` is 10% of the short side of the video;</li>
<li>If the string ends in `L%`, the `Width` of the watermark will be the specified percentage of the long side of the video; for example, `10L%` means that `Width` is 10% of the long side of the video;</li>
<li>If the string ends in %, the meaning is the same as `W%`.</li>
Default value: 10W%.
     */
    public $Width;

    /**
     * @var string Watermark height, which supports six formats of px, %, W%, H%, S%, and L%:
<li>If the string ends in px, the `Height` of the watermark will be in px; for example, `100px` means that `Height` is 100 px; if `0px` is entered
 and `Width` is not `0px`, the watermark height will be proportionally scaled based on the source SVG image; if `0px` is entered for both `Width` and `Height`, the watermark height will be the height of the source SVG image;</li>
<li>If the string ends in `W%`, the `Height` of the watermark will be the specified percentage of the video width; for example, `10W%` means that `Height` is 10% of the video width;</li>
<li>If the string ends in `H%`, the `Height` of the watermark will be the specified percentage of the video height; for example, `10H%` means that `Height` is 10% of the video height;</li>
<li>If the string ends in `S%`, the `Height` of the watermark will be the specified percentage of the short side of the video; for example, `10S%` means that `Height` is 10% of the short side of the video;</li>
<li>If the string ends in `L%`, the `Height` of the watermark will be the specified percentage of the long side of the video; for example, `10L%` means that `Height` is 10% of the long side of the video;</li>
<li>If the string ends in %, the meaning is the same as `H%`.
Default value: 0 px.
     */
    public $Height;

    /**
     * @var WatermarkCycleConfigForUpdate Watermark period configuration is used to configure the watermark to be displayed and hidden periodically. 
The main usage scenario is: in order to prevent video from being blocked, watermarks are set in multiple places on the video. These watermarks are periodically displayed and hidden in a fixed order. 
For example, set four watermarks A, B, C, and D to be located in the upper left corner, upper right corner, lower right corner, and lower left corner of the video respectively. When the video starts, { A displays for 5 seconds -> B displays for 5 seconds -> C Display for 5 seconds -> D Display for 5 seconds} -> A Display for 5 seconds -> B Display for 5 seconds -> ..., only one watermark is displayed at any time. 
The curly brackets {} represent a large cycle consisting of 4 watermarks A, B, C, and D. It can be seen that each large cycle lasts 20 seconds. 
It can be seen that A, B, C, and D are periodically displayed for 5 seconds and hidden for 15 seconds, and the four have a fixed display order. 
This configuration item is used to describe the periodic configuration of a single watermark.
Note: This field may return null, indicating that no valid value can be obtained.
     * @deprecated
     */
    public $CycleConfig;

    /**
     * @param string $Width Watermark width, which supports six formats of px, %, W%, H%, S%, and L%:
<li>If the string ends in px, the `Width` of the watermark will be in px; for example, `100px` means that `Width` is 100 px; if `0px` is entered
 and `Height` is not `0px`, the watermark width will be proportionally scaled based on the source SVG image; if `0px` is entered for both `Width` and `Height`, the watermark width will be the width of the source SVG image;</li>
<li>If the string ends in `W%`, the `Width` of the watermark will be the specified percentage of the video width; for example, `10W%` means that `Width` is 10% of the video width;</li>
<li>If the string ends in `H%`, the `Width` of the watermark will be the specified percentage of the video height; for example, `10H%` means that `Width` is 10% of the video height;</li>
<li>If the string ends in `S%`, the `Width` of the watermark will be the specified percentage of the short side of the video; for example, `10S%` means that `Width` is 10% of the short side of the video;</li>
<li>If the string ends in `L%`, the `Width` of the watermark will be the specified percentage of the long side of the video; for example, `10L%` means that `Width` is 10% of the long side of the video;</li>
<li>If the string ends in %, the meaning is the same as `W%`.</li>
Default value: 10W%.
     * @param string $Height Watermark height, which supports six formats of px, %, W%, H%, S%, and L%:
<li>If the string ends in px, the `Height` of the watermark will be in px; for example, `100px` means that `Height` is 100 px; if `0px` is entered
 and `Width` is not `0px`, the watermark height will be proportionally scaled based on the source SVG image; if `0px` is entered for both `Width` and `Height`, the watermark height will be the height of the source SVG image;</li>
<li>If the string ends in `W%`, the `Height` of the watermark will be the specified percentage of the video width; for example, `10W%` means that `Height` is 10% of the video width;</li>
<li>If the string ends in `H%`, the `Height` of the watermark will be the specified percentage of the video height; for example, `10H%` means that `Height` is 10% of the video height;</li>
<li>If the string ends in `S%`, the `Height` of the watermark will be the specified percentage of the short side of the video; for example, `10S%` means that `Height` is 10% of the short side of the video;</li>
<li>If the string ends in `L%`, the `Height` of the watermark will be the specified percentage of the long side of the video; for example, `10L%` means that `Height` is 10% of the long side of the video;</li>
<li>If the string ends in %, the meaning is the same as `H%`.
Default value: 0 px.
     * @param WatermarkCycleConfigForUpdate $CycleConfig Watermark period configuration is used to configure the watermark to be displayed and hidden periodically. 
The main usage scenario is: in order to prevent video from being blocked, watermarks are set in multiple places on the video. These watermarks are periodically displayed and hidden in a fixed order. 
For example, set four watermarks A, B, C, and D to be located in the upper left corner, upper right corner, lower right corner, and lower left corner of the video respectively. When the video starts, { A displays for 5 seconds -> B displays for 5 seconds -> C Display for 5 seconds -> D Display for 5 seconds} -> A Display for 5 seconds -> B Display for 5 seconds -> ..., only one watermark is displayed at any time. 
The curly brackets {} represent a large cycle consisting of 4 watermarks A, B, C, and D. It can be seen that each large cycle lasts 20 seconds. 
It can be seen that A, B, C, and D are periodically displayed for 5 seconds and hidden for 15 seconds, and the four have a fixed display order. 
This configuration item is used to describe the periodic configuration of a single watermark.
Note: This field may return null, indicating that no valid value can be obtained.
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
