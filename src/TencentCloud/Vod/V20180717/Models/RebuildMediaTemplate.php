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
 * The details of a remaster template.
 *
 * @method integer getDefinition() Obtain The remaster template ID.
 * @method void setDefinition(integer $Definition) Set The remaster template ID.
 * @method string getType() Obtain The template type. Valid values:
<li>`Preset`</li>
<li>`Custom`</li>
 * @method void setType(string $Type) Set The template type. Valid values:
<li>`Preset`</li>
<li>`Custom`</li>
 * @method string getName() Obtain The remaster template name.
 * @method void setName(string $Name) Set The remaster template name.
 * @method string getComment() Obtain The template description.
 * @method void setComment(string $Comment) Set The template description.
 * @method RebuildVideoInfo getRebuildVideoInfo() Obtain The video remaster parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRebuildVideoInfo(RebuildVideoInfo $RebuildVideoInfo) Set The video remaster parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method RebuildAudioInfo getRebuildAudioInfo() Obtain The audio remaster parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRebuildAudioInfo(RebuildAudioInfo $RebuildAudioInfo) Set The audio remaster parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method RebuildMediaTargetVideoStream getTargetVideoInfo() Obtain The output video parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetVideoInfo(RebuildMediaTargetVideoStream $TargetVideoInfo) Set The output video parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method RebuildMediaTargetAudioStream getTargetAudioInfo() Obtain The output audio parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetAudioInfo(RebuildMediaTargetAudioStream $TargetAudioInfo) Set The output audio parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getContainer() Obtain The output file format. Valid values: `mp4` (default), `hls`.
 * @method void setContainer(string $Container) Set The output file format. Valid values: `mp4` (default), `hls`.
 * @method integer getRemoveVideo() Obtain Whether to remove video data. Valid values:
<li>`0`: No</li>
<li>`1`: Yes</li>
Default value: 0.
 * @method void setRemoveVideo(integer $RemoveVideo) Set Whether to remove video data. Valid values:
<li>`0`: No</li>
<li>`1`: Yes</li>
Default value: 0.
 * @method integer getRemoveAudio() Obtain Whether to remove audio data. Valid values:
<li>`0`: No</li>
<li>`1`: Yes</li>
Default value: 0.
 * @method void setRemoveAudio(integer $RemoveAudio) Set Whether to remove audio data. Valid values:
<li>`0`: No</li>
<li>`1`: Yes</li>
Default value: 0.
 * @method string getCreateTime() Obtain The template creation time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setCreateTime(string $CreateTime) Set The template creation time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getUpdateTime() Obtain The last updated time of the template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setUpdateTime(string $UpdateTime) Set The last updated time of the template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class RebuildMediaTemplate extends AbstractModel
{
    /**
     * @var integer The remaster template ID.
     */
    public $Definition;

    /**
     * @var string The template type. Valid values:
<li>`Preset`</li>
<li>`Custom`</li>
     */
    public $Type;

    /**
     * @var string The remaster template name.
     */
    public $Name;

    /**
     * @var string The template description.
     */
    public $Comment;

    /**
     * @var RebuildVideoInfo The video remaster parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RebuildVideoInfo;

    /**
     * @var RebuildAudioInfo The audio remaster parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RebuildAudioInfo;

    /**
     * @var RebuildMediaTargetVideoStream The output video parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetVideoInfo;

    /**
     * @var RebuildMediaTargetAudioStream The output audio parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetAudioInfo;

    /**
     * @var string The output file format. Valid values: `mp4` (default), `hls`.
     */
    public $Container;

    /**
     * @var integer Whether to remove video data. Valid values:
<li>`0`: No</li>
<li>`1`: Yes</li>
Default value: 0.
     */
    public $RemoveVideo;

    /**
     * @var integer Whether to remove audio data. Valid values:
<li>`0`: No</li>
<li>`1`: Yes</li>
Default value: 0.
     */
    public $RemoveAudio;

    /**
     * @var string The template creation time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $CreateTime;

    /**
     * @var string The last updated time of the template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $UpdateTime;

    /**
     * @param integer $Definition The remaster template ID.
     * @param string $Type The template type. Valid values:
<li>`Preset`</li>
<li>`Custom`</li>
     * @param string $Name The remaster template name.
     * @param string $Comment The template description.
     * @param RebuildVideoInfo $RebuildVideoInfo The video remaster parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param RebuildAudioInfo $RebuildAudioInfo The audio remaster parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param RebuildMediaTargetVideoStream $TargetVideoInfo The output video parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param RebuildMediaTargetAudioStream $TargetAudioInfo The output audio parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Container The output file format. Valid values: `mp4` (default), `hls`.
     * @param integer $RemoveVideo Whether to remove video data. Valid values:
<li>`0`: No</li>
<li>`1`: Yes</li>
Default value: 0.
     * @param integer $RemoveAudio Whether to remove audio data. Valid values:
<li>`0`: No</li>
<li>`1`: Yes</li>
Default value: 0.
     * @param string $CreateTime The template creation time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $UpdateTime The last updated time of the template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
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
