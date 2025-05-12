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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportInstanceErrorLogs request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getStartTime() Obtain Log start time
 * @method void setStartTime(string $StartTime) Set Log start time
 * @method string getEndTime() Obtain Log end time
 * @method void setEndTime(string $EndTime) Set Log end time
 * @method integer getLimit() Obtain The max number of returned results
 * @method void setLimit(integer $Limit) Set The max number of returned results
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method array getLogLevels() Obtain Log level
 * @method void setLogLevels(array $LogLevels) Set Log level
 * @method array getKeyWords() Obtain 
 * @method void setKeyWords(array $KeyWords) Set 
 * @method string getFileType() Obtain The template type. Valid values: `csv`, `original`.
 * @method void setFileType(string $FileType) Set The template type. Valid values: `csv`, `original`.
 * @method string getOrderBy() Obtain Valid value: `Timestamp`
 * @method void setOrderBy(string $OrderBy) Set Valid value: `Timestamp`
 * @method string getOrderByType() Obtain Sorting type. valid values: ASC or DESC.
 * @method void setOrderByType(string $OrderByType) Set Sorting type. valid values: ASC or DESC.
 */
class ExportInstanceErrorLogsRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Log start time
     */
    public $StartTime;

    /**
     * @var string Log end time
     */
    public $EndTime;

    /**
     * @var integer The max number of returned results
     */
    public $Limit;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var array Log level
     */
    public $LogLevels;

    /**
     * @var array 
     */
    public $KeyWords;

    /**
     * @var string The template type. Valid values: `csv`, `original`.
     */
    public $FileType;

    /**
     * @var string Valid value: `Timestamp`
     */
    public $OrderBy;

    /**
     * @var string Sorting type. valid values: ASC or DESC.
     */
    public $OrderByType;

    /**
     * @param string $InstanceId Instance ID
     * @param string $StartTime Log start time
     * @param string $EndTime Log end time
     * @param integer $Limit The max number of returned results
     * @param integer $Offset Offset
     * @param array $LogLevels Log level
     * @param array $KeyWords 
     * @param string $FileType The template type. Valid values: `csv`, `original`.
     * @param string $OrderBy Valid value: `Timestamp`
     * @param string $OrderByType Sorting type. valid values: ASC or DESC.
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
