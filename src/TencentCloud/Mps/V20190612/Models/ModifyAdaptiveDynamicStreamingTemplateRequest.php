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
 * ModifyAdaptiveDynamicStreamingTemplate request structure.
 *
 * @method integer getDefinition() Obtain Unique ID of an adaptive bitrate streaming template.
 * @method void setDefinition(integer $Definition) Set Unique ID of an adaptive bitrate streaming template.
 * @method string getName() Obtain Template name. Length limit: 64 characters.
 * @method void setName(string $Name) Set Template name. Length limit: 64 characters.
 * @method string getFormat() Obtain Adaptive bitrate streaming format. Valid values:
<li>HLS,</li>
<li>MPEG-DASH.</li>
 * @method void setFormat(string $Format) Set Adaptive bitrate streaming format. Valid values:
<li>HLS,</li>
<li>MPEG-DASH.</li>
 * @method integer getDisableHigherVideoBitrate() Obtain Whether to prohibit transcoding from low bitrate to high bitrate. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
 * @method void setDisableHigherVideoBitrate(integer $DisableHigherVideoBitrate) Set Whether to prohibit transcoding from low bitrate to high bitrate. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
 * @method integer getDisableHigherVideoResolution() Obtain Whether to prohibit transcoding from low resolution to high resolution. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
 * @method void setDisableHigherVideoResolution(integer $DisableHigherVideoResolution) Set Whether to prohibit transcoding from low resolution to high resolution. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
 * @method array getStreamInfos() Obtain Parameter information of input streams for transcoding to adaptive bitrate streaming. Up to 10 streams can be input.

Note:

1. The frame rate of each stream must be consistent; otherwise, the frame rate of the first stream is used as the output frame rate.
2. When modifying substream information, all field values must be fully modified and added; otherwise, fields not filled in will use default values.
 * @method void setStreamInfos(array $StreamInfos) Set Parameter information of input streams for transcoding to adaptive bitrate streaming. Up to 10 streams can be input.

Note:

1. The frame rate of each stream must be consistent; otherwise, the frame rate of the first stream is used as the output frame rate.
2. When modifying substream information, all field values must be fully modified and added; otherwise, fields not filled in will use default values.
 * @method string getComment() Obtain Template description. Length limit: 256 characters.
 * @method void setComment(string $Comment) Set Template description. Length limit: 256 characters.
 * @method integer getPureAudio() Obtain Indicates whether it is audio-only. 0 means video template, 1 means audio-only template.
When the value is 1.
1. StreamInfos.N.RemoveVideo=1
2. StreamInfos.N.RemoveAudio=0
3. StreamInfos.N.Video.Codec=copy
When the value is 0.
1. StreamInfos.N.Video.Codec cannot be copy.
2. StreamInfos.N.Video.Fps cannot be null.

Note:

This value only distinguishes template types. The task uses the values of RemoveAudio and RemoveVideo.
 * @method void setPureAudio(integer $PureAudio) Set Indicates whether it is audio-only. 0 means video template, 1 means audio-only template.
When the value is 1.
1. StreamInfos.N.RemoveVideo=1
2. StreamInfos.N.RemoveAudio=0
3. StreamInfos.N.Video.Codec=copy
When the value is 0.
1. StreamInfos.N.Video.Codec cannot be copy.
2. StreamInfos.N.Video.Fps cannot be null.

Note:

This value only distinguishes template types. The task uses the values of RemoveAudio and RemoveVideo.
 * @method string getSegmentType() Obtain HLS segment type. Valid values: <li>ts-segment: HLS+TS segment.</li> <li>ts-byterange: HLS+TS byte range.</li> <li>mp4-segment: HLS+MP4 segment.</li> <li>mp4-byterange: HLS+MP4 byte range.</li> <li>ts-packed-audio: TS+Packed audio.</li> <li>mp4-packed-audio: MP4+Packed audio.</li> Default value: ts-segment.
Note: The HLS segment format for adaptive bitrate streaming is based on this field.
 * @method void setSegmentType(string $SegmentType) Set HLS segment type. Valid values: <li>ts-segment: HLS+TS segment.</li> <li>ts-byterange: HLS+TS byte range.</li> <li>mp4-segment: HLS+MP4 segment.</li> <li>mp4-byterange: HLS+MP4 byte range.</li> <li>ts-packed-audio: TS+Packed audio.</li> <li>mp4-packed-audio: MP4+Packed audio.</li> Default value: ts-segment.
Note: The HLS segment format for adaptive bitrate streaming is based on this field.
 */
class ModifyAdaptiveDynamicStreamingTemplateRequest extends AbstractModel
{
    /**
     * @var integer Unique ID of an adaptive bitrate streaming template.
     */
    public $Definition;

    /**
     * @var string Template name. Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var string Adaptive bitrate streaming format. Valid values:
<li>HLS,</li>
<li>MPEG-DASH.</li>
     */
    public $Format;

