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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Audio/Video transcoding template
 *
 * @method string getName() Obtain Name of an audio/video transcoding template, which can contain 1-20 case-sensitive letters and digits
 * @method void setName(string $Name) Set Name of an audio/video transcoding template, which can contain 1-20 case-sensitive letters and digits
 * @method integer getNeedVideo() Obtain Whether video is needed. `0`: not needed; `1`: needed
 * @method void setNeedVideo(integer $NeedVideo) Set Whether video is needed. `0`: not needed; `1`: needed
 * @method string getVcodec() Obtain Video codec. Valid values: `H264`, `H265`. If this parameter is left empty, the original video codec will be used.
 * @method void setVcodec(string $Vcodec) Set Video codec. Valid values: `H264`, `H265`. If this parameter is left empty, the original video codec will be used.
 * @method integer getWidth() Obtain Video width. Value range: (0, 3000]. The value must be an integer multiple of 4. If this parameter is left empty, the original video width will be used.
 * @method void setWidth(integer $Width) Set Video width. Value range: (0, 3000]. The value must be an integer multiple of 4. If this parameter is left empty, the original video width will be used.
 * @method integer getHeight() Obtain Video height. Value range: (0, 3000]. The value must be an integer multiple of 4. If this parameter is left empty, the original video height will be used.
 * @method void setHeight(integer $Height) Set Video height. Value range: (0, 3000]. The value must be an integer multiple of 4. If this parameter is left empty, the original video height will be used.
 * @method integer getFps() Obtain Video frame rate. Value range: [1, 240]. If this parameter is left empty, the original frame rate will be used.
 * @method void setFps(integer $Fps) Set Video frame rate. Value range: [1, 240]. If this parameter is left empty, the original frame rate will be used.
 * @method string getTopSpeed() Obtain Whether to enable top speed codec transcoding. Valid values: `CLOSE` (disable), `OPEN` (enable). Default value: `CLOSE`
 * @method void setTopSpeed(string $TopSpeed) Set Whether to enable top speed codec transcoding. Valid values: `CLOSE` (disable), `OPEN` (enable). Default value: `CLOSE`
 * @method integer getBitrateCompressionRatio() Obtain Compression ratio for top speed codec transcoding. Value range: [0, 50]. The lower the compression ratio, the higher the image quality.
 * @method void setBitrateCompressionRatio(integer $BitrateCompressionRatio) Set Compression ratio for top speed codec transcoding. Value range: [0, 50]. The lower the compression ratio, the higher the image quality.
 * @method integer getNeedAudio() Obtain Whether audio is needed. `0`: not needed; `1`: needed
 * @method void setNeedAudio(integer $NeedAudio) Set Whether audio is needed. `0`: not needed; `1`: needed
 * @method string getAcodec() Obtain Audio codec. Valid value: `AAC` (default)
 * @method void setAcodec(string $Acodec) Set Audio codec. Valid value: `AAC` (default)
 * @method integer getAudioBitrate() Obtain Audio bitrate. If this parameter is left empty, the original bitrate will be used.
Valid values: `6000`, `7000`, `8000`, `10000`, `12000`, `14000`, `16000`, `20000`, `24000`, `28000`, `32000`, `40000`, `48000`, `56000`, `64000`, `80000`, `96000`, `112000`, `128000`, `160000`, `192000`, `224000`, `256000`, `288000`, `320000`, `384000`, `448000`, `512000`, `576000`, `640000`, `768000`, `896000`, `1024000`
 * @method void setAudioBitrate(integer $AudioBitrate) Set Audio bitrate. If this parameter is left empty, the original bitrate will be used.
Valid values: `6000`, `7000`, `8000`, `10000`, `12000`, `14000`, `16000`, `20000`, `24000`, `28000`, `32000`, `40000`, `48000`, `56000`, `64000`, `80000`, `96000`, `112000`, `128000`, `160000`, `192000`, `224000`, `256000`, `288000`, `320000`, `384000`, `448000`, `512000`, `576000`, `640000`, `768000`, `896000`, `1024000`
 * @method integer getVideoBitrate() Obtain Video bitrate. Value range: [50000, 40000000]. The value must be an integer multiple of 1000. If this parameter is left empty, the original bitrate will be used.
 * @method void setVideoBitrate(integer $VideoBitrate) Set Video bitrate. Value range: [50000, 40000000]. The value must be an integer multiple of 1000. If this parameter is left empty, the original bitrate will be used.
 * @method string getRateControlMode() Obtain Bitrate control mode. Valid values: `CBR`, `ABR` (default), `VBR`.
 * @method void setRateControlMode(string $RateControlMode) Set Bitrate control mode. Valid values: `CBR`, `ABR` (default), `VBR`.
 * @method string getWatermarkId() Obtain Watermark ID
 * @method void setWatermarkId(string $WatermarkId) Set Watermark ID
 * @method integer getSmartSubtitles() Obtain Whether to convert audio to text. `0` (default): No; `1`: Yes.
 * @method void setSmartSubtitles(integer $SmartSubtitles) Set Whether to convert audio to text. `0` (default): No; `1`: Yes.
 * @method string getSubtitleConfiguration() Obtain The subtitle settings. Currently, the following subtitles are supported:
