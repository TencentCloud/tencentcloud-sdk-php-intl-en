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
 * @method array getAreaIds() Obtain Region ID
 * @method void setAreaIds(array $AreaIds) Set Region ID
 * @method array getInstanceStatuses() Obtain Instance status (1: creating; 2: running; 3: exceptional; 4: restarting; 5: stopping; 6: stopped; 7: terminating; 8: terminated)
 * @method void setInstanceStatuses(array $InstanceStatuses) Set Instance status (1: creating; 2: running; 3: exceptional; 4: restarting; 5: stopping; 6: stopped; 7: terminating; 8: terminated)
 * @method array getInstanceIds() Obtain Instance ID
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID
 * @method array getFilters() Obtain Filter parameter
 * @method void setFilters(array $Filters) Set Filter parameter
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
     * @var array Region ID
     */
    public $AreaIds;

    /**
     * @var array Instance status (1: creating; 2: running; 3: exceptional; 4: restarting; 5: stopping; 6: stopped; 7: terminating; 8: terminated)
     */
    public $InstanceStatuses;

    /**
     * @var array Instance ID
     */
    public $InstanceIds;

    /**
     * @var array Filter parameter
     */
    public $Filters;

    /**
     * @param array $ChargeStatuses Billing status
     * @param array $ChargeTypes Billing type
     * @param integer $Limit Pagination limit
     * @param integer $Offset Pagination offset
     * @param array $AreaIds Region ID
     * @param array $InstanceStatuses Instance status (1: creating; 2: running; 3: exceptional; 4: restarting; 5: stopping; 6: stopped; 7: terminating; 8: terminated)
     * @param array $InstanceIds Instance ID
     * @param array $Filters Filter parameter
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
    }
}
