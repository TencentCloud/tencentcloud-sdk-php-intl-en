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
 * Modify the Extension Field of the knowledge base (used to trigger special operations)
 *
 * @method integer getAction() Obtain <p>Scaling operation: 1=trigger recovery from exceeded state<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>KB_EXTENDED_ACTION_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KB_EXTENDED_ACTION_RESUME_EXCEEDED</td><td>1</td><td>Trigger recovery from exceeded state (restore the knowledge base from exceeded status to normal status)</td></tr></tbody></table></p>
 * @method void setAction(integer $Action) Set <p>Scaling operation: 1=trigger recovery from exceeded state<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>KB_EXTENDED_ACTION_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KB_EXTENDED_ACTION_RESUME_EXCEEDED</td><td>1</td><td>Trigger recovery from exceeded state (restore the knowledge base from exceeded status to normal status)</td></tr></tbody></table></p>
 */
class KBModifyExtendFields extends AbstractModel
{
    /**
     * @var integer <p>Scaling operation: 1=trigger recovery from exceeded state<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>KB_EXTENDED_ACTION_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KB_EXTENDED_ACTION_RESUME_EXCEEDED</td><td>1</td><td>Trigger recovery from exceeded state (restore the knowledge base from exceeded status to normal status)</td></tr></tbody></table></p>
     */
    public $Action;

    /**
     * @param integer $Action <p>Scaling operation: 1=trigger recovery from exceeded state<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>KB_EXTENDED_ACTION_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KB_EXTENDED_ACTION_RESUME_EXCEEDED</td><td>1</td><td>Trigger recovery from exceeded state (restore the knowledge base from exceeded status to normal status)</td></tr></tbody></table></p>
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
    }
}
