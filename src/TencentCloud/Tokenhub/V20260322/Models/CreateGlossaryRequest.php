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
 * CreateGlossary request structure.
 *
 * @method string getName() Obtain Terminology library name. Maximum 50 characters.
 * @method void setName(string $Name) Set Terminology library name. Maximum 50 characters.
 * @method string getSource() Obtain Source language code. Maximum 16 characters, such as zh (Chinese), en (English).
 * @method void setSource(string $Source) Set Source language code. Maximum 16 characters, such as zh (Chinese), en (English).
 * @method string getTarget() Obtain Target language code. Maximum 16 characters, such as zh (Chinese), en (English).
 * @method void setTarget(string $Target) Set Target language code. Maximum 16 characters, such as zh (Chinese), en (English).
 * @method string getDescription() Obtain Termbase description. Maximum 255 characters.
 * @method void setDescription(string $Description) Set Termbase description. Maximum 255 characters.
 */
class CreateGlossaryRequest extends AbstractModel
{
    /**
     * @var string Terminology library name. Maximum 50 characters.
     */
    public $Name;

    /**
     * @var string Source language code. Maximum 16 characters, such as zh (Chinese), en (English).
     */
    public $Source;

    /**
     * @var string Target language code. Maximum 16 characters, such as zh (Chinese), en (English).
     */
    public $Target;

    /**
     * @var string Termbase description. Maximum 255 characters.
     */
    public $Description;

    /**
     * @param string $Name Terminology library name. Maximum 50 characters.
     * @param string $Source Source language code. Maximum 16 characters, such as zh (Chinese), en (English).
     * @param string $Target Target language code. Maximum 16 characters, such as zh (Chinese), en (English).
     * @param string $Description Termbase description. Maximum 255 characters.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
