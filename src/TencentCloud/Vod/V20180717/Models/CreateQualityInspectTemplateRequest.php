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
 * CreateQualityInspectTemplate request structure.
 *
 * @method integer getSubAppId() Obtain <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, if they access resources in on-demand applications (whether the default application or a newly created application), this field must be filled in as the application ID.</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, if they access resources in on-demand applications (whether the default application or a newly created application), this field must be filled in as the application ID.</b></p>
 * @method string getName() Obtain <p>Audio and video quality inspection template name.</p>
 * @method void setName(string $Name) Set <p>Audio and video quality inspection template name.</p>
 * @method string getComment() Obtain <p>Audio and video quality inspection template description.</p>
 * @method void setComment(string $Comment) Set <p>Audio and video quality inspection template description.</p>
 * @method array getConfigs() Obtain <p>Audio and video quality detection configuration parameters.</p>
 * @method void setConfigs(array $Configs) Set <p>Audio and video quality detection configuration parameters.</p>
 * @method QualityInspectStrategy getStrategy() Obtain <p>Spot check policy parameters for audio and video quality inspection.</p>
 * @method void setStrategy(QualityInspectStrategy $Strategy) Set <p>Spot check policy parameters for audio and video quality inspection.</p>
 * @method float getScreenshotInterval() Obtain <p>(Not recommended. Use Configs instead.) Frame interception interval in seconds. Minimum value: 1. If not specified, the default frame interval is 1 second.</p>
 * @method void setScreenshotInterval(float $ScreenshotInterval) Set <p>(Not recommended. Use Configs instead.) Frame interception interval in seconds. Minimum value: 1. If not specified, the default frame interval is 1 second.</p>
 * @method JitterConfigureInfo getJitterConfigure() Obtain <p>(Not recommended. Use Configs instead.) Control parameters for video frame jitter and ghosting detection.</p>
 * @method void setJitterConfigure(JitterConfigureInfo $JitterConfigure) Set <p>(Not recommended. Use Configs instead.) Control parameters for video frame jitter and ghosting detection.</p>
 * @method BlurConfigureInfo getBlurConfigure() Obtain <p>(Not recommended. Use Configs as an alternative.) Control parameters for video frame blur detection.</p>
 * @method void setBlurConfigure(BlurConfigureInfo $BlurConfigure) Set <p>(Not recommended. Use Configs as an alternative.) Control parameters for video frame blur detection.</p>
 * @method AbnormalLightingConfigureInfo getAbnormalLightingConfigure() Obtain <p>(Not recommended. Use Configs as an alternative.) Control parameters for low-light and overexposure detection in video frames.</p>
 * @method void setAbnormalLightingConfigure(AbnormalLightingConfigureInfo $AbnormalLightingConfigure) Set <p>(Not recommended. Use Configs as an alternative.) Control parameters for low-light and overexposure detection in video frames.</p>
 * @method CrashScreenConfigureInfo getCrashScreenConfigure() Obtain <p>(Not recommended. Use Configs as an alternative.) Control parameters for distortion detection in video footage.</p>
 * @method void setCrashScreenConfigure(CrashScreenConfigureInfo $CrashScreenConfigure) Set <p>(Not recommended. Use Configs as an alternative.) Control parameters for distortion detection in video footage.</p>
 * @method BlackWhiteEdgeConfigureInfo getBlackWhiteEdgeConfigure() Obtain <p>(Not recommended. Use Configs as an alternative.) Control parameters for detecting video picture black edges, white edges, black screen, and white screen.</p>
 * @method void setBlackWhiteEdgeConfigure(BlackWhiteEdgeConfigureInfo $BlackWhiteEdgeConfigure) Set <p>(Not recommended. Use Configs as an alternative.) Control parameters for detecting video picture black edges, white edges, black screen, and white screen.</p>
 * @method NoiseConfigureInfo getNoiseConfigure() Obtain <p>(Not recommended. Use Configs instead.) Control parameters for video frame noise detection.</p>
 * @method void setNoiseConfigure(NoiseConfigureInfo $NoiseConfigure) Set <p>(Not recommended. Use Configs instead.) Control parameters for video frame noise detection.</p>
 * @method MosaicConfigureInfo getMosaicConfigure() Obtain <p>(Not recommended. Use Configs instead.) Control parameters for video frame mosaic detection.</p>
 * @method void setMosaicConfigure(MosaicConfigureInfo $MosaicConfigure) Set <p>(Not recommended. Use Configs instead.) Control parameters for video frame mosaic detection.</p>
 * @method QRCodeConfigureInfo getQRCodeConfigure() Obtain <p>(Not recommended. Use Configs as an alternative.) Control parameters for video frame QR code detection.</p>
 * @method void setQRCodeConfigure(QRCodeConfigureInfo $QRCodeConfigure) Set <p>(Not recommended. Use Configs as an alternative.) Control parameters for video frame QR code detection.</p>
 * @method VoiceConfigureInfo getVoiceConfigure() Obtain <p>(Not recommended, use Configs as an alternative) Control parameters for audio (mute, bass, pop) detection.</p>
 * @method void setVoiceConfigure(VoiceConfigureInfo $VoiceConfigure) Set <p>(Not recommended, use Configs as an alternative) Control parameters for audio (mute, bass, pop) detection.</p>
 * @method QualityEvaluationConfigureInfo getQualityEvaluationConfigure() Obtain <p>(Not recommended. Use Configs instead.) Control parameters for video frame quality evaluation.</p>
 * @method void setQualityEvaluationConfigure(QualityEvaluationConfigureInfo $QualityEvaluationConfigure) Set <p>(Not recommended. Use Configs instead.) Control parameters for video frame quality evaluation.</p>
 */
