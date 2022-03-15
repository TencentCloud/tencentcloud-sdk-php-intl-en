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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetUserAppId response structure.
 *
 * @method string getUin() Obtain UIN of the current account.
 * @method void setUin(string $Uin) Set UIN of the current account.
 * @method string getOwnerUin() Obtain OwnerUin of the current account.
 * @method void setOwnerUin(string $OwnerUin) Set OwnerUin of the current account.
 * @method integer getAppId() Obtain AppId of the current account.
 * @method void setAppId(integer $AppId) Set AppId of the current account.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetUserAppIdResponse extends AbstractModel
{
    /**
     * @var string UIN of the current account.
     */
    public $Uin;

    /**
     * @var string OwnerUin of the current account.
     */
    public $OwnerUin;

    /**
     * @var integer AppId of the current account.
     */
    public $AppId;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Uin UIN of the current account.
     * @param string $OwnerUin OwnerUin of the current account.
     * @param integer $AppId AppId of the current account.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
