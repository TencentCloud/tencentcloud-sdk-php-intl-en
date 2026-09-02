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
 * CreateDspmIdentifyComplianceGroupCopy request structure.
 *
 * @method integer getFromId() Obtain <p>Source template ID</p>
 * @method void setFromId(integer $FromId) Set <p>Source template ID</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method string getName() Obtain <p>Template name</p>
 * @method void setName(string $Name) Set <p>Template name</p>
 * @method string getDescription() Obtain <p>Template description</p>
 * @method void setDescription(string $Description) Set <p>Template description</p>
 * @method string getOperationSource() Obtain <p>Operation source: empty/dspm=Database risk monitoring entry, cos=Object storage risk monitoring entry</p>
 * @method void setOperationSource(string $OperationSource) Set <p>Operation source: empty/dspm=Database risk monitoring entry, cos=Object storage risk monitoring entry</p>
 */
class CreateDspmIdentifyComplianceGroupCopyRequest extends AbstractModel
{
    /**
     * @var integer <p>Source template ID</p>
     */
    public $FromId;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var string <p>Template name</p>
     */
    public $Name;

    /**
     * @var string <p>Template description</p>
     */
    public $Description;

    /**
     * @var string <p>Operation source: empty/dspm=Database risk monitoring entry, cos=Object storage risk monitoring entry</p>
     */
    public $OperationSource;

    /**
     * @param integer $FromId <p>Source template ID</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param string $Name <p>Template name</p>
     * @param string $Description <p>Template description</p>
     * @param string $OperationSource <p>Operation source: empty/dspm=Database risk monitoring entry, cos=Object storage risk monitoring entry</p>
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
        if (array_key_exists("FromId",$param) and $param["FromId"] !== null) {
            $this->FromId = $param["FromId"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("OperationSource",$param) and $param["OperationSource"] !== null) {
            $this->OperationSource = $param["OperationSource"];
        }
    }
}
