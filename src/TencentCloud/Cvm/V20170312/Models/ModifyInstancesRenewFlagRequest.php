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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstancesRenewFlag request structure.
 *
 * @method array getInstanceIds() Obtain For one or more instance IDs to be operated. You can obtain the instance ID through the `instanceid` in the returned value from the API [DescribeInstances](https://cloud.tencent.com/document/api/213/15728). The maximum number of instances that can be operated for each request is 100.
 * @method void setInstanceIds(array $InstanceIds) Set For one or more instance IDs to be operated. You can obtain the instance ID through the `instanceid` in the returned value from the API [DescribeInstances](https://cloud.tencent.com/document/api/213/15728). The maximum number of instances that can be operated for each request is 100.
 * @method string getRenewFlag() Obtain Auto-renewal flag. Valid values: <br><li>NOTIFY_AND_AUTO_RENEW: Notifies of expiration and performs auto-renewal.</li><li>NOTIFY_AND_MANUAL_RENEW: Notifies of expiration but does not perform auto-renewal.</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: Not notifies of expiration nor perform auto-renewal.</li><br>If this parameter is specified to NOTIFY_AND_AUTO_RENEW, the instance will be automatically renewed on a monthly basis after it expires when there is sufficient account balance.
 * @method void setRenewFlag(string $RenewFlag) Set Auto-renewal flag. Valid values: <br><li>NOTIFY_AND_AUTO_RENEW: Notifies of expiration and performs auto-renewal.</li><li>NOTIFY_AND_MANUAL_RENEW: Notifies of expiration but does not perform auto-renewal.</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: Not notifies of expiration nor perform auto-renewal.</li><br>If this parameter is specified to NOTIFY_AND_AUTO_RENEW, the instance will be automatically renewed on a monthly basis after it expires when there is sufficient account balance.
 */
class ModifyInstancesRenewFlagRequest extends AbstractModel
{
    /**
     * @var array For one or more instance IDs to be operated. You can obtain the instance ID through the `instanceid` in the returned value from the API [DescribeInstances](https://cloud.tencent.com/document/api/213/15728). The maximum number of instances that can be operated for each request is 100.
     */
    public $InstanceIds;

    /**
     * @var string Auto-renewal flag. Valid values: <br><li>NOTIFY_AND_AUTO_RENEW: Notifies of expiration and performs auto-renewal.</li><li>NOTIFY_AND_MANUAL_RENEW: Notifies of expiration but does not perform auto-renewal.</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: Not notifies of expiration nor perform auto-renewal.</li><br>If this parameter is specified to NOTIFY_AND_AUTO_RENEW, the instance will be automatically renewed on a monthly basis after it expires when there is sufficient account balance.
     */
    public $RenewFlag;

    /**
     * @param array $InstanceIds For one or more instance IDs to be operated. You can obtain the instance ID through the `instanceid` in the returned value from the API [DescribeInstances](https://cloud.tencent.com/document/api/213/15728). The maximum number of instances that can be operated for each request is 100.
     * @param string $RenewFlag Auto-renewal flag. Valid values: <br><li>NOTIFY_AND_AUTO_RENEW: Notifies of expiration and performs auto-renewal.</li><li>NOTIFY_AND_MANUAL_RENEW: Notifies of expiration but does not perform auto-renewal.</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: Not notifies of expiration nor perform auto-renewal.</li><br>If this parameter is specified to NOTIFY_AND_AUTO_RENEW, the instance will be automatically renewed on a monthly basis after it expires when there is sufficient account balance.
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }
    }
}
