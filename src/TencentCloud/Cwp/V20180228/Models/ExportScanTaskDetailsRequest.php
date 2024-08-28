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
 * ExportScanTaskDetails request structure.
 *
 * @method integer getTaskId() Obtain Task ID for this detection (different from the ID of the task for exporting the detection Excel file in the input parameters)
 * @method void setTaskId(integer $TaskId) Set Task ID for this detection (different from the ID of the task for exporting the detection Excel file in the input parameters)
 * @method string getModuleType() Obtain Module type. Malware: Trojan; Vul: vulnerability; Baseline: baseline.
 * @method void setModuleType(string $ModuleType) Set Module type. Malware: Trojan; Vul: vulnerability; Baseline: baseline.
 * @method array getFilters() Obtain Filter parameter: ipOrAlias (server name/IP address)
 * @method void setFilters(array $Filters) Set Filter parameter: ipOrAlias (server name/IP address)
 */
class ExportScanTaskDetailsRequest extends AbstractModel
{
    /**
     * @var integer Task ID for this detection (different from the ID of the task for exporting the detection Excel file in the input parameters)
     */
    public $TaskId;

    /**
     * @var string Module type. Malware: Trojan; Vul: vulnerability; Baseline: baseline.
     */
    public $ModuleType;

    /**
     * @var array Filter parameter: ipOrAlias (server name/IP address)
     */
    public $Filters;

    /**
     * @param integer $TaskId Task ID for this detection (different from the ID of the task for exporting the detection Excel file in the input parameters)
     * @param string $ModuleType Module type. Malware: Trojan; Vul: vulnerability; Baseline: baseline.
     * @param array $Filters Filter parameter: ipOrAlias (server name/IP address)
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ModuleType",$param) and $param["ModuleType"] !== null) {
            $this->ModuleType = $param["ModuleType"];
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
