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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCcnAttachedInstances request structure.
 *
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method integer getLimit() Obtain The returned quantity
 * @method void setLimit(integer $Limit) Set The returned quantity
 * @method array getFilters() Obtain Filter conditions:
<li>`ccn-id` - String - The CCN instance ID. </li>
<li>`instance-type` - String - The associated instance type. </li>
<li>`instance-region` - String - The associated instance region. </li>
<li>`instance-id` - String - The instance ID of the associated instance. </li>
 * @method void setFilters(array $Filters) Set Filter conditions:
<li>`ccn-id` - String - The CCN instance ID. </li>
<li>`instance-type` - String - The associated instance type. </li>
<li>`instance-region` - String - The associated instance region. </li>
<li>`instance-id` - String - The instance ID of the associated instance. </li>
 * @method string getCcnId() Obtain The ID of the CCN instance
 * @method void setCcnId(string $CcnId) Set The ID of the CCN instance
 * @method string getOrderField() Obtain The order field supports `CcnId`, `InstanceType`, `InstanceId`, `InstanceName`, `InstanceRegion`, `AttachedTime`, and `State`.
 * @method void setOrderField(string $OrderField) Set The order field supports `CcnId`, `InstanceType`, `InstanceId`, `InstanceName`, `InstanceRegion`, `AttachedTime`, and `State`.
 * @method string getOrderDirection() Obtain Order methods. Ascending: `ASC`, Descending: `DESC`.
 * @method void setOrderDirection(string $OrderDirection) Set Order methods. Ascending: `ASC`, Descending: `DESC`.
 */
class DescribeCcnAttachedInstancesRequest extends AbstractModel
{
    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var integer The returned quantity
     */
    public $Limit;

    /**
     * @var array Filter conditions:
<li>`ccn-id` - String - The CCN instance ID. </li>
<li>`instance-type` - String - The associated instance type. </li>
<li>`instance-region` - String - The associated instance region. </li>
<li>`instance-id` - String - The instance ID of the associated instance. </li>
     */
    public $Filters;

    /**
     * @var string The ID of the CCN instance
     */
    public $CcnId;

    /**
     * @var string The order field supports `CcnId`, `InstanceType`, `InstanceId`, `InstanceName`, `InstanceRegion`, `AttachedTime`, and `State`.
     */
    public $OrderField;

    /**
     * @var string Order methods. Ascending: `ASC`, Descending: `DESC`.
     */
    public $OrderDirection;

    /**
     * @param integer $Offset Offset
     * @param integer $Limit The returned quantity
     * @param array $Filters Filter conditions:
<li>`ccn-id` - String - The CCN instance ID. </li>
<li>`instance-type` - String - The associated instance type. </li>
<li>`instance-region` - String - The associated instance region. </li>
<li>`instance-id` - String - The instance ID of the associated instance. </li>
     * @param string $CcnId The ID of the CCN instance
     * @param string $OrderField The order field supports `CcnId`, `InstanceType`, `InstanceId`, `InstanceName`, `InstanceRegion`, `AttachedTime`, and `State`.
     * @param string $OrderDirection Order methods. Ascending: `ASC`, Descending: `DESC`.
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }
    }
}
