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
 * @method string getContainer() Obtain <p>Container format. Valid values: mp4, flv, hls, mp3, flac, ogg, m4a, and wav. Among them, mp3, flac, ogg, m4a, and wav are for audio-only files.</p>
 * @method void setContainer(string $Container) Set <p>Container format. Valid values: mp4, flv, hls, mp3, flac, ogg, m4a, and wav. Among them, mp3, flac, ogg, m4a, and wav are for audio-only files.</p>
 * @method integer getRemoveVideo() Obtain <p>Indicates whether to remove video data. Valid values:<br>&lt;li&gt;0: Data is reserved;&lt;\li&gt;<br>&lt;li&gt;1: Data is removed.&lt;\li&gt;</p>
 * @method void setRemoveVideo(integer $RemoveVideo) Set <p>Indicates whether to remove video data. Valid values:<br>&lt;li&gt;0: Data is reserved;&lt;\li&gt;<br>&lt;li&gt;1: Data is removed.&lt;\li&gt;</p>
 * @method integer getRemoveAudio() Obtain <p>Indicates whether to remove audio data. Valid values:<br>&lt;li&gt;0: Data is reserved;&lt;\li&gt;<br>&lt;li&gt;1: Data is removed.&lt;\li&gt;</p>
 * @method void setRemoveAudio(integer $RemoveAudio) Set <p>Indicates whether to remove audio data. Valid values:<br>&lt;li&gt;0: Data is reserved;&lt;\li&gt;<br>&lt;li&gt;1: Data is removed.&lt;\li&gt;</p>
 * @method VideoTemplateInfoForUpdate getVideoTemplate() Obtain <p>Video stream configuration parameters.</p>
 * @method void setVideoTemplate(VideoTemplateInfoForUpdate $VideoTemplate) Set <p>Video stream configuration parameters.</p>
 * @method AudioTemplateInfoForUpdate getAudioTemplate() Obtain <p>Audio stream configuration parameters.</p>
 * @method void setAudioTemplate(AudioTemplateInfoForUpdate $AudioTemplate) Set <p>Audio stream configuration parameters.</p>
 * @method TEHDConfigForUpdate getTEHDConfig() Obtain <p>TSC transcoding configuration parameters.</p>
 * @method void setTEHDConfig(TEHDConfigForUpdate $TEHDConfig) Set <p>TSC transcoding configuration parameters.</p>
 * @method string getStdExtInfo() Obtain <p>Standard extended fields for special usage.</p>
 * @method void setStdExtInfo(string $StdExtInfo) Set <p>Standard extended fields for special usage.</p>
 */
class OverrideTranscodeParameter extends AbstractModel
{
    /**
     * @var string <p>Container format. Valid values: mp4, flv, hls, mp3, flac, ogg, m4a, and wav. Among them, mp3, flac, ogg, m4a, and wav are for audio-only files.</p>
     */
    public $Container;

    /**
     * @var integer <p>Indicates whether to remove video data. Valid values:<br>&lt;li&gt;0: Data is reserved;&lt;\li&gt;<br>&lt;li&gt;1: Data is removed.&lt;\li&gt;</p>
     */
    public $RemoveVideo;

    /**
     * @var integer <p>Indicates whether to remove audio data. Valid values:<br>&lt;li&gt;0: Data is reserved;&lt;\li&gt;<br>&lt;li&gt;1: Data is removed.&lt;\li&gt;</p>
     */
    public $RemoveAudio;

    /**
     * @var VideoTemplateInfoForUpdate <p>Video stream configuration parameters.</p>
     */
    public $VideoTemplate;

    /**
     * @var AudioTemplateInfoForUpdate <p>Audio stream configuration parameters.</p>
     */
    public $AudioTemplate;

    /**
     * @var TEHDConfigForUpdate <p>TSC transcoding configuration parameters.</p>
     */
    public $TEHDConfig;

    /**
     * @var string <p>Standard extended fields for special usage.</p>
     */
    public $StdExtInfo;

    /**
     * @param string $Container <p>Container format. Valid values: mp4, flv, hls, mp3, flac, ogg, m4a, and wav. Among them, mp3, flac, ogg, m4a, and wav are for audio-only files.</p>
     * @param integer $RemoveVideo <p>Indicates whether to remove video data. Valid values:<br>&lt;li&gt;0: Data is reserved;&lt;\li&gt;<br>&lt;li&gt;1: Data is removed.&lt;\li&gt;</p>
     * @param integer $RemoveAudio <p>Indicates whether to remove audio data. Valid values:<br>&lt;li&gt;0: Data is reserved;&lt;\li&gt;<br>&lt;li&gt;1: Data is removed.&lt;\li&gt;</p>
     * @param VideoTemplateInfoForUpdate $VideoTemplate <p>Video stream configuration parameters.</p>
     * @param AudioTemplateInfoForUpdate $AudioTemplate <p>Audio stream configuration parameters.</p>
     * @param TEHDConfigForUpdate $TEHDConfig <p>TSC transcoding configuration parameters.</p>
     * @param string $StdExtInfo <p>Standard extended fields for special usage.</p>
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

        if (array_key_exists("StdExtInfo",$param) and $param["StdExtInfo"] !== null) {
            $this->StdExtInfo = $param["StdExtInfo"];
        }
    }
}
