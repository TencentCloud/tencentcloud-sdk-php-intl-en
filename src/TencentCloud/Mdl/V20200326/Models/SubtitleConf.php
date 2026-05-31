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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Subtitle template configuration.
 *
 * @method string getName() Obtain Template Name
 * @method void setName(string $Name) Set Template Name
 * @method string getCaptionSelectorName() Obtain Name of the subtitle selector. Required when CaptionSource is set to INPUT.
 * @method void setCaptionSelectorName(string $CaptionSelectorName) Set Name of the subtitle selector. Required when CaptionSource is set to INPUT.
 * @method string getCaptionSource() Obtain Available values: INPUT (source subtitle information), ANALYSIS (intelligent voice recognition to subtitle).
 * @method void setCaptionSource(string $CaptionSource) Set Available values: INPUT (source subtitle information), ANALYSIS (intelligent voice recognition to subtitle).
 * @method integer getContentType() Obtain Available values: 1 Source, 2 Source+Target, 3 Target (source language only, source language + target language, target language). When the output is WebVTT, it can only output one language.
 * @method void setContentType(integer $ContentType) Set Available values: 1 Source, 2 Source+Target, 3 Target (source language only, source language + target language, target language). When the output is WebVTT, it can only output one language.
 * @method integer getTargetType() Obtain Output mode: 1 Burn in, 2 Embedded, 3 WebVTT. When CaptionSource is INPUT, it supports only 2. When CaptionSource is ANALYSIS, it supports 1, 3.
 * @method void setTargetType(integer $TargetType) Set Output mode: 1 Burn in, 2 Embedded, 3 WebVTT. When CaptionSource is INPUT, it supports only 2. When CaptionSource is ANALYSIS, it supports 1, 3.
 * @method string getSourceLanguage() Obtain Original speech languages: Chinese, English, Japanese, Korean.
 * @method void setSourceLanguage(string $SourceLanguage) Set Original speech languages: Chinese, English, Japanese, Korean.
 * @method string getTargetLanguage() Obtain Target languages: Chinese, English, Japanese, Korean.
 * @method void setTargetLanguage(string $TargetLanguage) Set Target languages: Chinese, English, Japanese, Korean.
 * @method SubtitleFontConf getFontStyle() Obtain Font style configuration. Required for BurnIn.
 * @method void setFontStyle(SubtitleFontConf $FontStyle) Set Font style configuration. Required for BurnIn.
 * @method string getStateEffectMode() Obtain STEADY and DYNAMIC modes correspond to steady state and non-steady state respectively. Default is STEADY. Only select STEADY when the output is WebVTT.
 * @method void setStateEffectMode(string $StateEffectMode) Set STEADY and DYNAMIC modes correspond to steady state and non-steady state respectively. Default is STEADY. Only select STEADY when the output is WebVTT.
 * @method integer getSteadyStateDelayedTime() Obtain Steady-state delay time in seconds. Value range: 10, 20. Default: 10.
 * @method void setSteadyStateDelayedTime(integer $SteadyStateDelayedTime) Set Steady-state delay time in seconds. Value range: 10, 20. Default: 10.
 * @method string getAudioSelectorName() Obtain Audio selector name, required for speech recognition to generate WebVTT subtitles, can be empty
 * @method void setAudioSelectorName(string $AudioSelectorName) Set Audio selector name, required for speech recognition to generate WebVTT subtitles, can be empty
 * @method WebVTTFontStyle getWebVTTFontStyle() Obtain Format configuration for WebVTT output in speech recognition.
 * @method void setWebVTTFontStyle(WebVTTFontStyle $WebVTTFontStyle) Set Format configuration for WebVTT output in speech recognition.
 * @method string getLanguageCode() Obtain Language code, length 2-20.
 * @method void setLanguageCode(string $LanguageCode) Set Language code, length 2-20.
 * @method string getLanguageDescription() Obtain Language description, length less than 100.
 * @method void setLanguageDescription(string $LanguageDescription) Set Language description, length less than 100.
 */
class SubtitleConf extends AbstractModel
{
    /**
     * @var string Template Name
     */
    public $Name;

    /**
     * @var string Name of the subtitle selector. Required when CaptionSource is set to INPUT.
     */
    public $CaptionSelectorName;

    /**
     * @var string Available values: INPUT (source subtitle information), ANALYSIS (intelligent voice recognition to subtitle).
     */
    public $CaptionSource;

    /**
     * @var integer Available values: 1 Source, 2 Source+Target, 3 Target (source language only, source language + target language, target language). When the output is WebVTT, it can only output one language.
     */
    public $ContentType;

    /**
     * @var integer Output mode: 1 Burn in, 2 Embedded, 3 WebVTT. When CaptionSource is INPUT, it supports only 2. When CaptionSource is ANALYSIS, it supports 1, 3.
     */
    public $TargetType;

