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
 * ExportAssetDatabaseList request structure.
 *
 * @method array getFilters() Obtain Filtering criteria
<li>User- string - required: no - running user</li>
<li>Ip - String - required: no - bound IP address</li>
<li>Port - Int - required: no - port</li>
<li>Name - Int - required: no - database name
0: all
1:MySQL
2:Redis
3:Oracle
4:MongoDB
5:MemCache
6:PostgreSQL
7:HBase
8:DB2
9:Sybase
10:TiDB</li>
<li>Proto - String - required: no - protocol: 1: TCP; 2: UDP; 3: unknown</li>
<li>OsType - String - required: no - operating system: Linux/Windows</li>
 * @method void setFilters(array $Filters) Set Filtering criteria
<li>User- string - required: no - running user</li>
<li>Ip - String - required: no - bound IP address</li>
<li>Port - Int - required: no - port</li>
<li>Name - Int - required: no - database name
0: all
1:MySQL
2:Redis
3:Oracle
4:MongoDB
5:MemCache
6:PostgreSQL
7:HBase
8:DB2
9:Sybase
10:TiDB</li>
<li>Proto - String - required: no - protocol: 1: TCP; 2: UDP; 3: unknown</li>
<li>OsType - String - required: no - operating system: Linux/Windows</li>
 * @method string getQuuid() Obtain Query the information on the host with the specified QUUID
 * @method void setQuuid(string $Quuid) Set Query the information on the host with the specified QUUID
 * @method string getOrder() Obtain Sorting order: asc for ascending or desc for descending
 * @method void setOrder(string $Order) Set Sorting order: asc for ascending or desc for descending
 * @method string getBy() Obtain Sorting method: [FirstTime]
 * @method void setBy(string $By) Set Sorting method: [FirstTime]
 */
class ExportAssetDatabaseListRequest extends AbstractModel
{
    /**
     * @var array Filtering criteria
<li>User- string - required: no - running user</li>
<li>Ip - String - required: no - bound IP address</li>
<li>Port - Int - required: no - port</li>
<li>Name - Int - required: no - database name
0: all
1:MySQL
2:Redis
3:Oracle
4:MongoDB
5:MemCache
6:PostgreSQL
7:HBase
8:DB2
9:Sybase
10:TiDB</li>
<li>Proto - String - required: no - protocol: 1: TCP; 2: UDP; 3: unknown</li>
<li>OsType - String - required: no - operating system: Linux/Windows</li>
     */
    public $Filters;

    /**
     * @var string Query the information on the host with the specified QUUID
     */
    public $Quuid;

    /**
     * @var string Sorting order: asc for ascending or desc for descending
     */
    public $Order;

    /**
     * @var string Sorting method: [FirstTime]
     */
    public $By;

    /**
     * @param array $Filters Filtering criteria
<li>User- string - required: no - running user</li>
<li>Ip - String - required: no - bound IP address</li>
<li>Port - Int - required: no - port</li>
<li>Name - Int - required: no - database name
0: all
1:MySQL
2:Redis
3:Oracle
4:MongoDB
5:MemCache
6:PostgreSQL
7:HBase
8:DB2
9:Sybase
10:TiDB</li>
<li>Proto - String - required: no - protocol: 1: TCP; 2: UDP; 3: unknown</li>
<li>OsType - String - required: no - operating system: Linux/Windows</li>
     * @param string $Quuid Query the information on the host with the specified QUUID
     * @param string $Order Sorting order: asc for ascending or desc for descending
     * @param string $By Sorting method: [FirstTime]
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

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
