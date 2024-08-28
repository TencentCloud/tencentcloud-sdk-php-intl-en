<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Allowlist configuration of the authorized edition
 *
 * @method integer getDeadline() Obtain Number of days before expiration
 * @method void setDeadline(integer $Deadline) Set Number of days before expiration
 * @method integer getLicenseNum() Obtain Number of authorizations
 * @method void setLicenseNum(integer $LicenseNum) Set Number of authorizations
 * @method boolean getIsApplyFor() Obtain Whether application can be made
 * @method void setIsApplyFor(boolean $IsApplyFor) Set Whether application can be made
 * @method integer getSourceType() Obtain Type
 * @method void setSourceType(integer $SourceType) Set Type
 */
class VersionWhiteConfig extends AbstractModel
{
    /**
     * @var integer Number of days before expiration
     */
    public $Deadline;

    /**
     * @var integer Number of authorizations
     */
    public $LicenseNum;

    /**
     * @var boolean Whether application can be made
     */
    public $IsApplyFor;

    /**
     * @var integer Type
     */
    public $SourceType;

    /**
     * @param integer $Deadline Number of days before expiration
     * @param integer $LicenseNum Number of authorizations
     * @param boolean $IsApplyFor Whether application can be made
     * @param integer $SourceType Type
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
        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("LicenseNum",$param) and $param["LicenseNum"] !== null) {
            $this->LicenseNum = $param["LicenseNum"];
        }

        if (array_key_exists("IsApplyFor",$param) and $param["IsApplyFor"] !== null) {
            $this->IsApplyFor = $param["IsApplyFor"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }
    }
}
