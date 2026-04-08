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
 * Subtitle suppression module column configuration
 *
 * @method integer getSubtitleLayoutConfigSwitch() Obtain Subtitle arrangement configuration switch, 0 for off, 1 for on, default 0
 * @method void setSubtitleLayoutConfigSwitch(integer $SubtitleLayoutConfigSwitch) Set Subtitle arrangement configuration switch, 0 for off, 1 for on, default 0
 * @method integer getLineSpacing() Obtain Line spacing. The value should be a positive integer.
-Value range for pixels: [0, 1000].
- Value range for percentages: [0, 100]. If this is not specified, the default value is 0.

 * @method void setLineSpacing(integer $LineSpacing) Set Line spacing. The value should be a positive integer.
-Value range for pixels: [0, 1000].
- Value range for percentages: [0, 100]. If this is not specified, the default value is 0.

 * @method integer getLineSpacingUnit() Obtain LineSpacing unit, 0 pixel, 1 percentage, defaults to 0, pixel

 * @method void setLineSpacingUnit(integer $LineSpacingUnit) Set LineSpacing unit, 0 pixel, 1 percentage, defaults to 0, pixel

 * @method string getAlignment() Obtain Alignment mode. Valid values: top: The top position of the subtitle is fixed, while the bottom position changes according to the line count. bottom: The bottom position of the subtitle is fixed, while the top position changes according to the line count. If this is not specified, bottom alignment is used by default.

 * @method void setAlignment(string $Alignment) Set Alignment mode. Valid values: top: The top position of the subtitle is fixed, while the bottom position changes according to the line count. bottom: The bottom position of the subtitle is fixed, while the top position changes according to the line count. If this is not specified, bottom alignment is used by default.
 */
class SubtitleLayoutConfig extends AbstractModel
{
    /**
     * @var integer Subtitle arrangement configuration switch, 0 for off, 1 for on, default 0
     */
    public $SubtitleLayoutConfigSwitch;

    /**
     * @var integer Line spacing. The value should be a positive integer.
-Value range for pixels: [0, 1000].
- Value range for percentages: [0, 100]. If this is not specified, the default value is 0.

     */
    public $LineSpacing;

    /**
     * @var integer LineSpacing unit, 0 pixel, 1 percentage, defaults to 0, pixel

     */
    public $LineSpacingUnit;

    /**
     * @var string Alignment mode. Valid values: top: The top position of the subtitle is fixed, while the bottom position changes according to the line count. bottom: The bottom position of the subtitle is fixed, while the top position changes according to the line count. If this is not specified, bottom alignment is used by default.

     */
    public $Alignment;

    /**
     * @param integer $SubtitleLayoutConfigSwitch Subtitle arrangement configuration switch, 0 for off, 1 for on, default 0
     * @param integer $LineSpacing Line spacing. The value should be a positive integer.
-Value range for pixels: [0, 1000].
- Value range for percentages: [0, 100]. If this is not specified, the default value is 0.

     * @param integer $LineSpacingUnit LineSpacing unit, 0 pixel, 1 percentage, defaults to 0, pixel

     * @param string $Alignment Alignment mode. Valid values: top: The top position of the subtitle is fixed, while the bottom position changes according to the line count. bottom: The bottom position of the subtitle is fixed, while the top position changes according to the line count. If this is not specified, bottom alignment is used by default.
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
