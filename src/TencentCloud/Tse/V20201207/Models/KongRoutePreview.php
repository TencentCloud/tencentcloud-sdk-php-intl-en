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
 * Cloud-native gateway routing information
 *
 * @method string getID() Obtain Service ID
 * @method void setID(string $ID) Set Service ID
 * @method string getName() Obtain Service name.
 * @method void setName(string $Name) Set Service name.
 * @method array getMethods() Obtain None.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMethods(array $Methods) Set None.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPaths() Obtain None.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPaths(array $Paths) Set None.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getHosts() Obtain None.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHosts(array $Hosts) Set None.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getProtocols() Obtain None.
 * @method void setProtocols(array $Protocols) Set None.
 * @method boolean getPreserveHost() Obtain None.
 * @method void setPreserveHost(boolean $PreserveHost) Set None.
 * @method integer getHttpsRedirectStatusCode() Obtain None.
 * @method void setHttpsRedirectStatusCode(integer $HttpsRedirectStatusCode) Set None.
 * @method boolean getStripPath() Obtain None.
 * @method void setStripPath(boolean $StripPath) Set None.
 * @method string getCreatedTime() Obtain None.
 * @method void setCreatedTime(string $CreatedTime) Set None.
 * @method boolean getForceHttps() Obtain Is mandatory HTTPS enabled?
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setForceHttps(boolean $ForceHttps) Set Is mandatory HTTPS enabled?
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getServiceName() Obtain Service name
 * @method void setServiceName(string $ServiceName) Set Service name
 * @method string getServiceID() Obtain Service ID
 * @method void setServiceID(string $ServiceID) Set Service ID
 * @method array getDestinationPorts() Obtain Destination Port
 * @method void setDestinationPorts(array $DestinationPorts) Set Destination Port
 * @method array getHeaders() Obtain Headers of the route
 * @method void setHeaders(array $Headers) Set Headers of the route
 * @method boolean getRequestBuffering() Obtain Whether to cache the request body, default true
 * @method void setRequestBuffering(boolean $RequestBuffering) Set Whether to cache the request body, default true
 * @method boolean getResponseBuffering() Obtain Whether to cache response body, default true
 * @method void setResponseBuffering(boolean $ResponseBuffering) Set Whether to cache response body, default true
 * @method integer getRegexPriority() Obtain Regular Priority
 * @method void setRegexPriority(integer $RegexPriority) Set Regular Priority
 * @method array getQueryStringParameters() Obtain querystring parameter
 * @method void setQueryStringParameters(array $QueryStringParameters) Set querystring parameter
 */
class KongRoutePreview extends AbstractModel
{
    /**
     * @var string Service ID
     */
    public $ID;

    /**
     * @var string Service name.
     */
    public $Name;

    /**
     * @var array None.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Methods;

    /**
     * @var array None.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Paths;

    /**
     * @var array None.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Hosts;

    /**
     * @var array None.
     */
    public $Protocols;

    /**
     * @var boolean None.
     */
    public $PreserveHost;

    /**
     * @var integer None.
     */
    public $HttpsRedirectStatusCode;

    /**
     * @var boolean None.
     */
    public $StripPath;

    /**
     * @var string None.
     */
    public $CreatedTime;

    /**
     * @var boolean Is mandatory HTTPS enabled?
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $ForceHttps;

    /**
     * @var string Service name
     */
    public $ServiceName;

    /**
     * @var string Service ID
     */
    public $ServiceID;

    /**
     * @var array Destination Port
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
     * @var boolean Whether to cache response body, default true
     */
    public $ResponseBuffering;

    /**
     * @var integer Regular Priority
     */
    public $RegexPriority;

    /**
     * @var array querystring parameter
     */
    public $QueryStringParameters;

    /**
     * @param string $ID Service ID
     * @param string $Name Service name.
     * @param array $Methods None.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Paths None.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Hosts None.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Protocols None.
     * @param boolean $PreserveHost None.
     * @param integer $HttpsRedirectStatusCode None.
     * @param boolean $StripPath None.
     * @param string $CreatedTime None.
     * @param boolean $ForceHttps Is mandatory HTTPS enabled?
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceName Service name
     * @param string $ServiceID Service ID
     * @param array $DestinationPorts Destination Port
     * @param array $Headers Headers of the route
     * @param boolean $RequestBuffering Whether to cache the request body, default true
     * @param boolean $ResponseBuffering Whether to cache response body, default true
     * @param integer $RegexPriority Regular Priority
     * @param array $QueryStringParameters querystring parameter
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ForceHttps",$param) and $param["ForceHttps"] !== null) {
            $this->ForceHttps = $param["ForceHttps"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ServiceID",$param) and $param["ServiceID"] !== null) {
            $this->ServiceID = $param["ServiceID"];
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
