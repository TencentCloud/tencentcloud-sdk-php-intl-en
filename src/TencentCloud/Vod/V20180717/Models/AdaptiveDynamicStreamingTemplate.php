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
 * Adaptive bitrate streaming template details
 *
 * @method integer getDefinition() Obtain <p>Adaptive bitrate streaming template unique ID.</p>
 * @method void setDefinition(integer $Definition) Set <p>Adaptive bitrate streaming template unique ID.</p>
 * @method string getType() Obtain <p>Template type. Valid values:</p><li>Preset: preset template.</li><li>Custom: custom template.</li>
 * @method void setType(string $Type) Set <p>Template type. Valid values:</p><li>Preset: preset template.</li><li>Custom: custom template.</li>
 * @method string getName() Obtain <p>Adaptive bitrate streaming template name.</p>
 * @method void setName(string $Name) Set <p>Adaptive bitrate streaming template name.</p>
 * @method string getComment() Obtain <p>Adaptive bitrate streaming template description.</p>
 * @method void setComment(string $Comment) Set <p>Adaptive bitrate streaming template description.</p>
 * @method string getFormat() Obtain <p>Adaptive Transcoding Format. Value range:</p><li>HLS.</li>
 * @method void setFormat(string $Format) Set <p>Adaptive Transcoding Format. Value range:</p><li>HLS.</li>
 * @method string getDrmType() Obtain <p>DRM type. Value range: </p><li>SimpleAES</li><li>Widevine</li><li>FairPlay</li><li>Widevine+FairPlay</li>If the value is an empty string, it means no DRM protection is applied to the video.
 * @method void setDrmType(string $DrmType) Set <p>DRM type. Value range: </p><li>SimpleAES</li><li>Widevine</li><li>FairPlay</li><li>Widevine+FairPlay</li>If the value is an empty string, it means no DRM protection is applied to the video.
 * @method string getDrmKeyProvider() Obtain <p>Key provider for DRM. Value range:</p><li>SDMC: SDMC;</li><li>VOD: VOD.</li>Default value: VOD.<p>The SDMC service will gradually phase out subsequently. Please use the VOD DRM encryption service.</p>
 * @method void setDrmKeyProvider(string $DrmKeyProvider) Set <p>Key provider for DRM. Value range:</p><li>SDMC: SDMC;</li><li>VOD: VOD.</li>Default value: VOD.<p>The SDMC service will gradually phase out subsequently. Please use the VOD DRM encryption service.</p>
 * @method string getDrmEncryptType() Obtain <p>Encryption type of DRM. Value range: {&quot;cbcs&quot;, &quot;cenc&quot;}</p>
 * @method void setDrmEncryptType(string $DrmEncryptType) Set <p>Encryption type of DRM. Value range: {&quot;cbcs&quot;, &quot;cenc&quot;}</p>
 * @method array getStreamInfos() Obtain <p>Adaptive Transcoding Input Stream Parameter Information, up to 10 streams.</p>
 * @method void setStreamInfos(array $StreamInfos) Set <p>Adaptive Transcoding Input Stream Parameter Information, up to 10 streams.</p>
 * @method integer getDisableHigherVideoBitrate() Obtain <p>Whether to prohibit video low bitrate to high bitrate conversion. Value range: </p><li>0: No, </li><li>1: Yes.</li>
 * @method void setDisableHigherVideoBitrate(integer $DisableHigherVideoBitrate) Set <p>Whether to prohibit video low bitrate to high bitrate conversion. Value range: </p><li>0: No, </li><li>1: Yes.</li>
 * @method integer getDisableHigherVideoResolution() Obtain <p>Whether to prohibit video resolution to high resolution conversion. Value range:</p><li>0: No,</li><li>1: Yes.</li>
 * @method void setDisableHigherVideoResolution(integer $DisableHigherVideoResolution) Set <p>Whether to prohibit video resolution to high resolution conversion. Value range:</p><li>0: No,</li><li>1: Yes.</li>
 * @method string getCreateTime() Obtain <p>Template creation time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Template creation time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method string getUpdateTime() Obtain <p>Last template modification time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Last template modification time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method string getSegmentType() Obtain <p>Segment type.</p><p>ts: HLS, internally mapped to ts-segment</p><p>fmp4: HLS/DASH, internally mapped to mp4-mp4-segment for HLS and mp4-mp4-byterange for DASH</p><p>ts-segment: HLS+TS segment</p><p>ts-byterange: HLS+TS byte range</p><p>mp4-segment: HLS+MP4 segment</p><p>mp4-byterange: HLS+MP4 byte range</p><p>ts-packed-audio: HLS+TS+Packed Audio segment</p><p>mp4-packed-audio: HLS+MP4+Packed Audio segment</p><p>ts-ts-segment: HLS+TS+TS segment</p><p>ts-ts-byterange: HLS+TS+TS byte range</p><p>mp4-mp4-segment: HLS+MP4+MP4 segment</p><p>mp4-mp4-byterange: HLS/DASH+MP4+MP4 byte range</p><p>ts-packed-audio-byterange: HLS+TS+Packed Audio byte range</p><p>mp4-packed-audio-byterange: HLS+MP4+Packed Audio byte range<br> Default value: ts-segment. Note: The shard format of adaptive bitrate is based on this field. For DASH, SegmentType can only be mp4-mp4-byterange.</p>
 * @method void setSegmentType(string $SegmentType) Set <p>Segment type.</p><p>ts: HLS, internally mapped to ts-segment</p><p>fmp4: HLS/DASH, internally mapped to mp4-mp4-segment for HLS and mp4-mp4-byterange for DASH</p><p>ts-segment: HLS+TS segment</p><p>ts-byterange: HLS+TS byte range</p><p>mp4-segment: HLS+MP4 segment</p><p>mp4-byterange: HLS+MP4 byte range</p><p>ts-packed-audio: HLS+TS+Packed Audio segment</p><p>mp4-packed-audio: HLS+MP4+Packed Audio segment</p><p>ts-ts-segment: HLS+TS+TS segment</p><p>ts-ts-byterange: HLS+TS+TS byte range</p><p>mp4-mp4-segment: HLS+MP4+MP4 segment</p><p>mp4-mp4-byterange: HLS/DASH+MP4+MP4 byte range</p><p>ts-packed-audio-byterange: HLS+TS+Packed Audio byte range</p><p>mp4-packed-audio-byterange: HLS+MP4+Packed Audio byte range<br> Default value: ts-segment. Note: The shard format of adaptive bitrate is based on this field. For DASH, SegmentType can only be mp4-mp4-byterange.</p>
 * @method integer getSegmentDuration() Obtain <p>Average segmentation duration</p><p>Unit: seconds</p><p>Default value: 6</p><p>Adaptive bitrate streaming uses SegmentDuration to set the segment duration instead of the HlsTime field.</p>
 * @method void setSegmentDuration(integer $SegmentDuration) Set <p>Average segmentation duration</p><p>Unit: seconds</p><p>Default value: 6</p><p>Adaptive bitrate streaming uses SegmentDuration to set the segment duration instead of the HlsTime field.</p>
 */
