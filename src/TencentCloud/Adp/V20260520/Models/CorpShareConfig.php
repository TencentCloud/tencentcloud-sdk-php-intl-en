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
 * CorpShareConfig
 *
 * @method boolean getEnabled() Obtain <p>Business shared switch</p>
 * @method void setEnabled(boolean $Enabled) Set <p>Business shared switch</p>
 * @method integer getShareScope() Obtain <p>Share scope type. 1: all business staff, 2: designated account, 3: designated space</p>
 * @method void setShareScope(integer $ShareScope) Set <p>Share scope type. 1: all business staff, 2: designated account, 3: designated space</p>
 * @method array getTagIdList() Obtain <p>Business shared application tag</p>
 * @method void setTagIdList(array $TagIdList) Set <p>Business shared application tag</p>
 * @method array getShareScopeList() Obtain <p>Shared range information (for users, StrId is uin and Name is username; for spaces, StrId is space ID and Name is space Name)</p>
 * @method void setShareScopeList(array $ShareScopeList) Set <p>Shared range information (for users, StrId is uin and Name is username; for spaces, StrId is space ID and Name is space Name)</p>
 */
class CorpShareConfig extends AbstractModel
{
    /**
     * @var boolean <p>Business shared switch</p>
     */
    public $Enabled;

    /**
     * @var integer <p>Share scope type. 1: all business staff, 2: designated account, 3: designated space</p>
     */
    public $ShareScope;

    /**
     * @var array <p>Business shared application tag</p>
     */
    public $TagIdList;

    /**
     * @var array <p>Shared range information (for users, StrId is uin and Name is username; for spaces, StrId is space ID and Name is space Name)</p>
     */
    public $ShareScopeList;

    /**
     * @param boolean $Enabled <p>Business shared switch</p>
     * @param integer $ShareScope <p>Share scope type. 1: all business staff, 2: designated account, 3: designated space</p>
     * @param array $TagIdList <p>Business shared application tag</p>
     * @param array $ShareScopeList <p>Shared range information (for users, StrId is uin and Name is username; for spaces, StrId is space ID and Name is space Name)</p>
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("ShareScope",$param) and $param["ShareScope"] !== null) {
            $this->ShareScope = $param["ShareScope"];
        }

        if (array_key_exists("TagIdList",$param) and $param["TagIdList"] !== null) {
            $this->TagIdList = $param["TagIdList"];
        }

        if (array_key_exists("ShareScopeList",$param) and $param["ShareScopeList"] !== null) {
            $this->ShareScopeList = [];
            foreach ($param["ShareScopeList"] as $key => $value){
                $obj = new Identity();
                $obj->deserialize($value);
                array_push($this->ShareScopeList, $obj);
            }
        }
    }
}
