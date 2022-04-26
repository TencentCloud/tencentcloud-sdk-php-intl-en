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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApplication request structure.
 *
 * @method string getApplicationId() Obtain Application ID, which is globally unique. You must specify at least this parameter or `ClientId`.
 * @method void setApplicationId(string $ApplicationId) Set Application ID, which is globally unique. You must specify at least this parameter or `ClientId`.
 * @method string getClientId() Obtain Client ID. You must specify at least this parameter or `ApplicationId`.
 * @method void setClientId(string $ClientId) Set Client ID. You must specify at least this parameter or `ApplicationId`.
 */
class DescribeApplicationRequest extends AbstractModel
{
    /**
     * @var string Application ID, which is globally unique. You must specify at least this parameter or `ClientId`.
     */
    public $ApplicationId;

    /**
     * @var string Client ID. You must specify at least this parameter or `ApplicationId`.
     */
    public $ClientId;

    /**
     * @param string $ApplicationId Application ID, which is globally unique. You must specify at least this parameter or `ClientId`.
     * @param string $ClientId Client ID. You must specify at least this parameter or `ApplicationId`.
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }
    }
}
