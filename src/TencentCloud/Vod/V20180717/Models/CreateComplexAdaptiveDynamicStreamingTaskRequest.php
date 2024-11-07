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
 * CreateComplexAdaptiveDynamicStreamingTask request structure.
 *
 * @method integer getSubAppId() Obtain The VOD application ID.
 * @method void setSubAppId(integer $SubAppId) Set The VOD application ID.
 * @method string getFileId() Obtain Media ID of the main media.
 * @method void setFileId(string $FileId) Set Media ID of the main media.
 * @method array getStreamParaSet() Obtain Adaptive bitrate streaming parameters, supporting up to 8 entries.
 * @method void setStreamParaSet(array $StreamParaSet) Set Adaptive bitrate streaming parameters, supporting up to 8 entries.
 * @method array getHeadTailSet() Obtain List of video opening/closing credits configuration template IDs, supporting up to 4 entries. If this field is filled in, the start times of the media specified in AudioSet and SubtitleSet will be automatically adjusted to stay in sync with the main media.
 * @method void setHeadTailSet(array $HeadTailSet) Set List of video opening/closing credits configuration template IDs, supporting up to 4 entries. If this field is filled in, the start times of the media specified in AudioSet and SubtitleSet will be automatically adjusted to stay in sync with the main media.
 * @method array getAudioSet() Obtain Audio media parameters, supporting up to 16 entries. Each array element corresponds to an audio stream in the output. If you want to add the audio stream from the main media file to the output, you also need to specify it here. The order of elements in the array will determine the order of audio streams in the output. If the input media file contains both video and audio streams, the video stream will be ignored.
 * @method void setAudioSet(array $AudioSet) Set Audio media parameters, supporting up to 16 entries. Each array element corresponds to an audio stream in the output. If you want to add the audio stream from the main media file to the output, you also need to specify it here. The order of elements in the array will determine the order of audio streams in the output. If the input media file contains both video and audio streams, the video stream will be ignored.
 * @method array getSubtitleSet() Obtain List of subtitle IDs, supporting up to 16 entries. Each array element corresponds to an subtitle stream in the output. The order of elements in the array will determine the order of subtitles in the output.
 * @method void setSubtitleSet(array $SubtitleSet) Set List of subtitle IDs, supporting up to 16 entries. Each array element corresponds to an subtitle stream in the output. The order of elements in the array will determine the order of subtitles in the output.
 */
class CreateComplexAdaptiveDynamicStreamingTaskRequest extends AbstractModel
{
    /**
     * @var integer The VOD application ID.
     */
    public $SubAppId;

    /**
     * @var string Media ID of the main media.
     */
    public $FileId;

    /**
     * @var array Adaptive bitrate streaming parameters, supporting up to 8 entries.
     */
    public $StreamParaSet;

    /**
     * @var array List of video opening/closing credits configuration template IDs, supporting up to 4 entries. If this field is filled in, the start times of the media specified in AudioSet and SubtitleSet will be automatically adjusted to stay in sync with the main media.
     */
    public $HeadTailSet;

    /**
     * @var array Audio media parameters, supporting up to 16 entries. Each array element corresponds to an audio stream in the output. If you want to add the audio stream from the main media file to the output, you also need to specify it here. The order of elements in the array will determine the order of audio streams in the output. If the input media file contains both video and audio streams, the video stream will be ignored.
     */
    public $AudioSet;

    /**
     * @var array List of subtitle IDs, supporting up to 16 entries. Each array element corresponds to an subtitle stream in the output. The order of elements in the array will determine the order of subtitles in the output.
     */
    public $SubtitleSet;

    /**
     * @param integer $SubAppId The VOD application ID.
     * @param string $FileId Media ID of the main media.
     * @param array $StreamParaSet Adaptive bitrate streaming parameters, supporting up to 8 entries.
     * @param array $HeadTailSet List of video opening/closing credits configuration template IDs, supporting up to 4 entries. If this field is filled in, the start times of the media specified in AudioSet and SubtitleSet will be automatically adjusted to stay in sync with the main media.
     * @param array $AudioSet Audio media parameters, supporting up to 16 entries. Each array element corresponds to an audio stream in the output. If you want to add the audio stream from the main media file to the output, you also need to specify it here. The order of elements in the array will determine the order of audio streams in the output. If the input media file contains both video and audio streams, the video stream will be ignored.
     * @param array $SubtitleSet List of subtitle IDs, supporting up to 16 entries. Each array element corresponds to an subtitle stream in the output. The order of elements in the array will determine the order of subtitles in the output.
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("StreamParaSet",$param) and $param["StreamParaSet"] !== null) {
            $this->StreamParaSet = [];
            foreach ($param["StreamParaSet"] as $key => $value){
                $obj = new ComplexAdaptiveDynamicStreamingTaskStreamPara();
                $obj->deserialize($value);
                array_push($this->StreamParaSet, $obj);
            }
        }

        if (array_key_exists("HeadTailSet",$param) and $param["HeadTailSet"] !== null) {
            $this->HeadTailSet = [];
            foreach ($param["HeadTailSet"] as $key => $value){
                $obj = new HeadTailTaskInput();
                $obj->deserialize($value);
                array_push($this->HeadTailSet, $obj);
            }
        }

        if (array_key_exists("AudioSet",$param) and $param["AudioSet"] !== null) {
            $this->AudioSet = [];
            foreach ($param["AudioSet"] as $key => $value){
                $obj = new ComplexAdaptiveDynamicStreamingTaskAudioInput();
                $obj->deserialize($value);
                array_push($this->AudioSet, $obj);
            }
        }

        if (array_key_exists("SubtitleSet",$param) and $param["SubtitleSet"] !== null) {
            $this->SubtitleSet = [];
            foreach ($param["SubtitleSet"] as $key => $value){
                $obj = new ComplexAdaptiveDynamicStreamingTaskSubtitleInput();
                $obj->deserialize($value);
                array_push($this->SubtitleSet, $obj);
            }
        }
    }
}
