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
 * DescribeAuditInstanceList request structure.
 *
 * @method integer getAuditSwitch() Obtain Enabling status of instance audit. 1 - enabled; 0 - not enabled.
 * @method void setAuditSwitch(integer $AuditSwitch) Set Enabling status of instance audit. 1 - enabled; 0 - not enabled.
 * @method array getFilters() Obtain Filtering conditions for querying the instance list.
 * @method void setFilters(array $Filters) Set Filtering conditions for querying the instance list.
 * @method integer getAuditMode() Obtain Instance audit rule mode. 1 - rule-based audit; 0 - full audit.
 * @method void setAuditMode(integer $AuditMode) Set Instance audit rule mode. 1 - rule-based audit; 0 - full audit.
 * @method integer getLimit() Obtain Number of entries returned per request. The default value is 30, and the maximum value is 100.
 * @method void setLimit(integer $Limit) Set Number of entries returned per request. The default value is 30, and the maximum value is 100.
 * @method integer getOffset() Obtain Offset. The default value is 0.
 * @method void setOffset(integer $Offset) Set Offset. The default value is 0.
 */
class DescribeAuditInstanceListRequest extends AbstractModel
{
    /**
     * @var integer Enabling status of instance audit. 1 - enabled; 0 - not enabled.
     */
    public $AuditSwitch;

    /**
     * @var array Filtering conditions for querying the instance list.
     */
    public $Filters;

    /**
     * @var integer Instance audit rule mode. 1 - rule-based audit; 0 - full audit.
     */
    public $AuditMode;

    /**
     * @var integer Number of entries returned per request. The default value is 30, and the maximum value is 100.
     */
    public $Limit;

    /**
     * @var integer Offset. The default value is 0.
     */
    public $Offset;

    /**
     * @param integer $AuditSwitch Enabling status of instance audit. 1 - enabled; 0 - not enabled.
     * @param array $Filters Filtering conditions for querying the instance list.
     * @param integer $AuditMode Instance audit rule mode. 1 - rule-based audit; 0 - full audit.
     * @param integer $Limit Number of entries returned per request. The default value is 30, and the maximum value is 100.
     * @param integer $Offset Offset. The default value is 0.
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
        if (array_key_exists("AuditSwitch",$param) and $param["AuditSwitch"] !== null) {
            $this->AuditSwitch = $param["AuditSwitch"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AuditInstanceFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("AuditMode",$param) and $param["AuditMode"] !== null) {
            $this->AuditMode = $param["AuditMode"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
