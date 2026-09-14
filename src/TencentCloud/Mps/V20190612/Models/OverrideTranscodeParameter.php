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
 * Specification parameters for custom transcoding. Used to overwrite the corresponding parameter values in the template.
 *
 * @method string getContainer() Obtain Muxing format. Available values: mp4, flv, hls, mp3, flac, ogg, and m4a. Among them, mp3, flac, ogg, and m4a are for audio-only files.
 * @method void setContainer(string $Container) Set Muxing format. Available values: mp4, flv, hls, mp3, flac, ogg, and m4a. Among them, mp3, flac, ogg, and m4a are for audio-only files.
 * @method integer getRemoveVideo() Obtain Indicates whether to remove video data. Parameter value:
<li>`0`: retention;</li>
<li>1: Remove.</li>
 * @method void setRemoveVideo(integer $RemoveVideo) Set Indicates whether to remove video data. Parameter value:
<li>`0`: retention;</li>
<li>1: Remove.</li>
 * @method integer getRemoveAudio() Obtain Indicates whether to remove audio data. Parameter value:
<li>`0`: retention;</li>
<li>1: Remove.</li>
 * @method void setRemoveAudio(integer $RemoveAudio) Set Indicates whether to remove audio data. Parameter value:
<li>`0`: retention;</li>
<li>1: Remove.</li>
 * @method VideoTemplateInfoForUpdate getVideoTemplate() Obtain Video stream configuration parameters.
 * @method void setVideoTemplate(VideoTemplateInfoForUpdate $VideoTemplate) Set Video stream configuration parameters.
 * @method AudioTemplateInfoForUpdate getAudioTemplate() Obtain Audio stream configuration parameters.
 * @method void setAudioTemplate(AudioTemplateInfoForUpdate $AudioTemplate) Set Audio stream configuration parameters.
 * @method TEHDConfigForUpdate getTEHDConfig() Obtain 
 * @method void setTEHDConfig(TEHDConfigForUpdate $TEHDConfig) Set 
 * @method SubtitleTemplate getSubtitleTemplate() Obtain Subtitle stream configuration parameters.
 * @method void setSubtitleTemplate(SubtitleTemplate $SubtitleTemplate) Set Subtitle stream configuration parameters.
 * @method array getAddonAudioStream() Obtain External audio track parameter.
 * @method void setAddonAudioStream(array $AddonAudioStream) Set External audio track parameter.
 * @method string getStdExtInfo() Obtain Transcoding extension field.
 * @method void setStdExtInfo(string $StdExtInfo) Set Transcoding extension field.
 * @method array getAddOnSubtitles() Obtain Subtitle file to be inserted.
 * @method void setAddOnSubtitles(array $AddOnSubtitles) Set Subtitle file to be inserted.
 */
class OverrideTranscodeParameter extends AbstractModel
{
    /**
     * @var string Muxing format. Available values: mp4, flv, hls, mp3, flac, ogg, and m4a. Among them, mp3, flac, ogg, and m4a are for audio-only files.
     */
    public $Container;

    /**
     * @var integer Indicates whether to remove video data. Parameter value:
<li>`0`: retention;</li>
<li>1: Remove.</li>
     */
    public $RemoveVideo;

    /**
     * @var integer Indicates whether to remove audio data. Parameter value:
<li>`0`: retention;</li>
<li>1: Remove.</li>
     */
    public $RemoveAudio;

    /**
     * @var VideoTemplateInfoForUpdate Video stream configuration parameters.
     */
    public $VideoTemplate;

    /**
     * @var AudioTemplateInfoForUpdate Audio stream configuration parameters.
     */
    public $AudioTemplate;

    /**
     * @var TEHDConfigForUpdate 
     */
    public $TEHDConfig;

    /**
     * @var SubtitleTemplate Subtitle stream configuration parameters.
     */
    public $SubtitleTemplate;

    /**
     * @var array External audio track parameter.
     */
    public $AddonAudioStream;

    /**
     * @var string Transcoding extension field.
     */
    public $StdExtInfo;

    /**
     * @var array Subtitle file to be inserted.
     */
    public $AddOnSubtitles;

    /**
     * @param string $Container Muxing format. Available values: mp4, flv, hls, mp3, flac, ogg, and m4a. Among them, mp3, flac, ogg, and m4a are for audio-only files.
     * @param integer $RemoveVideo Indicates whether to remove video data. Parameter value:
<li>`0`: retention;</li>
<li>1: Remove.</li>
     * @param integer $RemoveAudio Indicates whether to remove audio data. Parameter value:
<li>`0`: retention;</li>
<li>1: Remove.</li>
     * @param VideoTemplateInfoForUpdate $VideoTemplate Video stream configuration parameters.
     * @param AudioTemplateInfoForUpdate $AudioTemplate Audio stream configuration parameters.
     * @param TEHDConfigForUpdate $TEHDConfig 
     * @param SubtitleTemplate $SubtitleTemplate Subtitle stream configuration parameters.
     * @param array $AddonAudioStream External audio track parameter.
     * @param string $StdExtInfo Transcoding extension field.
     * @param array $AddOnSubtitles Subtitle file to be inserted.
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

        if (array_key_exists("SubtitleTemplate",$param) and $param["SubtitleTemplate"] !== null) {
            $this->SubtitleTemplate = new SubtitleTemplate();
            $this->SubtitleTemplate->deserialize($param["SubtitleTemplate"]);
        }

        if (array_key_exists("AddonAudioStream",$param) and $param["AddonAudioStream"] !== null) {
            $this->AddonAudioStream = [];
            foreach ($param["AddonAudioStream"] as $key => $value){
                $obj = new MediaInputInfo();
                $obj->deserialize($value);
                array_push($this->AddonAudioStream, $obj);
            }
        }

        if (array_key_exists("StdExtInfo",$param) and $param["StdExtInfo"] !== null) {
            $this->StdExtInfo = $param["StdExtInfo"];
        }

        if (array_key_exists("AddOnSubtitles",$param) and $param["AddOnSubtitles"] !== null) {
            $this->AddOnSubtitles = [];
            foreach ($param["AddOnSubtitles"] as $key => $value){
                $obj = new AddOnSubtitle();
                $obj->deserialize($value);
                array_push($this->AddOnSubtitles, $obj);
            }
        }
    }
}
