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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Health check configuration
 *
 * @method boolean getHealthCheckEnabled() Obtain Whether to enable the health check.
- **true**: enable.
- **false**: not enabled.
 * @method void setHealthCheckEnabled(boolean $HealthCheckEnabled) Set Whether to enable the health check.
- **true**: enable.
- **false**: not enabled.
 * @method array getHealthCheckCodes() Obtain Health check status code. Value:
- When the health check protocol is **HTTP/HTTPS**:
	- **http_1xx**
	- **http_2xx** (default value)
	-  **http_3xx**
	-  **http_4xx**
	-  **http_5xx**
- When the health check protocol is **gRPC**: default value: 12, value range: 0-99. The input value can be a numerical value, multiple values, a range, or a composite of these, for example:
	- **"20"**
	- **"0-99"**
> This parameter takes effect only when **HealthCheckProtocol** is set to **HTTP**, **HTTPS**, **GRPC**, or **GRPCS**.
 * @method void setHealthCheckCodes(array $HealthCheckCodes) Set Health check status code. Value:
- When the health check protocol is **HTTP/HTTPS**:
	- **http_1xx**
	- **http_2xx** (default value)
	-  **http_3xx**
	-  **http_4xx**
	-  **http_5xx**
- When the health check protocol is **gRPC**: default value: 12, value range: 0-99. The input value can be a numerical value, multiple values, a range, or a composite of these, for example:
	- **"20"**
	- **"0-99"**
> This parameter takes effect only when **HealthCheckProtocol** is set to **HTTP**, **HTTPS**, **GRPC**, or **GRPCS**.
 * @method integer getHealthCheckHealthyThreshold() Obtain Threshold for determining backend service health. After the number of consecutive successful health checks reaches this value, the backend service status changes from **unhealthy** to **healthy**.
Value range: **2**-**10**.
Default value: **2**.
 * @method void setHealthCheckHealthyThreshold(integer $HealthCheckHealthyThreshold) Set Threshold for determining backend service health. After the number of consecutive successful health checks reaches this value, the backend service status changes from **unhealthy** to **healthy**.
Value range: **2**-**10**.
Default value: **2**.
 * @method string getHealthCheckHost() Obtain Health check domain. If this parameter is not set, the intranet IP of the backend service is used as the health check address by default.
Domain restriction:
-Length limit: **1-255** characters.
- It can contain lowercase letters, digits, hyphens (-), and half-width periods (.).
-At least one half-width period (.) is required, and it cannot appear at the beginning or end.
-The rightmost domain tag can only contain letters. It cannot contain digits or en dashes (-).
-En dash (-) cannot appear at the beginning or end.
>This parameter takes effect only when **HealthCheckProtocol** is set to **HTTP**, **HTTPS**, **GRPC**, or **GRPCS**.
 * @method void setHealthCheckHost(string $HealthCheckHost) Set Health check domain. If this parameter is not set, the intranet IP of the backend service is used as the health check address by default.
Domain restriction:
-Length limit: **1-255** characters.
- It can contain lowercase letters, digits, hyphens (-), and half-width periods (.).
-At least one half-width period (.) is required, and it cannot appear at the beginning or end.
-The rightmost domain tag can only contain letters. It cannot contain digits or en dashes (-).
-En dash (-) cannot appear at the beginning or end.
>This parameter takes effect only when **HealthCheckProtocol** is set to **HTTP**, **HTTPS**, **GRPC**, or **GRPCS**.
 * @method string getHealthCheckHttpVersion() Obtain HTTP version for health check.
- **HTTP1.1** (default)
- **HTTP1.0** 
> This parameter takes effect only when **HealthCheckProtocol** is set to **HTTP** or **HTTPS**.
 * @method void setHealthCheckHttpVersion(string $HealthCheckHttpVersion) Set HTTP version for health check.
- **HTTP1.1** (default)
- **HTTP1.0** 
> This parameter takes effect only when **HealthCheckProtocol** is set to **HTTP** or **HTTPS**.
 * @method integer getHealthCheckInterval() Obtain Health check interval. Unit: second.
Valid values: **2**-**300**.
Default value: **5**.
 * @method void setHealthCheckInterval(integer $HealthCheckInterval) Set Health check interval. Unit: second.
Valid values: **2**-**300**.
Default value: **5**.
 * @method string getHealthCheckMethod() Obtain Health check method. Valid values:
- **GET**
- **HEAD** (default value)
> This parameter takes effect only when **HealthCheckProtocol** is set to **HTTP** or **HTTPS**.
 * @method void setHealthCheckMethod(string $HealthCheckMethod) Set Health check method. Valid values:
