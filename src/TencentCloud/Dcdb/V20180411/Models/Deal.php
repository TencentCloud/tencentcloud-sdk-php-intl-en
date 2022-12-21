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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Order information
 *
 * @method string getDealName() Obtain Order ID.
 * @method void setDealName(string $DealName) Set Order ID.
 * @method string getOwnerUin() Obtain Account
 * @method void setOwnerUin(string $OwnerUin) Set Account
 * @method integer getCount() Obtain Number of items
 * @method void setCount(integer $Count) Set Number of items
 * @method integer getFlowId() Obtain The associated process ID, which can be used to query the process execution status.
 * @method void setFlowId(integer $FlowId) Set The associated process ID, which can be used to query the process execution status.
 * @method array getInstanceIds() Obtain The ID of the created instance, which is required only for the order that creates an instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceIds(array $InstanceIds) Set The ID of the created instance, which is required only for the order that creates an instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPayMode() Obtain Billing mode. Valid values: `0` (postpaid), `1` (prepaid).
 * @method void setPayMode(integer $PayMode) Set Billing mode. Valid values: `0` (postpaid), `1` (prepaid).
 */
class Deal extends AbstractModel
{
    /**
     * @var string Order ID.
     */
    public $DealName;

    /**
     * @var string Account
     */
    public $OwnerUin;

    /**
     * @var integer Number of items
     */
    public $Count;

    /**
     * @var integer The associated process ID, which can be used to query the process execution status.
     */
    public $FlowId;

    /**
     * @var array The ID of the created instance, which is required only for the order that creates an instance.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceIds;

    /**
     * @var integer Billing mode. Valid values: `0` (postpaid), `1` (prepaid).
     */
    public $PayMode;

    /**
     * @param string $DealName Order ID.
     * @param string $OwnerUin Account
     * @param integer $Count Number of items
     * @param integer $FlowId The associated process ID, which can be used to query the process execution status.
     * @param array $InstanceIds The ID of the created instance, which is required only for the order that creates an instance.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PayMode Billing mode. Valid values: `0` (postpaid), `1` (prepaid).
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

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }
    }
}