class CreateQualityInspectTemplateRequest extends AbstractModel
{
    /**
     * @var integer <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, if they access resources in on-demand applications (whether the default application or a newly created application), this field must be filled in as the application ID.</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Audio and video quality inspection template name.</p>
     */
    public $Name;

    /**
     * @var string <p>Audio and video quality inspection template description.</p>
     */
    public $Comment;

    /**
     * @var array <p>Audio and video quality detection configuration parameters.</p>
     */
    public $Configs;

    /**
     * @var QualityInspectStrategy <p>Spot check policy parameters for audio and video quality inspection.</p>
     */
    public $Strategy;

    /**
     * @var float <p>(Not recommended. Use Configs instead.) Frame interception interval in seconds. Minimum value: 1. If not specified, the default frame interval is 1 second.</p>
     */
    public $ScreenshotInterval;

    /**
     * @var JitterConfigureInfo <p>(Not recommended. Use Configs instead.) Control parameters for video frame jitter and ghosting detection.</p>
     */
    public $JitterConfigure;

    /**
     * @var BlurConfigureInfo <p>(Not recommended. Use Configs as an alternative.) Control parameters for video frame blur detection.</p>
     */
    public $BlurConfigure;

    /**
     * @var AbnormalLightingConfigureInfo <p>(Not recommended. Use Configs as an alternative.) Control parameters for low-light and overexposure detection in video frames.</p>
     */
    public $AbnormalLightingConfigure;

    /**
     * @var CrashScreenConfigureInfo <p>(Not recommended. Use Configs as an alternative.) Control parameters for distortion detection in video footage.</p>
     */
    public $CrashScreenConfigure;

    /**
     * @var BlackWhiteEdgeConfigureInfo <p>(Not recommended. Use Configs as an alternative.) Control parameters for detecting video picture black edges, white edges, black screen, and white screen.</p>
     */
    public $BlackWhiteEdgeConfigure;

    /**
     * @var NoiseConfigureInfo <p>(Not recommended. Use Configs instead.) Control parameters for video frame noise detection.</p>
     */
    public $NoiseConfigure;

