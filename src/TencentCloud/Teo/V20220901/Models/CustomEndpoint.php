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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The configuration information of real-time log delivery to a custom HTTP(S) interface
 *
 * @method string getUrl() Obtain Address of the custom HTTP API for real-time log shipping. Currently, only HTTP and HTTPS protocols are supported.
 * @method void setUrl(string $Url) Set Address of the custom HTTP API for real-time log shipping. Currently, only HTTP and HTTPS protocols are supported.
 * @method string getAccessId() Obtain Custom SecretId used for generating an encrypted signature. This parameter is required if the origin server needs authentication.
 * @method void setAccessId(string $AccessId) Set Custom SecretId used for generating an encrypted signature. This parameter is required if the origin server needs authentication.
 * @method string getAccessKey() Obtain Custom SecretKey used for generating an encrypted signature. This parameter is required if the origin server needs authentication.
 * @method void setAccessKey(string $AccessKey) Set Custom SecretKey used for generating an encrypted signature. This parameter is required if the origin server needs authentication.
 * @method string getCompressType() Obtain Type of data compression. Valid values:<li>gzip: gzip compression.</li>If this parameter is not input, compression is disabled.
 * @method void setCompressType(string $CompressType) Set Type of data compression. Valid values:<li>gzip: gzip compression.</li>If this parameter is not input, compression is disabled.
 * @method string getProtocol() Obtain Type of the application layer protocol used in POST requests for log shipping. Valid values: 
<li>http: HTTP protocol;</li>
<li>https: HTTPS protocol.</li>If this parameter is not input, the protocol type is parsed from the URL field.	
 * @method void setProtocol(string $Protocol) Set Type of the application layer protocol used in POST requests for log shipping. Valid values: 
<li>http: HTTP protocol;</li>
<li>https: HTTPS protocol.</li>If this parameter is not input, the protocol type is parsed from the URL field.	
 * @method array getHeaders() Obtain Custom request header carried in log shipping. For a header carried by default in EdgeOne log pushing, such as Content-Type, the header value you input will overwrite the default value. The header value references a single variable ${batchSize} to obtain the number of log entries included in each POST request.
 * @method void setHeaders(array $Headers) Set Custom request header carried in log shipping. For a header carried by default in EdgeOne log pushing, such as Content-Type, the header value you input will overwrite the default value. The header value references a single variable ${batchSize} to obtain the number of log entries included in each POST request.
 */
class CustomEndpoint extends AbstractModel
{
    /**
     * @var string Address of the custom HTTP API for real-time log shipping. Currently, only HTTP and HTTPS protocols are supported.
     */
    public $Url;

    /**
     * @var string Custom SecretId used for generating an encrypted signature. This parameter is required if the origin server needs authentication.
     */
    public $AccessId;

    /**
     * @var string Custom SecretKey used for generating an encrypted signature. This parameter is required if the origin server needs authentication.
     */
    public $AccessKey;

    /**
     * @var string Type of data compression. Valid values:<li>gzip: gzip compression.</li>If this parameter is not input, compression is disabled.
     */
    public $CompressType;

    /**
     * @var string Type of the application layer protocol used in POST requests for log shipping. Valid values: 
<li>http: HTTP protocol;</li>
<li>https: HTTPS protocol.</li>If this parameter is not input, the protocol type is parsed from the URL field.	
     */
    public $Protocol;

    /**
     * @var array Custom request header carried in log shipping. For a header carried by default in EdgeOne log pushing, such as Content-Type, the header value you input will overwrite the default value. The header value references a single variable ${batchSize} to obtain the number of log entries included in each POST request.
     */
    public $Headers;

    /**
     * @param string $Url Address of the custom HTTP API for real-time log shipping. Currently, only HTTP and HTTPS protocols are supported.
     * @param string $AccessId Custom SecretId used for generating an encrypted signature. This parameter is required if the origin server needs authentication.
     * @param string $AccessKey Custom SecretKey used for generating an encrypted signature. This parameter is required if the origin server needs authentication.
     * @param string $CompressType Type of data compression. Valid values:<li>gzip: gzip compression.</li>If this parameter is not input, compression is disabled.
     * @param string $Protocol Type of the application layer protocol used in POST requests for log shipping. Valid values: 
<li>http: HTTP protocol;</li>
<li>https: HTTPS protocol.</li>If this parameter is not input, the protocol type is parsed from the URL field.	
     * @param array $Headers Custom request header carried in log shipping. For a header carried by default in EdgeOne log pushing, such as Content-Type, the header value you input will overwrite the default value. The header value references a single variable ${batchSize} to obtain the number of log entries included in each POST request.
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("AccessId",$param) and $param["AccessId"] !== null) {
            $this->AccessId = $param["AccessId"];
        }

        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("CompressType",$param) and $param["CompressType"] !== null) {
            $this->CompressType = $param["CompressType"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = [];
            foreach ($param["Headers"] as $key => $value){
                $obj = new Header();
                $obj->deserialize($value);
                array_push($this->Headers, $obj);
            }
        }
    }
}
