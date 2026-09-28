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
 * ModifyHealthCheckTemplate request structure.
 *
 * @method string getHealthCheckTemplateId() Obtain <p>Health check template ID. The format is `hct-` followed by alphanumeric characters.</p>
 * @method void setHealthCheckTemplateId(string $HealthCheckTemplateId) Set <p>Health check template ID. The format is `hct-` followed by alphanumeric characters.</p>
 * @method boolean getDryRun() Obtain <p>Whether to preview this request.</p><ul><li><strong>false</strong> (default): Send a normal request to directly modify the health check template.</li><li><strong>true</strong>: Send a preview request to check whether the parameters, format, and service limits of the modified health check template meet the requirements.</li></ul>
 * @method void setDryRun(boolean $DryRun) Set <p>Whether to preview this request.</p><ul><li><strong>false</strong> (default): Send a normal request to directly modify the health check template.</li><li><strong>true</strong>: Send a preview request to check whether the parameters, format, and service limits of the modified health check template meet the requirements.</li></ul>
 * @method array getHealthCheckCodes() Obtain <p>Health check status code. Value:</p><ul><li>When the health check protocol is <strong>HTTP/HTTPS</strong>:<ul><li><strong>HTTP_1xx</strong></li><li><strong>HTTP_2xx</strong> (default value)</li><li><strong>HTTP_3xx</strong></li><li><strong>HTTP_4xx</strong></li><li><strong>HTTP_5xx</strong></li></ul></li><li>When the health check protocol is <strong>GRPC/GRPCS</strong>: the default value is <strong>12</strong>, the value range is <strong>0-99</strong>, and the input value can be a numerical value, multiple values, a range, or a combination, for example:<ul><li><strong>"20"</strong></li><li><strong>"0-99"</strong></li></ul></li></ul>
 * @method void setHealthCheckCodes(array $HealthCheckCodes) Set <p>Health check status code. Value:</p><ul><li>When the health check protocol is <strong>HTTP/HTTPS</strong>:<ul><li><strong>HTTP_1xx</strong></li><li><strong>HTTP_2xx</strong> (default value)</li><li><strong>HTTP_3xx</strong></li><li><strong>HTTP_4xx</strong></li><li><strong>HTTP_5xx</strong></li></ul></li><li>When the health check protocol is <strong>GRPC/GRPCS</strong>: the default value is <strong>12</strong>, the value range is <strong>0-99</strong>, and the input value can be a numerical value, multiple values, a range, or a combination, for example:<ul><li><strong>"20"</strong></li><li><strong>"0-99"</strong></li></ul></li></ul>
 * @method integer getHealthCheckHealthyThreshold() Obtain <p>Threshold for determining backend service health. After the health check succeeds consecutively for this number of times, the backend service status changes from <strong>unhealthy</strong> to <strong>healthy</strong>.<br>Value range: <strong>2</strong>-<strong>10</strong>.<br>Default value: <strong>2</strong>.</p>
 * @method void setHealthCheckHealthyThreshold(integer $HealthCheckHealthyThreshold) Set <p>Threshold for determining backend service health. After the health check succeeds consecutively for this number of times, the backend service status changes from <strong>unhealthy</strong> to <strong>healthy</strong>.<br>Value range: <strong>2</strong>-<strong>10</strong>.<br>Default value: <strong>2</strong>.</p>
 * @method string getHealthCheckHost() Obtain <p>Health check domain name.<br>Length limit: <strong>1-255</strong> characters.<br>It can contain lowercase letters, digits, dashes (-), and half-width periods (.).</p><blockquote><p>This parameter takes effect only when <strong>HealthCheckProtocol</strong> is set to <strong>HTTP/HTTPS/GRPC/GRPCS</strong>.</p></blockquote>
 * @method void setHealthCheckHost(string $HealthCheckHost) Set <p>Health check domain name.<br>Length limit: <strong>1-255</strong> characters.<br>It can contain lowercase letters, digits, dashes (-), and half-width periods (.).</p><blockquote><p>This parameter takes effect only when <strong>HealthCheckProtocol</strong> is set to <strong>HTTP/HTTPS/GRPC/GRPCS</strong>.</p></blockquote>
 * @method string getHealthCheckHttpVersion() Obtain <p>HTTP version for health check. Valid values:</p><ul><li><strong>HTTP1.1</strong> (default)</li><li><strong>HTTP1.0</strong> <blockquote><p>This parameter takes effect only when <strong>HealthCheckProtocol</strong> is set to <strong>HTTP</strong> or <strong>HTTPS</strong>.</p></blockquote></li></ul>
 * @method void setHealthCheckHttpVersion(string $HealthCheckHttpVersion) Set <p>HTTP version for health check. Valid values:</p><ul><li><strong>HTTP1.1</strong> (default)</li><li><strong>HTTP1.0</strong> <blockquote><p>This parameter takes effect only when <strong>HealthCheckProtocol</strong> is set to <strong>HTTP</strong> or <strong>HTTPS</strong>.</p></blockquote></li></ul>
 * @method integer getHealthCheckInterval() Obtain <p>The interval of health check. Unit: second. Value range: <strong>2</strong>-<strong>300</strong>. Default value: <strong>5</strong>.</p>
 * @method void setHealthCheckInterval(integer $HealthCheckInterval) Set <p>The interval of health check. Unit: second. Value range: <strong>2</strong>-<strong>300</strong>. Default value: <strong>5</strong>.</p>
 * @method string getHealthCheckMethod() Obtain <p>Health check method. Value: - <strong>GET</strong> - <strong>HEAD</strong> (default value) </p><blockquote><p>This parameter takes effect only when <strong>HealthCheckProtocol</strong> is set to <strong>HTTP</strong> or <strong>HTTPS</strong>.</p></blockquote>
 * @method void setHealthCheckMethod(string $HealthCheckMethod) Set <p>Health check method. Value: - <strong>GET</strong> - <strong>HEAD</strong> (default value) </p><blockquote><p>This parameter takes effect only when <strong>HealthCheckProtocol</strong> is set to <strong>HTTP</strong> or <strong>HTTPS</strong>.</p></blockquote>
 * @method string getHealthCheckPath() Obtain <p>Forwarding rule path for health check. The length is <strong>1-80</strong> characters. Only letters, digits, characters <code>-/.%?#&amp;=</code>, and extended characters <code>_;~!（)*[]@$^:&#39;,+</code> can be used. The URL must start with a forward slash (/). </p><blockquote><p>The forwarding rule path parameter takes effect only when <strong>HealthCheckProtocol</strong> is <strong>HTTP/HTTPS/GRPC/GRPCS</strong>.</p></blockquote>
 * @method void setHealthCheckPath(string $HealthCheckPath) Set <p>Forwarding rule path for health check. The length is <strong>1-80</strong> characters. Only letters, digits, characters <code>-/.%?#&amp;=</code>, and extended characters <code>_;~!（)*[]@$^:&#39;,+</code> can be used. The URL must start with a forward slash (/). </p><blockquote><p>The forwarding rule path parameter takes effect only when <strong>HealthCheckProtocol</strong> is <strong>HTTP/HTTPS/GRPC/GRPCS</strong>.</p></blockquote>
 * @method integer getHealthCheckPort() Obtain <p>Health check access to the backend server port. Value range: <strong>0-65535</strong>. Default value: <strong>0</strong>, which means the backend server port.</p>
 * @method void setHealthCheckPort(integer $HealthCheckPort) Set <p>Health check access to the backend server port. Value range: <strong>0-65535</strong>. Default value: <strong>0</strong>, which means the backend server port.</p>
 * @method string getHealthCheckProtocol() Obtain <p>Health check protocol. Valid values:</p><ul><li><strong>HTTP</strong> (default): Sends HEAD or GET requests to simulate browser access requests and check whether the server application is healthy.</li><li><strong>HTTPS</strong>: Sends HEAD or GET requests to simulate browser access requests and check whether the server application is healthy. (Encrypts data and is more secure than HTTP.)</li><li><strong>TCP</strong>: Sends SYN handshake messages to detect whether the server port is alive.</li><li><strong>GRPC</strong>: Sends POST or GET requests to check whether the server application is healthy.</li><li><strong>GRPCS</strong>: Sends POST or GET requests to check whether the server application is healthy.</li></ul>
 * @method void setHealthCheckProtocol(string $HealthCheckProtocol) Set <p>Health check protocol. Valid values:</p><ul><li><strong>HTTP</strong> (default): Sends HEAD or GET requests to simulate browser access requests and check whether the server application is healthy.</li><li><strong>HTTPS</strong>: Sends HEAD or GET requests to simulate browser access requests and check whether the server application is healthy. (Encrypts data and is more secure than HTTP.)</li><li><strong>TCP</strong>: Sends SYN handshake messages to detect whether the server port is alive.</li><li><strong>GRPC</strong>: Sends POST or GET requests to check whether the server application is healthy.</li><li><strong>GRPCS</strong>: Sends POST or GET requests to check whether the server application is healthy.</li></ul>
 * @method string getHealthCheckTemplateName() Obtain <p>Health check template name. It is 1-255 characters long and can contain digits, upper- and lower-case letters, Chinese characters, half-width periods (.), underscores (_), and dashes (-).</p>
 * @method void setHealthCheckTemplateName(string $HealthCheckTemplateName) Set <p>Health check template name. It is 1-255 characters long and can contain digits, upper- and lower-case letters, Chinese characters, half-width periods (.), underscores (_), and dashes (-).</p>
 * @method integer getHealthCheckTimeout() Obtain <p>Health check response timeout, in seconds.<br>Value range: <strong>2</strong>-<strong>60</strong>.<br>Default value: <strong>2</strong>.</p>
 * @method void setHealthCheckTimeout(integer $HealthCheckTimeout) Set <p>Health check response timeout, in seconds.<br>Value range: <strong>2</strong>-<strong>60</strong>.<br>Default value: <strong>2</strong>.</p>
 * @method integer getHealthCheckUnhealthyThreshold() Obtain <p>Threshold for determining an unhealthy backend service. After how many consecutive health check failures, the backend service status changes from <strong>healthy</strong> to <strong>unhealthy</strong>.<br>Value range: <strong>2</strong>-<strong>10</strong>.<br>Default value: <strong>2</strong>.</p>
 * @method void setHealthCheckUnhealthyThreshold(integer $HealthCheckUnhealthyThreshold) Set <p>Threshold for determining an unhealthy backend service. After how many consecutive health check failures, the backend service status changes from <strong>healthy</strong> to <strong>unhealthy</strong>.<br>Value range: <strong>2</strong>-<strong>10</strong>.<br>Default value: <strong>2</strong>.</p>
 */
