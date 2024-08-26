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
 * SAML identity provider configuration information.
 *
 * @method string getEntityId() Obtain IdP identifier.
 * @method void setEntityId(string $EntityId) Set IdP identifier.
 * @method string getSSOStatus() Obtain SSO enabling status. Valid values: Enabled, Disabled (default).
 * @method void setSSOStatus(string $SSOStatus) Set SSO enabling status. Valid values: Enabled, Disabled (default).
 * @method string getEncodedMetadataDocument() Obtain IdP metadata document (Base64 encoded).
 * @method void setEncodedMetadataDocument(string $EncodedMetadataDocument) Set IdP metadata document (Base64 encoded).
 * @method array getCertificateIds() Obtain X509 certificate ID.
 * @method void setCertificateIds(array $CertificateIds) Set X509 certificate ID.
 * @method string getLoginUrl() Obtain IdP login URL.
 * @method void setLoginUrl(string $LoginUrl) Set IdP login URL.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getUpdateTime() Obtain Update time.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.
 */
class SAMLIdentityProviderConfiguration extends AbstractModel
{
    /**
     * @var string IdP identifier.
     */
    public $EntityId;

    /**
     * @var string SSO enabling status. Valid values: Enabled, Disabled (default).
     */
    public $SSOStatus;

    /**
     * @var string IdP metadata document (Base64 encoded).
     */
    public $EncodedMetadataDocument;

    /**
     * @var array X509 certificate ID.
     */
    public $CertificateIds;

    /**
     * @var string IdP login URL.
     */
    public $LoginUrl;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Update time.
     */
    public $UpdateTime;

    /**
     * @param string $EntityId IdP identifier.
     * @param string $SSOStatus SSO enabling status. Valid values: Enabled, Disabled (default).
     * @param string $EncodedMetadataDocument IdP metadata document (Base64 encoded).
     * @param array $CertificateIds X509 certificate ID.
     * @param string $LoginUrl IdP login URL.
     * @param string $CreateTime Creation time.
     * @param string $UpdateTime Update time.
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
        if (array_key_exists("EntityId",$param) and $param["EntityId"] !== null) {
            $this->EntityId = $param["EntityId"];
        }

        if (array_key_exists("SSOStatus",$param) and $param["SSOStatus"] !== null) {
            $this->SSOStatus = $param["SSOStatus"];
        }

        if (array_key_exists("EncodedMetadataDocument",$param) and $param["EncodedMetadataDocument"] !== null) {
            $this->EncodedMetadataDocument = $param["EncodedMetadataDocument"];
        }

        if (array_key_exists("CertificateIds",$param) and $param["CertificateIds"] !== null) {
            $this->CertificateIds = $param["CertificateIds"];
        }

        if (array_key_exists("LoginUrl",$param) and $param["LoginUrl"] !== null) {
            $this->LoginUrl = $param["LoginUrl"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
