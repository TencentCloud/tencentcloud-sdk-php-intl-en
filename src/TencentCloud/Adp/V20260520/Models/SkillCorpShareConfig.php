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
 * Skill business shared configuration.
 *
 * @method integer getShareScope() Obtain <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>SHARE_SCOPE_TYPE_UNSPECIFIED</td> <td>0</td> <td></td> </tr> <tr> <td>SHARE_SCOPE_TYPE_ALL</td> <td>1</td> <td></td> </tr> <tr> <td>SHARE_SCOPE_TYPE_ACCOUNT</td> <td>2</td> <td></td> </tr> <tr> <td>SHARE_SCOPE_TYPE_SPACE</td> <td>3</td> <td></td> </tr> </tbody> </table> <p>Enumeration values:</p> <ul> <li>0: Unspecified</li> <li>1: Shared across the business</li> <li>3: Shared by space</li> </ul>
 * @method void setShareScope(integer $ShareScope) Set <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>SHARE_SCOPE_TYPE_UNSPECIFIED</td> <td>0</td> <td></td> </tr> <tr> <td>SHARE_SCOPE_TYPE_ALL</td> <td>1</td> <td></td> </tr> <tr> <td>SHARE_SCOPE_TYPE_ACCOUNT</td> <td>2</td> <td></td> </tr> <tr> <td>SHARE_SCOPE_TYPE_SPACE</td> <td>3</td> <td></td> </tr> </tbody> </table> <p>Enumeration values:</p> <ul> <li>0: Unspecified</li> <li>1: Shared across the business</li> <li>3: Shared by space</li> </ul>
 * @method array getShareScopeList() Obtain <p>Share range information. Only spaces are supported. StrId is the space ID, and Name is the space name.</p>
 * @method void setShareScopeList(array $ShareScopeList) Set <p>Share range information. Only spaces are supported. StrId is the space ID, and Name is the space name.</p>
 */
class SkillCorpShareConfig extends AbstractModel
{
    /**
     * @var integer <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>SHARE_SCOPE_TYPE_UNSPECIFIED</td> <td>0</td> <td></td> </tr> <tr> <td>SHARE_SCOPE_TYPE_ALL</td> <td>1</td> <td></td> </tr> <tr> <td>SHARE_SCOPE_TYPE_ACCOUNT</td> <td>2</td> <td></td> </tr> <tr> <td>SHARE_SCOPE_TYPE_SPACE</td> <td>3</td> <td></td> </tr> </tbody> </table> <p>Enumeration values:</p> <ul> <li>0: Unspecified</li> <li>1: Shared across the business</li> <li>3: Shared by space</li> </ul>
     */
    public $ShareScope;

    /**
     * @var array <p>Share range information. Only spaces are supported. StrId is the space ID, and Name is the space name.</p>
     */
    public $ShareScopeList;

    /**
     * @param integer $ShareScope <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>SHARE_SCOPE_TYPE_UNSPECIFIED</td> <td>0</td> <td></td> </tr> <tr> <td>SHARE_SCOPE_TYPE_ALL</td> <td>1</td> <td></td> </tr> <tr> <td>SHARE_SCOPE_TYPE_ACCOUNT</td> <td>2</td> <td></td> </tr> <tr> <td>SHARE_SCOPE_TYPE_SPACE</td> <td>3</td> <td></td> </tr> </tbody> </table> <p>Enumeration values:</p> <ul> <li>0: Unspecified</li> <li>1: Shared across the business</li> <li>3: Shared by space</li> </ul>
     * @param array $ShareScopeList <p>Share range information. Only spaces are supported. StrId is the space ID, and Name is the space name.</p>
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
        if (array_key_exists("ShareScope",$param) and $param["ShareScope"] !== null) {
            $this->ShareScope = $param["ShareScope"];
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
