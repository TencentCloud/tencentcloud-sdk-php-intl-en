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
 * CreateImageVirusWhitelist request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getMd5List() Obtain <p>Trojan whitelist md5</p>
 * @method void setMd5List(array $Md5List) Set <p>Trojan whitelist md5</p>
 * @method integer getScope() Obtain <p>Whitelist effective range</p><p>Enumeration values:</p><ul><li>0: Selected images</li><li>1: All images</li></ul>
 * @method void setScope(integer $Scope) Set <p>Whitelist effective range</p><p>Enumeration values:</p><ul><li>0: Selected images</li><li>1: All images</li></ul>
 * @method array getImageIds() Obtain <p>Image ID.</p>
 * @method void setImageIds(array $ImageIds) Set <p>Image ID.</p>
 * @method string getRemark() Obtain <p>Remarks.</p>
 * @method void setRemark(string $Remark) Set <p>Remarks.</p>
 * @method array getVirusId() Obtain <p>Trojan id</p>
 * @method void setVirusId(array $VirusId) Set <p>Trojan id</p>
 * @method string getName() Obtain <p>Trojan whitelist name</p>
 * @method void setName(string $Name) Set <p>Trojan whitelist name</p>
 * @method integer getStatus() Obtain <p>Status</p><p>Enumeration values:</p><ul><li>0: Disabled</li><li>1: Enabled</li></ul>
 * @method void setStatus(integer $Status) Set <p>Status</p><p>Enumeration values:</p><ul><li>0: Disabled</li><li>1: Enabled</li></ul>
 */
class CreateImageVirusWhitelistRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>Trojan whitelist md5</p>
     */
    public $Md5List;

    /**
     * @var integer <p>Whitelist effective range</p><p>Enumeration values:</p><ul><li>0: Selected images</li><li>1: All images</li></ul>
     */
    public $Scope;

    /**
     * @var array <p>Image ID.</p>
     */
    public $ImageIds;

    /**
     * @var string <p>Remarks.</p>
     */
    public $Remark;

    /**
     * @var array <p>Trojan id</p>
     */
    public $VirusId;

    /**
     * @var string <p>Trojan whitelist name</p>
     */
    public $Name;

    /**
     * @var integer <p>Status</p><p>Enumeration values:</p><ul><li>0: Disabled</li><li>1: Enabled</li></ul>
     */
    public $Status;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param array $Md5List <p>Trojan whitelist md5</p>
     * @param integer $Scope <p>Whitelist effective range</p><p>Enumeration values:</p><ul><li>0: Selected images</li><li>1: All images</li></ul>
     * @param array $ImageIds <p>Image ID.</p>
     * @param string $Remark <p>Remarks.</p>
     * @param array $VirusId <p>Trojan id</p>
     * @param string $Name <p>Trojan whitelist name</p>
     * @param integer $Status <p>Status</p><p>Enumeration values:</p><ul><li>0: Disabled</li><li>1: Enabled</li></ul>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Md5List",$param) and $param["Md5List"] !== null) {
            $this->Md5List = $param["Md5List"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("VirusId",$param) and $param["VirusId"] !== null) {
            $this->VirusId = $param["VirusId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
