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
 * Query cross-origin configuration output parameters
 *
 * @method string getSourceType() Obtain Resource type.
 * @method void setSourceType(string $SourceType) Set Resource type.
 * @method string getSourceId() Obtain Resource ID
 * @method void setSourceId(string $SourceId) Set Resource ID
 * @method boolean getEnabled() Obtain enabled or not
 * @method void setEnabled(boolean $Enabled) Set enabled or not
 * @method array getOrigins() Obtain Cross-origin Origins
 * @method void setOrigins(array $Origins) Set Cross-origin Origins
 * @method array getHeaders() Obtain Cross-Origin Headers
 * @method void setHeaders(array $Headers) Set Cross-Origin Headers
 * @method array getMethods() Obtain Cross-origin Methods
 * @method void setMethods(array $Methods) Set Cross-origin Methods
 * @method array getExposedHeaders() Obtain Cross-Origin ExposedHeaders
 * @method void setExposedHeaders(array $ExposedHeaders) Set Cross-Origin ExposedHeaders
 * @method integer getMaxAge() Obtain Cache time of cross-origin OPTIONS request
 * @method void setMaxAge(integer $MaxAge) Set Cache time of cross-origin OPTIONS request
 * @method boolean getCredentials() Obtain Whether cross-origin access requests are allowed to carry identity information
 * @method void setCredentials(boolean $Credentials) Set Whether cross-origin access requests are allowed to carry identity information
 * @method boolean getPreFlightContinue() Obtain Whether to forward cross-origin access requests to the backend
 * @method void setPreFlightContinue(boolean $PreFlightContinue) Set Whether to forward cross-origin access requests to the backend
 */
class DescribeKongCORSResult extends AbstractModel
{
    /**
     * @var string Resource type.
     */
    public $SourceType;

    /**
     * @var string Resource ID
     */
    public $SourceId;

    /**
     * @var boolean enabled or not
     */
    public $Enabled;

    /**
     * @var array Cross-origin Origins
     */
    public $Origins;

    /**
     * @var array Cross-Origin Headers
     */
    public $Headers;

    /**
     * @var array Cross-origin Methods
     */
    public $Methods;

    /**
     * @var array Cross-Origin ExposedHeaders
     */
    public $ExposedHeaders;

    /**
     * @var integer Cache time of cross-origin OPTIONS request
     */
    public $MaxAge;

    /**
     * @var boolean Whether cross-origin access requests are allowed to carry identity information
     */
    public $Credentials;

    /**
     * @var boolean Whether to forward cross-origin access requests to the backend
     */
    public $PreFlightContinue;

    /**
     * @param string $SourceType Resource type.
     * @param string $SourceId Resource ID
     * @param boolean $Enabled enabled or not
     * @param array $Origins Cross-origin Origins
     * @param array $Headers Cross-Origin Headers
     * @param array $Methods Cross-origin Methods
     * @param array $ExposedHeaders Cross-Origin ExposedHeaders
     * @param integer $MaxAge Cache time of cross-origin OPTIONS request
     * @param boolean $Credentials Whether cross-origin access requests are allowed to carry identity information
     * @param boolean $PreFlightContinue Whether to forward cross-origin access requests to the backend
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
