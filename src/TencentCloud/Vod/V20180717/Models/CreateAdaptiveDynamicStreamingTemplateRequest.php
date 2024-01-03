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
 * CreateAdaptiveDynamicStreamingTemplate request structure.
 *
 * @method string getFormat() Obtain The adaptive bitrate streaming format. Valid values:
<li>HLS</li>
<li>MPEG-DASH</li>
 * @method void setFormat(string $Format) Set The adaptive bitrate streaming format. Valid values:
<li>HLS</li>
<li>MPEG-DASH</li>
 * @method array getStreamInfos() Obtain Parameter information of output substream for adaptive bitrate streaming. Up to 10 substreams can be output.
Note: the frame rate of all substreams must be the same; otherwise, the frame rate of the first substream will be used as the output frame rate.
 * @method void setStreamInfos(array $StreamInfos) Set Parameter information of output substream for adaptive bitrate streaming. Up to 10 substreams can be output.
Note: the frame rate of all substreams must be the same; otherwise, the frame rate of the first substream will be used as the output frame rate.
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method string getName() Obtain Template name. Length limit: 64 characters.
 * @method void setName(string $Name) Set Template name. Length limit: 64 characters.
 * @method string getDrmType() Obtain DRM scheme type, value range:
<li>SimpleAES</li>
<li>Widevine</li>
<li>FairPlay</li>
The default value is an empty string. It is an empty string, indicating that the video will not be DRM protected.
 * @method void setDrmType(string $DrmType) Set DRM scheme type, value range:
<li>SimpleAES</li>
<li>Widevine</li>
<li>FairPlay</li>
The default value is an empty string. It is an empty string, indicating that the video will not be DRM protected.
 * @method string getDrmKeyProvider() Obtain The provider of the DRM key. Valid values:
<li>SDMC</li>
<li>VOD</li>
The default is `VOD`.
 * @method void setDrmKeyProvider(string $DrmKeyProvider) Set The provider of the DRM key. Valid values:
<li>SDMC</li>
<li>VOD</li>
The default is `VOD`.
 * @method integer getDisableHigherVideoBitrate() Obtain Whether to prohibit transcoding video from low bitrate to high bitrate. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
Default value: no.
 * @method void setDisableHigherVideoBitrate(integer $DisableHigherVideoBitrate) Set Whether to prohibit transcoding video from low bitrate to high bitrate. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
Default value: no.
 * @method integer getDisableHigherVideoResolution() Obtain Whether to prohibit transcoding from low resolution to high resolution. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
Default value: no.
 * @method void setDisableHigherVideoResolution(integer $DisableHigherVideoResolution) Set Whether to prohibit transcoding from low resolution to high resolution. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
Default value: no.
 * @method string getComment() Obtain Template description. Length limit: 256 characters.
 * @method void setComment(string $Comment) Set Template description. Length limit: 256 characters.
 * @method string getSegmentType() Obtain The segment type. This parameter is valid only if `Format` is `HLS`. Valid values:
<li>ts: TS segment</li>
<li>fmp4: fMP4 segment</li>
Default: ts
 * @method void setSegmentType(string $SegmentType) Set The segment type. This parameter is valid only if `Format` is `HLS`. Valid values:
<li>ts: TS segment</li>
<li>fmp4: fMP4 segment</li>
Default: ts
 */
class CreateAdaptiveDynamicStreamingTemplateRequest extends AbstractModel
{
    /**
     * @var string The adaptive bitrate streaming format. Valid values:
<li>HLS</li>
<li>MPEG-DASH</li>
     */
    public $Format;

    /**
     * @var array Parameter information of output substream for adaptive bitrate streaming. Up to 10 substreams can be output.
Note: the frame rate of all substreams must be the same; otherwise, the frame rate of the first substream will be used as the output frame rate.
     */
    public $StreamInfos;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var string Template name. Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var string DRM scheme type, value range:
<li>SimpleAES</li>
<li>Widevine</li>
<li>FairPlay</li>
The default value is an empty string. It is an empty string, indicating that the video will not be DRM protected.
     */
    public $DrmType;

    /**
     * @var string The provider of the DRM key. Valid values:
<li>SDMC</li>
<li>VOD</li>
The default is `VOD`.
     */
    public $DrmKeyProvider;

    /**
     * @var integer Whether to prohibit transcoding video from low bitrate to high bitrate. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
Default value: no.
     */
    public $DisableHigherVideoBitrate;

    /**
     * @var integer Whether to prohibit transcoding from low resolution to high resolution. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
Default value: no.
     */
    public $DisableHigherVideoResolution;

    /**
     * @var string Template description. Length limit: 256 characters.
     */
    public $Comment;

    /**
     * @var string The segment type. This parameter is valid only if `Format` is `HLS`. Valid values:
<li>ts: TS segment</li>
<li>fmp4: fMP4 segment</li>
Default: ts
     */
    public $SegmentType;

    /**
     * @param string $Format The adaptive bitrate streaming format. Valid values:
<li>HLS</li>
<li>MPEG-DASH</li>
     * @param array $StreamInfos Parameter information of output substream for adaptive bitrate streaming. Up to 10 substreams can be output.
Note: the frame rate of all substreams must be the same; otherwise, the frame rate of the first substream will be used as the output frame rate.
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param string $Name Template name. Length limit: 64 characters.
     * @param string $DrmType DRM scheme type, value range:
<li>SimpleAES</li>
<li>Widevine</li>
<li>FairPlay</li>
The default value is an empty string. It is an empty string, indicating that the video will not be DRM protected.
     * @param string $DrmKeyProvider The provider of the DRM key. Valid values:
<li>SDMC</li>
<li>VOD</li>
The default is `VOD`.
     * @param integer $DisableHigherVideoBitrate Whether to prohibit transcoding video from low bitrate to high bitrate. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
Default value: no.
     * @param integer $DisableHigherVideoResolution Whether to prohibit transcoding from low resolution to high resolution. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
Default value: no.
     * @param string $Comment Template description. Length limit: 256 characters.
     * @param string $SegmentType The segment type. This parameter is valid only if `Format` is `HLS`. Valid values:
<li>ts: TS segment</li>
<li>fmp4: fMP4 segment</li>
Default: ts
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
