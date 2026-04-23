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
 * SearchMedia request structure.
 *
 * @method integer getSubAppId() Obtain <p><b>Video-on-demand (VOD) <a href="/document/product/266/33987">application</a> ID. For customers who activate on-demand services from December 25, 2023, they must fill this field with the app ID when accessing resources in on-demand applications (whether it's the default application or a newly created application).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>Video-on-demand (VOD) <a href="/document/product/266/33987">application</a> ID. For customers who activate on-demand services from December 25, 2023, they must fill this field with the app ID when accessing resources in on-demand applications (whether it's the default application or a newly created application).</b></p>
 * @method array getFileIds() Obtain <p>File id collection, match any element in the collection.</p><li>Array length limit: 10.</li><li>Single ID length limit: 40 character.</li>
 * @method void setFileIds(array $FileIds) Set <p>File id collection, match any element in the collection.</p><li>Array length limit: 10.</li><li>Single ID length limit: 40 character.</li>
 * @method array getNames() Obtain <p>File name collection. Fuzzy match media files by file name. The higher the matching degree, the higher the priority in sorting.</p><li>Single file name length limit: 100 characters.</li><li>Array length limit: 10.</li>
 * @method void setNames(array $Names) Set <p>File name collection. Fuzzy match media files by file name. The higher the matching degree, the higher the priority in sorting.</p><li>Single file name length limit: 100 characters.</li><li>Array length limit: 10.</li>
 * @method array getNamePrefixes() Obtain <p>File name prefix. Prefix match media files.</p><li>Single file name prefix length limit: 100 characters.</li><li>Array length limit: 10.</li>
 * @method void setNamePrefixes(array $NamePrefixes) Set <p>File name prefix. Prefix match media files.</p><li>Single file name prefix length limit: 100 characters.</li><li>Array length limit: 10.</li>
 * @method array getDescriptions() Obtain <p>File description set, fuzzy match media files. The higher the matching degree, higher priority in sorting.</p><li>Single description length limit: 100 characters.</li><li>Array length limit: 10.</li>
 * @method void setDescriptions(array $Descriptions) Set <p>File description set, fuzzy match media files. The higher the matching degree, higher priority in sorting.</p><li>Single description length limit: 100 characters.</li><li>Array length limit: 10.</li>
 * @method array getClassIds() Obtain <p>Category id collection, match the specified ID in the collection and all its subclasses.</p><li>Array length limit: 10.</li>
 * @method void setClassIds(array $ClassIds) Set <p>Category id collection, match the specified ID in the collection and all its subclasses.</p><li>Array length limit: 10.</li>
 * @method array getTags() Obtain <p>Tag set, match any element in the collection.</p><li>Single tag length limit: 32 character.</li><li>Array length limit: 16.</li>
 * @method void setTags(array $Tags) Set <p>Tag set, match any element in the collection.</p><li>Single tag length limit: 32 character.</li><li>Array length limit: 16.</li>
 * @method array getCategories() Obtain <p>File type. Match any element in the collection:</p><li>Video: video file</li><li>Audio: audio file</li><li>Image: image file</li>
 * @method void setCategories(array $Categories) Set <p>File type. Match any element in the collection:</p><li>Video: video file</li><li>Audio: audio file</li><li>Image: image file</li>
 * @method array getSourceTypes() Obtain <p>Media file source collection. Source value reference <a href="https://www.tencentcloud.com/document/product/266/31773?from_cn_redirect=1#MediaSourceData">SourceType</a>.</p><li>Array length limit: 10.</li>
 * @method void setSourceTypes(array $SourceTypes) Set <p>Media file source collection. Source value reference <a href="https://www.tencentcloud.com/document/product/266/31773?from_cn_redirect=1#MediaSourceData">SourceType</a>.</p><li>Array length limit: 10.</li>
 * @method array getStreamIds() Obtain <p>Push stream live code collection. Match any element in the collection.</p><li>Array length limit: 10.</li>
 * @method void setStreamIds(array $StreamIds) Set <p>Push stream live code collection. Match any element in the collection.</p><li>Array length limit: 10.</li>
 * @method TimeRange getCreateTime() Obtain <p>Match files with creation time within this time period.</p><li>Include the specified start and end points in time.</li>
 * @method void setCreateTime(TimeRange $CreateTime) Set <p>Match files with creation time within this time period.</p><li>Include the specified start and end points in time.</li>
 * @method TimeRange getExpireTime() Obtain <p>Match files with expiration time within this period. Unable to retrieve expired files.</p><li>Include the specified start and end points in time.</li>
 * @method void setExpireTime(TimeRange $ExpireTime) Set <p>Match files with expiration time within this period. Unable to retrieve expired files.</p><li>Include the specified start and end points in time.</li>
 * @method array getStorageRegions() Obtain <p>Media file storage region, such as ap-chongqing. Please refer to <a href="https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E5.B7.B2.E6.94.AF.E6.8C.81.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">region list</a>.</p><li>Single storage region length limit: 20 characters.</li><li>Array length limit: 20.</li>
 * @method void setStorageRegions(array $StorageRegions) Set <p>Media file storage region, such as ap-chongqing. Please refer to <a href="https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E5.B7.B2.E6.94.AF.E6.8C.81.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">region list</a>.</p><li>Single storage region length limit: 20 characters.</li><li>Array length limit: 20.</li>
 * @method array getStorageClasses() Obtain <p>Storage type array. Optional values:</p><li> STANDARD: Standard storage.</li><li> STANDARD_IA: Infrequent storage.</li><li> ARCHIVE: Archive storage.</li><li> DEEP_ARCHIVE: Deep archive storage.</li>
 * @method void setStorageClasses(array $StorageClasses) Set <p>Storage type array. Optional values:</p><li> STANDARD: Standard storage.</li><li> STANDARD_IA: Infrequent storage.</li><li> ARCHIVE: Archive storage.</li><li> DEEP_ARCHIVE: Deep archive storage.</li>
 * @method array getMediaTypes() Obtain <p>Media file packaging format collection, match any element in the collection.</p><li>Array length limit: 10.</li>
 * @method void setMediaTypes(array $MediaTypes) Set <p>Media file packaging format collection, match any element in the collection.</p><li>Array length limit: 10.</li>
 * @method array getStatus() Obtain <p>Media file status, match any element in the collection.</p><li> Normal: normal;</li><li> SystemForbidden: Platform Ban;</li><li> Forbidden: proactive ban.</li>
 * @method void setStatus(array $Status) Set <p>Media file status, match any element in the collection.</p><li> Normal: normal;</li><li> SystemForbidden: Platform Ban;</li><li> Forbidden: proactive ban.</li>
 * @method array getReviewResults() Obtain <p>Media file review result, match any element in the collection.</p><li> pass: Pass review;</li><li> review: Suspected violation, suggest re-examination;</li><li> block: Confirmed violation, suggest banning;</li><li> notModerated: Not moderated.</li>
 * @method void setReviewResults(array $ReviewResults) Set <p>Media file review result, match any element in the collection.</p><li> pass: Pass review;</li><li> review: Suspected violation, suggest re-examination;</li><li> block: Confirmed violation, suggest banning;</li><li> notModerated: Not moderated.</li>
 * @method array getTrtcSdkAppIds() Obtain <p>TRTC application ID collection. Matches any element in the collection.</p><li>Array length limit: 10.</li>
 * @method void setTrtcSdkAppIds(array $TrtcSdkAppIds) Set <p>TRTC application ID collection. Matches any element in the collection.</p><li>Array length limit: 10.</li>
 * @method array getTrtcRoomIds() Obtain <p>TRTC room ID collection. Matches any element in the collection.</p><li>Single room ID length limit: 64 characters;</li><li>Array length limit: 10.</li>
 * @method void setTrtcRoomIds(array $TrtcRoomIds) Set <p>TRTC room ID collection. Matches any element in the collection.</p><li>Single room ID length limit: 64 characters;</li><li>Array length limit: 10.</li>
 * @method array getFilters() Obtain <p>Information to be returned for all specified media files, multiple information can be specified simultaneously, N starts incrementing from 0. If this field is not filled in, default return all information. Options include:</p><li>basicInfo (video basic information).</li><li>metaData (video metadata).</li><li>transcodeInfo (video transcoding result information).</li><li>animatedGraphicsInfo (video motion graphic result information).</li><li>imageSpriteInfo (video thumbnail information).</li><li>snapshotByTimeOffsetInfo (video screenshot by specified time point).</li><li>sampleSnapshotInfo (sampling screenshot information).</li><li>keyFrameDescInfo (Dotting Information).</li><li>adaptiveDynamicStreamingInfo (Adaptive Bitrate Streaming information).</li><li>miniProgramReviewInfo (miniProgramReviewInfo).</li>
 * @method void setFilters(array $Filters) Set <p>Information to be returned for all specified media files, multiple information can be specified simultaneously, N starts incrementing from 0. If this field is not filled in, default return all information. Options include:</p><li>basicInfo (video basic information).</li><li>metaData (video metadata).</li><li>transcodeInfo (video transcoding result information).</li><li>animatedGraphicsInfo (video motion graphic result information).</li><li>imageSpriteInfo (video thumbnail information).</li><li>snapshotByTimeOffsetInfo (video screenshot by specified time point).</li><li>sampleSnapshotInfo (sampling screenshot information).</li><li>keyFrameDescInfo (Dotting Information).</li><li>adaptiveDynamicStreamingInfo (Adaptive Bitrate Streaming information).</li><li>miniProgramReviewInfo (miniProgramReviewInfo).</li>
 * @method SortBy getSort() Obtain <p>Sorting method.</p><li>Sort.Field optional CreateTime.</li><li>When Text, Names, or Descriptions is not empty, the Sort.Field field is invalid. Search results sorted by relevance.</li>
 * @method void setSort(SortBy $Sort) Set <p>Sorting method.</p><li>Sort.Field optional CreateTime.</li><li>When Text, Names, or Descriptions is not empty, the Sort.Field field is invalid. Search results sorted by relevance.</li>
 * @method integer getOffset() Obtain <div id="p_offset">Starting offset amount for pagination return, default value: 0. Returns entries from Offset to Offset+Limit-1.<li>Value ranges from...to... Offset + Limit is no more than 5000. (See: <a href="#maxResultsDesc">API return result count limit</a>)</li></div>
 * @method void setOffset(integer $Offset) Set <div id="p_offset">Starting offset amount for pagination return, default value: 0. Returns entries from Offset to Offset+Limit-1.<li>Value ranges from...to... Offset + Limit is no more than 5000. (See: <a href="#maxResultsDesc">API return result count limit</a>)</li></div>
 * @method integer getLimit() Obtain <div id="p_limit">Number of records returned in pages. Default value: 10. Records from Offset to Offset+Limit-1 will be returned.<li>Value ranges from...to... Offset + Limit is no more than 5000. (Refer to: <a href="#maxResultsDesc">API return result count limit</a>)</li></div>
 * @method void setLimit(integer $Limit) Set <div id="p_limit">Number of records returned in pages. Default value: 10. Records from Offset to Offset+Limit-1 will be returned.<li>Value ranges from...to... Offset + Limit is no more than 5000. (Refer to: <a href="#maxResultsDesc">API return result count limit</a>)</li></div>
 * @method string getText() Obtain <p>(Not recommended: Use Names, NamePrefixes, or Descriptions as alternatives)<br>Search text, fuzzy match media file name or description information. The higher the matching degree and more matches, the higher priority in sorting. Length limit: 64 characters.</p>
 * @method void setText(string $Text) Set <p>(Not recommended: Use Names, NamePrefixes, or Descriptions as alternatives)<br>Search text, fuzzy match media file name or description information. The higher the matching degree and more matches, the higher priority in sorting. Length limit: 64 characters.</p>
 * @method string getSourceType() Obtain <p>(Not recommended: Use SourceTypes as an alternative)<br>Media file source. Source value reference <a href="https://www.tencentcloud.com/document/product/266/31773?from_cn_redirect=1#MediaSourceData">SourceType</a>.</p>
 * @method void setSourceType(string $SourceType) Set <p>(Not recommended: Use SourceTypes as an alternative)<br>Media file source. Source value reference <a href="https://www.tencentcloud.com/document/product/266/31773?from_cn_redirect=1#MediaSourceData">SourceType</a>.</p>
 * @method string getStreamId() Obtain <p>(Not recommended: Use StreamIds as an alternative)<br>Push stream live code.</p>
 * @method void setStreamId(string $StreamId) Set <p>(Not recommended: Use StreamIds as an alternative)<br>Push stream live code.</p>
 * @method string getStartTime() Obtain <p>(Not recommended: Use CreateTime instead)<br>Start time of creation time.</p><li>Greater than or equal to start time.</li><li>When CreateTime.After also exists, CreateTime.After will be used first.</li><li>Format according to ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).</li>
 * @method void setStartTime(string $StartTime) Set <p>(Not recommended: Use CreateTime instead)<br>Start time of creation time.</p><li>Greater than or equal to start time.</li><li>When CreateTime.After also exists, CreateTime.After will be used first.</li><li>Format according to ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).</li>
 * @method string getEndTime() Obtain <p>(Not recommended: Use CreateTime instead)<br>End time of creation time.</p><li>Less than end time.</li><li>When CreateTime.Before also exists, CreateTime.Before will be used first.</li><li>Format according to ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).</li>
 * @method void setEndTime(string $EndTime) Set <p>(Not recommended: Use CreateTime instead)<br>End time of creation time.</p><li>Less than end time.</li><li>When CreateTime.Before also exists, CreateTime.Before will be used first.</li><li>Format according to ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).</li>
 * @method array getVids() Obtain <p>This field is invalid.</p>
 * @method void setVids(array $Vids) Set <p>This field is invalid.</p>
 * @method string getVid() Obtain <p>This field is invalid.</p>
 * @method void setVid(string $Vid) Set <p>This field is invalid.</p>
 * @method array getStreamDomains() Obtain <p>Live streaming push Domain. Valid when the media source is Live streaming Recording.</p>
 * @method void setStreamDomains(array $StreamDomains) Set <p>Live streaming push Domain. Valid when the media source is Live streaming Recording.</p>
 * @method array getStreamPaths() Obtain <p>Live streaming push Path. Valid at that time when the source is live recording.</p>
 * @method void setStreamPaths(array $StreamPaths) Set <p>Live streaming push Path. Valid at that time when the source is live recording.</p>
 */
