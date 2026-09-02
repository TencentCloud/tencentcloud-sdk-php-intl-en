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
 * Baseline policy
 *
 * @method CycleScanConf getCycleScanConf() Obtain <p>Periodic scan configuration (switch, interval type, scanning period, etc.).</p>
 * @method void setCycleScanConf(CycleScanConf $CycleScanConf) Set <p>Periodic scan configuration (switch, interval type, scanning period, etc.).</p>
 * @method string getCheckAssetType() Obtain <p>Detect asset major category, case-sensitive host baseline and container cluster baseline. Parameter values:</p><ul><li>HOST: Host</li><li>CLUSTER: Container cluster</li></ul>
 * @method void setCheckAssetType(string $CheckAssetType) Set <p>Detect asset major category, case-sensitive host baseline and container cluster baseline. Parameter values:</p><ul><li>HOST: Host</li><li>CLUSTER: Container cluster</li></ul>
 * @method boolean getAutoSyncItem() Obtain <p>Whether to automatically join this policy when new built-in detection items are added to the system. true: automatically join, false: do not join.</p>
 * @method void setAutoSyncItem(boolean $AutoSyncItem) Set <p>Whether to automatically join this policy when new built-in detection items are added to the system. true: automatically join, false: do not join.</p>
 * @method string getType() Obtain <p>Baseline policy type. Values:</p><ul><li>SYSTEM: system policy (CSIP built-in)</li><li>SELF: user-defined policy</li></ul>
 * @method void setType(string $Type) Set <p>Baseline policy type. Values:</p><ul><li>SYSTEM: system policy (CSIP built-in)</li><li>SELF: user-defined policy</li></ul>
 * @method string getName() Obtain <p>Policy Name (custom policy is user input, and system policy is a built-in classification name).</p>
 * @method void setName(string $Name) Set <p>Policy Name (custom policy is user input, and system policy is a built-in classification name).</p>
 * @method string getDescription() Obtain <p>Policy description.</p>
 * @method void setDescription(string $Description) Set <p>Policy description.</p>
 * @method string getConfHostType() Obtain <p>Host effective scope. Value:</p><ul><li>ALL: all hosts (can be used in conjunction with ConfHostExcludeList for removal)</li><li>TAG_MATCH: tag matching, in conjunction with ConfHostTagValue</li><li>PICK: takes effect only on hosts specified in ConfHostIncludeList</li><li>NONE: no configuration</li></ul>
 * @method void setConfHostType(string $ConfHostType) Set <p>Host effective scope. Value:</p><ul><li>ALL: all hosts (can be used in conjunction with ConfHostExcludeList for removal)</li><li>TAG_MATCH: tag matching, in conjunction with ConfHostTagValue</li><li>PICK: takes effect only on hosts specified in ConfHostIncludeList</li><li>NONE: no configuration</li></ul>
 * @method array getConfHostIncludeList() Obtain <p>Host InstanceID allowlist, used when ConfHostType=PICK / TAG_MATCH.</p>
 * @method void setConfHostIncludeList(array $ConfHostIncludeList) Set <p>Host InstanceID allowlist, used when ConfHostType=PICK / TAG_MATCH.</p>
 * @method array getConfHostExcludeList() Obtain <p>Host InstanceID removal list, used when ConfHostType=ALL.</p>
 * @method void setConfHostExcludeList(array $ConfHostExcludeList) Set <p>Host InstanceID removal list, used when ConfHostType=ALL.</p>
 * @method boolean getEnable() Obtain <p>Policy activation status. 0 disabled, 1 enabled; once disabled, the policy will not participate in scans and statistics.</p>
 * @method void setEnable(boolean $Enable) Set <p>Policy activation status. 0 disabled, 1 enabled; once disabled, the policy will not participate in scans and statistics.</p>
 * @method string getConfClusterType() Obtain <p>Cluster effective scope. Value:</p><ul><li>ALL: all clusters (can be used in conjunction with ConfClusterExcludeList for removal)</li><li>PICK: takes effect only on the clusters specified by ConfClusterIncludeList</li><li>NONE: no configuration</li></ul>
 * @method void setConfClusterType(string $ConfClusterType) Set <p>Cluster effective scope. Value:</p><ul><li>ALL: all clusters (can be used in conjunction with ConfClusterExcludeList for removal)</li><li>PICK: takes effect only on the clusters specified by ConfClusterIncludeList</li><li>NONE: no configuration</li></ul>
 * @method array getConfClusterIncludeList() Obtain <p>Cluster ID allowlist, used when ConfClusterType=PICK.</p>
 * @method void setConfClusterIncludeList(array $ConfClusterIncludeList) Set <p>Cluster ID allowlist, used when ConfClusterType=PICK.</p>
 * @method array getConfClusterExcludeList() Obtain <p>Cluster ID removal list, used when ConfClusterType=ALL.</p>
 * @method void setConfClusterExcludeList(array $ConfClusterExcludeList) Set <p>Cluster ID removal list, used when ConfClusterType=ALL.</p>
 * @method array getCategoryConf() Obtain <p>Hit configuration of system classification / subcategory / detection item (only system policies take effect).</p>
 * @method void setCategoryConf(array $CategoryConf) Set <p>Hit configuration of system classification / subcategory / detection item (only system policies take effect).</p>
 * @method array getCustomItemConf() Obtain <p>Custom detection item parameter value configuration list (overwrites the judgment value based on the system check item).</p>
 * @method void setCustomItemConf(array $CustomItemConf) Set <p>Custom detection item parameter value configuration list (overwrites the judgment value based on the system check item).</p>
 * @method integer getAppid() Obtain <p>Appid of the associated tenant of the policy.</p>
 * @method void setAppid(integer $Appid) Set <p>Appid of the associated tenant of the policy.</p>
 * @method integer getID() Obtain <p>Baseline policy ID.</p>
 * @method void setID(integer $ID) Set <p>Baseline policy ID.</p>
 * @method integer getConfItemCount() Obtain <p>Number of detection items configured in the current policy.</p>
 * @method void setConfItemCount(integer $ConfItemCount) Set <p>Number of detection items configured in the current policy.</p>
 * @method integer getConfHostCount() Obtain <p>Number of hosts hit by the current policy.</p>
 * @method void setConfHostCount(integer $ConfHostCount) Set <p>Number of hosts hit by the current policy.</p>
 * @method integer getConfClusterCount() Obtain <p>Number of clusters hit by the current policy.</p>
 * @method void setConfClusterCount(integer $ConfClusterCount) Set <p>Number of clusters hit by the current policy.</p>
 * @method integer getScanningTaskID() Obtain <p>ID of the scan main task currently in progress for the policy; 0 if not in a scan.</p>
 * @method void setScanningTaskID(integer $ScanningTaskID) Set <p>ID of the scan main task currently in progress for the policy; 0 if not in a scan.</p>
 * @method string getLatestScanTime() Obtain <p>Last scan completion time (including manual/periodic).</p>
 * @method void setLatestScanTime(string $LatestScanTime) Set <p>Last scan completion time (including manual/periodic).</p>
 * @method string getLatestCycleScanTime() Obtain <p>Last periodic scan completion time.</p>
 * @method void setLatestCycleScanTime(string $LatestCycleScanTime) Set <p>Last periodic scan completion time.</p>
 * @method array getTagIDList() Obtain <p>Security Center tag ID list</p>
 * @method void setTagIDList(array $TagIDList) Set <p>Security Center tag ID list</p>
 * @method array getCloudTagList() Obtain <p>Cloud tag list</p>
 * @method void setCloudTagList(array $CloudTagList) Set <p>Cloud tag list</p>
 */
