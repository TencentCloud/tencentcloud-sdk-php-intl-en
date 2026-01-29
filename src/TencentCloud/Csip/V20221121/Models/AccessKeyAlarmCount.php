<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Alarm count for access key.
 *
 * @method integer getID() Obtain Access key ID.
 * @method void setID(integer $ID) Set Access key ID.
 * @method string getAccessKey() Obtain Access key.
 * @method void setAccessKey(string $AccessKey) Set Access key.
 * @method integer getAlarmCount() Obtain Alarm count.
 * @method void setAlarmCount(integer $AlarmCount) Set Alarm count.
 * @method integer getAccessKeyStatus() Obtain Security credentials status. valid values: 0 (disabled), 1 (enabled), 2 (deleted).
 * @method void setAccessKeyStatus(integer $AccessKeyStatus) Set Security credentials status. valid values: 0 (disabled), 1 (enabled), 2 (deleted).
 * @method string getAccessKeyCreateTime() Obtain AK creation time.
 * @method void setAccessKeyCreateTime(string $AccessKeyCreateTime) Set AK creation time.
 * @method string getLastAccessTime() Obtain AK last usage time. returns "-" if never used.
 * @method void setLastAccessTime(string $LastAccessTime) Set AK last usage time. returns "-" if never used.
 */
class AccessKeyAlarmCount extends AbstractModel
{
    /**
     * @var integer Access key ID.
     */
    public $ID;

    /**
     * @var string Access key.
     */
    public $AccessKey;

    /**
     * @var integer Alarm count.
     */
    public $AlarmCount;

    /**
     * @var integer Security credentials status. valid values: 0 (disabled), 1 (enabled), 2 (deleted).
     */
    public $AccessKeyStatus;

    /**
     * @var string AK creation time.
     */
    public $AccessKeyCreateTime;

    /**
     * @var string AK last usage time. returns "-" if never used.
     */
    public $LastAccessTime;

    /**
     * @param integer $ID Access key ID.
     * @param string $AccessKey Access key.
     * @param integer $AlarmCount Alarm count.
     * @param integer $AccessKeyStatus Security credentials status. valid values: 0 (disabled), 1 (enabled), 2 (deleted).
     * @param string $AccessKeyCreateTime AK creation time.
     * @param string $LastAccessTime AK last usage time. returns "-" if never used.
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("AlarmCount",$param) and $param["AlarmCount"] !== null) {
            $this->AlarmCount = $param["AlarmCount"];
        }

        if (array_key_exists("AccessKeyStatus",$param) and $param["AccessKeyStatus"] !== null) {
            $this->AccessKeyStatus = $param["AccessKeyStatus"];
        }

        if (array_key_exists("AccessKeyCreateTime",$param) and $param["AccessKeyCreateTime"] !== null) {
            $this->AccessKeyCreateTime = $param["AccessKeyCreateTime"];
        }

        if (array_key_exists("LastAccessTime",$param) and $param["LastAccessTime"] !== null) {
            $this->LastAccessTime = $param["LastAccessTime"];
        }
    }
}
