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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log export information
 *
 * @method string getTopicId() Obtain <p>Log topic ID.</p>
 * @method void setTopicId(string $TopicId) Set <p>Log topic ID.</p>
 * @method string getExportId() Obtain <p>Log export task ID</p>
 * @method void setExportId(string $ExportId) Set <p>Log export task ID</p>
 * @method string getQuery() Obtain <p>Query statements of log export</p>
 * @method void setQuery(string $Query) Set <p>Query statements of log export</p>
 * @method string getFileName() Obtain <p>Filenames of exported logs</p>
 * @method void setFileName(string $FileName) Set <p>Filenames of exported logs</p>
 * @method integer getFileSize() Obtain <p>Log file size</p><p>Unit: Byte</p>
 * @method void setFileSize(integer $FileSize) Set <p>Log file size</p><p>Unit: Byte</p>
 * @method string getOrder() Obtain <p>Sorting of log export time</p>
 * @method void setOrder(string $Order) Set <p>Sorting of log export time</p>
 * @method string getFormat() Obtain <p>Log export format</p>
 * @method void setFormat(string $Format) Set <p>Log export format</p>
 * @method integer getCount() Obtain <p>Number of logs to be exported</p>
 * @method void setCount(integer $Count) Set <p>Number of logs to be exported</p>
 * @method string getStatus() Obtain <p>Log download status. Processing: export in progress, Completed: export completed, Failed: export failure, Expired: log export expired (valid for 3 days), Queuing: queuing</p>
 * @method void setStatus(string $Status) Set <p>Log download status. Processing: export in progress, Completed: export completed, Failed: export failure, Expired: log export expired (valid for 3 days), Queuing: queuing</p>
 * @method integer getFrom() Obtain <p>Start time of log export, with a timestamp in milliseconds</p>
 * @method void setFrom(integer $From) Set <p>Start time of log export, with a timestamp in milliseconds</p>
 * @method integer getTo() Obtain <p>End time of log export, timestamp in milliseconds</p>
 * @method void setTo(integer $To) Set <p>End time of log export, timestamp in milliseconds</p>
 * @method string getCosPath() Obtain <p>Log export path, valid for one hour. Please download using this path as soon as possible.</p>
 * @method void setCosPath(string $CosPath) Set <p>Log export path, valid for one hour. Please download using this path as soon as possible.</p>
 * @method string getCreateTime() Obtain <p>Log export creation time<br>Date and Time Formats: yyyy-MM-dd HH:mm:ss</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Log export creation time<br>Date and Time Formats: yyyy-MM-dd HH:mm:ss</p>
 * @method integer getSyntaxRule() Obtain <p>Syntax rule. Default value is 0.<br>0: Lucene syntax, 1: CQL syntax.</p>
 * @method void setSyntaxRule(integer $SyntaxRule) Set <p>Syntax rule. Default value is 0.<br>0: Lucene syntax, 1: CQL syntax.</p>
 * @method array getDerivedFields() Obtain <p>Export fields</p>
 * @method void setDerivedFields(array $DerivedFields) Set <p>Export fields</p>
 */
class ExportInfo extends AbstractModel
{
    /**
     * @var string <p>Log topic ID.</p>
     */
    public $TopicId;

    /**
     * @var string <p>Log export task ID</p>
     */
    public $ExportId;

    /**
     * @var string <p>Query statements of log export</p>
     */
    public $Query;

    /**
     * @var string <p>Filenames of exported logs</p>
     */
    public $FileName;

    /**
     * @var integer <p>Log file size</p><p>Unit: Byte</p>
     */
    public $FileSize;

    /**
     * @var string <p>Sorting of log export time</p>
     */
    public $Order;

    /**
     * @var string <p>Log export format</p>
     */
    public $Format;

    /**
     * @var integer <p>Number of logs to be exported</p>
     */
    public $Count;

    /**
     * @var string <p>Log download status. Processing: export in progress, Completed: export completed, Failed: export failure, Expired: log export expired (valid for 3 days), Queuing: queuing</p>
     */
    public $Status;

    /**
     * @var integer <p>Start time of log export, with a timestamp in milliseconds</p>
     */
    public $From;

    /**
     * @var integer <p>End time of log export, timestamp in milliseconds</p>
     */
    public $To;

    /**
     * @var string <p>Log export path, valid for one hour. Please download using this path as soon as possible.</p>
     */
    public $CosPath;

    /**
     * @var string <p>Log export creation time<br>Date and Time Formats: yyyy-MM-dd HH:mm:ss</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>Syntax rule. Default value is 0.<br>0: Lucene syntax, 1: CQL syntax.</p>
     */
    public $SyntaxRule;

    /**
     * @var array <p>Export fields</p>
     */
    public $DerivedFields;

    /**
     * @param string $TopicId <p>Log topic ID.</p>
     * @param string $ExportId <p>Log export task ID</p>
     * @param string $Query <p>Query statements of log export</p>
     * @param string $FileName <p>Filenames of exported logs</p>
     * @param integer $FileSize <p>Log file size</p><p>Unit: Byte</p>
     * @param string $Order <p>Sorting of log export time</p>
     * @param string $Format <p>Log export format</p>
     * @param integer $Count <p>Number of logs to be exported</p>
     * @param string $Status <p>Log download status. Processing: export in progress, Completed: export completed, Failed: export failure, Expired: log export expired (valid for 3 days), Queuing: queuing</p>
     * @param integer $From <p>Start time of log export, with a timestamp in milliseconds</p>
     * @param integer $To <p>End time of log export, timestamp in milliseconds</p>
     * @param string $CosPath <p>Log export path, valid for one hour. Please download using this path as soon as possible.</p>
     * @param string $CreateTime <p>Log export creation time<br>Date and Time Formats: yyyy-MM-dd HH:mm:ss</p>
     * @param integer $SyntaxRule <p>Syntax rule. Default value is 0.<br>0: Lucene syntax, 1: CQL syntax.</p>
     * @param array $DerivedFields <p>Export fields</p>
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
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

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("To",$param) and $param["To"] !== null) {
            $this->To = $param["To"];
        }

        if (array_key_exists("CosPath",$param) and $param["CosPath"] !== null) {
            $this->CosPath = $param["CosPath"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SyntaxRule",$param) and $param["SyntaxRule"] !== null) {
            $this->SyntaxRule = $param["SyntaxRule"];
        }

        if (array_key_exists("DerivedFields",$param) and $param["DerivedFields"] !== null) {
            $this->DerivedFields = $param["DerivedFields"];
        }
    }
}
