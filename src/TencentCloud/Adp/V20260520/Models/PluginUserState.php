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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PluginUserState
 *
 * @method boolean getIsFavorite() Obtain Whether the plug-in has been bookmarked
 * @method void setIsFavorite(boolean $IsFavorite) Set Whether the plug-in has been bookmarked
 * @method boolean getIsInWhiteList() Obtain Whether it is in the plug-in allowlist
 * @method void setIsInWhiteList(boolean $IsInWhiteList) Set Whether it is in the plug-in allowlist
 * @method integer getWhiteListType() Obtain <p>Allowlist type, used to represent whether the current user can use this plug-in directly.</p><p>Enumeration values:</p><ul><li>0: Not on the allowlist, fully available</li><li>1: Current user in allowlist</li><li>2: Current user not in allowlist, submit an application</li></ul>
 * @method void setWhiteListType(integer $WhiteListType) Set <p>Allowlist type, used to represent whether the current user can use this plug-in directly.</p><p>Enumeration values:</p><ul><li>0: Not on the allowlist, fully available</li><li>1: Current user in allowlist</li><li>2: Current user not in allowlist, submit an application</li></ul>
 */
class PluginUserState extends AbstractModel
{
    /**
     * @var boolean Whether the plug-in has been bookmarked
     */
    public $IsFavorite;

    /**
     * @var boolean Whether it is in the plug-in allowlist
     */
    public $IsInWhiteList;

    /**
     * @var integer <p>Allowlist type, used to represent whether the current user can use this plug-in directly.</p><p>Enumeration values:</p><ul><li>0: Not on the allowlist, fully available</li><li>1: Current user in allowlist</li><li>2: Current user not in allowlist, submit an application</li></ul>
     */
    public $WhiteListType;

    /**
     * @param boolean $IsFavorite Whether the plug-in has been bookmarked
     * @param boolean $IsInWhiteList Whether it is in the plug-in allowlist
     * @param integer $WhiteListType <p>Allowlist type, used to represent whether the current user can use this plug-in directly.</p><p>Enumeration values:</p><ul><li>0: Not on the allowlist, fully available</li><li>1: Current user in allowlist</li><li>2: Current user not in allowlist, submit an application</li></ul>
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
        if (array_key_exists("IsFavorite",$param) and $param["IsFavorite"] !== null) {
            $this->IsFavorite = $param["IsFavorite"];
        }

        if (array_key_exists("IsInWhiteList",$param) and $param["IsInWhiteList"] !== null) {
            $this->IsInWhiteList = $param["IsInWhiteList"];
        }

        if (array_key_exists("WhiteListType",$param) and $param["WhiteListType"] !== null) {
            $this->WhiteListType = $param["WhiteListType"];
        }
    }
}
