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
 * Video stream configuration parameters
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
 * @method integer getGop() Obtain 
 * @method void setGop(integer $Gop) Set 
 * @method string getGopUnit() Obtain 
 * @method void setGopUnit(string $GopUnit) Set 
 * @method string getFillType() Obtain 
 * @method void setFillType(string $FillType) Set 
 * @method integer getVcrf() Obtain 
 * @method void setVcrf(integer $Vcrf) Set 
 * @method integer getContentAdaptStream() Obtain 
 * @method void setContentAdaptStream(integer $ContentAdaptStream) Set 
 * @method integer getHlsTime() Obtain 
 * @method void setHlsTime(integer $HlsTime) Set 
 * @method integer getSegmentType() Obtain 
 * @method void setSegmentType(integer $SegmentType) Set 
 * @method integer getFpsDenominator() Obtain 
 * @method void setFpsDenominator(integer $FpsDenominator) Set 
 * @method string getStereo3dType() Obtain 
 * @method void setStereo3dType(string $Stereo3dType) Set 
 * @method string getVideoProfile() Obtain 
 * @method void setVideoProfile(string $VideoProfile) Set 
 * @method string getVideoLevel() Obtain 
 * @method void setVideoLevel(string $VideoLevel) Set 
 * @method integer getBframes() Obtain 
 * @method void setBframes(integer $Bframes) Set 
 * @method string getMode() Obtain 
 * @method void setMode(string $Mode) Set 
 * @method string getSar() Obtain 
 * @method void setSar(string $Sar) Set 
 * @method integer getNoScenecut() Obtain 
 * @method void setNoScenecut(integer $NoScenecut) Set 
 * @method integer getBitDepth() Obtain 
 * @method void setBitDepth(integer $BitDepth) Set 
 * @method integer getRawPts() Obtain 
 * @method void setRawPts(integer $RawPts) Set 
 * @method integer getCompress() Obtain 
 * @method void setCompress(integer $Compress) Set 
 * @method SegmentSpecificInfo getSegmentSpecificInfo() Obtain 
 * @method void setSegmentSpecificInfo(SegmentSpecificInfo $SegmentSpecificInfo) Set 
 * @method integer getScenarioBased() Obtain 
 * @method void setScenarioBased(integer $ScenarioBased) Set 
 * @method string getSceneType() Obtain 
 * @method void setSceneType(string $SceneType) Set 
 * @method string getCompressType() Obtain 
 * @method void setCompressType(string $CompressType) Set 
 */