    /**
     * @var integer Whether to prohibit transcoding from low bitrate to high bitrate. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
     */
    public $DisableHigherVideoBitrate;

    /**
     * @var integer Whether to prohibit transcoding from low resolution to high resolution. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
     */
    public $DisableHigherVideoResolution;

    /**
     * @var array Parameter information of input streams for transcoding to adaptive bitrate streaming. Up to 10 streams can be input.

Note:

1. The frame rate of each stream must be consistent; otherwise, the frame rate of the first stream is used as the output frame rate.
2. When modifying substream information, all field values must be fully modified and added; otherwise, fields not filled in will use default values.
     */
    public $StreamInfos;

    /**
     * @var string Template description. Length limit: 256 characters.
     */
    public $Comment;

    /**
     * @var integer Indicates whether it is audio-only. 0 means video template, 1 means audio-only template.
When the value is 1.
1. StreamInfos.N.RemoveVideo=1
2. StreamInfos.N.RemoveAudio=0
3. StreamInfos.N.Video.Codec=copy
When the value is 0.
1. StreamInfos.N.Video.Codec cannot be copy.
2. StreamInfos.N.Video.Fps cannot be null.

Note:

This value only distinguishes template types. The task uses the values of RemoveAudio and RemoveVideo.
     */
    public $PureAudio;

    /**
     * @var string HLS segment type. Valid values: <li>ts-segment: HLS+TS segment.</li> <li>ts-byterange: HLS+TS byte range.</li> <li>mp4-segment: HLS+MP4 segment.</li> <li>mp4-byterange: HLS+MP4 byte range.</li> <li>ts-packed-audio: TS+Packed audio.</li> <li>mp4-packed-audio: MP4+Packed audio.</li> Default value: ts-segment.
Note: The HLS segment format for adaptive bitrate streaming is based on this field.
     */
    public $SegmentType;

    /**
     * @param integer $Definition Unique ID of an adaptive bitrate streaming template.
     * @param string $Name Template name. Length limit: 64 characters.
     * @param string $Format Adaptive bitrate streaming format. Valid values:
<li>HLS,</li>
<li>MPEG-DASH.</li>
     * @param integer $DisableHigherVideoBitrate Whether to prohibit transcoding from low bitrate to high bitrate. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
     * @param integer $DisableHigherVideoResolution Whether to prohibit transcoding from low resolution to high resolution. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
     * @param array $StreamInfos Parameter information of input streams for transcoding to adaptive bitrate streaming. Up to 10 streams can be input.

Note:

1. The frame rate of each stream must be consistent; otherwise, the frame rate of the first stream is used as the output frame rate.
2. When modifying substream information, all field values must be fully modified and added; otherwise, fields not filled in will use default values.
     * @param string $Comment Template description. Length limit: 256 characters.
     * @param integer $PureAudio Indicates whether it is audio-only. 0 means video template, 1 means audio-only template.
When the value is 1.
1. StreamInfos.N.RemoveVideo=1
2. StreamInfos.N.RemoveAudio=0
3. StreamInfos.N.Video.Codec=copy
When the value is 0.
1. StreamInfos.N.Video.Codec cannot be copy.
2. StreamInfos.N.Video.Fps cannot be null.

Note:

This value only distinguishes template types. The task uses the values of RemoveAudio and RemoveVideo.
     * @param string $SegmentType HLS segment type. Valid values: <li>ts-segment: HLS+TS segment.</li> <li>ts-byterange: HLS+TS byte range.</li> <li>mp4-segment: HLS+MP4 segment.</li> <li>mp4-byterange: HLS+MP4 byte range.</li> <li>ts-packed-audio: TS+Packed audio.</li> <li>mp4-packed-audio: MP4+Packed audio.</li> Default value: ts-segment.
Note: The HLS segment format for adaptive bitrate streaming is based on this field.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("DisableHigherVideoBitrate",$param) and $param["DisableHigherVideoBitrate"] !== null) {
            $this->DisableHigherVideoBitrate = $param["DisableHigherVideoBitrate"];
        }

        if (array_key_exists("DisableHigherVideoResolution",$param) and $param["DisableHigherVideoResolution"] !== null) {
            $this->DisableHigherVideoResolution = $param["DisableHigherVideoResolution"];
        }

        if (array_key_exists("StreamInfos",$param) and $param["StreamInfos"] !== null) {
            $this->StreamInfos = [];
            foreach ($param["StreamInfos"] as $key => $value){
                $obj = new AdaptiveStreamTemplate();
                $obj->deserialize($value);
                array_push($this->StreamInfos, $obj);
            }
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("PureAudio",$param) and $param["PureAudio"] !== null) {
            $this->PureAudio = $param["PureAudio"];
        }

        if (array_key_exists("SegmentType",$param) and $param["SegmentType"] !== null) {
            $this->SegmentType = $param["SegmentType"];
        }
    }
}
