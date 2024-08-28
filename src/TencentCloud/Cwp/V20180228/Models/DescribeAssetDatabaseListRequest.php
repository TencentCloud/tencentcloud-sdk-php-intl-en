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
 * DescribeAssetDatabaseList request structure.
 *
 * @method string getQuuid() Obtain Query information of a specified QUUID host
 * @method void setQuuid(string $Quuid) Set Query information of a specified QUUID host
 * @method array getFilters() Obtain Filter criteria
<li>MachineName - String - required: no - host alias for filtering</li>
<li>IP - String - required: no - host IP address for filtering</li>
<li>InstanceID - String - required: no - host instance ID for filtering</li>
<li>User- string - required: no - running user</li>
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
<li>OsType - String - required: no - operating system: linux/windows</li>
<li>Os - String required: no - operating system (value of DescribeMachineOsList)</li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>MachineName - String - required: no - host alias for filtering</li>
<li>IP - String - required: no - host IP address for filtering</li>
<li>InstanceID - String - required: no - host instance ID for filtering</li>
<li>User- string - required: no - running user</li>
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
<li>OsType - String - required: no - operating system: linux/windows</li>
<li>Os - String required: no - operating system (value of DescribeMachineOsList)</li>
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method integer getLimit() Obtain Number of results to be returned. Default value: 10. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of results to be returned. Default value: 10. Maximum value: 100.
 * @method string getOrder() Obtain Sorting method: asc for ascending order or desc for descending order
 * @method void setOrder(string $Order) Set Sorting method: asc for ascending order or desc for descending order
 * @method string getBy() Obtain Sorting method: [FirstTime]
 * @method void setBy(string $By) Set Sorting method: [FirstTime]
 */
class DescribeAssetDatabaseListRequest extends AbstractModel
{
    /**
     * @var string Query information of a specified QUUID host
     */
    public $Quuid;

    /**
     * @var array Filter criteria
<li>MachineName - String - required: no - host alias for filtering</li>
<li>IP - String - required: no - host IP address for filtering</li>
<li>InstanceID - String - required: no - host instance ID for filtering</li>
<li>User- string - required: no - running user</li>
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
<li>OsType - String - required: no - operating system: linux/windows</li>
<li>Os - String required: no - operating system (value of DescribeMachineOsList)</li>
     */
    public $Filters;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of results to be returned. Default value: 10. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var string Sorting method: asc for ascending order or desc for descending order
     */
    public $Order;

    /**
     * @var string Sorting method: [FirstTime]
     */
    public $By;

    /**
     * @param string $Quuid Query information of a specified QUUID host
     * @param array $Filters Filter criteria
<li>MachineName - String - required: no - host alias for filtering</li>
<li>IP - String - required: no - host IP address for filtering</li>
<li>InstanceID - String - required: no - host instance ID for filtering</li>
<li>User- string - required: no - running user</li>
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
<li>OsType - String - required: no - operating system: linux/windows</li>
<li>Os - String required: no - operating system (value of DescribeMachineOsList)</li>
     * @param integer $Offset Offset. Default value: 0.
     * @param integer $Limit Number of results to be returned. Default value: 10. Maximum value: 100.
     * @param string $Order Sorting method: asc for ascending order or desc for descending order
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
