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
 * redo log details
 *
 * @method string getFileName() Obtain <p>File name.</p>
 * @method void setFileName(string $FileName) Set <p>File name.</p>
 * @method integer getFileSize() Obtain <p>File size</p>
 * @method void setFileSize(integer $FileSize) Set <p>File size</p>
 * @method string getBackupTime() Obtain <p>Backup time</p>
 * @method void setBackupTime(string $BackupTime) Set <p>Backup time</p>
 * @method integer getRedoLogId() Obtain <p>redoLogId</p>
 * @method void setRedoLogId(integer $RedoLogId) Set <p>redoLogId</p>
 * @method array getRedoCrossRegions() Obtain <p>Cross-regional information</p>
 * @method void setRedoCrossRegions(array $RedoCrossRegions) Set <p>Cross-regional information</p>
 * @method string getStatus() Obtain <p>Status.</p>
 * @method void setStatus(string $Status) Set <p>Status.</p>
 * @method string getStartTime() Obtain <p>Start time.</p>
 * @method void setStartTime(string $StartTime) Set <p>Start time.</p>
 * @method string getFinishTime() Obtain <p>Completion time</p>
 * @method void setFinishTime(string $FinishTime) Set <p>Completion time</p>
 * @method array getVaultInfos() Obtain <p>Safe information.</p>
 * @method void setVaultInfos(array $VaultInfos) Set <p>Safe information.</p>
 * @method string getCopyStatus() Obtain <p>Backup delivery status</p>
 * @method void setCopyStatus(string $CopyStatus) Set <p>Backup delivery status</p>
 * @method string getEncryptKeyId() Obtain <p>Encryption key.</p>
 * @method void setEncryptKeyId(string $EncryptKeyId) Set <p>Encryption key.</p>
 * @method string getEncryptRegion() Obtain <p>Encryption key region</p>
 * @method void setEncryptRegion(string $EncryptRegion) Set <p>Encryption key region</p>
 */
class RedoLogItem extends AbstractModel
{
    /**
     * @var string <p>File name.</p>
     */
    public $FileName;

    /**
     * @var integer <p>File size</p>
     */
    public $FileSize;

    /**
     * @var string <p>Backup time</p>
     */
    public $BackupTime;

    /**
     * @var integer <p>redoLogId</p>
     */
    public $RedoLogId;

    /**
     * @var array <p>Cross-regional information</p>
     */
    public $RedoCrossRegions;

    /**
     * @var string <p>Status.</p>
     */
    public $Status;

    /**
     * @var string <p>Start time.</p>
     */
    public $StartTime;

    /**
     * @var string <p>Completion time</p>
     */
    public $FinishTime;

    /**
     * @var array <p>Safe information.</p>
     */
    public $VaultInfos;

    /**
     * @var string <p>Backup delivery status</p>
     */
    public $CopyStatus;

    /**
     * @var string <p>Encryption key.</p>
     */
    public $EncryptKeyId;

    /**
     * @var string <p>Encryption key region</p>
     */
    public $EncryptRegion;

    /**
     * @param string $FileName <p>File name.</p>
     * @param integer $FileSize <p>File size</p>
     * @param string $BackupTime <p>Backup time</p>
     * @param integer $RedoLogId <p>redoLogId</p>
     * @param array $RedoCrossRegions <p>Cross-regional information</p>
     * @param string $Status <p>Status.</p>
     * @param string $StartTime <p>Start time.</p>
     * @param string $FinishTime <p>Completion time</p>
     * @param array $VaultInfos <p>Safe information.</p>
     * @param string $CopyStatus <p>Backup delivery status</p>
     * @param string $EncryptKeyId <p>Encryption key.</p>
     * @param string $EncryptRegion <p>Encryption key region</p>
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
