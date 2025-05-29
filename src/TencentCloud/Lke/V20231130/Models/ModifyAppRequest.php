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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyApp request structure.
 *
 * @method string getAppBizId() Obtain Application ID.
 * @method void setAppBizId(string $AppBizId) Set Application ID.
 * @method string getAppType() Obtain Application type; knowledge_qa - knowledge Q&A management; summary - knowledge summary; classifys - knowledge label extraction.
 * @method void setAppType(string $AppType) Set Application type; knowledge_qa - knowledge Q&A management; summary - knowledge summary; classifys - knowledge label extraction.
 * @method BaseConfig getBaseConfig() Obtain Basic application configuration.
 * @method void setBaseConfig(BaseConfig $BaseConfig) Set Basic application configuration.
 * @method AppConfig getAppConfig() Obtain Application configuration.
 * @method void setAppConfig(AppConfig $AppConfig) Set Application configuration.
 * @method string getLoginSubAccountUin() Obtain Login to user's sub-account (required in integrator mode).	
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) Set Login to user's sub-account (required in integrator mode).	
 */
class ModifyAppRequest extends AbstractModel
{
    /**
     * @var string Application ID.
     */
    public $AppBizId;

    /**
     * @var string Application type; knowledge_qa - knowledge Q&A management; summary - knowledge summary; classifys - knowledge label extraction.
     */
    public $AppType;

    /**
     * @var BaseConfig Basic application configuration.
     */
    public $BaseConfig;

    /**
     * @var AppConfig Application configuration.
     */
    public $AppConfig;

    /**
     * @var string Login to user's sub-account (required in integrator mode).	
     */
    public $LoginSubAccountUin;

    /**
     * @param string $AppBizId Application ID.
     * @param string $AppType Application type; knowledge_qa - knowledge Q&A management; summary - knowledge summary; classifys - knowledge label extraction.
     * @param BaseConfig $BaseConfig Basic application configuration.
     * @param AppConfig $AppConfig Application configuration.
     * @param string $LoginSubAccountUin Login to user's sub-account (required in integrator mode).	
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
        if (array_key_exists("AppBizId",$param) and $param["AppBizId"] !== null) {
            $this->AppBizId = $param["AppBizId"];
        }

        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }

        if (array_key_exists("BaseConfig",$param) and $param["BaseConfig"] !== null) {
            $this->BaseConfig = new BaseConfig();
            $this->BaseConfig->deserialize($param["BaseConfig"]);
        }

        if (array_key_exists("AppConfig",$param) and $param["AppConfig"] !== null) {
            $this->AppConfig = new AppConfig();
            $this->AppConfig->deserialize($param["AppConfig"]);
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }
    }
}
