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
 * ApplyUpload request structure.
 *
 * @method string getMediaType() Obtain <p>Media type. For available values, see <a href="https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B">upload capability summary</a>.</p>
 * @method void setMediaType(string $MediaType) Set <p>Media type. For available values, see <a href="https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B">upload capability summary</a>.</p>
 * @method integer getSubAppId() Obtain <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate VOD services after December 25, 2023, this field must be filled in with the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate VOD services after December 25, 2023, this field must be filled in with the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b></p>
 * @method string getMediaName() Obtain <p>Media name.</p>
 * @method void setMediaName(string $MediaName) Set <p>Media name.</p>
 * @method string getCoverType() Obtain <p>Cover Type. For available values, see <a href="https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B">upload capability summary</a>.</p>
 * @method void setCoverType(string $CoverType) Set <p>Cover Type. For available values, see <a href="https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B">upload capability summary</a>.</p>
 * @method string getProcedure() Obtain <p>Subsequent media task processing operations, which can automatically initiate task flow operations after media upload is completed. The parameter value is the task flow template name. VOD supports <a href="https://www.tencentcloud.com/document/product/266/33819?from_cn_redirect=1">creating a task flow template</a> and naming the template.</p>
 * @method void setProcedure(string $Procedure) Set <p>Subsequent media task processing operations, which can automatically initiate task flow operations after media upload is completed. The parameter value is the task flow template name. VOD supports <a href="https://www.tencentcloud.com/document/product/266/33819?from_cn_redirect=1">creating a task flow template</a> and naming the template.</p>
 * @method string getExpireTime() Obtain <p>Media file expiry time, format according to the ISO 8601 standard representation. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
 * @method void setExpireTime(string $ExpireTime) Set <p>Media file expiry time, format according to the ISO 8601 standard representation. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
 * @method string getStorageRegion() Obtain <p>Designated upload park, applicable only to users with special requirements for the upload target region.</p>
 * @method void setStorageRegion(string $StorageRegion) Set <p>Designated upload park, applicable only to users with special requirements for the upload target region.</p>
 * @method integer getClassId() Obtain <p>Category ID, used to categorize and manage media. You can create a category through the <a href="https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1">Create Category</a> API to obtain the category ID.</p><li>Default value: 0, indicating other categories.</li>
 * @method void setClassId(integer $ClassId) Set <p>Category ID, used to categorize and manage media. You can create a category through the <a href="https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1">Create Category</a> API to obtain the category ID.</p><li>Default value: 0, indicating other categories.</li>
 * @method string getSourceContext() Obtain <p>Source context. This is used to pass user request information. The <a href="https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1">upload completion callback</a> returns the value of this field. The maximum length is 250 characters.</p>
 * @method void setSourceContext(string $SourceContext) Set <p>Source context. This is used to pass user request information. The <a href="https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1">upload completion callback</a> returns the value of this field. The maximum length is 250 characters.</p>
 * @method string getSessionContext() Obtain <p>Session context. This is used to pass user request information. When the Procedure parameter is specified, the <a href="https://www.tencentcloud.com/document/product/266/9636?from_cn_redirect=1">task flow status change callback</a> returns the value of this field. The maximum length is 1000 characters.</p>
 * @method void setSessionContext(string $SessionContext) Set <p>Session context. This is used to pass user request information. When the Procedure parameter is specified, the <a href="https://www.tencentcloud.com/document/product/266/9636?from_cn_redirect=1">task flow status change callback</a> returns the value of this field. The maximum length is 1000 characters.</p>
 * @method string getExtInfo() Obtain <p>Reserved field, used for special purposes.</p>
 * @method void setExtInfo(string $ExtInfo) Set <p>Reserved field, used for special purposes.</p>
 * @method string getMediaStoragePath() Obtain <p>Media storage path, starting with /.<br>Only sub-apps in <a href="https://www.tencentcloud.com/document/product/266/126825?from_cn_redirect=1">FileID + Path mode</a> can specify a storage path.</p>
 * @method void setMediaStoragePath(string $MediaStoragePath) Set <p>Media storage path, starting with /.<br>Only sub-apps in <a href="https://www.tencentcloud.com/document/product/266/126825?from_cn_redirect=1">FileID + Path mode</a> can specify a storage path.</p>
 */
class ApplyUploadRequest extends AbstractModel
{
    /**
     * @var string <p>Media type. For available values, see <a href="https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B">upload capability summary</a>.</p>
     */
    public $MediaType;

    /**
     * @var integer <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate VOD services after December 25, 2023, this field must be filled in with the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Media name.</p>
     */
    public $MediaName;

