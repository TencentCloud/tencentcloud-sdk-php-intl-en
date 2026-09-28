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
 * Health check template information
 *
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method array getHealthCheckCodes() Obtain Health check status code. Value:
- When the health check protocol is **HTTP/HTTPS**:
	- **http_1xx**
	- **http_2xx** (default value)
	-  **http_3xx**
	-  **http_4xx**
	-  **http_5xx**
- When the health check protocol is **GRPC/GRPCS**: default value is **12**, value range is **0-99**, input value can be numerical, multiple values or ranges, as well as combinations, for example:
	- **"20"**
	- **"0-99"**
 * @method void setHealthCheckCodes(array $HealthCheckCodes) Set Health check status code. Value:
- When the health check protocol is **HTTP/HTTPS**:
	- **http_1xx**
	- **http_2xx** (default value)
	-  **http_3xx**
	-  **http_4xx**
	-  **http_5xx**
- When the health check protocol is **GRPC/GRPCS**: default value is **12**, value range is **0-99**, input value can be numerical, multiple values or ranges, as well as combinations, for example:
	- **"20"**
	- **"0-99"**
 * @method integer getHealthCheckHealthyThreshold() Obtain Threshold for determining backend service health. The backend service status changes from **unhealthy** to **healthy** after this number of consecutive successful health checks.
Value range: **2**-**10**.
Default value: **2**.
 * @method void setHealthCheckHealthyThreshold(integer $HealthCheckHealthyThreshold) Set Threshold for determining backend service health. The backend service status changes from **unhealthy** to **healthy** after this number of consecutive successful health checks.
Value range: **2**-**10**.
Default value: **2**.
 * @method string getHealthCheckHost() Obtain Health check domain name.
Length limit: **1-255** characters.
It can contain lowercase letters, digits, hyphens (-), and half-width periods (.).

> This parameter takes effect only when **HealthCheckProtocol** is set to **HTTP/HTTPS/GRPC/GRPCS**.
 * @method void setHealthCheckHost(string $HealthCheckHost) Set Health check domain name.
Length limit: **1-255** characters.
It can contain lowercase letters, digits, hyphens (-), and half-width periods (.).

> This parameter takes effect only when **HealthCheckProtocol** is set to **HTTP/HTTPS/GRPC/GRPCS**.
 * @method string getHealthCheckHttpVersion() Obtain HTTP version for health check. Parameter Value:
- **HTTP1.1** (default)
- **HTTP1.0** 
> This parameter takes effect only when **HealthCheckProtocol** is set to **HTTP** or **HTTPS**.
 * @method void setHealthCheckHttpVersion(string $HealthCheckHttpVersion) Set HTTP version for health check. Parameter Value:
- **HTTP1.1** (default)
- **HTTP1.0** 
> This parameter takes effect only when **HealthCheckProtocol** is set to **HTTP** or **HTTPS**.
 * @method integer getHealthCheckInterval() Obtain The interval of health check. Unit: second.
Valid values: **2**-**300**.
Default value: **5**.
 * @method void setHealthCheckInterval(integer $HealthCheckInterval) Set The interval of health check. Unit: second.
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
 * @method string getHealthCheckPath() Obtain Health check forwarding rule path. Length: **1-80** characters. Only letters, digits, characters `-/.%?#&=` and extended characters `_;~!（)*[]@$^:',+` can be used. The URL must start with a forward slash (/). 
> The forwarding rule path parameter takes effect only when **HealthCheckProtocol** is set to **HTTP/HTTPS/GRPC/GRPCS**.
 * @method void setHealthCheckPath(string $HealthCheckPath) Set Health check forwarding rule path. Length: **1-80** characters. Only letters, digits, characters `-/.%?#&=` and extended characters `_;~!（)*[]@$^:',+` can be used. The URL must start with a forward slash (/). 
> The forwarding rule path parameter takes effect only when **HealthCheckProtocol** is set to **HTTP/HTTPS/GRPC/GRPCS**.
 * @method integer getHealthCheckPort() Obtain Port for health check to access the backend server.

