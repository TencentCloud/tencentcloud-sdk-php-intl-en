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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetAnswerTypeDataCount request structure.
 *
 * @method integer getStartTime() Obtain Start date.
 * @method void setStartTime(integer $StartTime) Set Start date.
 * @method integer getEndTime() Obtain End date.
 * @method void setEndTime(integer $EndTime) Set End date.
 * @method array getAppBizId() Obtain Application ID.
 * @method void setAppBizId(array $AppBizId) Set Application ID.
 * @method integer getType() Obtain Message source (1. shared from user end; 2. chat API; 3. chat test, 4. application evaluation).
 * @method void setType(integer $Type) Set Message source (1. shared from user end; 2. chat API; 3. chat test, 4. application evaluation).
 * @method string getLoginUin() Obtain Login to user's root account (required in integrator mode).
 * @method void setLoginUin(string $LoginUin) Set Login to user's root account (required in integrator mode).
 * @method string getLoginSubAccountUin() Obtain Login to user's sub-account (required in integrator mode).	
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) Set Login to user's sub-account (required in integrator mode).	
 */
class GetAnswerTypeDataCountRequest extends AbstractModel
{
    /**
     * @var integer Start date.
     */
    public $StartTime;

    /**
     * @var integer End date.
     */
    public $EndTime;

    /**
     * @var array Application ID.
     */
    public $AppBizId;

    /**
     * @var integer Message source (1. shared from user end; 2. chat API; 3. chat test, 4. application evaluation).
     */
    public $Type;

    /**
     * @var string Login to user's root account (required in integrator mode).
     */
    public $LoginUin;

    /**
     * @var string Login to user's sub-account (required in integrator mode).	
     */
    public $LoginSubAccountUin;

    /**
     * @param integer $StartTime Start date.
     * @param integer $EndTime End date.
     * @param array $AppBizId Application ID.
     * @param integer $Type Message source (1. shared from user end; 2. chat API; 3. chat test, 4. application evaluation).
     * @param string $LoginUin Login to user's root account (required in integrator mode).
     * @param string $LoginSubAccountUin Login to user's sub-account (required in integrator mode).	
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("AppBizId",$param) and $param["AppBizId"] !== null) {
            $this->AppBizId = $param["AppBizId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }
    }
}
