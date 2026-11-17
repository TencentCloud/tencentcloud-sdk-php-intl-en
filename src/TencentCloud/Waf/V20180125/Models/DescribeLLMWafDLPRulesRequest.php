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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLLMWafDLPRules request structure.
 *
 * @method string getServiceId() Obtain <p>In SDK mode, pass in ServiceId (either ServiceId or Domain)</p>
 * @method void setServiceId(string $ServiceId) Set <p>In SDK mode, pass in ServiceId (either ServiceId or Domain)</p>
 * @method string getInstanceId() Obtain <p>Instance id</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance id</p>
 * @method string getBy() Obtain <p>Sorting field. Currently, only UpdateTime is supported. If this parameter is left empty, rules are returned in the default order.</p>
 * @method void setBy(string $By) Set <p>Sorting field. Currently, only UpdateTime is supported. If this parameter is left empty, rules are returned in the default order.</p>
 * @method string getOrder() Obtain <p>Sorting order: asc (ascending) or desc (descending). Default value: desc.</p>
 * @method void setOrder(string $Order) Set <p>Sorting order: asc (ascending) or desc (descending). Default value: desc.</p>
 * @method string getDomain() Obtain <p>In domain mode, pass in Domain (either Domain or ServiceId)</p>
 * @method void setDomain(string $Domain) Set <p>In domain mode, pass in Domain (either Domain or ServiceId)</p>
 */
class DescribeLLMWafDLPRulesRequest extends AbstractModel
{
    /**
     * @var string <p>In SDK mode, pass in ServiceId (either ServiceId or Domain)</p>
     */
    public $ServiceId;

    /**
     * @var string <p>Instance id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Sorting field. Currently, only UpdateTime is supported. If this parameter is left empty, rules are returned in the default order.</p>
     */
    public $By;

    /**
     * @var string <p>Sorting order: asc (ascending) or desc (descending). Default value: desc.</p>
     */
    public $Order;

    /**
     * @var string <p>In domain mode, pass in Domain (either Domain or ServiceId)</p>
     */
    public $Domain;

    /**
     * @param string $ServiceId <p>In SDK mode, pass in ServiceId (either ServiceId or Domain)</p>
     * @param string $InstanceId <p>Instance id</p>
     * @param string $By <p>Sorting field. Currently, only UpdateTime is supported. If this parameter is left empty, rules are returned in the default order.</p>
     * @param string $Order <p>Sorting order: asc (ascending) or desc (descending). Default value: desc.</p>
     * @param string $Domain <p>In domain mode, pass in Domain (either Domain or ServiceId)</p>
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
