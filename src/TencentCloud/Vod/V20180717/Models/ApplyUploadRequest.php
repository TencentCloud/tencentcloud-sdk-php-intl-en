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
 * ApplyUpload request structure.
 *
 * @method string getMediaType() Obtain Media type. For the detailed valid values, please see [Upload Overview](/document/product/266/9760#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B).
 * @method void setMediaType(string $MediaType) Set Media type. For the detailed valid values, please see [Upload Overview](/document/product/266/9760#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B).
 * @method string getMediaName() Obtain Media name.
 * @method void setMediaName(string $MediaName) Set Media name.
 * @method string getCoverType() Obtain Cover type. For the detailed valid values, please see [Upload Overview](/document/product/266/9760#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B).
 * @method void setCoverType(string $CoverType) Set Cover type. For the detailed valid values, please see [Upload Overview](/document/product/266/9760#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B).
 * @method string getProcedure() Obtain Subsequent task operation on a media file, i.e., after a media file is uploaded, task flow operations will be initiated automatically. This parameter value is a task flow template name. VOD supports [creating task flow templates](/document/product/266/33819) and naming the templates.
 * @method void setProcedure(string $Procedure) Set Subsequent task operation on a media file, i.e., after a media file is uploaded, task flow operations will be initiated automatically. This parameter value is a task flow template name. VOD supports [creating task flow templates](/document/product/266/33819) and naming the templates.
 * @method string getExpireTime() Obtain Expiration time of a media file in ISO 8601 format. For more information, please see [Notes on ISO Date Format](/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method void setExpireTime(string $ExpireTime) Set Expiration time of a media file in ISO 8601 format. For more information, please see [Notes on ISO Date Format](/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method string getStorageRegion() Obtain Specifies upload region. This is only applicable to users that have special requirements for the upload region.
 * @method void setStorageRegion(string $StorageRegion) Set Specifies upload region. This is only applicable to users that have special requirements for the upload region.
 * @method integer getClassId() Obtain Category ID, which is used to categorize the media for management. A category can be created and its ID can be obtained by using the [category creating](/document/product/266/7812) API.
<li>Default value: 0, which means "Other".</li>
 * @method void setClassId(integer $ClassId) Set Category ID, which is used to categorize the media for management. A category can be created and its ID can be obtained by using the [category creating](/document/product/266/7812) API.
<li>Default value: 0, which means "Other".</li>
 * @method string getSourceContext() Obtain Source context, which is used to pass through the user request information. The [upload callback](/document/product/266/7830) API will return the value of this field. It can contain up to 250 characters.
 * @method void setSourceContext(string $SourceContext) Set Source context, which is used to pass through the user request information. The [upload callback](/document/product/266/7830) API will return the value of this field. It can contain up to 250 characters.
 * @method string getSessionContext() Obtain Session context, which is used to pass through the user request information. If the `Procedure` parameter is specified, the [task flow status change callback](/document/product/266/9636) API will return the value of this field. It can contain up to 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set Session context, which is used to pass through the user request information. If the `Procedure` parameter is specified, the [task flow status change callback](/document/product/266/9636) API will return the value of this field. It can contain up to 1,000 characters.
 * @method integer getSubAppId() Obtain ID of a [subapplication](/document/product/266/14574) in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
 * @method void setSubAppId(integer $SubAppId) Set ID of a [subapplication](/document/product/266/14574) in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
 */
class ApplyUploadRequest extends AbstractModel
{
    /**
     * @var string Media type. For the detailed valid values, please see [Upload Overview](/document/product/266/9760#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B).
     */
    public $MediaType;

    /**
     * @var string Media name.
     */
    public $MediaName;

    /**
     * @var string Cover type. For the detailed valid values, please see [Upload Overview](/document/product/266/9760#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B).
     */
    public $CoverType;

    /**
     * @var string Subsequent task operation on a media file, i.e., after a media file is uploaded, task flow operations will be initiated automatically. This parameter value is a task flow template name. VOD supports [creating task flow templates](/document/product/266/33819) and naming the templates.
     */
    public $Procedure;

    /**
     * @var string Expiration time of a media file in ISO 8601 format. For more information, please see [Notes on ISO Date Format](/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     */
    public $ExpireTime;

    /**
     * @var string Specifies upload region. This is only applicable to users that have special requirements for the upload region.
     */
    public $StorageRegion;

    /**
     * @var integer Category ID, which is used to categorize the media for management. A category can be created and its ID can be obtained by using the [category creating](/document/product/266/7812) API.
<li>Default value: 0, which means "Other".</li>
     */
    public $ClassId;

    /**
     * @var string Source context, which is used to pass through the user request information. The [upload callback](/document/product/266/7830) API will return the value of this field. It can contain up to 250 characters.
     */
    public $SourceContext;

    /**
     * @var string Session context, which is used to pass through the user request information. If the `Procedure` parameter is specified, the [task flow status change callback](/document/product/266/9636) API will return the value of this field. It can contain up to 1,000 characters.
     */
    public $SessionContext;

    /**
     * @var integer ID of a [subapplication](/document/product/266/14574) in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
     */
    public $SubAppId;

    /**
     * @param string $MediaType Media type. For the detailed valid values, please see [Upload Overview](/document/product/266/9760#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B).
     * @param string $MediaName Media name.
     * @param string $CoverType Cover type. For the detailed valid values, please see [Upload Overview](/document/product/266/9760#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B).
     * @param string $Procedure Subsequent task operation on a media file, i.e., after a media file is uploaded, task flow operations will be initiated automatically. This parameter value is a task flow template name. VOD supports [creating task flow templates](/document/product/266/33819) and naming the templates.
     * @param string $ExpireTime Expiration time of a media file in ISO 8601 format. For more information, please see [Notes on ISO Date Format](/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     * @param string $StorageRegion Specifies upload region. This is only applicable to users that have special requirements for the upload region.
     * @param integer $ClassId Category ID, which is used to categorize the media for management. A category can be created and its ID can be obtained by using the [category creating](/document/product/266/7812) API.
<li>Default value: 0, which means "Other".</li>
     * @param string $SourceContext Source context, which is used to pass through the user request information. The [upload callback](/document/product/266/7830) API will return the value of this field. It can contain up to 250 characters.
     * @param string $SessionContext Session context, which is used to pass through the user request information. If the `Procedure` parameter is specified, the [task flow status change callback](/document/product/266/9636) API will return the value of this field. It can contain up to 1,000 characters.
     * @param integer $SubAppId ID of a [subapplication](/document/product/266/14574) in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
