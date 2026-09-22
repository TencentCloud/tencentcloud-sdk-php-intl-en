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
 * Adaptive transcoding stream parameter template
 *
 * @method VideoTemplateInfo getVideo() Obtain <p>Video parameter information.</p>
 * @method void setVideo(VideoTemplateInfo $Video) Set <p>Video parameter information.</p>
 * @method AudioTemplateInfo getAudio() Obtain <p>Audio parameter information.</p>
 * @method void setAudio(AudioTemplateInfo $Audio) Set <p>Audio parameter information.</p>
 * @method integer getRemoveAudio() Obtain <p>Indicates whether to remove the audio stream. Value range:</p><li>0: No.</li><li>1: Yes.</li>
 * @method void setRemoveAudio(integer $RemoveAudio) Set <p>Indicates whether to remove the audio stream. Value range:</p><li>0: No.</li><li>1: Yes.</li>
 * @method integer getRemoveVideo() Obtain <p>Indicates whether to remove the video stream. Value range:</p><li>0: No.</li><li>1: Yes.</li>
 * @method void setRemoveVideo(integer $RemoveVideo) Set <p>Indicates whether to remove the video stream. Value range:</p><li>0: No.</li><li>1: Yes.</li>
 * @method TEHDConfig getTEHDConfig() Obtain <p>Top Speed Codec transcoding parameters.</p>
 * @method void setTEHDConfig(TEHDConfig $TEHDConfig) Set <p>Top Speed Codec transcoding parameters.</p>
 * @method EnhanceConfig getEnhanceConfig() Obtain <p>Audio/video enhancement configurations.</p>
 * @method void setEnhanceConfig(EnhanceConfig $EnhanceConfig) Set <p>Audio/video enhancement configurations.</p>
 * @method string getStdExtInfo() Obtain <p>Extended parameter.</p>
 * @method void setStdExtInfo(string $StdExtInfo) Set <p>Extended parameter.</p>
 */
class AdaptiveStreamTemplate extends AbstractModel
{
    /**
     * @var VideoTemplateInfo <p>Video parameter information.</p>
     */
    public $Video;

    /**
     * @var AudioTemplateInfo <p>Audio parameter information.</p>
     */
    public $Audio;

    /**
     * @var integer <p>Indicates whether to remove the audio stream. Value range:</p><li>0: No.</li><li>1: Yes.</li>
     */
    public $RemoveAudio;

    /**
     * @var integer <p>Indicates whether to remove the video stream. Value range:</p><li>0: No.</li><li>1: Yes.</li>
     */
    public $RemoveVideo;

    /**
     * @var TEHDConfig <p>Top Speed Codec transcoding parameters.</p>
     */
    public $TEHDConfig;

    /**
     * @var EnhanceConfig <p>Audio/video enhancement configurations.</p>
     */
    public $EnhanceConfig;

    /**
     * @var string <p>Extended parameter.</p>
     */
    public $StdExtInfo;

    /**
     * @param VideoTemplateInfo $Video <p>Video parameter information.</p>
     * @param AudioTemplateInfo $Audio <p>Audio parameter information.</p>
     * @param integer $RemoveAudio <p>Indicates whether to remove the audio stream. Value range:</p><li>0: No.</li><li>1: Yes.</li>
     * @param integer $RemoveVideo <p>Indicates whether to remove the video stream. Value range:</p><li>0: No.</li><li>1: Yes.</li>
     * @param TEHDConfig $TEHDConfig <p>Top Speed Codec transcoding parameters.</p>
     * @param EnhanceConfig $EnhanceConfig <p>Audio/video enhancement configurations.</p>
     * @param string $StdExtInfo <p>Extended parameter.</p>
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
