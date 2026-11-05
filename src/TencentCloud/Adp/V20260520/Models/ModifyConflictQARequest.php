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
 * ModifyConflictQA request structure.
 *
 * @method string getKbId() Obtain <p>Knowledge base ID</p>
 * @method void setKbId(string $KbId) Set <p>Knowledge base ID</p>
 * @method string getConflictGroupId() Obtain <p>Conflict group ID (optional if ignored globally)</p>
 * @method void setConflictGroupId(string $ConflictGroupId) Set <p>Conflict group ID (optional if ignored globally)</p>
 * @method boolean getIsIgnoreAll() Obtain <p>Whether to ignore globally (ignore all pending conflict issues under the current KB)</p>
 * @method void setIsIgnoreAll(boolean $IsIgnoreAll) Set <p>Whether to ignore globally (ignore all pending conflict issues under the current KB)</p>
 * @method array getQaIdList() Obtain <p>QA ID list involved in decision-making (required for KEEP and DELETE)</p>
 * @method void setQaIdList(array $QaIdList) Set <p>QA ID list involved in decision-making (required for KEEP and DELETE)</p>
 * @method integer getResolution() Obtain <p>Conflict resolution policy: 1=reserve, 2=ignore, 3=delete (can be omitted when ignored globally)<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>CONFLICT_RESOLUTION_UNKNOWN</td><td>0</td><td>-</td></tr><tr><td>CONFLICT_RESOLUTION_KEEP</td><td>1</td><td>Reserve</td></tr><tr><td>CONFLICT_RESOLUTION_IGNORE</td><td>2</td><td>Ignore</td></tr><tr><td>CONFLICT_RESOLUTION_DELETE</td><td>3</td><td>Delete</td></tr></tbody></table></p>
 * @method void setResolution(integer $Resolution) Set <p>Conflict resolution policy: 1=reserve, 2=ignore, 3=delete (can be omitted when ignored globally)<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>CONFLICT_RESOLUTION_UNKNOWN</td><td>0</td><td>-</td></tr><tr><td>CONFLICT_RESOLUTION_KEEP</td><td>1</td><td>Reserve</td></tr><tr><td>CONFLICT_RESOLUTION_IGNORE</td><td>2</td><td>Ignore</td></tr><tr><td>CONFLICT_RESOLUTION_DELETE</td><td>3</td><td>Delete</td></tr></tbody></table></p>
 */
class ModifyConflictQARequest extends AbstractModel
{
    /**
     * @var string <p>Knowledge base ID</p>
     */
    public $KbId;

    /**
     * @var string <p>Conflict group ID (optional if ignored globally)</p>
     */
    public $ConflictGroupId;

    /**
     * @var boolean <p>Whether to ignore globally (ignore all pending conflict issues under the current KB)</p>
     */
    public $IsIgnoreAll;

    /**
     * @var array <p>QA ID list involved in decision-making (required for KEEP and DELETE)</p>
     */
    public $QaIdList;

    /**
     * @var integer <p>Conflict resolution policy: 1=reserve, 2=ignore, 3=delete (can be omitted when ignored globally)<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>CONFLICT_RESOLUTION_UNKNOWN</td><td>0</td><td>-</td></tr><tr><td>CONFLICT_RESOLUTION_KEEP</td><td>1</td><td>Reserve</td></tr><tr><td>CONFLICT_RESOLUTION_IGNORE</td><td>2</td><td>Ignore</td></tr><tr><td>CONFLICT_RESOLUTION_DELETE</td><td>3</td><td>Delete</td></tr></tbody></table></p>
     */
    public $Resolution;

    /**
     * @param string $KbId <p>Knowledge base ID</p>
     * @param string $ConflictGroupId <p>Conflict group ID (optional if ignored globally)</p>
     * @param boolean $IsIgnoreAll <p>Whether to ignore globally (ignore all pending conflict issues under the current KB)</p>
     * @param array $QaIdList <p>QA ID list involved in decision-making (required for KEEP and DELETE)</p>
     * @param integer $Resolution <p>Conflict resolution policy: 1=reserve, 2=ignore, 3=delete (can be omitted when ignored globally)<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>CONFLICT_RESOLUTION_UNKNOWN</td><td>0</td><td>-</td></tr><tr><td>CONFLICT_RESOLUTION_KEEP</td><td>1</td><td>Reserve</td></tr><tr><td>CONFLICT_RESOLUTION_IGNORE</td><td>2</td><td>Ignore</td></tr><tr><td>CONFLICT_RESOLUTION_DELETE</td><td>3</td><td>Delete</td></tr></tbody></table></p>
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
        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("ConflictGroupId",$param) and $param["ConflictGroupId"] !== null) {
            $this->ConflictGroupId = $param["ConflictGroupId"];
        }

        if (array_key_exists("IsIgnoreAll",$param) and $param["IsIgnoreAll"] !== null) {
            $this->IsIgnoreAll = $param["IsIgnoreAll"];
        }

        if (array_key_exists("QaIdList",$param) and $param["QaIdList"] !== null) {
            $this->QaIdList = $param["QaIdList"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }
    }
}