`eng2eng`: English speech to English text.
`eng2chs`: English speech to Chinese text. 
`eng2chseng`: English speech to English and Chinese text. 
`chs2chs`: Chinese speech to Chinese text.   
`chs2eng`: Chinese speech to English text. 
`chs2chseng`: Chinese speech to Chinese and English text.
 * @method void setSubtitleConfiguration(string $SubtitleConfiguration) Set The subtitle settings. Currently, the following subtitles are supported:
`eng2eng`: English speech to English text.
`eng2chs`: English speech to Chinese text. 
`eng2chseng`: English speech to English and Chinese text. 
`chs2chs`: Chinese speech to Chinese text.   
`chs2eng`: Chinese speech to English text. 
`chs2chseng`: Chinese speech to Chinese and English text.
 * @method integer getFaceBlurringEnabled() Obtain Whether to enable the face blur function, 1 is on, 0 is off, and the default is 0.
 * @method void setFaceBlurringEnabled(integer $FaceBlurringEnabled) Set Whether to enable the face blur function, 1 is on, 0 is off, and the default is 0.
 * @method string getAudioSelectorName() Obtain Only AttachedInputs.AudioSelectors.Name can be selected. The following types need to be filled in: 'RTP_PUSH', 'SRT_PUSH', 'UDP_PUSH', 'RTP-FEC_PUSH'.
 * @method void setAudioSelectorName(string $AudioSelectorName) Set Only AttachedInputs.AudioSelectors.Name can be selected. The following types need to be filled in: 'RTP_PUSH', 'SRT_PUSH', 'UDP_PUSH', 'RTP-FEC_PUSH'.
 * @method AudioNormalizationSettings getAudioNormalization() Obtain Audio transcoding special configuration information.
 * @method void setAudioNormalization(AudioNormalizationSettings $AudioNormalization) Set Audio transcoding special configuration information.
 * @method integer getAudioSampleRate() Obtain Audio sampling rate, unit HZ.
 * @method void setAudioSampleRate(integer $AudioSampleRate) Set Audio sampling rate, unit HZ.
 * @method string getFrameRateType() Obtain This field indicates how to specify the output video frame rate. If FOLLOW_SOURCE is selected, the output video frame rate will be set equal to the input video frame rate of the first input. If SPECIFIED_FRACTION is selected, the output video frame rate is determined by the fraction (frame rate numerator and frame rate denominator). If SPECIFIED_HZ is selected, the frame rate of the output video is determined by the HZ you enter.
 * @method void setFrameRateType(string $FrameRateType) Set This field indicates how to specify the output video frame rate. If FOLLOW_SOURCE is selected, the output video frame rate will be set equal to the input video frame rate of the first input. If SPECIFIED_FRACTION is selected, the output video frame rate is determined by the fraction (frame rate numerator and frame rate denominator). If SPECIFIED_HZ is selected, the frame rate of the output video is determined by the HZ you enter.
 * @method integer getFrameRateNumerator() Obtain Valid when the FrameRateType type you select is SPECIFIED_FRACTION, the output frame rate numerator setting.
 * @method void setFrameRateNumerator(integer $FrameRateNumerator) Set Valid when the FrameRateType type you select is SPECIFIED_FRACTION, the output frame rate numerator setting.
 * @method integer getFrameRateDenominator() Obtain Valid when the FrameRateType type you select is SPECIFIED_FRACTION, the output frame rate denominator setting.
 * @method void setFrameRateDenominator(integer $FrameRateDenominator) Set Valid when the FrameRateType type you select is SPECIFIED_FRACTION, the output frame rate denominator setting.
 * @method integer getBFramesNum() Obtain The number of B frames can be selected from 1 to 3.
 * @method void setBFramesNum(integer $BFramesNum) Set The number of B frames can be selected from 1 to 3.
 * @method integer getRefFramesNum() Obtain The number of reference frames can be selected from 1 to 16.
 * @method void setRefFramesNum(integer $RefFramesNum) Set The number of reference frames can be selected from 1 to 16.
 * @method AdditionalRateSetting getAdditionalRateSettings() Obtain Additional video bitrate configuration.
 * @method void setAdditionalRateSettings(AdditionalRateSetting $AdditionalRateSettings) Set Additional video bitrate configuration.
 * @method VideoCodecDetail getVideoCodecDetails() Obtain Video encoding configuration.
 * @method void setVideoCodecDetails(VideoCodecDetail $VideoCodecDetails) Set Video encoding configuration.
 * @method AudioCodecDetail getAudioCodecDetails() Obtain Audio encoding configuration.
 * @method void setAudioCodecDetails(AudioCodecDetail $AudioCodecDetails) Set Audio encoding configuration.
 * @method integer getMultiAudioTrackEnabled() Obtain Whether to enable multiple audio tracks 0: Not required 1: Required Default value 0.
 * @method void setMultiAudioTrackEnabled(integer $MultiAudioTrackEnabled) Set Whether to enable multiple audio tracks 0: Not required 1: Required Default value 0.
 * @method array getAudioTracks() Obtain Quantity limit 0-20 Valid when MultiAudioTrackEnabled is turned on.
 * @method void setAudioTracks(array $AudioTracks) Set Quantity limit 0-20 Valid when MultiAudioTrackEnabled is turned on.
 * @method integer getVideoEnhanceEnabled() Obtain 
 * @method void setVideoEnhanceEnabled(integer $VideoEnhanceEnabled) Set 
 * @method array getVideoEnhanceSettings() Obtain 
 * @method void setVideoEnhanceSettings(array $VideoEnhanceSettings) Set 
 */
