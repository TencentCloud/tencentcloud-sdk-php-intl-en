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
 * @method VideoTemplateInfo getVideo() Obtain 
 * @method void setVideo(VideoTemplateInfo $Video) Set 
 * @method AudioTemplateInfo getAudio() Obtain 
 * @method void setAudio(AudioTemplateInfo $Audio) Set 
 * @method integer getRemoveAudio() Obtain 
 * @method void setRemoveAudio(integer $RemoveAudio) Set 
 * @method integer getRemoveVideo() Obtain 
 * @method void setRemoveVideo(integer $RemoveVideo) Set 
 * @method TEHDConfig getTEHDConfig() Obtain 
 * @method void setTEHDConfig(TEHDConfig $TEHDConfig) Set 
 * @method EnhanceConfig getEnhanceConfig() Obtain 
 * @method void setEnhanceConfig(EnhanceConfig $EnhanceConfig) Set 
 * @method string getStdExtInfo() Obtain 
 * @method void setStdExtInfo(string $StdExtInfo) Set 
 */
class AdaptiveStreamTemplate extends AbstractModel
{
    /**
     * @var VideoTemplateInfo 
     */
    public $Video;

    /**
     * @var AudioTemplateInfo 
     */
    public $Audio;

    /**
     * @var integer 
     */
    public $RemoveAudio;

    /**
     * @var integer 
     */
    public $RemoveVideo;

    /**
     * @var TEHDConfig 
     */
    public $TEHDConfig;

    /**
     * @var EnhanceConfig 
     */
    public $EnhanceConfig;

    /**
     * @var string 
     */
    public $StdExtInfo;

    /**
     * @param VideoTemplateInfo $Video 
     * @param AudioTemplateInfo $Audio 
     * @param integer $RemoveAudio 
     * @param integer $RemoveVideo 
     * @param TEHDConfig $TEHDConfig 
     * @param EnhanceConfig $EnhanceConfig 
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
        if (array_key_exists("Video",$param) and $param["Video"] !== null) {
            $this->Video = new VideoTemplateInfo();
            $this->Video->deserialize($param["Video"]);
        }

        if (array_key_exists("Audio",$param) and $param["Audio"] !== null) {
            $this->Audio = new AudioTemplateInfo();
            $this->Audio->deserialize($param["Audio"]);
        }

        if (array_key_exists("RemoveAudio",$param) and $param["RemoveAudio"] !== null) {
            $this->RemoveAudio = $param["RemoveAudio"];
        }

        if (array_key_exists("RemoveVideo",$param) and $param["RemoveVideo"] !== null) {
            $this->RemoveVideo = $param["RemoveVideo"];
        }

        if (array_key_exists("TEHDConfig",$param) and $param["TEHDConfig"] !== null) {
            $this->TEHDConfig = new TEHDConfig();
            $this->TEHDConfig->deserialize($param["TEHDConfig"]);
        }

        if (array_key_exists("EnhanceConfig",$param) and $param["EnhanceConfig"] !== null) {
            $this->EnhanceConfig = new EnhanceConfig();
            $this->EnhanceConfig->deserialize($param["EnhanceConfig"]);
        }

        if (array_key_exists("StdExtInfo",$param) and $param["StdExtInfo"] !== null) {
            $this->StdExtInfo = $param["StdExtInfo"];
        }
    }
}
