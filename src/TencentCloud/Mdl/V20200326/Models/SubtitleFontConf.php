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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Subtitle style configuration.
 *
 * @method integer getLineSpacing() Obtain Line spacing.
 * @method void setLineSpacing(integer $LineSpacing) Set Line spacing.
 * @method integer getMargins() Obtain Margins.
 * @method void setMargins(integer $Margins) Set Margins.
 * @method integer getLines() Obtain Rows.
 * @method void setLines(integer $Lines) Set Rows.
 * @method integer getCharactersPerLine() Obtain Number of characters per line.
 * @method void setCharactersPerLine(integer $CharactersPerLine) Set Number of characters per line.
 * @method string getSourceTextFont() Obtain Original font Helvetica: simhei.ttf Song Dynasty: simsun.ttc Dynacw Diamond Black: hkjgh.ttf Helvetica font: helvetica.ttf; Need to be set in Source or Source+Target mode
 * @method void setSourceTextFont(string $SourceTextFont) Set Original font Helvetica: simhei.ttf Song Dynasty: simsun.ttc Dynacw Diamond Black: hkjgh.ttf Helvetica font: helvetica.ttf; Need to be set in Source or Source+Target mode
 * @method string getTextColor() Obtain Font color is represented by 6 RGB hexadecimal characters.
 * @method void setTextColor(string $TextColor) Set Font color is represented by 6 RGB hexadecimal characters.
 * @method string getBackgroundColor() Obtain The background color is represented by 6 RGB hexadecimal characters.
 * @method void setBackgroundColor(string $BackgroundColor) Set The background color is represented by 6 RGB hexadecimal characters.
 * @method integer getBackgroundAlpha() Obtain Background transparency, a number from 0-100.
 * @method void setBackgroundAlpha(integer $BackgroundAlpha) Set Background transparency, a number from 0-100.
 * @method string getPreviewContent() Obtain Preview copy.
 * @method void setPreviewContent(string $PreviewContent) Set Preview copy.
 * @method integer getPreviewWindowHeight() Obtain Preview window height.
 * @method void setPreviewWindowHeight(integer $PreviewWindowHeight) Set Preview window height.
 * @method integer getPreviewWindowWidth() Obtain Preview window width.
 * @method void setPreviewWindowWidth(integer $PreviewWindowWidth) Set Preview window width.
 * @method string getTranslatedTextFont() Obtain Translation language font, the enumeration value is the same as Font, the fonts supported by the language need to be distinguished; TextColor needs to be set in Target or Source+Target mode
 * @method void setTranslatedTextFont(string $TranslatedTextFont) Set Translation language font, the enumeration value is the same as Font, the fonts supported by the language need to be distinguished; TextColor needs to be set in Target or Source+Target mode
 */
class SubtitleFontConf extends AbstractModel
{
    /**
     * @var integer Line spacing.
     */
    public $LineSpacing;

    /**
     * @var integer Margins.
     */
    public $Margins;

    /**
     * @var integer Rows.
     */
    public $Lines;

    /**
     * @var integer Number of characters per line.
     */
    public $CharactersPerLine;

    /**
     * @var string Original font Helvetica: simhei.ttf Song Dynasty: simsun.ttc Dynacw Diamond Black: hkjgh.ttf Helvetica font: helvetica.ttf; Need to be set in Source or Source+Target mode
     */
    public $SourceTextFont;

    /**
     * @var string Font color is represented by 6 RGB hexadecimal characters.
     */
    public $TextColor;

    /**
     * @var string The background color is represented by 6 RGB hexadecimal characters.
     */
    public $BackgroundColor;

    /**
     * @var integer Background transparency, a number from 0-100.
     */
    public $BackgroundAlpha;

    /**
     * @var string Preview copy.
     */
    public $PreviewContent;

    /**
     * @var integer Preview window height.
     */
    public $PreviewWindowHeight;

    /**
     * @var integer Preview window width.
     */
    public $PreviewWindowWidth;

    /**
     * @var string Translation language font, the enumeration value is the same as Font, the fonts supported by the language need to be distinguished; TextColor needs to be set in Target or Source+Target mode
     */
    public $TranslatedTextFont;

    /**
     * @param integer $LineSpacing Line spacing.
     * @param integer $Margins Margins.
     * @param integer $Lines Rows.
     * @param integer $CharactersPerLine Number of characters per line.
     * @param string $SourceTextFont Original font Helvetica: simhei.ttf Song Dynasty: simsun.ttc Dynacw Diamond Black: hkjgh.ttf Helvetica font: helvetica.ttf; Need to be set in Source or Source+Target mode
     * @param string $TextColor Font color is represented by 6 RGB hexadecimal characters.
     * @param string $BackgroundColor The background color is represented by 6 RGB hexadecimal characters.
     * @param integer $BackgroundAlpha Background transparency, a number from 0-100.
     * @param string $PreviewContent Preview copy.
     * @param integer $PreviewWindowHeight Preview window height.
     * @param integer $PreviewWindowWidth Preview window width.
     * @param string $TranslatedTextFont Translation language font, the enumeration value is the same as Font, the fonts supported by the language need to be distinguished; TextColor needs to be set in Target or Source+Target mode
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
        if (array_key_exists("LineSpacing",$param) and $param["LineSpacing"] !== null) {
            $this->LineSpacing = $param["LineSpacing"];
        }

        if (array_key_exists("Margins",$param) and $param["Margins"] !== null) {
            $this->Margins = $param["Margins"];
        }

        if (array_key_exists("Lines",$param) and $param["Lines"] !== null) {
            $this->Lines = $param["Lines"];
        }

        if (array_key_exists("CharactersPerLine",$param) and $param["CharactersPerLine"] !== null) {
            $this->CharactersPerLine = $param["CharactersPerLine"];
        }

        if (array_key_exists("SourceTextFont",$param) and $param["SourceTextFont"] !== null) {
            $this->SourceTextFont = $param["SourceTextFont"];
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

        if (array_key_exists("PreviewContent",$param) and $param["PreviewContent"] !== null) {
            $this->PreviewContent = $param["PreviewContent"];
        }

        if (array_key_exists("PreviewWindowHeight",$param) and $param["PreviewWindowHeight"] !== null) {
            $this->PreviewWindowHeight = $param["PreviewWindowHeight"];
        }

        if (array_key_exists("PreviewWindowWidth",$param) and $param["PreviewWindowWidth"] !== null) {
            $this->PreviewWindowWidth = $param["PreviewWindowWidth"];
        }

        if (array_key_exists("TranslatedTextFont",$param) and $param["TranslatedTextFont"] !== null) {
            $this->TranslatedTextFont = $param["TranslatedTextFont"];
        }
    }
}
