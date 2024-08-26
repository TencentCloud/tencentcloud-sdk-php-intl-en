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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetExternalSAMLIdentityProvider request structure.
 *
 * @method string getZoneId() Obtain Space ID.
 * @method void setZoneId(string $ZoneId) Set Space ID.
 * @method string getEncodedMetadataDocument() Obtain IdP metadata document (Base64 encoded). Provided by an IdP that supports the SAML 2.0 protocol.
 * @method void setEncodedMetadataDocument(string $EncodedMetadataDocument) Set IdP metadata document (Base64 encoded). Provided by an IdP that supports the SAML 2.0 protocol.
 * @method string getSSOStatus() Obtain SSO enabling status. Valid values: Enabled, Disabled (default).
 * @method void setSSOStatus(string $SSOStatus) Set SSO enabling status. Valid values: Enabled, Disabled (default).
 * @method string getEntityId() Obtain IdP identifier.
 * @method void setEntityId(string $EntityId) Set IdP identifier.
 * @method string getLoginUrl() Obtain IdP login URL.
 * @method void setLoginUrl(string $LoginUrl) Set IdP login URL.
 * @method string getX509Certificate() Obtain X509 certificate in PEM format. If this parameter is specified, all existing certificates will be replaced.
 * @method void setX509Certificate(string $X509Certificate) Set X509 certificate in PEM format. If this parameter is specified, all existing certificates will be replaced.
 */
class SetExternalSAMLIdentityProviderRequest extends AbstractModel
{
    /**
     * @var string Space ID.
     */
    public $ZoneId;

    /**
     * @var string IdP metadata document (Base64 encoded). Provided by an IdP that supports the SAML 2.0 protocol.
     */
    public $EncodedMetadataDocument;

    /**
     * @var string SSO enabling status. Valid values: Enabled, Disabled (default).
     */
    public $SSOStatus;

    /**
     * @var string IdP identifier.
     */
    public $EntityId;

    /**
     * @var string IdP login URL.
     */
    public $LoginUrl;

    /**
     * @var string X509 certificate in PEM format. If this parameter is specified, all existing certificates will be replaced.
     */
    public $X509Certificate;

    /**
     * @param string $ZoneId Space ID.
     * @param string $EncodedMetadataDocument IdP metadata document (Base64 encoded). Provided by an IdP that supports the SAML 2.0 protocol.
     * @param string $SSOStatus SSO enabling status. Valid values: Enabled, Disabled (default).
     * @param string $EntityId IdP identifier.
     * @param string $LoginUrl IdP login URL.
     * @param string $X509Certificate X509 certificate in PEM format. If this parameter is specified, all existing certificates will be replaced.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("EncodedMetadataDocument",$param) and $param["EncodedMetadataDocument"] !== null) {
            $this->EncodedMetadataDocument = $param["EncodedMetadataDocument"];
        }

        if (array_key_exists("SSOStatus",$param) and $param["SSOStatus"] !== null) {
            $this->SSOStatus = $param["SSOStatus"];
        }

        if (array_key_exists("EntityId",$param) and $param["EntityId"] !== null) {
            $this->EntityId = $param["EntityId"];
        }

        if (array_key_exists("LoginUrl",$param) and $param["LoginUrl"] !== null) {
            $this->LoginUrl = $param["LoginUrl"];
        }

        if (array_key_exists("X509Certificate",$param) and $param["X509Certificate"] !== null) {
            $this->X509Certificate = $param["X509Certificate"];
        }
    }
}
