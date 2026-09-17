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
 * @method string getFontType() Obtain 
 * @method void setFontType(string $FontType) Set 
 * @method string getFontPath() Obtain 
 * @method void setFontPath(string $FontPath) Set 
 * @method integer getFontSize() Obtain 
 * @method void setFontSize(integer $FontSize) Set 
 * @method integer getFontSizeUnit() Obtain 
 * @method void setFontSizeUnit(integer $FontSizeUnit) Set 
 * @method string getFontColor() Obtain 
 * @method void setFontColor(string $FontColor) Set 
 * @method float getFontAlpha() Obtain 
 * @method void setFontAlpha(float $FontAlpha) Set 
 * @method integer getPosX() Obtain 
 * @method void setPosX(integer $PosX) Set 
 * @method integer getPosXUnit() Obtain 
 * @method void setPosXUnit(integer $PosXUnit) Set 
 * @method integer getPosY() Obtain 
 * @method void setPosY(integer $PosY) Set 
 * @method integer getPosYUnit() Obtain 
 * @method void setPosYUnit(integer $PosYUnit) Set 
 * @method MPSSubtitleBoardConfig getSubtitleBoardConfig() Obtain 
 * @method void setSubtitleBoardConfig(MPSSubtitleBoardConfig $SubtitleBoardConfig) Set 
 * @method MPSSubtitleLayoutConfig getSubtitleLayoutConfig() Obtain 
 * @method void setSubtitleLayoutConfig(MPSSubtitleLayoutConfig $SubtitleLayoutConfig) Set 
 * @method MPSSubtitleOutlineConfig getSubtitleOutlineConfig() Obtain 
 * @method void setSubtitleOutlineConfig(MPSSubtitleOutlineConfig $SubtitleOutlineConfig) Set 
 * @method MPSSubtitleShadowConfig getSubtitleShadowConfig() Obtain 
 * @method void setSubtitleShadowConfig(MPSSubtitleShadowConfig $SubtitleShadowConfig) Set 
 * @method integer getSampleWidth() Obtain 
 * @method void setSampleWidth(integer $SampleWidth) Set 
 * @method integer getSampleHeight() Obtain 
 * @method void setSampleHeight(integer $SampleHeight) Set 
 */
class MPSSubtitleEmbedConfig extends AbstractModel
{
    /**
     * @var string 
     */
    public $FontType;

    /**
     * @var string 
     */
    public $FontPath;

    /**
     * @var integer 
     */
    public $FontSize;

    /**
     * @var integer 
     */
    public $FontSizeUnit;

    /**
     * @var string 
     */
    public $FontColor;

    /**
     * @var float 
     */
    public $FontAlpha;

    /**
     * @var integer 
     */
    public $PosX;

    /**
     * @var integer 
     */
    public $PosXUnit;

    /**
     * @var integer 
     */
    public $PosY;

    /**
     * @var integer 
     */
    public $PosYUnit;

    /**
     * @var MPSSubtitleBoardConfig 
     */
    public $SubtitleBoardConfig;

    /**
     * @var MPSSubtitleLayoutConfig 
     */
    public $SubtitleLayoutConfig;

    /**
     * @var MPSSubtitleOutlineConfig 
     */
    public $SubtitleOutlineConfig;

    /**
     * @var MPSSubtitleShadowConfig 
     */
    public $SubtitleShadowConfig;

    /**
     * @var integer 
     */
    public $SampleWidth;

    /**
     * @var integer 
     */
    public $SampleHeight;

    /**
     * @param string $FontType 
     * @param string $FontPath 
     * @param integer $FontSize 
     * @param integer $FontSizeUnit 
     * @param string $FontColor 
     * @param float $FontAlpha 
     * @param integer $PosX 
     * @param integer $PosXUnit 
     * @param integer $PosY 
     * @param integer $PosYUnit 
     * @param MPSSubtitleBoardConfig $SubtitleBoardConfig 
     * @param MPSSubtitleLayoutConfig $SubtitleLayoutConfig 
     * @param MPSSubtitleOutlineConfig $SubtitleOutlineConfig 
     * @param MPSSubtitleShadowConfig $SubtitleShadowConfig 
     * @param integer $SampleWidth 
     * @param integer $SampleHeight 
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
        if (array_key_exists("FontType",$param) and $param["FontType"] !== null) {
            $this->FontType = $param["FontType"];
        }

        if (array_key_exists("FontPath",$param) and $param["FontPath"] !== null) {
            $this->FontPath = $param["FontPath"];
        }

        if (array_key_exists("FontSize",$param) and $param["FontSize"] !== null) {
            $this->FontSize = $param["FontSize"];
        }

        if (array_key_exists("FontSizeUnit",$param) and $param["FontSizeUnit"] !== null) {
            $this->FontSizeUnit = $param["FontSizeUnit"];
        }

        if (array_key_exists("FontColor",$param) and $param["FontColor"] !== null) {
            $this->FontColor = $param["FontColor"];
        }

        if (array_key_exists("FontAlpha",$param) and $param["FontAlpha"] !== null) {
            $this->FontAlpha = $param["FontAlpha"];
        }

        if (array_key_exists("PosX",$param) and $param["PosX"] !== null) {
            $this->PosX = $param["PosX"];
        }

        if (array_key_exists("PosXUnit",$param) and $param["PosXUnit"] !== null) {
            $this->PosXUnit = $param["PosXUnit"];
        }

        if (array_key_exists("PosY",$param) and $param["PosY"] !== null) {
            $this->PosY = $param["PosY"];
        }

        if (array_key_exists("PosYUnit",$param) and $param["PosYUnit"] !== null) {
            $this->PosYUnit = $param["PosYUnit"];
        }

        if (array_key_exists("SubtitleBoardConfig",$param) and $param["SubtitleBoardConfig"] !== null) {
            $this->SubtitleBoardConfig = new MPSSubtitleBoardConfig();
            $this->SubtitleBoardConfig->deserialize($param["SubtitleBoardConfig"]);
        }

        if (array_key_exists("SubtitleLayoutConfig",$param) and $param["SubtitleLayoutConfig"] !== null) {
            $this->SubtitleLayoutConfig = new MPSSubtitleLayoutConfig();
            $this->SubtitleLayoutConfig->deserialize($param["SubtitleLayoutConfig"]);
        }

        if (array_key_exists("SubtitleOutlineConfig",$param) and $param["SubtitleOutlineConfig"] !== null) {
            $this->SubtitleOutlineConfig = new MPSSubtitleOutlineConfig();
            $this->SubtitleOutlineConfig->deserialize($param["SubtitleOutlineConfig"]);
        }

        if (array_key_exists("SubtitleShadowConfig",$param) and $param["SubtitleShadowConfig"] !== null) {
            $this->SubtitleShadowConfig = new MPSSubtitleShadowConfig();
            $this->SubtitleShadowConfig->deserialize($param["SubtitleShadowConfig"]);
        }

        if (array_key_exists("SampleWidth",$param) and $param["SampleWidth"] !== null) {
            $this->SampleWidth = $param["SampleWidth"];
        }

        if (array_key_exists("SampleHeight",$param) and $param["SampleHeight"] !== null) {
            $this->SampleHeight = $param["SampleHeight"];
        }
    }
}
