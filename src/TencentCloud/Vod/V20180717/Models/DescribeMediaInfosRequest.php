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
 * DescribeMediaInfos request structure.
 *
 * @method array getFileIds() Obtain <p>Media file ID list. N starts from 0 with a maximum of 19.</p>
 * @method void setFileIds(array $FileIds) Set <p>Media file ID list. N starts from 0 with a maximum of 19.</p>
 * @method integer getSubAppId() Obtain <p><b>VOD <a href="https://www.tencentcloud.com/document/product/266/33987">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>VOD <a href="https://www.tencentcloud.com/document/product/266/33987">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
 * @method array getFilters() Obtain <p>Information to be returned for all specified media files. Multiple information can be specified simultaneously, with N starting from 0. If this field is not filled in, default return all information. Options:</p><li>basicInfo (video basic information).</li><li>metaData (video metadata).</li><li>transcodeInfo (video transcoding result information).</li><li>animatedGraphicsInfo (video motion graphic result information).</li><li>imageSpriteInfo (video thumbnail information).</li><li>snapshotByTimeOffsetInfo (video screenshot by specified time point).</li><li>sampleSnapshotInfo (sampling screenshot information).</li><li>keyFrameDescInfo (Dotting Information).</li><li>adaptiveDynamicStreamingInfo (Adaptive Bitrate Streaming information).</li><li>miniProgramReviewInfo (miniProgramReviewInfo).</li><li>subtitleInfo (subtitle information).</li><li>reviewInfo (review information).</li><li>mpsAiMediaInfo (Intelligent Media Assets information).</li>
 * @method void setFilters(array $Filters) Set <p>Information to be returned for all specified media files. Multiple information can be specified simultaneously, with N starting from 0. If this field is not filled in, default return all information. Options:</p><li>basicInfo (video basic information).</li><li>metaData (video metadata).</li><li>transcodeInfo (video transcoding result information).</li><li>animatedGraphicsInfo (video motion graphic result information).</li><li>imageSpriteInfo (video thumbnail information).</li><li>snapshotByTimeOffsetInfo (video screenshot by specified time point).</li><li>sampleSnapshotInfo (sampling screenshot information).</li><li>keyFrameDescInfo (Dotting Information).</li><li>adaptiveDynamicStreamingInfo (Adaptive Bitrate Streaming information).</li><li>miniProgramReviewInfo (miniProgramReviewInfo).</li><li>subtitleInfo (subtitle information).</li><li>reviewInfo (review information).</li><li>mpsAiMediaInfo (Intelligent Media Assets information).</li>
 */
class DescribeMediaInfosRequest extends AbstractModel
{
    /**
     * @var array <p>Media file ID list. N starts from 0 with a maximum of 19.</p>
     */
    public $FileIds;

    /**
     * @var integer <p><b>VOD <a href="https://www.tencentcloud.com/document/product/266/33987">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
     */
    public $SubAppId;

    /**
     * @var array <p>Information to be returned for all specified media files. Multiple information can be specified simultaneously, with N starting from 0. If this field is not filled in, default return all information. Options:</p><li>basicInfo (video basic information).</li><li>metaData (video metadata).</li><li>transcodeInfo (video transcoding result information).</li><li>animatedGraphicsInfo (video motion graphic result information).</li><li>imageSpriteInfo (video thumbnail information).</li><li>snapshotByTimeOffsetInfo (video screenshot by specified time point).</li><li>sampleSnapshotInfo (sampling screenshot information).</li><li>keyFrameDescInfo (Dotting Information).</li><li>adaptiveDynamicStreamingInfo (Adaptive Bitrate Streaming information).</li><li>miniProgramReviewInfo (miniProgramReviewInfo).</li><li>subtitleInfo (subtitle information).</li><li>reviewInfo (review information).</li><li>mpsAiMediaInfo (Intelligent Media Assets information).</li>
     */
    public $Filters;

    /**
     * @param array $FileIds <p>Media file ID list. N starts from 0 with a maximum of 19.</p>
     * @param integer $SubAppId <p><b>VOD <a href="https://www.tencentcloud.com/document/product/266/33987">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
     * @param array $Filters <p>Information to be returned for all specified media files. Multiple information can be specified simultaneously, with N starting from 0. If this field is not filled in, default return all information. Options:</p><li>basicInfo (video basic information).</li><li>metaData (video metadata).</li><li>transcodeInfo (video transcoding result information).</li><li>animatedGraphicsInfo (video motion graphic result information).</li><li>imageSpriteInfo (video thumbnail information).</li><li>snapshotByTimeOffsetInfo (video screenshot by specified time point).</li><li>sampleSnapshotInfo (sampling screenshot information).</li><li>keyFrameDescInfo (Dotting Information).</li><li>adaptiveDynamicStreamingInfo (Adaptive Bitrate Streaming information).</li><li>miniProgramReviewInfo (miniProgramReviewInfo).</li><li>subtitleInfo (subtitle information).</li><li>reviewInfo (review information).</li><li>mpsAiMediaInfo (Intelligent Media Assets information).</li>
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
        if (array_key_exists("FileIds",$param) and $param["FileIds"] !== null) {
            $this->FileIds = $param["FileIds"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = $param["Filters"];
        }
    }
}
