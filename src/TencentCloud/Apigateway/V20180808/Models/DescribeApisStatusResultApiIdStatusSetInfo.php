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
 * API status details
 *
 * @method string getServiceId() Obtain Unique service ID.
 * @method void setServiceId(string $ServiceId) Set Unique service ID.
 * @method string getApiId() Obtain Unique API ID.
 * @method void setApiId(string $ApiId) Set Unique API ID.
 * @method string getApiDesc() Obtain Custom API description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApiDesc(string $ApiDesc) Set Custom API description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedTime() Obtain Creation time. u200dIt is the UTC time in ISO-8601 format. Format: YYYY-MM-DDThh:mm:ssZ.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time. u200dIt is the UTC time in ISO-8601 format. Format: YYYY-MM-DDThh:mm:ssZ.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getModifiedTime() Obtain Last modification time u200dIt is the UTC time in ISO-8601 format. Format: YYYY-MM-DDThh:mm:ssZ.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setModifiedTime(string $ModifiedTime) Set Last modification time u200dIt is the UTC time in ISO-8601 format. Format: YYYY-MM-DDThh:mm:ssZ.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method string getApiName() Obtain API name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApiName(string $ApiName) Set API name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVpcId() Obtain VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcId(integer $VpcId) Set VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUniqVpcId() Obtain Unique VPC ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUniqVpcId(string $UniqVpcId) Set Unique VPC ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getApiType() Obtain API type API type. Valid values: `NORMAL` (general API), `TSF` (microservice API).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApiType(string $ApiType) Set API type API type. Valid values: `NORMAL` (general API), `TSF` (microservice API).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getProtocol() Obtain API protocol.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProtocol(string $Protocol) Set API protocol.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsDebugAfterCharge() Obtain Whether to enable debugging after purchase. (This field is reserved for Marketplace
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsDebugAfterCharge(boolean $IsDebugAfterCharge) Set Whether to enable debugging after purchase. (This field is reserved for Marketplace
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAuthType() Obtain API authentication type. Valid values: `SECRET` (key pair authentication), `NONE` (no authentication), `OAUTH`, and `EIAM`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAuthType(string $AuthType) Set API authentication type. Valid values: `SECRET` (key pair authentication), `NONE` (no authentication), `OAUTH`, and `EIAM`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApiBusinessType() Obtain OAuth API type. Valid values: u200d`NORMAL` (service API), `OAUTH` (authorization API). It is only applicable when `AuthType` is `OAUTH`. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApiBusinessType(string $ApiBusinessType) Set OAuth API type. Valid values: u200d`NORMAL` (service API), `OAUTH` (authorization API). It is only applicable when `AuthType` is `OAUTH`. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAuthRelationApiId() Obtain Unique ID of associated authorization API. It is applicable when `AuthType` is `OAUTH` and `ApiBusinessType` is `NORMAL`. It is the unique ID of the OAuth 2.0 authorization API bound to the service API.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAuthRelationApiId(string $AuthRelationApiId) Set Unique ID of associated authorization API. It is applicable when `AuthType` is `OAUTH` and `ApiBusinessType` is `NORMAL`. It is the unique ID of the OAuth 2.0 authorization API bound to the service API.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method OauthConfig getOauthConfig() Obtain OAUTH configuration information. It is applicable when `AuthType` is `OAUTH`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOauthConfig(OauthConfig $OauthConfig) Set OAUTH configuration information. It is applicable when `AuthType` is `OAUTH`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getRelationBuniessApiIds() Obtain List of business APIs associated with authorization API.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRelationBuniessApiIds(array $RelationBuniessApiIds) Set List of business APIs associated with authorization API.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Information of tags associated with API.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Information of tags associated with API.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getPath() Obtain API path, such as `/path`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPath(string $Path) Set API path, such as `/path`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMethod() Obtain API request method, such as `GET`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMethod(string $Method) Set API request method, such as `GET`.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class DescribeApisStatusResultApiIdStatusSetInfo extends AbstractModel
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
     * @var string Custom API description.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApiDesc;

    /**
     * @var string Creation time. u200dIt is the UTC time in ISO-8601 format. Format: YYYY-MM-DDThh:mm:ssZ.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedTime;

    /**
     * @var string Last modification time u200dIt is the UTC time in ISO-8601 format. Format: YYYY-MM-DDThh:mm:ssZ.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $ModifiedTime;

    /**
     * @var string API name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApiName;

    /**
     * @var integer VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var string Unique VPC ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UniqVpcId;

    /**
     * @var string API type API type. Valid values: `NORMAL` (general API), `TSF` (microservice API).
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApiType;

    /**
     * @var string API protocol.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Protocol;

    /**
     * @var boolean Whether to enable debugging after purchase. (This field is reserved for Marketplace
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsDebugAfterCharge;

    /**
     * @var string API authentication type. Valid values: `SECRET` (key pair authentication), `NONE` (no authentication), `OAUTH`, and `EIAM`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AuthType;

    /**
     * @var string OAuth API type. Valid values: u200d`NORMAL` (service API), `OAUTH` (authorization API). It is only applicable when `AuthType` is `OAUTH`. 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApiBusinessType;

    /**
     * @var string Unique ID of associated authorization API. It is applicable when `AuthType` is `OAUTH` and `ApiBusinessType` is `NORMAL`. It is the unique ID of the OAuth 2.0 authorization API bound to the service API.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AuthRelationApiId;

    /**
     * @var OauthConfig OAUTH configuration information. It is applicable when `AuthType` is `OAUTH`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OauthConfig;

    /**
     * @var array List of business APIs associated with authorization API.
Note: this field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $RelationBuniessApiIds;

    /**
     * @var array Information of tags associated with API.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var string API path, such as `/path`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Path;

    /**
     * @var string API request method, such as `GET`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Method;

    /**
     * @param string $ServiceId Unique service ID.
     * @param string $ApiId Unique API ID.
     * @param string $ApiDesc Custom API description.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedTime Creation time. u200dIt is the UTC time in ISO-8601 format. Format: YYYY-MM-DDThh:mm:ssZ.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ModifiedTime Last modification time u200dIt is the UTC time in ISO-8601 format. Format: YYYY-MM-DDThh:mm:ssZ.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     * @param string $ApiName API name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $VpcId VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UniqVpcId Unique VPC ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ApiType API type API type. Valid values: `NORMAL` (general API), `TSF` (microservice API).
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Protocol API protocol.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsDebugAfterCharge Whether to enable debugging after purchase. (This field is reserved for Marketplace
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AuthType API authentication type. Valid values: `SECRET` (key pair authentication), `NONE` (no authentication), `OAUTH`, and `EIAM`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApiBusinessType OAuth API type. Valid values: u200d`NORMAL` (service API), `OAUTH` (authorization API). It is only applicable when `AuthType` is `OAUTH`. 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AuthRelationApiId Unique ID of associated authorization API. It is applicable when `AuthType` is `OAUTH` and `ApiBusinessType` is `NORMAL`. It is the unique ID of the OAuth 2.0 authorization API bound to the service API.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param OauthConfig $OauthConfig OAUTH configuration information. It is applicable when `AuthType` is `OAUTH`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $RelationBuniessApiIds List of business APIs associated with authorization API.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Information of tags associated with API.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Path API path, such as `/path`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Method API request method, such as `GET`.
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

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
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

        if (array_key_exists("OauthConfig",$param) and $param["OauthConfig"] !== null) {
            $this->OauthConfig = new OauthConfig();
            $this->OauthConfig->deserialize($param["OauthConfig"]);
        }

        if (array_key_exists("RelationBuniessApiIds",$param) and $param["RelationBuniessApiIds"] !== null) {
            $this->RelationBuniessApiIds = $param["RelationBuniessApiIds"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ApigatewayTags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }
    }
}
