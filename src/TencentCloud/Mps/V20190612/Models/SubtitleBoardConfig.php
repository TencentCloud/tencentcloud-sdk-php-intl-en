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
 * Subtitle suppression module background settings
 *
 * @method integer getSubtitleBoardConfigSwitch() Obtain Subtitle suppression module background configuration switch, 0 for off, 1 for on, default 0
 * @method void setSubtitleBoardConfigSwitch(integer $SubtitleBoardConfigSwitch) Set Subtitle suppression module background configuration switch, 0 for off, 1 for on, default 0
 * @method integer getBoardX() Obtain Subtitle background base plate x-axis coordinate position; Supports pixel and percentage format:

- Pixel: Npx. Value range of N: [-4096,4096].
-Percentage: N%, N range: [-100,100]. For example, 10% means the X-coordinate of the subtitle background base plate is 10% of the source video width.

Default value: 0px.
Note: The origin of the coordinate axes is at the bottom of the central axis of the source video, and the reference position of the subtitle base plate is at the bottom of the central axis, as shown in the figure below.
![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png)

 * @method void setBoardX(integer $BoardX) Set Subtitle background base plate x-axis coordinate position; Supports pixel and percentage format:

- Pixel: Npx. Value range of N: [-4096,4096].
-Percentage: N%, N range: [-100,100]. For example, 10% means the X-coordinate of the subtitle background base plate is 10% of the source video width.

Default value: 0px.
Note: The origin of the coordinate axes is at the bottom of the central axis of the source video, and the reference position of the subtitle base plate is at the bottom of the central axis, as shown in the figure below.
![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png)

 * @method integer getBoardXUnit() Obtain BoardX unit, 0 pixel, 1 percentage, default is 0, pixel
 * @method void setBoardXUnit(integer $BoardXUnit) Set BoardX unit, 0 pixel, 1 percentage, default is 0, pixel
 * @method integer getBoardY() Obtain Subtitle background base plate y-axis coordinate position; Supports pixel and percentage format:

- Pixel: Npx. Value range of N: [0,4096].
-Percentage: N%, where N ranges from [0,100]. For example, 10% means the y-coordinate of the subtitle background base plate equals 10% of the video height.

If this parameter is not specified, the subtitle background is disabled.
Note: The origin point of the coordinate axis is located at the bottom of the central axis of the source video, and the benchmark of the subtitle background base plate is at the bottom of its central axis. See the following diagram.
![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png)

 * @method void setBoardY(integer $BoardY) Set Subtitle background base plate y-axis coordinate position; Supports pixel and percentage format:

- Pixel: Npx. Value range of N: [0,4096].
-Percentage: N%, where N ranges from [0,100]. For example, 10% means the y-coordinate of the subtitle background base plate equals 10% of the video height.

If this parameter is not specified, the subtitle background is disabled.
Note: The origin point of the coordinate axis is located at the bottom of the central axis of the source video, and the benchmark of the subtitle background base plate is at the bottom of its central axis. See the following diagram.
![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png)

 * @method integer getBoardYUnit() Obtain BoardY unit, 0 pixel, 1 percentage, default is 0, pixel
 * @method void setBoardYUnit(integer $BoardYUnit) Set BoardY unit, 0 pixel, 1 percentage, default is 0, pixel
 * @method integer getBoardWidth() Obtain Background width. The value should be a positive integer.
- Value range for pixels: [0,4096].
- Value range for percentages: [0, 100].
If the base plate is enabled and this parameter is not specified, the default width is 90% of the source video width.

 * @method void setBoardWidth(integer $BoardWidth) Set Background width. The value should be a positive integer.
- Value range for pixels: [0,4096].
- Value range for percentages: [0, 100].
If the base plate is enabled and this parameter is not specified, the default width is 90% of the source video width.

 * @method integer getBoardWidthUnit() Obtain Background width measurement unit. 0: pixel, 1: percentage. Default is 0 (pixel).

 * @method void setBoardWidthUnit(integer $BoardWidthUnit) Set Background width measurement unit. 0: pixel, 1: percentage. Default is 0 (pixel).

 * @method integer getBoardHeight() Obtain Background height. The value should be a positive integer.
