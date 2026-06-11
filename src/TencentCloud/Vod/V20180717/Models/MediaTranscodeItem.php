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
 * Transcoding information
 *
 * @method string getUrl() Obtain <p>File URL of the transcoded video.</p>
 * @method void setUrl(string $Url) Set <p>File URL of the transcoded video.</p>
 * @method integer getDefinition() Obtain <p>Transcoding specification ID. Please refer to <a href="https://www.tencentcloud.com/document/product/266/33476?from_cn_redirect=1">transcoding parameter template</a>.<br><font color="red">Note: A value of 0 means the raw file.</font></p>
 * @method void setDefinition(integer $Definition) Set <p>Transcoding specification ID. Please refer to <a href="https://www.tencentcloud.com/document/product/266/33476?from_cn_redirect=1">transcoding parameter template</a>.<br><font color="red">Note: A value of 0 means the raw file.</font></p>
 * @method integer getBitrate() Obtain <p>Sum of the mean bitrate of a stream and the mean audio stream bit rate, unit: bps.</p>
 * @method void setBitrate(integer $Bitrate) Set <p>Sum of the mean bitrate of a stream and the mean audio stream bit rate, unit: bps.</p>
 * @method integer getHeight() Obtain <p>Maximum value of video stream height. Unit: px.</p>
 * @method void setHeight(integer $Height) Set <p>Maximum value of video stream height. Unit: px.</p>
 * @method integer getWidth() Obtain <p>Maximum value of video stream width. Unit: px.</p>
 * @method void setWidth(integer $Width) Set <p>Maximum value of video stream width. Unit: px.</p>
 * @method integer getSize() Obtain <p>Total size of media files, measurement unit: byte.</p><li>When the media file is HLS, the size is the sum of m3u8 and ts file sizes.</li>
 * @method void setSize(integer $Size) Set <p>Total size of media files, measurement unit: byte.</p><li>When the media file is HLS, the size is the sum of m3u8 and ts file sizes.</li>
 * @method float getDuration() Obtain <p>Video duration, in seconds.</p>
 * @method void setDuration(float $Duration) Set <p>Video duration, in seconds.</p>
 * @method string getMd5() Obtain <p>md5 value of the video.</p>
 * @method void setMd5(string $Md5) Set <p>md5 value of the video.</p>
 * @method string getContainer() Obtain <p>Container type, such as m4a, mp4.</p>
 * @method void setContainer(string $Container) Set <p>Container type, such as m4a, mp4.</p>
 * @method array getVideoStreamSet() Obtain <p>Video stream information.</p>
 * @method void setVideoStreamSet(array $VideoStreamSet) Set <p>Video stream information.</p>
 * @method array getAudioStreamSet() Obtain <p>Audio stream information.</p>
 * @method void setAudioStreamSet(array $AudioStreamSet) Set <p>Audio stream information.</p>
 * @method string getDigitalWatermarkType() Obtain <p>Digital watermark type. Available values:</p><li>Trace means transit watermark processing;</li><li>CopyRight means copyright watermark processing;</li><li>None means no digital watermark processing.</li>
 * @method void setDigitalWatermarkType(string $DigitalWatermarkType) Set <p>Digital watermark type. Available values:</p><li>Trace means transit watermark processing;</li><li>CopyRight means copyright watermark processing;</li><li>None means no digital watermark processing.</li>
 * @method string getCopyRightWatermarkText() Obtain <p>Copyright information.</p>
 * @method void setCopyRightWatermarkText(string $CopyRightWatermarkText) Set <p>Copyright information.</p>
 * @method integer getBlindWatermarkDefinition() Obtain <p>Digital watermark template id.</p>
 * @method void setBlindWatermarkDefinition(integer $BlindWatermarkDefinition) Set <p>Digital watermark template id.</p>
 * @method string getFileId() Obtain <p>Generated new FileId for transcoding. Valid when requesting to enable independence media output.</p>
 * @method void setFileId(string $FileId) Set <p>Generated new FileId for transcoding. Valid when requesting to enable independence media output.</p>
 */
class MediaTranscodeItem extends AbstractModel
{
    /**
     * @var string <p>File URL of the transcoded video.</p>
     */
    public $Url;

