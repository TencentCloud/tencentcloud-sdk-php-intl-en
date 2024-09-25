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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Matching criteria structure for preventing information leakage
 *
 * @method string getField() Obtain Matching Criteria, returncode (Response Code), keywords (Keywords), information (Sensitive Information)
 * @method void setField(string $Field) Set Matching Criteria, returncode (Response Code), keywords (Keywords), information (Sensitive Information)
 * @method string getCompareFunc() Obtain Logical operator, fixed value: contains
 * @method void setCompareFunc(string $CompareFunc) Set Logical operator, fixed value: contains
 * @method string getContent() Obtain Matching content
The following options are available when Field is set to information:
idcard (ID card), phone (phone number), and bankcard (bank card).
The following options are available when Field is set to returncode:
400 (status code 400), 403 (status code 403), 404 (status code 404), 4xx (other 4xx status codes), 500 (status code 500), 501 (status code 501), 502 (status code 502), 504 (status code 504), and 5xx (other 5xx status codes).
When Field is set to keywords, users need to input the matching content themselves.

 * @method void setContent(string $Content) Set Matching content
The following options are available when Field is set to information:
idcard (ID card), phone (phone number), and bankcard (bank card).
The following options are available when Field is set to returncode:
400 (status code 400), 403 (status code 403), 404 (status code 404), 4xx (other 4xx status codes), 500 (status code 500), 501 (status code 501), 502 (status code 502), 504 (status code 504), and 5xx (other 5xx status codes).
When Field is set to keywords, users need to input the matching content themselves.
 */
class StrategyForAntiInfoLeak extends AbstractModel
{
    /**
     * @var string Matching Criteria, returncode (Response Code), keywords (Keywords), information (Sensitive Information)
     */
    public $Field;

    /**
     * @var string Logical operator, fixed value: contains
     */
    public $CompareFunc;

    /**
     * @var string Matching content
The following options are available when Field is set to information:
idcard (ID card), phone (phone number), and bankcard (bank card).
The following options are available when Field is set to returncode:
400 (status code 400), 403 (status code 403), 404 (status code 404), 4xx (other 4xx status codes), 500 (status code 500), 501 (status code 501), 502 (status code 502), 504 (status code 504), and 5xx (other 5xx status codes).
When Field is set to keywords, users need to input the matching content themselves.

     */
    public $Content;

    /**
     * @param string $Field Matching Criteria, returncode (Response Code), keywords (Keywords), information (Sensitive Information)
     * @param string $CompareFunc Logical operator, fixed value: contains
     * @param string $Content Matching content
The following options are available when Field is set to information:
idcard (ID card), phone (phone number), and bankcard (bank card).
The following options are available when Field is set to returncode:
400 (status code 400), 403 (status code 403), 404 (status code 404), 4xx (other 4xx status codes), 500 (status code 500), 501 (status code 501), 502 (status code 502), 504 (status code 504), and 5xx (other 5xx status codes).
When Field is set to keywords, users need to input the matching content themselves.
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
        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }

        if (array_key_exists("CompareFunc",$param) and $param["CompareFunc"] !== null) {
            $this->CompareFunc = $param["CompareFunc"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
