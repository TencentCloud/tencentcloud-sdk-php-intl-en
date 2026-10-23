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
 * ExportInstanceErrorLogs request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getStartTime() Obtain Earliest log time
 * @method void setStartTime(string $StartTime) Set Earliest log time
 * @method string getEndTime() Obtain Latest log time
 * @method void setEndTime(string $EndTime) Set Latest log time
 * @method integer getLimit() Obtain Limit of Items
 * @method void setLimit(integer $Limit) Set Limit of Items
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method array getLogLevels() Obtain Log level.
 * @method void setLogLevels(array $LogLevels) Set Log level.
 * @method array getKeyWords() Obtain Keyword.
 * @method void setKeyWords(array $KeyWords) Set Keyword.
 * @method string getFileType() Obtain File type. Available values: csv, original
 * @method void setFileType(string $FileType) Set File type. Available values: csv, original
 * @method string getOrderBy() Obtain Available values: Timestamp
 * @method void setOrderBy(string $OrderBy) Set Available values: Timestamp
 * @method string getOrderByType() Obtain Sorting type. ASC or DESC.
 * @method void setOrderByType(string $OrderByType) Set Sorting type. ASC or DESC.
 */
class ExportInstanceErrorLogsRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Earliest log time
     */
    public $StartTime;

    /**
     * @var string Latest log time
     */
    public $EndTime;

    /**
     * @var integer Limit of Items
     */
    public $Limit;

    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var array Log level.
     */
    public $LogLevels;

    /**
     * @var array Keyword.
     */
    public $KeyWords;

    /**
     * @var string File type. Available values: csv, original
     */
    public $FileType;

    /**
     * @var string Available values: Timestamp
     */
    public $OrderBy;

    /**
     * @var string Sorting type. ASC or DESC.
     */
    public $OrderByType;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $StartTime Earliest log time
     * @param string $EndTime Latest log time
     * @param integer $Limit Limit of Items
     * @param integer $Offset Offset.
     * @param array $LogLevels Log level.
     * @param array $KeyWords Keyword.
     * @param string $FileType File type. Available values: csv, original
     * @param string $OrderBy Available values: Timestamp
     * @param string $OrderByType Sorting type. ASC or DESC.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("LogLevels",$param) and $param["LogLevels"] !== null) {
            $this->LogLevels = $param["LogLevels"];
        }

        if (array_key_exists("KeyWords",$param) and $param["KeyWords"] !== null) {
            $this->KeyWords = $param["KeyWords"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
