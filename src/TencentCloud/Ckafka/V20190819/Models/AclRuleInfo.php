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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Four pieces of information of ACL rules: source IP address, destination IP address, source port, and destination port
 *
 * @method string getOperation() Obtain ACL operation types. Enumerated values: `All` (all operations), `Read` (read), `Write` (write).
 * @method void setOperation(string $Operation) Set ACL operation types. Enumerated values: `All` (all operations), `Read` (read), `Write` (write).
 * @method string getPermissionType() Obtain Permission type. Deny: Deny. Allow: permission.
 * @method void setPermissionType(string $PermissionType) Set Permission type. Deny: Deny. Allow: permission.
 * @method string getHost() Obtain Indicates any host is accessible in the entire region.
 * @method void setHost(string $Host) Set Indicates any host is accessible in the entire region.
 * @method string getPrincipal() Obtain The User. User:* means any User is accessible in the entire region. the current User can only be the User in the list of users. the input format requires the [User:] prefix. for example, for User A, input User:A.
 * @method void setPrincipal(string $Principal) Set The User. User:* means any User is accessible in the entire region. the current User can only be the User in the list of users. the input format requires the [User:] prefix. for example, for User A, input User:A.
 */
class AclRuleInfo extends AbstractModel
{
    /**
     * @var string ACL operation types. Enumerated values: `All` (all operations), `Read` (read), `Write` (write).
     */
    public $Operation;

    /**
     * @var string Permission type. Deny: Deny. Allow: permission.
     */
    public $PermissionType;

    /**
     * @var string Indicates any host is accessible in the entire region.
     */
    public $Host;

    /**
     * @var string The User. User:* means any User is accessible in the entire region. the current User can only be the User in the list of users. the input format requires the [User:] prefix. for example, for User A, input User:A.
     */
    public $Principal;

    /**
     * @param string $Operation ACL operation types. Enumerated values: `All` (all operations), `Read` (read), `Write` (write).
     * @param string $PermissionType Permission type. Deny: Deny. Allow: permission.
     * @param string $Host Indicates any host is accessible in the entire region.
     * @param string $Principal The User. User:* means any User is accessible in the entire region. the current User can only be the User in the list of users. the input format requires the [User:] prefix. for example, for User A, input User:A.
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
        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("PermissionType",$param) and $param["PermissionType"] !== null) {
            $this->PermissionType = $param["PermissionType"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Principal",$param) and $param["Principal"] !== null) {
            $this->Principal = $param["Principal"];
        }
    }
}
