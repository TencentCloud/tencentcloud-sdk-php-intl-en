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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Four pieces of information of ACL rules: source IP address, destination IP address, source port, and destination port
 *
 * @method string getOperation() Obtain ACL operation types. Enumerated values: `All` (all operations), `Read` (read), `Write` (write).
 * @method void setOperation(string $Operation) Set ACL operation types. Enumerated values: `All` (all operations), `Read` (read), `Write` (write).
 * @method string getPermissionType() Obtain Permission types: `Deny`, `Allow`.
 * @method void setPermissionType(string $PermissionType) Set Permission types: `Deny`, `Allow`.
 * @method string getHost() Obtain The default value is `*`, which means that any host can access the topic. CKafka currently does not support specifying a host value of * or an IP range.
 * @method void setHost(string $Host) Set The default value is `*`, which means that any host can access the topic. CKafka currently does not support specifying a host value of * or an IP range.
 * @method string getPrincipal() Obtain The list of users allowed to access the topic. Default value: `User:*`, which means all users. The current user must be in the user list. Add the prefix `User:` before the user name (`User:A`, for example).
 * @method void setPrincipal(string $Principal) Set The list of users allowed to access the topic. Default value: `User:*`, which means all users. The current user must be in the user list. Add the prefix `User:` before the user name (`User:A`, for example).
 */
class AclRuleInfo extends AbstractModel
{
    /**
     * @var string ACL operation types. Enumerated values: `All` (all operations), `Read` (read), `Write` (write).
     */
    public $Operation;

    /**
     * @var string Permission types: `Deny`, `Allow`.
     */
    public $PermissionType;

    /**
     * @var string The default value is `*`, which means that any host can access the topic. CKafka currently does not support specifying a host value of * or an IP range.
     */
    public $Host;

    /**
     * @var string The list of users allowed to access the topic. Default value: `User:*`, which means all users. The current user must be in the user list. Add the prefix `User:` before the user name (`User:A`, for example).
     */
    public $Principal;

    /**
     * @param string $Operation ACL operation types. Enumerated values: `All` (all operations), `Read` (read), `Write` (write).
     * @param string $PermissionType Permission types: `Deny`, `Allow`.
     * @param string $Host The default value is `*`, which means that any host can access the topic. CKafka currently does not support specifying a host value of * or an IP range.
     * @param string $Principal The list of users allowed to access the topic. Default value: `User:*`, which means all users. The current user must be in the user list. Add the prefix `User:` before the user name (`User:A`, for example).
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
