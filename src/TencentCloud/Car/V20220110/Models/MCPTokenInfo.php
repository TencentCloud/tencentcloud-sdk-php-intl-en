<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Car\V20220110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MCP Token information
 *
 * @method string getTokenId() Obtain <p>TokenId</p><p>Used to manage Token data. It can be used to extend the validity period of the corresponding Token.</p>
 * @method void setTokenId(string $TokenId) Set <p>TokenId</p><p>Used to manage Token data. It can be used to extend the validity period of the corresponding Token.</p>
 * @method string getTokenName() Obtain <p>Token name (comment)</p>
 * @method void setTokenName(string $TokenName) Set <p>Token name (comment)</p>
 * @method string getUserId() Obtain <p>User Id</p><p>This UserId is always used to operate cloud rendering concurrent resources. (If this parameter is empty, no restriction is applied.)</p>
 * @method void setUserId(string $UserId) Set <p>User Id</p><p>This UserId is always used to operate cloud rendering concurrent resources. (If this parameter is empty, no restriction is applied.)</p>
 * @method array getScopes() Obtain <p>Permission scope</p><p>Default value: [&quot;*&quot;]</p><p>Used to specify operation permissions. By default, all permissions are granted.</p>
 * @method void setScopes(array $Scopes) Set <p>Permission scope</p><p>Default value: [&quot;*&quot;]</p><p>Used to specify operation permissions. By default, all permissions are granted.</p>
 * @method string getStatus() Obtain <p>Token status</p><p>Valid values:</p><ul><li>ACTIVE: Normal status. The token has not been revoked, but it may not be within its validity period.</li><li>REVOKED: The token has been revoked and is permanently invalid.</li></ul><p>Default value: ACTIVE</p>
 * @method void setStatus(string $Status) Set <p>Token status</p><p>Valid values:</p><ul><li>ACTIVE: Normal status. The token has not been revoked, but it may not be within its validity period.</li><li>REVOKED: The token has been revoked and is permanently invalid.</li></ul><p>Default value: ACTIVE</p>
 * @method string getCreatedTime() Obtain <p>Token creation time</p>
 * @method void setCreatedTime(string $CreatedTime) Set <p>Token creation time</p>
 * @method string getExpiresTime() Obtain <p>Token expiration time</p>
 * @method void setExpiresTime(string $ExpiresTime) Set <p>Token expiration time</p>
 */
class MCPTokenInfo extends AbstractModel
{
    /**
     * @var string <p>TokenId</p><p>Used to manage Token data. It can be used to extend the validity period of the corresponding Token.</p>
     */
    public $TokenId;

    /**
     * @var string <p>Token name (comment)</p>
     */
    public $TokenName;

    /**
     * @var string <p>User Id</p><p>This UserId is always used to operate cloud rendering concurrent resources. (If this parameter is empty, no restriction is applied.)</p>
     */
    public $UserId;

    /**
     * @var array <p>Permission scope</p><p>Default value: [&quot;*&quot;]</p><p>Used to specify operation permissions. By default, all permissions are granted.</p>
     */
    public $Scopes;

    /**
     * @var string <p>Token status</p><p>Valid values:</p><ul><li>ACTIVE: Normal status. The token has not been revoked, but it may not be within its validity period.</li><li>REVOKED: The token has been revoked and is permanently invalid.</li></ul><p>Default value: ACTIVE</p>
     */
    public $Status;

    /**
     * @var string <p>Token creation time</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>Token expiration time</p>
     */
    public $ExpiresTime;

    /**
     * @param string $TokenId <p>TokenId</p><p>Used to manage Token data. It can be used to extend the validity period of the corresponding Token.</p>
     * @param string $TokenName <p>Token name (comment)</p>
     * @param string $UserId <p>User Id</p><p>This UserId is always used to operate cloud rendering concurrent resources. (If this parameter is empty, no restriction is applied.)</p>
     * @param array $Scopes <p>Permission scope</p><p>Default value: [&quot;*&quot;]</p><p>Used to specify operation permissions. By default, all permissions are granted.</p>
     * @param string $Status <p>Token status</p><p>Valid values:</p><ul><li>ACTIVE: Normal status. The token has not been revoked, but it may not be within its validity period.</li><li>REVOKED: The token has been revoked and is permanently invalid.</li></ul><p>Default value: ACTIVE</p>
     * @param string $CreatedTime <p>Token creation time</p>
     * @param string $ExpiresTime <p>Token expiration time</p>
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
        if (array_key_exists("TokenId",$param) and $param["TokenId"] !== null) {
            $this->TokenId = $param["TokenId"];
        }

        if (array_key_exists("TokenName",$param) and $param["TokenName"] !== null) {
            $this->TokenName = $param["TokenName"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Scopes",$param) and $param["Scopes"] !== null) {
            $this->Scopes = $param["Scopes"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ExpiresTime",$param) and $param["ExpiresTime"] !== null) {
            $this->ExpiresTime = $param["ExpiresTime"];
        }
    }
}
