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
 * ModifyQualityInspectTemplate request structure.
 *
 * @method integer getDefinition() Obtain Template ID.
 * @method void setDefinition(integer $Definition) Set Template ID.
 * @method integer getSubAppId() Obtain <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getName() Obtain Template name. The length cannot exceed 64 characters.
 * @method void setName(string $Name) Set Template name. The length cannot exceed 64 characters.
 * @method string getComment() Obtain Template description, with a length limit of 256 characters.
 * @method void setComment(string $Comment) Set Template description, with a length limit of 256 characters.
 * @method float getScreenshotInterval() Obtain Frame interception interval, unit: seconds, minimum value 1.
 * @method void setScreenshotInterval(float $ScreenshotInterval) Set Frame interception interval, unit: seconds, minimum value 1.
 * @method JitterConfigureInfoForUpdate getJitterConfigure() Obtain Control parameters for video frame jitter and ghosting detection.
 * @method void setJitterConfigure(JitterConfigureInfoForUpdate $JitterConfigure) Set Control parameters for video frame jitter and ghosting detection.
 * @method BlurConfigureInfoForUpdate getBlurConfigure() Obtain Control parameters for video frame blur detection.
 * @method void setBlurConfigure(BlurConfigureInfoForUpdate $BlurConfigure) Set Control parameters for video frame blur detection.
 * @method AbnormalLightingConfigureInfoForUpdate getAbnormalLightingConfigure() Obtain Control parameters for low-light and overexposure detection in video frames.
 * @method void setAbnormalLightingConfigure(AbnormalLightingConfigureInfoForUpdate $AbnormalLightingConfigure) Set Control parameters for low-light and overexposure detection in video frames.
 * @method CrashScreenConfigureInfoForUpdate getCrashScreenConfigure() Obtain Control parameters for screen glitch detection in video footage.
 * @method void setCrashScreenConfigure(CrashScreenConfigureInfoForUpdate $CrashScreenConfigure) Set Control parameters for screen glitch detection in video footage.
 * @method BlackWhiteEdgeConfigureInfoForUpdate getBlackWhiteEdgeConfigure() Obtain Control parameters for video picture black edge, white edge, black screen, and white screen detection.
 * @method void setBlackWhiteEdgeConfigure(BlackWhiteEdgeConfigureInfoForUpdate $BlackWhiteEdgeConfigure) Set Control parameters for video picture black edge, white edge, black screen, and white screen detection.
 * @method NoiseConfigureInfoForUpdate getNoiseConfigure() Obtain Control parameters for video frame noise detection.
 * @method void setNoiseConfigure(NoiseConfigureInfoForUpdate $NoiseConfigure) Set Control parameters for video frame noise detection.
 * @method MosaicConfigureInfoForUpdate getMosaicConfigure() Obtain Control parameters for video frame mosaic detection.
 * @method void setMosaicConfigure(MosaicConfigureInfoForUpdate $MosaicConfigure) Set Control parameters for video frame mosaic detection.
 * @method QRCodeConfigureInfoForUpdate getQRCodeConfigure() Obtain Control parameters for video frame QR code detection.
 * @method void setQRCodeConfigure(QRCodeConfigureInfoForUpdate $QRCodeConfigure) Set Control parameters for video frame QR code detection.
 * @method VoiceConfigureInfoForUpdate getVoiceConfigure() Obtain Audio (mute, bass, clipping) detection control parameters.
 * @method void setVoiceConfigure(VoiceConfigureInfoForUpdate $VoiceConfigure) Set Audio (mute, bass, clipping) detection control parameters.
 * @method QualityEvaluationConfigureInfoForUpdate getQualityEvaluationConfigure() Obtain Control parameters for video frame quality evaluation.
 * @method void setQualityEvaluationConfigure(QualityEvaluationConfigureInfoForUpdate $QualityEvaluationConfigure) Set Control parameters for video frame quality evaluation.
 */
class ModifyQualityInspectTemplateRequest extends AbstractModel
{
    /**
     * @var integer Template ID.
     */
    public $Definition;

    /**
     * @var integer <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var string Template name. The length cannot exceed 64 characters.
     */
    public $Name;

    /**
     * @var string Template description, with a length limit of 256 characters.
     */
    public $Comment;

    /**
     * @var float Frame interception interval, unit: seconds, minimum value 1.
     */
    public $ScreenshotInterval;

    /**
     * @var JitterConfigureInfoForUpdate Control parameters for video frame jitter and ghosting detection.
     */
    public $JitterConfigure;

    /**
     * @var BlurConfigureInfoForUpdate Control parameters for video frame blur detection.
     */
    public $BlurConfigure;

    /**
     * @var AbnormalLightingConfigureInfoForUpdate Control parameters for low-light and overexposure detection in video frames.
     */
    public $AbnormalLightingConfigure;

    /**
     * @var CrashScreenConfigureInfoForUpdate Control parameters for screen glitch detection in video footage.
     */
    public $CrashScreenConfigure;

    /**
     * @var BlackWhiteEdgeConfigureInfoForUpdate Control parameters for video picture black edge, white edge, black screen, and white screen detection.
     */
    public $BlackWhiteEdgeConfigure;

