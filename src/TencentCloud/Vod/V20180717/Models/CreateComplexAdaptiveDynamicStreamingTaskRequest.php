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
 * CreateComplexAdaptiveDynamicStreamingTask request structure.
 *
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID.</b>
 * @method string getFileId() Obtain Media ID of the main media file.
 * @method void setFileId(string $FileId) Set Media ID of the main media file.
 * @method array getStreamParaSet() Obtain Adaptive Bitrate Parameters support a maximum of 8.
 * @method void setStreamParaSet(array $StreamParaSet) Set Adaptive Bitrate Parameters support a maximum of 8.
 * @method array getHeadTailSet() Obtain Credits list, supports multiple opening and ending sequences, with a maximum of 4 supported. If this field is filled, the start time of the media specified in AudioSet and SubtitleSet will automatically adjust to keep synchronized with the main media.
 * @method void setHeadTailSet(array $HeadTailSet) Set Credits list, supports multiple opening and ending sequences, with a maximum of 4 supported. If this field is filled, the start time of the media specified in AudioSet and SubtitleSet will automatically adjust to keep synchronized with the main media.
 * @method array getAudioSet() Obtain Multilingual audio stream parameters, supports a maximum of 16. Each array element corresponds to an audio stream in the adaptive bitrate stream. If you need to add the audio stream from the main media file to the output adaptive bitrate stream, you must specify it here. The order of elements in an array determines the order of audio streams in the adaptive bitrate stream. If the input media file contains both video and audio streams, the video stream will be ignored.
 * @method void setAudioSet(array $AudioSet) Set Multilingual audio stream parameters, supports a maximum of 16. Each array element corresponds to an audio stream in the adaptive bitrate stream. If you need to add the audio stream from the main media file to the output adaptive bitrate stream, you must specify it here. The order of elements in an array determines the order of audio streams in the adaptive bitrate stream. If the input media file contains both video and audio streams, the video stream will be ignored.
 * @method array getSubtitleSet() Obtain Multilingual subtitle parameters, with a maximum of 16 supported. Each element in an array corresponds to a subtitle stream in the adaptive bitrate stream. The order of elements in an array determines the order of subtitle streams in the adaptive bitrate stream.
 * @method void setSubtitleSet(array $SubtitleSet) Set Multilingual subtitle parameters, with a maximum of 16 supported. Each element in an array corresponds to a subtitle stream in the adaptive bitrate stream. The order of elements in an array determines the order of subtitle streams in the adaptive bitrate stream.
 */
class CreateComplexAdaptiveDynamicStreamingTaskRequest extends AbstractModel
{
    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID.</b>
     */
    public $SubAppId;

    /**
     * @var string Media ID of the main media file.
     */
    public $FileId;

    /**
     * @var array Adaptive Bitrate Parameters support a maximum of 8.
     */
    public $StreamParaSet;

    /**
     * @var array Credits list, supports multiple opening and ending sequences, with a maximum of 4 supported. If this field is filled, the start time of the media specified in AudioSet and SubtitleSet will automatically adjust to keep synchronized with the main media.
     */
    public $HeadTailSet;

    /**
     * @var array Multilingual audio stream parameters, supports a maximum of 16. Each array element corresponds to an audio stream in the adaptive bitrate stream. If you need to add the audio stream from the main media file to the output adaptive bitrate stream, you must specify it here. The order of elements in an array determines the order of audio streams in the adaptive bitrate stream. If the input media file contains both video and audio streams, the video stream will be ignored.
     */
    public $AudioSet;

    /**
     * @var array Multilingual subtitle parameters, with a maximum of 16 supported. Each element in an array corresponds to a subtitle stream in the adaptive bitrate stream. The order of elements in an array determines the order of subtitle streams in the adaptive bitrate stream.
     */
    public $SubtitleSet;

    /**
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID.</b>
     * @param string $FileId Media ID of the main media file.
     * @param array $StreamParaSet Adaptive Bitrate Parameters support a maximum of 8.
     * @param array $HeadTailSet Credits list, supports multiple opening and ending sequences, with a maximum of 4 supported. If this field is filled, the start time of the media specified in AudioSet and SubtitleSet will automatically adjust to keep synchronized with the main media.
     * @param array $AudioSet Multilingual audio stream parameters, supports a maximum of 16. Each array element corresponds to an audio stream in the adaptive bitrate stream. If you need to add the audio stream from the main media file to the output adaptive bitrate stream, you must specify it here. The order of elements in an array determines the order of audio streams in the adaptive bitrate stream. If the input media file contains both video and audio streams, the video stream will be ignored.
     * @param array $SubtitleSet Multilingual subtitle parameters, with a maximum of 16 supported. Each element in an array corresponds to a subtitle stream in the adaptive bitrate stream. The order of elements in an array determines the order of subtitle streams in the adaptive bitrate stream.
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
