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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportRiskDnsPolicyList request structure.
 *
 * @method array getFilters() Obtain <li>PolicyType - int - whether required: no - policy type</li>
<li>PolicyName - string - whether required: no - policy name</li>
<li>Domain - string - Required: No - Domain (first urlencode the domain, then base64)</li>
<li>PolicyAction- int - whether required: no - policy action</li>
<li>IsEnabled - int - whether required: no - whether effective</li>
 * @method void setFilters(array $Filters) Set <li>PolicyType - int - whether required: no - policy type</li>
<li>PolicyName - string - whether required: no - policy name</li>
<li>Domain - string - Required: No - Domain (first urlencode the domain, then base64)</li>
<li>PolicyAction- int - whether required: no - policy action</li>
<li>IsEnabled - int - whether required: no - whether effective</li>
 * @method string getOrder() Obtain Sorting Method: [ASC: Ascending Order, DESC: Descending Order]
 * @method void setOrder(string $Order) Set Sorting Method: [ASC: Ascending Order, DESC: Descending Order]
 * @method string getBy() Obtain Optional sorting column: [PolicyName|HostType]
 * @method void setBy(string $By) Set Optional sorting column: [PolicyName|HostType]
 */
class ExportRiskDnsPolicyListRequest extends AbstractModel
{
    /**
     * @var array <li>PolicyType - int - whether required: no - policy type</li>
<li>PolicyName - string - whether required: no - policy name</li>
<li>Domain - string - Required: No - Domain (first urlencode the domain, then base64)</li>
<li>PolicyAction- int - whether required: no - policy action</li>
<li>IsEnabled - int - whether required: no - whether effective</li>
     */
    public $Filters;

    /**
     * @var string Sorting Method: [ASC: Ascending Order, DESC: Descending Order]
     */
    public $Order;

    /**
     * @var string Optional sorting column: [PolicyName|HostType]
     */
    public $By;

    /**
     * @param array $Filters <li>PolicyType - int - whether required: no - policy type</li>
<li>PolicyName - string - whether required: no - policy name</li>
<li>Domain - string - Required: No - Domain (first urlencode the domain, then base64)</li>
<li>PolicyAction- int - whether required: no - policy action</li>
<li>IsEnabled - int - whether required: no - whether effective</li>
     * @param string $Order Sorting Method: [ASC: Ascending Order, DESC: Descending Order]
     * @param string $By Optional sorting column: [PolicyName|HostType]
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
