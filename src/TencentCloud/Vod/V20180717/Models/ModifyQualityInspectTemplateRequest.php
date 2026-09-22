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
 * @method integer getDefinition() Obtain <p>Template ID.</p>
 * @method void setDefinition(integer $Definition) Set <p>Template ID.</p>
 * @method integer getSubAppId() Obtain <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
 * @method string getName() Obtain <p>Template name. Length limit: 64 characters.</p>
 * @method void setName(string $Name) Set <p>Template name. Length limit: 64 characters.</p>
 * @method string getComment() Obtain <p>Transcoding template description. Length limit: 256 characters.</p>
 * @method void setComment(string $Comment) Set <p>Transcoding template description. Length limit: 256 characters.</p>
 * @method array getConfigs() Obtain <p>Configuration parameters for audio and video quality detection.</p>
 * @method void setConfigs(array $Configs) Set <p>Configuration parameters for audio and video quality detection.</p>
 * @method QualityInspectStrategy getStrategy() Obtain <p>Spot check policy for audio and video quality inspection.</p>
 * @method void setStrategy(QualityInspectStrategy $Strategy) Set <p>Spot check policy for audio and video quality inspection.</p>
 * @method float getScreenshotInterval() Obtain <p>(Not recommended. Use Configs instead.) Frame interception interval in seconds. Minimum value: 1.</p>
 * @method void setScreenshotInterval(float $ScreenshotInterval) Set <p>(Not recommended. Use Configs instead.) Frame interception interval in seconds. Minimum value: 1.</p>
 * @method JitterConfigureInfoForUpdate getJitterConfigure() Obtain <p>(Not recommended. Use Configs instead.) Control parameters for video frame jitter and ghosting detection.</p>
 * @method void setJitterConfigure(JitterConfigureInfoForUpdate $JitterConfigure) Set <p>(Not recommended. Use Configs instead.) Control parameters for video frame jitter and ghosting detection.</p>
 * @method BlurConfigureInfoForUpdate getBlurConfigure() Obtain <p>(Not recommended. Use Configs as an alternative.) Control parameters for video frame blur detection.</p>
 * @method void setBlurConfigure(BlurConfigureInfoForUpdate $BlurConfigure) Set <p>(Not recommended. Use Configs as an alternative.) Control parameters for video frame blur detection.</p>
 * @method AbnormalLightingConfigureInfoForUpdate getAbnormalLightingConfigure() Obtain <p>(Not recommended. Use Configs instead.) Control parameters for low-light and overexposure detection in video frames.</p>
 * @method void setAbnormalLightingConfigure(AbnormalLightingConfigureInfoForUpdate $AbnormalLightingConfigure) Set <p>(Not recommended. Use Configs instead.) Control parameters for low-light and overexposure detection in video frames.</p>
 * @method CrashScreenConfigureInfoForUpdate getCrashScreenConfigure() Obtain <p>(Not recommended. Use Configs instead.) Control parameters for video image distortion detection.</p>
 * @method void setCrashScreenConfigure(CrashScreenConfigureInfoForUpdate $CrashScreenConfigure) Set <p>(Not recommended. Use Configs instead.) Control parameters for video image distortion detection.</p>
 * @method BlackWhiteEdgeConfigureInfoForUpdate getBlackWhiteEdgeConfigure() Obtain <p>(Not recommended. Use Configs as an alternative) Control parameters for detecting black edges, white edges, black screen, and white screen in video pictures.</p>
 * @method void setBlackWhiteEdgeConfigure(BlackWhiteEdgeConfigureInfoForUpdate $BlackWhiteEdgeConfigure) Set <p>(Not recommended. Use Configs as an alternative) Control parameters for detecting black edges, white edges, black screen, and white screen in video pictures.</p>
 * @method NoiseConfigureInfoForUpdate getNoiseConfigure() Obtain <p>(Not recommended. Use Configs instead.) Control parameters for video frame noise detection.</p>
 * @method void setNoiseConfigure(NoiseConfigureInfoForUpdate $NoiseConfigure) Set <p>(Not recommended. Use Configs instead.) Control parameters for video frame noise detection.</p>
 * @method MosaicConfigureInfoForUpdate getMosaicConfigure() Obtain <p>(Not recommended. Use Configs instead.) Control parameters for video frame mosaic detection.</p>
 * @method void setMosaicConfigure(MosaicConfigureInfoForUpdate $MosaicConfigure) Set <p>(Not recommended. Use Configs instead.) Control parameters for video frame mosaic detection.</p>
 * @method QRCodeConfigureInfoForUpdate getQRCodeConfigure() Obtain <p>(Not recommended. Use Configs instead.) Control parameters for video frame QR code detection.</p>
 * @method void setQRCodeConfigure(QRCodeConfigureInfoForUpdate $QRCodeConfigure) Set <p>(Not recommended. Use Configs instead.) Control parameters for video frame QR code detection.</p>
 * @method VoiceConfigureInfoForUpdate getVoiceConfigure() Obtain <p>(Not recommended. Use Configs as an alternative) Control parameters for audio (mute, bass, pop) detection.</p>
 * @method void setVoiceConfigure(VoiceConfigureInfoForUpdate $VoiceConfigure) Set <p>(Not recommended. Use Configs as an alternative) Control parameters for audio (mute, bass, pop) detection.</p>
 * @method QualityEvaluationConfigureInfoForUpdate getQualityEvaluationConfigure() Obtain <p>(Not recommended. Use Configs instead.) Control parameters for video frame quality evaluation.</p>
 * @method void setQualityEvaluationConfigure(QualityEvaluationConfigureInfoForUpdate $QualityEvaluationConfigure) Set <p>(Not recommended. Use Configs instead.) Control parameters for video frame quality evaluation.</p>
 */
