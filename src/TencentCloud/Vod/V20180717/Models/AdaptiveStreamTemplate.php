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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Adaptive bitrate streaming parameter template
 *
 * @method VideoTemplateInfo getVideo() Obtain Video parameter information.
 * @method void setVideo(VideoTemplateInfo $Video) Set Video parameter information.
 * @method AudioTemplateInfo getAudio() Obtain Audio parameter information.
 * @method void setAudio(AudioTemplateInfo $Audio) Set Audio parameter information.
 * @method integer getRemoveAudio() Obtain Whether to remove audio stream. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
 * @method void setRemoveAudio(integer $RemoveAudio) Set Whether to remove audio stream. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
 * @method integer getRemoveVideo() Obtain Whether to remove a video stream. Valid values:
<li>0: no</li>
<li>1: yes</li>
 * @method void setRemoveVideo(integer $RemoveVideo) Set Whether to remove a video stream. Valid values:
<li>0: no</li>
<li>1: yes</li>
 * @method TEHDConfig getTEHDConfig() Obtain TESHD transcoding parameters
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setTEHDConfig(TEHDConfig $TEHDConfig) Set TESHD transcoding parameters
Note: This field may return `null`, indicating that no valid value was found.
 */
class AdaptiveStreamTemplate extends AbstractModel
{
    /**
     * @var VideoTemplateInfo Video parameter information.
     */
    public $Video;

    /**
     * @var AudioTemplateInfo Audio parameter information.
     */
    public $Audio;

    /**
     * @var integer Whether to remove audio stream. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
     */
    public $RemoveAudio;

    /**
     * @var integer Whether to remove a video stream. Valid values:
<li>0: no</li>
<li>1: yes</li>
     */
    public $RemoveVideo;

    /**
     * @var TEHDConfig TESHD transcoding parameters
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $TEHDConfig;

    /**
     * @param VideoTemplateInfo $Video Video parameter information.
     * @param AudioTemplateInfo $Audio Audio parameter information.
     * @param integer $RemoveAudio Whether to remove audio stream. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
     * @param integer $RemoveVideo Whether to remove a video stream. Valid values:
<li>0: no</li>
<li>1: yes</li>
     * @param TEHDConfig $TEHDConfig TESHD transcoding parameters
Note: This field may return `null`, indicating that no valid value was found.
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
    }
}
