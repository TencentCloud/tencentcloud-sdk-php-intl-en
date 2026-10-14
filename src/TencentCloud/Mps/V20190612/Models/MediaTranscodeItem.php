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
 * Transcoding information
 *
 * @method TaskOutputStorage getOutputStorage() Obtain <p>Target storage for the transcoded file.</p>
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set <p>Target storage for the transcoded file.</p>
 * @method string getPath() Obtain <p>Transcoded video file path.</p>
 * @method void setPath(string $Path) Set <p>Transcoded video file path.</p>
 * @method integer getDefinition() Obtain <p>Transcoding specification ID. Please refer to <a href="https://www.tencentcloud.com/document/product/862/37042?from_cn_redirect=1">transcoding parameter template</a>.</p>
 * @method void setDefinition(integer $Definition) Set <p>Transcoding specification ID. Please refer to <a href="https://www.tencentcloud.com/document/product/862/37042?from_cn_redirect=1">transcoding parameter template</a>.</p>
 * @method integer getBitrate() Obtain <p>Sum of the mean video stream bitrate and the mean audio stream bitrate. Unit: bps.</p>
 * @method void setBitrate(integer $Bitrate) Set <p>Sum of the mean video stream bitrate and the mean audio stream bitrate. Unit: bps.</p>
 * @method integer getHeight() Obtain <p>Maximum height of the video stream. Unit: px.</p>
 * @method void setHeight(integer $Height) Set <p>Maximum height of the video stream. Unit: px.</p>
 * @method integer getWidth() Obtain <p>Maximum video stream width. Unit: px.</p>
 * @method void setWidth(integer $Width) Set <p>Maximum video stream width. Unit: px.</p>
 * @method integer getSize() Obtain <p>Total size of media files (for HLS videos, the size is the sum of m3u8 and ts file sizes), unit: byte.</p>
 * @method void setSize(integer $Size) Set <p>Total size of media files (for HLS videos, the size is the sum of m3u8 and ts file sizes), unit: byte.</p>
 * @method float getDuration() Obtain <p>Video duration, in seconds.</p>
 * @method void setDuration(float $Duration) Set <p>Video duration, in seconds.</p>
 * @method string getContainer() Obtain <p>Container type, for example, m4a, mp4.</p>
 * @method void setContainer(string $Container) Set <p>Container type, for example, m4a, mp4.</p>
 * @method string getMd5() Obtain <p>md5 value of the video.</p>
 * @method void setMd5(string $Md5) Set <p>md5 value of the video.</p>
 * @method array getAudioStreamSet() Obtain <p>Audio stream information.</p>
 * @method void setAudioStreamSet(array $AudioStreamSet) Set <p>Audio stream information.</p>
 * @method array getVideoStreamSet() Obtain <p>Video stream information.</p>
 * @method void setVideoStreamSet(array $VideoStreamSet) Set <p>Video stream information.</p>
 * @method string getCallBackExtInfo() Obtain <p>Video transcoding enhancement item descriptions and explanations</p><li>hdr: HDR configuration</li><li>wd_fps: Frame interpolation frame rate configuration</li><li>video_super_resolution: Super-resolution configuration</li><li>repair: Comprehensive enhancement configuration</li><li>denoise: Video noise reduction configuration</li><li>color_enhance: Color enhancement configuration</li><li>scratch: Scratches removal configuration</li><li>artifact: Artifacts removal (burrs) configuration</li><li>sharp: Detail enhancement configuration</li><li>low_light: Low-light enhancement configuration</li><li>face_enhance: Face enhancement configuration</li>
 * @method void setCallBackExtInfo(string $CallBackExtInfo) Set <p>Video transcoding enhancement item descriptions and explanations</p><li>hdr: HDR configuration</li><li>wd_fps: Frame interpolation frame rate configuration</li><li>video_super_resolution: Super-resolution configuration</li><li>repair: Comprehensive enhancement configuration</li><li>denoise: Video noise reduction configuration</li><li>color_enhance: Color enhancement configuration</li><li>scratch: Scratches removal configuration</li><li>artifact: Artifacts removal (burrs) configuration</li><li>sharp: Detail enhancement configuration</li><li>low_light: Low-light enhancement configuration</li><li>face_enhance: Face enhancement configuration</li>
 * @method MediaUsageItem getUsage() Obtain <p>MediaTranscodeItem</p>
 * @method void setUsage(MediaUsageItem $Usage) Set <p>MediaTranscodeItem</p>
 */