Valid values: **0-65535**.

Default value: **0**, which indicates the backend server port.
 * @method void setHealthCheckPort(integer $HealthCheckPort) Set Port for health check to access the backend server.

Valid values: **0-65535**.

Default value: **0**, which indicates the backend server port.
 * @method string getHealthCheckProtocol() Obtain Health check protocol. Valid values:
- **HTTP** (default): Check whether the server application is healthy by sending HEAD or GET requests to simulate browser access requests.
- **HTTPS**: Check whether the server application is healthy by sending HEAD or GET requests to simulate browser access requests. (Encrypt data, more secure compared with HTTP.)
- **TCP**: Detect whether the server port is alive by sending SYN handshake messages.
- **GRPC**: Check whether the server application is healthy by sending a POST or GET request.
- **GRPCS**: Check whether the server application is healthy by sending a POST or GET request.
 * @method void setHealthCheckProtocol(string $HealthCheckProtocol) Set Health check protocol. Valid values:
- **HTTP** (default): Check whether the server application is healthy by sending HEAD or GET requests to simulate browser access requests.
- **HTTPS**: Check whether the server application is healthy by sending HEAD or GET requests to simulate browser access requests. (Encrypt data, more secure compared with HTTP.)
- **TCP**: Detect whether the server port is alive by sending SYN handshake messages.
- **GRPC**: Check whether the server application is healthy by sending a POST or GET request.
- **GRPCS**: Check whether the server application is healthy by sending a POST or GET request.
 * @method string getHealthCheckTemplateId() Obtain Health check template ID, in the format of hct- followed by alphanumeric characters. All APIs (creation, querying, modification, deletion) use the hct- prefix.
 * @method void setHealthCheckTemplateId(string $HealthCheckTemplateId) Set Health check template ID, in the format of hct- followed by alphanumeric characters. All APIs (creation, querying, modification, deletion) use the hct- prefix.
 * @method string getHealthCheckTemplateName() Obtain Health check template name. It must contain **1-255** characters, consisting of digits, upper- and lower-case letters, Chinese characters, half-width periods (.), underscores (_), and dashes (-).
 * @method void setHealthCheckTemplateName(string $HealthCheckTemplateName) Set Health check template name. It must contain **1-255** characters, consisting of digits, upper- and lower-case letters, Chinese characters, half-width periods (.), underscores (_), and dashes (-).
 * @method integer getHealthCheckTimeout() Obtain timeout period for the health check. Unit: seconds.
Valid values: **2**-**60**.
Default value: **2**.
 * @method void setHealthCheckTimeout(integer $HealthCheckTimeout) Set timeout period for the health check. Unit: seconds.
Valid values: **2**-**60**.
Default value: **2**.
 * @method integer getHealthCheckUnhealthyThreshold() Obtain Threshold for determining an unhealthy backend service. The backend service status changes from **healthy** to **unhealthy** after the health check fails this number of times consecutively.
Value range: **2**-**10**.
Default value: **2**.
 * @method void setHealthCheckUnhealthyThreshold(integer $HealthCheckUnhealthyThreshold) Set Threshold for determining an unhealthy backend service. The backend service status changes from **healthy** to **unhealthy** after the health check fails this number of times consecutively.
Value range: **2**-**10**.
Default value: **2**.
 * @method string getModifyTime() Obtain Modify the time.
 * @method void setModifyTime(string $ModifyTime) Set Modify the time.
 * @method array getTags() Obtain Tag.
 * @method void setTags(array $Tags) Set Tag.
 */
class HealthCheckTemplate extends AbstractModel
{
    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var array Health check status code. Value:
- When the health check protocol is **HTTP/HTTPS**:
	- **http_1xx**
	- **http_2xx** (default value)
	-  **http_3xx**
	-  **http_4xx**
	-  **http_5xx**
- When the health check protocol is **GRPC/GRPCS**: default value is **12**, value range is **0-99**, input value can be numerical, multiple values or ranges, as well as combinations, for example:
	- **"20"**
	- **"0-99"**
     */
    public $HealthCheckCodes;