- Value range for pixels: [0,4096].
- Value range for percentages: [0, 100].
If the base plate is enabled and this parameter is not specified, the default height is 15% of the source video height.

 * @method void setBoardHeight(integer $BoardHeight) Set Background height. The value should be a positive integer.
- Value range for pixels: [0,4096].
- Value range for percentages: [0, 100].
If the base plate is enabled and this parameter is not specified, the default height is 15% of the source video height.

 * @method integer getBoardHeightUnit() Obtain Base plate height unit, 0 pixel, 1 percentage, defaults to 0, pixel

 * @method void setBoardHeightUnit(integer $BoardHeightUnit) Set Base plate height unit, 0 pixel, 1 percentage, defaults to 0, pixel

 * @method string getBoardColor() Obtain Board color. Format: 0xRRGGBB.
Default value: 0x000000 (black).
 * @method void setBoardColor(string $BoardColor) Set Board color. Format: 0xRRGGBB.
Default value: 0x000000 (black).
 * @method float getBoardAlpha() Obtain Subtitle background transparency. Value range: [0, 1].
<li>0: completely transparent.</li>
<li>1: completely opaque.</li>
Default value: 0.8.
 * @method void setBoardAlpha(float $BoardAlpha) Set Subtitle background transparency. Value range: [0, 1].
<li>0: completely transparent.</li>
<li>1: completely opaque.</li>
Default value: 0.8.
 */
class SubtitleBoardConfig extends AbstractModel
{
    /**
     * @var integer Subtitle suppression module background configuration switch, 0 for off, 1 for on, default 0
     */
    public $SubtitleBoardConfigSwitch;

    /**
     * @var integer Subtitle background base plate x-axis coordinate position; Supports pixel and percentage format:

- Pixel: Npx. Value range of N: [-4096,4096].
-Percentage: N%, N range: [-100,100]. For example, 10% means the X-coordinate of the subtitle background base plate is 10% of the source video width.

Default value: 0px.
Note: The origin of the coordinate axes is at the bottom of the central axis of the source video, and the reference position of the subtitle base plate is at the bottom of the central axis, as shown in the figure below.
![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png)

     */
    public $BoardX;

    /**
     * @var integer BoardX unit, 0 pixel, 1 percentage, default is 0, pixel
     */
    public $BoardXUnit;

    /**
     * @var integer Subtitle background base plate y-axis coordinate position; Supports pixel and percentage format:

- Pixel: Npx. Value range of N: [0,4096].
-Percentage: N%, where N ranges from [0,100]. For example, 10% means the y-coordinate of the subtitle background base plate equals 10% of the video height.

If this parameter is not specified, the subtitle background is disabled.
Note: The origin point of the coordinate axis is located at the bottom of the central axis of the source video, and the benchmark of the subtitle background base plate is at the bottom of its central axis. See the following diagram.
![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png)

     */
    public $BoardY;

    /**
     * @var integer BoardY unit, 0 pixel, 1 percentage, default is 0, pixel
     */
    public $BoardYUnit;

    /**
     * @var integer Background width. The value should be a positive integer.
- Value range for pixels: [0,4096].
- Value range for percentages: [0, 100].
If the base plate is enabled and this parameter is not specified, the default width is 90% of the source video width.

     */
    public $BoardWidth;

    /**
     * @var integer Background width measurement unit. 0: pixel, 1: percentage. Default is 0 (pixel).

     */
    public $BoardWidthUnit;

    /**
     * @var integer Background height. The value should be a positive integer.
- Value range for pixels: [0,4096].
- Value range for percentages: [0, 100].
If the base plate is enabled and this parameter is not specified, the default height is 15% of the source video height.

     */
    public $BoardHeight;

    /**
     * @var integer Base plate height unit, 0 pixel, 1 percentage, defaults to 0, pixel

     */
    public $BoardHeightUnit;

    /**
     * @var string Board color. Format: 0xRRGGBB.
Default value: 0x000000 (black).
     */
    public $BoardColor;

    /**
     * @var float Subtitle background transparency. Value range: [0, 1].
<li>0: completely transparent.</li>
<li>1: completely opaque.</li>
Default value: 0.8.
     */
    public $BoardAlpha;

