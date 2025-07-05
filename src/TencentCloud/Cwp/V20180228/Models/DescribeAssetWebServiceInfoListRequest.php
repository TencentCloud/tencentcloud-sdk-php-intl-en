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
 * DescribeAssetWebServiceInfoList request structure.
 *
 * @method string getQuuid() Obtain Query the information on the host with the specified QUUID
 * @method void setQuuid(string $Quuid) Set Query the information on the host with the specified QUUID
 * @method array getFilters() Obtain Filter criteria
<li>User - string - required: no - running user</li>
<li>Name - string - required: no - Web service name:</li>
1:Tomcat
2:Apache
3:Nginx
4:WebLogic
5:Websphere
6:JBoss
7:WildFly
8:Jetty
9:IHS
10:Tengine</li>
<li>OsType - string - required: no - Windows/Linux</li>
<li>Os -String required: no - operating system (the value of DescribeMachineOsList API)</li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>User - string - required: no - running user</li>
<li>Name - string - required: no - Web service name:</li>
1:Tomcat
2:Apache
3:Nginx
4:WebLogic
5:Websphere
6:JBoss
7:WildFly
8:Jetty
9:IHS
10:Tengine</li>
<li>OsType - string - required: no - Windows/Linux</li>
<li>Os -String required: no - operating system (the value of DescribeMachineOsList API)</li>
 * @method integer getOffset() Obtain Offset, which is 0 by default.
<li>IpOrAlias - String - required: no - filter by host IP or alias</li>
 * @method void setOffset(integer $Offset) Set Offset, which is 0 by default.
<li>IpOrAlias - String - required: no - filter by host IP or alias</li>
 * @method integer getLimit() Obtain Number of items to be returned. It is 10 by default, and the maximum value is 100.
 * @method void setLimit(integer $Limit) Set Number of items to be returned. It is 10 by default, and the maximum value is 100.
 * @method string getOrder() Obtain Sorting method: asc for ascending order or desc for descending order
 * @method void setOrder(string $Order) Set Sorting method: asc for ascending order or desc for descending order
 * @method string getBy() Obtain Optional sorting method: [FirstTime|ProcessCount]
 * @method void setBy(string $By) Set Optional sorting method: [FirstTime|ProcessCount]
 */
class DescribeAssetWebServiceInfoListRequest extends AbstractModel
{
    /**
     * @var string Query the information on the host with the specified QUUID
     */
    public $Quuid;

    /**
     * @var array Filter criteria
<li>User - string - required: no - running user</li>
<li>Name - string - required: no - Web service name:</li>
1:Tomcat
2:Apache
3:Nginx
4:WebLogic
5:Websphere
6:JBoss
7:WildFly
8:Jetty
9:IHS
10:Tengine</li>
<li>OsType - string - required: no - Windows/Linux</li>
<li>Os -String required: no - operating system (the value of DescribeMachineOsList API)</li>
     */
    public $Filters;

    /**
     * @var integer Offset, which is 0 by default.
<li>IpOrAlias - String - required: no - filter by host IP or alias</li>
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
     * @var string Optional sorting method: [FirstTime|ProcessCount]
     */
    public $By;

    /**
     * @param string $Quuid Query the information on the host with the specified QUUID
     * @param array $Filters Filter criteria
<li>User - string - required: no - running user</li>
<li>Name - string - required: no - Web service name:</li>
1:Tomcat
2:Apache
3:Nginx
4:WebLogic
5:Websphere
6:JBoss
7:WildFly
8:Jetty
9:IHS
10:Tengine</li>
<li>OsType - string - required: no - Windows/Linux</li>
<li>Os -String required: no - operating system (the value of DescribeMachineOsList API)</li>
     * @param integer $Offset Offset, which is 0 by default.
<li>IpOrAlias - String - required: no - filter by host IP or alias</li>
     * @param integer $Limit Number of items to be returned. It is 10 by default, and the maximum value is 100.
     * @param string $Order Sorting method: asc for ascending order or desc for descending order
     * @param string $By Optional sorting method: [FirstTime|ProcessCount]
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
