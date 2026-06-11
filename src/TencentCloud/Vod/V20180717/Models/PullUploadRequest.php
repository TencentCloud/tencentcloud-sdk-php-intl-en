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
 * PullUpload request structure.
 *
 * @method string getMediaUrl() Obtain Media URL to be pulled. Temporary not support pull Dash format (support HLS).
Supported extensions are listed in [Media type](https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E5.AA.92.E4.BD.93.E7.B1.BB.E5.9E.8B). Please ensure the media URL can access.
 * @method void setMediaUrl(string $MediaUrl) Set Media URL to be pulled. Temporary not support pull Dash format (support HLS).
Supported extensions are listed in [Media type](https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E5.AA.92.E4.BD.93.E7.B1.BB.E5.9E.8B). Please ensure the media URL can access.
 * @method string getMediaType() Obtain Media type (extension). Supported types are detailed in [media type](https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E5.AA.92.E4.BD.93.E7.B1.BB.E5.9E.8B).
If MediaType is not filled in or takes an empty string, the file type will be automatically obtained based on MediaUrl.
 * @method void setMediaType(string $MediaType) Set Media type (extension). Supported types are detailed in [media type](https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E5.AA.92.E4.BD.93.E7.B1.BB.E5.9E.8B).
If MediaType is not filled in or takes an empty string, the file type will be automatically obtained based on MediaUrl.
 * @method integer getSubAppId() Obtain <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getMediaName() Obtain Media name.
 * @method void setMediaName(string $MediaName) Set Media name.
 * @method string getCoverUrl() Obtain Video cover URL to pull. Supported file formats: gif, jpeg (jpg), png.
 * @method void setCoverUrl(string $CoverUrl) Set Video cover URL to pull. Supported file formats: gif, jpeg (jpg), png.
 * @method string getProcedure() Obtain Media subsequent task operation. For details, see [Upload Specified Task Flow](https://www.tencentcloud.com/document/product/266/9759?from_cn_redirect=1).
 * @method void setProcedure(string $Procedure) Set Media subsequent task operation. For details, see [Upload Specified Task Flow](https://www.tencentcloud.com/document/product/266/9759?from_cn_redirect=1).
 * @method string getExpireTime() Obtain The media file expiry time, format according to ISO 8601. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setExpireTime(string $ExpireTime) Set The media file expiry time, format according to ISO 8601. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getStorageRegion() Obtain Designate the upload park, applicable only to the user with special requirement for upload target region.
<li>If left blank, files will be uploaded to your [default region](https://www.tencentcloud.com/zh/document/product/266/18874?has_map=1#.E5.AD.98.E5.82.A8.E5.9C.B0.E5.9F.9F.E6.AD.A5.E9.AA.A4) by default.</li>
<li>If a designated upload park is specified, please confirm the [upload storage settings](https://www.tencentcloud.com/zh/document/product/266/18874) have already enabled corresponding storage regions.</li>
 * @method void setStorageRegion(string $StorageRegion) Set Designate the upload park, applicable only to the user with special requirement for upload target region.
<li>If left blank, files will be uploaded to your [default region](https://www.tencentcloud.com/zh/document/product/266/18874?has_map=1#.E5.AD.98.E5.82.A8.E5.9C.B0.E5.9F.9F.E6.AD.A5.E9.AA.A4) by default.</li>
<li>If a designated upload park is specified, please confirm the [upload storage settings](https://www.tencentcloud.com/zh/document/product/266/18874) have already enabled corresponding storage regions.</li>
 * @method integer getClassId() Obtain Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the [create category](https://www.tencentcloud.com/document/product/266/31772?from_cn_redirect=1) API.
 * @method void setClassId(integer $ClassId) Set Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the [create category](https://www.tencentcloud.com/document/product/266/31772?from_cn_redirect=1) API.
 * @method integer getTasksPriority() Obtain Task priority. The higher the value, the higher the priority. The value ranges from -10 to 10. If left blank, the default value is 0.
 * @method void setTasksPriority(integer $TasksPriority) Set Task priority. The higher the value, the higher the priority. The value ranges from -10 to 10. If left blank, the default value is 0.
 * @method string getSessionContext() Obtain Source context, used for passing through user request information. When specifying a Procedure task, the task flow status change callback will return the value of this field, up to 1000 characters.
 * @method void setSessionContext(string $SessionContext) Set Source context, used for passing through user request information. When specifying a Procedure task, the task flow status change callback will return the value of this field, up to 1000 characters.
 * @method string getSessionId() Obtain Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
 * @method void setSessionId(string $SessionId) Set Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
 * @method string getExtInfo() Obtain Reserved field, used when special purpose.
 * @method void setExtInfo(string $ExtInfo) Set Reserved field, used when special purpose.
 * @method string getSourceContext() Obtain Source context, used to pass through user request information. The [callback on upload completion](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) will return the value of this field, up to 250 characters.
 * @method void setSourceContext(string $SourceContext) Set Source context, used to pass through user request information. The [callback on upload completion](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) will return the value of this field, up to 250 characters.
 * @method string getMediaStoragePath() Obtain Media storage path, starting with /.
Only sub-apps in [FileID + Path mode](https://www.tencentcloud.com/document/product/266/126825?from_cn_redirect=1) can specify the storage path.
 * @method void setMediaStoragePath(string $MediaStoragePath) Set Media storage path, starting with /.
Only sub-apps in [FileID + Path mode](https://www.tencentcloud.com/document/product/266/126825?from_cn_redirect=1) can specify the storage path.
 */
class PullUploadRequest extends AbstractModel
{
    /**
     * @var string Media URL to be pulled. Temporary not support pull Dash format (support HLS).
Supported extensions are listed in [Media type](https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E5.AA.92.E4.BD.93.E7.B1.BB.E5.9E.8B). Please ensure the media URL can access.
     */
    public $MediaUrl;

    /**
     * @var string Media type (extension). Supported types are detailed in [media type](https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E5.AA.92.E4.BD.93.E7.B1.BB.E5.9E.8B).
If MediaType is not filled in or takes an empty string, the file type will be automatically obtained based on MediaUrl.
     */
    public $MediaType;

    /**
     * @var integer <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var string Media name.
     */
    public $MediaName;

    /**
     * @var string Video cover URL to pull. Supported file formats: gif, jpeg (jpg), png.
     */
    public $CoverUrl;

    /**
     * @var string Media subsequent task operation. For details, see [Upload Specified Task Flow](https://www.tencentcloud.com/document/product/266/9759?from_cn_redirect=1).
     */
    public $Procedure;

    /**
     * @var string The media file expiry time, format according to ISO 8601. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $ExpireTime;

    /**
     * @var string Designate the upload park, applicable only to the user with special requirement for upload target region.
<li>If left blank, files will be uploaded to your [default region](https://www.tencentcloud.com/zh/document/product/266/18874?has_map=1#.E5.AD.98.E5.82.A8.E5.9C.B0.E5.9F.9F.E6.AD.A5.E9.AA.A4) by default.</li>
<li>If a designated upload park is specified, please confirm the [upload storage settings](https://www.tencentcloud.com/zh/document/product/266/18874) have already enabled corresponding storage regions.</li>
     */
    public $StorageRegion;

    /**
     * @var integer Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the [create category](https://www.tencentcloud.com/document/product/266/31772?from_cn_redirect=1) API.
     */
    public $ClassId;

    /**
     * @var integer Task priority. The higher the value, the higher the priority. The value ranges from -10 to 10. If left blank, the default value is 0.
     */
    public $TasksPriority;

    /**
     * @var string Source context, used for passing through user request information. When specifying a Procedure task, the task flow status change callback will return the value of this field, up to 1000 characters.
     */
    public $SessionContext;

    /**
     * @var string Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
     */
    public $SessionId;

    /**
     * @var string Reserved field, used when special purpose.
     */
    public $ExtInfo;

    /**
     * @var string Source context, used to pass through user request information. The [callback on upload completion](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) will return the value of this field, up to 250 characters.
     */
    public $SourceContext;

    /**
     * @var string Media storage path, starting with /.
Only sub-apps in [FileID + Path mode](https://www.tencentcloud.com/document/product/266/126825?from_cn_redirect=1) can specify the storage path.
     */
    public $MediaStoragePath;

    /**
     * @param string $MediaUrl Media URL to be pulled. Temporary not support pull Dash format (support HLS).
Supported extensions are listed in [Media type](https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E5.AA.92.E4.BD.93.E7.B1.BB.E5.9E.8B). Please ensure the media URL can access.
     * @param string $MediaType Media type (extension). Supported types are detailed in [media type](https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E5.AA.92.E4.BD.93.E7.B1.BB.E5.9E.8B).
If MediaType is not filled in or takes an empty string, the file type will be automatically obtained based on MediaUrl.
     * @param integer $SubAppId <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $MediaName Media name.
     * @param string $CoverUrl Video cover URL to pull. Supported file formats: gif, jpeg (jpg), png.
     * @param string $Procedure Media subsequent task operation. For details, see [Upload Specified Task Flow](https://www.tencentcloud.com/document/product/266/9759?from_cn_redirect=1).
     * @param string $ExpireTime The media file expiry time, format according to ISO 8601. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $StorageRegion Designate the upload park, applicable only to the user with special requirement for upload target region.
<li>If left blank, files will be uploaded to your [default region](https://www.tencentcloud.com/zh/document/product/266/18874?has_map=1#.E5.AD.98.E5.82.A8.E5.9C.B0.E5.9F.9F.E6.AD.A5.E9.AA.A4) by default.</li>
<li>If a designated upload park is specified, please confirm the [upload storage settings](https://www.tencentcloud.com/zh/document/product/266/18874) have already enabled corresponding storage regions.</li>
     * @param integer $ClassId Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the [create category](https://www.tencentcloud.com/document/product/266/31772?from_cn_redirect=1) API.
     * @param integer $TasksPriority Task priority. The higher the value, the higher the priority. The value ranges from -10 to 10. If left blank, the default value is 0.
     * @param string $SessionContext Source context, used for passing through user request information. When specifying a Procedure task, the task flow status change callback will return the value of this field, up to 1000 characters.
     * @param string $SessionId Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
     * @param string $ExtInfo Reserved field, used when special purpose.
     * @param string $SourceContext Source context, used to pass through user request information. The [callback on upload completion](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) will return the value of this field, up to 250 characters.
     * @param string $MediaStoragePath Media storage path, starting with /.
Only sub-apps in [FileID + Path mode](https://www.tencentcloud.com/document/product/266/126825?from_cn_redirect=1) can specify the storage path.
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
        if (array_key_exists("MediaUrl",$param) and $param["MediaUrl"] !== null) {
            $this->MediaUrl = $param["MediaUrl"];
        }

        if (array_key_exists("MediaType",$param) and $param["MediaType"] !== null) {
            $this->MediaType = $param["MediaType"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("MediaName",$param) and $param["MediaName"] !== null) {
            $this->MediaName = $param["MediaName"];
        }

        if (array_key_exists("CoverUrl",$param) and $param["CoverUrl"] !== null) {
            $this->CoverUrl = $param["CoverUrl"];
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

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }

        if (array_key_exists("SourceContext",$param) and $param["SourceContext"] !== null) {
            $this->SourceContext = $param["SourceContext"];
        }

        if (array_key_exists("MediaStoragePath",$param) and $param["MediaStoragePath"] !== null) {
            $this->MediaStoragePath = $param["MediaStoragePath"];
        }
    }
}
