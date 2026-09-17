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
 * 
 *
 * @method string getUrl() Obtain 
 * @method void setUrl(string $Url) Set 
 * @method integer getDefinition() Obtain 
 * @method void setDefinition(integer $Definition) Set 
 * @method integer getBitrate() Obtain 
 * @method void setBitrate(integer $Bitrate) Set 
 * @method integer getHeight() Obtain 
 * @method void setHeight(integer $Height) Set 
 * @method integer getWidth() Obtain 
 * @method void setWidth(integer $Width) Set 
 * @method integer getSize() Obtain 
 * @method void setSize(integer $Size) Set 
 * @method float getDuration() Obtain 
 * @method void setDuration(float $Duration) Set 
 * @method string getMd5() Obtain 
 * @method void setMd5(string $Md5) Set 
 * @method string getContainer() Obtain 
 * @method void setContainer(string $Container) Set 
 * @method array getVideoStreamSet() Obtain 
 * @method void setVideoStreamSet(array $VideoStreamSet) Set 
 * @method array getAudioStreamSet() Obtain 
 * @method void setAudioStreamSet(array $AudioStreamSet) Set 
 * @method string getDigitalWatermarkType() Obtain 
 * @method void setDigitalWatermarkType(string $DigitalWatermarkType) Set 
 * @method string getCopyRightWatermarkText() Obtain 
 * @method void setCopyRightWatermarkText(string $CopyRightWatermarkText) Set 
 * @method integer getBlindWatermarkDefinition() Obtain 
 * @method void setBlindWatermarkDefinition(integer $BlindWatermarkDefinition) Set 
 * @method string getFileId() Obtain 
 * @method void setFileId(string $FileId) Set 
 */
class MediaTranscodeItem extends AbstractModel
{
    /**
     * @var string 
     */
    public $Url;

    /**
     * @var integer 
     */
    public $Definition;

    /**
     * @var integer 
     */
    public $Bitrate;

    /**
     * @var integer 
     */
    public $Height;

    /**
     * @var integer 
     */
    public $Width;

    /**
     * @var integer 
     */
    public $Size;

    /**
     * @var float 
     */
    public $Duration;

    /**
     * @var string 
     */
    public $Md5;

    /**
     * @var string 
     */
    public $Container;

    /**
     * @var array 
     */
    public $VideoStreamSet;

    /**
     * @var array 
     */
    public $AudioStreamSet;

    /**
     * @var string 
     */
    public $DigitalWatermarkType;

    /**
     * @var string 
     */
    public $CopyRightWatermarkText;

    /**
     * @var integer 
     */
    public $BlindWatermarkDefinition;

    /**
     * @var string 
     */
    public $FileId;

    /**
     * @param string $Url 
     * @param integer $Definition 
     * @param integer $Bitrate 
     * @param integer $Height 
     * @param integer $Width 
     * @param integer $Size 
     * @param float $Duration 
     * @param string $Md5 
     * @param string $Container 
     * @param array $VideoStreamSet 
     * @param array $AudioStreamSet 
     * @param string $DigitalWatermarkType 
     * @param string $CopyRightWatermarkText 
     * @param integer $BlindWatermarkDefinition 
     * @param string $FileId 
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
