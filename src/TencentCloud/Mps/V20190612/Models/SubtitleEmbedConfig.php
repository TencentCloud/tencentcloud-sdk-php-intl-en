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
 * Subtitle suppression module settings
 *
 * @method string getFontType() Obtain <p>Font type, supports:</p><li>hei.ttf: Heiti</li><li>song.ttf: Song Typeface</li><li>kai.ttf (recommended) or simkai.ttf: KaiTi</li><li>msyh.ttf: Microsoft YaHei</li><li>msyhbd.ttf: Microsoft YaHei in bold</li><li>hkjgt.ttf: Hwakangangtai</li><li>dhttx.ttf: Dianheiti Ultra Light</li><li>xqgdzt.ttf: Xique Ancient Dictionary</li><li>qpcyt.ttf: Smart Splice Super Round Body</li><li>arial.ttf: only supports English</li><li>dinalternate.ttf: DIN Alternate Bold</li><li>helveticalt.ttf: Helvetica</li><li>helveticains.ttf: Helvetica Inserat</li><li>trajanpro.ttf: TrajanPro-Bold</li><li>korean.ttf: Korean</li><li>japanese.ttf: Japanese</li><li>thai.ttf: Thai</li><li>roboto.ttf: Roboto</li><li>notosans.ttf: NotoSans</li><li>notosansthai.ttf: Thai NotoSansThai</li><li>sarabun.ttf: Thai Sarabun</li><li>kanit.ttf: Thai Kanit</li><li>charmonman.ttf: Thai Charmonman</li><li>notonaskharabic.ttf: Arabic NotoNaskhArabic</li><li>notosansdevanagari.ttf: India NotoSansDevanagari</li><li>notosanstc.ttf: Cantonese NotoSansTC</li><li>notosanskr.ttf: Korean NotoSansKR</li><li>gothica1.ttf: Korean GothicA1</li><li>nanummyeongjo.ttf: Korean NanumMyeongjo</li><li>notosansjp.ttf: Japanese NotoSansJP</li><li>notoserifjp.ttf: Japanese NotoSerifJP</li><li>shipporimincho.ttf: Japanese ShipporiMincho</li>Default: hei.ttf Heiti.<br>Note:<li>KaiTi is recommended for use with kai.ttf</li><li>FontPath takes precedence when filled</li>
 * @method void setFontType(string $FontType) Set <p>Font type, supports:</p><li>hei.ttf: Heiti</li><li>song.ttf: Song Typeface</li><li>kai.ttf (recommended) or simkai.ttf: KaiTi</li><li>msyh.ttf: Microsoft YaHei</li><li>msyhbd.ttf: Microsoft YaHei in bold</li><li>hkjgt.ttf: Hwakangangtai</li><li>dhttx.ttf: Dianheiti Ultra Light</li><li>xqgdzt.ttf: Xique Ancient Dictionary</li><li>qpcyt.ttf: Smart Splice Super Round Body</li><li>arial.ttf: only supports English</li><li>dinalternate.ttf: DIN Alternate Bold</li><li>helveticalt.ttf: Helvetica</li><li>helveticains.ttf: Helvetica Inserat</li><li>trajanpro.ttf: TrajanPro-Bold</li><li>korean.ttf: Korean</li><li>japanese.ttf: Japanese</li><li>thai.ttf: Thai</li><li>roboto.ttf: Roboto</li><li>notosans.ttf: NotoSans</li><li>notosansthai.ttf: Thai NotoSansThai</li><li>sarabun.ttf: Thai Sarabun</li><li>kanit.ttf: Thai Kanit</li><li>charmonman.ttf: Thai Charmonman</li><li>notonaskharabic.ttf: Arabic NotoNaskhArabic</li><li>notosansdevanagari.ttf: India NotoSansDevanagari</li><li>notosanstc.ttf: Cantonese NotoSansTC</li><li>notosanskr.ttf: Korean NotoSansKR</li><li>gothica1.ttf: Korean GothicA1</li><li>nanummyeongjo.ttf: Korean NanumMyeongjo</li><li>notosansjp.ttf: Japanese NotoSansJP</li><li>notoserifjp.ttf: Japanese NotoSerifJP</li><li>shipporimincho.ttf: Japanese ShipporiMincho</li>Default: hei.ttf Heiti.<br>Note:<li>KaiTi is recommended for use with kai.ttf</li><li>FontPath takes precedence when filled</li>
 * @method string getFontPath() Obtain <p>Custom font file url address, either this or CosInputInfo</p>
 * @method void setFontPath(string $FontPath) Set <p>Custom font file url address, either this or CosInputInfo</p>
 * @method CosInputInfo getCosInputInfo() Obtain <p>Custom font file cos bucket address</p>
 * @method void setCosInputInfo(CosInputInfo $CosInputInfo) Set <p>Custom font file cos bucket address</p>
 * @method integer getFontSize() Obtain <p>Font size. If not specified, the font size of the subtitle file applies. Pixel and percentage formats are supported:</p><ul><li>Pixel: Npx, where N ranges from (0,4096].</li><li>Percentage: N%, where N ranges from (0,100]. For example, 10% means the subtitle font size equals 10% of the source video height.</li></ul><p>If left blank and the subtitle file has no settings, the default is 5% of the source video height.</p>
 * @method void setFontSize(integer $FontSize) Set <p>Font size. If not specified, the font size of the subtitle file applies. Pixel and percentage formats are supported:</p><ul><li>Pixel: Npx, where N ranges from (0,4096].</li><li>Percentage: N%, where N ranges from (0,100]. For example, 10% means the subtitle font size equals 10% of the source video height.</li></ul><p>If left blank and the subtitle file has no settings, the default is 5% of the source video height.</p>
 * @method integer getFontSizeUnit() Obtain <p>FontSize unit, 0 pixel, 1 percentage, defaults to 0, pixel</p>
 * @method void setFontSizeUnit(integer $FontSizeUnit) Set <p>FontSize unit, 0 pixel, 1 percentage, defaults to 0, pixel</p>
 * @method string getFontColor() Obtain <p>Font color. Format: 0xRRGGBB. Default value: 0xFFFFFF (white).</p>
 * @method void setFontColor(string $FontColor) Set <p>Font color. Format: 0xRRGGBB. Default value: 0xFFFFFF (white).</p>
 * @method float getFontAlpha() Obtain <p>Text opacity, value ranges from 0 to 1.</p><li>0: completely transparent</li><li>1: completely opaque</li>Default value: 1.
 * @method void setFontAlpha(float $FontAlpha) Set <p>Text opacity, value ranges from 0 to 1.</p><li>0: completely transparent</li><li>1: completely opaque</li>Default value: 1.
 * @method integer getPosX() Obtain <p>The X-coordinate position of subtitles. Specifying this parameter will ignore the built-in coordinates in the subtitle file. Supports pixel and percentage formats:</p><ul><li>Pixel: Npx, where N ranges from [-4096, 4096].</li><li>Percentage: N%, where N ranges from [-100, 100]; for example, 10% means the X-coordinate of the subtitle equals 10% of the source video width.</li></ul><p>Default value: 0px.<br>Note: The origin of the coordinate axes is at the bottom of the central axis of the source video, and the subtitle reference position is at the bottom of the central axis of the subtitles, as shown in the figure below:<br><img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></p>
 * @method void setPosX(integer $PosX) Set <p>The X-coordinate position of subtitles. Specifying this parameter will ignore the built-in coordinates in the subtitle file. Supports pixel and percentage formats:</p><ul><li>Pixel: Npx, where N ranges from [-4096, 4096].</li><li>Percentage: N%, where N ranges from [-100, 100]; for example, 10% means the X-coordinate of the subtitle equals 10% of the source video width.</li></ul><p>Default value: 0px.<br>Note: The origin of the coordinate axes is at the bottom of the central axis of the source video, and the subtitle reference position is at the bottom of the central axis of the subtitles, as shown in the figure below:<br><img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></p>
 * @method integer getPosXUnit() Obtain <p>PosX unit, 0 pixel, 1 percentage, defaults to 0, pixel</p>
 * @method void setPosXUnit(integer $PosXUnit) Set <p>PosX unit, 0 pixel, 1 percentage, defaults to 0, pixel</p>
 * @method integer getPosY() Obtain <p>Subtitle Y-coordinate position. Specify this parameter to ignore the built-in coordinates in the subtitle file. Supports pixel and percentage formats:</p><ul><li>Pixel: Npx, where N ranges from [0,4096].</li><li>Percentage: N%, where N ranges from [0,100]. For example, 10% means the subtitle Y-coordinate = 10% * source video height.</li></ul><p>Default value: source video height * 4%.<br>Note: The coordinate axis origin is at the bottom of the central axis of the source video, and the subtitle reference point is at the bottom of the central axis of the subtitle. Refer to the figure below:<br><img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></p>
 * @method void setPosY(integer $PosY) Set <p>Subtitle Y-coordinate position. Specify this parameter to ignore the built-in coordinates in the subtitle file. Supports pixel and percentage formats:</p><ul><li>Pixel: Npx, where N ranges from [0,4096].</li><li>Percentage: N%, where N ranges from [0,100]. For example, 10% means the subtitle Y-coordinate = 10% * source video height.</li></ul><p>Default value: source video height * 4%.<br>Note: The coordinate axis origin is at the bottom of the central axis of the source video, and the subtitle reference point is at the bottom of the central axis of the subtitle. Refer to the figure below:<br><img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></p>
 * @method integer getPosYUnit() Obtain <p>PosY measurement unit, 0 pixel, 1 percentage, defaults to 0, pixel</p>
 * @method void setPosYUnit(integer $PosYUnit) Set <p>PosY measurement unit, 0 pixel, 1 percentage, defaults to 0, pixel</p>
 * @method SubtitleBoardConfig getSubtitleBoardConfig() Obtain <p>Background configuration</p>
 * @method void setSubtitleBoardConfig(SubtitleBoardConfig $SubtitleBoardConfig) Set <p>Background configuration</p>
 * @method SubtitleLayoutConfig getSubtitleLayoutConfig() Obtain <p>Column configuration</p>
 * @method void setSubtitleLayoutConfig(SubtitleLayoutConfig $SubtitleLayoutConfig) Set <p>Column configuration</p>
 * @method SubtitleOutlineConfig getSubtitleOutlineConfig() Obtain <p>Text stroke configuration</p>
 * @method void setSubtitleOutlineConfig(SubtitleOutlineConfig $SubtitleOutlineConfig) Set <p>Text stroke configuration</p>
 * @method SubtitleShadowConfig getSubtitleShadowConfig() Obtain <p>Text shadow configuration</p>
 * @method void setSubtitleShadowConfig(SubtitleShadowConfig $SubtitleShadowConfig) Set <p>Text shadow configuration</p>
 * @method integer getSampleWidth() Obtain <p>Width of the source video dimensions, in pixels</p>
 * @method void setSampleWidth(integer $SampleWidth) Set <p>Width of the source video dimensions, in pixels</p>
 * @method integer getSampleHeight() Obtain <p>Height of the source video dimensions, in unit pixel</p>
 * @method void setSampleHeight(integer $SampleHeight) Set <p>Height of the source video dimensions, in unit pixel</p>
 */
