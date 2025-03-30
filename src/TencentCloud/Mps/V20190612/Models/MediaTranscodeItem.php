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
 * Transcoding information
 *
 * @method TaskOutputStorage getOutputStorage() Obtain Target bucket of an output file.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set Target bucket of an output file.
 * @method string getPath() Obtain Path to an output video file.
 * @method void setPath(string $Path) Set Path to an output video file.
 * @method integer getDefinition() Obtain Transcoding specification ID. For more information, please see [Transcoding Parameter Template](https://intl.cloud.tencent.com/document/product/266/33478?from_cn_redirect=1#.E8.BD.AC.E7.A0.81.E6.A8.A1.E6.9D.BF).
 * @method void setDefinition(integer $Definition) Set Transcoding specification ID. For more information, please see [Transcoding Parameter Template](https://intl.cloud.tencent.com/document/product/266/33478?from_cn_redirect=1#.E8.BD.AC.E7.A0.81.E6.A8.A1.E6.9D.BF).
 * @method integer getBitrate() Obtain Sum of the average bitrate of a video stream and that of an audio stream in bps.
 * @method void setBitrate(integer $Bitrate) Set Sum of the average bitrate of a video stream and that of an audio stream in bps.
 * @method integer getHeight() Obtain Maximum value of the height of a video stream in px.
 * @method void setHeight(integer $Height) Set Maximum value of the height of a video stream in px.
 * @method integer getWidth() Obtain Maximum value of the width of a video stream in px.
 * @method void setWidth(integer $Width) Set Maximum value of the width of a video stream in px.
 * @method integer getSize() Obtain Total size of a media file in bytes (which is the sum of size of m3u8 and ts files if the video is in HLS format).
 * @method void setSize(integer $Size) Set Total size of a media file in bytes (which is the sum of size of m3u8 and ts files if the video is in HLS format).
 * @method float getDuration() Obtain Video duration in seconds.
 * @method void setDuration(float $Duration) Set Video duration in seconds.
 * @method string getContainer() Obtain Container, such as m4a and mp4.
 * @method void setContainer(string $Container) Set Container, such as m4a and mp4.
 * @method string getMd5() Obtain MD5 value of a video.
 * @method void setMd5(string $Md5) Set MD5 value of a video.
 * @method array getAudioStreamSet() Obtain Audio stream information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAudioStreamSet(array $AudioStreamSet) Set Audio stream information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getVideoStreamSet() Obtain Video stream information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVideoStreamSet(array $VideoStreamSet) Set Video stream information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCallBackExtInfo() Obtain Enhancement items used for video transcoding. Descriptions of enhancement items:
<li>hdr: HDR configuration</li>
<li>wd_fps: configuration of frame interpolation for higher frame rate</li>
<li>video_super_resolution: 	super-resolution configuration</li>
<li>repair: comprehensive enhancement configuration</li>
<li>denoise: video denoising configuration</li>
<Li>color_enhance: color enhancement configuration</li>
<Li>scratch: scratch removal configuration</li>
<li>artifact: artifact (glitch) removal configuration</li>
<li>sharp: detail enhancement configuration</li>
<Li>low_light: low-light enhancement configuration</li>
<Li>face_enhance: face enhancement configuration</li>
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCallBackExtInfo(string $CallBackExtInfo) Set Enhancement items used for video transcoding. Descriptions of enhancement items:
<li>hdr: HDR configuration</li>
<li>wd_fps: configuration of frame interpolation for higher frame rate</li>
<li>video_super_resolution: 	super-resolution configuration</li>
<li>repair: comprehensive enhancement configuration</li>
<li>denoise: video denoising configuration</li>
<Li>color_enhance: color enhancement configuration</li>
<Li>scratch: scratch removal configuration</li>
<li>artifact: artifact (glitch) removal configuration</li>
<li>sharp: detail enhancement configuration</li>
<Li>low_light: low-light enhancement configuration</li>
<Li>face_enhance: face enhancement configuration</li>
Note: This field may return null, indicating that no valid value can be obtained.
 */
class MediaTranscodeItem extends AbstractModel
{
    /**
     * @var TaskOutputStorage Target bucket of an output file.
     */
    public $OutputStorage;

    /**
     * @var string Path to an output video file.
     */
    public $Path;

    /**
     * @var integer Transcoding specification ID. For more information, please see [Transcoding Parameter Template](https://intl.cloud.tencent.com/document/product/266/33478?from_cn_redirect=1#.E8.BD.AC.E7.A0.81.E6.A8.A1.E6.9D.BF).
     */
    public $Definition;

    /**
     * @var integer Sum of the average bitrate of a video stream and that of an audio stream in bps.
     */
    public $Bitrate;

    /**
     * @var integer Maximum value of the height of a video stream in px.
     */
    public $Height;

    /**
     * @var integer Maximum value of the width of a video stream in px.
     */
    public $Width;

    /**
     * @var integer Total size of a media file in bytes (which is the sum of size of m3u8 and ts files if the video is in HLS format).
     */
    public $Size;

    /**
     * @var float Video duration in seconds.
     */
    public $Duration;

    /**
     * @var string Container, such as m4a and mp4.
     */
    public $Container;

    /**
     * @var string MD5 value of a video.
     */
    public $Md5;

    /**
     * @var array Audio stream information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AudioStreamSet;

    /**
     * @var array Video stream information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VideoStreamSet;

    /**
     * @var string Enhancement items used for video transcoding. Descriptions of enhancement items:
<li>hdr: HDR configuration</li>
<li>wd_fps: configuration of frame interpolation for higher frame rate</li>
<li>video_super_resolution: 	super-resolution configuration</li>
<li>repair: comprehensive enhancement configuration</li>
<li>denoise: video denoising configuration</li>
<Li>color_enhance: color enhancement configuration</li>
<Li>scratch: scratch removal configuration</li>
<li>artifact: artifact (glitch) removal configuration</li>
<li>sharp: detail enhancement configuration</li>
<Li>low_light: low-light enhancement configuration</li>
<Li>face_enhance: face enhancement configuration</li>
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CallBackExtInfo;

    /**
     * @param TaskOutputStorage $OutputStorage Target bucket of an output file.
     * @param string $Path Path to an output video file.
     * @param integer $Definition Transcoding specification ID. For more information, please see [Transcoding Parameter Template](https://intl.cloud.tencent.com/document/product/266/33478?from_cn_redirect=1#.E8.BD.AC.E7.A0.81.E6.A8.A1.E6.9D.BF).
     * @param integer $Bitrate Sum of the average bitrate of a video stream and that of an audio stream in bps.
     * @param integer $Height Maximum value of the height of a video stream in px.
     * @param integer $Width Maximum value of the width of a video stream in px.
     * @param integer $Size Total size of a media file in bytes (which is the sum of size of m3u8 and ts files if the video is in HLS format).
     * @param float $Duration Video duration in seconds.
     * @param string $Container Container, such as m4a and mp4.
     * @param string $Md5 MD5 value of a video.
     * @param array $AudioStreamSet Audio stream information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $VideoStreamSet Video stream information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CallBackExtInfo Enhancement items used for video transcoding. Descriptions of enhancement items:
<li>hdr: HDR configuration</li>
<li>wd_fps: configuration of frame interpolation for higher frame rate</li>
<li>video_super_resolution: 	super-resolution configuration</li>
<li>repair: comprehensive enhancement configuration</li>
<li>denoise: video denoising configuration</li>
<Li>color_enhance: color enhancement configuration</li>
<Li>scratch: scratch removal configuration</li>
<li>artifact: artifact (glitch) removal configuration</li>
<li>sharp: detail enhancement configuration</li>
<Li>low_light: low-light enhancement configuration</li>
<Li>face_enhance: face enhancement configuration</li>
Note: This field may return null, indicating that no valid value can be obtained.
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
