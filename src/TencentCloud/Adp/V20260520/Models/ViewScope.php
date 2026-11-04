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
 * View scope
 *
 * @method integer getViewType() Obtain <p>View type; enumeration values: VIEW_TYPE_CORP(1) corporate view, VIEW_TYPE_SPACE(2) space view, VIEW_TYPE_APP(3) application view</p><table><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>VIEW_TYPE_UNSPECIFIED</td><td>0</td><td>Not specified (invalid value, do not pass in requests)</td></tr><tr><td>VIEW_TYPE_CORP</td><td>1</td><td>Corporate view</td></tr><tr><td>VIEW_TYPE_SPACE</td><td>2</td><td>Space view</td></tr><tr><td>VIEW_TYPE_APP</td><td>3</td><td>Application view</td></tr></table>
 * @method void setViewType(integer $ViewType) Set <p>View type; enumeration values: VIEW_TYPE_CORP(1) corporate view, VIEW_TYPE_SPACE(2) space view, VIEW_TYPE_APP(3) application view</p><table><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>VIEW_TYPE_UNSPECIFIED</td><td>0</td><td>Not specified (invalid value, do not pass in requests)</td></tr><tr><td>VIEW_TYPE_CORP</td><td>1</td><td>Corporate view</td></tr><tr><td>VIEW_TYPE_SPACE</td><td>2</td><td>Space view</td></tr><tr><td>VIEW_TYPE_APP</td><td>3</td><td>Application view</td></tr></table>
 * @method string getScopeId() Obtain <p>View scope ID; leave empty for VIEW_TYPE_CORP; enter space_id for VIEW_TYPE_SPACE; enter app_id for VIEW_TYPE_APP (decimal string of uint64 snowflake ID)</p>
 * @method void setScopeId(string $ScopeId) Set <p>View scope ID; leave empty for VIEW_TYPE_CORP; enter space_id for VIEW_TYPE_SPACE; enter app_id for VIEW_TYPE_APP (decimal string of uint64 snowflake ID)</p>
 */
class ViewScope extends AbstractModel
{
    /**
     * @var integer <p>View type; enumeration values: VIEW_TYPE_CORP(1) corporate view, VIEW_TYPE_SPACE(2) space view, VIEW_TYPE_APP(3) application view</p><table><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>VIEW_TYPE_UNSPECIFIED</td><td>0</td><td>Not specified (invalid value, do not pass in requests)</td></tr><tr><td>VIEW_TYPE_CORP</td><td>1</td><td>Corporate view</td></tr><tr><td>VIEW_TYPE_SPACE</td><td>2</td><td>Space view</td></tr><tr><td>VIEW_TYPE_APP</td><td>3</td><td>Application view</td></tr></table>
     */
    public $ViewType;

    /**
     * @var string <p>View scope ID; leave empty for VIEW_TYPE_CORP; enter space_id for VIEW_TYPE_SPACE; enter app_id for VIEW_TYPE_APP (decimal string of uint64 snowflake ID)</p>
     */
    public $ScopeId;

    /**
     * @param integer $ViewType <p>View type; enumeration values: VIEW_TYPE_CORP(1) corporate view, VIEW_TYPE_SPACE(2) space view, VIEW_TYPE_APP(3) application view</p><table><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>VIEW_TYPE_UNSPECIFIED</td><td>0</td><td>Not specified (invalid value, do not pass in requests)</td></tr><tr><td>VIEW_TYPE_CORP</td><td>1</td><td>Corporate view</td></tr><tr><td>VIEW_TYPE_SPACE</td><td>2</td><td>Space view</td></tr><tr><td>VIEW_TYPE_APP</td><td>3</td><td>Application view</td></tr></table>
     * @param string $ScopeId <p>View scope ID; leave empty for VIEW_TYPE_CORP; enter space_id for VIEW_TYPE_SPACE; enter app_id for VIEW_TYPE_APP (decimal string of uint64 snowflake ID)</p>
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
        if (array_key_exists("ViewType",$param) and $param["ViewType"] !== null) {
            $this->ViewType = $param["ViewType"];
        }

        if (array_key_exists("ScopeId",$param) and $param["ScopeId"] !== null) {
            $this->ScopeId = $param["ScopeId"];
        }
    }
}
