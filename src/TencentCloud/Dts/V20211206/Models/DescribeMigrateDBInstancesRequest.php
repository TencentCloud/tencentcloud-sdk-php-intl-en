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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMigrateDBInstances request structure.
 *
 * @method string getDatabaseType() Obtain Database type, such as `mysql`.
 * @method void setDatabaseType(string $DatabaseType) Set Database type, such as `mysql`.
 * @method string getMigrateRole() Obtain Specifies whether the instance is the migration source or target. Valid values: `src` (source); `dts` (target).
 * @method void setMigrateRole(string $MigrateRole) Set Specifies whether the instance is the migration source or target. Valid values: `src` (source); `dts` (target).
 * @method string getInstanceId() Obtain Database instance ID
 * @method void setInstanceId(string $InstanceId) Set Database instance ID
 * @method string getInstanceName() Obtain Database instance name
 * @method void setInstanceName(string $InstanceName) Set Database instance name
 * @method integer getLimit() Obtain Number of results to be returned
 * @method void setLimit(integer $Limit) Set Number of results to be returned
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method string getAccountMode() Obtain The account to which the resource belongs. Valid values: empty or `self` (the current account); `other` (another account).
 * @method void setAccountMode(string $AccountMode) Set The account to which the resource belongs. Valid values: empty or `self` (the current account); `other` (another account).
 * @method string getTmpSecretId() Obtain ID of the temporary key, which is required if the operation is performed across accounts.
 * @method void setTmpSecretId(string $TmpSecretId) Set ID of the temporary key, which is required if the operation is performed across accounts.
 * @method string getTmpSecretKey() Obtain Key of the temporary key, which is required if the operation is performed across accounts.
 * @method void setTmpSecretKey(string $TmpSecretKey) Set Key of the temporary key, which is required if the operation is performed across accounts.
 * @method string getTmpToken() Obtain Temporary token, which is required if the operation is performed across accounts.
 * @method void setTmpToken(string $TmpToken) Set Temporary token, which is required if the operation is performed across accounts.
 */
class DescribeMigrateDBInstancesRequest extends AbstractModel
{
    /**
     * @var string Database type, such as `mysql`.
     */
    public $DatabaseType;

    /**
     * @var string Specifies whether the instance is the migration source or target. Valid values: `src` (source); `dts` (target).
     */
    public $MigrateRole;

    /**
     * @var string Database instance ID
     */
    public $InstanceId;

    /**
     * @var string Database instance name
     */
    public $InstanceName;

    /**
     * @var integer Number of results to be returned
     */
    public $Limit;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var string The account to which the resource belongs. Valid values: empty or `self` (the current account); `other` (another account).
     */
    public $AccountMode;

    /**
     * @var string ID of the temporary key, which is required if the operation is performed across accounts.
     */
    public $TmpSecretId;

    /**
     * @var string Key of the temporary key, which is required if the operation is performed across accounts.
     */
    public $TmpSecretKey;

    /**
     * @var string Temporary token, which is required if the operation is performed across accounts.
     */
    public $TmpToken;

    /**
     * @param string $DatabaseType Database type, such as `mysql`.
     * @param string $MigrateRole Specifies whether the instance is the migration source or target. Valid values: `src` (source); `dts` (target).
     * @param string $InstanceId Database instance ID
     * @param string $InstanceName Database instance name
     * @param integer $Limit Number of results to be returned
     * @param integer $Offset Offset
     * @param string $AccountMode The account to which the resource belongs. Valid values: empty or `self` (the current account); `other` (another account).
     * @param string $TmpSecretId ID of the temporary key, which is required if the operation is performed across accounts.
     * @param string $TmpSecretKey Key of the temporary key, which is required if the operation is performed across accounts.
     * @param string $TmpToken Temporary token, which is required if the operation is performed across accounts.
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
        if (array_key_exists("DatabaseType",$param) and $param["DatabaseType"] !== null) {
            $this->DatabaseType = $param["DatabaseType"];
        }

        if (array_key_exists("MigrateRole",$param) and $param["MigrateRole"] !== null) {
            $this->MigrateRole = $param["MigrateRole"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("AccountMode",$param) and $param["AccountMode"] !== null) {
            $this->AccountMode = $param["AccountMode"];
        }

        if (array_key_exists("TmpSecretId",$param) and $param["TmpSecretId"] !== null) {
            $this->TmpSecretId = $param["TmpSecretId"];
        }

        if (array_key_exists("TmpSecretKey",$param) and $param["TmpSecretKey"] !== null) {
            $this->TmpSecretKey = $param["TmpSecretKey"];
        }

        if (array_key_exists("TmpToken",$param) and $param["TmpToken"] !== null) {
            $this->TmpToken = $param["TmpToken"];
        }
    }
}
