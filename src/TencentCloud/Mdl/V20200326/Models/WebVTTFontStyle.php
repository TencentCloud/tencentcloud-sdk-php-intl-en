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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * WebVTT format configuration.
 *
 * @method string getTextColor() Obtain Text color, 6 hexadecimal characters in RGB (not required #).
 * @method void setTextColor(string $TextColor) Set Text color, 6 hexadecimal characters in RGB (not required #).
 * @method string getBackgroundColor() Obtain Background color, 6 hexadecimal characters in RGB (not required #)
 * @method void setBackgroundColor(string $BackgroundColor) Set Background color, 6 hexadecimal characters in RGB (not required #)
 * @method integer getBackgroundAlpha() Obtain Background opacity parameter. A number from 0 to 100. The default value is 0 (fully transparent).
 * @method void setBackgroundAlpha(integer $BackgroundAlpha) Set Background opacity parameter. A number from 0 to 100. The default value is 0 (fully transparent).
 * @method integer getFontSize() Obtain Font size, in vh (1% of height), default value 0 means auto.
 * @method void setFontSize(integer $FontSize) Set Font size, in vh (1% of height), default value 0 means auto.
 * @method string getLine() Obtain The position of the text box, default value AUTO, can be empty; it represents the percentage of video height and supports integers from 0 to 100.
 * @method void setLine(string $Line) Set The position of the text box, default value AUTO, can be empty; it represents the percentage of video height and supports integers from 0 to 100.
 * @method string getLineAlignment() Obtain The alignment mode of the text box on the Line. Available values: START, CENTER, END. Default: START. Can be blank.
 * @method void setLineAlignment(string $LineAlignment) Set The alignment mode of the text box on the Line. Available values: START, CENTER, END. Default: START. Can be blank.
 * @method string getPosition() Obtain The position of the text box in another direction is a percentage of the video width or height, defaults to AUTO, and can be empty.
 * @method void setPosition(string $Position) Set The position of the text box in another direction is a percentage of the video width or height, defaults to AUTO, and can be empty.
 * @method string getPositionAlignment() Obtain The alignment mode of the text box on Position. Available values: LINE_LEFT, LINE_RIGHT, CENTER, AUTO. Default value: AUTO. Can be empty.
 * @method void setPositionAlignment(string $PositionAlignment) Set The alignment mode of the text box on Position. Available values: LINE_LEFT, LINE_RIGHT, CENTER, AUTO. Default value: AUTO. Can be empty.
 * @method string getCueSize() Obtain The size of the text box, a percentage of video width/height, value (0, 100], default AUTO, can be empty.
 * @method void setCueSize(string $CueSize) Set The size of the text box, a percentage of video width/height, value (0, 100], default AUTO, can be empty.
 * @method string getTextAlignment() Obtain Text alignment mode, available values START, CENTER, END, LEFT, RIGHT; default value CENTER, can be empty.
 * @method void setTextAlignment(string $TextAlignment) Set Text alignment mode, available values START, CENTER, END, LEFT, RIGHT; default value CENTER, can be empty.
 */
class WebVTTFontStyle extends AbstractModel
{
    /**
     * @var string Text color, 6 hexadecimal characters in RGB (not required #).
     */
    public $TextColor;

    /**
     * @var string Background color, 6 hexadecimal characters in RGB (not required #)
     */
    public $BackgroundColor;

    /**
     * @var integer Background opacity parameter. A number from 0 to 100. The default value is 0 (fully transparent).
     */
    public $BackgroundAlpha;

    /**
     * @var integer Font size, in vh (1% of height), default value 0 means auto.
     */
    public $FontSize;

    /**
     * @var string The position of the text box, default value AUTO, can be empty; it represents the percentage of video height and supports integers from 0 to 100.
     */
    public $Line;

    /**
     * @var string The alignment mode of the text box on the Line. Available values: START, CENTER, END. Default: START. Can be blank.
     */
    public $LineAlignment;

    /**
     * @var string The position of the text box in another direction is a percentage of the video width or height, defaults to AUTO, and can be empty.
     */
    public $Position;

    /**
     * @var string The alignment mode of the text box on Position. Available values: LINE_LEFT, LINE_RIGHT, CENTER, AUTO. Default value: AUTO. Can be empty.
     */
    public $PositionAlignment;

    /**
     * @var string The size of the text box, a percentage of video width/height, value (0, 100], default AUTO, can be empty.
     */
    public $CueSize;

    /**
     * @var string Text alignment mode, available values START, CENTER, END, LEFT, RIGHT; default value CENTER, can be empty.
     */
    public $TextAlignment;

    /**
     * @param string $TextColor Text color, 6 hexadecimal characters in RGB (not required #).
     * @param string $BackgroundColor Background color, 6 hexadecimal characters in RGB (not required #)
     * @param integer $BackgroundAlpha Background opacity parameter. A number from 0 to 100. The default value is 0 (fully transparent).
     * @param integer $FontSize Font size, in vh (1% of height), default value 0 means auto.
     * @param string $Line The position of the text box, default value AUTO, can be empty; it represents the percentage of video height and supports integers from 0 to 100.
     * @param string $LineAlignment The alignment mode of the text box on the Line. Available values: START, CENTER, END. Default: START. Can be blank.
     * @param string $Position The position of the text box in another direction is a percentage of the video width or height, defaults to AUTO, and can be empty.
     * @param string $PositionAlignment The alignment mode of the text box on Position. Available values: LINE_LEFT, LINE_RIGHT, CENTER, AUTO. Default value: AUTO. Can be empty.
     * @param string $CueSize The size of the text box, a percentage of video width/height, value (0, 100], default AUTO, can be empty.
     * @param string $TextAlignment Text alignment mode, available values START, CENTER, END, LEFT, RIGHT; default value CENTER, can be empty.
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
        if (array_key_exists("TextColor",$param) and $param["TextColor"] !== null) {
            $this->TextColor = $param["TextColor"];
        }

        if (array_key_exists("BackgroundColor",$param) and $param["BackgroundColor"] !== null) {
            $this->BackgroundColor = $param["BackgroundColor"];
        }

        if (array_key_exists("BackgroundAlpha",$param) and $param["BackgroundAlpha"] !== null) {
            $this->BackgroundAlpha = $param["BackgroundAlpha"];
        }

        if (array_key_exists("FontSize",$param) and $param["FontSize"] !== null) {
            $this->FontSize = $param["FontSize"];
        }

        if (array_key_exists("Line",$param) and $param["Line"] !== null) {
            $this->Line = $param["Line"];
        }

        if (array_key_exists("LineAlignment",$param) and $param["LineAlignment"] !== null) {
            $this->LineAlignment = $param["LineAlignment"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("PositionAlignment",$param) and $param["PositionAlignment"] !== null) {
            $this->PositionAlignment = $param["PositionAlignment"];
        }

        if (array_key_exists("CueSize",$param) and $param["CueSize"] !== null) {
            $this->CueSize = $param["CueSize"];
        }

        if (array_key_exists("TextAlignment",$param) and $param["TextAlignment"] !== null) {
            $this->TextAlignment = $param["TextAlignment"];
        }
    }
}
