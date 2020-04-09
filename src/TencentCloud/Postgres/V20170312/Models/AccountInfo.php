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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Account information
 *
 * @method string getDBInstanceId() Obtain Instance ID in the format of postgres-lnp6j617
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID in the format of postgres-lnp6j617
 * @method string getUserName() Obtain Account
 * @method void setUserName(string $UserName) Set Account
 * @method string getRemark() Obtain Account remarks
 * @method void setRemark(string $Remark) Set Account remarks
 * @method integer getStatus() Obtain Account status. 1: creating, 2: normal, 3: modifying, 4: resetting password, -1: deleting
 * @method void setStatus(integer $Status) Set Account status. 1: creating, 2: normal, 3: modifying, 4: resetting password, -1: deleting
 * @method string getCreateTime() Obtain Account creation time
 * @method void setCreateTime(string $CreateTime) Set Account creation time
 * @method string getUpdateTime() Obtain Account last modified time
 * @method void setUpdateTime(string $UpdateTime) Set Account last modified time
 */
class AccountInfo extends AbstractModel
{
    /**
     * @var string Instance ID in the format of postgres-lnp6j617
     */
    public $DBInstanceId;

    /**
     * @var string Account
     */
    public $UserName;

    /**
     * @var string Account remarks
     */
    public $Remark;

    /**
     * @var integer Account status. 1: creating, 2: normal, 3: modifying, 4: resetting password, -1: deleting
     */
    public $Status;

    /**
     * @var string Account creation time
     */
    public $CreateTime;

    /**
     * @var string Account last modified time
     */
    public $UpdateTime;

    /**
     * @param string $DBInstanceId Instance ID in the format of postgres-lnp6j617
     * @param string $UserName Account
     * @param string $Remark Account remarks
     * @param integer $Status Account status. 1: creating, 2: normal, 3: modifying, 4: resetting password, -1: deleting
     * @param string $CreateTime Account creation time
     * @param string $UpdateTime Account last modified time
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
