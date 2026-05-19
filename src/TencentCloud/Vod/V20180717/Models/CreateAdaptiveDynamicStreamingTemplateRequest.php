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
 * @method string getFormat() Obtain <p>Adaptive Transcoding Format. Value ranges from:</p><li>HLS;</li><li>MPEG-DASH.</li>
 * @method void setFormat(string $Format) Set <p>Adaptive Transcoding Format. Value ranges from:</p><li>HLS;</li><li>MPEG-DASH.</li>
 * @method array getStreamInfos() Obtain <p>Adaptive Transcoding Output Substream Parameter Information. Up to 10 substreams.<br>Note: The frame rate of each substream must remain consistent. If inconsistent, use the frame rate of the first substream as the output frame rate.</p>
 * @method void setStreamInfos(array $StreamInfos) Set <p>Adaptive Transcoding Output Substream Parameter Information. Up to 10 substreams.<br>Note: The frame rate of each substream must remain consistent. If inconsistent, use the frame rate of the first substream as the output frame rate.</p>
 * @method integer getSubAppId() Obtain <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/33987">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID to access resources in on-demand applications (whether default or newly created application).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/33987">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID to access resources in on-demand applications (whether default or newly created application).</b></p>
 * @method string getName() Obtain <p>Template name. The length cannot exceed 64 characters.</p>
 * @method void setName(string $Name) Set <p>Template name. The length cannot exceed 64 characters.</p>
 * @method string getDrmType() Obtain <p>DRM solution type. Value ranges from:</p><li>SimpleAES</li><li>Widevine</li><li>FairPlay</li><li>Widevine+FairPlay</li>The default value is an empty string. If the value is an empty string, it represents no DRM protection for the video.
 * @method void setDrmType(string $DrmType) Set <p>DRM solution type. Value ranges from:</p><li>SimpleAES</li><li>Widevine</li><li>FairPlay</li><li>Widevine+FairPlay</li>The default value is an empty string. If the value is an empty string, it represents no DRM protection for the video.
 * @method string getDrmKeyProvider() Obtain <p>DRM key provider. Permissible range:</p><li>SDMC: SDMC;</li><li>VOD: video on demand.</li>Default value is VOD.<p>SDMC service will be gradually phased out subsequently. Please use VOD DRM encryption service.</p>
 * @method void setDrmKeyProvider(string $DrmKeyProvider) Set <p>DRM key provider. Permissible range:</p><li>SDMC: SDMC;</li><li>VOD: video on demand.</li>Default value is VOD.<p>SDMC service will be gradually phased out subsequently. Please use VOD DRM encryption service.</p>
 * @method string getDrmEncryptType() Obtain <p>Encryption method. Available values:<br>cbcs: supported by Widevine, FairPlay, and WideVine+FairPlay;<br>cenc: supported by Widevine.</p><p>If left blank:<br>cbcs: default method of FairPlay;<br>cenc: default method of Widevine;<br>cbcs: default method of WideVine+FairPlay.</p>
 * @method void setDrmEncryptType(string $DrmEncryptType) Set <p>Encryption method. Available values:<br>cbcs: supported by Widevine, FairPlay, and WideVine+FairPlay;<br>cenc: supported by Widevine.</p><p>If left blank:<br>cbcs: default method of FairPlay;<br>cenc: default method of Widevine;<br>cbcs: default method of WideVine+FairPlay.</p>
 * @method integer getDisableHigherVideoBitrate() Obtain <p>Whether to prohibit video low bitrate to high bitrate conversion. Value ranges from:</p><li>0: No,</li><li>1: Yes.</li>Default no.
 * @method void setDisableHigherVideoBitrate(integer $DisableHigherVideoBitrate) Set <p>Whether to prohibit video low bitrate to high bitrate conversion. Value ranges from:</p><li>0: No,</li><li>1: Yes.</li>Default no.
 * @method integer getDisableHigherVideoResolution() Obtain <p>Whether to prohibit video resolution to high resolution conversion. Value ranges from:</p><li>0: No,</li><li>1: Yes.</li>Default no.
 * @method void setDisableHigherVideoResolution(integer $DisableHigherVideoResolution) Set <p>Whether to prohibit video resolution to high resolution conversion. Value ranges from:</p><li>0: No,</li><li>1: Yes.</li>Default no.
 * @method string getComment() Obtain <p>Template description, with a length limit of 256 characters.</p>
 * @method void setComment(string $Comment) Set <p>Template description, with a length limit of 256 characters.</p>
 * @method string getSegmentType() Obtain <p>Segment type, valid when Format is HLS. Available values:</p><li>ts: ts slicing;</li><li>fmp4: fmp4 slicing.</li>Default value: ts.
 * @method void setSegmentType(string $SegmentType) Set <p>Segment type, valid when Format is HLS. Available values:</p><li>ts: ts slicing;</li><li>fmp4: fmp4 slicing.</li>Default value: ts.
 */
