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
 * @method boolean getDryRun() Obtain Dry run. The default is false.
 * @method void setDryRun(boolean $DryRun) Set Dry run. The default is false.
 * @method integer getOffset() Obtain Offset. The default value is 0. For more information on `Offset`, see the relevant sections in API [Overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setOffset(integer $Offset) Set Offset. The default value is 0. For more information on `Offset`, see the relevant sections in API [Overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method integer getLimit() Obtain Number of returned results. The default value is 20. The maximum is 100. For more information on `Limit`, see the relevant sections in API [Overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setLimit(integer $Limit) Set Number of returned results. The default value is 20. The maximum is 100. For more information on `Limit`, see the relevant sections in API [Overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method array getFilters() Obtain <li><strong>zone</strong></li>
<p style="padding-left: 30px;">Filters by <strong>availability zone</strong> in which the reserved instances can be purchased, such as ap-guangzhou-1.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p><p style="padding-left: 30px;">Valid values: please see <a href="https://intl.cloud.tencent.com/document/product/213/6091?from_cn_redirect=1">Availability Zones</a></p>
<li><strong>duration</strong></li>
<p style="padding-left: 30px;">Filters by the <strong>validity</strong> of the reserved instance, in seconds. For example, `31536000`.</p><p style="padding-left: 30px;">Type: Integer</p><p style="padding-left: 30px;">Unit: second</p><p style="padding-left: 30px;">Required: no</p><p style="padding-left: 30px;">Valid values: 31536000 (1 year) | 94608000 (3 years)</p>
<li><strong>instance-type</strong></li>
<p style="padding-left: 30px;">Filters by <strong>reserved instance specification</strong>, such as `S3.MEDIUM4`.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p><p style="padding-left: 30px;">Valid values: please see <a href="https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1">Reserved Instance Specifications</a></p>
<li><strong>instance-family</strong></li>
<p style="padding-left: 30px;">Filters by <strong>type of the reserved instance</strong>, such as `S3`.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p><p style="padding-left: 30px;">Valid values: please see <a href="https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1">Reserved Instance Types</a></p>
<li><strong>offering-type</strong></li>
<li><strong>offering-type</strong></li>
<p style="padding-left: 30px;">Filters by <strong>payment method</strong>, such as `All Upfront`.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p><p style="padding-left: 30px;">Valid value: All Upfront</p>
<li><strong>product-description</strong></li>
<p style="padding-left: 30px;">Filters by the <strong>platform description</strong> (operating system) of the reserved instance, such as `linux`.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p><p style="padding-left: 30px;">Valid value: linux</p>
<li><strong>reserved-instances-id</strong></li>
<p style="padding-left: 30px;">Filters by <strong>reserved instance ID</strong> in the form of 650c138f-ae7e-4750-952a-96841d6e9fc1.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p>
<li><strong>state</strong></li>
<p style="padding-left: 30px;">Filters by <strong>reserved instance status</strong>. For example, “active”.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required</p><p style="padding-left: 30px;">Valid values: active (created) | pending (waiting to be created) | retired (expired)</p>
Each request can have up to 10 `Filters` and 5 `Filter.Values`.
 * @method void setFilters(array $Filters) Set <li><strong>zone</strong></li>
<p style="padding-left: 30px;">Filters by <strong>availability zone</strong> in which the reserved instances can be purchased, such as ap-guangzhou-1.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p><p style="padding-left: 30px;">Valid values: please see <a href="https://intl.cloud.tencent.com/document/product/213/6091?from_cn_redirect=1">Availability Zones</a></p>
<li><strong>duration</strong></li>
<p style="padding-left: 30px;">Filters by the <strong>validity</strong> of the reserved instance, in seconds. For example, `31536000`.</p><p style="padding-left: 30px;">Type: Integer</p><p style="padding-left: 30px;">Unit: second</p><p style="padding-left: 30px;">Required: no</p><p style="padding-left: 30px;">Valid values: 31536000 (1 year) | 94608000 (3 years)</p>
<li><strong>instance-type</strong></li>
<p style="padding-left: 30px;">Filters by <strong>reserved instance specification</strong>, such as `S3.MEDIUM4`.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p><p style="padding-left: 30px;">Valid values: please see <a href="https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1">Reserved Instance Specifications</a></p>
<li><strong>instance-family</strong></li>
<p style="padding-left: 30px;">Filters by <strong>type of the reserved instance</strong>, such as `S3`.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p><p style="padding-left: 30px;">Valid values: please see <a href="https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1">Reserved Instance Types</a></p>
<li><strong>offering-type</strong></li>
<li><strong>offering-type</strong></li>
<p style="padding-left: 30px;">Filters by <strong>payment method</strong>, such as `All Upfront`.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p><p style="padding-left: 30px;">Valid value: All Upfront</p>
<li><strong>product-description</strong></li>
<p style="padding-left: 30px;">Filters by the <strong>platform description</strong> (operating system) of the reserved instance, such as `linux`.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p><p style="padding-left: 30px;">Valid value: linux</p>
<li><strong>reserved-instances-id</strong></li>
<p style="padding-left: 30px;">Filters by <strong>reserved instance ID</strong> in the form of 650c138f-ae7e-4750-952a-96841d6e9fc1.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p>
<li><strong>state</strong></li>
<p style="padding-left: 30px;">Filters by <strong>reserved instance status</strong>. For example, “active”.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required</p><p style="padding-left: 30px;">Valid values: active (created) | pending (waiting to be created) | retired (expired)</p>
Each request can have up to 10 `Filters` and 5 `Filter.Values`.
 */
class DescribeReservedInstancesRequest extends AbstractModel
{
    /**
     * @var boolean Dry run. The default is false.
     */
    public $DryRun;

    /**
     * @var integer Offset. The default value is 0. For more information on `Offset`, see the relevant sections in API [Overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     */
    public $Offset;

    /**
     * @var integer Number of returned results. The default value is 20. The maximum is 100. For more information on `Limit`, see the relevant sections in API [Overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     */
    public $Limit;

    /**
     * @var array <li><strong>zone</strong></li>
<p style="padding-left: 30px;">Filters by <strong>availability zone</strong> in which the reserved instances can be purchased, such as ap-guangzhou-1.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p><p style="padding-left: 30px;">Valid values: please see <a href="https://intl.cloud.tencent.com/document/product/213/6091?from_cn_redirect=1">Availability Zones</a></p>
<li><strong>duration</strong></li>
<p style="padding-left: 30px;">Filters by the <strong>validity</strong> of the reserved instance, in seconds. For example, `31536000`.</p><p style="padding-left: 30px;">Type: Integer</p><p style="padding-left: 30px;">Unit: second</p><p style="padding-left: 30px;">Required: no</p><p style="padding-left: 30px;">Valid values: 31536000 (1 year) | 94608000 (3 years)</p>
<li><strong>instance-type</strong></li>
<p style="padding-left: 30px;">Filters by <strong>reserved instance specification</strong>, such as `S3.MEDIUM4`.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p><p style="padding-left: 30px;">Valid values: please see <a href="https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1">Reserved Instance Specifications</a></p>
<li><strong>instance-family</strong></li>
<p style="padding-left: 30px;">Filters by <strong>type of the reserved instance</strong>, such as `S3`.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p><p style="padding-left: 30px;">Valid values: please see <a href="https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1">Reserved Instance Types</a></p>
<li><strong>offering-type</strong></li>
<li><strong>offering-type</strong></li>
<p style="padding-left: 30px;">Filters by <strong>payment method</strong>, such as `All Upfront`.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p><p style="padding-left: 30px;">Valid value: All Upfront</p>
<li><strong>product-description</strong></li>
<p style="padding-left: 30px;">Filters by the <strong>platform description</strong> (operating system) of the reserved instance, such as `linux`.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p><p style="padding-left: 30px;">Valid value: linux</p>
<li><strong>reserved-instances-id</strong></li>
<p style="padding-left: 30px;">Filters by <strong>reserved instance ID</strong> in the form of 650c138f-ae7e-4750-952a-96841d6e9fc1.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p>
<li><strong>state</strong></li>
<p style="padding-left: 30px;">Filters by <strong>reserved instance status</strong>. For example, “active”.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required</p><p style="padding-left: 30px;">Valid values: active (created) | pending (waiting to be created) | retired (expired)</p>
Each request can have up to 10 `Filters` and 5 `Filter.Values`.
     */
    public $Filters;

    /**
     * @param boolean $DryRun Dry run. The default is false.
     * @param integer $Offset Offset. The default value is 0. For more information on `Offset`, see the relevant sections in API [Overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     * @param integer $Limit Number of returned results. The default value is 20. The maximum is 100. For more information on `Limit`, see the relevant sections in API [Overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     * @param array $Filters <li><strong>zone</strong></li>
<p style="padding-left: 30px;">Filters by <strong>availability zone</strong> in which the reserved instances can be purchased, such as ap-guangzhou-1.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p><p style="padding-left: 30px;">Valid values: please see <a href="https://intl.cloud.tencent.com/document/product/213/6091?from_cn_redirect=1">Availability Zones</a></p>
<li><strong>duration</strong></li>
<p style="padding-left: 30px;">Filters by the <strong>validity</strong> of the reserved instance, in seconds. For example, `31536000`.</p><p style="padding-left: 30px;">Type: Integer</p><p style="padding-left: 30px;">Unit: second</p><p style="padding-left: 30px;">Required: no</p><p style="padding-left: 30px;">Valid values: 31536000 (1 year) | 94608000 (3 years)</p>
<li><strong>instance-type</strong></li>
<p style="padding-left: 30px;">Filters by <strong>reserved instance specification</strong>, such as `S3.MEDIUM4`.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p><p style="padding-left: 30px;">Valid values: please see <a href="https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1">Reserved Instance Specifications</a></p>
<li><strong>instance-family</strong></li>
<p style="padding-left: 30px;">Filters by <strong>type of the reserved instance</strong>, such as `S3`.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p><p style="padding-left: 30px;">Valid values: please see <a href="https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1">Reserved Instance Types</a></p>
<li><strong>offering-type</strong></li>
<li><strong>offering-type</strong></li>
<p style="padding-left: 30px;">Filters by <strong>payment method</strong>, such as `All Upfront`.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p><p style="padding-left: 30px;">Valid value: All Upfront</p>
<li><strong>product-description</strong></li>
<p style="padding-left: 30px;">Filters by the <strong>platform description</strong> (operating system) of the reserved instance, such as `linux`.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p><p style="padding-left: 30px;">Valid value: linux</p>
<li><strong>reserved-instances-id</strong></li>
<p style="padding-left: 30px;">Filters by <strong>reserved instance ID</strong> in the form of 650c138f-ae7e-4750-952a-96841d6e9fc1.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p>
<li><strong>state</strong></li>
<p style="padding-left: 30px;">Filters by <strong>reserved instance status</strong>. For example, “active”.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required</p><p style="padding-left: 30px;">Valid values: active (created) | pending (waiting to be created) | retired (expired)</p>
Each request can have up to 10 `Filters` and 5 `Filter.Values`.
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