    /**
     * @var MosaicConfigureInfo <p>(Not recommended. Use Configs instead.) Control parameters for video frame mosaic detection.</p>
     */
    public $MosaicConfigure;

    /**
     * @var QRCodeConfigureInfo <p>(Not recommended. Use Configs as an alternative.) Control parameters for video frame QR code detection.</p>
     */
    public $QRCodeConfigure;

    /**
     * @var VoiceConfigureInfo <p>(Not recommended, use Configs as an alternative) Control parameters for audio (mute, bass, pop) detection.</p>
     */
    public $VoiceConfigure;

    /**
     * @var QualityEvaluationConfigureInfo <p>(Not recommended. Use Configs instead.) Control parameters for video frame quality evaluation.</p>
     */
    public $QualityEvaluationConfigure;

    /**
     * @param integer $SubAppId <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, if they access resources in on-demand applications (whether the default application or a newly created application), this field must be filled in as the application ID.</b></p>
     * @param string $Name <p>Audio and video quality inspection template name.</p>
     * @param string $Comment <p>Audio and video quality inspection template description.</p>
     * @param array $Configs <p>Audio and video quality detection configuration parameters.</p>
     * @param QualityInspectStrategy $Strategy <p>Spot check policy parameters for audio and video quality inspection.</p>
     * @param float $ScreenshotInterval <p>(Not recommended. Use Configs instead.) Frame interception interval in seconds. Minimum value: 1. If not specified, the default frame interval is 1 second.</p>
     * @param JitterConfigureInfo $JitterConfigure <p>(Not recommended. Use Configs instead.) Control parameters for video frame jitter and ghosting detection.</p>
     * @param BlurConfigureInfo $BlurConfigure <p>(Not recommended. Use Configs as an alternative.) Control parameters for video frame blur detection.</p>
     * @param AbnormalLightingConfigureInfo $AbnormalLightingConfigure <p>(Not recommended. Use Configs as an alternative.) Control parameters for low-light and overexposure detection in video frames.</p>
     * @param CrashScreenConfigureInfo $CrashScreenConfigure <p>(Not recommended. Use Configs as an alternative.) Control parameters for distortion detection in video footage.</p>
     * @param BlackWhiteEdgeConfigureInfo $BlackWhiteEdgeConfigure <p>(Not recommended. Use Configs as an alternative.) Control parameters for detecting video picture black edges, white edges, black screen, and white screen.</p>
     * @param NoiseConfigureInfo $NoiseConfigure <p>(Not recommended. Use Configs instead.) Control parameters for video frame noise detection.</p>
     * @param MosaicConfigureInfo $MosaicConfigure <p>(Not recommended. Use Configs instead.) Control parameters for video frame mosaic detection.</p>
     * @param QRCodeConfigureInfo $QRCodeConfigure <p>(Not recommended. Use Configs as an alternative.) Control parameters for video frame QR code detection.</p>
     * @param VoiceConfigureInfo $VoiceConfigure <p>(Not recommended, use Configs as an alternative) Control parameters for audio (mute, bass, pop) detection.</p>
     * @param QualityEvaluationConfigureInfo $QualityEvaluationConfigure <p>(Not recommended. Use Configs instead.) Control parameters for video frame quality evaluation.</p>
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

        if (array_key_exists("VoiceConfigure",$param) and $param["VoiceConfigure"] !== null) {
            $this->VoiceConfigure = new VoiceConfigureInfo();
            $this->VoiceConfigure->deserialize($param["VoiceConfigure"]);
        }

        if (array_key_exists("QualityEvaluationConfigure",$param) and $param["QualityEvaluationConfigure"] !== null) {
            $this->QualityEvaluationConfigure = new QualityEvaluationConfigureInfo();
            $this->QualityEvaluationConfigure->deserialize($param["QualityEvaluationConfigure"]);
        }
    }
}
