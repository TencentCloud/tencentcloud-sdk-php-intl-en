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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserClbWafRegions request structure.
 *
 * @method string getAlbType() Obtain Traffic source. The default value is clb if not specified. clb: Cloud Load Balancer; tsegw: cloud-native API gateway; scf: Serverless Cloud Function; apisix: other gateways on Tencent Cloud.
 * @method void setAlbType(string $AlbType) Set Traffic source. The default value is clb if not specified. clb: Cloud Load Balancer; tsegw: cloud-native API gateway; scf: Serverless Cloud Function; apisix: other gateways on Tencent Cloud.
 */
class DescribeUserClbWafRegionsRequest extends AbstractModel
{
    /**
     * @var string Traffic source. The default value is clb if not specified. clb: Cloud Load Balancer; tsegw: cloud-native API gateway; scf: Serverless Cloud Function; apisix: other gateways on Tencent Cloud.
     */
    public $AlbType;

    /**
     * @param string $AlbType Traffic source. The default value is clb if not specified. clb: Cloud Load Balancer; tsegw: cloud-native API gateway; scf: Serverless Cloud Function; apisix: other gateways on Tencent Cloud.
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
        if (array_key_exists("AlbType",$param) and $param["AlbType"] !== null) {
            $this->AlbType = $param["AlbType"];
        }
    }
}