class VideoTemplateInfoForUpdate extends AbstractModel
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
    public $FillType;

    /**
     * @var integer 
     */
    public $Vcrf;

    /**
     * @var integer 
     */
    public $ContentAdaptStream;

    /**
     * @var integer 
     */
    public $HlsTime;

    /**
     * @var integer 
     */
    public $SegmentType;

    /**
     * @var integer 
     */
    public $FpsDenominator;

    /**
     * @var string 
     */
    public $Stereo3dType;

    /**
     * @var string 
     */
    public $VideoProfile;

    /**
     * @var string 
     */
    public $VideoLevel;

    /**
     * @var integer 
     */
    public $Bframes;

    /**
     * @var string 
     */
    public $Mode;

    /**
     * @var string 
     */
    public $Sar;

    /**
     * @var integer 
     */
    public $NoScenecut;

    /**
     * @var integer 
     */
    public $BitDepth;

    /**
     * @var integer 
     */
    public $RawPts;

    /**
     * @var integer 
     */
    public $Compress;

    /**
     * @var SegmentSpecificInfo 
     */
    public $SegmentSpecificInfo;

    /**
     * @var integer 
     */
    public $ScenarioBased;

    /**
     * @var string 
     */
    public $SceneType;

    /**
     * @var string 
     */
    public $CompressType;

    /**
     * @param string $Codec 
     * @param integer $Fps 
     * @param integer $Bitrate 
     * @param string $ResolutionAdaptive 
     * @param integer $Width 
     * @param integer $Height 
     * @param integer $Gop 
     * @param string $GopUnit 
     * @param string $FillType 
     * @param integer $Vcrf 
     * @param integer $ContentAdaptStream 
     * @param integer $HlsTime 
     * @param integer $SegmentType 
     * @param integer $FpsDenominator 
     * @param string $Stereo3dType 
     * @param string $VideoProfile 
     * @param string $VideoLevel 
     * @param integer $Bframes 
     * @param string $Mode 
     * @param string $Sar 
     * @param integer $NoScenecut 
     * @param integer $BitDepth 
     * @param integer $RawPts 
     * @param integer $Compress 
     * @param SegmentSpecificInfo $SegmentSpecificInfo 
     * @param integer $ScenarioBased 
     * @param string $SceneType 
     * @param string $CompressType 
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

        if (array_key_exists("Gop",$param) and $param["Gop"] !== null) {
            $this->Gop = $param["Gop"];
        }

        if (array_key_exists("GopUnit",$param) and $param["GopUnit"] !== null) {
            $this->GopUnit = $param["GopUnit"];
        }

        if (array_key_exists("FillType",$param) and $param["FillType"] !== null) {
            $this->FillType = $param["FillType"];
        }

        if (array_key_exists("Vcrf",$param) and $param["Vcrf"] !== null) {
            $this->Vcrf = $param["Vcrf"];
        }

        if (array_key_exists("ContentAdaptStream",$param) and $param["ContentAdaptStream"] !== null) {
            $this->ContentAdaptStream = $param["ContentAdaptStream"];
        }

        if (array_key_exists("HlsTime",$param) and $param["HlsTime"] !== null) {
            $this->HlsTime = $param["HlsTime"];
        }

        if (array_key_exists("SegmentType",$param) and $param["SegmentType"] !== null) {
            $this->SegmentType = $param["SegmentType"];
        }

        if (array_key_exists("FpsDenominator",$param) and $param["FpsDenominator"] !== null) {
            $this->FpsDenominator = $param["FpsDenominator"];
        }

        if (array_key_exists("Stereo3dType",$param) and $param["Stereo3dType"] !== null) {
            $this->Stereo3dType = $param["Stereo3dType"];
        }

        if (array_key_exists("VideoProfile",$param) and $param["VideoProfile"] !== null) {
            $this->VideoProfile = $param["VideoProfile"];
        }

        if (array_key_exists("VideoLevel",$param) and $param["VideoLevel"] !== null) {
            $this->VideoLevel = $param["VideoLevel"];
        }

        if (array_key_exists("Bframes",$param) and $param["Bframes"] !== null) {
            $this->Bframes = $param["Bframes"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Sar",$param) and $param["Sar"] !== null) {
            $this->Sar = $param["Sar"];
        }

        if (array_key_exists("NoScenecut",$param) and $param["NoScenecut"] !== null) {
            $this->NoScenecut = $param["NoScenecut"];
        }

        if (array_key_exists("BitDepth",$param) and $param["BitDepth"] !== null) {
            $this->BitDepth = $param["BitDepth"];
        }

        if (array_key_exists("RawPts",$param) and $param["RawPts"] !== null) {
            $this->RawPts = $param["RawPts"];
        }

        if (array_key_exists("Compress",$param) and $param["Compress"] !== null) {
            $this->Compress = $param["Compress"];
        }

        if (array_key_exists("SegmentSpecificInfo",$param) and $param["SegmentSpecificInfo"] !== null) {
            $this->SegmentSpecificInfo = new SegmentSpecificInfo();
            $this->SegmentSpecificInfo->deserialize($param["SegmentSpecificInfo"]);
        }

        if (array_key_exists("ScenarioBased",$param) and $param["ScenarioBased"] !== null) {
            $this->ScenarioBased = $param["ScenarioBased"];
        }

        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
        }

        if (array_key_exists("CompressType",$param) and $param["CompressType"] !== null) {
            $this->CompressType = $param["CompressType"];
        }
    }
}
