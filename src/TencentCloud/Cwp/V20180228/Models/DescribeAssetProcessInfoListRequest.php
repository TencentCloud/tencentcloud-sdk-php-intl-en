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
 * DescribeAssetProcessInfoList request structure.
 *
 * @method string getQuuid() Obtain Query the information on the host with the specified QUUID
 * @method void setQuuid(string $Quuid) Set Query the information on the host with the specified QUUID
 * @method array getFilters() Obtain Filtering criteria
<li>IP - String - required: no - host IP address</li>
<li>MachineName - String - required: no - host name</li>
<li>InstanceID - string - required: no - instance ID</li>
<li>Name - String - required: no - process name</li>
<li>User - String - required: no - process user</li>
<li>Group - String - required: no - process user group</li>
<li>Pid - uint64 - required: no - process ID</li>
<li>Ppid - uint64 - required: no - parent process ID</li>
<li>OsType - uint64 - required: no - Windows/Linux</li>
<li>Status - string - required: no - process status:
1: R, runnable
2: S, interruptible
3: D, uninterruptible
4: T, stopped or traced
5: Z, zombie
6: X, to be terminated</li>
<li>RunTimeStart - String - required: no - running start time</li>
<li>RunTimeEnd - String - required: no - running end time</li>
<li>InstallByPackage - uint64 - required: no - whether to install by package: 0: no; 1: yes</li>
<li>Os - String required: no - operating system (value of DescribeMachineOsList)</li>
 * @method void setFilters(array $Filters) Set Filtering criteria
<li>IP - String - required: no - host IP address</li>
<li>MachineName - String - required: no - host name</li>
<li>InstanceID - string - required: no - instance ID</li>
<li>Name - String - required: no - process name</li>
<li>User - String - required: no - process user</li>
<li>Group - String - required: no - process user group</li>
<li>Pid - uint64 - required: no - process ID</li>
<li>Ppid - uint64 - required: no - parent process ID</li>
<li>OsType - uint64 - required: no - Windows/Linux</li>
<li>Status - string - required: no - process status:
1: R, runnable
2: S, interruptible
3: D, uninterruptible
4: T, stopped or traced
5: Z, zombie
6: X, to be terminated</li>
<li>RunTimeStart - String - required: no - running start time</li>
<li>RunTimeEnd - String - required: no - running end time</li>
<li>InstallByPackage - uint64 - required: no - whether to install by package: 0: no; 1: yes</li>
<li>Os - String required: no - operating system (value of DescribeMachineOsList)</li>
 * @method integer getLimit() Obtain Number of items to be returned. It is 10 by default, and the maximum value is 100.
 * @method void setLimit(integer $Limit) Set Number of items to be returned. It is 10 by default, and the maximum value is 100.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method string getOrder() Obtain Sorting method: asc for ascending order or desc for descending order
 * @method void setOrder(string $Order) Set Sorting method: asc for ascending order or desc for descending order
 * @method string getBy() Obtain Sorting method: [FirstTime|StartTime]
 * @method void setBy(string $By) Set Sorting method: [FirstTime|StartTime]
 */
class DescribeAssetProcessInfoListRequest extends AbstractModel
{
    /**
     * @var string Query the information on the host with the specified QUUID
     */
    public $Quuid;

    /**
     * @var array Filtering criteria
<li>IP - String - required: no - host IP address</li>
<li>MachineName - String - required: no - host name</li>
<li>InstanceID - string - required: no - instance ID</li>
<li>Name - String - required: no - process name</li>
<li>User - String - required: no - process user</li>
<li>Group - String - required: no - process user group</li>
<li>Pid - uint64 - required: no - process ID</li>
<li>Ppid - uint64 - required: no - parent process ID</li>
<li>OsType - uint64 - required: no - Windows/Linux</li>
<li>Status - string - required: no - process status:
1: R, runnable
2: S, interruptible
3: D, uninterruptible
4: T, stopped or traced
5: Z, zombie
6: X, to be terminated</li>
<li>RunTimeStart - String - required: no - running start time</li>
<li>RunTimeEnd - String - required: no - running end time</li>
<li>InstallByPackage - uint64 - required: no - whether to install by package: 0: no; 1: yes</li>
<li>Os - String required: no - operating system (value of DescribeMachineOsList)</li>
     */
    public $Filters;

    /**
     * @var integer Number of items to be returned. It is 10 by default, and the maximum value is 100.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var string Sorting method: asc for ascending order or desc for descending order
     */
    public $Order;

    /**
     * @var string Sorting method: [FirstTime|StartTime]
     */
    public $By;

    /**
     * @param string $Quuid Query the information on the host with the specified QUUID
     * @param array $Filters Filtering criteria
<li>IP - String - required: no - host IP address</li>
<li>MachineName - String - required: no - host name</li>
<li>InstanceID - string - required: no - instance ID</li>
<li>Name - String - required: no - process name</li>
<li>User - String - required: no - process user</li>
<li>Group - String - required: no - process user group</li>
<li>Pid - uint64 - required: no - process ID</li>
<li>Ppid - uint64 - required: no - parent process ID</li>
<li>OsType - uint64 - required: no - Windows/Linux</li>
<li>Status - string - required: no - process status:
1: R, runnable
2: S, interruptible
3: D, uninterruptible
4: T, stopped or traced
5: Z, zombie
6: X, to be terminated</li>
<li>RunTimeStart - String - required: no - running start time</li>
<li>RunTimeEnd - String - required: no - running end time</li>
<li>InstallByPackage - uint64 - required: no - whether to install by package: 0: no; 1: yes</li>
<li>Os - String required: no - operating system (value of DescribeMachineOsList)</li>
     * @param integer $Limit Number of items to be returned. It is 10 by default, and the maximum value is 100.
     * @param integer $Offset Offset. Default value: 0.
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