    /**
     * @var integer <p>Transcoding specification ID. Please refer to <a href="https://www.tencentcloud.com/document/product/266/33476?from_cn_redirect=1">transcoding parameter template</a>.<br><font color="red">Note: A value of 0 means the raw file.</font></p>
     */
    public $Definition;

    /**
     * @var integer <p>Sum of the mean bitrate of a stream and the mean audio stream bit rate, unit: bps.</p>
     */
    public $Bitrate;

    /**
     * @var integer <p>Maximum value of video stream height. Unit: px.</p>
     */
    public $Height;

    /**
     * @var integer <p>Maximum value of video stream width. Unit: px.</p>
     */
    public $Width;

    /**
     * @var integer <p>Total size of media files, measurement unit: byte.</p><li>When the media file is HLS, the size is the sum of m3u8 and ts file sizes.</li>
     */
    public $Size;

    /**
     * @var float <p>Video duration, in seconds.</p>
     */
    public $Duration;

    /**
     * @var string <p>md5 value of the video.</p>
     */
    public $Md5;

    /**
     * @var string <p>Container type, such as m4a, mp4.</p>
     */
    public $Container;

    /**
     * @var array <p>Video stream information.</p>
     */
    public $VideoStreamSet;

    /**
     * @var array <p>Audio stream information.</p>
     */
    public $AudioStreamSet;

    /**
     * @var string <p>Digital watermark type. Available values:</p><li>Trace means transit watermark processing;</li><li>CopyRight means copyright watermark processing;</li><li>None means no digital watermark processing.</li>
     */
    public $DigitalWatermarkType;

    /**
     * @var string <p>Copyright information.</p>
     */
    public $CopyRightWatermarkText;

    /**
     * @var integer <p>Digital watermark template id.</p>
     */
    public $BlindWatermarkDefinition;

    /**
     * @var string <p>Generated new FileId for transcoding. Valid when requesting to enable independence media output.</p>
     */
    public $FileId;

    /**
     * @param string $Url <p>File URL of the transcoded video.</p>
     * @param integer $Definition <p>Transcoding specification ID. Please refer to <a href="https://www.tencentcloud.com/document/product/266/33476?from_cn_redirect=1">transcoding parameter template</a>.<br><font color="red">Note: A value of 0 means the raw file.</font></p>
     * @param integer $Bitrate <p>Sum of the mean bitrate of a stream and the mean audio stream bit rate, unit: bps.</p>
     * @param integer $Height <p>Maximum value of video stream height. Unit: px.</p>
     * @param integer $Width <p>Maximum value of video stream width. Unit: px.</p>
     * @param integer $Size <p>Total size of media files, measurement unit: byte.</p><li>When the media file is HLS, the size is the sum of m3u8 and ts file sizes.</li>
     * @param float $Duration <p>Video duration, in seconds.</p>
     * @param string $Md5 <p>md5 value of the video.</p>
     * @param string $Container <p>Container type, such as m4a, mp4.</p>
     * @param array $VideoStreamSet <p>Video stream information.</p>
     * @param array $AudioStreamSet <p>Audio stream information.</p>
     * @param string $DigitalWatermarkType <p>Digital watermark type. Available values:</p><li>Trace means transit watermark processing;</li><li>CopyRight means copyright watermark processing;</li><li>None means no digital watermark processing.</li>
     * @param string $CopyRightWatermarkText <p>Copyright information.</p>
     * @param integer $BlindWatermarkDefinition <p>Digital watermark template id.</p>
     * @param string $FileId <p>Generated new FileId for transcoding. Valid when requesting to enable independence media output.</p>
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
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

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
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

        if (array_key_exists("DigitalWatermarkType",$param) and $param["DigitalWatermarkType"] !== null) {
            $this->DigitalWatermarkType = $param["DigitalWatermarkType"];
        }

        if (array_key_exists("CopyRightWatermarkText",$param) and $param["CopyRightWatermarkText"] !== null) {
            $this->CopyRightWatermarkText = $param["CopyRightWatermarkText"];
        }

        if (array_key_exists("BlindWatermarkDefinition",$param) and $param["BlindWatermarkDefinition"] !== null) {
            $this->BlindWatermarkDefinition = $param["BlindWatermarkDefinition"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }
    }
}
