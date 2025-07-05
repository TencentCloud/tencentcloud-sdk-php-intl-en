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
 * DescribeApiForApiApp request structure.
 *
 * @method string getServiceId() Obtain Unique service ID of the API
 * @method void setServiceId(string $ServiceId) Set Unique service ID of the API
 * @method string getApiId() Obtain Unique API ID
 * @method void setApiId(string $ApiId) Set Unique API ID
 * @method string getApiRegion() Obtain API region
 * @method void setApiRegion(string $ApiRegion) Set API region
 */
class DescribeApiForApiAppRequest extends AbstractModel
{
    /**
     * @var string Unique service ID of the API
     */
    public $ServiceId;

    /**
     * @var string Unique API ID
     */
    public $ApiId;

    /**
     * @var string API region
     */
    public $ApiRegion;

    /**
     * @param string $ServiceId Unique service ID of the API
     * @param string $ApiId Unique API ID
     * @param string $ApiRegion API region
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

        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }

        if (array_key_exists("ApiRegion",$param) and $param["ApiRegion"] !== null) {
            $this->ApiRegion = $param["ApiRegion"];
        }
    }
}
