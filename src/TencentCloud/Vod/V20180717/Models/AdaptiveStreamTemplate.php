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
 * Adaptive bitrate streaming parameter template
 *
 * @method VideoTemplateInfo getVideo() Obtain <p>Video parameter information.</p>
 * @method void setVideo(VideoTemplateInfo $Video) Set <p>Video parameter information.</p>
 * @method AudioTemplateInfo getAudio() Obtain <p>Audio parameter info.</p>
 * @method void setAudio(AudioTemplateInfo $Audio) Set <p>Audio parameter info.</p>
 * @method integer getRemoveAudio() Obtain <p>Remove audio stream. Parameter value range:</p><li>0: no,</li><li>1: yes.</li>
 * @method void setRemoveAudio(integer $RemoveAudio) Set <p>Remove audio stream. Parameter value range:</p><li>0: no,</li><li>1: yes.</li>
 * @method integer getRemoveVideo() Obtain <p>Remove video stream. Parameter value range:</p><li>0: no,</li><li>1: yes.</li>
 * @method void setRemoveVideo(integer $RemoveVideo) Set <p>Remove video stream. Parameter value range:</p><li>0: no,</li><li>1: yes.</li>
 * @method TEHDConfig getTEHDConfig() Obtain <p>TSC transcoding parameter.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTEHDConfig(TEHDConfig $TEHDConfig) Set <p>TSC transcoding parameter.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method EnhanceConfig getEnhanceConfig() Obtain <p>Audio/Video enhancement configuration.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnhanceConfig(EnhanceConfig $EnhanceConfig) Set <p>Audio/Video enhancement configuration.</p>
Note: This field may return null, indicating that no valid values can be obtained.
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
     * @var AudioTemplateInfo <p>Audio parameter info.</p>
     */
    public $Audio;

    /**
     * @var integer <p>Remove audio stream. Parameter value range:</p><li>0: no,</li><li>1: yes.</li>
     */
    public $RemoveAudio;

    /**
     * @var integer <p>Remove video stream. Parameter value range:</p><li>0: no,</li><li>1: yes.</li>
     */
    public $RemoveVideo;

    /**
     * @var TEHDConfig <p>TSC transcoding parameter.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TEHDConfig;

    /**
     * @var EnhanceConfig <p>Audio/Video enhancement configuration.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnhanceConfig;

    /**
     * @var string <p>Extended parameter.</p>
     */
    public $StdExtInfo;

    /**
     * @param VideoTemplateInfo $Video <p>Video parameter information.</p>
     * @param AudioTemplateInfo $Audio <p>Audio parameter info.</p>
     * @param integer $RemoveAudio <p>Remove audio stream. Parameter value range:</p><li>0: no,</li><li>1: yes.</li>
     * @param integer $RemoveVideo <p>Remove video stream. Parameter value range:</p><li>0: no,</li><li>1: yes.</li>
     * @param TEHDConfig $TEHDConfig <p>TSC transcoding parameter.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param EnhanceConfig $EnhanceConfig <p>Audio/Video enhancement configuration.</p>
Note: This field may return null, indicating that no valid values can be obtained.
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
