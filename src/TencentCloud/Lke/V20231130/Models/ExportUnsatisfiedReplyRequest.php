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
 * ExportUnsatisfiedReply request structure.
 *
 * @method string getBotBizId() Obtain Application ID.
 * @method void setBotBizId(string $BotBizId) Set Application ID.
 * @method array getReplyBizIds() Obtain Check to export ID list.
 * @method void setReplyBizIds(array $ReplyBizIds) Set Check to export ID list.
 * @method string getLoginUin() Obtain Login to user's root account (required in integrator mode).
 * @method void setLoginUin(string $LoginUin) Set Login to user's root account (required in integrator mode).
 * @method string getLoginSubAccountUin() Obtain Login to user's sub-account (required in integrator mode).
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) Set Login to user's sub-account (required in integrator mode).
 * @method Filters getFilters() Obtain Retrieve filter.
 * @method void setFilters(Filters $Filters) Set Retrieve filter.
 */
class ExportUnsatisfiedReplyRequest extends AbstractModel
{
    /**
     * @var string Application ID.
     */
    public $BotBizId;

    /**
     * @var array Check to export ID list.
     */
    public $ReplyBizIds;

    /**
     * @var string Login to user's root account (required in integrator mode).
     */
    public $LoginUin;

    /**
     * @var string Login to user's sub-account (required in integrator mode).
     */
    public $LoginSubAccountUin;

    /**
     * @var Filters Retrieve filter.
     */
    public $Filters;

    /**
     * @param string $BotBizId Application ID.
     * @param array $ReplyBizIds Check to export ID list.
     * @param string $LoginUin Login to user's root account (required in integrator mode).
     * @param string $LoginSubAccountUin Login to user's sub-account (required in integrator mode).
     * @param Filters $Filters Retrieve filter.
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

        if (array_key_exists("ReplyBizIds",$param) and $param["ReplyBizIds"] !== null) {
            $this->ReplyBizIds = $param["ReplyBizIds"];
        }

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = new Filters();
            $this->Filters->deserialize($param["Filters"]);
        }
    }
}
