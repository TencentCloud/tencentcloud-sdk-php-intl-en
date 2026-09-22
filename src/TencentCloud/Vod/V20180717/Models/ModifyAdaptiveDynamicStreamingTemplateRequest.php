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
 * ModifyAdaptiveDynamicStreamingTemplate request structure.
 *
 * @method integer getDefinition() Obtain <p>Adaptive Transcoding Template Unique Identifier.</p>
 * @method void setDefinition(integer $Definition) Set <p>Adaptive Transcoding Template Unique Identifier.</p>
 * @method integer getSubAppId() Obtain <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate VOD services on or after December 25, 2023, this field must be set to the application ID when accessing resources in VOD applications, whether it is the default application or a newly created application.</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate VOD services on or after December 25, 2023, this field must be set to the application ID when accessing resources in VOD applications, whether it is the default application or a newly created application.</b></p>
 * @method string getName() Obtain <p>Template name. Length limit: 64 characters.</p>
 * @method void setName(string $Name) Set <p>Template name. Length limit: 64 characters.</p>
 * @method string getFormat() Obtain <p>Adaptive Transcoding Format. Value range:</p><li>HLS;</li><li>MPEG-DASH.</li>
 * @method void setFormat(string $Format) Set <p>Adaptive Transcoding Format. Value range:</p><li>HLS;</li><li>MPEG-DASH.</li>
 * @method integer getDisableHigherVideoBitrate() Obtain <p>Whether to prohibit video low bitrate to high bitrate conversion. Value range:</p><li>0: No,</li><li>1: Yes.</li>
 * @method void setDisableHigherVideoBitrate(integer $DisableHigherVideoBitrate) Set <p>Whether to prohibit video low bitrate to high bitrate conversion. Value range:</p><li>0: No,</li><li>1: Yes.</li>
 * @method integer getDisableHigherVideoResolution() Obtain <p>Whether to prohibit video resolution to high resolution conversion. Value range:</p><li>0: No,</li><li>1: Yes.</li>
 * @method void setDisableHigherVideoResolution(integer $DisableHigherVideoResolution) Set <p>Whether to prohibit video resolution to high resolution conversion. Value range:</p><li>0: No,</li><li>1: Yes.</li>
 * @method array getStreamInfos() Obtain <p>Adaptive Transcoding Input Stream Parameter Information, up to 10 streams.<br>Note: The frame rate of each stream must remain consistent; if inconsistent, use the frame rate of the first stream as the output frame rate.</p>
 * @method void setStreamInfos(array $StreamInfos) Set <p>Adaptive Transcoding Input Stream Parameter Information, up to 10 streams.<br>Note: The frame rate of each stream must remain consistent; if inconsistent, use the frame rate of the first stream as the output frame rate.</p>
 * @method string getComment() Obtain <p>Transcoding template description. Length limit: 256 characters.</p>
 * @method void setComment(string $Comment) Set <p>Transcoding template description. Length limit: 256 characters.</p>
 * @method string getSegmentType() Obtain <p>Segment type. Available values:<br>ts: HLS, internally mapped to ts-segment</p><p>mp4: HLS/DASH, internally mapped to mp4-mp4-segment for HLS and mp4-mp4-byterange for DASH</p><p>ts-segment: HLS+TS segment</p><p>ts-byterange: HLS+TS byte range</p><p>mp4-segment: HLS+MP4 segment</p><p>mp4-byterange: HLS+MP4 byte range</p><p>ts-packed-audio: HLS+TS+Packed Audio segment</p><p>mp4-packed-audio: HLS+MP4+Packed Audio segment</p><p>ts-ts-segment: HLS+TS+TS segment</p><p>ts-ts-byterange: HLS+TS+TS byte range</p><p>mp4-mp4-segment: HLS+MP4+MP4 segment</p><p>mp4-mp4-byterange: HLS/DASH+MP4+MP4 byte range</p><p>ts-packed-audio-byterange: HLS+TS+Packed Audio byte range</p><p>mp4-packed-audio-byterange: HLS+MP4+Packed Audio byte range<br> Default value: ts-segment Note: The segment format for adaptive bitrate is based on this field. For DASH, SegmentType can only be mp4-mp4-byterange.</p><p>FairPlay: can only be used for HLS, and the segment format can only be mp4 or mp4-mp4-segment. Widevine: can be used for HLS and DASH. For HLS, the segment format can only be mp4 or mp4-mp4-segment. For DASH, the segment format can only be mp4 or mp4-mp4-byterange. Widevine+FairPlay: can only be used for HLS, and the segment format can only be mp4 or mp4-mp4-segment</p>
 * @method void setSegmentType(string $SegmentType) Set <p>Segment type. Available values:<br>ts: HLS, internally mapped to ts-segment</p><p>mp4: HLS/DASH, internally mapped to mp4-mp4-segment for HLS and mp4-mp4-byterange for DASH</p><p>ts-segment: HLS+TS segment</p><p>ts-byterange: HLS+TS byte range</p><p>mp4-segment: HLS+MP4 segment</p><p>mp4-byterange: HLS+MP4 byte range</p><p>ts-packed-audio: HLS+TS+Packed Audio segment</p><p>mp4-packed-audio: HLS+MP4+Packed Audio segment</p><p>ts-ts-segment: HLS+TS+TS segment</p><p>ts-ts-byterange: HLS+TS+TS byte range</p><p>mp4-mp4-segment: HLS+MP4+MP4 segment</p><p>mp4-mp4-byterange: HLS/DASH+MP4+MP4 byte range</p><p>ts-packed-audio-byterange: HLS+TS+Packed Audio byte range</p><p>mp4-packed-audio-byterange: HLS+MP4+Packed Audio byte range<br> Default value: ts-segment Note: The segment format for adaptive bitrate is based on this field. For DASH, SegmentType can only be mp4-mp4-byterange.</p><p>FairPlay: can only be used for HLS, and the segment format can only be mp4 or mp4-mp4-segment. Widevine: can be used for HLS and DASH. For HLS, the segment format can only be mp4 or mp4-mp4-segment. For DASH, the segment format can only be mp4 or mp4-mp4-byterange. Widevine+FairPlay: can only be used for HLS, and the segment format can only be mp4 or mp4-mp4-segment</p>
 * @method integer getSegmentDuration() Obtain <p>Average segmentation duration.</p><p>Value range: [1, 10]</p><p>Unit: second</p>
 * @method void setSegmentDuration(integer $SegmentDuration) Set <p>Average segmentation duration.</p><p>Value range: [1, 10]</p><p>Unit: second</p>
 */
