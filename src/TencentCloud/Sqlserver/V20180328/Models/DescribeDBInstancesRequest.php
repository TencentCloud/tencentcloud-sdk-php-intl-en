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
 * DescribeDBInstances request structure.
 *
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method integer getStatus() Obtain Instance status. Valid values:
<li>1: applying</li>
<li>2: running</li>
<li>3: running restrictedly (primary/secondary switching)</li>
<li>4: isolated</li>
<li>5: repossessing</li>
<li>6: repossessed</li>
<li>7: executing task (e.g., backing up or rolling back instance)</li>
<li>8: deactivated</li>
<li>9: scaling out instance</li>
<li>10: migrating instance</li>
<li>11: read-only</li>
<li>12: restarting</li>
 * @method void setStatus(integer $Status) Set Instance status. Valid values:
<li>1: applying</li>
<li>2: running</li>
<li>3: running restrictedly (primary/secondary switching)</li>
<li>4: isolated</li>
<li>5: repossessing</li>
<li>6: repossessed</li>
<li>7: executing task (e.g., backing up or rolling back instance)</li>
<li>8: deactivated</li>
<li>9: scaling out instance</li>
<li>10: migrating instance</li>
<li>11: read-only</li>
<li>12: restarting</li>
 * @method integer getOffset() Obtain Page number. Default value: 0
 * @method void setOffset(integer $Offset) Set Page number. Default value: 0
 * @method integer getLimit() Obtain Number of results per page. Value range: 1-100. Default value: 100
 * @method void setLimit(integer $Limit) Set Number of results per page. Value range: 1-100. Default value: 100
 * @method array getInstanceIdSet() Obtain One or more instance IDs in the format of mssql-si2823jyl
 * @method void setInstanceIdSet(array $InstanceIdSet) Set One or more instance IDs in the format of mssql-si2823jyl
 * @method integer getPayMode() Obtain Retrieves billing type. 0: pay-as-you-go
 * @method void setPayMode(integer $PayMode) Set Retrieves billing type. 0: pay-as-you-go
 * @method string getVpcId() Obtain Unique string-type ID of instance VPC in the format of `vpc-xxx`. If an empty string ("") is passed in, filtering will be made by basic network.
 * @method void setVpcId(string $VpcId) Set Unique string-type ID of instance VPC in the format of `vpc-xxx`. If an empty string ("") is passed in, filtering will be made by basic network.
 * @method string getSubnetId() Obtain Unique string-type ID of instance subnet in the format of `subnet-xxx`. If an empty string ("") is passed in, filtering will be made by basic network.
 * @method void setSubnetId(string $SubnetId) Set Unique string-type ID of instance subnet in the format of `subnet-xxx`. If an empty string ("") is passed in, filtering will be made by basic network.
 * @method array getVipSet() Obtain The list of instance private IPs, such as 172.1.0.12
 * @method void setVipSet(array $VipSet) Set The list of instance private IPs, such as 172.1.0.12
 * @method array getInstanceNameSet() Obtain The list of instance names used for fuzzy match
 * @method void setInstanceNameSet(array $InstanceNameSet) Set The list of instance names used for fuzzy match
 * @method array getVersionSet() Obtain The list of instance version numbers, such as 2008R2, 2012SP3
 * @method void setVersionSet(array $VersionSet) Set The list of instance version numbers, such as 2008R2, 2012SP3
 * @method string getZone() Obtain Instance availability zone, such as ap-guangzhou-2
 * @method void setZone(string $Zone) Set Instance availability zone, such as ap-guangzhou-2
 * @method array getTagKeys() Obtain The list of instance tags
 * @method void setTagKeys(array $TagKeys) Set The list of instance tags
 * @method string getSearchKey() Obtain Keyword used for fuzzy match, including instance ID, instance name, and instance private IP
 * @method void setSearchKey(string $SearchKey) Set Keyword used for fuzzy match, including instance ID, instance name, and instance private IP
 * @method array getUidSet() Obtain Unique Uid of an instance
 * @method void setUidSet(array $UidSet) Set Unique Uid of an instance
 * @method string getInstanceType() Obtain Instance type. Valid values: `HA` (high-availability), `RO` (read-only), `SI` (basic edition), `BI` (business intelligence service).
 * @method void setInstanceType(string $InstanceType) Set Instance type. Valid values: `HA` (high-availability), `RO` (read-only), `SI` (basic edition), `BI` (business intelligence service).
 * @method string getPaginationType() Obtain 
 * @method void setPaginationType(string $PaginationType) Set 
 */
