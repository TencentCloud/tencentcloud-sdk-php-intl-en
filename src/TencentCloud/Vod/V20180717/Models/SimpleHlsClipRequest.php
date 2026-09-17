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
 * SimpleHlsClip request structure.
 *
 * @method string getUrl() Obtain 
 * @method void setUrl(string $Url) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method float getStartTimeOffset() Obtain 
 * @method void setStartTimeOffset(float $StartTimeOffset) Set 
 * @method float getEndTimeOffset() Obtain 
 * @method void setEndTimeOffset(float $EndTimeOffset) Set 
 * @method integer getIsPersistence() Obtain 
 * @method void setIsPersistence(integer $IsPersistence) Set 
 * @method string getExpireTime() Obtain 
 * @method void setExpireTime(string $ExpireTime) Set 
 * @method string getProcedure() Obtain 
 * @method void setProcedure(string $Procedure) Set 
 * @method integer getClassId() Obtain 
 * @method void setClassId(integer $ClassId) Set 
 * @method string getSourceContext() Obtain 
 * @method void setSourceContext(string $SourceContext) Set 
 * @method string getSessionContext() Obtain 
 * @method void setSessionContext(string $SessionContext) Set 
 * @method string getPrecision() Obtain 
 * @method void setPrecision(string $Precision) Set 
 * @method string getOutputMediaType() Obtain 
 * @method void setOutputMediaType(string $OutputMediaType) Set 
 * @method string getExtInfo() Obtain 
 * @method void setExtInfo(string $ExtInfo) Set 
 */
class SimpleHlsClipRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $Url;

    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var float 
     */
    public $StartTimeOffset;

    /**
     * @var float 
     */
    public $EndTimeOffset;

    /**
     * @var integer 
     */
    public $IsPersistence;

    /**
     * @var string 
     */
    public $ExpireTime;

    /**
     * @var string 
     */
    public $Procedure;

    /**
     * @var integer 
     */
    public $ClassId;

    /**
     * @var string 
     */
    public $SourceContext;

    /**
     * @var string 
     */
    public $SessionContext;

    /**
     * @var string 
     * @deprecated
     */
    public $Precision;

    /**
     * @var string 
     */
    public $OutputMediaType;

    /**
     * @var string 
     */
    public $ExtInfo;

    /**
     * @param string $Url 
     * @param integer $SubAppId 
     * @param float $StartTimeOffset 
     * @param float $EndTimeOffset 
     * @param integer $IsPersistence 
     * @param string $ExpireTime 
     * @param string $Procedure 
     * @param integer $ClassId 
     * @param string $SourceContext 
     * @param string $SessionContext 
     * @param string $Precision 
     * @param string $OutputMediaType 
     * @param string $ExtInfo 
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }

        if (array_key_exists("IsPersistence",$param) and $param["IsPersistence"] !== null) {
            $this->IsPersistence = $param["IsPersistence"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Procedure",$param) and $param["Procedure"] !== null) {
            $this->Procedure = $param["Procedure"];
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

        if (array_key_exists("Precision",$param) and $param["Precision"] !== null) {
            $this->Precision = $param["Precision"];
        }

        if (array_key_exists("OutputMediaType",$param) and $param["OutputMediaType"] !== null) {
            $this->OutputMediaType = $param["OutputMediaType"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
