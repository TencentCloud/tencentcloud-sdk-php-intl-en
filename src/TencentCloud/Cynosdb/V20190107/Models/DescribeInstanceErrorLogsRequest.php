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
 * DescribeInstanceErrorLogs request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method integer getLimit() Obtain Log entry limit
 * @method void setLimit(integer $Limit) Set Log entry limit
 * @method integer getOffset() Obtain Log entry offset
 * @method void setOffset(integer $Offset) Set Log entry offset
 * @method string getStartTime() Obtain Start time.
 * @method void setStartTime(string $StartTime) Set Start time.
 * @method string getEndTime() Obtain End time.
 * @method void setEndTime(string $EndTime) Set End time.
 * @method string getOrderBy() Obtain Sorting field. Valid values: `Timestamp` (enumeration value).
 * @method void setOrderBy(string $OrderBy) Set Sorting field. Valid values: `Timestamp` (enumeration value).
 * @method string getOrderByType() Obtain Sorting type. Valid values: `ASC`, `DESC`.
 * @method void setOrderByType(string $OrderByType) Set Sorting type. Valid values: `ASC`, `DESC`.
 * @method array getLogLevels() Obtain Log level. Valid values: error, warning, note. You can search multiple levels at the same time.
 * @method void setLogLevels(array $LogLevels) Set Log level. Valid values: error, warning, note. You can search multiple levels at the same time.
 * @method array getKeyWords() Obtain Keyword. Fuzzy search is supported.
 * @method void setKeyWords(array $KeyWords) Set Keyword. Fuzzy search is supported.
 */
class DescribeInstanceErrorLogsRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var integer Log entry limit
     */
    public $Limit;

    /**
     * @var integer Log entry offset
     */
    public $Offset;

    /**
     * @var string Start time.
     */
    public $StartTime;

    /**
     * @var string End time.
     */
    public $EndTime;

    /**
     * @var string Sorting field. Valid values: `Timestamp` (enumeration value).
     */
    public $OrderBy;

    /**
     * @var string Sorting type. Valid values: `ASC`, `DESC`.
     */
    public $OrderByType;

    /**
     * @var array Log level. Valid values: error, warning, note. You can search multiple levels at the same time.
     */
    public $LogLevels;

    /**
     * @var array Keyword. Fuzzy search is supported.
     */
    public $KeyWords;

    /**
     * @param string $InstanceId Instance ID.
     * @param integer $Limit Log entry limit
     * @param integer $Offset Log entry offset
     * @param string $StartTime Start time.
     * @param string $EndTime End time.
     * @param string $OrderBy Sorting field. Valid values: `Timestamp` (enumeration value).
     * @param string $OrderByType Sorting type. Valid values: `ASC`, `DESC`.
     * @param array $LogLevels Log level. Valid values: error, warning, note. You can search multiple levels at the same time.
     * @param array $KeyWords Keyword. Fuzzy search is supported.
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("LogLevels",$param) and $param["LogLevels"] !== null) {
            $this->LogLevels = $param["LogLevels"];
        }

        if (array_key_exists("KeyWords",$param) and $param["KeyWords"] !== null) {
            $this->KeyWords = $param["KeyWords"];
        }
    }
}