class AdaptiveDynamicStreamingTemplate extends AbstractModel
{
    /**
     * @var integer <p>Adaptive bitrate streaming template unique ID.</p>
     */
    public $Definition;

    /**
     * @var string <p>Template type. Valid values:</p><li>Preset: preset template.</li><li>Custom: custom template.</li>
     */
    public $Type;

    /**
     * @var string <p>Adaptive bitrate streaming template name.</p>
     */
    public $Name;

    /**
     * @var string <p>Adaptive bitrate streaming template description.</p>
     */
    public $Comment;

    /**
     * @var string <p>Adaptive Transcoding Format. Value range:</p><li>HLS.</li>
     */
    public $Format;

    /**
     * @var string <p>DRM type. Value range: </p><li>SimpleAES</li><li>Widevine</li><li>FairPlay</li><li>Widevine+FairPlay</li>If the value is an empty string, it means no DRM protection is applied to the video.
     */
    public $DrmType;

    /**
     * @var string <p>Key provider for DRM. Value range:</p><li>SDMC: SDMC;</li><li>VOD: VOD.</li>Default value: VOD.<p>The SDMC service will gradually phase out subsequently. Please use the VOD DRM encryption service.</p>
     */
    public $DrmKeyProvider;

    /**
     * @var string <p>Encryption type of DRM. Value range: {&quot;cbcs&quot;, &quot;cenc&quot;}</p>
     */
    public $DrmEncryptType;

    /**
     * @var array <p>Adaptive Transcoding Input Stream Parameter Information, up to 10 streams.</p>
     */
    public $StreamInfos;

    /**
     * @var integer <p>Whether to prohibit video low bitrate to high bitrate conversion. Value range: </p><li>0: No, </li><li>1: Yes.</li>
     */
    public $DisableHigherVideoBitrate;

    /**
     * @var integer <p>Whether to prohibit video resolution to high resolution conversion. Value range:</p><li>0: No,</li><li>1: Yes.</li>
     */
    public $DisableHigherVideoResolution;

    /**
     * @var string <p>Template creation time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Last template modification time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>Segment type.</p><p>ts: HLS, internally mapped to ts-segment</p><p>fmp4: HLS/DASH, internally mapped to mp4-mp4-segment for HLS and mp4-mp4-byterange for DASH</p><p>ts-segment: HLS+TS segment</p><p>ts-byterange: HLS+TS byte range</p><p>mp4-segment: HLS+MP4 segment</p><p>mp4-byterange: HLS+MP4 byte range</p><p>ts-packed-audio: HLS+TS+Packed Audio segment</p><p>mp4-packed-audio: HLS+MP4+Packed Audio segment</p><p>ts-ts-segment: HLS+TS+TS segment</p><p>ts-ts-byterange: HLS+TS+TS byte range</p><p>mp4-mp4-segment: HLS+MP4+MP4 segment</p><p>mp4-mp4-byterange: HLS/DASH+MP4+MP4 byte range</p><p>ts-packed-audio-byterange: HLS+TS+Packed Audio byte range</p><p>mp4-packed-audio-byterange: HLS+MP4+Packed Audio byte range<br> Default value: ts-segment. Note: The shard format of adaptive bitrate is based on this field. For DASH, SegmentType can only be mp4-mp4-byterange.</p>
     */
    public $SegmentType;

