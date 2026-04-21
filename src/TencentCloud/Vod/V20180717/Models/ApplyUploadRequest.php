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
 * @method string getMediaType() Obtain Media type. For available values, refer to [Upload Capability Summary](https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B).
 * @method void setMediaType(string $MediaType) Set Media type. For available values, refer to [Upload Capability Summary](https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B).
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method string getMediaName() Obtain Media name.
 * @method void setMediaName(string $MediaName) Set Media name.
 * @method string getCoverType() Obtain Cover Type. For available values, refer to [Upload Capability Summary](https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B).
 * @method void setCoverType(string $CoverType) Set Cover Type. For available values, refer to [Upload Capability Summary](https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B).
 * @method string getProcedure() Obtain Subsequent media task processing operations allow automatic task initiation after media upload is completed. The parameter value is the task flow template name. VOD supports [creating a task flow template](https://www.tencentcloud.com/document/product/266/33819?from_cn_redirect=1) and template naming.
 * @method void setProcedure(string $Procedure) Set Subsequent media task processing operations allow automatic task initiation after media upload is completed. The parameter value is the task flow template name. VOD supports [creating a task flow template](https://www.tencentcloud.com/document/product/266/33819?from_cn_redirect=1) and template naming.
 * @method string getExpireTime() Obtain Media file expiry time, format according to ISO 8601 standard representation. See [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F) for details.
 * @method void setExpireTime(string $ExpireTime) Set Media file expiry time, format according to ISO 8601 standard representation. See [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F) for details.
 * @method string getStorageRegion() Obtain Designated upload park, applicable only to the user with special requirement for upload target region.
 * @method void setStorageRegion(string $StorageRegion) Set Designated upload park, applicable only to the user with special requirement for upload target region.
 * @method integer getClassId() Obtain Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the [create category](https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1) API.
<li>Default value: 0, indicating other categories.</li>
 * @method void setClassId(integer $ClassId) Set Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the [create category](https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1) API.
<li>Default value: 0, indicating other categories.</li>
 * @method string getSourceContext() Obtain Source context, used to pass through user request information. The [callback on upload completion](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) will return the value of this field, up to 250 characters.
 * @method void setSourceContext(string $SourceContext) Set Source context, used to pass through user request information. The [callback on upload completion](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) will return the value of this field, up to 250 characters.
 * @method string getSessionContext() Obtain Session context, used for passing through user request information. When specifying the Procedure parameter, the [task flow status change callback](https://www.tencentcloud.com/document/product/266/9636?from_cn_redirect=1) will return the value of this field, with a maximum of 1000 characters.
 * @method void setSessionContext(string $SessionContext) Set Session context, used for passing through user request information. When specifying the Procedure parameter, the [task flow status change callback](https://www.tencentcloud.com/document/product/266/9636?from_cn_redirect=1) will return the value of this field, with a maximum of 1000 characters.
 * @method string getExtInfo() Obtain Reserved field, used when special purpose.
 * @method void setExtInfo(string $ExtInfo) Set Reserved field, used when special purpose.
 * @method string getMediaStoragePath() Obtain Media storage path, starting with /.
Only sub-apps in [FileID + Path mode](https://www.tencentcloud.com/document/product/266/126825?from_cn_redirect=1) can specify the storage path.
 * @method void setMediaStoragePath(string $MediaStoragePath) Set Media storage path, starting with /.
Only sub-apps in [FileID + Path mode](https://www.tencentcloud.com/document/product/266/126825?from_cn_redirect=1) can specify the storage path.
 */
class ApplyUploadRequest extends AbstractModel
{
    /**
     * @var string Media type. For available values, refer to [Upload Capability Summary](https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B).
     */
    public $MediaType;

    /**
     * @var integer <b>The VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var string Media name.
     */
    public $MediaName;

    /**
     * @var string Cover Type. For available values, refer to [Upload Capability Summary](https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B).
     */
    public $CoverType;

    /**
     * @var string Subsequent media task processing operations allow automatic task initiation after media upload is completed. The parameter value is the task flow template name. VOD supports [creating a task flow template](https://www.tencentcloud.com/document/product/266/33819?from_cn_redirect=1) and template naming.
     */
    public $Procedure;

    /**
     * @var string Media file expiry time, format according to ISO 8601 standard representation. See [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F) for details.
     */
    public $ExpireTime;

    /**
     * @var string Designated upload park, applicable only to the user with special requirement for upload target region.
     */
    public $StorageRegion;

    /**
     * @var integer Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the [create category](https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1) API.
<li>Default value: 0, indicating other categories.</li>
     */
    public $ClassId;

    /**
     * @var string Source context, used to pass through user request information. The [callback on upload completion](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) will return the value of this field, up to 250 characters.
     */
    public $SourceContext;

    /**
     * @var string Session context, used for passing through user request information. When specifying the Procedure parameter, the [task flow status change callback](https://www.tencentcloud.com/document/product/266/9636?from_cn_redirect=1) will return the value of this field, with a maximum of 1000 characters.
     */
    public $SessionContext;

    /**
     * @var string Reserved field, used when special purpose.
     */
    public $ExtInfo;

    /**
     * @var string Media storage path, starting with /.
Only sub-apps in [FileID + Path mode](https://www.tencentcloud.com/document/product/266/126825?from_cn_redirect=1) can specify the storage path.
     */
    public $MediaStoragePath;

    /**
     * @param string $MediaType Media type. For available values, refer to [Upload Capability Summary](https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B).
     * @param integer $SubAppId <b>The VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param string $MediaName Media name.
     * @param string $CoverType Cover Type. For available values, refer to [Upload Capability Summary](https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B).
     * @param string $Procedure Subsequent media task processing operations allow automatic task initiation after media upload is completed. The parameter value is the task flow template name. VOD supports [creating a task flow template](https://www.tencentcloud.com/document/product/266/33819?from_cn_redirect=1) and template naming.
     * @param string $ExpireTime Media file expiry time, format according to ISO 8601 standard representation. See [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F) for details.
     * @param string $StorageRegion Designated upload park, applicable only to the user with special requirement for upload target region.
     * @param integer $ClassId Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the [create category](https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1) API.
<li>Default value: 0, indicating other categories.</li>
     * @param string $SourceContext Source context, used to pass through user request information. The [callback on upload completion](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) will return the value of this field, up to 250 characters.
     * @param string $SessionContext Session context, used for passing through user request information. When specifying the Procedure parameter, the [task flow status change callback](https://www.tencentcloud.com/document/product/266/9636?from_cn_redirect=1) will return the value of this field, with a maximum of 1000 characters.
     * @param string $ExtInfo Reserved field, used when special purpose.
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
