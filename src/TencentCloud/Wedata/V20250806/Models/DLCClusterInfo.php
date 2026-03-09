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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * dlc cluster information.
 *
 * @method array getComputeResources() Obtain dlc resource name (the role Uin needs to be added to dlc, otherwise the resource may be unavailable).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComputeResources(array $ComputeResources) Set dlc resource name (the role Uin needs to be added to dlc, otherwise the resource may be unavailable).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain dlc region.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set dlc region.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDefaultDatabase() Obtain Specify the default database for the DLC cluster.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDefaultDatabase(string $DefaultDatabase) Set Specify the default database for the DLC cluster.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStandardModeEnvTag() Obtain Cluster configuration tag (only applicable to projects in standard mode and required in standard mode). valid values:.
-Prod (live production environment).
-Dev (development environment).
 * @method void setStandardModeEnvTag(string $StandardModeEnvTag) Set Cluster configuration tag (only applicable to projects in standard mode and required in standard mode). valid values:.
-Prod (live production environment).
-Dev (development environment).
 * @method string getAccessAccount() Obtain Access account (only applicable to projects in standard mode and required in standard mode), used for submitting dlc tasks.
Use a designated sub-account and set permissions to the corresponding database and table for the sub-account. task owner mode is prone to cause task failure after the person in charge leaves. master account mode is not easy to control permissions when permissions across multiple projects are different.

Enumeration value:.
-TASK_RUNNER (task owner).
-OWNER (master account mode).
-SUB (sub-account mode).
 * @method void setAccessAccount(string $AccessAccount) Set Access account (only applicable to projects in standard mode and required in standard mode), used for submitting dlc tasks.
Use a designated sub-account and set permissions to the corresponding database and table for the sub-account. task owner mode is prone to cause task failure after the person in charge leaves. master account mode is not easy to control permissions when permissions across multiple projects are different.

Enumeration value:.
-TASK_RUNNER (task owner).
-OWNER (master account mode).
-SUB (sub-account mode).
 * @method string getSubAccountUin() Obtain Sub-Account id (only applicable to projects in standard mode). when AccessAccount is in sub-account mode, the designated sub-account id information is required. other modes do not require specifying.
 * @method void setSubAccountUin(string $SubAccountUin) Set Sub-Account id (only applicable to projects in standard mode). when AccessAccount is in sub-account mode, the designated sub-account id information is required. other modes do not require specifying.
 */
class DLCClusterInfo extends AbstractModel
{
    /**
     * @var array dlc resource name (the role Uin needs to be added to dlc, otherwise the resource may be unavailable).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ComputeResources;

    /**
     * @var string dlc region.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var string Specify the default database for the DLC cluster.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DefaultDatabase;

    /**
     * @var string Cluster configuration tag (only applicable to projects in standard mode and required in standard mode). valid values:.
-Prod (live production environment).
-Dev (development environment).
     */
    public $StandardModeEnvTag;

    /**
     * @var string Access account (only applicable to projects in standard mode and required in standard mode), used for submitting dlc tasks.
Use a designated sub-account and set permissions to the corresponding database and table for the sub-account. task owner mode is prone to cause task failure after the person in charge leaves. master account mode is not easy to control permissions when permissions across multiple projects are different.

Enumeration value:.
-TASK_RUNNER (task owner).
-OWNER (master account mode).
-SUB (sub-account mode).
     */
    public $AccessAccount;

    /**
     * @var string Sub-Account id (only applicable to projects in standard mode). when AccessAccount is in sub-account mode, the designated sub-account id information is required. other modes do not require specifying.
     */
    public $SubAccountUin;

    /**
     * @param array $ComputeResources dlc resource name (the role Uin needs to be added to dlc, otherwise the resource may be unavailable).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Region dlc region.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DefaultDatabase Specify the default database for the DLC cluster.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StandardModeEnvTag Cluster configuration tag (only applicable to projects in standard mode and required in standard mode). valid values:.
-Prod (live production environment).
-Dev (development environment).
     * @param string $AccessAccount Access account (only applicable to projects in standard mode and required in standard mode), used for submitting dlc tasks.
Use a designated sub-account and set permissions to the corresponding database and table for the sub-account. task owner mode is prone to cause task failure after the person in charge leaves. master account mode is not easy to control permissions when permissions across multiple projects are different.

Enumeration value:.
-TASK_RUNNER (task owner).
-OWNER (master account mode).
-SUB (sub-account mode).
     * @param string $SubAccountUin Sub-Account id (only applicable to projects in standard mode). when AccessAccount is in sub-account mode, the designated sub-account id information is required. other modes do not require specifying.
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
        if (array_key_exists("ComputeResources",$param) and $param["ComputeResources"] !== null) {
            $this->ComputeResources = $param["ComputeResources"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("DefaultDatabase",$param) and $param["DefaultDatabase"] !== null) {
            $this->DefaultDatabase = $param["DefaultDatabase"];
        }

        if (array_key_exists("StandardModeEnvTag",$param) and $param["StandardModeEnvTag"] !== null) {
            $this->StandardModeEnvTag = $param["StandardModeEnvTag"];
        }

        if (array_key_exists("AccessAccount",$param) and $param["AccessAccount"] !== null) {
            $this->AccessAccount = $param["AccessAccount"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }
    }
}
