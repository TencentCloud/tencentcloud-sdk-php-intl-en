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
 * @method integer getDefinition() Obtain Unique identifier of the adaptive transcoding template.
 * @method void setDefinition(integer $Definition) Set Unique identifier of the adaptive transcoding template.
 * @method integer getSubAppId() Obtain <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getName() Obtain Template name. The length cannot exceed 64 characters.
 * @method void setName(string $Name) Set Template name. The length cannot exceed 64 characters.
 * @method string getFormat() Obtain Adaptive Transcoding Format, with a value range of
<li>HLS;</li>
<li>MPEG-DASH.</li>
 * @method void setFormat(string $Format) Set Adaptive Transcoding Format, with a value range of
<li>HLS;</li>
<li>MPEG-DASH.</li>
 * @method integer getDisableHigherVideoBitrate() Obtain Whether to prohibit video low bitrate to high bitrate conversion, value ranges from...to...
<li>`0`: no,</li>
<li>1: Yes.</li>
 * @method void setDisableHigherVideoBitrate(integer $DisableHigherVideoBitrate) Set Whether to prohibit video low bitrate to high bitrate conversion, value ranges from...to...
<li>`0`: no,</li>
<li>1: Yes.</li>
 * @method integer getDisableHigherVideoResolution() Obtain Whether to prohibit video resolution to high resolution conversion. Value ranges from...to...
<li>`0`: no,</li>
<li>1: Yes.</li>
 * @method void setDisableHigherVideoResolution(integer $DisableHigherVideoResolution) Set Whether to prohibit video resolution to high resolution conversion. Value ranges from...to...
<li>`0`: no,</li>
<li>1: Yes.</li>
 * @method array getStreamInfos() Obtain Adaptive Transcoding Input Stream Parameter Information, up to 10 entries.
Note: The frame rate of each stream must remain consistent. If inconsistent, use the frame rate of the first stream as the output frame rate.
 * @method void setStreamInfos(array $StreamInfos) Set Adaptive Transcoding Input Stream Parameter Information, up to 10 entries.
Note: The frame rate of each stream must remain consistent. If inconsistent, use the frame rate of the first stream as the output frame rate.
 * @method string getComment() Obtain Template description, with a length limit of 256 characters.
 * @method void setComment(string $Comment) Set Template description, with a length limit of 256 characters.
 * @method string getSegmentType() Obtain Segment type, valid when Format is HLS. Value range:
<li>ts: ts slicing;</li>
<li>fmp4: fmp4 segment.</li>
 * @method void setSegmentType(string $SegmentType) Set Segment type, valid when Format is HLS. Value range:
<li>ts: ts slicing;</li>
<li>fmp4: fmp4 segment.</li>
 */
class ModifyAdaptiveDynamicStreamingTemplateRequest extends AbstractModel
{
    /**
     * @var integer Unique identifier of the adaptive transcoding template.
     */
    public $Definition;

    /**
     * @var integer <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var string Template name. The length cannot exceed 64 characters.
     */
    public $Name;

    /**
     * @var string Adaptive Transcoding Format, with a value range of
<li>HLS;</li>
<li>MPEG-DASH.</li>
     */
    public $Format;

    /**
     * @var integer Whether to prohibit video low bitrate to high bitrate conversion, value ranges from...to...
<li>`0`: no,</li>
<li>1: Yes.</li>
     */
    public $DisableHigherVideoBitrate;

    /**
     * @var integer Whether to prohibit video resolution to high resolution conversion. Value ranges from...to...
<li>`0`: no,</li>
<li>1: Yes.</li>
     */
    public $DisableHigherVideoResolution;

    /**
     * @var array Adaptive Transcoding Input Stream Parameter Information, up to 10 entries.
Note: The frame rate of each stream must remain consistent. If inconsistent, use the frame rate of the first stream as the output frame rate.
     */
    public $StreamInfos;

    /**
     * @var string Template description, with a length limit of 256 characters.
     */
    public $Comment;

    /**
     * @var string Segment type, valid when Format is HLS. Value range:
<li>ts: ts slicing;</li>
<li>fmp4: fmp4 segment.</li>
     */
    public $SegmentType;

    /**
     * @param integer $Definition Unique identifier of the adaptive transcoding template.
     * @param integer $SubAppId <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $Name Template name. The length cannot exceed 64 characters.
     * @param string $Format Adaptive Transcoding Format, with a value range of
<li>HLS;</li>
<li>MPEG-DASH.</li>
     * @param integer $DisableHigherVideoBitrate Whether to prohibit video low bitrate to high bitrate conversion, value ranges from...to...
<li>`0`: no,</li>
<li>1: Yes.</li>
     * @param integer $DisableHigherVideoResolution Whether to prohibit video resolution to high resolution conversion. Value ranges from...to...
<li>`0`: no,</li>
<li>1: Yes.</li>
     * @param array $StreamInfos Adaptive Transcoding Input Stream Parameter Information, up to 10 entries.
Note: The frame rate of each stream must remain consistent. If inconsistent, use the frame rate of the first stream as the output frame rate.
     * @param string $Comment Template description, with a length limit of 256 characters.
     * @param string $SegmentType Segment type, valid when Format is HLS. Value range:
<li>ts: ts slicing;</li>
<li>fmp4: fmp4 segment.</li>
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
    }
}
