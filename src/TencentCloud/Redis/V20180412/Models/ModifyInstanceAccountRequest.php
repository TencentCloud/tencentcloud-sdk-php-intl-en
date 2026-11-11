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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceAccount request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID. Log in to the <a href="https://console.cloud.tencent.com/redis/instance/list">Redis console</a> and copy the instance ID from the instance list.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID. Log in to the <a href="https://console.cloud.tencent.com/redis/instance/list">Redis console</a> and copy the instance ID from the instance list.</p>
 * @method string getAccountName() Obtain <p>Specify the account that needs modification.</p><ul><li>root: refers to the automatically generated account when a Redis Database Instance is created. Users cannot modify its read-write permissions, but can only modify its request routing strategy.</li><li>Custom account: an account manually created by users once an instance is created successfully. Users can modify its read and write permissions and request routing strategy at any time.</li></ul>
 * @method void setAccountName(string $AccountName) Set <p>Specify the account that needs modification.</p><ul><li>root: refers to the automatically generated account when a Redis Database Instance is created. Users cannot modify its read-write permissions, but can only modify its request routing strategy.</li><li>Custom account: an account manually created by users once an instance is created successfully. Users can modify its read and write permissions and request routing strategy at any time.</li></ul>
 * @method string getAccountPassword() Obtain <p>Specifies the access password for the account to be modified.</p>
 * @method void setAccountPassword(string $AccountPassword) Set <p>Specifies the access password for the account to be modified.</p>
 * @method string getRemark() Obtain <p>Account description.</p>
 * @method void setRemark(string $Remark) Set <p>Account description.</p>
 * @method array getReadonlyPolicy() Obtain <p>Specify the policy for request routing of read-write requests for the modified account.</p><ul><li>master: means read-write requests are routed to the primary node.</li><li>replication: means read-write requests are routed to the secondary node.</li></ul>
 * @method void setReadonlyPolicy(array $ReadonlyPolicy) Set <p>Specify the policy for request routing of read-write requests for the modified account.</p><ul><li>master: means read-write requests are routed to the primary node.</li><li>replication: means read-write requests are routed to the secondary node.</li></ul>
 * @method string getPrivilege() Obtain <p>Specify the read/write permission of the account to be modified.</p><ul><li>r: Read-only.</li><li>w: Write-only.</li><li>rw: Read-write.</li></ul>
 * @method void setPrivilege(string $Privilege) Set <p>Specify the read/write permission of the account to be modified.</p><ul><li>r: Read-only.</li><li>w: Write-only.</li><li>rw: Read-write.</li></ul>
 * @method boolean getNoAuth() Obtain <p>Specifies whether to set the default account (root) to a password-free account. Custom accounts do not support password-free access.</p><ul><li>true: The default account (root) is set to a password-free account.</li><li>false: The default account (root) is not set to a password-free account.</li></ul>
 * @method void setNoAuth(boolean $NoAuth) Set <p>Specifies whether to set the default account (root) to a password-free account. Custom accounts do not support password-free access.</p><ul><li>true: The default account (root) is set to a password-free account.</li><li>false: The default account (root) is not set to a password-free account.</li></ul>
 * @method boolean getEncryptPassword() Obtain <p>Whether to enable password encryption for transmission.</p><ul><li>true: Encrypted.</li><li>false: Not encrypted (default value).</li></ul>
 * @method void setEncryptPassword(boolean $EncryptPassword) Set <p>Whether to enable password encryption for transmission.</p><ul><li>true: Encrypted.</li><li>false: Not encrypted (default value).</li></ul>
 * @method array getDisableCommands() Obtain <p>Disabled command configuration at the account level.</p><ul><li>Default value: [] (empty array, meaning no commands are disabled)</li><li>Input parameter limitation: Only the following specified database commands can be configured (multiple selections are supported)<br>flushall, flushdb, keys, hgetall, eval, evalsha, script, scan, psetex, set, hmset, hset, lpush, rpush, sadd, zadd, del, mget, mset, bitop, exists, msetnx, blpop, brpop, rpoplpush, brpoplpush, smove, sunion, sinter, sdiff, sunionstore, sinterstore, sdiffstore, zunionstore, zinterstore, pfmerge, pfcount, pfadd.</li></ul><p>Default value: ""</p>
 * @method void setDisableCommands(array $DisableCommands) Set <p>Disabled command configuration at the account level.</p><ul><li>Default value: [] (empty array, meaning no commands are disabled)</li><li>Input parameter limitation: Only the following specified database commands can be configured (multiple selections are supported)<br>flushall, flushdb, keys, hgetall, eval, evalsha, script, scan, psetex, set, hmset, hset, lpush, rpush, sadd, zadd, del, mget, mset, bitop, exists, msetnx, blpop, brpop, rpoplpush, brpoplpush, smove, sunion, sinter, sdiff, sunionstore, sinterstore, sdiffstore, zunionstore, zinterstore, pfmerge, pfcount, pfadd.</li></ul><p>Default value: ""</p>
 * @method boolean getModifyDisableCommands() Obtain <p>Whether to modify the command disablement configuration at the account level. Pass in only when the command list needs to be updated.</p><ul><li>true: Modify (an overwrite update will be performed based on the new command list passed in).</li><li>false: Do not modify (default value).</li></ul>
 * @method void setModifyDisableCommands(boolean $ModifyDisableCommands) Set <p>Whether to modify the command disablement configuration at the account level. Pass in only when the command list needs to be updated.</p><ul><li>true: Modify (an overwrite update will be performed based on the new command list passed in).</li><li>false: Do not modify (default value).</li></ul>
 */
class ModifyInstanceAccountRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID. Log in to the <a href="https://console.cloud.tencent.com/redis/instance/list">Redis console</a> and copy the instance ID from the instance list.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Specify the account that needs modification.</p><ul><li>root: refers to the automatically generated account when a Redis Database Instance is created. Users cannot modify its read-write permissions, but can only modify its request routing strategy.</li><li>Custom account: an account manually created by users once an instance is created successfully. Users can modify its read and write permissions and request routing strategy at any time.</li></ul>
     */
    public $AccountName;

    /**
     * @var string <p>Specifies the access password for the account to be modified.</p>
     */
    public $AccountPassword;

    /**
     * @var string <p>Account description.</p>
     */
    public $Remark;

    /**
     * @var array <p>Specify the policy for request routing of read-write requests for the modified account.</p><ul><li>master: means read-write requests are routed to the primary node.</li><li>replication: means read-write requests are routed to the secondary node.</li></ul>
     */
    public $ReadonlyPolicy;

    /**
     * @var string <p>Specify the read/write permission of the account to be modified.</p><ul><li>r: Read-only.</li><li>w: Write-only.</li><li>rw: Read-write.</li></ul>
     */
    public $Privilege;

    /**
     * @var boolean <p>Specifies whether to set the default account (root) to a password-free account. Custom accounts do not support password-free access.</p><ul><li>true: The default account (root) is set to a password-free account.</li><li>false: The default account (root) is not set to a password-free account.</li></ul>
     */
    public $NoAuth;

    /**
     * @var boolean <p>Whether to enable password encryption for transmission.</p><ul><li>true: Encrypted.</li><li>false: Not encrypted (default value).</li></ul>
     */
    public $EncryptPassword;

    /**
     * @var array <p>Disabled command configuration at the account level.</p><ul><li>Default value: [] (empty array, meaning no commands are disabled)</li><li>Input parameter limitation: Only the following specified database commands can be configured (multiple selections are supported)<br>flushall, flushdb, keys, hgetall, eval, evalsha, script, scan, psetex, set, hmset, hset, lpush, rpush, sadd, zadd, del, mget, mset, bitop, exists, msetnx, blpop, brpop, rpoplpush, brpoplpush, smove, sunion, sinter, sdiff, sunionstore, sinterstore, sdiffstore, zunionstore, zinterstore, pfmerge, pfcount, pfadd.</li></ul><p>Default value: ""</p>
     */
    public $DisableCommands;

    /**
     * @var boolean <p>Whether to modify the command disablement configuration at the account level. Pass in only when the command list needs to be updated.</p><ul><li>true: Modify (an overwrite update will be performed based on the new command list passed in).</li><li>false: Do not modify (default value).</li></ul>
     */
    public $ModifyDisableCommands;

    /**
     * @param string $InstanceId <p>Instance ID. Log in to the <a href="https://console.cloud.tencent.com/redis/instance/list">Redis console</a> and copy the instance ID from the instance list.</p>
     * @param string $AccountName <p>Specify the account that needs modification.</p><ul><li>root: refers to the automatically generated account when a Redis Database Instance is created. Users cannot modify its read-write permissions, but can only modify its request routing strategy.</li><li>Custom account: an account manually created by users once an instance is created successfully. Users can modify its read and write permissions and request routing strategy at any time.</li></ul>
     * @param string $AccountPassword <p>Specifies the access password for the account to be modified.</p>
     * @param string $Remark <p>Account description.</p>
     * @param array $ReadonlyPolicy <p>Specify the policy for request routing of read-write requests for the modified account.</p><ul><li>master: means read-write requests are routed to the primary node.</li><li>replication: means read-write requests are routed to the secondary node.</li></ul>
     * @param string $Privilege <p>Specify the read/write permission of the account to be modified.</p><ul><li>r: Read-only.</li><li>w: Write-only.</li><li>rw: Read-write.</li></ul>
     * @param boolean $NoAuth <p>Specifies whether to set the default account (root) to a password-free account. Custom accounts do not support password-free access.</p><ul><li>true: The default account (root) is set to a password-free account.</li><li>false: The default account (root) is not set to a password-free account.</li></ul>
     * @param boolean $EncryptPassword <p>Whether to enable password encryption for transmission.</p><ul><li>true: Encrypted.</li><li>false: Not encrypted (default value).</li></ul>
     * @param array $DisableCommands <p>Disabled command configuration at the account level.</p><ul><li>Default value: [] (empty array, meaning no commands are disabled)</li><li>Input parameter limitation: Only the following specified database commands can be configured (multiple selections are supported)<br>flushall, flushdb, keys, hgetall, eval, evalsha, script, scan, psetex, set, hmset, hset, lpush, rpush, sadd, zadd, del, mget, mset, bitop, exists, msetnx, blpop, brpop, rpoplpush, brpoplpush, smove, sunion, sinter, sdiff, sunionstore, sinterstore, sdiffstore, zunionstore, zinterstore, pfmerge, pfcount, pfadd.</li></ul><p>Default value: ""</p>
     * @param boolean $ModifyDisableCommands <p>Whether to modify the command disablement configuration at the account level. Pass in only when the command list needs to be updated.</p><ul><li>true: Modify (an overwrite update will be performed based on the new command list passed in).</li><li>false: Do not modify (default value).</li></ul>
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ReadonlyPolicy",$param) and $param["ReadonlyPolicy"] !== null) {
            $this->ReadonlyPolicy = $param["ReadonlyPolicy"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = $param["Privilege"];
        }

        if (array_key_exists("NoAuth",$param) and $param["NoAuth"] !== null) {
            $this->NoAuth = $param["NoAuth"];
        }

        if (array_key_exists("EncryptPassword",$param) and $param["EncryptPassword"] !== null) {
            $this->EncryptPassword = $param["EncryptPassword"];
        }

        if (array_key_exists("DisableCommands",$param) and $param["DisableCommands"] !== null) {
            $this->DisableCommands = $param["DisableCommands"];
        }

        if (array_key_exists("ModifyDisableCommands",$param) and $param["ModifyDisableCommands"] !== null) {
            $this->ModifyDisableCommands = $param["ModifyDisableCommands"];
        }
    }
}
