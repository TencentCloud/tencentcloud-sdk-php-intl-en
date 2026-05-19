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
 * @method integer getSubAppId() Obtain <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getName() Obtain Audio and video quality inspection template name.
 * @method void setName(string $Name) Set Audio and video quality inspection template name.
 * @method string getComment() Obtain Audio and video quality inspection template description.
 * @method void setComment(string $Comment) Set Audio and video quality inspection template description.
 * @method float getScreenshotInterval() Obtain Frame interception interval, unit: seconds, minimum value 1. If left blank, the default frame interval is 1 second.
 * @method void setScreenshotInterval(float $ScreenshotInterval) Set Frame interception interval, unit: seconds, minimum value 1. If left blank, the default frame interval is 1 second.
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
 * @method VoiceConfigureInfo getVoiceConfigure() Obtain Audio (mute, bass, clipping) detection control parameters.
 * @method void setVoiceConfigure(VoiceConfigureInfo $VoiceConfigure) Set Audio (mute, bass, clipping) detection control parameters.
 * @method QualityEvaluationConfigureInfo getQualityEvaluationConfigure() Obtain Control parameters for video frame quality evaluation.
 * @method void setQualityEvaluationConfigure(QualityEvaluationConfigureInfo $QualityEvaluationConfigure) Set Control parameters for video frame quality evaluation.
 */
class CreateQualityInspectTemplateRequest extends AbstractModel
{
    /**
     * @var integer <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var string Audio and video quality inspection template name.
     */
    public $Name;

    /**
     * @var string Audio and video quality inspection template description.
     */
    public $Comment;

    /**
     * @var float Frame interception interval, unit: seconds, minimum value 1. If left blank, the default frame interval is 1 second.
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
     * @var VoiceConfigureInfo Audio (mute, bass, clipping) detection control parameters.
     */
    public $VoiceConfigure;

    /**
     * @var QualityEvaluationConfigureInfo Control parameters for video frame quality evaluation.
     */
    public $QualityEvaluationConfigure;

    /**
     * @param integer $SubAppId <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $Name Audio and video quality inspection template name.
     * @param string $Comment Audio and video quality inspection template description.
     * @param float $ScreenshotInterval Frame interception interval, unit: seconds, minimum value 1. If left blank, the default frame interval is 1 second.
     * @param JitterConfigureInfo $JitterConfigure Control parameters for video frame jitter and ghosting detection.
     * @param BlurConfigureInfo $BlurConfigure Control parameters for video frame blur detection.
     * @param AbnormalLightingConfigureInfo $AbnormalLightingConfigure Control parameters for low-light and overexposure detection in video frames.
     * @param CrashScreenConfigureInfo $CrashScreenConfigure Control parameters for screen glitch detection in video footage.
     * @param BlackWhiteEdgeConfigureInfo $BlackWhiteEdgeConfigure Control parameters for video picture black edge, white edge, black screen, and white screen detection.
     * @param NoiseConfigureInfo $NoiseConfigure Control parameters for video frame noise detection.
     * @param MosaicConfigureInfo $MosaicConfigure Control parameters for video frame mosaic detection.
     * @param QRCodeConfigureInfo $QRCodeConfigure Control parameters for video frame QR code detection.
     * @param VoiceConfigureInfo $VoiceConfigure Audio (mute, bass, clipping) detection control parameters.
     * @param QualityEvaluationConfigureInfo $QualityEvaluationConfigure Control parameters for video frame quality evaluation.
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
