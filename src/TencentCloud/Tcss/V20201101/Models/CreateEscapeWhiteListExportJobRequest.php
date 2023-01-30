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
 * CreateEscapeWhiteListExportJob request structure.
 *
 * @method array getFilters() Obtain Filter
<li>EventType- String - Required: No - Allowed event type. Valid values: `ESCAPE_CGROUPS` (cgroup escape); `ESCAPE_TAMPER_SENSITIVE_FILE` (file tamper escape); `ESCAPE_DOCKER_API` (Docker API access escape); `ESCAPE_VUL_OCCURRED` (vulnerability exploit); `MOUNT_SENSITIVE_PTAH` (sensitive path mount); `PRIVILEGE_CONTAINER_START` (privileged container); `PRIVILEGE` (program privilege escalation escape).</li>
<li>ImageName- string - Required: No - Image name</li>
<li>ImageID- string - Required: No - Image ID</li>
 * @method void setFilters(array $Filters) Set Filter
<li>EventType- String - Required: No - Allowed event type. Valid values: `ESCAPE_CGROUPS` (cgroup escape); `ESCAPE_TAMPER_SENSITIVE_FILE` (file tamper escape); `ESCAPE_DOCKER_API` (Docker API access escape); `ESCAPE_VUL_OCCURRED` (vulnerability exploit); `MOUNT_SENSITIVE_PTAH` (sensitive path mount); `PRIVILEGE_CONTAINER_START` (privileged container); `PRIVILEGE` (program privilege escalation escape).</li>
<li>ImageName- string - Required: No - Image name</li>
<li>ImageID- string - Required: No - Image ID</li>
 * @method integer getLimit() Obtain Number of results to be returned. Default value: `10000`. Maximum value: `10000`.
 * @method void setLimit(integer $Limit) Set Number of results to be returned. Default value: `10000`. Maximum value: `10000`.
 * @method integer getOffset() Obtain Offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset. Default value: `0`.
 * @method string getOrder() Obtain Sorting order. Valid values: `asc`, `desc`.
 * @method void setOrder(string $Order) Set Sorting order. Valid values: `asc`, `desc`.
 * @method string getBy() Obtain Sorting field. Valid values: `HostCount` (number of servers); `ContainerCount` (number of containers); `UpdateTime` (update time).
 * @method void setBy(string $By) Set Sorting field. Valid values: `HostCount` (number of servers); `ContainerCount` (number of containers); `UpdateTime` (update time).
 */
class CreateEscapeWhiteListExportJobRequest extends AbstractModel
{
    /**
     * @var array Filter
<li>EventType- String - Required: No - Allowed event type. Valid values: `ESCAPE_CGROUPS` (cgroup escape); `ESCAPE_TAMPER_SENSITIVE_FILE` (file tamper escape); `ESCAPE_DOCKER_API` (Docker API access escape); `ESCAPE_VUL_OCCURRED` (vulnerability exploit); `MOUNT_SENSITIVE_PTAH` (sensitive path mount); `PRIVILEGE_CONTAINER_START` (privileged container); `PRIVILEGE` (program privilege escalation escape).</li>
<li>ImageName- string - Required: No - Image name</li>
<li>ImageID- string - Required: No - Image ID</li>
     */
    public $Filters;

    /**
     * @var integer Number of results to be returned. Default value: `10000`. Maximum value: `10000`.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: `0`.
     */
    public $Offset;

    /**
     * @var string Sorting order. Valid values: `asc`, `desc`.
     */
    public $Order;

    /**
     * @var string Sorting field. Valid values: `HostCount` (number of servers); `ContainerCount` (number of containers); `UpdateTime` (update time).
     */
    public $By;

    /**
     * @param array $Filters Filter
<li>EventType- String - Required: No - Allowed event type. Valid values: `ESCAPE_CGROUPS` (cgroup escape); `ESCAPE_TAMPER_SENSITIVE_FILE` (file tamper escape); `ESCAPE_DOCKER_API` (Docker API access escape); `ESCAPE_VUL_OCCURRED` (vulnerability exploit); `MOUNT_SENSITIVE_PTAH` (sensitive path mount); `PRIVILEGE_CONTAINER_START` (privileged container); `PRIVILEGE` (program privilege escalation escape).</li>
<li>ImageName- string - Required: No - Image name</li>
<li>ImageID- string - Required: No - Image ID</li>
     * @param integer $Limit Number of results to be returned. Default value: `10000`. Maximum value: `10000`.
     * @param integer $Offset Offset. Default value: `0`.
     * @param string $Order Sorting order. Valid values: `asc`, `desc`.
     * @param string $By Sorting field. Valid values: `HostCount` (number of servers); `ContainerCount` (number of containers); `UpdateTime` (update time).
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
                $obj = new RunTimeFilters();
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
