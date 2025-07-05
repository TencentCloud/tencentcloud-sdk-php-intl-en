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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Specifications for custom transcoding
 *
 * @method string getContainer() Obtain Container. Valid values: mp4; flv; hls; mp3; flac; ogg; m4a. Among them, mp3, flac, ogg, and m4a are for audio files.
 * @method void setContainer(string $Container) Set Container. Valid values: mp4; flv; hls; mp3; flac; ogg; m4a. Among them, mp3, flac, ogg, and m4a are for audio files.
 * @method integer getRemoveVideo() Obtain Whether to remove video data. Valid values:
<li>0: retain;</li>
<li>1: remove.</li>
Default value: 0.
 * @method void setRemoveVideo(integer $RemoveVideo) Set Whether to remove video data. Valid values:
<li>0: retain;</li>
<li>1: remove.</li>
Default value: 0.
 * @method integer getRemoveAudio() Obtain Whether to remove audio data. Valid values:
<li>0: retain;</li>
<li>1: remove.</li>
Default value: 0.
 * @method void setRemoveAudio(integer $RemoveAudio) Set Whether to remove audio data. Valid values:
<li>0: retain;</li>
<li>1: remove.</li>
Default value: 0.
 * @method VideoTemplateInfo getVideoTemplate() Obtain Video stream configuration parameter. This field is required when `RemoveVideo` is 0.
 * @method void setVideoTemplate(VideoTemplateInfo $VideoTemplate) Set Video stream configuration parameter. This field is required when `RemoveVideo` is 0.
 * @method AudioTemplateInfo getAudioTemplate() Obtain Audio stream configuration parameter. This field is required when `RemoveAudio` is 0.
 * @method void setAudioTemplate(AudioTemplateInfo $AudioTemplate) Set Audio stream configuration parameter. This field is required when `RemoveAudio` is 0.
 * @method TEHDConfig getTEHDConfig() Obtain TESHD transcoding parameter.
 * @method void setTEHDConfig(TEHDConfig $TEHDConfig) Set TESHD transcoding parameter.
 * @method string getStdExtInfo() Obtain Additional parameter, which is a serialized JSON string.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStdExtInfo(string $StdExtInfo) Set Additional parameter, which is a serialized JSON string.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method EnhanceConfig getEnhanceConfig() Obtain Audio/Video enhancement configuration.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEnhanceConfig(EnhanceConfig $EnhanceConfig) Set Audio/Video enhancement configuration.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class RawTranscodeParameter extends AbstractModel
{
    /**
     * @var string Container. Valid values: mp4; flv; hls; mp3; flac; ogg; m4a. Among them, mp3, flac, ogg, and m4a are for audio files.
     */
    public $Container;

    /**
     * @var integer Whether to remove video data. Valid values:
<li>0: retain;</li>
<li>1: remove.</li>
Default value: 0.
     */
    public $RemoveVideo;

    /**
     * @var integer Whether to remove audio data. Valid values:
<li>0: retain;</li>
<li>1: remove.</li>
Default value: 0.
     */
    public $RemoveAudio;

    /**
     * @var VideoTemplateInfo Video stream configuration parameter. This field is required when `RemoveVideo` is 0.
     */
    public $VideoTemplate;

    /**
     * @var AudioTemplateInfo Audio stream configuration parameter. This field is required when `RemoveAudio` is 0.
     */
    public $AudioTemplate;

    /**
     * @var TEHDConfig TESHD transcoding parameter.
     */
    public $TEHDConfig;

    /**
     * @var string Additional parameter, which is a serialized JSON string.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $StdExtInfo;

    /**
     * @var EnhanceConfig Audio/Video enhancement configuration.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EnhanceConfig;

    /**
     * @param string $Container Container. Valid values: mp4; flv; hls; mp3; flac; ogg; m4a. Among them, mp3, flac, ogg, and m4a are for audio files.
     * @param integer $RemoveVideo Whether to remove video data. Valid values:
<li>0: retain;</li>
<li>1: remove.</li>
Default value: 0.
     * @param integer $RemoveAudio Whether to remove audio data. Valid values:
<li>0: retain;</li>
<li>1: remove.</li>
Default value: 0.
     * @param VideoTemplateInfo $VideoTemplate Video stream configuration parameter. This field is required when `RemoveVideo` is 0.
     * @param AudioTemplateInfo $AudioTemplate Audio stream configuration parameter. This field is required when `RemoveAudio` is 0.
     * @param TEHDConfig $TEHDConfig TESHD transcoding parameter.
     * @param string $StdExtInfo Additional parameter, which is a serialized JSON string.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param EnhanceConfig $EnhanceConfig Audio/Video enhancement configuration.
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
            $this->VideoTemplate = new VideoTemplateInfo();
            $this->VideoTemplate->deserialize($param["VideoTemplate"]);
        }

        if (array_key_exists("AudioTemplate",$param) and $param["AudioTemplate"] !== null) {
            $this->AudioTemplate = new AudioTemplateInfo();
            $this->AudioTemplate->deserialize($param["AudioTemplate"]);
        }

        if (array_key_exists("TEHDConfig",$param) and $param["TEHDConfig"] !== null) {
            $this->TEHDConfig = new TEHDConfig();
            $this->TEHDConfig->deserialize($param["TEHDConfig"]);
        }

        if (array_key_exists("StdExtInfo",$param) and $param["StdExtInfo"] !== null) {
            $this->StdExtInfo = $param["StdExtInfo"];
        }

        if (array_key_exists("EnhanceConfig",$param) and $param["EnhanceConfig"] !== null) {
            $this->EnhanceConfig = new EnhanceConfig();
            $this->EnhanceConfig->deserialize($param["EnhanceConfig"]);
        }
    }
}
