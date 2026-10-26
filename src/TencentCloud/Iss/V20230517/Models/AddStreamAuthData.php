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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data structure returned by push/pull stream authentication settings
 *
 * @method string getId() Obtain Authentication configuration ID (uuid).
 * @method void setId(string $Id) Set Authentication configuration ID (uuid).
 * @method integer getPullState() Obtain Whether to enable playback authentication. Valid values: `1`: enable, `0`: disable.
 * @method void setPullState(integer $PullState) Set Whether to enable playback authentication. Valid values: `1`: enable, `0`: disable.
 * @method string getPullSecret() Obtain Playback key (alphanumeric only, length: 0-10 characters)
 * @method void setPullSecret(string $PullSecret) Set Playback key (alphanumeric only, length: 0-10 characters)
 * @method integer getPullExpired() Obtain Playback expiration time (unit: minute)
 * @method void setPullExpired(integer $PullExpired) Set Playback expiration time (unit: minute)
 * @method integer getPushState() Obtain Whether to enable stream authentication (1: enable, 0: disable)
 * @method void setPushState(integer $PushState) Set Whether to enable stream authentication (1: enable, 0: disable)
 * @method string getPushSecret() Obtain Stream key (only alphanumeric characters are supported, with a length of 0-10 characters)
 * @method void setPushSecret(string $PushSecret) Set Stream key (only alphanumeric characters are supported, with a length of 0-10 characters)
 * @method integer getPushExpired() Obtain Push expiration time (unit: minute)
 * @method void setPushExpired(integer $PushExpired) Set Push expiration time (unit: minute)
 * @method integer getAppId() Obtain User ID.
 * @method void setAppId(integer $AppId) Set User ID.
 */
class AddStreamAuthData extends AbstractModel
{
    /**
     * @var string Authentication configuration ID (uuid).
     */
    public $Id;

    /**
     * @var integer Whether to enable playback authentication. Valid values: `1`: enable, `0`: disable.
     */
    public $PullState;

    /**
     * @var string Playback key (alphanumeric only, length: 0-10 characters)
     */
    public $PullSecret;

    /**
     * @var integer Playback expiration time (unit: minute)
     */
    public $PullExpired;

    /**
     * @var integer Whether to enable stream authentication (1: enable, 0: disable)
     */
    public $PushState;

    /**
     * @var string Stream key (only alphanumeric characters are supported, with a length of 0-10 characters)
     */
    public $PushSecret;

    /**
     * @var integer Push expiration time (unit: minute)
     */
    public $PushExpired;

    /**
     * @var integer User ID.
     */
    public $AppId;

    /**
     * @param string $Id Authentication configuration ID (uuid).
     * @param integer $PullState Whether to enable playback authentication. Valid values: `1`: enable, `0`: disable.
     * @param string $PullSecret Playback key (alphanumeric only, length: 0-10 characters)
     * @param integer $PullExpired Playback expiration time (unit: minute)
     * @param integer $PushState Whether to enable stream authentication (1: enable, 0: disable)
     * @param string $PushSecret Stream key (only alphanumeric characters are supported, with a length of 0-10 characters)
     * @param integer $PushExpired Push expiration time (unit: minute)
     * @param integer $AppId User ID.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("PullState",$param) and $param["PullState"] !== null) {
            $this->PullState = $param["PullState"];
        }

        if (array_key_exists("PullSecret",$param) and $param["PullSecret"] !== null) {
            $this->PullSecret = $param["PullSecret"];
        }

        if (array_key_exists("PullExpired",$param) and $param["PullExpired"] !== null) {
            $this->PullExpired = $param["PullExpired"];
        }

        if (array_key_exists("PushState",$param) and $param["PushState"] !== null) {
            $this->PushState = $param["PushState"];
        }

        if (array_key_exists("PushSecret",$param) and $param["PushSecret"] !== null) {
            $this->PushSecret = $param["PushSecret"];
        }

        if (array_key_exists("PushExpired",$param) and $param["PushExpired"] !== null) {
            $this->PushExpired = $param["PushExpired"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }
    }
}
