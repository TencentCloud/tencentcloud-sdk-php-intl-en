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
 * ExportAssetWebAppList request structure.
 *
 * @method string getQuuid() Obtain Query the information on the host with the specified QUUID
 * @method void setQuuid(string $Quuid) Set Query the information on the host with the specified QUUID
 * @method array getFilters() Obtain Filtering criteria
<li>Name - String - required: no - application name</li>
<li>Domain - String - required: no - site domain name</li>
<li>Type - int - required: no - service type:
0: all
1:Tomcat
2:Apache
3:Nginx
4:WebLogic
5:Websphere
6:JBoss
7:Jetty
8:IHS
9:Tengine</li>
<li>OsType - String - required: no - Windows/Linux</li>
 * @method void setFilters(array $Filters) Set Filtering criteria
<li>Name - String - required: no - application name</li>
<li>Domain - String - required: no - site domain name</li>
<li>Type - int - required: no - service type:
0: all
1:Tomcat
2:Apache
3:Nginx
4:WebLogic
5:Websphere
6:JBoss
7:Jetty
8:IHS
9:Tengine</li>
<li>OsType - String - required: no - Windows/Linux</li>
 * @method string getOrder() Obtain Sorting method: asc for ascending order or desc for descending order
 * @method void setOrder(string $Order) Set Sorting method: asc for ascending order or desc for descending order
 * @method string getBy() Obtain Sorting method: [FirstTime|PluginCount]
 * @method void setBy(string $By) Set Sorting method: [FirstTime|PluginCount]
 */
class ExportAssetWebAppListRequest extends AbstractModel
{
    /**
     * @var string Query the information on the host with the specified QUUID
     */
    public $Quuid;

    /**
     * @var array Filtering criteria
<li>Name - String - required: no - application name</li>
<li>Domain - String - required: no - site domain name</li>
<li>Type - int - required: no - service type:
0: all
1:Tomcat
2:Apache
3:Nginx
4:WebLogic
5:Websphere
6:JBoss
7:Jetty
8:IHS
9:Tengine</li>
<li>OsType - String - required: no - Windows/Linux</li>
     */
    public $Filters;

    /**
     * @var string Sorting method: asc for ascending order or desc for descending order
     */
    public $Order;

    /**
     * @var string Sorting method: [FirstTime|PluginCount]
     */
    public $By;

    /**
     * @param string $Quuid Query the information on the host with the specified QUUID
     * @param array $Filters Filtering criteria
<li>Name - String - required: no - application name</li>
<li>Domain - String - required: no - site domain name</li>
<li>Type - int - required: no - service type:
0: all
1:Tomcat
2:Apache
3:Nginx
4:WebLogic
5:Websphere
6:JBoss
7:Jetty
8:IHS
9:Tengine</li>
<li>OsType - String - required: no - Windows/Linux</li>
     * @param string $Order Sorting method: asc for ascending order or desc for descending order
     * @param string $By Sorting method: [FirstTime|PluginCount]
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
