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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeDBInstanceEngineVersion request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID, in the format such as cdb-c1nl9rpv or cdbro-c1nl9rpv. This matches the instance ID displayed on the TencentDB console. You can obtain it through the <a href="https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1">Query Instance List</a> API, with its value being the InstanceId field in the output parameter.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID, in the format such as cdb-c1nl9rpv or cdbro-c1nl9rpv. This matches the instance ID displayed on the TencentDB console. You can obtain it through the <a href="https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1">Query Instance List</a> API, with its value being the InstanceId field in the output parameter.</p>
 * @method string getEngineVersion() Obtain <p>Database engine version of the primary instance. Supported values include 5.6, 5.7, 8.0.<br>Description: Cross-version upgrade is not supported. Downgrade is not supported after upgrade.</p>
 * @method void setEngineVersion(string $EngineVersion) Set <p>Database engine version of the primary instance. Supported values include 5.6, 5.7, 8.0.<br>Description: Cross-version upgrade is not supported. Downgrade is not supported after upgrade.</p>
 * @method integer getWaitSwitch() Obtain <p>The way to switch to a new instance defaults to 0. Supported values include: 0 - switch immediately, 1 - switch in a time window. When the value is 1, during the upgrade process, the switchover to a new instance will be performed in the time window, or the user can proactively call the API <a href="https://www.tencentcloud.com/document/product/236/15864?from_cn_redirect=1">switch to a new instance</a> to trigger the process.</p>
 * @method void setWaitSwitch(integer $WaitSwitch) Set <p>The way to switch to a new instance defaults to 0. Supported values include: 0 - switch immediately, 1 - switch in a time window. When the value is 1, during the upgrade process, the switchover to a new instance will be performed in the time window, or the user can proactively call the API <a href="https://www.tencentcloud.com/document/product/236/15864?from_cn_redirect=1">switch to a new instance</a> to trigger the process.</p>
 * @method integer getUpgradeSubversion() Obtain <p>Whether to upgrade the kernel subversion. Supported values: 1 - upgrade kernel subversion; 0 - upgrade database engine version. No default value. Specify the version type to upgrade.</p>
 * @method void setUpgradeSubversion(integer $UpgradeSubversion) Set <p>Whether to upgrade the kernel subversion. Supported values: 1 - upgrade kernel subversion; 0 - upgrade database engine version. No default value. Specify the version type to upgrade.</p>
 * @method integer getMaxDelayTime() Obtain <p>Delay threshold. Value ranges from 1 to 10. No default value. When not specified, the delay threshold is 0, which means the delay threshold is not set.</p>
 * @method void setMaxDelayTime(integer $MaxDelayTime) Set <p>Delay threshold. Value ranges from 1 to 10. No default value. When not specified, the delay threshold is 0, which means the delay threshold is not set.</p>
 * @method integer getIgnoreErrKeyword() Obtain <p>Whether to ignore keyword errors when upgrading from 5.7 to 8.0. The value ranges from 0 to 1. 1 means ignored, 0 means not ignored. No default value. Not specified means no action taken.</p>
 * @method void setIgnoreErrKeyword(integer $IgnoreErrKeyword) Set <p>Whether to ignore keyword errors when upgrading from 5.7 to 8.0. The value ranges from 0 to 1. 1 means ignored, 0 means not ignored. No default value. Not specified means no action taken.</p>
 * @method array getParamList() Obtain <p>Upgrade support for specified parameters</p>
 * @method void setParamList(array $ParamList) Set <p>Upgrade support for specified parameters</p>
 */
class UpgradeDBInstanceEngineVersionRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID, in the format such as cdb-c1nl9rpv or cdbro-c1nl9rpv. This matches the instance ID displayed on the TencentDB console. You can obtain it through the <a href="https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1">Query Instance List</a> API, with its value being the InstanceId field in the output parameter.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Database engine version of the primary instance. Supported values include 5.6, 5.7, 8.0.<br>Description: Cross-version upgrade is not supported. Downgrade is not supported after upgrade.</p>
     */
    public $EngineVersion;

    /**
     * @var integer <p>The way to switch to a new instance defaults to 0. Supported values include: 0 - switch immediately, 1 - switch in a time window. When the value is 1, during the upgrade process, the switchover to a new instance will be performed in the time window, or the user can proactively call the API <a href="https://www.tencentcloud.com/document/product/236/15864?from_cn_redirect=1">switch to a new instance</a> to trigger the process.</p>
     */
    public $WaitSwitch;

    /**
     * @var integer <p>Whether to upgrade the kernel subversion. Supported values: 1 - upgrade kernel subversion; 0 - upgrade database engine version. No default value. Specify the version type to upgrade.</p>
     */
    public $UpgradeSubversion;

    /**
     * @var integer <p>Delay threshold. Value ranges from 1 to 10. No default value. When not specified, the delay threshold is 0, which means the delay threshold is not set.</p>
     */
    public $MaxDelayTime;

    /**
     * @var integer <p>Whether to ignore keyword errors when upgrading from 5.7 to 8.0. The value ranges from 0 to 1. 1 means ignored, 0 means not ignored. No default value. Not specified means no action taken.</p>
     */
    public $IgnoreErrKeyword;

    /**
     * @var array <p>Upgrade support for specified parameters</p>
     */
    public $ParamList;

    /**
     * @param string $InstanceId <p>Instance ID, in the format such as cdb-c1nl9rpv or cdbro-c1nl9rpv. This matches the instance ID displayed on the TencentDB console. You can obtain it through the <a href="https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1">Query Instance List</a> API, with its value being the InstanceId field in the output parameter.</p>
     * @param string $EngineVersion <p>Database engine version of the primary instance. Supported values include 5.6, 5.7, 8.0.<br>Description: Cross-version upgrade is not supported. Downgrade is not supported after upgrade.</p>
     * @param integer $WaitSwitch <p>The way to switch to a new instance defaults to 0. Supported values include: 0 - switch immediately, 1 - switch in a time window. When the value is 1, during the upgrade process, the switchover to a new instance will be performed in the time window, or the user can proactively call the API <a href="https://www.tencentcloud.com/document/product/236/15864?from_cn_redirect=1">switch to a new instance</a> to trigger the process.</p>
     * @param integer $UpgradeSubversion <p>Whether to upgrade the kernel subversion. Supported values: 1 - upgrade kernel subversion; 0 - upgrade database engine version. No default value. Specify the version type to upgrade.</p>
     * @param integer $MaxDelayTime <p>Delay threshold. Value ranges from 1 to 10. No default value. When not specified, the delay threshold is 0, which means the delay threshold is not set.</p>
     * @param integer $IgnoreErrKeyword <p>Whether to ignore keyword errors when upgrading from 5.7 to 8.0. The value ranges from 0 to 1. 1 means ignored, 0 means not ignored. No default value. Not specified means no action taken.</p>
     * @param array $ParamList <p>Upgrade support for specified parameters</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("WaitSwitch",$param) and $param["WaitSwitch"] !== null) {
            $this->WaitSwitch = $param["WaitSwitch"];
        }

        if (array_key_exists("UpgradeSubversion",$param) and $param["UpgradeSubversion"] !== null) {
            $this->UpgradeSubversion = $param["UpgradeSubversion"];
        }

        if (array_key_exists("MaxDelayTime",$param) and $param["MaxDelayTime"] !== null) {
            $this->MaxDelayTime = $param["MaxDelayTime"];
        }

        if (array_key_exists("IgnoreErrKeyword",$param) and $param["IgnoreErrKeyword"] !== null) {
            $this->IgnoreErrKeyword = $param["IgnoreErrKeyword"];
        }

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new UpgradeEngineVersionParams();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }
    }
}