class SearchMediaRequest extends AbstractModel
{
    /**
     * @var integer <p><b>Video-on-demand (VOD) <a href="/document/product/266/33987">application</a> ID. For customers who activate on-demand services from December 25, 2023, they must fill this field with the app ID when accessing resources in on-demand applications (whether it's the default application or a newly created application).</b></p>
     */
    public $SubAppId;

    /**
     * @var array <p>File id collection, match any element in the collection.</p><li>Array length limit: 10.</li><li>Single ID length limit: 40 character.</li>
     */
    public $FileIds;

    /**
     * @var array <p>File name collection. Fuzzy match media files by file name. The higher the matching degree, the higher the priority in sorting.</p><li>Single file name length limit: 100 characters.</li><li>Array length limit: 10.</li>
     */
    public $Names;

    /**
     * @var array <p>File name prefix. Prefix match media files.</p><li>Single file name prefix length limit: 100 characters.</li><li>Array length limit: 10.</li>
     */
    public $NamePrefixes;

    /**
     * @var array <p>File description set, fuzzy match media files. The higher the matching degree, higher priority in sorting.</p><li>Single description length limit: 100 characters.</li><li>Array length limit: 10.</li>
     */
    public $Descriptions;

    /**
     * @var array <p>Category id collection, match the specified ID in the collection and all its subclasses.</p><li>Array length limit: 10.</li>
     */
    public $ClassIds;

