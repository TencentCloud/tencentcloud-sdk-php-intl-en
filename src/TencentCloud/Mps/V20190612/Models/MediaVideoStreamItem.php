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
 * Information of the video stream in a VOD file
 *
 * @method integer getBitrate() Obtain Bitrate of a video stream in bps.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBitrate(integer $Bitrate) Set Bitrate of a video stream in bps.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getHeight() Obtain Height of a video stream in px.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHeight(integer $Height) Set Height of a video stream in px.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getWidth() Obtain Width of a video stream in px.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWidth(integer $Width) Set Width of a video stream in px.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCodec() Obtain Video stream codec, such as h264.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCodec(string $Codec) Set Video stream codec, such as h264.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFps() Obtain Frame rate in Hz.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFps(integer $Fps) Set Frame rate in Hz.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getColorPrimaries() Obtain Color primaries
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setColorPrimaries(string $ColorPrimaries) Set Color primaries
Note: this field may return `null`, indicating that no valid value was found.
 * @method string getColorSpace() Obtain Color space
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setColorSpace(string $ColorSpace) Set Color space
Note: this field may return `null`, indicating that no valid value was found.
 * @method string getColorTransfer() Obtain Color transfer
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setColorTransfer(string $ColorTransfer) Set Color transfer
Note: this field may return `null`, indicating that no valid value was found.
 * @method string getHdrType() Obtain HDR type
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setHdrType(string $HdrType) Set HDR type
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getCodecs() Obtain 
 * @method void setCodecs(string $Codecs) Set 
 * @method integer getFpsNumerator() Obtain Numerator of the frame rate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFpsNumerator(integer $FpsNumerator) Set Numerator of the frame rate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFpsDenominator() Obtain Denominator of the frame rate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFpsDenominator(integer $FpsDenominator) Set Denominator of the frame rate.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class MediaVideoStreamItem extends AbstractModel
{
    /**
     * @var integer Bitrate of a video stream in bps.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Bitrate;

    /**
     * @var integer Height of a video stream in px.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Height;

    /**
     * @var integer Width of a video stream in px.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Width;

    /**
     * @var string Video stream codec, such as h264.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Codec;

    /**
     * @var integer Frame rate in Hz.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Fps;

    /**
     * @var string Color primaries
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $ColorPrimaries;

    /**
     * @var string Color space
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $ColorSpace;

    /**
     * @var string Color transfer
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $ColorTransfer;

    /**
     * @var string HDR type
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $HdrType;

    /**
     * @var string 
     */
    public $Codecs;

    /**
     * @var integer Numerator of the frame rate.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FpsNumerator;

    /**
     * @var integer Denominator of the frame rate.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FpsDenominator;

    /**
     * @param integer $Bitrate Bitrate of a video stream in bps.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Height Height of a video stream in px.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Width Width of a video stream in px.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Codec Video stream codec, such as h264.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Fps Frame rate in Hz.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ColorPrimaries Color primaries
Note: this field may return `null`, indicating that no valid value was found.
     * @param string $ColorSpace Color space
Note: this field may return `null`, indicating that no valid value was found.
     * @param string $ColorTransfer Color transfer
Note: this field may return `null`, indicating that no valid value was found.
     * @param string $HdrType HDR type
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $Codecs 
     * @param integer $FpsNumerator Numerator of the frame rate.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FpsDenominator Denominator of the frame rate.
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
        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }

        if (array_key_exists("ColorPrimaries",$param) and $param["ColorPrimaries"] !== null) {
            $this->ColorPrimaries = $param["ColorPrimaries"];
        }

        if (array_key_exists("ColorSpace",$param) and $param["ColorSpace"] !== null) {
            $this->ColorSpace = $param["ColorSpace"];
        }

        if (array_key_exists("ColorTransfer",$param) and $param["ColorTransfer"] !== null) {
            $this->ColorTransfer = $param["ColorTransfer"];
        }

        if (array_key_exists("HdrType",$param) and $param["HdrType"] !== null) {
            $this->HdrType = $param["HdrType"];
        }

        if (array_key_exists("Codecs",$param) and $param["Codecs"] !== null) {
            $this->Codecs = $param["Codecs"];
        }

        if (array_key_exists("FpsNumerator",$param) and $param["FpsNumerator"] !== null) {
            $this->FpsNumerator = $param["FpsNumerator"];
        }

        if (array_key_exists("FpsDenominator",$param) and $param["FpsDenominator"] !== null) {
            $this->FpsDenominator = $param["FpsDenominator"];
        }
    }
}
