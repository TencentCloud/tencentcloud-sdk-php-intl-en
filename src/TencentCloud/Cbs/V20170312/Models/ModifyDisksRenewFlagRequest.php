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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getDiskIds() 获取IDs of one or more cloud disks to be operated.
 * @method void setDiskIds(array $DiskIds) 设置IDs of one or more cloud disks to be operated.
 * @method string getRenewFlag() 获取Cloud disk renewal flag. Value range: <br><li>NOTIFY_AND_AUTO_RENEW: Notify expiry and renew automatically. <br><li>NOTIFY_AND_MANUAL_RENEW: Notify expiry but do not renew automatically. <br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: Neither notify expiry nor renew automatically.
 * @method void setRenewFlag(string $RenewFlag) 设置Cloud disk renewal flag. Value range: <br><li>NOTIFY_AND_AUTO_RENEW: Notify expiry and renew automatically. <br><li>NOTIFY_AND_MANUAL_RENEW: Notify expiry but do not renew automatically. <br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: Neither notify expiry nor renew automatically.
 */

/**
 *ModifyDisksRenewFlag request structure.
 */
class ModifyDisksRenewFlagRequest extends AbstractModel
{
    /**
     * @var array IDs of one or more cloud disks to be operated.
     */
    public $DiskIds;

    /**
     * @var string Cloud disk renewal flag. Value range: <br><li>NOTIFY_AND_AUTO_RENEW: Notify expiry and renew automatically. <br><li>NOTIFY_AND_MANUAL_RENEW: Notify expiry but do not renew automatically. <br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: Neither notify expiry nor renew automatically.
     */
    public $RenewFlag;
    /**
     * @param array $DiskIds IDs of one or more cloud disks to be operated.
     * @param string $RenewFlag Cloud disk renewal flag. Value range: <br><li>NOTIFY_AND_AUTO_RENEW: Notify expiry and renew automatically. <br><li>NOTIFY_AND_MANUAL_RENEW: Notify expiry but do not renew automatically. <br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: Neither notify expiry nor renew automatically.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DiskIds",$param) and $param["DiskIds"] !== null) {
            $this->DiskIds = $param["DiskIds"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }
    }
}
