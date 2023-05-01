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
 * CreateLiveTranscodeRule request structure.
 *
 * @method string getDomainName() Obtain Playback domain name.
 * @method void setDomainName(string $DomainName) Set Playback domain name.
 * @method string getAppName() Obtain The push path, which is the same as `AppName` in the push and playback addresses and is `live` by default. If you only want to bind the template to a domain, pass in an empty string.
 * @method void setAppName(string $AppName) Set The push path, which is the same as `AppName` in the push and playback addresses and is `live` by default. If you only want to bind the template to a domain, pass in an empty string.
 * @method string getStreamName() Obtain Stream name. If only the domain name or path is bound, leave this parameter blank.
 * @method void setStreamName(string $StreamName) Set Stream name. If only the domain name or path is bound, leave this parameter blank.
 * @method integer getTemplateId() Obtain Designates an existing template ID.
 * @method void setTemplateId(integer $TemplateId) Set Designates an existing template ID.
 */
class CreateLiveTranscodeRuleRequest extends AbstractModel
{
    /**
     * @var string Playback domain name.
     */
    public $DomainName;

    /**
     * @var string The push path, which is the same as `AppName` in the push and playback addresses and is `live` by default. If you only want to bind the template to a domain, pass in an empty string.
     */
    public $AppName;

    /**
     * @var string Stream name. If only the domain name or path is bound, leave this parameter blank.
     */
    public $StreamName;

    /**
     * @var integer Designates an existing template ID.
     */
    public $TemplateId;

    /**
     * @param string $DomainName Playback domain name.
     * @param string $AppName The push path, which is the same as `AppName` in the push and playback addresses and is `live` by default. If you only want to bind the template to a domain, pass in an empty string.
     * @param string $StreamName Stream name. If only the domain name or path is bound, leave this parameter blank.
     * @param integer $TemplateId Designates an existing template ID.
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

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }
    }
}
