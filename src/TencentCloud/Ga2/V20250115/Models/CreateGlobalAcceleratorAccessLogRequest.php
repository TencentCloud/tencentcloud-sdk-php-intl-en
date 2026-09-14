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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateGlobalAcceleratorAccessLog request structure.
 *
 * @method string getGlobalAcceleratorId() Obtain <p>Unique Id of the sample GA</p>
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) Set <p>Unique Id of the sample GA</p>
 * @method string getListenerId() Obtain <p>Listener Id</p>
 * @method void setListenerId(string $ListenerId) Set <p>Listener Id</p>
 * @method string getEndpointGroupId() Obtain <p>Terminal node group Id</p>
 * @method void setEndpointGroupId(string $EndpointGroupId) Set <p>Terminal node group Id</p>
 * @method string getCloudRegion() Obtain <p>Logset region</p>
 * @method void setCloudRegion(string $CloudRegion) Set <p>Logset region</p>
 * @method string getCloudLogId() Obtain <p>Log topic Id</p>
 * @method void setCloudLogId(string $CloudLogId) Set <p>Log topic Id</p>
 * @method string getCloudLogSetId() Obtain <p>Log Set Id</p>
 * @method void setCloudLogSetId(string $CloudLogSetId) Set <p>Log Set Id</p>
 * @method array getFieldKeys() Obtain <p>Specify data collection fields</p><p>Enumeration values:</p><ul><li>session_time: Layer 4, session duration</li><li>upstream_bytes_received: Layer 4 and Layer 7, number of bytes received from the terminal node</li><li>upstream_bytes_sent: Layer 4 and Layer 7, number of bytes sent to the terminal node</li><li>request_method: Layer 7, GET/POST</li><li>scheme: Layer 7, http/https</li><li>request_uri: Layer 7, uri of the client's raw request</li><li>uri: Layer 7, uri of the current request</li><li>host: Layer 7, domain name accessed by the client (Layer 7)</li><li>remote_user: Layer 7, userName for basic authentication ("-" when unauthenticated)</li><li>http_user_agent: Layer 7, client browser identification</li><li>http_referer: Layer 7, request source URL ("-" when accessed directly from the address bar)</li><li>http_x_forwarded_for: Layer 7, records the client's original IP and the proxy server IP chain it transited</li><li>content_type: Layer 7, content_type</li><li>body_bytes_sent: Layer 7, http body size sent to the client, excluding the header</li><li>request_time: Layer 7, total time from receiving the first byte of the client request to sending the last byte of the response (unit: seconds)</li><li>sent_http_content_type: Layer 7, response content type</li><li>upstream_header_time: Layer 7, arrival time of the terminal node's response header</li><li>upstream_response_length: Layer 7, length of the response body returned by the terminal node</li><li>upstream_response_time: Layer 7, complete response time of the terminal node</li><li>upstream_status: Layer 7, http status code returned by the terminal node</li></ul>
 * @method void setFieldKeys(array $FieldKeys) Set <p>Specify data collection fields</p><p>Enumeration values:</p><ul><li>session_time: Layer 4, session duration</li><li>upstream_bytes_received: Layer 4 and Layer 7, number of bytes received from the terminal node</li><li>upstream_bytes_sent: Layer 4 and Layer 7, number of bytes sent to the terminal node</li><li>request_method: Layer 7, GET/POST</li><li>scheme: Layer 7, http/https</li><li>request_uri: Layer 7, uri of the client's raw request</li><li>uri: Layer 7, uri of the current request</li><li>host: Layer 7, domain name accessed by the client (Layer 7)</li><li>remote_user: Layer 7, userName for basic authentication ("-" when unauthenticated)</li><li>http_user_agent: Layer 7, client browser identification</li><li>http_referer: Layer 7, request source URL ("-" when accessed directly from the address bar)</li><li>http_x_forwarded_for: Layer 7, records the client's original IP and the proxy server IP chain it transited</li><li>content_type: Layer 7, content_type</li><li>body_bytes_sent: Layer 7, http body size sent to the client, excluding the header</li><li>request_time: Layer 7, total time from receiving the first byte of the client request to sending the last byte of the response (unit: seconds)</li><li>sent_http_content_type: Layer 7, response content type</li><li>upstream_header_time: Layer 7, arrival time of the terminal node's response header</li><li>upstream_response_length: Layer 7, length of the response body returned by the terminal node</li><li>upstream_response_time: Layer 7, complete response time of the terminal node</li><li>upstream_status: Layer 7, http status code returned by the terminal node</li></ul>
 * @method string getFlowLogDescription() Obtain <p>Log description</p>
 * @method void setFlowLogDescription(string $FlowLogDescription) Set <p>Log description</p>
 */
class CreateGlobalAcceleratorAccessLogRequest extends AbstractModel
{
    /**
     * @var string <p>Unique Id of the sample GA</p>
     */
    public $GlobalAcceleratorId;

    /**
     * @var string <p>Listener Id</p>
     */
    public $ListenerId;

    /**
     * @var string <p>Terminal node group Id</p>
     */
    public $EndpointGroupId;

    /**
     * @var string <p>Logset region</p>
     */
    public $CloudRegion;

