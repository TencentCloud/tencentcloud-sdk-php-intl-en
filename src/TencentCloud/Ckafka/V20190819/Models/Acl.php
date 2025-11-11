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
 * ACL object entity
 *
 * @method integer getResourceType() Obtain ACL resource type. 0: UNKNOWN, 1: ANY, 2: TOPIC, 3: GROUP, 4: CLUSTER, 5: TRANSACTIONAL_ID. Currently, only `TOPIC` is available,
 * @method void setResourceType(integer $ResourceType) Set ACL resource type. 0: UNKNOWN, 1: ANY, 2: TOPIC, 3: GROUP, 4: CLUSTER, 5: TRANSACTIONAL_ID. Currently, only `TOPIC` is available,
 * @method string getResourceName() Obtain Resource name, which is related to `resourceType`. For example, if `resourceType` is `TOPIC`, this field indicates the topic name; if `resourceType` is `GROUP`, this field indicates the group name
 * @method void setResourceName(string $ResourceName) Set Resource name, which is related to `resourceType`. For example, if `resourceType` is `TOPIC`, this field indicates the topic name; if `resourceType` is `GROUP`, this field indicates the group name
 * @method string getPrincipal() Obtain List of users, defaults to User:*, means any User is accessible in the entire region. the current User can only be the User in the list of users.
 * @method void setPrincipal(string $Principal) Set List of users, defaults to User:*, means any User is accessible in the entire region. the current User can only be the User in the list of users.
 * @method string getHost() Obtain Defaults to *, indicating any host is accessible in the entire region. currently, ckafka does not support * as the host, however, the following open-source kafka productization will directly support it.
 * @method void setHost(string $Host) Set Defaults to *, indicating any host is accessible in the entire region. currently, ckafka does not support * as the host, however, the following open-source kafka productization will directly support it.
 * @method integer getOperation() Obtain ACL operation mode. 0: UNKNOWN, 1: ANY, 2: ALL, 3: READ, 4: WRITE, 5: CREATE, 6: DELETE, 7: ALTER, 8: DESCRIBE, 9: CLUSTER_ACTION, 10: DESCRIBE_CONFIGS, 11: ALTER_CONFIGS, 12: IDEMPOTEN_WRITE
 * @method void setOperation(integer $Operation) Set ACL operation mode. 0: UNKNOWN, 1: ANY, 2: ALL, 3: READ, 4: WRITE, 5: CREATE, 6: DELETE, 7: ALTER, 8: DESCRIBE, 9: CLUSTER_ACTION, 10: DESCRIBE_CONFIGS, 11: ALTER_CONFIGS, 12: IDEMPOTEN_WRITE
 * @method integer getPermissionType() Obtain Permission type. 0: UNKNOWN, 1: ANY, 2: DENY, 3: ALLOW
 * @method void setPermissionType(integer $PermissionType) Set Permission type. 0: UNKNOWN, 1: ANY, 2: DENY, 3: ALLOW
 */
class Acl extends AbstractModel
{
    /**
     * @var integer ACL resource type. 0: UNKNOWN, 1: ANY, 2: TOPIC, 3: GROUP, 4: CLUSTER, 5: TRANSACTIONAL_ID. Currently, only `TOPIC` is available,
     */
    public $ResourceType;

    /**
     * @var string Resource name, which is related to `resourceType`. For example, if `resourceType` is `TOPIC`, this field indicates the topic name; if `resourceType` is `GROUP`, this field indicates the group name
     */
    public $ResourceName;

    /**
     * @var string List of users, defaults to User:*, means any User is accessible in the entire region. the current User can only be the User in the list of users.
     */
    public $Principal;

    /**
     * @var string Defaults to *, indicating any host is accessible in the entire region. currently, ckafka does not support * as the host, however, the following open-source kafka productization will directly support it.
     */
    public $Host;

    /**
     * @var integer ACL operation mode. 0: UNKNOWN, 1: ANY, 2: ALL, 3: READ, 4: WRITE, 5: CREATE, 6: DELETE, 7: ALTER, 8: DESCRIBE, 9: CLUSTER_ACTION, 10: DESCRIBE_CONFIGS, 11: ALTER_CONFIGS, 12: IDEMPOTEN_WRITE
     */
    public $Operation;

    /**
     * @var integer Permission type. 0: UNKNOWN, 1: ANY, 2: DENY, 3: ALLOW
     */
    public $PermissionType;

    /**
     * @param integer $ResourceType ACL resource type. 0: UNKNOWN, 1: ANY, 2: TOPIC, 3: GROUP, 4: CLUSTER, 5: TRANSACTIONAL_ID. Currently, only `TOPIC` is available,
     * @param string $ResourceName Resource name, which is related to `resourceType`. For example, if `resourceType` is `TOPIC`, this field indicates the topic name; if `resourceType` is `GROUP`, this field indicates the group name
     * @param string $Principal List of users, defaults to User:*, means any User is accessible in the entire region. the current User can only be the User in the list of users.
     * @param string $Host Defaults to *, indicating any host is accessible in the entire region. currently, ckafka does not support * as the host, however, the following open-source kafka productization will directly support it.
     * @param integer $Operation ACL operation mode. 0: UNKNOWN, 1: ANY, 2: ALL, 3: READ, 4: WRITE, 5: CREATE, 6: DELETE, 7: ALTER, 8: DESCRIBE, 9: CLUSTER_ACTION, 10: DESCRIBE_CONFIGS, 11: ALTER_CONFIGS, 12: IDEMPOTEN_WRITE
     * @param integer $PermissionType Permission type. 0: UNKNOWN, 1: ANY, 2: DENY, 3: ALLOW
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("Principal",$param) and $param["Principal"] !== null) {
            $this->Principal = $param["Principal"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("PermissionType",$param) and $param["PermissionType"] !== null) {
            $this->PermissionType = $param["PermissionType"];
        }
    }
}
