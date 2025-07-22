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
 * Custom specification parameters for video processing, which are used to override corresponding parameters in templates.
 *
 * @method string getContainer() Obtain Container format. Valid values: mp4, flv, hls, mp3, flac, ogg, and m4a; mp3, flac, ogg, and m4a are formats of audio files.
 * @method void setContainer(string $Container) Set Container format. Valid values: mp4, flv, hls, mp3, flac, ogg, and m4a; mp3, flac, ogg, and m4a are formats of audio files.
 * @method integer getRemoveVideo() Obtain Whether to remove video data. Valid values:
<li>0: retain</li>
<li>1: remove</li>
 * @method void setRemoveVideo(integer $RemoveVideo) Set Whether to remove video data. Valid values:
<li>0: retain</li>
<li>1: remove</li>
 * @method integer getRemoveAudio() Obtain Whether to remove audio data. Valid values:
<li>0: retain</li>
<li>1: remove</li>
 * @method void setRemoveAudio(integer $RemoveAudio) Set Whether to remove audio data. Valid values:
<li>0: retain</li>
<li>1: remove</li>
 * @method VideoTemplateInfoForUpdate getVideoTemplate() Obtain Video stream configuration parameter.
 * @method void setVideoTemplate(VideoTemplateInfoForUpdate $VideoTemplate) Set Video stream configuration parameter.
 * @method AudioTemplateInfoForUpdate getAudioTemplate() Obtain Audio stream configuration parameter.
 * @method void setAudioTemplate(AudioTemplateInfoForUpdate $AudioTemplate) Set Audio stream configuration parameter.
 * @method TEHDConfigForUpdate getTEHDConfig() Obtain The TSC transcoding parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTEHDConfig(TEHDConfigForUpdate $TEHDConfig) Set The TSC transcoding parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SubtitleTemplate getSubtitleTemplate() Obtain Subtitle stream configuration parameter.
 * @method void setSubtitleTemplate(SubtitleTemplate $SubtitleTemplate) Set Subtitle stream configuration parameter.
 * @method array getAddonAudioStream() Obtain Specifies the external audio track parameter.
 * @method void setAddonAudioStream(array $AddonAudioStream) Set Specifies the external audio track parameter.
 * @method string getStdExtInfo() Obtain Extension field for transcoding.
 * @method void setStdExtInfo(string $StdExtInfo) Set Extension field for transcoding.
 * @method array getAddOnSubtitles() Obtain Subtitle file to be inserted.
 * @method void setAddOnSubtitles(array $AddOnSubtitles) Set Subtitle file to be inserted.
 */
class OverrideTranscodeParameter extends AbstractModel
{
    /**
     * @var string Container format. Valid values: mp4, flv, hls, mp3, flac, ogg, and m4a; mp3, flac, ogg, and m4a are formats of audio files.
     */
    public $Container;

    /**
     * @var integer Whether to remove video data. Valid values:
<li>0: retain</li>
<li>1: remove</li>
     */
    public $RemoveVideo;

    /**
     * @var integer Whether to remove audio data. Valid values:
<li>0: retain</li>
<li>1: remove</li>
     */
    public $RemoveAudio;

    /**
     * @var VideoTemplateInfoForUpdate Video stream configuration parameter.
     */
    public $VideoTemplate;

    /**
     * @var AudioTemplateInfoForUpdate Audio stream configuration parameter.
     */
    public $AudioTemplate;

    /**
     * @var TEHDConfigForUpdate The TSC transcoding parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TEHDConfig;

    /**
     * @var SubtitleTemplate Subtitle stream configuration parameter.
     */
    public $SubtitleTemplate;

    /**
     * @var array Specifies the external audio track parameter.
     */
    public $AddonAudioStream;

    /**
     * @var string Extension field for transcoding.
     */
    public $StdExtInfo;

    /**
     * @var array Subtitle file to be inserted.
     */
    public $AddOnSubtitles;

    /**
     * @param string $Container Container format. Valid values: mp4, flv, hls, mp3, flac, ogg, and m4a; mp3, flac, ogg, and m4a are formats of audio files.
     * @param integer $RemoveVideo Whether to remove video data. Valid values:
<li>0: retain</li>
<li>1: remove</li>
     * @param integer $RemoveAudio Whether to remove audio data. Valid values:
<li>0: retain</li>
<li>1: remove</li>
     * @param VideoTemplateInfoForUpdate $VideoTemplate Video stream configuration parameter.
     * @param AudioTemplateInfoForUpdate $AudioTemplate Audio stream configuration parameter.
     * @param TEHDConfigForUpdate $TEHDConfig The TSC transcoding parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SubtitleTemplate $SubtitleTemplate Subtitle stream configuration parameter.
     * @param array $AddonAudioStream Specifies the external audio track parameter.
     * @param string $StdExtInfo Extension field for transcoding.
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