class AVTemplate extends AbstractModel
{
    /**
     * @var string Name of an audio/video transcoding template, which can contain 1-20 case-sensitive letters and digits
     */
    public $Name;

    /**
     * @var integer Whether video is needed. `0`: not needed; `1`: needed
     */
    public $NeedVideo;

    /**
     * @var string Video codec. Valid values: `H264`, `H265`. If this parameter is left empty, the original video codec will be used.
     */
    public $Vcodec;

    /**
     * @var integer Video width. Value range: (0, 3000]. The value must be an integer multiple of 4. If this parameter is left empty, the original video width will be used.
     */
    public $Width;

    /**
     * @var integer Video height. Value range: (0, 3000]. The value must be an integer multiple of 4. If this parameter is left empty, the original video height will be used.
     */
    public $Height;

    /**
     * @var integer Video frame rate. Value range: [1, 240]. If this parameter is left empty, the original frame rate will be used.
     */
    public $Fps;

    /**
     * @var string Whether to enable top speed codec transcoding. Valid values: `CLOSE` (disable), `OPEN` (enable). Default value: `CLOSE`
     */
    public $TopSpeed;

    /**
     * @var integer Compression ratio for top speed codec transcoding. Value range: [0, 50]. The lower the compression ratio, the higher the image quality.
     */
    public $BitrateCompressionRatio;

    /**
     * @var integer Whether audio is needed. `0`: not needed; `1`: needed
     */
    public $NeedAudio;

    /**
     * @var string Audio codec. Valid value: `AAC` (default)
     */
    public $Acodec;

    /**
     * @var integer Audio bitrate. If this parameter is left empty, the original bitrate will be used.
Valid values: `6000`, `7000`, `8000`, `10000`, `12000`, `14000`, `16000`, `20000`, `24000`, `28000`, `32000`, `40000`, `48000`, `56000`, `64000`, `80000`, `96000`, `112000`, `128000`, `160000`, `192000`, `224000`, `256000`, `288000`, `320000`, `384000`, `448000`, `512000`, `576000`, `640000`, `768000`, `896000`, `1024000`
     */
    public $AudioBitrate;

    /**
     * @var integer Video bitrate. Value range: [50000, 40000000]. The value must be an integer multiple of 1000. If this parameter is left empty, the original bitrate will be used.
     */
    public $VideoBitrate;

    /**
     * @var string Bitrate control mode. Valid values: `CBR`, `ABR` (default), `VBR`.
     */
    public $RateControlMode;

    /**
     * @var string Watermark ID
     */
    public $WatermarkId;