class ModifyHealthCheckTemplateRequest extends AbstractModel
{
    /**
     * @var string <p>Health check template ID. The format is `hct-` followed by alphanumeric characters.</p>
     */
    public $HealthCheckTemplateId;

    /**
     * @var boolean <p>Whether to preview this request.</p><ul><li><strong>false</strong> (default): Send a normal request to directly modify the health check template.</li><li><strong>true</strong>: Send a preview request to check whether the parameters, format, and service limits of the modified health check template meet the requirements.</li></ul>
     */
    public $DryRun;

    /**
     * @var array <p>Health check status code. Value:</p><ul><li>When the health check protocol is <strong>HTTP/HTTPS</strong>:<ul><li><strong>HTTP_1xx</strong></li><li><strong>HTTP_2xx</strong> (default value)</li><li><strong>HTTP_3xx</strong></li><li><strong>HTTP_4xx</strong></li><li><strong>HTTP_5xx</strong></li></ul></li><li>When the health check protocol is <strong>GRPC/GRPCS</strong>: the default value is <strong>12</strong>, the value range is <strong>0-99</strong>, and the input value can be a numerical value, multiple values, a range, or a combination, for example:<ul><li><strong>"20"</strong></li><li><strong>"0-99"</strong></li></ul></li></ul>
     */
    public $HealthCheckCodes;

