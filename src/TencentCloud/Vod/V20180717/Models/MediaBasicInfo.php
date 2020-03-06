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
 * @method string getName() Obtain Media filename.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Media filename.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Media file description.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Media file description.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time of media file in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time of media file in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Last update time of media file (by an operation that triggers updating of media file information such as modifying video attributes or initiating video processing) in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Last update time of media file (by an operation that triggers updating of media file information such as modifying video attributes or initiating video processing) in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getExpireTime() Obtain Expiration time of media file in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I). After the expiration, the media file and its related resources (such as transcoding results and image sprites) will be permanently deleted. `9999-12-31T23:59:59Z` means "never expire".
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setExpireTime(string $ExpireTime) Set Expiration time of media file in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I). After the expiration, the media file and its related resources (such as transcoding results and image sprites) will be permanently deleted. `9999-12-31T23:59:59Z` means "never expire".
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getClassId() Obtain Category ID of media file.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setClassId(integer $ClassId) Set Category ID of media file.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getClassName() Obtain Category name of media file.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setClassName(string $ClassName) Set Category name of media file.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getClassPath() Obtain Category path to media file separated by "-", such as "new first-level category - new second-level category".
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setClassPath(string $ClassPath) Set Category path to media file separated by "-", such as "new first-level category - new second-level category".
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCoverUrl() Obtain Cover image address of media file.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCoverUrl(string $CoverUrl) Set Cover image address of media file.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Media file container, such as mp4 and flv.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Media file container, such as mp4 and flv.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMediaUrl() Obtain URL of source media file.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMediaUrl(string $MediaUrl) Set URL of source media file.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method MediaSourceData getSourceInfo() Obtain Source information of media file.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSourceInfo(MediaSourceData $SourceInfo) Set Source information of media file.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getStorageRegion() Obtain Storage region of media file, such as ap-guangzhou. For more information, please see [Region List](https://cloud.tencent.com/document/api/213/15692#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStorageRegion(string $StorageRegion) Set Storage region of media file, such as ap-guangzhou. For more information, please see [Region List](https://cloud.tencent.com/document/api/213/15692#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTagSet() Obtain Tag information of media file.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTagSet(array $TagSet) Set Tag information of media file.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getVid() Obtain Unique ID of LVB recording file
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVid(string $Vid) Set Unique ID of LVB recording file
Note: this field may return null, indicating that no valid values can be obtained.
 */

/**
 *Basic information of VOD media file
 */
class MediaBasicInfo extends AbstractModel
{
    /**
     * @var string Media filename.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Media file description.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Creation time of media file in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Last update time of media file (by an operation that triggers updating of media file information such as modifying video attributes or initiating video processing) in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string Expiration time of media file in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I). After the expiration, the media file and its related resources (such as transcoding results and image sprites) will be permanently deleted. `9999-12-31T23:59:59Z` means "never expire".
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ExpireTime;

    /**
     * @var integer Category ID of media file.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ClassId;

    /**
     * @var string Category name of media file.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ClassName;

    /**
     * @var string Category path to media file separated by "-", such as "new first-level category - new second-level category".
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ClassPath;

    /**
     * @var string Cover image address of media file.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CoverUrl;

    /**
     * @var string Media file container, such as mp4 and flv.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string URL of source media file.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MediaUrl;

    /**
     * @var MediaSourceData Source information of media file.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SourceInfo;

    /**
     * @var string Storage region of media file, such as ap-guangzhou. For more information, please see [Region List](https://cloud.tencent.com/document/api/213/15692#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8).
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StorageRegion;

    /**
     * @var array Tag information of media file.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TagSet;

    /**
     * @var string Unique ID of LVB recording file
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Vid;
    /**
     * @param string $Name Media filename.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Description Media file description.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time of media file in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Last update time of media file (by an operation that triggers updating of media file information such as modifying video attributes or initiating video processing) in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ExpireTime Expiration time of media file in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I). After the expiration, the media file and its related resources (such as transcoding results and image sprites) will be permanently deleted. `9999-12-31T23:59:59Z` means "never expire".
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ClassId Category ID of media file.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ClassName Category name of media file.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ClassPath Category path to media file separated by "-", such as "new first-level category - new second-level category".
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CoverUrl Cover image address of media file.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Type Media file container, such as mp4 and flv.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $MediaUrl URL of source media file.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param MediaSourceData $SourceInfo Source information of media file.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $StorageRegion Storage region of media file, such as ap-guangzhou. For more information, please see [Region List](https://cloud.tencent.com/document/api/213/15692#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8).
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $TagSet Tag information of media file.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Vid Unique ID of LVB recording file
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = $param["TagSet"];
        }

        if (array_key_exists("Vid",$param) and $param["Vid"] !== null) {
            $this->Vid = $param["Vid"];
        }
    }
}