    /**
     * @var integer Whether to convert audio to text. `0` (default): No; `1`: Yes.
     */
    public $SmartSubtitles;

    /**
     * @var string The subtitle settings. Currently, the following subtitles are supported:
`eng2eng`: English speech to English text.
`eng2chs`: English speech to Chinese text. 
`eng2chseng`: English speech to English and Chinese text. 
`chs2chs`: Chinese speech to Chinese text.   
`chs2eng`: Chinese speech to English text. 
`chs2chseng`: Chinese speech to Chinese and English text.
     */
    public $SubtitleConfiguration;

    /**
     * @var integer Whether to enable the face blur function, 1 is on, 0 is off, and the default is 0.
     */
    public $FaceBlurringEnabled;

    /**
     * @var string Only AttachedInputs.AudioSelectors.Name can be selected. The following types need to be filled in: 'RTP_PUSH', 'SRT_PUSH', 'UDP_PUSH', 'RTP-FEC_PUSH'.
     */
    public $AudioSelectorName;

    /**
     * @var AudioNormalizationSettings Audio transcoding special configuration information.
     */
    public $AudioNormalization;

    /**
     * @var integer Audio sampling rate, unit HZ.
     */
    public $AudioSampleRate;

    /**
     * @var string This field indicates how to specify the output video frame rate. If FOLLOW_SOURCE is selected, the output video frame rate will be set equal to the input video frame rate of the first input. If SPECIFIED_FRACTION is selected, the output video frame rate is determined by the fraction (frame rate numerator and frame rate denominator). If SPECIFIED_HZ is selected, the frame rate of the output video is determined by the HZ you enter.
     */
    public $FrameRateType;

    /**
     * @var integer Valid when the FrameRateType type you select is SPECIFIED_FRACTION, the output frame rate numerator setting.
     */
    public $FrameRateNumerator;

    /**
     * @var integer Valid when the FrameRateType type you select is SPECIFIED_FRACTION, the output frame rate denominator setting.
     */
    public $FrameRateDenominator;

    /**
     * @var integer The number of B frames can be selected from 1 to 3.
     */
    public $BFramesNum;

    /**
     * @var integer The number of reference frames can be selected from 1 to 16.
     */
    public $RefFramesNum;

    /**
     * @var AdditionalRateSetting Additional video bitrate configuration.
     */
    public $AdditionalRateSettings;

    /**
     * @var VideoCodecDetail Video encoding configuration.
     */
    public $VideoCodecDetails;

    /**
     * @var AudioCodecDetail Audio encoding configuration.
     */
    public $AudioCodecDetails;

    /**
     * @var integer Whether to enable multiple audio tracks 0: Not required 1: Required Default value 0.
     */
    public $MultiAudioTrackEnabled;

    /**
     * @var array Quantity limit 0-20 Valid when MultiAudioTrackEnabled is turned on.
     */
    public $AudioTracks;

    /**
     * @var integer 
     */
    public $VideoEnhanceEnabled;

    /**
     * @var array 
     */
    public $VideoEnhanceSettings;

