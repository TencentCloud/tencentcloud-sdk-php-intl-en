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
 * @method string getText() Obtain Search text, which fuzzily matches the media file name or description. The more matching items and the higher the match rate, the higher-ranked the result. It can contain up to 64 characters.
 * @method void setText(string $Text) Set Search text, which fuzzily matches the media file name or description. The more matching items and the higher the match rate, the higher-ranked the result. It can contain up to 64 characters.
 * @method array getTags() Obtain Tag set, which matches any element in the set.
<li>Tag length limit: 8 characters.</li>
<li>Array length limit: 10.</li>
 * @method void setTags(array $Tags) Set Tag set, which matches any element in the set.
<li>Tag length limit: 8 characters.</li>
<li>Array length limit: 10.</li>
 * @method array getClassIds() Obtain Category ID set, which matches the categories of the specified IDs and all subcategories. Array length limit: 10.
 * @method void setClassIds(array $ClassIds) Set Category ID set, which matches the categories of the specified IDs and all subcategories. Array length limit: 10.
 * @method string getStartTime() Obtain Start time in the creation time range.
<li>After or at the start time.</li>
<li>In ISO 8601 format. For more information, please see [Notes on ISO Date Format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).</li>
 * @method void setStartTime(string $StartTime) Set Start time in the creation time range.
<li>After or at the start time.</li>
<li>In ISO 8601 format. For more information, please see [Notes on ISO Date Format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).</li>
 * @method string getEndTime() Obtain End time in the creation time range.
<li>Before the end time.</li>
<li>In ISO 8601 format. For more information, please see [Notes on ISO Date Format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).</li>
 * @method void setEndTime(string $EndTime) Set End time in the creation time range.
