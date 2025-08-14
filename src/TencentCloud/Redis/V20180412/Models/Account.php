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
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getAccountName() Obtain Account name.
 * @method void setAccountName(string $AccountName) Set Account name.
 * @method string getRemark() Obtain Account description.
 * @method void setRemark(string $Remark) Set Account description.
 * @method string getPrivilege() Obtain Read/Write permission policy.
- r: read-only.

 - w: write-only.
- rw: read/write.
 * @method void setPrivilege(string $Privilege) Set Read/Write permission policy.
- r: read-only.

 - w: write-only.
- rw: read/write.
 * @method array getReadonlyPolicy() Obtain Read-only routing policy.
 - master: primary node.
 - replication: replica node.
 * @method void setReadonlyPolicy(array $ReadonlyPolicy) Set Read-only routing policy.
 - master: primary node.
 - replication: replica node.
 * @method integer getStatus() Obtain Sub-account status.
 - 1: account under modification.
 - 2: valid account.
 - 4: account deleted.
 * @method void setStatus(integer $Status) Set Sub-account status.
 - 1: account under modification.
 - 2: valid account.
 - 4: account deleted.
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 */
class Account extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Account name.
     */
    public $AccountName;

    /**
     * @var string Account description.
     */
    public $Remark;

    /**
     * @var string Read/Write permission policy.
- r: read-only.

 - w: write-only.
- rw: read/write.
     */
    public $Privilege;

    /**
     * @var array Read-only routing policy.
 - master: primary node.
 - replication: replica node.
     */
    public $ReadonlyPolicy;

    /**
     * @var integer Sub-account status.
 - 1: account under modification.
 - 2: valid account.
 - 4: account deleted.
     */
    public $Status;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $AccountName Account name.
     * @param string $Remark Account description.
     * @param string $Privilege Read/Write permission policy.
- r: read-only.

 - w: write-only.
- rw: read/write.
     * @param array $ReadonlyPolicy Read-only routing policy.
 - master: primary node.
 - replication: replica node.
     * @param integer $Status Sub-account status.
 - 1: account under modification.
 - 2: valid account.
 - 4: account deleted.
     * @param string $CreateTime Creation time
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
    }
}
