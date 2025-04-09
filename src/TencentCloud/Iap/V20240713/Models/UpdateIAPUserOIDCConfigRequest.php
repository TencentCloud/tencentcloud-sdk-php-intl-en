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
namespace TencentCloud\Iap\V20240713\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateIAPUserOIDCConfig request structure.
 *
 * @method string getIdentityUrl() Obtain OpenID Connect IdP URL. It corresponds to the value of the "issuer" field in the Openid-configuration provided by the enterprise IdP.
 * @method void setIdentityUrl(string $IdentityUrl) Set OpenID Connect IdP URL. It corresponds to the value of the "issuer" field in the Openid-configuration provided by the enterprise IdP.
 * @method string getClientId() Obtain Client ID registered with the OpenID Connect IdP.
 * @method void setClientId(string $ClientId) Set Client ID registered with the OpenID Connect IdP.
 * @method string getAuthorizationEndpoint() Obtain OpenID Connect IdP authorization endpoint. It corresponds to the value of the "authorization_endpoint" field in the Openid-configuration provided by the enterprise IdP.
 * @method void setAuthorizationEndpoint(string $AuthorizationEndpoint) Set OpenID Connect IdP authorization endpoint. It corresponds to the value of the "authorization_endpoint" field in the Openid-configuration provided by the enterprise IdP.
 * @method string getResponseType() Obtain Authorization response type, which is always id_token.
 * @method void setResponseType(string $ResponseType) Set Authorization response type, which is always id_token.
 * @method string getResponseMode() Obtain Authorization response mode. Valid values: form_post (recommended); fragment.
 * @method void setResponseMode(string $ResponseMode) Set Authorization response mode. Valid values: form_post (recommended); fragment.
 * @method string getMappingFiled() Obtain Mapping field name. It indicates which field in the id_token of the IdP is mapped to the username of a sub-user. It is usually the sub or name field.
 * @method void setMappingFiled(string $MappingFiled) Set Mapping field name. It indicates which field in the id_token of the IdP is mapped to the username of a sub-user. It is usually the sub or name field.
 * @method string getIdentityKey() Obtain RSA signature public key in the JWKS format, which is used to verify the OpenID Connect IdP's ID token and must be Base64-encoded. For the security of your account, we recommend you rotate it regularly.
 * @method void setIdentityKey(string $IdentityKey) Set RSA signature public key in the JWKS format, which is used to verify the OpenID Connect IdP's ID token and must be Base64-encoded. For the security of your account, we recommend you rotate it regularly.
 * @method array getScope() Obtain Authorization information scope. Valid values: openid (default); email; profile.
 * @method void setScope(array $Scope) Set Authorization information scope. Valid values: openid (default); email; profile.
 * @method string getDescription() Obtain Description, with a length of 1 to 255 English or Chinese characters. It is empty by default.
 * @method void setDescription(string $Description) Set Description, with a length of 1 to 255 English or Chinese characters. It is empty by default.
 */
class UpdateIAPUserOIDCConfigRequest extends AbstractModel
{
    /**
     * @var string OpenID Connect IdP URL. It corresponds to the value of the "issuer" field in the Openid-configuration provided by the enterprise IdP.
     */
    public $IdentityUrl;

    /**
     * @var string Client ID registered with the OpenID Connect IdP.
     */
    public $ClientId;

    /**
     * @var string OpenID Connect IdP authorization endpoint. It corresponds to the value of the "authorization_endpoint" field in the Openid-configuration provided by the enterprise IdP.
     */
    public $AuthorizationEndpoint;

    /**
     * @var string Authorization response type, which is always id_token.
     */
    public $ResponseType;

    /**
     * @var string Authorization response mode. Valid values: form_post (recommended); fragment.
     */
    public $ResponseMode;

    /**
     * @var string Mapping field name. It indicates which field in the id_token of the IdP is mapped to the username of a sub-user. It is usually the sub or name field.
     */
    public $MappingFiled;

    /**
     * @var string RSA signature public key in the JWKS format, which is used to verify the OpenID Connect IdP's ID token and must be Base64-encoded. For the security of your account, we recommend you rotate it regularly.
     */
    public $IdentityKey;

    /**
     * @var array Authorization information scope. Valid values: openid (default); email; profile.
     */
    public $Scope;

    /**
     * @var string Description, with a length of 1 to 255 English or Chinese characters. It is empty by default.
     */
    public $Description;

    /**
     * @param string $IdentityUrl OpenID Connect IdP URL. It corresponds to the value of the "issuer" field in the Openid-configuration provided by the enterprise IdP.
     * @param string $ClientId Client ID registered with the OpenID Connect IdP.
     * @param string $AuthorizationEndpoint OpenID Connect IdP authorization endpoint. It corresponds to the value of the "authorization_endpoint" field in the Openid-configuration provided by the enterprise IdP.
     * @param string $ResponseType Authorization response type, which is always id_token.
     * @param string $ResponseMode Authorization response mode. Valid values: form_post (recommended); fragment.
     * @param string $MappingFiled Mapping field name. It indicates which field in the id_token of the IdP is mapped to the username of a sub-user. It is usually the sub or name field.
     * @param string $IdentityKey RSA signature public key in the JWKS format, which is used to verify the OpenID Connect IdP's ID token and must be Base64-encoded. For the security of your account, we recommend you rotate it regularly.
     * @param array $Scope Authorization information scope. Valid values: openid (default); email; profile.
     * @param string $Description Description, with a length of 1 to 255 English or Chinese characters. It is empty by default.
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
        if (array_key_exists("IdentityUrl",$param) and $param["IdentityUrl"] !== null) {
            $this->IdentityUrl = $param["IdentityUrl"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("AuthorizationEndpoint",$param) and $param["AuthorizationEndpoint"] !== null) {
            $this->AuthorizationEndpoint = $param["AuthorizationEndpoint"];
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

        if (array_key_exists("IdentityKey",$param) and $param["IdentityKey"] !== null) {
            $this->IdentityKey = $param["IdentityKey"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
