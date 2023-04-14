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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ServiceAccount authentication configuration
 *
 * @method boolean getUseTKEDefault() Obtain Use TKE default issuer and jwksuri
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setUseTKEDefault(boolean $UseTKEDefault) Set Use TKE default issuer and jwksuri
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getIssuer() Obtain service-account-issuer
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setIssuer(string $Issuer) Set service-account-issuer
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getJWKSURI() Obtain service-account-jwks-uri
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setJWKSURI(string $JWKSURI) Set service-account-jwks-uri
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getAutoCreateDiscoveryAnonymousAuth() Obtain If it is set to `true`, a RABC rule is automatically created to allow anonymous users to access `/.well-known/openid-configuration` and `/openid/v1/jwks`.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAutoCreateDiscoveryAnonymousAuth(boolean $AutoCreateDiscoveryAnonymousAuth) Set If it is set to `true`, a RABC rule is automatically created to allow anonymous users to access `/.well-known/openid-configuration` and `/openid/v1/jwks`.
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class ServiceAccountAuthenticationOptions extends AbstractModel
{
    /**
     * @var boolean Use TKE default issuer and jwksuri
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $UseTKEDefault;

    /**
     * @var string service-account-issuer
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Issuer;

    /**
     * @var string service-account-jwks-uri
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $JWKSURI;

    /**
     * @var boolean If it is set to `true`, a RABC rule is automatically created to allow anonymous users to access `/.well-known/openid-configuration` and `/openid/v1/jwks`.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $AutoCreateDiscoveryAnonymousAuth;

    /**
     * @param boolean $UseTKEDefault Use TKE default issuer and jwksuri
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Issuer service-account-issuer
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $JWKSURI service-account-jwks-uri
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $AutoCreateDiscoveryAnonymousAuth If it is set to `true`, a RABC rule is automatically created to allow anonymous users to access `/.well-known/openid-configuration` and `/openid/v1/jwks`.
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("UseTKEDefault",$param) and $param["UseTKEDefault"] !== null) {
            $this->UseTKEDefault = $param["UseTKEDefault"];
        }

        if (array_key_exists("Issuer",$param) and $param["Issuer"] !== null) {
            $this->Issuer = $param["Issuer"];
        }

        if (array_key_exists("JWKSURI",$param) and $param["JWKSURI"] !== null) {
            $this->JWKSURI = $param["JWKSURI"];
        }

        if (array_key_exists("AutoCreateDiscoveryAnonymousAuth",$param) and $param["AutoCreateDiscoveryAnonymousAuth"] !== null) {
            $this->AutoCreateDiscoveryAnonymousAuth = $param["AutoCreateDiscoveryAnonymousAuth"];
        }
    }
}
