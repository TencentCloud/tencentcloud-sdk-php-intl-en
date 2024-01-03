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
 * SearchMedia request structure.
 *
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method array getFileIds() Obtain File ID set. Any element in the set can be matched.
<li>Array length limit: 10.</li>
<li>ID length limit: 40 characters.</li>
 * @method void setFileIds(array $FileIds) Set File ID set. Any element in the set can be matched.
<li>Array length limit: 10.</li>
<li>ID length limit: 40 characters.</li>
 * @method array getNames() Obtain The file names to use for fuzzy search, which are sorted by relevance in descending order.
<li>Name length limit: 100 characters.</li>
<li>Array length limit: 10</li>
 * @method void setNames(array $Names) Set The file names to use for fuzzy search, which are sorted by relevance in descending order.
<li>Name length limit: 100 characters.</li>
<li>Array length limit: 10</li>
 * @method array getNamePrefixes() Obtain The file name prefixes to search.
<li>Prefix length limit: 100 characters.</li>
<li>Array length limit: 10.</li>
 * @method void setNamePrefixes(array $NamePrefixes) Set The file name prefixes to search.
<li>Prefix length limit: 100 characters.</li>
<li>Array length limit: 10.</li>
 * @method array getDescriptions() Obtain File description set. Media file descriptions are fuzzily matched. The higher the match rate, the higher-ranked the result.
<li>Length limit for a single description: 100 characters</li>
<li>Array length limit: 10</li>
 * @method void setDescriptions(array $Descriptions) Set File description set. Media file descriptions are fuzzily matched. The higher the match rate, the higher-ranked the result.
<li>Length limit for a single description: 100 characters</li>
<li>Array length limit: 10</li>
 * @method array getClassIds() Obtain Category ID set. The categories of the specified IDs and all subcategories in the set are matched.
<li>Array length limit: 10.</li>
 * @method void setClassIds(array $ClassIds) Set Category ID set. The categories of the specified IDs and all subcategories in the set are matched.
<li>Array length limit: 10.</li>
 * @method array getTags() Obtain The tags to search. A file is considered a match if it has any of the tags specified.
<li>Tag length limit: 32 characters.</li>
<li>Array length limit: 16.</li>
 * @method void setTags(array $Tags) Set The tags to search. A file is considered a match if it has any of the tags specified.
<li>Tag length limit: 32 characters.</li>
<li>Array length limit: 16.</li>
 * @method array getCategories() Obtain File type. Any element in the set can be matched.
<li>Video: video file</li>
<li>Audio: audio file</li>
<li>Image: image file</li>
 * @method void setCategories(array $Categories) Set File type. Any element in the set can be matched.