    /**
     * @var integer <p>Threshold for determining backend service health. After the health check succeeds consecutively for this number of times, the backend service status changes from <strong>unhealthy</strong> to <strong>healthy</strong>.<br>Value range: <strong>2</strong>-<strong>10</strong>.<br>Default value: <strong>2</strong>.</p>
     */
    public $HealthCheckHealthyThreshold;

    /**
     * @var string <p>Health check domain name.<br>Length limit: <strong>1-255</strong> characters.<br>It can contain lowercase letters, digits, dashes (-), and half-width periods (.).</p><blockquote><p>This parameter takes effect only when <strong>HealthCheckProtocol</strong> is set to <strong>HTTP/HTTPS/GRPC/GRPCS</strong>.</p></blockquote>
     */
    public $HealthCheckHost;

    /**
     * @var string <p>HTTP version for health check. Valid values:</p><ul><li><strong>HTTP1.1</strong> (default)</li><li><strong>HTTP1.0</strong> <blockquote><p>This parameter takes effect only when <strong>HealthCheckProtocol</strong> is set to <strong>HTTP</strong> or <strong>HTTPS</strong>.</p></blockquote></li></ul>
     */
    public $HealthCheckHttpVersion;

    /**
     * @var integer <p>The interval of health check. Unit: second. Value range: <strong>2</strong>-<strong>300</strong>. Default value: <strong>5</strong>.</p>
     */
    public $HealthCheckInterval;

