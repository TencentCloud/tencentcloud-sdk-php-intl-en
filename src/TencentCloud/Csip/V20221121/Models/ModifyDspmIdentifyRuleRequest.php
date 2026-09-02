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
 * ModifyDspmIdentifyRule request structure.
 *
 * @method integer getId() Obtain <p>Data item id</p>
 * @method void setId(integer $Id) Set <p>Data item id</p>
 * @method string getName() Obtain <p>Data item name</p>
 * @method void setName(string $Name) Set <p>Data item name</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method string getDescription() Obtain <p>Data item description.</p>
 * @method void setDescription(string $Description) Set <p>Data item description.</p>
 * @method integer getStatus() Obtain <p>Data item enable status</p><p>Enumeration values:</p><ul><li>0: disabled</li><li>1: enabled</li></ul>
 * @method void setStatus(integer $Status) Set <p>Data item enable status</p><p>Enumeration values:</p><ul><li>0: disabled</li><li>1: enabled</li></ul>
 * @method string getStructuredRule() Obtain <p>Structured rule</p>
 * @method void setStructuredRule(string $StructuredRule) Set <p>Structured rule</p>
 * @method string getUnStructuredRule() Obtain <p>Unstructured rule</p>
 * @method void setUnStructuredRule(string $UnStructuredRule) Set <p>Unstructured rule</p>
 * @method string getOperationSource() Obtain <p>Operation source: empty/dspm=database risk monitoring entry, cos=object storage risk monitoring entry</p>
 * @method void setOperationSource(string $OperationSource) Set <p>Operation source: empty/dspm=database risk monitoring entry, cos=object storage risk monitoring entry</p>
 */
class ModifyDspmIdentifyRuleRequest extends AbstractModel
{
    /**
     * @var integer <p>Data item id</p>
     */
    public $Id;

    /**
     * @var string <p>Data item name</p>
     */
    public $Name;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var string <p>Data item description.</p>
     */
    public $Description;

    /**
     * @var integer <p>Data item enable status</p><p>Enumeration values:</p><ul><li>0: disabled</li><li>1: enabled</li></ul>
     */
    public $Status;

    /**
     * @var string <p>Structured rule</p>
     */
    public $StructuredRule;

    /**
     * @var string <p>Unstructured rule</p>
     */
    public $UnStructuredRule;

    /**
     * @var string <p>Operation source: empty/dspm=database risk monitoring entry, cos=object storage risk monitoring entry</p>
     */
    public $OperationSource;

    /**
     * @param integer $Id <p>Data item id</p>
     * @param string $Name <p>Data item name</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param string $Description <p>Data item description.</p>
     * @param integer $Status <p>Data item enable status</p><p>Enumeration values:</p><ul><li>0: disabled</li><li>1: enabled</li></ul>
     * @param string $StructuredRule <p>Structured rule</p>
     * @param string $UnStructuredRule <p>Unstructured rule</p>
     * @param string $OperationSource <p>Operation source: empty/dspm=database risk monitoring entry, cos=object storage risk monitoring entry</p>
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

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StructuredRule",$param) and $param["StructuredRule"] !== null) {
            $this->StructuredRule = $param["StructuredRule"];
        }

        if (array_key_exists("UnStructuredRule",$param) and $param["UnStructuredRule"] !== null) {
            $this->UnStructuredRule = $param["UnStructuredRule"];
        }

        if (array_key_exists("OperationSource",$param) and $param["OperationSource"] !== null) {
            $this->OperationSource = $param["OperationSource"];
        }
    }
}
