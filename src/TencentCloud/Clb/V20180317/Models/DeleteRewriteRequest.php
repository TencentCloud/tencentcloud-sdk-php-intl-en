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
 * DeleteRewrite request structure.
 *
 * @method string getLoadBalancerId() Obtain CLB instance ID
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID
 * @method string getSourceListenerId() Obtain Source listener ID
 * @method void setSourceListenerId(string $SourceListenerId) Set Source listener ID
 * @method string getTargetListenerId() Obtain Target listener ID
 * @method void setTargetListenerId(string $TargetListenerId) Set Target listener ID
 * @method array getRewriteInfos() Obtain Redirection relationship between forwarding rules
 * @method void setRewriteInfos(array $RewriteInfos) Set Redirection relationship between forwarding rules
 */
class DeleteRewriteRequest extends AbstractModel
{
    /**
     * @var string CLB instance ID
     */
    public $LoadBalancerId;

    /**
     * @var string Source listener ID
     */
    public $SourceListenerId;

    /**
     * @var string Target listener ID
     */
    public $TargetListenerId;

    /**
     * @var array Redirection relationship between forwarding rules
     */
    public $RewriteInfos;

    /**
     * @param string $LoadBalancerId CLB instance ID
     * @param string $SourceListenerId Source listener ID
     * @param string $TargetListenerId Target listener ID
     * @param array $RewriteInfos Redirection relationship between forwarding rules
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

        if (array_key_exists("SourceListenerId",$param) and $param["SourceListenerId"] !== null) {
            $this->SourceListenerId = $param["SourceListenerId"];
        }

        if (array_key_exists("TargetListenerId",$param) and $param["TargetListenerId"] !== null) {
            $this->TargetListenerId = $param["TargetListenerId"];
        }

        if (array_key_exists("RewriteInfos",$param) and $param["RewriteInfos"] !== null) {
            $this->RewriteInfos = [];
            foreach ($param["RewriteInfos"] as $key => $value){
                $obj = new RewriteLocationMap();
                $obj->deserialize($value);
                array_push($this->RewriteInfos, $obj);
            }
        }
    }
}
