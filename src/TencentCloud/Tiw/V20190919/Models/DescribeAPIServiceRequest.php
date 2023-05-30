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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAPIService request structure.
 *
 * @method string getService() Obtain Supported services are cos:GetService and cdn:DescribeDomainsConfig.
 * @method void setService(string $Service) Set Supported services are cos:GetService and cdn:DescribeDomainsConfig.
 * @method string getData() Obtain Request parameters in JSON format.
 * @method void setData(string $Data) Set Request parameters in JSON format.
 */
class DescribeAPIServiceRequest extends AbstractModel
{
    /**
     * @var string Supported services are cos:GetService and cdn:DescribeDomainsConfig.
     */
    public $Service;

    /**
     * @var string Request parameters in JSON format.
     */
    public $Data;

    /**
     * @param string $Service Supported services are cos:GetService and cdn:DescribeDomainsConfig.
     * @param string $Data Request parameters in JSON format.
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
        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }
    }
}
