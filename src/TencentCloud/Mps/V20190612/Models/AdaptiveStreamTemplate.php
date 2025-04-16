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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Adaptive bitrate streaming parameter template
 *
 * @method AudioTemplateInfo getAudio() Obtain Audio parameter information.
 * @method void setAudio(AudioTemplateInfo $Audio) Set Audio parameter information.
 * @method VideoTemplateInfo getVideo() Obtain Video parameter information.
 * @method void setVideo(VideoTemplateInfo $Video) Set Video parameter information.
 * @method integer getRemoveAudio() Obtain Whether to remove audio stream. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
 * @method void setRemoveAudio(integer $RemoveAudio) Set Whether to remove audio stream. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
 * @method integer getRemoveVideo() Obtain Whether to remove video stream. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
 * @method void setRemoveVideo(integer $RemoveVideo) Set Whether to remove video stream. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
 * @method array getAudioList() Obtain Audio parameter information list.
The parameter is only used when merging multiple audio tracks in adaptive bitrate transcoding. the maximum length of the parameter array is 64.

Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAudioList(array $AudioList) Set Audio parameter information list.
The parameter is only used when merging multiple audio tracks in adaptive bitrate transcoding. the maximum length of the parameter array is 64.

Note: This field may return null, indicating that no valid value can be obtained.
 */
class AdaptiveStreamTemplate extends AbstractModel
{
    /**
     * @var AudioTemplateInfo Audio parameter information.
     */
    public $Audio;

    /**
     * @var VideoTemplateInfo Video parameter information.
     */
    public $Video;

    /**
     * @var integer Whether to remove audio stream. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
     */
    public $RemoveAudio;

    /**
     * @var integer Whether to remove video stream. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
     */
    public $RemoveVideo;

    /**
     * @var array Audio parameter information list.
The parameter is only used when merging multiple audio tracks in adaptive bitrate transcoding. the maximum length of the parameter array is 64.

Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $AudioList;

    /**
     * @param AudioTemplateInfo $Audio Audio parameter information.
     * @param VideoTemplateInfo $Video Video parameter information.
     * @param integer $RemoveAudio Whether to remove audio stream. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
     * @param integer $RemoveVideo Whether to remove video stream. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
     * @param array $AudioList Audio parameter information list.
The parameter is only used when merging multiple audio tracks in adaptive bitrate transcoding. the maximum length of the parameter array is 64.

Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("Audio",$param) and $param["Audio"] !== null) {
            $this->Audio = new AudioTemplateInfo();
            $this->Audio->deserialize($param["Audio"]);
        }

        if (array_key_exists("Video",$param) and $param["Video"] !== null) {
            $this->Video = new VideoTemplateInfo();
            $this->Video->deserialize($param["Video"]);
        }

        if (array_key_exists("RemoveAudio",$param) and $param["RemoveAudio"] !== null) {
            $this->RemoveAudio = $param["RemoveAudio"];
        }

        if (array_key_exists("RemoveVideo",$param) and $param["RemoveVideo"] !== null) {
            $this->RemoveVideo = $param["RemoveVideo"];
        }

        if (array_key_exists("AudioList",$param) and $param["AudioList"] !== null) {
            $this->AudioList = [];
            foreach ($param["AudioList"] as $key => $value){
                $obj = new AudioTemplateInfo();
                $obj->deserialize($value);
                array_push($this->AudioList, $obj);
            }
        }
    }
}
