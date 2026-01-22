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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The Tencent Cloud VOD parameters.
 *
 * @method string getProcedure() Obtain Subsequent media task processing operations allow automatic task initiation after media upload is completed. the parameter value is the task flow template name. VOD (video on demand) supports creating task flow templates and template naming.
 * @method void setProcedure(string $Procedure) Set Subsequent media task processing operations allow automatic task initiation after media upload is completed. the parameter value is the task flow template name. VOD (video on demand) supports creating task flow templates and template naming.
 * @method integer getExpireTime() Obtain Media file expiry time is the absolute expiration time from the current system time. to save for one day, enter "86400". to retain permanently, enter "0". the default is permanent preservation.
 * @method void setExpireTime(integer $ExpireTime) Set Media file expiry time is the absolute expiration time from the current system time. to save for one day, enter "86400". to retain permanently, enter "0". the default is permanent preservation.
 * @method string getStorageRegion() Obtain Specify the upload park, applicable only to the user with special requirement for upload region.
 * @method void setStorageRegion(string $StorageRegion) Set Specify the upload park, applicable only to the user with special requirement for upload region.
 * @method integer getClassId() Obtain Category ID is used to categorize and manage media. you can create a category and obtain the category ID through the create category api.
The default value is 0, indicating other categories.
 * @method void setClassId(integer $ClassId) Set Category ID is used to categorize and manage media. you can create a category and obtain the category ID through the create category api.
The default value is 0, indicating other categories.
 * @method integer getSubAppId() Obtain Subapplication ID for video-on-demand (vod). if you need to access resources belonging to a subapplication, fill in this field with the subapplication ID. otherwise, this field is not required.
 * @method void setSubAppId(integer $SubAppId) Set Subapplication ID for video-on-demand (vod). if you need to access resources belonging to a subapplication, fill in this field with the subapplication ID. otherwise, this field is not required.
 * @method string getSessionContext() Obtain Task flow context, passed through when task complete.
 * @method void setSessionContext(string $SessionContext) Set Task flow context, passed through when task complete.
 * @method string getSourceContext() Obtain Upload context, passed through on upload completion callback.
 * @method void setSourceContext(string $SourceContext) Set Upload context, passed through on upload completion callback.
 * @method integer getMediaType() Obtain The recording file format type uploaded to the vod platform. valid values: 0: mp4 (default), 1: hls, 2: aac (valid at that time when StreamType=1 for audio-only recording).
3: hls+mp4, 4: hls+aac (valid at that time when StreamType=1 is audio-only recording).
 * @method void setMediaType(integer $MediaType) Set The recording file format type uploaded to the vod platform. valid values: 0: mp4 (default), 1: hls, 2: aac (valid at that time when StreamType=1 for audio-only recording).
3: hls+mp4, 4: hls+aac (valid at that time when StreamType=1 is audio-only recording).
 * @method string getUserDefineRecordId() Obtain Only supports API recording upload to vod. this parameter indicates you can customize the recording file name prefix. [length limit: 64 bytes, only allows a combination of uppercase and lowercase letters (a-zA-Z), numbers (0-9), underline, and hyphen]. the prefix is separated from the automatically generated recording file name by `__UserDefine_u_`.
 * @method void setUserDefineRecordId(string $UserDefineRecordId) Set Only supports API recording upload to vod. this parameter indicates you can customize the recording file name prefix. [length limit: 64 bytes, only allows a combination of uppercase and lowercase letters (a-zA-Z), numbers (0-9), underline, and hyphen]. the prefix is separated from the automatically generated recording file name by `__UserDefine_u_`.
 */
class TencentVod extends AbstractModel
{
    /**
     * @var string Subsequent media task processing operations allow automatic task initiation after media upload is completed. the parameter value is the task flow template name. VOD (video on demand) supports creating task flow templates and template naming.
     */
    public $Procedure;

