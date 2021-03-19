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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupCommand request structure.
 *
 * @method string getBackupFileType() Obtain Backup file type. Full: full backup. FULL_LOG: full backup which needs log increments. FULL_DIFF: full backup which needs differential increments. LOG: log backup. DIFF: differential backup.
 * @method void setBackupFileType(string $BackupFileType) Set Backup file type. Full: full backup. FULL_LOG: full backup which needs log increments. FULL_DIFF: full backup which needs differential increments. LOG: log backup. DIFF: differential backup.
 * @method string getDataBaseName() Obtain Database name
 * @method void setDataBaseName(string $DataBaseName) Set Database name
 * @method string getIsRecovery() Obtain Whether restoration is required. No: not required. Yes: required.
 * @method void setIsRecovery(string $IsRecovery) Set Whether restoration is required. No: not required. Yes: required.
 * @method string getLocalPath() Obtain Storage path of backup files. If this parameter is left empty, the default storage path will be D:\\.
 * @method void setLocalPath(string $LocalPath) Set Storage path of backup files. If this parameter is left empty, the default storage path will be D:\\.
 */
class DescribeBackupCommandRequest extends AbstractModel
{
    /**
     * @var string Backup file type. Full: full backup. FULL_LOG: full backup which needs log increments. FULL_DIFF: full backup which needs differential increments. LOG: log backup. DIFF: differential backup.
     */
    public $BackupFileType;

    /**
     * @var string Database name
     */
    public $DataBaseName;

    /**
     * @var string Whether restoration is required. No: not required. Yes: required.
     */
    public $IsRecovery;

    /**
     * @var string Storage path of backup files. If this parameter is left empty, the default storage path will be D:\\.
     */
    public $LocalPath;

    /**
     * @param string $BackupFileType Backup file type. Full: full backup. FULL_LOG: full backup which needs log increments. FULL_DIFF: full backup which needs differential increments. LOG: log backup. DIFF: differential backup.
     * @param string $DataBaseName Database name
     * @param string $IsRecovery Whether restoration is required. No: not required. Yes: required.
     * @param string $LocalPath Storage path of backup files. If this parameter is left empty, the default storage path will be D:\\.
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
        if (array_key_exists("BackupFileType",$param) and $param["BackupFileType"] !== null) {
            $this->BackupFileType = $param["BackupFileType"];
        }

        if (array_key_exists("DataBaseName",$param) and $param["DataBaseName"] !== null) {
            $this->DataBaseName = $param["DataBaseName"];
        }

        if (array_key_exists("IsRecovery",$param) and $param["IsRecovery"] !== null) {
            $this->IsRecovery = $param["IsRecovery"];
        }

        if (array_key_exists("LocalPath",$param) and $param["LocalPath"] !== null) {
            $this->LocalPath = $param["LocalPath"];
        }
    }
}
