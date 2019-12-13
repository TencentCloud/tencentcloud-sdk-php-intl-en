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
 * @method array getInstanceIds() 获取Instance ID(s) in the format of `ins-xxxxxxxx`. For more information on the format of this parameter, see the `id.N` section of [API Introduction](https://cloud.tencent.com/document/api/213/15688). The maximum number of instances in each request is 100.
 * @method void setInstanceIds(array $InstanceIds) 设置Instance ID(s) in the format of `ins-xxxxxxxx`. For more information on the format of this parameter, see the `id.N` section of [API Introduction](https://cloud.tencent.com/document/api/213/15688). The maximum number of instances in each request is 100.
 * @method integer getOffset() 获取Offset; default value: 0. For more information on `Offset`, see the corresponding section in API [Introduction](https://intl.cloud.tencent.com/document/product/377).
 * @method void setOffset(integer $Offset) 设置Offset; default value: 0. For more information on `Offset`, see the corresponding section in API [Introduction](https://intl.cloud.tencent.com/document/product/377).
 * @method integer getLimit() 获取Number of results returned; default value: 20; maximum: 100. For more information on `Limit`, see the corresponding section in API [Introduction](https://intl.cloud.tencent.com/document/product/377).
 * @method void setLimit(integer $Limit) 设置Number of results returned; default value: 20; maximum: 100. For more information on `Limit`, see the corresponding section in API [Introduction](https://intl.cloud.tencent.com/document/product/377).
 */

/**
 *DescribeInstancesStatus request structure.
 */
class DescribeInstancesStatusRequest extends AbstractModel
{
    /**
     * @var array Instance ID(s) in the format of `ins-xxxxxxxx`. For more information on the format of this parameter, see the `id.N` section of [API Introduction](https://cloud.tencent.com/document/api/213/15688). The maximum number of instances in each request is 100.
     */
    public $InstanceIds;

    /**
     * @var integer Offset; default value: 0. For more information on `Offset`, see the corresponding section in API [Introduction](https://intl.cloud.tencent.com/document/product/377).
     */
    public $Offset;

    /**
     * @var integer Number of results returned; default value: 20; maximum: 100. For more information on `Limit`, see the corresponding section in API [Introduction](https://intl.cloud.tencent.com/document/product/377).
     */
    public $Limit;
    /**
     * @param array $InstanceIds Instance ID(s) in the format of `ins-xxxxxxxx`. For more information on the format of this parameter, see the `id.N` section of [API Introduction](https://cloud.tencent.com/document/api/213/15688). The maximum number of instances in each request is 100.
     * @param integer $Offset Offset; default value: 0. For more information on `Offset`, see the corresponding section in API [Introduction](https://intl.cloud.tencent.com/document/product/377).
     * @param integer $Limit Number of results returned; default value: 20; maximum: 100. For more information on `Limit`, see the corresponding section in API [Introduction](https://intl.cloud.tencent.com/document/product/377).
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
