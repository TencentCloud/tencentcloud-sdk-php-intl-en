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
 * CreateAdaptiveDynamicStreamingTemplate request structure.
 *
 * @method string getFormat() Obtain <p>Adaptive Transcoding Format. Value range:</p><li>HLS;</li><li>MPEG-DASH.</li>
 * @method void setFormat(string $Format) Set <p>Adaptive Transcoding Format. Value range:</p><li>HLS;</li><li>MPEG-DASH.</li>
 * @method array getStreamInfos() Obtain <p>Adaptive transcoding output substream parameter information. Up to 10 substreams can be output.<br>Note: The frame rate of each substream must remain consistent. If inconsistent, the frame rate of the first substream is used as the output frame rate.</p>
 * @method void setStreamInfos(array $StreamInfos) Set <p>Adaptive transcoding output substream parameter information. Up to 10 substreams can be output.<br>Note: The frame rate of each substream must remain consistent. If inconsistent, the frame rate of the first substream is used as the output frame rate.</p>
 * @method integer getSubAppId() Obtain <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, if they access resources in on-demand applications (whether the default application or a newly created application), this field must be filled with the application ID.</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, if they access resources in on-demand applications (whether the default application or a newly created application), this field must be filled with the application ID.</b></p>
 * @method string getName() Obtain <p>Template name. Length limit: 64 characters.</p>
 * @method void setName(string $Name) Set <p>Template name. Length limit: 64 characters.</p>
 * @method string getDrmType() Obtain <p>DRM solution type. Value range:</p><li>SimpleAES</li><li>Widevine</li><li>FairPlay</li><li>Widevine+FairPlay</li>The default value is an empty string. If the value is an empty string, it means no DRM protection is applied to the video.
 * @method void setDrmType(string $DrmType) Set <p>DRM solution type. Value range:</p><li>SimpleAES</li><li>Widevine</li><li>FairPlay</li><li>Widevine+FairPlay</li>The default value is an empty string. If the value is an empty string, it means no DRM protection is applied to the video.
 * @method string getDrmKeyProvider() Obtain <p>Key provider for DRM. Valid values:</p><li>SDMC: SDMC;</li><li>VOD: VOD.</li>Default value: VOD.<p>The SDMC service will be gradually phased out. Please use VOD DRM encryption service.</p>
 * @method void setDrmKeyProvider(string $DrmKeyProvider) Set <p>Key provider for DRM. Valid values:</p><li>SDMC: SDMC;</li><li>VOD: VOD.</li>Default value: VOD.<p>The SDMC service will be gradually phased out. Please use VOD DRM encryption service.</p>
 * @method string getDrmEncryptType() Obtain <p>Encryption method. Available values:<br>cbcs: supported by Widevine, FairPlay, and WideVine+FairPlay;<br>cenc: supported by Widevine;   </p><p>If left blank<br>FairPlay: cbcs by default;<br>Widevine: cenc by default;<br>WideVine+FairPlay: cbcs by default;</p>
 * @method void setDrmEncryptType(string $DrmEncryptType) Set <p>Encryption method. Available values:<br>cbcs: supported by Widevine, FairPlay, and WideVine+FairPlay;<br>cenc: supported by Widevine;   </p><p>If left blank<br>FairPlay: cbcs by default;<br>Widevine: cenc by default;<br>WideVine+FairPlay: cbcs by default;</p>
 * @method integer getDisableHigherVideoBitrate() Obtain <p>Whether to prohibit video low bitrate to high bitrate conversion. Value range:</p><li>0: No,</li><li>1: Yes.</li>Default: No.
 * @method void setDisableHigherVideoBitrate(integer $DisableHigherVideoBitrate) Set <p>Whether to prohibit video low bitrate to high bitrate conversion. Value range:</p><li>0: No,</li><li>1: Yes.</li>Default: No.
 * @method integer getDisableHigherVideoResolution() Obtain <p>Whether to prohibit video resolution to high resolution conversion. Value range:</p><li>0: No,</li><li>1: Yes.</li>No by default.
 * @method void setDisableHigherVideoResolution(integer $DisableHigherVideoResolution) Set <p>Whether to prohibit video resolution to high resolution conversion. Value range:</p><li>0: No,</li><li>1: Yes.</li>No by default.
 * @method string getComment() Obtain <p>Transcoding template description. Length limit: 256 characters.</p>
 * @method void setComment(string $Comment) Set <p>Transcoding template description. Length limit: 256 characters.</p>
 * @method string getSegmentType() Obtain <p>Segment type. Valid values:<br>ts: HLS, internally mapped to ts-segment</p><p>mp4: HLS/DASH, internally mapped to mp4-mp4-segment for HLS and mp4-mp4-byterange for DASH</p><p>ts-segment: HLS+TS segment</p><p>ts-byterange: HLS+TS byte range</p><p>mp4-segment: HLS+MP4 segment</p><p>mp4-byterange: HLS+MP4 byte range</p><p>ts-packed-audio: HLS+TS+Packed Audio segment</p><p>mp4-packed-audio: HLS+MP4+Packed Audio segment</p><p>ts-ts-segment: HLS+TS+TS segment</p><p>ts-ts-byterange: HLS+TS+TS byte range</p><p>mp4-mp4-segment: HLS+MP4+MP4 segment</p><p>mp4-mp4-byterange: HLS/DASH+MP4+MP4 byte range</p><p>ts-packed-audio-byterange: HLS+TS+Packed Audio byte range</p><p>mp4-packed-audio-byterange: HLS+MP4+Packed Audio byte range<br> Default value: ts-segment. Note: The segment format for adaptive bitrate streams is based on this field. For DASH, SegmentType can only be mp4-mp4-byterange.</p><p>FairPlay: can only be used for HLS, and the segment format can only be mp4 or mp4-mp4-segment. Widevine: can be used for HLS and DASH. For HLS, the segment format can only be mp4 or mp4-mp4-segment. For DASH, the segment format can only be mp4 or mp4-mp4-byterange.<br>Widevine+FairPlay: can only be used for HLS, and the segment format can only be mp4 or mp4-mp4-segment</p>
 * @method void setSegmentType(string $SegmentType) Set <p>Segment type. Valid values:<br>ts: HLS, internally mapped to ts-segment</p><p>mp4: HLS/DASH, internally mapped to mp4-mp4-segment for HLS and mp4-mp4-byterange for DASH</p><p>ts-segment: HLS+TS segment</p><p>ts-byterange: HLS+TS byte range</p><p>mp4-segment: HLS+MP4 segment</p><p>mp4-byterange: HLS+MP4 byte range</p><p>ts-packed-audio: HLS+TS+Packed Audio segment</p><p>mp4-packed-audio: HLS+MP4+Packed Audio segment</p><p>ts-ts-segment: HLS+TS+TS segment</p><p>ts-ts-byterange: HLS+TS+TS byte range</p><p>mp4-mp4-segment: HLS+MP4+MP4 segment</p><p>mp4-mp4-byterange: HLS/DASH+MP4+MP4 byte range</p><p>ts-packed-audio-byterange: HLS+TS+Packed Audio byte range</p><p>mp4-packed-audio-byterange: HLS+MP4+Packed Audio byte range<br> Default value: ts-segment. Note: The segment format for adaptive bitrate streams is based on this field. For DASH, SegmentType can only be mp4-mp4-byterange.</p><p>FairPlay: can only be used for HLS, and the segment format can only be mp4 or mp4-mp4-segment. Widevine: can be used for HLS and DASH. For HLS, the segment format can only be mp4 or mp4-mp4-segment. For DASH, the segment format can only be mp4 or mp4-mp4-byterange.<br>Widevine+FairPlay: can only be used for HLS, and the segment format can only be mp4 or mp4-mp4-segment</p>
 * @method integer getSegmentDuration() Obtain <p>Segment duration.</p><p>Value range: [1, 10]</p><p>Unit: seconds</p><p>Default value: 6</p>
 * @method void setSegmentDuration(integer $SegmentDuration) Set <p>Segment duration.</p><p>Value range: [1, 10]</p><p>Unit: seconds</p><p>Default value: 6</p>
 */
