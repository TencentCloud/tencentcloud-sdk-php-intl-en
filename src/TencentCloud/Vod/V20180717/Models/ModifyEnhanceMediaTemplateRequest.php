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
 * ModifyEnhanceMediaTemplate request structure.
 *
 * @method integer getDefinition() Obtain Audio and video quality rebirth template number.
 * @method void setDefinition(integer $Definition) Set Audio and video quality rebirth template number.
 * @method integer getSubAppId() Obtain <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getName() Obtain Audio and video quality rebirth template name, with a length limit of 64 characters.
 * @method void setName(string $Name) Set Audio and video quality rebirth template name, with a length limit of 64 characters.
 * @method string getComment() Obtain Template description, with a length limit of 256 characters.
 * @method void setComment(string $Comment) Set Template description, with a length limit of 256 characters.
 * @method RebuildVideoInfo getRebuildVideoInfo() Obtain Audio-Visual Quality Revival Video Control Information.
 * @method void setRebuildVideoInfo(RebuildVideoInfo $RebuildVideoInfo) Set Audio-Visual Quality Revival Video Control Information.
 * @method RebuildAudioInfo getRebuildAudioInfo() Obtain Audio-Visual Quality Revival Audio Control Information.
 * @method void setRebuildAudioInfo(RebuildAudioInfo $RebuildAudioInfo) Set Audio-Visual Quality Revival Audio Control Information.
 * @method RebuildMediaTargetVideoStream getTargetVideoInfo() Obtain Output target video control information.
 * @method void setTargetVideoInfo(RebuildMediaTargetVideoStream $TargetVideoInfo) Set Output target video control information.
 * @method RebuildMediaTargetAudioStream getTargetAudioInfo() Obtain Output target audio control information.
 * @method void setTargetAudioInfo(RebuildMediaTargetAudioStream $TargetAudioInfo) Set Output target audio control information.
 * @method string getContainer() Obtain Container format. Available values: mp4, flv, and hls.
 * @method void setContainer(string $Container) Set Container format. Available values: mp4, flv, and hls.
 * @method integer getRemoveVideo() Obtain Whether to remove video data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>
Default value: 0.
 * @method void setRemoveVideo(integer $RemoveVideo) Set Whether to remove video data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>
Default value: 0.
 * @method integer getRemoveAudio() Obtain Remove audio data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>
Default value: 0.
 * @method void setRemoveAudio(integer $RemoveAudio) Set Remove audio data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>
Default value: 0.
 */
class ModifyEnhanceMediaTemplateRequest extends AbstractModel
{
    /**
     * @var integer Audio and video quality rebirth template number.
     */
    public $Definition;

    /**
     * @var integer <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var string Audio and video quality rebirth template name, with a length limit of 64 characters.
     */
    public $Name;

    /**
     * @var string Template description, with a length limit of 256 characters.
     */
    public $Comment;

    /**
     * @var RebuildVideoInfo Audio-Visual Quality Revival Video Control Information.
     */
    public $RebuildVideoInfo;

    /**
     * @var RebuildAudioInfo Audio-Visual Quality Revival Audio Control Information.
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
     * @var string Container format. Available values: mp4, flv, and hls.
     */
    public $Container;

    /**
     * @var integer Whether to remove video data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>
Default value: 0.
     */
    public $RemoveVideo;

    /**
     * @var integer Remove audio data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>
Default value: 0.
     */
    public $RemoveAudio;

    /**
     * @param integer $Definition Audio and video quality rebirth template number.
     * @param integer $SubAppId <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $Name Audio and video quality rebirth template name, with a length limit of 64 characters.
     * @param string $Comment Template description, with a length limit of 256 characters.
     * @param RebuildVideoInfo $RebuildVideoInfo Audio-Visual Quality Revival Video Control Information.
     * @param RebuildAudioInfo $RebuildAudioInfo Audio-Visual Quality Revival Audio Control Information.
     * @param RebuildMediaTargetVideoStream $TargetVideoInfo Output target video control information.
     * @param RebuildMediaTargetAudioStream $TargetAudioInfo Output target audio control information.
     * @param string $Container Container format. Available values: mp4, flv, and hls.
     * @param integer $RemoveVideo Whether to remove video data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>
Default value: 0.
     * @param integer $RemoveAudio Remove audio data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>
Default value: 0.
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
