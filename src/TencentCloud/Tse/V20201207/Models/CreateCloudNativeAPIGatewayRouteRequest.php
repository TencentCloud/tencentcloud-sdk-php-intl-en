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
 * CreateCloudNativeAPIGatewayRoute request structure.
 *
 * @method string getGatewayId() Obtain Gateway ID
 * @method void setGatewayId(string $GatewayId) Set Gateway ID
 * @method string getServiceID() Obtain Service ID
 * @method void setServiceID(string $ServiceID) Set Service ID
 * @method string getRouteName() Obtain The name of the route, unique at the instance level, does not need to be provided.
 * @method void setRouteName(string $RouteName) Set The name of the route, unique at the instance level, does not need to be provided.
 * @method array getMethods() Obtain Method of route. Available values:
- GET
- POST
- DELETE
- PUT
- OPTIONS
- PATCH
- HEAD
- ANY
- TRACE
- COPY
- MOVE
- PROPFIND
- PROPPATCH
- MKCOL
- LOCK
- UNLOCK
 * @method void setMethods(array $Methods) Set Method of route. Available values:
- GET
- POST
- DELETE
- PUT
- OPTIONS
- PATCH
- HEAD
- ANY
- TRACE
- COPY
- MOVE
- PROPFIND
- PROPPATCH
- MKCOL
- LOCK
- UNLOCK
 * @method array getHosts() Obtain Domain of the route
 * @method void setHosts(array $Hosts) Set Domain of the route
 * @method array getPaths() Obtain Path of the route
 * @method void setPaths(array $Paths) Set Path of the route
 * @method array getProtocols() Obtain Route protocol, optional
- https
- http
 * @method void setProtocols(array $Protocols) Set Route protocol, optional
- https
- http
 * @method boolean getPreserveHost() Obtain Preserve Host when forwarding to backend
 * @method void setPreserveHost(boolean $PreserveHost) Set Preserve Host when forwarding to backend
 * @method integer getHttpsRedirectStatusCode() Obtain HTTP redirection status code
 * @method void setHttpsRedirectStatusCode(integer $HttpsRedirectStatusCode) Set HTTP redirection status code
 * @method boolean getStripPath() Obtain StripPath when forwarding to backend
 * @method void setStripPath(boolean $StripPath) Set StripPath when forwarding to backend
 * @method boolean getForceHttps() Obtain Whether to enable mandatory HTTPS
 * @method void setForceHttps(boolean $ForceHttps) Set Whether to enable mandatory HTTPS
 * @method array getDestinationPorts() Obtain Destination port for Layer 4 match
 * @method void setDestinationPorts(array $DestinationPorts) Set Destination port for Layer 4 match
 * @method array getHeaders() Obtain Headers of the route
 * @method void setHeaders(array $Headers) Set Headers of the route
 * @method boolean getRequestBuffering() Obtain Whether to cache the request body, default true
 * @method void setRequestBuffering(boolean $RequestBuffering) Set Whether to cache the request body, default true
 * @method boolean getResponseBuffering() Obtain Whether to cache the response body. Default true
 * @method void setResponseBuffering(boolean $ResponseBuffering) Set Whether to cache the response body. Default true
 * @method integer getRegexPriority() Obtain Regular priority
 * @method void setRegexPriority(integer $RegexPriority) Set Regular priority
 * @method array getQueryStringParameters() Obtain queryString parameter
 * @method void setQueryStringParameters(array $QueryStringParameters) Set queryString parameter
 */
class CreateCloudNativeAPIGatewayRouteRequest extends AbstractModel
{
    /**
     * @var string Gateway ID
     */
    public $GatewayId;

    /**
     * @var string Service ID
     */
    public $ServiceID;

    /**
     * @var string The name of the route, unique at the instance level, does not need to be provided.
     */
    public $RouteName;

    /**
     * @var array Method of route. Available values:
- GET
- POST
- DELETE
- PUT
- OPTIONS
- PATCH
- HEAD
- ANY
- TRACE
- COPY
- MOVE
- PROPFIND
- PROPPATCH
- MKCOL
- LOCK
- UNLOCK
     */
    public $Methods;

    /**
     * @var array Domain of the route
     */
    public $Hosts;

    /**
     * @var array Path of the route
     */
    public $Paths;

    /**
     * @var array Route protocol, optional
- https
- http
     */
    public $Protocols;

    /**
     * @var boolean Preserve Host when forwarding to backend
     */
    public $PreserveHost;

    /**
     * @var integer HTTP redirection status code
     */
    public $HttpsRedirectStatusCode;

    /**
     * @var boolean StripPath when forwarding to backend
     */
    public $StripPath;