class CreateAdaptiveDynamicStreamingTemplateRequest extends AbstractModel
{
    /**
     * @var string <p>Adaptive Transcoding Format. Value range:</p><li>HLS;</li><li>MPEG-DASH.</li>
     */
    public $Format;

    /**
     * @var array <p>Adaptive transcoding output substream parameter information. Up to 10 substreams can be output.<br>Note: The frame rate of each substream must remain consistent. If inconsistent, the frame rate of the first substream is used as the output frame rate.</p>
     */
    public $StreamInfos;

    /**
     * @var integer <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, if they access resources in on-demand applications (whether the default application or a newly created application), this field must be filled with the application ID.</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Template name. Length limit: 64 characters.</p>
     */
    public $Name;

    /**
     * @var string <p>DRM solution type. Value range:</p><li>SimpleAES</li><li>Widevine</li><li>FairPlay</li><li>Widevine+FairPlay</li>The default value is an empty string. If the value is an empty string, it means no DRM protection is applied to the video.
     */
    public $DrmType;

    /**
     * @var string <p>Key provider for DRM. Valid values:</p><li>SDMC: SDMC;</li><li>VOD: VOD.</li>Default value: VOD.<p>The SDMC service will be gradually phased out. Please use VOD DRM encryption service.</p>
     */
    public $DrmKeyProvider;