    /**
     * @var string <p>Log topic Id</p>
     */
    public $CloudLogId;

    /**
     * @var string <p>Log Set Id</p>
     */
    public $CloudLogSetId;

    /**
     * @var array <p>Specify data collection fields</p><p>Enumeration values:</p><ul><li>session_time: Layer 4, session duration</li><li>upstream_bytes_received: Layer 4 and Layer 7, number of bytes received from the terminal node</li><li>upstream_bytes_sent: Layer 4 and Layer 7, number of bytes sent to the terminal node</li><li>request_method: Layer 7, GET/POST</li><li>scheme: Layer 7, http/https</li><li>request_uri: Layer 7, uri of the client's raw request</li><li>uri: Layer 7, uri of the current request</li><li>host: Layer 7, domain name accessed by the client (Layer 7)</li><li>remote_user: Layer 7, userName for basic authentication ("-" when unauthenticated)</li><li>http_user_agent: Layer 7, client browser identification</li><li>http_referer: Layer 7, request source URL ("-" when accessed directly from the address bar)</li><li>http_x_forwarded_for: Layer 7, records the client's original IP and the proxy server IP chain it transited</li><li>content_type: Layer 7, content_type</li><li>body_bytes_sent: Layer 7, http body size sent to the client, excluding the header</li><li>request_time: Layer 7, total time from receiving the first byte of the client request to sending the last byte of the response (unit: seconds)</li><li>sent_http_content_type: Layer 7, response content type</li><li>upstream_header_time: Layer 7, arrival time of the terminal node's response header</li><li>upstream_response_length: Layer 7, length of the response body returned by the terminal node</li><li>upstream_response_time: Layer 7, complete response time of the terminal node</li><li>upstream_status: Layer 7, http status code returned by the terminal node</li></ul>
     */
    public $FieldKeys;

    /**
     * @var string <p>Log description</p>
     */
    public $FlowLogDescription;

    /**
     * @param string $GlobalAcceleratorId <p>Unique Id of the sample GA</p>
     * @param string $ListenerId <p>Listener Id</p>
     * @param string $EndpointGroupId <p>Terminal node group Id</p>
     * @param string $CloudRegion <p>Logset region</p>
     * @param string $CloudLogId <p>Log topic Id</p>
     * @param string $CloudLogSetId <p>Log Set Id</p>
     * @param array $FieldKeys <p>Specify data collection fields</p><p>Enumeration values:</p><ul><li>session_time: Layer 4, session duration</li><li>upstream_bytes_received: Layer 4 and Layer 7, number of bytes received from the terminal node</li><li>upstream_bytes_sent: Layer 4 and Layer 7, number of bytes sent to the terminal node</li><li>request_method: Layer 7, GET/POST</li><li>scheme: Layer 7, http/https</li><li>request_uri: Layer 7, uri of the client's raw request</li><li>uri: Layer 7, uri of the current request</li><li>host: Layer 7, domain name accessed by the client (Layer 7)</li><li>remote_user: Layer 7, userName for basic authentication ("-" when unauthenticated)</li><li>http_user_agent: Layer 7, client browser identification</li><li>http_referer: Layer 7, request source URL ("-" when accessed directly from the address bar)</li><li>http_x_forwarded_for: Layer 7, records the client's original IP and the proxy server IP chain it transited</li><li>content_type: Layer 7, content_type</li><li>body_bytes_sent: Layer 7, http body size sent to the client, excluding the header</li><li>request_time: Layer 7, total time from receiving the first byte of the client request to sending the last byte of the response (unit: seconds)</li><li>sent_http_content_type: Layer 7, response content type</li><li>upstream_header_time: Layer 7, arrival time of the terminal node's response header</li><li>upstream_response_length: Layer 7, length of the response body returned by the terminal node</li><li>upstream_response_time: Layer 7, complete response time of the terminal node</li><li>upstream_status: Layer 7, http status code returned by the terminal node</li></ul>
     * @param string $FlowLogDescription <p>Log description</p>
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
        if (array_key_exists("GlobalAcceleratorId",$param) and $param["GlobalAcceleratorId"] !== null) {
            $this->GlobalAcceleratorId = $param["GlobalAcceleratorId"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("EndpointGroupId",$param) and $param["EndpointGroupId"] !== null) {
            $this->EndpointGroupId = $param["EndpointGroupId"];
        }

        if (array_key_exists("CloudRegion",$param) and $param["CloudRegion"] !== null) {
            $this->CloudRegion = $param["CloudRegion"];
        }

        if (array_key_exists("CloudLogId",$param) and $param["CloudLogId"] !== null) {
            $this->CloudLogId = $param["CloudLogId"];
        }

        if (array_key_exists("CloudLogSetId",$param) and $param["CloudLogSetId"] !== null) {
            $this->CloudLogSetId = $param["CloudLogSetId"];
        }

        if (array_key_exists("FieldKeys",$param) and $param["FieldKeys"] !== null) {
            $this->FieldKeys = $param["FieldKeys"];
        }

        if (array_key_exists("FlowLogDescription",$param) and $param["FlowLogDescription"] !== null) {
            $this->FlowLogDescription = $param["FlowLogDescription"];
        }
    }
}