class SubtitleEmbedConfig extends AbstractModel
{
    /**
     * @var string <p>Font type, supports:</p><li>hei.ttf: Heiti</li><li>song.ttf: Song Typeface</li><li>kai.ttf (recommended) or simkai.ttf: KaiTi</li><li>msyh.ttf: Microsoft YaHei</li><li>msyhbd.ttf: Microsoft YaHei in bold</li><li>hkjgt.ttf: Hwakangangtai</li><li>dhttx.ttf: Dianheiti Ultra Light</li><li>xqgdzt.ttf: Xique Ancient Dictionary</li><li>qpcyt.ttf: Smart Splice Super Round Body</li><li>arial.ttf: only supports English</li><li>dinalternate.ttf: DIN Alternate Bold</li><li>helveticalt.ttf: Helvetica</li><li>helveticains.ttf: Helvetica Inserat</li><li>trajanpro.ttf: TrajanPro-Bold</li><li>korean.ttf: Korean</li><li>japanese.ttf: Japanese</li><li>thai.ttf: Thai</li><li>roboto.ttf: Roboto</li><li>notosans.ttf: NotoSans</li><li>notosansthai.ttf: Thai NotoSansThai</li><li>sarabun.ttf: Thai Sarabun</li><li>kanit.ttf: Thai Kanit</li><li>charmonman.ttf: Thai Charmonman</li><li>notonaskharabic.ttf: Arabic NotoNaskhArabic</li><li>notosansdevanagari.ttf: India NotoSansDevanagari</li><li>notosanstc.ttf: Cantonese NotoSansTC</li><li>notosanskr.ttf: Korean NotoSansKR</li><li>gothica1.ttf: Korean GothicA1</li><li>nanummyeongjo.ttf: Korean NanumMyeongjo</li><li>notosansjp.ttf: Japanese NotoSansJP</li><li>notoserifjp.ttf: Japanese NotoSerifJP</li><li>shipporimincho.ttf: Japanese ShipporiMincho</li>Default: hei.ttf Heiti.<br>Note:<li>KaiTi is recommended for use with kai.ttf</li><li>FontPath takes precedence when filled</li>
     */
    public $FontType;