- **GET**
- **HEAD** (default value)
> This parameter takes effect only when **HealthCheckProtocol** is set to **HTTP** or **HTTPS**.
 * @method string getHealthCheckPath() Obtain Forwarding rule path for health check.
Length: 1–80 characters. Only letters, digits, characters `-/.%?#&=` and extended characters `_;~!()*[]@$^:',+` can be used. The URL must start with a forward slash (/).
> The forwarding rule path parameter takes effect only when **HealthCheckProtocol** is set to **HTTP**, **HTTPS**, **GRPC**, or **GRPCS**.
 * @method void setHealthCheckPath(string $HealthCheckPath) Set Forwarding rule path for health check.
Length: 1–80 characters. Only letters, digits, characters `-/.%?#&=` and extended characters `_;~!()*[]@$^:',+` can be used. The URL must start with a forward slash (/).
> The forwarding rule path parameter takes effect only when **HealthCheckProtocol** is set to **HTTP**, **HTTPS**, **GRPC**, or **GRPCS**.
 * @method integer getHealthCheckPort() Obtain Health check accesses the backend server port.

Valid values: **0-65535**.

Default value: **0**, which indicates the backend server port.
 * @method void setHealthCheckPort(integer $HealthCheckPort) Set Health check accesses the backend server port.

Valid values: **0-65535**.

Default value: **0**, which indicates the backend server port.
 * @method string getHealthCheckProtocol() Obtain Health check protocol. Valid values:
- **HTTP** (default): Simulate browser access requests by sending HEAD or GET requests to check whether the server application is healthy.
- **HTTPS**: Checks the health of a server application by sending HEAD or GET requests to simulate browser access requests. (Encrypts data and is more secure compared with HTTP.)
- **TCP**: Detect whether the server port is alive by sending SYN handshake messages.
- **GRPC**: Check whether the server application is healthy by sending a POST request.
- **GRPCS**: Send a POST request to check whether the server application is healthy.
 * @method void setHealthCheckProtocol(string $HealthCheckProtocol) Set Health check protocol. Valid values:
- **HTTP** (default): Simulate browser access requests by sending HEAD or GET requests to check whether the server application is healthy.
- **HTTPS**: Checks the health of a server application by sending HEAD or GET requests to simulate browser access requests. (Encrypts data and is more secure compared with HTTP.)
- **TCP**: Detect whether the server port is alive by sending SYN handshake messages.
- **GRPC**: Check whether the server application is healthy by sending a POST request.
- **GRPCS**: Send a POST request to check whether the server application is healthy.
 * @method integer getHealthCheckTimeout() Obtain timeout period for health check. Unit: seconds.
Valid values: **2**-**60**.
Default value: **2**.
 * @method void setHealthCheckTimeout(integer $HealthCheckTimeout) Set timeout period for health check. Unit: seconds.
Valid values: **2**-**60**.
Default value: **2**.
 * @method integer getHealthCheckUnhealthyThreshold() Obtain Threshold for determining an unhealthy backend service. The backend service status changes from **healthy** to **unhealthy** after the health check fails this number of consecutive times.
Value range: **2**-**10**.
Default value: **2**.
 * @method void setHealthCheckUnhealthyThreshold(integer $HealthCheckUnhealthyThreshold) Set Threshold for determining an unhealthy backend service. The backend service status changes from **healthy** to **unhealthy** after the health check fails this number of consecutive times.
Value range: **2**-**10**.
Default value: **2**.
 */
class HealthCheckConfig extends AbstractModel
{
    /**
     * @var boolean Whether to enable the health check.
- **true**: enable.
- **false**: not enabled.
     */
    public $HealthCheckEnabled;

    /**
     * @var array Health check status code. Value:
- When the health check protocol is **HTTP/HTTPS**:
	- **http_1xx**
	- **http_2xx** (default value)
	-  **http_3xx**
	-  **http_4xx**
	-  **http_5xx**
- When the health check protocol is **gRPC**: default value: 12, value range: 0-99. The input value can be a numerical value, multiple values, a range, or a composite of these, for example:
	- **"20"**
	- **"0-99"**
> This parameter takes effect only when **HealthCheckProtocol** is set to **HTTP**, **HTTPS**, **GRPC**, or **GRPCS**.
     */
    public $HealthCheckCodes;

    /**
     * @var integer Threshold for determining backend service health. After the number of consecutive successful health checks reaches this value, the backend service status changes from **unhealthy** to **healthy**.
Value range: **2**-**10**.
Default value: **2**.
     */
    public $HealthCheckHealthyThreshold;