    /**
     * @var boolean Whether to enable mandatory HTTPS
     * @deprecated
     */
    public $ForceHttps;

    /**
     * @var array Destination port for Layer 4 match
     */
    public $DestinationPorts;

    /**
     * @var array Headers of the route
     */
    public $Headers;

    /**
     * @var boolean Whether to cache the request body, default true
     */
    public $RequestBuffering;

    /**
     * @var boolean Whether to cache the response body. Default true
     */
    public $ResponseBuffering;

    /**
     * @var integer Regular priority
     */
    public $RegexPriority;

    /**
     * @var array queryString parameter
     */
    public $QueryStringParameters;

    /**
     * @param string $GatewayId Gateway ID
     * @param string $ServiceID Service ID
     * @param string $RouteName The name of the route, unique at the instance level, does not need to be provided.
     * @param array $Methods Method of route. Available values:
- GET
- POST
- DELETE
- PUT
- OPTIONS
- PATCH
- HEAD
- ANY
- TRACE
- COPY
- MOVE
- PROPFIND
- PROPPATCH
- MKCOL
- LOCK
- UNLOCK
     * @param array $Hosts Domain of the route
     * @param array $Paths Path of the route
     * @param array $Protocols Route protocol, optional
- https
- http
     * @param boolean $PreserveHost Preserve Host when forwarding to backend
     * @param integer $HttpsRedirectStatusCode HTTP redirection status code
     * @param boolean $StripPath StripPath when forwarding to backend
     * @param boolean $ForceHttps Whether to enable mandatory HTTPS
     * @param array $DestinationPorts Destination port for Layer 4 match
     * @param array $Headers Headers of the route
     * @param boolean $RequestBuffering Whether to cache the request body, default true
     * @param boolean $ResponseBuffering Whether to cache the response body. Default true
     * @param integer $RegexPriority Regular priority
     * @param array $QueryStringParameters queryString parameter
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

        if (array_key_exists("ServiceID",$param) and $param["ServiceID"] !== null) {
            $this->ServiceID = $param["ServiceID"];
        }

        if (array_key_exists("RouteName",$param) and $param["RouteName"] !== null) {
            $this->RouteName = $param["RouteName"];
        }

        if (array_key_exists("Methods",$param) and $param["Methods"] !== null) {
            $this->Methods = $param["Methods"];
        }

        if (array_key_exists("Hosts",$param) and $param["Hosts"] !== null) {
            $this->Hosts = $param["Hosts"];
        }

        if (array_key_exists("Paths",$param) and $param["Paths"] !== null) {
            $this->Paths = $param["Paths"];
        }

        if (array_key_exists("Protocols",$param) and $param["Protocols"] !== null) {
            $this->Protocols = $param["Protocols"];
        }

        if (array_key_exists("PreserveHost",$param) and $param["PreserveHost"] !== null) {
            $this->PreserveHost = $param["PreserveHost"];
        }

        if (array_key_exists("HttpsRedirectStatusCode",$param) and $param["HttpsRedirectStatusCode"] !== null) {
            $this->HttpsRedirectStatusCode = $param["HttpsRedirectStatusCode"];
        }

        if (array_key_exists("StripPath",$param) and $param["StripPath"] !== null) {
            $this->StripPath = $param["StripPath"];
        }

        if (array_key_exists("ForceHttps",$param) and $param["ForceHttps"] !== null) {
            $this->ForceHttps = $param["ForceHttps"];
        }

        if (array_key_exists("DestinationPorts",$param) and $param["DestinationPorts"] !== null) {
            $this->DestinationPorts = $param["DestinationPorts"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = [];
            foreach ($param["Headers"] as $key => $value){
                $obj = new KVMapping();
                $obj->deserialize($value);
                array_push($this->Headers, $obj);
            }
        }

        if (array_key_exists("RequestBuffering",$param) and $param["RequestBuffering"] !== null) {
            $this->RequestBuffering = $param["RequestBuffering"];
        }

        if (array_key_exists("ResponseBuffering",$param) and $param["ResponseBuffering"] !== null) {
            $this->ResponseBuffering = $param["ResponseBuffering"];
        }

        if (array_key_exists("RegexPriority",$param) and $param["RegexPriority"] !== null) {
            $this->RegexPriority = $param["RegexPriority"];
        }

        if (array_key_exists("QueryStringParameters",$param) and $param["QueryStringParameters"] !== null) {
            $this->QueryStringParameters = [];
            foreach ($param["QueryStringParameters"] as $key => $value){
                $obj = new KVMapping();
                $obj->deserialize($value);
                array_push($this->QueryStringParameters, $obj);
            }
        }
    }
}
