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
 * DeleteLiveCallbackRule request structure.
 *
 * @method string getDomainName() Obtain Push domain name.
 * @method void setDomainName(string $DomainName) Set Push domain name.
 * @method string getAppName() Obtain Push path, which is the same as the `AppName` in push and playback addresses and is `live` by default.
 * @method void setAppName(string $AppName) Set Push path, which is the same as the `AppName` in push and playback addresses and is `live` by default.
 */
class DeleteLiveCallbackRuleRequest extends AbstractModel
{
    /**
     * @var string Push domain name.
     */
    public $DomainName;

    /**
     * @var string Push path, which is the same as the `AppName` in push and playback addresses and is `live` by default.
     */
    public $AppName;

    /**
     * @param string $DomainName Push domain name.
     * @param string $AppName Push path, which is the same as the `AppName` in push and playback addresses and is `live` by default.
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

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }
    }
}
