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
 * @method string getCodec() Obtain 
 * @method void setCodec(string $Codec) Set 
 * @method integer getFps() Obtain 
 * @method void setFps(integer $Fps) Set 
 * @method integer getBitrate() Obtain 
 * @method void setBitrate(integer $Bitrate) Set 
 * @method string getResolutionAdaptive() Obtain 
 * @method void setResolutionAdaptive(string $ResolutionAdaptive) Set 
 * @method integer getWidth() Obtain 
 * @method void setWidth(integer $Width) Set 
 * @method integer getHeight() Obtain 
 * @method void setHeight(integer $Height) Set 
 * @method string getFillType() Obtain 
 * @method void setFillType(string $FillType) Set 
 * @method integer getVcrf() Obtain 
 * @method void setVcrf(integer $Vcrf) Set 
 * @method integer getGop() Obtain 
 * @method void setGop(integer $Gop) Set 
 * @method string getGopUnit() Obtain 
 * @method void setGopUnit(string $GopUnit) Set 
 * @method string getPreserveHDRSwitch() Obtain 
 * @method void setPreserveHDRSwitch(string $PreserveHDRSwitch) Set 
 * @method string getCodecTag() Obtain 
 * @method void setCodecTag(string $CodecTag) Set 
 * @method string getMode() Obtain 
 * @method void setMode(string $Mode) Set 
 * @method integer getBframes() Obtain 
 * @method void setBframes(integer $Bframes) Set 
 * @method integer getHlsTime() Obtain 
 * @method void setHlsTime(integer $HlsTime) Set 
 * @method string getVideoProfile() Obtain 
 * @method void setVideoProfile(string $VideoProfile) Set 
 */
class VideoTemplateInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $Codec;

    /**
     * @var integer 
     */
    public $Fps;

    /**
     * @var integer 
     */
    public $Bitrate;

    /**
     * @var string 
     */
    public $ResolutionAdaptive;

    /**
     * @var integer 
     */
    public $Width;

    /**
     * @var integer 
     */
    public $Height;

    /**
     * @var string 
     */
    public $FillType;

    /**
     * @var integer 
     */
    public $Vcrf;

    /**
     * @var integer 
     */
    public $Gop;

    /**
     * @var string 
     */
    public $GopUnit;

    /**
     * @var string 
     */
    public $PreserveHDRSwitch;

    /**
     * @var string 
     */
    public $CodecTag;

    /**
     * @var string 
     */
    public $Mode;

    /**
     * @var integer 
     */
    public $Bframes;

    /**
     * @var integer 
     */
    public $HlsTime;

    /**
     * @var string 
     */
    public $VideoProfile;

    /**
     * @param string $Codec 
     * @param integer $Fps 
     * @param integer $Bitrate 
     * @param string $ResolutionAdaptive 
     * @param integer $Width 
     * @param integer $Height 
     * @param string $FillType 
     * @param integer $Vcrf 
     * @param integer $Gop 
     * @param string $GopUnit 
     * @param string $PreserveHDRSwitch 
     * @param string $CodecTag 
     * @param string $Mode 
     * @param integer $Bframes 
     * @param integer $HlsTime 
     * @param string $VideoProfile 
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
        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("ResolutionAdaptive",$param) and $param["ResolutionAdaptive"] !== null) {
            $this->ResolutionAdaptive = $param["ResolutionAdaptive"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("FillType",$param) and $param["FillType"] !== null) {
            $this->FillType = $param["FillType"];
        }

        if (array_key_exists("Vcrf",$param) and $param["Vcrf"] !== null) {
            $this->Vcrf = $param["Vcrf"];
        }

        if (array_key_exists("Gop",$param) and $param["Gop"] !== null) {
            $this->Gop = $param["Gop"];
        }

        if (array_key_exists("GopUnit",$param) and $param["GopUnit"] !== null) {
            $this->GopUnit = $param["GopUnit"];
        }

        if (array_key_exists("PreserveHDRSwitch",$param) and $param["PreserveHDRSwitch"] !== null) {
            $this->PreserveHDRSwitch = $param["PreserveHDRSwitch"];
        }

        if (array_key_exists("CodecTag",$param) and $param["CodecTag"] !== null) {
            $this->CodecTag = $param["CodecTag"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Bframes",$param) and $param["Bframes"] !== null) {
            $this->Bframes = $param["Bframes"];
        }

        if (array_key_exists("HlsTime",$param) and $param["HlsTime"] !== null) {
            $this->HlsTime = $param["HlsTime"];
        }

        if (array_key_exists("VideoProfile",$param) and $param["VideoProfile"] !== null) {
            $this->VideoProfile = $param["VideoProfile"];
        }
    }
}
