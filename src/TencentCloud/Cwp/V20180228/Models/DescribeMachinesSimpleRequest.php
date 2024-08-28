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
 * DescribeMachinesSimple request structure.
 *
 * @method string getMachineType() Obtain Type of the machine's zone
CVM: Cloud Virtual Machine
BM: BM
ECM: Edge Computing Machine
LH: Lighthouse
Other: Hybrid Cloud Zone
 * @method void setMachineType(string $MachineType) Set Type of the machine's zone
CVM: Cloud Virtual Machine
BM: BM
ECM: Edge Computing Machine
LH: Lighthouse
Other: Hybrid Cloud Zone
 * @method string getMachineRegion() Obtain Machine region. For example, ap-guangzhou and ap-shanghai.
 * @method void setMachineRegion(string $MachineRegion) Set Machine region. For example, ap-guangzhou and ap-shanghai.
 * @method integer getLimit() Obtain Number of entries to be returned. Default value: 10. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of entries to be returned. Default value: 10. Maximum value: 100.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method array getFilters() Obtain Filtering criteria
<li>Keywords - String - required: no - keywords for querying </li>
<li>Version - String required: no - current protection edition ( PRO_VERSION: Pro Edition | BASIC_VERSION: Basic Edition | Flagship: Ultimate Edition | ProtectedMachines: Pro + Ultimate Editions | UnFlagship: Non-Ultimate Edition | PRO_POST_PAY: Pro Edition in pay-as-you-go mode | PRO_PRE_PAY: Pro Edition in monthly subscription mode)</li>
<li>TagId - String - required: no - tag ID </li>
 * @method void setFilters(array $Filters) Set Filtering criteria
<li>Keywords - String - required: no - keywords for querying </li>
<li>Version - String required: no - current protection edition ( PRO_VERSION: Pro Edition | BASIC_VERSION: Basic Edition | Flagship: Ultimate Edition | ProtectedMachines: Pro + Ultimate Editions | UnFlagship: Non-Ultimate Edition | PRO_POST_PAY: Pro Edition in pay-as-you-go mode | PRO_PRE_PAY: Pro Edition in monthly subscription mode)</li>
<li>TagId - String - required: no - tag ID </li>
 * @method array getProjectIds() Obtain ID list of businesses to which machines belong
 * @method void setProjectIds(array $ProjectIds) Set ID list of businesses to which machines belong
 */
class DescribeMachinesSimpleRequest extends AbstractModel
{
    /**
     * @var string Type of the machine's zone
CVM: Cloud Virtual Machine
BM: BM
ECM: Edge Computing Machine
LH: Lighthouse
Other: Hybrid Cloud Zone
     */
    public $MachineType;

    /**
     * @var string Machine region. For example, ap-guangzhou and ap-shanghai.
     */
    public $MachineRegion;

    /**
     * @var integer Number of entries to be returned. Default value: 10. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var array Filtering criteria
<li>Keywords - String - required: no - keywords for querying </li>
<li>Version - String required: no - current protection edition ( PRO_VERSION: Pro Edition | BASIC_VERSION: Basic Edition | Flagship: Ultimate Edition | ProtectedMachines: Pro + Ultimate Editions | UnFlagship: Non-Ultimate Edition | PRO_POST_PAY: Pro Edition in pay-as-you-go mode | PRO_PRE_PAY: Pro Edition in monthly subscription mode)</li>
<li>TagId - String - required: no - tag ID </li>
     */
    public $Filters;

    /**
     * @var array ID list of businesses to which machines belong
     */
    public $ProjectIds;

    /**
     * @param string $MachineType Type of the machine's zone
CVM: Cloud Virtual Machine
BM: BM
ECM: Edge Computing Machine
LH: Lighthouse
Other: Hybrid Cloud Zone
     * @param string $MachineRegion Machine region. For example, ap-guangzhou and ap-shanghai.
     * @param integer $Limit Number of entries to be returned. Default value: 10. Maximum value: 100.
     * @param integer $Offset Offset. Default value: 0.
     * @param array $Filters Filtering criteria
<li>Keywords - String - required: no - keywords for querying </li>
<li>Version - String required: no - current protection edition ( PRO_VERSION: Pro Edition | BASIC_VERSION: Basic Edition | Flagship: Ultimate Edition | ProtectedMachines: Pro + Ultimate Editions | UnFlagship: Non-Ultimate Edition | PRO_POST_PAY: Pro Edition in pay-as-you-go mode | PRO_PRE_PAY: Pro Edition in monthly subscription mode)</li>
<li>TagId - String - required: no - tag ID </li>
     * @param array $ProjectIds ID list of businesses to which machines belong
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
