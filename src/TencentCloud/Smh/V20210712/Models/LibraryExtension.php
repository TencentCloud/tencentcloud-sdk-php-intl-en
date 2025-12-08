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
namespace TencentCloud\Smh\V20210712\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Media library configuration item.
 *
 * @method boolean getIsFileLibrary() Obtain Specifies whether it is a file type media library that can store any type of file (true) or a media type media library that can only store images and playable video types (false). defaults to false. cannot be modified once created.
 * @method void setIsFileLibrary(boolean $IsFileLibrary) Set Specifies whether it is a file type media library that can store any type of file (true) or a media type media library that can only store images and playable video types (false). defaults to false. cannot be modified once created.
 * @method boolean getIsMultiSpace() Obtain true indicates a multi-tenant space media library, allowing the creation of multiple tenant spaces. false indicates a single-tenant space media library, where tenant spaces cannot be created and only the default single tenant space can be used. defaults to false. cannot be modified after the media library is created.
 * @method void setIsMultiSpace(boolean $IsMultiSpace) Set true indicates a multi-tenant space media library, allowing the creation of multiple tenant spaces. false indicates a single-tenant space media library, where tenant spaces cannot be created and only the default single tenant space can be used. defaults to false. cannot be modified after the media library is created.
 * @method string getCosStorageClass() Obtain Specifies the storage type for files saved to cloud object storage. valid values: STANDARD, STANDARD_IA, INTELLIGENT_TIERING, MAZ_STANDARD, MAZ_STANDARD_IA, and MAZ_INTELLIGENT_TIERING. defaults to STANDARD. when using a multi-AZ bucket, MAZ_ prefixed storage types for multi-AZ are automatically used, otherwise non-MAZ_ prefixed storage types for non-multi-AZ are used. when specifying INTELLIGENT TIERING storage INTELLIGENT_TIERING or MAZ_INTELLIGENT_TIERING, the bucket must have INTELLIGENT TIERING storage enabled beforehand, otherwise failure will be returned. cannot be modified after the media library is created.
 * @method void setCosStorageClass(string $CosStorageClass) Set Specifies the storage type for files saved to cloud object storage. valid values: STANDARD, STANDARD_IA, INTELLIGENT_TIERING, MAZ_STANDARD, MAZ_STANDARD_IA, and MAZ_INTELLIGENT_TIERING. defaults to STANDARD. when using a multi-AZ bucket, MAZ_ prefixed storage types for multi-AZ are automatically used, otherwise non-MAZ_ prefixed storage types for non-multi-AZ are used. when specifying INTELLIGENT TIERING storage INTELLIGENT_TIERING or MAZ_INTELLIGENT_TIERING, the bucket must have INTELLIGENT TIERING storage enabled beforehand, otherwise failure will be returned. cannot be modified after the media library is created.
 * @method boolean getUseRecycleBin() Obtain Specifies whether the recycle bin feature is enabled. defaults to false.
 * @method void setUseRecycleBin(boolean $UseRecycleBin) Set Specifies whether the recycle bin feature is enabled. defaults to false.
 * @method integer getAutoRemoveRecycledDays() Obtain Specifies the number of days to automatically delete items in the recycle bin when enabled, must not exceed 1095 (3 years). a value of 0 indicates no automatic deletion, defaults to 0. this property is null when the recycle bin is not enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAutoRemoveRecycledDays(integer $AutoRemoveRecycledDays) Set Specifies the number of days to automatically delete items in the recycle bin when enabled, must not exceed 1095 (3 years). a value of 0 indicates no automatic deletion, defaults to 0. this property is null when the recycle bin is not enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getEnableSearch() Obtain Whether to enable the file path search feature. is false by default.
 * @method void setEnableSearch(boolean $EnableSearch) Set Whether to enable the file path search feature. is false by default.
 * @method boolean getDenyOnQuotaLessThanUsage() Obtain Specifies whether to deny the configuration request when setting the space quota for a media library or tenant and the quota is less than the used storage capacity. is false by default.
 * @method void setDenyOnQuotaLessThanUsage(boolean $DenyOnQuotaLessThanUsage) Set Specifies whether to deny the configuration request when setting the space quota for a media library or tenant and the quota is less than the used storage capacity. is false by default.
 * @method boolean getEnableFileHistory() Obtain Specifies whether the earlier version is enabled. defaults to false.
 * @method void setEnableFileHistory(boolean $EnableFileHistory) Set Specifies whether the earlier version is enabled. defaults to false.
 * @method integer getFileHistoryCount() Obtain Specifies the maximum number of historical versions to retain for a single file when versioning is enabled, with a value range of 1 to 999. this property may be null when versioning is not enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileHistoryCount(integer $FileHistoryCount) Set Specifies the maximum number of historical versions to retain for a single file when versioning is enabled, with a value range of 1 to 999. this property may be null when versioning is not enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFileHistoryExpireDay() Obtain Specifies the maximum days to retain earlier versions when versioning is enabled, with a value range of 0 to 999. when set to 0, it represents permanent retention. this property may be null when versioning is not enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileHistoryExpireDay(integer $FileHistoryExpireDay) Set Specifies the maximum days to retain earlier versions when versioning is enabled, with a value range of 0 to 999. when set to 0, it represents permanent retention. this property may be null when versioning is not enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxDirFileNameLength() Obtain The maximum length of a directory or file name must not exceed 255, with a default value of 255. modifying this parameter will not affect existing directories or file names. if the value of this field is decreased, the length of existing directories or file names exceeding the target value does not change.
 * @method void setMaxDirFileNameLength(integer $MaxDirFileNameLength) Set The maximum length of a directory or file name must not exceed 255, with a default value of 255. modifying this parameter will not affect existing directories or file names. if the value of this field is decreased, the length of existing directories or file names exceeding the target value does not change.
 * @method boolean getIsPublicRead() Obtain Whether public read is enabled. once enabled, read operations require no access token. it is false by default. this property is supported only in single-tenant space media libraries. otherwise, it is null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsPublicRead(boolean $IsPublicRead) Set Whether public read is enabled. once enabled, read operations require no access token. it is false by default. this property is supported only in single-tenant space media libraries. otherwise, it is null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsMultiAlbum() Obtain Specifies whether the multi-album feature is enabled for the media type media library. once enabled, first-level directories (albums) can be created, and media files can only be saved in these albums. unless enabled, albums cannot be created, and media files can only be saved in the root directory. defaults to false. this property is only supported for single-tenant space media type media libraries, otherwise it is null. cannot be modified after the media library is created.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsMultiAlbum(boolean $IsMultiAlbum) Set Specifies whether the multi-album feature is enabled for the media type media library. once enabled, first-level directories (albums) can be created, and media files can only be saved in these albums. unless enabled, albums cannot be created, and media files can only be saved in the root directory. defaults to false. this property is only supported for single-tenant space media type media libraries, otherwise it is null. cannot be modified after the media library is created.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getAllowPhoto() Obtain Specifies whether the media library of the media type allows image uploads, set to true by default. this property is supported only for the media library of the media type in a single tenant space, otherwise it is null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAllowPhoto(boolean $AllowPhoto) Set Specifies whether the media library of the media type allows image uploads, set to true by default. this property is supported only for the media library of the media type in a single tenant space, otherwise it is null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAllowPhotoExtName() Obtain Specifies the allowed extensions when the media type media library allows photo uploads. empty array by default. at this point, it will automatically determine based on the MIME type corresponding to the file extension. this property is supported only for single-tenant space media type media libraries. otherwise, the property is null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAllowPhotoExtName(array $AllowPhotoExtName) Set Specifies the allowed extensions when the media type media library allows photo uploads. empty array by default. at this point, it will automatically determine based on the MIME type corresponding to the file extension. this property is supported only for single-tenant space media type media libraries. otherwise, the property is null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getAllowVideo() Obtain Media type media library specifies whether video upload is allowed, set to true by default. this property is supported only in single tenant space media type media library, otherwise the property is null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAllowVideo(boolean $AllowVideo) Set Media type media library specifies whether video upload is allowed, set to true by default. this property is supported only in single tenant space media type media library, otherwise the property is null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAllowVideoExtName() Obtain Specifies the allowed extensions when the media type media library permits video uploads. the default is an empty array, at which point it will automatically determine based on the MIME type corresponding to the file extension. this property is supported only for single-tenant space media type media libraries, otherwise it is null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAllowVideoExtName(array $AllowVideoExtName) Set Specifies the allowed extensions when the media type media library permits video uploads. the default is an empty array, at which point it will automatically determine based on the MIME type corresponding to the file extension. this property is supported only for single-tenant space media type media libraries, otherwise it is null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAllowFileExtName() Obtain Specifies the file extensions allowed in the file type media library, empty by default. at this point, all types of files are upload allowed. this property is supported only for the file type media library in a single tenant space, otherwise it is null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAllowFileExtName(array $AllowFileExtName) Set Specifies the file extensions allowed in the file type media library, empty by default. at this point, all types of files are upload allowed. this property is supported only for the file type media library in a single tenant space, otherwise it is null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getRecognizeSensitiveContent() Obtain Specifies whether to perform sensitive content identification during image upload. the value is false by default. this property is supported only in the single-tenant space media library, otherwise it is null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRecognizeSensitiveContent(boolean $RecognizeSensitiveContent) Set Specifies whether to perform sensitive content identification during image upload. the value is false by default. this property is supported only in the single-tenant space media library, otherwise it is null.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class LibraryExtension extends AbstractModel
{
    /**
     * @var boolean Specifies whether it is a file type media library that can store any type of file (true) or a media type media library that can only store images and playable video types (false). defaults to false. cannot be modified once created.
     */
    public $IsFileLibrary;

    /**
     * @var boolean true indicates a multi-tenant space media library, allowing the creation of multiple tenant spaces. false indicates a single-tenant space media library, where tenant spaces cannot be created and only the default single tenant space can be used. defaults to false. cannot be modified after the media library is created.
     */
    public $IsMultiSpace;

    /**
     * @var string Specifies the storage type for files saved to cloud object storage. valid values: STANDARD, STANDARD_IA, INTELLIGENT_TIERING, MAZ_STANDARD, MAZ_STANDARD_IA, and MAZ_INTELLIGENT_TIERING. defaults to STANDARD. when using a multi-AZ bucket, MAZ_ prefixed storage types for multi-AZ are automatically used, otherwise non-MAZ_ prefixed storage types for non-multi-AZ are used. when specifying INTELLIGENT TIERING storage INTELLIGENT_TIERING or MAZ_INTELLIGENT_TIERING, the bucket must have INTELLIGENT TIERING storage enabled beforehand, otherwise failure will be returned. cannot be modified after the media library is created.
     */
    public $CosStorageClass;

    /**
     * @var boolean Specifies whether the recycle bin feature is enabled. defaults to false.
     */
    public $UseRecycleBin;

    /**
     * @var integer Specifies the number of days to automatically delete items in the recycle bin when enabled, must not exceed 1095 (3 years). a value of 0 indicates no automatic deletion, defaults to 0. this property is null when the recycle bin is not enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AutoRemoveRecycledDays;

    /**
     * @var boolean Whether to enable the file path search feature. is false by default.
     */
    public $EnableSearch;

    /**
     * @var boolean Specifies whether to deny the configuration request when setting the space quota for a media library or tenant and the quota is less than the used storage capacity. is false by default.
     */
    public $DenyOnQuotaLessThanUsage;

    /**
     * @var boolean Specifies whether the earlier version is enabled. defaults to false.
     */
    public $EnableFileHistory;

    /**
     * @var integer Specifies the maximum number of historical versions to retain for a single file when versioning is enabled, with a value range of 1 to 999. this property may be null when versioning is not enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileHistoryCount;

    /**
     * @var integer Specifies the maximum days to retain earlier versions when versioning is enabled, with a value range of 0 to 999. when set to 0, it represents permanent retention. this property may be null when versioning is not enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileHistoryExpireDay;

    /**
     * @var integer The maximum length of a directory or file name must not exceed 255, with a default value of 255. modifying this parameter will not affect existing directories or file names. if the value of this field is decreased, the length of existing directories or file names exceeding the target value does not change.
     */
    public $MaxDirFileNameLength;

    /**
     * @var boolean Whether public read is enabled. once enabled, read operations require no access token. it is false by default. this property is supported only in single-tenant space media libraries. otherwise, it is null.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsPublicRead;

    /**
     * @var boolean Specifies whether the multi-album feature is enabled for the media type media library. once enabled, first-level directories (albums) can be created, and media files can only be saved in these albums. unless enabled, albums cannot be created, and media files can only be saved in the root directory. defaults to false. this property is only supported for single-tenant space media type media libraries, otherwise it is null. cannot be modified after the media library is created.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsMultiAlbum;

    /**
     * @var boolean Specifies whether the media library of the media type allows image uploads, set to true by default. this property is supported only for the media library of the media type in a single tenant space, otherwise it is null.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AllowPhoto;

    /**
     * @var array Specifies the allowed extensions when the media type media library allows photo uploads. empty array by default. at this point, it will automatically determine based on the MIME type corresponding to the file extension. this property is supported only for single-tenant space media type media libraries. otherwise, the property is null.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AllowPhotoExtName;

    /**
     * @var boolean Media type media library specifies whether video upload is allowed, set to true by default. this property is supported only in single tenant space media type media library, otherwise the property is null.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AllowVideo;

    /**
     * @var array Specifies the allowed extensions when the media type media library permits video uploads. the default is an empty array, at which point it will automatically determine based on the MIME type corresponding to the file extension. this property is supported only for single-tenant space media type media libraries, otherwise it is null.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AllowVideoExtName;

    /**
     * @var array Specifies the file extensions allowed in the file type media library, empty by default. at this point, all types of files are upload allowed. this property is supported only for the file type media library in a single tenant space, otherwise it is null.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AllowFileExtName;

    /**
     * @var boolean Specifies whether to perform sensitive content identification during image upload. the value is false by default. this property is supported only in the single-tenant space media library, otherwise it is null.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RecognizeSensitiveContent;

    /**
     * @param boolean $IsFileLibrary Specifies whether it is a file type media library that can store any type of file (true) or a media type media library that can only store images and playable video types (false). defaults to false. cannot be modified once created.
     * @param boolean $IsMultiSpace true indicates a multi-tenant space media library, allowing the creation of multiple tenant spaces. false indicates a single-tenant space media library, where tenant spaces cannot be created and only the default single tenant space can be used. defaults to false. cannot be modified after the media library is created.
     * @param string $CosStorageClass Specifies the storage type for files saved to cloud object storage. valid values: STANDARD, STANDARD_IA, INTELLIGENT_TIERING, MAZ_STANDARD, MAZ_STANDARD_IA, and MAZ_INTELLIGENT_TIERING. defaults to STANDARD. when using a multi-AZ bucket, MAZ_ prefixed storage types for multi-AZ are automatically used, otherwise non-MAZ_ prefixed storage types for non-multi-AZ are used. when specifying INTELLIGENT TIERING storage INTELLIGENT_TIERING or MAZ_INTELLIGENT_TIERING, the bucket must have INTELLIGENT TIERING storage enabled beforehand, otherwise failure will be returned. cannot be modified after the media library is created.
     * @param boolean $UseRecycleBin Specifies whether the recycle bin feature is enabled. defaults to false.
     * @param integer $AutoRemoveRecycledDays Specifies the number of days to automatically delete items in the recycle bin when enabled, must not exceed 1095 (3 years). a value of 0 indicates no automatic deletion, defaults to 0. this property is null when the recycle bin is not enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $EnableSearch Whether to enable the file path search feature. is false by default.
     * @param boolean $DenyOnQuotaLessThanUsage Specifies whether to deny the configuration request when setting the space quota for a media library or tenant and the quota is less than the used storage capacity. is false by default.
     * @param boolean $EnableFileHistory Specifies whether the earlier version is enabled. defaults to false.
     * @param integer $FileHistoryCount Specifies the maximum number of historical versions to retain for a single file when versioning is enabled, with a value range of 1 to 999. this property may be null when versioning is not enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FileHistoryExpireDay Specifies the maximum days to retain earlier versions when versioning is enabled, with a value range of 0 to 999. when set to 0, it represents permanent retention. this property may be null when versioning is not enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxDirFileNameLength The maximum length of a directory or file name must not exceed 255, with a default value of 255. modifying this parameter will not affect existing directories or file names. if the value of this field is decreased, the length of existing directories or file names exceeding the target value does not change.
     * @param boolean $IsPublicRead Whether public read is enabled. once enabled, read operations require no access token. it is false by default. this property is supported only in single-tenant space media libraries. otherwise, it is null.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsMultiAlbum Specifies whether the multi-album feature is enabled for the media type media library. once enabled, first-level directories (albums) can be created, and media files can only be saved in these albums. unless enabled, albums cannot be created, and media files can only be saved in the root directory. defaults to false. this property is only supported for single-tenant space media type media libraries, otherwise it is null. cannot be modified after the media library is created.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $AllowPhoto Specifies whether the media library of the media type allows image uploads, set to true by default. this property is supported only for the media library of the media type in a single tenant space, otherwise it is null.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AllowPhotoExtName Specifies the allowed extensions when the media type media library allows photo uploads. empty array by default. at this point, it will automatically determine based on the MIME type corresponding to the file extension. this property is supported only for single-tenant space media type media libraries. otherwise, the property is null.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $AllowVideo Media type media library specifies whether video upload is allowed, set to true by default. this property is supported only in single tenant space media type media library, otherwise the property is null.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AllowVideoExtName Specifies the allowed extensions when the media type media library permits video uploads. the default is an empty array, at which point it will automatically determine based on the MIME type corresponding to the file extension. this property is supported only for single-tenant space media type media libraries, otherwise it is null.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AllowFileExtName Specifies the file extensions allowed in the file type media library, empty by default. at this point, all types of files are upload allowed. this property is supported only for the file type media library in a single tenant space, otherwise it is null.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $RecognizeSensitiveContent Specifies whether to perform sensitive content identification during image upload. the value is false by default. this property is supported only in the single-tenant space media library, otherwise it is null.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("IsFileLibrary",$param) and $param["IsFileLibrary"] !== null) {
            $this->IsFileLibrary = $param["IsFileLibrary"];
        }

        if (array_key_exists("IsMultiSpace",$param) and $param["IsMultiSpace"] !== null) {
            $this->IsMultiSpace = $param["IsMultiSpace"];
        }

        if (array_key_exists("CosStorageClass",$param) and $param["CosStorageClass"] !== null) {
            $this->CosStorageClass = $param["CosStorageClass"];
        }

        if (array_key_exists("UseRecycleBin",$param) and $param["UseRecycleBin"] !== null) {
            $this->UseRecycleBin = $param["UseRecycleBin"];
        }

        if (array_key_exists("AutoRemoveRecycledDays",$param) and $param["AutoRemoveRecycledDays"] !== null) {
            $this->AutoRemoveRecycledDays = $param["AutoRemoveRecycledDays"];
        }

        if (array_key_exists("EnableSearch",$param) and $param["EnableSearch"] !== null) {
            $this->EnableSearch = $param["EnableSearch"];
        }

        if (array_key_exists("DenyOnQuotaLessThanUsage",$param) and $param["DenyOnQuotaLessThanUsage"] !== null) {
            $this->DenyOnQuotaLessThanUsage = $param["DenyOnQuotaLessThanUsage"];
        }

        if (array_key_exists("EnableFileHistory",$param) and $param["EnableFileHistory"] !== null) {
            $this->EnableFileHistory = $param["EnableFileHistory"];
        }

        if (array_key_exists("FileHistoryCount",$param) and $param["FileHistoryCount"] !== null) {
            $this->FileHistoryCount = $param["FileHistoryCount"];
        }

        if (array_key_exists("FileHistoryExpireDay",$param) and $param["FileHistoryExpireDay"] !== null) {
            $this->FileHistoryExpireDay = $param["FileHistoryExpireDay"];
        }

        if (array_key_exists("MaxDirFileNameLength",$param) and $param["MaxDirFileNameLength"] !== null) {
            $this->MaxDirFileNameLength = $param["MaxDirFileNameLength"];
        }

        if (array_key_exists("IsPublicRead",$param) and $param["IsPublicRead"] !== null) {
            $this->IsPublicRead = $param["IsPublicRead"];
        }

        if (array_key_exists("IsMultiAlbum",$param) and $param["IsMultiAlbum"] !== null) {
            $this->IsMultiAlbum = $param["IsMultiAlbum"];
        }

        if (array_key_exists("AllowPhoto",$param) and $param["AllowPhoto"] !== null) {
            $this->AllowPhoto = $param["AllowPhoto"];
        }

        if (array_key_exists("AllowPhotoExtName",$param) and $param["AllowPhotoExtName"] !== null) {
            $this->AllowPhotoExtName = $param["AllowPhotoExtName"];
        }

        if (array_key_exists("AllowVideo",$param) and $param["AllowVideo"] !== null) {
            $this->AllowVideo = $param["AllowVideo"];
        }

        if (array_key_exists("AllowVideoExtName",$param) and $param["AllowVideoExtName"] !== null) {
            $this->AllowVideoExtName = $param["AllowVideoExtName"];
        }

        if (array_key_exists("AllowFileExtName",$param) and $param["AllowFileExtName"] !== null) {
            $this->AllowFileExtName = $param["AllowFileExtName"];
        }

        if (array_key_exists("RecognizeSensitiveContent",$param) and $param["RecognizeSensitiveContent"] !== null) {
            $this->RecognizeSensitiveContent = $param["RecognizeSensitiveContent"];
        }
    }
}