    /**
     * @var array <p>Tag set, match any element in the collection.</p><li>Single tag length limit: 32 character.</li><li>Array length limit: 16.</li>
     */
    public $Tags;

    /**
     * @var array <p>File type. Match any element in the collection:</p><li>Video: video file</li><li>Audio: audio file</li><li>Image: image file</li>
     */
    public $Categories;

    /**
     * @var array <p>Media file source collection. Source value reference <a href="https://www.tencentcloud.com/document/product/266/31773?from_cn_redirect=1#MediaSourceData">SourceType</a>.</p><li>Array length limit: 10.</li>
     */
    public $SourceTypes;

    /**
     * @var array <p>Push stream live code collection. Match any element in the collection.</p><li>Array length limit: 10.</li>
     */
    public $StreamIds;

    /**
     * @var TimeRange <p>Match files with creation time within this time period.</p><li>Include the specified start and end points in time.</li>
     */
    public $CreateTime;

    /**
     * @var TimeRange <p>Match files with expiration time within this period. Unable to retrieve expired files.</p><li>Include the specified start and end points in time.</li>
     */
    public $ExpireTime;

    /**
     * @var array <p>Media file storage region, such as ap-chongqing. Please refer to <a href="https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E5.B7.B2.E6.94.AF.E6.8C.81.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">region list</a>.</p><li>Single storage region length limit: 20 characters.</li><li>Array length limit: 20.</li>
     */
    public $StorageRegions;

