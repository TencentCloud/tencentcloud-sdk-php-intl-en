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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SCDN access control
 *
 * @method string getSwitch() Obtain Whether to enable. Valid values: `on` and `off`.
 * @method void setSwitch(string $Switch) Set Whether to enable. Valid values: `on` and `off`.
 * @method array getScriptData() Obtain ACL rule group, which is required when the access control is on.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setScriptData(array $ScriptData) Set ACL rule group, which is required when the access control is on.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method ScdnErrorPage getErrorPage() Obtain Error page configuration
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setErrorPage(ScdnErrorPage $ErrorPage) Set Error page configuration
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class ScdnAclConfig extends AbstractModel
{
    /**
     * @var string Whether to enable. Valid values: `on` and `off`.
     */
    public $Switch;

    /**
     * @var array ACL rule group, which is required when the access control is on.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ScriptData;

    /**
     * @var ScdnErrorPage Error page configuration
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ErrorPage;

    /**
     * @param string $Switch Whether to enable. Valid values: `on` and `off`.
     * @param array $ScriptData ACL rule group, which is required when the access control is on.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param ScdnErrorPage $ErrorPage Error page configuration
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("ScriptData",$param) and $param["ScriptData"] !== null) {
            $this->ScriptData = [];
            foreach ($param["ScriptData"] as $key => $value){
                $obj = new ScdnAclGroup();
                $obj->deserialize($value);
                array_push($this->ScriptData, $obj);
            }
        }

        if (array_key_exists("ErrorPage",$param) and $param["ErrorPage"] !== null) {
            $this->ErrorPage = new ScdnErrorPage();
            $this->ErrorPage->deserialize($param["ErrorPage"]);
        }
    }
}
