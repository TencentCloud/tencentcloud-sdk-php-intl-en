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
 * @method string getStorageMode() Obtain 
 * @method void setStorageMode(string $StorageMode) Set 
 * @method string getMediaName() Obtain 
 * @method void setMediaName(string $MediaName) Set 
 * @method integer getClassId() Obtain 
 * @method void setClassId(integer $ClassId) Set 
 * @method string getExpireTime() Obtain 
 * @method void setExpireTime(string $ExpireTime) Set 
 * @method float getDuration() Obtain 
 * @method void setDuration(float $Duration) Set 
 * @method string getResolution() Obtain 
 * @method void setResolution(string $Resolution) Set 
 * @method string getAspectRatio() Obtain 
 * @method void setAspectRatio(string $AspectRatio) Set 
 * @method string getAudioGeneration() Obtain 
 * @method void setAudioGeneration(string $AudioGeneration) Set 
 * @method string getPersonGeneration() Obtain 
 * @method void setPersonGeneration(string $PersonGeneration) Set 
 * @method string getInputComplianceCheck() Obtain 
 * @method void setInputComplianceCheck(string $InputComplianceCheck) Set 
 * @method string getOutputComplianceCheck() Obtain 
 * @method void setOutputComplianceCheck(string $OutputComplianceCheck) Set 
 * @method string getEnhanceSwitch() Obtain 
 * @method void setEnhanceSwitch(string $EnhanceSwitch) Set 
 * @method string getOffPeak() Obtain 
 * @method void setOffPeak(string $OffPeak) Set 
 * @method string getFrameInterpolate() Obtain 
 * @method void setFrameInterpolate(string $FrameInterpolate) Set 
 * @method string getLogoAdd() Obtain 
 * @method void setLogoAdd(string $LogoAdd) Set 
 * @method string getEnableBGM() Obtain 
 * @method void setEnableBGM(string $EnableBGM) Set 
 */
class AigcVideoOutputConfig extends AbstractModel
{
    /**
     * @var string 
     */
    public $StorageMode;

    /**
     * @var string 
     */
    public $MediaName;

    /**
     * @var integer 
     */
    public $ClassId;

    /**
     * @var string 
     */
    public $ExpireTime;

    /**
     * @var float 
     */
    public $Duration;

    /**
     * @var string 
     */
    public $Resolution;

    /**
     * @var string 
     */
    public $AspectRatio;

    /**
     * @var string 
     */
    public $AudioGeneration;

    /**
     * @var string 
     */
    public $PersonGeneration;

    /**
     * @var string 
     */
    public $InputComplianceCheck;

    /**
     * @var string 
     */
    public $OutputComplianceCheck;

    /**
     * @var string 
     */
    public $EnhanceSwitch;

    /**
     * @var string 
     */
    public $OffPeak;

    /**
     * @var string 
     */
    public $FrameInterpolate;

    /**
     * @var string 
     */
    public $LogoAdd;

    /**
     * @var string 
     */
    public $EnableBGM;

    /**
     * @param string $StorageMode 
     * @param string $MediaName 
     * @param integer $ClassId 
     * @param string $ExpireTime 
     * @param float $Duration 
     * @param string $Resolution 
     * @param string $AspectRatio 
     * @param string $AudioGeneration 
     * @param string $PersonGeneration 
     * @param string $InputComplianceCheck 
     * @param string $OutputComplianceCheck 
     * @param string $EnhanceSwitch 
     * @param string $OffPeak 
     * @param string $FrameInterpolate 
     * @param string $LogoAdd 
     * @param string $EnableBGM 
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
        if (array_key_exists("StorageMode",$param) and $param["StorageMode"] !== null) {
            $this->StorageMode = $param["StorageMode"];
        }

        if (array_key_exists("MediaName",$param) and $param["MediaName"] !== null) {
            $this->MediaName = $param["MediaName"];
        }

        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("AspectRatio",$param) and $param["AspectRatio"] !== null) {
            $this->AspectRatio = $param["AspectRatio"];
        }

        if (array_key_exists("AudioGeneration",$param) and $param["AudioGeneration"] !== null) {
            $this->AudioGeneration = $param["AudioGeneration"];
        }

        if (array_key_exists("PersonGeneration",$param) and $param["PersonGeneration"] !== null) {
            $this->PersonGeneration = $param["PersonGeneration"];
        }

        if (array_key_exists("InputComplianceCheck",$param) and $param["InputComplianceCheck"] !== null) {
            $this->InputComplianceCheck = $param["InputComplianceCheck"];
        }

        if (array_key_exists("OutputComplianceCheck",$param) and $param["OutputComplianceCheck"] !== null) {
            $this->OutputComplianceCheck = $param["OutputComplianceCheck"];
        }

        if (array_key_exists("EnhanceSwitch",$param) and $param["EnhanceSwitch"] !== null) {
            $this->EnhanceSwitch = $param["EnhanceSwitch"];
        }

        if (array_key_exists("OffPeak",$param) and $param["OffPeak"] !== null) {
            $this->OffPeak = $param["OffPeak"];
        }

        if (array_key_exists("FrameInterpolate",$param) and $param["FrameInterpolate"] !== null) {
            $this->FrameInterpolate = $param["FrameInterpolate"];
        }

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }

        if (array_key_exists("EnableBGM",$param) and $param["EnableBGM"] !== null) {
            $this->EnableBGM = $param["EnableBGM"];
        }
    }
}