class ModifyAdaptiveDynamicStreamingTemplateRequest extends AbstractModel
{
    /**
     * @var integer <p>Adaptive Transcoding Template Unique Identifier.</p>
     */
    public $Definition;

    /**
     * @var integer <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate VOD services on or after December 25, 2023, this field must be set to the application ID when accessing resources in VOD applications, whether it is the default application or a newly created application.</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Template name. Length limit: 64 characters.</p>
     */
    public $Name;

    /**
     * @var string <p>Adaptive Transcoding Format. Value range:</p><li>HLS;</li><li>MPEG-DASH.</li>
     */
    public $Format;

    /**
     * @var integer <p>Whether to prohibit video low bitrate to high bitrate conversion. Value range:</p><li>0: No,</li><li>1: Yes.</li>
     */
    public $DisableHigherVideoBitrate;

    /**
     * @var integer <p>Whether to prohibit video resolution to high resolution conversion. Value range:</p><li>0: No,</li><li>1: Yes.</li>
     */
    public $DisableHigherVideoResolution;

    /**
     * @var array <p>Adaptive Transcoding Input Stream Parameter Information, up to 10 streams.<br>Note: The frame rate of each stream must remain consistent; if inconsistent, use the frame rate of the first stream as the output frame rate.</p>
     */
    public $StreamInfos;

    /**
     * @var string <p>Transcoding template description. Length limit: 256 characters.</p>
     */
    public $Comment;

