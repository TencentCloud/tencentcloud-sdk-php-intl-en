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
 * GetAppKnowledgeCount request structure.
 *
 * @method string getType() Obtain Type: doc - document; qa - Q&A pair.
 * @method void setType(string $Type) Set Type: doc - document; qa - Q&A pair.
 * @method string getAppBizId() Obtain Application ID.
 * @method void setAppBizId(string $AppBizId) Set Application ID.
 * @method string getLoginUin() Obtain Login to user's root account (required in integrator mode).	
 * @method void setLoginUin(string $LoginUin) Set Login to user's root account (required in integrator mode).	
 * @method string getLoginSubAccountUin() Obtain Login to user's sub-account (required in integrator mode).	
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) Set Login to user's sub-account (required in integrator mode).	
 */
class GetAppKnowledgeCountRequest extends AbstractModel
{
    /**
     * @var string Type: doc - document; qa - Q&A pair.
     */
    public $Type;

    /**
     * @var string Application ID.
     */
    public $AppBizId;

    /**
     * @var string Login to user's root account (required in integrator mode).	
     */
    public $LoginUin;

    /**
     * @var string Login to user's sub-account (required in integrator mode).	
     */
    public $LoginSubAccountUin;

    /**
     * @param string $Type Type: doc - document; qa - Q&A pair.
     * @param string $AppBizId Application ID.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AppBizId",$param) and $param["AppBizId"] !== null) {
            $this->AppBizId = $param["AppBizId"];
        }

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }
    }
}
