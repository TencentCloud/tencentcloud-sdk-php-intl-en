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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information configured by the user.
 *
 * @method string getLanguage() Obtain Email language, such as `en`.
 * @method void setLanguage(string $Language) Set Email language, such as `en`.
 * @method MailConfiguration getMailConfiguration() Obtain Email template content.
 * @method void setMailConfiguration(MailConfiguration $MailConfiguration) Set Email template content.
 */
class ProfileInfo extends AbstractModel
{
    /**
     * @var string Email language, such as `en`.
     */
    public $Language;

    /**
     * @var MailConfiguration Email template content.
     */
    public $MailConfiguration;

    /**
     * @param string $Language Email language, such as `en`.
     * @param MailConfiguration $MailConfiguration Email template content.
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
        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("MailConfiguration",$param) and $param["MailConfiguration"] !== null) {
            $this->MailConfiguration = new MailConfiguration();
            $this->MailConfiguration->deserialize($param["MailConfiguration"]);
        }
    }
}
