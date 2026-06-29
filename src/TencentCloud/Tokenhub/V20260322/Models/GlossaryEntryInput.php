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
 * Create terminology entry
 *
 * @method string getSourceTerm() Obtain Source language terminology. Maximum 1000 characters.
 * @method void setSourceTerm(string $SourceTerm) Set Source language terminology. Maximum 1000 characters.
 * @method string getTargetTerm() Obtain Target language terminology. Maximum 1000 characters.
 * @method void setTargetTerm(string $TargetTerm) Set Target language terminology. Maximum 1000 characters.
 */
class GlossaryEntryInput extends AbstractModel
{
    /**
     * @var string Source language terminology. Maximum 1000 characters.
     */
    public $SourceTerm;

    /**
     * @var string Target language terminology. Maximum 1000 characters.
     */
    public $TargetTerm;

    /**
     * @param string $SourceTerm Source language terminology. Maximum 1000 characters.
     * @param string $TargetTerm Target language terminology. Maximum 1000 characters.
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
        if (array_key_exists("SourceTerm",$param) and $param["SourceTerm"] !== null) {
            $this->SourceTerm = $param["SourceTerm"];
        }

        if (array_key_exists("TargetTerm",$param) and $param["TargetTerm"] !== null) {
            $this->TargetTerm = $param["TargetTerm"];
        }
    }
}
