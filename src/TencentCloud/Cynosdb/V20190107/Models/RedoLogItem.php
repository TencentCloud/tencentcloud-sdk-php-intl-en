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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * redo log details.
 *
 * @method string getFileName() Obtain Filename.
 * @method void setFileName(string $FileName) Set Filename.
 * @method integer getFileSize() Obtain File size
 * @method void setFileSize(integer $FileSize) Set File size
 * @method string getBackupTime() Obtain Backup time
 * @method void setBackupTime(string $BackupTime) Set Backup time
 * @method integer getRedoLogId() Obtain redoLogId
 * @method void setRedoLogId(integer $RedoLogId) Set redoLogId
 * @method array getRedoCrossRegions() Obtain Cross-Region information.
 * @method void setRedoCrossRegions(array $RedoCrossRegions) Set Cross-Region information.
 * @method string getStatus() Obtain Status.
 * @method void setStatus(string $Status) Set Status.
 * @method string getStartTime() Obtain Start time.
 * @method void setStartTime(string $StartTime) Set Start time.
 * @method string getFinishTime() Obtain Completion time.
 * @method void setFinishTime(string $FinishTime) Set Completion time.
 * @method array getVaultInfos() Obtain Safe info
 * @method void setVaultInfos(array $VaultInfos) Set Safe info
 * @method string getCopyStatus() Obtain Backup delivery status
 * @method void setCopyStatus(string $CopyStatus) Set Backup delivery status
 * @method string getEncryptKeyId() Obtain Encryption key
 * @method void setEncryptKeyId(string $EncryptKeyId) Set Encryption key
 * @method string getEncryptRegion() Obtain Key region for encryption
 * @method void setEncryptRegion(string $EncryptRegion) Set Key region for encryption
 */
class RedoLogItem extends AbstractModel
{
    /**
     * @var string Filename.
     */
    public $FileName;

    /**
     * @var integer File size
     */
    public $FileSize;

    /**
     * @var string Backup time
     */
    public $BackupTime;

    /**
     * @var integer redoLogId
     */
    public $RedoLogId;

    /**
     * @var array Cross-Region information.
     */
    public $RedoCrossRegions;

    /**
     * @var string Status.
     */
    public $Status;

    /**
     * @var string Start time.
     */
    public $StartTime;

    /**
     * @var string Completion time.
     */
    public $FinishTime;

    /**
     * @var array Safe info
     */
    public $VaultInfos;

    /**
     * @var string Backup delivery status
     */
    public $CopyStatus;

    /**
     * @var string Encryption key
     */
    public $EncryptKeyId;

    /**
     * @var string Key region for encryption
     */
    public $EncryptRegion;

    /**
     * @param string $FileName Filename.
     * @param integer $FileSize File size
     * @param string $BackupTime Backup time
     * @param integer $RedoLogId redoLogId
     * @param array $RedoCrossRegions Cross-Region information.
     * @param string $Status Status.
     * @param string $StartTime Start time.
     * @param string $FinishTime Completion time.
     * @param array $VaultInfos Safe info
     * @param string $CopyStatus Backup delivery status
     * @param string $EncryptKeyId Encryption key
     * @param string $EncryptRegion Key region for encryption
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("BackupTime",$param) and $param["BackupTime"] !== null) {
            $this->BackupTime = $param["BackupTime"];
        }

        if (array_key_exists("RedoLogId",$param) and $param["RedoLogId"] !== null) {
            $this->RedoLogId = $param["RedoLogId"];
        }

        if (array_key_exists("RedoCrossRegions",$param) and $param["RedoCrossRegions"] !== null) {
            $this->RedoCrossRegions = [];
            foreach ($param["RedoCrossRegions"] as $key => $value){
                $obj = new BackupRegionAndIds();
                $obj->deserialize($value);
                array_push($this->RedoCrossRegions, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("VaultInfos",$param) and $param["VaultInfos"] !== null) {
            $this->VaultInfos = [];
            foreach ($param["VaultInfos"] as $key => $value){
                $obj = new VaultInfo();
                $obj->deserialize($value);
                array_push($this->VaultInfos, $obj);
            }
        }

        if (array_key_exists("CopyStatus",$param) and $param["CopyStatus"] !== null) {
            $this->CopyStatus = $param["CopyStatus"];
        }

        if (array_key_exists("EncryptKeyId",$param) and $param["EncryptKeyId"] !== null) {
            $this->EncryptKeyId = $param["EncryptKeyId"];
        }

        if (array_key_exists("EncryptRegion",$param) and $param["EncryptRegion"] !== null) {
            $this->EncryptRegion = $param["EncryptRegion"];
        }
    }
}
