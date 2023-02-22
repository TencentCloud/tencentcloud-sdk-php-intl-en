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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * General stream mix output parameter.
 *
 * @method string getOutputStreamName() Obtain Output stream name.
 * @method void setOutputStreamName(string $OutputStreamName) Set Output stream name.
 * @method integer getOutputStreamType() Obtain Output stream type. Valid values: [0,1].
If this parameter is left empty, 0 will be used by default.
If the output stream is a stream in the input stream list, enter 0.
If you want the stream mix result to be a new stream, enter 1.
If this value is 1, `output_stream_id` cannot appear in `input_stram_list`, and there cannot be a stream with the same ID on the LVB backend.
 * @method void setOutputStreamType(integer $OutputStreamType) Set Output stream type. Valid values: [0,1].
If this parameter is left empty, 0 will be used by default.
If the output stream is a stream in the input stream list, enter 0.
If you want the stream mix result to be a new stream, enter 1.
If this value is 1, `output_stream_id` cannot appear in `input_stram_list`, and there cannot be a stream with the same ID on the LVB backend.
 * @method integer getOutputStreamBitRate() Obtain The output bitrate. Value range: 1-10000.
If you do not specify this, the system will select a bitrate automatically.
 * @method void setOutputStreamBitRate(integer $OutputStreamBitRate) Set The output bitrate. Value range: 1-10000.
If you do not specify this, the system will select a bitrate automatically.
 * @method integer getOutputStreamGop() Obtain Output stream GOP size. Value range: [1,10].
If this parameter is left empty, the system will automatically determine.
 * @method void setOutputStreamGop(integer $OutputStreamGop) Set Output stream GOP size. Value range: [1,10].
If this parameter is left empty, the system will automatically determine.
 * @method integer getOutputStreamFrameRate() Obtain Output stream frame rate. Value range: [1,60].
If this parameter is left empty, the system will automatically determine.
 * @method void setOutputStreamFrameRate(integer $OutputStreamFrameRate) Set Output stream frame rate. Value range: [1,60].
If this parameter is left empty, the system will automatically determine.
 * @method integer getOutputAudioBitRate() Obtain Output stream audio bitrate. Value range: [1,500]
If this parameter is left empty, the system will automatically determine.
 * @method void setOutputAudioBitRate(integer $OutputAudioBitRate) Set Output stream audio bitrate. Value range: [1,500]
If this parameter is left empty, the system will automatically determine.
 * @method integer getOutputAudioSampleRate() Obtain Output stream audio sample rate. Valid values: [96000, 88200, 64000, 48000, 44100, 32000,24000, 22050, 16000, 12000, 11025, 8000].
If this parameter is left empty, the system will automatically determine.
 * @method void setOutputAudioSampleRate(integer $OutputAudioSampleRate) Set Output stream audio sample rate. Valid values: [96000, 88200, 64000, 48000, 44100, 32000,24000, 22050, 16000, 12000, 11025, 8000].
If this parameter is left empty, the system will automatically determine.
 * @method integer getOutputAudioChannels() Obtain Output stream audio sound channel. Valid values: [1,2].
If this parameter is left empty, the system will automatically determine.
 * @method void setOutputAudioChannels(integer $OutputAudioChannels) Set Output stream audio sound channel. Valid values: [1,2].
If this parameter is left empty, the system will automatically determine.
 * @method string getMixSei() Obtain SEI information in output stream. If there are no special needs, leave it empty.
 * @method void setMixSei(string $MixSei) Set SEI information in output stream. If there are no special needs, leave it empty.
 */
class CommonMixOutputParams extends AbstractModel
{
    /**
     * @var string Output stream name.
     */
    public $OutputStreamName;

    /**
     * @var integer Output stream type. Valid values: [0,1].
If this parameter is left empty, 0 will be used by default.
If the output stream is a stream in the input stream list, enter 0.
If you want the stream mix result to be a new stream, enter 1.
If this value is 1, `output_stream_id` cannot appear in `input_stram_list`, and there cannot be a stream with the same ID on the LVB backend.
     */
    public $OutputStreamType;

    /**
     * @var integer The output bitrate. Value range: 1-10000.
If you do not specify this, the system will select a bitrate automatically.
     */
    public $OutputStreamBitRate;

