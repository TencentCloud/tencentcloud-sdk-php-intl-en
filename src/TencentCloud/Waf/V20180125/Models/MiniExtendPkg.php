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
 * Mobile Mini Programs Security access ID extension resource information.
 *
 * @method string getResourceIds() Obtain Resource ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceIds(string $ResourceIds) Set Resource ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Status

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Status

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRegion() Obtain Region

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(integer $Region) Set Region

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBeginTime() Obtain Start time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBeginTime(string $BeginTime) Set Start time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain End time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set End time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCount() Obtain Purchase quantity.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCount(integer $Count) Set Purchase quantity.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRenewFlag() Obtain Renewal flag.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRenewFlag(integer $RenewFlag) Set Renewal flag.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBillingItem() Obtain Billing item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBillingItem(string $BillingItem) Set Billing item.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class MiniExtendPkg extends AbstractModel
{
    /**
     * @var string Resource ID

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceIds;

    /**
     * @var integer Status

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer Region

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var string Start time

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BeginTime;

    /**
     * @var string End time

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var integer Purchase quantity.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Count;

    /**
     * @var integer Renewal flag.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RenewFlag;

    /**
     * @var string Billing item.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BillingItem;

    /**
     * @param string $ResourceIds Resource ID

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Status

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Region Region

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BeginTime Start time

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime End time

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Count Purchase quantity.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RenewFlag Renewal flag.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BillingItem Billing item.
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("BillingItem",$param) and $param["BillingItem"] !== null) {
            $this->BillingItem = $param["BillingItem"];
        }
    }
}