<li>Video: video file</li>
<li>Audio: audio file</li>
<li>Image: image file</li>
 * @method array getSourceTypes() Obtain Media file source set. For valid values, please see [SourceType](https://intl.cloud.tencent.com/document/product/266/31773?from_cn_redirect=1#MediaSourceData).
<li>Array length limit: 10.</li>
 * @method void setSourceTypes(array $SourceTypes) Set Media file source set. For valid values, please see [SourceType](https://intl.cloud.tencent.com/document/product/266/31773?from_cn_redirect=1#MediaSourceData).
<li>Array length limit: 10.</li>
 * @method array getStreamIds() Obtain The live stream code array. A media file will be returned if it matches any element in the array.
<li>Array length limit: 10</li>
 * @method void setStreamIds(array $StreamIds) Set The live stream code array. A media file will be returned if it matches any element in the array.
<li>Array length limit: 10</li>
 * @method TimeRange getCreateTime() Obtain Matches files created within the time period.
<li>Includes specified start and end points in time.</li>
 * @method void setCreateTime(TimeRange $CreateTime) Set Matches files created within the time period.
<li>Includes specified start and end points in time.</li>
 * @method TimeRange getExpireTime() Obtain Files whose expiration time points are within the specified time range will be returned. Expired files will not be returned.
<li>The files whose expiration time points are on the start or end time of the specified range will also be returned.</li>
 * @method void setExpireTime(TimeRange $ExpireTime) Set Files whose expiration time points are within the specified time range will be returned. Expired files will not be returned.
<li>The files whose expiration time points are on the start or end time of the specified range will also be returned.</li>
 * @method array getStorageRegions() Obtain Regions where media files are stored, such as `ap-chongqing`. For more regions, see [Storage Regions](https://intl.cloud.tencent.com/document/product/266/9760?from_cn_redirect=1#.E5.B7.B2.E6.94.AF.E6.8C.81.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8).
<li>Length limit for a single region: 20 characters</li>
<li>Array length limit: 20</li>
 * @method void setStorageRegions(array $StorageRegions) Set Regions where media files are stored, such as `ap-chongqing`. For more regions, see [Storage Regions](https://intl.cloud.tencent.com/document/product/266/9760?from_cn_redirect=1#.E5.B7.B2.E6.94.AF.E6.8C.81.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8).
<li>Length limit for a single region: 20 characters</li>
<li>Array length limit: 20</li>
 * @method array getStorageClasses() Obtain An array of storage classes. Valid values:
<li>STANDARD</li>
<li>STANDARD_IA</li>
<li>ARCHIVE</li>
<li>DEEP_ARCHIVE</li>
 * @method void setStorageClasses(array $StorageClasses) Set An array of storage classes. Valid values:
<li>STANDARD</li>
<li>STANDARD_IA</li>
<li>ARCHIVE</li>
<li>DEEP_ARCHIVE</li>
 * @method array getMediaTypes() Obtain The file formats.
<li>Array length limit: 10</li>
 * @method void setMediaTypes(array $MediaTypes) Set The file formats.
<li>Array length limit: 10</li>
 * @method array getStatus() Obtain The file statuses.
<li>`Normal`</li>
<li>`SystemForbidden` (blocked by VOD)</li>
<li>`Forbidden` (blocked by you)</li>
 * @method void setStatus(array $Status) Set The file statuses.
<li>`Normal`</li>
<li>`SystemForbidden` (blocked by VOD)</li>
<li>`Forbidden` (blocked by you)</li>
 * @method array getReviewResults() Obtain The types of moderation result.
<li>`pass`</li>
<li>`review` (the content may be non-compliant and needs to be reviewed)</li>
<li>`block` (the content is non-compliant and should be blocked)</li>
<li>`notModerated` (the file hasn't been moderated yet)</li>
 * @method void setReviewResults(array $ReviewResults) Set The types of moderation result.
<li>`pass`</li>
<li>`review` (the content may be non-compliant and needs to be reviewed)</li>
<li>`block` (the content is non-compliant and should be blocked)</li>
<li>`notModerated` (the file hasn't been moderated yet)</li>
 * @method array getTrtcSdkAppIds() Obtain The TRTC application IDs. Any file that matches one of the application IDs will be returned.
<li>Array length limit: 10</li>
 * @method void setTrtcSdkAppIds(array $TrtcSdkAppIds) Set The TRTC application IDs. Any file that matches one of the application IDs will be returned.
<li>Array length limit: 10</li>
 * @method array getTrtcRoomIds() Obtain The TRTC room IDs. Any file that matches one of the room IDs will be returned.
<li>Element length limit: 64 characters.</li>
<li>Array length limit: 10.</li>
 * @method void setTrtcRoomIds(array $TrtcRoomIds) Set The TRTC room IDs. Any file that matches one of the room IDs will be returned.
<li>Element length limit: 64 characters.</li>
<li>Array length limit: 10.</li>
 * @method array getFilters() Obtain Specifies information entry that needs to be returned for all media files. Multiple entries can be specified simultaneously. N starts from 0. If this field is left empty, all information entries will be returned by default. Valid values:
<li>basicInfo (basic video information).</li>
<li>metaData (video metadata).</li>
<li>transcodeInfo (result information of video transcoding).</li>
<li>animatedGraphicsInfo (result information of animated image generating task).</li>
<li>imageSpriteInfo (image sprite information).</li>
<li>snapshotByTimeOffsetInfo (point-in-time screenshot information).</li>
<li>sampleSnapshotInfo (sampled screenshot information).</li>
<li>keyFrameDescInfo (timestamp information).</li>
<li>adaptiveDynamicStreamingInfo (information of adaptive bitrate streaming).</li>
<li>miniProgramReviewInfo (WeChat Mini Program audit information).</li>
 * @method void setFilters(array $Filters) Set Specifies information entry that needs to be returned for all media files. Multiple entries can be specified simultaneously. N starts from 0. If this field is left empty, all information entries will be returned by default. Valid values:
<li>basicInfo (basic video information).</li>
<li>metaData (video metadata).</li>
<li>transcodeInfo (result information of video transcoding).</li>
<li>animatedGraphicsInfo (result information of animated image generating task).</li>
<li>imageSpriteInfo (image sprite information).</li>
<li>snapshotByTimeOffsetInfo (point-in-time screenshot information).</li>
<li>sampleSnapshotInfo (sampled screenshot information).</li>
<li>keyFrameDescInfo (timestamp information).</li>
<li>adaptiveDynamicStreamingInfo (information of adaptive bitrate streaming).</li>
<li>miniProgramReviewInfo (WeChat Mini Program audit information).</li>
 * @method SortBy getSort() Obtain Sorting order.
<li>Valid value of `Sort.Field`: CreateTime.</li>
<li>If `Text`, `Names`, or `Descriptions` is not empty, the `Sort.Field` field will not take effect, and the search results will be sorted by match rate.</li>
 * @method void setSort(SortBy $Sort) Set Sorting order.
<li>Valid value of `Sort.Field`: CreateTime.</li>
<li>If `Text`, `Names`, or `Descriptions` is not empty, the `Sort.Field` field will not take effect, and the search results will be sorted by match rate.</li>
 * @method integer getOffset() Obtain <div id="p_offset">Start offset of a paged return. Default value: 0. Entries from No. "Offset" to No. "Offset + Limit - 1" will be returned.
<li>Value range: "Offset + Limit" cannot be more than 5,000. (For more information, please see <a href="#maxResultsDesc">Limit on the Number of Results Returned by API</a>)</li></div>
 * @method void setOffset(integer $Offset) Set <div id="p_offset">Start offset of a paged return. Default value: 0. Entries from No. "Offset" to No. "Offset + Limit - 1" will be returned.
<li>Value range: "Offset + Limit" cannot be more than 5,000. (For more information, please see <a href="#maxResultsDesc">Limit on the Number of Results Returned by API</a>)</li></div>
 * @method integer getLimit() Obtain <div id="p_limit">Number of entries returned by a paged query. Default value: 10. Entries from No. "Offset" to No. "Offset + Limit - 1" will be returned.
<li>Value range: "Offset + Limit" cannot be more than 5,000. (For more information, please see <a href="#maxResultsDesc">Limit on the Number of Results Returned by API</a>)</li></div>
 * @method void setLimit(integer $Limit) Set <div id="p_limit">Number of entries returned by a paged query. Default value: 10. Entries from No. "Offset" to No. "Offset + Limit - 1" will be returned.
<li>Value range: "Offset + Limit" cannot be more than 5,000. (For more information, please see <a href="#maxResultsDesc">Limit on the Number of Results Returned by API</a>)</li></div>
 * @method string getText() Obtain (This is not recommended. `Names`, `NamePrefixes`, or `Descriptions` should be used instead)
Search text, which fuzzily matches the media file name or description. The more matching items and the higher the match rate, the higher-ranked the result. It can contain up to 64 characters.
 * @method void setText(string $Text) Set (This is not recommended. `Names`, `NamePrefixes`, or `Descriptions` should be used instead)
Search text, which fuzzily matches the media file name or description. The more matching items and the higher the match rate, the higher-ranked the result. It can contain up to 64 characters.
 * @method string getSourceType() Obtain (This is not recommended. `SourceTypes` should be used instead)
Media file source. For valid values, please see [SourceType](https://intl.cloud.tencent.com/document/product/266/31773?from_cn_redirect=1#MediaSourceData).
 * @method void setSourceType(string $SourceType) Set (This is not recommended. `SourceTypes` should be used instead)
Media file source. For valid values, please see [SourceType](https://intl.cloud.tencent.com/document/product/266/31773?from_cn_redirect=1#MediaSourceData).
 * @method string getStreamId() Obtain (Not recommended. Consider using `StreamIds` instead.)
The live stream code.
 * @method void setStreamId(string $StreamId) Set (Not recommended. Consider using `StreamIds` instead.)
The live stream code.
 * @method string getStartTime() Obtain (This is not recommended. `CreateTime` should be used instead)
Start time in the creation time range.
<li>After or at the start time.</li>
<li>If `CreateTime.After` also exists, it will be used first.</li>
<li>In ISO 8601 format. For more information, please see [ISO Date Format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).</li>
 * @method void setStartTime(string $StartTime) Set (This is not recommended. `CreateTime` should be used instead)
Start time in the creation time range.
<li>After or at the start time.</li>
<li>If `CreateTime.After` also exists, it will be used first.</li>
<li>In ISO 8601 format. For more information, please see [ISO Date Format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).</li>
 * @method string getEndTime() Obtain (This is not recommended. `CreateTime` should be used instead)
End time in the creation time range.
<li>Before the end time.</li>
<li>If `CreateTime.Before` also exists, it will be used first.</li>
<li>In ISO 8601 format. For more information, please see [ISO Date Format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).</li>
 * @method void setEndTime(string $EndTime) Set (This is not recommended. `CreateTime` should be used instead)
End time in the creation time range.
<li>Before the end time.</li>
<li>If `CreateTime.Before` also exists, it will be used first.</li>
<li>In ISO 8601 format. For more information, please see [ISO Date Format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).</li>
 * @method array getVids() Obtain This parameter is invalid now.
 * @method void setVids(array $Vids) Set This parameter is invalid now.
 * @method string getVid() Obtain This parameter is invalid now.
 * @method void setVid(string $Vid) Set This parameter is invalid now.
 */
class SearchMediaRequest extends AbstractModel
{
    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var array File ID set. Any element in the set can be matched.
<li>Array length limit: 10.</li>
<li>ID length limit: 40 characters.</li>
     */
    public $FileIds;

    /**
     * @var array The file names to use for fuzzy search, which are sorted by relevance in descending order.
<li>Name length limit: 100 characters.</li>
<li>Array length limit: 10</li>
     */
    public $Names;

    /**
     * @var array The file name prefixes to search.
<li>Prefix length limit: 100 characters.</li>
<li>Array length limit: 10.</li>
     */
    public $NamePrefixes;

    /**
     * @var array File description set. Media file descriptions are fuzzily matched. The higher the match rate, the higher-ranked the result.
<li>Length limit for a single description: 100 characters</li>
<li>Array length limit: 10</li>
     */
    public $Descriptions;

    /**
     * @var array Category ID set. The categories of the specified IDs and all subcategories in the set are matched.
<li>Array length limit: 10.</li>
     */
    public $ClassIds;

    /**
     * @var array The tags to search. A file is considered a match if it has any of the tags specified.
<li>Tag length limit: 32 characters.</li>
<li>Array length limit: 16.</li>
     */
    public $Tags;

    /**
     * @var array File type. Any element in the set can be matched.
<li>Video: video file</li>
<li>Audio: audio file</li>
<li>Image: image file</li>
     */
    public $Categories;

    /**
     * @var array Media file source set. For valid values, please see [SourceType](https://intl.cloud.tencent.com/document/product/266/31773?from_cn_redirect=1#MediaSourceData).
<li>Array length limit: 10.</li>
     */
    public $SourceTypes;

    /**
     * @var array The live stream code array. A media file will be returned if it matches any element in the array.
<li>Array length limit: 10</li>
     */
    public $StreamIds;

    /**
     * @var TimeRange Matches files created within the time period.
<li>Includes specified start and end points in time.</li>
     */
    public $CreateTime;

    /**
     * @var TimeRange Files whose expiration time points are within the specified time range will be returned. Expired files will not be returned.
<li>The files whose expiration time points are on the start or end time of the specified range will also be returned.</li>
     */
    public $ExpireTime;

    /**
     * @var array Regions where media files are stored, such as `ap-chongqing`. For more regions, see [Storage Regions](https://intl.cloud.tencent.com/document/product/266/9760?from_cn_redirect=1#.E5.B7.B2.E6.94.AF.E6.8C.81.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8).
<li>Length limit for a single region: 20 characters</li>
<li>Array length limit: 20</li>
     */
    public $StorageRegions;

    /**
     * @var array An array of storage classes. Valid values:
<li>STANDARD</li>
<li>STANDARD_IA</li>
<li>ARCHIVE</li>
<li>DEEP_ARCHIVE</li>
     */
    public $StorageClasses;

    /**
     * @var array The file formats.
<li>Array length limit: 10</li>
     */
    public $MediaTypes;

    /**
     * @var array The file statuses.
<li>`Normal`</li>
<li>`SystemForbidden` (blocked by VOD)</li>
<li>`Forbidden` (blocked by you)</li>
     */
    public $Status;

    /**
     * @var array The types of moderation result.
<li>`pass`</li>
<li>`review` (the content may be non-compliant and needs to be reviewed)</li>
<li>`block` (the content is non-compliant and should be blocked)</li>
<li>`notModerated` (the file hasn't been moderated yet)</li>
     */
    public $ReviewResults;

    /**
     * @var array The TRTC application IDs. Any file that matches one of the application IDs will be returned.
<li>Array length limit: 10</li>
     */
    public $TrtcSdkAppIds;

    /**
     * @var array The TRTC room IDs. Any file that matches one of the room IDs will be returned.
<li>Element length limit: 64 characters.</li>
<li>Array length limit: 10.</li>
     */
    public $TrtcRoomIds;

    /**
     * @var array Specifies information entry that needs to be returned for all media files. Multiple entries can be specified simultaneously. N starts from 0. If this field is left empty, all information entries will be returned by default. Valid values:
<li>basicInfo (basic video information).</li>
<li>metaData (video metadata).</li>
<li>transcodeInfo (result information of video transcoding).</li>
<li>animatedGraphicsInfo (result information of animated image generating task).</li>
<li>imageSpriteInfo (image sprite information).</li>
<li>snapshotByTimeOffsetInfo (point-in-time screenshot information).</li>
<li>sampleSnapshotInfo (sampled screenshot information).</li>
<li>keyFrameDescInfo (timestamp information).</li>
<li>adaptiveDynamicStreamingInfo (information of adaptive bitrate streaming).</li>
<li>miniProgramReviewInfo (WeChat Mini Program audit information).</li>
     */
    public $Filters;

    /**
     * @var SortBy Sorting order.
<li>Valid value of `Sort.Field`: CreateTime.</li>
<li>If `Text`, `Names`, or `Descriptions` is not empty, the `Sort.Field` field will not take effect, and the search results will be sorted by match rate.</li>
     */
    public $Sort;

    /**
     * @var integer <div id="p_offset">Start offset of a paged return. Default value: 0. Entries from No. "Offset" to No. "Offset + Limit - 1" will be returned.
<li>Value range: "Offset + Limit" cannot be more than 5,000. (For more information, please see <a href="#maxResultsDesc">Limit on the Number of Results Returned by API</a>)</li></div>
     */
    public $Offset;

    /**
     * @var integer <div id="p_limit">Number of entries returned by a paged query. Default value: 10. Entries from No. "Offset" to No. "Offset + Limit - 1" will be returned.
<li>Value range: "Offset + Limit" cannot be more than 5,000. (For more information, please see <a href="#maxResultsDesc">Limit on the Number of Results Returned by API</a>)</li></div>
     */
    public $Limit;

    /**
     * @var string (This is not recommended. `Names`, `NamePrefixes`, or `Descriptions` should be used instead)
Search text, which fuzzily matches the media file name or description. The more matching items and the higher the match rate, the higher-ranked the result. It can contain up to 64 characters.
     */
    public $Text;

    /**
     * @var string (This is not recommended. `SourceTypes` should be used instead)
Media file source. For valid values, please see [SourceType](https://intl.cloud.tencent.com/document/product/266/31773?from_cn_redirect=1#MediaSourceData).
     */
    public $SourceType;

    /**
     * @var string (Not recommended. Consider using `StreamIds` instead.)
The live stream code.
     */
    public $StreamId;

    /**
     * @var string (This is not recommended. `CreateTime` should be used instead)
Start time in the creation time range.
<li>After or at the start time.</li>
<li>If `CreateTime.After` also exists, it will be used first.</li>
<li>In ISO 8601 format. For more information, please see [ISO Date Format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).</li>
     */
    public $StartTime;

    /**
     * @var string (This is not recommended. `CreateTime` should be used instead)
End time in the creation time range.
<li>Before the end time.</li>
<li>If `CreateTime.Before` also exists, it will be used first.</li>
<li>In ISO 8601 format. For more information, please see [ISO Date Format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).</li>
     */
    public $EndTime;

    /**
     * @var array This parameter is invalid now.
     */
    public $Vids;

    /**
     * @var string This parameter is invalid now.
     */
    public $Vid;

    /**
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param array $FileIds File ID set. Any element in the set can be matched.
<li>Array length limit: 10.</li>
<li>ID length limit: 40 characters.</li>
     * @param array $Names The file names to use for fuzzy search, which are sorted by relevance in descending order.
<li>Name length limit: 100 characters.</li>
<li>Array length limit: 10</li>
     * @param array $NamePrefixes The file name prefixes to search.
<li>Prefix length limit: 100 characters.</li>
<li>Array length limit: 10.</li>
     * @param array $Descriptions File description set. Media file descriptions are fuzzily matched. The higher the match rate, the higher-ranked the result.
<li>Length limit for a single description: 100 characters</li>
<li>Array length limit: 10</li>
     * @param array $ClassIds Category ID set. The categories of the specified IDs and all subcategories in the set are matched.
<li>Array length limit: 10.</li>
     * @param array $Tags The tags to search. A file is considered a match if it has any of the tags specified.
<li>Tag length limit: 32 characters.</li>
<li>Array length limit: 16.</li>
     * @param array $Categories File type. Any element in the set can be matched.
<li>Video: video file</li>
<li>Audio: audio file</li>
<li>Image: image file</li>
     * @param array $SourceTypes Media file source set. For valid values, please see [SourceType](https://intl.cloud.tencent.com/document/product/266/31773?from_cn_redirect=1#MediaSourceData).
<li>Array length limit: 10.</li>
     * @param array $StreamIds The live stream code array. A media file will be returned if it matches any element in the array.
<li>Array length limit: 10</li>
     * @param TimeRange $CreateTime Matches files created within the time period.
<li>Includes specified start and end points in time.</li>
     * @param TimeRange $ExpireTime Files whose expiration time points are within the specified time range will be returned. Expired files will not be returned.
<li>The files whose expiration time points are on the start or end time of the specified range will also be returned.</li>
     * @param array $StorageRegions Regions where media files are stored, such as `ap-chongqing`. For more regions, see [Storage Regions](https://intl.cloud.tencent.com/document/product/266/9760?from_cn_redirect=1#.E5.B7.B2.E6.94.AF.E6.8C.81.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8).
<li>Length limit for a single region: 20 characters</li>
<li>Array length limit: 20</li>
     * @param array $StorageClasses An array of storage classes. Valid values:
<li>STANDARD</li>
<li>STANDARD_IA</li>
<li>ARCHIVE</li>
<li>DEEP_ARCHIVE</li>
     * @param array $MediaTypes The file formats.
<li>Array length limit: 10</li>
     * @param array $Status The file statuses.
<li>`Normal`</li>
<li>`SystemForbidden` (blocked by VOD)</li>
<li>`Forbidden` (blocked by you)</li>
     * @param array $ReviewResults The types of moderation result.
<li>`pass`</li>
<li>`review` (the content may be non-compliant and needs to be reviewed)</li>
<li>`block` (the content is non-compliant and should be blocked)</li>
<li>`notModerated` (the file hasn't been moderated yet)</li>
     * @param array $TrtcSdkAppIds The TRTC application IDs. Any file that matches one of the application IDs will be returned.
<li>Array length limit: 10</li>
     * @param array $TrtcRoomIds The TRTC room IDs. Any file that matches one of the room IDs will be returned.
<li>Element length limit: 64 characters.</li>
<li>Array length limit: 10.</li>
     * @param array $Filters Specifies information entry that needs to be returned for all media files. Multiple entries can be specified simultaneously. N starts from 0. If this field is left empty, all information entries will be returned by default. Valid values:
<li>basicInfo (basic video information).</li>
<li>metaData (video metadata).</li>
<li>transcodeInfo (result information of video transcoding).</li>
<li>animatedGraphicsInfo (result information of animated image generating task).</li>
<li>imageSpriteInfo (image sprite information).</li>
<li>snapshotByTimeOffsetInfo (point-in-time screenshot information).</li>
<li>sampleSnapshotInfo (sampled screenshot information).</li>
<li>keyFrameDescInfo (timestamp information).</li>
<li>adaptiveDynamicStreamingInfo (information of adaptive bitrate streaming).</li>
<li>miniProgramReviewInfo (WeChat Mini Program audit information).</li>
     * @param SortBy $Sort Sorting order.
<li>Valid value of `Sort.Field`: CreateTime.</li>
<li>If `Text`, `Names`, or `Descriptions` is not empty, the `Sort.Field` field will not take effect, and the search results will be sorted by match rate.</li>
     * @param integer $Offset <div id="p_offset">Start offset of a paged return. Default value: 0. Entries from No. "Offset" to No. "Offset + Limit - 1" will be returned.
<li>Value range: "Offset + Limit" cannot be more than 5,000. (For more information, please see <a href="#maxResultsDesc">Limit on the Number of Results Returned by API</a>)</li></div>
     * @param integer $Limit <div id="p_limit">Number of entries returned by a paged query. Default value: 10. Entries from No. "Offset" to No. "Offset + Limit - 1" will be returned.
<li>Value range: "Offset + Limit" cannot be more than 5,000. (For more information, please see <a href="#maxResultsDesc">Limit on the Number of Results Returned by API</a>)</li></div>
     * @param string $Text (This is not recommended. `Names`, `NamePrefixes`, or `Descriptions` should be used instead)
Search text, which fuzzily matches the media file name or description. The more matching items and the higher the match rate, the higher-ranked the result. It can contain up to 64 characters.
     * @param string $SourceType (This is not recommended. `SourceTypes` should be used instead)
Media file source. For valid values, please see [SourceType](https://intl.cloud.tencent.com/document/product/266/31773?from_cn_redirect=1#MediaSourceData).
     * @param string $StreamId (Not recommended. Consider using `StreamIds` instead.)
The live stream code.
     * @param string $StartTime (This is not recommended. `CreateTime` should be used instead)
Start time in the creation time range.
<li>After or at the start time.</li>
<li>If `CreateTime.After` also exists, it will be used first.</li>
<li>In ISO 8601 format. For more information, please see [ISO Date Format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).</li>
     * @param string $EndTime (This is not recommended. `CreateTime` should be used instead)
End time in the creation time range.
<li>Before the end time.</li>
<li>If `CreateTime.Before` also exists, it will be used first.</li>
<li>In ISO 8601 format. For more information, please see [ISO Date Format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).</li>
     * @param array $Vids This parameter is invalid now.
     * @param string $Vid This parameter is invalid now.
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("FileIds",$param) and $param["FileIds"] !== null) {
            $this->FileIds = $param["FileIds"];
        }

        if (array_key_exists("Names",$param) and $param["Names"] !== null) {
            $this->Names = $param["Names"];
        }

        if (array_key_exists("NamePrefixes",$param) and $param["NamePrefixes"] !== null) {
            $this->NamePrefixes = $param["NamePrefixes"];
        }

        if (array_key_exists("Descriptions",$param) and $param["Descriptions"] !== null) {
            $this->Descriptions = $param["Descriptions"];
        }

        if (array_key_exists("ClassIds",$param) and $param["ClassIds"] !== null) {
            $this->ClassIds = $param["ClassIds"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Categories",$param) and $param["Categories"] !== null) {
            $this->Categories = $param["Categories"];
        }

        if (array_key_exists("SourceTypes",$param) and $param["SourceTypes"] !== null) {
            $this->SourceTypes = $param["SourceTypes"];
        }

        if (array_key_exists("StreamIds",$param) and $param["StreamIds"] !== null) {
            $this->StreamIds = $param["StreamIds"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = new TimeRange();
            $this->CreateTime->deserialize($param["CreateTime"]);
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = new TimeRange();
            $this->ExpireTime->deserialize($param["ExpireTime"]);
        }

        if (array_key_exists("StorageRegions",$param) and $param["StorageRegions"] !== null) {
            $this->StorageRegions = $param["StorageRegions"];
        }

        if (array_key_exists("StorageClasses",$param) and $param["StorageClasses"] !== null) {
            $this->StorageClasses = $param["StorageClasses"];
        }

        if (array_key_exists("MediaTypes",$param) and $param["MediaTypes"] !== null) {
            $this->MediaTypes = $param["MediaTypes"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ReviewResults",$param) and $param["ReviewResults"] !== null) {
            $this->ReviewResults = $param["ReviewResults"];
        }

        if (array_key_exists("TrtcSdkAppIds",$param) and $param["TrtcSdkAppIds"] !== null) {
            $this->TrtcSdkAppIds = $param["TrtcSdkAppIds"];
        }

        if (array_key_exists("TrtcRoomIds",$param) and $param["TrtcRoomIds"] !== null) {
            $this->TrtcRoomIds = $param["TrtcRoomIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = $param["Filters"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = new SortBy();
            $this->Sort->deserialize($param["Sort"]);
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("StreamId",$param) and $param["StreamId"] !== null) {
            $this->StreamId = $param["StreamId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Vids",$param) and $param["Vids"] !== null) {
            $this->Vids = $param["Vids"];
        }

        if (array_key_exists("Vid",$param) and $param["Vid"] !== null) {
            $this->Vid = $param["Vid"];
        }
    }
}
