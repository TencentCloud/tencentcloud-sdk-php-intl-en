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
 * Parameter settings for renewing the monthly subscribed cloud disk
 *
 * @method integer getPeriod() Obtain Purchase duration.
 * @method void setPeriod(integer $Period) Set Purchase duration.
 * @method string getRenewFlag() Obtain Whether Auto-Renewal is enabled 
 * @method void setRenewFlag(string $RenewFlag) Set Whether Auto-Renewal is enabled 
 * @method string getTimeUnit() Obtain Duration unit. Default value: "m" (month).
 * @method void setTimeUnit(string $TimeUnit) Set Duration unit. Default value: "m" (month).
 * @method string getCurInstanceDeadline() Obtain Expiration time of the current instance.
 * @method void setCurInstanceDeadline(string $CurInstanceDeadline) Set Expiration time of the current instance.
 */
class RenewDiskChargePrepaid extends AbstractModel
{
    /**
     * @var integer Purchase duration.
     */
    public $Period;

    /**
     * @var string Whether Auto-Renewal is enabled 
     */
    public $RenewFlag;

    /**
     * @var string Duration unit. Default value: "m" (month).
     */
    public $TimeUnit;

    /**
     * @var string Expiration time of the current instance.
     */
    public $CurInstanceDeadline;

    /**
     * @param integer $Period Purchase duration.
     * @param string $RenewFlag Whether Auto-Renewal is enabled 
     * @param string $TimeUnit Duration unit. Default value: "m" (month).
     * @param string $CurInstanceDeadline Expiration time of the current instance.
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
        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("CurInstanceDeadline",$param) and $param["CurInstanceDeadline"] !== null) {
            $this->CurInstanceDeadline = $param["CurInstanceDeadline"];
        }
    }
}
