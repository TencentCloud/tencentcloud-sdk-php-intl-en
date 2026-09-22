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
 * Audio and video quality detection template details.
 *
 * @method integer getDefinition() Obtain <p>Template ID.</p>
 * @method void setDefinition(integer $Definition) Set <p>Template ID.</p>
 * @method string getType() Obtain <p>Template type. Available values:</p><li>Preset: preset template;</li><li>Custom: custom template.</li>
 * @method void setType(string $Type) Set <p>Template type. Available values:</p><li>Preset: preset template;</li><li>Custom: custom template.</li>
 * @method string getName() Obtain <p>Template name.</p>
 * @method void setName(string $Name) Set <p>Template name.</p>
 * @method string getComment() Obtain <p>Template description.</p>
 * @method void setComment(string $Comment) Set <p>Template description.</p>
 * @method array getConfigs() Obtain <p>Configuration parameters for audio and video quality detection.</p>
 * @method void setConfigs(array $Configs) Set <p>Configuration parameters for audio and video quality detection.</p>
 * @method QualityInspectStrategy getStrategy() Obtain <p>Spot check policy for audio and video quality inspection.</p>
 * @method void setStrategy(QualityInspectStrategy $Strategy) Set <p>Spot check policy for audio and video quality inspection.</p>
 * @method string getCreateTime() Obtain <p>Template creation time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Template creation time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method string getUpdateTime() Obtain <p>Template last modified time in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Template last modified time in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method float getScreenshotInterval() Obtain <p>(Not recommended. Use Configs as an alternative.) Frame interception interval in seconds.</p>
 * @method void setScreenshotInterval(float $ScreenshotInterval) Set <p>(Not recommended. Use Configs as an alternative.) Frame interception interval in seconds.</p>
 * @method JitterConfigureInfo getJitterConfigure() Obtain <p>(Not recommended. Use Configs as an alternative.) Control parameters for video frame jitter and ghosting detection.</p>
 * @method void setJitterConfigure(JitterConfigureInfo $JitterConfigure) Set <p>(Not recommended. Use Configs as an alternative.) Control parameters for video frame jitter and ghosting detection.</p>
 * @method BlurConfigureInfo getBlurConfigure() Obtain <p>(Not recommended. Use Configs as an alternative.) Control parameters for video frame blur detection.</p>
 * @method void setBlurConfigure(BlurConfigureInfo $BlurConfigure) Set <p>(Not recommended. Use Configs as an alternative.) Control parameters for video frame blur detection.</p>
 * @method AbnormalLightingConfigureInfo getAbnormalLightingConfigure() Obtain <p>(Not recommended. Use Configs instead.) Control parameters for low-light and overexposure detection in video frames.</p>
 * @method void setAbnormalLightingConfigure(AbnormalLightingConfigureInfo $AbnormalLightingConfigure) Set <p>(Not recommended. Use Configs instead.) Control parameters for low-light and overexposure detection in video frames.</p>
 * @method CrashScreenConfigureInfo getCrashScreenConfigure() Obtain <p>(Not recommended. Use Configs as an alternative.) Control parameters for video footage distortion detection.</p>
 * @method void setCrashScreenConfigure(CrashScreenConfigureInfo $CrashScreenConfigure) Set <p>(Not recommended. Use Configs as an alternative.) Control parameters for video footage distortion detection.</p>
 * @method BlackWhiteEdgeConfigureInfo getBlackWhiteEdgeConfigure() Obtain <p>Control parameters for detecting black edges, white edges, black screen, and white screen in video picture.</p>
 * @method void setBlackWhiteEdgeConfigure(BlackWhiteEdgeConfigureInfo $BlackWhiteEdgeConfigure) Set <p>Control parameters for detecting black edges, white edges, black screen, and white screen in video picture.</p>
 * @method NoiseConfigureInfo getNoiseConfigure() Obtain <p>(Not recommended. Use Configs as an alternative.) Control parameters for video frame noise detection.</p>
 * @method void setNoiseConfigure(NoiseConfigureInfo $NoiseConfigure) Set <p>(Not recommended. Use Configs as an alternative.) Control parameters for video frame noise detection.</p>
 * @method MosaicConfigureInfo getMosaicConfigure() Obtain <p>(Not recommended. Use Configs instead.) Control parameters for video frame mosaic detection.</p>
 * @method void setMosaicConfigure(MosaicConfigureInfo $MosaicConfigure) Set <p>(Not recommended. Use Configs instead.) Control parameters for video frame mosaic detection.</p>
 * @method QRCodeConfigureInfo getQRCodeConfigure() Obtain <p>(Not recommended. Use Configs as an alternative.) Control parameters for video frame QR code detection.</p>
 * @method void setQRCodeConfigure(QRCodeConfigureInfo $QRCodeConfigure) Set <p>(Not recommended. Use Configs as an alternative.) Control parameters for video frame QR code detection.</p>
 * @method QualityEvaluationConfigureInfo getQualityEvaluationConfigure() Obtain <p>(Not recommended. Use Configs instead.) Control parameters for video frame quality evaluation.</p>
 * @method void setQualityEvaluationConfigure(QualityEvaluationConfigureInfo $QualityEvaluationConfigure) Set <p>(Not recommended. Use Configs instead.) Control parameters for video frame quality evaluation.</p>
 * @method VoiceConfigureInfo getVoiceConfigure() Obtain <p>(Not recommended. Use Configs as an alternative.) Control parameters for audio (mute, bass, pop) detection.</p>
 * @method void setVoiceConfigure(VoiceConfigureInfo $VoiceConfigure) Set <p>(Not recommended. Use Configs as an alternative.) Control parameters for audio (mute, bass, pop) detection.</p>
 */
