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
 * 
 *
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method string getDescription() Obtain 
 * @method void setDescription(string $Description) Set 
 * @method string getCreateTime() Obtain 
 * @method void setCreateTime(string $CreateTime) Set 
 * @method string getUpdateTime() Obtain 
 * @method void setUpdateTime(string $UpdateTime) Set 
 * @method string getExpireTime() Obtain 
 * @method void setExpireTime(string $ExpireTime) Set 
 * @method integer getClassId() Obtain 
 * @method void setClassId(integer $ClassId) Set 
 * @method string getClassName() Obtain 
 * @method void setClassName(string $ClassName) Set 
 * @method string getClassPath() Obtain 
 * @method void setClassPath(string $ClassPath) Set 
 * @method string getCoverUrl() Obtain 
 * @method void setCoverUrl(string $CoverUrl) Set 
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method string getMediaUrl() Obtain 
 * @method void setMediaUrl(string $MediaUrl) Set 
 * @method MediaSourceData getSourceInfo() Obtain 
 * @method void setSourceInfo(MediaSourceData $SourceInfo) Set 
 * @method string getStorageRegion() Obtain 
 * @method void setStorageRegion(string $StorageRegion) Set 
 * @method string getStoragePath() Obtain 
 * @method void setStoragePath(string $StoragePath) Set 
 * @method array getTagSet() Obtain 
 * @method void setTagSet(array $TagSet) Set 
 * @method string getVid() Obtain 
 * @method void setVid(string $Vid) Set 
 * @method string getCategory() Obtain 
 * @method void setCategory(string $Category) Set 
 * @method string getStatus() Obtain 
 * @method void setStatus(string $Status) Set 
 * @method string getStorageClass() Obtain 
 * @method void setStorageClass(string $StorageClass) Set 
 */
class MediaBasicInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $Name;

    /**
     * @var string 
     */
    public $Description;

    /**
     * @var string 
     */
    public $CreateTime;

    /**
     * @var string 
     */
    public $UpdateTime;

    /**
     * @var string 
     */
    public $ExpireTime;

    /**
     * @var integer 
     */
    public $ClassId;

    /**
     * @var string 
     */
    public $ClassName;

    /**
     * @var string 
     */
    public $ClassPath;

    /**
     * @var string 
     */
    public $CoverUrl;

    /**
     * @var string 
     */
    public $Type;

    /**
     * @var string 
     */
    public $MediaUrl;

    /**
     * @var MediaSourceData 
     */
    public $SourceInfo;

    /**
     * @var string 
     */
    public $StorageRegion;

    /**
     * @var string 
     */
    public $StoragePath;

    /**
     * @var array 
     */
    public $TagSet;

    /**
     * @var string 
     */
    public $Vid;

    /**
     * @var string 
     */
    public $Category;

    /**
     * @var string 
     */
    public $Status;

    /**
     * @var string 
     */
    public $StorageClass;

    /**
     * @param string $Name 
     * @param string $Description 
     * @param string $CreateTime 
     * @param string $UpdateTime 
     * @param string $ExpireTime 
     * @param integer $ClassId 
     * @param string $ClassName 
     * @param string $ClassPath 
     * @param string $CoverUrl 
     * @param string $Type 
     * @param string $MediaUrl 
     * @param MediaSourceData $SourceInfo 
     * @param string $StorageRegion 
     * @param string $StoragePath 
     * @param array $TagSet 
     * @param string $Vid 
     * @param string $Category 
     * @param string $Status 
     * @param string $StorageClass 
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("ClassName",$param) and $param["ClassName"] !== null) {
            $this->ClassName = $param["ClassName"];
        }

        if (array_key_exists("ClassPath",$param) and $param["ClassPath"] !== null) {
            $this->ClassPath = $param["ClassPath"];
        }

        if (array_key_exists("CoverUrl",$param) and $param["CoverUrl"] !== null) {
            $this->CoverUrl = $param["CoverUrl"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("MediaUrl",$param) and $param["MediaUrl"] !== null) {
            $this->MediaUrl = $param["MediaUrl"];
        }

        if (array_key_exists("SourceInfo",$param) and $param["SourceInfo"] !== null) {
            $this->SourceInfo = new MediaSourceData();
            $this->SourceInfo->deserialize($param["SourceInfo"]);
        }

        if (array_key_exists("StorageRegion",$param) and $param["StorageRegion"] !== null) {
            $this->StorageRegion = $param["StorageRegion"];
        }

        if (array_key_exists("StoragePath",$param) and $param["StoragePath"] !== null) {
            $this->StoragePath = $param["StoragePath"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = $param["TagSet"];
        }

        if (array_key_exists("Vid",$param) and $param["Vid"] !== null) {
            $this->Vid = $param["Vid"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StorageClass",$param) and $param["StorageClass"] !== null) {
            $this->StorageClass = $param["StorageClass"];
        }
    }
}
