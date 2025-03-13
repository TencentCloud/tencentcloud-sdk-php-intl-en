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
 * DescribeReservedInstances request structure.
 *
 * @method boolean getDryRun() Obtain Trial run. Default value: false.
 * @method void setDryRun(boolean $DryRun) Set Trial run. Default value: false.
 * @method integer getOffset() Obtain Offset. Default value: 0. For more information on `Offset`, see the relevant section in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0. For more information on `Offset`, see the relevant section in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method integer getLimit() Obtain Number of returned instances. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setLimit(integer $Limit) Set Number of returned instances. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method array getFilters() Obtain <li><strong>zone</strong></li>
<p style="padding-left: 30px;">Filter by [<strong>availability zones</strong>] in which reserved instances can be purchased. For example, ap-guangzhou-1.</p><p style="padding-left: 30px;">Type: String.</p><p style="padding-left: 30px;">Required: No.</p><p style="padding-left: 30px;">Valid values: See the <a href="https://intl.cloud.tencent.com/document/product/213/6091?from_cn_redirect=1">availability zone list</a>.</p>
<li><strong>duration</strong></li>
<p style="padding-left: 30px;">Filter by [<strong>validity periods</strong>] of reserved instances, which is the instance purchase duration. For example, 31536000.</p><p style="padding-left: 30px;">Type: Integer.</p><p style="padding-left: 30px;">Unit: Second.</p><p style="padding-left: 30px;">Required: No.</p><p style="padding-left: 30px;">Valid values: 31536000 (1 year) | 94608000 (3 years).</p>
<li><strong>instance-type</strong></li>
<p style="padding-left: 30px;">Filter by [<strong>specifications of reserved instances</strong>]. For example, S3.MEDIUM4.</p><p style="padding-left: 30px;">Type: String.</p><p style="padding-left: 30px;">Required: No.</p><p style="padding-left: 30px;">Valid values: See the <a href="https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1">reserved instance specification list</a>.</p>
<li><strong>instance-family</strong></li>
<p style="padding-left: 30px;">Filter by [<strong>types of reserved instances</strong>]. For example, S3.</p><p style="padding-left: 30px;">Type: String.</p><p style="padding-left: 30px;">Required: No.</p><p style="padding-left: 30px;">Valid values: See the <a href="https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1">reserved instance type list</a>.</p>
<li><strong>offering-type</strong></li>
<p style="padding-left: 30px;">Filter by <strong>payment types</strong>]. For example, All Upfront (fully prepaid).</p><p style="padding-left: 30px;">Type: String.</p><p style="padding-left: 30px;">Required: No.</p><p style="padding-left: 30px;">Valid values: All Upfront (fully prepaid) | Partial Upfront (partially prepaid) | No Upfront (non-prepaid).</p>
<li><strong>product-description</strong></li>
<p style="padding-left: 30px;">Filter by [<strong>platform descriptions</strong>] (operating system) of reserved instances. For example, linux.</p><p style="padding-left: 30px;">Type: String.</p><p style="padding-left: 30px;">Required: No.</p><p style="padding-left: 30px;">Valid value: linux.</p>
<li><strong>reserved-instances-id</strong></li>
<p style="padding-left: 30px;">Filter by [<strong>IDs of purchased reserved instances</strong>]. For example, 650c138f-ae7e-4750-952a-96841d6e9fc1.</p><p style="padding-left: 30px;">Type: String.</p><p style="padding-left: 30px;">Required: No.</p>
<li><strong>state</strong></li>
<p style="padding-left: 30px;">Filter by [<strong>statuses of purchased reserved instances</strong>]. For example, active.</p><p style="padding-left: 30px;">Type: String.</p><p style="padding-left: 30px;">Required: No.</p><p style="padding-left: 30px;">Valid values: active (created) | pending (waiting to be created) | retired (expired).</p>
Each request can have up to 10 filters, and each filter can have up to 5 values.
 * @method void setFilters(array $Filters) Set <li><strong>zone</strong></li>
