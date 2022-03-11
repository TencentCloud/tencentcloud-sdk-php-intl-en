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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CLB information such as bandwidth limit.
 *
 * @method integer getInternetMaxBandwidthOut() Obtain Maximum outbound bandwidth in Mbps. Default value: 10.
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set Maximum outbound bandwidth in Mbps. Default value: 10.
 */
class LoadBalancerInternetAccessible extends AbstractModel
{
    /**
     * @var integer Maximum outbound bandwidth in Mbps. Default value: 10.
     */
    public $InternetMaxBandwidthOut;

    /**
     * @param integer $InternetMaxBandwidthOut Maximum outbound bandwidth in Mbps. Default value: 10.
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
        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }
    }
}
