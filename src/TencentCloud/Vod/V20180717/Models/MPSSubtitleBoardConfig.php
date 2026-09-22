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
 * MPS subtitle suppression module background settings
 *
 * @method integer getSubtitleBoardConfigSwitch() Obtain <p>Subtitle suppression module background configuration switch, 0 for off, 1 for on, default 0</p>
 * @method void setSubtitleBoardConfigSwitch(integer $SubtitleBoardConfigSwitch) Set <p>Subtitle suppression module background configuration switch, 0 for off, 1 for on, default 0</p>
 * @method integer getBoardX() Obtain <p>The X-coordinate position of the subtitle background base plate. Supports pixel and percentage formats: - Pixel: Npx, where N ranges from [-4096, 4096]. - Percentage: N%, where N ranges from [-100, 100]; for example, 10% means the X-coordinate of the subtitle background base plate equals 10% of the source video width. Default value: 0px. Note: The origin of the coordinate axes is at the bottom of the central axis of the source video, and the reference point of the subtitle base plate is at the bottom of its central axis. Refer to the figure below: <img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></p>
 * @method void setBoardX(integer $BoardX) Set <p>The X-coordinate position of the subtitle background base plate. Supports pixel and percentage formats: - Pixel: Npx, where N ranges from [-4096, 4096]. - Percentage: N%, where N ranges from [-100, 100]; for example, 10% means the X-coordinate of the subtitle background base plate equals 10% of the source video width. Default value: 0px. Note: The origin of the coordinate axes is at the bottom of the central axis of the source video, and the reference point of the subtitle base plate is at the bottom of its central axis. Refer to the figure below: <img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></p>
 * @method integer getBoardXUnit() Obtain <p>BoardX unit, 0 pixel, 1 percentage, default is 0, pixel</p>
 * @method void setBoardXUnit(integer $BoardXUnit) Set <p>BoardX unit, 0 pixel, 1 percentage, default is 0, pixel</p>
 * @method integer getBoardY() Obtain <p>Y-coordinate position of the subtitle background base plate. Supports pixel and percentage formats: - Pixel: Npx, where N ranges from [0,4096]. - Percentage: N%, where N ranges from [0,100]. For example, 10% means the subtitle background base plate Y-coordinate = 10% * source video height. If not specified, the subtitle background base plate is disabled. Note: The coordinate axis origin is located at the bottom of the central axis of the source video, and the reference point of the subtitle background base plate is at the bottom of its central axis. Refer to the figure below: <img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></p>
 * @method void setBoardY(integer $BoardY) Set <p>Y-coordinate position of the subtitle background base plate. Supports pixel and percentage formats: - Pixel: Npx, where N ranges from [0,4096]. - Percentage: N%, where N ranges from [0,100]. For example, 10% means the subtitle background base plate Y-coordinate = 10% * source video height. If not specified, the subtitle background base plate is disabled. Note: The coordinate axis origin is located at the bottom of the central axis of the source video, and the reference point of the subtitle background base plate is at the bottom of its central axis. Refer to the figure below: <img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></p>
 * @method integer getBoardYUnit() Obtain <p>BoardY unit, 0 pixel, 1 percentage, default is 0, pixel</p>
 * @method void setBoardYUnit(integer $BoardYUnit) Set <p>BoardY unit, 0 pixel, 1 percentage, default is 0, pixel</p>
 * @method integer getBoardWidth() Obtain <p>Width of the base plate, a positive integer. - When representing pixels, value ranges from 0 to 4096. - When representing a percentage, value ranges from 0 to 100. If base plate is enabled and this parameter is not specified, the default width is 90% of the source video width.</p>
 * @method void setBoardWidth(integer $BoardWidth) Set <p>Width of the base plate, a positive integer. - When representing pixels, value ranges from 0 to 4096. - When representing a percentage, value ranges from 0 to 100. If base plate is enabled and this parameter is not specified, the default width is 90% of the source video width.</p>
 * @method integer getBoardWidthUnit() Obtain <p>Background width measurement unit. 0: pixel, 1: percentage. Default is 0 (pixel).</p>
 * @method void setBoardWidthUnit(integer $BoardWidthUnit) Set <p>Background width measurement unit. 0: pixel, 1: percentage. Default is 0 (pixel).</p>
 * @method integer getBoardHeight() Obtain <p>Height of the base plate, positive integer. - When representing pixels, value ranges from 0 to 4096. - When representing a percentage, value ranges from 0 to 100. If background is enabled and this parameter is not specified, the default height is 15% of the source video height.</p>
 * @method void setBoardHeight(integer $BoardHeight) Set <p>Height of the base plate, positive integer. - When representing pixels, value ranges from 0 to 4096. - When representing a percentage, value ranges from 0 to 100. If background is enabled and this parameter is not specified, the default height is 15% of the source video height.</p>
 * @method integer getBoardHeightUnit() Obtain <p>Base plate height unit, 0 pixel, 1 percentage, defaults to 0, pixel</p>
 * @method void setBoardHeightUnit(integer $BoardHeightUnit) Set <p>Base plate height unit, 0 pixel, 1 percentage, defaults to 0, pixel</p>
 * @method string getBoardColor() Obtain <p>Base plate color. Format: 0xRRGGBB. Default value: 0x000000 (black).</p>
 * @method void setBoardColor(string $BoardColor) Set <p>Base plate color. Format: 0xRRGGBB. Default value: 0x000000 (black).</p>
 * @method float getBoardAlpha() Obtain <p>Subtitle background transparency. Value range: [0, 1]. <li>0: completely transparent</li> <li>1: completely opaque</li> Default value: 0.8.</p>
 * @method void setBoardAlpha(float $BoardAlpha) Set <p>Subtitle background transparency. Value range: [0, 1]. <li>0: completely transparent</li> <li>1: completely opaque</li> Default value: 0.8.</p>
 */
