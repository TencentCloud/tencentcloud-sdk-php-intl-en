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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetLoadBalancerClsLog request structure.
 *
 * @method string getLoadBalancerId() Obtain CLB instance ID
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID
 * @method string getLogSetId() Obtain CLS logset ID
 * @method void setLogSetId(string $LogSetId) Set CLS logset ID
 * @method string getLogTopicId() Obtain CLS log topic ID
 * @method void setLogTopicId(string $LogTopicId) Set CLS log topic ID
 */
class SetLoadBalancerClsLogRequest extends AbstractModel
{
    /**
     * @var string CLB instance ID
     */
    public $LoadBalancerId;

    /**
     * @var string CLS logset ID
     */
    public $LogSetId;

    /**
     * @var string CLS log topic ID
     */
    public $LogTopicId;

    /**
     * @param string $LoadBalancerId CLB instance ID
     * @param string $LogSetId CLS logset ID
     * @param string $LogTopicId CLS log topic ID
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("LogSetId",$param) and $param["LogSetId"] !== null) {
            $this->LogSetId = $param["LogSetId"];
        }

        if (array_key_exists("LogTopicId",$param) and $param["LogTopicId"] !== null) {
            $this->LogTopicId = $param["LogTopicId"];
        }
    }
}
