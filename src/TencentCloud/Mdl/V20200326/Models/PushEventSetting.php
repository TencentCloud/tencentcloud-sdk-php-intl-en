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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The callback configuration for push events.
 *
 * @method string getNotifyUrl() Obtain The callback URL (required).
 * @method void setNotifyUrl(string $NotifyUrl) Set The callback URL (required).
 * @method string getNotifyKey() Obtain The callback key (optional).
 * @method void setNotifyKey(string $NotifyKey) Set The callback key (optional).
 */
class PushEventSetting extends AbstractModel
{
    /**
     * @var string The callback URL (required).
     */
    public $NotifyUrl;

    /**
     * @var string The callback key (optional).
     */
    public $NotifyKey;

    /**
     * @param string $NotifyUrl The callback URL (required).
     * @param string $NotifyKey The callback key (optional).
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
        if (array_key_exists("NotifyUrl",$param) and $param["NotifyUrl"] !== null) {
            $this->NotifyUrl = $param["NotifyUrl"];
        }

        if (array_key_exists("NotifyKey",$param) and $param["NotifyKey"] !== null) {
            $this->NotifyKey = $param["NotifyKey"];
        }
    }
}
