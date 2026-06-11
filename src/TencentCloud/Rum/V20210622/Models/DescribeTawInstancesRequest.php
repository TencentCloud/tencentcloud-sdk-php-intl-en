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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTawInstances request structure.
 *
 * @method array getChargeStatuses() Obtain Billing status
 * @method void setChargeStatuses(array $ChargeStatuses) Set Billing status
 * @method array getChargeTypes() Obtain Billing type
 * @method void setChargeTypes(array $ChargeTypes) Set Billing type
 * @method integer getLimit() Obtain Pagination limit
 * @method void setLimit(integer $Limit) Set Pagination limit
 * @method integer getOffset() Obtain Pagination offset
 * @method void setOffset(integer $Offset) Set Pagination offset
 * @method array getAreaIds() Obtain Region Id
 * @method void setAreaIds(array $AreaIds) Set Region Id
 * @method array getInstanceStatuses() Obtain Instance status (1=creating, 2=running, 3=abnormal, 4=restarting, 5=stopping, 6=stopped, 7=being destroyed, 8=terminated). Deprecated. Please note in Filters.
 * @method void setInstanceStatuses(array $InstanceStatuses) Set Instance status (1=creating, 2=running, 3=abnormal, 4=restarting, 5=stopping, 6=stopped, 7=being destroyed, 8=terminated). Deprecated. Please note in Filters.
 * @method array getInstanceIds() Obtain Instance Id, deprecated. Please note in Filters.
 * @method void setInstanceIds(array $InstanceIds) Set Instance Id, deprecated. Please note in Filters.
 * @method array getFilters() Obtain Filter parameters; In demo mode, pass {"Name": "IsDemo", "Values":["1"]}.
 * @method void setFilters(array $Filters) Set Filter parameters; In demo mode, pass {"Name": "IsDemo", "Values":["1"]}.
 * @method integer getIsDemo() Obtain Deprecated. For demo mode, please note in Filters.
 * @method void setIsDemo(integer $IsDemo) Set Deprecated. For demo mode, please note in Filters.
 */
class DescribeTawInstancesRequest extends AbstractModel
{
    /**
     * @var array Billing status
     */
    public $ChargeStatuses;

    /**
     * @var array Billing type
     */
    public $ChargeTypes;

    /**
     * @var integer Pagination limit
     */
    public $Limit;

    /**
     * @var integer Pagination offset
     */
    public $Offset;

    /**
     * @var array Region Id
     */
    public $AreaIds;

    /**
     * @var array Instance status (1=creating, 2=running, 3=abnormal, 4=restarting, 5=stopping, 6=stopped, 7=being destroyed, 8=terminated). Deprecated. Please note in Filters.
     * @deprecated
     */
    public $InstanceStatuses;

    /**
     * @var array Instance Id, deprecated. Please note in Filters.
     * @deprecated
     */
    public $InstanceIds;

    /**
     * @var array Filter parameters; In demo mode, pass {"Name": "IsDemo", "Values":["1"]}.
     */
    public $Filters;

    /**
     * @var integer Deprecated. For demo mode, please note in Filters.
     * @deprecated
     */
    public $IsDemo;

    /**
     * @param array $ChargeStatuses Billing status
     * @param array $ChargeTypes Billing type
     * @param integer $Limit Pagination limit
     * @param integer $Offset Pagination offset
     * @param array $AreaIds Region Id
     * @param array $InstanceStatuses Instance status (1=creating, 2=running, 3=abnormal, 4=restarting, 5=stopping, 6=stopped, 7=being destroyed, 8=terminated). Deprecated. Please note in Filters.
     * @param array $InstanceIds Instance Id, deprecated. Please note in Filters.
     * @param array $Filters Filter parameters; In demo mode, pass {"Name": "IsDemo", "Values":["1"]}.
     * @param integer $IsDemo Deprecated. For demo mode, please note in Filters.
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
        if (array_key_exists("ChargeStatuses",$param) and $param["ChargeStatuses"] !== null) {
            $this->ChargeStatuses = $param["ChargeStatuses"];
        }

        if (array_key_exists("ChargeTypes",$param) and $param["ChargeTypes"] !== null) {
            $this->ChargeTypes = $param["ChargeTypes"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("AreaIds",$param) and $param["AreaIds"] !== null) {
            $this->AreaIds = $param["AreaIds"];
        }

        if (array_key_exists("InstanceStatuses",$param) and $param["InstanceStatuses"] !== null) {
            $this->InstanceStatuses = $param["InstanceStatuses"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("IsDemo",$param) and $param["IsDemo"] !== null) {
            $this->IsDemo = $param["IsDemo"];
        }
    }
}