    /**
     * @var string Original speech languages: Chinese, English, Japanese, Korean.
     */
    public $SourceLanguage;

    /**
     * @var string Target languages: Chinese, English, Japanese, Korean.
     */
    public $TargetLanguage;

    /**
     * @var SubtitleFontConf Font style configuration. Required for BurnIn.
     */
    public $FontStyle;

    /**
     * @var string STEADY and DYNAMIC modes correspond to steady state and non-steady state respectively. Default is STEADY. Only select STEADY when the output is WebVTT.
     */
    public $StateEffectMode;

    /**
     * @var integer Steady-state delay time in seconds. Value range: 10, 20. Default: 10.
     */
    public $SteadyStateDelayedTime;

    /**
     * @var string Audio selector name, required for speech recognition to generate WebVTT subtitles, can be empty
     */
    public $AudioSelectorName;

    /**
     * @var WebVTTFontStyle Format configuration for WebVTT output in speech recognition.
     */
    public $WebVTTFontStyle;

    /**
     * @var string Language code, length 2-20.
     */
    public $LanguageCode;

    /**
     * @var string Language description, length less than 100.
     */
    public $LanguageDescription;

    /**
     * @param string $Name Template Name
     * @param string $CaptionSelectorName Name of the subtitle selector. Required when CaptionSource is set to INPUT.
     * @param string $CaptionSource Available values: INPUT (source subtitle information), ANALYSIS (intelligent voice recognition to subtitle).
     * @param integer $ContentType Available values: 1 Source, 2 Source+Target, 3 Target (source language only, source language + target language, target language). When the output is WebVTT, it can only output one language.
     * @param integer $TargetType Output mode: 1 Burn in, 2 Embedded, 3 WebVTT. When CaptionSource is INPUT, it supports only 2. When CaptionSource is ANALYSIS, it supports 1, 3.
     * @param string $SourceLanguage Original speech languages: Chinese, English, Japanese, Korean.
     * @param string $TargetLanguage Target languages: Chinese, English, Japanese, Korean.
     * @param SubtitleFontConf $FontStyle Font style configuration. Required for BurnIn.
     * @param string $StateEffectMode STEADY and DYNAMIC modes correspond to steady state and non-steady state respectively. Default is STEADY. Only select STEADY when the output is WebVTT.
     * @param integer $SteadyStateDelayedTime Steady-state delay time in seconds. Value range: 10, 20. Default: 10.
     * @param string $AudioSelectorName Audio selector name, required for speech recognition to generate WebVTT subtitles, can be empty
     * @param WebVTTFontStyle $WebVTTFontStyle Format configuration for WebVTT output in speech recognition.
     * @param string $LanguageCode Language code, length 2-20.
     * @param string $LanguageDescription Language description, length less than 100.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CaptionSelectorName",$param) and $param["CaptionSelectorName"] !== null) {
            $this->CaptionSelectorName = $param["CaptionSelectorName"];
        }

        if (array_key_exists("CaptionSource",$param) and $param["CaptionSource"] !== null) {
            $this->CaptionSource = $param["CaptionSource"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("SourceLanguage",$param) and $param["SourceLanguage"] !== null) {
            $this->SourceLanguage = $param["SourceLanguage"];
        }

        if (array_key_exists("TargetLanguage",$param) and $param["TargetLanguage"] !== null) {
            $this->TargetLanguage = $param["TargetLanguage"];
        }

        if (array_key_exists("FontStyle",$param) and $param["FontStyle"] !== null) {
            $this->FontStyle = new SubtitleFontConf();
            $this->FontStyle->deserialize($param["FontStyle"]);
        }

        if (array_key_exists("StateEffectMode",$param) and $param["StateEffectMode"] !== null) {
            $this->StateEffectMode = $param["StateEffectMode"];
        }

        if (array_key_exists("SteadyStateDelayedTime",$param) and $param["SteadyStateDelayedTime"] !== null) {
            $this->SteadyStateDelayedTime = $param["SteadyStateDelayedTime"];
        }

        if (array_key_exists("AudioSelectorName",$param) and $param["AudioSelectorName"] !== null) {
            $this->AudioSelectorName = $param["AudioSelectorName"];
        }

        if (array_key_exists("WebVTTFontStyle",$param) and $param["WebVTTFontStyle"] !== null) {
            $this->WebVTTFontStyle = new WebVTTFontStyle();
            $this->WebVTTFontStyle->deserialize($param["WebVTTFontStyle"]);
        }

        if (array_key_exists("LanguageCode",$param) and $param["LanguageCode"] !== null) {
            $this->LanguageCode = $param["LanguageCode"];
        }

        if (array_key_exists("LanguageDescription",$param) and $param["LanguageDescription"] !== null) {
            $this->LanguageDescription = $param["LanguageDescription"];
        }
    }
}
