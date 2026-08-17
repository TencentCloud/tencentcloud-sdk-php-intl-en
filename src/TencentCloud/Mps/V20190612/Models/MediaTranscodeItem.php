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
 * Transcoding info
 *
 * @method TaskOutputStorage getOutputStorage() Obtain Target storage of the transcoded file.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set Target storage of the transcoded file.
 * @method string getPath() Obtain Video file path after transcoding.
 * @method void setPath(string $Path) Set Video file path after transcoding.
 * @method integer getDefinition() Obtain Transcoding specification ID. Please refer to the transcoding parameter template (https://www.tencentcloud.com/document/product/862/37042?from_cn_redirect=1).
 * @method void setDefinition(integer $Definition) Set Transcoding specification ID. Please refer to the transcoding parameter template (https://www.tencentcloud.com/document/product/862/37042?from_cn_redirect=1).
 * @method integer getBitrate() Obtain Sum of the average video stream bitrate and the average audio stream bit rate. Measurement unit: bps.
 * @method void setBitrate(integer $Bitrate) Set Sum of the average video stream bitrate and the average audio stream bit rate. Measurement unit: bps.
 * @method integer getHeight() Obtain Maximum value of video stream height, measurement unit: px.
 * @method void setHeight(integer $Height) Set Maximum value of video stream height, measurement unit: px.
 * @method integer getWidth() Obtain Maximum value of the video stream width in px.
 * @method void setWidth(integer $Width) Set Maximum value of the video stream width in px.
 * @method integer getSize() Obtain Total size of media files (when the video is HLS, the size is the sum of m3u8 and ts file sizes), measurement unit: byte.
 * @method void setSize(integer $Size) Set Total size of media files (when the video is HLS, the size is the sum of m3u8 and ts file sizes), measurement unit: byte.
 * @method float getDuration() Obtain Video duration, in seconds.
 * @method void setDuration(float $Duration) Set Video duration, in seconds.
 * @method string getContainer() Obtain Container type, such as m4a and mp4.
 * @method void setContainer(string $Container) Set Container type, such as m4a and mp4.
 * @method string getMd5() Obtain md5 value of the video.
 * @method void setMd5(string $Md5) Set md5 value of the video.
 * @method array getAudioStreamSet() Obtain Audio stream information.
 * @method void setAudioStreamSet(array $AudioStreamSet) Set Audio stream information.
 * @method array getVideoStreamSet() Obtain Video stream information.
 * @method void setVideoStreamSet(array $VideoStreamSet) Set Video stream information.
 * @method string getCallBackExtInfo() Obtain 
 * @method void setCallBackExtInfo(string $CallBackExtInfo) Set 
 */
class MediaTranscodeItem extends AbstractModel
{
    /**
     * @var TaskOutputStorage Target storage of the transcoded file.
     */
    public $OutputStorage;

    /**
     * @var string Video file path after transcoding.
     */
    public $Path;

    /**
     * @var integer Transcoding specification ID. Please refer to the transcoding parameter template (https://www.tencentcloud.com/document/product/862/37042?from_cn_redirect=1).
     */
    public $Definition;

    /**
     * @var integer Sum of the average video stream bitrate and the average audio stream bit rate. Measurement unit: bps.
     */
    public $Bitrate;

    /**
     * @var integer Maximum value of video stream height, measurement unit: px.
     */
    public $Height;

    /**
     * @var integer Maximum value of the video stream width in px.
     */
    public $Width;

    /**
     * @var integer Total size of media files (when the video is HLS, the size is the sum of m3u8 and ts file sizes), measurement unit: byte.
     */
    public $Size;

    /**
     * @var float Video duration, in seconds.
     */
    public $Duration;

    /**
     * @var string Container type, such as m4a and mp4.
     */
    public $Container;

    /**
     * @var string md5 value of the video.
     */
    public $Md5;

    /**
     * @var array Audio stream information.
     */
    public $AudioStreamSet;

    /**
     * @var array Video stream information.
     */
    public $VideoStreamSet;

    /**
     * @var string 
     */
    public $CallBackExtInfo;

    /**
     * @param TaskOutputStorage $OutputStorage Target storage of the transcoded file.
     * @param string $Path Video file path after transcoding.
     * @param integer $Definition Transcoding specification ID. Please refer to the transcoding parameter template (https://www.tencentcloud.com/document/product/862/37042?from_cn_redirect=1).
     * @param integer $Bitrate Sum of the average video stream bitrate and the average audio stream bit rate. Measurement unit: bps.
     * @param integer $Height Maximum value of video stream height, measurement unit: px.
     * @param integer $Width Maximum value of the video stream width in px.
     * @param integer $Size Total size of media files (when the video is HLS, the size is the sum of m3u8 and ts file sizes), measurement unit: byte.
     * @param float $Duration Video duration, in seconds.
     * @param string $Container Container type, such as m4a and mp4.
     * @param string $Md5 md5 value of the video.
     * @param array $AudioStreamSet Audio stream information.
     * @param array $VideoStreamSet Video stream information.
     * @param string $CallBackExtInfo 
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
        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
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

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("AudioStreamSet",$param) and $param["AudioStreamSet"] !== null) {
            $this->AudioStreamSet = [];
            foreach ($param["AudioStreamSet"] as $key => $value){
                $obj = new MediaAudioStreamItem();
                $obj->deserialize($value);
                array_push($this->AudioStreamSet, $obj);
            }
        }

        if (array_key_exists("VideoStreamSet",$param) and $param["VideoStreamSet"] !== null) {
            $this->VideoStreamSet = [];
            foreach ($param["VideoStreamSet"] as $key => $value){
                $obj = new MediaVideoStreamItem();
                $obj->deserialize($value);
                array_push($this->VideoStreamSet, $obj);
            }
        }

        if (array_key_exists("CallBackExtInfo",$param) and $param["CallBackExtInfo"] !== null) {
            $this->CallBackExtInfo = $param["CallBackExtInfo"];
        }
    }
}
