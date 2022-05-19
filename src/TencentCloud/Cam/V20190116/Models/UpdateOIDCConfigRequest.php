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
 * UpdateOIDCConfig request structure.
 *
 * @method string getIdentityUrl() Obtain IdP URL.
 * @method void setIdentityUrl(string $IdentityUrl) Set IdP URL.
 * @method string getIdentityKey() Obtain Public key for signature, which must be Base64-encoded.
 * @method void setIdentityKey(string $IdentityKey) Set Public key for signature, which must be Base64-encoded.
 * @method array getClientId() Obtain Client ID.
 * @method void setClientId(array $ClientId) Set Client ID.
 * @method string getName() Obtain Name.
 * @method void setName(string $Name) Set Name.
 * @method string getDescription() Obtain Description.
 * @method void setDescription(string $Description) Set Description.
 */
class UpdateOIDCConfigRequest extends AbstractModel
{
    /**
     * @var string IdP URL.
     */
    public $IdentityUrl;

    /**
     * @var string Public key for signature, which must be Base64-encoded.
     */
    public $IdentityKey;

    /**
     * @var array Client ID.
     */
    public $ClientId;

    /**
     * @var string Name.
     */
    public $Name;

    /**
     * @var string Description.
     */
    public $Description;

    /**
     * @param string $IdentityUrl IdP URL.
     * @param string $IdentityKey Public key for signature, which must be Base64-encoded.
     * @param array $ClientId Client ID.
     * @param string $Name Name.
     * @param string $Description Description.
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

        if (array_key_exists("IdentityKey",$param) and $param["IdentityKey"] !== null) {
            $this->IdentityKey = $param["IdentityKey"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
