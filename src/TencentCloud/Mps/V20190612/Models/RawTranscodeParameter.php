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
 * Specification parameters of custom transcoding.
 *
 * @method string getContainer() Obtain Muxing format. Available values: mp4, flv, hls, mp3, flac, ogg, and m4a. Among them, mp3, flac, ogg, and m4a are for audio-only files.
 * @method void setContainer(string $Container) Set Muxing format. Available values: mp4, flv, hls, mp3, flac, ogg, and m4a. Among them, mp3, flac, ogg, and m4a are for audio-only files.
 * @method integer getRemoveVideo() Obtain Indicates whether to remove video data. Parameter value:
<li>`0`: retention;</li>
<li>1: Remove.</li>
Default value: 0.
 * @method void setRemoveVideo(integer $RemoveVideo) Set Indicates whether to remove video data. Parameter value:
<li>`0`: retention;</li>
<li>1: Remove.</li>
Default value: 0.
 * @method integer getRemoveAudio() Obtain Whether to remove audio data. Parameter Value:
<li>`0`: retention;</li>
<li>1: Remove.</li>
Default value: 0.
 * @method void setRemoveAudio(integer $RemoveAudio) Set Whether to remove audio data. Parameter Value:
<li>`0`: retention;</li>
<li>1: Remove.</li>
Default value: 0.
 * @method VideoTemplateInfo getVideoTemplate() Obtain Video stream configuration parameters. This field is required when RemoveVideo is 0.
 * @method void setVideoTemplate(VideoTemplateInfo $VideoTemplate) Set Video stream configuration parameters. This field is required when RemoveVideo is 0.
 * @method AudioTemplateInfo getAudioTemplate() Obtain Audio stream configuration parameters. This field is required when RemoveAudio is 0.
 * @method void setAudioTemplate(AudioTemplateInfo $AudioTemplate) Set Audio stream configuration parameters. This field is required when RemoveAudio is 0.
 * @method TEHDConfig getTEHDConfig() Obtain TSC transcoding parameters.
 * @method void setTEHDConfig(TEHDConfig $TEHDConfig) Set TSC transcoding parameters.
 * @method string getStdExtInfo() Obtain Additional parameter, which is a serialized JSON string.
 * @method void setStdExtInfo(string $StdExtInfo) Set Additional parameter, which is a serialized JSON string.
 * @method EnhanceConfig getEnhanceConfig() Obtain 
 * @method void setEnhanceConfig(EnhanceConfig $EnhanceConfig) Set 
 * @method SubtitleTemplate getSubtitleTemplate() Obtain 
 * @method void setSubtitleTemplate(SubtitleTemplate $SubtitleTemplate) Set 
 */
class RawTranscodeParameter extends AbstractModel
{
    /**
     * @var string Muxing format. Available values: mp4, flv, hls, mp3, flac, ogg, and m4a. Among them, mp3, flac, ogg, and m4a are for audio-only files.
     */
    public $Container;

    /**
     * @var integer Indicates whether to remove video data. Parameter value:
<li>`0`: retention;</li>
<li>1: Remove.</li>
Default value: 0.
     */
    public $RemoveVideo;

    /**
     * @var integer Whether to remove audio data. Parameter Value:
<li>`0`: retention;</li>
<li>1: Remove.</li>
Default value: 0.
     */
    public $RemoveAudio;

    /**
     * @var VideoTemplateInfo Video stream configuration parameters. This field is required when RemoveVideo is 0.
     */
    public $VideoTemplate;

    /**
     * @var AudioTemplateInfo Audio stream configuration parameters. This field is required when RemoveAudio is 0.
     */
    public $AudioTemplate;

    /**
     * @var TEHDConfig TSC transcoding parameters.
     */
    public $TEHDConfig;

    /**
     * @var string Additional parameter, which is a serialized JSON string.
     */
    public $StdExtInfo;

    /**
     * @var EnhanceConfig 
     */
    public $EnhanceConfig;

    /**
     * @var SubtitleTemplate 
     */
    public $SubtitleTemplate;

    /**
     * @param string $Container Muxing format. Available values: mp4, flv, hls, mp3, flac, ogg, and m4a. Among them, mp3, flac, ogg, and m4a are for audio-only files.
     * @param integer $RemoveVideo Indicates whether to remove video data. Parameter value:
<li>`0`: retention;</li>
<li>1: Remove.</li>
Default value: 0.
     * @param integer $RemoveAudio Whether to remove audio data. Parameter Value:
<li>`0`: retention;</li>
<li>1: Remove.</li>
Default value: 0.
     * @param VideoTemplateInfo $VideoTemplate Video stream configuration parameters. This field is required when RemoveVideo is 0.
     * @param AudioTemplateInfo $AudioTemplate Audio stream configuration parameters. This field is required when RemoveAudio is 0.
     * @param TEHDConfig $TEHDConfig TSC transcoding parameters.
     * @param string $StdExtInfo Additional parameter, which is a serialized JSON string.
     * @param EnhanceConfig $EnhanceConfig 
     * @param SubtitleTemplate $SubtitleTemplate 
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

        if (array_key_exists("SubtitleTemplate",$param) and $param["SubtitleTemplate"] !== null) {
            $this->SubtitleTemplate = new SubtitleTemplate();
            $this->SubtitleTemplate->deserialize($param["SubtitleTemplate"]);
        }
    }
}
