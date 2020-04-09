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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of a transcoding to adaptive bitrate streaming audio track template.
 *
 * @method integer getDefinition() Obtain Unique ID of a template.
 * @method void setDefinition(integer $Definition) Set Unique ID of a template.
 * @method string getCodec() Obtain Audio track encoder.
When `Container` is `mp3`, the valid value is:
<li>libmp3lame.</li>
When `Container` is `ogg` or `flac`, the valid value is:
<li>flac.</li>
When `Container` is `m4a`, the valid values include:
<li>libfdk_aac;</li>
<li>libmp3lame;</li>
<li>ac3.</li>
When the video track's `Container` is `mp4` or `flv`, the valid values include:
<li>libfdk_aac: more suitable for mp4;</li>
<li>libmp3lame: more suitable for flv;</li>
<li>mp2.</li>
When the video track's `Container` is `hls`, the valid values include:
<li>libfdk_aac;</li>
<li>libmp3lame.</li>
 * @method void setCodec(string $Codec) Set Audio track encoder.
When `Container` is `mp3`, the valid value is:
<li>libmp3lame.</li>
When `Container` is `ogg` or `flac`, the valid value is:
<li>flac.</li>
When `Container` is `m4a`, the valid values include:
<li>libfdk_aac;</li>
<li>libmp3lame;</li>
<li>ac3.</li>
When the video track's `Container` is `mp4` or `flv`, the valid values include:
<li>libfdk_aac: more suitable for mp4;</li>
<li>libmp3lame: more suitable for flv;</li>
<li>mp2.</li>
When the video track's `Container` is `hls`, the valid values include:
<li>libfdk_aac;</li>
<li>libmp3lame.</li>
 * @method integer getBitrate() Obtain Audio stream bitrate in Kbps. Value range: 0 and [26, 256].
If the value is 0, the bitrate of the audio stream will be the same as that of the original audio.
 * @method void setBitrate(integer $Bitrate) Set Audio stream bitrate in Kbps. Value range: 0 and [26, 256].
If the value is 0, the bitrate of the audio stream will be the same as that of the original audio.
 * @method integer getSampleRate() Obtain Audio stream sample rate. Valid values:
<li>32,000</li>
<li>44,100</li>
<li>48,000</li>
In Hz.
 * @method void setSampleRate(integer $SampleRate) Set Audio stream sample rate. Valid values:
<li>32,000</li>
<li>44,100</li>
<li>48,000</li>
In Hz.
 * @method string getType() Obtain Template type. Valid values:
<li>Preset: preset template;</li>
<li>Custom: custom template.</li>
 * @method void setType(string $Type) Set Template type. Valid values:
<li>Preset: preset template;</li>
<li>Custom: custom template.</li>
 * @method string getName() Obtain Template name. Length limit: 64 characters.
 * @method void setName(string $Name) Set Template name. Length limit: 64 characters.
 * @method string getComment() Obtain Template description. Length limit: 256 characters.
 * @method void setComment(string $Comment) Set Template description. Length limit: 256 characters.
 * @method integer getAudioChannel() Obtain Audio channel system. Valid values:
<li>1: Mono</li>
<li>2: Dual</li>
<li>6: Stereo</li>
Default value: 2.
 * @method void setAudioChannel(integer $AudioChannel) Set Audio channel system. Valid values:
<li>1: Mono</li>
<li>2: Dual</li>
<li>6: Stereo</li>
Default value: 2.
 * @method string getCreateTime() Obtain Creation time of template in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
 * @method void setCreateTime(string $CreateTime) Set Creation time of template in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
 * @method string getUpdateTime() Obtain Last modified time of template in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
 * @method void setUpdateTime(string $UpdateTime) Set Last modified time of template in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
 */
class AudioTrackTemplateInfo extends AbstractModel
{
    /**
     * @var integer Unique ID of a template.
     */
    public $Definition;

    /**
     * @var string Audio track encoder.
When `Container` is `mp3`, the valid value is:
<li>libmp3lame.</li>
When `Container` is `ogg` or `flac`, the valid value is:
<li>flac.</li>
When `Container` is `m4a`, the valid values include:
<li>libfdk_aac;</li>
<li>libmp3lame;</li>
<li>ac3.</li>
When the video track's `Container` is `mp4` or `flv`, the valid values include:
<li>libfdk_aac: more suitable for mp4;</li>
<li>libmp3lame: more suitable for flv;</li>
<li>mp2.</li>
When the video track's `Container` is `hls`, the valid values include:
<li>libfdk_aac;</li>
<li>libmp3lame.</li>
     */
    public $Codec;

    /**
     * @var integer Audio stream bitrate in Kbps. Value range: 0 and [26, 256].
If the value is 0, the bitrate of the audio stream will be the same as that of the original audio.
     */
    public $Bitrate;

    /**
     * @var integer Audio stream sample rate. Valid values:
<li>32,000</li>
<li>44,100</li>
<li>48,000</li>
In Hz.
     */
    public $SampleRate;

    /**
     * @var string Template type. Valid values:
<li>Preset: preset template;</li>
<li>Custom: custom template.</li>
     */
    public $Type;

    /**
     * @var string Template name. Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var string Template description. Length limit: 256 characters.
     */
    public $Comment;

    /**
     * @var integer Audio channel system. Valid values:
<li>1: Mono</li>
<li>2: Dual</li>
<li>6: Stereo</li>
Default value: 2.
     */
    public $AudioChannel;

    /**
     * @var string Creation time of template in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
     */
    public $CreateTime;

    /**
     * @var string Last modified time of template in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
     */
    public $UpdateTime;

    /**
     * @param integer $Definition Unique ID of a template.
     * @param string $Codec Audio track encoder.
When `Container` is `mp3`, the valid value is:
<li>libmp3lame.</li>
When `Container` is `ogg` or `flac`, the valid value is:
<li>flac.</li>
When `Container` is `m4a`, the valid values include:
<li>libfdk_aac;</li>
<li>libmp3lame;</li>
<li>ac3.</li>
When the video track's `Container` is `mp4` or `flv`, the valid values include:
<li>libfdk_aac: more suitable for mp4;</li>
<li>libmp3lame: more suitable for flv;</li>
<li>mp2.</li>
When the video track's `Container` is `hls`, the valid values include:
<li>libfdk_aac;</li>
<li>libmp3lame.</li>
     * @param integer $Bitrate Audio stream bitrate in Kbps. Value range: 0 and [26, 256].
If the value is 0, the bitrate of the audio stream will be the same as that of the original audio.
     * @param integer $SampleRate Audio stream sample rate. Valid values:
<li>32,000</li>
<li>44,100</li>
<li>48,000</li>
In Hz.
     * @param string $Type Template type. Valid values:
<li>Preset: preset template;</li>
<li>Custom: custom template.</li>
     * @param string $Name Template name. Length limit: 64 characters.
     * @param string $Comment Template description. Length limit: 256 characters.
     * @param integer $AudioChannel Audio channel system. Valid values:
<li>1: Mono</li>
<li>2: Dual</li>
<li>6: Stereo</li>
Default value: 2.
     * @param string $CreateTime Creation time of template in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
     * @param string $UpdateTime Last modified time of template in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("AudioChannel",$param) and $param["AudioChannel"] !== null) {
            $this->AudioChannel = $param["AudioChannel"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
