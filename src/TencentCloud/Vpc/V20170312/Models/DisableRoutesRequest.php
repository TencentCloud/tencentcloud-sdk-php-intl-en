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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DisableRoutes request structure.
 *
 * @method string getRouteTableId() Obtain Unique route table ID.
 * @method void setRouteTableId(string $RouteTableId) Set Unique route table ID.
 * @method array getRouteIds() Obtain Routing policy ID. This parameter cannot be used simultaneously with RouteItemIds, but at least one of them should be entered. The value of this parameter can be obtained by querying the route list ([DescribeRouteTables](https://intl.cloud.tencent.com/document/product/215/15763?from_cn_redirect=1)).
 * @method void setRouteIds(array $RouteIds) Set Routing policy ID. This parameter cannot be used simultaneously with RouteItemIds, but at least one of them should be entered. The value of this parameter can be obtained by querying the route list ([DescribeRouteTables](https://intl.cloud.tencent.com/document/product/215/15763?from_cn_redirect=1)).
 * @method array getRouteItemIds() Obtain Unique routing policy ID. This parameter cannot be used simultaneously with RouteIds, but at least one of them should be entered. The value of this parameter can be obtained by querying the route list ([DescribeRouteTables](https://intl.cloud.tencent.com/document/product/215/15763?from_cn_redirect=1)).
 * @method void setRouteItemIds(array $RouteItemIds) Set Unique routing policy ID. This parameter cannot be used simultaneously with RouteIds, but at least one of them should be entered. The value of this parameter can be obtained by querying the route list ([DescribeRouteTables](https://intl.cloud.tencent.com/document/product/215/15763?from_cn_redirect=1)).
 */
class DisableRoutesRequest extends AbstractModel
{
    /**
     * @var string Unique route table ID.
     */
    public $RouteTableId;

    /**
     * @var array Routing policy ID. This parameter cannot be used simultaneously with RouteItemIds, but at least one of them should be entered. The value of this parameter can be obtained by querying the route list ([DescribeRouteTables](https://intl.cloud.tencent.com/document/product/215/15763?from_cn_redirect=1)).
     */
    public $RouteIds;

    /**
     * @var array Unique routing policy ID. This parameter cannot be used simultaneously with RouteIds, but at least one of them should be entered. The value of this parameter can be obtained by querying the route list ([DescribeRouteTables](https://intl.cloud.tencent.com/document/product/215/15763?from_cn_redirect=1)).
     */
    public $RouteItemIds;

    /**
     * @param string $RouteTableId Unique route table ID.
     * @param array $RouteIds Routing policy ID. This parameter cannot be used simultaneously with RouteItemIds, but at least one of them should be entered. The value of this parameter can be obtained by querying the route list ([DescribeRouteTables](https://intl.cloud.tencent.com/document/product/215/15763?from_cn_redirect=1)).
     * @param array $RouteItemIds Unique routing policy ID. This parameter cannot be used simultaneously with RouteIds, but at least one of them should be entered. The value of this parameter can be obtained by querying the route list ([DescribeRouteTables](https://intl.cloud.tencent.com/document/product/215/15763?from_cn_redirect=1)).
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
        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }

        if (array_key_exists("RouteIds",$param) and $param["RouteIds"] !== null) {
            $this->RouteIds = $param["RouteIds"];
        }

        if (array_key_exists("RouteItemIds",$param) and $param["RouteItemIds"] !== null) {
            $this->RouteItemIds = $param["RouteItemIds"];
        }
    }
}
