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
 * Account information
 *
 * @method string getDBInstanceId() Obtain Instance ID in the format of postgres-lnp6j617
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID in the format of postgres-lnp6j617
 * @method string getUserName() Obtain Account
 * @method void setUserName(string $UserName) Set Account
 * @method string getRemark() Obtain Specifies the account remark.
 * @method void setRemark(string $Remark) Set Specifies the account remark.
 * @method integer getStatus() Obtain Account status. valid values: 1-creating, 2-normal, 3-modifying, 4-resetting password, 5-locked, -1-deleting.
 * @method void setStatus(integer $Status) Set Account status. valid values: 1-creating, 2-normal, 3-modifying, 4-resetting password, 5-locked, -1-deleting.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getUpdateTime() Obtain Last update time of the account.
 * @method void setUpdateTime(string $UpdateTime) Set Last update time of the account.
 * @method string getPasswordUpdateTime() Obtain Specifies the last modified time of the account.

This field will only take effect after 2025-10-31. No matter whether the password is modified before, the value will be the default value: 0000-00-00 00:00:00
Indicates that this field is updated only when the password is modified via the cloud API or the console.
 * @method void setPasswordUpdateTime(string $PasswordUpdateTime) Set Specifies the last modified time of the account.

This field will only take effect after 2025-10-31. No matter whether the password is modified before, the value will be the default value: 0000-00-00 00:00:00
Indicates that this field is updated only when the password is modified via the cloud API or the console.
 * @method string getUserType() Obtain Account type. valid values: normal, tencentDBSuper. normal references a general user, tencentDBSuper possesses the pg_tencentdb_superuser user role.
 * @method void setUserType(string $UserType) Set Account type. valid values: normal, tencentDBSuper. normal references a general user, tencentDBSuper possesses the pg_tencentdb_superuser user role.
 * @method boolean getOpenCam() Obtain Specifies whether CAM verification is enabled for the user account.
 * @method void setOpenCam(boolean $OpenCam) Set Specifies whether CAM verification is enabled for the user account.
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
     * @var string Specifies the account remark.
     */
    public $Remark;

    /**
     * @var integer Account status. valid values: 1-creating, 2-normal, 3-modifying, 4-resetting password, 5-locked, -1-deleting.
     */
    public $Status;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Last update time of the account.
     */
    public $UpdateTime;

    /**
     * @var string Specifies the last modified time of the account.

This field will only take effect after 2025-10-31. No matter whether the password is modified before, the value will be the default value: 0000-00-00 00:00:00
Indicates that this field is updated only when the password is modified via the cloud API or the console.
     */
    public $PasswordUpdateTime;

    /**
     * @var string Account type. valid values: normal, tencentDBSuper. normal references a general user, tencentDBSuper possesses the pg_tencentdb_superuser user role.
     */
    public $UserType;

    /**
     * @var boolean Specifies whether CAM verification is enabled for the user account.
     */
    public $OpenCam;

    /**
     * @param string $DBInstanceId Instance ID in the format of postgres-lnp6j617
     * @param string $UserName Account
     * @param string $Remark Specifies the account remark.
     * @param integer $Status Account status. valid values: 1-creating, 2-normal, 3-modifying, 4-resetting password, 5-locked, -1-deleting.
     * @param string $CreateTime Creation time.
     * @param string $UpdateTime Last update time of the account.
     * @param string $PasswordUpdateTime Specifies the last modified time of the account.

This field will only take effect after 2025-10-31. No matter whether the password is modified before, the value will be the default value: 0000-00-00 00:00:00
Indicates that this field is updated only when the password is modified via the cloud API or the console.
     * @param string $UserType Account type. valid values: normal, tencentDBSuper. normal references a general user, tencentDBSuper possesses the pg_tencentdb_superuser user role.
     * @param boolean $OpenCam Specifies whether CAM verification is enabled for the user account.
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

        if (array_key_exists("PasswordUpdateTime",$param) and $param["PasswordUpdateTime"] !== null) {
            $this->PasswordUpdateTime = $param["PasswordUpdateTime"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("OpenCam",$param) and $param["OpenCam"] !== null) {
            $this->OpenCam = $param["OpenCam"];
        }
    }
}
