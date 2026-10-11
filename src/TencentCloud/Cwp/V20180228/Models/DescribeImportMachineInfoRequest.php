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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImportMachineInfo request structure.
 *
 * @method array getMachineList() Obtain Array of the server's private IP (default) / server name / server ID (maximum: 1000 entries)
 * @method void setMachineList(array $MachineList) Set Array of the server's private IP (default) / server name / server ID (maximum: 1000 entries)
 * @method string getImportType() Obtain Data type of batch import. Select one from Ip, Name, and Id.
 * @method void setImportType(string $ImportType) Set Data type of batch import. Select one from Ip, Name, and Id.
 * @method boolean getIsQueryProMachine() Obtain This parameter is discarded.
 * @method void setIsQueryProMachine(boolean $IsQueryProMachine) Set This parameter is discarded.
 * @method array getFilters() Obtain Filter criteria. <li>Version - String - Required: no - Current protection edition. Valid values: PRO_VERSION (professional edition), BASIC_VERSION (basic edition), Flagship (flagship edition), ProtectedMachines (professional edition + flagship edition), BASIC_PROPOST_GENERAL_DISCOUNT (lightweight edition + professional edition in pay-as-you-go mode + basic edition), and UnFlagship (professional edition in prepaid mode + professional edition in postpaid mode + basic edition + lightweight edition).</li>
 * @method void setFilters(array $Filters) Set Filter criteria. <li>Version - String - Required: no - Current protection edition. Valid values: PRO_VERSION (professional edition), BASIC_VERSION (basic edition), Flagship (flagship edition), ProtectedMachines (professional edition + flagship edition), BASIC_PROPOST_GENERAL_DISCOUNT (lightweight edition + professional edition in pay-as-you-go mode + basic edition), and UnFlagship (professional edition in prepaid mode + professional edition in postpaid mode + basic edition + lightweight edition).</li>
 */
class DescribeImportMachineInfoRequest extends AbstractModel
{
    /**
     * @var array Array of the server's private IP (default) / server name / server ID (maximum: 1000 entries)
     */
    public $MachineList;

    /**
     * @var string Data type of batch import. Select one from Ip, Name, and Id.
     */
    public $ImportType;

    /**
     * @var boolean This parameter is discarded.
     */
    public $IsQueryProMachine;

    /**
     * @var array Filter criteria. <li>Version - String - Required: no - Current protection edition. Valid values: PRO_VERSION (professional edition), BASIC_VERSION (basic edition), Flagship (flagship edition), ProtectedMachines (professional edition + flagship edition), BASIC_PROPOST_GENERAL_DISCOUNT (lightweight edition + professional edition in pay-as-you-go mode + basic edition), and UnFlagship (professional edition in prepaid mode + professional edition in postpaid mode + basic edition + lightweight edition).</li>
     */
    public $Filters;

    /**
     * @param array $MachineList Array of the server's private IP (default) / server name / server ID (maximum: 1000 entries)
     * @param string $ImportType Data type of batch import. Select one from Ip, Name, and Id.
     * @param boolean $IsQueryProMachine This parameter is discarded.
     * @param array $Filters Filter criteria. <li>Version - String - Required: no - Current protection edition. Valid values: PRO_VERSION (professional edition), BASIC_VERSION (basic edition), Flagship (flagship edition), ProtectedMachines (professional edition + flagship edition), BASIC_PROPOST_GENERAL_DISCOUNT (lightweight edition + professional edition in pay-as-you-go mode + basic edition), and UnFlagship (professional edition in prepaid mode + professional edition in postpaid mode + basic edition + lightweight edition).</li>
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
        if (array_key_exists("MachineList",$param) and $param["MachineList"] !== null) {
            $this->MachineList = $param["MachineList"];
        }

        if (array_key_exists("ImportType",$param) and $param["ImportType"] !== null) {
            $this->ImportType = $param["ImportType"];
        }

        if (array_key_exists("IsQueryProMachine",$param) and $param["IsQueryProMachine"] !== null) {
            $this->IsQueryProMachine = $param["IsQueryProMachine"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
