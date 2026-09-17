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
 * @method string getContainer() Obtain 
 * @method void setContainer(string $Container) Set 
 * @method integer getRemoveVideo() Obtain 
 * @method void setRemoveVideo(integer $RemoveVideo) Set 
 * @method integer getRemoveAudio() Obtain 
 * @method void setRemoveAudio(integer $RemoveAudio) Set 
 * @method VideoTemplateInfoForUpdate getVideoTemplate() Obtain 
 * @method void setVideoTemplate(VideoTemplateInfoForUpdate $VideoTemplate) Set 
 * @method AudioTemplateInfoForUpdate getAudioTemplate() Obtain 
 * @method void setAudioTemplate(AudioTemplateInfoForUpdate $AudioTemplate) Set 
 * @method TEHDConfigForUpdate getTEHDConfig() Obtain 
 * @method void setTEHDConfig(TEHDConfigForUpdate $TEHDConfig) Set 
 * @method string getStdExtInfo() Obtain 
 * @method void setStdExtInfo(string $StdExtInfo) Set 
 */
class OverrideTranscodeParameter extends AbstractModel
{
    /**
     * @var string 
     */
    public $Container;

    /**
     * @var integer 
     */
    public $RemoveVideo;

    /**
     * @var integer 
     */
    public $RemoveAudio;

    /**
     * @var VideoTemplateInfoForUpdate 
     */
    public $VideoTemplate;

    /**
     * @var AudioTemplateInfoForUpdate 
     */
    public $AudioTemplate;

    /**
     * @var TEHDConfigForUpdate 
     */
    public $TEHDConfig;

    /**
     * @var string 
     */
    public $StdExtInfo;

    /**
     * @param string $Container 
     * @param integer $RemoveVideo 
     * @param integer $RemoveAudio 
     * @param VideoTemplateInfoForUpdate $VideoTemplate 
     * @param AudioTemplateInfoForUpdate $AudioTemplate 
     * @param TEHDConfigForUpdate $TEHDConfig 
     * @param string $StdExtInfo 
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
        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("RemoveVideo",$param) and $param["RemoveVideo"] !== null) {
            $this->RemoveVideo = $param["RemoveVideo"];
        }

        if (array_key_exists("RemoveAudio",$param) and $param["RemoveAudio"] !== null) {
            $this->RemoveAudio = $param["RemoveAudio"];
        }

        if (array_key_exists("VideoTemplate",$param) and $param["VideoTemplate"] !== null) {
            $this->VideoTemplate = new VideoTemplateInfoForUpdate();
            $this->VideoTemplate->deserialize($param["VideoTemplate"]);
        }

        if (array_key_exists("AudioTemplate",$param) and $param["AudioTemplate"] !== null) {
            $this->AudioTemplate = new AudioTemplateInfoForUpdate();
            $this->AudioTemplate->deserialize($param["AudioTemplate"]);
        }

        if (array_key_exists("TEHDConfig",$param) and $param["TEHDConfig"] !== null) {
            $this->TEHDConfig = new TEHDConfigForUpdate();
            $this->TEHDConfig->deserialize($param["TEHDConfig"]);
        }

        if (array_key_exists("StdExtInfo",$param) and $param["StdExtInfo"] !== null) {
            $this->StdExtInfo = $param["StdExtInfo"];
        }
    }
}
