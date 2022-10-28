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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Binlog information
 *
 * @method string getName() Obtain Binlog backup filename
 * @method void setName(string $Name) Set Binlog backup filename
 * @method integer getSize() Obtain Backup file size in bytes
 * @method void setSize(integer $Size) Set Backup file size in bytes
 * @method string getDate() Obtain File stored time in the format of 2016-03-17 02:10:37
 * @method void setDate(string $Date) Set File stored time in the format of 2016-03-17 02:10:37
 * @method string getIntranetUrl() Obtain Download address
 * @method void setIntranetUrl(string $IntranetUrl) Set Download address
 * @method string getInternetUrl() Obtain Download address
 * @method void setInternetUrl(string $InternetUrl) Set Download address
 * @method string getType() Obtain Log type. Value range: binlog
 * @method void setType(string $Type) Set Log type. Value range: binlog
 * @method string getBinlogStartTime() Obtain Binlog file start file
 * @method void setBinlogStartTime(string $BinlogStartTime) Set Binlog file start file
 * @method string getBinlogFinishTime() Obtain Binlog file end time
 * @method void setBinlogFinishTime(string $BinlogFinishTime) Set Binlog file end time
 * @method string getRegion() Obtain The region where the binlog file resides
 * @method void setRegion(string $Region) Set The region where the binlog file resides
 * @method string getStatus() Obtain Backup task status. Valid values: `SUCCESS` (backup succeeded), `FAILED` (backup failed), `RUNNING` (backup is in progress).
 * @method void setStatus(string $Status) Set Backup task status. Valid values: `SUCCESS` (backup succeeded), `FAILED` (backup failed), `RUNNING` (backup is in progress).
 * @method array getRemoteInfo() Obtain The detailed information of remote binlog backups
 * @method void setRemoteInfo(array $RemoteInfo) Set The detailed information of remote binlog backups
 * @method integer getCosStorageType() Obtain Storage method. Valid values: `0` (regular storage), `1`(archive storage). Default value: `0`.
 * @method void setCosStorageType(integer $CosStorageType) Set Storage method. Valid values: `0` (regular storage), `1`(archive storage). Default value: `0`.
 * @method string getInstanceId() Obtain Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed in the TencentDB console.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed in the TencentDB console.
 */
class BinlogInfo extends AbstractModel
{
    /**
     * @var string Binlog backup filename
     */
    public $Name;

    /**
     * @var integer Backup file size in bytes
     */
    public $Size;

    /**
     * @var string File stored time in the format of 2016-03-17 02:10:37
     */
    public $Date;

    /**
     * @var string Download address
     */
    public $IntranetUrl;

    /**
     * @var string Download address
     */
    public $InternetUrl;

    /**
     * @var string Log type. Value range: binlog
     */
    public $Type;

    /**
     * @var string Binlog file start file
     */
    public $BinlogStartTime;

    /**
     * @var string Binlog file end time
     */
    public $BinlogFinishTime;

    /**
     * @var string The region where the binlog file resides
     */
    public $Region;

    /**
     * @var string Backup task status. Valid values: `SUCCESS` (backup succeeded), `FAILED` (backup failed), `RUNNING` (backup is in progress).
     */
    public $Status;

    /**
     * @var array The detailed information of remote binlog backups
     */
    public $RemoteInfo;

    /**
     * @var integer Storage method. Valid values: `0` (regular storage), `1`(archive storage). Default value: `0`.
     */
    public $CosStorageType;

    /**
     * @var string Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed in the TencentDB console.
     */
    public $InstanceId;

    /**
     * @param string $Name Binlog backup filename
     * @param integer $Size Backup file size in bytes
     * @param string $Date File stored time in the format of 2016-03-17 02:10:37
     * @param string $IntranetUrl Download address
     * @param string $InternetUrl Download address
     * @param string $Type Log type. Value range: binlog
     * @param string $BinlogStartTime Binlog file start file
     * @param string $BinlogFinishTime Binlog file end time
     * @param string $Region The region where the binlog file resides
     * @param string $Status Backup task status. Valid values: `SUCCESS` (backup succeeded), `FAILED` (backup failed), `RUNNING` (backup is in progress).
     * @param array $RemoteInfo The detailed information of remote binlog backups
     * @param integer $CosStorageType Storage method. Valid values: `0` (regular storage), `1`(archive storage). Default value: `0`.
     * @param string $InstanceId Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed in the TencentDB console.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("IntranetUrl",$param) and $param["IntranetUrl"] !== null) {
            $this->IntranetUrl = $param["IntranetUrl"];
        }

        if (array_key_exists("InternetUrl",$param) and $param["InternetUrl"] !== null) {
            $this->InternetUrl = $param["InternetUrl"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("BinlogStartTime",$param) and $param["BinlogStartTime"] !== null) {
            $this->BinlogStartTime = $param["BinlogStartTime"];
        }

        if (array_key_exists("BinlogFinishTime",$param) and $param["BinlogFinishTime"] !== null) {
            $this->BinlogFinishTime = $param["BinlogFinishTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RemoteInfo",$param) and $param["RemoteInfo"] !== null) {
            $this->RemoteInfo = [];
            foreach ($param["RemoteInfo"] as $key => $value){
                $obj = new RemoteBackupInfo();
                $obj->deserialize($value);
                array_push($this->RemoteInfo, $obj);
            }
        }

        if (array_key_exists("CosStorageType",$param) and $param["CosStorageType"] !== null) {
            $this->CosStorageType = $param["CosStorageType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
