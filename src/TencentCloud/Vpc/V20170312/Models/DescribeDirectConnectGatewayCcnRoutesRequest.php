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
 * DescribeDirectConnectGatewayCcnRoutes request structure.
 *
 * @method string getDirectConnectGatewayId() Obtain The ID of the Direct Connect gateway, such as `dcg-prpqlmg1`.
 * @method void setDirectConnectGatewayId(string $DirectConnectGatewayId) Set The ID of the Direct Connect gateway, such as `dcg-prpqlmg1`.
 * @method string getCcnRouteType() Obtain The route learning type of the CCN. Available values:
<li>`BGP` - Automatic learning.</li>
<li>`STATIC` - Static means user-configured. This is the default value.</li>
 * @method void setCcnRouteType(string $CcnRouteType) Set The route learning type of the CCN. Available values:
<li>`BGP` - Automatic learning.</li>
<li>`STATIC` - Static means user-configured. This is the default value.</li>
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method integer getLimit() Obtain The returned quantity.
 * @method void setLimit(integer $Limit) Set The returned quantity.
 */
class DescribeDirectConnectGatewayCcnRoutesRequest extends AbstractModel
{
    /**
     * @var string The ID of the Direct Connect gateway, such as `dcg-prpqlmg1`.
     */
    public $DirectConnectGatewayId;

    /**
     * @var string The route learning type of the CCN. Available values:
<li>`BGP` - Automatic learning.</li>
<li>`STATIC` - Static means user-configured. This is the default value.</li>
     */
    public $CcnRouteType;

    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var integer The returned quantity.
     */
    public $Limit;

    /**
     * @param string $DirectConnectGatewayId The ID of the Direct Connect gateway, such as `dcg-prpqlmg1`.
     * @param string $CcnRouteType The route learning type of the CCN. Available values:
<li>`BGP` - Automatic learning.</li>
<li>`STATIC` - Static means user-configured. This is the default value.</li>
     * @param integer $Offset Offset.
     * @param integer $Limit The returned quantity.
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
        if (array_key_exists("DirectConnectGatewayId",$param) and $param["DirectConnectGatewayId"] !== null) {
            $this->DirectConnectGatewayId = $param["DirectConnectGatewayId"];
        }

        if (array_key_exists("CcnRouteType",$param) and $param["CcnRouteType"] !== null) {
            $this->CcnRouteType = $param["CcnRouteType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