    /**
     * @var string <p>Encryption method. Available values:<br>cbcs: supported by Widevine, FairPlay, and WideVine+FairPlay;<br>cenc: supported by Widevine;   </p><p>If left blank<br>FairPlay: cbcs by default;<br>Widevine: cenc by default;<br>WideVine+FairPlay: cbcs by default;</p>
     */
    public $DrmEncryptType;

    /**
     * @var integer <p>Whether to prohibit video low bitrate to high bitrate conversion. Value range:</p><li>0: No,</li><li>1: Yes.</li>Default: No.
     */
    public $DisableHigherVideoBitrate;

    /**
     * @var integer <p>Whether to prohibit video resolution to high resolution conversion. Value range:</p><li>0: No,</li><li>1: Yes.</li>No by default.
     */
    public $DisableHigherVideoResolution;

    /**
     * @var string <p>Transcoding template description. Length limit: 256 characters.</p>
     */
    public $Comment;

    /**
     * @var string <p>Segment type. Valid values:<br>ts: HLS, internally mapped to ts-segment</p><p>mp4: HLS/DASH, internally mapped to mp4-mp4-segment for HLS and mp4-mp4-byterange for DASH</p><p>ts-segment: HLS+TS segment</p><p>ts-byterange: HLS+TS byte range</p><p>mp4-segment: HLS+MP4 segment</p><p>mp4-byterange: HLS+MP4 byte range</p><p>ts-packed-audio: HLS+TS+Packed Audio segment</p><p>mp4-packed-audio: HLS+MP4+Packed Audio segment</p><p>ts-ts-segment: HLS+TS+TS segment</p><p>ts-ts-byterange: HLS+TS+TS byte range</p><p>mp4-mp4-segment: HLS+MP4+MP4 segment</p><p>mp4-mp4-byterange: HLS/DASH+MP4+MP4 byte range</p><p>ts-packed-audio-byterange: HLS+TS+Packed Audio byte range</p><p>mp4-packed-audio-byterange: HLS+MP4+Packed Audio byte range<br> Default value: ts-segment. Note: The segment format for adaptive bitrate streams is based on this field. For DASH, SegmentType can only be mp4-mp4-byterange.</p><p>FairPlay: can only be used for HLS, and the segment format can only be mp4 or mp4-mp4-segment. Widevine: can be used for HLS and DASH. For HLS, the segment format can only be mp4 or mp4-mp4-segment. For DASH, the segment format can only be mp4 or mp4-mp4-byterange.<br>Widevine+FairPlay: can only be used for HLS, and the segment format can only be mp4 or mp4-mp4-segment</p>
     */
    public $SegmentType;

    /**
     * @var integer <p>Segment duration.</p><p>Value range: [1, 10]</p><p>Unit: seconds</p><p>Default value: 6</p>
     */
    public $SegmentDuration;