class QualityInspectTemplateItem extends AbstractModel
{
    /**
     * @var integer <p>Template ID.</p>
     */
    public $Definition;

    /**
     * @var string <p>Template type. Available values:</p><li>Preset: preset template;</li><li>Custom: custom template.</li>
     */
    public $Type;

    /**
     * @var string <p>Template name.</p>
     */
    public $Name;

    /**
     * @var string <p>Template description.</p>
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
     * @var string <p>Template creation time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Template last modified time in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     */
    public $UpdateTime;

    /**
     * @var float <p>(Not recommended. Use Configs as an alternative.) Frame interception interval in seconds.</p>
     */
    public $ScreenshotInterval;

    /**
     * @var JitterConfigureInfo <p>(Not recommended. Use Configs as an alternative.) Control parameters for video frame jitter and ghosting detection.</p>
     */
    public $JitterConfigure;

    /**
     * @var BlurConfigureInfo <p>(Not recommended. Use Configs as an alternative.) Control parameters for video frame blur detection.</p>
     */
    public $BlurConfigure;

    /**
     * @var AbnormalLightingConfigureInfo <p>(Not recommended. Use Configs instead.) Control parameters for low-light and overexposure detection in video frames.</p>
     */
    public $AbnormalLightingConfigure;

    /**
     * @var CrashScreenConfigureInfo <p>(Not recommended. Use Configs as an alternative.) Control parameters for video footage distortion detection.</p>
     */
    public $CrashScreenConfigure;

    /**
     * @var BlackWhiteEdgeConfigureInfo <p>Control parameters for detecting black edges, white edges, black screen, and white screen in video picture.</p>
     */
    public $BlackWhiteEdgeConfigure;

    /**
     * @var NoiseConfigureInfo <p>(Not recommended. Use Configs as an alternative.) Control parameters for video frame noise detection.</p>
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
     * @var QualityEvaluationConfigureInfo <p>(Not recommended. Use Configs instead.) Control parameters for video frame quality evaluation.</p>
     */
    public $QualityEvaluationConfigure;

    /**
     * @var VoiceConfigureInfo <p>(Not recommended. Use Configs as an alternative.) Control parameters for audio (mute, bass, pop) detection.</p>
     */
    public $VoiceConfigure;

    /**
     * @param integer $Definition <p>Template ID.</p>
     * @param string $Type <p>Template type. Available values:</p><li>Preset: preset template;</li><li>Custom: custom template.</li>
     * @param string $Name <p>Template name.</p>
     * @param string $Comment <p>Template description.</p>
     * @param array $Configs <p>Configuration parameters for audio and video quality detection.</p>
     * @param QualityInspectStrategy $Strategy <p>Spot check policy for audio and video quality inspection.</p>
     * @param string $CreateTime <p>Template creation time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     * @param string $UpdateTime <p>Template last modified time in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     * @param float $ScreenshotInterval <p>(Not recommended. Use Configs as an alternative.) Frame interception interval in seconds.</p>
     * @param JitterConfigureInfo $JitterConfigure <p>(Not recommended. Use Configs as an alternative.) Control parameters for video frame jitter and ghosting detection.</p>
     * @param BlurConfigureInfo $BlurConfigure <p>(Not recommended. Use Configs as an alternative.) Control parameters for video frame blur detection.</p>
     * @param AbnormalLightingConfigureInfo $AbnormalLightingConfigure <p>(Not recommended. Use Configs instead.) Control parameters for low-light and overexposure detection in video frames.</p>
     * @param CrashScreenConfigureInfo $CrashScreenConfigure <p>(Not recommended. Use Configs as an alternative.) Control parameters for video footage distortion detection.</p>
     * @param BlackWhiteEdgeConfigureInfo $BlackWhiteEdgeConfigure <p>Control parameters for detecting black edges, white edges, black screen, and white screen in video picture.</p>
     * @param NoiseConfigureInfo $NoiseConfigure <p>(Not recommended. Use Configs as an alternative.) Control parameters for video frame noise detection.</p>
     * @param MosaicConfigureInfo $MosaicConfigure <p>(Not recommended. Use Configs instead.) Control parameters for video frame mosaic detection.</p>
     * @param QRCodeConfigureInfo $QRCodeConfigure <p>(Not recommended. Use Configs as an alternative.) Control parameters for video frame QR code detection.</p>
     * @param QualityEvaluationConfigureInfo $QualityEvaluationConfigure <p>(Not recommended. Use Configs instead.) Control parameters for video frame quality evaluation.</p>
     * @param VoiceConfigureInfo $VoiceConfigure <p>(Not recommended. Use Configs as an alternative.) Control parameters for audio (mute, bass, pop) detection.</p>
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
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
    }
}
