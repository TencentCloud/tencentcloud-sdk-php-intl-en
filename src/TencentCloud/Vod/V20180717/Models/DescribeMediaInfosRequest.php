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
 * DescribeMediaInfos request structure.
 *
 * @method array getFileIds() Obtain List of media file IDs. N starts from 0 and can be up to 19.
 * @method void setFileIds(array $FileIds) Set List of media file IDs. N starts from 0 and can be up to 19.
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method array getFilters() Obtain The types of information to return. You can specify multiple information types. `N` starts from 0. If you do not specify this parameter, all information will be returned. The supported information types are as follows:
<li>`basicInfo` (basic information)</li>
<li>`metaData` (video metadata)</li>
<li>`transcodeInfo` (transcoding information)</li>
<li>`animatedGraphicsInfo` (animated image information)</li>
<li>`imageSpriteInfo` (image sprite information)</li>
<li>`snapshotByTimeOffsetInfo` (time point screenshot information)</li>
<li>`sampleSnapshotInfo` (sampled screenshot information)</li>
<li>`keyFrameDescInfo` (timestamp information)</li>
<li>`adaptiveDynamicStreamingInfo` (adaptive bitrate information)</li>
<li>`miniProgramReviewInfo` (WeChat Mini Program moderation information)</li>
<li>`subtitleInfo` (subtitle information)</li>
<li>`reviewInfo` (moderation information)</li>
 * @method void setFilters(array $Filters) Set The types of information to return. You can specify multiple information types. `N` starts from 0. If you do not specify this parameter, all information will be returned. The supported information types are as follows:
<li>`basicInfo` (basic information)</li>
<li>`metaData` (video metadata)</li>
<li>`transcodeInfo` (transcoding information)</li>
<li>`animatedGraphicsInfo` (animated image information)</li>
<li>`imageSpriteInfo` (image sprite information)</li>
<li>`snapshotByTimeOffsetInfo` (time point screenshot information)</li>
<li>`sampleSnapshotInfo` (sampled screenshot information)</li>
<li>`keyFrameDescInfo` (timestamp information)</li>
<li>`adaptiveDynamicStreamingInfo` (adaptive bitrate information)</li>
<li>`miniProgramReviewInfo` (WeChat Mini Program moderation information)</li>
<li>`subtitleInfo` (subtitle information)</li>
<li>`reviewInfo` (moderation information)</li>
 */
class DescribeMediaInfosRequest extends AbstractModel
{
    /**
     * @var array List of media file IDs. N starts from 0 and can be up to 19.
     */
    public $FileIds;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var array The types of information to return. You can specify multiple information types. `N` starts from 0. If you do not specify this parameter, all information will be returned. The supported information types are as follows:
<li>`basicInfo` (basic information)</li>
<li>`metaData` (video metadata)</li>
<li>`transcodeInfo` (transcoding information)</li>
<li>`animatedGraphicsInfo` (animated image information)</li>
<li>`imageSpriteInfo` (image sprite information)</li>
<li>`snapshotByTimeOffsetInfo` (time point screenshot information)</li>
<li>`sampleSnapshotInfo` (sampled screenshot information)</li>
<li>`keyFrameDescInfo` (timestamp information)</li>
<li>`adaptiveDynamicStreamingInfo` (adaptive bitrate information)</li>
<li>`miniProgramReviewInfo` (WeChat Mini Program moderation information)</li>
<li>`subtitleInfo` (subtitle information)</li>
<li>`reviewInfo` (moderation information)</li>
     */
    public $Filters;

    /**
     * @param array $FileIds List of media file IDs. N starts from 0 and can be up to 19.
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param array $Filters The types of information to return. You can specify multiple information types. `N` starts from 0. If you do not specify this parameter, all information will be returned. The supported information types are as follows:
<li>`basicInfo` (basic information)</li>
<li>`metaData` (video metadata)</li>
<li>`transcodeInfo` (transcoding information)</li>
<li>`animatedGraphicsInfo` (animated image information)</li>
<li>`imageSpriteInfo` (image sprite information)</li>
<li>`snapshotByTimeOffsetInfo` (time point screenshot information)</li>
<li>`sampleSnapshotInfo` (sampled screenshot information)</li>
<li>`keyFrameDescInfo` (timestamp information)</li>
<li>`adaptiveDynamicStreamingInfo` (adaptive bitrate information)</li>
<li>`miniProgramReviewInfo` (WeChat Mini Program moderation information)</li>
<li>`subtitleInfo` (subtitle information)</li>
<li>`reviewInfo` (moderation information)</li>
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
