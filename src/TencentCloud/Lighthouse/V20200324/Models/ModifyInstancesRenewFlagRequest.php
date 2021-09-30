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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstancesRenewFlag request structure.
 *
 * @method array getInstanceIds() Obtain Instance ID list. Each request can contain up to 100 instances at a time. You can get an instance ID from the `InstanceId` returned by the [DescribeInstances](https://intl.cloud.tencent.com/document/api/1207/47573?from_cn_redirect=1) API.
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID list. Each request can contain up to 100 instances at a time. You can get an instance ID from the `InstanceId` returned by the [DescribeInstances](https://intl.cloud.tencent.com/document/api/1207/47573?from_cn_redirect=1) API.
 * @method string getRenewFlag() Obtain Auto-Renewal flag. Valid values: <br><li>NOTIFY_AND_AUTO_RENEW: notify upon expiration and renew automatically <br><li>NOTIFY_AND_MANUAL_RENEW: notify upon expiration but do not renew automatically <br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: neither notify upon expiration nor renew automatically <br><br>If this parameter is specified as `NOTIFY_AND_AUTO_RENEW`, the instance will be automatically renewed monthly if the account balance is sufficient.
 * @method void setRenewFlag(string $RenewFlag) Set Auto-Renewal flag. Valid values: <br><li>NOTIFY_AND_AUTO_RENEW: notify upon expiration and renew automatically <br><li>NOTIFY_AND_MANUAL_RENEW: notify upon expiration but do not renew automatically <br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: neither notify upon expiration nor renew automatically <br><br>If this parameter is specified as `NOTIFY_AND_AUTO_RENEW`, the instance will be automatically renewed monthly if the account balance is sufficient.
 */
class ModifyInstancesRenewFlagRequest extends AbstractModel
{
    /**
     * @var array Instance ID list. Each request can contain up to 100 instances at a time. You can get an instance ID from the `InstanceId` returned by the [DescribeInstances](https://intl.cloud.tencent.com/document/api/1207/47573?from_cn_redirect=1) API.
     */
    public $InstanceIds;

    /**
     * @var string Auto-Renewal flag. Valid values: <br><li>NOTIFY_AND_AUTO_RENEW: notify upon expiration and renew automatically <br><li>NOTIFY_AND_MANUAL_RENEW: notify upon expiration but do not renew automatically <br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: neither notify upon expiration nor renew automatically <br><br>If this parameter is specified as `NOTIFY_AND_AUTO_RENEW`, the instance will be automatically renewed monthly if the account balance is sufficient.
     */
    public $RenewFlag;

    /**
     * @param array $InstanceIds Instance ID list. Each request can contain up to 100 instances at a time. You can get an instance ID from the `InstanceId` returned by the [DescribeInstances](https://intl.cloud.tencent.com/document/api/1207/47573?from_cn_redirect=1) API.
     * @param string $RenewFlag Auto-Renewal flag. Valid values: <br><li>NOTIFY_AND_AUTO_RENEW: notify upon expiration and renew automatically <br><li>NOTIFY_AND_MANUAL_RENEW: notify upon expiration but do not renew automatically <br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: neither notify upon expiration nor renew automatically <br><br>If this parameter is specified as `NOTIFY_AND_AUTO_RENEW`, the instance will be automatically renewed monthly if the account balance is sufficient.
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
