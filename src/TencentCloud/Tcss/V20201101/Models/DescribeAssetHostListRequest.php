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
 * DescribeAssetHostList request structure.
 *
 * @method integer getLimit() Obtain Number of results to be returned. Default value: `10`. Maximum value: `100`.
 * @method void setLimit(integer $Limit) Set Number of results to be returned. Default value: `10`. Maximum value: `100`.
 * @method integer getOffset() Obtain Offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset. Default value: `0`.
 * @method array getFilters() Obtain Filter criteria. <li>Status-String-Required: No-agent Status filtering, "ALL": "ALL" (or omit this field), "UNINSTALL": "not installed", "OFFLINE": "OFFLINE", "ONLINE": "under protection"</li> <li>HostName-String-Required: No-HostName filtering</li> <li>Group-String-Required: No-host Group search</li> <li>HostIP-String-Required: No-search by host ip</li> <li>HostID-String-Required: No-search by host id</li> <li>DockerVersion-String-Required: No-docker version search</li> <li>MachineType-String-Required: No-host origin MachineType search, "ALL": "ALL" (or omit this field), host source: one of ["CVM", "ECM", "LH", "BM"] for Tencent Cloud server; one of ["Other"] for non-Tencent Cloud server</li> <li>DockerStatus-String-Required: No-docker installation Status, "ALL": "ALL" (or omit this field), "INSTALL": "installed", "UNINSTALL": "not installed"</li> <li>ProjectID-String-Required: No-project id search</li> <li>Tag:(Tag: key)-String-Required: No-Tag key-value search example filter":[{"Name":"Tag: tke-kind","Values":["service"]}]</li> <li>NonClusterNode: whether to query non-cluster nodes (true: yes, false: no)</li>
 * @method void setFilters(array $Filters) Set Filter criteria. <li>Status-String-Required: No-agent Status filtering, "ALL": "ALL" (or omit this field), "UNINSTALL": "not installed", "OFFLINE": "OFFLINE", "ONLINE": "under protection"</li> <li>HostName-String-Required: No-HostName filtering</li> <li>Group-String-Required: No-host Group search</li> <li>HostIP-String-Required: No-search by host ip</li> <li>HostID-String-Required: No-search by host id</li> <li>DockerVersion-String-Required: No-docker version search</li> <li>MachineType-String-Required: No-host origin MachineType search, "ALL": "ALL" (or omit this field), host source: one of ["CVM", "ECM", "LH", "BM"] for Tencent Cloud server; one of ["Other"] for non-Tencent Cloud server</li> <li>DockerStatus-String-Required: No-docker installation Status, "ALL": "ALL" (or omit this field), "INSTALL": "installed", "UNINSTALL": "not installed"</li> <li>ProjectID-String-Required: No-project id search</li> <li>Tag:(Tag: key)-String-Required: No-Tag key-value search example filter":[{"Name":"Tag: tke-kind","Values":["service"]}]</li> <li>NonClusterNode: whether to query non-cluster nodes (true: yes, false: no)</li>
 * @method string getBy() Obtain Sorting field
 * @method void setBy(string $By) Set Sorting field
 * @method string getOrder() Obtain Sorting order. Valid values: `asc`, `desc`.
 * @method void setOrder(string $Order) Set Sorting order. Valid values: `asc`, `desc`.
 */
class DescribeAssetHostListRequest extends AbstractModel
{
    /**
     * @var integer Number of results to be returned. Default value: `10`. Maximum value: `100`.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: `0`.
     */
    public $Offset;

    /**
     * @var array Filter criteria. <li>Status-String-Required: No-agent Status filtering, "ALL": "ALL" (or omit this field), "UNINSTALL": "not installed", "OFFLINE": "OFFLINE", "ONLINE": "under protection"</li> <li>HostName-String-Required: No-HostName filtering</li> <li>Group-String-Required: No-host Group search</li> <li>HostIP-String-Required: No-search by host ip</li> <li>HostID-String-Required: No-search by host id</li> <li>DockerVersion-String-Required: No-docker version search</li> <li>MachineType-String-Required: No-host origin MachineType search, "ALL": "ALL" (or omit this field), host source: one of ["CVM", "ECM", "LH", "BM"] for Tencent Cloud server; one of ["Other"] for non-Tencent Cloud server</li> <li>DockerStatus-String-Required: No-docker installation Status, "ALL": "ALL" (or omit this field), "INSTALL": "installed", "UNINSTALL": "not installed"</li> <li>ProjectID-String-Required: No-project id search</li> <li>Tag:(Tag: key)-String-Required: No-Tag key-value search example filter":[{"Name":"Tag: tke-kind","Values":["service"]}]</li> <li>NonClusterNode: whether to query non-cluster nodes (true: yes, false: no)</li>
     */
    public $Filters;

    /**
     * @var string Sorting field
     */
    public $By;

    /**
     * @var string Sorting order. Valid values: `asc`, `desc`.
     */
    public $Order;

    /**
     * @param integer $Limit Number of results to be returned. Default value: `10`. Maximum value: `100`.
     * @param integer $Offset Offset. Default value: `0`.
     * @param array $Filters Filter criteria. <li>Status-String-Required: No-agent Status filtering, "ALL": "ALL" (or omit this field), "UNINSTALL": "not installed", "OFFLINE": "OFFLINE", "ONLINE": "under protection"</li> <li>HostName-String-Required: No-HostName filtering</li> <li>Group-String-Required: No-host Group search</li> <li>HostIP-String-Required: No-search by host ip</li> <li>HostID-String-Required: No-search by host id</li> <li>DockerVersion-String-Required: No-docker version search</li> <li>MachineType-String-Required: No-host origin MachineType search, "ALL": "ALL" (or omit this field), host source: one of ["CVM", "ECM", "LH", "BM"] for Tencent Cloud server; one of ["Other"] for non-Tencent Cloud server</li> <li>DockerStatus-String-Required: No-docker installation Status, "ALL": "ALL" (or omit this field), "INSTALL": "installed", "UNINSTALL": "not installed"</li> <li>ProjectID-String-Required: No-project id search</li> <li>Tag:(Tag: key)-String-Required: No-Tag key-value search example filter":[{"Name":"Tag: tke-kind","Values":["service"]}]</li> <li>NonClusterNode: whether to query non-cluster nodes (true: yes, false: no)</li>
     * @param string $By Sorting field
     * @param string $Order Sorting order. Valid values: `asc`, `desc`.
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
