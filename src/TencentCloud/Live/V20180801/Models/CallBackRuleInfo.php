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
 * Rule information
 *
 * @method string getCreateTime() Obtain The rule creation time.
Note: Beijing time (UTC+8) is used.
 * @method void setCreateTime(string $CreateTime) Set The rule creation time.
Note: Beijing time (UTC+8) is used.
 * @method string getUpdateTime() Obtain The rule update time.
Note: Beijing time (UTC+8) is used.
 * @method void setUpdateTime(string $UpdateTime) Set The rule update time.
Note: Beijing time (UTC+8) is used.
 * @method integer getTemplateId() Obtain Template ID.
 * @method void setTemplateId(integer $TemplateId) Set Template ID.
 * @method string getDomainName() Obtain Push domain name.
 * @method void setDomainName(string $DomainName) Set Push domain name.
 * @method string getAppName() Obtain Push path.
 * @method void setAppName(string $AppName) Set Push path.
 */
class CallBackRuleInfo extends AbstractModel
{
    /**
     * @var string The rule creation time.
Note: Beijing time (UTC+8) is used.
     */
    public $CreateTime;

    /**
     * @var string The rule update time.
Note: Beijing time (UTC+8) is used.
     */
    public $UpdateTime;

    /**
     * @var integer Template ID.
     */
    public $TemplateId;

    /**
     * @var string Push domain name.
     */
    public $DomainName;

    /**
     * @var string Push path.
     */
    public $AppName;

    /**
     * @param string $CreateTime The rule creation time.
Note: Beijing time (UTC+8) is used.
     * @param string $UpdateTime The rule update time.
Note: Beijing time (UTC+8) is used.
     * @param integer $TemplateId Template ID.
     * @param string $DomainName Push domain name.
     * @param string $AppName Push path.
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }
    }
}
