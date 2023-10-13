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
 * The output video information of a video editing/compositing task.
 *
 * @method string getContainer() Obtain The container. Valid values:
<li>`mp4` (default), for video files. </li>
<li>`mp3`, for audio files. </li>
 * @method void setContainer(string $Container) Set The container. Valid values:
<li>`mp4` (default), for video files. </li>
<li>`mp3`, for audio files. </li>
 * @method integer getRemoveVideo() Obtain Whether to remove video data. Valid values:
<li>`0` (default): No. </li>
<li>`1`: Yes. </li>
 * @method void setRemoveVideo(integer $RemoveVideo) Set Whether to remove video data. Valid values:
<li>`0` (default): No. </li>
<li>`1`: Yes. </li>
 * @method integer getRemoveAudio() Obtain Whether to remove audio data. Valid values:
<li>`0` (default): No. </li>
<li>`1`: Yes. </li>
 * @method void setRemoveAudio(integer $RemoveAudio) Set Whether to remove audio data. Valid values:
<li>`0` (default): No. </li>
<li>`1`: Yes. </li>
 * @method ComposeVideoStream getVideoStream() Obtain The information of the output video stream.
 * @method void setVideoStream(ComposeVideoStream $VideoStream) Set The information of the output video stream.
 * @method ComposeAudioStream getAudioStream() Obtain The information of the output audio stream.
 * @method void setAudioStream(ComposeAudioStream $AudioStream) Set The information of the output audio stream.
 */
class ComposeTargetInfo extends AbstractModel
{
    /**
     * @var string The container. Valid values:
<li>`mp4` (default), for video files. </li>
<li>`mp3`, for audio files. </li>
     */
    public $Container;

    /**
     * @var integer Whether to remove video data. Valid values:
<li>`0` (default): No. </li>
<li>`1`: Yes. </li>
     */
    public $RemoveVideo;

    /**
     * @var integer Whether to remove audio data. Valid values:
<li>`0` (default): No. </li>
<li>`1`: Yes. </li>
     */
    public $RemoveAudio;

    /**
     * @var ComposeVideoStream The information of the output video stream.
     */
    public $VideoStream;

    /**
     * @var ComposeAudioStream The information of the output audio stream.
     */
    public $AudioStream;

    /**
     * @param string $Container The container. Valid values:
<li>`mp4` (default), for video files. </li>
<li>`mp3`, for audio files. </li>
     * @param integer $RemoveVideo Whether to remove video data. Valid values:
<li>`0` (default): No. </li>
<li>`1`: Yes. </li>
     * @param integer $RemoveAudio Whether to remove audio data. Valid values:
<li>`0` (default): No. </li>
<li>`1`: Yes. </li>
     * @param ComposeVideoStream $VideoStream The information of the output video stream.
     * @param ComposeAudioStream $AudioStream The information of the output audio stream.
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

        if (array_key_exists("VideoStream",$param) and $param["VideoStream"] !== null) {
            $this->VideoStream = new ComposeVideoStream();
            $this->VideoStream->deserialize($param["VideoStream"]);
        }

        if (array_key_exists("AudioStream",$param) and $param["AudioStream"] !== null) {
            $this->AudioStream = new ComposeAudioStream();
            $this->AudioStream->deserialize($param["AudioStream"]);
        }
    }
}
