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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Host Header Rewrite configuration parameters.
 *
 * @method string getAction() Obtain Action to be executed. values:.
<Li>FollowOrigin: follow origin server domain name;</li>.
<Li>`Custom`: custom</li>.
 * @method void setAction(string $Action) Set Action to be executed. values:.
<Li>FollowOrigin: follow origin server domain name;</li>.
<Li>`Custom`: custom</li>.
 * @method string getServerName() Obtain Host header rewrite requires a complete domain name.<br>note: this field is required when switch is on; when switch is off, this field is not required and any value will be ignored.
 * @method void setServerName(string $ServerName) Set Host header rewrite requires a complete domain name.<br>note: this field is required when switch is on; when switch is off, this field is not required and any value will be ignored.
 */
class HostHeaderParameters extends AbstractModel
{
    /**
     * @var string Action to be executed. values:.
<Li>FollowOrigin: follow origin server domain name;</li>.
<Li>`Custom`: custom</li>.
     */
    public $Action;

    /**
     * @var string Host header rewrite requires a complete domain name.<br>note: this field is required when switch is on; when switch is off, this field is not required and any value will be ignored.
     */
    public $ServerName;

    /**
     * @param string $Action Action to be executed. values:.
<Li>FollowOrigin: follow origin server domain name;</li>.
<Li>`Custom`: custom</li>.
     * @param string $ServerName Host header rewrite requires a complete domain name.<br>note: this field is required when switch is on; when switch is off, this field is not required and any value will be ignored.
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }
    }
}
