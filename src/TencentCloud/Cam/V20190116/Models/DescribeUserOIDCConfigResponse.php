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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserOIDCConfig response structure.
 *
 * @method integer getProviderType() Obtain IdP type. 12: user OIDC IdP
 * @method void setProviderType(integer $ProviderType) Set IdP type. 12: user OIDC IdP
 * @method string getIdentityUrl() Obtain IdP URL
 * @method void setIdentityUrl(string $IdentityUrl) Set IdP URL
 * @method string getIdentityKey() Obtain Signature public key
 * @method void setIdentityKey(string $IdentityKey) Set Signature public key
 * @method string getClientId() Obtain Client ID
 * @method void setClientId(string $ClientId) Set Client ID
 * @method integer getStatus() Obtain Status. 0: not set; 2: disabled; 11: enabled.
 * @method void setStatus(integer $Status) Set Status. 0: not set; 2: disabled; 11: enabled.
 * @method string getAuthorizationEndpoint() Obtain Authorization endpoint
 * @method void setAuthorizationEndpoint(string $AuthorizationEndpoint) Set Authorization endpoint
 * @method array getScope() Obtain Authorization scope
 * @method void setScope(array $Scope) Set Authorization scope
 * @method string getResponseType() Obtain Authorization response type
 * @method void setResponseType(string $ResponseType) Set Authorization response type
 * @method string getResponseMode() Obtain Authorization response mode
 * @method void setResponseMode(string $ResponseMode) Set Authorization response mode
 * @method string getMappingFiled() Obtain Mapping field name
 * @method void setMappingFiled(string $MappingFiled) Set Mapping field name
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeUserOIDCConfigResponse extends AbstractModel
{
    /**
     * @var integer IdP type. 12: user OIDC IdP
     */
    public $ProviderType;

    /**
     * @var string IdP URL
     */
    public $IdentityUrl;

    /**
     * @var string Signature public key
     */
    public $IdentityKey;

    /**
     * @var string Client ID
     */
    public $ClientId;

    /**
     * @var integer Status. 0: not set; 2: disabled; 11: enabled.
     */
    public $Status;

    /**
     * @var string Authorization endpoint
     */
    public $AuthorizationEndpoint;

    /**
     * @var array Authorization scope
     */
    public $Scope;

    /**
     * @var string Authorization response type
     */
    public $ResponseType;

    /**
     * @var string Authorization response mode
     */
    public $ResponseMode;

    /**
     * @var string Mapping field name
     */
    public $MappingFiled;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $ProviderType IdP type. 12: user OIDC IdP
     * @param string $IdentityUrl IdP URL
     * @param string $IdentityKey Signature public key
     * @param string $ClientId Client ID
     * @param integer $Status Status. 0: not set; 2: disabled; 11: enabled.
     * @param string $AuthorizationEndpoint Authorization endpoint
     * @param array $Scope Authorization scope
     * @param string $ResponseType Authorization response type
     * @param string $ResponseMode Authorization response mode
     * @param string $MappingFiled Mapping field name
     * @param string $Description Description
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("ProviderType",$param) and $param["ProviderType"] !== null) {
            $this->ProviderType = $param["ProviderType"];
        }

        if (array_key_exists("IdentityUrl",$param) and $param["IdentityUrl"] !== null) {
            $this->IdentityUrl = $param["IdentityUrl"];
        }

        if (array_key_exists("IdentityKey",$param) and $param["IdentityKey"] !== null) {
            $this->IdentityKey = $param["IdentityKey"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AuthorizationEndpoint",$param) and $param["AuthorizationEndpoint"] !== null) {
            $this->AuthorizationEndpoint = $param["AuthorizationEndpoint"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("ResponseType",$param) and $param["ResponseType"] !== null) {
            $this->ResponseType = $param["ResponseType"];
        }

        if (array_key_exists("ResponseMode",$param) and $param["ResponseMode"] !== null) {
            $this->ResponseMode = $param["ResponseMode"];
        }

        if (array_key_exists("MappingFiled",$param) and $param["MappingFiled"] !== null) {
            $this->MappingFiled = $param["MappingFiled"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
