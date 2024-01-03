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
 * ModifyRebuildMediaTemplate request structure.
 *
 * @method integer getDefinition() Obtain Rebuild Media Template ID.
 * @method void setDefinition(integer $Definition) Set Rebuild Media Template ID.
 * @method string getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(string $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method string getName() Obtain Rebuild Media Template Name.
 * @method void setName(string $Name) Set Rebuild Media Template Name.
 * @method string getComment() Obtain Rebuild media template description.
 * @method void setComment(string $Comment) Set Rebuild media template description.
 * @method RebuildVideoInfo getRebuildVideoInfo() Obtain Rebuild media video control information.
 * @method void setRebuildVideoInfo(RebuildVideoInfo $RebuildVideoInfo) Set Rebuild media video control information.
 * @method RebuildAudioInfo getRebuildAudioInfo() Obtain Rebuild media audio control information.
 * @method void setRebuildAudioInfo(RebuildAudioInfo $RebuildAudioInfo) Set Rebuild media audio control information.
 * @method RebuildMediaTargetVideoStream getTargetVideoInfo() Obtain The output video parameters.
 * @method void setTargetVideoInfo(RebuildMediaTargetVideoStream $TargetVideoInfo) Set The output video parameters.
 * @method RebuildMediaTargetAudioStream getTargetAudioInfo() Obtain The output audio parameters.
 * @method void setTargetAudioInfo(RebuildMediaTargetAudioStream $TargetAudioInfo) Set The output audio parameters.
 * @method string getContainer() Obtain The output container format. Valid values: `mp4`, `flv`, `hls`.
 * @method void setContainer(string $Container) Set The output container format. Valid values: `mp4`, `flv`, `hls`.
 * @method integer getRemoveVideo() Obtain Whether to remove video data. Valid values:
<li>`0`: No</li>
<li>`1`: Yes</li>
 * @method void setRemoveVideo(integer $RemoveVideo) Set Whether to remove video data. Valid values:
<li>`0`: No</li>
<li>`1`: Yes</li>
 * @method integer getRemoveAudio() Obtain Whether to remove audio data. Valid values:
<li>`0`: No</li>
<li>`1`: Yes</li>
 * @method void setRemoveAudio(integer $RemoveAudio) Set Whether to remove audio data. Valid values:
<li>`0`: No</li>
<li>`1`: Yes</li>
 */
class ModifyRebuildMediaTemplateRequest extends AbstractModel
{
    /**
     * @var integer Rebuild Media Template ID.
     */
    public $Definition;

    /**
     * @var string <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var string Rebuild Media Template Name.
     */
    public $Name;

    /**
     * @var string Rebuild media template description.
     */
    public $Comment;

    /**
     * @var RebuildVideoInfo Rebuild media video control information.
     */
    public $RebuildVideoInfo;

    /**
     * @var RebuildAudioInfo Rebuild media audio control information.
     */
    public $RebuildAudioInfo;

    /**
     * @var RebuildMediaTargetVideoStream The output video parameters.
     */
    public $TargetVideoInfo;

    /**
     * @var RebuildMediaTargetAudioStream The output audio parameters.
     */
    public $TargetAudioInfo;

    /**
     * @var string The output container format. Valid values: `mp4`, `flv`, `hls`.
     */
    public $Container;

    /**
     * @var integer Whether to remove video data. Valid values:
<li>`0`: No</li>
<li>`1`: Yes</li>
     */
    public $RemoveVideo;

    /**
     * @var integer Whether to remove audio data. Valid values:
<li>`0`: No</li>
<li>`1`: Yes</li>
     */
    public $RemoveAudio;

    /**
     * @param integer $Definition Rebuild Media Template ID.
     * @param string $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param string $Name Rebuild Media Template Name.
     * @param string $Comment Rebuild media template description.
     * @param RebuildVideoInfo $RebuildVideoInfo Rebuild media video control information.
     * @param RebuildAudioInfo $RebuildAudioInfo Rebuild media audio control information.
     * @param RebuildMediaTargetVideoStream $TargetVideoInfo The output video parameters.
     * @param RebuildMediaTargetAudioStream $TargetAudioInfo The output audio parameters.
     * @param string $Container The output container format. Valid values: `mp4`, `flv`, `hls`.
     * @param integer $RemoveVideo Whether to remove video data. Valid values:
<li>`0`: No</li>
<li>`1`: Yes</li>
     * @param integer $RemoveAudio Whether to remove audio data. Valid values:
<li>`0`: No</li>
<li>`1`: Yes</li>
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