    /**
     * @var array <p>Storage type array. Optional values:</p><li> STANDARD: Standard storage.</li><li> STANDARD_IA: Infrequent storage.</li><li> ARCHIVE: Archive storage.</li><li> DEEP_ARCHIVE: Deep archive storage.</li>
     */
    public $StorageClasses;

    /**
     * @var array <p>Media file packaging format collection, match any element in the collection.</p><li>Array length limit: 10.</li>
     */
    public $MediaTypes;

    /**
     * @var array <p>Media file status, match any element in the collection.</p><li> Normal: normal;</li><li> SystemForbidden: Platform Ban;</li><li> Forbidden: proactive ban.</li>
     */
    public $Status;

    /**
     * @var array <p>Media file review result, match any element in the collection.</p><li> pass: Pass review;</li><li> review: Suspected violation, suggest re-examination;</li><li> block: Confirmed violation, suggest banning;</li><li> notModerated: Not moderated.</li>
     */
    public $ReviewResults;

    /**
     * @var array <p>TRTC application ID collection. Matches any element in the collection.</p><li>Array length limit: 10.</li>
     */
    public $TrtcSdkAppIds;

    /**
     * @var array <p>TRTC room ID collection. Matches any element in the collection.</p><li>Single room ID length limit: 64 characters;</li><li>Array length limit: 10.</li>
     */
    public $TrtcRoomIds;

