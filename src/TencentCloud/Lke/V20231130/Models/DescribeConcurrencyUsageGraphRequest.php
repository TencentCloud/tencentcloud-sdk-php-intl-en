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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConcurrencyUsageGraph request structure.
 *
 * @method string getModelName() Obtain Model identifier.
 * @method void setModelName(string $ModelName) Set Model identifier.
 * @method string getStartTime() Obtain Start timestamp, in seconds.
 * @method void setStartTime(string $StartTime) Set Start timestamp, in seconds.
 * @method string getEndTime() Obtain End timestamp, in seconds.
 * @method void setEndTime(string $EndTime) Set End timestamp, in seconds.
 * @method array getUinAccount() Obtain uin
 * @method void setUinAccount(array $UinAccount) Set uin
 * @method string getLoginUin() Obtain Login to user's root account (required in integrator mode).
 * @method void setLoginUin(string $LoginUin) Set Login to user's root account (required in integrator mode).
 * @method string getLoginSubAccountUin() Obtain Login to user's sub-account (required in integrator mode).
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) Set Login to user's sub-account (required in integrator mode).
 * @method string getSubBizType() Obtain Sub-business type.
 * @method void setSubBizType(string $SubBizType) Set Sub-business type.
 * @method array getAppBizIds() Obtain Application ID list.
 * @method void setAppBizIds(array $AppBizIds) Set Application ID list.
 */
class DescribeConcurrencyUsageGraphRequest extends AbstractModel
{
    /**
     * @var string Model identifier.
     */
    public $ModelName;

    /**
     * @var string Start timestamp, in seconds.
     */
    public $StartTime;

    /**
     * @var string End timestamp, in seconds.
     */
    public $EndTime;

    /**
     * @var array uin
     */
    public $UinAccount;

    /**
     * @var string Login to user's root account (required in integrator mode).
     */
    public $LoginUin;

    /**
     * @var string Login to user's sub-account (required in integrator mode).
     */
    public $LoginSubAccountUin;

    /**
     * @var string Sub-business type.
     */
    public $SubBizType;

    /**
     * @var array Application ID list.
     */
    public $AppBizIds;

    /**
     * @param string $ModelName Model identifier.
     * @param string $StartTime Start timestamp, in seconds.
     * @param string $EndTime End timestamp, in seconds.
     * @param array $UinAccount uin
     * @param string $LoginUin Login to user's root account (required in integrator mode).
     * @param string $LoginSubAccountUin Login to user's sub-account (required in integrator mode).
     * @param string $SubBizType Sub-business type.
     * @param array $AppBizIds Application ID list.
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
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("UinAccount",$param) and $param["UinAccount"] !== null) {
            $this->UinAccount = $param["UinAccount"];
        }

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }

        if (array_key_exists("SubBizType",$param) and $param["SubBizType"] !== null) {
            $this->SubBizType = $param["SubBizType"];
        }

        if (array_key_exists("AppBizIds",$param) and $param["AppBizIds"] !== null) {
            $this->AppBizIds = $param["AppBizIds"];
        }
    }
}
