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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Playback authentication key information.
 *
 * @method string getDomainName() Obtain Domain name.
 * @method void setDomainName(string $DomainName) Set Domain name.
 * @method integer getEnable() Obtain Whether to enable:
0: disable.
1: enable.
 * @method void setEnable(integer $Enable) Set Whether to enable:
0: disable.
1: enable.
 * @method string getAuthKey() Obtain Authentication key.
 * @method void setAuthKey(string $AuthKey) Set Authentication key.
 * @method integer getAuthDelta() Obtain Validity period in seconds.
 * @method void setAuthDelta(integer $AuthDelta) Set Validity period in seconds.
 * @method string getAuthBackKey() Obtain Authentication `BackKey`.
 * @method void setAuthBackKey(string $AuthBackKey) Set Authentication `BackKey`.
 */
class PlayAuthKeyInfo extends AbstractModel
{
    /**
     * @var string Domain name.
     */
    public $DomainName;

    /**
     * @var integer Whether to enable:
0: disable.
1: enable.
     */
    public $Enable;

    /**
     * @var string Authentication key.
     */
    public $AuthKey;

    /**
     * @var integer Validity period in seconds.
     */
    public $AuthDelta;

    /**
     * @var string Authentication `BackKey`.
     */
    public $AuthBackKey;

    /**
     * @param string $DomainName Domain name.
     * @param integer $Enable Whether to enable:
0: disable.
1: enable.
     * @param string $AuthKey Authentication key.
     * @param integer $AuthDelta Validity period in seconds.
     * @param string $AuthBackKey Authentication `BackKey`.
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
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("AuthKey",$param) and $param["AuthKey"] !== null) {
            $this->AuthKey = $param["AuthKey"];
        }

        if (array_key_exists("AuthDelta",$param) and $param["AuthDelta"] !== null) {
            $this->AuthDelta = $param["AuthDelta"];
        }

        if (array_key_exists("AuthBackKey",$param) and $param["AuthBackKey"] !== null) {
            $this->AuthBackKey = $param["AuthBackKey"];
        }
    }
}