class MPSSubtitleBoardConfig extends AbstractModel
{
    /**
     * @var integer <p>Subtitle suppression module background configuration switch, 0 for off, 1 for on, default 0</p>
     */
    public $SubtitleBoardConfigSwitch;

    /**
     * @var integer <p>The X-coordinate position of the subtitle background base plate. Supports pixel and percentage formats: - Pixel: Npx, where N ranges from [-4096, 4096]. - Percentage: N%, where N ranges from [-100, 100]; for example, 10% means the X-coordinate of the subtitle background base plate equals 10% of the source video width. Default value: 0px. Note: The origin of the coordinate axes is at the bottom of the central axis of the source video, and the reference point of the subtitle base plate is at the bottom of its central axis. Refer to the figure below: <img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></p>
     */
    public $BoardX;

    /**
     * @var integer <p>BoardX unit, 0 pixel, 1 percentage, default is 0, pixel</p>
     */
    public $BoardXUnit;

    /**
     * @var integer <p>Y-coordinate position of the subtitle background base plate. Supports pixel and percentage formats: - Pixel: Npx, where N ranges from [0,4096]. - Percentage: N%, where N ranges from [0,100]. For example, 10% means the subtitle background base plate Y-coordinate = 10% * source video height. If not specified, the subtitle background base plate is disabled. Note: The coordinate axis origin is located at the bottom of the central axis of the source video, and the reference point of the subtitle background base plate is at the bottom of its central axis. Refer to the figure below: <img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></p>
     */
    public $BoardY;

    /**
     * @var integer <p>BoardY unit, 0 pixel, 1 percentage, default is 0, pixel</p>
     */
    public $BoardYUnit;

    /**
     * @var integer <p>Width of the base plate, a positive integer. - When representing pixels, value ranges from 0 to 4096. - When representing a percentage, value ranges from 0 to 100. If base plate is enabled and this parameter is not specified, the default width is 90% of the source video width.</p>
     */
    public $BoardWidth;

    /**
     * @var integer <p>Background width measurement unit. 0: pixel, 1: percentage. Default is 0 (pixel).</p>
     */
    public $BoardWidthUnit;

    /**
     * @var integer <p>Height of the base plate, positive integer. - When representing pixels, value ranges from 0 to 4096. - When representing a percentage, value ranges from 0 to 100. If background is enabled and this parameter is not specified, the default height is 15% of the source video height.</p>
     */
    public $BoardHeight;

    /**
     * @var integer <p>Base plate height unit, 0 pixel, 1 percentage, defaults to 0, pixel</p>
     */
    public $BoardHeightUnit;

    /**
     * @var string <p>Base plate color. Format: 0xRRGGBB. Default value: 0x000000 (black).</p>
     */
    public $BoardColor;

    /**
     * @var float <p>Subtitle background transparency. Value range: [0, 1]. <li>0: completely transparent</li> <li>1: completely opaque</li> Default value: 0.8.</p>
     */
    public $BoardAlpha;

    /**
     * @param integer $SubtitleBoardConfigSwitch <p>Subtitle suppression module background configuration switch, 0 for off, 1 for on, default 0</p>
     * @param integer $BoardX <p>The X-coordinate position of the subtitle background base plate. Supports pixel and percentage formats: - Pixel: Npx, where N ranges from [-4096, 4096]. - Percentage: N%, where N ranges from [-100, 100]; for example, 10% means the X-coordinate of the subtitle background base plate equals 10% of the source video width. Default value: 0px. Note: The origin of the coordinate axes is at the bottom of the central axis of the source video, and the reference point of the subtitle base plate is at the bottom of its central axis. Refer to the figure below: <img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></p>
     * @param integer $BoardXUnit <p>BoardX unit, 0 pixel, 1 percentage, default is 0, pixel</p>
     * @param integer $BoardY <p>Y-coordinate position of the subtitle background base plate. Supports pixel and percentage formats: - Pixel: Npx, where N ranges from [0,4096]. - Percentage: N%, where N ranges from [0,100]. For example, 10% means the subtitle background base plate Y-coordinate = 10% * source video height. If not specified, the subtitle background base plate is disabled. Note: The coordinate axis origin is located at the bottom of the central axis of the source video, and the reference point of the subtitle background base plate is at the bottom of its central axis. Refer to the figure below: <img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></p>
     * @param integer $BoardYUnit <p>BoardY unit, 0 pixel, 1 percentage, default is 0, pixel</p>
     * @param integer $BoardWidth <p>Width of the base plate, a positive integer. - When representing pixels, value ranges from 0 to 4096. - When representing a percentage, value ranges from 0 to 100. If base plate is enabled and this parameter is not specified, the default width is 90% of the source video width.</p>
     * @param integer $BoardWidthUnit <p>Background width measurement unit. 0: pixel, 1: percentage. Default is 0 (pixel).</p>
     * @param integer $BoardHeight <p>Height of the base plate, positive integer. - When representing pixels, value ranges from 0 to 4096. - When representing a percentage, value ranges from 0 to 100. If background is enabled and this parameter is not specified, the default height is 15% of the source video height.</p>
     * @param integer $BoardHeightUnit <p>Base plate height unit, 0 pixel, 1 percentage, defaults to 0, pixel</p>
     * @param string $BoardColor <p>Base plate color. Format: 0xRRGGBB. Default value: 0x000000 (black).</p>
     * @param float $BoardAlpha <p>Subtitle background transparency. Value range: [0, 1]. <li>0: completely transparent</li> <li>1: completely opaque</li> Default value: 0.8.</p>
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
