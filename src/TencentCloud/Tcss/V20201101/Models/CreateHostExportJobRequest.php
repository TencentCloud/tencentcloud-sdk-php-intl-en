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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateHostExportJob request structure.
 *
 * @method array getFilters() Obtain Filter conditions.<li>Status-String-Required: No-Filter by agent Status. "ALL": "ALL" (or leave this field blank), "UNINSTALL": "Not installed", "OFFLINE": "OFFLINE", "ONLINE": "Under protection"</li><li>HostName-String-Required: No-HostName Filtering</li><li>Group-String-Required: No-Host Group search</li><li>HostIP-String-Required: No-Search by host ip</li><li>HostID-String-Required: No-Search by host id</li><li>DockerVersion-String-Required: No-docker version search</li><li>MachineType-String-Required: No-Host origin MachineType search. "ALL": "ALL" (or leave this field blank). Host source: One of ["CVM", "ECM", "LH", "BM"] is a Tencent Cloud server; one of ["Other"] is a non-Tencent Cloud server.</li><li>DockerStatus-String-Required: No-docker installation Status. "ALL": "ALL" (or leave this field blank), "INSTALL": "Installed", "UNINSTALL": "Not installed"</li><li>ProjectID-String-Required: No-Project id search</li><li>Tag:(Tag: key)-String-Required: No-Tag key-value search. Example Filters":[{"Name":"Tag: tke-kind","Values":["service"]}]</li>
 * @method void setFilters(array $Filters) Set Filter conditions.<li>Status-String-Required: No-Filter by agent Status. "ALL": "ALL" (or leave this field blank), "UNINSTALL": "Not installed", "OFFLINE": "OFFLINE", "ONLINE": "Under protection"</li><li>HostName-String-Required: No-HostName Filtering</li><li>Group-String-Required: No-Host Group search</li><li>HostIP-String-Required: No-Search by host ip</li><li>HostID-String-Required: No-Search by host id</li><li>DockerVersion-String-Required: No-docker version search</li><li>MachineType-String-Required: No-Host origin MachineType search. "ALL": "ALL" (or leave this field blank). Host source: One of ["CVM", "ECM", "LH", "BM"] is a Tencent Cloud server; one of ["Other"] is a non-Tencent Cloud server.</li><li>DockerStatus-String-Required: No-docker installation Status. "ALL": "ALL" (or leave this field blank), "INSTALL": "Installed", "UNINSTALL": "Not installed"</li><li>ProjectID-String-Required: No-Project id search</li><li>Tag:(Tag: key)-String-Required: No-Tag key-value search. Example Filters":[{"Name":"Tag: tke-kind","Values":["service"]}]</li>
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
     * @var array Filter conditions.<li>Status-String-Required: No-Filter by agent Status. "ALL": "ALL" (or leave this field blank), "UNINSTALL": "Not installed", "OFFLINE": "OFFLINE", "ONLINE": "Under protection"</li><li>HostName-String-Required: No-HostName Filtering</li><li>Group-String-Required: No-Host Group search</li><li>HostIP-String-Required: No-Search by host ip</li><li>HostID-String-Required: No-Search by host id</li><li>DockerVersion-String-Required: No-docker version search</li><li>MachineType-String-Required: No-Host origin MachineType search. "ALL": "ALL" (or leave this field blank). Host source: One of ["CVM", "ECM", "LH", "BM"] is a Tencent Cloud server; one of ["Other"] is a non-Tencent Cloud server.</li><li>DockerStatus-String-Required: No-docker installation Status. "ALL": "ALL" (or leave this field blank), "INSTALL": "Installed", "UNINSTALL": "Not installed"</li><li>ProjectID-String-Required: No-Project id search</li><li>Tag:(Tag: key)-String-Required: No-Tag key-value search. Example Filters":[{"Name":"Tag: tke-kind","Values":["service"]}]</li>
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
     * @param array $Filters Filter conditions.<li>Status-String-Required: No-Filter by agent Status. "ALL": "ALL" (or leave this field blank), "UNINSTALL": "Not installed", "OFFLINE": "OFFLINE", "ONLINE": "Under protection"</li><li>HostName-String-Required: No-HostName Filtering</li><li>Group-String-Required: No-Host Group search</li><li>HostIP-String-Required: No-Search by host ip</li><li>HostID-String-Required: No-Search by host id</li><li>DockerVersion-String-Required: No-docker version search</li><li>MachineType-String-Required: No-Host origin MachineType search. "ALL": "ALL" (or leave this field blank). Host source: One of ["CVM", "ECM", "LH", "BM"] is a Tencent Cloud server; one of ["Other"] is a non-Tencent Cloud server.</li><li>DockerStatus-String-Required: No-docker installation Status. "ALL": "ALL" (or leave this field blank), "INSTALL": "Installed", "UNINSTALL": "Not installed"</li><li>ProjectID-String-Required: No-Project id search</li><li>Tag:(Tag: key)-String-Required: No-Tag key-value search. Example Filters":[{"Name":"Tag: tke-kind","Values":["service"]}]</li>
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
