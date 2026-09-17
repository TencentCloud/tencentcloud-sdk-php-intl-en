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
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method string getComment() Obtain 
 * @method void setComment(string $Comment) Set 
 * @method integer getSubtitleType() Obtain 
 * @method void setSubtitleType(integer $SubtitleType) Set 
 * @method string getVideoSrcLanguage() Obtain 
 * @method void setVideoSrcLanguage(string $VideoSrcLanguage) Set 
 * @method string getSubtitleFormat() Obtain 
 * @method void setSubtitleFormat(string $SubtitleFormat) Set 
 * @method string getTranslateSwitch() Obtain 
 * @method void setTranslateSwitch(string $TranslateSwitch) Set 
 * @method string getTranslateDstLanguage() Obtain 
 * @method void setTranslateDstLanguage(string $TranslateDstLanguage) Set 
 * @method integer getProcessType() Obtain 
 * @method void setProcessType(integer $ProcessType) Set 
 * @method MPSSelectingSubtitleAreasConfig getSelectingSubtitleAreasConfig() Obtain 
 * @method void setSelectingSubtitleAreasConfig(MPSSelectingSubtitleAreasConfig $SelectingSubtitleAreasConfig) Set 
 * @method integer getSubtitleEmbedId() Obtain 
 * @method void setSubtitleEmbedId(integer $SubtitleEmbedId) Set 
 * @method integer getSpeakerMode() Obtain 
 * @method void setSpeakerMode(integer $SpeakerMode) Set 
 * @method integer getSpeakerLabel() Obtain 
 * @method void setSpeakerLabel(integer $SpeakerLabel) Set 
 */
class MPSSmartSubtitleTemplate extends AbstractModel
{
    /**
     * @var string 
     */
    public $Name;

    /**
     * @var string 
     */
    public $Comment;

    /**
     * @var integer 
     */
    public $SubtitleType;

    /**
     * @var string 
     */
    public $VideoSrcLanguage;

    /**
     * @var string 
     */
    public $SubtitleFormat;

    /**
     * @var string 
     */
    public $TranslateSwitch;

    /**
     * @var string 
     */
    public $TranslateDstLanguage;

    /**
     * @var integer 
     */
    public $ProcessType;

    /**
     * @var MPSSelectingSubtitleAreasConfig 
     */
    public $SelectingSubtitleAreasConfig;

    /**
     * @var integer 
     */
    public $SubtitleEmbedId;

    /**
     * @var integer 
     */
    public $SpeakerMode;

    /**
     * @var integer 
     */
    public $SpeakerLabel;

    /**
     * @param string $Name 
     * @param string $Comment 
     * @param integer $SubtitleType 
     * @param string $VideoSrcLanguage 
     * @param string $SubtitleFormat 
     * @param string $TranslateSwitch 
     * @param string $TranslateDstLanguage 
     * @param integer $ProcessType 
     * @param MPSSelectingSubtitleAreasConfig $SelectingSubtitleAreasConfig 
     * @param integer $SubtitleEmbedId 
     * @param integer $SpeakerMode 
     * @param integer $SpeakerLabel 
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

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("SubtitleType",$param) and $param["SubtitleType"] !== null) {
            $this->SubtitleType = $param["SubtitleType"];
        }

        if (array_key_exists("VideoSrcLanguage",$param) and $param["VideoSrcLanguage"] !== null) {
            $this->VideoSrcLanguage = $param["VideoSrcLanguage"];
        }

        if (array_key_exists("SubtitleFormat",$param) and $param["SubtitleFormat"] !== null) {
            $this->SubtitleFormat = $param["SubtitleFormat"];
        }

        if (array_key_exists("TranslateSwitch",$param) and $param["TranslateSwitch"] !== null) {
            $this->TranslateSwitch = $param["TranslateSwitch"];
        }

        if (array_key_exists("TranslateDstLanguage",$param) and $param["TranslateDstLanguage"] !== null) {
            $this->TranslateDstLanguage = $param["TranslateDstLanguage"];
        }

        if (array_key_exists("ProcessType",$param) and $param["ProcessType"] !== null) {
            $this->ProcessType = $param["ProcessType"];
        }

        if (array_key_exists("SelectingSubtitleAreasConfig",$param) and $param["SelectingSubtitleAreasConfig"] !== null) {
            $this->SelectingSubtitleAreasConfig = new MPSSelectingSubtitleAreasConfig();
            $this->SelectingSubtitleAreasConfig->deserialize($param["SelectingSubtitleAreasConfig"]);
        }

        if (array_key_exists("SubtitleEmbedId",$param) and $param["SubtitleEmbedId"] !== null) {
            $this->SubtitleEmbedId = $param["SubtitleEmbedId"];
        }

        if (array_key_exists("SpeakerMode",$param) and $param["SpeakerMode"] !== null) {
            $this->SpeakerMode = $param["SpeakerMode"];
        }

        if (array_key_exists("SpeakerLabel",$param) and $param["SpeakerLabel"] !== null) {
            $this->SpeakerLabel = $param["SpeakerLabel"];
        }
    }
}
