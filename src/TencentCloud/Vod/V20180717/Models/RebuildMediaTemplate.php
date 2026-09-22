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
 * Audio-visual quality rebirth template details.
 *
 * @method integer getDefinition() Obtain Audio and video quality rebirth template number.
 * @method void setDefinition(integer $Definition) Set Audio and video quality rebirth template number.
 * @method string getType() Obtain Template type. Available values:
<li>Preset: system-preset template;</li>
<li>Custom: custom template.</li>
 * @method void setType(string $Type) Set Template type. Available values:
<li>Preset: system-preset template;</li>
<li>Custom: custom template.</li>
 * @method string getName() Obtain Audio-visual quality rebirth template name.
 * @method void setName(string $Name) Set Audio-visual quality rebirth template name.
 * @method string getComment() Obtain Audio and video quality rebirth template description.
 * @method void setComment(string $Comment) Set Audio and video quality rebirth template description.
 * @method RebuildVideoInfo getRebuildVideoInfo() Obtain Audio-visual quality revival video control info.
 * @method void setRebuildVideoInfo(RebuildVideoInfo $RebuildVideoInfo) Set Audio-visual quality revival video control info.
 * @method RebuildAudioInfo getRebuildAudioInfo() Obtain Audio-visual quality revival audio control info.
 * @method void setRebuildAudioInfo(RebuildAudioInfo $RebuildAudioInfo) Set Audio-visual quality revival audio control info.
 * @method RebuildMediaTargetVideoStream getTargetVideoInfo() Obtain Output video control information.
 * @method void setTargetVideoInfo(RebuildMediaTargetVideoStream $TargetVideoInfo) Set Output video control information.
 * @method RebuildMediaTargetAudioStream getTargetAudioInfo() Obtain Output audio control information.
 * @method void setTargetAudioInfo(RebuildMediaTargetAudioStream $TargetAudioInfo) Set Output audio control information.
 * @method string getContainer() Obtain Muxing format. Available values: mp4, hls. mp4 is selected by default.
 * @method void setContainer(string $Container) Set Muxing format. Available values: mp4, hls. mp4 is selected by default.
 * @method integer getRemoveVideo() Obtain Indicates whether to remove video data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>
Default value: 0.
 * @method void setRemoveVideo(integer $RemoveVideo) Set Indicates whether to remove video data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>
Default value: 0.
 * @method integer getRemoveAudio() Obtain Indicates whether to remove audio data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>
Default value: 0.
 * @method void setRemoveAudio(integer $RemoveAudio) Set Indicates whether to remove audio data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>
Default value: 0.
 * @method string getCreateTime() Obtain Template creation time, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setCreateTime(string $CreateTime) Set Template creation time, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getUpdateTime() Obtain Template last modified time in ISO date format (https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setUpdateTime(string $UpdateTime) Set Template last modified time in ISO date format (https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class RebuildMediaTemplate extends AbstractModel
{
    /**
     * @var integer Audio and video quality rebirth template number.
     */
    public $Definition;

    /**
     * @var string Template type. Available values:
<li>Preset: system-preset template;</li>
<li>Custom: custom template.</li>
     */
    public $Type;

    /**
     * @var string Audio-visual quality rebirth template name.
     */
    public $Name;

    /**
     * @var string Audio and video quality rebirth template description.
     */
    public $Comment;

    /**
     * @var RebuildVideoInfo Audio-visual quality revival video control info.
     */
    public $RebuildVideoInfo;

    /**
     * @var RebuildAudioInfo Audio-visual quality revival audio control info.
     */
    public $RebuildAudioInfo;

    /**
     * @var RebuildMediaTargetVideoStream Output video control information.
     */
    public $TargetVideoInfo;

    /**
     * @var RebuildMediaTargetAudioStream Output audio control information.
     */
    public $TargetAudioInfo;

    /**
     * @var string Muxing format. Available values: mp4, hls. mp4 is selected by default.
     */
    public $Container;

    /**
     * @var integer Indicates whether to remove video data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>
Default value: 0.
     */
    public $RemoveVideo;

    /**
     * @var integer Indicates whether to remove audio data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>
Default value: 0.
     */
    public $RemoveAudio;

    /**
     * @var string Template creation time, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $CreateTime;

    /**
     * @var string Template last modified time in ISO date format (https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $UpdateTime;

    /**
     * @param integer $Definition Audio and video quality rebirth template number.
     * @param string $Type Template type. Available values:
<li>Preset: system-preset template;</li>
<li>Custom: custom template.</li>
     * @param string $Name Audio-visual quality rebirth template name.
     * @param string $Comment Audio and video quality rebirth template description.
     * @param RebuildVideoInfo $RebuildVideoInfo Audio-visual quality revival video control info.
     * @param RebuildAudioInfo $RebuildAudioInfo Audio-visual quality revival audio control info.
     * @param RebuildMediaTargetVideoStream $TargetVideoInfo Output video control information.
     * @param RebuildMediaTargetAudioStream $TargetAudioInfo Output audio control information.
     * @param string $Container Muxing format. Available values: mp4, hls. mp4 is selected by default.
     * @param integer $RemoveVideo Indicates whether to remove video data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>
Default value: 0.
     * @param integer $RemoveAudio Indicates whether to remove audio data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>
Default value: 0.
     * @param string $CreateTime Template creation time, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $UpdateTime Template last modified time in ISO date format (https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