    /**
     * @var string <p>Custom font file url address, either this or CosInputInfo</p>
     */
    public $FontPath;

    /**
     * @var CosInputInfo <p>Custom font file cos bucket address</p>
     */
    public $CosInputInfo;

    /**
     * @var integer <p>Font size. If not specified, the font size of the subtitle file applies. Pixel and percentage formats are supported:</p><ul><li>Pixel: Npx, where N ranges from (0,4096].</li><li>Percentage: N%, where N ranges from (0,100]. For example, 10% means the subtitle font size equals 10% of the source video height.</li></ul><p>If left blank and the subtitle file has no settings, the default is 5% of the source video height.</p>
     */
    public $FontSize;

    /**
     * @var integer <p>FontSize unit, 0 pixel, 1 percentage, defaults to 0, pixel</p>
     */
    public $FontSizeUnit;

    /**
     * @var string <p>Font color. Format: 0xRRGGBB. Default value: 0xFFFFFF (white).</p>
     */
    public $FontColor;

    /**
     * @var float <p>Text opacity, value ranges from 0 to 1.</p><li>0: completely transparent</li><li>1: completely opaque</li>Default value: 1.
     */
    public $FontAlpha;

    /**
     * @var integer <p>The X-coordinate position of subtitles. Specifying this parameter will ignore the built-in coordinates in the subtitle file. Supports pixel and percentage formats:</p><ul><li>Pixel: Npx, where N ranges from [-4096, 4096].</li><li>Percentage: N%, where N ranges from [-100, 100]; for example, 10% means the X-coordinate of the subtitle equals 10% of the source video width.</li></ul><p>Default value: 0px.<br>Note: The origin of the coordinate axes is at the bottom of the central axis of the source video, and the subtitle reference position is at the bottom of the central axis of the subtitles, as shown in the figure below:<br><img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></p>
     */
    public $PosX;