    /**
     * @param string $Name Name of an audio/video transcoding template, which can contain 1-20 case-sensitive letters and digits
     * @param integer $NeedVideo Whether video is needed. `0`: not needed; `1`: needed
     * @param string $Vcodec Video codec. Valid values: `H264`, `H265`. If this parameter is left empty, the original video codec will be used.
     * @param integer $Width Video width. Value range: (0, 3000]. The value must be an integer multiple of 4. If this parameter is left empty, the original video width will be used.
     * @param integer $Height Video height. Value range: (0, 3000]. The value must be an integer multiple of 4. If this parameter is left empty, the original video height will be used.
     * @param integer $Fps Video frame rate. Value range: [1, 240]. If this parameter is left empty, the original frame rate will be used.
     * @param string $TopSpeed Whether to enable top speed codec transcoding. Valid values: `CLOSE` (disable), `OPEN` (enable). Default value: `CLOSE`
     * @param integer $BitrateCompressionRatio Compression ratio for top speed codec transcoding. Value range: [0, 50]. The lower the compression ratio, the higher the image quality.
     * @param integer $NeedAudio Whether audio is needed. `0`: not needed; `1`: needed
     * @param string $Acodec Audio codec. Valid value: `AAC` (default)
     * @param integer $AudioBitrate Audio bitrate. If this parameter is left empty, the original bitrate will be used.
Valid values: `6000`, `7000`, `8000`, `10000`, `12000`, `14000`, `16000`, `20000`, `24000`, `28000`, `32000`, `40000`, `48000`, `56000`, `64000`, `80000`, `96000`, `112000`, `128000`, `160000`, `192000`, `224000`, `256000`, `288000`, `320000`, `384000`, `448000`, `512000`, `576000`, `640000`, `768000`, `896000`, `1024000`
     * @param integer $VideoBitrate Video bitrate. Value range: [50000, 40000000]. The value must be an integer multiple of 1000. If this parameter is left empty, the original bitrate will be used.
     * @param string $RateControlMode Bitrate control mode. Valid values: `CBR`, `ABR` (default), `VBR`.
     * @param string $WatermarkId Watermark ID
     * @param integer $SmartSubtitles Whether to convert audio to text. `0` (default): No; `1`: Yes.
     * @param string $SubtitleConfiguration The subtitle settings. Currently, the following subtitles are supported:
`eng2eng`: English speech to English text.
`eng2chs`: English speech to Chinese text. 
`eng2chseng`: English speech to English and Chinese text. 
`chs2chs`: Chinese speech to Chinese text.   
`chs2eng`: Chinese speech to English text. 
`chs2chseng`: Chinese speech to Chinese and English text.
     * @param integer $FaceBlurringEnabled Whether to enable the face blur function, 1 is on, 0 is off, and the default is 0.
     * @param string $AudioSelectorName Only AttachedInputs.AudioSelectors.Name can be selected. The following types need to be filled in: 'RTP_PUSH', 'SRT_PUSH', 'UDP_PUSH', 'RTP-FEC_PUSH'.
     * @param AudioNormalizationSettings $AudioNormalization Audio transcoding special configuration information.
     * @param integer $AudioSampleRate Audio sampling rate, unit HZ.
     * @param string $FrameRateType This field indicates how to specify the output video frame rate. If FOLLOW_SOURCE is selected, the output video frame rate will be set equal to the input video frame rate of the first input. If SPECIFIED_FRACTION is selected, the output video frame rate is determined by the fraction (frame rate numerator and frame rate denominator). If SPECIFIED_HZ is selected, the frame rate of the output video is determined by the HZ you enter.
     * @param integer $FrameRateNumerator Valid when the FrameRateType type you select is SPECIFIED_FRACTION, the output frame rate numerator setting.
     * @param integer $FrameRateDenominator Valid when the FrameRateType type you select is SPECIFIED_FRACTION, the output frame rate denominator setting.
     * @param integer $BFramesNum The number of B frames can be selected from 1 to 3.
     * @param integer $RefFramesNum The number of reference frames can be selected from 1 to 16.
     * @param AdditionalRateSetting $AdditionalRateSettings Additional video bitrate configuration.
     * @param VideoCodecDetail $VideoCodecDetails Video encoding configuration.
     * @param AudioCodecDetail $AudioCodecDetails Audio encoding configuration.
     * @param integer $MultiAudioTrackEnabled Whether to enable multiple audio tracks 0: Not required 1: Required Default value 0.
     * @param array $AudioTracks Quantity limit 0-20 Valid when MultiAudioTrackEnabled is turned on.
     * @param integer $VideoEnhanceEnabled 
     * @param array $VideoEnhanceSettings 
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NeedVideo",$param) and $param["NeedVideo"] !== null) {
            $this->NeedVideo = $param["NeedVideo"];
        }

        if (array_key_exists("Vcodec",$param) and $param["Vcodec"] !== null) {
            $this->Vcodec = $param["Vcodec"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }

        if (array_key_exists("TopSpeed",$param) and $param["TopSpeed"] !== null) {
            $this->TopSpeed = $param["TopSpeed"];
        }

        if (array_key_exists("BitrateCompressionRatio",$param) and $param["BitrateCompressionRatio"] !== null) {
            $this->BitrateCompressionRatio = $param["BitrateCompressionRatio"];
        }

        if (array_key_exists("NeedAudio",$param) and $param["NeedAudio"] !== null) {
            $this->NeedAudio = $param["NeedAudio"];
        }

        if (array_key_exists("Acodec",$param) and $param["Acodec"] !== null) {
            $this->Acodec = $param["Acodec"];
        }

        if (array_key_exists("AudioBitrate",$param) and $param["AudioBitrate"] !== null) {
            $this->AudioBitrate = $param["AudioBitrate"];
        }

        if (array_key_exists("VideoBitrate",$param) and $param["VideoBitrate"] !== null) {
            $this->VideoBitrate = $param["VideoBitrate"];
        }

        if (array_key_exists("RateControlMode",$param) and $param["RateControlMode"] !== null) {
            $this->RateControlMode = $param["RateControlMode"];
        }

        if (array_key_exists("WatermarkId",$param) and $param["WatermarkId"] !== null) {
            $this->WatermarkId = $param["WatermarkId"];
        }

        if (array_key_exists("SmartSubtitles",$param) and $param["SmartSubtitles"] !== null) {
            $this->SmartSubtitles = $param["SmartSubtitles"];
        }

        if (array_key_exists("SubtitleConfiguration",$param) and $param["SubtitleConfiguration"] !== null) {
            $this->SubtitleConfiguration = $param["SubtitleConfiguration"];
        }

        if (array_key_exists("FaceBlurringEnabled",$param) and $param["FaceBlurringEnabled"] !== null) {
            $this->FaceBlurringEnabled = $param["FaceBlurringEnabled"];
        }

        if (array_key_exists("AudioSelectorName",$param) and $param["AudioSelectorName"] !== null) {
            $this->AudioSelectorName = $param["AudioSelectorName"];
        }

        if (array_key_exists("AudioNormalization",$param) and $param["AudioNormalization"] !== null) {
            $this->AudioNormalization = new AudioNormalizationSettings();
            $this->AudioNormalization->deserialize($param["AudioNormalization"]);
        }

        if (array_key_exists("AudioSampleRate",$param) and $param["AudioSampleRate"] !== null) {
            $this->AudioSampleRate = $param["AudioSampleRate"];
        }

        if (array_key_exists("FrameRateType",$param) and $param["FrameRateType"] !== null) {
            $this->FrameRateType = $param["FrameRateType"];
        }

        if (array_key_exists("FrameRateNumerator",$param) and $param["FrameRateNumerator"] !== null) {
            $this->FrameRateNumerator = $param["FrameRateNumerator"];
        }

        if (array_key_exists("FrameRateDenominator",$param) and $param["FrameRateDenominator"] !== null) {
            $this->FrameRateDenominator = $param["FrameRateDenominator"];
        }

        if (array_key_exists("BFramesNum",$param) and $param["BFramesNum"] !== null) {
            $this->BFramesNum = $param["BFramesNum"];
        }

        if (array_key_exists("RefFramesNum",$param) and $param["RefFramesNum"] !== null) {
            $this->RefFramesNum = $param["RefFramesNum"];
        }

        if (array_key_exists("AdditionalRateSettings",$param) and $param["AdditionalRateSettings"] !== null) {
            $this->AdditionalRateSettings = new AdditionalRateSetting();
            $this->AdditionalRateSettings->deserialize($param["AdditionalRateSettings"]);
        }

        if (array_key_exists("VideoCodecDetails",$param) and $param["VideoCodecDetails"] !== null) {
            $this->VideoCodecDetails = new VideoCodecDetail();
            $this->VideoCodecDetails->deserialize($param["VideoCodecDetails"]);
        }

        if (array_key_exists("AudioCodecDetails",$param) and $param["AudioCodecDetails"] !== null) {
            $this->AudioCodecDetails = new AudioCodecDetail();
            $this->AudioCodecDetails->deserialize($param["AudioCodecDetails"]);
        }

        if (array_key_exists("MultiAudioTrackEnabled",$param) and $param["MultiAudioTrackEnabled"] !== null) {
            $this->MultiAudioTrackEnabled = $param["MultiAudioTrackEnabled"];
        }

        if (array_key_exists("AudioTracks",$param) and $param["AudioTracks"] !== null) {
            $this->AudioTracks = [];
            foreach ($param["AudioTracks"] as $key => $value){
                $obj = new AudioTrackInfo();
                $obj->deserialize($value);
                array_push($this->AudioTracks, $obj);
            }
        }

        if (array_key_exists("VideoEnhanceEnabled",$param) and $param["VideoEnhanceEnabled"] !== null) {
            $this->VideoEnhanceEnabled = $param["VideoEnhanceEnabled"];
        }

        if (array_key_exists("VideoEnhanceSettings",$param) and $param["VideoEnhanceSettings"] !== null) {
            $this->VideoEnhanceSettings = [];
            foreach ($param["VideoEnhanceSettings"] as $key => $value){
                $obj = new VideoEnhanceSetting();
                $obj->deserialize($value);
                array_push($this->VideoEnhanceSettings, $obj);
            }
        }
    }
}
