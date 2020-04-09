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
 * Metadata of a VOD media file
 *
 * @method integer getSize() Obtain Size of an uploaded media file in bytes (which is the sum of size of m3u8 and ts files if the video is in HLS format).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSize(integer $Size) Set Size of an uploaded media file in bytes (which is the sum of size of m3u8 and ts files if the video is in HLS format).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getContainer() Obtain Container, such as m4a and mp4.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContainer(string $Container) Set Container, such as m4a and mp4.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBitrate() Obtain Sum of the average bitrate of a video stream and that of an audio stream in bps.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBitrate(integer $Bitrate) Set Sum of the average bitrate of a video stream and that of an audio stream in bps.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getHeight() Obtain Maximum value of the height of a video stream in px.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHeight(integer $Height) Set Maximum value of the height of a video stream in px.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getWidth() Obtain Maximum value of the width of a video stream in px.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWidth(integer $Width) Set Maximum value of the width of a video stream in px.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getDuration() Obtain Video duration in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDuration(float $Duration) Set Video duration in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRotate() Obtain Selected angle during video recording in degrees.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRotate(integer $Rotate) Set Selected angle during video recording in degrees.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getVideoStreamSet() Obtain Video stream information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVideoStreamSet(array $VideoStreamSet) Set Video stream information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAudioStreamSet() Obtain Audio stream information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAudioStreamSet(array $AudioStreamSet) Set Audio stream information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getVideoDuration() Obtain Video duration in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVideoDuration(float $VideoDuration) Set Video duration in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getAudioDuration() Obtain Audio duration in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAudioDuration(float $AudioDuration) Set Audio duration in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class MediaMetaData extends AbstractModel
{
    /**
     * @var integer Size of an uploaded media file in bytes (which is the sum of size of m3u8 and ts files if the video is in HLS format).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Size;

    /**
     * @var string Container, such as m4a and mp4.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Container;

    /**
     * @var integer Sum of the average bitrate of a video stream and that of an audio stream in bps.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Bitrate;

    /**
     * @var integer Maximum value of the height of a video stream in px.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Height;

    /**
     * @var integer Maximum value of the width of a video stream in px.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Width;

    /**
     * @var float Video duration in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Duration;

    /**
     * @var integer Selected angle during video recording in degrees.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Rotate;

    /**
     * @var array Video stream information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VideoStreamSet;

    /**
     * @var array Audio stream information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AudioStreamSet;

    /**
     * @var float Video duration in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VideoDuration;

    /**
     * @var float Audio duration in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AudioDuration;

    /**
     * @param integer $Size Size of an uploaded media file in bytes (which is the sum of size of m3u8 and ts files if the video is in HLS format).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Container Container, such as m4a and mp4.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Bitrate Sum of the average bitrate of a video stream and that of an audio stream in bps.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Height Maximum value of the height of a video stream in px.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Width Maximum value of the width of a video stream in px.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $Duration Video duration in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Rotate Selected angle during video recording in degrees.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $VideoStreamSet Video stream information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AudioStreamSet Audio stream information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $VideoDuration Video duration in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $AudioDuration Audio duration in seconds.
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
        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Rotate",$param) and $param["Rotate"] !== null) {
            $this->Rotate = $param["Rotate"];
        }

        if (array_key_exists("VideoStreamSet",$param) and $param["VideoStreamSet"] !== null) {
            $this->VideoStreamSet = [];
            foreach ($param["VideoStreamSet"] as $key => $value){
                $obj = new MediaVideoStreamItem();
                $obj->deserialize($value);
                array_push($this->VideoStreamSet, $obj);
            }
        }

        if (array_key_exists("AudioStreamSet",$param) and $param["AudioStreamSet"] !== null) {
            $this->AudioStreamSet = [];
            foreach ($param["AudioStreamSet"] as $key => $value){
                $obj = new MediaAudioStreamItem();
                $obj->deserialize($value);
                array_push($this->AudioStreamSet, $obj);
            }
        }

        if (array_key_exists("VideoDuration",$param) and $param["VideoDuration"] !== null) {
            $this->VideoDuration = $param["VideoDuration"];
        }

        if (array_key_exists("AudioDuration",$param) and $param["AudioDuration"] !== null) {
            $this->AudioDuration = $param["AudioDuration"];
        }
    }
}
