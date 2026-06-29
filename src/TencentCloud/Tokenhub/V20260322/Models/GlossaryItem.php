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
 * Termbase detail
 *
 * @method string getGlossaryId() Obtain Termbase ID.
 * @method void setGlossaryId(string $GlossaryId) Set Termbase ID.
 * @method string getName() Obtain Terminology repository name.
 * @method void setName(string $Name) Set Terminology repository name.
 * @method string getDescription() Obtain Repository description.
 * @method void setDescription(string $Description) Set Repository description.
 * @method string getSource() Obtain Source language code.
 * @method void setSource(string $Source) Set Source language code.
 * @method string getTarget() Obtain Target language code.
 * @method void setTarget(string $Target) Set Target language code.
 * @method string getCreatedTime() Obtain Creation time.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time.
 * @method string getUpdatedTime() Obtain Update time.
 * @method void setUpdatedTime(string $UpdatedTime) Set Update time.
 */
class GlossaryItem extends AbstractModel
{
    /**
     * @var string Termbase ID.
     */
    public $GlossaryId;

    /**
     * @var string Terminology repository name.
     */
    public $Name;

    /**
     * @var string Repository description.
     */
    public $Description;

    /**
     * @var string Source language code.
     */
    public $Source;

    /**
     * @var string Target language code.
     */
    public $Target;

    /**
     * @var string Creation time.
     */
    public $CreatedTime;

    /**
     * @var string Update time.
     */
    public $UpdatedTime;

    /**
     * @param string $GlossaryId Termbase ID.
     * @param string $Name Terminology repository name.
     * @param string $Description Repository description.
     * @param string $Source Source language code.
     * @param string $Target Target language code.
     * @param string $CreatedTime Creation time.
     * @param string $UpdatedTime Update time.
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
        if (array_key_exists("GlossaryId",$param) and $param["GlossaryId"] !== null) {
            $this->GlossaryId = $param["GlossaryId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }
    }
}
