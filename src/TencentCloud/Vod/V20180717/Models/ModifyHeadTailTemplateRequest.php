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
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getName() Obtain Template name. Length limit: 64 characters. Leave it empty to skip modification.
 * @method void setName(string $Name) Set Template name. Length limit: 64 characters. Leave it empty to skip modification.
 * @method string getComment() Obtain Template description, with a length limit of 256 characters. Not passing it means no modification, while passing an empty value means clearing it.
 * @method void setComment(string $Comment) Set Template description, with a length limit of 256 characters. Not passing it means no modification, while passing an empty value means clearing it.
 * @method array getHeadCandidateSet() Obtain Opening Credits Candidate List. Fill in the FileId of the video. During transcoding, the opening scene with the closest aspect ratio to the main content will be automatically selected (identical aspect ratio gives precedence to candidates positioned towards the front). Supports up to 5 title candidates. Not passing represents no modification, passing an empty array represents clearing.
 * @method void setHeadCandidateSet(array $HeadCandidateSet) Set Opening Credits Candidate List. Fill in the FileId of the video. During transcoding, the opening scene with the closest aspect ratio to the main content will be automatically selected (identical aspect ratio gives precedence to candidates positioned towards the front). Supports up to 5 title candidates. Not passing represents no modification, passing an empty array represents clearing.
 * @method array getTailCandidateSet() Obtain Ending candidate list. Fill in the FileId of the video. During transcoding, the system will automatically select the ending with the aspect ratio closest to the main content (if identical, the candidate positioned towards the front takes precedence). Supports up to 5 title candidates. Omission means no modification, while an empty array means clearing.
 * @method void setTailCandidateSet(array $TailCandidateSet) Set Ending candidate list. Fill in the FileId of the video. During transcoding, the system will automatically select the ending with the aspect ratio closest to the main content (if identical, the candidate positioned towards the front takes precedence). Supports up to 5 title candidates. Omission means no modification, while an empty array means clearing.
 * @method string getFillType() Obtain Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling mode:
<li> stretch: Stretch each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched";</li>
<li> gauss: Gaussian blur, maintain video aspect ratio, use Gaussian blur for the remaining edge part;</li>
<li> white: Leave blank, maintain video aspect ratio, edge remainder filled with white;</li>
<li>Black: Keep black, maintain video aspect ratio, edges filled with black.</li>
The default value is no modification.
 * @method void setFillType(string $FillType) Set Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling mode:
<li> stretch: Stretch each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched";</li>
<li> gauss: Gaussian blur, maintain video aspect ratio, use Gaussian blur for the remaining edge part;</li>
<li> white: Leave blank, maintain video aspect ratio, edge remainder filled with white;</li>
<li>Black: Keep black, maintain video aspect ratio, edges filled with black.</li>
The default value is no modification.
 */
class ModifyHeadTailTemplateRequest extends AbstractModel
{
    /**
     * @var integer Opening and ending template ID.
     */
    public $Definition;

    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var string Template name. Length limit: 64 characters. Leave it empty to skip modification.
     */
    public $Name;

    /**
     * @var string Template description, with a length limit of 256 characters. Not passing it means no modification, while passing an empty value means clearing it.
     */
    public $Comment;

    /**
     * @var array Opening Credits Candidate List. Fill in the FileId of the video. During transcoding, the opening scene with the closest aspect ratio to the main content will be automatically selected (identical aspect ratio gives precedence to candidates positioned towards the front). Supports up to 5 title candidates. Not passing represents no modification, passing an empty array represents clearing.
     */
    public $HeadCandidateSet;

    /**
     * @var array Ending candidate list. Fill in the FileId of the video. During transcoding, the system will automatically select the ending with the aspect ratio closest to the main content (if identical, the candidate positioned towards the front takes precedence). Supports up to 5 title candidates. Omission means no modification, while an empty array means clearing.
     */
    public $TailCandidateSet;

    /**
     * @var string Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling mode:
<li> stretch: Stretch each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched";</li>
<li> gauss: Gaussian blur, maintain video aspect ratio, use Gaussian blur for the remaining edge part;</li>
<li> white: Leave blank, maintain video aspect ratio, edge remainder filled with white;</li>
<li>Black: Keep black, maintain video aspect ratio, edges filled with black.</li>
The default value is no modification.
     */
    public $FillType;

    /**
     * @param integer $Definition Opening and ending template ID.
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $Name Template name. Length limit: 64 characters. Leave it empty to skip modification.
     * @param string $Comment Template description, with a length limit of 256 characters. Not passing it means no modification, while passing an empty value means clearing it.
     * @param array $HeadCandidateSet Opening Credits Candidate List. Fill in the FileId of the video. During transcoding, the opening scene with the closest aspect ratio to the main content will be automatically selected (identical aspect ratio gives precedence to candidates positioned towards the front). Supports up to 5 title candidates. Not passing represents no modification, passing an empty array represents clearing.
     * @param array $TailCandidateSet Ending candidate list. Fill in the FileId of the video. During transcoding, the system will automatically select the ending with the aspect ratio closest to the main content (if identical, the candidate positioned towards the front takes precedence). Supports up to 5 title candidates. Omission means no modification, while an empty array means clearing.
     * @param string $FillType Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling mode:
<li> stretch: Stretch each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched";</li>
<li> gauss: Gaussian blur, maintain video aspect ratio, use Gaussian blur for the remaining edge part;</li>
<li> white: Leave blank, maintain video aspect ratio, edge remainder filled with white;</li>
<li>Black: Keep black, maintain video aspect ratio, edges filled with black.</li>
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
