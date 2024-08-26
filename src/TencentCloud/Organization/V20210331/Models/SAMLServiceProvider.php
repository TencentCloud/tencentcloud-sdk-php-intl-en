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
 * SAML service provider information.
 *
 * @method string getEntityId() Obtain https://tencentcloudsso.com/saml/sp/z-sjw8ensa**
 * @method void setEntityId(string $EntityId) Set https://tencentcloudsso.com/saml/sp/z-sjw8ensa**
 * @method string getZoneId() Obtain Space ID.
 * @method void setZoneId(string $ZoneId) Set Space ID.
 * @method string getEncodedMetadataDocument() Obtain SP metadata document (Base64 encoded).
 * @method void setEncodedMetadataDocument(string $EncodedMetadataDocument) Set SP metadata document (Base64 encoded).
 * @method string getAcsUrl() Obtain SP ACS URL.
 * @method void setAcsUrl(string $AcsUrl) Set SP ACS URL.
 */
class SAMLServiceProvider extends AbstractModel
{
    /**
     * @var string https://tencentcloudsso.com/saml/sp/z-sjw8ensa**
     */
    public $EntityId;

    /**
     * @var string Space ID.
     */
    public $ZoneId;

    /**
     * @var string SP metadata document (Base64 encoded).
     */
    public $EncodedMetadataDocument;

    /**
     * @var string SP ACS URL.
     */
    public $AcsUrl;

    /**
     * @param string $EntityId https://tencentcloudsso.com/saml/sp/z-sjw8ensa**
     * @param string $ZoneId Space ID.
     * @param string $EncodedMetadataDocument SP metadata document (Base64 encoded).
     * @param string $AcsUrl SP ACS URL.
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

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("EncodedMetadataDocument",$param) and $param["EncodedMetadataDocument"] !== null) {
            $this->EncodedMetadataDocument = $param["EncodedMetadataDocument"];
        }

        if (array_key_exists("AcsUrl",$param) and $param["AcsUrl"] !== null) {
            $this->AcsUrl = $param["AcsUrl"];
        }
    }
}