class BaselinePolicy extends AbstractModel
{
    /**
     * @var CycleScanConf <p>Periodic scan configuration (switch, interval type, scanning period, etc.).</p>
     */
    public $CycleScanConf;

    /**
     * @var string <p>Detect asset major category, case-sensitive host baseline and container cluster baseline. Parameter values:</p><ul><li>HOST: Host</li><li>CLUSTER: Container cluster</li></ul>
     */
    public $CheckAssetType;

    /**
     * @var boolean <p>Whether to automatically join this policy when new built-in detection items are added to the system. true: automatically join, false: do not join.</p>
     */
    public $AutoSyncItem;

    /**
     * @var string <p>Baseline policy type. Values:</p><ul><li>SYSTEM: system policy (CSIP built-in)</li><li>SELF: user-defined policy</li></ul>
     */
    public $Type;

    /**
     * @var string <p>Policy Name (custom policy is user input, and system policy is a built-in classification name).</p>
     */
    public $Name;

    /**
     * @var string <p>Policy description.</p>
     */
    public $Description;

    /**
     * @var string <p>Host effective scope. Value:</p><ul><li>ALL: all hosts (can be used in conjunction with ConfHostExcludeList for removal)</li><li>TAG_MATCH: tag matching, in conjunction with ConfHostTagValue</li><li>PICK: takes effect only on hosts specified in ConfHostIncludeList</li><li>NONE: no configuration</li></ul>
     */
    public $ConfHostType;

    /**
     * @var array <p>Host InstanceID allowlist, used when ConfHostType=PICK / TAG_MATCH.</p>
     */
    public $ConfHostIncludeList;

