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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log export record
 *
 * @method string getCosPath() Obtain Log export path
 * @method void setCosPath(string $CosPath) Set Log export path
 * @method integer getCount() Obtain Number of logs to be exported
 * @method void setCount(integer $Count) Set Number of logs to be exported
 * @method string getCreateTime() Obtain Log export task creation time
 * @method void setCreateTime(string $CreateTime) Set Log export task creation time
 * @method string getExportID() Obtain Log export task ID
 * @method void setExportID(string $ExportID) Set Log export task ID
 * @method string getFileName() Obtain Log export filename
 * @method void setFileName(string $FileName) Set Log export filename
 * @method integer getFileSize() Obtain Log file size
 * @method void setFileSize(integer $FileSize) Set Log file size
 * @method string getFormat() Obtain Log export format
 * @method void setFormat(string $Format) Set Log export format
 * @method string getOrder() Obtain Log export time sorting
 * @method void setOrder(string $Order) Set Log export time sorting
 * @method string getQuery() Obtain Log export query statement
 * @method void setQuery(string $Query) Set Log export query statement
 * @method string getStartTime() Obtain Log export start time
 * @method void setStartTime(string $StartTime) Set Log export start time
 * @method string getEndTime() Obtain Log export end time
 * @method void setEndTime(string $EndTime) Set Log export end time
 * @method string getStatus() Obtain Log download status. Valid values: Queuing: queuing; Processing: exporting; Complete: completed; Failed: failed; Expired: expired (3-day validity period).
 * @method void setStatus(string $Status) Set Log download status. Valid values: Queuing: queuing; Processing: exporting; Complete: completed; Failed: failed; Expired: expired (3-day validity period).
 */
class LogExport extends AbstractModel
{
    /**
     * @var string Log export path
     */
    public $CosPath;

    /**
     * @var integer Number of logs to be exported
     */
    public $Count;

    /**
     * @var string Log export task creation time
     */
    public $CreateTime;

    /**
     * @var string Log export task ID
     */
    public $ExportID;

    /**
     * @var string Log export filename
     */
    public $FileName;

    /**
     * @var integer Log file size
     */
    public $FileSize;

    /**
     * @var string Log export format
     */
    public $Format;

    /**
     * @var string Log export time sorting
     */
    public $Order;

    /**
     * @var string Log export query statement
     */
    public $Query;

    /**
     * @var string Log export start time
     */
    public $StartTime;

    /**
     * @var string Log export end time
     */
    public $EndTime;

    /**
     * @var string Log download status. Valid values: Queuing: queuing; Processing: exporting; Complete: completed; Failed: failed; Expired: expired (3-day validity period).
     */
    public $Status;

    /**
     * @param string $CosPath Log export path
     * @param integer $Count Number of logs to be exported
     * @param string $CreateTime Log export task creation time
     * @param string $ExportID Log export task ID
     * @param string $FileName Log export filename
     * @param integer $FileSize Log file size
     * @param string $Format Log export format
     * @param string $Order Log export time sorting
     * @param string $Query Log export query statement
     * @param string $StartTime Log export start time
     * @param string $EndTime Log export end time
     * @param string $Status Log download status. Valid values: Queuing: queuing; Processing: exporting; Complete: completed; Failed: failed; Expired: expired (3-day validity period).
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
        if (array_key_exists("CosPath",$param) and $param["CosPath"] !== null) {
            $this->CosPath = $param["CosPath"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExportID",$param) and $param["ExportID"] !== null) {
            $this->ExportID = $param["ExportID"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
