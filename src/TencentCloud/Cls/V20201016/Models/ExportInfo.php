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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log export information
 *
 * @method string getTopicId() Obtain Log topic ID
 * @method void setTopicId(string $TopicId) Set Log topic ID
 * @method string getExportId() Obtain Log export task ID
 * @method void setExportId(string $ExportId) Set Log export task ID
 * @method string getQuery() Obtain Log export query statement
 * @method void setQuery(string $Query) Set Log export query statement
 * @method string getFileName() Obtain Log export filename
 * @method void setFileName(string $FileName) Set Log export filename
 * @method integer getFileSize() Obtain Log file size
 * @method void setFileSize(integer $FileSize) Set Log file size
 * @method string getOrder() Obtain Log export time sorting
 * @method void setOrder(string $Order) Set Log export time sorting
 * @method string getFormat() Obtain Log export format
 * @method void setFormat(string $Format) Set Log export format
 * @method integer getCount() Obtain Number of logs to be exported
 * @method void setCount(integer $Count) Set Number of logs to be exported
 * @method string getStatus() Obtain Log download status. Valid values: `Processing`, `Completed`, `Failed`, `Expired` (three-day validity period), and `Queuing`.
 * @method void setStatus(string $Status) Set Log download status. Valid values: `Processing`, `Completed`, `Failed`, `Expired` (three-day validity period), and `Queuing`.
 * @method integer getFrom() Obtain Log export start time
 * @method void setFrom(integer $From) Set Log export start time
 * @method integer getTo() Obtain Log export end time
 * @method void setTo(integer $To) Set Log export end time
 * @method string getCosPath() Obtain Log export path, valid for one hour. Please download using this path as soon as possible.
 * @method void setCosPath(string $CosPath) Set Log export path, valid for one hour. Please download using this path as soon as possible.
 * @method string getCreateTime() Obtain Log export creation time
 * @method void setCreateTime(string $CreateTime) Set Log export creation time
 * @method integer getSyntaxRule() Obtain Syntax rules. The default value is 0.0: Lucene syntax, 1: CQL syntax.
 * @method void setSyntaxRule(integer $SyntaxRule) Set Syntax rules. The default value is 0.0: Lucene syntax, 1: CQL syntax.
 */
class ExportInfo extends AbstractModel
{
    /**
     * @var string Log topic ID
     */
    public $TopicId;

    /**
     * @var string Log export task ID
     */
    public $ExportId;

    /**
     * @var string Log export query statement
     */
    public $Query;

    /**
     * @var string Log export filename
     */
    public $FileName;

    /**
     * @var integer Log file size
     */
    public $FileSize;

    /**
     * @var string Log export time sorting
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
     * @var string Log download status. Valid values: `Processing`, `Completed`, `Failed`, `Expired` (three-day validity period), and `Queuing`.
     */
    public $Status;

    /**
     * @var integer Log export start time
     */
    public $From;

    /**
     * @var integer Log export end time
     */
    public $To;

    /**
     * @var string Log export path, valid for one hour. Please download using this path as soon as possible.
     */
    public $CosPath;

    /**
     * @var string Log export creation time
     */
    public $CreateTime;

    /**
     * @var integer Syntax rules. The default value is 0.0: Lucene syntax, 1: CQL syntax.
     */
    public $SyntaxRule;

    /**
     * @param string $TopicId Log topic ID
     * @param string $ExportId Log export task ID
     * @param string $Query Log export query statement
     * @param string $FileName Log export filename
     * @param integer $FileSize Log file size
     * @param string $Order Log export time sorting
     * @param string $Format Log export format
     * @param integer $Count Number of logs to be exported
     * @param string $Status Log download status. Valid values: `Processing`, `Completed`, `Failed`, `Expired` (three-day validity period), and `Queuing`.
     * @param integer $From Log export start time
     * @param integer $To Log export end time
     * @param string $CosPath Log export path, valid for one hour. Please download using this path as soon as possible.
     * @param string $CreateTime Log export creation time
     * @param integer $SyntaxRule Syntax rules. The default value is 0.0: Lucene syntax, 1: CQL syntax.
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
    }
}