    /**
     * @param string $Format <p>Adaptive Transcoding Format. Value range:</p><li>HLS;</li><li>MPEG-DASH.</li>
     * @param array $StreamInfos <p>Adaptive transcoding output substream parameter information. Up to 10 substreams can be output.<br>Note: The frame rate of each substream must remain consistent. If inconsistent, the frame rate of the first substream is used as the output frame rate.</p>
     * @param integer $SubAppId <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, if they access resources in on-demand applications (whether the default application or a newly created application), this field must be filled with the application ID.</b></p>
     * @param string $Name <p>Template name. Length limit: 64 characters.</p>
     * @param string $DrmType <p>DRM solution type. Value range:</p><li>SimpleAES</li><li>Widevine</li><li>FairPlay</li><li>Widevine+FairPlay</li>The default value is an empty string. If the value is an empty string, it means no DRM protection is applied to the video.
     * @param string $DrmKeyProvider <p>Key provider for DRM. Valid values:</p><li>SDMC: SDMC;</li><li>VOD: VOD.</li>Default value: VOD.<p>The SDMC service will be gradually phased out. Please use VOD DRM encryption service.</p>
     * @param string $DrmEncryptType <p>Encryption method. Available values:<br>cbcs: supported by Widevine, FairPlay, and WideVine+FairPlay;<br>cenc: supported by Widevine;   </p><p>If left blank<br>FairPlay: cbcs by default;<br>Widevine: cenc by default;<br>WideVine+FairPlay: cbcs by default;</p>
     * @param integer $DisableHigherVideoBitrate <p>Whether to prohibit video low bitrate to high bitrate conversion. Value range:</p><li>0: No,</li><li>1: Yes.</li>Default: No.
     * @param integer $DisableHigherVideoResolution <p>Whether to prohibit video resolution to high resolution conversion. Value range:</p><li>0: No,</li><li>1: Yes.</li>No by default.
     * @param string $Comment <p>Transcoding template description. Length limit: 256 characters.</p>
     * @param string $SegmentType <p>Segment type. Valid values:<br>ts: HLS, internally mapped to ts-segment</p><p>mp4: HLS/DASH, internally mapped to mp4-mp4-segment for HLS and mp4-mp4-byterange for DASH</p><p>ts-segment: HLS+TS segment</p><p>ts-byterange: HLS+TS byte range</p><p>mp4-segment: HLS+MP4 segment</p><p>mp4-byterange: HLS+MP4 byte range</p><p>ts-packed-audio: HLS+TS+Packed Audio segment</p><p>mp4-packed-audio: HLS+MP4+Packed Audio segment</p><p>ts-ts-segment: HLS+TS+TS segment</p><p>ts-ts-byterange: HLS+TS+TS byte range</p><p>mp4-mp4-segment: HLS+MP4+MP4 segment</p><p>mp4-mp4-byterange: HLS/DASH+MP4+MP4 byte range</p><p>ts-packed-audio-byterange: HLS+TS+Packed Audio byte range</p><p>mp4-packed-audio-byterange: HLS+MP4+Packed Audio byte range<br> Default value: ts-segment. Note: The segment format for adaptive bitrate streams is based on this field. For DASH, SegmentType can only be mp4-mp4-byterange.</p><p>FairPlay: can only be used for HLS, and the segment format can only be mp4 or mp4-mp4-segment. Widevine: can be used for HLS and DASH. For HLS, the segment format can only be mp4 or mp4-mp4-segment. For DASH, the segment format can only be mp4 or mp4-mp4-byterange.<br>Widevine+FairPlay: can only be used for HLS, and the segment format can only be mp4 or mp4-mp4-segment</p>
     * @param integer $SegmentDuration <p>Segment duration.</p><p>Value range: [1, 10]</p><p>Unit: seconds</p><p>Default value: 6</p>
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DrmType",$param) and $param["DrmType"] !== null) {
            $this->DrmType = $param["DrmType"];
        }

        if (array_key_exists("DrmKeyProvider",$param) and $param["DrmKeyProvider"] !== null) {
            $this->DrmKeyProvider = $param["DrmKeyProvider"];
        }

        if (array_key_exists("DrmEncryptType",$param) and $param["DrmEncryptType"] !== null) {
            $this->DrmEncryptType = $param["DrmEncryptType"];
        }

        if (array_key_exists("DisableHigherVideoBitrate",$param) and $param["DisableHigherVideoBitrate"] !== null) {
            $this->DisableHigherVideoBitrate = $param["DisableHigherVideoBitrate"];
        }

        if (array_key_exists("DisableHigherVideoResolution",$param) and $param["DisableHigherVideoResolution"] !== null) {
            $this->DisableHigherVideoResolution = $param["DisableHigherVideoResolution"];
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
