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
 * Terminology entry detail
 *
 * @method string getEntryId() Obtain Terminology entry ID.
 * @method void setEntryId(string $EntryId) Set Terminology entry ID.
 * @method string getSourceTerm() Obtain Source language terminology.
 * @method void setSourceTerm(string $SourceTerm) Set Source language terminology.
 * @method string getTargetTerm() Obtain Target language terminology.
 * @method void setTargetTerm(string $TargetTerm) Set Target language terminology.
 * @method integer getUpdatedAt() Obtain Last update time. Unix timestamp (ms).
 * @method void setUpdatedAt(integer $UpdatedAt) Set Last update time. Unix timestamp (ms).
 */
class GlossaryEntryItem extends AbstractModel
{
    /**
     * @var string Terminology entry ID.
     */
    public $EntryId;

    /**
     * @var string Source language terminology.
     */
    public $SourceTerm;

    /**
     * @var string Target language terminology.
     */
    public $TargetTerm;

    /**
     * @var integer Last update time. Unix timestamp (ms).
     */
    public $UpdatedAt;

    /**
     * @param string $EntryId Terminology entry ID.
     * @param string $SourceTerm Source language terminology.
     * @param string $TargetTerm Target language terminology.
     * @param integer $UpdatedAt Last update time. Unix timestamp (ms).
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

        if (array_key_exists("SourceTerm",$param) and $param["SourceTerm"] !== null) {
            $this->SourceTerm = $param["SourceTerm"];
        }

        if (array_key_exists("TargetTerm",$param) and $param["TargetTerm"] !== null) {
            $this->TargetTerm = $param["TargetTerm"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}