    /**
     * @var integer <p>PosX unit, 0 pixel, 1 percentage, defaults to 0, pixel</p>
     */
    public $PosXUnit;

    /**
     * @var integer <p>Subtitle Y-coordinate position. Specify this parameter to ignore the built-in coordinates in the subtitle file. Supports pixel and percentage formats:</p><ul><li>Pixel: Npx, where N ranges from [0,4096].</li><li>Percentage: N%, where N ranges from [0,100]. For example, 10% means the subtitle Y-coordinate = 10% * source video height.</li></ul><p>Default value: source video height * 4%.<br>Note: The coordinate axis origin is at the bottom of the central axis of the source video, and the subtitle reference point is at the bottom of the central axis of the subtitle. Refer to the figure below:<br><img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></p>
     */
    public $PosY;

    /**
     * @var integer <p>PosY measurement unit, 0 pixel, 1 percentage, defaults to 0, pixel</p>
     */
    public $PosYUnit;

    /**
     * @var SubtitleBoardConfig <p>Background configuration</p>
     */
    public $SubtitleBoardConfig;

    /**
     * @var SubtitleLayoutConfig <p>Column configuration</p>
     */
    public $SubtitleLayoutConfig;

    /**
     * @var SubtitleOutlineConfig <p>Text stroke configuration</p>
     */
    public $SubtitleOutlineConfig;

