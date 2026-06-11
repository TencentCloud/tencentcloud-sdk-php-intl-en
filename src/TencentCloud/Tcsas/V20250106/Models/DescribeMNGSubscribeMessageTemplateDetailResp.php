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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Mini game subscription message template details
 *
 * @method string getCreateUser() Obtain <p>Creator.</p>
 * @method void setCreateUser(string $CreateUser) Set <p>Creator.</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getScenarioDescription() Obtain <p>Scenario description.</p>
 * @method void setScenarioDescription(string $ScenarioDescription) Set <p>Scenario description.</p>
 * @method MNGSubscribeMessageTemplateDetailResp getTemplateInfo() Obtain <p>Subscription message template information.</p>
 * @method void setTemplateInfo(MNGSubscribeMessageTemplateDetailResp $TemplateInfo) Set <p>Subscription message template information.</p>
 */
class DescribeMNGSubscribeMessageTemplateDetailResp extends AbstractModel
{
    /**
     * @var string <p>Creator.</p>
     */
    public $CreateUser;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Scenario description.</p>
     */
    public $ScenarioDescription;

    /**
     * @var MNGSubscribeMessageTemplateDetailResp <p>Subscription message template information.</p>
     */
    public $TemplateInfo;

    /**
     * @param string $CreateUser <p>Creator.</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $ScenarioDescription <p>Scenario description.</p>
     * @param MNGSubscribeMessageTemplateDetailResp $TemplateInfo <p>Subscription message template information.</p>
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
        if (array_key_exists("CreateUser",$param) and $param["CreateUser"] !== null) {
            $this->CreateUser = $param["CreateUser"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ScenarioDescription",$param) and $param["ScenarioDescription"] !== null) {
            $this->ScenarioDescription = $param["ScenarioDescription"];
        }

        if (array_key_exists("TemplateInfo",$param) and $param["TemplateInfo"] !== null) {
            $this->TemplateInfo = new MNGSubscribeMessageTemplateDetailResp();
            $this->TemplateInfo->deserialize($param["TemplateInfo"]);
        }
    }
}
