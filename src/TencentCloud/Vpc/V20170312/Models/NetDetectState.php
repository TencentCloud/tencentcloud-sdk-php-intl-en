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
 * The network detection verification result.
 *
 * @method string getNetDetectId() Obtain The ID of a network detection instance, such as netd-12345678.
 * @method void setNetDetectId(string $NetDetectId) Set The ID of a network detection instance, such as netd-12345678.
 * @method array getNetDetectIpStateSet() Obtain The array of network detection destination IP verification results.
 * @method void setNetDetectIpStateSet(array $NetDetectIpStateSet) Set The array of network detection destination IP verification results.
 */
class NetDetectState extends AbstractModel
{
    /**
     * @var string The ID of a network detection instance, such as netd-12345678.
     */
    public $NetDetectId;

    /**
     * @var array The array of network detection destination IP verification results.
     */
    public $NetDetectIpStateSet;

    /**
     * @param string $NetDetectId The ID of a network detection instance, such as netd-12345678.
     * @param array $NetDetectIpStateSet The array of network detection destination IP verification results.
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
        if (array_key_exists("NetDetectId",$param) and $param["NetDetectId"] !== null) {
            $this->NetDetectId = $param["NetDetectId"];
        }

        if (array_key_exists("NetDetectIpStateSet",$param) and $param["NetDetectIpStateSet"] !== null) {
            $this->NetDetectIpStateSet = [];
            foreach ($param["NetDetectIpStateSet"] as $key => $value){
                $obj = new NetDetectIpState();
                $obj->deserialize($value);
                array_push($this->NetDetectIpStateSet, $obj);
            }
        }
    }
}
