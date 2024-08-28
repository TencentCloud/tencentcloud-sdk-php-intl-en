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
 * ExportAssetProcessInfoList request structure.
 *
 * @method string getQuuid() Obtain Query information of a specified QUUID host
 * @method void setQuuid(string $Quuid) Set Query information of a specified QUUID host
 * @method array getFilters() Obtain Filter criteria
<li>Name - String - whether required: no - process name</li>
<li>User - String - whether required: no - Process user</li>
<li>Group - String - whether required: no - Process user group</li>
<li>Pid - uint64 - whether required: no - process ID</li>
<li>Ppid - uint64 - whether required: no - parent process ID</li>
<li>OsType - uint64 - whether required: no - windows/Linux</li>
<li>Status - string - whether required: no - process status:
0: all
1: R executable
2: S interruptible
3: Uninterruptible</li>
<li>RunTimeStart - String - whether required: no - start time of running</li>
<li>RunTimeEnd - String - whether required: no - end time of running</li>
<li>InstallByPackage - uint64 - whether required: no - whether to install via a package: 0 - no; 1 - yes</li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>Name - String - whether required: no - process name</li>
<li>User - String - whether required: no - Process user</li>
<li>Group - String - whether required: no - Process user group</li>
<li>Pid - uint64 - whether required: no - process ID</li>
<li>Ppid - uint64 - whether required: no - parent process ID</li>
<li>OsType - uint64 - whether required: no - windows/Linux</li>
<li>Status - string - whether required: no - process status:
0: all
1: R executable
2: S interruptible
3: Uninterruptible</li>
<li>RunTimeStart - String - whether required: no - start time of running</li>
<li>RunTimeEnd - String - whether required: no - end time of running</li>
<li>InstallByPackage - uint64 - whether required: no - whether to install via a package: 0 - no; 1 - yes</li>
 * @method string getOrder() Obtain Sorting method: asc for ascending order or desc for descending order
 * @method void setOrder(string $Order) Set Sorting method: asc for ascending order or desc for descending order
 * @method string getBy() Obtain Sorting method: [FirstTime|StartTime]
 * @method void setBy(string $By) Set Sorting method: [FirstTime|StartTime]
 */
class ExportAssetProcessInfoListRequest extends AbstractModel
{
    /**
     * @var string Query information of a specified QUUID host
     */
    public $Quuid;

    /**
     * @var array Filter criteria
<li>Name - String - whether required: no - process name</li>
<li>User - String - whether required: no - Process user</li>
<li>Group - String - whether required: no - Process user group</li>
<li>Pid - uint64 - whether required: no - process ID</li>
<li>Ppid - uint64 - whether required: no - parent process ID</li>
<li>OsType - uint64 - whether required: no - windows/Linux</li>
<li>Status - string - whether required: no - process status:
0: all
1: R executable
2: S interruptible
3: Uninterruptible</li>
<li>RunTimeStart - String - whether required: no - start time of running</li>
<li>RunTimeEnd - String - whether required: no - end time of running</li>
<li>InstallByPackage - uint64 - whether required: no - whether to install via a package: 0 - no; 1 - yes</li>
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
<li>Name - String - whether required: no - process name</li>
<li>User - String - whether required: no - Process user</li>
<li>Group - String - whether required: no - Process user group</li>
<li>Pid - uint64 - whether required: no - process ID</li>
<li>Ppid - uint64 - whether required: no - parent process ID</li>
<li>OsType - uint64 - whether required: no - windows/Linux</li>
<li>Status - string - whether required: no - process status:
0: all
1: R executable
2: S interruptible
3: Uninterruptible</li>
<li>RunTimeStart - String - whether required: no - start time of running</li>
<li>RunTimeEnd - String - whether required: no - end time of running</li>
<li>InstallByPackage - uint64 - whether required: no - whether to install via a package: 0 - no; 1 - yes</li>
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
