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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RoutePrometheusDynamicAPI request structure.
 *
 * @method string getInstanceId() Obtain <p>Prometheus Instance ID</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Prometheus Instance ID</p>
 * @method string getMethod() Obtain <p>HTTP method name GET/POST/PUT/DELETE</p>
 * @method void setMethod(string $Method) Set <p>HTTP method name GET/POST/PUT/DELETE</p>
 * @method string getPath() Obtain <p>HTTP path (including query string)</p>
 * @method void setPath(string $Path) Set <p>HTTP path (including query string)</p>
 * @method string getRequestBody() Obtain <p>HTTP request body, any data</p>
 * @method void setRequestBody(string $RequestBody) Set <p>HTTP request body, any data</p>
 * @method array getHeaders() Obtain <p>HTTP headers</p>
 * @method void setHeaders(array $Headers) Set <p>HTTP headers</p>
 */
class RoutePrometheusDynamicAPIRequest extends AbstractModel
{
    /**
     * @var string <p>Prometheus Instance ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>HTTP method name GET/POST/PUT/DELETE</p>
     */
    public $Method;

    /**
     * @var string <p>HTTP path (including query string)</p>
     */
    public $Path;

    /**
     * @var string <p>HTTP request body, any data</p>
     */
    public $RequestBody;

    /**
     * @var array <p>HTTP headers</p>
     */
    public $Headers;

    /**
     * @param string $InstanceId <p>Prometheus Instance ID</p>
     * @param string $Method <p>HTTP method name GET/POST/PUT/DELETE</p>
     * @param string $Path <p>HTTP path (including query string)</p>
     * @param string $RequestBody <p>HTTP request body, any data</p>
     * @param array $Headers <p>HTTP headers</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("RequestBody",$param) and $param["RequestBody"] !== null) {
            $this->RequestBody = $param["RequestBody"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = [];
            foreach ($param["Headers"] as $key => $value){
                $obj = new PrometheusStringKeyValuePair();
                $obj->deserialize($value);
                array_push($this->Headers, $obj);
            }
        }
    }
}
