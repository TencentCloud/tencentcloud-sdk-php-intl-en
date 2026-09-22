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
 * Subtitle arrangement configuration for the MPS subtitle suppression module
 *
 * @method integer getSubtitleLayoutConfigSwitch() Obtain <p>Subtitle arrangement configuration switch, 0 for off, 1 for on, default 0</p>
 * @method void setSubtitleLayoutConfigSwitch(integer $SubtitleLayoutConfigSwitch) Set <p>Subtitle arrangement configuration switch, 0 for off, 1 for on, default 0</p>
 * @method integer getLineSpacing() Obtain <p>Line spacing. The value should be a positive integer. - When it represents pixel values, the range is [0, 1000]. - When it represents a percentage, the range is [0, 100]. The default value is 0 if left blank.</p>
 * @method void setLineSpacing(integer $LineSpacing) Set <p>Line spacing. The value should be a positive integer. - When it represents pixel values, the range is [0, 1000]. - When it represents a percentage, the range is [0, 100]. The default value is 0 if left blank.</p>
 * @method integer getLineSpacingUnit() Obtain <p>LineSpacing unit, 0 pixel, 1 percentage, defaults to 0, pixel</p>
 * @method void setLineSpacingUnit(integer $LineSpacingUnit) Set <p>LineSpacing unit, 0 pixel, 1 percentage, defaults to 0, pixel</p>
 * @method string getAlignment() Obtain <p>Alignment mode. Valid values: top: The top position of the subtitle is fixed, while the bottom position changes according to the number of lines. bottom: The bottom position of the subtitle is fixed, while the top position changes according to the number of lines. If this is not specified, bottom alignment is used by default.</p>
 * @method void setAlignment(string $Alignment) Set <p>Alignment mode. Valid values: top: The top position of the subtitle is fixed, while the bottom position changes according to the number of lines. bottom: The bottom position of the subtitle is fixed, while the top position changes according to the number of lines. If this is not specified, bottom alignment is used by default.</p>
 */
class MPSSubtitleLayoutConfig extends AbstractModel
{
    /**
     * @var integer <p>Subtitle arrangement configuration switch, 0 for off, 1 for on, default 0</p>
     */
    public $SubtitleLayoutConfigSwitch;

    /**
     * @var integer <p>Line spacing. The value should be a positive integer. - When it represents pixel values, the range is [0, 1000]. - When it represents a percentage, the range is [0, 100]. The default value is 0 if left blank.</p>
     */
    public $LineSpacing;

    /**
     * @var integer <p>LineSpacing unit, 0 pixel, 1 percentage, defaults to 0, pixel</p>
     */
    public $LineSpacingUnit;

    /**
     * @var string <p>Alignment mode. Valid values: top: The top position of the subtitle is fixed, while the bottom position changes according to the number of lines. bottom: The bottom position of the subtitle is fixed, while the top position changes according to the number of lines. If this is not specified, bottom alignment is used by default.</p>
     */
    public $Alignment;

    /**
     * @param integer $SubtitleLayoutConfigSwitch <p>Subtitle arrangement configuration switch, 0 for off, 1 for on, default 0</p>
     * @param integer $LineSpacing <p>Line spacing. The value should be a positive integer. - When it represents pixel values, the range is [0, 1000]. - When it represents a percentage, the range is [0, 100]. The default value is 0 if left blank.</p>
     * @param integer $LineSpacingUnit <p>LineSpacing unit, 0 pixel, 1 percentage, defaults to 0, pixel</p>
     * @param string $Alignment <p>Alignment mode. Valid values: top: The top position of the subtitle is fixed, while the bottom position changes according to the number of lines. bottom: The bottom position of the subtitle is fixed, while the top position changes according to the number of lines. If this is not specified, bottom alignment is used by default.</p>
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
        if (array_key_exists("SubtitleLayoutConfigSwitch",$param) and $param["SubtitleLayoutConfigSwitch"] !== null) {
            $this->SubtitleLayoutConfigSwitch = $param["SubtitleLayoutConfigSwitch"];
        }

        if (array_key_exists("LineSpacing",$param) and $param["LineSpacing"] !== null) {
            $this->LineSpacing = $param["LineSpacing"];
        }

        if (array_key_exists("LineSpacingUnit",$param) and $param["LineSpacingUnit"] !== null) {
            $this->LineSpacingUnit = $param["LineSpacingUnit"];
        }

        if (array_key_exists("Alignment",$param) and $param["Alignment"] !== null) {
            $this->Alignment = $param["Alignment"];
        }
    }
}
