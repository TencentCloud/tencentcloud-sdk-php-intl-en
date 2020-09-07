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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Video information
 *
 * @method integer getVideoPlayTime() Obtain Video playback start time, in milliseconds
 * @method void setVideoPlayTime(integer $VideoPlayTime) Set Video playback start time, in milliseconds
 * @method integer getVideoSize() Obtain Video size, in bytes
 * @method void setVideoSize(integer $VideoSize) Set Video size, in bytes
 * @method string getVideoFormat() Obtain Video format
 * @method void setVideoFormat(string $VideoFormat) Set Video format
 * @method integer getVideoDuration() Obtain Video playback duration, in milliseconds
 * @method void setVideoDuration(integer $VideoDuration) Set Video playback duration, in milliseconds
 * @method string getVideoUrl() Obtain Video file URL
 * @method void setVideoUrl(string $VideoUrl) Set Video file URL
 * @method string getVideoId() Obtain Video file ID
 * @method void setVideoId(string $VideoId) Set Video file ID
 * @method integer getVideoType() Obtain Video stream type - 0: camera video - 1: screen-sharing video - 2: whiteboard video - 3: mixed stream video - 4: audio-only (mp3)
 * @method void setVideoType(integer $VideoType) Set Video stream type - 0: camera video - 1: screen-sharing video - 2: whiteboard video - 3: mixed stream video - 4: audio-only (mp3)
 * @method string getUserId() Obtain ID of the user to which the camera video or screen-sharing video belongs (whiteboard video: null, mixed stream video: tic_mixstream_<Room ID>_<Mixed stream layout type>, auxiliary video: tic_substream_user ID)
 * @method void setUserId(string $UserId) Set ID of the user to which the camera video or screen-sharing video belongs (whiteboard video: null, mixed stream video: tic_mixstream_<Room ID>_<Mixed stream layout type>, auxiliary video: tic_substream_user ID)
 * @method integer getWidth() Obtain Width of the video resolution.
 * @method void setWidth(integer $Width) Set Width of the video resolution.
 * @method integer getHeight() Obtain Height of the video resolution.
 * @method void setHeight(integer $Height) Set Height of the video resolution.
 */
class VideoInfo extends AbstractModel
{
    /**
     * @var integer Video playback start time, in milliseconds
     */
    public $VideoPlayTime;

    /**
     * @var integer Video size, in bytes
     */
    public $VideoSize;

    /**
     * @var string Video format
     */
    public $VideoFormat;

    /**
     * @var integer Video playback duration, in milliseconds
     */
    public $VideoDuration;

    /**
     * @var string Video file URL
     */
    public $VideoUrl;

    /**
     * @var string Video file ID
     */
    public $VideoId;

    /**
     * @var integer Video stream type - 0: camera video - 1: screen-sharing video - 2: whiteboard video - 3: mixed stream video - 4: audio-only (mp3)
     */
    public $VideoType;

    /**
     * @var string ID of the user to which the camera video or screen-sharing video belongs (whiteboard video: null, mixed stream video: tic_mixstream_<Room ID>_<Mixed stream layout type>, auxiliary video: tic_substream_user ID)
     */
    public $UserId;

    /**
     * @var integer Width of the video resolution.
     */
    public $Width;

    /**
     * @var integer Height of the video resolution.
     */
    public $Height;

    /**
     * @param integer $VideoPlayTime Video playback start time, in milliseconds
     * @param integer $VideoSize Video size, in bytes
     * @param string $VideoFormat Video format
     * @param integer $VideoDuration Video playback duration, in milliseconds
     * @param string $VideoUrl Video file URL
     * @param string $VideoId Video file ID
     * @param integer $VideoType Video stream type - 0: camera video - 1: screen-sharing video - 2: whiteboard video - 3: mixed stream video - 4: audio-only (mp3)
     * @param string $UserId ID of the user to which the camera video or screen-sharing video belongs (whiteboard video: null, mixed stream video: tic_mixstream_<Room ID>_<Mixed stream layout type>, auxiliary video: tic_substream_user ID)
     * @param integer $Width Width of the video resolution.
     * @param integer $Height Height of the video resolution.
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
        if (array_key_exists("VideoPlayTime",$param) and $param["VideoPlayTime"] !== null) {
            $this->VideoPlayTime = $param["VideoPlayTime"];
        }

        if (array_key_exists("VideoSize",$param) and $param["VideoSize"] !== null) {
            $this->VideoSize = $param["VideoSize"];
        }

        if (array_key_exists("VideoFormat",$param) and $param["VideoFormat"] !== null) {
            $this->VideoFormat = $param["VideoFormat"];
        }

        if (array_key_exists("VideoDuration",$param) and $param["VideoDuration"] !== null) {
            $this->VideoDuration = $param["VideoDuration"];
        }

        if (array_key_exists("VideoUrl",$param) and $param["VideoUrl"] !== null) {
            $this->VideoUrl = $param["VideoUrl"];
        }

        if (array_key_exists("VideoId",$param) and $param["VideoId"] !== null) {
            $this->VideoId = $param["VideoId"];
        }

        if (array_key_exists("VideoType",$param) and $param["VideoType"] !== null) {
            $this->VideoType = $param["VideoType"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }
    }
}
