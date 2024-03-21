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
 * @method string getUrl() Obtain The address of the custom HTTP interface for real-time log delivery. Currently, only HTTP and HTTPS protocols are supported.
 * @method void setUrl(string $Url) Set The address of the custom HTTP interface for real-time log delivery. Currently, only HTTP and HTTPS protocols are supported.
 * @method string getAccessId() Obtain Specifies the custom SecretId for generating an encrypted signature. This parameter is required if the origin server needs authentication.
 * @method void setAccessId(string $AccessId) Set Specifies the custom SecretId for generating an encrypted signature. This parameter is required if the origin server needs authentication.
 * @method string getAccessKey() Obtain Specifies the custom SecretKey for generating an encrypted signature. This parameter is required if the origin server needs authentication.
 * @method void setAccessKey(string $AccessKey) Set Specifies the custom SecretKey for generating an encrypted signature. This parameter is required if the origin server needs authentication.
 * @method string getCompressType() Obtain The type of data compression. Valid values:<li>gzip: gzip compression.</li>If this field is not filled in, compression is disabled.
 * @method void setCompressType(string $CompressType) Set The type of data compression. Valid values:<li>gzip: gzip compression.</li>If this field is not filled in, compression is disabled.
 * @method string getProtocol() Obtain The type of the application layer protocol used when POST requests log delivery. Valid values:
<li>http: HTTP protocol;</li>
<li>https: HTTPS protocol.</li>If this field is not filled in, the protocol type will be parsed from the URL field.
 * @method void setProtocol(string $Protocol) Set The type of the application layer protocol used when POST requests log delivery. Valid values:
<li>http: HTTP protocol;</li>
<li>https: HTTPS protocol.</li>If this field is not filled in, the protocol type will be parsed from the URL field.
 * @method array getHeaders() Obtain The custom request header carried during log delivery. If the header name you fill in is the default header carried by EdgeOne log delivery such as Content-Type, then the header value you fill in will override the default value. The header value supports referring to a single variable ${batchSize} to obtain the number of log entries included in each POST request.
 * @method void setHeaders(array $Headers) Set The custom request header carried during log delivery. If the header name you fill in is the default header carried by EdgeOne log delivery such as Content-Type, then the header value you fill in will override the default value. The header value supports referring to a single variable ${batchSize} to obtain the number of log entries included in each POST request.
 */
class CustomEndpoint extends AbstractModel
{
    /**
     * @var string The address of the custom HTTP interface for real-time log delivery. Currently, only HTTP and HTTPS protocols are supported.
     */
    public $Url;

    /**
     * @var string Specifies the custom SecretId for generating an encrypted signature. This parameter is required if the origin server needs authentication.
     */
    public $AccessId;

    /**
     * @var string Specifies the custom SecretKey for generating an encrypted signature. This parameter is required if the origin server needs authentication.
     */
    public $AccessKey;

    /**
     * @var string The type of data compression. Valid values:<li>gzip: gzip compression.</li>If this field is not filled in, compression is disabled.
     */
    public $CompressType;

    /**
     * @var string The type of the application layer protocol used when POST requests log delivery. Valid values:
<li>http: HTTP protocol;</li>
<li>https: HTTPS protocol.</li>If this field is not filled in, the protocol type will be parsed from the URL field.
     */
    public $Protocol;

    /**
     * @var array The custom request header carried during log delivery. If the header name you fill in is the default header carried by EdgeOne log delivery such as Content-Type, then the header value you fill in will override the default value. The header value supports referring to a single variable ${batchSize} to obtain the number of log entries included in each POST request.
     */
    public $Headers;

    /**
     * @param string $Url The address of the custom HTTP interface for real-time log delivery. Currently, only HTTP and HTTPS protocols are supported.
     * @param string $AccessId Specifies the custom SecretId for generating an encrypted signature. This parameter is required if the origin server needs authentication.
     * @param string $AccessKey Specifies the custom SecretKey for generating an encrypted signature. This parameter is required if the origin server needs authentication.
     * @param string $CompressType The type of data compression. Valid values:<li>gzip: gzip compression.</li>If this field is not filled in, compression is disabled.
     * @param string $Protocol The type of the application layer protocol used when POST requests log delivery. Valid values:
<li>http: HTTP protocol;</li>
<li>https: HTTPS protocol.</li>If this field is not filled in, the protocol type will be parsed from the URL field.
     * @param array $Headers The custom request header carried during log delivery. If the header name you fill in is the default header carried by EdgeOne log delivery such as Content-Type, then the header value you fill in will override the default value. The header value supports referring to a single variable ${batchSize} to obtain the number of log entries included in each POST request.
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
