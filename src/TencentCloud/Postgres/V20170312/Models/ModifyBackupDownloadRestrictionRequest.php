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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBackupDownloadRestriction request structure.
 *
 * @method string getRestrictionType() Obtain Backup file download restriction type. valid values: NONE (unlimited, allows download from both private and public networks), INTRANET (only allows private network download), CUSTOMIZE (custom limits for download by vpc or ip). when the parameter value is CUSTOMIZE, at least one item must be filled in for vpc restriction and ip restriction.
 * @method void setRestrictionType(string $RestrictionType) Set Backup file download restriction type. valid values: NONE (unlimited, allows download from both private and public networks), INTRANET (only allows private network download), CUSTOMIZE (custom limits for download by vpc or ip). when the parameter value is CUSTOMIZE, at least one item must be filled in for vpc restriction and ip restriction.
 * @method string getVpcRestrictionEffect() Obtain Whether VPC is allowed. Valid values: `ALLOW` (allow), `DENY` (deny).
 * @method void setVpcRestrictionEffect(string $VpcRestrictionEffect) Set Whether VPC is allowed. Valid values: `ALLOW` (allow), `DENY` (deny).
 * @method array getVpcIdSet() Obtain Specifies the vpc id list to allow or deny downloading backup files.
**Note:** This input parameter performs a full replacement on all existing collections but not an incremental update. To modify it, import the expected full collections.
 * @method void setVpcIdSet(array $VpcIdSet) Set Specifies the vpc id list to allow or deny downloading backup files.
**Note:** This input parameter performs a full replacement on all existing collections but not an incremental update. To modify it, import the expected full collections.
 * @method string getIpRestrictionEffect() Obtain Whether IP is allowed. Valid values: `ALLOW` (allow), `DENY` (deny).
 * @method void setIpRestrictionEffect(string $IpRestrictionEffect) Set Whether IP is allowed. Valid values: `ALLOW` (allow), `DENY` (deny).
 * @method array getIpSet() Obtain Specifies the ip list to allow or deny downloading backup files.
**Note:** This input parameter performs a full replacement on all existing collections but not an incremental update. To modify it, import the expected full collections.
 * @method void setIpSet(array $IpSet) Set Specifies the ip list to allow or deny downloading backup files.
**Note:** This input parameter performs a full replacement on all existing collections but not an incremental update. To modify it, import the expected full collections.
 */
class ModifyBackupDownloadRestrictionRequest extends AbstractModel
{
    /**
     * @var string Backup file download restriction type. valid values: NONE (unlimited, allows download from both private and public networks), INTRANET (only allows private network download), CUSTOMIZE (custom limits for download by vpc or ip). when the parameter value is CUSTOMIZE, at least one item must be filled in for vpc restriction and ip restriction.
     */
    public $RestrictionType;

    /**
     * @var string Whether VPC is allowed. Valid values: `ALLOW` (allow), `DENY` (deny).
     */
    public $VpcRestrictionEffect;

    /**
     * @var array Specifies the vpc id list to allow or deny downloading backup files.
**Note:** This input parameter performs a full replacement on all existing collections but not an incremental update. To modify it, import the expected full collections.
     */
    public $VpcIdSet;

    /**
     * @var string Whether IP is allowed. Valid values: `ALLOW` (allow), `DENY` (deny).
     */
    public $IpRestrictionEffect;

    /**
     * @var array Specifies the ip list to allow or deny downloading backup files.
**Note:** This input parameter performs a full replacement on all existing collections but not an incremental update. To modify it, import the expected full collections.
     */
    public $IpSet;

    /**
     * @param string $RestrictionType Backup file download restriction type. valid values: NONE (unlimited, allows download from both private and public networks), INTRANET (only allows private network download), CUSTOMIZE (custom limits for download by vpc or ip). when the parameter value is CUSTOMIZE, at least one item must be filled in for vpc restriction and ip restriction.
     * @param string $VpcRestrictionEffect Whether VPC is allowed. Valid values: `ALLOW` (allow), `DENY` (deny).
     * @param array $VpcIdSet Specifies the vpc id list to allow or deny downloading backup files.
**Note:** This input parameter performs a full replacement on all existing collections but not an incremental update. To modify it, import the expected full collections.
     * @param string $IpRestrictionEffect Whether IP is allowed. Valid values: `ALLOW` (allow), `DENY` (deny).
     * @param array $IpSet Specifies the ip list to allow or deny downloading backup files.
**Note:** This input parameter performs a full replacement on all existing collections but not an incremental update. To modify it, import the expected full collections.
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
        if (array_key_exists("RestrictionType",$param) and $param["RestrictionType"] !== null) {
            $this->RestrictionType = $param["RestrictionType"];
        }

        if (array_key_exists("VpcRestrictionEffect",$param) and $param["VpcRestrictionEffect"] !== null) {
            $this->VpcRestrictionEffect = $param["VpcRestrictionEffect"];
        }

        if (array_key_exists("VpcIdSet",$param) and $param["VpcIdSet"] !== null) {
            $this->VpcIdSet = $param["VpcIdSet"];
        }

        if (array_key_exists("IpRestrictionEffect",$param) and $param["IpRestrictionEffect"] !== null) {
            $this->IpRestrictionEffect = $param["IpRestrictionEffect"];
        }

        if (array_key_exists("IpSet",$param) and $param["IpSet"] !== null) {
            $this->IpSet = $param["IpSet"];
        }
    }
}
