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
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method string getComment() Obtain 
 * @method void setComment(string $Comment) Set 
 * @method array getConfigs() Obtain 
 * @method void setConfigs(array $Configs) Set 
 * @method QualityInspectStrategy getStrategy() Obtain 
 * @method void setStrategy(QualityInspectStrategy $Strategy) Set 
 * @method float getScreenshotInterval() Obtain 
 * @method void setScreenshotInterval(float $ScreenshotInterval) Set 
 * @method JitterConfigureInfo getJitterConfigure() Obtain 
 * @method void setJitterConfigure(JitterConfigureInfo $JitterConfigure) Set 
 * @method BlurConfigureInfo getBlurConfigure() Obtain 
 * @method void setBlurConfigure(BlurConfigureInfo $BlurConfigure) Set 
 * @method AbnormalLightingConfigureInfo getAbnormalLightingConfigure() Obtain 
 * @method void setAbnormalLightingConfigure(AbnormalLightingConfigureInfo $AbnormalLightingConfigure) Set 
 * @method CrashScreenConfigureInfo getCrashScreenConfigure() Obtain 
 * @method void setCrashScreenConfigure(CrashScreenConfigureInfo $CrashScreenConfigure) Set 
 * @method BlackWhiteEdgeConfigureInfo getBlackWhiteEdgeConfigure() Obtain 
 * @method void setBlackWhiteEdgeConfigure(BlackWhiteEdgeConfigureInfo $BlackWhiteEdgeConfigure) Set 
 * @method NoiseConfigureInfo getNoiseConfigure() Obtain 
 * @method void setNoiseConfigure(NoiseConfigureInfo $NoiseConfigure) Set 
 * @method MosaicConfigureInfo getMosaicConfigure() Obtain 
 * @method void setMosaicConfigure(MosaicConfigureInfo $MosaicConfigure) Set 
 * @method QRCodeConfigureInfo getQRCodeConfigure() Obtain 
 * @method void setQRCodeConfigure(QRCodeConfigureInfo $QRCodeConfigure) Set 
 * @method VoiceConfigureInfo getVoiceConfigure() Obtain 
 * @method void setVoiceConfigure(VoiceConfigureInfo $VoiceConfigure) Set 
 * @method QualityEvaluationConfigureInfo getQualityEvaluationConfigure() Obtain 
 * @method void setQualityEvaluationConfigure(QualityEvaluationConfigureInfo $QualityEvaluationConfigure) Set 
 */
class CreateQualityInspectTemplateRequest extends AbstractModel
{
    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var string 
     */
    public $Name;

    /**
     * @var string 
     */
    public $Comment;

    /**
     * @var array 
     */
    public $Configs;

    /**
     * @var QualityInspectStrategy 
     */
    public $Strategy;

    /**
     * @var float 
     */
    public $ScreenshotInterval;

    /**
     * @var JitterConfigureInfo 
     */
    public $JitterConfigure;

    /**
     * @var BlurConfigureInfo 
     */
    public $BlurConfigure;

    /**
     * @var AbnormalLightingConfigureInfo 
     */
    public $AbnormalLightingConfigure;

    /**
     * @var CrashScreenConfigureInfo 
     */
    public $CrashScreenConfigure;

    /**
     * @var BlackWhiteEdgeConfigureInfo 
     */
    public $BlackWhiteEdgeConfigure;

    /**
     * @var NoiseConfigureInfo 
     */
    public $NoiseConfigure;

    /**
     * @var MosaicConfigureInfo 
     */
    public $MosaicConfigure;

    /**
     * @var QRCodeConfigureInfo 
     */
    public $QRCodeConfigure;

    /**
     * @var VoiceConfigureInfo 
     */
    public $VoiceConfigure;

    /**
     * @var QualityEvaluationConfigureInfo 
     */
    public $QualityEvaluationConfigure;

    /**
     * @param integer $SubAppId 
     * @param string $Name 
     * @param string $Comment 
     * @param array $Configs 
     * @param QualityInspectStrategy $Strategy 
     * @param float $ScreenshotInterval 
     * @param JitterConfigureInfo $JitterConfigure 
     * @param BlurConfigureInfo $BlurConfigure 
     * @param AbnormalLightingConfigureInfo $AbnormalLightingConfigure 
     * @param CrashScreenConfigureInfo $CrashScreenConfigure 
     * @param BlackWhiteEdgeConfigureInfo $BlackWhiteEdgeConfigure 
     * @param NoiseConfigureInfo $NoiseConfigure 
     * @param MosaicConfigureInfo $MosaicConfigure 
     * @param QRCodeConfigureInfo $QRCodeConfigure 
     * @param VoiceConfigureInfo $VoiceConfigure 
     * @param QualityEvaluationConfigureInfo $QualityEvaluationConfigure 
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
