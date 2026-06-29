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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Delete terminology entry
 *
 * @method string getEntryId() Obtain Terminology entry ID. Obtain through the API DescribeGlossaryEntries.
 * @method void setEntryId(string $EntryId) Set Terminology entry ID. Obtain through the API DescribeGlossaryEntries.
 */
class DeleteGlossaryEntryInput extends AbstractModel
{
    /**
     * @var string Terminology entry ID. Obtain through the API DescribeGlossaryEntries.
     */
    public $EntryId;

    /**
     * @param string $EntryId Terminology entry ID. Obtain through the API DescribeGlossaryEntries.
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
        if (array_key_exists("EntryId",$param) and $param["EntryId"] !== null) {
            $this->EntryId = $param["EntryId"];
        }
    }
}
