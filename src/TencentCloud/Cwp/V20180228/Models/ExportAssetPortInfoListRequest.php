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
 * ExportAssetPortInfoList request structure.
 *
 * @method string getQuuid() Obtain Query information of a specified QUUID host
 * @method void setQuuid(string $Quuid) Set Query information of a specified QUUID host
 * @method array getFilters() Obtain Filter criteria
<li>Port - uint64 - required: no - port</li>
<li>Ip - String - required: no - bound IP address</li>
<li>ProcessName - String - required: no - process name</li>
<li>Pid - uint64 - required: no - PID</li>
<li>User - String - required: no - running user</li>
<li>Group - String - required: no - user group</li>
<li>Ppid - uint64 - required: no - PPID</li>
<li>Proto - string - required: no - tcp/udp or "" (empty string to filter unknown status)</li>
<li>OsType - uint64 - required: no - Windows/Linux</li>
<li>RunTimeStart - String - required: no - running start time</li>
<li>RunTimeEnd - String - required: no - running end time</li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>Port - uint64 - required: no - port</li>
<li>Ip - String - required: no - bound IP address</li>
<li>ProcessName - String - required: no - process name</li>
<li>Pid - uint64 - required: no - PID</li>
<li>User - String - required: no - running user</li>
<li>Group - String - required: no - user group</li>
<li>Ppid - uint64 - required: no - PPID</li>
<li>Proto - string - required: no - tcp/udp or "" (empty string to filter unknown status)</li>
<li>OsType - uint64 - required: no - Windows/Linux</li>
<li>RunTimeStart - String - required: no - running start time</li>
<li>RunTimeEnd - String - required: no - running end time</li>
 * @method string getOrder() Obtain Sorting method: asc for ascending order or desc for descending order
 * @method void setOrder(string $Order) Set Sorting method: asc for ascending order or desc for descending order
 * @method string getBy() Obtain Sorting method: [FirstTime|StartTime]
 * @method void setBy(string $By) Set Sorting method: [FirstTime|StartTime]
 */
class ExportAssetPortInfoListRequest extends AbstractModel
{
    /**
     * @var string Query information of a specified QUUID host
     */
    public $Quuid;

    /**
     * @var array Filter criteria
<li>Port - uint64 - required: no - port</li>
<li>Ip - String - required: no - bound IP address</li>
<li>ProcessName - String - required: no - process name</li>
<li>Pid - uint64 - required: no - PID</li>
<li>User - String - required: no - running user</li>
<li>Group - String - required: no - user group</li>
<li>Ppid - uint64 - required: no - PPID</li>
<li>Proto - string - required: no - tcp/udp or "" (empty string to filter unknown status)</li>
<li>OsType - uint64 - required: no - Windows/Linux</li>
<li>RunTimeStart - String - required: no - running start time</li>
<li>RunTimeEnd - String - required: no - running end time</li>
     */
    public $Filters;

    /**
     * @var string Sorting method: asc for ascending order or desc for descending order
     */
    public $Order;

    /**
     * @var string Sorting method: [FirstTime|StartTime]
     */
    public $By;

    /**
     * @param string $Quuid Query information of a specified QUUID host
     * @param array $Filters Filter criteria
<li>Port - uint64 - required: no - port</li>
<li>Ip - String - required: no - bound IP address</li>
<li>ProcessName - String - required: no - process name</li>
<li>Pid - uint64 - required: no - PID</li>
<li>User - String - required: no - running user</li>
<li>Group - String - required: no - user group</li>
<li>Ppid - uint64 - required: no - PPID</li>
<li>Proto - string - required: no - tcp/udp or "" (empty string to filter unknown status)</li>
<li>OsType - uint64 - required: no - Windows/Linux</li>
<li>RunTimeStart - String - required: no - running start time</li>
<li>RunTimeEnd - String - required: no - running end time</li>
     * @param string $Order Sorting method: asc for ascending order or desc for descending order
     * @param string $By Sorting method: [FirstTime|StartTime]
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
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
