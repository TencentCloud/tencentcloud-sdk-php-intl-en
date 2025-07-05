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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLiveRecordRule request structure.
 *
 * @method string getDomainName() Obtain Push domain name.
 * @method void setDomainName(string $DomainName) Set Push domain name.
 * @method integer getTemplateId() Obtain Template ID.
 * @method void setTemplateId(integer $TemplateId) Set Template ID.
 * @method string getAppName() Obtain Push path, which is the same as the AppName in push and playback addresses and is "live" by default.
 * @method void setAppName(string $AppName) Set Push path, which is the same as the AppName in push and playback addresses and is "live" by default.
 * @method string getStreamName() Obtain Stream name.
Note: If the parameter is a non-empty string, the rule will be only applicable to the particular stream.
 * @method void setStreamName(string $StreamName) Set Stream name.
Note: If the parameter is a non-empty string, the rule will be only applicable to the particular stream.
 */
class CreateLiveRecordRuleRequest extends AbstractModel
{
    /**
     * @var string Push domain name.
     */
    public $DomainName;

    /**
     * @var integer Template ID.
     */
    public $TemplateId;

    /**
     * @var string Push path, which is the same as the AppName in push and playback addresses and is "live" by default.
     */
    public $AppName;

    /**
     * @var string Stream name.
Note: If the parameter is a non-empty string, the rule will be only applicable to the particular stream.
     */
    public $StreamName;

    /**
     * @param string $DomainName Push domain name.
     * @param integer $TemplateId Template ID.
     * @param string $AppName Push path, which is the same as the AppName in push and playback addresses and is "live" by default.
     * @param string $StreamName Stream name.
Note: If the parameter is a non-empty string, the rule will be only applicable to the particular stream.
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

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }
    }
}
