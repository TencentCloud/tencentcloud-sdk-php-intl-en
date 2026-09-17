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
 * 
 *
 * @method integer getDefinition() Obtain 
 * @method void setDefinition(integer $Definition) Set 
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method string getComment() Obtain 
 * @method void setComment(string $Comment) Set 
 * @method array getConfigs() Obtain 
 * @method void setConfigs(array $Configs) Set 
 * @method QualityInspectStrategy getStrategy() Obtain 
 * @method void setStrategy(QualityInspectStrategy $Strategy) Set 
 * @method string getCreateTime() Obtain 
 * @method void setCreateTime(string $CreateTime) Set 
 * @method string getUpdateTime() Obtain 
 * @method void setUpdateTime(string $UpdateTime) Set 
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
 * @method QualityEvaluationConfigureInfo getQualityEvaluationConfigure() Obtain 
 * @method void setQualityEvaluationConfigure(QualityEvaluationConfigureInfo $QualityEvaluationConfigure) Set 
 * @method VoiceConfigureInfo getVoiceConfigure() Obtain 
 * @method void setVoiceConfigure(VoiceConfigureInfo $VoiceConfigure) Set 
 */
class QualityInspectTemplateItem extends AbstractModel
{
    /**
     * @var integer 
     */
    public $Definition;

    /**
     * @var string 
     */
    public $Type;

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
     * @var string 
     */
    public $CreateTime;

    /**
     * @var string 
     */
    public $UpdateTime;

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
     * @var QualityEvaluationConfigureInfo 
     */
    public $QualityEvaluationConfigure;

    /**
     * @var VoiceConfigureInfo 
     */
    public $VoiceConfigure;

    /**
     * @param integer $Definition 
     * @param string $Type 
     * @param string $Name 
     * @param string $Comment 
     * @param array $Configs 
     * @param QualityInspectStrategy $Strategy 
     * @param string $CreateTime 
     * @param string $UpdateTime 
     * @param float $ScreenshotInterval 
     * @param JitterConfigureInfo $JitterConfigure 
     * @param BlurConfigureInfo $BlurConfigure 
     * @param AbnormalLightingConfigureInfo $AbnormalLightingConfigure 
     * @param CrashScreenConfigureInfo $CrashScreenConfigure 
     * @param BlackWhiteEdgeConfigureInfo $BlackWhiteEdgeConfigure 
     * @param NoiseConfigureInfo $NoiseConfigure 
     * @param MosaicConfigureInfo $MosaicConfigure 
     * @param QRCodeConfigureInfo $QRCodeConfigure 
     * @param QualityEvaluationConfigureInfo $QualityEvaluationConfigure 
     * @param VoiceConfigureInfo $VoiceConfigure 
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
