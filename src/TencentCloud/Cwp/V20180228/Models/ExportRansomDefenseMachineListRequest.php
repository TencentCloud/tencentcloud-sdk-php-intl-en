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
 * ExportRansomDefenseMachineList request structure.
 *
 * @method array getFilters() Obtain Filtering criteria
<li>Ips - String - required: no - IP address for querying</li>
<li>MachineNames - String - required: no - instance name for querying</li>
<li>Names - String - required: no - instance name for querying</li>
<li>Status - String - required: no - policy status: 0: backup in progress; 1: backup succeeded; 2: backup failed</li>
<li>LastBackupTimeBegin - String - required: no - start of the last backup time</li>
<li>LastBackupTimeEnd - String - required: no - end of the last backup time</li>
 * @method void setFilters(array $Filters) Set Filtering criteria
<li>Ips - String - required: no - IP address for querying</li>
<li>MachineNames - String - required: no - instance name for querying</li>
<li>Names - String - required: no - instance name for querying</li>
<li>Status - String - required: no - policy status: 0: backup in progress; 1: backup succeeded; 2: backup failed</li>
<li>LastBackupTimeBegin - String - required: no - start of the last backup time</li>
<li>LastBackupTimeEnd - String - required: no - end of the last backup time</li>
 * @method string getOrder() Obtain Sorting method: ASC / DESC
 * @method void setOrder(string $Order) Set Sorting method: ASC / DESC
 * @method string getBy() Obtain Sorting fields, supporting CreateTime and MachineCount
 * @method void setBy(string $By) Set Sorting fields, supporting CreateTime and MachineCount
 */
class ExportRansomDefenseMachineListRequest extends AbstractModel
{
    /**
     * @var array Filtering criteria
<li>Ips - String - required: no - IP address for querying</li>
<li>MachineNames - String - required: no - instance name for querying</li>
<li>Names - String - required: no - instance name for querying</li>
<li>Status - String - required: no - policy status: 0: backup in progress; 1: backup succeeded; 2: backup failed</li>
<li>LastBackupTimeBegin - String - required: no - start of the last backup time</li>
<li>LastBackupTimeEnd - String - required: no - end of the last backup time</li>
     */
    public $Filters;

    /**
     * @var string Sorting method: ASC / DESC
     */
    public $Order;

    /**
     * @var string Sorting fields, supporting CreateTime and MachineCount
     */
    public $By;

    /**
     * @param array $Filters Filtering criteria
<li>Ips - String - required: no - IP address for querying</li>
<li>MachineNames - String - required: no - instance name for querying</li>
<li>Names - String - required: no - instance name for querying</li>
<li>Status - String - required: no - policy status: 0: backup in progress; 1: backup succeeded; 2: backup failed</li>
<li>LastBackupTimeBegin - String - required: no - start of the last backup time</li>
<li>LastBackupTimeEnd - String - required: no - end of the last backup time</li>
     * @param string $Order Sorting method: ASC / DESC
     * @param string $By Sorting fields, supporting CreateTime and MachineCount
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
                $obj = new Filters();
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
