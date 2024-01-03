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
 * CreateEnhanceMediaTemplate request structure.
 *
 * @method string getContainer() Obtain Output file encapsulation format, optional values: mp4, flv, hls.
 * @method void setContainer(string $Container) Set Output file encapsulation format, optional values: mp4, flv, hls.
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method string getName() Obtain Audio and video quality rebirth template name, length limit: 64 characters.
 * @method void setName(string $Name) Set Audio and video quality rebirth template name, length limit: 64 characters.
 * @method string getComment() Obtain Template description information, length limit: 256 characters.
 * @method void setComment(string $Comment) Set Template description information, length limit: 256 characters.
 * @method RebuildVideoInfo getRebuildVideoInfo() Obtain Audio and picture quality regeneration video control control information.
 * @method void setRebuildVideoInfo(RebuildVideoInfo $RebuildVideoInfo) Set Audio and picture quality regeneration video control control information.
 * @method RebuildAudioInfo getRebuildAudioInfo() Obtain Audio and video quality regeneration audio control information.
 * @method void setRebuildAudioInfo(RebuildAudioInfo $RebuildAudioInfo) Set Audio and video quality regeneration audio control information.
 * @method RebuildMediaTargetVideoStream getTargetVideoInfo() Obtain Output target video control information.
 * @method void setTargetVideoInfo(RebuildMediaTargetVideoStream $TargetVideoInfo) Set Output target video control information.
 * @method RebuildMediaTargetAudioStream getTargetAudioInfo() Obtain Output target audio control information.
 * @method void setTargetAudioInfo(RebuildMediaTargetAudioStream $TargetAudioInfo) Set Output target audio control information.
 * @method integer getRemoveVideo() Obtain Whether to remove video data, optional values:
<li>0: Keep</li>
<li>1: Remove</li>
Default value 0.
 * @method void setRemoveVideo(integer $RemoveVideo) Set Whether to remove video data, optional values:
<li>0: Keep</li>
<li>1: Remove</li>
Default value 0.
 * @method integer getRemoveAudio() Obtain Whether to remove audio data, optional values:
<li>0: Keep</li>
<li>1: Remove</li>
Default value 0.
 * @method void setRemoveAudio(integer $RemoveAudio) Set Whether to remove audio data, optional values:
<li>0: Keep</li>
<li>1: Remove</li>
Default value 0.
 */
class CreateEnhanceMediaTemplateRequest extends AbstractModel
{
    /**
     * @var string Output file encapsulation format, optional values: mp4, flv, hls.
     */
    public $Container;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var string Audio and video quality rebirth template name, length limit: 64 characters.
     */
    public $Name;

    /**
     * @var string Template description information, length limit: 256 characters.
     */
    public $Comment;

    /**
     * @var RebuildVideoInfo Audio and picture quality regeneration video control control information.
     */
    public $RebuildVideoInfo;

    /**
     * @var RebuildAudioInfo Audio and video quality regeneration audio control information.
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
     * @var integer Whether to remove video data, optional values:
<li>0: Keep</li>
<li>1: Remove</li>
Default value 0.
     */
    public $RemoveVideo;

    /**
     * @var integer Whether to remove audio data, optional values:
<li>0: Keep</li>
<li>1: Remove</li>
Default value 0.
     */
    public $RemoveAudio;

    /**
     * @param string $Container Output file encapsulation format, optional values: mp4, flv, hls.
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param string $Name Audio and video quality rebirth template name, length limit: 64 characters.
     * @param string $Comment Template description information, length limit: 256 characters.
     * @param RebuildVideoInfo $RebuildVideoInfo Audio and picture quality regeneration video control control information.
     * @param RebuildAudioInfo $RebuildAudioInfo Audio and video quality regeneration audio control information.
     * @param RebuildMediaTargetVideoStream $TargetVideoInfo Output target video control information.
     * @param RebuildMediaTargetAudioStream $TargetAudioInfo Output target audio control information.
     * @param integer $RemoveVideo Whether to remove video data, optional values:
<li>0: Keep</li>
<li>1: Remove</li>
Default value 0.
     * @param integer $RemoveAudio Whether to remove audio data, optional values:
<li>0: Keep</li>
<li>1: Remove</li>
Default value 0.
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
        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
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

        if (array_key_exists("RemoveVideo",$param) and $param["RemoveVideo"] !== null) {
            $this->RemoveVideo = $param["RemoveVideo"];
        }

        if (array_key_exists("RemoveAudio",$param) and $param["RemoveAudio"] !== null) {
            $this->RemoveAudio = $param["RemoveAudio"];
        }
    }
}
