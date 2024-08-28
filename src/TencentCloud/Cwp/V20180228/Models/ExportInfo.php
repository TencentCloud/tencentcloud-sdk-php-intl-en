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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task list of downloaded logs
 *
 * @method string getExportId() Obtain Task ID of exported logs
 * @method void setExportId(string $ExportId) Set Task ID of exported logs
 * @method string getQuery() Obtain Query statements of log export
 * @method void setQuery(string $Query) Set Query statements of log export
 * @method string getFileName() Obtain Filenames of exported logs
 * @method void setFileName(string $FileName) Set Filenames of exported logs
 * @method integer getFileSize() Obtain Log file size
 * @method void setFileSize(integer $FileSize) Set Log file size
 * @method string getOrder() Obtain Sorting of log export time
 * @method void setOrder(string $Order) Set Sorting of log export time
 * @method string getFormat() Obtain Log export format
 * @method void setFormat(string $Format) Set Log export format
 * @method integer getCount() Obtain Number of logs to be exported
 * @method void setCount(integer $Count) Set Number of logs to be exported
 * @method string getStatus() Obtain Log download status. Processing: export in progress; Completed: export completed; Failed: export failed; Expired: log export expired (valid for 3 days).
 * @method void setStatus(string $Status) Set Log download status. Processing: export in progress; Completed: export completed; Failed: export failed; Expired: log export expired (valid for 3 days).
 * @method integer getStartTime() Obtain Start time of log export, with a millisecond-level UNIX timestamp
 * @method void setStartTime(integer $StartTime) Set Start time of log export, with a millisecond-level UNIX timestamp
 * @method integer getEndTime() Obtain End time of log export, with a millisecond-level UNIX timestamp
 * @method void setEndTime(integer $EndTime) Set End time of log export, with a millisecond-level UNIX timestamp
 * @method string getCosPath() Obtain Log export path
 * @method void setCosPath(string $CosPath) Set Log export path
 * @method string getCreateTime() Obtain Creation time of log export
 * @method void setCreateTime(string $CreateTime) Set Creation time of log export
 */
class ExportInfo extends AbstractModel
{
    /**
     * @var string Task ID of exported logs
     */
    public $ExportId;

    /**
     * @var string Query statements of log export
     */
    public $Query;

    /**
     * @var string Filenames of exported logs
     */
    public $FileName;

    /**
     * @var integer Log file size
     */
    public $FileSize;

    /**
     * @var string Sorting of log export time
     */
    public $Order;

    /**
     * @var string Log export format
     */
    public $Format;

    /**
     * @var integer Number of logs to be exported
     */
    public $Count;

    /**
     * @var string Log download status. Processing: export in progress; Completed: export completed; Failed: export failed; Expired: log export expired (valid for 3 days).
     */
    public $Status;

    /**
     * @var integer Start time of log export, with a millisecond-level UNIX timestamp
     */
    public $StartTime;

    /**
     * @var integer End time of log export, with a millisecond-level UNIX timestamp
     */
    public $EndTime;

    /**
     * @var string Log export path
     */
    public $CosPath;

    /**
     * @var string Creation time of log export
     */
    public $CreateTime;

    /**
     * @param string $ExportId Task ID of exported logs
     * @param string $Query Query statements of log export
     * @param string $FileName Filenames of exported logs
     * @param integer $FileSize Log file size
     * @param string $Order Sorting of log export time
     * @param string $Format Log export format
     * @param integer $Count Number of logs to be exported
     * @param string $Status Log download status. Processing: export in progress; Completed: export completed; Failed: export failed; Expired: log export expired (valid for 3 days).
     * @param integer $StartTime Start time of log export, with a millisecond-level UNIX timestamp
     * @param integer $EndTime End time of log export, with a millisecond-level UNIX timestamp
     * @param string $CosPath Log export path
     * @param string $CreateTime Creation time of log export
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
        if (array_key_exists("ExportId",$param) and $param["ExportId"] !== null) {
            $this->ExportId = $param["ExportId"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CosPath",$param) and $param["CosPath"] !== null) {
            $this->CosPath = $param["CosPath"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
