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
 * CreateHeadTailTemplate request structure.
 *
 * @method string getName() Obtain Template name, length limited to 64 characters.
 * @method void setName(string $Name) Set Template name, length limited to 64 characters.
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
 * @method string getComment() Obtain Template description information. The length cannot exceed 256 characters.
 * @method void setComment(string $Comment) Set Template description information. The length cannot exceed 256 characters.
 * @method array getHeadCandidateSet() Obtain Opening candidate list. Fill in the FileId of the video. During transcoding, the opening with the aspect ratio closest to the main content is automatically selected (if the aspect ratios are identical, candidates positioned towards the front take precedence). Supports up to 5 title candidates.
 * @method void setHeadCandidateSet(array $HeadCandidateSet) Set Opening candidate list. Fill in the FileId of the video. During transcoding, the opening with the aspect ratio closest to the main content is automatically selected (if the aspect ratios are identical, candidates positioned towards the front take precedence). Supports up to 5 title candidates.
 * @method array getTailCandidateSet() Obtain Ending candidate list. Fill in the FileId of the video. During transcoding, the ending with the aspect ratio closest to that of the main content is automatically selected (if the aspect ratios are identical, candidates positioned towards the front take precedence). Supports up to 5 candidate endings.
 * @method void setTailCandidateSet(array $TailCandidateSet) Set Ending candidate list. Fill in the FileId of the video. During transcoding, the ending with the aspect ratio closest to that of the main content is automatically selected (if the aspect ratios are identical, candidates positioned towards the front take precedence). Supports up to 5 candidate endings.
 * @method string getFillType() Obtain Filling method. When the width and height parameters in the video stream configuration are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling methods:
<li> stretch: stretches each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched";</li>
<li> gauss: Gaussian blur, maintain video aspect ratio, and apply Gaussian blur to the remaining edge part;</li>
<li> white: leave blank, maintain video aspect ratio, edge remainder filled with white;</li>
<li> black: black edges. The video aspect ratio remains unchanged, and the remaining edges are filled with black.</li>
Default value: stretch.
 * @method void setFillType(string $FillType) Set Filling method. When the width and height parameters in the video stream configuration are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling methods:
<li> stretch: stretches each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched";</li>
<li> gauss: Gaussian blur, maintain video aspect ratio, and apply Gaussian blur to the remaining edge part;</li>
<li> white: leave blank, maintain video aspect ratio, edge remainder filled with white;</li>
<li> black: black edges. The video aspect ratio remains unchanged, and the remaining edges are filled with black.</li>
Default value: stretch.
 */
class CreateHeadTailTemplateRequest extends AbstractModel
{
    /**
     * @var string Template name, length limited to 64 characters.
     */
    public $Name;

    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
     */
    public $SubAppId;

    /**
     * @var string Template description information. The length cannot exceed 256 characters.
     */
    public $Comment;

    /**
     * @var array Opening candidate list. Fill in the FileId of the video. During transcoding, the opening with the aspect ratio closest to the main content is automatically selected (if the aspect ratios are identical, candidates positioned towards the front take precedence). Supports up to 5 title candidates.
     */
    public $HeadCandidateSet;

    /**
     * @var array Ending candidate list. Fill in the FileId of the video. During transcoding, the ending with the aspect ratio closest to that of the main content is automatically selected (if the aspect ratios are identical, candidates positioned towards the front take precedence). Supports up to 5 candidate endings.
     */
    public $TailCandidateSet;

    /**
     * @var string Filling method. When the width and height parameters in the video stream configuration are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling methods:
<li> stretch: stretches each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched";</li>
<li> gauss: Gaussian blur, maintain video aspect ratio, and apply Gaussian blur to the remaining edge part;</li>
<li> white: leave blank, maintain video aspect ratio, edge remainder filled with white;</li>
<li> black: black edges. The video aspect ratio remains unchanged, and the remaining edges are filled with black.</li>
Default value: stretch.
     */
    public $FillType;

    /**
     * @param string $Name Template name, length limited to 64 characters.
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
     * @param string $Comment Template description information. The length cannot exceed 256 characters.
     * @param array $HeadCandidateSet Opening candidate list. Fill in the FileId of the video. During transcoding, the opening with the aspect ratio closest to the main content is automatically selected (if the aspect ratios are identical, candidates positioned towards the front take precedence). Supports up to 5 title candidates.
     * @param array $TailCandidateSet Ending candidate list. Fill in the FileId of the video. During transcoding, the ending with the aspect ratio closest to that of the main content is automatically selected (if the aspect ratios are identical, candidates positioned towards the front take precedence). Supports up to 5 candidate endings.
     * @param string $FillType Filling method. When the width and height parameters in the video stream configuration are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling methods:
<li> stretch: stretches each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched";</li>
<li> gauss: Gaussian blur, maintain video aspect ratio, and apply Gaussian blur to the remaining edge part;</li>
<li> white: leave blank, maintain video aspect ratio, edge remainder filled with white;</li>
<li> black: black edges. The video aspect ratio remains unchanged, and the remaining edges are filled with black.</li>
Default value: stretch.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("HeadCandidateSet",$param) and $param["HeadCandidateSet"] !== null) {
            $this->HeadCandidateSet = $param["HeadCandidateSet"];
        }

        if (array_key_exists("TailCandidateSet",$param) and $param["TailCandidateSet"] !== null) {
            $this->TailCandidateSet = $param["TailCandidateSet"];
        }

        if (array_key_exists("FillType",$param) and $param["FillType"] !== null) {
            $this->FillType = $param["FillType"];
        }
    }
}
