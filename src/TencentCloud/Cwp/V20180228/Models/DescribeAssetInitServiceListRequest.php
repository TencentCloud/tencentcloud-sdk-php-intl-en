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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetInitServiceList request structure.
 *
 * @method string getUuid() Obtain Server UUID
 * @method void setUuid(string $Uuid) Set Server UUID
 * @method string getQuuid() Obtain Server QUUID
 * @method void setQuuid(string $Quuid) Set Server QUUID
 * @method array getFilters() Obtain Filter criteria
<li>IP - String - required: no - host IP address</li>
<li>MachineName - String - required: no - host name</li>
<li>InstanceID - string - required: no - instance ID</li>
<li>Name- string - required: no - package name</li>
<li>User- string - required: no - user</li>
<li>IsAutoRun - string - required: no - whether it starts at boot: 0: no; 1: yes</li>
<li>Status- string - required: no - default enabling status: 0: unenabled; 1: enabled (Linux only)</li>
<li>Type- string - required: no - type: type (Windows only)
1: Encoder
2: IE plugin
3: Network provider
4: Mirror hijacking
5: LSA provider
6:KnownDLLs
7: Start execution
8:WMI
9: Scheduled task
10: Winsock provider
11: Printing monitor
12: Resource manager
13: Driver service
14: Log-in </li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>IP - String - required: no - host IP address</li>
<li>MachineName - String - required: no - host name</li>
<li>InstanceID - string - required: no - instance ID</li>
<li>Name- string - required: no - package name</li>
<li>User- string - required: no - user</li>
<li>IsAutoRun - string - required: no - whether it starts at boot: 0: no; 1: yes</li>
<li>Status- string - required: no - default enabling status: 0: unenabled; 1: enabled (Linux only)</li>
<li>Type- string - required: no - type: type (Windows only)
1: Encoder
2: IE plugin
3: Network provider
4: Mirror hijacking
5: LSA provider
6:KnownDLLs
7: Start execution
8:WMI
9: Scheduled task
10: Winsock provider
11: Printing monitor
12: Resource manager
13: Driver service
14: Log-in </li>
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method integer getLimit() Obtain Number of items to be returned. It is 10 by default, and the maximum value is 100.
 * @method void setLimit(integer $Limit) Set Number of items to be returned. It is 10 by default, and the maximum value is 100.
 * @method string getOrder() Obtain Sorting method: asc for ascending order or desc for descending order
 * @method void setOrder(string $Order) Set Sorting method: asc for ascending order or desc for descending order
 * @method string getBy() Obtain Sorting method: [FirstTime]
 * @method void setBy(string $By) Set Sorting method: [FirstTime]
 */
class DescribeAssetInitServiceListRequest extends AbstractModel
{
    /**
     * @var string Server UUID
     */
    public $Uuid;

    /**
     * @var string Server QUUID
     */
    public $Quuid;

    /**
     * @var array Filter criteria
<li>IP - String - required: no - host IP address</li>
<li>MachineName - String - required: no - host name</li>
<li>InstanceID - string - required: no - instance ID</li>
<li>Name- string - required: no - package name</li>
<li>User- string - required: no - user</li>
<li>IsAutoRun - string - required: no - whether it starts at boot: 0: no; 1: yes</li>
<li>Status- string - required: no - default enabling status: 0: unenabled; 1: enabled (Linux only)</li>
<li>Type- string - required: no - type: type (Windows only)
1: Encoder
2: IE plugin
3: Network provider
4: Mirror hijacking
5: LSA provider
6:KnownDLLs
7: Start execution
8:WMI
9: Scheduled task
10: Winsock provider
11: Printing monitor
12: Resource manager
13: Driver service
14: Log-in </li>
     */
    public $Filters;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of items to be returned. It is 10 by default, and the maximum value is 100.
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
     * @param string $Uuid Server UUID
     * @param string $Quuid Server QUUID
     * @param array $Filters Filter criteria
<li>IP - String - required: no - host IP address</li>
<li>MachineName - String - required: no - host name</li>
<li>InstanceID - string - required: no - instance ID</li>
<li>Name- string - required: no - package name</li>
<li>User- string - required: no - user</li>
<li>IsAutoRun - string - required: no - whether it starts at boot: 0: no; 1: yes</li>
<li>Status- string - required: no - default enabling status: 0: unenabled; 1: enabled (Linux only)</li>
<li>Type- string - required: no - type: type (Windows only)
1: Encoder
2: IE plugin
3: Network provider
4: Mirror hijacking
5: LSA provider
6:KnownDLLs
7: Start execution
8:WMI
9: Scheduled task
10: Winsock provider
11: Printing monitor
12: Resource manager
13: Driver service
14: Log-in </li>
     * @param integer $Offset Offset. Default value: 0.
     * @param integer $Limit Number of items to be returned. It is 10 by default, and the maximum value is 100.
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
        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
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
