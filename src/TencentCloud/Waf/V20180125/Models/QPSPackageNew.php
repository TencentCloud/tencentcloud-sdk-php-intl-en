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
 * CLB-WAF QPS package new
 *
 * @method string getResourceIds() Obtain Resource ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceIds(string $ResourceIds) Set Resource ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getValidTime() Obtain Expiration time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValidTime(string $ValidTime) Set Expiration time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRenewFlag() Obtain Auto-renewal, 1: Enabled, 0: Disabled

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRenewFlag(integer $RenewFlag) Set Auto-renewal, 1: Enabled, 0: Disabled

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCount() Obtain Number of Package Purchases

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCount(integer $Count) Set Number of Package Purchases

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Package Purchase Region, currently not used in CLB-WAF

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Package Purchase Region, currently not used in CLB-WAF

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBillingItem() Obtain Billing item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBillingItem(string $BillingItem) Set Billing item.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class QPSPackageNew extends AbstractModel
{
    /**
     * @var string Resource ID

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceIds;

    /**
     * @var string Expiration time

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ValidTime;

    /**
     * @var integer Auto-renewal, 1: Enabled, 0: Disabled

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RenewFlag;

    /**
     * @var integer Number of Package Purchases

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Count;

    /**
     * @var string Package Purchase Region, currently not used in CLB-WAF

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var string Billing item.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BillingItem;

    /**
     * @param string $ResourceIds Resource ID

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ValidTime Expiration time

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RenewFlag Auto-renewal, 1: Enabled, 0: Disabled

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Count Number of Package Purchases

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Region Package Purchase Region, currently not used in CLB-WAF

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

        if (array_key_exists("ValidTime",$param) and $param["ValidTime"] !== null) {
            $this->ValidTime = $param["ValidTime"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("BillingItem",$param) and $param["BillingItem"] !== null) {
            $this->BillingItem = $param["BillingItem"];
        }
    }
}
