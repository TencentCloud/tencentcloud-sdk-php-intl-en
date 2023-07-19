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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListTriggers request structure.
 *
 * @method string getFunctionName() Obtain Function name
 * @method void setFunctionName(string $FunctionName) Set Function name
 * @method string getNamespace() Obtain Namespace. Default value: default
 * @method void setNamespace(string $Namespace) Set Namespace. Default value: default
 * @method integer getOffset() Obtain Data offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Data offset. Default value: 0
 * @method integer getLimit() Obtain Number of results to be returned. Default value: 20
 * @method void setLimit(integer $Limit) Set Number of results to be returned. Default value: 20
 * @method string getOrderBy() Obtain Indicates by which field to sort the returned results. Valid values: add_time, mod_time. Default value: mod_time
 * @method void setOrderBy(string $OrderBy) Set Indicates by which field to sort the returned results. Valid values: add_time, mod_time. Default value: mod_time
 * @method string getOrder() Obtain Indicates whether the returned results are sorted in ascending or descending order. Valid values: ASC, DESC. Default value: DESC
 * @method void setOrder(string $Order) Set Indicates whether the returned results are sorted in ascending or descending order. Valid values: ASC, DESC. Default value: DESC
 * @method array getFilters() Obtain * Qualifier: Version/Alias of trigger function 
*TriggerName: Name of the trigger 
*Description: Function trigger description
 * @method void setFilters(array $Filters) Set * Qualifier: Version/Alias of trigger function 
*TriggerName: Name of the trigger 
*Description: Function trigger description
 */
class ListTriggersRequest extends AbstractModel
{
    /**
     * @var string Function name
     */
    public $FunctionName;

    /**
     * @var string Namespace. Default value: default
     */
    public $Namespace;

    /**
     * @var integer Data offset. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Number of results to be returned. Default value: 20
     */
    public $Limit;

    /**
     * @var string Indicates by which field to sort the returned results. Valid values: add_time, mod_time. Default value: mod_time
     */
    public $OrderBy;

    /**
     * @var string Indicates whether the returned results are sorted in ascending or descending order. Valid values: ASC, DESC. Default value: DESC
     */
    public $Order;

    /**
     * @var array * Qualifier: Version/Alias of trigger function 
*TriggerName: Name of the trigger 
*Description: Function trigger description
     */
    public $Filters;

    /**
     * @param string $FunctionName Function name
     * @param string $Namespace Namespace. Default value: default
     * @param integer $Offset Data offset. Default value: 0
     * @param integer $Limit Number of results to be returned. Default value: 20
     * @param string $OrderBy Indicates by which field to sort the returned results. Valid values: add_time, mod_time. Default value: mod_time
     * @param string $Order Indicates whether the returned results are sorted in ascending or descending order. Valid values: ASC, DESC. Default value: DESC
     * @param array $Filters * Qualifier: Version/Alias of trigger function 
*TriggerName: Name of the trigger 
*Description: Function trigger description
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
        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
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
