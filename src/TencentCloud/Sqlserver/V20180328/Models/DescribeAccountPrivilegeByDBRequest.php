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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccountPrivilegeByDB request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, in the format of mssql-njj2mtpl7.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, in the format of mssql-njj2mtpl7.
 * @method string getDBName() Obtain Database name.
 * @method void setDBName(string $DBName) Set Database name.
 * @method string getAccountName() Obtain Database account name.
 * @method void setAccountName(string $AccountName) Set Database account name.
 * @method integer getLimit() Obtain The number of returned entries per page in pagination mode. Value range: 1-100. The default value is 20.
 * @method void setLimit(integer $Limit) Set The number of returned entries per page in pagination mode. Value range: 1-100. The default value is 20.
 * @method integer getOffset() Obtain Page number in pagination mode. The default value is 0.
 * @method void setOffset(integer $Offset) Set Page number in pagination mode. The default value is 0.
 */
class DescribeAccountPrivilegeByDBRequest extends AbstractModel
{
    /**
     * @var string Instance ID, in the format of mssql-njj2mtpl7.
     */
    public $InstanceId;

    /**
     * @var string Database name.
     */
    public $DBName;

    /**
     * @var string Database account name.
     */
    public $AccountName;

    /**
     * @var integer The number of returned entries per page in pagination mode. Value range: 1-100. The default value is 20.
     */
    public $Limit;

    /**
     * @var integer Page number in pagination mode. The default value is 0.
     */
    public $Offset;

    /**
     * @param string $InstanceId Instance ID, in the format of mssql-njj2mtpl7.
     * @param string $DBName Database name.
     * @param string $AccountName Database account name.
     * @param integer $Limit The number of returned entries per page in pagination mode. Value range: 1-100. The default value is 20.
     * @param integer $Offset Page number in pagination mode. The default value is 0.
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

        if (array_key_exists("DBName",$param) and $param["DBName"] !== null) {
            $this->DBName = $param["DBName"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
