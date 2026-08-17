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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogInstanceList request structure.
 *
 * @method string getLogType() Obtain <p>Log type.</p><p>Enumeration value:</p><ul><li>auditLog: Audit log.</li></ul>
 * @method void setLogType(string $LogType) Set <p>Log type.</p><p>Enumeration value:</p><ul><li>auditLog: Audit log.</li></ul>
 * @method integer getLimit() Obtain <p>Size of the output task list per page.</p><ul><li>Value ranges from 1 to 100.</li><li>Default value: 20.</li></ul>
 * @method void setLimit(integer $Limit) Set <p>Size of the output task list per page.</p><ul><li>Value ranges from 1 to 100.</li><li>Default value: 20.</li></ul>
 * @method integer getOffset() Obtain <p>Pagination offset. Default value: 0. Value: Multiple of Limit. Calculation formula: offset=limit*(page number-1).</p>
 * @method void setOffset(integer $Offset) Set <p>Pagination offset. Default value: 0. Value: Multiple of Limit. Calculation formula: offset=limit*(page number-1).</p>
 * @method array getFilters() Obtain <p>Set the log filtering field to filter and return logs that meet a specified condition.</p>
 * @method void setFilters(array $Filters) Set <p>Set the log filtering field to filter and return logs that meet a specified condition.</p>
 * @method string getLogSubType() Obtain <p>Log subcategory.</p><p>Enumeration value:</p><ul><li>write: Write logs.</li><li>read: Read logs.</li><li>all: Read/write logs.</li></ul>
 * @method void setLogSubType(string $LogSubType) Set <p>Log subcategory.</p><p>Enumeration value:</p><ul><li>write: Write logs.</li><li>read: Read logs.</li><li>all: Read/write logs.</li></ul>
 * @method string getLogSwitch() Obtain <p>Log switch.</p><p>Enumeration value:</p><ul><li>on: Enable</li><li>off: Disable</li></ul><p>Default value: off</p>
 * @method void setLogSwitch(string $LogSwitch) Set <p>Log switch.</p><p>Enumeration value:</p><ul><li>on: Enable</li><li>off: Disable</li></ul><p>Default value: off</p>
 */
class DescribeLogInstanceListRequest extends AbstractModel
{
    /**
     * @var string <p>Log type.</p><p>Enumeration value:</p><ul><li>auditLog: Audit log.</li></ul>
     */
    public $LogType;

    /**
     * @var integer <p>Size of the output task list per page.</p><ul><li>Value ranges from 1 to 100.</li><li>Default value: 20.</li></ul>
     */
    public $Limit;

    /**
     * @var integer <p>Pagination offset. Default value: 0. Value: Multiple of Limit. Calculation formula: offset=limit*(page number-1).</p>
     */
    public $Offset;

    /**
     * @var array <p>Set the log filtering field to filter and return logs that meet a specified condition.</p>
     */
    public $Filters;

    /**
     * @var string <p>Log subcategory.</p><p>Enumeration value:</p><ul><li>write: Write logs.</li><li>read: Read logs.</li><li>all: Read/write logs.</li></ul>
     */
    public $LogSubType;

    /**
     * @var string <p>Log switch.</p><p>Enumeration value:</p><ul><li>on: Enable</li><li>off: Disable</li></ul><p>Default value: off</p>
     */
    public $LogSwitch;

    /**
     * @param string $LogType <p>Log type.</p><p>Enumeration value:</p><ul><li>auditLog: Audit log.</li></ul>
     * @param integer $Limit <p>Size of the output task list per page.</p><ul><li>Value ranges from 1 to 100.</li><li>Default value: 20.</li></ul>
     * @param integer $Offset <p>Pagination offset. Default value: 0. Value: Multiple of Limit. Calculation formula: offset=limit*(page number-1).</p>
     * @param array $Filters <p>Set the log filtering field to filter and return logs that meet a specified condition.</p>
     * @param string $LogSubType <p>Log subcategory.</p><p>Enumeration value:</p><ul><li>write: Write logs.</li><li>read: Read logs.</li><li>all: Read/write logs.</li></ul>
     * @param string $LogSwitch <p>Log switch.</p><p>Enumeration value:</p><ul><li>on: Enable</li><li>off: Disable</li></ul><p>Default value: off</p>
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
        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("LogSubType",$param) and $param["LogSubType"] !== null) {
            $this->LogSubType = $param["LogSubType"];
        }

        if (array_key_exists("LogSwitch",$param) and $param["LogSwitch"] !== null) {
            $this->LogSwitch = $param["LogSwitch"];
        }
    }
}