    /**
     * @var string Health check domain. If this parameter is not set, the intranet IP of the backend service is used as the health check address by default.
Domain restriction:
-Length limit: **1-255** characters.
- It can contain lowercase letters, digits, hyphens (-), and half-width periods (.).
-At least one half-width period (.) is required, and it cannot appear at the beginning or end.
-The rightmost domain tag can only contain letters. It cannot contain digits or en dashes (-).
-En dash (-) cannot appear at the beginning or end.
>This parameter takes effect only when **HealthCheckProtocol** is set to **HTTP**, **HTTPS**, **GRPC**, or **GRPCS**.
     */
    public $HealthCheckHost;

    /**
     * @var string HTTP version for health check.
- **HTTP1.1** (default)
- **HTTP1.0** 
> This parameter takes effect only when **HealthCheckProtocol** is set to **HTTP** or **HTTPS**.
     */
    public $HealthCheckHttpVersion;

    /**
     * @var integer Health check interval. Unit: second.
Valid values: **2**-**300**.
Default value: **5**.
     */
    public $HealthCheckInterval;

    /**
     * @var string Health check method. Valid values:
- **GET**
- **HEAD** (default value)
> This parameter takes effect only when **HealthCheckProtocol** is set to **HTTP** or **HTTPS**.
     */
    public $HealthCheckMethod;

    /**
     * @var string Forwarding rule path for health check.
Length: 1–80 characters. Only letters, digits, characters `-/.%?#&=` and extended characters `_;~!()*[]@$^:',+` can be used. The URL must start with a forward slash (/).
> The forwarding rule path parameter takes effect only when **HealthCheckProtocol** is set to **HTTP**, **HTTPS**, **GRPC**, or **GRPCS**.
     */
    public $HealthCheckPath;

    /**
     * @var integer Health check accesses the backend server port.

Valid values: **0-65535**.

Default value: **0**, which indicates the backend server port.
     */
    public $HealthCheckPort;

    /**
     * @var string Health check protocol. Valid values:
- **HTTP** (default): Simulate browser access requests by sending HEAD or GET requests to check whether the server application is healthy.
- **HTTPS**: Checks the health of a server application by sending HEAD or GET requests to simulate browser access requests. (Encrypts data and is more secure compared with HTTP.)
- **TCP**: Detect whether the server port is alive by sending SYN handshake messages.
- **GRPC**: Check whether the server application is healthy by sending a POST request.
- **GRPCS**: Send a POST request to check whether the server application is healthy.
     */
    public $HealthCheckProtocol;

    /**
     * @var integer timeout period for health check. Unit: seconds.
Valid values: **2**-**60**.
Default value: **2**.
     */
    public $HealthCheckTimeout;

    /**
     * @var integer Threshold for determining an unhealthy backend service. The backend service status changes from **healthy** to **unhealthy** after the health check fails this number of consecutive times.
Value range: **2**-**10**.
Default value: **2**.
     */
    public $HealthCheckUnhealthyThreshold;

