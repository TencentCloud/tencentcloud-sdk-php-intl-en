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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateHostExportJob request structure.
 *
 * @method array getFilters() Obtain Filters.
<li>`Status` - String - Optional - Agent status. Values: `ALL`; `UNINSTALL` (Not installed); `OFFLINE`, `ONLINE`. Default to `All` if it's not specified. </li>
<li>`HostName` - String - Optional - Server name</li>
<li>`Group - String - Optional - Server group</li>
<li>`HostIP` - String - Optional - Server IP</li>
<li>`HostID - String - Optional - Server ID</li>
<li>`DockerVersion` - String - Optional - Docker version</li>
<li>`MachineType` - String - Optional - Server type. Values: `ALL`; `CVM` (Cloud Virtual Machine); `ECM` (Edge Computing Machine); `LH` (Lighthouse), `BM` (Cloud Bare Metal); `Other` (non-Tencent Cloud server). Default to `ALL` if it's not specified.</li>
<li>`DockerStatus` - String - Optional - Docker installation status. Values: `ALL`; `INSTALL` (Installed); `UNINSTALL` (Not installed)</li>
<li>`ProjectID` - String - Optional - Project ID</li>
<li>`Tag:xxx(tag:key)` - String - Optional - Tag key-value pair; Example: `Filters":[{"Name":"tag:tke-kind","Values":["service"]}]`</li>
 * @method void setFilters(array $Filters) Set Filters.
<li>`Status` - String - Optional - Agent status. Values: `ALL`; `UNINSTALL` (Not installed); `OFFLINE`, `ONLINE`. Default to `All` if it's not specified. </li>
<li>`HostName` - String - Optional - Server name</li>
<li>`Group - String - Optional - Server group</li>
<li>`HostIP` - String - Optional - Server IP</li>
<li>`HostID - String - Optional - Server ID</li>
<li>`DockerVersion` - String - Optional - Docker version</li>
<li>`MachineType` - String - Optional - Server type. Values: `ALL`; `CVM` (Cloud Virtual Machine); `ECM` (Edge Computing Machine); `LH` (Lighthouse), `BM` (Cloud Bare Metal); `Other` (non-Tencent Cloud server). Default to `ALL` if it's not specified.</li>
<li>`DockerStatus` - String - Optional - Docker installation status. Values: `ALL`; `INSTALL` (Installed); `UNINSTALL` (Not installed)</li>
<li>`ProjectID` - String - Optional - Project ID</li>
<li>`Tag:xxx(tag:key)` - String - Optional - Tag key-value pair; Example: `Filters":[{"Name":"tag:tke-kind","Values":["service"]}]`</li>
 * @method integer getLimit() Obtain Offset. Default value: `0`.
 * @method void setLimit(integer $Limit) Set Offset. Default value: `0`.
 * @method integer getOffset() Obtain The number of results to return. Default value: 10. Maximum value: 10,000.
 * @method void setOffset(integer $Offset) Set The number of results to return. Default value: 10. Maximum value: 10,000.
 * @method string getBy() Obtain Sorting field
 * @method void setBy(string $By) Set Sorting field
 * @method string getOrder() Obtain Valid values: `asc`, `desc`.
 * @method void setOrder(string $Order) Set Valid values: `asc`, `desc`.
 * @method array getExportField() Obtain Export field
 * @method void setExportField(array $ExportField) Set Export field
 */
class CreateHostExportJobRequest extends AbstractModel
{
    /**
     * @var array Filters.
<li>`Status` - String - Optional - Agent status. Values: `ALL`; `UNINSTALL` (Not installed); `OFFLINE`, `ONLINE`. Default to `All` if it's not specified. </li>
<li>`HostName` - String - Optional - Server name</li>
<li>`Group - String - Optional - Server group</li>
<li>`HostIP` - String - Optional - Server IP</li>
<li>`HostID - String - Optional - Server ID</li>
<li>`DockerVersion` - String - Optional - Docker version</li>
<li>`MachineType` - String - Optional - Server type. Values: `ALL`; `CVM` (Cloud Virtual Machine); `ECM` (Edge Computing Machine); `LH` (Lighthouse), `BM` (Cloud Bare Metal); `Other` (non-Tencent Cloud server). Default to `ALL` if it's not specified.</li>
<li>`DockerStatus` - String - Optional - Docker installation status. Values: `ALL`; `INSTALL` (Installed); `UNINSTALL` (Not installed)</li>
<li>`ProjectID` - String - Optional - Project ID</li>
<li>`Tag:xxx(tag:key)` - String - Optional - Tag key-value pair; Example: `Filters":[{"Name":"tag:tke-kind","Values":["service"]}]`</li>
     */
    public $Filters;

    /**
     * @var integer Offset. Default value: `0`.
     */
    public $Limit;

    /**
     * @var integer The number of results to return. Default value: 10. Maximum value: 10,000.
     */
    public $Offset;

    /**
     * @var string Sorting field
     */
    public $By;

    /**
     * @var string Valid values: `asc`, `desc`.
     */
    public $Order;

    /**
     * @var array Export field
     */
    public $ExportField;

    /**
     * @param array $Filters Filters.
<li>`Status` - String - Optional - Agent status. Values: `ALL`; `UNINSTALL` (Not installed); `OFFLINE`, `ONLINE`. Default to `All` if it's not specified. </li>
<li>`HostName` - String - Optional - Server name</li>
<li>`Group - String - Optional - Server group</li>
<li>`HostIP` - String - Optional - Server IP</li>
<li>`HostID - String - Optional - Server ID</li>
<li>`DockerVersion` - String - Optional - Docker version</li>
<li>`MachineType` - String - Optional - Server type. Values: `ALL`; `CVM` (Cloud Virtual Machine); `ECM` (Edge Computing Machine); `LH` (Lighthouse), `BM` (Cloud Bare Metal); `Other` (non-Tencent Cloud server). Default to `ALL` if it's not specified.</li>
<li>`DockerStatus` - String - Optional - Docker installation status. Values: `ALL`; `INSTALL` (Installed); `UNINSTALL` (Not installed)</li>
<li>`ProjectID` - String - Optional - Project ID</li>
<li>`Tag:xxx(tag:key)` - String - Optional - Tag key-value pair; Example: `Filters":[{"Name":"tag:tke-kind","Values":["service"]}]`</li>
     * @param integer $Limit Offset. Default value: `0`.
     * @param integer $Offset The number of results to return. Default value: 10. Maximum value: 10,000.
     * @param string $By Sorting field
     * @param string $Order Valid values: `asc`, `desc`.
     * @param array $ExportField Export field
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
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("ExportField",$param) and $param["ExportField"] !== null) {
            $this->ExportField = $param["ExportField"];
        }
    }
}