class DescribeDBInstancesRequest extends AbstractModel
{
    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var integer Instance status. Valid values:
<li>1: applying</li>
<li>2: running</li>
<li>3: running restrictedly (primary/secondary switching)</li>
<li>4: isolated</li>
<li>5: repossessing</li>
<li>6: repossessed</li>
<li>7: executing task (e.g., backing up or rolling back instance)</li>
<li>8: deactivated</li>
<li>9: scaling out instance</li>
<li>10: migrating instance</li>
<li>11: read-only</li>
<li>12: restarting</li>
     */
    public $Status;

    /**
     * @var integer Page number. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Number of results per page. Value range: 1-100. Default value: 100
     */
    public $Limit;

    /**
     * @var array One or more instance IDs in the format of mssql-si2823jyl
     */
    public $InstanceIdSet;

    /**
     * @var integer Retrieves billing type. 0: pay-as-you-go
     */
    public $PayMode;

    /**
     * @var string Unique string-type ID of instance VPC in the format of `vpc-xxx`. If an empty string ("") is passed in, filtering will be made by basic network.
     */
    public $VpcId;

    /**
     * @var string Unique string-type ID of instance subnet in the format of `subnet-xxx`. If an empty string ("") is passed in, filtering will be made by basic network.
     */
    public $SubnetId;

    /**
     * @var array The list of instance private IPs, such as 172.1.0.12
     */
    public $VipSet;

    /**
     * @var array The list of instance names used for fuzzy match
     */
    public $InstanceNameSet;

    /**
     * @var array The list of instance version numbers, such as 2008R2, 2012SP3
     */
    public $VersionSet;

    /**
     * @var string Instance availability zone, such as ap-guangzhou-2
     */
    public $Zone;

    /**
     * @var array The list of instance tags
     */
    public $TagKeys;

    /**
     * @var string Keyword used for fuzzy match, including instance ID, instance name, and instance private IP
     */
    public $SearchKey;

    /**
     * @var array Unique Uid of an instance
     */
    public $UidSet;

    /**
     * @var string Instance type. Valid values: `HA` (high-availability), `RO` (read-only), `SI` (basic edition), `BI` (business intelligence service).
     */
    public $InstanceType;

    /**
     * @var string 
     */
    public $PaginationType;

    /**
     * @param integer $ProjectId Project ID
     * @param integer $Status Instance status. Valid values:
<li>1: applying</li>
<li>2: running</li>
<li>3: running restrictedly (primary/secondary switching)</li>
<li>4: isolated</li>
<li>5: repossessing</li>
<li>6: repossessed</li>
<li>7: executing task (e.g., backing up or rolling back instance)</li>
<li>8: deactivated</li>
<li>9: scaling out instance</li>
<li>10: migrating instance</li>
<li>11: read-only</li>
<li>12: restarting</li>
     * @param integer $Offset Page number. Default value: 0
     * @param integer $Limit Number of results per page. Value range: 1-100. Default value: 100
     * @param array $InstanceIdSet One or more instance IDs in the format of mssql-si2823jyl
     * @param integer $PayMode Retrieves billing type. 0: pay-as-you-go
     * @param string $VpcId Unique string-type ID of instance VPC in the format of `vpc-xxx`. If an empty string ("") is passed in, filtering will be made by basic network.
     * @param string $SubnetId Unique string-type ID of instance subnet in the format of `subnet-xxx`. If an empty string ("") is passed in, filtering will be made by basic network.
     * @param array $VipSet The list of instance private IPs, such as 172.1.0.12
     * @param array $InstanceNameSet The list of instance names used for fuzzy match
     * @param array $VersionSet The list of instance version numbers, such as 2008R2, 2012SP3
     * @param string $Zone Instance availability zone, such as ap-guangzhou-2
     * @param array $TagKeys The list of instance tags
     * @param string $SearchKey Keyword used for fuzzy match, including instance ID, instance name, and instance private IP
     * @param array $UidSet Unique Uid of an instance
     * @param string $InstanceType Instance type. Valid values: `HA` (high-availability), `RO` (read-only), `SI` (basic edition), `BI` (business intelligence service).
     * @param string $PaginationType 
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("InstanceIdSet",$param) and $param["InstanceIdSet"] !== null) {
            $this->InstanceIdSet = $param["InstanceIdSet"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VipSet",$param) and $param["VipSet"] !== null) {
            $this->VipSet = $param["VipSet"];
        }

        if (array_key_exists("InstanceNameSet",$param) and $param["InstanceNameSet"] !== null) {
            $this->InstanceNameSet = $param["InstanceNameSet"];
        }

        if (array_key_exists("VersionSet",$param) and $param["VersionSet"] !== null) {
            $this->VersionSet = $param["VersionSet"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("TagKeys",$param) and $param["TagKeys"] !== null) {
            $this->TagKeys = $param["TagKeys"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("UidSet",$param) and $param["UidSet"] !== null) {
            $this->UidSet = $param["UidSet"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("PaginationType",$param) and $param["PaginationType"] !== null) {
            $this->PaginationType = $param["PaginationType"];
        }
    }
}