    /**
     * @var integer Output stream GOP size. Value range: [1,10].
If this parameter is left empty, the system will automatically determine.
     */
    public $OutputStreamGop;

    /**
     * @var integer Output stream frame rate. Value range: [1,60].
If this parameter is left empty, the system will automatically determine.
     */
    public $OutputStreamFrameRate;

    /**
     * @var integer Output stream audio bitrate. Value range: [1,500]
If this parameter is left empty, the system will automatically determine.
     */
    public $OutputAudioBitRate;

    /**
     * @var integer Output stream audio sample rate. Valid values: [96000, 88200, 64000, 48000, 44100, 32000,24000, 22050, 16000, 12000, 11025, 8000].
If this parameter is left empty, the system will automatically determine.
     */
    public $OutputAudioSampleRate;

    /**
     * @var integer Output stream audio sound channel. Valid values: [1,2].
If this parameter is left empty, the system will automatically determine.
     */
    public $OutputAudioChannels;

    /**
     * @var string SEI information in output stream. If there are no special needs, leave it empty.
     */
    public $MixSei;

    /**
     * @param string $OutputStreamName Output stream name.
     * @param integer $OutputStreamType Output stream type. Valid values: [0,1].
If this parameter is left empty, 0 will be used by default.
If the output stream is a stream in the input stream list, enter 0.
If you want the stream mix result to be a new stream, enter 1.
If this value is 1, `output_stream_id` cannot appear in `input_stram_list`, and there cannot be a stream with the same ID on the LVB backend.
     * @param integer $OutputStreamBitRate The output bitrate. Value range: 1-10000.
If you do not specify this, the system will select a bitrate automatically.
     * @param integer $OutputStreamGop Output stream GOP size. Value range: [1,10].
If this parameter is left empty, the system will automatically determine.
     * @param integer $OutputStreamFrameRate Output stream frame rate. Value range: [1,60].
If this parameter is left empty, the system will automatically determine.
     * @param integer $OutputAudioBitRate Output stream audio bitrate. Value range: [1,500]
If this parameter is left empty, the system will automatically determine.
     * @param integer $OutputAudioSampleRate Output stream audio sample rate. Valid values: [96000, 88200, 64000, 48000, 44100, 32000,24000, 22050, 16000, 12000, 11025, 8000].
If this parameter is left empty, the system will automatically determine.
     * @param integer $OutputAudioChannels Output stream audio sound channel. Valid values: [1,2].
If this parameter is left empty, the system will automatically determine.
     * @param string $MixSei SEI information in output stream. If there are no special needs, leave it empty.
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
        if (array_key_exists("OutputStreamName",$param) and $param["OutputStreamName"] !== null) {
            $this->OutputStreamName = $param["OutputStreamName"];
        }

        if (array_key_exists("OutputStreamType",$param) and $param["OutputStreamType"] !== null) {
            $this->OutputStreamType = $param["OutputStreamType"];
        }

        if (array_key_exists("OutputStreamBitRate",$param) and $param["OutputStreamBitRate"] !== null) {
            $this->OutputStreamBitRate = $param["OutputStreamBitRate"];
        }

        if (array_key_exists("OutputStreamGop",$param) and $param["OutputStreamGop"] !== null) {
            $this->OutputStreamGop = $param["OutputStreamGop"];
        }

        if (array_key_exists("OutputStreamFrameRate",$param) and $param["OutputStreamFrameRate"] !== null) {
            $this->OutputStreamFrameRate = $param["OutputStreamFrameRate"];
        }

        if (array_key_exists("OutputAudioBitRate",$param) and $param["OutputAudioBitRate"] !== null) {
            $this->OutputAudioBitRate = $param["OutputAudioBitRate"];
        }

        if (array_key_exists("OutputAudioSampleRate",$param) and $param["OutputAudioSampleRate"] !== null) {
            $this->OutputAudioSampleRate = $param["OutputAudioSampleRate"];
        }

        if (array_key_exists("OutputAudioChannels",$param) and $param["OutputAudioChannels"] !== null) {
            $this->OutputAudioChannels = $param["OutputAudioChannels"];
        }

        if (array_key_exists("MixSei",$param) and $param["MixSei"] !== null) {
            $this->MixSei = $param["MixSei"];
        }
    }
}