    /**
     * @var string <p>Health check method. Value: - <strong>GET</strong> - <strong>HEAD</strong> (default value) </p><blockquote><p>This parameter takes effect only when <strong>HealthCheckProtocol</strong> is set to <strong>HTTP</strong> or <strong>HTTPS</strong>.</p></blockquote>
     */
    public $HealthCheckMethod;

    /**
     * @var string <p>Forwarding rule path for health check. The length is <strong>1-80</strong> characters. Only letters, digits, characters <code>-/.%?#&amp;=</code>, and extended characters <code>_;~!（)*[]@$^:&#39;,+</code> can be used. The URL must start with a forward slash (/). </p><blockquote><p>The forwarding rule path parameter takes effect only when <strong>HealthCheckProtocol</strong> is <strong>HTTP/HTTPS/GRPC/GRPCS</strong>.</p></blockquote>
     */
    public $HealthCheckPath;

    /**
     * @var integer <p>Health check access to the backend server port. Value range: <strong>0-65535</strong>. Default value: <strong>0</strong>, which means the backend server port.</p>
     */
    public $HealthCheckPort;

    /**
     * @var string <p>Health check protocol. Valid values:</p><ul><li><strong>HTTP</strong> (default): Sends HEAD or GET requests to simulate browser access requests and check whether the server application is healthy.</li><li><strong>HTTPS</strong>: Sends HEAD or GET requests to simulate browser access requests and check whether the server application is healthy. (Encrypts data and is more secure than HTTP.)</li><li><strong>TCP</strong>: Sends SYN handshake messages to detect whether the server port is alive.</li><li><strong>GRPC</strong>: Sends POST or GET requests to check whether the server application is healthy.</li><li><strong>GRPCS</strong>: Sends POST or GET requests to check whether the server application is healthy.</li></ul>
     */
    public $HealthCheckProtocol;

    /**
     * @var string <p>Health check template name. It is 1-255 characters long and can contain digits, upper- and lower-case letters, Chinese characters, half-width periods (.), underscores (_), and dashes (-).</p>
     */
    public $HealthCheckTemplateName;

    /**
     * @var integer <p>Health check response timeout, in seconds.<br>Value range: <strong>2</strong>-<strong>60</strong>.<br>Default value: <strong>2</strong>.</p>
     */
    public $HealthCheckTimeout;

    /**
     * @var integer <p>Threshold for determining an unhealthy backend service. After how many consecutive health check failures, the backend service status changes from <strong>healthy</strong> to <strong>unhealthy</strong>.<br>Value range: <strong>2</strong>-<strong>10</strong>.<br>Default value: <strong>2</strong>.</p>
     */
    public $HealthCheckUnhealthyThreshold;