    /**
     * @var NoiseConfigureInfoForUpdate Control parameters for video frame noise detection.
     */
    public $NoiseConfigure;

    /**
     * @var MosaicConfigureInfoForUpdate Control parameters for video frame mosaic detection.
     */
    public $MosaicConfigure;

    /**
     * @var QRCodeConfigureInfoForUpdate Control parameters for video frame QR code detection.
     */
    public $QRCodeConfigure;

    /**
     * @var VoiceConfigureInfoForUpdate Audio (mute, bass, clipping) detection control parameters.
     */
    public $VoiceConfigure;

    /**
     * @var QualityEvaluationConfigureInfoForUpdate Control parameters for video frame quality evaluation.
     */
    public $QualityEvaluationConfigure;

    /**
     * @param integer $Definition Template ID.
     * @param integer $SubAppId <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $Name Template name. The length cannot exceed 64 characters.
     * @param string $Comment Template description, with a length limit of 256 characters.
     * @param float $ScreenshotInterval Frame interception interval, unit: seconds, minimum value 1.
     * @param JitterConfigureInfoForUpdate $JitterConfigure Control parameters for video frame jitter and ghosting detection.
     * @param BlurConfigureInfoForUpdate $BlurConfigure Control parameters for video frame blur detection.
     * @param AbnormalLightingConfigureInfoForUpdate $AbnormalLightingConfigure Control parameters for low-light and overexposure detection in video frames.
     * @param CrashScreenConfigureInfoForUpdate $CrashScreenConfigure Control parameters for screen glitch detection in video footage.
     * @param BlackWhiteEdgeConfigureInfoForUpdate $BlackWhiteEdgeConfigure Control parameters for video picture black edge, white edge, black screen, and white screen detection.
     * @param NoiseConfigureInfoForUpdate $NoiseConfigure Control parameters for video frame noise detection.
     * @param MosaicConfigureInfoForUpdate $MosaicConfigure Control parameters for video frame mosaic detection.
     * @param QRCodeConfigureInfoForUpdate $QRCodeConfigure Control parameters for video frame QR code detection.
     * @param VoiceConfigureInfoForUpdate $VoiceConfigure Audio (mute, bass, clipping) detection control parameters.
     * @param QualityEvaluationConfigureInfoForUpdate $QualityEvaluationConfigure Control parameters for video frame quality evaluation.
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
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
            $this->JitterConfigure = new JitterConfigureInfoForUpdate();
            $this->JitterConfigure->deserialize($param["JitterConfigure"]);
        }

        if (array_key_exists("BlurConfigure",$param) and $param["BlurConfigure"] !== null) {
            $this->BlurConfigure = new BlurConfigureInfoForUpdate();
            $this->BlurConfigure->deserialize($param["BlurConfigure"]);
        }

        if (array_key_exists("AbnormalLightingConfigure",$param) and $param["AbnormalLightingConfigure"] !== null) {
            $this->AbnormalLightingConfigure = new AbnormalLightingConfigureInfoForUpdate();
            $this->AbnormalLightingConfigure->deserialize($param["AbnormalLightingConfigure"]);
        }

        if (array_key_exists("CrashScreenConfigure",$param) and $param["CrashScreenConfigure"] !== null) {
            $this->CrashScreenConfigure = new CrashScreenConfigureInfoForUpdate();
            $this->CrashScreenConfigure->deserialize($param["CrashScreenConfigure"]);
        }

        if (array_key_exists("BlackWhiteEdgeConfigure",$param) and $param["BlackWhiteEdgeConfigure"] !== null) {
            $this->BlackWhiteEdgeConfigure = new BlackWhiteEdgeConfigureInfoForUpdate();
            $this->BlackWhiteEdgeConfigure->deserialize($param["BlackWhiteEdgeConfigure"]);
        }

        if (array_key_exists("NoiseConfigure",$param) and $param["NoiseConfigure"] !== null) {
            $this->NoiseConfigure = new NoiseConfigureInfoForUpdate();
            $this->NoiseConfigure->deserialize($param["NoiseConfigure"]);
        }

        if (array_key_exists("MosaicConfigure",$param) and $param["MosaicConfigure"] !== null) {
            $this->MosaicConfigure = new MosaicConfigureInfoForUpdate();
            $this->MosaicConfigure->deserialize($param["MosaicConfigure"]);
        }

        if (array_key_exists("QRCodeConfigure",$param) and $param["QRCodeConfigure"] !== null) {
            $this->QRCodeConfigure = new QRCodeConfigureInfoForUpdate();
            $this->QRCodeConfigure->deserialize($param["QRCodeConfigure"]);
        }

        if (array_key_exists("VoiceConfigure",$param) and $param["VoiceConfigure"] !== null) {
            $this->VoiceConfigure = new VoiceConfigureInfoForUpdate();
            $this->VoiceConfigure->deserialize($param["VoiceConfigure"]);
        }

        if (array_key_exists("QualityEvaluationConfigure",$param) and $param["QualityEvaluationConfigure"] !== null) {
            $this->QualityEvaluationConfigure = new QualityEvaluationConfigureInfoForUpdate();
            $this->QualityEvaluationConfigure->deserialize($param["QualityEvaluationConfigure"]);
        }
    }
}
