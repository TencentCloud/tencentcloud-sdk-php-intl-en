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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Media quality inspection template details.
 *
 * @method integer getDefinition() Obtain Media quality inspection template ID.
 * @method void setDefinition(integer $Definition) Set Media quality inspection template ID.
 * @method string getType() Obtain Template Type, available options: <li>Preset: Preset Template;</li> <li>Custom: User Custom Template.</li>
 * @method void setType(string $Type) Set Template Type, available options: <li>Preset: Preset Template;</li> <li>Custom: User Custom Template.</li>
 * @method string getName() Obtain Media quality inspection template name.
 * @method void setName(string $Name) Set Media quality inspection template name.
 * @method string getComment() Obtain Template description. 
 * @method void setComment(string $Comment) Set Template description. 
 * @method float getScreenshotInterval() Obtain Frame interval, unit in seconds.
 * @method void setScreenshotInterval(float $ScreenshotInterval) Set Frame interval, unit in seconds.
 * @method JitterConfigureInfo getJitterConfigure() Obtain Control parameters for detecting video jitter and ghosting.
 * @method void setJitterConfigure(JitterConfigureInfo $JitterConfigure) Set Control parameters for detecting video jitter and ghosting.
 * @method BlurConfigureInfo getBlurConfigure() Obtain Control parameters for detecting video blur.
 * @method void setBlurConfigure(BlurConfigureInfo $BlurConfigure) Set Control parameters for detecting video blur.
 * @method AbnormalLightingConfigureInfo getAbnormalLightingConfigure() Obtain Control parameters for detecting low brightness and overexposure of video.
 * @method void setAbnormalLightingConfigure(AbnormalLightingConfigureInfo $AbnormalLightingConfigure) Set Control parameters for detecting low brightness and overexposure of video.
 * @method CrashScreenConfigureInfo getCrashScreenConfigure() Obtain Control parameters for detecting video crash.
 * @method void setCrashScreenConfigure(CrashScreenConfigureInfo $CrashScreenConfigure) Set Control parameters for detecting video crash.
 * @method BlackWhiteEdgeConfigureInfo getBlackWhiteEdgeConfigure() Obtain Control parameters for detecting video black edges, white edges, black screen, and white screen.
 * @method void setBlackWhiteEdgeConfigure(BlackWhiteEdgeConfigureInfo $BlackWhiteEdgeConfigure) Set Control parameters for detecting video black edges, white edges, black screen, and white screen.
 * @method NoiseConfigureInfo getNoiseConfigure() Obtain Control parameters for detecting video noise.
 * @method void setNoiseConfigure(NoiseConfigureInfo $NoiseConfigure) Set Control parameters for detecting video noise.
 * @method MosaicConfigureInfo getMosaicConfigure() Obtain Control parameters for detecting video mosaic.
 * @method void setMosaicConfigure(MosaicConfigureInfo $MosaicConfigure) Set Control parameters for detecting video mosaic.
 * @method QRCodeConfigureInfo getQRCodeConfigure() Obtain Control parameters for QR code detection in video.
 * @method void setQRCodeConfigure(QRCodeConfigureInfo $QRCodeConfigure) Set Control parameters for QR code detection in video.
 * @method QualityEvaluationConfigureInfo getQualityEvaluationConfigure() Obtain Control parameters for video quality evaluation.
 * @method void setQualityEvaluationConfigure(QualityEvaluationConfigureInfo $QualityEvaluationConfigure) Set Control parameters for video quality evaluation.
 * @method VoiceConfigureInfo getVoiceConfigure() Obtain Control parameters for audio (mutes, bass, blast sound).
 * @method void setVoiceConfigure(VoiceConfigureInfo $VoiceConfigure) Set Control parameters for audio (mutes, bass, blast sound).
 * @method string getCreateTime() Obtain Template Creation Time, using [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
 * @method void setCreateTime(string $CreateTime) Set Template Creation Time, using [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
 * @method string getUpdateTime() Obtain Template Modification time, using [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
 * @method void setUpdateTime(string $UpdateTime) Set Template Modification time, using [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
 */
class QualityInspectTemplateItem extends AbstractModel
{
    /**
     * @var integer Media quality inspection template ID.
     */
    public $Definition;

    /**
     * @var string Template Type, available options: <li>Preset: Preset Template;</li> <li>Custom: User Custom Template.</li>
     */
    public $Type;

    /**
     * @var string Media quality inspection template name.
     */
    public $Name;

    /**
     * @var string Template description. 
     */
    public $Comment;

    /**
     * @var float Frame interval, unit in seconds.
     */
    public $ScreenshotInterval;

    /**
     * @var JitterConfigureInfo Control parameters for detecting video jitter and ghosting.
     */
    public $JitterConfigure;

    /**
     * @var BlurConfigureInfo Control parameters for detecting video blur.
     */
    public $BlurConfigure;

    /**
     * @var AbnormalLightingConfigureInfo Control parameters for detecting low brightness and overexposure of video.
     */
    public $AbnormalLightingConfigure;

    /**
     * @var CrashScreenConfigureInfo Control parameters for detecting video crash.
     */
    public $CrashScreenConfigure;

    /**
     * @var BlackWhiteEdgeConfigureInfo Control parameters for detecting video black edges, white edges, black screen, and white screen.
     */
    public $BlackWhiteEdgeConfigure;

    /**
     * @var NoiseConfigureInfo Control parameters for detecting video noise.
     */
    public $NoiseConfigure;

    /**
     * @var MosaicConfigureInfo Control parameters for detecting video mosaic.
     */
    public $MosaicConfigure;

    /**
     * @var QRCodeConfigureInfo Control parameters for QR code detection in video.
     */
    public $QRCodeConfigure;

    /**
     * @var QualityEvaluationConfigureInfo Control parameters for video quality evaluation.
     */
    public $QualityEvaluationConfigure;

    /**
     * @var VoiceConfigureInfo Control parameters for audio (mutes, bass, blast sound).
     */
    public $VoiceConfigure;

    /**
     * @var string Template Creation Time, using [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
     */
    public $CreateTime;

    /**
     * @var string Template Modification time, using [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
     */
    public $UpdateTime;

    /**
     * @param integer $Definition Media quality inspection template ID.
     * @param string $Type Template Type, available options: <li>Preset: Preset Template;</li> <li>Custom: User Custom Template.</li>
     * @param string $Name Media quality inspection template name.
     * @param string $Comment Template description. 
     * @param float $ScreenshotInterval Frame interval, unit in seconds.
     * @param JitterConfigureInfo $JitterConfigure Control parameters for detecting video jitter and ghosting.
     * @param BlurConfigureInfo $BlurConfigure Control parameters for detecting video blur.
     * @param AbnormalLightingConfigureInfo $AbnormalLightingConfigure Control parameters for detecting low brightness and overexposure of video.
     * @param CrashScreenConfigureInfo $CrashScreenConfigure Control parameters for detecting video crash.
     * @param BlackWhiteEdgeConfigureInfo $BlackWhiteEdgeConfigure Control parameters for detecting video black edges, white edges, black screen, and white screen.
     * @param NoiseConfigureInfo $NoiseConfigure Control parameters for detecting video noise.
     * @param MosaicConfigureInfo $MosaicConfigure Control parameters for detecting video mosaic.
     * @param QRCodeConfigureInfo $QRCodeConfigure Control parameters for QR code detection in video.
     * @param QualityEvaluationConfigureInfo $QualityEvaluationConfigure Control parameters for video quality evaluation.
     * @param VoiceConfigureInfo $VoiceConfigure Control parameters for audio (mutes, bass, blast sound).
     * @param string $CreateTime Template Creation Time, using [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
     * @param string $UpdateTime Template Modification time, using [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("ScreenshotInterval",$param) and $param["ScreenshotInterval"] !== null) {
            $this->ScreenshotInterval = $param["ScreenshotInterval"];
        }

        if (array_key_exists("JitterConfigure",$param) and $param["JitterConfigure"] !== null) {
            $this->JitterConfigure = new JitterConfigureInfo();
            $this->JitterConfigure->deserialize($param["JitterConfigure"]);
        }

        if (array_key_exists("BlurConfigure",$param) and $param["BlurConfigure"] !== null) {
            $this->BlurConfigure = new BlurConfigureInfo();
            $this->BlurConfigure->deserialize($param["BlurConfigure"]);
        }

        if (array_key_exists("AbnormalLightingConfigure",$param) and $param["AbnormalLightingConfigure"] !== null) {
            $this->AbnormalLightingConfigure = new AbnormalLightingConfigureInfo();
            $this->AbnormalLightingConfigure->deserialize($param["AbnormalLightingConfigure"]);
        }

        if (array_key_exists("CrashScreenConfigure",$param) and $param["CrashScreenConfigure"] !== null) {
            $this->CrashScreenConfigure = new CrashScreenConfigureInfo();
            $this->CrashScreenConfigure->deserialize($param["CrashScreenConfigure"]);
        }

        if (array_key_exists("BlackWhiteEdgeConfigure",$param) and $param["BlackWhiteEdgeConfigure"] !== null) {
            $this->BlackWhiteEdgeConfigure = new BlackWhiteEdgeConfigureInfo();
            $this->BlackWhiteEdgeConfigure->deserialize($param["BlackWhiteEdgeConfigure"]);
        }

        if (array_key_exists("NoiseConfigure",$param) and $param["NoiseConfigure"] !== null) {
            $this->NoiseConfigure = new NoiseConfigureInfo();
            $this->NoiseConfigure->deserialize($param["NoiseConfigure"]);
        }

        if (array_key_exists("MosaicConfigure",$param) and $param["MosaicConfigure"] !== null) {
            $this->MosaicConfigure = new MosaicConfigureInfo();
            $this->MosaicConfigure->deserialize($param["MosaicConfigure"]);
        }

        if (array_key_exists("QRCodeConfigure",$param) and $param["QRCodeConfigure"] !== null) {
            $this->QRCodeConfigure = new QRCodeConfigureInfo();
            $this->QRCodeConfigure->deserialize($param["QRCodeConfigure"]);
        }

        if (array_key_exists("QualityEvaluationConfigure",$param) and $param["QualityEvaluationConfigure"] !== null) {
            $this->QualityEvaluationConfigure = new QualityEvaluationConfigureInfo();
            $this->QualityEvaluationConfigure->deserialize($param["QualityEvaluationConfigure"]);
        }

        if (array_key_exists("VoiceConfigure",$param) and $param["VoiceConfigure"] !== null) {
            $this->VoiceConfigure = new VoiceConfigureInfo();
            $this->VoiceConfigure->deserialize($param["VoiceConfigure"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
