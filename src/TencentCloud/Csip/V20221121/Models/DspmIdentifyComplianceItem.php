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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * dspm classification and grading template information list
 *
 * @method integer getId() Obtain <p>Recognition template ID.</p>
 * @method void setId(integer $Id) Set <p>Recognition template ID.</p>
 * @method string getName() Obtain <p>Recognition template name.</p>
 * @method void setName(string $Name) Set <p>Recognition template name.</p>
 * @method string getDescription() Obtain <p>Description.</p>
 * @method void setDescription(string $Description) Set <p>Description.</p>
 * @method integer getStatus() Obtain <p>Enablement status</p><p>Enumeration values:</p><ul><li>0: Disabled</li><li>1: Enabled</li></ul>
 * @method void setStatus(integer $Status) Set <p>Enablement status</p><p>Enumeration values:</p><ul><li>0: Disabled</li><li>1: Enabled</li></ul>
 * @method integer getType() Obtain <p>Template type</p><p>Enumeration values:</p><ul><li>0: Built-in</li><li>1: Custom</li></ul>
 * @method void setType(integer $Type) Set <p>Template type</p><p>Enumeration values:</p><ul><li>0: Built-in</li><li>1: Custom</li></ul>
 * @method string getUpdateTime() Obtain <p>Update time.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time.</p>
 * @method integer getApplyStatus() Obtain <p>Application status</p><p>Enumeration values:</p><ul><li>0: Not applied</li><li>1: In application</li></ul>
 * @method void setApplyStatus(integer $ApplyStatus) Set <p>Application status</p><p>Enumeration values:</p><ul><li>0: Not applied</li><li>1: In application</li></ul>
 */
class DspmIdentifyComplianceItem extends AbstractModel
{
    /**
     * @var integer <p>Recognition template ID.</p>
     */
    public $Id;

    /**
     * @var string <p>Recognition template name.</p>
     */
    public $Name;

    /**
     * @var string <p>Description.</p>
     */
    public $Description;

    /**
     * @var integer <p>Enablement status</p><p>Enumeration values:</p><ul><li>0: Disabled</li><li>1: Enabled</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>Template type</p><p>Enumeration values:</p><ul><li>0: Built-in</li><li>1: Custom</li></ul>
     */
    public $Type;

    /**
     * @var string <p>Update time.</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>Application status</p><p>Enumeration values:</p><ul><li>0: Not applied</li><li>1: In application</li></ul>
     */
    public $ApplyStatus;

    /**
     * @param integer $Id <p>Recognition template ID.</p>
     * @param string $Name <p>Recognition template name.</p>
     * @param string $Description <p>Description.</p>
     * @param integer $Status <p>Enablement status</p><p>Enumeration values:</p><ul><li>0: Disabled</li><li>1: Enabled</li></ul>
     * @param integer $Type <p>Template type</p><p>Enumeration values:</p><ul><li>0: Built-in</li><li>1: Custom</li></ul>
     * @param string $UpdateTime <p>Update time.</p>
     * @param integer $ApplyStatus <p>Application status</p><p>Enumeration values:</p><ul><li>0: Not applied</li><li>1: In application</li></ul>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ApplyStatus",$param) and $param["ApplyStatus"] !== null) {
            $this->ApplyStatus = $param["ApplyStatus"];
        }
    }
}