class CreateAdaptiveDynamicStreamingTemplateRequest extends AbstractModel
{
    /**
     * @var string <p>Adaptive Transcoding Format. Value ranges from:</p><li>HLS;</li><li>MPEG-DASH.</li>
     */
    public $Format;

    /**
     * @var array <p>Adaptive Transcoding Output Substream Parameter Information. Up to 10 substreams.<br>Note: The frame rate of each substream must remain consistent. If inconsistent, use the frame rate of the first substream as the output frame rate.</p>
     */
    public $StreamInfos;

    /**
     * @var integer <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/33987">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID to access resources in on-demand applications (whether default or newly created application).</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Template name. The length cannot exceed 64 characters.</p>
     */
    public $Name;

    /**
     * @var string <p>DRM solution type. Value ranges from:</p><li>SimpleAES</li><li>Widevine</li><li>FairPlay</li><li>Widevine+FairPlay</li>The default value is an empty string. If the value is an empty string, it represents no DRM protection for the video.
     */
    public $DrmType;

    /**
     * @var string <p>DRM key provider. Permissible range:</p><li>SDMC: SDMC;</li><li>VOD: video on demand.</li>Default value is VOD.<p>SDMC service will be gradually phased out subsequently. Please use VOD DRM encryption service.</p>
     */
    public $DrmKeyProvider;

    /**
     * @var string <p>Encryption method. Available values:<br>cbcs: supported by Widevine, FairPlay, and WideVine+FairPlay;<br>cenc: supported by Widevine.</p><p>If left blank:<br>cbcs: default method of FairPlay;<br>cenc: default method of Widevine;<br>cbcs: default method of WideVine+FairPlay.</p>
     */
    public $DrmEncryptType;

    /**
     * @var integer <p>Whether to prohibit video low bitrate to high bitrate conversion. Value ranges from:</p><li>0: No,</li><li>1: Yes.</li>Default no.
     */
    public $DisableHigherVideoBitrate;

    /**
     * @var integer <p>Whether to prohibit video resolution to high resolution conversion. Value ranges from:</p><li>0: No,</li><li>1: Yes.</li>Default no.
     */
    public $DisableHigherVideoResolution;

    /**
     * @var string <p>Template description, with a length limit of 256 characters.</p>
     */
    public $Comment;

    /**
     * @var string <p>Segment type, valid when Format is HLS. Available values:</p><li>ts: ts slicing;</li><li>fmp4: fmp4 slicing.</li>Default value: ts.
     */
    public $SegmentType;

    /**
     * @param string $Format <p>Adaptive Transcoding Format. Value ranges from:</p><li>HLS;</li><li>MPEG-DASH.</li>
     * @param array $StreamInfos <p>Adaptive Transcoding Output Substream Parameter Information. Up to 10 substreams.<br>Note: The frame rate of each substream must remain consistent. If inconsistent, use the frame rate of the first substream as the output frame rate.</p>
     * @param integer $SubAppId <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/33987">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID to access resources in on-demand applications (whether default or newly created application).</b></p>
     * @param string $Name <p>Template name. The length cannot exceed 64 characters.</p>
     * @param string $DrmType <p>DRM solution type. Value ranges from:</p><li>SimpleAES</li><li>Widevine</li><li>FairPlay</li><li>Widevine+FairPlay</li>The default value is an empty string. If the value is an empty string, it represents no DRM protection for the video.
     * @param string $DrmKeyProvider <p>DRM key provider. Permissible range:</p><li>SDMC: SDMC;</li><li>VOD: video on demand.</li>Default value is VOD.<p>SDMC service will be gradually phased out subsequently. Please use VOD DRM encryption service.</p>
     * @param string $DrmEncryptType <p>Encryption method. Available values:<br>cbcs: supported by Widevine, FairPlay, and WideVine+FairPlay;<br>cenc: supported by Widevine.</p><p>If left blank:<br>cbcs: default method of FairPlay;<br>cenc: default method of Widevine;<br>cbcs: default method of WideVine+FairPlay.</p>
     * @param integer $DisableHigherVideoBitrate <p>Whether to prohibit video low bitrate to high bitrate conversion. Value ranges from:</p><li>0: No,</li><li>1: Yes.</li>Default no.
     * @param integer $DisableHigherVideoResolution <p>Whether to prohibit video resolution to high resolution conversion. Value ranges from:</p><li>0: No,</li><li>1: Yes.</li>Default no.
     * @param string $Comment <p>Template description, with a length limit of 256 characters.</p>
     * @param string $SegmentType <p>Segment type, valid when Format is HLS. Available values:</p><li>ts: ts slicing;</li><li>fmp4: fmp4 slicing.</li>Default value: ts.
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
    }
}
