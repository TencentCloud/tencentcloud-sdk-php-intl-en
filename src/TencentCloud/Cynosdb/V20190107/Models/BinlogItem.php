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
 * Binlog description
 *
 * @method string getFileName() Obtain <p>Binlog filename</p>
 * @method void setFileName(string $FileName) Set <p>Binlog filename</p>
 * @method integer getFileSize() Obtain <p>File size, measurement unit: byte</p>
 * @method void setFileSize(integer $FileSize) Set <p>File size, measurement unit: byte</p>
 * @method string getStartTime() Obtain <p>Earliest transaction time</p>
 * @method void setStartTime(string $StartTime) Set <p>Earliest transaction time</p>
 * @method string getFinishTime() Obtain <p>Latest transaction time</p>
 * @method void setFinishTime(string $FinishTime) Set <p>Latest transaction time</p>
 * @method integer getBinlogId() Obtain <p>Binlog file ID</p>
 * @method void setBinlogId(integer $BinlogId) Set <p>Binlog file ID</p>
 * @method array getCrossRegions() Obtain <p>Cross-regional binlog</p>
 * @method void setCrossRegions(array $CrossRegions) Set <p>Cross-regional binlog</p>
 * @method string getCopyStatus() Obtain <p>Backup delivery status</p>
 * @method void setCopyStatus(string $CopyStatus) Set <p>Backup delivery status</p>
 * @method array getVaultInfos() Obtain <p>Safe information</p>
 * @method void setVaultInfos(array $VaultInfos) Set <p>Safe information</p>
 * @method string getEncryptKeyId() Obtain <p>Encryption key</p>
 * @method void setEncryptKeyId(string $EncryptKeyId) Set <p>Encryption key</p>
 * @method string getEncryptRegion() Obtain <p>Key region for encryption</p>
 * @method void setEncryptRegion(string $EncryptRegion) Set <p>Key region for encryption</p>
 * @method array getExistRegions() Obtain <p>Geographical distribution of backups</p>
 * @method void setExistRegions(array $ExistRegions) Set <p>Geographical distribution of backups</p>
 */
class BinlogItem extends AbstractModel
{
    /**
     * @var string <p>Binlog filename</p>
     */
    public $FileName;

    /**
     * @var integer <p>File size, measurement unit: byte</p>
     */
    public $FileSize;

    /**
     * @var string <p>Earliest transaction time</p>
     */
    public $StartTime;

    /**
     * @var string <p>Latest transaction time</p>
     */
    public $FinishTime;

    /**
     * @var integer <p>Binlog file ID</p>
     */
    public $BinlogId;

    /**
     * @var array <p>Cross-regional binlog</p>
     */
    public $CrossRegions;

    /**
     * @var string <p>Backup delivery status</p>
     */
    public $CopyStatus;

    /**
     * @var array <p>Safe information</p>
     */
    public $VaultInfos;

    /**
     * @var string <p>Encryption key</p>
     */
    public $EncryptKeyId;

    /**
     * @var string <p>Key region for encryption</p>
     */
    public $EncryptRegion;

    /**
     * @var array <p>Geographical distribution of backups</p>
     */
    public $ExistRegions;

    /**
     * @param string $FileName <p>Binlog filename</p>
     * @param integer $FileSize <p>File size, measurement unit: byte</p>
     * @param string $StartTime <p>Earliest transaction time</p>
     * @param string $FinishTime <p>Latest transaction time</p>
     * @param integer $BinlogId <p>Binlog file ID</p>
     * @param array $CrossRegions <p>Cross-regional binlog</p>
     * @param string $CopyStatus <p>Backup delivery status</p>
     * @param array $VaultInfos <p>Safe information</p>
     * @param string $EncryptKeyId <p>Encryption key</p>
     * @param string $EncryptRegion <p>Key region for encryption</p>
     * @param array $ExistRegions <p>Geographical distribution of backups</p>
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("BinlogId",$param) and $param["BinlogId"] !== null) {
            $this->BinlogId = $param["BinlogId"];
        }

        if (array_key_exists("CrossRegions",$param) and $param["CrossRegions"] !== null) {
            $this->CrossRegions = $param["CrossRegions"];
        }

        if (array_key_exists("CopyStatus",$param) and $param["CopyStatus"] !== null) {
            $this->CopyStatus = $param["CopyStatus"];
        }

        if (array_key_exists("VaultInfos",$param) and $param["VaultInfos"] !== null) {
            $this->VaultInfos = [];
            foreach ($param["VaultInfos"] as $key => $value){
                $obj = new VaultInfo();
                $obj->deserialize($value);
                array_push($this->VaultInfos, $obj);
            }
        }

        if (array_key_exists("EncryptKeyId",$param) and $param["EncryptKeyId"] !== null) {
            $this->EncryptKeyId = $param["EncryptKeyId"];
        }

        if (array_key_exists("EncryptRegion",$param) and $param["EncryptRegion"] !== null) {
            $this->EncryptRegion = $param["EncryptRegion"];
        }

        if (array_key_exists("ExistRegions",$param) and $param["ExistRegions"] !== null) {
            $this->ExistRegions = [];
            foreach ($param["ExistRegions"] as $key => $value){
                $obj = new BinlogRegionInfo();
                $obj->deserialize($value);
                array_push($this->ExistRegions, $obj);
            }
        }
    }
}
