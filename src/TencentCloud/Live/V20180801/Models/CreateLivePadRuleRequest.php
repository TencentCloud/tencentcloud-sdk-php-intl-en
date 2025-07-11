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
 * CreateLivePadRule request structure.
 *
 * @method string getDomainName() Obtain Domain name for streaming.
 * @method void setDomainName(string $DomainName) Set Domain name for streaming.
 * @method integer getTemplateId() Obtain The template ID.
 * @method void setTemplateId(integer $TemplateId) Set The template ID.
 * @method string getAppName() Obtain The streaming path is consistent with the AppName in the streaming and playback address. The default value is live.
 * @method void setAppName(string $AppName) Set The streaming path is consistent with the AppName in the streaming and playback address. The default value is live.
 * @method string getStreamName() Obtain Stream name. Note: If this parameter is set to a non-empty string, the rule will only work on this push stream.
 * @method void setStreamName(string $StreamName) Set Stream name. Note: If this parameter is set to a non-empty string, the rule will only work on this push stream.
 */
class CreateLivePadRuleRequest extends AbstractModel
{
    /**
     * @var string Domain name for streaming.
     */
    public $DomainName;

    /**
     * @var integer The template ID.
     */
    public $TemplateId;

    /**
     * @var string The streaming path is consistent with the AppName in the streaming and playback address. The default value is live.
     */
    public $AppName;

    /**
     * @var string Stream name. Note: If this parameter is set to a non-empty string, the rule will only work on this push stream.
     */
    public $StreamName;

    /**
     * @param string $DomainName Domain name for streaming.
     * @param integer $TemplateId The template ID.
     * @param string $AppName The streaming path is consistent with the AppName in the streaming and playback address. The default value is live.
     * @param string $StreamName Stream name. Note: If this parameter is set to a non-empty string, the rule will only work on this push stream.
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
