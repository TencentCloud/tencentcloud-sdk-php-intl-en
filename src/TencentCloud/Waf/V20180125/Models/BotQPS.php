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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Bot's QPS details
 *
 * @method string getResourceIds() Obtain Resource ID
 * @method void setResourceIds(string $ResourceIds) Set Resource ID
 * @method string getValidTime() Obtain Expiration time
 * @method void setValidTime(string $ValidTime) Set Expiration time
 * @method integer getCount() Obtain Resource quantity.
 * @method void setCount(integer $Count) Set Resource quantity.
 * @method string getRegion() Obtain Resource Location
 * @method void setRegion(string $Region) Set Resource Location
 * @method integer getMaxBotQPS() Obtain Maximum QPS Usage
 * @method void setMaxBotQPS(integer $MaxBotQPS) Set Maximum QPS Usage
 * @method integer getRenewFlag() Obtain Renewal flag.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRenewFlag(integer $RenewFlag) Set Renewal flag.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BotQPS extends AbstractModel
{
    /**
     * @var string Resource ID
     */
    public $ResourceIds;

    /**
     * @var string Expiration time
     */
    public $ValidTime;

    /**
     * @var integer Resource quantity.
     */
    public $Count;

    /**
     * @var string Resource Location
     */
    public $Region;

    /**
     * @var integer Maximum QPS Usage
     */
    public $MaxBotQPS;

    /**
     * @var integer Renewal flag.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RenewFlag;

    /**
     * @param string $ResourceIds Resource ID
     * @param string $ValidTime Expiration time
     * @param integer $Count Resource quantity.
     * @param string $Region Resource Location
     * @param integer $MaxBotQPS Maximum QPS Usage
     * @param integer $RenewFlag Renewal flag.
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
        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("ValidTime",$param) and $param["ValidTime"] !== null) {
            $this->ValidTime = $param["ValidTime"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("MaxBotQPS",$param) and $param["MaxBotQPS"] !== null) {
            $this->MaxBotQPS = $param["MaxBotQPS"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }
    }
}
