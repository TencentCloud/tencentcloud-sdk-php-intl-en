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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Order details
 *
 * @method string getDealName() Obtain Order name
 * @method void setDealName(string $DealName) Set Order name
 * @method string getOwnerUin() Obtain User
 * @method void setOwnerUin(string $OwnerUin) Set User
 * @method integer getCount() Obtain Number of instances involved in order
 * @method void setCount(integer $Count) Set Number of instances involved in order
 * @method integer getPayMode() Obtain Billing mode. 0: pay-as-you-go
 * @method void setPayMode(integer $PayMode) Set Billing mode. 0: pay-as-you-go
 * @method integer getFlowId() Obtain Async task flow ID
 * @method void setFlowId(integer $FlowId) Set Async task flow ID
 * @method array getDBInstanceIdSet() Obtain Instance ID array
 * @method void setDBInstanceIdSet(array $DBInstanceIdSet) Set Instance ID array
 */
class PgDeal extends AbstractModel
{
    /**
     * @var string Order name
     */
    public $DealName;

    /**
     * @var string User
     */
    public $OwnerUin;

    /**
     * @var integer Number of instances involved in order
     */
    public $Count;

    /**
     * @var integer Billing mode. 0: pay-as-you-go
     */
    public $PayMode;

    /**
     * @var integer Async task flow ID
     */
    public $FlowId;

    /**
     * @var array Instance ID array
     */
    public $DBInstanceIdSet;

    /**
     * @param string $DealName Order name
     * @param string $OwnerUin User
     * @param integer $Count Number of instances involved in order
     * @param integer $PayMode Billing mode. 0: pay-as-you-go
     * @param integer $FlowId Async task flow ID
     * @param array $DBInstanceIdSet Instance ID array
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

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("DBInstanceIdSet",$param) and $param["DBInstanceIdSet"] !== null) {
            $this->DBInstanceIdSet = $param["DBInstanceIdSet"];
        }
    }
}
