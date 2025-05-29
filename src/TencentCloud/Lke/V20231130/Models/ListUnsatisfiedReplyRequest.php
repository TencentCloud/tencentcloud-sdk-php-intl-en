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
 * ListUnsatisfiedReply request structure.
 *
 * @method string getBotBizId() Obtain Application ID.
 * @method void setBotBizId(string $BotBizId) Set Application ID.
 * @method integer getPageNumber() Obtain Page number.
 * @method void setPageNumber(integer $PageNumber) Set Page number.
 * @method integer getPageSize() Obtain Number of items per page.
 * @method void setPageSize(integer $PageSize) Set Number of items per page.
 * @method string getLoginUin() Obtain Login to user's root account (required in integrator mode).
 * @method void setLoginUin(string $LoginUin) Set Login to user's root account (required in integrator mode).
 * @method string getLoginSubAccountUin() Obtain Login to user's sub-account (required in integrator mode).
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) Set Login to user's sub-account (required in integrator mode).
 * @method string getQuery() Obtain User request (question or answer).
 * @method void setQuery(string $Query) Set User request (question or answer).
 * @method array getReasons() Obtain Error type retrieval.
 * @method void setReasons(array $Reasons) Set Error type retrieval.
 */
class ListUnsatisfiedReplyRequest extends AbstractModel
{
    /**
     * @var string Application ID.
     */
    public $BotBizId;

    /**
     * @var integer Page number.
     */
    public $PageNumber;

    /**
     * @var integer Number of items per page.
     */
    public $PageSize;

    /**
     * @var string Login to user's root account (required in integrator mode).
     */
    public $LoginUin;

    /**
     * @var string Login to user's sub-account (required in integrator mode).
     */
    public $LoginSubAccountUin;

    /**
     * @var string User request (question or answer).
     */
    public $Query;

    /**
     * @var array Error type retrieval.
     */
    public $Reasons;

    /**
     * @param string $BotBizId Application ID.
     * @param integer $PageNumber Page number.
     * @param integer $PageSize Number of items per page.
     * @param string $LoginUin Login to user's root account (required in integrator mode).
     * @param string $LoginSubAccountUin Login to user's sub-account (required in integrator mode).
     * @param string $Query User request (question or answer).
     * @param array $Reasons Error type retrieval.
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

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Reasons",$param) and $param["Reasons"] !== null) {
            $this->Reasons = $param["Reasons"];
        }
    }
}
