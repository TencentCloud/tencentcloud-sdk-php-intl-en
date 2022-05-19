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
 * DescribeOIDCConfig response structure.
 *
 * @method integer getProviderType() Obtain IdP type. 11: Role IdP.
 * @method void setProviderType(integer $ProviderType) Set IdP type. 11: Role IdP.
 * @method string getIdentityUrl() Obtain IdP URL.
 * @method void setIdentityUrl(string $IdentityUrl) Set IdP URL.
 * @method string getIdentityKey() Obtain Public key for signature.
 * @method void setIdentityKey(string $IdentityKey) Set Public key for signature.
 * @method array getClientId() Obtain Client ID.
 * @method void setClientId(array $ClientId) Set Client ID.
 * @method integer getStatus() Obtain Status. 0: Not set; 2: Disabled; 11: Enabled.
 * @method void setStatus(integer $Status) Set Status. 0: Not set; 2: Disabled; 11: Enabled.
 * @method string getDescription() Obtain Description.
 * @method void setDescription(string $Description) Set Description.
 * @method string getName() Obtain Name.
 * @method void setName(string $Name) Set Name.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeOIDCConfigResponse extends AbstractModel
{
    /**
     * @var integer IdP type. 11: Role IdP.
     */
    public $ProviderType;

    /**
     * @var string IdP URL.
     */
    public $IdentityUrl;

    /**
     * @var string Public key for signature.
     */
    public $IdentityKey;

    /**
     * @var array Client ID.
     */
    public $ClientId;

    /**
     * @var integer Status. 0: Not set; 2: Disabled; 11: Enabled.
     */
    public $Status;

    /**
     * @var string Description.
     */
    public $Description;

    /**
     * @var string Name.
     */
    public $Name;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $ProviderType IdP type. 11: Role IdP.
     * @param string $IdentityUrl IdP URL.
     * @param string $IdentityKey Public key for signature.
     * @param array $ClientId Client ID.
     * @param integer $Status Status. 0: Not set; 2: Disabled; 11: Enabled.
     * @param string $Description Description.
     * @param string $Name Name.
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
