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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAccountRemark request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID in the format of postgres-4wdeb0zv
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID in the format of postgres-4wdeb0zv
 * @method string getUserName() Obtain Instance username
 * @method void setUserName(string $UserName) Set Instance username
 * @method string getRemark() Obtain New remarks corresponding to user `UserName`
 * @method void setRemark(string $Remark) Set New remarks corresponding to user `UserName`
 */
class ModifyAccountRemarkRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of postgres-4wdeb0zv
     */
    public $DBInstanceId;

    /**
     * @var string Instance username
     */
    public $UserName;

    /**
     * @var string New remarks corresponding to user `UserName`
     */
    public $Remark;

    /**
     * @param string $DBInstanceId Instance ID in the format of postgres-4wdeb0zv
     * @param string $UserName Instance username
     * @param string $Remark New remarks corresponding to user `UserName`
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
    }
}
