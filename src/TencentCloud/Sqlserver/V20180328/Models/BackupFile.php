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
 * If the backup files are unarchived, each database corresponds to one backup file.
 *
 * @method integer getId() Obtain Unique ID of a backup file
 * @method void setId(integer $Id) Set Unique ID of a backup file
 * @method string getFileName() Obtain Backup file name
 * @method void setFileName(string $FileName) Set Backup file name
 * @method integer getSize() Obtain File size in KB
 * @method void setSize(integer $Size) Set File size in KB
 * @method array getDBs() Obtain Name of the database corresponding to the backup file
 * @method void setDBs(array $DBs) Set Name of the database corresponding to the backup file
 * @method string getDownloadLink() Obtain Download address
 * @method void setDownloadLink(string $DownloadLink) Set Download address
 * @method string getRegion() Obtain The code of the region where current instance resides
 * @method void setRegion(string $Region) Set The code of the region where current instance resides
 * @method array getCrossBackupAddr() Obtain The target region and download address of cross-region backup
 * @method void setCrossBackupAddr(array $CrossBackupAddr) Set The target region and download address of cross-region backup
 */
class BackupFile extends AbstractModel
{
    /**
     * @var integer Unique ID of a backup file
     */
    public $Id;

    /**
     * @var string Backup file name
     */
    public $FileName;

    /**
     * @var integer File size in KB
     */
    public $Size;

    /**
     * @var array Name of the database corresponding to the backup file
     */
    public $DBs;

    /**
     * @var string Download address
     */
    public $DownloadLink;

    /**
     * @var string The code of the region where current instance resides
     */
    public $Region;

    /**
     * @var array The target region and download address of cross-region backup
     */
    public $CrossBackupAddr;

    /**
     * @param integer $Id Unique ID of a backup file
     * @param string $FileName Backup file name
     * @param integer $Size File size in KB
     * @param array $DBs Name of the database corresponding to the backup file
     * @param string $DownloadLink Download address
     * @param string $Region The code of the region where current instance resides
     * @param array $CrossBackupAddr The target region and download address of cross-region backup
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("DBs",$param) and $param["DBs"] !== null) {
            $this->DBs = $param["DBs"];
        }

        if (array_key_exists("DownloadLink",$param) and $param["DownloadLink"] !== null) {
            $this->DownloadLink = $param["DownloadLink"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("CrossBackupAddr",$param) and $param["CrossBackupAddr"] !== null) {
            $this->CrossBackupAddr = [];
            foreach ($param["CrossBackupAddr"] as $key => $value){
                $obj = new CrossBackupAddr();
                $obj->deserialize($value);
                array_push($this->CrossBackupAddr, $obj);
            }
        }
    }
}
