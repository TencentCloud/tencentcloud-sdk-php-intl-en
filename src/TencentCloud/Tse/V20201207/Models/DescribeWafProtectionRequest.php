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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWafProtection request structure.
 *
 * @method string getGatewayId() Obtain gateway ID
 * @method void setGatewayId(string $GatewayId) Set gateway ID
 * @method string getType() Obtain Type of protection resource.
-Global instance
-Service
-Route
-Object
 * @method void setType(string $Type) Set Type of protection resource.
-Global instance
-Service
-Route
-Object
 * @method array getTypeList() Obtain Resource type list for protection supports querying multiple types (Global, Service, Route, Object). If left empty, it defaults to querying the Global type.
 * @method void setTypeList(array $TypeList) Set Resource type list for protection supports querying multiple types (Global, Service, Route, Object). If left empty, it defaults to querying the Global type.
 */
class DescribeWafProtectionRequest extends AbstractModel
{
    /**
     * @var string gateway ID
     */
    public $GatewayId;

    /**
     * @var string Type of protection resource.
-Global instance
-Service
-Route
-Object
     * @deprecated
     */
    public $Type;

    /**
     * @var array Resource type list for protection supports querying multiple types (Global, Service, Route, Object). If left empty, it defaults to querying the Global type.
     */
    public $TypeList;

    /**
     * @param string $GatewayId gateway ID
     * @param string $Type Type of protection resource.
-Global instance
-Service
-Route
-Object
     * @param array $TypeList Resource type list for protection supports querying multiple types (Global, Service, Route, Object). If left empty, it defaults to querying the Global type.
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TypeList",$param) and $param["TypeList"] !== null) {
            $this->TypeList = $param["TypeList"];
        }
    }
}
