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
 * ModifyHeadTailTemplate request structure.
 *
 * @method integer getDefinition() Obtain Opening and ending template ID.
 * @method void setDefinition(integer $Definition) Set Opening and ending template ID.
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD from December 25, 2023, if they access resources in VOD applications (whether the default application or a newly created application), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD from December 25, 2023, if they access resources in VOD applications (whether the default application or a newly created application), they must fill in this field with the application ID.</b>
 * @method string getName() Obtain Template name. Length limited to 64 characters. If not passed, it represents no modification.
 * @method void setName(string $Name) Set Template name. Length limited to 64 characters. If not passed, it represents no modification.
 * @method string getComment() Obtain Template description. Length limited to 256 characters. If not passed, no modification is made. If passed empty, the description is cleared.
 * @method void setComment(string $Comment) Set Template description. Length limited to 256 characters. If not passed, no modification is made. If passed empty, the description is cleared.
 * @method array getHeadCandidateSet() Obtain Opening candidate list. Fill in the FileId of the video. During transcoding, the opening scene with the aspect ratio closest to that of the main content is automatically selected. If the aspect ratios are identical, the candidate positioned towards the front takes precedence. A maximum of 5 candidate opening scenes is supported. If not passed, no modification is made. An empty array clears the list.
 * @method void setHeadCandidateSet(array $HeadCandidateSet) Set Opening candidate list. Fill in the FileId of the video. During transcoding, the opening scene with the aspect ratio closest to that of the main content is automatically selected. If the aspect ratios are identical, the candidate positioned towards the front takes precedence. A maximum of 5 candidate opening scenes is supported. If not passed, no modification is made. An empty array clears the list.
 * @method array getTailCandidateSet() Obtain Ending candidate list. Fill in the FileId of the video. During transcoding, the ending with the aspect ratio closest to that of the main content is automatically selected. If the aspect ratios are the same, candidates positioned towards the front take precedence. A maximum of 5 title candidates is supported. If not passed, no modification is made. An empty array clears the list.
 * @method void setTailCandidateSet(array $TailCandidateSet) Set Ending candidate list. Fill in the FileId of the video. During transcoding, the ending with the aspect ratio closest to that of the main content is automatically selected. If the aspect ratios are the same, candidates positioned towards the front take precedence. A maximum of 5 title candidates is supported. If not passed, no modification is made. An empty array clears the list.
 * @method string getFillType() Obtain Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling methods:
<li> stretch: stretch each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched";</li>
<li> gauss: Gaussian blur, maintain video aspect ratio, and apply Gaussian blur to the remaining edge part;</li>
<li> white: Leave blank, maintain video aspect ratio, and fill the remaining edges with white;</li>
<li> black: Fill with black. Maintain the video aspect ratio and fill the remaining edges with black.</li>
The default value is no modification.
 * @method void setFillType(string $FillType) Set Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling methods:
<li> stretch: stretch each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched";</li>
<li> gauss: Gaussian blur, maintain video aspect ratio, and apply Gaussian blur to the remaining edge part;</li>
<li> white: Leave blank, maintain video aspect ratio, and fill the remaining edges with white;</li>
<li> black: Fill with black. Maintain the video aspect ratio and fill the remaining edges with black.</li>
The default value is no modification.
 */
class ModifyHeadTailTemplateRequest extends AbstractModel
{
    /**
     * @var integer Opening and ending template ID.
     */
    public $Definition;

    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD from December 25, 2023, if they access resources in VOD applications (whether the default application or a newly created application), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var string Template name. Length limited to 64 characters. If not passed, it represents no modification.
     */
    public $Name;

    /**
     * @var string Template description. Length limited to 256 characters. If not passed, no modification is made. If passed empty, the description is cleared.
     */
    public $Comment;

    /**
     * @var array Opening candidate list. Fill in the FileId of the video. During transcoding, the opening scene with the aspect ratio closest to that of the main content is automatically selected. If the aspect ratios are identical, the candidate positioned towards the front takes precedence. A maximum of 5 candidate opening scenes is supported. If not passed, no modification is made. An empty array clears the list.
     */
    public $HeadCandidateSet;

    /**
     * @var array Ending candidate list. Fill in the FileId of the video. During transcoding, the ending with the aspect ratio closest to that of the main content is automatically selected. If the aspect ratios are the same, candidates positioned towards the front take precedence. A maximum of 5 title candidates is supported. If not passed, no modification is made. An empty array clears the list.
     */
    public $TailCandidateSet;

    /**
     * @var string Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling methods:
<li> stretch: stretch each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched";</li>
<li> gauss: Gaussian blur, maintain video aspect ratio, and apply Gaussian blur to the remaining edge part;</li>
<li> white: Leave blank, maintain video aspect ratio, and fill the remaining edges with white;</li>
<li> black: Fill with black. Maintain the video aspect ratio and fill the remaining edges with black.</li>
The default value is no modification.
     */
    public $FillType;

    /**
     * @param integer $Definition Opening and ending template ID.
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD from December 25, 2023, if they access resources in VOD applications (whether the default application or a newly created application), they must fill in this field with the application ID.</b>
     * @param string $Name Template name. Length limited to 64 characters. If not passed, it represents no modification.
     * @param string $Comment Template description. Length limited to 256 characters. If not passed, no modification is made. If passed empty, the description is cleared.
     * @param array $HeadCandidateSet Opening candidate list. Fill in the FileId of the video. During transcoding, the opening scene with the aspect ratio closest to that of the main content is automatically selected. If the aspect ratios are identical, the candidate positioned towards the front takes precedence. A maximum of 5 candidate opening scenes is supported. If not passed, no modification is made. An empty array clears the list.
     * @param array $TailCandidateSet Ending candidate list. Fill in the FileId of the video. During transcoding, the ending with the aspect ratio closest to that of the main content is automatically selected. If the aspect ratios are the same, candidates positioned towards the front take precedence. A maximum of 5 title candidates is supported. If not passed, no modification is made. An empty array clears the list.
     * @param string $FillType Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling methods:
<li> stretch: stretch each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched";</li>
<li> gauss: Gaussian blur, maintain video aspect ratio, and apply Gaussian blur to the remaining edge part;</li>
<li> white: Leave blank, maintain video aspect ratio, and fill the remaining edges with white;</li>
<li> black: Fill with black. Maintain the video aspect ratio and fill the remaining edges with black.</li>
The default value is no modification.
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
