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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TaskNotifyConfig
 *
 * @method string getType() Obtain Notification type. Currently only supports URLs
 * @method void setType(string $Type) Set Notification type. Currently only supports URLs
 * @method string getNotifyUrl() Obtain Callback URL. Starting with http/https, supporting a maximum of 512 characters
 * @method void setNotifyUrl(string $NotifyUrl) Set Callback URL. Starting with http/https, supporting a maximum of 512 characters
 */
class TaskNotifyConfig extends AbstractModel
{
    /**
     * @var string Notification type. Currently only supports URLs
     */
    public $Type;

    /**
     * @var string Callback URL. Starting with http/https, supporting a maximum of 512 characters
     */
    public $NotifyUrl;

    /**
     * @param string $Type Notification type. Currently only supports URLs
     * @param string $NotifyUrl Callback URL. Starting with http/https, supporting a maximum of 512 characters
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

        if (array_key_exists("NotifyUrl",$param) and $param["NotifyUrl"] !== null) {
            $this->NotifyUrl = $param["NotifyUrl"];
        }
    }
}
