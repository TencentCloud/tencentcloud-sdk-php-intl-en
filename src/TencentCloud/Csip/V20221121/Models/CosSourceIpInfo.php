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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Source ip information of COS calls
 *
 * @method array getUA() Obtain UA call
 * @method void setUA(array $UA) Set UA call
 * @method CosInvokeIpVpcInfo getVpcInfo() Obtain API call for vpc information
 * @method void setVpcInfo(CosInvokeIpVpcInfo $VpcInfo) Set API call for vpc information
 */
class CosSourceIpInfo extends AbstractModel
{
    /**
     * @var array UA call
     */
    public $UA;

    /**
     * @var CosInvokeIpVpcInfo API call for vpc information
     */
    public $VpcInfo;

    /**
     * @param array $UA UA call
     * @param CosInvokeIpVpcInfo $VpcInfo API call for vpc information
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
        if (array_key_exists("UA",$param) and $param["UA"] !== null) {
            $this->UA = $param["UA"];
        }

        if (array_key_exists("VpcInfo",$param) and $param["VpcInfo"] !== null) {
            $this->VpcInfo = new CosInvokeIpVpcInfo();
            $this->VpcInfo->deserialize($param["VpcInfo"]);
        }
    }
}
