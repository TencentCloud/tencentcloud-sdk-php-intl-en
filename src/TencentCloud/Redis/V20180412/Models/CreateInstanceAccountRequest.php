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
 * CreateInstanceAccount request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
 * @method string getAccountName() Obtain <p>Custom account name for accessing the database.</p><ul><li>Consist of letters, digits, underscores, and hyphens only.</li><li>Length cannot be greater than 32.</li></ul>
 * @method void setAccountName(string $AccountName) Set <p>Custom account name for accessing the database.</p><ul><li>Consist of letters, digits, underscores, and hyphens only.</li><li>Length cannot be greater than 32.</li></ul>
 * @method string getAccountPassword() Obtain <p>Set a password for the customized account. The password complexity requirements are as follows:</p><ul><li>Character count: [8,64].</li><li>Contain at least two kinds of lowercase letters, uppercase letters, digits and characters ()`~!@#$%^&amp;*-+=_|{}[]:;&lt;&gt;,.?/.</li><li>Cannot start with "/".</li></ul>
 * @method void setAccountPassword(string $AccountPassword) Set <p>Set a password for the customized account. The password complexity requirements are as follows:</p><ul><li>Character count: [8,64].</li><li>Contain at least two kinds of lowercase letters, uppercase letters, digits and characters ()`~!@#$%^&amp;*-+=_|{}[]:;&lt;&gt;,.?/.</li><li>Cannot start with "/".</li></ul>
 * @method array getReadonlyPolicy() Obtain <p>Read requests for the designated account are routed to the primary node or replica node. Read-only replica is not enabled, and selection of replica nodes is not supported.</p><ul><li>master: primary node</li><li>replication: replica node</li></ul>
 * @method void setReadonlyPolicy(array $ReadonlyPolicy) Set <p>Read requests for the designated account are routed to the primary node or replica node. Read-only replica is not enabled, and selection of replica nodes is not supported.</p><ul><li>master: primary node</li><li>replication: replica node</li></ul>
 * @method string getPrivilege() Obtain <p>Account read/write permission supports selecting read-only or read-write permission.</p><ul><li>r: Read-only.</li><li>rw: Read-write.</li></ul>
 * @method void setPrivilege(string $Privilege) Set <p>Account read/write permission supports selecting read-only or read-write permission.</p><ul><li>r: Read-only.</li><li>rw: Read-write.</li></ul>
 * @method string getRemark() Obtain <p>Description information about account remarks, with a length of [0, 64] bytes.</p>
 * @method void setRemark(string $Remark) Set <p>Description information about account remarks, with a length of [0, 64] bytes.</p>
 * @method boolean getEncryptPassword() Obtain <p>Whether to enable password encryption for transmission.</p><ul><li>true: Encrypted.</li><li>false: Not encrypted (default value).</li></ul>
 * @method void setEncryptPassword(boolean $EncryptPassword) Set <p>Whether to enable password encryption for transmission.</p><ul><li>true: Encrypted.</li><li>false: Not encrypted (default value).</li></ul>
 */
class CreateInstanceAccountRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Custom account name for accessing the database.</p><ul><li>Consist of letters, digits, underscores, and hyphens only.</li><li>Length cannot be greater than 32.</li></ul>
     */
    public $AccountName;

    /**
     * @var string <p>Set a password for the customized account. The password complexity requirements are as follows:</p><ul><li>Character count: [8,64].</li><li>Contain at least two kinds of lowercase letters, uppercase letters, digits and characters ()`~!@#$%^&amp;*-+=_|{}[]:;&lt;&gt;,.?/.</li><li>Cannot start with "/".</li></ul>
     */
    public $AccountPassword;

    /**
     * @var array <p>Read requests for the designated account are routed to the primary node or replica node. Read-only replica is not enabled, and selection of replica nodes is not supported.</p><ul><li>master: primary node</li><li>replication: replica node</li></ul>
     */
    public $ReadonlyPolicy;

    /**
     * @var string <p>Account read/write permission supports selecting read-only or read-write permission.</p><ul><li>r: Read-only.</li><li>rw: Read-write.</li></ul>
     */
    public $Privilege;

    /**
     * @var string <p>Description information about account remarks, with a length of [0, 64] bytes.</p>
     */
    public $Remark;

    /**
     * @var boolean <p>Whether to enable password encryption for transmission.</p><ul><li>true: Encrypted.</li><li>false: Not encrypted (default value).</li></ul>
     */
    public $EncryptPassword;

    /**
     * @param string $InstanceId <p>Instance ID. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
     * @param string $AccountName <p>Custom account name for accessing the database.</p><ul><li>Consist of letters, digits, underscores, and hyphens only.</li><li>Length cannot be greater than 32.</li></ul>
     * @param string $AccountPassword <p>Set a password for the customized account. The password complexity requirements are as follows:</p><ul><li>Character count: [8,64].</li><li>Contain at least two kinds of lowercase letters, uppercase letters, digits and characters ()`~!@#$%^&amp;*-+=_|{}[]:;&lt;&gt;,.?/.</li><li>Cannot start with "/".</li></ul>
     * @param array $ReadonlyPolicy <p>Read requests for the designated account are routed to the primary node or replica node. Read-only replica is not enabled, and selection of replica nodes is not supported.</p><ul><li>master: primary node</li><li>replication: replica node</li></ul>
     * @param string $Privilege <p>Account read/write permission supports selecting read-only or read-write permission.</p><ul><li>r: Read-only.</li><li>rw: Read-write.</li></ul>
     * @param string $Remark <p>Description information about account remarks, with a length of [0, 64] bytes.</p>
     * @param boolean $EncryptPassword <p>Whether to enable password encryption for transmission.</p><ul><li>true: Encrypted.</li><li>false: Not encrypted (default value).</li></ul>
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

        if (array_key_exists("EncryptPassword",$param) and $param["EncryptPassword"] !== null) {
            $this->EncryptPassword = $param["EncryptPassword"];
        }
    }
}