    /**
     * @var array <p>Information to be returned for all specified media files, multiple information can be specified simultaneously, N starts incrementing from 0. If this field is not filled in, default return all information. Options include:</p><li>basicInfo (video basic information).</li><li>metaData (video metadata).</li><li>transcodeInfo (video transcoding result information).</li><li>animatedGraphicsInfo (video motion graphic result information).</li><li>imageSpriteInfo (video thumbnail information).</li><li>snapshotByTimeOffsetInfo (video screenshot by specified time point).</li><li>sampleSnapshotInfo (sampling screenshot information).</li><li>keyFrameDescInfo (Dotting Information).</li><li>adaptiveDynamicStreamingInfo (Adaptive Bitrate Streaming information).</li><li>miniProgramReviewInfo (miniProgramReviewInfo).</li>
     */
    public $Filters;

    /**
     * @var SortBy <p>Sorting method.</p><li>Sort.Field optional CreateTime.</li><li>When Text, Names, or Descriptions is not empty, the Sort.Field field is invalid. Search results sorted by relevance.</li>
     */
    public $Sort;

    /**
     * @var integer <div id="p_offset">Starting offset amount for pagination return, default value: 0. Returns entries from Offset to Offset+Limit-1.<li>Value ranges from...to... Offset + Limit is no more than 5000. (See: <a href="#maxResultsDesc">API return result count limit</a>)</li></div>
     */
    public $Offset;

    /**
     * @var integer <div id="p_limit">Number of records returned in pages. Default value: 10. Records from Offset to Offset+Limit-1 will be returned.<li>Value ranges from...to... Offset + Limit is no more than 5000. (Refer to: <a href="#maxResultsDesc">API return result count limit</a>)</li></div>
     */
    public $Limit;

    /**
     * @var string <p>(Not recommended: Use Names, NamePrefixes, or Descriptions as alternatives)<br>Search text, fuzzy match media file name or description information. The higher the matching degree and more matches, the higher priority in sorting. Length limit: 64 characters.</p>
     */
    public $Text;

