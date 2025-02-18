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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * License list viewed by authorization
 *
 * @method integer getCount() Obtain The number of licenses of this type.
 * @method void setCount(integer $Count) Set The number of licenses of this type.
 * @method integer getStatus() Obtain License status. 0: unbound; 1: bound; 2: service suspension; 3: refund.
 * @method void setStatus(integer $Status) Set License status. 0: unbound; 1: bound; 2: service suspension; 3: refund.
 * @method string getExpireTime() Obtain Expiration timestamp: s.
 * @method void setExpireTime(string $ExpireTime) Set Expiration timestamp: s.
 * @method string getDuration() Obtain Service duration: s.
 * @method void setDuration(string $Duration) Set Service duration: s.
 * @method integer getRemainDay() Obtain Remaining days: days.
 * @method void setRemainDay(integer $RemainDay) Set Remaining days: days.
 * @method array getLicenseIds() Obtain The list of license ids of this type.
 * @method void setLicenseIds(array $LicenseIds) Set The list of license ids of this type.
 */
class License extends AbstractModel
{
    /**
     * @var integer The number of licenses of this type.
     */
    public $Count;

    /**
     * @var integer License status. 0: unbound; 1: bound; 2: service suspension; 3: refund.
     */
    public $Status;

    /**
     * @var string Expiration timestamp: s.
     */
    public $ExpireTime;

    /**
     * @var string Service duration: s.
     */
    public $Duration;

    /**
     * @var integer Remaining days: days.
     */
    public $RemainDay;

    /**
     * @var array The list of license ids of this type.
     */
    public $LicenseIds;

    /**
     * @param integer $Count The number of licenses of this type.
     * @param integer $Status License status. 0: unbound; 1: bound; 2: service suspension; 3: refund.
     * @param string $ExpireTime Expiration timestamp: s.
     * @param string $Duration Service duration: s.
     * @param integer $RemainDay Remaining days: days.
     * @param array $LicenseIds The list of license ids of this type.
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("RemainDay",$param) and $param["RemainDay"] !== null) {
            $this->RemainDay = $param["RemainDay"];
        }

        if (array_key_exists("LicenseIds",$param) and $param["LicenseIds"] !== null) {
            $this->LicenseIds = $param["LicenseIds"];
        }
    }
}
