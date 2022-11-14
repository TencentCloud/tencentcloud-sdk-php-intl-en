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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Unhandled event details
 *
 * @method array getEventTableListStruct() Obtain Unhandled event type
 * @method void setEventTableListStruct(array $EventTableListStruct) Set Unhandled event type
 * @method integer getBaseLineUser() Obtain 1: yes; 0: no
 * @method void setBaseLineUser(integer $BaseLineUser) Set 1: yes; 0: no
 * @method integer getBaseLineInSwitch() Obtain 1: on; 0: off
 * @method void setBaseLineInSwitch(integer $BaseLineInSwitch) Set 1: on; 0: off
 * @method integer getBaseLineOutSwitch() Obtain 1: on; 0: off
 * @method void setBaseLineOutSwitch(integer $BaseLineOutSwitch) Set 1: on; 0: off
 * @method integer getVpcFwCount() Obtain Number of inter-VPC firewall instances
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setVpcFwCount(integer $VpcFwCount) Set Number of inter-VPC firewall instances
Note: This field may return `null`, indicating that no valid value was found.
 */
class UnHandleEvent extends AbstractModel
{
    /**
     * @var array Unhandled event type
     */
    public $EventTableListStruct;

    /**
     * @var integer 1: yes; 0: no
     */
    public $BaseLineUser;

    /**
     * @var integer 1: on; 0: off
     */
    public $BaseLineInSwitch;

    /**
     * @var integer 1: on; 0: off
     */
    public $BaseLineOutSwitch;

    /**
     * @var integer Number of inter-VPC firewall instances
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $VpcFwCount;

    /**
     * @param array $EventTableListStruct Unhandled event type
     * @param integer $BaseLineUser 1: yes; 0: no
     * @param integer $BaseLineInSwitch 1: on; 0: off
     * @param integer $BaseLineOutSwitch 1: on; 0: off
     * @param integer $VpcFwCount Number of inter-VPC firewall instances
Note: This field may return `null`, indicating that no valid value was found.
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
        if (array_key_exists("EventTableListStruct",$param) and $param["EventTableListStruct"] !== null) {
            $this->EventTableListStruct = [];
            foreach ($param["EventTableListStruct"] as $key => $value){
                $obj = new UnHandleEventDetail();
                $obj->deserialize($value);
                array_push($this->EventTableListStruct, $obj);
            }
        }

        if (array_key_exists("BaseLineUser",$param) and $param["BaseLineUser"] !== null) {
            $this->BaseLineUser = $param["BaseLineUser"];
        }

        if (array_key_exists("BaseLineInSwitch",$param) and $param["BaseLineInSwitch"] !== null) {
            $this->BaseLineInSwitch = $param["BaseLineInSwitch"];
        }

        if (array_key_exists("BaseLineOutSwitch",$param) and $param["BaseLineOutSwitch"] !== null) {
            $this->BaseLineOutSwitch = $param["BaseLineOutSwitch"];
        }

        if (array_key_exists("VpcFwCount",$param) and $param["VpcFwCount"] !== null) {
            $this->VpcFwCount = $param["VpcFwCount"];
        }
    }
}
