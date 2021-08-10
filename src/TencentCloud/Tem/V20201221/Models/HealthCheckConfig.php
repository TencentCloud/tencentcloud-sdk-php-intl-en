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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Health Check Configuration
 *
 * @method string getType() Obtain Health check type. Valid values: `HttpGet`，`TcpSocket`，`Exec`
 * @method void setType(string $Type) Set Health check type. Valid values: `HttpGet`，`TcpSocket`，`Exec`
 * @method string getProtocol() Obtain The protocol type. It’s only valid when the health check type is `HttpGet`.
 * @method void setProtocol(string $Protocol) Set The protocol type. It’s only valid when the health check type is `HttpGet`.
 * @method string getPath() Obtain The request path. It’s only valid when the health check type is `HttpGet`.
 * @method void setPath(string $Path) Set The request path. It’s only valid when the health check type is `HttpGet`.
 * @method string getExec() Obtain The script to be executed. It’s only valid when the health check type is `Exec`.
 * @method void setExec(string $Exec) Set The script to be executed. It’s only valid when the health check type is `Exec`.
 * @method integer getPort() Obtain The request port. It’s only valid when the health check type is `HttpGet` or `TcpSocket `.
 * @method void setPort(integer $Port) Set The request port. It’s only valid when the health check type is `HttpGet` or `TcpSocket `.
 * @method integer getInitialDelaySeconds() Obtain The initial delay for health check in seconds. Default: `0`
 * @method void setInitialDelaySeconds(integer $InitialDelaySeconds) Set The initial delay for health check in seconds. Default: `0`
 * @method integer getTimeoutSeconds() Obtain Timeout period in seconds. Default: `1`
 * @method void setTimeoutSeconds(integer $TimeoutSeconds) Set Timeout period in seconds. Default: `1`
 * @method integer getPeriodSeconds() Obtain Interval period in seconds. Default: `10`
 * @method void setPeriodSeconds(integer $PeriodSeconds) Set Interval period in seconds. Default: `10`
 */
class HealthCheckConfig extends AbstractModel
{
    /**
     * @var string Health check type. Valid values: `HttpGet`，`TcpSocket`，`Exec`
     */
    public $Type;

    /**
     * @var string The protocol type. It’s only valid when the health check type is `HttpGet`.
     */
    public $Protocol;

    /**
     * @var string The request path. It’s only valid when the health check type is `HttpGet`.
     */
    public $Path;

    /**
     * @var string The script to be executed. It’s only valid when the health check type is `Exec`.
     */
    public $Exec;

    /**
     * @var integer The request port. It’s only valid when the health check type is `HttpGet` or `TcpSocket `.
     */
    public $Port;

    /**
     * @var integer The initial delay for health check in seconds. Default: `0`
     */
    public $InitialDelaySeconds;

    /**
     * @var integer Timeout period in seconds. Default: `1`
     */
    public $TimeoutSeconds;

    /**
     * @var integer Interval period in seconds. Default: `10`
     */
    public $PeriodSeconds;

    /**
     * @param string $Type Health check type. Valid values: `HttpGet`，`TcpSocket`，`Exec`
     * @param string $Protocol The protocol type. It’s only valid when the health check type is `HttpGet`.
     * @param string $Path The request path. It’s only valid when the health check type is `HttpGet`.
     * @param string $Exec The script to be executed. It’s only valid when the health check type is `Exec`.
     * @param integer $Port The request port. It’s only valid when the health check type is `HttpGet` or `TcpSocket `.
     * @param integer $InitialDelaySeconds The initial delay for health check in seconds. Default: `0`
     * @param integer $TimeoutSeconds Timeout period in seconds. Default: `1`
     * @param integer $PeriodSeconds Interval period in seconds. Default: `10`
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Exec",$param) and $param["Exec"] !== null) {
            $this->Exec = $param["Exec"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("InitialDelaySeconds",$param) and $param["InitialDelaySeconds"] !== null) {
            $this->InitialDelaySeconds = $param["InitialDelaySeconds"];
        }

        if (array_key_exists("TimeoutSeconds",$param) and $param["TimeoutSeconds"] !== null) {
            $this->TimeoutSeconds = $param["TimeoutSeconds"];
        }

        if (array_key_exists("PeriodSeconds",$param) and $param["PeriodSeconds"] !== null) {
            $this->PeriodSeconds = $param["PeriodSeconds"];
        }
    }
}
