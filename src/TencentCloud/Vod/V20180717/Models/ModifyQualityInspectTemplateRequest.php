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
 * ModifyQualityInspectTemplate request structure.
 *
 * @method integer getDefinition() Obtain Media quality inspection template ID.
 * @method void setDefinition(integer $Definition) Set Media quality inspection template ID.
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method string getName() Obtain Media quality inspection template name.Length limit: 64 characters.
 * @method void setName(string $Name) Set Media quality inspection template name.Length limit: 64 characters.
 * @method string getComment() Obtain Template description. Length limit: 256 characters.
 * @method void setComment(string $Comment) Set Template description. Length limit: 256 characters.
 * @method float getScreenshotInterval() Obtain Frame interval, unit in seconds, minimum value is 1. When not filled, the default frame interval is 1 second.
 * @method void setScreenshotInterval(float $ScreenshotInterval) Set Frame interval, unit in seconds, minimum value is 1. When not filled, the default frame interval is 1 second.
 * @method JitterConfigureInfoForUpdate getJitterConfigure() Obtain Control parameters for detecting video jitter and ghosting.
 * @method void setJitterConfigure(JitterConfigureInfoForUpdate $JitterConfigure) Set Control parameters for detecting video jitter and ghosting.
 * @method BlurConfigureInfoForUpdate getBlurConfigure() Obtain Control parameters for detecting video blur.
 * @method void setBlurConfigure(BlurConfigureInfoForUpdate $BlurConfigure) Set Control parameters for detecting video blur.
 * @method AbnormalLightingConfigureInfoForUpdate getAbnormalLightingConfigure() Obtain Control parameters for detecting low brightness and overexposure of video.
 * @method void setAbnormalLightingConfigure(AbnormalLightingConfigureInfoForUpdate $AbnormalLightingConfigure) Set Control parameters for detecting low brightness and overexposure of video.
 * @method CrashScreenConfigureInfoForUpdate getCrashScreenConfigure() Obtain Control parameters for detecting video crash.
 * @method void setCrashScreenConfigure(CrashScreenConfigureInfoForUpdate $CrashScreenConfigure) Set Control parameters for detecting video crash.
 * @method BlackWhiteEdgeConfigureInfoForUpdate getBlackWhiteEdgeConfigure() Obtain Control parameters for detecting video black edges, white edges, black screen, and white screen.
 * @method void setBlackWhiteEdgeConfigure(BlackWhiteEdgeConfigureInfoForUpdate $BlackWhiteEdgeConfigure) Set Control parameters for detecting video black edges, white edges, black screen, and white screen.
 * @method NoiseConfigureInfoForUpdate getNoiseConfigure() Obtain Control parameters for detecting video noise.
 * @method void setNoiseConfigure(NoiseConfigureInfoForUpdate $NoiseConfigure) Set Control parameters for detecting video noise.
 * @method MosaicConfigureInfoForUpdate getMosaicConfigure() Obtain Control parameters for detecting video mosaic.
 * @method void setMosaicConfigure(MosaicConfigureInfoForUpdate $MosaicConfigure) Set Control parameters for detecting video mosaic.
 * @method QRCodeConfigureInfoForUpdate getQRCodeConfigure() Obtain Control parameters for QR code detection in video.
 * @method void setQRCodeConfigure(QRCodeConfigureInfoForUpdate $QRCodeConfigure) Set Control parameters for QR code detection in video.
 * @method VoiceConfigureInfoForUpdate getVoiceConfigure() Obtain Control parameters for audio (mutes, bass, blast sound).
 * @method void setVoiceConfigure(VoiceConfigureInfoForUpdate $VoiceConfigure) Set Control parameters for audio (mutes, bass, blast sound).
 * @method QualityEvaluationConfigureInfoForUpdate getQualityEvaluationConfigure() Obtain Control parameters for video quality evaluation.
 * @method void setQualityEvaluationConfigure(QualityEvaluationConfigureInfoForUpdate $QualityEvaluationConfigure) Set Control parameters for video quality evaluation.
 */
class ModifyQualityInspectTemplateRequest extends AbstractModel
{
    /**
     * @var integer Media quality inspection template ID.
     */
    public $Definition;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var string Media quality inspection template name.Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var string Template description. Length limit: 256 characters.
     */
    public $Comment;

    /**
     * @var float Frame interval, unit in seconds, minimum value is 1. When not filled, the default frame interval is 1 second.
     */
    public $ScreenshotInterval;

    /**
     * @var JitterConfigureInfoForUpdate Control parameters for detecting video jitter and ghosting.
     */
    public $JitterConfigure;

    /**
     * @var BlurConfigureInfoForUpdate Control parameters for detecting video blur.
     */
    public $BlurConfigure;

    /**
     * @var AbnormalLightingConfigureInfoForUpdate Control parameters for detecting low brightness and overexposure of video.
     */
    public $AbnormalLightingConfigure;

    /**
     * @var CrashScreenConfigureInfoForUpdate Control parameters for detecting video crash.
     */
    public $CrashScreenConfigure;

    /**
     * @var BlackWhiteEdgeConfigureInfoForUpdate Control parameters for detecting video black edges, white edges, black screen, and white screen.
     */
    public $BlackWhiteEdgeConfigure;

    /**
     * @var NoiseConfigureInfoForUpdate Control parameters for detecting video noise.
     */
    public $NoiseConfigure;

    /**
     * @var MosaicConfigureInfoForUpdate Control parameters for detecting video mosaic.
     */
    public $MosaicConfigure;

    /**
     * @var QRCodeConfigureInfoForUpdate Control parameters for QR code detection in video.
     */
    public $QRCodeConfigure;

    /**
     * @var VoiceConfigureInfoForUpdate Control parameters for audio (mutes, bass, blast sound).
     */
    public $VoiceConfigure;

    /**
     * @var QualityEvaluationConfigureInfoForUpdate Control parameters for video quality evaluation.
     */
    public $QualityEvaluationConfigure;

    /**
     * @param integer $Definition Media quality inspection template ID.
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param string $Name Media quality inspection template name.Length limit: 64 characters.
     * @param string $Comment Template description. Length limit: 256 characters.
     * @param float $ScreenshotInterval Frame interval, unit in seconds, minimum value is 1. When not filled, the default frame interval is 1 second.
     * @param JitterConfigureInfoForUpdate $JitterConfigure Control parameters for detecting video jitter and ghosting.
     * @param BlurConfigureInfoForUpdate $BlurConfigure Control parameters for detecting video blur.
     * @param AbnormalLightingConfigureInfoForUpdate $AbnormalLightingConfigure Control parameters for detecting low brightness and overexposure of video.
     * @param CrashScreenConfigureInfoForUpdate $CrashScreenConfigure Control parameters for detecting video crash.
     * @param BlackWhiteEdgeConfigureInfoForUpdate $BlackWhiteEdgeConfigure Control parameters for detecting video black edges, white edges, black screen, and white screen.
     * @param NoiseConfigureInfoForUpdate $NoiseConfigure Control parameters for detecting video noise.
     * @param MosaicConfigureInfoForUpdate $MosaicConfigure Control parameters for detecting video mosaic.
     * @param QRCodeConfigureInfoForUpdate $QRCodeConfigure Control parameters for QR code detection in video.
     * @param VoiceConfigureInfoForUpdate $VoiceConfigure Control parameters for audio (mutes, bass, blast sound).
     * @param QualityEvaluationConfigureInfoForUpdate $QualityEvaluationConfigure Control parameters for video quality evaluation.
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