class ModifyQualityInspectTemplateRequest extends AbstractModel
{
    /**
     * @var integer <p>Template ID.</p>
     */
    public $Definition;

    /**
     * @var integer <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Template name. Length limit: 64 characters.</p>
     */
    public $Name;

    /**
     * @var string <p>Transcoding template description. Length limit: 256 characters.</p>
     */
    public $Comment;

    /**
     * @var array <p>Configuration parameters for audio and video quality detection.</p>
     */
    public $Configs;

    /**
     * @var QualityInspectStrategy <p>Spot check policy for audio and video quality inspection.</p>
     */
    public $Strategy;

    /**
     * @var float <p>(Not recommended. Use Configs instead.) Frame interception interval in seconds. Minimum value: 1.</p>
     */
    public $ScreenshotInterval;

    /**
     * @var JitterConfigureInfoForUpdate <p>(Not recommended. Use Configs instead.) Control parameters for video frame jitter and ghosting detection.</p>
     */
    public $JitterConfigure;

    /**
     * @var BlurConfigureInfoForUpdate <p>(Not recommended. Use Configs as an alternative.) Control parameters for video frame blur detection.</p>
     */
    public $BlurConfigure;

    /**
     * @var AbnormalLightingConfigureInfoForUpdate <p>(Not recommended. Use Configs instead.) Control parameters for low-light and overexposure detection in video frames.</p>
     */
    public $AbnormalLightingConfigure;

    /**
     * @var CrashScreenConfigureInfoForUpdate <p>(Not recommended. Use Configs instead.) Control parameters for video image distortion detection.</p>
     */
    public $CrashScreenConfigure;

    /**
     * @var BlackWhiteEdgeConfigureInfoForUpdate <p>(Not recommended. Use Configs as an alternative) Control parameters for detecting black edges, white edges, black screen, and white screen in video pictures.</p>
     */
    public $BlackWhiteEdgeConfigure;

    /**
     * @var NoiseConfigureInfoForUpdate <p>(Not recommended. Use Configs instead.) Control parameters for video frame noise detection.</p>
     */
    public $NoiseConfigure;

    /**
     * @var MosaicConfigureInfoForUpdate <p>(Not recommended. Use Configs instead.) Control parameters for video frame mosaic detection.</p>
     */
    public $MosaicConfigure;

    /**
     * @var QRCodeConfigureInfoForUpdate <p>(Not recommended. Use Configs instead.) Control parameters for video frame QR code detection.</p>
     */
    public $QRCodeConfigure;

    /**
     * @var VoiceConfigureInfoForUpdate <p>(Not recommended. Use Configs as an alternative) Control parameters for audio (mute, bass, pop) detection.</p>
     */
    public $VoiceConfigure;

    /**
     * @var QualityEvaluationConfigureInfoForUpdate <p>(Not recommended. Use Configs instead.) Control parameters for video frame quality evaluation.</p>
     */
    public $QualityEvaluationConfigure;

    /**
     * @param integer $Definition <p>Template ID.</p>
     * @param integer $SubAppId <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
     * @param string $Name <p>Template name. Length limit: 64 characters.</p>
     * @param string $Comment <p>Transcoding template description. Length limit: 256 characters.</p>
     * @param array $Configs <p>Configuration parameters for audio and video quality detection.</p>
     * @param QualityInspectStrategy $Strategy <p>Spot check policy for audio and video quality inspection.</p>
     * @param float $ScreenshotInterval <p>(Not recommended. Use Configs instead.) Frame interception interval in seconds. Minimum value: 1.</p>
     * @param JitterConfigureInfoForUpdate $JitterConfigure <p>(Not recommended. Use Configs instead.) Control parameters for video frame jitter and ghosting detection.</p>
     * @param BlurConfigureInfoForUpdate $BlurConfigure <p>(Not recommended. Use Configs as an alternative.) Control parameters for video frame blur detection.</p>
     * @param AbnormalLightingConfigureInfoForUpdate $AbnormalLightingConfigure <p>(Not recommended. Use Configs instead.) Control parameters for low-light and overexposure detection in video frames.</p>
     * @param CrashScreenConfigureInfoForUpdate $CrashScreenConfigure <p>(Not recommended. Use Configs instead.) Control parameters for video image distortion detection.</p>
     * @param BlackWhiteEdgeConfigureInfoForUpdate $BlackWhiteEdgeConfigure <p>(Not recommended. Use Configs as an alternative) Control parameters for detecting black edges, white edges, black screen, and white screen in video pictures.</p>
     * @param NoiseConfigureInfoForUpdate $NoiseConfigure <p>(Not recommended. Use Configs instead.) Control parameters for video frame noise detection.</p>
     * @param MosaicConfigureInfoForUpdate $MosaicConfigure <p>(Not recommended. Use Configs instead.) Control parameters for video frame mosaic detection.</p>
     * @param QRCodeConfigureInfoForUpdate $QRCodeConfigure <p>(Not recommended. Use Configs instead.) Control parameters for video frame QR code detection.</p>
     * @param VoiceConfigureInfoForUpdate $VoiceConfigure <p>(Not recommended. Use Configs as an alternative) Control parameters for audio (mute, bass, pop) detection.</p>
     * @param QualityEvaluationConfigureInfoForUpdate $QualityEvaluationConfigure <p>(Not recommended. Use Configs instead.) Control parameters for video frame quality evaluation.</p>
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

        if (array_key_exists("Configs",$param) and $param["Configs"] !== null) {
            $this->Configs = [];
            foreach ($param["Configs"] as $key => $value){
                $obj = new QualityInspectConfig();
                $obj->deserialize($value);
                array_push($this->Configs, $obj);
            }
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = new QualityInspectStrategy();
            $this->Strategy->deserialize($param["Strategy"]);
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
