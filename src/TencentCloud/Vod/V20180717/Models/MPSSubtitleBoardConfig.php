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
 * 
 *
 * @method integer getSubtitleBoardConfigSwitch() Obtain 
 * @method void setSubtitleBoardConfigSwitch(integer $SubtitleBoardConfigSwitch) Set 
 * @method integer getBoardX() Obtain 
 * @method void setBoardX(integer $BoardX) Set 
 * @method integer getBoardXUnit() Obtain 
 * @method void setBoardXUnit(integer $BoardXUnit) Set 
 * @method integer getBoardY() Obtain 
 * @method void setBoardY(integer $BoardY) Set 
 * @method integer getBoardYUnit() Obtain 
 * @method void setBoardYUnit(integer $BoardYUnit) Set 
 * @method integer getBoardWidth() Obtain 
 * @method void setBoardWidth(integer $BoardWidth) Set 
 * @method integer getBoardWidthUnit() Obtain 
 * @method void setBoardWidthUnit(integer $BoardWidthUnit) Set 
 * @method integer getBoardHeight() Obtain 
 * @method void setBoardHeight(integer $BoardHeight) Set 
 * @method integer getBoardHeightUnit() Obtain 
 * @method void setBoardHeightUnit(integer $BoardHeightUnit) Set 
 * @method string getBoardColor() Obtain 
 * @method void setBoardColor(string $BoardColor) Set 
 * @method float getBoardAlpha() Obtain 
 * @method void setBoardAlpha(float $BoardAlpha) Set 
 */
class MPSSubtitleBoardConfig extends AbstractModel
{
    /**
     * @var integer 
     */
    public $SubtitleBoardConfigSwitch;

    /**
     * @var integer 
     */
    public $BoardX;

    /**
     * @var integer 
     */
    public $BoardXUnit;

    /**
     * @var integer 
     */
    public $BoardY;

    /**
     * @var integer 
     */
    public $BoardYUnit;

    /**
     * @var integer 
     */
    public $BoardWidth;

    /**
     * @var integer 
     */
    public $BoardWidthUnit;

    /**
     * @var integer 
     */
    public $BoardHeight;

    /**
     * @var integer 
     */
    public $BoardHeightUnit;

    /**
     * @var string 
     */
    public $BoardColor;

    /**
     * @var float 
     */
    public $BoardAlpha;

    /**
     * @param integer $SubtitleBoardConfigSwitch 
     * @param integer $BoardX 
     * @param integer $BoardXUnit 
     * @param integer $BoardY 
     * @param integer $BoardYUnit 
     * @param integer $BoardWidth 
     * @param integer $BoardWidthUnit 
     * @param integer $BoardHeight 
     * @param integer $BoardHeightUnit 
     * @param string $BoardColor 
     * @param float $BoardAlpha 
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
