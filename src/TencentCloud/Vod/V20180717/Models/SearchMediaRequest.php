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
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method array getFileIds() Obtain 
 * @method void setFileIds(array $FileIds) Set 
 * @method array getNames() Obtain 
 * @method void setNames(array $Names) Set 
 * @method array getNamePrefixes() Obtain 
 * @method void setNamePrefixes(array $NamePrefixes) Set 
 * @method array getDescriptions() Obtain 
 * @method void setDescriptions(array $Descriptions) Set 
 * @method array getClassIds() Obtain 
 * @method void setClassIds(array $ClassIds) Set 
 * @method array getTags() Obtain 
 * @method void setTags(array $Tags) Set 
 * @method array getCategories() Obtain 
 * @method void setCategories(array $Categories) Set 
 * @method array getSourceTypes() Obtain 
 * @method void setSourceTypes(array $SourceTypes) Set 
 * @method array getStreamIds() Obtain 
 * @method void setStreamIds(array $StreamIds) Set 
 * @method TimeRange getCreateTime() Obtain 
 * @method void setCreateTime(TimeRange $CreateTime) Set 
 * @method TimeRange getExpireTime() Obtain 
 * @method void setExpireTime(TimeRange $ExpireTime) Set 
 * @method array getStorageRegions() Obtain 
 * @method void setStorageRegions(array $StorageRegions) Set 
 * @method array getStorageClasses() Obtain 
 * @method void setStorageClasses(array $StorageClasses) Set 
 * @method array getMediaTypes() Obtain 
 * @method void setMediaTypes(array $MediaTypes) Set 
 * @method array getStatus() Obtain 
 * @method void setStatus(array $Status) Set 
 * @method array getReviewResults() Obtain 
 * @method void setReviewResults(array $ReviewResults) Set 
 * @method array getTrtcSdkAppIds() Obtain 
 * @method void setTrtcSdkAppIds(array $TrtcSdkAppIds) Set 
 * @method array getTrtcRoomIds() Obtain 
 * @method void setTrtcRoomIds(array $TrtcRoomIds) Set 
 * @method array getFilters() Obtain 
 * @method void setFilters(array $Filters) Set 
 * @method SortBy getSort() Obtain 
 * @method void setSort(SortBy $Sort) Set 
 * @method integer getOffset() Obtain 
 * @method void setOffset(integer $Offset) Set 
 * @method integer getLimit() Obtain 
 * @method void setLimit(integer $Limit) Set 
 * @method string getText() Obtain 
 * @method void setText(string $Text) Set 
 * @method string getSourceType() Obtain 
 * @method void setSourceType(string $SourceType) Set 
 * @method string getStreamId() Obtain 
 * @method void setStreamId(string $StreamId) Set 
 * @method string getStartTime() Obtain 
 * @method void setStartTime(string $StartTime) Set 
 * @method string getEndTime() Obtain 
 * @method void setEndTime(string $EndTime) Set 
 * @method array getVids() Obtain 
 * @method void setVids(array $Vids) Set 
 * @method string getVid() Obtain 
 * @method void setVid(string $Vid) Set 
 * @method array getStreamDomains() Obtain 
 * @method void setStreamDomains(array $StreamDomains) Set 
 * @method array getStreamPaths() Obtain 
 * @method void setStreamPaths(array $StreamPaths) Set 
 * @method array getKnowledgeBases() Obtain 
 * @method void setKnowledgeBases(array $KnowledgeBases) Set 
 */
class SearchMediaRequest extends AbstractModel
{
    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var array 
     */
    public $FileIds;

    /**
     * @var array 
     */
    public $Names;

    /**
     * @var array 
     */
    public $NamePrefixes;

    /**
     * @var array 
     */
    public $Descriptions;

    /**
     * @var array 
     */
    public $ClassIds;

    /**
     * @var array 
     */
    public $Tags;

    /**
     * @var array 
     */
    public $Categories;

    /**
     * @var array 
     */
    public $SourceTypes;

    /**
     * @var array 
     */
    public $StreamIds;

    /**
     * @var TimeRange 
     */
    public $CreateTime;

    /**
     * @var TimeRange 
     */
    public $ExpireTime;

    /**
     * @var array 
     */
    public $StorageRegions;

    /**
     * @var array 
     */
    public $StorageClasses;

    /**
     * @var array 
     */
    public $MediaTypes;

    /**
     * @var array 
     */
    public $Status;

    /**
     * @var array 
     */
    public $ReviewResults;

    /**
     * @var array 
     */
    public $TrtcSdkAppIds;

    /**
     * @var array 
     */
    public $TrtcRoomIds;

    /**
     * @var array 
     */
    public $Filters;

    /**
     * @var SortBy 
     */
    public $Sort;

    /**
     * @var integer 
     */
    public $Offset;

    /**
     * @var integer 
     */
    public $Limit;

    /**
     * @var string 
     */
    public $Text;

    /**
     * @var string 
     */
    public $SourceType;

    /**
     * @var string 
     */
    public $StreamId;

    /**
     * @var string 
     */
    public $StartTime;

    /**
     * @var string 
     */
    public $EndTime;

    /**
     * @var array 
     */
    public $Vids;

    /**
     * @var string 
     */
    public $Vid;

    /**
     * @var array 
     */
    public $StreamDomains;

    /**
     * @var array 
     */
    public $StreamPaths;

    /**
     * @var array 
     */
    public $KnowledgeBases;

    /**
     * @param integer $SubAppId 
     * @param array $FileIds 
     * @param array $Names 
     * @param array $NamePrefixes 
     * @param array $Descriptions 
     * @param array $ClassIds 
     * @param array $Tags 
     * @param array $Categories 
     * @param array $SourceTypes 
     * @param array $StreamIds 
     * @param TimeRange $CreateTime 
     * @param TimeRange $ExpireTime 
     * @param array $StorageRegions 
     * @param array $StorageClasses 
     * @param array $MediaTypes 
     * @param array $Status 
     * @param array $ReviewResults 
     * @param array $TrtcSdkAppIds 
     * @param array $TrtcRoomIds 
     * @param array $Filters 
     * @param SortBy $Sort 
     * @param integer $Offset 
     * @param integer $Limit 
     * @param string $Text 
     * @param string $SourceType 
     * @param string $StreamId 
     * @param string $StartTime 
     * @param string $EndTime 
     * @param array $Vids 
     * @param string $Vid 
     * @param array $StreamDomains 
     * @param array $StreamPaths 
     * @param array $KnowledgeBases 
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

        if (array_key_exists("KnowledgeBases",$param) and $param["KnowledgeBases"] !== null) {
            $this->KnowledgeBases = $param["KnowledgeBases"];
        }
    }
}
