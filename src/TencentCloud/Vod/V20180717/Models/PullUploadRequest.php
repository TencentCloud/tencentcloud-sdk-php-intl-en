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
 * @method string getMediaUrl() Obtain 
 * @method void setMediaUrl(string $MediaUrl) Set 
 * @method string getMediaType() Obtain 
 * @method void setMediaType(string $MediaType) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getMediaName() Obtain 
 * @method void setMediaName(string $MediaName) Set 
 * @method string getCoverUrl() Obtain 
 * @method void setCoverUrl(string $CoverUrl) Set 
 * @method string getProcedure() Obtain 
 * @method void setProcedure(string $Procedure) Set 
 * @method string getExpireTime() Obtain 
 * @method void setExpireTime(string $ExpireTime) Set 
 * @method string getStorageRegion() Obtain 
 * @method void setStorageRegion(string $StorageRegion) Set 
 * @method integer getClassId() Obtain 
 * @method void setClassId(integer $ClassId) Set 
 * @method integer getTasksPriority() Obtain 
 * @method void setTasksPriority(integer $TasksPriority) Set 
 * @method string getSessionContext() Obtain 
 * @method void setSessionContext(string $SessionContext) Set 
 * @method string getSessionId() Obtain 
 * @method void setSessionId(string $SessionId) Set 
 * @method string getExtInfo() Obtain 
 * @method void setExtInfo(string $ExtInfo) Set 
 * @method string getSourceContext() Obtain 
 * @method void setSourceContext(string $SourceContext) Set 
 * @method string getMediaStoragePath() Obtain 
 * @method void setMediaStoragePath(string $MediaStoragePath) Set 
 */
class PullUploadRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $MediaUrl;

    /**
     * @var string 
     */
    public $MediaType;

    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var string 
     */
    public $MediaName;

    /**
     * @var string 
     */
    public $CoverUrl;

    /**
     * @var string 
     */
    public $Procedure;

    /**
     * @var string 
     */
    public $ExpireTime;

    /**
     * @var string 
     */
    public $StorageRegion;

    /**
     * @var integer 
     */
    public $ClassId;

    /**
     * @var integer 
     */
    public $TasksPriority;

    /**
     * @var string 
     */
    public $SessionContext;

    /**
     * @var string 
     */
    public $SessionId;

    /**
     * @var string 
     */
    public $ExtInfo;

    /**
     * @var string 
     */
    public $SourceContext;

    /**
     * @var string 
     */
    public $MediaStoragePath;

    /**
     * @param string $MediaUrl 
     * @param string $MediaType 
     * @param integer $SubAppId 
     * @param string $MediaName 
     * @param string $CoverUrl 
     * @param string $Procedure 
     * @param string $ExpireTime 
     * @param string $StorageRegion 
     * @param integer $ClassId 
     * @param integer $TasksPriority 
     * @param string $SessionContext 
     * @param string $SessionId 
     * @param string $ExtInfo 
     * @param string $SourceContext 
     * @param string $MediaStoragePath 
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
