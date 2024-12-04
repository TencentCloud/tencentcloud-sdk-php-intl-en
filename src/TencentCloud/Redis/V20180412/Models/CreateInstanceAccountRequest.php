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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstanceAccount request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method string getAccountName() Obtain Custom account name for accessing the database.
- It contains only letters, digits, underscores (_), and hyphens (-).
- The length cannot exceed 32 characters.
 * @method void setAccountName(string $AccountName) Set Custom account name for accessing the database.
- It contains only letters, digits, underscores (_), and hyphens (-).
- The length cannot exceed 32 characters.
 * @method string getAccountPassword() Obtain Password of the custom account. The password complexity requirements are as follows:
- It can contain 8 to 64 characters.
- It should contain at least two of the following types: lowercase letters, uppercase letters, digits, and special characters (such as ()`~!@#$%^&*-+=_|{}[]:;<>,.?/).
- It cannot start with a forward slash (/).

 * @method void setAccountPassword(string $AccountPassword) Set Password of the custom account. The password complexity requirements are as follows:
- It can contain 8 to 64 characters.
- It should contain at least two of the following types: lowercase letters, uppercase letters, digits, and special characters (such as ()`~!@#$%^&*-+=_|{}[]:;<>,.?/).
- It cannot start with a forward slash (/).

 * @method array getReadonlyPolicy() Obtain The read requests for the designated account are routed to either the master node or replica nodes. If the Read-Only Replica is not enabled, the selection of replica nodes is not supported.
- master: Master node.- replication: Replica node.
 * @method void setReadonlyPolicy(array $ReadonlyPolicy) Set The read requests for the designated account are routed to either the master node or replica nodes. If the Read-Only Replica is not enabled, the selection of replica nodes is not supported.
- master: Master node.- replication: Replica node.
 * @method string getPrivilege() Obtain The read/write permission of the account supports the selection of read-only and read/write permissions.
- r: read-only
- rw: Read/Write permission.
 * @method void setPrivilege(string $Privilege) Set The read/write permission of the account supports the selection of read-only and read/write permissions.
- r: read-only
- rw: Read/Write permission.
 * @method string getRemark() Obtain Sub-account description information, with a length of [0, 64] bytes, supports Chinese characters.
 * @method void setRemark(string $Remark) Set Sub-account description information, with a length of [0, 64] bytes, supports Chinese characters.
 */
class CreateInstanceAccountRequest extends AbstractModel
{
    /**
     * @var string Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     */
    public $InstanceId;

    /**
     * @var string Custom account name for accessing the database.
- It contains only letters, digits, underscores (_), and hyphens (-).
- The length cannot exceed 32 characters.
     */
    public $AccountName;

    /**
     * @var string Password of the custom account. The password complexity requirements are as follows:
- It can contain 8 to 64 characters.
- It should contain at least two of the following types: lowercase letters, uppercase letters, digits, and special characters (such as ()`~!@#$%^&*-+=_|{}[]:;<>,.?/).
- It cannot start with a forward slash (/).

     */
    public $AccountPassword;

    /**
     * @var array The read requests for the designated account are routed to either the master node or replica nodes. If the Read-Only Replica is not enabled, the selection of replica nodes is not supported.
- master: Master node.- replication: Replica node.
     */
    public $ReadonlyPolicy;

    /**
     * @var string The read/write permission of the account supports the selection of read-only and read/write permissions.
- r: read-only
- rw: Read/Write permission.
     */
    public $Privilege;

    /**
     * @var string Sub-account description information, with a length of [0, 64] bytes, supports Chinese characters.
     */
    public $Remark;

    /**
     * @param string $InstanceId Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     * @param string $AccountName Custom account name for accessing the database.
- It contains only letters, digits, underscores (_), and hyphens (-).
- The length cannot exceed 32 characters.
     * @param string $AccountPassword Password of the custom account. The password complexity requirements are as follows:
- It can contain 8 to 64 characters.
- It should contain at least two of the following types: lowercase letters, uppercase letters, digits, and special characters (such as ()`~!@#$%^&*-+=_|{}[]:;<>,.?/).
- It cannot start with a forward slash (/).

     * @param array $ReadonlyPolicy The read requests for the designated account are routed to either the master node or replica nodes. If the Read-Only Replica is not enabled, the selection of replica nodes is not supported.
- master: Master node.- replication: Replica node.
     * @param string $Privilege The read/write permission of the account supports the selection of read-only and read/write permissions.
- r: read-only
- rw: Read/Write permission.
     * @param string $Remark Sub-account description information, with a length of [0, 64] bytes, supports Chinese characters.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("AccountPassword",$param) and $param["AccountPassword"] !== null) {
            $this->AccountPassword = $param["AccountPassword"];
        }

        if (array_key_exists("ReadonlyPolicy",$param) and $param["ReadonlyPolicy"] !== null) {
            $this->ReadonlyPolicy = $param["ReadonlyPolicy"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = $param["Privilege"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
