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
 * CreateLogExport request structure.
 *
 * @method integer getID() Obtain Project ID
 * @method void setID(integer $ID) Set Project ID
 * @method string getStartTime() Obtain Log export start time
 * @method void setStartTime(string $StartTime) Set Log export start time
 * @method string getEndTime() Obtain Log export end time
 * @method void setEndTime(string $EndTime) Set Log export end time
 * @method string getQuery() Obtain Log export search statement
 * @method void setQuery(string $Query) Set Log export search statement
 * @method integer getCount() Obtain Number of logs to be exported. Maximum value: 10 million
 * @method void setCount(integer $Count) Set Number of logs to be exported. Maximum value: 10 million
 * @method string getOrder() Obtain Exported log sorting order by time. Valid values: asc: ascending; desc: descending. Default value: desc
 * @method void setOrder(string $Order) Set Exported log sorting order by time. Valid values: asc: ascending; desc: descending. Default value: desc
 * @method string getFormat() Obtain Exported log data format. Valid values: json, csv. Default value: json
 * @method void setFormat(string $Format) Set Exported log data format. Valid values: json, csv. Default value: json
 */
class CreateLogExportRequest extends AbstractModel
{
    /**
     * @var integer Project ID
     */
    public $ID;

    /**
     * @var string Log export start time
     */
    public $StartTime;

    /**
     * @var string Log export end time
     */
    public $EndTime;

    /**
     * @var string Log export search statement
     */
    public $Query;

    /**
     * @var integer Number of logs to be exported. Maximum value: 10 million
     */
    public $Count;

    /**
     * @var string Exported log sorting order by time. Valid values: asc: ascending; desc: descending. Default value: desc
     */
    public $Order;

    /**
     * @var string Exported log data format. Valid values: json, csv. Default value: json
     */
    public $Format;

    /**
     * @param integer $ID Project ID
     * @param string $StartTime Log export start time
     * @param string $EndTime Log export end time
     * @param string $Query Log export search statement
     * @param integer $Count Number of logs to be exported. Maximum value: 10 million
     * @param string $Order Exported log sorting order by time. Valid values: asc: ascending; desc: descending. Default value: desc
     * @param string $Format Exported log data format. Valid values: json, csv. Default value: json
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }
    }
}