<p style="padding-left: 30px;">Filter by [<strong>availability zones</strong>] in which reserved instances can be purchased. For example, ap-guangzhou-1.</p><p style="padding-left: 30px;">Type: String.</p><p style="padding-left: 30px;">Required: No.</p><p style="padding-left: 30px;">Valid values: See the <a href="https://intl.cloud.tencent.com/document/product/213/6091?from_cn_redirect=1">availability zone list</a>.</p>
<li><strong>duration</strong></li>
<p style="padding-left: 30px;">Filter by [<strong>validity periods</strong>] of reserved instances, which is the instance purchase duration. For example, 31536000.</p><p style="padding-left: 30px;">Type: Integer.</p><p style="padding-left: 30px;">Unit: Second.</p><p style="padding-left: 30px;">Required: No.</p><p style="padding-left: 30px;">Valid values: 31536000 (1 year) | 94608000 (3 years).</p>
<li><strong>instance-type</strong></li>
<p style="padding-left: 30px;">Filter by [<strong>specifications of reserved instances</strong>]. For example, S3.MEDIUM4.</p><p style="padding-left: 30px;">Type: String.</p><p style="padding-left: 30px;">Required: No.</p><p style="padding-left: 30px;">Valid values: See the <a href="https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1">reserved instance specification list</a>.</p>
<li><strong>instance-family</strong></li>
<p style="padding-left: 30px;">Filter by [<strong>types of reserved instances</strong>]. For example, S3.</p><p style="padding-left: 30px;">Type: String.</p><p style="padding-left: 30px;">Required: No.</p><p style="padding-left: 30px;">Valid values: See the <a href="https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1">reserved instance type list</a>.</p>
<li><strong>offering-type</strong></li>
<p style="padding-left: 30px;">Filter by <strong>payment types</strong>]. For example, All Upfront (fully prepaid).</p><p style="padding-left: 30px;">Type: String.</p><p style="padding-left: 30px;">Required: No.</p><p style="padding-left: 30px;">Valid values: All Upfront (fully prepaid) | Partial Upfront (partially prepaid) | No Upfront (non-prepaid).</p>
<li><strong>product-description</strong></li>
<p style="padding-left: 30px;">Filter by [<strong>platform descriptions</strong>] (operating system) of reserved instances. For example, linux.</p><p style="padding-left: 30px;">Type: String.</p><p style="padding-left: 30px;">Required: No.</p><p style="padding-left: 30px;">Valid value: linux.</p>
<li><strong>reserved-instances-id</strong></li>
<p style="padding-left: 30px;">Filter by [<strong>IDs of purchased reserved instances</strong>]. For example, 650c138f-ae7e-4750-952a-96841d6e9fc1.</p><p style="padding-left: 30px;">Type: String.</p><p style="padding-left: 30px;">Required: No.</p>
<li><strong>state</strong></li>
<p style="padding-left: 30px;">Filter by [<strong>statuses of purchased reserved instances</strong>]. For example, active.</p><p style="padding-left: 30px;">Type: String.</p><p style="padding-left: 30px;">Required: No.</p><p style="padding-left: 30px;">Valid values: active (created) | pending (waiting to be created) | retired (expired).</p>
Each request can have up to 10 filters, and each filter can have up to 5 values.
 */
class DescribeReservedInstancesRequest extends AbstractModel
{
    /**
     * @var boolean Trial run. Default value: false.
     */
    public $DryRun;

    /**
     * @var integer Offset. Default value: 0. For more information on `Offset`, see the relevant section in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     */
    public $Offset;

    /**
     * @var integer Number of returned instances. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     */
    public $Limit;

    /**
     * @var array <li><strong>zone</strong></li>
<p style="padding-left: 30px;">Filter by [<strong>availability zones</strong>] in which reserved instances can be purchased. For example, ap-guangzhou-1.</p><p style="padding-left: 30px;">Type: String.</p><p style="padding-left: 30px;">Required: No.</p><p style="padding-left: 30px;">Valid values: See the <a href="https://intl.cloud.tencent.com/document/product/213/6091?from_cn_redirect=1">availability zone list</a>.</p>
<li><strong>duration</strong></li>
<p style="padding-left: 30px;">Filter by [<strong>validity periods</strong>] of reserved instances, which is the instance purchase duration. For example, 31536000.</p><p style="padding-left: 30px;">Type: Integer.</p><p style="padding-left: 30px;">Unit: Second.</p><p style="padding-left: 30px;">Required: No.</p><p style="padding-left: 30px;">Valid values: 31536000 (1 year) | 94608000 (3 years).</p>
<li><strong>instance-type</strong></li>
<p style="padding-left: 30px;">Filter by [<strong>specifications of reserved instances</strong>]. For example, S3.MEDIUM4.</p><p style="padding-left: 30px;">Type: String.</p><p style="padding-left: 30px;">Required: No.</p><p style="padding-left: 30px;">Valid values: See the <a href="https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1">reserved instance specification list</a>.</p>
<li><strong>instance-family</strong></li>
<p style="padding-left: 30px;">Filter by [<strong>types of reserved instances</strong>]. For example, S3.</p><p style="padding-left: 30px;">Type: String.</p><p style="padding-left: 30px;">Required: No.</p><p style="padding-left: 30px;">Valid values: See the <a href="https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1">reserved instance type list</a>.</p>
<li><strong>offering-type</strong></li>
<p style="padding-left: 30px;">Filter by <strong>payment types</strong>]. For example, All Upfront (fully prepaid).</p><p style="padding-left: 30px;">Type: String.</p><p style="padding-left: 30px;">Required: No.</p><p style="padding-left: 30px;">Valid values: All Upfront (fully prepaid) | Partial Upfront (partially prepaid) | No Upfront (non-prepaid).</p>
<li><strong>product-description</strong></li>
<p style="padding-left: 30px;">Filter by [<strong>platform descriptions</strong>] (operating system) of reserved instances. For example, linux.</p><p style="padding-left: 30px;">Type: String.</p><p style="padding-left: 30px;">Required: No.</p><p style="padding-left: 30px;">Valid value: linux.</p>
<li><strong>reserved-instances-id</strong></li>
<p style="padding-left: 30px;">Filter by [<strong>IDs of purchased reserved instances</strong>]. For example, 650c138f-ae7e-4750-952a-96841d6e9fc1.</p><p style="padding-left: 30px;">Type: String.</p><p style="padding-left: 30px;">Required: No.</p>
<li><strong>state</strong></li>
<p style="padding-left: 30px;">Filter by [<strong>statuses of purchased reserved instances</strong>]. For example, active.</p><p style="padding-left: 30px;">Type: String.</p><p style="padding-left: 30px;">Required: No.</p><p style="padding-left: 30px;">Valid values: active (created) | pending (waiting to be created) | retired (expired).</p>
Each request can have up to 10 filters, and each filter can have up to 5 values.
     */
    public $Filters;