    /**
     * @var integer Threshold for determining backend service health. The backend service status changes from **unhealthy** to **healthy** after this number of consecutive successful health checks.
Value range: **2**-**10**.
Default value: **2**.
     */
    public $HealthCheckHealthyThreshold;

    /**
     * @var string Health check domain name.
Length limit: **1-255** characters.
It can contain lowercase letters, digits, hyphens (-), and half-width periods (.).

> This parameter takes effect only when **HealthCheckProtocol** is set to **HTTP/HTTPS/GRPC/GRPCS**.
     */
    public $HealthCheckHost;

    /**
     * @var string HTTP version for health check. Parameter Value:
- **HTTP1.1** (default)
- **HTTP1.0** 
> This parameter takes effect only when **HealthCheckProtocol** is set to **HTTP** or **HTTPS**.
     */
    public $HealthCheckHttpVersion;

    /**
     * @var integer The interval of health check. Unit: second.
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
     * @var string Health check forwarding rule path. Length: **1-80** characters. Only letters, digits, characters `-/.%?#&=` and extended characters `_;~!（)*[]@$^:',+` can be used. The URL must start with a forward slash (/). 
> The forwarding rule path parameter takes effect only when **HealthCheckProtocol** is set to **HTTP/HTTPS/GRPC/GRPCS**.
     */
    public $HealthCheckPath;

    /**
     * @var integer Port for health check to access the backend server.

Valid values: **0-65535**.

Default value: **0**, which indicates the backend server port.
     */
    public $HealthCheckPort;

    /**
     * @var string Health check protocol. Valid values:
- **HTTP** (default): Check whether the server application is healthy by sending HEAD or GET requests to simulate browser access requests.
- **HTTPS**: Check whether the server application is healthy by sending HEAD or GET requests to simulate browser access requests. (Encrypt data, more secure compared with HTTP.)
- **TCP**: Detect whether the server port is alive by sending SYN handshake messages.
- **GRPC**: Check whether the server application is healthy by sending a POST or GET request.
- **GRPCS**: Check whether the server application is healthy by sending a POST or GET request.
     */
    public $HealthCheckProtocol;

    /**
     * @var string Health check template ID, in the format of hct- followed by alphanumeric characters. All APIs (creation, querying, modification, deletion) use the hct- prefix.
     */
    public $HealthCheckTemplateId;

    /**
     * @var string Health check template name. It must contain **1-255** characters, consisting of digits, upper- and lower-case letters, Chinese characters, half-width periods (.), underscores (_), and dashes (-).
     */
    public $HealthCheckTemplateName;

    /**
     * @var integer timeout period for the health check. Unit: seconds.
Valid values: **2**-**60**.
Default value: **2**.
     */
    public $HealthCheckTimeout;

    /**
     * @var integer Threshold for determining an unhealthy backend service. The backend service status changes from **healthy** to **unhealthy** after the health check fails this number of times consecutively.
Value range: **2**-**10**.
Default value: **2**.
     */
    public $HealthCheckUnhealthyThreshold;

    /**
     * @var string Modify the time.
     */
    public $ModifyTime;

    /**
     * @var array Tag.
     */
    public $Tags;