    /**
     * @var array <p>Host InstanceID removal list, used when ConfHostType=ALL.</p>
     */
    public $ConfHostExcludeList;

    /**
     * @var boolean <p>Policy activation status. 0 disabled, 1 enabled; once disabled, the policy will not participate in scans and statistics.</p>
     */
    public $Enable;

    /**
     * @var string <p>Cluster effective scope. Value:</p><ul><li>ALL: all clusters (can be used in conjunction with ConfClusterExcludeList for removal)</li><li>PICK: takes effect only on the clusters specified by ConfClusterIncludeList</li><li>NONE: no configuration</li></ul>
     */
    public $ConfClusterType;

    /**
     * @var array <p>Cluster ID allowlist, used when ConfClusterType=PICK.</p>
     */
    public $ConfClusterIncludeList;

    /**
     * @var array <p>Cluster ID removal list, used when ConfClusterType=ALL.</p>
     */
    public $ConfClusterExcludeList;

    /**
     * @var array <p>Hit configuration of system classification / subcategory / detection item (only system policies take effect).</p>
     */
    public $CategoryConf;

    /**
     * @var array <p>Custom detection item parameter value configuration list (overwrites the judgment value based on the system check item).</p>
     */
    public $CustomItemConf;

    /**
     * @var integer <p>Appid of the associated tenant of the policy.</p>
     */
    public $Appid;

    /**
     * @var integer <p>Baseline policy ID.</p>
     */
    public $ID;

    /**
     * @var integer <p>Number of detection items configured in the current policy.</p>
     */
    public $ConfItemCount;

    /**
     * @var integer <p>Number of hosts hit by the current policy.</p>
     */
    public $ConfHostCount;

    /**
     * @var integer <p>Number of clusters hit by the current policy.</p>
     */
    public $ConfClusterCount;

    /**
     * @var integer <p>ID of the scan main task currently in progress for the policy; 0 if not in a scan.</p>
     */
    public $ScanningTaskID;

    /**
     * @var string <p>Last scan completion time (including manual/periodic).</p>
     */
    public $LatestScanTime;

    /**
     * @var string <p>Last periodic scan completion time.</p>
     */
    public $LatestCycleScanTime;

    /**
     * @var array <p>Security Center tag ID list</p>
     */
    public $TagIDList;

    /**
     * @var array <p>Cloud tag list</p>
     */
    public $CloudTagList;

