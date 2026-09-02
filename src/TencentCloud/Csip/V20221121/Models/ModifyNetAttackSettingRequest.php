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
 * ModifyNetAttackSetting request structure.
 *
 * @method integer getNetAttackEnable() Obtain <p>0: disable network attack detection; 1: enable network attack detection</p>
 * @method void setNetAttackEnable(integer $NetAttackEnable) Set <p>0: disable network attack detection; 1: enable network attack detection</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method integer getNetAttackAlarmStatus() Obtain <p>0: new warning events pending processing by default; 1: new warning events processed by default; 3: new warning events ignored by default</p>
 * @method void setNetAttackAlarmStatus(integer $NetAttackAlarmStatus) Set <p>0: new warning events pending processing by default; 1: new warning events processed by default; 3: new warning events ignored by default</p>
 * @method integer getAutoInclude() Obtain <p>Automatic inclusion of new assets: 0 means not included, and 1 means included</p>
 * @method void setAutoInclude(integer $AutoInclude) Set <p>Automatic inclusion of new assets: 0 means not included, and 1 means included</p>
 * @method integer getCWPScope() Obtain <p>Host range: 0 - specify 1 - all 2 - Pro Edition 3 - Flagship Edition 4 - Pro + Flagship</p>
 * @method void setCWPScope(integer $CWPScope) Set <p>Host range: 0 - specify 1 - all 2 - Pro Edition 3 - Flagship Edition 4 - Pro + Flagship</p>
 * @method array getInstanceIDsWithAppId() Obtain <p>Specify the host list (used when CWPScope=0)</p>
 * @method void setInstanceIDsWithAppId(array $InstanceIDsWithAppId) Set <p>Specify the host list (used when CWPScope=0)</p>
 * @method array getExcludeInstanceIDsWithAppId() Obtain <p>Host exclusion list</p>
 * @method void setExcludeInstanceIDsWithAppId(array $ExcludeInstanceIDsWithAppId) Set <p>Host exclusion list</p>
 * @method array getTagIDs() Obtain <p>Tag ID list</p>
 * @method void setTagIDs(array $TagIDs) Set <p>Tag ID list</p>
 * @method integer getTCSSScope() Obtain <p>Container scope: 0-within specified clusters 1-all clusters</p>
 * @method void setTCSSScope(integer $TCSSScope) Set <p>Container scope: 0-within specified clusters 1-all clusters</p>
 * @method array getClusterIDsWithAppId() Obtain <p>Specify the cluster list (used when TCSSScope=0)</p>
 * @method void setClusterIDsWithAppId(array $ClusterIDsWithAppId) Set <p>Specify the cluster list (used when TCSSScope=0)</p>
 * @method array getExcludeClusterIDsWithAppId() Obtain <p>Cluster exclusion list</p>
 * @method void setExcludeClusterIDsWithAppId(array $ExcludeClusterIDsWithAppId) Set <p>Cluster exclusion list</p>
 */
class ModifyNetAttackSettingRequest extends AbstractModel
{
    /**
     * @var integer <p>0: disable network attack detection; 1: enable network attack detection</p>
     */
    public $NetAttackEnable;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>0: new warning events pending processing by default; 1: new warning events processed by default; 3: new warning events ignored by default</p>
     */
    public $NetAttackAlarmStatus;

    /**
     * @var integer <p>Automatic inclusion of new assets: 0 means not included, and 1 means included</p>
     */
    public $AutoInclude;

    /**
     * @var integer <p>Host range: 0 - specify 1 - all 2 - Pro Edition 3 - Flagship Edition 4 - Pro + Flagship</p>
     */
    public $CWPScope;

    /**
     * @var array <p>Specify the host list (used when CWPScope=0)</p>
     */
    public $InstanceIDsWithAppId;

    /**
     * @var array <p>Host exclusion list</p>
     */
    public $ExcludeInstanceIDsWithAppId;

    /**
     * @var array <p>Tag ID list</p>
     */
    public $TagIDs;

    /**
     * @var integer <p>Container scope: 0-within specified clusters 1-all clusters</p>
     */
    public $TCSSScope;

    /**
     * @var array <p>Specify the cluster list (used when TCSSScope=0)</p>
     */
    public $ClusterIDsWithAppId;

    /**
     * @var array <p>Cluster exclusion list</p>
     */
    public $ExcludeClusterIDsWithAppId;

    /**
     * @param integer $NetAttackEnable <p>0: disable network attack detection; 1: enable network attack detection</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param integer $NetAttackAlarmStatus <p>0: new warning events pending processing by default; 1: new warning events processed by default; 3: new warning events ignored by default</p>
     * @param integer $AutoInclude <p>Automatic inclusion of new assets: 0 means not included, and 1 means included</p>
     * @param integer $CWPScope <p>Host range: 0 - specify 1 - all 2 - Pro Edition 3 - Flagship Edition 4 - Pro + Flagship</p>
     * @param array $InstanceIDsWithAppId <p>Specify the host list (used when CWPScope=0)</p>
     * @param array $ExcludeInstanceIDsWithAppId <p>Host exclusion list</p>
     * @param array $TagIDs <p>Tag ID list</p>
     * @param integer $TCSSScope <p>Container scope: 0-within specified clusters 1-all clusters</p>
     * @param array $ClusterIDsWithAppId <p>Specify the cluster list (used when TCSSScope=0)</p>
     * @param array $ExcludeClusterIDsWithAppId <p>Cluster exclusion list</p>
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
        if (array_key_exists("NetAttackEnable",$param) and $param["NetAttackEnable"] !== null) {
            $this->NetAttackEnable = $param["NetAttackEnable"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("NetAttackAlarmStatus",$param) and $param["NetAttackAlarmStatus"] !== null) {
            $this->NetAttackAlarmStatus = $param["NetAttackAlarmStatus"];
        }

        if (array_key_exists("AutoInclude",$param) and $param["AutoInclude"] !== null) {
            $this->AutoInclude = $param["AutoInclude"];
        }

        if (array_key_exists("CWPScope",$param) and $param["CWPScope"] !== null) {
            $this->CWPScope = $param["CWPScope"];
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

        if (array_key_exists("TagIDs",$param) and $param["TagIDs"] !== null) {
            $this->TagIDs = $param["TagIDs"];
        }

        if (array_key_exists("TCSSScope",$param) and $param["TCSSScope"] !== null) {
            $this->TCSSScope = $param["TCSSScope"];
        }

        if (array_key_exists("ClusterIDsWithAppId",$param) and $param["ClusterIDsWithAppId"] !== null) {
            $this->ClusterIDsWithAppId = [];
            foreach ($param["ClusterIDsWithAppId"] as $key => $value){
                $obj = new ClusterIDWithAppIdItem();
                $obj->deserialize($value);
                array_push($this->ClusterIDsWithAppId, $obj);
            }
        }

        if (array_key_exists("ExcludeClusterIDsWithAppId",$param) and $param["ExcludeClusterIDsWithAppId"] !== null) {
            $this->ExcludeClusterIDsWithAppId = [];
            foreach ($param["ExcludeClusterIDsWithAppId"] as $key => $value){
                $obj = new ClusterIDWithAppIdItem();
                $obj->deserialize($value);
                array_push($this->ExcludeClusterIDsWithAppId, $obj);
            }
        }
    }
}
