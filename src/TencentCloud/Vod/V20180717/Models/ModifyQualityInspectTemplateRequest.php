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
 * @method integer getDefinition() Obtain 
 * @method void setDefinition(integer $Definition) Set 
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
 * @method JitterConfigureInfoForUpdate getJitterConfigure() Obtain 
 * @method void setJitterConfigure(JitterConfigureInfoForUpdate $JitterConfigure) Set 
 * @method BlurConfigureInfoForUpdate getBlurConfigure() Obtain 
 * @method void setBlurConfigure(BlurConfigureInfoForUpdate $BlurConfigure) Set 
 * @method AbnormalLightingConfigureInfoForUpdate getAbnormalLightingConfigure() Obtain 
 * @method void setAbnormalLightingConfigure(AbnormalLightingConfigureInfoForUpdate $AbnormalLightingConfigure) Set 
 * @method CrashScreenConfigureInfoForUpdate getCrashScreenConfigure() Obtain 
 * @method void setCrashScreenConfigure(CrashScreenConfigureInfoForUpdate $CrashScreenConfigure) Set 
 * @method BlackWhiteEdgeConfigureInfoForUpdate getBlackWhiteEdgeConfigure() Obtain 
 * @method void setBlackWhiteEdgeConfigure(BlackWhiteEdgeConfigureInfoForUpdate $BlackWhiteEdgeConfigure) Set 
 * @method NoiseConfigureInfoForUpdate getNoiseConfigure() Obtain 
 * @method void setNoiseConfigure(NoiseConfigureInfoForUpdate $NoiseConfigure) Set 
 * @method MosaicConfigureInfoForUpdate getMosaicConfigure() Obtain 
 * @method void setMosaicConfigure(MosaicConfigureInfoForUpdate $MosaicConfigure) Set 
 * @method QRCodeConfigureInfoForUpdate getQRCodeConfigure() Obtain 
 * @method void setQRCodeConfigure(QRCodeConfigureInfoForUpdate $QRCodeConfigure) Set 
 * @method VoiceConfigureInfoForUpdate getVoiceConfigure() Obtain 
 * @method void setVoiceConfigure(VoiceConfigureInfoForUpdate $VoiceConfigure) Set 
 * @method QualityEvaluationConfigureInfoForUpdate getQualityEvaluationConfigure() Obtain 
 * @method void setQualityEvaluationConfigure(QualityEvaluationConfigureInfoForUpdate $QualityEvaluationConfigure) Set 
 */
class ModifyQualityInspectTemplateRequest extends AbstractModel
{
    /**
     * @var integer 
     */
    public $Definition;

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
     * @var JitterConfigureInfoForUpdate 
     */
    public $JitterConfigure;

    /**
     * @var BlurConfigureInfoForUpdate 
     */
    public $BlurConfigure;

    /**
     * @var AbnormalLightingConfigureInfoForUpdate 
     */
    public $AbnormalLightingConfigure;

    /**
     * @var CrashScreenConfigureInfoForUpdate 
     */
    public $CrashScreenConfigure;

    /**
     * @var BlackWhiteEdgeConfigureInfoForUpdate 
     */
    public $BlackWhiteEdgeConfigure;

    /**
     * @var NoiseConfigureInfoForUpdate 
     */
    public $NoiseConfigure;

    /**
     * @var MosaicConfigureInfoForUpdate 
     */
    public $MosaicConfigure;

    /**
     * @var QRCodeConfigureInfoForUpdate 
     */
    public $QRCodeConfigure;

    /**
     * @var VoiceConfigureInfoForUpdate 
     */
    public $VoiceConfigure;

    /**
     * @var QualityEvaluationConfigureInfoForUpdate 
     */
    public $QualityEvaluationConfigure;

    /**
     * @param integer $Definition 
     * @param integer $SubAppId 
     * @param string $Name 
     * @param string $Comment 
     * @param array $Configs 
     * @param QualityInspectStrategy $Strategy 
     * @param float $ScreenshotInterval 
     * @param JitterConfigureInfoForUpdate $JitterConfigure 
     * @param BlurConfigureInfoForUpdate $BlurConfigure 
     * @param AbnormalLightingConfigureInfoForUpdate $AbnormalLightingConfigure 
     * @param CrashScreenConfigureInfoForUpdate $CrashScreenConfigure 
     * @param BlackWhiteEdgeConfigureInfoForUpdate $BlackWhiteEdgeConfigure 
     * @param NoiseConfigureInfoForUpdate $NoiseConfigure 
     * @param MosaicConfigureInfoForUpdate $MosaicConfigure 
     * @param QRCodeConfigureInfoForUpdate $QRCodeConfigure 
     * @param VoiceConfigureInfoForUpdate $VoiceConfigure 
     * @param QualityEvaluationConfigureInfoForUpdate $QualityEvaluationConfigure 
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
