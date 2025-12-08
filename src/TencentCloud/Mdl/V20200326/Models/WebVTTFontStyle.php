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
 * @method string getTextColor() Obtain Text color, RGB hexadecimal representation, 6 hexadecimal characters (no # needed).
 * @method void setTextColor(string $TextColor) Set Text color, RGB hexadecimal representation, 6 hexadecimal characters (no # needed).
 * @method string getBackgroundColor() Obtain Background color, RGB hexadecimal representation, 6 hexadecimal characters (no # needed).
 * @method void setBackgroundColor(string $BackgroundColor) Set Background color, RGB hexadecimal representation, 6 hexadecimal characters (no # needed).
 * @method integer getBackgroundAlpha() Obtain Background opacity parameter, a number from 0 to 100, with 0 being the default for full transparency.
 * @method void setBackgroundAlpha(integer $BackgroundAlpha) Set Background opacity parameter, a number from 0 to 100, with 0 being the default for full transparency.
 * @method integer getFontSize() Obtain Font size, in units of vh (1% of height), default value 0 means automatic.
 * @method void setFontSize(integer $FontSize) Set Font size, in units of vh (1% of height), default value 0 means automatic.
 * @method string getLine() Obtain The position of the text box, default value AUTO, can be empty; represents the percentage of video height, supports integers from 0 to 100.
 * @method void setLine(string $Line) Set The position of the text box, default value AUTO, can be empty; represents the percentage of video height, supports integers from 0 to 100.
 * @method string getLineAlignment() Obtain The alignment of the text box on the Line. Optional values: START, CENTER, END. Which can be empty.
 * @method void setLineAlignment(string $LineAlignment) Set The alignment of the text box on the Line. Optional values: START, CENTER, END. Which can be empty.
 * @method string getPosition() Obtain The text box is positioned in another direction as a percentage of the video's width. It defaults to AUTO and can be empty.
 * @method void setPosition(string $Position) Set The text box is positioned in another direction as a percentage of the video's width. It defaults to AUTO and can be empty.
 * @method string getPositionAlignment() Obtain The alignment of the text box on the Position. Optional values are LINE_LEFT, LINE_RIGHT, CENTER, and AUTO. The default value is AUTO, and it can be empty.
 * @method void setPositionAlignment(string $PositionAlignment) Set The alignment of the text box on the Position. Optional values are LINE_LEFT, LINE_RIGHT, CENTER, and AUTO. The default value is AUTO, and it can be empty.
 * @method string getCueSize() Obtain Text box size, a percentage of video width/height, with values (0, 100), default AUTO, can be empty.
 * @method void setCueSize(string $CueSize) Set Text box size, a percentage of video width/height, with values (0, 100), default AUTO, can be empty.
 * @method string getTextAlignment() Obtain Text alignment, with possible values  START, CENTER, END, LEFT, and RIGHT; the default value is CENTER, which can be empty.
 * @method void setTextAlignment(string $TextAlignment) Set Text alignment, with possible values  START, CENTER, END, LEFT, and RIGHT; the default value is CENTER, which can be empty.
 */
class WebVTTFontStyle extends AbstractModel
{
    /**
     * @var string Text color, RGB hexadecimal representation, 6 hexadecimal characters (no # needed).
     */
    public $TextColor;

    /**
     * @var string Background color, RGB hexadecimal representation, 6 hexadecimal characters (no # needed).
     */
    public $BackgroundColor;

    /**
     * @var integer Background opacity parameter, a number from 0 to 100, with 0 being the default for full transparency.
     */
    public $BackgroundAlpha;

    /**
     * @var integer Font size, in units of vh (1% of height), default value 0 means automatic.
     */
    public $FontSize;

    /**
     * @var string The position of the text box, default value AUTO, can be empty; represents the percentage of video height, supports integers from 0 to 100.
     */
    public $Line;

    /**
     * @var string The alignment of the text box on the Line. Optional values: START, CENTER, END. Which can be empty.
     */
    public $LineAlignment;

    /**
     * @var string The text box is positioned in another direction as a percentage of the video's width. It defaults to AUTO and can be empty.
     */
    public $Position;

    /**
     * @var string The alignment of the text box on the Position. Optional values are LINE_LEFT, LINE_RIGHT, CENTER, and AUTO. The default value is AUTO, and it can be empty.
     */
    public $PositionAlignment;

    /**
     * @var string Text box size, a percentage of video width/height, with values (0, 100), default AUTO, can be empty.
     */
    public $CueSize;

    /**
     * @var string Text alignment, with possible values  START, CENTER, END, LEFT, and RIGHT; the default value is CENTER, which can be empty.
     */
    public $TextAlignment;

    /**
     * @param string $TextColor Text color, RGB hexadecimal representation, 6 hexadecimal characters (no # needed).
     * @param string $BackgroundColor Background color, RGB hexadecimal representation, 6 hexadecimal characters (no # needed).
     * @param integer $BackgroundAlpha Background opacity parameter, a number from 0 to 100, with 0 being the default for full transparency.
     * @param integer $FontSize Font size, in units of vh (1% of height), default value 0 means automatic.
     * @param string $Line The position of the text box, default value AUTO, can be empty; represents the percentage of video height, supports integers from 0 to 100.
     * @param string $LineAlignment The alignment of the text box on the Line. Optional values: START, CENTER, END. Which can be empty.
     * @param string $Position The text box is positioned in another direction as a percentage of the video's width. It defaults to AUTO and can be empty.
     * @param string $PositionAlignment The alignment of the text box on the Position. Optional values are LINE_LEFT, LINE_RIGHT, CENTER, and AUTO. The default value is AUTO, and it can be empty.
     * @param string $CueSize Text box size, a percentage of video width/height, with values (0, 100), default AUTO, can be empty.
     * @param string $TextAlignment Text alignment, with possible values  START, CENTER, END, LEFT, and RIGHT; the default value is CENTER, which can be empty.
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