    /**
     * @param string $CreateTime Creation time.
     * @param array $HealthCheckCodes Health check status code. Value:
- When the health check protocol is **HTTP/HTTPS**:
	- **http_1xx**
	- **http_2xx** (default value)
	-  **http_3xx**
	-  **http_4xx**
	-  **http_5xx**
- When the health check protocol is **GRPC/GRPCS**: default value is **12**, value range is **0-99**, input value can be numerical, multiple values or ranges, as well as combinations, for example:
	- **"20"**
	- **"0-99"**
     * @param integer $HealthCheckHealthyThreshold Threshold for determining backend service health. The backend service status changes from **unhealthy** to **healthy** after this number of consecutive successful health checks.
Value range: **2**-**10**.
Default value: **2**.
     * @param string $HealthCheckHost Health check domain name.
Length limit: **1-255** characters.
It can contain lowercase letters, digits, hyphens (-), and half-width periods (.).

> This parameter takes effect only when **HealthCheckProtocol** is set to **HTTP/HTTPS/GRPC/GRPCS**.
     * @param string $HealthCheckHttpVersion HTTP version for health check. Parameter Value:
- **HTTP1.1** (default)
- **HTTP1.0** 
> This parameter takes effect only when **HealthCheckProtocol** is set to **HTTP** or **HTTPS**.
     * @param integer $HealthCheckInterval The interval of health check. Unit: second.
Valid values: **2**-**300**.
Default value: **5**.
     * @param string $HealthCheckMethod Health check method. Valid values:
- **GET**
- **HEAD** (default value)
> This parameter takes effect only when **HealthCheckProtocol** is set to **HTTP** or **HTTPS**.
     * @param string $HealthCheckPath Health check forwarding rule path. Length: **1-80** characters. Only letters, digits, characters `-/.%?#&=` and extended characters `_;~!（)*[]@$^:',+` can be used. The URL must start with a forward slash (/). 
> The forwarding rule path parameter takes effect only when **HealthCheckProtocol** is set to **HTTP/HTTPS/GRPC/GRPCS**.
     * @param integer $HealthCheckPort Port for health check to access the backend server.

Valid values: **0-65535**.

Default value: **0**, which indicates the backend server port.
     * @param string $HealthCheckProtocol Health check protocol. Valid values:
- **HTTP** (default): Check whether the server application is healthy by sending HEAD or GET requests to simulate browser access requests.
- **HTTPS**: Check whether the server application is healthy by sending HEAD or GET requests to simulate browser access requests. (Encrypt data, more secure compared with HTTP.)
- **TCP**: Detect whether the server port is alive by sending SYN handshake messages.
- **GRPC**: Check whether the server application is healthy by sending a POST or GET request.
- **GRPCS**: Check whether the server application is healthy by sending a POST or GET request.
     * @param string $HealthCheckTemplateId Health check template ID, in the format of hct- followed by alphanumeric characters. All APIs (creation, querying, modification, deletion) use the hct- prefix.
     * @param string $HealthCheckTemplateName Health check template name. It must contain **1-255** characters, consisting of digits, upper- and lower-case letters, Chinese characters, half-width periods (.), underscores (_), and dashes (-).
     * @param integer $HealthCheckTimeout timeout period for the health check. Unit: seconds.
Valid values: **2**-**60**.
Default value: **2**.
     * @param integer $HealthCheckUnhealthyThreshold Threshold for determining an unhealthy backend service. The backend service status changes from **healthy** to **unhealthy** after the health check fails this number of times consecutively.
Value range: **2**-**10**.
Default value: **2**.
     * @param string $ModifyTime Modify the time.
     * @param array $Tags Tag.
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
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

        if (array_key_exists("HealthCheckTemplateId",$param) and $param["HealthCheckTemplateId"] !== null) {
            $this->HealthCheckTemplateId = $param["HealthCheckTemplateId"];
        }

        if (array_key_exists("HealthCheckTemplateName",$param) and $param["HealthCheckTemplateName"] !== null) {
            $this->HealthCheckTemplateName = $param["HealthCheckTemplateName"];
        }

        if (array_key_exists("HealthCheckTimeout",$param) and $param["HealthCheckTimeout"] !== null) {
            $this->HealthCheckTimeout = $param["HealthCheckTimeout"];
        }

        if (array_key_exists("HealthCheckUnhealthyThreshold",$param) and $param["HealthCheckUnhealthyThreshold"] !== null) {
            $this->HealthCheckUnhealthyThreshold = $param["HealthCheckUnhealthyThreshold"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
