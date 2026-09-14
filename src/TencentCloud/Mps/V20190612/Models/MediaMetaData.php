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
 * Meta-information of on-demand media files
 *
 * @method integer getSize() Obtain Size of the uploaded media file (for HLS videos, the size is the total of the m3u8 and ts file sizes), unit: byte.
 * @method void setSize(integer $Size) Set Size of the uploaded media file (for HLS videos, the size is the total of the m3u8 and ts file sizes), unit: byte.
 * @method string getContainer() Obtain Container type, for example, m4a and mp4.
 * @method void setContainer(string $Container) Set Container type, for example, m4a and mp4.
 * @method integer getBitrate() Obtain Sum of the average video stream bitrate and average audio stream bitrate. Unit: bps.
 * @method void setBitrate(integer $Bitrate) Set Sum of the average video stream bitrate and average audio stream bitrate. Unit: bps.
 * @method integer getHeight() Obtain Maximum height of a video stream. Unit: px.
 * @method void setHeight(integer $Height) Set Maximum height of a video stream. Unit: px.
 * @method integer getWidth() Obtain Maximum video stream width in px.
 * @method void setWidth(integer $Width) Set Maximum video stream width in px.
 * @method float getDuration() Obtain Video duration, unit: seconds.
 * @method void setDuration(float $Duration) Set Video duration, unit: seconds.
 * @method integer getRotate() Obtain Selection angle during video shooting. Unit: degree.
 * @method void setRotate(integer $Rotate) Set Selection angle during video shooting. Unit: degree.
 * @method array getVideoStreamSet() Obtain Video stream information.
 * @method void setVideoStreamSet(array $VideoStreamSet) Set Video stream information.
 * @method array getAudioStreamSet() Obtain Audio stream information.
 * @method void setAudioStreamSet(array $AudioStreamSet) Set Audio stream information.
 * @method float getVideoDuration() Obtain Video duration, unit: seconds.
 * @method void setVideoDuration(float $VideoDuration) Set Video duration, unit: seconds.
 * @method float getAudioDuration() Obtain Audio duration, in seconds.
 * @method void setAudioDuration(float $AudioDuration) Set Audio duration, in seconds.
 */
class MediaMetaData extends AbstractModel
{
    /**
     * @var integer Size of the uploaded media file (for HLS videos, the size is the total of the m3u8 and ts file sizes), unit: byte.
     */
    public $Size;

    /**
     * @var string Container type, for example, m4a and mp4.
     */
    public $Container;

    /**
     * @var integer Sum of the average video stream bitrate and average audio stream bitrate. Unit: bps.
     */
    public $Bitrate;

    /**
     * @var integer Maximum height of a video stream. Unit: px.
     */
    public $Height;

    /**
     * @var integer Maximum video stream width in px.
     */
    public $Width;

    /**
     * @var float Video duration, unit: seconds.
     */
    public $Duration;

    /**
     * @var integer Selection angle during video shooting. Unit: degree.
     */
    public $Rotate;

    /**
     * @var array Video stream information.
     */
    public $VideoStreamSet;

    /**
     * @var array Audio stream information.
     */
    public $AudioStreamSet;

    /**
     * @var float Video duration, unit: seconds.
     */
    public $VideoDuration;

    /**
     * @var float Audio duration, in seconds.
     */
    public $AudioDuration;

    /**
     * @param integer $Size Size of the uploaded media file (for HLS videos, the size is the total of the m3u8 and ts file sizes), unit: byte.
     * @param string $Container Container type, for example, m4a and mp4.
     * @param integer $Bitrate Sum of the average video stream bitrate and average audio stream bitrate. Unit: bps.
     * @param integer $Height Maximum height of a video stream. Unit: px.
     * @param integer $Width Maximum video stream width in px.
     * @param float $Duration Video duration, unit: seconds.
     * @param integer $Rotate Selection angle during video shooting. Unit: degree.
     * @param array $VideoStreamSet Video stream information.
     * @param array $AudioStreamSet Audio stream information.
     * @param float $VideoDuration Video duration, unit: seconds.
     * @param float $AudioDuration Audio duration, in seconds.
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