    /**
     * @var integer Media file expiry time is the absolute expiration time from the current system time. to save for one day, enter "86400". to retain permanently, enter "0". the default is permanent preservation.
     */
    public $ExpireTime;

    /**
     * @var string Specify the upload park, applicable only to the user with special requirement for upload region.
     */
    public $StorageRegion;

    /**
     * @var integer Category ID is used to categorize and manage media. you can create a category and obtain the category ID through the create category api.
The default value is 0, indicating other categories.
     */
    public $ClassId;

    /**
     * @var integer Subapplication ID for video-on-demand (vod). if you need to access resources belonging to a subapplication, fill in this field with the subapplication ID. otherwise, this field is not required.
     */
    public $SubAppId;

    /**
     * @var string Task flow context, passed through when task complete.
     */
    public $SessionContext;

    /**
     * @var string Upload context, passed through on upload completion callback.
     */
    public $SourceContext;

    /**
     * @var integer The recording file format type uploaded to the vod platform. valid values: 0: mp4 (default), 1: hls, 2: aac (valid at that time when StreamType=1 for audio-only recording).
3: hls+mp4, 4: hls+aac (valid at that time when StreamType=1 is audio-only recording).
     */
    public $MediaType;

    /**
     * @var string Only supports API recording upload to vod. this parameter indicates you can customize the recording file name prefix. [length limit: 64 bytes, only allows a combination of uppercase and lowercase letters (a-zA-Z), numbers (0-9), underline, and hyphen]. the prefix is separated from the automatically generated recording file name by `__UserDefine_u_`.
     */
    public $UserDefineRecordId;

    /**
     * @param string $Procedure Subsequent media task processing operations allow automatic task initiation after media upload is completed. the parameter value is the task flow template name. VOD (video on demand) supports creating task flow templates and template naming.
     * @param integer $ExpireTime Media file expiry time is the absolute expiration time from the current system time. to save for one day, enter "86400". to retain permanently, enter "0". the default is permanent preservation.
     * @param string $StorageRegion Specify the upload park, applicable only to the user with special requirement for upload region.
     * @param integer $ClassId Category ID is used to categorize and manage media. you can create a category and obtain the category ID through the create category api.
The default value is 0, indicating other categories.
     * @param integer $SubAppId Subapplication ID for video-on-demand (vod). if you need to access resources belonging to a subapplication, fill in this field with the subapplication ID. otherwise, this field is not required.
     * @param string $SessionContext Task flow context, passed through when task complete.
     * @param string $SourceContext Upload context, passed through on upload completion callback.
     * @param integer $MediaType The recording file format type uploaded to the vod platform. valid values: 0: mp4 (default), 1: hls, 2: aac (valid at that time when StreamType=1 for audio-only recording).
3: hls+mp4, 4: hls+aac (valid at that time when StreamType=1 is audio-only recording).
     * @param string $UserDefineRecordId Only supports API recording upload to vod. this parameter indicates you can customize the recording file name prefix. [length limit: 64 bytes, only allows a combination of uppercase and lowercase letters (a-zA-Z), numbers (0-9), underline, and hyphen]. the prefix is separated from the automatically generated recording file name by `__UserDefine_u_`.
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
        if (array_key_exists("Procedure",$param) and $param["Procedure"] !== null) {
            $this->Procedure = $param["Procedure"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("StorageRegion",$param) and $param["StorageRegion"] !== null) {
            $this->StorageRegion = $param["StorageRegion"];
        }

        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SourceContext",$param) and $param["SourceContext"] !== null) {
            $this->SourceContext = $param["SourceContext"];
        }

        if (array_key_exists("MediaType",$param) and $param["MediaType"] !== null) {
            $this->MediaType = $param["MediaType"];
        }

        if (array_key_exists("UserDefineRecordId",$param) and $param["UserDefineRecordId"] !== null) {
            $this->UserDefineRecordId = $param["UserDefineRecordId"];
        }
    }
}