class MediaTranscodeItem extends AbstractModel
{
    /**
     * @var TaskOutputStorage <p>Target storage for the transcoded file.</p>
     */
    public $OutputStorage;

    /**
     * @var string <p>Transcoded video file path.</p>
     */
    public $Path;

    /**
     * @var integer <p>Transcoding specification ID. Please refer to <a href="https://www.tencentcloud.com/document/product/862/37042?from_cn_redirect=1">transcoding parameter template</a>.</p>
     */
    public $Definition;

    /**
     * @var integer <p>Sum of the mean video stream bitrate and the mean audio stream bitrate. Unit: bps.</p>
     */
    public $Bitrate;

    /**
     * @var integer <p>Maximum height of the video stream. Unit: px.</p>
     */
    public $Height;

    /**
     * @var integer <p>Maximum video stream width. Unit: px.</p>
     */
    public $Width;

    /**
     * @var integer <p>Total size of media files (for HLS videos, the size is the sum of m3u8 and ts file sizes), unit: byte.</p>
     */
    public $Size;

    /**
     * @var float <p>Video duration, in seconds.</p>
     */
    public $Duration;

    /**
     * @var string <p>Container type, for example, m4a, mp4.</p>
     */
    public $Container;

    /**
     * @var string <p>md5 value of the video.</p>
     */
    public $Md5;

    /**
     * @var array <p>Audio stream information.</p>
     */
    public $AudioStreamSet;

    /**
     * @var array <p>Video stream information.</p>
     */
    public $VideoStreamSet;

    /**
     * @var string <p>Video transcoding enhancement item descriptions and explanations</p><li>hdr: HDR configuration</li><li>wd_fps: Frame interpolation frame rate configuration</li><li>video_super_resolution: Super-resolution configuration</li><li>repair: Comprehensive enhancement configuration</li><li>denoise: Video noise reduction configuration</li><li>color_enhance: Color enhancement configuration</li><li>scratch: Scratches removal configuration</li><li>artifact: Artifacts removal (burrs) configuration</li><li>sharp: Detail enhancement configuration</li><li>low_light: Low-light enhancement configuration</li><li>face_enhance: Face enhancement configuration</li>
     */
    public $CallBackExtInfo;

    /**
     * @var MediaUsageItem <p>MediaTranscodeItem</p>
     */
    public $Usage;

    /**
     * @param TaskOutputStorage $OutputStorage <p>Target storage for the transcoded file.</p>
     * @param string $Path <p>Transcoded video file path.</p>
     * @param integer $Definition <p>Transcoding specification ID. Please refer to <a href="https://www.tencentcloud.com/document/product/862/37042?from_cn_redirect=1">transcoding parameter template</a>.</p>
     * @param integer $Bitrate <p>Sum of the mean video stream bitrate and the mean audio stream bitrate. Unit: bps.</p>
     * @param integer $Height <p>Maximum height of the video stream. Unit: px.</p>
     * @param integer $Width <p>Maximum video stream width. Unit: px.</p>
     * @param integer $Size <p>Total size of media files (for HLS videos, the size is the sum of m3u8 and ts file sizes), unit: byte.</p>
     * @param float $Duration <p>Video duration, in seconds.</p>
     * @param string $Container <p>Container type, for example, m4a, mp4.</p>
     * @param string $Md5 <p>md5 value of the video.</p>
     * @param array $AudioStreamSet <p>Audio stream information.</p>
     * @param array $VideoStreamSet <p>Video stream information.</p>
     * @param string $CallBackExtInfo <p>Video transcoding enhancement item descriptions and explanations</p><li>hdr: HDR configuration</li><li>wd_fps: Frame interpolation frame rate configuration</li><li>video_super_resolution: Super-resolution configuration</li><li>repair: Comprehensive enhancement configuration</li><li>denoise: Video noise reduction configuration</li><li>color_enhance: Color enhancement configuration</li><li>scratch: Scratches removal configuration</li><li>artifact: Artifacts removal (burrs) configuration</li><li>sharp: Detail enhancement configuration</li><li>low_light: Low-light enhancement configuration</li><li>face_enhance: Face enhancement configuration</li>
     * @param MediaUsageItem $Usage <p>MediaTranscodeItem</p>
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

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = new MediaUsageItem();
            $this->Usage->deserialize($param["Usage"]);
        }
    }
}
