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
 * Video stream information of VOD files
 *
 * @method integer getBitrate() Obtain Bitrate of the video stream. Unit: bps.
 * @method void setBitrate(integer $Bitrate) Set Bitrate of the video stream. Unit: bps.
 * @method integer getHeight() Obtain Height of the video stream. Unit: px.
 * @method void setHeight(integer $Height) Set Height of the video stream. Unit: px.
 * @method integer getWidth() Obtain Video stream width. Unit: px.
 * @method void setWidth(integer $Width) Set Video stream width. Unit: px.
 * @method string getCodec() Obtain Video stream encoding format, for example, h264.
 * @method void setCodec(string $Codec) Set Video stream encoding format, for example, h264.
 * @method integer getFps() Obtain Frame rate. Measurement unit: hz.
 * @method void setFps(integer $Fps) Set Frame rate. Measurement unit: hz.
 * @method string getColorPrimaries() Obtain Colorspace.
 * @method void setColorPrimaries(string $ColorPrimaries) Set Colorspace.
 * @method string getColorSpace() Obtain Colorspace.
 * @method void setColorSpace(string $ColorSpace) Set Colorspace.
 * @method string getColorTransfer() Obtain Colorspace.
 * @method void setColorTransfer(string $ColorTransfer) Set Colorspace.
 * @method string getHdrType() Obtain HDR type.
 * @method void setHdrType(string $HdrType) Set HDR type.
 * @method string getCodecs() Obtain Video Codecs.
 * @method void setCodecs(string $Codecs) Set Video Codecs.
 * @method integer getFpsNumerator() Obtain Numerator of the frame rate.
 * @method void setFpsNumerator(integer $FpsNumerator) Set Numerator of the frame rate.
 * @method integer getFpsDenominator() Obtain Denominator of the frame rate.
 * @method void setFpsDenominator(integer $FpsDenominator) Set Denominator of the frame rate.
 */
class MediaVideoStreamItem extends AbstractModel
{
    /**
     * @var integer Bitrate of the video stream. Unit: bps.
     */
    public $Bitrate;

    /**
     * @var integer Height of the video stream. Unit: px.
     */
    public $Height;

    /**
     * @var integer Video stream width. Unit: px.
     */
    public $Width;

    /**
     * @var string Video stream encoding format, for example, h264.
     */
    public $Codec;

    /**
     * @var integer Frame rate. Measurement unit: hz.
     */
    public $Fps;

    /**
     * @var string Colorspace.
     */
    public $ColorPrimaries;

    /**
     * @var string Colorspace.
     */
    public $ColorSpace;

    /**
     * @var string Colorspace.
     */
    public $ColorTransfer;

    /**
     * @var string HDR type.
     */
    public $HdrType;

    /**
     * @var string Video Codecs.
     */
    public $Codecs;

    /**
     * @var integer Numerator of the frame rate.
     */
    public $FpsNumerator;

    /**
     * @var integer Denominator of the frame rate.
     */
    public $FpsDenominator;

    /**
     * @param integer $Bitrate Bitrate of the video stream. Unit: bps.
     * @param integer $Height Height of the video stream. Unit: px.
     * @param integer $Width Video stream width. Unit: px.
     * @param string $Codec Video stream encoding format, for example, h264.
     * @param integer $Fps Frame rate. Measurement unit: hz.
     * @param string $ColorPrimaries Colorspace.
     * @param string $ColorSpace Colorspace.
     * @param string $ColorTransfer Colorspace.
     * @param string $HdrType HDR type.
     * @param string $Codecs Video Codecs.
     * @param integer $FpsNumerator Numerator of the frame rate.
     * @param integer $FpsDenominator Denominator of the frame rate.
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
