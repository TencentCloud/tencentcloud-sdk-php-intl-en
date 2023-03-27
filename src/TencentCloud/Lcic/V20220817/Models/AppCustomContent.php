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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Custom application content
Used by actions: SetAppCustomContent.
 *
 * @method string getScene() Obtain Multiple scenarios can be set for an application.
 * @method void setScene(string $Scene) Set Multiple scenarios can be set for an application.
 * @method string getLogoUrl() Obtain Logo URL
 * @method void setLogoUrl(string $LogoUrl) Set Logo URL
 * @method string getHomeUrl() Obtain Homepage URL, which can be used for redirection
 * @method void setHomeUrl(string $HomeUrl) Set Homepage URL, which can be used for redirection
 * @method string getJsUrl() Obtain Custom JS URL
 * @method void setJsUrl(string $JsUrl) Set Custom JS URL
 * @method string getCssUrl() Obtain Custom CSS URL
 * @method void setCssUrl(string $CssUrl) Set Custom CSS URL
 */
class AppCustomContent extends AbstractModel
{
    /**
     * @var string Multiple scenarios can be set for an application.
     */
    public $Scene;

    /**
     * @var string Logo URL
     */
    public $LogoUrl;

    /**
     * @var string Homepage URL, which can be used for redirection
     */
    public $HomeUrl;

    /**
     * @var string Custom JS URL
     */
    public $JsUrl;

    /**
     * @var string Custom CSS URL
     */
    public $CssUrl;

    /**
     * @param string $Scene Multiple scenarios can be set for an application.
     * @param string $LogoUrl Logo URL
     * @param string $HomeUrl Homepage URL, which can be used for redirection
     * @param string $JsUrl Custom JS URL
     * @param string $CssUrl Custom CSS URL
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
        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("LogoUrl",$param) and $param["LogoUrl"] !== null) {
            $this->LogoUrl = $param["LogoUrl"];
        }

        if (array_key_exists("HomeUrl",$param) and $param["HomeUrl"] !== null) {
            $this->HomeUrl = $param["HomeUrl"];
        }

        if (array_key_exists("JsUrl",$param) and $param["JsUrl"] !== null) {
            $this->JsUrl = $param["JsUrl"];
        }

        if (array_key_exists("CssUrl",$param) and $param["CssUrl"] !== null) {
            $this->CssUrl = $param["CssUrl"];
        }
    }
}
