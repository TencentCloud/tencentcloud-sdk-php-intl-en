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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMachines request structure.
 *
 * @method string getMachineType() Obtain Server type.
<li>CVM: CVM</li>
<li>BM: BM</li>
 * @method void setMachineType(string $MachineType) Set Server type.
<li>CVM: CVM</li>
<li>BM: BM</li>
 * @method string getMachineRegion() Obtain Server region, such as ap-guangzhou or ap-shanghai
 * @method void setMachineRegion(string $MachineRegion) Set Server region, such as ap-guangzhou or ap-shanghai
 * @method integer getLimit() Obtain Number of results to be returned. Default value: 10. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of results to be returned. Default value: 10. Maximum value: 100.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method array getFilters() Obtain Filter.
<li>Keywords - String - Required: no - Query keywords </li>
<li>Status - String - Required: no - CWP client status (valid values: OFFLINE, ONLINE, UNINSTALLED)</li>
<li>Version - String - Required: no - Current CWP version (valid values: PRO_VERSION, BASIC_VERSION)</li>
Each filter can have only one value but does not support "OR" queries with multiple values
 * @method void setFilters(array $Filters) Set Filter.
<li>Keywords - String - Required: no - Query keywords </li>
<li>Status - String - Required: no - CWP client status (valid values: OFFLINE, ONLINE, UNINSTALLED)</li>
<li>Version - String - Required: no - Current CWP version (valid values: PRO_VERSION, BASIC_VERSION)</li>
Each filter can have only one value but does not support "OR" queries with multiple values
 */
class DescribeMachinesRequest extends AbstractModel
{
    /**
     * @var string Server type.
<li>CVM: CVM</li>
<li>BM: BM</li>
     */
    public $MachineType;

    /**
     * @var string Server region, such as ap-guangzhou or ap-shanghai
     */
    public $MachineRegion;

    /**
     * @var integer Number of results to be returned. Default value: 10. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var array Filter.
<li>Keywords - String - Required: no - Query keywords </li>
<li>Status - String - Required: no - CWP client status (valid values: OFFLINE, ONLINE, UNINSTALLED)</li>
<li>Version - String - Required: no - Current CWP version (valid values: PRO_VERSION, BASIC_VERSION)</li>
Each filter can have only one value but does not support "OR" queries with multiple values
     */
    public $Filters;

    /**
     * @param string $MachineType Server type.
<li>CVM: CVM</li>
<li>BM: BM</li>
     * @param string $MachineRegion Server region, such as ap-guangzhou or ap-shanghai
     * @param integer $Limit Number of results to be returned. Default value: 10. Maximum value: 100.
     * @param integer $Offset Offset. Default value: 0.
     * @param array $Filters Filter.
<li>Keywords - String - Required: no - Query keywords </li>
<li>Status - String - Required: no - CWP client status (valid values: OFFLINE, ONLINE, UNINSTALLED)</li>
<li>Version - String - Required: no - Current CWP version (valid values: PRO_VERSION, BASIC_VERSION)</li>
Each filter can have only one value but does not support "OR" queries with multiple values
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
        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("MachineRegion",$param) and $param["MachineRegion"] !== null) {
            $this->MachineRegion = $param["MachineRegion"];
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
    }
}
