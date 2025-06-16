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
 * RenameDoc request structure.
 *
 * @method string getLoginUin() Obtain Login to user's root account (required in integrator mode).	
 * @method void setLoginUin(string $LoginUin) Set Login to user's root account (required in integrator mode).	
 * @method string getLoginSubAccountUin() Obtain Login to user's sub-account (required in integrator mode).	
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) Set Login to user's sub-account (required in integrator mode).	
 * @method string getBotBizId() Obtain Application ID.
 * @method void setBotBizId(string $BotBizId) Set Application ID.
 * @method string getDocBizId() Obtain Document ID.
 * @method void setDocBizId(string $DocBizId) Set Document ID.
 * @method string getNewName() Obtain New document name, which needs to include the suffix.
 * @method void setNewName(string $NewName) Set New document name, which needs to include the suffix.
 */
class RenameDocRequest extends AbstractModel
{
    /**
     * @var string Login to user's root account (required in integrator mode).	
     */
    public $LoginUin;

    /**
     * @var string Login to user's sub-account (required in integrator mode).	
     */
    public $LoginSubAccountUin;

    /**
     * @var string Application ID.
     */
    public $BotBizId;

    /**
     * @var string Document ID.
     */
    public $DocBizId;

    /**
     * @var string New document name, which needs to include the suffix.
     */
    public $NewName;

    /**
     * @param string $LoginUin Login to user's root account (required in integrator mode).	
     * @param string $LoginSubAccountUin Login to user's sub-account (required in integrator mode).	
     * @param string $BotBizId Application ID.
     * @param string $DocBizId Document ID.
     * @param string $NewName New document name, which needs to include the suffix.
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
        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }

        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }

        if (array_key_exists("NewName",$param) and $param["NewName"] !== null) {
            $this->NewName = $param["NewName"];
        }
    }
}
