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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAuditInstanceList request structure.
 *
 * @method integer getAuditSwitch() Obtain Whether audit is enabled for the instance. Valid values: 1 - Enabled; 0 - Disabled.
 * @method void setAuditSwitch(integer $AuditSwitch) Set Whether audit is enabled for the instance. Valid values: 1 - Enabled; 0 - Disabled.
 * @method array getFilters() Obtain Filter conditions for querying the instance list.
 * @method void setFilters(array $Filters) Set Filter conditions for querying the instance list.
 * @method integer getAuditMode() Obtain Audit rule mode for the instance. Valid values: 1 - Rule-based audit; 0 - Full audit.
 * @method void setAuditMode(integer $AuditMode) Set Audit rule mode for the instance. Valid values: 1 - Rule-based audit; 0 - Full audit.
 * @method integer getLimit() Obtain Number of entries to return per request. Default value: 30. Maximum value: 20000.
 * @method void setLimit(integer $Limit) Set Number of entries to return per request. Default value: 30. Maximum value: 20000.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 */
class DescribeAuditInstanceListRequest extends AbstractModel
{
    /**
     * @var integer Whether audit is enabled for the instance. Valid values: 1 - Enabled; 0 - Disabled.
     */
    public $AuditSwitch;

    /**
     * @var array Filter conditions for querying the instance list.
     */
    public $Filters;

    /**
     * @var integer Audit rule mode for the instance. Valid values: 1 - Rule-based audit; 0 - Full audit.
     */
    public $AuditMode;

    /**
     * @var integer Number of entries to return per request. Default value: 30. Maximum value: 20000.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @param integer $AuditSwitch Whether audit is enabled for the instance. Valid values: 1 - Enabled; 0 - Disabled.
     * @param array $Filters Filter conditions for querying the instance list.
     * @param integer $AuditMode Audit rule mode for the instance. Valid values: 1 - Rule-based audit; 0 - Full audit.
     * @param integer $Limit Number of entries to return per request. Default value: 30. Maximum value: 20000.
     * @param integer $Offset Offset. Default value: 0.
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
