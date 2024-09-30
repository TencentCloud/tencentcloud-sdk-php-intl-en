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
 * Details of an adaptive bitrate streaming template
 *
 * @method integer getDefinition() Obtain Unique ID of an adaptive bitrate streaming template.
 * @method void setDefinition(integer $Definition) Set Unique ID of an adaptive bitrate streaming template.
 * @method string getType() Obtain Template type. Valid values:
<li>Preset: preset template;</li>
<li>Custom: custom template.</li>
 * @method void setType(string $Type) Set Template type. Valid values:
<li>Preset: preset template;</li>
<li>Custom: custom template.</li>
 * @method string getName() Obtain Name of an adaptive bitrate streaming template.
 * @method void setName(string $Name) Set Name of an adaptive bitrate streaming template.
 * @method string getComment() Obtain Description of an adaptive bitrate streaming template.
 * @method void setComment(string $Comment) Set Description of an adaptive bitrate streaming template.
 * @method string getFormat() Obtain Adaptive bitrate streaming format. Valid values:
<li>HLS;</li>
<li>MPEG-DASH.</li>
 * @method void setFormat(string $Format) Set Adaptive bitrate streaming format. Valid values:
<li>HLS;</li>
<li>MPEG-DASH.</li>
 * @method array getStreamInfos() Obtain Parameter information of input streams for transcoding to adaptive bitrate streaming. Up to 10 streams can be input.
 * @method void setStreamInfos(array $StreamInfos) Set Parameter information of input streams for transcoding to adaptive bitrate streaming. Up to 10 streams can be input.
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
 * @method string getCreateTime() Obtain Creation time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setCreateTime(string $CreateTime) Set Creation time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getUpdateTime() Obtain Last modified time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setUpdateTime(string $UpdateTime) Set Last modified time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method integer getPureAudio() Obtain Whether it is an audio-only template. 0: video template. 1: audio-only template.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPureAudio(integer $PureAudio) Set Whether it is an audio-only template. 0: video template. 1: audio-only template.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSegmentType() Obtain HLS segment type. Valid values:
<li>ts-segment: HLS+TS segment.</li>
<li>ts-byterange: HLS+TS byte range.</li>
<li>mp4-segment: HLS+MP4 segment.</li>
<li>mp4-byterange: HLS+MP4 byte range.</li>
<li>ts-packed-audio: TS+Packed audio.</li>
<li>mp4-packed-audio: MP4+Packed audio.</li>
Default value: ts-segment.

Note: The HLS segment format for adaptive bitrate streaming is based on this field.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSegmentType(string $SegmentType) Set HLS segment type. Valid values:
<li>ts-segment: HLS+TS segment.</li>
<li>ts-byterange: HLS+TS byte range.</li>
<li>mp4-segment: HLS+MP4 segment.</li>
<li>mp4-byterange: HLS+MP4 byte range.</li>
<li>ts-packed-audio: TS+Packed audio.</li>
<li>mp4-packed-audio: MP4+Packed audio.</li>
Default value: ts-segment.

Note: The HLS segment format for adaptive bitrate streaming is based on this field.Note: This field may return null, indicating that no valid values can be obtained.
 */
class AdaptiveDynamicStreamingTemplate extends AbstractModel
{
    /**
     * @var integer Unique ID of an adaptive bitrate streaming template.
     */
    public $Definition;

    /**
     * @var string Template type. Valid values:
<li>Preset: preset template;</li>
<li>Custom: custom template.</li>
     */
    public $Type;

    /**
     * @var string Name of an adaptive bitrate streaming template.
     */
    public $Name;

    /**
     * @var string Description of an adaptive bitrate streaming template.
     */
    public $Comment;

    /**
     * @var string Adaptive bitrate streaming format. Valid values:
<li>HLS;</li>
<li>MPEG-DASH.</li>
     */
    public $Format;

    /**
     * @var array Parameter information of input streams for transcoding to adaptive bitrate streaming. Up to 10 streams can be input.
     */
    public $StreamInfos;

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
     * @var string Creation time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $CreateTime;

    /**
     * @var string Last modified time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $UpdateTime;

    /**
     * @var integer Whether it is an audio-only template. 0: video template. 1: audio-only template.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PureAudio;

    /**
     * @var string HLS segment type. Valid values:
<li>ts-segment: HLS+TS segment.</li>
<li>ts-byterange: HLS+TS byte range.</li>
<li>mp4-segment: HLS+MP4 segment.</li>
<li>mp4-byterange: HLS+MP4 byte range.</li>
<li>ts-packed-audio: TS+Packed audio.</li>
<li>mp4-packed-audio: MP4+Packed audio.</li>
Default value: ts-segment.

Note: The HLS segment format for adaptive bitrate streaming is based on this field.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SegmentType;

    /**
     * @param integer $Definition Unique ID of an adaptive bitrate streaming template.
     * @param string $Type Template type. Valid values:
<li>Preset: preset template;</li>
<li>Custom: custom template.</li>
     * @param string $Name Name of an adaptive bitrate streaming template.
     * @param string $Comment Description of an adaptive bitrate streaming template.
     * @param string $Format Adaptive bitrate streaming format. Valid values:
<li>HLS;</li>
<li>MPEG-DASH.</li>
     * @param array $StreamInfos Parameter information of input streams for transcoding to adaptive bitrate streaming. Up to 10 streams can be input.
     * @param integer $DisableHigherVideoBitrate Whether to prohibit transcoding from low bitrate to high bitrate. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
     * @param integer $DisableHigherVideoResolution Whether to prohibit transcoding from low resolution to high resolution. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
     * @param string $CreateTime Creation time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $UpdateTime Last modified time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param integer $PureAudio Whether it is an audio-only template. 0: video template. 1: audio-only template.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SegmentType HLS segment type. Valid values:
<li>ts-segment: HLS+TS segment.</li>
<li>ts-byterange: HLS+TS byte range.</li>
<li>mp4-segment: HLS+MP4 segment.</li>
<li>mp4-byterange: HLS+MP4 byte range.</li>
<li>ts-packed-audio: TS+Packed audio.</li>
<li>mp4-packed-audio: MP4+Packed audio.</li>
Default value: ts-segment.

Note: The HLS segment format for adaptive bitrate streaming is based on this field.Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("StreamInfos",$param) and $param["StreamInfos"] !== null) {
            $this->StreamInfos = [];
            foreach ($param["StreamInfos"] as $key => $value){
                $obj = new AdaptiveStreamTemplate();
                $obj->deserialize($value);
                array_push($this->StreamInfos, $obj);
            }
        }

        if (array_key_exists("DisableHigherVideoBitrate",$param) and $param["DisableHigherVideoBitrate"] !== null) {
            $this->DisableHigherVideoBitrate = $param["DisableHigherVideoBitrate"];
        }

        if (array_key_exists("DisableHigherVideoResolution",$param) and $param["DisableHigherVideoResolution"] !== null) {
            $this->DisableHigherVideoResolution = $param["DisableHigherVideoResolution"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("PureAudio",$param) and $param["PureAudio"] !== null) {
            $this->PureAudio = $param["PureAudio"];
        }

        if (array_key_exists("SegmentType",$param) and $param["SegmentType"] !== null) {
            $this->SegmentType = $param["SegmentType"];
        }
    }
}
