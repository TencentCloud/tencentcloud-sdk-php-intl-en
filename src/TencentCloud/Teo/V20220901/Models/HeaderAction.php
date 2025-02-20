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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HTTP header setting rules.
 *
 * @method string getAction() Obtain HTTP header setting methods. valid values are:.
<Li>`Set`: sets a value for an existing header parameter;</li>.
<Li>`Del`: deletes a header parameter;</li>.
<Li>`Add`: adds a header parameter.</li>.
 * @method void setAction(string $Action) Set HTTP header setting methods. valid values are:.
<Li>`Set`: sets a value for an existing header parameter;</li>.
<Li>`Del`: deletes a header parameter;</li>.
<Li>`Add`: adds a header parameter.</li>.
 * @method string getName() Obtain HTTP header name.
 * @method void setName(string $Name) Set HTTP header name.
 * @method string getValue() Obtain HTTP header value. this parameter is required when the action is set to `set` or `add`; it is optional when the action is set to `del`.
 * @method void setValue(string $Value) Set HTTP header value. this parameter is required when the action is set to `set` or `add`; it is optional when the action is set to `del`.
 */
class HeaderAction extends AbstractModel
{
    /**
     * @var string HTTP header setting methods. valid values are:.
<Li>`Set`: sets a value for an existing header parameter;</li>.
<Li>`Del`: deletes a header parameter;</li>.
<Li>`Add`: adds a header parameter.</li>.
     */
    public $Action;

    /**
     * @var string HTTP header name.
     */
    public $Name;

    /**
     * @var string HTTP header value. this parameter is required when the action is set to `set` or `add`; it is optional when the action is set to `del`.
     */
    public $Value;

    /**
     * @param string $Action HTTP header setting methods. valid values are:.
<Li>`Set`: sets a value for an existing header parameter;</li>.
<Li>`Del`: deletes a header parameter;</li>.
<Li>`Add`: adds a header parameter.</li>.
     * @param string $Name HTTP header name.
     * @param string $Value HTTP header value. this parameter is required when the action is set to `set` or `add`; it is optional when the action is set to `del`.
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
