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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeServiceForApiApp request structure.
 *
 * @method string getServiceId() Obtain Unique ID of the service to be queried.
 * @method void setServiceId(string $ServiceId) Set Unique ID of the service to be queried.
 * @method string getApiRegion() Obtain Service region.
 * @method void setApiRegion(string $ApiRegion) Set Service region.
 */
class DescribeServiceForApiAppRequest extends AbstractModel
{
    /**
     * @var string Unique ID of the service to be queried.
     */
    public $ServiceId;

    /**
     * @var string Service region.
     */
    public $ApiRegion;

    /**
     * @param string $ServiceId Unique ID of the service to be queried.
     * @param string $ApiRegion Service region.
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ApiRegion",$param) and $param["ApiRegion"] !== null) {
            $this->ApiRegion = $param["ApiRegion"];
        }
    }
}
