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
 * Gateway service information match condition
 *
 * @method string getGatewayId() Obtain Gateway engine instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGatewayId(string $GatewayId) Set Gateway engine instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getServices() Obtain Gateway service
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServices(array $Services) Set Gateway service
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TSEGatewaySelector extends AbstractModel
{
    /**
     * @var string Gateway engine instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GatewayId;

    /**
     * @var array Gateway service
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Services;

    /**
     * @param string $GatewayId Gateway engine instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Services Gateway service
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Services",$param) and $param["Services"] !== null) {
            $this->Services = $param["Services"];
        }
    }
}
