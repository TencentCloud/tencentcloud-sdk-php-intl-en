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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceTypeConfigs request structure.
 *
 * @method array getFilters() Obtain <li><strong>zone</strong></li>
<p style="padding-left: 30px;">Filter results by **<strong>availability zones</strong>**. For example, availability zone: ap-guangzhou-1.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p><p style="padding-left: 30px;">Valid values: <a href="https://cloud.tencent.com/document/product/213/6091">list of availability zones</a></p>
<li><strong>instance-family</strong></li>
<p style="padding-left: 30px;">Filter results by **<strong>instance models</strong>**. For example, instance models: S1, I1 and M1.</p><p style="padding-left: 30px;">Type: Integer</p><p style="padding-left: 30px;">Required: no</p>
Each request can have up to 10 `Filters` and 1 `Filters.Values`.
 * @method void setFilters(array $Filters) Set <li><strong>zone</strong></li>
<p style="padding-left: 30px;">Filter results by **<strong>availability zones</strong>**. For example, availability zone: ap-guangzhou-1.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p><p style="padding-left: 30px;">Valid values: <a href="https://cloud.tencent.com/document/product/213/6091">list of availability zones</a></p>
<li><strong>instance-family</strong></li>
<p style="padding-left: 30px;">Filter results by **<strong>instance models</strong>**. For example, instance models: S1, I1 and M1.</p><p style="padding-left: 30px;">Type: Integer</p><p style="padding-left: 30px;">Required: no</p>
Each request can have up to 10 `Filters` and 1 `Filters.Values`.
 */
class DescribeInstanceTypeConfigsRequest extends AbstractModel
{
    /**
     * @var array <li><strong>zone</strong></li>
<p style="padding-left: 30px;">Filter results by **<strong>availability zones</strong>**. For example, availability zone: ap-guangzhou-1.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p><p style="padding-left: 30px;">Valid values: <a href="https://cloud.tencent.com/document/product/213/6091">list of availability zones</a></p>
<li><strong>instance-family</strong></li>
<p style="padding-left: 30px;">Filter results by **<strong>instance models</strong>**. For example, instance models: S1, I1 and M1.</p><p style="padding-left: 30px;">Type: Integer</p><p style="padding-left: 30px;">Required: no</p>
Each request can have up to 10 `Filters` and 1 `Filters.Values`.
     */
    public $Filters;

    /**
     * @param array $Filters <li><strong>zone</strong></li>
<p style="padding-left: 30px;">Filter results by **<strong>availability zones</strong>**. For example, availability zone: ap-guangzhou-1.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p><p style="padding-left: 30px;">Valid values: <a href="https://cloud.tencent.com/document/product/213/6091">list of availability zones</a></p>
<li><strong>instance-family</strong></li>
<p style="padding-left: 30px;">Filter results by **<strong>instance models</strong>**. For example, instance models: S1, I1 and M1.</p><p style="padding-left: 30px;">Type: Integer</p><p style="padding-left: 30px;">Required: no</p>
Each request can have up to 10 `Filters` and 1 `Filters.Values`.
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
    }
}
