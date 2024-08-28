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
 * CreateLogExport request structure.
 *
 * @method integer getCount() Obtain Number of logs exported. The maximum value is 50 million.
 * @method void setCount(integer $Count) Set Number of logs exported. The maximum value is 50 million.
 * @method integer getStartTime() Obtain Start time of log export, with a timestamp in milliseconds
 * @method void setStartTime(integer $StartTime) Set Start time of log export, with a timestamp in milliseconds
 * @method integer getEndTime() Obtain End time of log export, with a timestamp in milliseconds
 * @method void setEndTime(integer $EndTime) Set End time of log export, with a timestamp in milliseconds
 * @method string getQueryString() Obtain Retrieval statements for log export, and [SQL statements] are not supported
 * @method void setQueryString(string $QueryString) Set Retrieval statements for log export, and [SQL statements] are not supported
 * @method string getSort() Obtain Sorting for log export time. Valid values are asc and desc, and the default value is desc.
 * @method void setSort(string $Sort) Set Sorting for log export time. Valid values are asc and desc, and the default value is desc.
 * @method string getFormat() Obtain Data format for exported log. Valid values are json an csv, the default value is json.
 * @method void setFormat(string $Format) Set Data format for exported log. Valid values are json an csv, the default value is json.
 */
class CreateLogExportRequest extends AbstractModel
{
    /**
     * @var integer Number of logs exported. The maximum value is 50 million.
     */
    public $Count;

    /**
     * @var integer Start time of log export, with a timestamp in milliseconds
     */
    public $StartTime;

    /**
     * @var integer End time of log export, with a timestamp in milliseconds
     */
    public $EndTime;

    /**
     * @var string Retrieval statements for log export, and [SQL statements] are not supported
     */
    public $QueryString;

    /**
     * @var string Sorting for log export time. Valid values are asc and desc, and the default value is desc.
     */
    public $Sort;

    /**
     * @var string Data format for exported log. Valid values are json an csv, the default value is json.
     */
    public $Format;

    /**
     * @param integer $Count Number of logs exported. The maximum value is 50 million.
     * @param integer $StartTime Start time of log export, with a timestamp in milliseconds
     * @param integer $EndTime End time of log export, with a timestamp in milliseconds
     * @param string $QueryString Retrieval statements for log export, and [SQL statements] are not supported
     * @param string $Sort Sorting for log export time. Valid values are asc and desc, and the default value is desc.
     * @param string $Format Data format for exported log. Valid values are json an csv, the default value is json.
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("QueryString",$param) and $param["QueryString"] !== null) {
            $this->QueryString = $param["QueryString"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }
    }
}
