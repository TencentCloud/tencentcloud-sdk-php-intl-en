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
 * Basic information of an on-demand media file
 *
 * @method string getName() Obtain Media file name.
 * @method void setName(string $Name) Set Media file name.
 * @method string getDescription() Obtain Media file description.
 * @method void setDescription(string $Description) Set Media file description.
 * @method string getCreateTime() Obtain Media file creation time. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setCreateTime(string $CreateTime) Set Media file creation time. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getUpdateTime() Obtain Latest update time of the media file (operations such as modifying video attributes and initiating video processing will trigger updates to the media file information), in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setUpdateTime(string $UpdateTime) Set Latest update time of the media file (operations such as modifying video attributes and initiating video processing will trigger updates to the media file information), in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getExpireTime() Obtain Expiry date of the media file in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). After expiry, the media file and its related resources (transcoding results, sprites) will be permanently deleted. "9999-12-31T23:59:59Z" means it never expires.
 * @method void setExpireTime(string $ExpireTime) Set Expiry date of the media file in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). After expiry, the media file and its related resources (transcoding results, sprites) will be permanently deleted. "9999-12-31T23:59:59Z" means it never expires.
 * @method integer getClassId() Obtain Category ID of the media file.
 * @method void setClassId(integer $ClassId) Set Category ID of the media file.
 * @method string getClassName() Obtain Category name of the media file.
 * @method void setClassName(string $ClassName) Set Category name of the media file.
 * @method string getClassPath() Obtain Category path of the media file. Categories are separated by "-", for example "new first-level category - new sub-category".
 * @method void setClassPath(string $ClassPath) Set Category path of the media file. Categories are separated by "-", for example "new first-level category - new sub-category".
 * @method string getCoverUrl() Obtain Thumbnail URL of the media file.
 * @method void setCoverUrl(string $CoverUrl) Set Thumbnail URL of the media file.
 * @method string getType() Obtain Muxing format of the media file, for example, mp4 and flv.
 * @method void setType(string $Type) Set Muxing format of the media file, for example, mp4 and flv.
 * @method string getMediaUrl() Obtain URL address of the original media file.
 * @method void setMediaUrl(string $MediaUrl) Set URL address of the original media file.
 * @method MediaSourceData getSourceInfo() Obtain Source information of the media file.
 * @method void setSourceInfo(MediaSourceData $SourceInfo) Set Source information of the media file.
 * @method string getStorageRegion() Obtain Media file storage region, such as ap-chongqing. See region list (https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E5.B7.B2.E6.94.AF.E6.8C.81.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8).
 * @method void setStorageRegion(string $StorageRegion) Set Media file storage region, such as ap-chongqing. See region list (https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E5.B7.B2.E6.94.AF.E6.8C.81.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8).
 * @method string getStoragePath() Obtain Media storage path.
 * @method void setStoragePath(string $StoragePath) Set Media storage path.
 * @method array getTagSet() Obtain Tag information of the media file.
 * @method void setTagSet(array $TagSet) Set Tag information of the media file.
 * @method string getVid() Obtain Unique identifier of the live streaming recording file.
 * @method void setVid(string $Vid) Set Unique identifier of the live streaming recording file.
 * @method string getCategory() Obtain File type:
<li>Video: video file</li>
<li>Audio: audio file</li>
<li>Image: image file</li>
 * @method void setCategory(string $Category) Set File type:
<li>Video: video file</li>
<li>Audio: audio file</li>
<li>Image: image file</li>
 * @method string getStatus() Obtain File status: Normal: normal, Forbidden: blocked.
 * @method void setStatus(string $Status) Set File status: Normal: normal, Forbidden: blocked.
 * @method string getStorageClass() Obtain Storage class of a media file
<li> STANDARD: standard storage.</li>
<li> STANDARD_IA: Infrequent storage.</li>
<li> ARCHIVE: Archive storage.</li>
<li> DEEP_ARCHIVE: deep archive storage.</li>
 * @method void setStorageClass(string $StorageClass) Set Storage class of a media file
