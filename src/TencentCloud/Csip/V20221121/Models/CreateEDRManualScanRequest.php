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
 * CreateEDRManualScan request structure.
 *
 * @method string getAssetSelectionType() Obtain <p>Asset selection method: all - all assets/tag - select by tag (hosts only)/direct - direct selection</p>
 * @method void setAssetSelectionType(string $AssetSelectionType) Set <p>Asset selection method: all - all assets/tag - select by tag (hosts only)/direct - direct selection</p>
 * @method string getScanType() Obtain <p>Detection mode: full - full-disk detection / quick - rapid detection / include - detect specified paths only / exclude - exclude specified paths</p>
 * @method void setScanType(string $ScanType) Set <p>Detection mode: full - full-disk detection / quick - rapid detection / include - detect specified paths only / exclude - exclude specified paths</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getInstanceIDsWithAppId() Obtain <p>Directly selected host list (used when AssetSelectionType=direct or all)</p>
 * @method void setInstanceIDsWithAppId(array $InstanceIDsWithAppId) Set <p>Directly selected host list (used when AssetSelectionType=direct or all)</p>
 * @method array getExcludeInstanceIDsWithAppId() Obtain <p>Host list for removal (used when AssetSelectionType=all)</p>
 * @method void setExcludeInstanceIDsWithAppId(array $ExcludeInstanceIDsWithAppId) Set <p>Host list for removal (used when AssetSelectionType=all)</p>
 * @method array getTagIds() Obtain <p>Tag ID corresponding to the host</p>
 * @method void setTagIds(array $TagIds) Set <p>Tag ID corresponding to the host</p>
 * @method array getClusterIDsWithAppId() Obtain <p>Cluster list for direct selection</p>
 * @method void setClusterIDsWithAppId(array $ClusterIDsWithAppId) Set <p>Cluster list for direct selection</p>
 * @method array getExcludeClusterIDsWithAppId() Obtain <p>Cluster list for removal (used when AssetSelectionType=all)</p>
 * @method void setExcludeClusterIDsWithAppId(array $ExcludeClusterIDsWithAppId) Set <p>Cluster list for removal (used when AssetSelectionType=all)</p>
 * @method array getCustomPaths() Obtain <p>Selected path list (required when ScanType is include or exclude, up to 100 entries)</p>
 * @method void setCustomPaths(array $CustomPaths) Set <p>Selected path list (required when ScanType is include or exclude, up to 100 entries)</p>
 * @method integer getTimeout() Obtain <p>Timeout period in seconds, upper limit 7200</p>
 * @method void setTimeout(integer $Timeout) Set <p>Timeout period in seconds, upper limit 7200</p>
 * @method integer getEnableMemShellScan() Obtain <p>Whether deep detection is enabled: 0-No/1-Yes</p>
 * @method void setEnableMemShellScan(integer $EnableMemShellScan) Set <p>Whether deep detection is enabled: 0-No/1-Yes</p>
 */
class CreateEDRManualScanRequest extends AbstractModel
{
    /**
     * @var string <p>Asset selection method: all - all assets/tag - select by tag (hosts only)/direct - direct selection</p>
     */
    public $AssetSelectionType;

    /**
     * @var string <p>Detection mode: full - full-disk detection / quick - rapid detection / include - detect specified paths only / exclude - exclude specified paths</p>
     */
    public $ScanType;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>Directly selected host list (used when AssetSelectionType=direct or all)</p>
     */
    public $InstanceIDsWithAppId;

    /**
     * @var array <p>Host list for removal (used when AssetSelectionType=all)</p>
     */
    public $ExcludeInstanceIDsWithAppId;

    /**
     * @var array <p>Tag ID corresponding to the host</p>
     */
    public $TagIds;

    /**
     * @var array <p>Cluster list for direct selection</p>
     */
    public $ClusterIDsWithAppId;

    /**
     * @var array <p>Cluster list for removal (used when AssetSelectionType=all)</p>
     */
    public $ExcludeClusterIDsWithAppId;

