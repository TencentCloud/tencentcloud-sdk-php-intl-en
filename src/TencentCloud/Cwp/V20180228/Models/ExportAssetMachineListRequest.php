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
 * ExportAssetMachineList request structure.
 *
 * @method array getFilters() Obtain Filter criteria
<li>IP - String - Required: No - Host IP</li>
<li>MachineName - String - Required: No - hostname</li>
<li>InstanceID - string - Required: No - Instance ID</li>
<li>OsType - String - required: no - Windows or Linux</li>
<li>CpuLoad - Int - required: no - 
0: 0% or unknown; 1: 0% to 20%
2: 20%～50%  3: 50%～80%
4: 80%～100%</li>
<li>DiskLoad - Int - required: no - 
0: 0% or unknown; 1: 0% to 20%
2: 20%～50%  3: 50%～80%
4: 80%～100%</li>
<li>MemLoad - Int - required: no - 
0: 0% or unknown; 1: 0% to 20%
2: 20%～50%  3: 50%～80%
4: 80%～100%</li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>IP - String - Required: No - Host IP</li>
<li>MachineName - String - Required: No - hostname</li>
<li>InstanceID - string - Required: No - Instance ID</li>
<li>OsType - String - required: no - Windows or Linux</li>
<li>CpuLoad - Int - required: no - 
0: 0% or unknown; 1: 0% to 20%
2: 20%～50%  3: 50%～80%
4: 80%～100%</li>
<li>DiskLoad - Int - required: no - 
0: 0% or unknown; 1: 0% to 20%
2: 20%～50%  3: 50%～80%
4: 80%～100%</li>
<li>MemLoad - Int - required: no - 
0: 0% or unknown; 1: 0% to 20%
2: 20%～50%  3: 50%～80%
4: 80%～100%</li>
 * @method string getOrder() Obtain Sorting method: asc for ascending order or desc for descending order
 * @method void setOrder(string $Order) Set Sorting method: asc for ascending order or desc for descending order
 * @method string getBy() Obtain Optional sorting method [FirstTime|PartitionCount]
 * @method void setBy(string $By) Set Optional sorting method [FirstTime|PartitionCount]
 */
class ExportAssetMachineListRequest extends AbstractModel
{
    /**
     * @var array Filter criteria
<li>IP - String - Required: No - Host IP</li>
<li>MachineName - String - Required: No - hostname</li>
<li>InstanceID - string - Required: No - Instance ID</li>
<li>OsType - String - required: no - Windows or Linux</li>
<li>CpuLoad - Int - required: no - 
0: 0% or unknown; 1: 0% to 20%
2: 20%～50%  3: 50%～80%
4: 80%～100%</li>
<li>DiskLoad - Int - required: no - 
0: 0% or unknown; 1: 0% to 20%
2: 20%～50%  3: 50%～80%
4: 80%～100%</li>
<li>MemLoad - Int - required: no - 
0: 0% or unknown; 1: 0% to 20%
2: 20%～50%  3: 50%～80%
4: 80%～100%</li>
     */
    public $Filters;

    /**
     * @var string Sorting method: asc for ascending order or desc for descending order
     */
    public $Order;

    /**
     * @var string Optional sorting method [FirstTime|PartitionCount]
     */
    public $By;

    /**
     * @param array $Filters Filter criteria
<li>IP - String - Required: No - Host IP</li>
<li>MachineName - String - Required: No - hostname</li>
<li>InstanceID - string - Required: No - Instance ID</li>
<li>OsType - String - required: no - Windows or Linux</li>
<li>CpuLoad - Int - required: no - 
0: 0% or unknown; 1: 0% to 20%
2: 20%～50%  3: 50%～80%
4: 80%～100%</li>
<li>DiskLoad - Int - required: no - 
0: 0% or unknown; 1: 0% to 20%
2: 20%～50%  3: 50%～80%
4: 80%～100%</li>
<li>MemLoad - Int - required: no - 
0: 0% or unknown; 1: 0% to 20%
2: 20%～50%  3: 50%～80%
4: 80%～100%</li>
     * @param string $Order Sorting method: asc for ascending order or desc for descending order
     * @param string $By Optional sorting method [FirstTime|PartitionCount]
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
