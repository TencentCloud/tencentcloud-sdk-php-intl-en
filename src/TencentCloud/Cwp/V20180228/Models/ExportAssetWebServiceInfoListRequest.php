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
 * ExportAssetWebServiceInfoList request structure.
 *
 * @method string getQuuid() Obtain Query information of a specified QUUID host
 * @method void setQuuid(string $Quuid) Set Query information of a specified QUUID host
 * @method array getFilters() Obtain Filter criteria
<li>User - string - whether required: no - running user</li>
<li>Name - string - whether required: no - Web service name:</li>
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
<li>OsType - string - whether required: no - Windows/Linux</li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>User - string - whether required: no - running user</li>
<li>Name - string - whether required: no - Web service name:</li>
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
<li>OsType - string - whether required: no - Windows/Linux</li>
 * @method string getOrder() Obtain Sorting method: asc for ascending order or desc for descending order
 * @method void setOrder(string $Order) Set Sorting method: asc for ascending order or desc for descending order
 * @method string getBy() Obtain Optional sorting method: [FirstTime|ProcessCount]
 * @method void setBy(string $By) Set Optional sorting method: [FirstTime|ProcessCount]
 */
class ExportAssetWebServiceInfoListRequest extends AbstractModel
{
    /**
     * @var string Query information of a specified QUUID host
     */
    public $Quuid;

    /**
     * @var array Filter criteria
<li>User - string - whether required: no - running user</li>
<li>Name - string - whether required: no - Web service name:</li>
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
<li>OsType - string - whether required: no - Windows/Linux</li>
     */
    public $Filters;

    /**
     * @var string Sorting method: asc for ascending order or desc for descending order
     */
    public $Order;

    /**
     * @var string Optional sorting method: [FirstTime|ProcessCount]
     */
    public $By;

    /**
     * @param string $Quuid Query information of a specified QUUID host
     * @param array $Filters Filter criteria
<li>User - string - whether required: no - running user</li>
<li>Name - string - whether required: no - Web service name:</li>
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
<li>OsType - string - whether required: no - Windows/Linux</li>
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
