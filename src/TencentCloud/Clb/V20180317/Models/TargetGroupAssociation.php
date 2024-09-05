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
 * Association between rule and target group
 *
 * @method string getLoadBalancerId() Obtain CLB instance ID
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID
 * @method string getTargetGroupId() Obtain Target group ID
 * @method void setTargetGroupId(string $TargetGroupId) Set Target group ID
 * @method string getListenerId() Obtain Listener ID. This parameter is required when the AssociateTargetGroups and DisassociateTargetGroups APIs are called.
 * @method void setListenerId(string $ListenerId) Set Listener ID. This parameter is required when the AssociateTargetGroups and DisassociateTargetGroups APIs are called.
 * @method string getLocationId() Obtain Forwarding rule ID
 * @method void setLocationId(string $LocationId) Set Forwarding rule ID
 * @method integer getWeight() Obtain Weight of the target group. Value range: [0, 100]. It takes effect only for binding v2 target groups. If not specified, it defaults to 10.
 * @method void setWeight(integer $Weight) Set Weight of the target group. Value range: [0, 100]. It takes effect only for binding v2 target groups. If not specified, it defaults to 10.
 */
class TargetGroupAssociation extends AbstractModel
{
    /**
     * @var string CLB instance ID
     */
    public $LoadBalancerId;

    /**
     * @var string Target group ID
     */
    public $TargetGroupId;

    /**
     * @var string Listener ID. This parameter is required when the AssociateTargetGroups and DisassociateTargetGroups APIs are called.
     */
    public $ListenerId;

    /**
     * @var string Forwarding rule ID
     */
    public $LocationId;

    /**
     * @var integer Weight of the target group. Value range: [0, 100]. It takes effect only for binding v2 target groups. If not specified, it defaults to 10.
     */
    public $Weight;

    /**
     * @param string $LoadBalancerId CLB instance ID
     * @param string $TargetGroupId Target group ID
     * @param string $ListenerId Listener ID. This parameter is required when the AssociateTargetGroups and DisassociateTargetGroups APIs are called.
     * @param string $LocationId Forwarding rule ID
     * @param integer $Weight Weight of the target group. Value range: [0, 100]. It takes effect only for binding v2 target groups. If not specified, it defaults to 10.
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

        if (array_key_exists("TargetGroupId",$param) and $param["TargetGroupId"] !== null) {
            $this->TargetGroupId = $param["TargetGroupId"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
