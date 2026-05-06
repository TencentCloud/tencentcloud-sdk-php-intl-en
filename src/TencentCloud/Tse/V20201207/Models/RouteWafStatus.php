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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Route WAF status
 *
 * @method string getName() Obtain Route name
 * @method void setName(string $Name) Set Route name
 * @method string getId() Obtain ID of the route
 * @method void setId(string $Id) Set ID of the route
 * @method string getStatus() Obtain Whether WAF protection is enabled for the route
 * @method void setStatus(string $Status) Set Whether WAF protection is enabled for the route
 * @method array getMethods() Obtain Method.
 * @method void setMethods(array $Methods) Set Method.
 * @method array getPaths() Obtain Path.
 * @method void setPaths(array $Paths) Set Path.
 * @method array getHosts() Obtain Domain
 * @method void setHosts(array $Hosts) Set Domain
 * @method string getServiceName() Obtain Name of the service corresponding to the route
 * @method void setServiceName(string $ServiceName) Set Name of the service corresponding to the route
 * @method string getServiceId() Obtain ID of the service corresponding to the route
 * @method void setServiceId(string $ServiceId) Set ID of the service corresponding to the route
 */
class RouteWafStatus extends AbstractModel
{
    /**
     * @var string Route name
     */
    public $Name;

    /**
     * @var string ID of the route
     */
    public $Id;

    /**
     * @var string Whether WAF protection is enabled for the route
     */
    public $Status;

    /**
     * @var array Method.
     */
    public $Methods;

    /**
     * @var array Path.
     */
    public $Paths;

    /**
     * @var array Domain
     */
    public $Hosts;

    /**
     * @var string Name of the service corresponding to the route
     */
    public $ServiceName;

    /**
     * @var string ID of the service corresponding to the route
     */
    public $ServiceId;

    /**
     * @param string $Name Route name
     * @param string $Id ID of the route
     * @param string $Status Whether WAF protection is enabled for the route
     * @param array $Methods Method.
     * @param array $Paths Path.
     * @param array $Hosts Domain
     * @param string $ServiceName Name of the service corresponding to the route
     * @param string $ServiceId ID of the service corresponding to the route
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Methods",$param) and $param["Methods"] !== null) {
            $this->Methods = $param["Methods"];
        }

        if (array_key_exists("Paths",$param) and $param["Paths"] !== null) {
            $this->Paths = $param["Paths"];
        }

        if (array_key_exists("Hosts",$param) and $param["Hosts"] !== null) {
            $this->Hosts = $param["Hosts"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }
    }
}
