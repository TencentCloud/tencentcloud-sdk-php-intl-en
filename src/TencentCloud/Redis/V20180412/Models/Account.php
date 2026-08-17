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
 * Sub-account information
 *
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getAccountName() Obtain <p>Account name.</p>
 * @method void setAccountName(string $AccountName) Set <p>Account name.</p>
 * @method string getRemark() Obtain <p>Account description.</p>
 * @method void setRemark(string $Remark) Set <p>Account description.</p>
 * @method string getPrivilege() Obtain <p>Read/write permission policy. - r: read-only. - w: write-only. - rw: read-write.</p>
 * @method void setPrivilege(string $Privilege) Set <p>Read/write permission policy. - r: read-only. - w: write-only. - rw: read-write.</p>
 * @method array getReadonlyPolicy() Obtain <p>Read-only Routing Policy. - master: Master node. - replication: Replica node.</p>
 * @method void setReadonlyPolicy(array $ReadonlyPolicy) Set <p>Read-only Routing Policy. - master: Master node. - replication: Replica node.</p>
 * @method integer getStatus() Obtain <p>Sub-account status. - 1: Account change in progress. - 2: Valid. - 4: Deleted.</p>
 * @method void setStatus(integer $Status) Set <p>Sub-account status. - 1: Account change in progress. - 2: Valid. - 4: Deleted.</p>
 * @method string getCreateTime() Obtain <p>Account creation time.</p><p>If the parameter is an empty string, the account was created in an earlier version where the recording feature was not supported.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Account creation time.</p><p>If the parameter is an empty string, the account was created in an earlier version where the recording feature was not supported.</p>
 * @method string getPasswordLastModifiedTime() Obtain <p>The time when the account last changed the password.</p><p>If the parameter is an empty string, it means the account was created in an earlier version that did not support the password modification time recording feature.</p>
 * @method void setPasswordLastModifiedTime(string $PasswordLastModifiedTime) Set <p>The time when the account last changed the password.</p><p>If the parameter is an empty string, it means the account was created in an earlier version that did not support the password modification time recording feature.</p>
 */
class Account extends AbstractModel
{
    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Account name.</p>
     */
    public $AccountName;

    /**
     * @var string <p>Account description.</p>
     */
    public $Remark;

    /**
     * @var string <p>Read/write permission policy. - r: read-only. - w: write-only. - rw: read-write.</p>
     */
    public $Privilege;

    /**
     * @var array <p>Read-only Routing Policy. - master: Master node. - replication: Replica node.</p>
     */
    public $ReadonlyPolicy;

    /**
     * @var integer <p>Sub-account status. - 1: Account change in progress. - 2: Valid. - 4: Deleted.</p>
     */
    public $Status;

    /**
     * @var string <p>Account creation time.</p><p>If the parameter is an empty string, the account was created in an earlier version where the recording feature was not supported.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>The time when the account last changed the password.</p><p>If the parameter is an empty string, it means the account was created in an earlier version that did not support the password modification time recording feature.</p>
     */
    public $PasswordLastModifiedTime;

    /**
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $AccountName <p>Account name.</p>
     * @param string $Remark <p>Account description.</p>
     * @param string $Privilege <p>Read/write permission policy. - r: read-only. - w: write-only. - rw: read-write.</p>
     * @param array $ReadonlyPolicy <p>Read-only Routing Policy. - master: Master node. - replication: Replica node.</p>
     * @param integer $Status <p>Sub-account status. - 1: Account change in progress. - 2: Valid. - 4: Deleted.</p>
     * @param string $CreateTime <p>Account creation time.</p><p>If the parameter is an empty string, the account was created in an earlier version where the recording feature was not supported.</p>
     * @param string $PasswordLastModifiedTime <p>The time when the account last changed the password.</p><p>If the parameter is an empty string, it means the account was created in an earlier version that did not support the password modification time recording feature.</p>
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = $param["Privilege"];
        }

        if (array_key_exists("ReadonlyPolicy",$param) and $param["ReadonlyPolicy"] !== null) {
            $this->ReadonlyPolicy = $param["ReadonlyPolicy"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("PasswordLastModifiedTime",$param) and $param["PasswordLastModifiedTime"] !== null) {
            $this->PasswordLastModifiedTime = $param["PasswordLastModifiedTime"];
        }
    }
}
