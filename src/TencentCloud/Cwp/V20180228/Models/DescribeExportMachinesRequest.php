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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeExportMachines request structure.
 *
 * @method string getMachineType() Obtain CVM type
<li>CVM: Represent a virtual machine</li>
<li>BM: Represent a physical machine</li>
 * @method void setMachineType(string $MachineType) Set CVM type
<li>CVM: Represent a virtual machine</li>
<li>BM: Represent a physical machine</li>
 * @method string getMachineRegion() Obtain Machine region. Example: ap-guangzhou, ap-shanghai
 * @method void setMachineRegion(string $MachineRegion) Set Machine region. Example: ap-guangzhou, ap-shanghai
 * @method integer getLimit() Obtain Quantity of returns. It is 10 by default, and the maximum value is 100.
 * @method void setLimit(integer $Limit) Set Quantity of returns. It is 10 by default, and the maximum value is 100.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method array getFilters() Obtain Filter criteria
<li>Keywords - String - required: no - keyword for query </li>
<li>Status - String - required: no - client online status (OFFLINE: offline | ONLINE: online | UNINSTALLED: not installed)</li>
<li>Version - String - required: no - current protection version (PRO_VERSION: Pro Edition | BASIC_VERSION: Basic Edition)</li>
Only one value is allowed for each filter criterion. Multiple values with the OR relationship are not supported for queries.
 * @method void setFilters(array $Filters) Set Filter criteria
<li>Keywords - String - required: no - keyword for query </li>
<li>Status - String - required: no - client online status (OFFLINE: offline | ONLINE: online | UNINSTALLED: not installed)</li>
<li>Version - String - required: no - current protection version (PRO_VERSION: Pro Edition | BASIC_VERSION: Basic Edition)</li>
Only one value is allowed for each filter criterion. Multiple values with the OR relationship are not supported for queries.
 * @method array getProjectIds() Obtain ID List of Businesses to which machines belong
 * @method void setProjectIds(array $ProjectIds) Set ID List of Businesses to which machines belong
 */
class DescribeExportMachinesRequest extends AbstractModel
{
    /**
     * @var string CVM type
<li>CVM: Represent a virtual machine</li>
<li>BM: Represent a physical machine</li>
     */
    public $MachineType;

    /**
     * @var string Machine region. Example: ap-guangzhou, ap-shanghai
     */
    public $MachineRegion;

    /**
     * @var integer Quantity of returns. It is 10 by default, and the maximum value is 100.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var array Filter criteria
<li>Keywords - String - required: no - keyword for query </li>
<li>Status - String - required: no - client online status (OFFLINE: offline | ONLINE: online | UNINSTALLED: not installed)</li>
<li>Version - String - required: no - current protection version (PRO_VERSION: Pro Edition | BASIC_VERSION: Basic Edition)</li>
Only one value is allowed for each filter criterion. Multiple values with the OR relationship are not supported for queries.
     */
    public $Filters;

    /**
     * @var array ID List of Businesses to which machines belong
     */
    public $ProjectIds;

    /**
     * @param string $MachineType CVM type
<li>CVM: Represent a virtual machine</li>
<li>BM: Represent a physical machine</li>
     * @param string $MachineRegion Machine region. Example: ap-guangzhou, ap-shanghai
     * @param integer $Limit Quantity of returns. It is 10 by default, and the maximum value is 100.
     * @param integer $Offset Offset. Default value: 0.
     * @param array $Filters Filter criteria
<li>Keywords - String - required: no - keyword for query </li>
<li>Status - String - required: no - client online status (OFFLINE: offline | ONLINE: online | UNINSTALLED: not installed)</li>
<li>Version - String - required: no - current protection version (PRO_VERSION: Pro Edition | BASIC_VERSION: Basic Edition)</li>
Only one value is allowed for each filter criterion. Multiple values with the OR relationship are not supported for queries.
     * @param array $ProjectIds ID List of Businesses to which machines belong
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

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }
    }
}
