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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the requested API.
 *
 * @method string getMethod() Obtain Request method, such as get/post.
 * @method void setMethod(string $Method) Set Request method, such as get/post.
 * @method string getUrl() Obtain Request address.
 * @method void setUrl(string $Url) Set Request address.
 * @method array getHeaderValues() Obtain Header parameter.
 * @method void setHeaderValues(array $HeaderValues) Set Header parameter.
 * @method array getQueryValues() Obtain Input parameter Query.
 * @method void setQueryValues(array $QueryValues) Set Input parameter Query.
 * @method string getRequestPostBody() Obtain Original data of a Post request.
 * @method void setRequestPostBody(string $RequestPostBody) Set Original data of a Post request.
 * @method string getResponseBody() Obtain Returned original data.
 * @method void setResponseBody(string $ResponseBody) Set Returned original data.
 * @method array getResponseValues() Obtain Output parameter.
 * @method void setResponseValues(array $ResponseValues) Set Output parameter.
 * @method string getFailMessage() Obtain Exception information.
 * @method void setFailMessage(string $FailMessage) Set Exception information.
 */
class InvokeAPI extends AbstractModel
{
    /**
     * @var string Request method, such as get/post.
     */
    public $Method;

    /**
     * @var string Request address.
     */
    public $Url;

    /**
     * @var array Header parameter.
     */
    public $HeaderValues;

    /**
     * @var array Input parameter Query.
     */
    public $QueryValues;

    /**
     * @var string Original data of a Post request.
     */
    public $RequestPostBody;

    /**
     * @var string Returned original data.
     */
    public $ResponseBody;

    /**
     * @var array Output parameter.
     */
    public $ResponseValues;

    /**
     * @var string Exception information.
     */
    public $FailMessage;

    /**
     * @param string $Method Request method, such as get/post.
     * @param string $Url Request address.
     * @param array $HeaderValues Header parameter.
     * @param array $QueryValues Input parameter Query.
     * @param string $RequestPostBody Original data of a Post request.
     * @param string $ResponseBody Returned original data.
     * @param array $ResponseValues Output parameter.
     * @param string $FailMessage Exception information.
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
        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("HeaderValues",$param) and $param["HeaderValues"] !== null) {
            $this->HeaderValues = [];
            foreach ($param["HeaderValues"] as $key => $value){
                $obj = new StrValue();
                $obj->deserialize($value);
                array_push($this->HeaderValues, $obj);
            }
        }

        if (array_key_exists("QueryValues",$param) and $param["QueryValues"] !== null) {
            $this->QueryValues = [];
            foreach ($param["QueryValues"] as $key => $value){
                $obj = new StrValue();
                $obj->deserialize($value);
                array_push($this->QueryValues, $obj);
            }
        }

        if (array_key_exists("RequestPostBody",$param) and $param["RequestPostBody"] !== null) {
            $this->RequestPostBody = $param["RequestPostBody"];
        }

        if (array_key_exists("ResponseBody",$param) and $param["ResponseBody"] !== null) {
            $this->ResponseBody = $param["ResponseBody"];
        }

        if (array_key_exists("ResponseValues",$param) and $param["ResponseValues"] !== null) {
            $this->ResponseValues = [];
            foreach ($param["ResponseValues"] as $key => $value){
                $obj = new ValueInfo();
                $obj->deserialize($value);
                array_push($this->ResponseValues, $obj);
            }
        }

        if (array_key_exists("FailMessage",$param) and $param["FailMessage"] !== null) {
            $this->FailMessage = $param["FailMessage"];
        }
    }
}
