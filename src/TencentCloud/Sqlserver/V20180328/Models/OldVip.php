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
 * This API is used to return the number of unrecovered IP addresses for the instance.
 *
 * @method string getVip() Obtain Unrecovered old IP addresses
 * @method void setVip(string $Vip) Set Unrecovered old IP addresses
 * @method string getRecycleTime() Obtain IP recovery time
 * @method void setRecycleTime(string $RecycleTime) Set IP recovery time
 * @method integer getOldIpRetainTime() Obtain Old IP retention time (hours)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOldIpRetainTime(integer $OldIpRetainTime) Set Old IP retention time (hours)
Note: This field may return null, indicating that no valid values can be obtained.
 */
class OldVip extends AbstractModel
{
    /**
     * @var string Unrecovered old IP addresses
     */
    public $Vip;

    /**
     * @var string IP recovery time
     */
    public $RecycleTime;

    /**
     * @var integer Old IP retention time (hours)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OldIpRetainTime;

    /**
     * @param string $Vip Unrecovered old IP addresses
     * @param string $RecycleTime IP recovery time
     * @param integer $OldIpRetainTime Old IP retention time (hours)
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("RecycleTime",$param) and $param["RecycleTime"] !== null) {
            $this->RecycleTime = $param["RecycleTime"];
        }

        if (array_key_exists("OldIpRetainTime",$param) and $param["OldIpRetainTime"] !== null) {
            $this->OldIpRetainTime = $param["OldIpRetainTime"];
        }
    }
}
