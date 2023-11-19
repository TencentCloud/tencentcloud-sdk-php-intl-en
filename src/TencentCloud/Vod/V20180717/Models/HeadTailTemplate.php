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
 * Head Tail Template Details
 *
 * @method integer getDefinition() Obtain Head Tail Template Number.
 * @method void setDefinition(integer $Definition) Set Head Tail Template Number.
 * @method string getName() Obtain Template name, supports up to 64 characters.
 * @method void setName(string $Name) Set Template name, supports up to 64 characters.
 * @method string getComment() Obtain Template description, up to 256 characters.
 * @method void setComment(string $Comment) Set Template description, up to 256 characters.
 * @method array getHeadCandidateSet() Obtain Title candidate list. When using it, the one closest to the resolution of the feature film will be selected. When the same candidate exists, the first one will be selected. A maximum of 5 are supported.
 * @method void setHeadCandidateSet(array $HeadCandidateSet) Set Title candidate list. When using it, the one closest to the resolution of the feature film will be selected. When the same candidate exists, the first one will be selected. A maximum of 5 are supported.
 * @method array getTailCandidateSet() Obtain Ending candidate list. When using it, the one closest to the resolution of the feature film will be selected. When the same candidate exists, the first one will be selected. A maximum of 5 are supported.
 * @method void setTailCandidateSet(array $TailCandidateSet) Set Ending candidate list. When using it, the one closest to the resolution of the feature film will be selected. When the same candidate exists, the first one will be selected. A maximum of 5 are supported.
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
 * @method string getCreateTime() Obtain Template creation time, using [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
 * @method void setCreateTime(string $CreateTime) Set Template creation time, using [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
 * @method string getUpdateTime() Obtain The last modification time of the template, using [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
 * @method void setUpdateTime(string $UpdateTime) Set The last modification time of the template, using [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
 */
class HeadTailTemplate extends AbstractModel
{
    /**
     * @var integer Head Tail Template Number.
     */
    public $Definition;

    /**
     * @var string Template name, supports up to 64 characters.
     */
    public $Name;

    /**
     * @var string Template description, up to 256 characters.
     */
    public $Comment;

    /**
     * @var array Title candidate list. When using it, the one closest to the resolution of the feature film will be selected. When the same candidate exists, the first one will be selected. A maximum of 5 are supported.
     */
    public $HeadCandidateSet;

    /**
     * @var array Ending candidate list. When using it, the one closest to the resolution of the feature film will be selected. When the same candidate exists, the first one will be selected. A maximum of 5 are supported.
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
     * @var string Template creation time, using [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
     */
    public $CreateTime;

    /**
     * @var string The last modification time of the template, using [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
     */
    public $UpdateTime;

    /**
     * @param integer $Definition Head Tail Template Number.
     * @param string $Name Template name, supports up to 64 characters.
     * @param string $Comment Template description, up to 256 characters.
     * @param array $HeadCandidateSet Title candidate list. When using it, the one closest to the resolution of the feature film will be selected. When the same candidate exists, the first one will be selected. A maximum of 5 are supported.
     * @param array $TailCandidateSet Ending candidate list. When using it, the one closest to the resolution of the feature film will be selected. When the same candidate exists, the first one will be selected. A maximum of 5 are supported.
     * @param string $FillType Padding method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the transcoding processing method is "padding". Optional filling method:
<li> stretch: stretch, stretch each frame to fill the entire screen, which may cause the transcoded video to be "squashed" or "stretched";</li> 
<li> gauss: Gaussian blur, keep the video aspect ratio unchanged, use Gaussian blur for the remaining edges; </li>
<li> white: leave blank, keep the video aspect ratio unchanged, use the remaining edges for the edge Use white filling; </li>
<li> black: Leave black, keep the video aspect ratio unchanged, and fill the remaining edges with black. </li>
Default value: stretch.
     * @param string $CreateTime Template creation time, using [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
     * @param string $UpdateTime The last modification time of the template, using [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
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
