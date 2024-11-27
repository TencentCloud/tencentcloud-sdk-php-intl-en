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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDedicatedClusterOrders request structure.
 *
 * @method array getDedicatedClusterIds() Obtain Filter by CDC id.
 * @method void setDedicatedClusterIds(array $DedicatedClusterIds) Set Filter by CDC id.
 * @method string getDedicatedClusterOrderIds() Obtain Filter by CDC order id.
 * @method void setDedicatedClusterOrderIds(string $DedicatedClusterOrderIds) Set Filter by CDC order id.
 * @method integer getOffset() Obtain Offset, 0 by default For further information on Offset, please refer to relevant sections in API [Overview] (https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setOffset(integer $Offset) Set Offset, 0 by default For further information on Offset, please refer to relevant sections in API [Overview] (https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method integer getLimit() Obtain Number of returned pieces, 20 by default and can be up to 100. For further information on Limit, please refer to relevant sections in API [Overview] (https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setLimit(integer $Limit) Set Number of returned pieces, 20 by default and can be up to 100. For further information on Limit, please refer to relevant sections in API [Overview] (https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method string getStatus() Obtain The order status is the filter condition: PENDING INCONSTRUCTION DELIVERING DELIVERED EXPIRED CANCELLED OFFLINE
 * @method void setStatus(string $Status) Set The order status is the filter condition: PENDING INCONSTRUCTION DELIVERING DELIVERED EXPIRED CANCELLED OFFLINE
 * @method string getActionType() Obtain The order type is the filter condition: CREATE EXTEND
 * @method void setActionType(string $ActionType) Set The order type is the filter condition: CREATE EXTEND
 * @method array getOrderTypes() Obtain 
 * @method void setOrderTypes(array $OrderTypes) Set 
 */
class DescribeDedicatedClusterOrdersRequest extends AbstractModel
{
    /**
     * @var array Filter by CDC id.
     */
    public $DedicatedClusterIds;

    /**
     * @var string Filter by CDC order id.
     */
    public $DedicatedClusterOrderIds;

    /**
     * @var integer Offset, 0 by default For further information on Offset, please refer to relevant sections in API [Overview] (https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     */
    public $Offset;

    /**
     * @var integer Number of returned pieces, 20 by default and can be up to 100. For further information on Limit, please refer to relevant sections in API [Overview] (https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     */
    public $Limit;

    /**
     * @var string The order status is the filter condition: PENDING INCONSTRUCTION DELIVERING DELIVERED EXPIRED CANCELLED OFFLINE
     */
    public $Status;

    /**
     * @var string The order type is the filter condition: CREATE EXTEND
     */
    public $ActionType;

    /**
     * @var array 
     */
    public $OrderTypes;

    /**
     * @param array $DedicatedClusterIds Filter by CDC id.
     * @param string $DedicatedClusterOrderIds Filter by CDC order id.
     * @param integer $Offset Offset, 0 by default For further information on Offset, please refer to relevant sections in API [Overview] (https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     * @param integer $Limit Number of returned pieces, 20 by default and can be up to 100. For further information on Limit, please refer to relevant sections in API [Overview] (https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     * @param string $Status The order status is the filter condition: PENDING INCONSTRUCTION DELIVERING DELIVERED EXPIRED CANCELLED OFFLINE
     * @param string $ActionType The order type is the filter condition: CREATE EXTEND
     * @param array $OrderTypes 
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
        if (array_key_exists("DedicatedClusterIds",$param) and $param["DedicatedClusterIds"] !== null) {
            $this->DedicatedClusterIds = $param["DedicatedClusterIds"];
        }

        if (array_key_exists("DedicatedClusterOrderIds",$param) and $param["DedicatedClusterOrderIds"] !== null) {
            $this->DedicatedClusterOrderIds = $param["DedicatedClusterOrderIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("OrderTypes",$param) and $param["OrderTypes"] !== null) {
            $this->OrderTypes = $param["OrderTypes"];
        }
    }
}
