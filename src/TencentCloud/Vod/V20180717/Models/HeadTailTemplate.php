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
 * Description of the title and trailer template
 *
 * @method integer getDefinition() Obtain Opening and ending template ID.
 * @method void setDefinition(integer $Definition) Set Opening and ending template ID.
 * @method string getName() Obtain Template name. Supports up to 64 characters.
 * @method void setName(string $Name) Set Template name. Supports up to 64 characters.
 * @method string getComment() Obtain Template description. Supports up to 256 characters.
 * @method void setComment(string $Comment) Set Template description. Supports up to 256 characters.
 * @method array getHeadCandidateSet() Obtain Opening candidate list. When used, the one closest to the main content resolution is selected. If identical candidates exist, the first one is used. Supports up to 5 candidates.
 * @method void setHeadCandidateSet(array $HeadCandidateSet) Set Opening candidate list. When used, the one closest to the main content resolution is selected. If identical candidates exist, the first one is used. Supports up to 5 candidates.
 * @method array getTailCandidateSet() Obtain Ending candidate list. When used, the one closest to the main content resolution is selected. If identical candidates exist, the first one is used. Supports up to 5 candidates.
 * @method void setTailCandidateSet(array $TailCandidateSet) Set Ending candidate list. When used, the one closest to the main content resolution is selected. If identical candidates exist, the first one is used. Supports up to 5 candidates.
 * @method string getFillType() Obtain Filling method. When the aspect ratio of the video stream configuration width and height parameters is inconsistent with that of the original video, the processing method for transcoding is "padding". Optional filling methods:
<li> stretch: Stretch each frame to fill the entire screen, which may cause the transcoded video to be "squashed" or "stretched";</li>
<li> gauss: Gaussian blur, maintain video aspect ratio, and apply Gaussian blur to the remaining edge part;</li>
<li> white: leave blank, maintain video aspect ratio, and fill the remaining edges with white;</li>
<li> black: Fill with black. Maintain the video aspect ratio and fill the remaining edges with black.</li>
Default value: stretch.
 * @method void setFillType(string $FillType) Set Filling method. When the aspect ratio of the video stream configuration width and height parameters is inconsistent with that of the original video, the processing method for transcoding is "padding". Optional filling methods:
<li> stretch: Stretch each frame to fill the entire screen, which may cause the transcoded video to be "squashed" or "stretched";</li>
<li> gauss: Gaussian blur, maintain video aspect ratio, and apply Gaussian blur to the remaining edge part;</li>
<li> white: leave blank, maintain video aspect ratio, and fill the remaining edges with white;</li>
<li> black: Fill with black. Maintain the video aspect ratio and fill the remaining edges with black.</li>
Default value: stretch.
 * @method string getCreateTime() Obtain Template creation time in [ISO datetime format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setCreateTime(string $CreateTime) Set Template creation time in [ISO datetime format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getUpdateTime() Obtain Template last modified time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setUpdateTime(string $UpdateTime) Set Template last modified time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class HeadTailTemplate extends AbstractModel
{
    /**
     * @var integer Opening and ending template ID.
     */
    public $Definition;

    /**
     * @var string Template name. Supports up to 64 characters.
     */
    public $Name;

    /**
     * @var string Template description. Supports up to 256 characters.
     */
    public $Comment;

    /**
     * @var array Opening candidate list. When used, the one closest to the main content resolution is selected. If identical candidates exist, the first one is used. Supports up to 5 candidates.
     */
    public $HeadCandidateSet;

    /**
     * @var array Ending candidate list. When used, the one closest to the main content resolution is selected. If identical candidates exist, the first one is used. Supports up to 5 candidates.
     */
    public $TailCandidateSet;

    /**
     * @var string Filling method. When the aspect ratio of the video stream configuration width and height parameters is inconsistent with that of the original video, the processing method for transcoding is "padding". Optional filling methods:
<li> stretch: Stretch each frame to fill the entire screen, which may cause the transcoded video to be "squashed" or "stretched";</li>
<li> gauss: Gaussian blur, maintain video aspect ratio, and apply Gaussian blur to the remaining edge part;</li>
<li> white: leave blank, maintain video aspect ratio, and fill the remaining edges with white;</li>
<li> black: Fill with black. Maintain the video aspect ratio and fill the remaining edges with black.</li>
Default value: stretch.
     */
    public $FillType;

    /**
     * @var string Template creation time in [ISO datetime format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $CreateTime;

    /**
     * @var string Template last modified time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $UpdateTime;

    /**
     * @param integer $Definition Opening and ending template ID.
     * @param string $Name Template name. Supports up to 64 characters.
     * @param string $Comment Template description. Supports up to 256 characters.
     * @param array $HeadCandidateSet Opening candidate list. When used, the one closest to the main content resolution is selected. If identical candidates exist, the first one is used. Supports up to 5 candidates.
     * @param array $TailCandidateSet Ending candidate list. When used, the one closest to the main content resolution is selected. If identical candidates exist, the first one is used. Supports up to 5 candidates.
     * @param string $FillType Filling method. When the aspect ratio of the video stream configuration width and height parameters is inconsistent with that of the original video, the processing method for transcoding is "padding". Optional filling methods:
<li> stretch: Stretch each frame to fill the entire screen, which may cause the transcoded video to be "squashed" or "stretched";</li>
<li> gauss: Gaussian blur, maintain video aspect ratio, and apply Gaussian blur to the remaining edge part;</li>
<li> white: leave blank, maintain video aspect ratio, and fill the remaining edges with white;</li>
<li> black: Fill with black. Maintain the video aspect ratio and fill the remaining edges with black.</li>
Default value: stretch.
     * @param string $CreateTime Template creation time in [ISO datetime format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $UpdateTime Template last modified time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
