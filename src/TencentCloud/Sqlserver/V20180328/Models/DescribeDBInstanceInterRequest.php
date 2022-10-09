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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstanceInter request structure.
 *
 * @method integer getLimit() Obtain The maximum number of results returned per page. Value range: 1-100.
 * @method void setLimit(integer $Limit) Set The maximum number of results returned per page. Value range: 1-100.
 * @method string getInstanceId() Obtain Filter by instance ID
 * @method void setInstanceId(string $InstanceId) Set Filter by instance ID
 * @method integer getStatus() Obtain Filter by status. Valid values: `1` (Enabling interworking IP), `2` (Enabled interworking IP), `3` (Adding to interworking group), `4` (Added to interworking group), `5` (Reclaiming interworking IP), `6` (Reclaimed interworking IP), `7` (Removing from interworking group), `8` (Removed from interworking group).
 * @method void setStatus(integer $Status) Set Filter by status. Valid values: `1` (Enabling interworking IP), `2` (Enabled interworking IP), `3` (Adding to interworking group), `4` (Added to interworking group), `5` (Reclaiming interworking IP), `6` (Reclaimed interworking IP), `7` (Removing from interworking group), `8` (Removed from interworking group).
 * @method array getVersionSet() Obtain The list of instance version numbers
 * @method void setVersionSet(array $VersionSet) Set The list of instance version numbers
 * @method string getZone() Obtain Instance AZ ID in the format of ap-guangzhou-2
 * @method void setZone(string $Zone) Set Instance AZ ID in the format of ap-guangzhou-2
 * @method integer getOffset() Obtain Page number. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Page number. Default value: `0`.
 */
class DescribeDBInstanceInterRequest extends AbstractModel
{
    /**
     * @var integer The maximum number of results returned per page. Value range: 1-100.
     */
    public $Limit;

    /**
     * @var string Filter by instance ID
     */
    public $InstanceId;

    /**
     * @var integer Filter by status. Valid values: `1` (Enabling interworking IP), `2` (Enabled interworking IP), `3` (Adding to interworking group), `4` (Added to interworking group), `5` (Reclaiming interworking IP), `6` (Reclaimed interworking IP), `7` (Removing from interworking group), `8` (Removed from interworking group).
     */
    public $Status;

    /**
     * @var array The list of instance version numbers
     */
    public $VersionSet;

    /**
     * @var string Instance AZ ID in the format of ap-guangzhou-2
     */
    public $Zone;

    /**
     * @var integer Page number. Default value: `0`.
     */
    public $Offset;

    /**
     * @param integer $Limit The maximum number of results returned per page. Value range: 1-100.
     * @param string $InstanceId Filter by instance ID
     * @param integer $Status Filter by status. Valid values: `1` (Enabling interworking IP), `2` (Enabled interworking IP), `3` (Adding to interworking group), `4` (Added to interworking group), `5` (Reclaiming interworking IP), `6` (Reclaimed interworking IP), `7` (Removing from interworking group), `8` (Removed from interworking group).
     * @param array $VersionSet The list of instance version numbers
     * @param string $Zone Instance AZ ID in the format of ap-guangzhou-2
     * @param integer $Offset Page number. Default value: `0`.
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("VersionSet",$param) and $param["VersionSet"] !== null) {
            $this->VersionSet = $param["VersionSet"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
