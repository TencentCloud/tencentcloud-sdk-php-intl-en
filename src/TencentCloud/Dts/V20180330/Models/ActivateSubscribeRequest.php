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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ActivateSubscribe request structure.
 *
 * @method string getSubscribeId() Obtain Subscription instance ID.
 * @method void setSubscribeId(string $SubscribeId) Set Subscription instance ID.
 * @method string getInstanceId() Obtain Database Instance ID
 * @method void setInstanceId(string $InstanceId) Set Database Instance ID
 * @method integer getSubscribeObjectType() Obtain Data subscription type. 0: full instance subscription, 1: data subscription, 2: structure subscription, 3: data subscription and structure subscription
 * @method void setSubscribeObjectType(integer $SubscribeObjectType) Set Data subscription type. 0: full instance subscription, 1: data subscription, 2: structure subscription, 3: data subscription and structure subscription
 * @method SubscribeObject getObjects() Obtain Subscription object
 * @method void setObjects(SubscribeObject $Objects) Set Subscription object
 * @method string getUniqSubnetId() Obtain Subnet of data subscription service, which is the subnet of the database instance by default.
 * @method void setUniqSubnetId(string $UniqSubnetId) Set Subnet of data subscription service, which is the subnet of the database instance by default.
 * @method integer getVport() Obtain Subscription service port. Default value: 7507
 * @method void setVport(integer $Vport) Set Subscription service port. Default value: 7507
 */
class ActivateSubscribeRequest extends AbstractModel
{
    /**
     * @var string Subscription instance ID.
     */
    public $SubscribeId;

    /**
     * @var string Database Instance ID
     */
    public $InstanceId;

    /**
     * @var integer Data subscription type. 0: full instance subscription, 1: data subscription, 2: structure subscription, 3: data subscription and structure subscription
     */
    public $SubscribeObjectType;

    /**
     * @var SubscribeObject Subscription object
     */
    public $Objects;

    /**
     * @var string Subnet of data subscription service, which is the subnet of the database instance by default.
     */
    public $UniqSubnetId;

    /**
     * @var integer Subscription service port. Default value: 7507
     */
    public $Vport;

    /**
     * @param string $SubscribeId Subscription instance ID.
     * @param string $InstanceId Database Instance ID
     * @param integer $SubscribeObjectType Data subscription type. 0: full instance subscription, 1: data subscription, 2: structure subscription, 3: data subscription and structure subscription
     * @param SubscribeObject $Objects Subscription object
     * @param string $UniqSubnetId Subnet of data subscription service, which is the subnet of the database instance by default.
     * @param integer $Vport Subscription service port. Default value: 7507
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
        if (array_key_exists("SubscribeId",$param) and $param["SubscribeId"] !== null) {
            $this->SubscribeId = $param["SubscribeId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SubscribeObjectType",$param) and $param["SubscribeObjectType"] !== null) {
            $this->SubscribeObjectType = $param["SubscribeObjectType"];
        }

        if (array_key_exists("Objects",$param) and $param["Objects"] !== null) {
            $this->Objects = new SubscribeObject();
            $this->Objects->deserialize($param["Objects"]);
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }
    }
}
