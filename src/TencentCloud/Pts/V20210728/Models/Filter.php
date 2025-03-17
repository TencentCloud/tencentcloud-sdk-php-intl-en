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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Metric query filter.
 *
 * @method integer getOperator() Obtain Equals: 0, not equals: 1.
 * @method void setOperator(integer $Operator) Set Equals: 0, not equals: 1.
 * @method string getLabelName() Obtain Tag name, optional values include:
1. method, request method name;
2. proto: protocol name;
3. service: service name;
4. status: response status code;
5.result: response details
6.check: check name.
 * @method void setLabelName(string $LabelName) Set Tag name, optional values include:
1. method, request method name;
2. proto: protocol name;
3. service: service name;
4. status: response status code;
5.result: response details
6.check: check name.
 * @method string getLabelValue() Obtain Tag value, optional values include:
1.method: request method name, for example, GET, POST, PUT, etc.
2.proto: protocol name, for example, HTTP/1.1, HTTP/2, etc.
3.service: service name, for example, the request URL such as http://httpbin.org/get
4.status: response status code, for example, 200, 404, 500, etc.
5.result: response details, used to determine whether the request was successful or failed; if successful, the result Tag value is ok; if failed, the result Tag carries an error code and description.
6.check: check name, the Tag value is the checkpoint name set by the user.
 * @method void setLabelValue(string $LabelValue) Set Tag value, optional values include:
1.method: request method name, for example, GET, POST, PUT, etc.
2.proto: protocol name, for example, HTTP/1.1, HTTP/2, etc.
3.service: service name, for example, the request URL such as http://httpbin.org/get
4.status: response status code, for example, 200, 404, 500, etc.
5.result: response details, used to determine whether the request was successful or failed; if successful, the result Tag value is ok; if failed, the result Tag carries an error code and description.
6.check: check name, the Tag value is the checkpoint name set by the user.
 */
class Filter extends AbstractModel
{
    /**
     * @var integer Equals: 0, not equals: 1.
     */
    public $Operator;

    /**
     * @var string Tag name, optional values include:
1. method, request method name;
2. proto: protocol name;
3. service: service name;
4. status: response status code;
5.result: response details
6.check: check name.
     */
    public $LabelName;

    /**
     * @var string Tag value, optional values include:
1.method: request method name, for example, GET, POST, PUT, etc.
2.proto: protocol name, for example, HTTP/1.1, HTTP/2, etc.
3.service: service name, for example, the request URL such as http://httpbin.org/get
4.status: response status code, for example, 200, 404, 500, etc.
5.result: response details, used to determine whether the request was successful or failed; if successful, the result Tag value is ok; if failed, the result Tag carries an error code and description.
6.check: check name, the Tag value is the checkpoint name set by the user.
     */
    public $LabelValue;

    /**
     * @param integer $Operator Equals: 0, not equals: 1.
     * @param string $LabelName Tag name, optional values include:
1. method, request method name;
2. proto: protocol name;
3. service: service name;
4. status: response status code;
5.result: response details
6.check: check name.
     * @param string $LabelValue Tag value, optional values include:
1.method: request method name, for example, GET, POST, PUT, etc.
2.proto: protocol name, for example, HTTP/1.1, HTTP/2, etc.
3.service: service name, for example, the request URL such as http://httpbin.org/get
4.status: response status code, for example, 200, 404, 500, etc.
5.result: response details, used to determine whether the request was successful or failed; if successful, the result Tag value is ok; if failed, the result Tag carries an error code and description.
6.check: check name, the Tag value is the checkpoint name set by the user.
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("LabelName",$param) and $param["LabelName"] !== null) {
            $this->LabelName = $param["LabelName"];
        }

        if (array_key_exists("LabelValue",$param) and $param["LabelValue"] !== null) {
            $this->LabelValue = $param["LabelValue"];
        }
    }
}