    /**
     * @var string <p>(Not recommended: Use SourceTypes as an alternative)<br>Media file source. Source value reference <a href="https://www.tencentcloud.com/document/product/266/31773?from_cn_redirect=1#MediaSourceData">SourceType</a>.</p>
     */
    public $SourceType;

    /**
     * @var string <p>(Not recommended: Use StreamIds as an alternative)<br>Push stream live code.</p>
     */
    public $StreamId;

    /**
     * @var string <p>(Not recommended: Use CreateTime instead)<br>Start time of creation time.</p><li>Greater than or equal to start time.</li><li>When CreateTime.After also exists, CreateTime.After will be used first.</li><li>Format according to ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).</li>
     */
    public $StartTime;

    /**
     * @var string <p>(Not recommended: Use CreateTime instead)<br>End time of creation time.</p><li>Less than end time.</li><li>When CreateTime.Before also exists, CreateTime.Before will be used first.</li><li>Format according to ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).</li>
     */
    public $EndTime;

    /**
     * @var array <p>This field is invalid.</p>
     */
    public $Vids;

    /**
     * @var string <p>This field is invalid.</p>
     */
    public $Vid;

    /**
     * @var array <p>Live streaming push Domain. Valid when the media source is Live streaming Recording.</p>
     */
    public $StreamDomains;

    /**
     * @var array <p>Live streaming push Path. Valid at that time when the source is live recording.</p>
     */
    public $StreamPaths;

