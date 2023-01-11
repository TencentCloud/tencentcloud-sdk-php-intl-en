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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCluster request structure.
 *
 * @method string getProductVersion() Obtain The EMR version, such as `EMR-V2.3.0` that indicates the version 2.3.0 of EMR. You can query the EMR version [here](https://intl.cloud.tencent.com/document/product/589/66338?from_cn_redirect=1).
 * @method void setProductVersion(string $ProductVersion) Set The EMR version, such as `EMR-V2.3.0` that indicates the version 2.3.0 of EMR. You can query the EMR version [here](https://intl.cloud.tencent.com/document/product/589/66338?from_cn_redirect=1).
 * @method boolean getEnableSupportHAFlag() Obtain Whether to enable high availability for nodes. Valid values:
<li>`true`: Enable</li>
<li>`false`: Disable</li>
 * @method void setEnableSupportHAFlag(boolean $EnableSupportHAFlag) Set Whether to enable high availability for nodes. Valid values:
<li>`true`: Enable</li>
<li>`false`: Disable</li>
 * @method string getInstanceName() Obtain The instance name.
<li>Length limit: 6–36 characters.</li>
<li>Can contain only Chinese characters, letters, digits, hyphens (-), and underscores (_).</li>
 * @method void setInstanceName(string $InstanceName) Set The instance name.
<li>Length limit: 6–36 characters.</li>
<li>Can contain only Chinese characters, letters, digits, hyphens (-), and underscores (_).</li>
 * @method string getInstanceChargeType() Obtain The instance billing mode. Valid values:
<li>`POSTPAID_BY_HOUR`: The postpaid mode by hour.</li>
 * @method void setInstanceChargeType(string $InstanceChargeType) Set The instance billing mode. Valid values:
<li>`POSTPAID_BY_HOUR`: The postpaid mode by hour.</li>
 * @method LoginSettings getLoginSettings() Obtain The instance login setting. This parameter allows you to set a login password or key for your purchased node.
<li>If a key is set, the password will be used for login to the native component WebUI only.</li>
<li>If no key is set, the password will be used for login to all purchased nodes and the native component WebUI.</li>
 * @method void setLoginSettings(LoginSettings $LoginSettings) Set The instance login setting. This parameter allows you to set a login password or key for your purchased node.
<li>If a key is set, the password will be used for login to the native component WebUI only.</li>
<li>If no key is set, the password will be used for login to all purchased nodes and the native component WebUI.</li>
 * @method SceneSoftwareConfig getSceneSoftwareConfig() Obtain The configuration of cluster application scenario and supported components.
 * @method void setSceneSoftwareConfig(SceneSoftwareConfig $SceneSoftwareConfig) Set The configuration of cluster application scenario and supported components.
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain The details of the monthly subscription, including the instance period and auto-renewal. It is required if `InstanceChargeType` is `PREPAID`.
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set The details of the monthly subscription, including the instance period and auto-renewal. It is required if `InstanceChargeType` is `PREPAID`.
 * @method array getSecurityGroupIds() Obtain The ID of the security group to which the instance belongs, in the format of `sg-xxxxxxxx`. You can call the [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1) API and obtain this parameter from the `SecurityGroupId` field in the response.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set The ID of the security group to which the instance belongs, in the format of `sg-xxxxxxxx`. You can call the [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1) API and obtain this parameter from the `SecurityGroupId` field in the response.
 * @method array getScriptBootstrapActionConfig() Obtain The [Bootstrap action](https://intl.cloud.tencent.com/document/product/589/35656?from_cn_redirect=1) script settings.
 * @method void setScriptBootstrapActionConfig(array $ScriptBootstrapActionConfig) Set The [Bootstrap action](https://intl.cloud.tencent.com/document/product/589/35656?from_cn_redirect=1) script settings.
 * @method string getClientToken() Obtain A unique random token, which is valid for 5 minutes and needs to be specified by the caller to prevent the client from repeatedly creating resources. An example value is `a9a90aa6-751a-41b6-aad6-fae360632808`.
 * @method void setClientToken(string $ClientToken) Set A unique random token, which is valid for 5 minutes and needs to be specified by the caller to prevent the client from repeatedly creating resources. An example value is `a9a90aa6-751a-41b6-aad6-fae360632808`.
 * @method string getNeedMasterWan() Obtain Whether to enable public IP access for master nodes. Valid values:
<li>`NEED_MASTER_WAN`: Enable public IP for master nodes.</li>
<li>`NOT_NEED_MASTER_WAN`: Disable.</li>The public IP is enabled for master nodes by default.
 * @method void setNeedMasterWan(string $NeedMasterWan) Set Whether to enable public IP access for master nodes. Valid values:
<li>`NEED_MASTER_WAN`: Enable public IP for master nodes.</li>
<li>`NOT_NEED_MASTER_WAN`: Disable.</li>The public IP is enabled for master nodes by default.
 * @method boolean getEnableRemoteLoginFlag() Obtain Whether to enable remote login over the public network. It is invalid if `SecurityGroupId` is passed in. It is disabled by default. Valid values:
<li>`true`: Enable</li>
<li>`false`: Disable</li>
 * @method void setEnableRemoteLoginFlag(boolean $EnableRemoteLoginFlag) Set Whether to enable remote login over the public network. It is invalid if `SecurityGroupId` is passed in. It is disabled by default. Valid values:
<li>`true`: Enable</li>
<li>`false`: Disable</li>
 * @method boolean getEnableKerberosFlag() Obtain Whether to enable Kerberos authentication. Valid values:
<li>`true`: Enable</li>
<li>`false` (default): Disable</li>
 * @method void setEnableKerberosFlag(boolean $EnableKerberosFlag) Set Whether to enable Kerberos authentication. Valid values:
<li>`true`: Enable</li>
<li>`false` (default): Disable</li>
 * @method string getCustomConf() Obtain [Custom software configuration](https://intl.cloud.tencent.com/document/product/589/35655?from_cn_redirect=1?from_cn_redirect=1)
 * @method void setCustomConf(string $CustomConf) Set [Custom software configuration](https://intl.cloud.tencent.com/document/product/589/35655?from_cn_redirect=1?from_cn_redirect=1)
 * @method array getTags() Obtain The tag description list. This parameter is used to bind a tag to a resource instance.
 * @method void setTags(array $Tags) Set The tag description list. This parameter is used to bind a tag to a resource instance.
 * @method array getDisasterRecoverGroupIds() Obtain The list of spread placement group IDs. Only one can be specified.
You can call the [DescribeDisasterRecoverGroups](https://intl.cloud.tencent.com/document/product/213/17810?from_cn_redirect=1) API and obtain this parameter from the `DisasterRecoverGroupId` field in the response.
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) Set The list of spread placement group IDs. Only one can be specified.
You can call the [DescribeDisasterRecoverGroups](https://intl.cloud.tencent.com/document/product/213/17810?from_cn_redirect=1) API and obtain this parameter from the `DisasterRecoverGroupId` field in the response.
 * @method boolean getEnableCbsEncryptFlag() Obtain Whether to enable the cluster-level CBS encryption. Valid values:
<li>`true`: Enable</li>
<li>`false` (default): Disable</li>
 * @method void setEnableCbsEncryptFlag(boolean $EnableCbsEncryptFlag) Set Whether to enable the cluster-level CBS encryption. Valid values:
<li>`true`: Enable</li>
<li>`false` (default): Disable</li>
 * @method CustomMetaDBInfo getMetaDBInfo() Obtain The metadatabase information. If `MetaType` is `EMR_NEW_META`, `MetaDataJdbcUrl`, `MetaDataUser`, `MetaDataPass`, and `UnifyMetaInstanceId` are not required.
If `MetaType` is `EMR_EXIT_META`, `UnifyMetaInstanceId` is required.
If `MetaType` is `USER_CUSTOM_META`, `MetaDataJdbcUrl`, `MetaDataUser`, and `MetaDataPass` are required.
 * @method void setMetaDBInfo(CustomMetaDBInfo $MetaDBInfo) Set The metadatabase information. If `MetaType` is `EMR_NEW_META`, `MetaDataJdbcUrl`, `MetaDataUser`, `MetaDataPass`, and `UnifyMetaInstanceId` are not required.
If `MetaType` is `EMR_EXIT_META`, `UnifyMetaInstanceId` is required.
If `MetaType` is `USER_CUSTOM_META`, `MetaDataJdbcUrl`, `MetaDataUser`, and `MetaDataPass` are required.
 * @method array getDependService() Obtain The shared component information.
 * @method void setDependService(array $DependService) Set The shared component information.
 * @method array getZoneResourceConfiguration() Obtain The node resource specs. A spec is specified for each AZ, with the first spec for the primary AZ, the second for the backup AZ, and the third for the arbitrator AZ. If the multi-AZ mode is not enabled, only one spec is required.
 * @method void setZoneResourceConfiguration(array $ZoneResourceConfiguration) Set The node resource specs. A spec is specified for each AZ, with the first spec for the primary AZ, the second for the backup AZ, and the third for the arbitrator AZ. If the multi-AZ mode is not enabled, only one spec is required.
 */
class CreateClusterRequest extends AbstractModel
{
    /**
     * @var string The EMR version, such as `EMR-V2.3.0` that indicates the version 2.3.0 of EMR. You can query the EMR version [here](https://intl.cloud.tencent.com/document/product/589/66338?from_cn_redirect=1).
     */
    public $ProductVersion;

    /**
     * @var boolean Whether to enable high availability for nodes. Valid values:
<li>`true`: Enable</li>
<li>`false`: Disable</li>
     */
    public $EnableSupportHAFlag;

    /**
     * @var string The instance name.
<li>Length limit: 6–36 characters.</li>
<li>Can contain only Chinese characters, letters, digits, hyphens (-), and underscores (_).</li>
     */
    public $InstanceName;

    /**
     * @var string The instance billing mode. Valid values:
<li>`POSTPAID_BY_HOUR`: The postpaid mode by hour.</li>
     */
    public $InstanceChargeType;

    /**
     * @var LoginSettings The instance login setting. This parameter allows you to set a login password or key for your purchased node.
<li>If a key is set, the password will be used for login to the native component WebUI only.</li>
<li>If no key is set, the password will be used for login to all purchased nodes and the native component WebUI.</li>
     */
    public $LoginSettings;

    /**
     * @var SceneSoftwareConfig The configuration of cluster application scenario and supported components.
     */
    public $SceneSoftwareConfig;

    /**
     * @var InstanceChargePrepaid The details of the monthly subscription, including the instance period and auto-renewal. It is required if `InstanceChargeType` is `PREPAID`.
     */
    public $InstanceChargePrepaid;

    /**
     * @var array The ID of the security group to which the instance belongs, in the format of `sg-xxxxxxxx`. You can call the [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1) API and obtain this parameter from the `SecurityGroupId` field in the response.
     */
    public $SecurityGroupIds;

    /**
     * @var array The [Bootstrap action](https://intl.cloud.tencent.com/document/product/589/35656?from_cn_redirect=1) script settings.
     */
    public $ScriptBootstrapActionConfig;

    /**
     * @var string A unique random token, which is valid for 5 minutes and needs to be specified by the caller to prevent the client from repeatedly creating resources. An example value is `a9a90aa6-751a-41b6-aad6-fae360632808`.
     */
    public $ClientToken;

    /**
     * @var string Whether to enable public IP access for master nodes. Valid values:
<li>`NEED_MASTER_WAN`: Enable public IP for master nodes.</li>
<li>`NOT_NEED_MASTER_WAN`: Disable.</li>The public IP is enabled for master nodes by default.
     */
    public $NeedMasterWan;

    /**
     * @var boolean Whether to enable remote login over the public network. It is invalid if `SecurityGroupId` is passed in. It is disabled by default. Valid values:
<li>`true`: Enable</li>
<li>`false`: Disable</li>
     */
    public $EnableRemoteLoginFlag;

    /**
     * @var boolean Whether to enable Kerberos authentication. Valid values:
<li>`true`: Enable</li>
<li>`false` (default): Disable</li>
     */
    public $EnableKerberosFlag;

    /**
     * @var string [Custom software configuration](https://intl.cloud.tencent.com/document/product/589/35655?from_cn_redirect=1?from_cn_redirect=1)
     */
    public $CustomConf;

    /**
     * @var array The tag description list. This parameter is used to bind a tag to a resource instance.
     */
    public $Tags;

    /**
     * @var array The list of spread placement group IDs. Only one can be specified.
You can call the [DescribeDisasterRecoverGroups](https://intl.cloud.tencent.com/document/product/213/17810?from_cn_redirect=1) API and obtain this parameter from the `DisasterRecoverGroupId` field in the response.
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var boolean Whether to enable the cluster-level CBS encryption. Valid values:
<li>`true`: Enable</li>
<li>`false` (default): Disable</li>
     */
    public $EnableCbsEncryptFlag;

    /**
     * @var CustomMetaDBInfo The metadatabase information. If `MetaType` is `EMR_NEW_META`, `MetaDataJdbcUrl`, `MetaDataUser`, `MetaDataPass`, and `UnifyMetaInstanceId` are not required.
If `MetaType` is `EMR_EXIT_META`, `UnifyMetaInstanceId` is required.
If `MetaType` is `USER_CUSTOM_META`, `MetaDataJdbcUrl`, `MetaDataUser`, and `MetaDataPass` are required.
     */
    public $MetaDBInfo;

    /**
     * @var array The shared component information.
     */
    public $DependService;

    /**
     * @var array The node resource specs. A spec is specified for each AZ, with the first spec for the primary AZ, the second for the backup AZ, and the third for the arbitrator AZ. If the multi-AZ mode is not enabled, only one spec is required.
     */
    public $ZoneResourceConfiguration;

    /**
     * @param string $ProductVersion The EMR version, such as `EMR-V2.3.0` that indicates the version 2.3.0 of EMR. You can query the EMR version [here](https://intl.cloud.tencent.com/document/product/589/66338?from_cn_redirect=1).
     * @param boolean $EnableSupportHAFlag Whether to enable high availability for nodes. Valid values:
<li>`true`: Enable</li>
<li>`false`: Disable</li>
     * @param string $InstanceName The instance name.
<li>Length limit: 6–36 characters.</li>
<li>Can contain only Chinese characters, letters, digits, hyphens (-), and underscores (_).</li>
     * @param string $InstanceChargeType The instance billing mode. Valid values:
<li>`POSTPAID_BY_HOUR`: The postpaid mode by hour.</li>
     * @param LoginSettings $LoginSettings The instance login setting. This parameter allows you to set a login password or key for your purchased node.
<li>If a key is set, the password will be used for login to the native component WebUI only.</li>
<li>If no key is set, the password will be used for login to all purchased nodes and the native component WebUI.</li>
     * @param SceneSoftwareConfig $SceneSoftwareConfig The configuration of cluster application scenario and supported components.
     * @param InstanceChargePrepaid $InstanceChargePrepaid The details of the monthly subscription, including the instance period and auto-renewal. It is required if `InstanceChargeType` is `PREPAID`.
     * @param array $SecurityGroupIds The ID of the security group to which the instance belongs, in the format of `sg-xxxxxxxx`. You can call the [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1) API and obtain this parameter from the `SecurityGroupId` field in the response.
     * @param array $ScriptBootstrapActionConfig The [Bootstrap action](https://intl.cloud.tencent.com/document/product/589/35656?from_cn_redirect=1) script settings.
     * @param string $ClientToken A unique random token, which is valid for 5 minutes and needs to be specified by the caller to prevent the client from repeatedly creating resources. An example value is `a9a90aa6-751a-41b6-aad6-fae360632808`.
     * @param string $NeedMasterWan Whether to enable public IP access for master nodes. Valid values:
<li>`NEED_MASTER_WAN`: Enable public IP for master nodes.</li>
<li>`NOT_NEED_MASTER_WAN`: Disable.</li>The public IP is enabled for master nodes by default.
     * @param boolean $EnableRemoteLoginFlag Whether to enable remote login over the public network. It is invalid if `SecurityGroupId` is passed in. It is disabled by default. Valid values:
<li>`true`: Enable</li>
<li>`false`: Disable</li>
     * @param boolean $EnableKerberosFlag Whether to enable Kerberos authentication. Valid values:
<li>`true`: Enable</li>
<li>`false` (default): Disable</li>
     * @param string $CustomConf [Custom software configuration](https://intl.cloud.tencent.com/document/product/589/35655?from_cn_redirect=1?from_cn_redirect=1)
     * @param array $Tags The tag description list. This parameter is used to bind a tag to a resource instance.
     * @param array $DisasterRecoverGroupIds The list of spread placement group IDs. Only one can be specified.
You can call the [DescribeDisasterRecoverGroups](https://intl.cloud.tencent.com/document/product/213/17810?from_cn_redirect=1) API and obtain this parameter from the `DisasterRecoverGroupId` field in the response.
     * @param boolean $EnableCbsEncryptFlag Whether to enable the cluster-level CBS encryption. Valid values:
<li>`true`: Enable</li>
<li>`false` (default): Disable</li>
     * @param CustomMetaDBInfo $MetaDBInfo The metadatabase information. If `MetaType` is `EMR_NEW_META`, `MetaDataJdbcUrl`, `MetaDataUser`, `MetaDataPass`, and `UnifyMetaInstanceId` are not required.
If `MetaType` is `EMR_EXIT_META`, `UnifyMetaInstanceId` is required.
If `MetaType` is `USER_CUSTOM_META`, `MetaDataJdbcUrl`, `MetaDataUser`, and `MetaDataPass` are required.
     * @param array $DependService The shared component information.
     * @param array $ZoneResourceConfiguration The node resource specs. A spec is specified for each AZ, with the first spec for the primary AZ, the second for the backup AZ, and the third for the arbitrator AZ. If the multi-AZ mode is not enabled, only one spec is required.
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
        if (array_key_exists("ProductVersion",$param) and $param["ProductVersion"] !== null) {
            $this->ProductVersion = $param["ProductVersion"];
        }

        if (array_key_exists("EnableSupportHAFlag",$param) and $param["EnableSupportHAFlag"] !== null) {
            $this->EnableSupportHAFlag = $param["EnableSupportHAFlag"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("SceneSoftwareConfig",$param) and $param["SceneSoftwareConfig"] !== null) {
            $this->SceneSoftwareConfig = new SceneSoftwareConfig();
            $this->SceneSoftwareConfig->deserialize($param["SceneSoftwareConfig"]);
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("ScriptBootstrapActionConfig",$param) and $param["ScriptBootstrapActionConfig"] !== null) {
            $this->ScriptBootstrapActionConfig = [];
            foreach ($param["ScriptBootstrapActionConfig"] as $key => $value){
                $obj = new ScriptBootstrapActionConfig();
                $obj->deserialize($value);
                array_push($this->ScriptBootstrapActionConfig, $obj);
            }
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("NeedMasterWan",$param) and $param["NeedMasterWan"] !== null) {
            $this->NeedMasterWan = $param["NeedMasterWan"];
        }

        if (array_key_exists("EnableRemoteLoginFlag",$param) and $param["EnableRemoteLoginFlag"] !== null) {
            $this->EnableRemoteLoginFlag = $param["EnableRemoteLoginFlag"];
        }

        if (array_key_exists("EnableKerberosFlag",$param) and $param["EnableKerberosFlag"] !== null) {
            $this->EnableKerberosFlag = $param["EnableKerberosFlag"];
        }

        if (array_key_exists("CustomConf",$param) and $param["CustomConf"] !== null) {
            $this->CustomConf = $param["CustomConf"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("DisasterRecoverGroupIds",$param) and $param["DisasterRecoverGroupIds"] !== null) {
            $this->DisasterRecoverGroupIds = $param["DisasterRecoverGroupIds"];
        }

        if (array_key_exists("EnableCbsEncryptFlag",$param) and $param["EnableCbsEncryptFlag"] !== null) {
            $this->EnableCbsEncryptFlag = $param["EnableCbsEncryptFlag"];
        }

        if (array_key_exists("MetaDBInfo",$param) and $param["MetaDBInfo"] !== null) {
            $this->MetaDBInfo = new CustomMetaDBInfo();
            $this->MetaDBInfo->deserialize($param["MetaDBInfo"]);
        }

        if (array_key_exists("DependService",$param) and $param["DependService"] !== null) {
            $this->DependService = [];
            foreach ($param["DependService"] as $key => $value){
                $obj = new DependService();
                $obj->deserialize($value);
                array_push($this->DependService, $obj);
            }
        }

        if (array_key_exists("ZoneResourceConfiguration",$param) and $param["ZoneResourceConfiguration"] !== null) {
            $this->ZoneResourceConfiguration = [];
            foreach ($param["ZoneResourceConfiguration"] as $key => $value){
                $obj = new ZoneResourceConfiguration();
                $obj->deserialize($value);
                array_push($this->ZoneResourceConfiguration, $obj);
            }
        }
    }
}