    /**
     * @param boolean $DryRun Trial run. Default value: false.
     * @param integer $Offset Offset. Default value: 0. For more information on `Offset`, see the relevant section in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     * @param integer $Limit Number of returned instances. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     * @param array $Filters <li><strong>zone</strong></li>
<p style="padding-left: 30px;">Filter by [<strong>availability zones</strong>] in which reserved instances can be purchased. For example, ap-guangzhou-1.</p><p style="padding-left: 30px;">Type: String.</p><p style="padding-left: 30px;">Required: No.</p><p style="padding-left: 30px;">Valid values: See the <a href="https://intl.cloud.tencent.com/document/product/213/6091?from_cn_redirect=1">availability zone list</a>.</p>
<li><strong>duration</strong></li>
<p style="padding-left: 30px;">Filter by [<strong>validity periods</strong>] of reserved instances, which is the instance purchase duration. For example, 31536000.</p><p style="padding-left: 30px;">Type: Integer.</p><p style="padding-left: 30px;">Unit: Second.</p><p style="padding-left: 30px;">Required: No.</p><p style="padding-left: 30px;">Valid values: 31536000 (1 year) | 94608000 (3 years).</p>
<li><strong>instance-type</strong></li>
<p style="padding-left: 30px;">Filter by [<strong>specifications of reserved instances</strong>]. For example, S3.MEDIUM4.</p><p style="padding-left: 30px;">Type: String.</p><p style="padding-left: 30px;">Required: No.</p><p style="padding-left: 30px;">Valid values: See the <a href="https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1">reserved instance specification list</a>.</p>
<li><strong>instance-family</strong></li>
<p style="padding-left: 30px;">Filter by [<strong>types of reserved instances</strong>]. For example, S3.</p><p style="padding-left: 30px;">Type: String.</p><p style="padding-left: 30px;">Required: No.</p><p style="padding-left: 30px;">Valid values: See the <a href="https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1">reserved instance type list</a>.</p>
<li><strong>offering-type</strong></li>
<p style="padding-left: 30px;">Filter by <strong>payment types</strong>]. For example, All Upfront (fully prepaid).</p><p style="padding-left: 30px;">Type: String.</p><p style="padding-left: 30px;">Required: No.</p><p style="padding-left: 30px;">Valid values: All Upfront (fully prepaid) | Partial Upfront (partially prepaid) | No Upfront (non-prepaid).</p>
<li><strong>product-description</strong></li>
<p style="padding-left: 30px;">Filter by [<strong>platform descriptions</strong>] (operating system) of reserved instances. For example, linux.</p><p style="padding-left: 30px;">Type: String.</p><p style="padding-left: 30px;">Required: No.</p><p style="padding-left: 30px;">Valid value: linux.</p>
<li><strong>reserved-instances-id</strong></li>
<p style="padding-left: 30px;">Filter by [<strong>IDs of purchased reserved instances</strong>]. For example, 650c138f-ae7e-4750-952a-96841d6e9fc1.</p><p style="padding-left: 30px;">Type: String.</p><p style="padding-left: 30px;">Required: No.</p>
<li><strong>state</strong></li>
<p style="padding-left: 30px;">Filter by [<strong>statuses of purchased reserved instances</strong>]. For example, active.</p><p style="padding-left: 30px;">Type: String.</p><p style="padding-left: 30px;">Required: No.</p><p style="padding-left: 30px;">Valid values: active (created) | pending (waiting to be created) | retired (expired).</p>
Each request can have up to 10 filters, and each filter can have up to 5 values.
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
        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
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
