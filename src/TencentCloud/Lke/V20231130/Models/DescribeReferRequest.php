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
 * DescribeRefer request structure.
 *
 * @method string getBotBizId() Obtain Application ID
 * @method void setBotBizId(string $BotBizId) Set Application ID
 * @method array getReferBizIds() Obtain Quota ID
 * @method void setReferBizIds(array $ReferBizIds) Set Quota ID
 * @method string getLoginUin() Obtain Log in to the user's root account (required in the integrator mode).
 * @method void setLoginUin(string $LoginUin) Set Log in to the user's root account (required in the integrator mode).
 * @method string getLoginSubAccountUin() Obtain Login user sub-account (required in integrator mode).
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) Set Login user sub-account (required in integrator mode).
 */
class DescribeReferRequest extends AbstractModel
{
    /**
     * @var string Application ID
     */
    public $BotBizId;

    /**
     * @var array Quota ID
     */
    public $ReferBizIds;

    /**
     * @var string Log in to the user's root account (required in the integrator mode).
     */
    public $LoginUin;

    /**
     * @var string Login user sub-account (required in integrator mode).
     */
    public $LoginSubAccountUin;

    /**
     * @param string $BotBizId Application ID
     * @param array $ReferBizIds Quota ID
     * @param string $LoginUin Log in to the user's root account (required in the integrator mode).
     * @param string $LoginSubAccountUin Login user sub-account (required in integrator mode).
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
        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("ReferBizIds",$param) and $param["ReferBizIds"] !== null) {
            $this->ReferBizIds = $param["ReferBizIds"];
        }

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }
    }
}