    /**
     * @param boolean $HealthCheckEnabled Whether to enable the health check.
- **true**: enable.
- **false**: not enabled.
     * @param array $HealthCheckCodes Health check status code. Value:
- When the health check protocol is **HTTP/HTTPS**:
	- **http_1xx**
	- **http_2xx** (default value)
	-  **http_3xx**
	-  **http_4xx**
	-  **http_5xx**
- When the health check protocol is **gRPC**: default value: 12, value range: 0-99. The input value can be a numerical value, multiple values, a range, or a composite of these, for example:
	- **"20"**
	- **"0-99"**
> This parameter takes effect only when **HealthCheckProtocol** is set to **HTTP**, **HTTPS**, **GRPC**, or **GRPCS**.
     * @param integer $HealthCheckHealthyThreshold Threshold for determining backend service health. After the number of consecutive successful health checks reaches this value, the backend service status changes from **unhealthy** to **healthy**.
Value range: **2**-**10**.
Default value: **2**.
     * @param string $HealthCheckHost Health check domain. If this parameter is not set, the intranet IP of the backend service is used as the health check address by default.
Domain restriction:
-Length limit: **1-255** characters.
- It can contain lowercase letters, digits, hyphens (-), and half-width periods (.).
-At least one half-width period (.) is required, and it cannot appear at the beginning or end.
-The rightmost domain tag can only contain letters. It cannot contain digits or en dashes (-).
-En dash (-) cannot appear at the beginning or end.
>This parameter takes effect only when **HealthCheckProtocol** is set to **HTTP**, **HTTPS**, **GRPC**, or **GRPCS**.
     * @param string $HealthCheckHttpVersion HTTP version for health check.
- **HTTP1.1** (default)
- **HTTP1.0** 
> This parameter takes effect only when **HealthCheckProtocol** is set to **HTTP** or **HTTPS**.
     * @param integer $HealthCheckInterval Health check interval. Unit: second.
Valid values: **2**-**300**.
Default value: **5**.
     * @param string $HealthCheckMethod Health check method. Valid values:
- **GET**
- **HEAD** (default value)
> This parameter takes effect only when **HealthCheckProtocol** is set to **HTTP** or **HTTPS**.
     * @param string $HealthCheckPath Forwarding rule path for health check.
Length: 1–80 characters. Only letters, digits, characters `-/.%?#&=` and extended characters `_;~!()*[]@$^:',+` can be used. The URL must start with a forward slash (/).
> The forwarding rule path parameter takes effect only when **HealthCheckProtocol** is set to **HTTP**, **HTTPS**, **GRPC**, or **GRPCS**.
     * @param integer $HealthCheckPort Health check accesses the backend server port.

Valid values: **0-65535**.

Default value: **0**, which indicates the backend server port.
     * @param string $HealthCheckProtocol Health check protocol. Valid values:
- **HTTP** (default): Simulate browser access requests by sending HEAD or GET requests to check whether the server application is healthy.
- **HTTPS**: Checks the health of a server application by sending HEAD or GET requests to simulate browser access requests. (Encrypts data and is more secure compared with HTTP.)
- **TCP**: Detect whether the server port is alive by sending SYN handshake messages.
- **GRPC**: Check whether the server application is healthy by sending a POST request.
- **GRPCS**: Send a POST request to check whether the server application is healthy.
     * @param integer $HealthCheckTimeout timeout period for health check. Unit: seconds.
Valid values: **2**-**60**.
Default value: **2**.
     * @param integer $HealthCheckUnhealthyThreshold Threshold for determining an unhealthy backend service. The backend service status changes from **healthy** to **unhealthy** after the health check fails this number of consecutive times.
Value range: **2**-**10**.
Default value: **2**.
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
        if (array_key_exists("HealthCheckEnabled",$param) and $param["HealthCheckEnabled"] !== null) {
            $this->HealthCheckEnabled = $param["HealthCheckEnabled"];
        }

        if (array_key_exists("HealthCheckCodes",$param) and $param["HealthCheckCodes"] !== null) {
            $this->HealthCheckCodes = $param["HealthCheckCodes"];
        }

        if (array_key_exists("HealthCheckHealthyThreshold",$param) and $param["HealthCheckHealthyThreshold"] !== null) {
            $this->HealthCheckHealthyThreshold = $param["HealthCheckHealthyThreshold"];
        }

        if (array_key_exists("HealthCheckHost",$param) and $param["HealthCheckHost"] !== null) {
            $this->HealthCheckHost = $param["HealthCheckHost"];
        }

        if (array_key_exists("HealthCheckHttpVersion",$param) and $param["HealthCheckHttpVersion"] !== null) {
            $this->HealthCheckHttpVersion = $param["HealthCheckHttpVersion"];
        }

        if (array_key_exists("HealthCheckInterval",$param) and $param["HealthCheckInterval"] !== null) {
            $this->HealthCheckInterval = $param["HealthCheckInterval"];
        }

        if (array_key_exists("HealthCheckMethod",$param) and $param["HealthCheckMethod"] !== null) {
            $this->HealthCheckMethod = $param["HealthCheckMethod"];
        }

        if (array_key_exists("HealthCheckPath",$param) and $param["HealthCheckPath"] !== null) {
            $this->HealthCheckPath = $param["HealthCheckPath"];
        }

        if (array_key_exists("HealthCheckPort",$param) and $param["HealthCheckPort"] !== null) {
            $this->HealthCheckPort = $param["HealthCheckPort"];
        }

        if (array_key_exists("HealthCheckProtocol",$param) and $param["HealthCheckProtocol"] !== null) {
            $this->HealthCheckProtocol = $param["HealthCheckProtocol"];
        }

        if (array_key_exists("HealthCheckTimeout",$param) and $param["HealthCheckTimeout"] !== null) {
            $this->HealthCheckTimeout = $param["HealthCheckTimeout"];
        }

        if (array_key_exists("HealthCheckUnhealthyThreshold",$param) and $param["HealthCheckUnhealthyThreshold"] !== null) {
            $this->HealthCheckUnhealthyThreshold = $param["HealthCheckUnhealthyThreshold"];
        }
    }
}