    /**
     * @param integer $SubtitleBoardConfigSwitch Subtitle suppression module background configuration switch, 0 for off, 1 for on, default 0
     * @param integer $BoardX Subtitle background base plate x-axis coordinate position; Supports pixel and percentage format:

- Pixel: Npx. Value range of N: [-4096,4096].
-Percentage: N%, N range: [-100,100]. For example, 10% means the X-coordinate of the subtitle background base plate is 10% of the source video width.

Default value: 0px.
Note: The origin of the coordinate axes is at the bottom of the central axis of the source video, and the reference position of the subtitle base plate is at the bottom of the central axis, as shown in the figure below.
![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png)

     * @param integer $BoardXUnit BoardX unit, 0 pixel, 1 percentage, default is 0, pixel
     * @param integer $BoardY Subtitle background base plate y-axis coordinate position; Supports pixel and percentage format:

- Pixel: Npx. Value range of N: [0,4096].
-Percentage: N%, where N ranges from [0,100]. For example, 10% means the y-coordinate of the subtitle background base plate equals 10% of the video height.

If this parameter is not specified, the subtitle background is disabled.
Note: The origin point of the coordinate axis is located at the bottom of the central axis of the source video, and the benchmark of the subtitle background base plate is at the bottom of its central axis. See the following diagram.
![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png)

     * @param integer $BoardYUnit BoardY unit, 0 pixel, 1 percentage, default is 0, pixel
     * @param integer $BoardWidth Background width. The value should be a positive integer.
- Value range for pixels: [0,4096].
- Value range for percentages: [0, 100].
If the base plate is enabled and this parameter is not specified, the default width is 90% of the source video width.

     * @param integer $BoardWidthUnit Background width measurement unit. 0: pixel, 1: percentage. Default is 0 (pixel).

     * @param integer $BoardHeight Background height. The value should be a positive integer.
- Value range for pixels: [0,4096].
- Value range for percentages: [0, 100].
If the base plate is enabled and this parameter is not specified, the default height is 15% of the source video height.

     * @param integer $BoardHeightUnit Base plate height unit, 0 pixel, 1 percentage, defaults to 0, pixel

     * @param string $BoardColor Board color. Format: 0xRRGGBB.
Default value: 0x000000 (black).
     * @param float $BoardAlpha Subtitle background transparency. Value range: [0, 1].
<li>0: completely transparent.</li>
<li>1: completely opaque.</li>
Default value: 0.8.
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
        if (array_key_exists("SubtitleBoardConfigSwitch",$param) and $param["SubtitleBoardConfigSwitch"] !== null) {
            $this->SubtitleBoardConfigSwitch = $param["SubtitleBoardConfigSwitch"];
        }

        if (array_key_exists("BoardX",$param) and $param["BoardX"] !== null) {
            $this->BoardX = $param["BoardX"];
        }

        if (array_key_exists("BoardXUnit",$param) and $param["BoardXUnit"] !== null) {
            $this->BoardXUnit = $param["BoardXUnit"];
        }

        if (array_key_exists("BoardY",$param) and $param["BoardY"] !== null) {
            $this->BoardY = $param["BoardY"];
        }

        if (array_key_exists("BoardYUnit",$param) and $param["BoardYUnit"] !== null) {
            $this->BoardYUnit = $param["BoardYUnit"];
        }

        if (array_key_exists("BoardWidth",$param) and $param["BoardWidth"] !== null) {
            $this->BoardWidth = $param["BoardWidth"];
        }

        if (array_key_exists("BoardWidthUnit",$param) and $param["BoardWidthUnit"] !== null) {
            $this->BoardWidthUnit = $param["BoardWidthUnit"];
        }

        if (array_key_exists("BoardHeight",$param) and $param["BoardHeight"] !== null) {
            $this->BoardHeight = $param["BoardHeight"];
        }

        if (array_key_exists("BoardHeightUnit",$param) and $param["BoardHeightUnit"] !== null) {
            $this->BoardHeightUnit = $param["BoardHeightUnit"];
        }

        if (array_key_exists("BoardColor",$param) and $param["BoardColor"] !== null) {
            $this->BoardColor = $param["BoardColor"];
        }

        if (array_key_exists("BoardAlpha",$param) and $param["BoardAlpha"] !== null) {
            $this->BoardAlpha = $param["BoardAlpha"];
        }
    }
}
