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
 * @method integer getDefinition() Obtain The remaster template ID.
 * @method void setDefinition(integer $Definition) Set The remaster template ID.
 * @method string getSubAppId() Obtain <b>The VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.</b>
 * @method void setSubAppId(string $SubAppId) Set <b>The VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.</b>
 * @method string getName() Obtain The remaster template name.
 * @method void setName(string $Name) Set The remaster template name.
 * @method string getComment() Obtain The template description.
 * @method void setComment(string $Comment) Set The template description.
 * @method RebuildVideoInfo getRebuildVideoInfo() Obtain 
 * @method void setRebuildVideoInfo(RebuildVideoInfo $RebuildVideoInfo) Set 
 * @method RebuildAudioInfo getRebuildAudioInfo() Obtain 
 * @method void setRebuildAudioInfo(RebuildAudioInfo $RebuildAudioInfo) Set 
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
     * @var integer The remaster template ID.
     */
    public $Definition;

    /**
     * @var string <b>The VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.</b>
     */
    public $SubAppId;

    /**
     * @var string The remaster template name.
     */
    public $Name;

    /**
     * @var string The template description.
     */
    public $Comment;

    /**
     * @var RebuildVideoInfo 
     */
    public $RebuildVideoInfo;

    /**
     * @var RebuildAudioInfo 
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
     * @param integer $Definition The remaster template ID.
     * @param string $SubAppId <b>The VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.</b>
     * @param string $Name The remaster template name.
     * @param string $Comment The template description.
     * @param RebuildVideoInfo $RebuildVideoInfo 
     * @param RebuildAudioInfo $RebuildAudioInfo 
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
