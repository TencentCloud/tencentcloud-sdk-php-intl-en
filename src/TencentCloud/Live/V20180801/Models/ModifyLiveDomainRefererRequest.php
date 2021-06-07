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
 * ModifyLiveDomainReferer request structure.
 *
 * @method string getDomainName() Obtain Playback domain name
 * @method void setDomainName(string $DomainName) Set Playback domain name
 * @method integer getEnable() Obtain Whether to enable referer allowlist/blocklist authentication for the current domain name
 * @method void setEnable(integer $Enable) Set Whether to enable referer allowlist/blocklist authentication for the current domain name
 * @method integer getType() Obtain List type. Valid values: `0` (blocklist), `1` (allowlist)
 * @method void setType(integer $Type) Set List type. Valid values: `0` (blocklist), `1` (allowlist)
 * @method integer getAllowEmpty() Obtain Whether to allow empty referer. Valid values: `0` (no), `1` (yes)
 * @method void setAllowEmpty(integer $AllowEmpty) Set Whether to allow empty referer. Valid values: `0` (no), `1` (yes)
 * @method string getRules() Obtain Referer list. Separate items in it with semicolons (;).
 * @method void setRules(string $Rules) Set Referer list. Separate items in it with semicolons (;).
 */
class ModifyLiveDomainRefererRequest extends AbstractModel
{
    /**
     * @var string Playback domain name
     */
    public $DomainName;

    /**
     * @var integer Whether to enable referer allowlist/blocklist authentication for the current domain name
     */
    public $Enable;

    /**
     * @var integer List type. Valid values: `0` (blocklist), `1` (allowlist)
     */
    public $Type;

    /**
     * @var integer Whether to allow empty referer. Valid values: `0` (no), `1` (yes)
     */
    public $AllowEmpty;

    /**
     * @var string Referer list. Separate items in it with semicolons (;).
     */
    public $Rules;

    /**
     * @param string $DomainName Playback domain name
     * @param integer $Enable Whether to enable referer allowlist/blocklist authentication for the current domain name
     * @param integer $Type List type. Valid values: `0` (blocklist), `1` (allowlist)
     * @param integer $AllowEmpty Whether to allow empty referer. Valid values: `0` (no), `1` (yes)
     * @param string $Rules Referer list. Separate items in it with semicolons (;).
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

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AllowEmpty",$param) and $param["AllowEmpty"] !== null) {
            $this->AllowEmpty = $param["AllowEmpty"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = $param["Rules"];
        }
    }
}