<li> STANDARD: standard storage.</li>
<li> STANDARD_IA: Infrequent storage.</li>
<li> ARCHIVE: Archive storage.</li>
<li> DEEP_ARCHIVE: deep archive storage.</li>
 */
class MediaBasicInfo extends AbstractModel
{
    /**
     * @var string Media file name.
     */
    public $Name;

    /**
     * @var string Media file description.
     */
    public $Description;

    /**
     * @var string Media file creation time. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $CreateTime;

    /**
     * @var string Latest update time of the media file (operations such as modifying video attributes and initiating video processing will trigger updates to the media file information), in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $UpdateTime;

    /**
     * @var string Expiry date of the media file in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). After expiry, the media file and its related resources (transcoding results, sprites) will be permanently deleted. "9999-12-31T23:59:59Z" means it never expires.
     */
    public $ExpireTime;

    /**
     * @var integer Category ID of the media file.
     */
    public $ClassId;

    /**
     * @var string Category name of the media file.
     */
    public $ClassName;

    /**
     * @var string Category path of the media file. Categories are separated by "-", for example "new first-level category - new sub-category".
     */
    public $ClassPath;

    /**
     * @var string Thumbnail URL of the media file.
     */
    public $CoverUrl;

    /**
     * @var string Muxing format of the media file, for example, mp4 and flv.
     */
    public $Type;

    /**
     * @var string URL address of the original media file.
     */
    public $MediaUrl;

    /**
     * @var MediaSourceData Source information of the media file.
     */
    public $SourceInfo;

    /**
     * @var string Media file storage region, such as ap-chongqing. See region list (https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E5.B7.B2.E6.94.AF.E6.8C.81.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8).
     */
    public $StorageRegion;

    /**
     * @var string Media storage path.
     */
    public $StoragePath;

    /**
     * @var array Tag information of the media file.
     */
    public $TagSet;

    /**
     * @var string Unique identifier of the live streaming recording file.
     */
    public $Vid;

    /**
     * @var string File type:
<li>Video: video file</li>
<li>Audio: audio file</li>
<li>Image: image file</li>
     */
    public $Category;

    /**
     * @var string File status: Normal: normal, Forbidden: blocked.
     */
    public $Status;

    /**
     * @var string Storage class of a media file
<li> STANDARD: standard storage.</li>
<li> STANDARD_IA: Infrequent storage.</li>
<li> ARCHIVE: Archive storage.</li>
<li> DEEP_ARCHIVE: deep archive storage.</li>
     */
    public $StorageClass;

    /**
     * @param string $Name Media file name.
     * @param string $Description Media file description.
     * @param string $CreateTime Media file creation time. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $UpdateTime Latest update time of the media file (operations such as modifying video attributes and initiating video processing will trigger updates to the media file information), in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $ExpireTime Expiry date of the media file in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). After expiry, the media file and its related resources (transcoding results, sprites) will be permanently deleted. "9999-12-31T23:59:59Z" means it never expires.
     * @param integer $ClassId Category ID of the media file.
     * @param string $ClassName Category name of the media file.
     * @param string $ClassPath Category path of the media file. Categories are separated by "-", for example "new first-level category - new sub-category".
     * @param string $CoverUrl Thumbnail URL of the media file.
     * @param string $Type Muxing format of the media file, for example, mp4 and flv.
     * @param string $MediaUrl URL address of the original media file.
     * @param MediaSourceData $SourceInfo Source information of the media file.
     * @param string $StorageRegion Media file storage region, such as ap-chongqing. See region list (https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E5.B7.B2.E6.94.AF.E6.8C.81.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8).
     * @param string $StoragePath Media storage path.
     * @param array $TagSet Tag information of the media file.
     * @param string $Vid Unique identifier of the live streaming recording file.
     * @param string $Category File type:
<li>Video: video file</li>
<li>Audio: audio file</li>
<li>Image: image file</li>
     * @param string $Status File status: Normal: normal, Forbidden: blocked.
     * @param string $StorageClass Storage class of a media file
<li> STANDARD: standard storage.</li>
<li> STANDARD_IA: Infrequent storage.</li>
<li> ARCHIVE: Archive storage.</li>
<li> DEEP_ARCHIVE: deep archive storage.</li>
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
