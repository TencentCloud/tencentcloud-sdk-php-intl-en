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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Subtitle template configuration.
 *
 * @method string getName() Obtain Template name.
 * @method void setName(string $Name) Set Template name.
 * @method string getCaptionSelectorName() Obtain Name of caption selector. Required when CaptionSource selects `INPUT`.
 * @method void setCaptionSelectorName(string $CaptionSelectorName) Set Name of caption selector. Required when CaptionSource selects `INPUT`.
 * @method string getCaptionSource() Obtain Optional values: INPUT (source subtitle information), ANALYSIS (intelligent speech recognition to subtitles).
 * @method void setCaptionSource(string $CaptionSource) Set Optional values: INPUT (source subtitle information), ANALYSIS (intelligent speech recognition to subtitles).
 * @method integer getContentType() Obtain Optional values: 1 Source, 2 Source+Target, 3 Target (original language only, original language + translation language, translation language). Required when CaptionSource selects `ANALYSIS `.
 * @method void setContentType(integer $ContentType) Set Optional values: 1 Source, 2 Source+Target, 3 Target (original language only, original language + translation language, translation language). Required when CaptionSource selects `ANALYSIS `.
 * @method integer getTargetType() Obtain Output mode: 1 Burn in, 2 Embedded. Support `2` when CaptionSource selects `INPUT`. Support `1` when CaptionSource selects `ANALYSIS `.
 * @method void setTargetType(integer $TargetType) Set Output mode: 1 Burn in, 2 Embedded. Support `2` when CaptionSource selects `INPUT`. Support `1` when CaptionSource selects `ANALYSIS `.
 * @method string getSourceLanguage() Obtain Original phonetic language.
Optional values: Chinese, English, Japanese, Korean. Required when CaptionSource selects `ANALYSIS `.
 * @method void setSourceLanguage(string $SourceLanguage) Set Original phonetic language.
Optional values: Chinese, English, Japanese, Korean. Required when CaptionSource selects `ANALYSIS `.
 * @method string getTargetLanguage() Obtain Target language.
Optional values: Chinese, English, Japanese, Korean. Required when CaptionSource selects `ANALYSIS `.
 * @method void setTargetLanguage(string $TargetLanguage) Set Target language.
Optional values: Chinese, English, Japanese, Korean. Required when CaptionSource selects `ANALYSIS `.
 * @method SubtitleFontConf getFontStyle() Obtain Font style configuration. Required when CaptionSource selects `ANALYSIS `.
 * @method void setFontStyle(SubtitleFontConf $FontStyle) Set Font style configuration. Required when CaptionSource selects `ANALYSIS `.
 * @method string getStateEffectMode() Obtain There are two modes: STEADY and DYNAMIC, corresponding to steady state and unstable state respectively; the default is STEADY. Required when CaptionSource selects `ANALYSIS `.
 * @method void setStateEffectMode(string $StateEffectMode) Set There are two modes: STEADY and DYNAMIC, corresponding to steady state and unstable state respectively; the default is STEADY. Required when CaptionSource selects `ANALYSIS `.
 * @method integer getSteadyStateDelayedTime() Obtain Steady-state delay time, unit seconds; optional values: 10, 20, default 10. Required when CaptionSource selects `ANALYSIS `.
 * @method void setSteadyStateDelayedTime(integer $SteadyStateDelayedTime) Set Steady-state delay time, unit seconds; optional values: 10, 20, default 10. Required when CaptionSource selects `ANALYSIS `.
 */
class SubtitleConf extends AbstractModel
{
    /**
     * @var string Template name.
     */
    public $Name;

    /**
     * @var string Name of caption selector. Required when CaptionSource selects `INPUT`.
     */
    public $CaptionSelectorName;

    /**
     * @var string Optional values: INPUT (source subtitle information), ANALYSIS (intelligent speech recognition to subtitles).
     */
    public $CaptionSource;

    /**
     * @var integer Optional values: 1 Source, 2 Source+Target, 3 Target (original language only, original language + translation language, translation language). Required when CaptionSource selects `ANALYSIS `.
     */
    public $ContentType;

    /**
     * @var integer Output mode: 1 Burn in, 2 Embedded. Support `2` when CaptionSource selects `INPUT`. Support `1` when CaptionSource selects `ANALYSIS `.
     */
    public $TargetType;

    /**
     * @var string Original phonetic language.
Optional values: Chinese, English, Japanese, Korean. Required when CaptionSource selects `ANALYSIS `.
     */
    public $SourceLanguage;

    /**
     * @var string Target language.
Optional values: Chinese, English, Japanese, Korean. Required when CaptionSource selects `ANALYSIS `.
     */
    public $TargetLanguage;

    /**
     * @var SubtitleFontConf Font style configuration. Required when CaptionSource selects `ANALYSIS `.
     */
    public $FontStyle;

    /**
     * @var string There are two modes: STEADY and DYNAMIC, corresponding to steady state and unstable state respectively; the default is STEADY. Required when CaptionSource selects `ANALYSIS `.
     */
    public $StateEffectMode;

    /**
     * @var integer Steady-state delay time, unit seconds; optional values: 10, 20, default 10. Required when CaptionSource selects `ANALYSIS `.
     */
    public $SteadyStateDelayedTime;

    /**
     * @param string $Name Template name.
     * @param string $CaptionSelectorName Name of caption selector. Required when CaptionSource selects `INPUT`.
     * @param string $CaptionSource Optional values: INPUT (source subtitle information), ANALYSIS (intelligent speech recognition to subtitles).
     * @param integer $ContentType Optional values: 1 Source, 2 Source+Target, 3 Target (original language only, original language + translation language, translation language). Required when CaptionSource selects `ANALYSIS `.
     * @param integer $TargetType Output mode: 1 Burn in, 2 Embedded. Support `2` when CaptionSource selects `INPUT`. Support `1` when CaptionSource selects `ANALYSIS `.
     * @param string $SourceLanguage Original phonetic language.
Optional values: Chinese, English, Japanese, Korean. Required when CaptionSource selects `ANALYSIS `.
     * @param string $TargetLanguage Target language.
Optional values: Chinese, English, Japanese, Korean. Required when CaptionSource selects `ANALYSIS `.
     * @param SubtitleFontConf $FontStyle Font style configuration. Required when CaptionSource selects `ANALYSIS `.
     * @param string $StateEffectMode There are two modes: STEADY and DYNAMIC, corresponding to steady state and unstable state respectively; the default is STEADY. Required when CaptionSource selects `ANALYSIS `.
     * @param integer $SteadyStateDelayedTime Steady-state delay time, unit seconds; optional values: 10, 20, default 10. Required when CaptionSource selects `ANALYSIS `.
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
    }
}
