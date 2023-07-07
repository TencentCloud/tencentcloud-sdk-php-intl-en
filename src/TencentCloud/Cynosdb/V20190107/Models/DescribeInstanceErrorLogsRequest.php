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
 * DescribeInstanceErrorLogs request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method integer getLimit() Obtain Limit on the number of logs
 * @method void setLimit(integer $Limit) Set Limit on the number of logs
 * @method integer getOffset() Obtain Offset of the log number
 * @method void setOffset(integer $Offset) Set Offset of the log number
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method string getOrderBy() Obtain Sorting field. Valid value: 'Timestamp'.
 * @method void setOrderBy(string $OrderBy) Set Sorting field. Valid value: 'Timestamp'.
 * @method string getOrderByType() Obtain Sorting order. Valid values: `ASC`, `DESC`.
 * @method void setOrderByType(string $OrderByType) Set Sorting order. Valid values: `ASC`, `DESC`.
 * @method array getLogLevels() Obtain Log level, which supports combo search by multiple levels. Valid values: `error`, `warning`, `note`.
 * @method void setLogLevels(array $LogLevels) Set Log level, which supports combo search by multiple levels. Valid values: `error`, `warning`, `note`.
 * @method array getKeyWords() Obtain 
 * @method void setKeyWords(array $KeyWords) Set 
 */
class DescribeInstanceErrorLogsRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var integer Limit on the number of logs
     */
    public $Limit;

    /**
     * @var integer Offset of the log number
     */
    public $Offset;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var string Sorting field. Valid value: 'Timestamp'.
     */
    public $OrderBy;

    /**
     * @var string Sorting order. Valid values: `ASC`, `DESC`.
     */
    public $OrderByType;

    /**
     * @var array Log level, which supports combo search by multiple levels. Valid values: `error`, `warning`, `note`.
     */
    public $LogLevels;

    /**
     * @var array 
     */
    public $KeyWords;

    /**
     * @param string $InstanceId Instance ID
     * @param integer $Limit Limit on the number of logs
     * @param integer $Offset Offset of the log number
     * @param string $StartTime Start time
     * @param string $EndTime End time
     * @param string $OrderBy Sorting field. Valid value: 'Timestamp'.
     * @param string $OrderByType Sorting order. Valid values: `ASC`, `DESC`.
     * @param array $LogLevels Log level, which supports combo search by multiple levels. Valid values: `error`, `warning`, `note`.
     * @param array $KeyWords 
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
