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
 * CreateHeadTailTemplate request structure.
 *
 * @method string getName() Obtain Template name, length limit is 64 characters.
 * @method void setName(string $Name) Set Template name, length limit is 64 characters.
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method string getComment() Obtain Template description information, length limit is 256 characters.
 * @method void setComment(string $Comment) Set Template description information, length limit is 256 characters.
 * @method array getHeadCandidateSet() Obtain Title candidate list, fill in the FileId of the video. When transcoding, the title closest to the aspect ratio of the feature film will be automatically selected (when the aspect ratio is the same, the front candidate will take precedence). Supports up to 5 candidate titles.
 * @method void setHeadCandidateSet(array $HeadCandidateSet) Set Title candidate list, fill in the FileId of the video. When transcoding, the title closest to the aspect ratio of the feature film will be automatically selected (when the aspect ratio is the same, the front candidate will take precedence). Supports up to 5 candidate titles.
 * @method array getTailCandidateSet() Obtain Ending candidate list, fill in the FileId of the video. When transcoding, the ending with the aspect ratio closest to the feature film will be automatically selected (when the aspect ratio is the same, the front candidate will take precedence). Supports up to 5 candidate endings.
 * @method void setTailCandidateSet(array $TailCandidateSet) Set Ending candidate list, fill in the FileId of the video. When transcoding, the ending with the aspect ratio closest to the feature film will be automatically selected (when the aspect ratio is the same, the front candidate will take precedence). Supports up to 5 candidate endings.
 * @method string getFillType() Obtain Padding method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the transcoding processing method is "padding". Optional filling method:
<li> stretch: stretch, stretch each frame to fill the entire screen, which may cause the transcoded video to be "squashed" or "stretched";</li> 
<li> gauss: Gaussian blur, keep the video aspect ratio unchanged, use Gaussian blur for the remaining edges; </li>
<li> white: leave blank, keep the video aspect ratio unchanged, use the remaining edges for the edge Use white filling; </li>
<li> black: Leave black, keep the video aspect ratio unchanged, and fill the remaining edges with black. </li>
Default value: stretch.
 * @method void setFillType(string $FillType) Set Padding method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the transcoding processing method is "padding". Optional filling method:
<li> stretch: stretch, stretch each frame to fill the entire screen, which may cause the transcoded video to be "squashed" or "stretched";</li> 
<li> gauss: Gaussian blur, keep the video aspect ratio unchanged, use Gaussian blur for the remaining edges; </li>
<li> white: leave blank, keep the video aspect ratio unchanged, use the remaining edges for the edge Use white filling; </li>
<li> black: Leave black, keep the video aspect ratio unchanged, and fill the remaining edges with black. </li>
Default value: stretch.
 */
class CreateHeadTailTemplateRequest extends AbstractModel
{
    /**
     * @var string Template name, length limit is 64 characters.
     */
    public $Name;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var string Template description information, length limit is 256 characters.
     */
    public $Comment;

    /**
     * @var array Title candidate list, fill in the FileId of the video. When transcoding, the title closest to the aspect ratio of the feature film will be automatically selected (when the aspect ratio is the same, the front candidate will take precedence). Supports up to 5 candidate titles.
     */
    public $HeadCandidateSet;

    /**
     * @var array Ending candidate list, fill in the FileId of the video. When transcoding, the ending with the aspect ratio closest to the feature film will be automatically selected (when the aspect ratio is the same, the front candidate will take precedence). Supports up to 5 candidate endings.
     */
    public $TailCandidateSet;

    /**
     * @var string Padding method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the transcoding processing method is "padding". Optional filling method:
<li> stretch: stretch, stretch each frame to fill the entire screen, which may cause the transcoded video to be "squashed" or "stretched";</li> 
<li> gauss: Gaussian blur, keep the video aspect ratio unchanged, use Gaussian blur for the remaining edges; </li>
<li> white: leave blank, keep the video aspect ratio unchanged, use the remaining edges for the edge Use white filling; </li>
<li> black: Leave black, keep the video aspect ratio unchanged, and fill the remaining edges with black. </li>
Default value: stretch.
     */
    public $FillType;

    /**
     * @param string $Name Template name, length limit is 64 characters.
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param string $Comment Template description information, length limit is 256 characters.
     * @param array $HeadCandidateSet Title candidate list, fill in the FileId of the video. When transcoding, the title closest to the aspect ratio of the feature film will be automatically selected (when the aspect ratio is the same, the front candidate will take precedence). Supports up to 5 candidate titles.
     * @param array $TailCandidateSet Ending candidate list, fill in the FileId of the video. When transcoding, the ending with the aspect ratio closest to the feature film will be automatically selected (when the aspect ratio is the same, the front candidate will take precedence). Supports up to 5 candidate endings.
     * @param string $FillType Padding method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the transcoding processing method is "padding". Optional filling method:
<li> stretch: stretch, stretch each frame to fill the entire screen, which may cause the transcoded video to be "squashed" or "stretched";</li> 
<li> gauss: Gaussian blur, keep the video aspect ratio unchanged, use Gaussian blur for the remaining edges; </li>
<li> white: leave blank, keep the video aspect ratio unchanged, use the remaining edges for the edge Use white filling; </li>
<li> black: Leave black, keep the video aspect ratio unchanged, and fill the remaining edges with black. </li>
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
