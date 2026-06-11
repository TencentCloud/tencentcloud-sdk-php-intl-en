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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dashboard subscription data
 *
 * @method array getNoticeModes() Obtain Dashboard subscription notification method.
 * @method void setNoticeModes(array $NoticeModes) Set Dashboard subscription notification method.
 * @method array getDashboardTime() Obtain Dashboard subscription time. If this field is empty, the dashboard default time is used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDashboardTime(array $DashboardTime) Set Dashboard subscription time. If this field is empty, the dashboard default time is used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTemplateVariables() Obtain Dashboard subscription template variable.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTemplateVariables(array $TemplateVariables) Set Dashboard subscription template variable.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTimezone() Obtain Time zone. Refer to: https://en.wikipedia.org/wiki/List_of_tz_database_time_zones#SHANGHAI.
 * @method void setTimezone(string $Timezone) Set Time zone. Refer to: https://en.wikipedia.org/wiki/List_of_tz_database_time_zones#SHANGHAI.
 * @method string getSubscribeLanguage() Obtain Language. zh: Chinese; en: English.
 * @method void setSubscribeLanguage(string $SubscribeLanguage) Set Language. zh: Chinese; en: English.
 * @method string getJumpDomain() Obtain Call link domain name. It must start with http:// or https:// and must not end with /.
 * @method void setJumpDomain(string $JumpDomain) Set Call link domain name. It must start with http:// or https:// and must not end with /.
 * @method string getJumpUrl() Obtain Custom redirection link.
 * @method void setJumpUrl(string $JumpUrl) Set Custom redirection link.
 */
class DashboardSubscribeData extends AbstractModel
{
    /**
     * @var array Dashboard subscription notification method.
     */
    public $NoticeModes;

    /**
     * @var array Dashboard subscription time. If this field is empty, the dashboard default time is used.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DashboardTime;

    /**
     * @var array Dashboard subscription template variable.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TemplateVariables;

    /**
     * @var string Time zone. Refer to: https://en.wikipedia.org/wiki/List_of_tz_database_time_zones#SHANGHAI.
     */
    public $Timezone;

    /**
     * @var string Language. zh: Chinese; en: English.
     */
    public $SubscribeLanguage;

    /**
     * @var string Call link domain name. It must start with http:// or https:// and must not end with /.
     */
    public $JumpDomain;

    /**
     * @var string Custom redirection link.
     */
    public $JumpUrl;

    /**
     * @param array $NoticeModes Dashboard subscription notification method.
     * @param array $DashboardTime Dashboard subscription time. If this field is empty, the dashboard default time is used.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TemplateVariables Dashboard subscription template variable.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Timezone Time zone. Refer to: https://en.wikipedia.org/wiki/List_of_tz_database_time_zones#SHANGHAI.
     * @param string $SubscribeLanguage Language. zh: Chinese; en: English.
     * @param string $JumpDomain Call link domain name. It must start with http:// or https:// and must not end with /.
     * @param string $JumpUrl Custom redirection link.
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
        if (array_key_exists("NoticeModes",$param) and $param["NoticeModes"] !== null) {
            $this->NoticeModes = [];
            foreach ($param["NoticeModes"] as $key => $value){
                $obj = new DashboardNoticeMode();
                $obj->deserialize($value);
                array_push($this->NoticeModes, $obj);
            }
        }

        if (array_key_exists("DashboardTime",$param) and $param["DashboardTime"] !== null) {
            $this->DashboardTime = $param["DashboardTime"];
        }

        if (array_key_exists("TemplateVariables",$param) and $param["TemplateVariables"] !== null) {
            $this->TemplateVariables = [];
            foreach ($param["TemplateVariables"] as $key => $value){
                $obj = new DashboardTemplateVariable();
                $obj->deserialize($value);
                array_push($this->TemplateVariables, $obj);
            }
        }

        if (array_key_exists("Timezone",$param) and $param["Timezone"] !== null) {
            $this->Timezone = $param["Timezone"];
        }

        if (array_key_exists("SubscribeLanguage",$param) and $param["SubscribeLanguage"] !== null) {
            $this->SubscribeLanguage = $param["SubscribeLanguage"];
        }

        if (array_key_exists("JumpDomain",$param) and $param["JumpDomain"] !== null) {
            $this->JumpDomain = $param["JumpDomain"];
        }

        if (array_key_exists("JumpUrl",$param) and $param["JumpUrl"] !== null) {
            $this->JumpUrl = $param["JumpUrl"];
        }
    }
}