    /**
     * @var integer <p>Average segmentation duration</p><p>Unit: seconds</p><p>Default value: 6</p><p>Adaptive bitrate streaming uses SegmentDuration to set the segment duration instead of the HlsTime field.</p>
     */
    public $SegmentDuration;

    /**
     * @param integer $Definition <p>Adaptive bitrate streaming template unique ID.</p>
     * @param string $Type <p>Template type. Valid values:</p><li>Preset: preset template.</li><li>Custom: custom template.</li>
     * @param string $Name <p>Adaptive bitrate streaming template name.</p>
     * @param string $Comment <p>Adaptive bitrate streaming template description.</p>
     * @param string $Format <p>Adaptive Transcoding Format. Value range:</p><li>HLS.</li>
     * @param string $DrmType <p>DRM type. Value range: </p><li>SimpleAES</li><li>Widevine</li><li>FairPlay</li><li>Widevine+FairPlay</li>If the value is an empty string, it means no DRM protection is applied to the video.
     * @param string $DrmKeyProvider <p>Key provider for DRM. Value range:</p><li>SDMC: SDMC;</li><li>VOD: VOD.</li>Default value: VOD.<p>The SDMC service will gradually phase out subsequently. Please use the VOD DRM encryption service.</p>
     * @param string $DrmEncryptType <p>Encryption type of DRM. Value range: {&quot;cbcs&quot;, &quot;cenc&quot;}</p>
     * @param array $StreamInfos <p>Adaptive Transcoding Input Stream Parameter Information, up to 10 streams.</p>
     * @param integer $DisableHigherVideoBitrate <p>Whether to prohibit video low bitrate to high bitrate conversion. Value range: </p><li>0: No, </li><li>1: Yes.</li>
     * @param integer $DisableHigherVideoResolution <p>Whether to prohibit video resolution to high resolution conversion. Value range:</p><li>0: No,</li><li>1: Yes.</li>
     * @param string $CreateTime <p>Template creation time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     * @param string $UpdateTime <p>Last template modification time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     * @param string $SegmentType <p>Segment type.</p><p>ts: HLS, internally mapped to ts-segment</p><p>fmp4: HLS/DASH, internally mapped to mp4-mp4-segment for HLS and mp4-mp4-byterange for DASH</p><p>ts-segment: HLS+TS segment</p><p>ts-byterange: HLS+TS byte range</p><p>mp4-segment: HLS+MP4 segment</p><p>mp4-byterange: HLS+MP4 byte range</p><p>ts-packed-audio: HLS+TS+Packed Audio segment</p><p>mp4-packed-audio: HLS+MP4+Packed Audio segment</p><p>ts-ts-segment: HLS+TS+TS segment</p><p>ts-ts-byterange: HLS+TS+TS byte range</p><p>mp4-mp4-segment: HLS+MP4+MP4 segment</p><p>mp4-mp4-byterange: HLS/DASH+MP4+MP4 byte range</p><p>ts-packed-audio-byterange: HLS+TS+Packed Audio byte range</p><p>mp4-packed-audio-byterange: HLS+MP4+Packed Audio byte range<br> Default value: ts-segment. Note: The shard format of adaptive bitrate is based on this field. For DASH, SegmentType can only be mp4-mp4-byterange.</p>
     * @param integer $SegmentDuration <p>Average segmentation duration</p><p>Unit: seconds</p><p>Default value: 6</p><p>Adaptive bitrate streaming uses SegmentDuration to set the segment duration instead of the HlsTime field.</p>
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

        if (array_key_exists("DrmType",$param) and $param["DrmType"] !== null) {
            $this->DrmType = $param["DrmType"];
        }

        if (array_key_exists("DrmKeyProvider",$param) and $param["DrmKeyProvider"] !== null) {
            $this->DrmKeyProvider = $param["DrmKeyProvider"];
        }

        if (array_key_exists("DrmEncryptType",$param) and $param["DrmEncryptType"] !== null) {
            $this->DrmEncryptType = $param["DrmEncryptType"];
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

        if (array_key_exists("SegmentType",$param) and $param["SegmentType"] !== null) {
            $this->SegmentType = $param["SegmentType"];
        }

        if (array_key_exists("SegmentDuration",$param) and $param["SegmentDuration"] !== null) {
            $this->SegmentDuration = $param["SegmentDuration"];
        }
    }
}
