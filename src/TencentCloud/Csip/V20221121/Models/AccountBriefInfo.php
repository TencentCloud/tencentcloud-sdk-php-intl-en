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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Account brief information
 *
 * @method integer getAppID() Obtain <p>Account AppID</p>
 * @method void setAppID(integer $AppID) Set <p>Account AppID</p>
 * @method string getNick() Obtain <p>Account nickname</p>
 * @method void setNick(string $Nick) Set <p>Account nickname</p>
 * @method string getUin() Obtain <p>account Uin</p>
 * @method void setUin(string $Uin) Set <p>account Uin</p>
 */
class AccountBriefInfo extends AbstractModel
{
    /**
     * @var integer <p>Account AppID</p>
     */
    public $AppID;

    /**
     * @var string <p>Account nickname</p>
     */
    public $Nick;

    /**
     * @var string <p>account Uin</p>
     */
    public $Uin;

    /**
     * @param integer $AppID <p>Account AppID</p>
     * @param string $Nick <p>Account nickname</p>
     * @param string $Uin <p>account Uin</p>
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("Nick",$param) and $param["Nick"] !== null) {
            $this->Nick = $param["Nick"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }
    }
}
