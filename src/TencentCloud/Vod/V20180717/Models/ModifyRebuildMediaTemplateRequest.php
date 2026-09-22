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
 * ModifyRebuildMediaTemplate request structure.
 *
 * @method integer getDefinition() Obtain Video rebirth template number.
 * @method void setDefinition(integer $Definition) Set Video rebirth template number.
 * @method string getSubAppId() Obtain <b>ID of the VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
 * @method void setSubAppId(string $SubAppId) Set <b>ID of the VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
 * @method string getName() Obtain Video rebirth template name.
 * @method void setName(string $Name) Set Video rebirth template name.
 * @method string getComment() Obtain Video rebirth template description.
 * @method void setComment(string $Comment) Set Video rebirth template description.
 * @method RebuildVideoInfo getRebuildVideoInfo() Obtain Video Rebirth Video Control Information.
 * @method void setRebuildVideoInfo(RebuildVideoInfo $RebuildVideoInfo) Set Video Rebirth Video Control Information.
 * @method RebuildAudioInfo getRebuildAudioInfo() Obtain Video Rebirth Audio Control Information.
 * @method void setRebuildAudioInfo(RebuildAudioInfo $RebuildAudioInfo) Set Video Rebirth Audio Control Information.
 * @method RebuildMediaTargetVideoStream getTargetVideoInfo() Obtain Output target video control information.
 * @method void setTargetVideoInfo(RebuildMediaTargetVideoStream $TargetVideoInfo) Set Output target video control information.
 * @method RebuildMediaTargetAudioStream getTargetAudioInfo() Obtain Output target audio control information.
 * @method void setTargetAudioInfo(RebuildMediaTargetAudioStream $TargetAudioInfo) Set Output target audio control information.
 * @method string getContainer() Obtain Output file container format. Available values: mp4, flv, hls.
 * @method void setContainer(string $Container) Set Output file container format. Available values: mp4, flv, hls.
 * @method integer getRemoveVideo() Obtain Indicates whether to remove video data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>
 * @method void setRemoveVideo(integer $RemoveVideo) Set Indicates whether to remove video data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>
 * @method integer getRemoveAudio() Obtain Indicates whether to remove audio data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>
 * @method void setRemoveAudio(integer $RemoveAudio) Set Indicates whether to remove audio data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>
 */
class ModifyRebuildMediaTemplateRequest extends AbstractModel
{
    /**
     * @var integer Video rebirth template number.
     */
    public $Definition;

    /**
     * @var string <b>ID of the VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
     */
    public $SubAppId;

    /**
     * @var string Video rebirth template name.
     */
    public $Name;

    /**
     * @var string Video rebirth template description.
     */
    public $Comment;

    /**
     * @var RebuildVideoInfo Video Rebirth Video Control Information.
     */
    public $RebuildVideoInfo;

    /**
     * @var RebuildAudioInfo Video Rebirth Audio Control Information.
     */
    public $RebuildAudioInfo;

    /**
     * @var RebuildMediaTargetVideoStream Output target video control information.
     */
    public $TargetVideoInfo;

    /**
     * @var RebuildMediaTargetAudioStream Output target audio control information.
     */
    public $TargetAudioInfo;

    /**
     * @var string Output file container format. Available values: mp4, flv, hls.
     */
    public $Container;

    /**
     * @var integer Indicates whether to remove video data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>
     */
    public $RemoveVideo;

    /**
     * @var integer Indicates whether to remove audio data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>
     */
    public $RemoveAudio;

    /**
     * @param integer $Definition Video rebirth template number.
     * @param string $SubAppId <b>ID of the VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
     * @param string $Name Video rebirth template name.
     * @param string $Comment Video rebirth template description.
     * @param RebuildVideoInfo $RebuildVideoInfo Video Rebirth Video Control Information.
     * @param RebuildAudioInfo $RebuildAudioInfo Video Rebirth Audio Control Information.
     * @param RebuildMediaTargetVideoStream $TargetVideoInfo Output target video control information.
     * @param RebuildMediaTargetAudioStream $TargetAudioInfo Output target audio control information.
     * @param string $Container Output file container format. Available values: mp4, flv, hls.
     * @param integer $RemoveVideo Indicates whether to remove video data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>
     * @param integer $RemoveAudio Indicates whether to remove audio data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>
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

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("RebuildVideoInfo",$param) and $param["RebuildVideoInfo"] !== null) {
            $this->RebuildVideoInfo = new RebuildVideoInfo();
            $this->RebuildVideoInfo->deserialize($param["RebuildVideoInfo"]);
        }

        if (array_key_exists("RebuildAudioInfo",$param) and $param["RebuildAudioInfo"] !== null) {
            $this->RebuildAudioInfo = new RebuildAudioInfo();
            $this->RebuildAudioInfo->deserialize($param["RebuildAudioInfo"]);
        }

        if (array_key_exists("TargetVideoInfo",$param) and $param["TargetVideoInfo"] !== null) {
            $this->TargetVideoInfo = new RebuildMediaTargetVideoStream();
            $this->TargetVideoInfo->deserialize($param["TargetVideoInfo"]);
        }

        if (array_key_exists("TargetAudioInfo",$param) and $param["TargetAudioInfo"] !== null) {
            $this->TargetAudioInfo = new RebuildMediaTargetAudioStream();
            $this->TargetAudioInfo->deserialize($param["TargetAudioInfo"]);
        }

        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("RemoveVideo",$param) and $param["RemoveVideo"] !== null) {
            $this->RemoveVideo = $param["RemoveVideo"];
        }

        if (array_key_exists("RemoveAudio",$param) and $param["RemoveAudio"] !== null) {
            $this->RemoveAudio = $param["RemoveAudio"];
        }
    }
}