    /**
     * @var SubtitleShadowConfig <p>Text shadow configuration</p>
     */
    public $SubtitleShadowConfig;

    /**
     * @var integer <p>Width of the source video dimensions, in pixels</p>
     */
    public $SampleWidth;

    /**
     * @var integer <p>Height of the source video dimensions, in unit pixel</p>
     */
    public $SampleHeight;

    /**
     * @param string $FontType <p>Font type, supports:</p><li>hei.ttf: Heiti</li><li>song.ttf: Song Typeface</li><li>kai.ttf (recommended) or simkai.ttf: KaiTi</li><li>msyh.ttf: Microsoft YaHei</li><li>msyhbd.ttf: Microsoft YaHei in bold</li><li>hkjgt.ttf: Hwakangangtai</li><li>dhttx.ttf: Dianheiti Ultra Light</li><li>xqgdzt.ttf: Xique Ancient Dictionary</li><li>qpcyt.ttf: Smart Splice Super Round Body</li><li>arial.ttf: only supports English</li><li>dinalternate.ttf: DIN Alternate Bold</li><li>helveticalt.ttf: Helvetica</li><li>helveticains.ttf: Helvetica Inserat</li><li>trajanpro.ttf: TrajanPro-Bold</li><li>korean.ttf: Korean</li><li>japanese.ttf: Japanese</li><li>thai.ttf: Thai</li><li>roboto.ttf: Roboto</li><li>notosans.ttf: NotoSans</li><li>notosansthai.ttf: Thai NotoSansThai</li><li>sarabun.ttf: Thai Sarabun</li><li>kanit.ttf: Thai Kanit</li><li>charmonman.ttf: Thai Charmonman</li><li>notonaskharabic.ttf: Arabic NotoNaskhArabic</li><li>notosansdevanagari.ttf: India NotoSansDevanagari</li><li>notosanstc.ttf: Cantonese NotoSansTC</li><li>notosanskr.ttf: Korean NotoSansKR</li><li>gothica1.ttf: Korean GothicA1</li><li>nanummyeongjo.ttf: Korean NanumMyeongjo</li><li>notosansjp.ttf: Japanese NotoSansJP</li><li>notoserifjp.ttf: Japanese NotoSerifJP</li><li>shipporimincho.ttf: Japanese ShipporiMincho</li>Default: hei.ttf Heiti.<br>Note:<li>KaiTi is recommended for use with kai.ttf</li><li>FontPath takes precedence when filled</li>
     * @param string $FontPath <p>Custom font file url address, either this or CosInputInfo</p>
     * @param CosInputInfo $CosInputInfo <p>Custom font file cos bucket address</p>
     * @param integer $FontSize <p>Font size. If not specified, the font size of the subtitle file applies. Pixel and percentage formats are supported:</p><ul><li>Pixel: Npx, where N ranges from (0,4096].</li><li>Percentage: N%, where N ranges from (0,100]. For example, 10% means the subtitle font size equals 10% of the source video height.</li></ul><p>If left blank and the subtitle file has no settings, the default is 5% of the source video height.</p>
     * @param integer $FontSizeUnit <p>FontSize unit, 0 pixel, 1 percentage, defaults to 0, pixel</p>
     * @param string $FontColor <p>Font color. Format: 0xRRGGBB. Default value: 0xFFFFFF (white).</p>
     * @param float $FontAlpha <p>Text opacity, value ranges from 0 to 1.</p><li>0: completely transparent</li><li>1: completely opaque</li>Default value: 1.
     * @param integer $PosX <p>The X-coordinate position of subtitles. Specifying this parameter will ignore the built-in coordinates in the subtitle file. Supports pixel and percentage formats:</p><ul><li>Pixel: Npx, where N ranges from [-4096, 4096].</li><li>Percentage: N%, where N ranges from [-100, 100]; for example, 10% means the X-coordinate of the subtitle equals 10% of the source video width.</li></ul><p>Default value: 0px.<br>Note: The origin of the coordinate axes is at the bottom of the central axis of the source video, and the subtitle reference position is at the bottom of the central axis of the subtitles, as shown in the figure below:<br><img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></p>
     * @param integer $PosXUnit <p>PosX unit, 0 pixel, 1 percentage, defaults to 0, pixel</p>
     * @param integer $PosY <p>Subtitle Y-coordinate position. Specify this parameter to ignore the built-in coordinates in the subtitle file. Supports pixel and percentage formats:</p><ul><li>Pixel: Npx, where N ranges from [0,4096].</li><li>Percentage: N%, where N ranges from [0,100]. For example, 10% means the subtitle Y-coordinate = 10% * source video height.</li></ul><p>Default value: source video height * 4%.<br>Note: The coordinate axis origin is at the bottom of the central axis of the source video, and the subtitle reference point is at the bottom of the central axis of the subtitle. Refer to the figure below:<br><img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></p>
     * @param integer $PosYUnit <p>PosY measurement unit, 0 pixel, 1 percentage, defaults to 0, pixel</p>
     * @param SubtitleBoardConfig $SubtitleBoardConfig <p>Background configuration</p>
     * @param SubtitleLayoutConfig $SubtitleLayoutConfig <p>Column configuration</p>
     * @param SubtitleOutlineConfig $SubtitleOutlineConfig <p>Text stroke configuration</p>
     * @param SubtitleShadowConfig $SubtitleShadowConfig <p>Text shadow configuration</p>
     * @param integer $SampleWidth <p>Width of the source video dimensions, in pixels</p>
     * @param integer $SampleHeight <p>Height of the source video dimensions, in unit pixel</p>
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

        if (array_key_exists("CosInputInfo",$param) and $param["CosInputInfo"] !== null) {
            $this->CosInputInfo = new CosInputInfo();
            $this->CosInputInfo->deserialize($param["CosInputInfo"]);
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
            $this->SubtitleBoardConfig = new SubtitleBoardConfig();
            $this->SubtitleBoardConfig->deserialize($param["SubtitleBoardConfig"]);
        }

        if (array_key_exists("SubtitleLayoutConfig",$param) and $param["SubtitleLayoutConfig"] !== null) {
            $this->SubtitleLayoutConfig = new SubtitleLayoutConfig();
            $this->SubtitleLayoutConfig->deserialize($param["SubtitleLayoutConfig"]);
        }

        if (array_key_exists("SubtitleOutlineConfig",$param) and $param["SubtitleOutlineConfig"] !== null) {
            $this->SubtitleOutlineConfig = new SubtitleOutlineConfig();
            $this->SubtitleOutlineConfig->deserialize($param["SubtitleOutlineConfig"]);
        }

        if (array_key_exists("SubtitleShadowConfig",$param) and $param["SubtitleShadowConfig"] !== null) {
            $this->SubtitleShadowConfig = new SubtitleShadowConfig();
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
