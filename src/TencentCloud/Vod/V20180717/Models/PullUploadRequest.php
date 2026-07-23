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
 * @method string getMediaUrl() Obtain <p>Media URL to be pulled. Dash format is not currently supported (HLS is supported).<br>For supported extensions, see <a href="https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E5.AA.92.E4.BD.93.E7.B1.BB.E5.9E.8B">media type</a>. Please ensure the media URL can be accessed.</p>
 * @method void setMediaUrl(string $MediaUrl) Set <p>Media URL to be pulled. Dash format is not currently supported (HLS is supported).<br>For supported extensions, see <a href="https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E5.AA.92.E4.BD.93.E7.B1.BB.E5.9E.8B">media type</a>. Please ensure the media URL can be accessed.</p>
 * @method string getMediaType() Obtain <p>Media type (extension). For supported types, see <a href="https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E5.AA.92.E4.BD.93.E7.B1.BB.E5.9E.8B">media type</a>.<br>If MediaType is not specified or set to an empty string, the file type will be obtained automatically based on MediaUrl.</p>
 * @method void setMediaType(string $MediaType) Set <p>Media type (extension). For supported types, see <a href="https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E5.AA.92.E4.BD.93.E7.B1.BB.E5.9E.8B">media type</a>.<br>If MediaType is not specified or set to an empty string, the file type will be obtained automatically based on MediaUrl.</p>
 * @method integer getSubAppId() Obtain <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services after December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services after December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
 * @method string getMediaName() Obtain <p>Media name.</p>
 * @method void setMediaName(string $MediaName) Set <p>Media name.</p>
 * @method string getCoverUrl() Obtain <p>Video cover URL to pull. Supported file formats: gif, jpeg (jpg), png.</p>
 * @method void setCoverUrl(string $CoverUrl) Set <p>Video cover URL to pull. Supported file formats: gif, jpeg (jpg), png.</p>
 * @method string getProcedure() Obtain <p>For media subsequent task operation, see <a href="https://www.tencentcloud.com/document/product/266/9759?from_cn_redirect=1">upload specified task flow</a>.</p>
 * @method void setProcedure(string $Procedure) Set <p>For media subsequent task operation, see <a href="https://www.tencentcloud.com/document/product/266/9759?from_cn_redirect=1">upload specified task flow</a>.</p>
 * @method string getExpireTime() Obtain <p>Media file expiry time, format according to ISO 8601 standard representation. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
 * @method void setExpireTime(string $ExpireTime) Set <p>Media file expiry time, format according to ISO 8601 standard representation. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
 * @method string getStorageRegion() Obtain <p>Designated upload park, applicable only to the user with special requirement for upload target region:</p><li>By default if left blank, upload to your [default region](https://www.tencentcloud.com/document/product/266/14059?from=11329?from_cn_redirect=1#.E5.AD.98.E5.82.A8.E5.9C.B0.E5.9F.9F.E6.AD.A5.E9.AA.A4).</li><li>If you designate an upload park, please confirm the [upload storage settings](https://www.tencentcloud.com/document/product/266/14059?from=11329?from_cn_redirect=1#.E5.AD.98.E5.82.A8.E5.9C.B0.E5.9F.9F.E6.AD.A5.E9.AA.A4) have already enabled corresponding storage regions.</li>
 * @method void setStorageRegion(string $StorageRegion) Set <p>Designated upload park, applicable only to the user with special requirement for upload target region:</p><li>By default if left blank, upload to your [default region](https://www.tencentcloud.com/document/product/266/14059?from=11329?from_cn_redirect=1#.E5.AD.98.E5.82.A8.E5.9C.B0.E5.9F.9F.E6.AD.A5.E9.AA.A4).</li><li>If you designate an upload park, please confirm the [upload storage settings](https://www.tencentcloud.com/document/product/266/14059?from=11329?from_cn_redirect=1#.E5.AD.98.E5.82.A8.E5.9C.B0.E5.9F.9F.E6.AD.A5.E9.AA.A4) have already enabled corresponding storage regions.</li>
 * @method integer getClassId() Obtain <p>Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the <a href="https://www.tencentcloud.com/document/product/266/31772?from_cn_redirect=1">Create Category</a> API.</p>
 * @method void setClassId(integer $ClassId) Set <p>Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the <a href="https://www.tencentcloud.com/document/product/266/31772?from_cn_redirect=1">Create Category</a> API.</p>
 * @method integer getTasksPriority() Obtain <p>Task priority. The higher the value, the higher the priority. The value ranges from -10 to 10. If this is not specified, the default value is 0.</p>
 * @method void setTasksPriority(integer $TasksPriority) Set <p>Task priority. The higher the value, the higher the priority. The value ranges from -10 to 10. If this is not specified, the default value is 0.</p>
 * @method string getSessionContext() Obtain <p>Source context. This is used to pass through user request information. When specifying a Procedure task, the task flow status change callback returns the value of this field. The maximum length is 1000 characters.</p>
 * @method void setSessionContext(string $SessionContext) Set <p>Source context. This is used to pass through user request information. When specifying a Procedure task, the task flow status change callback returns the value of this field. The maximum length is 1000 characters.</p>
 * @method string getSessionId() Obtain <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method void setSessionId(string $SessionId) Set <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method string getExtInfo() Obtain <p>Reserved field, used for special purpose.</p>
 * @method void setExtInfo(string $ExtInfo) Set <p>Reserved field, used for special purpose.</p>
 * @method string getSourceContext() Obtain <p>Source context. This is used to pass through user request information. The <a href="/document/product/266/7830?from_cn_redirect=1">upload completion callback</a> returns the value of this field. The maximum length is 250 characters.</p>
 * @method void setSourceContext(string $SourceContext) Set <p>Source context. This is used to pass through user request information. The <a href="/document/product/266/7830?from_cn_redirect=1">upload completion callback</a> returns the value of this field. The maximum length is 250 characters.</p>
 * @method string getMediaStoragePath() Obtain <p>Media storage path, starting with /. <br>Only sub-apps in <a href="https://www.tencentcloud.com/document/product/266/126825?from_cn_redirect=1">FileID + Path mode</a> can specify the storage path.</p>
 * @method void setMediaStoragePath(string $MediaStoragePath) Set <p>Media storage path, starting with /. <br>Only sub-apps in <a href="https://www.tencentcloud.com/document/product/266/126825?from_cn_redirect=1">FileID + Path mode</a> can specify the storage path.</p>
 */
class PullUploadRequest extends AbstractModel
{
    /**
     * @var string <p>Media URL to be pulled. Dash format is not currently supported (HLS is supported).<br>For supported extensions, see <a href="https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E5.AA.92.E4.BD.93.E7.B1.BB.E5.9E.8B">media type</a>. Please ensure the media URL can be accessed.</p>
     */
    public $MediaUrl;

    /**
     * @var string <p>Media type (extension). For supported types, see <a href="https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E5.AA.92.E4.BD.93.E7.B1.BB.E5.9E.8B">media type</a>.<br>If MediaType is not specified or set to an empty string, the file type will be obtained automatically based on MediaUrl.</p>
     */
    public $MediaType;

    /**
     * @var integer <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services after December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Media name.</p>
     */
    public $MediaName;

    /**
     * @var string <p>Video cover URL to pull. Supported file formats: gif, jpeg (jpg), png.</p>
     */
    public $CoverUrl;

    /**
     * @var string <p>For media subsequent task operation, see <a href="https://www.tencentcloud.com/document/product/266/9759?from_cn_redirect=1">upload specified task flow</a>.</p>
     */
    public $Procedure;

    /**
     * @var string <p>Media file expiry time, format according to ISO 8601 standard representation. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>Designated upload park, applicable only to the user with special requirement for upload target region:</p><li>By default if left blank, upload to your [default region](https://www.tencentcloud.com/document/product/266/14059?from=11329?from_cn_redirect=1#.E5.AD.98.E5.82.A8.E5.9C.B0.E5.9F.9F.E6.AD.A5.E9.AA.A4).</li><li>If you designate an upload park, please confirm the [upload storage settings](https://www.tencentcloud.com/document/product/266/14059?from=11329?from_cn_redirect=1#.E5.AD.98.E5.82.A8.E5.9C.B0.E5.9F.9F.E6.AD.A5.E9.AA.A4) have already enabled corresponding storage regions.</li>
     */
    public $StorageRegion;

    /**
     * @var integer <p>Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the <a href="https://www.tencentcloud.com/document/product/266/31772?from_cn_redirect=1">Create Category</a> API.</p>
     */
    public $ClassId;

    /**
     * @var integer <p>Task priority. The higher the value, the higher the priority. The value ranges from -10 to 10. If this is not specified, the default value is 0.</p>
     */
    public $TasksPriority;

    /**
     * @var string <p>Source context. This is used to pass through user request information. When specifying a Procedure task, the task flow status change callback returns the value of this field. The maximum length is 1000 characters.</p>
     */
    public $SessionContext;

    /**
     * @var string <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
     */
    public $SessionId;

    /**
     * @var string <p>Reserved field, used for special purpose.</p>
     */
    public $ExtInfo;

    /**
     * @var string <p>Source context. This is used to pass through user request information. The <a href="/document/product/266/7830?from_cn_redirect=1">upload completion callback</a> returns the value of this field. The maximum length is 250 characters.</p>
     */
    public $SourceContext;

    /**
     * @var string <p>Media storage path, starting with /. <br>Only sub-apps in <a href="https://www.tencentcloud.com/document/product/266/126825?from_cn_redirect=1">FileID + Path mode</a> can specify the storage path.</p>
     */
    public $MediaStoragePath;

    /**
     * @param string $MediaUrl <p>Media URL to be pulled. Dash format is not currently supported (HLS is supported).<br>For supported extensions, see <a href="https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E5.AA.92.E4.BD.93.E7.B1.BB.E5.9E.8B">media type</a>. Please ensure the media URL can be accessed.</p>
     * @param string $MediaType <p>Media type (extension). For supported types, see <a href="https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E5.AA.92.E4.BD.93.E7.B1.BB.E5.9E.8B">media type</a>.<br>If MediaType is not specified or set to an empty string, the file type will be obtained automatically based on MediaUrl.</p>
     * @param integer $SubAppId <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services after December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
     * @param string $MediaName <p>Media name.</p>
     * @param string $CoverUrl <p>Video cover URL to pull. Supported file formats: gif, jpeg (jpg), png.</p>
     * @param string $Procedure <p>For media subsequent task operation, see <a href="https://www.tencentcloud.com/document/product/266/9759?from_cn_redirect=1">upload specified task flow</a>.</p>
     * @param string $ExpireTime <p>Media file expiry time, format according to ISO 8601 standard representation. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
     * @param string $StorageRegion <p>Designated upload park, applicable only to the user with special requirement for upload target region:</p><li>By default if left blank, upload to your [default region](https://www.tencentcloud.com/document/product/266/14059?from=11329?from_cn_redirect=1#.E5.AD.98.E5.82.A8.E5.9C.B0.E5.9F.9F.E6.AD.A5.E9.AA.A4).</li><li>If you designate an upload park, please confirm the [upload storage settings](https://www.tencentcloud.com/document/product/266/14059?from=11329?from_cn_redirect=1#.E5.AD.98.E5.82.A8.E5.9C.B0.E5.9F.9F.E6.AD.A5.E9.AA.A4) have already enabled corresponding storage regions.</li>
     * @param integer $ClassId <p>Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the <a href="https://www.tencentcloud.com/document/product/266/31772?from_cn_redirect=1">Create Category</a> API.</p>
     * @param integer $TasksPriority <p>Task priority. The higher the value, the higher the priority. The value ranges from -10 to 10. If this is not specified, the default value is 0.</p>
     * @param string $SessionContext <p>Source context. This is used to pass through user request information. When specifying a Procedure task, the task flow status change callback returns the value of this field. The maximum length is 1000 characters.</p>
     * @param string $SessionId <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
     * @param string $ExtInfo <p>Reserved field, used for special purpose.</p>
     * @param string $SourceContext <p>Source context. This is used to pass through user request information. The <a href="/document/product/266/7830?from_cn_redirect=1">upload completion callback</a> returns the value of this field. The maximum length is 250 characters.</p>
     * @param string $MediaStoragePath <p>Media storage path, starting with /. <br>Only sub-apps in <a href="https://www.tencentcloud.com/document/product/266/126825?from_cn_redirect=1">FileID + Path mode</a> can specify the storage path.</p>
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
