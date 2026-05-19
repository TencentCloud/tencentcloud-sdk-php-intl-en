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
 * Media quality inspection template details.
 *
 * @method integer getDefinition() Obtain Template ID.
 * @method void setDefinition(integer $Definition) Set Template ID.
 * @method string getType() Obtain Template type. Available values:
<li>Preset: system preset template;</li>
<li>Custom: User-defined template.</li>
 * @method void setType(string $Type) Set Template type. Available values:
<li>Preset: system preset template;</li>
<li>Custom: User-defined template.</li>
 * @method string getName() Obtain Template Name
 * @method void setName(string $Name) Set Template Name
 * @method string getComment() Obtain Template description.
 * @method void setComment(string $Comment) Set Template description.
 * @method float getScreenshotInterval() Obtain Frame interception interval in seconds.
 * @method void setScreenshotInterval(float $ScreenshotInterval) Set Frame interception interval in seconds.
 * @method JitterConfigureInfo getJitterConfigure() Obtain Control parameters for video frame jitter and ghosting detection.
 * @method void setJitterConfigure(JitterConfigureInfo $JitterConfigure) Set Control parameters for video frame jitter and ghosting detection.
 * @method BlurConfigureInfo getBlurConfigure() Obtain Control parameters for video frame blur detection.
 * @method void setBlurConfigure(BlurConfigureInfo $BlurConfigure) Set Control parameters for video frame blur detection.
 * @method AbnormalLightingConfigureInfo getAbnormalLightingConfigure() Obtain Control parameters for low-light and overexposure detection in video frames.
 * @method void setAbnormalLightingConfigure(AbnormalLightingConfigureInfo $AbnormalLightingConfigure) Set Control parameters for low-light and overexposure detection in video frames.
 * @method CrashScreenConfigureInfo getCrashScreenConfigure() Obtain Control parameters for screen glitch detection in video footage.
 * @method void setCrashScreenConfigure(CrashScreenConfigureInfo $CrashScreenConfigure) Set Control parameters for screen glitch detection in video footage.
 * @method BlackWhiteEdgeConfigureInfo getBlackWhiteEdgeConfigure() Obtain Control parameters for video picture black edge, white edge, black screen, and white screen detection.
 * @method void setBlackWhiteEdgeConfigure(BlackWhiteEdgeConfigureInfo $BlackWhiteEdgeConfigure) Set Control parameters for video picture black edge, white edge, black screen, and white screen detection.
 * @method NoiseConfigureInfo getNoiseConfigure() Obtain Control parameters for video frame noise detection.
 * @method void setNoiseConfigure(NoiseConfigureInfo $NoiseConfigure) Set Control parameters for video frame noise detection.
 * @method MosaicConfigureInfo getMosaicConfigure() Obtain Control parameters for video frame mosaic detection.
 * @method void setMosaicConfigure(MosaicConfigureInfo $MosaicConfigure) Set Control parameters for video frame mosaic detection.
 * @method QRCodeConfigureInfo getQRCodeConfigure() Obtain Control parameters for video frame QR code detection.
 * @method void setQRCodeConfigure(QRCodeConfigureInfo $QRCodeConfigure) Set Control parameters for video frame QR code detection.
 * @method QualityEvaluationConfigureInfo getQualityEvaluationConfigure() Obtain Control parameters for video frame quality evaluation.
 * @method void setQualityEvaluationConfigure(QualityEvaluationConfigureInfo $QualityEvaluationConfigure) Set Control parameters for video frame quality evaluation.
 * @method VoiceConfigureInfo getVoiceConfigure() Obtain Control parameters for audio (mute, bass, clipping) detection.
 * @method void setVoiceConfigure(VoiceConfigureInfo $VoiceConfigure) Set Control parameters for audio (mute, bass, clipping) detection.
 * @method string getCreateTime() Obtain Template creation time. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setCreateTime(string $CreateTime) Set Template creation time. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getUpdateTime() Obtain Template last modified time, use [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setUpdateTime(string $UpdateTime) Set Template last modified time, use [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class QualityInspectTemplateItem extends AbstractModel
{
    /**
     * @var integer Template ID.
     */
    public $Definition;

    /**
     * @var string Template type. Available values:
<li>Preset: system preset template;</li>
<li>Custom: User-defined template.</li>
     */
    public $Type;

    /**
     * @var string Template Name
     */
    public $Name;

    /**
     * @var string Template description.
     */
    public $Comment;

    /**
     * @var float Frame interception interval in seconds.
     */
    public $ScreenshotInterval;

    /**
     * @var JitterConfigureInfo Control parameters for video frame jitter and ghosting detection.
     */
    public $JitterConfigure;

    /**
     * @var BlurConfigureInfo Control parameters for video frame blur detection.
     */
    public $BlurConfigure;

    /**
     * @var AbnormalLightingConfigureInfo Control parameters for low-light and overexposure detection in video frames.
     */
    public $AbnormalLightingConfigure;

    /**
     * @var CrashScreenConfigureInfo Control parameters for screen glitch detection in video footage.
     */
    public $CrashScreenConfigure;

    /**
     * @var BlackWhiteEdgeConfigureInfo Control parameters for video picture black edge, white edge, black screen, and white screen detection.
     */
    public $BlackWhiteEdgeConfigure;

    /**
     * @var NoiseConfigureInfo Control parameters for video frame noise detection.
     */
    public $NoiseConfigure;

    /**
     * @var MosaicConfigureInfo Control parameters for video frame mosaic detection.
     */
    public $MosaicConfigure;

    /**
     * @var QRCodeConfigureInfo Control parameters for video frame QR code detection.
     */
    public $QRCodeConfigure;

    /**
     * @var QualityEvaluationConfigureInfo Control parameters for video frame quality evaluation.
     */
    public $QualityEvaluationConfigure;

    /**
     * @var VoiceConfigureInfo Control parameters for audio (mute, bass, clipping) detection.
     */
    public $VoiceConfigure;

    /**
     * @var string Template creation time. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $CreateTime;

    /**
     * @var string Template last modified time, use [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $UpdateTime;

    /**
     * @param integer $Definition Template ID.
     * @param string $Type Template type. Available values:
<li>Preset: system preset template;</li>
<li>Custom: User-defined template.</li>
     * @param string $Name Template Name
     * @param string $Comment Template description.
     * @param float $ScreenshotInterval Frame interception interval in seconds.
     * @param JitterConfigureInfo $JitterConfigure Control parameters for video frame jitter and ghosting detection.
     * @param BlurConfigureInfo $BlurConfigure Control parameters for video frame blur detection.
     * @param AbnormalLightingConfigureInfo $AbnormalLightingConfigure Control parameters for low-light and overexposure detection in video frames.
     * @param CrashScreenConfigureInfo $CrashScreenConfigure Control parameters for screen glitch detection in video footage.
     * @param BlackWhiteEdgeConfigureInfo $BlackWhiteEdgeConfigure Control parameters for video picture black edge, white edge, black screen, and white screen detection.
     * @param NoiseConfigureInfo $NoiseConfigure Control parameters for video frame noise detection.
     * @param MosaicConfigureInfo $MosaicConfigure Control parameters for video frame mosaic detection.
     * @param QRCodeConfigureInfo $QRCodeConfigure Control parameters for video frame QR code detection.
     * @param QualityEvaluationConfigureInfo $QualityEvaluationConfigure Control parameters for video frame quality evaluation.
     * @param VoiceConfigureInfo $VoiceConfigure Control parameters for audio (mute, bass, clipping) detection.
     * @param string $CreateTime Template creation time. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $UpdateTime Template last modified time, use [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
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