    /**
     * @var string <p>Segment type. Available values:<br>ts: HLS, internally mapped to ts-segment</p><p>mp4: HLS/DASH, internally mapped to mp4-mp4-segment for HLS and mp4-mp4-byterange for DASH</p><p>ts-segment: HLS+TS segment</p><p>ts-byterange: HLS+TS byte range</p><p>mp4-segment: HLS+MP4 segment</p><p>mp4-byterange: HLS+MP4 byte range</p><p>ts-packed-audio: HLS+TS+Packed Audio segment</p><p>mp4-packed-audio: HLS+MP4+Packed Audio segment</p><p>ts-ts-segment: HLS+TS+TS segment</p><p>ts-ts-byterange: HLS+TS+TS byte range</p><p>mp4-mp4-segment: HLS+MP4+MP4 segment</p><p>mp4-mp4-byterange: HLS/DASH+MP4+MP4 byte range</p><p>ts-packed-audio-byterange: HLS+TS+Packed Audio byte range</p><p>mp4-packed-audio-byterange: HLS+MP4+Packed Audio byte range<br> Default value: ts-segment Note: The segment format for adaptive bitrate is based on this field. For DASH, SegmentType can only be mp4-mp4-byterange.</p><p>FairPlay: can only be used for HLS, and the segment format can only be mp4 or mp4-mp4-segment. Widevine: can be used for HLS and DASH. For HLS, the segment format can only be mp4 or mp4-mp4-segment. For DASH, the segment format can only be mp4 or mp4-mp4-byterange. Widevine+FairPlay: can only be used for HLS, and the segment format can only be mp4 or mp4-mp4-segment</p>
     */
    public $SegmentType;

    /**
     * @var integer <p>Average segmentation duration.</p><p>Value range: [1, 10]</p><p>Unit: second</p>
     */
    public $SegmentDuration;

    /**
     * @param integer $Definition <p>Adaptive Transcoding Template Unique Identifier.</p>
     * @param integer $SubAppId <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate VOD services on or after December 25, 2023, this field must be set to the application ID when accessing resources in VOD applications, whether it is the default application or a newly created application.</b></p>
     * @param string $Name <p>Template name. Length limit: 64 characters.</p>
     * @param string $Format <p>Adaptive Transcoding Format. Value range:</p><li>HLS;</li><li>MPEG-DASH.</li>
     * @param integer $DisableHigherVideoBitrate <p>Whether to prohibit video low bitrate to high bitrate conversion. Value range:</p><li>0: No,</li><li>1: Yes.</li>
     * @param integer $DisableHigherVideoResolution <p>Whether to prohibit video resolution to high resolution conversion. Value range:</p><li>0: No,</li><li>1: Yes.</li>
     * @param array $StreamInfos <p>Adaptive Transcoding Input Stream Parameter Information, up to 10 streams.<br>Note: The frame rate of each stream must remain consistent; if inconsistent, use the frame rate of the first stream as the output frame rate.</p>
     * @param string $Comment <p>Transcoding template description. Length limit: 256 characters.</p>
     * @param string $SegmentType <p>Segment type. Available values:<br>ts: HLS, internally mapped to ts-segment</p><p>mp4: HLS/DASH, internally mapped to mp4-mp4-segment for HLS and mp4-mp4-byterange for DASH</p><p>ts-segment: HLS+TS segment</p><p>ts-byterange: HLS+TS byte range</p><p>mp4-segment: HLS+MP4 segment</p><p>mp4-byterange: HLS+MP4 byte range</p><p>ts-packed-audio: HLS+TS+Packed Audio segment</p><p>mp4-packed-audio: HLS+MP4+Packed Audio segment</p><p>ts-ts-segment: HLS+TS+TS segment</p><p>ts-ts-byterange: HLS+TS+TS byte range</p><p>mp4-mp4-segment: HLS+MP4+MP4 segment</p><p>mp4-mp4-byterange: HLS/DASH+MP4+MP4 byte range</p><p>ts-packed-audio-byterange: HLS+TS+Packed Audio byte range</p><p>mp4-packed-audio-byterange: HLS+MP4+Packed Audio byte range<br> Default value: ts-segment Note: The segment format for adaptive bitrate is based on this field. For DASH, SegmentType can only be mp4-mp4-byterange.</p><p>FairPlay: can only be used for HLS, and the segment format can only be mp4 or mp4-mp4-segment. Widevine: can be used for HLS and DASH. For HLS, the segment format can only be mp4 or mp4-mp4-segment. For DASH, the segment format can only be mp4 or mp4-mp4-byterange. Widevine+FairPlay: can only be used for HLS, and the segment format can only be mp4 or mp4-mp4-segment</p>
     * @param integer $SegmentDuration <p>Average segmentation duration.</p><p>Value range: [1, 10]</p><p>Unit: second</p>
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
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

        if (array_key_exists("SegmentType",$param) and $param["SegmentType"] !== null) {
            $this->SegmentType = $param["SegmentType"];
        }

        if (array_key_exists("SegmentDuration",$param) and $param["SegmentDuration"] !== null) {
            $this->SegmentDuration = $param["SegmentDuration"];
        }
    }
}