    /**
     * @param CycleScanConf $CycleScanConf <p>Periodic scan configuration (switch, interval type, scanning period, etc.).</p>
     * @param string $CheckAssetType <p>Detect asset major category, case-sensitive host baseline and container cluster baseline. Parameter values:</p><ul><li>HOST: Host</li><li>CLUSTER: Container cluster</li></ul>
     * @param boolean $AutoSyncItem <p>Whether to automatically join this policy when new built-in detection items are added to the system. true: automatically join, false: do not join.</p>
     * @param string $Type <p>Baseline policy type. Values:</p><ul><li>SYSTEM: system policy (CSIP built-in)</li><li>SELF: user-defined policy</li></ul>
     * @param string $Name <p>Policy Name (custom policy is user input, and system policy is a built-in classification name).</p>
     * @param string $Description <p>Policy description.</p>
     * @param string $ConfHostType <p>Host effective scope. Value:</p><ul><li>ALL: all hosts (can be used in conjunction with ConfHostExcludeList for removal)</li><li>TAG_MATCH: tag matching, in conjunction with ConfHostTagValue</li><li>PICK: takes effect only on hosts specified in ConfHostIncludeList</li><li>NONE: no configuration</li></ul>
     * @param array $ConfHostIncludeList <p>Host InstanceID allowlist, used when ConfHostType=PICK / TAG_MATCH.</p>
     * @param array $ConfHostExcludeList <p>Host InstanceID removal list, used when ConfHostType=ALL.</p>
     * @param boolean $Enable <p>Policy activation status. 0 disabled, 1 enabled; once disabled, the policy will not participate in scans and statistics.</p>
     * @param string $ConfClusterType <p>Cluster effective scope. Value:</p><ul><li>ALL: all clusters (can be used in conjunction with ConfClusterExcludeList for removal)</li><li>PICK: takes effect only on the clusters specified by ConfClusterIncludeList</li><li>NONE: no configuration</li></ul>
     * @param array $ConfClusterIncludeList <p>Cluster ID allowlist, used when ConfClusterType=PICK.</p>
     * @param array $ConfClusterExcludeList <p>Cluster ID removal list, used when ConfClusterType=ALL.</p>
     * @param array $CategoryConf <p>Hit configuration of system classification / subcategory / detection item (only system policies take effect).</p>
     * @param array $CustomItemConf <p>Custom detection item parameter value configuration list (overwrites the judgment value based on the system check item).</p>
     * @param integer $Appid <p>Appid of the associated tenant of the policy.</p>
     * @param integer $ID <p>Baseline policy ID.</p>
     * @param integer $ConfItemCount <p>Number of detection items configured in the current policy.</p>
     * @param integer $ConfHostCount <p>Number of hosts hit by the current policy.</p>
     * @param integer $ConfClusterCount <p>Number of clusters hit by the current policy.</p>
     * @param integer $ScanningTaskID <p>ID of the scan main task currently in progress for the policy; 0 if not in a scan.</p>
     * @param string $LatestScanTime <p>Last scan completion time (including manual/periodic).</p>
     * @param string $LatestCycleScanTime <p>Last periodic scan completion time.</p>
     * @param array $TagIDList <p>Security Center tag ID list</p>
     * @param array $CloudTagList <p>Cloud tag list</p>
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
        if (array_key_exists("CycleScanConf",$param) and $param["CycleScanConf"] !== null) {
            $this->CycleScanConf = new CycleScanConf();
            $this->CycleScanConf->deserialize($param["CycleScanConf"]);
        }

        if (array_key_exists("CheckAssetType",$param) and $param["CheckAssetType"] !== null) {
            $this->CheckAssetType = $param["CheckAssetType"];
        }

        if (array_key_exists("AutoSyncItem",$param) and $param["AutoSyncItem"] !== null) {
            $this->AutoSyncItem = $param["AutoSyncItem"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ConfHostType",$param) and $param["ConfHostType"] !== null) {
            $this->ConfHostType = $param["ConfHostType"];
        }

        if (array_key_exists("ConfHostIncludeList",$param) and $param["ConfHostIncludeList"] !== null) {
            $this->ConfHostIncludeList = $param["ConfHostIncludeList"];
        }

        if (array_key_exists("ConfHostExcludeList",$param) and $param["ConfHostExcludeList"] !== null) {
            $this->ConfHostExcludeList = $param["ConfHostExcludeList"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("ConfClusterType",$param) and $param["ConfClusterType"] !== null) {
            $this->ConfClusterType = $param["ConfClusterType"];
        }

        if (array_key_exists("ConfClusterIncludeList",$param) and $param["ConfClusterIncludeList"] !== null) {
            $this->ConfClusterIncludeList = $param["ConfClusterIncludeList"];
        }

        if (array_key_exists("ConfClusterExcludeList",$param) and $param["ConfClusterExcludeList"] !== null) {
            $this->ConfClusterExcludeList = $param["ConfClusterExcludeList"];
        }

        if (array_key_exists("CategoryConf",$param) and $param["CategoryConf"] !== null) {
            $this->CategoryConf = [];
            foreach ($param["CategoryConf"] as $key => $value){
                $obj = new BaselinePolicySystemCategoryConf();
                $obj->deserialize($value);
                array_push($this->CategoryConf, $obj);
            }
        }

        if (array_key_exists("CustomItemConf",$param) and $param["CustomItemConf"] !== null) {
            $this->CustomItemConf = [];
            foreach ($param["CustomItemConf"] as $key => $value){
                $obj = new BaselineCustomItemConf();
                $obj->deserialize($value);
                array_push($this->CustomItemConf, $obj);
            }
        }

        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("ConfItemCount",$param) and $param["ConfItemCount"] !== null) {
            $this->ConfItemCount = $param["ConfItemCount"];
        }

        if (array_key_exists("ConfHostCount",$param) and $param["ConfHostCount"] !== null) {
            $this->ConfHostCount = $param["ConfHostCount"];
        }

        if (array_key_exists("ConfClusterCount",$param) and $param["ConfClusterCount"] !== null) {
            $this->ConfClusterCount = $param["ConfClusterCount"];
        }

        if (array_key_exists("ScanningTaskID",$param) and $param["ScanningTaskID"] !== null) {
            $this->ScanningTaskID = $param["ScanningTaskID"];
        }

        if (array_key_exists("LatestScanTime",$param) and $param["LatestScanTime"] !== null) {
            $this->LatestScanTime = $param["LatestScanTime"];
        }

        if (array_key_exists("LatestCycleScanTime",$param) and $param["LatestCycleScanTime"] !== null) {
            $this->LatestCycleScanTime = $param["LatestCycleScanTime"];
        }

        if (array_key_exists("TagIDList",$param) and $param["TagIDList"] !== null) {
            $this->TagIDList = $param["TagIDList"];
        }

        if (array_key_exists("CloudTagList",$param) and $param["CloudTagList"] !== null) {
            $this->CloudTagList = $param["CloudTagList"];
        }
    }
}