    /**
     * @var string <p>Cover Type. For available values, see <a href="https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B">upload capability summary</a>.</p>
     */
    public $CoverType;

    /**
     * @var string <p>Subsequent media task processing operations, which can automatically initiate task flow operations after media upload is completed. The parameter value is the task flow template name. VOD supports <a href="https://www.tencentcloud.com/document/product/266/33819?from_cn_redirect=1">creating a task flow template</a> and naming the template.</p>
     */
    public $Procedure;

    /**
     * @var string <p>Media file expiry time, format according to the ISO 8601 standard representation. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>Designated upload park, applicable only to users with special requirements for the upload target region.</p>
     */
    public $StorageRegion;

    /**
     * @var integer <p>Category ID, used to categorize and manage media. You can create a category through the <a href="https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1">Create Category</a> API to obtain the category ID.</p><li>Default value: 0, indicating other categories.</li>
     */
    public $ClassId;

    /**
     * @var string <p>Source context. This is used to pass user request information. The <a href="https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1">upload completion callback</a> returns the value of this field. The maximum length is 250 characters.</p>
     */
    public $SourceContext;

    /**
     * @var string <p>Session context. This is used to pass user request information. When the Procedure parameter is specified, the <a href="https://www.tencentcloud.com/document/product/266/9636?from_cn_redirect=1">task flow status change callback</a> returns the value of this field. The maximum length is 1000 characters.</p>
     */
    public $SessionContext;

    /**
     * @var string <p>Reserved field, used for special purposes.</p>
     */
    public $ExtInfo;

    /**
     * @var string <p>Media storage path, starting with /.<br>Only sub-apps in <a href="https://www.tencentcloud.com/document/product/266/126825?from_cn_redirect=1">FileID + Path mode</a> can specify a storage path.</p>
     */
    public $MediaStoragePath;

    /**
     * @param string $MediaType <p>Media type. For available values, see <a href="https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B">upload capability summary</a>.</p>
     * @param integer $SubAppId <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate VOD services after December 25, 2023, this field must be filled in with the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b></p>
     * @param string $MediaName <p>Media name.</p>
     * @param string $CoverType <p>Cover Type. For available values, see <a href="https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B">upload capability summary</a>.</p>
     * @param string $Procedure <p>Subsequent media task processing operations, which can automatically initiate task flow operations after media upload is completed. The parameter value is the task flow template name. VOD supports <a href="https://www.tencentcloud.com/document/product/266/33819?from_cn_redirect=1">creating a task flow template</a> and naming the template.</p>
     * @param string $ExpireTime <p>Media file expiry time, format according to the ISO 8601 standard representation. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
     * @param string $StorageRegion <p>Designated upload park, applicable only to users with special requirements for the upload target region.</p>
     * @param integer $ClassId <p>Category ID, used to categorize and manage media. You can create a category through the <a href="https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1">Create Category</a> API to obtain the category ID.</p><li>Default value: 0, indicating other categories.</li>
     * @param string $SourceContext <p>Source context. This is used to pass user request information. The <a href="https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1">upload completion callback</a> returns the value of this field. The maximum length is 250 characters.</p>
     * @param string $SessionContext <p>Session context. This is used to pass user request information. When the Procedure parameter is specified, the <a href="https://www.tencentcloud.com/document/product/266/9636?from_cn_redirect=1">task flow status change callback</a> returns the value of this field. The maximum length is 1000 characters.</p>
     * @param string $ExtInfo <p>Reserved field, used for special purposes.</p>
     * @param string $MediaStoragePath <p>Media storage path, starting with /.<br>Only sub-apps in <a href="https://www.tencentcloud.com/document/product/266/126825?from_cn_redirect=1">FileID + Path mode</a> can specify a storage path.</p>
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
        if (array_key_exists("MediaType",$param) and $param["MediaType"] !== null) {
            $this->MediaType = $param["MediaType"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("MediaName",$param) and $param["MediaName"] !== null) {
            $this->MediaName = $param["MediaName"];
        }

        if (array_key_exists("CoverType",$param) and $param["CoverType"] !== null) {
            $this->CoverType = $param["CoverType"];
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

        if (array_key_exists("SourceContext",$param) and $param["SourceContext"] !== null) {
            $this->SourceContext = $param["SourceContext"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }

        if (array_key_exists("MediaStoragePath",$param) and $param["MediaStoragePath"] !== null) {
            $this->MediaStoragePath = $param["MediaStoragePath"];
        }
    }
}
