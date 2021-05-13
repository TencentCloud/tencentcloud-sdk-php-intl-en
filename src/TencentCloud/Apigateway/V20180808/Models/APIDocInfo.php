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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * API document details
 *
 * @method string getApiDocId() Obtain API document ID
 * @method void setApiDocId(string $ApiDocId) Set API document ID
 * @method string getApiDocName() Obtain API document name
 * @method void setApiDocName(string $ApiDocName) Set API document name
 * @method string getApiDocStatus() Obtain API document build status
 * @method void setApiDocStatus(string $ApiDocStatus) Set API document build status
 * @method integer getApiCount() Obtain Number of APIs with API documents
 * @method void setApiCount(integer $ApiCount) Set Number of APIs with API documents
 * @method integer getViewCount() Obtain Number of views of API document
 * @method void setViewCount(integer $ViewCount) Set Number of views of API document
 * @method integer getReleaseCount() Obtain Number of releases of API document
 * @method void setReleaseCount(integer $ReleaseCount) Set Number of releases of API document
 * @method string getApiDocUri() Obtain API document access URI
 * @method void setApiDocUri(string $ApiDocUri) Set API document access URI
 * @method string getSharePassword() Obtain API document password for sharing
 * @method void setSharePassword(string $SharePassword) Set API document password for sharing
 * @method string getUpdatedTime() Obtain API document update time
 * @method void setUpdatedTime(string $UpdatedTime) Set API document update time
 * @method string getServiceId() Obtain Service ID
 * @method void setServiceId(string $ServiceId) Set Service ID
 * @method string getEnvironment() Obtain Environment information
 * @method void setEnvironment(string $Environment) Set Environment information
 * @method array getApiIds() Obtain ID of the API for which to generate the API document
 * @method void setApiIds(array $ApiIds) Set ID of the API for which to generate the API document
 * @method string getServiceName() Obtain Service name
 * @method void setServiceName(string $ServiceName) Set Service name
 * @method array getApiNames() Obtain Name of the API for which to generate the API document
 * @method void setApiNames(array $ApiNames) Set Name of the API for which to generate the API document
 */
class APIDocInfo extends AbstractModel
{
    /**
     * @var string API document ID
     */
    public $ApiDocId;

    /**
     * @var string API document name
     */
    public $ApiDocName;

    /**
     * @var string API document build status
     */
    public $ApiDocStatus;

    /**
     * @var integer Number of APIs with API documents
     */
    public $ApiCount;

    /**
     * @var integer Number of views of API document
     */
    public $ViewCount;

    /**
     * @var integer Number of releases of API document
     */
    public $ReleaseCount;

    /**
     * @var string API document access URI
     */
    public $ApiDocUri;

    /**
     * @var string API document password for sharing
     */
    public $SharePassword;

    /**
     * @var string API document update time
     */
    public $UpdatedTime;

    /**
     * @var string Service ID
     */
    public $ServiceId;

    /**
     * @var string Environment information
     */
    public $Environment;

    /**
     * @var array ID of the API for which to generate the API document
     */
    public $ApiIds;

    /**
     * @var string Service name
     */
    public $ServiceName;

    /**
     * @var array Name of the API for which to generate the API document
     */
    public $ApiNames;

    /**
     * @param string $ApiDocId API document ID
     * @param string $ApiDocName API document name
     * @param string $ApiDocStatus API document build status
     * @param integer $ApiCount Number of APIs with API documents
     * @param integer $ViewCount Number of views of API document
     * @param integer $ReleaseCount Number of releases of API document
     * @param string $ApiDocUri API document access URI
     * @param string $SharePassword API document password for sharing
     * @param string $UpdatedTime API document update time
     * @param string $ServiceId Service ID
     * @param string $Environment Environment information
     * @param array $ApiIds ID of the API for which to generate the API document
     * @param string $ServiceName Service name
     * @param array $ApiNames Name of the API for which to generate the API document
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
        if (array_key_exists("ApiDocId",$param) and $param["ApiDocId"] !== null) {
            $this->ApiDocId = $param["ApiDocId"];
        }

        if (array_key_exists("ApiDocName",$param) and $param["ApiDocName"] !== null) {
            $this->ApiDocName = $param["ApiDocName"];
        }

        if (array_key_exists("ApiDocStatus",$param) and $param["ApiDocStatus"] !== null) {
            $this->ApiDocStatus = $param["ApiDocStatus"];
        }

        if (array_key_exists("ApiCount",$param) and $param["ApiCount"] !== null) {
            $this->ApiCount = $param["ApiCount"];
        }

        if (array_key_exists("ViewCount",$param) and $param["ViewCount"] !== null) {
            $this->ViewCount = $param["ViewCount"];
        }

        if (array_key_exists("ReleaseCount",$param) and $param["ReleaseCount"] !== null) {
            $this->ReleaseCount = $param["ReleaseCount"];
        }

        if (array_key_exists("ApiDocUri",$param) and $param["ApiDocUri"] !== null) {
            $this->ApiDocUri = $param["ApiDocUri"];
        }

        if (array_key_exists("SharePassword",$param) and $param["SharePassword"] !== null) {
            $this->SharePassword = $param["SharePassword"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }

        if (array_key_exists("ApiIds",$param) and $param["ApiIds"] !== null) {
            $this->ApiIds = $param["ApiIds"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ApiNames",$param) and $param["ApiNames"] !== null) {
            $this->ApiNames = $param["ApiNames"];
        }
    }
}