    /**
     * @param integer $SubAppId <p><b>Video-on-demand (VOD) <a href="/document/product/266/33987">application</a> ID. For customers who activate on-demand services from December 25, 2023, they must fill this field with the app ID when accessing resources in on-demand applications (whether it's the default application or a newly created application).</b></p>
     * @param array $FileIds <p>File id collection, match any element in the collection.</p><li>Array length limit: 10.</li><li>Single ID length limit: 40 character.</li>
     * @param array $Names <p>File name collection. Fuzzy match media files by file name. The higher the matching degree, the higher the priority in sorting.</p><li>Single file name length limit: 100 characters.</li><li>Array length limit: 10.</li>
     * @param array $NamePrefixes <p>File name prefix. Prefix match media files.</p><li>Single file name prefix length limit: 100 characters.</li><li>Array length limit: 10.</li>
     * @param array $Descriptions <p>File description set, fuzzy match media files. The higher the matching degree, higher priority in sorting.</p><li>Single description length limit: 100 characters.</li><li>Array length limit: 10.</li>
     * @param array $ClassIds <p>Category id collection, match the specified ID in the collection and all its subclasses.</p><li>Array length limit: 10.</li>
     * @param array $Tags <p>Tag set, match any element in the collection.</p><li>Single tag length limit: 32 character.</li><li>Array length limit: 16.</li>
     * @param array $Categories <p>File type. Match any element in the collection:</p><li>Video: video file</li><li>Audio: audio file</li><li>Image: image file</li>
     * @param array $SourceTypes <p>Media file source collection. Source value reference <a href="https://www.tencentcloud.com/document/product/266/31773?from_cn_redirect=1#MediaSourceData">SourceType</a>.</p><li>Array length limit: 10.</li>
     * @param array $StreamIds <p>Push stream live code collection. Match any element in the collection.</p><li>Array length limit: 10.</li>
     * @param TimeRange $CreateTime <p>Match files with creation time within this time period.</p><li>Include the specified start and end points in time.</li>
     * @param TimeRange $ExpireTime <p>Match files with expiration time within this period. Unable to retrieve expired files.</p><li>Include the specified start and end points in time.</li>
     * @param array $StorageRegions <p>Media file storage region, such as ap-chongqing. Please refer to <a href="https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E5.B7.B2.E6.94.AF.E6.8C.81.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">region list</a>.</p><li>Single storage region length limit: 20 characters.</li><li>Array length limit: 20.</li>
     * @param array $StorageClasses <p>Storage type array. Optional values:</p><li> STANDARD: Standard storage.</li><li> STANDARD_IA: Infrequent storage.</li><li> ARCHIVE: Archive storage.</li><li> DEEP_ARCHIVE: Deep archive storage.</li>
     * @param array $MediaTypes <p>Media file packaging format collection, match any element in the collection.</p><li>Array length limit: 10.</li>
     * @param array $Status <p>Media file status, match any element in the collection.</p><li> Normal: normal;</li><li> SystemForbidden: Platform Ban;</li><li> Forbidden: proactive ban.</li>
     * @param array $ReviewResults <p>Media file review result, match any element in the collection.</p><li> pass: Pass review;</li><li> review: Suspected violation, suggest re-examination;</li><li> block: Confirmed violation, suggest banning;</li><li> notModerated: Not moderated.</li>
     * @param array $TrtcSdkAppIds <p>TRTC application ID collection. Matches any element in the collection.</p><li>Array length limit: 10.</li>
     * @param array $TrtcRoomIds <p>TRTC room ID collection. Matches any element in the collection.</p><li>Single room ID length limit: 64 characters;</li><li>Array length limit: 10.</li>
     * @param array $Filters <p>Information to be returned for all specified media files, multiple information can be specified simultaneously, N starts incrementing from 0. If this field is not filled in, default return all information. Options include:</p><li>basicInfo (video basic information).</li><li>metaData (video metadata).</li><li>transcodeInfo (video transcoding result information).</li><li>animatedGraphicsInfo (video motion graphic result information).</li><li>imageSpriteInfo (video thumbnail information).</li><li>snapshotByTimeOffsetInfo (video screenshot by specified time point).</li><li>sampleSnapshotInfo (sampling screenshot information).</li><li>keyFrameDescInfo (Dotting Information).</li><li>adaptiveDynamicStreamingInfo (Adaptive Bitrate Streaming information).</li><li>miniProgramReviewInfo (miniProgramReviewInfo).</li>
     * @param SortBy $Sort <p>Sorting method.</p><li>Sort.Field optional CreateTime.</li><li>When Text, Names, or Descriptions is not empty, the Sort.Field field is invalid. Search results sorted by relevance.</li>
     * @param integer $Offset <div id="p_offset">Starting offset amount for pagination return, default value: 0. Returns entries from Offset to Offset+Limit-1.<li>Value ranges from...to... Offset + Limit is no more than 5000. (See: <a href="#maxResultsDesc">API return result count limit</a>)</li></div>
     * @param integer $Limit <div id="p_limit">Number of records returned in pages. Default value: 10. Records from Offset to Offset+Limit-1 will be returned.<li>Value ranges from...to... Offset + Limit is no more than 5000. (Refer to: <a href="#maxResultsDesc">API return result count limit</a>)</li></div>
     * @param string $Text <p>(Not recommended: Use Names, NamePrefixes, or Descriptions as alternatives)<br>Search text, fuzzy match media file name or description information. The higher the matching degree and more matches, the higher priority in sorting. Length limit: 64 characters.</p>
     * @param string $SourceType <p>(Not recommended: Use SourceTypes as an alternative)<br>Media file source. Source value reference <a href="https://www.tencentcloud.com/document/product/266/31773?from_cn_redirect=1#MediaSourceData">SourceType</a>.</p>
     * @param string $StreamId <p>(Not recommended: Use StreamIds as an alternative)<br>Push stream live code.</p>
     * @param string $StartTime <p>(Not recommended: Use CreateTime instead)<br>Start time of creation time.</p><li>Greater than or equal to start time.</li><li>When CreateTime.After also exists, CreateTime.After will be used first.</li><li>Format according to ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).</li>
     * @param string $EndTime <p>(Not recommended: Use CreateTime instead)<br>End time of creation time.</p><li>Less than end time.</li><li>When CreateTime.Before also exists, CreateTime.Before will be used first.</li><li>Format according to ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).</li>
     * @param array $Vids <p>This field is invalid.</p>
     * @param string $Vid <p>This field is invalid.</p>
     * @param array $StreamDomains <p>Live streaming push Domain. Valid when the media source is Live streaming Recording.</p>
     * @param array $StreamPaths <p>Live streaming push Path. Valid at that time when the source is live recording.</p>
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

        if (array_key_exists("StreamDomains",$param) and $param["StreamDomains"] !== null) {
            $this->StreamDomains = $param["StreamDomains"];
        }

        if (array_key_exists("StreamPaths",$param) and $param["StreamPaths"] !== null) {
            $this->StreamPaths = $param["StreamPaths"];
        }
    }
}