<li>Before the end time.</li>
<li>In ISO 8601 format. For more information, please see [Notes on ISO Date Format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).</li>
 * @method string getSourceType() Obtain Media file source. For valid values, please see [SourceType](https://cloud.tencent.com/document/product/266/31773#MediaSourceData).
 * @method void setSourceType(string $SourceType) Set Media file source. For valid values, please see [SourceType](https://cloud.tencent.com/document/product/266/31773#MediaSourceData).
 * @method string getStreamId() Obtain [LVB code](https://cloud.tencent.com/document/product/267/5959) of a stream.
 * @method void setStreamId(string $StreamId) Set [LVB code](https://cloud.tencent.com/document/product/267/5959) of a stream.
 * @method string getVid() Obtain Unique ID of LVB recording file.
 * @method void setVid(string $Vid) Set Unique ID of LVB recording file.
 * @method SortBy getSort() Obtain Sorting order.
<li>Valid value of `Sort.Field`: CreateTime</li>
<li>If `Text` is specified for the search, the results will be sorted by the match rate, and this field will not take effect</li>
 * @method void setSort(SortBy $Sort) Set Sorting order.
<li>Valid value of `Sort.Field`: CreateTime</li>
<li>If `Text` is specified for the search, the results will be sorted by the match rate, and this field will not take effect</li>
 * @method integer getOffset() Obtain <div id="p_offset">Start offset of a paged return. Default value: 0. Entries from No. "Offset" to No. "Offset + Limit - 1" will be returned.
<li>Value range: "Offset + Limit" cannot be more than 5,000. (For more information, please see <a href="#maxResultsDesc">Limit on the Number of Results Returned by API</a>)</li></div>
 * @method void setOffset(integer $Offset) Set <div id="p_offset">Start offset of a paged return. Default value: 0. Entries from No. "Offset" to No. "Offset + Limit - 1" will be returned.
<li>Value range: "Offset + Limit" cannot be more than 5,000. (For more information, please see <a href="#maxResultsDesc">Limit on the Number of Results Returned by API</a>)</li></div>
 * @method integer getLimit() Obtain <div id="p_limit">Number of entries returned by a paged query. Default value: 10. Entries from No. "Offset" to No. "Offset + Limit - 1" will be returned.
<li>Value range: "Offset + Limit" cannot be more than 5,000. (For more information, please see <a href="#maxResultsDesc">Limit on the Number of Results Returned by API</a>)</li></div>
 * @method void setLimit(integer $Limit) Set <div id="p_limit">Number of entries returned by a paged query. Default value: 10. Entries from No. "Offset" to No. "Offset + Limit - 1" will be returned.
<li>Value range: "Offset + Limit" cannot be more than 5,000. (For more information, please see <a href="#maxResultsDesc">Limit on the Number of Results Returned by API</a>)</li></div>
 * @method integer getSubAppId() Obtain [Subapplication](/document/product/266/14574) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
 * @method void setSubAppId(integer $SubAppId) Set [Subapplication](/document/product/266/14574) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
 */

/**
 *SearchMedia request structure.
 */
class SearchMediaRequest extends AbstractModel
{
    /**
     * @var string Search text, which fuzzily matches the media file name or description. The more matching items and the higher the match rate, the higher-ranked the result. It can contain up to 64 characters.
     */
    public $Text;

    /**
     * @var array Tag set, which matches any element in the set.
<li>Tag length limit: 8 characters.</li>
<li>Array length limit: 10.</li>
     */
    public $Tags;

    /**
     * @var array Category ID set, which matches the categories of the specified IDs and all subcategories. Array length limit: 10.
     */
    public $ClassIds;

    /**
     * @var string Start time in the creation time range.
<li>After or at the start time.</li>
<li>In ISO 8601 format. For more information, please see [Notes on ISO Date Format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).</li>
     */
    public $StartTime;

    /**
     * @var string End time in the creation time range.
<li>Before the end time.</li>
<li>In ISO 8601 format. For more information, please see [Notes on ISO Date Format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).</li>
     */
    public $EndTime;

    /**
     * @var string Media file source. For valid values, please see [SourceType](https://cloud.tencent.com/document/product/266/31773#MediaSourceData).
     */
    public $SourceType;

    /**
     * @var string [LVB code](https://cloud.tencent.com/document/product/267/5959) of a stream.
     */
    public $StreamId;

    /**
     * @var string Unique ID of LVB recording file.
     */
    public $Vid;

    /**
     * @var SortBy Sorting order.
<li>Valid value of `Sort.Field`: CreateTime</li>
<li>If `Text` is specified for the search, the results will be sorted by the match rate, and this field will not take effect</li>
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
     * @var integer [Subapplication](/document/product/266/14574) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
     */
    public $SubAppId;
    /**
     * @param string $Text Search text, which fuzzily matches the media file name or description. The more matching items and the higher the match rate, the higher-ranked the result. It can contain up to 64 characters.
     * @param array $Tags Tag set, which matches any element in the set.
<li>Tag length limit: 8 characters.</li>
<li>Array length limit: 10.</li>
     * @param array $ClassIds Category ID set, which matches the categories of the specified IDs and all subcategories. Array length limit: 10.
     * @param string $StartTime Start time in the creation time range.
<li>After or at the start time.</li>
<li>In ISO 8601 format. For more information, please see [Notes on ISO Date Format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).</li>
     * @param string $EndTime End time in the creation time range.
<li>Before the end time.</li>
<li>In ISO 8601 format. For more information, please see [Notes on ISO Date Format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).</li>
     * @param string $SourceType Media file source. For valid values, please see [SourceType](https://cloud.tencent.com/document/product/266/31773#MediaSourceData).
     * @param string $StreamId [LVB code](https://cloud.tencent.com/document/product/267/5959) of a stream.
     * @param string $Vid Unique ID of LVB recording file.
     * @param SortBy $Sort Sorting order.
<li>Valid value of `Sort.Field`: CreateTime</li>
<li>If `Text` is specified for the search, the results will be sorted by the match rate, and this field will not take effect</li>
     * @param integer $Offset <div id="p_offset">Start offset of a paged return. Default value: 0. Entries from No. "Offset" to No. "Offset + Limit - 1" will be returned.
<li>Value range: "Offset + Limit" cannot be more than 5,000. (For more information, please see <a href="#maxResultsDesc">Limit on the Number of Results Returned by API</a>)</li></div>
     * @param integer $Limit <div id="p_limit">Number of entries returned by a paged query. Default value: 10. Entries from No. "Offset" to No. "Offset + Limit - 1" will be returned.
<li>Value range: "Offset + Limit" cannot be more than 5,000. (For more information, please see <a href="#maxResultsDesc">Limit on the Number of Results Returned by API</a>)</li></div>
     * @param integer $SubAppId [Subapplication](/document/product/266/14574) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("ClassIds",$param) and $param["ClassIds"] !== null) {
            $this->ClassIds = $param["ClassIds"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("StreamId",$param) and $param["StreamId"] !== null) {
            $this->StreamId = $param["StreamId"];
        }

        if (array_key_exists("Vid",$param) and $param["Vid"] !== null) {
            $this->Vid = $param["Vid"];
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
