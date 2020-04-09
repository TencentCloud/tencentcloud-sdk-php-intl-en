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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Order information
 *
 * @method string getDealName() Obtain Order name
 * @method void setDealName(string $DealName) Set Order name
 * @method integer getCount() Obtain Number of items
 * @method void setCount(integer $Count) Set Number of items
 * @method integer getFlowId() Obtain ID of associated flow, which can be used to query the flow execution status
 * @method void setFlowId(integer $FlowId) Set ID of associated flow, which can be used to query the flow execution status
 * @method array getInstanceIdSet() Obtain This field is required only for an order that creates an instance, indicating the ID of the instance created by the order
 * @method void setInstanceIdSet(array $InstanceIdSet) Set This field is required only for an order that creates an instance, indicating the ID of the instance created by the order
 * @method string getOwnerUin() Obtain Account
 * @method void setOwnerUin(string $OwnerUin) Set Account
 * @method string getInstanceChargeType() Obtain Instance billing type
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Instance billing type
 */
class DealInfo extends AbstractModel
{
    /**
     * @var string Order name
     */
    public $DealName;

    /**
     * @var integer Number of items
     */
    public $Count;

    /**
     * @var integer ID of associated flow, which can be used to query the flow execution status
     */
    public $FlowId;

    /**
     * @var array This field is required only for an order that creates an instance, indicating the ID of the instance created by the order
     */
    public $InstanceIdSet;

    /**
     * @var string Account
     */
    public $OwnerUin;

    /**
     * @var string Instance billing type
     */
    public $InstanceChargeType;

    /**
     * @param string $DealName Order name
     * @param integer $Count Number of items
     * @param integer $FlowId ID of associated flow, which can be used to query the flow execution status
     * @param array $InstanceIdSet This field is required only for an order that creates an instance, indicating the ID of the instance created by the order
     * @param string $OwnerUin Account
     * @param string $InstanceChargeType Instance billing type
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
        if (array_key_exists("DealName",$param) and $param["DealName"] !== null) {
            $this->DealName = $param["DealName"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("InstanceIdSet",$param) and $param["InstanceIdSet"] !== null) {
            $this->InstanceIdSet = $param["InstanceIdSet"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }
    }
}