    /**
     * @param string $HealthCheckTemplateId <p>Health check template ID. The format is `hct-` followed by alphanumeric characters.</p>
     * @param boolean $DryRun <p>Whether to preview this request.</p><ul><li><strong>false</strong> (default): Send a normal request to directly modify the health check template.</li><li><strong>true</strong>: Send a preview request to check whether the parameters, format, and service limits of the modified health check template meet the requirements.</li></ul>
     * @param array $HealthCheckCodes <p>Health check status code. Value:</p><ul><li>When the health check protocol is <strong>HTTP/HTTPS</strong>:<ul><li><strong>HTTP_1xx</strong></li><li><strong>HTTP_2xx</strong> (default value)</li><li><strong>HTTP_3xx</strong></li><li><strong>HTTP_4xx</strong></li><li><strong>HTTP_5xx</strong></li></ul></li><li>When the health check protocol is <strong>GRPC/GRPCS</strong>: the default value is <strong>12</strong>, the value range is <strong>0-99</strong>, and the input value can be a numerical value, multiple values, a range, or a combination, for example:<ul><li><strong>"20"</strong></li><li><strong>"0-99"</strong></li></ul></li></ul>
     * @param integer $HealthCheckHealthyThreshold <p>Threshold for determining backend service health. After the health check succeeds consecutively for this number of times, the backend service status changes from <strong>unhealthy</strong> to <strong>healthy</strong>.<br>Value range: <strong>2</strong>-<strong>10</strong>.<br>Default value: <strong>2</strong>.</p>
     * @param string $HealthCheckHost <p>Health check domain name.<br>Length limit: <strong>1-255</strong> characters.<br>It can contain lowercase letters, digits, dashes (-), and half-width periods (.).</p><blockquote><p>This parameter takes effect only when <strong>HealthCheckProtocol</strong> is set to <strong>HTTP/HTTPS/GRPC/GRPCS</strong>.</p></blockquote>
     * @param string $HealthCheckHttpVersion <p>HTTP version for health check. Valid values:</p><ul><li><strong>HTTP1.1</strong> (default)</li><li><strong>HTTP1.0</strong> <blockquote><p>This parameter takes effect only when <strong>HealthCheckProtocol</strong> is set to <strong>HTTP</strong> or <strong>HTTPS</strong>.</p></blockquote></li></ul>
     * @param integer $HealthCheckInterval <p>The interval of health check. Unit: second. Value range: <strong>2</strong>-<strong>300</strong>. Default value: <strong>5</strong>.</p>
     * @param string $HealthCheckMethod <p>Health check method. Value: - <strong>GET</strong> - <strong>HEAD</strong> (default value) </p><blockquote><p>This parameter takes effect only when <strong>HealthCheckProtocol</strong> is set to <strong>HTTP</strong> or <strong>HTTPS</strong>.</p></blockquote>
     * @param string $HealthCheckPath <p>Forwarding rule path for health check. The length is <strong>1-80</strong> characters. Only letters, digits, characters <code>-/.%?#&amp;=</code>, and extended characters <code>_;~!（)*[]@$^:&#39;,+</code> can be used. The URL must start with a forward slash (/). </p><blockquote><p>The forwarding rule path parameter takes effect only when <strong>HealthCheckProtocol</strong> is <strong>HTTP/HTTPS/GRPC/GRPCS</strong>.</p></blockquote>
     * @param integer $HealthCheckPort <p>Health check access to the backend server port. Value range: <strong>0-65535</strong>. Default value: <strong>0</strong>, which means the backend server port.</p>
     * @param string $HealthCheckProtocol <p>Health check protocol. Valid values:</p><ul><li><strong>HTTP</strong> (default): Sends HEAD or GET requests to simulate browser access requests and check whether the server application is healthy.</li><li><strong>HTTPS</strong>: Sends HEAD or GET requests to simulate browser access requests and check whether the server application is healthy. (Encrypts data and is more secure than HTTP.)</li><li><strong>TCP</strong>: Sends SYN handshake messages to detect whether the server port is alive.</li><li><strong>GRPC</strong>: Sends POST or GET requests to check whether the server application is healthy.</li><li><strong>GRPCS</strong>: Sends POST or GET requests to check whether the server application is healthy.</li></ul>
     * @param string $HealthCheckTemplateName <p>Health check template name. It is 1-255 characters long and can contain digits, upper- and lower-case letters, Chinese characters, half-width periods (.), underscores (_), and dashes (-).</p>
     * @param integer $HealthCheckTimeout <p>Health check response timeout, in seconds.<br>Value range: <strong>2</strong>-<strong>60</strong>.<br>Default value: <strong>2</strong>.</p>
     * @param integer $HealthCheckUnhealthyThreshold <p>Threshold for determining an unhealthy backend service. After how many consecutive health check failures, the backend service status changes from <strong>healthy</strong> to <strong>unhealthy</strong>.<br>Value range: <strong>2</strong>-<strong>10</strong>.<br>Default value: <strong>2</strong>.</p>
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
        if (array_key_exists("HealthCheckTemplateId",$param) and $param["HealthCheckTemplateId"] !== null) {
            $this->HealthCheckTemplateId = $param["HealthCheckTemplateId"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
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

        if (array_key_exists("HealthCheckTemplateName",$param) and $param["HealthCheckTemplateName"] !== null) {
            $this->HealthCheckTemplateName = $param["HealthCheckTemplateName"];
        }

        if (array_key_exists("HealthCheckTimeout",$param) and $param["HealthCheckTimeout"] !== null) {
            $this->HealthCheckTimeout = $param["HealthCheckTimeout"];
        }

        if (array_key_exists("HealthCheckUnhealthyThreshold",$param) and $param["HealthCheckUnhealthyThreshold"] !== null) {
            $this->HealthCheckUnhealthyThreshold = $param["HealthCheckUnhealthyThreshold"];
        }
    }
}
