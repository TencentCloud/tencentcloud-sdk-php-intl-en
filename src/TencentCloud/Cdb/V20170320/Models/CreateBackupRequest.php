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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBackup request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
 * @method string getBackupMethod() Obtain Target backup method. Valid values: `logical` (logical cold backup), `physical` (physical cold backup), `snapshot` (snapshot backup). Basic Edition instances only support snapshot backups.
 * @method void setBackupMethod(string $BackupMethod) Set Target backup method. Valid values: `logical` (logical cold backup), `physical` (physical cold backup), `snapshot` (snapshot backup). Basic Edition instances only support snapshot backups.
 * @method array getBackupDBTableList() Obtain Database table information to be backed up. If this parameter is not set, the whole instance is backed up by default. This parameter can only be set when BackupMethod=logical. The specified database and tables must exist. Otherwise, backup may fail.
If necessary to back up tables tb1 and tb2 in database db1 and database db2, configure the parameter as [{"Db": "db1", "Table": "tb1"}, {"Db": "db1", "Table": "tb2"}, {"Db": "db2"}].
 * @method void setBackupDBTableList(array $BackupDBTableList) Set Database table information to be backed up. If this parameter is not set, the whole instance is backed up by default. This parameter can only be set when BackupMethod=logical. The specified database and tables must exist. Otherwise, backup may fail.
If necessary to back up tables tb1 and tb2 in database db1 and database db2, configure the parameter as [{"Db": "db1", "Table": "tb1"}, {"Db": "db1", "Table": "tb2"}, {"Db": "db2"}].
 * @method string getManualBackupName() Obtain Manually back up the alias. Keep the input length within 60 characters.
 * @method void setManualBackupName(string $ManualBackupName) Set Manually back up the alias. Keep the input length within 60 characters.
 * @method string getEncryptionFlag() Obtain Whether the physical backup needs encryption, optional values: on - yes, off - no. This value is meaningful only when BackupMethod is physical. If not specified, use the default encryption policy of instance backup. Here, the default encryption policy refers to the current instance encryption policy queried via the api for the query [DescribeBackupEncryptionStatus](https://www.tencentcloud.com/document/product/236/86508?from_cn_redirect=1).
 * @method void setEncryptionFlag(string $EncryptionFlag) Set Whether the physical backup needs encryption, optional values: on - yes, off - no. This value is meaningful only when BackupMethod is physical. If not specified, use the default encryption policy of instance backup. Here, the default encryption policy refers to the current instance encryption policy queried via the api for the query [DescribeBackupEncryptionStatus](https://www.tencentcloud.com/document/product/236/86508?from_cn_redirect=1).
 */
class CreateBackupRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     */
    public $InstanceId;

    /**
     * @var string Target backup method. Valid values: `logical` (logical cold backup), `physical` (physical cold backup), `snapshot` (snapshot backup). Basic Edition instances only support snapshot backups.
     */
    public $BackupMethod;

    /**
     * @var array Database table information to be backed up. If this parameter is not set, the whole instance is backed up by default. This parameter can only be set when BackupMethod=logical. The specified database and tables must exist. Otherwise, backup may fail.
If necessary to back up tables tb1 and tb2 in database db1 and database db2, configure the parameter as [{"Db": "db1", "Table": "tb1"}, {"Db": "db1", "Table": "tb2"}, {"Db": "db2"}].
     */
    public $BackupDBTableList;

    /**
     * @var string Manually back up the alias. Keep the input length within 60 characters.
     */
    public $ManualBackupName;

    /**
     * @var string Whether the physical backup needs encryption, optional values: on - yes, off - no. This value is meaningful only when BackupMethod is physical. If not specified, use the default encryption policy of instance backup. Here, the default encryption policy refers to the current instance encryption policy queried via the api for the query [DescribeBackupEncryptionStatus](https://www.tencentcloud.com/document/product/236/86508?from_cn_redirect=1).
     */
    public $EncryptionFlag;

    /**
     * @param string $InstanceId Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     * @param string $BackupMethod Target backup method. Valid values: `logical` (logical cold backup), `physical` (physical cold backup), `snapshot` (snapshot backup). Basic Edition instances only support snapshot backups.
     * @param array $BackupDBTableList Database table information to be backed up. If this parameter is not set, the whole instance is backed up by default. This parameter can only be set when BackupMethod=logical. The specified database and tables must exist. Otherwise, backup may fail.
If necessary to back up tables tb1 and tb2 in database db1 and database db2, configure the parameter as [{"Db": "db1", "Table": "tb1"}, {"Db": "db1", "Table": "tb2"}, {"Db": "db2"}].
     * @param string $ManualBackupName Manually back up the alias. Keep the input length within 60 characters.
     * @param string $EncryptionFlag Whether the physical backup needs encryption, optional values: on - yes, off - no. This value is meaningful only when BackupMethod is physical. If not specified, use the default encryption policy of instance backup. Here, the default encryption policy refers to the current instance encryption policy queried via the api for the query [DescribeBackupEncryptionStatus](https://www.tencentcloud.com/document/product/236/86508?from_cn_redirect=1).
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

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("BackupDBTableList",$param) and $param["BackupDBTableList"] !== null) {
            $this->BackupDBTableList = [];
            foreach ($param["BackupDBTableList"] as $key => $value){
                $obj = new BackupItem();
                $obj->deserialize($value);
                array_push($this->BackupDBTableList, $obj);
            }
        }

        if (array_key_exists("ManualBackupName",$param) and $param["ManualBackupName"] !== null) {
            $this->ManualBackupName = $param["ManualBackupName"];
        }

        if (array_key_exists("EncryptionFlag",$param) and $param["EncryptionFlag"] !== null) {
            $this->EncryptionFlag = $param["EncryptionFlag"];
        }
    }
}
