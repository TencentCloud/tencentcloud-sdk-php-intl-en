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
 * CreateOrModifyCloudNativeAPIGatewayCORS request structure.
 *
 * @method string getGatewayId() Obtain Gateway ID
 * @method void setGatewayId(string $GatewayId) Set Gateway ID
 * @method string getSourceType() Obtain Resource type bound to the cross-origin plug-in: route|service
 * @method void setSourceType(string $SourceType) Set Resource type bound to the cross-origin plug-in: route|service
 * @method string getSourceId() Obtain id of the route or service
 * @method void setSourceId(string $SourceId) Set id of the route or service
 * @method boolean getEnabled() Obtain Whether to enable the plug-in
 * @method void setEnabled(boolean $Enabled) Set Whether to enable the plug-in
 * @method array getOrigins() Obtain Cross-Origin Access-Control-Allow-Origin
 * @method void setOrigins(array $Origins) Set Cross-Origin Access-Control-Allow-Origin
 * @method array getHeaders() Obtain Cross-Origin Access-Control-Allow-Headers header
 * @method void setHeaders(array $Headers) Set Cross-Origin Access-Control-Allow-Headers header
 * @method array getMethods() Obtain Access-Control-Allow-Methods for CORS
 * @method void setMethods(array $Methods) Set Access-Control-Allow-Methods for CORS
 * @method array getExposedHeaders() Obtain Access-Control-Expose-Headers
 * @method void setExposedHeaders(array $ExposedHeaders) Set Access-Control-Expose-Headers
 * @method integer getMaxAge() Obtain preflight request cache time
 * @method void setMaxAge(integer $MaxAge) Set preflight request cache time
 * @method boolean getCredentials() Obtain Access-Control-Allow-Credentials for CORS
 * @method void setCredentials(boolean $Credentials) Set Access-Control-Allow-Credentials for CORS
 * @method boolean getPreFlightContinue() Obtain Whether to pass through the OPTIONS request to the backend
 * @method void setPreFlightContinue(boolean $PreFlightContinue) Set Whether to pass through the OPTIONS request to the backend
 */
class CreateOrModifyCloudNativeAPIGatewayCORSRequest extends AbstractModel
{
    /**
     * @var string Gateway ID
     */
    public $GatewayId;

    /**
     * @var string Resource type bound to the cross-origin plug-in: route|service
     */
    public $SourceType;

    /**
     * @var string id of the route or service
     */
    public $SourceId;

    /**
     * @var boolean Whether to enable the plug-in
     */
    public $Enabled;

    /**
     * @var array Cross-Origin Access-Control-Allow-Origin
     */
    public $Origins;

    /**
     * @var array Cross-Origin Access-Control-Allow-Headers header
     */
    public $Headers;

    /**
     * @var array Access-Control-Allow-Methods for CORS
     */
    public $Methods;

    /**
     * @var array Access-Control-Expose-Headers
     */
    public $ExposedHeaders;

    /**
     * @var integer preflight request cache time
     */
    public $MaxAge;

    /**
     * @var boolean Access-Control-Allow-Credentials for CORS
     */
    public $Credentials;

    /**
     * @var boolean Whether to pass through the OPTIONS request to the backend
     */
    public $PreFlightContinue;

    /**
     * @param string $GatewayId Gateway ID
     * @param string $SourceType Resource type bound to the cross-origin plug-in: route|service
     * @param string $SourceId id of the route or service
     * @param boolean $Enabled Whether to enable the plug-in
     * @param array $Origins Cross-Origin Access-Control-Allow-Origin
     * @param array $Headers Cross-Origin Access-Control-Allow-Headers header
     * @param array $Methods Access-Control-Allow-Methods for CORS
     * @param array $ExposedHeaders Access-Control-Expose-Headers
     * @param integer $MaxAge preflight request cache time
     * @param boolean $Credentials Access-Control-Allow-Credentials for CORS
     * @param boolean $PreFlightContinue Whether to pass through the OPTIONS request to the backend
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Origins",$param) and $param["Origins"] !== null) {
            $this->Origins = $param["Origins"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = $param["Headers"];
        }

        if (array_key_exists("Methods",$param) and $param["Methods"] !== null) {
            $this->Methods = $param["Methods"];
        }

        if (array_key_exists("ExposedHeaders",$param) and $param["ExposedHeaders"] !== null) {
            $this->ExposedHeaders = $param["ExposedHeaders"];
        }

        if (array_key_exists("MaxAge",$param) and $param["MaxAge"] !== null) {
            $this->MaxAge = $param["MaxAge"];
        }

        if (array_key_exists("Credentials",$param) and $param["Credentials"] !== null) {
            $this->Credentials = $param["Credentials"];
        }

        if (array_key_exists("PreFlightContinue",$param) and $param["PreFlightContinue"] !== null) {
            $this->PreFlightContinue = $param["PreFlightContinue"];
        }
    }
}
