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
 * API status
 *
 * @method string getServiceId() Obtain Unique service ID.
 * @method void setServiceId(string $ServiceId) Set Unique service ID.
 * @method string getApiId() Obtain Unique API ID.
 * @method void setApiId(string $ApiId) Set Unique API ID.
 * @method string getApiDesc() Obtain API description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApiDesc(string $ApiDesc) Set API description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPath() Obtain API path.
 * @method void setPath(string $Path) Set API path.
 * @method string getMethod() Obtain API method.
 * @method void setMethod(string $Method) Set API method.
 * @method string getCreatedTime() Obtain Service creation time.
 * @method void setCreatedTime(string $CreatedTime) Set Service creation time.
 * @method string getModifiedTime() Obtain Service modification time.
 * @method void setModifiedTime(string $ModifiedTime) Set Service modification time.
 * @method string getApiName() Obtain API name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApiName(string $ApiName) Set API name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUniqVpcId() Obtain Unique VPC ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUniqVpcId(string $UniqVpcId) Set Unique VPC ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getApiType() Obtain API type.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApiType(string $ApiType) Set API type.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getProtocol() Obtain API protocol.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProtocol(string $Protocol) Set API protocol.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsDebugAfterCharge() Obtain Whether to enable debugging after purchase.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsDebugAfterCharge(boolean $IsDebugAfterCharge) Set Whether to enable debugging after purchase.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAuthType() Obtain Authorization type.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAuthType(string $AuthType) Set Authorization type.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getApiBusinessType() Obtain API business type.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApiBusinessType(string $ApiBusinessType) Set API business type.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAuthRelationApiId() Obtain Unique ID of associated authorization API.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAuthRelationApiId(string $AuthRelationApiId) Set Unique ID of associated authorization API.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getRelationBuniessApiIds() Obtain List of business APIs associated with authorization API.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRelationBuniessApiIds(array $RelationBuniessApiIds) Set List of business APIs associated with authorization API.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method OauthConfig getOauthConfig() Obtain OAuth configuration information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOauthConfig(OauthConfig $OauthConfig) Set OAuth configuration information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTokenLocation() Obtain Token storage position, which is an OAuth 2.0 API request.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTokenLocation(string $TokenLocation) Set Token storage position, which is an OAuth 2.0 API request.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ApiIdStatus extends AbstractModel
{
    /**
     * @var string Unique service ID.
     */
    public $ServiceId;

    /**
     * @var string Unique API ID.
     */
    public $ApiId;

    /**
     * @var string API description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApiDesc;

    /**
     * @var string API path.
     */
    public $Path;

    /**
     * @var string API method.
     */
    public $Method;

    /**
     * @var string Service creation time.
     */
    public $CreatedTime;

    /**
     * @var string Service modification time.
     */
    public $ModifiedTime;

    /**
     * @var string API name.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApiName;

    /**
     * @var string Unique VPC ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UniqVpcId;

    /**
     * @var string API type.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApiType;

    /**
     * @var string API protocol.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Protocol;

    /**
     * @var boolean Whether to enable debugging after purchase.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IsDebugAfterCharge;

    /**
     * @var string Authorization type.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AuthType;

    /**
     * @var string API business type.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApiBusinessType;

    /**
     * @var string Unique ID of associated authorization API.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AuthRelationApiId;

    /**
     * @var array List of business APIs associated with authorization API.
Note: this field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $RelationBuniessApiIds;

    /**
     * @var OauthConfig OAuth configuration information.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OauthConfig;

    /**
     * @var string Token storage position, which is an OAuth 2.0 API request.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TokenLocation;

    /**
     * @param string $ServiceId Unique service ID.
     * @param string $ApiId Unique API ID.
     * @param string $ApiDesc API description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Path API path.
     * @param string $Method API method.
     * @param string $CreatedTime Service creation time.
     * @param string $ModifiedTime Service modification time.
     * @param string $ApiName API name.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UniqVpcId Unique VPC ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ApiType API type.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Protocol API protocol.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsDebugAfterCharge Whether to enable debugging after purchase.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AuthType Authorization type.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ApiBusinessType API business type.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AuthRelationApiId Unique ID of associated authorization API.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $RelationBuniessApiIds List of business APIs associated with authorization API.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param OauthConfig $OauthConfig OAuth configuration information.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TokenLocation Token storage position, which is an OAuth 2.0 API request.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }

        if (array_key_exists("ApiDesc",$param) and $param["ApiDesc"] !== null) {
            $this->ApiDesc = $param["ApiDesc"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("ApiType",$param) and $param["ApiType"] !== null) {
            $this->ApiType = $param["ApiType"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("IsDebugAfterCharge",$param) and $param["IsDebugAfterCharge"] !== null) {
            $this->IsDebugAfterCharge = $param["IsDebugAfterCharge"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("ApiBusinessType",$param) and $param["ApiBusinessType"] !== null) {
            $this->ApiBusinessType = $param["ApiBusinessType"];
        }

        if (array_key_exists("AuthRelationApiId",$param) and $param["AuthRelationApiId"] !== null) {
            $this->AuthRelationApiId = $param["AuthRelationApiId"];
        }

        if (array_key_exists("RelationBuniessApiIds",$param) and $param["RelationBuniessApiIds"] !== null) {
            $this->RelationBuniessApiIds = $param["RelationBuniessApiIds"];
        }

        if (array_key_exists("OauthConfig",$param) and $param["OauthConfig"] !== null) {
            $this->OauthConfig = new OauthConfig();
            $this->OauthConfig->deserialize($param["OauthConfig"]);
        }

        if (array_key_exists("TokenLocation",$param) and $param["TokenLocation"] !== null) {
            $this->TokenLocation = $param["TokenLocation"];
        }
    }
}
