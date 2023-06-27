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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBackupDownloadRestriction request structure.
 *
 * @method string getRestrictionType() Obtain Type of the network restrictions for downloading a backup file. Valid values: `NONE` (backups can be downloaded over both private and public networks), `INTRANET` (backups can only be downloaded over the private network), `CUSTOMIZE` (backups can be downloaded over specified VPCs or at specified IPs).
 * @method void setRestrictionType(string $RestrictionType) Set Type of the network restrictions for downloading a backup file. Valid values: `NONE` (backups can be downloaded over both private and public networks), `INTRANET` (backups can only be downloaded over the private network), `CUSTOMIZE` (backups can be downloaded over specified VPCs or at specified IPs).
 * @method string getVpcRestrictionEffect() Obtain Whether VPC is allowed. Valid values: `ALLOW` (allow), `DENY` (deny).
 * @method void setVpcRestrictionEffect(string $VpcRestrictionEffect) Set Whether VPC is allowed. Valid values: `ALLOW` (allow), `DENY` (deny).
 * @method array getVpcIdSet() Obtain Whether it is allowed to download the VPC ID list of the backup files.
 * @method void setVpcIdSet(array $VpcIdSet) Set Whether it is allowed to download the VPC ID list of the backup files.
 * @method string getIpRestrictionEffect() Obtain Whether IP is allowed. Valid values: `ALLOW` (allow), `DENY` (deny).
 * @method void setIpRestrictionEffect(string $IpRestrictionEffect) Set Whether IP is allowed. Valid values: `ALLOW` (allow), `DENY` (deny).
 * @method array getIpSet() Obtain Whether it is allowed to download the IP list of the backup files.
 * @method void setIpSet(array $IpSet) Set Whether it is allowed to download the IP list of the backup files.
 */
class ModifyBackupDownloadRestrictionRequest extends AbstractModel
{
    /**
     * @var string Type of the network restrictions for downloading a backup file. Valid values: `NONE` (backups can be downloaded over both private and public networks), `INTRANET` (backups can only be downloaded over the private network), `CUSTOMIZE` (backups can be downloaded over specified VPCs or at specified IPs).
     */
    public $RestrictionType;

    /**
     * @var string Whether VPC is allowed. Valid values: `ALLOW` (allow), `DENY` (deny).
     */
    public $VpcRestrictionEffect;

    /**
     * @var array Whether it is allowed to download the VPC ID list of the backup files.
     */
    public $VpcIdSet;

    /**
     * @var string Whether IP is allowed. Valid values: `ALLOW` (allow), `DENY` (deny).
     */
    public $IpRestrictionEffect;

    /**
     * @var array Whether it is allowed to download the IP list of the backup files.
     */
    public $IpSet;

    /**
     * @param string $RestrictionType Type of the network restrictions for downloading a backup file. Valid values: `NONE` (backups can be downloaded over both private and public networks), `INTRANET` (backups can only be downloaded over the private network), `CUSTOMIZE` (backups can be downloaded over specified VPCs or at specified IPs).
     * @param string $VpcRestrictionEffect Whether VPC is allowed. Valid values: `ALLOW` (allow), `DENY` (deny).
     * @param array $VpcIdSet Whether it is allowed to download the VPC ID list of the backup files.
     * @param string $IpRestrictionEffect Whether IP is allowed. Valid values: `ALLOW` (allow), `DENY` (deny).
     * @param array $IpSet Whether it is allowed to download the IP list of the backup files.
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
