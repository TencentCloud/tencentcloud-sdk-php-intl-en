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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SQL information of external tables
 *
 * @method integer getDataSource() Obtain Data source type 1: MySql; 2: Self-built MySql; 3: PostgreSQL
 * @method void setDataSource(integer $DataSource) Set Data source type 1: MySql; 2: Self-built MySql; 3: PostgreSQL
 * @method string getRegion() Obtain Region of the InstanceId. For example: ap-guangzhou
 * @method void setRegion(string $Region) Set Region of the InstanceId. For example: ap-guangzhou
 * @method string getInstanceId() Obtain Instance ID.
-When DataSource is 1, it means the id of a cloud database Mysql Instance, such as cdb-zxcvbnm.

 * @method void setInstanceId(string $InstanceId) Set Instance ID.
-When DataSource is 1, it means the id of a cloud database Mysql Instance, such as cdb-zxcvbnm.

 * @method string getUser() Obtain mysql access username
 * @method void setUser(string $User) Set mysql access username
 * @method string getAliasName() Obtain Alias. For use in data processing statement.
 * @method void setAliasName(string $AliasName) Set Alias. For use in data processing statement.
 * @method string getPassword() Obtain mysql access password.
 * @method void setPassword(string $Password) Set mysql access password.
 */
class DataTransformSqlDataSource extends AbstractModel
{
    /**
     * @var integer Data source type 1: MySql; 2: Self-built MySql; 3: PostgreSQL
     */
    public $DataSource;

    /**
     * @var string Region of the InstanceId. For example: ap-guangzhou
     */
    public $Region;

    /**
     * @var string Instance ID.
-When DataSource is 1, it means the id of a cloud database Mysql Instance, such as cdb-zxcvbnm.

     */
    public $InstanceId;

    /**
     * @var string mysql access username
     */
    public $User;

    /**
     * @var string Alias. For use in data processing statement.
     */
    public $AliasName;

    /**
     * @var string mysql access password.
     */
    public $Password;

    /**
     * @param integer $DataSource Data source type 1: MySql; 2: Self-built MySql; 3: PostgreSQL
     * @param string $Region Region of the InstanceId. For example: ap-guangzhou
     * @param string $InstanceId Instance ID.
-When DataSource is 1, it means the id of a cloud database Mysql Instance, such as cdb-zxcvbnm.

     * @param string $User mysql access username
     * @param string $AliasName Alias. For use in data processing statement.
     * @param string $Password mysql access password.
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
        if (array_key_exists("DataSource",$param) and $param["DataSource"] !== null) {
            $this->DataSource = $param["DataSource"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
