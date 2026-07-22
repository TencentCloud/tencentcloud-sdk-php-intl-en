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
 * Custom video transcoding parameters.
 *
 * @method string getContainer() Obtain Container format. Valid values: mp4, flv, hls, mp3, flac, ogg, m4a, and wav. Among them, mp3, flac, ogg, m4a, and wav are for audio-only files.
 * @method void setContainer(string $Container) Set Container format. Valid values: mp4, flv, hls, mp3, flac, ogg, m4a, and wav. Among them, mp3, flac, ogg, m4a, and wav are for audio-only files.
 * @method integer getRemoveVideo() Obtain Indicates whether to remove video data. Valid values:
<li>`0`: reserved;</li>
<li>1: Remove.</li>
 * @method void setRemoveVideo(integer $RemoveVideo) Set Indicates whether to remove video data. Valid values:
<li>`0`: reserved;</li>
<li>1: Remove.</li>
 * @method integer getRemoveAudio() Obtain Indicates whether to remove audio data. Valid values:
<li>`0`: reserved;</li>
<li>1: Remove.</li>
 * @method void setRemoveAudio(integer $RemoveAudio) Set Indicates whether to remove audio data. Valid values:
<li>`0`: reserved;</li>
<li>1: Remove.</li>
 * @method VideoTemplateInfoForUpdate getVideoTemplate() Obtain Video stream configuration parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVideoTemplate(VideoTemplateInfoForUpdate $VideoTemplate) Set Video stream configuration parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AudioTemplateInfoForUpdate getAudioTemplate() Obtain Audio stream configuration parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAudioTemplate(AudioTemplateInfoForUpdate $AudioTemplate) Set Audio stream configuration parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TEHDConfigForUpdate getTEHDConfig() Obtain Top Speed Codec transcoding configuration parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTEHDConfig(TEHDConfigForUpdate $TEHDConfig) Set Top Speed Codec transcoding configuration parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class OverrideTranscodeParameter extends AbstractModel
{
    /**
     * @var string Container format. Valid values: mp4, flv, hls, mp3, flac, ogg, m4a, and wav. Among them, mp3, flac, ogg, m4a, and wav are for audio-only files.
     */
    public $Container;

    /**
     * @var integer Indicates whether to remove video data. Valid values:
<li>`0`: reserved;</li>
<li>1: Remove.</li>
     */
    public $RemoveVideo;

    /**
     * @var integer Indicates whether to remove audio data. Valid values:
<li>`0`: reserved;</li>
<li>1: Remove.</li>
     */
    public $RemoveAudio;

    /**
     * @var VideoTemplateInfoForUpdate Video stream configuration parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VideoTemplate;

    /**
     * @var AudioTemplateInfoForUpdate Audio stream configuration parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AudioTemplate;

    /**
     * @var TEHDConfigForUpdate Top Speed Codec transcoding configuration parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TEHDConfig;

    /**
     * @param string $Container Container format. Valid values: mp4, flv, hls, mp3, flac, ogg, m4a, and wav. Among them, mp3, flac, ogg, m4a, and wav are for audio-only files.
     * @param integer $RemoveVideo Indicates whether to remove video data. Valid values:
<li>`0`: reserved;</li>
<li>1: Remove.</li>
     * @param integer $RemoveAudio Indicates whether to remove audio data. Valid values:
<li>`0`: reserved;</li>
<li>1: Remove.</li>
     * @param VideoTemplateInfoForUpdate $VideoTemplate Video stream configuration parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AudioTemplateInfoForUpdate $AudioTemplate Audio stream configuration parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TEHDConfigForUpdate $TEHDConfig Top Speed Codec transcoding configuration parameters.
Note: This field may return null, indicating that no valid values can be obtained.
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
    }
}