    /**
     * @var array <p>Selected path list (required when ScanType is include or exclude, up to 100 entries)</p>
     */
    public $CustomPaths;

    /**
     * @var integer <p>Timeout period in seconds, upper limit 7200</p>
     */
    public $Timeout;

    /**
     * @var integer <p>Whether deep detection is enabled: 0-No/1-Yes</p>
     */
    public $EnableMemShellScan;

    /**
     * @param string $AssetSelectionType <p>Asset selection method: all - all assets/tag - select by tag (hosts only)/direct - direct selection</p>
     * @param string $ScanType <p>Detection mode: full - full-disk detection / quick - rapid detection / include - detect specified paths only / exclude - exclude specified paths</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param array $InstanceIDsWithAppId <p>Directly selected host list (used when AssetSelectionType=direct or all)</p>
     * @param array $ExcludeInstanceIDsWithAppId <p>Host list for removal (used when AssetSelectionType=all)</p>
     * @param array $TagIds <p>Tag ID corresponding to the host</p>
     * @param array $ClusterIDsWithAppId <p>Cluster list for direct selection</p>
     * @param array $ExcludeClusterIDsWithAppId <p>Cluster list for removal (used when AssetSelectionType=all)</p>
     * @param array $CustomPaths <p>Selected path list (required when ScanType is include or exclude, up to 100 entries)</p>
     * @param integer $Timeout <p>Timeout period in seconds, upper limit 7200</p>
     * @param integer $EnableMemShellScan <p>Whether deep detection is enabled: 0-No/1-Yes</p>
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
        if (array_key_exists("AssetSelectionType",$param) and $param["AssetSelectionType"] !== null) {
            $this->AssetSelectionType = $param["AssetSelectionType"];
        }

        if (array_key_exists("ScanType",$param) and $param["ScanType"] !== null) {
            $this->ScanType = $param["ScanType"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("InstanceIDsWithAppId",$param) and $param["InstanceIDsWithAppId"] !== null) {
            $this->InstanceIDsWithAppId = [];
            foreach ($param["InstanceIDsWithAppId"] as $key => $value){
                $obj = new InstanceIDWithAppIdItem();
                $obj->deserialize($value);
                array_push($this->InstanceIDsWithAppId, $obj);
            }
        }

        if (array_key_exists("ExcludeInstanceIDsWithAppId",$param) and $param["ExcludeInstanceIDsWithAppId"] !== null) {
            $this->ExcludeInstanceIDsWithAppId = [];
            foreach ($param["ExcludeInstanceIDsWithAppId"] as $key => $value){
                $obj = new InstanceIDWithAppIdItem();
                $obj->deserialize($value);
                array_push($this->ExcludeInstanceIDsWithAppId, $obj);
            }
        }

        if (array_key_exists("TagIds",$param) and $param["TagIds"] !== null) {
            $this->TagIds = $param["TagIds"];
        }

        if (array_key_exists("ClusterIDsWithAppId",$param) and $param["ClusterIDsWithAppId"] !== null) {
            $this->ClusterIDsWithAppId = [];
            foreach ($param["ClusterIDsWithAppId"] as $key => $value){
                $obj = new ClusterWithAppIdItem();
                $obj->deserialize($value);
                array_push($this->ClusterIDsWithAppId, $obj);
            }
        }

        if (array_key_exists("ExcludeClusterIDsWithAppId",$param) and $param["ExcludeClusterIDsWithAppId"] !== null) {
            $this->ExcludeClusterIDsWithAppId = [];
            foreach ($param["ExcludeClusterIDsWithAppId"] as $key => $value){
                $obj = new ClusterWithAppIdItem();
                $obj->deserialize($value);
                array_push($this->ExcludeClusterIDsWithAppId, $obj);
            }
        }

        if (array_key_exists("CustomPaths",$param) and $param["CustomPaths"] !== null) {
            $this->CustomPaths = $param["CustomPaths"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("EnableMemShellScan",$param) and $param["EnableMemShellScan"] !== null) {
            $this->EnableMemShellScan = $param["EnableMemShellScan"];
        }
    }
}
