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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCluster request structure.
 *
 * @method string getProductVersion() Obtain <p>EMR product version name, for example, EMR-V2.3.0 (EMR 2.3.0). Currently, product version names can be queried. For details, see <a href="https://www.tencentcloud.com/document/product/589/66338?from_cn_redirect=1">Product Version Name</a>.</p>
 * @method void setProductVersion(string $ProductVersion) Set <p>EMR product version name, for example, EMR-V2.3.0 (EMR 2.3.0). Currently, product version names can be queried. For details, see <a href="https://www.tencentcloud.com/document/product/589/66338?from_cn_redirect=1">Product Version Name</a>.</p>
 * @method boolean getEnableSupportHAFlag() Obtain <p>Whether to enable high availability for the node. Valid values:</p><li>true: yes</li><li>false: no</li>
 * @method void setEnableSupportHAFlag(boolean $EnableSupportHAFlag) Set <p>Whether to enable high availability for the node. Valid values:</p><li>true: yes</li><li>false: no</li>
 * @method string getInstanceName() Obtain <p>Instance name.</p><li>The value can contain 6 to 36 characters.</li><li>Only Chinese characters, letters, digits, hyphens (-), and underscores (_) are allowed.</li>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name.</p><li>The value can contain 6 to 36 characters.</li><li>Only Chinese characters, letters, digits, hyphens (-), and underscores (_) are allowed.</li>
 * @method string getInstanceChargeType() Obtain <p>Instance billing mode. Valid values:</p><li>PREPAID: prepaid, that is, yearly/monthly subscription</li><li>POSTPAID_BY_HOUR: pay-as-you-go on an hourly basis</li>
 * @method void setInstanceChargeType(string $InstanceChargeType) Set <p>Instance billing mode. Valid values:</p><li>PREPAID: prepaid, that is, yearly/monthly subscription</li><li>POSTPAID_BY_HOUR: pay-as-you-go on an hourly basis</li>
 * @method LoginSettings getLoginSettings() Obtain <p>Instance login settings. This parameter is used to set the login method for the purchased node, either the password or key.</p><li>When a key is set, the password is only used to log in to the native WebUI shortcut entry for the component.</li><li>When no key is set, the password is used to log in to the purchased node as well as the native WebUI shortcut entry for the component.</li>
 * @method void setLoginSettings(LoginSettings $LoginSettings) Set <p>Instance login settings. This parameter is used to set the login method for the purchased node, either the password or key.</p><li>When a key is set, the password is only used to log in to the native WebUI shortcut entry for the component.</li><li>When no key is set, the password is used to log in to the purchased node as well as the native WebUI shortcut entry for the component.</li>
 * @method SceneSoftwareConfig getSceneSoftwareConfig() Obtain <p>Cluster application scenario and supported deployment component configuration.</p>
 * @method void setSceneSoftwareConfig(SceneSoftwareConfig $SceneSoftwareConfig) Set <p>Cluster application scenario and supported deployment component configuration.</p>
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain <p>Parameter settings related to yearly/monthly subscription. This parameter can be used to specify the purchase duration of a yearly/monthly subscription instance, whether to enable auto-renewal, and other attributes. This parameter is required if the billing mode of the specified instance is prepaid.</p>
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set <p>Parameter settings related to yearly/monthly subscription. This parameter can be used to specify the purchase duration of a yearly/monthly subscription instance, whether to enable auto-renewal, and other attributes. This parameter is required if the billing mode of the specified instance is prepaid.</p>
 * @method array getSecurityGroupIds() Obtain <p>ID of the security group to which the instance belongs, for example, sg-xxxxxxxx. This parameter can be obtained by calling the SecurityGroupId field in the response result of <a href="https://www.tencentcloud.com/document/api/215/15808?from_cn_redirect=1">DescribeSecurityGroups</a>.</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set <p>ID of the security group to which the instance belongs, for example, sg-xxxxxxxx. This parameter can be obtained by calling the SecurityGroupId field in the response result of <a href="https://www.tencentcloud.com/document/api/215/15808?from_cn_redirect=1">DescribeSecurityGroups</a>.</p>
 * @method array getScriptBootstrapActionConfig() Obtain <p><a href="https://www.tencentcloud.com/document/product/589/35656?from_cn_redirect=1">Bootstrap operation</a> script settings.</p>
 * @method void setScriptBootstrapActionConfig(array $ScriptBootstrapActionConfig) Set <p><a href="https://www.tencentcloud.com/document/product/589/35656?from_cn_redirect=1">Bootstrap operation</a> script settings.</p>
 * @method string getClientToken() Obtain <p>Unique random identifier with a time-to-live of 5 minutes, which needs to be specified by the caller to prevent the client from repeatedly creating resources, for example, a9a90aa6-<strong><strong>-</strong></strong>-****-fae360632808.</p>
 * @method void setClientToken(string $ClientToken) Set <p>Unique random identifier with a time-to-live of 5 minutes, which needs to be specified by the caller to prevent the client from repeatedly creating resources, for example, a9a90aa6-<strong><strong>-</strong></strong>-****-fae360632808.</p>
 * @method string getNeedMasterWan() Obtain <p>Whether to enable public network access for the cluster Master node. Valid values:</p><li>NEED_MASTER_WAN: yes</li><li>NOT_NEED_MASTER_WAN: no</li>By default, public network access is enabled for the cluster Master node.
 * @method void setNeedMasterWan(string $NeedMasterWan) Set <p>Whether to enable public network access for the cluster Master node. Valid values:</p><li>NEED_MASTER_WAN: yes</li><li>NOT_NEED_MASTER_WAN: no</li>By default, public network access is enabled for the cluster Master node.
 * @method boolean getEnableRemoteLoginFlag() Obtain <p>Whether to enable remote login in the public network. (When SecurityGroupId is not empty, this parameter is invalid.) If this parameter is left empty, it is disabled by default. Valid values:</p><li>true: enable</li><li>false: disable</li>
 * @method void setEnableRemoteLoginFlag(boolean $EnableRemoteLoginFlag) Set <p>Whether to enable remote login in the public network. (When SecurityGroupId is not empty, this parameter is invalid.) If this parameter is left empty, it is disabled by default. Valid values:</p><li>true: enable</li><li>false: disable</li>
 * @method boolean getEnableKerberosFlag() Obtain <p>Whether to enable Kerberos authentication. It is disabled by default. Valid values:</p><li>true: enabled</li><li>false: disabled</li>
 * @method void setEnableKerberosFlag(boolean $EnableKerberosFlag) Set <p>Whether to enable Kerberos authentication. It is disabled by default. Valid values:</p><li>true: enabled</li><li>false: disabled</li>
 * @method string getCustomConf() Obtain <p><a href="https://www.tencentcloud.com/document/product/589/35655?from_cn_redirect=1?from_cn_redirect=1">Custom software configuration.</a></p>
 * @method void setCustomConf(string $CustomConf) Set <p><a href="https://www.tencentcloud.com/document/product/589/35655?from_cn_redirect=1?from_cn_redirect=1">Custom software configuration.</a></p>
 * @method array getTags() Obtain <p>List of tag descriptions. When this parameter is specified, tags are bound to the corresponding instance.</p>
 * @method void setTags(array $Tags) Set <p>List of tag descriptions. When this parameter is specified, tags are bound to the corresponding instance.</p>
 * @method array getDisasterRecoverGroupIds() Obtain <p>List of dispersed placement group IDs. Currently, only one ID can be specified.<br>This parameter can be obtained by calling the DisasterRecoverGroupId field in the response result of <a href="https://www.tencentcloud.com/document/product/213/17810?from_cn_redirect=1">DescribeDisasterRecoverGroups</a>.</p>
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) Set <p>List of dispersed placement group IDs. Currently, only one ID can be specified.<br>This parameter can be obtained by calling the DisasterRecoverGroupId field in the response result of <a href="https://www.tencentcloud.com/document/product/213/17810?from_cn_redirect=1">DescribeDisasterRecoverGroups</a>.</p>
 * @method boolean getEnableCbsEncryptFlag() Obtain <p>Whether to enable cluster-level CBS encryption. It is not encrypted by default. Valid values:</p><li>true: encrypted</li><li>false: not encrypted</li>
 * @method void setEnableCbsEncryptFlag(boolean $EnableCbsEncryptFlag) Set <p>Whether to enable cluster-level CBS encryption. It is not encrypted by default. Valid values:</p><li>true: encrypted</li><li>false: not encrypted</li>
 * @method CustomMetaDBInfo getMetaDBInfo() Obtain <p>MetaDB information. When MetaType is set to EMR_NEW_META, MetaDataJdbcUrl, MetaDataUser, MetaDataPass, and UnifyMetaInstanceId can be left empty.<br>When MetaType is set to EMR_EXIT_META, set UnifyMetaInstanceId.<br>When MetaType is set to USER_CUSTOM_META, set MetaDataJdbcUrl, MetaDataUser, and MetaDataPass.</p>
 * @method void setMetaDBInfo(CustomMetaDBInfo $MetaDBInfo) Set <p>MetaDB information. When MetaType is set to EMR_NEW_META, MetaDataJdbcUrl, MetaDataUser, MetaDataPass, and UnifyMetaInstanceId can be left empty.<br>When MetaType is set to EMR_EXIT_META, set UnifyMetaInstanceId.<br>When MetaType is set to USER_CUSTOM_META, set MetaDataJdbcUrl, MetaDataUser, and MetaDataPass.</p>
 * @method array getDependService() Obtain <p>Shared component information.</p>
 * @method void setDependService(array $DependService) Set <p>Shared component information.</p>
 * @method array getZoneResourceConfiguration() Obtain <p>Specifications of node resources. Set one for each AZ. The first is the primary AZ, the second is the secondary AZ, and the third is the arbitration AZ. If cross-AZ is disabled, the length only needs to be 1.</p>
 * @method void setZoneResourceConfiguration(array $ZoneResourceConfiguration) Set <p>Specifications of node resources. Set one for each AZ. The first is the primary AZ, the second is the secondary AZ, and the third is the arbitration AZ. If cross-AZ is disabled, the length only needs to be 1.</p>
 * @method string getCosBucket() Obtain <p>COS bucket path, which is used when a StarRocks compute-storage separation cluster is created.</p>
 * @method void setCosBucket(string $CosBucket) Set <p>COS bucket path, which is used when a StarRocks compute-storage separation cluster is created.</p>
 * @method array getNodeMarks() Obtain <p>Node flag information, which is currently only provided for the Terraform platform.</p>
 * @method void setNodeMarks(array $NodeMarks) Set <p>Node flag information, which is currently only provided for the Terraform platform.</p>
 * @method string getLoadBalancerId() Obtain <p>clb id</p>
 * @method void setLoadBalancerId(string $LoadBalancerId) Set <p>clb id</p>
 * @method string getDefaultMetaVersion() Obtain <p>Database version. Valid values: mysql8/tdsql8/mysql5.</p>
 * @method void setDefaultMetaVersion(string $DefaultMetaVersion) Set <p>Database version. Valid values: mysql8/tdsql8/mysql5.</p>
 * @method integer getNeedCdbAudit() Obtain <p>Whether database audit is enabled.</p>
 * @method void setNeedCdbAudit(integer $NeedCdbAudit) Set <p>Whether database audit is enabled.</p>
 * @method string getSgIP() Obtain <p>Source IP address, which is specified in the security group.</p>
 * @method void setSgIP(string $SgIP) Set <p>Source IP address, which is specified in the security group.</p>
 * @method integer getPartitionNumber() Obtain <p>Partition of a partition placement group.</p>
 * @method void setPartitionNumber(integer $PartitionNumber) Set <p>Partition of a partition placement group.</p>
 * @method integer getWebUiVersion() Obtain <p>Service UI address.</p><p>Enumeration values:</p><ul><li>0: Service UI address. Only one service UI address is returned.</li><li>1: Service UI address. If the service has multiple UI addresses, all results are returned, such as Impalad, StateStore, and Catalogd of Impala.</li></ul><p>Default value: 0.</p>
 * @method void setWebUiVersion(integer $WebUiVersion) Set <p>Service UI address.</p><p>Enumeration values:</p><ul><li>0: Service UI address. Only one service UI address is returned.</li><li>1: Service UI address. If the service has multiple UI addresses, all results are returned, such as Impalad, StateStore, and Catalogd of Impala.</li></ul><p>Default value: 0.</p>
 * @method boolean getEnableCbsSysEncryptFlag() Obtain <p>Whether the system disk is encrypted.</p>
 * @method void setEnableCbsSysEncryptFlag(boolean $EnableCbsSysEncryptFlag) Set <p>Whether the system disk is encrypted.</p>
 * @method array getMetaDBGroupInfo() Obtain <p>Custom MetaDB data.</p>
 * @method void setMetaDBGroupInfo(array $MetaDBGroupInfo) Set <p>Custom MetaDB data.</p>
 */
class CreateClusterRequest extends AbstractModel
{
    /**
     * @var string <p>EMR product version name, for example, EMR-V2.3.0 (EMR 2.3.0). Currently, product version names can be queried. For details, see <a href="https://www.tencentcloud.com/document/product/589/66338?from_cn_redirect=1">Product Version Name</a>.</p>
     */
    public $ProductVersion;

    /**
     * @var boolean <p>Whether to enable high availability for the node. Valid values:</p><li>true: yes</li><li>false: no</li>
     */
    public $EnableSupportHAFlag;

    /**
     * @var string <p>Instance name.</p><li>The value can contain 6 to 36 characters.</li><li>Only Chinese characters, letters, digits, hyphens (-), and underscores (_) are allowed.</li>
     */
    public $InstanceName;

    /**
     * @var string <p>Instance billing mode. Valid values:</p><li>PREPAID: prepaid, that is, yearly/monthly subscription</li><li>POSTPAID_BY_HOUR: pay-as-you-go on an hourly basis</li>
     */
    public $InstanceChargeType;

    /**
     * @var LoginSettings <p>Instance login settings. This parameter is used to set the login method for the purchased node, either the password or key.</p><li>When a key is set, the password is only used to log in to the native WebUI shortcut entry for the component.</li><li>When no key is set, the password is used to log in to the purchased node as well as the native WebUI shortcut entry for the component.</li>
     */
    public $LoginSettings;

    /**
     * @var SceneSoftwareConfig <p>Cluster application scenario and supported deployment component configuration.</p>
     */
    public $SceneSoftwareConfig;

    /**
     * @var InstanceChargePrepaid <p>Parameter settings related to yearly/monthly subscription. This parameter can be used to specify the purchase duration of a yearly/monthly subscription instance, whether to enable auto-renewal, and other attributes. This parameter is required if the billing mode of the specified instance is prepaid.</p>
     */
    public $InstanceChargePrepaid;

    /**
     * @var array <p>ID of the security group to which the instance belongs, for example, sg-xxxxxxxx. This parameter can be obtained by calling the SecurityGroupId field in the response result of <a href="https://www.tencentcloud.com/document/api/215/15808?from_cn_redirect=1">DescribeSecurityGroups</a>.</p>
     */
    public $SecurityGroupIds;

    /**
     * @var array <p><a href="https://www.tencentcloud.com/document/product/589/35656?from_cn_redirect=1">Bootstrap operation</a> script settings.</p>
     */
    public $ScriptBootstrapActionConfig;

    /**
     * @var string <p>Unique random identifier with a time-to-live of 5 minutes, which needs to be specified by the caller to prevent the client from repeatedly creating resources, for example, a9a90aa6-<strong><strong>-</strong></strong>-****-fae360632808.</p>
     */
    public $ClientToken;

    /**
     * @var string <p>Whether to enable public network access for the cluster Master node. Valid values:</p><li>NEED_MASTER_WAN: yes</li><li>NOT_NEED_MASTER_WAN: no</li>By default, public network access is enabled for the cluster Master node.
     */
    public $NeedMasterWan;

    /**
     * @var boolean <p>Whether to enable remote login in the public network. (When SecurityGroupId is not empty, this parameter is invalid.) If this parameter is left empty, it is disabled by default. Valid values:</p><li>true: enable</li><li>false: disable</li>
     */
    public $EnableRemoteLoginFlag;

    /**
     * @var boolean <p>Whether to enable Kerberos authentication. It is disabled by default. Valid values:</p><li>true: enabled</li><li>false: disabled</li>
     */
    public $EnableKerberosFlag;

    /**
     * @var string <p><a href="https://www.tencentcloud.com/document/product/589/35655?from_cn_redirect=1?from_cn_redirect=1">Custom software configuration.</a></p>
     */
    public $CustomConf;

    /**
     * @var array <p>List of tag descriptions. When this parameter is specified, tags are bound to the corresponding instance.</p>
     */
    public $Tags;

    /**
     * @var array <p>List of dispersed placement group IDs. Currently, only one ID can be specified.<br>This parameter can be obtained by calling the DisasterRecoverGroupId field in the response result of <a href="https://www.tencentcloud.com/document/product/213/17810?from_cn_redirect=1">DescribeDisasterRecoverGroups</a>.</p>
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var boolean <p>Whether to enable cluster-level CBS encryption. It is not encrypted by default. Valid values:</p><li>true: encrypted</li><li>false: not encrypted</li>
     */
    public $EnableCbsEncryptFlag;

    /**
     * @var CustomMetaDBInfo <p>MetaDB information. When MetaType is set to EMR_NEW_META, MetaDataJdbcUrl, MetaDataUser, MetaDataPass, and UnifyMetaInstanceId can be left empty.<br>When MetaType is set to EMR_EXIT_META, set UnifyMetaInstanceId.<br>When MetaType is set to USER_CUSTOM_META, set MetaDataJdbcUrl, MetaDataUser, and MetaDataPass.</p>
     */
    public $MetaDBInfo;

    /**
     * @var array <p>Shared component information.</p>
     */
    public $DependService;

    /**
     * @var array <p>Specifications of node resources. Set one for each AZ. The first is the primary AZ, the second is the secondary AZ, and the third is the arbitration AZ. If cross-AZ is disabled, the length only needs to be 1.</p>
     */
    public $ZoneResourceConfiguration;

    /**
     * @var string <p>COS bucket path, which is used when a StarRocks compute-storage separation cluster is created.</p>
     */
    public $CosBucket;

    /**
     * @var array <p>Node flag information, which is currently only provided for the Terraform platform.</p>
     */
    public $NodeMarks;

    /**
     * @var string <p>clb id</p>
     */
    public $LoadBalancerId;

    /**
     * @var string <p>Database version. Valid values: mysql8/tdsql8/mysql5.</p>
     */
    public $DefaultMetaVersion;

    /**
     * @var integer <p>Whether database audit is enabled.</p>
     */
    public $NeedCdbAudit;

    /**
     * @var string <p>Source IP address, which is specified in the security group.</p>
     */
    public $SgIP;

    /**
     * @var integer <p>Partition of a partition placement group.</p>
     */
    public $PartitionNumber;

    /**
     * @var integer <p>Service UI address.</p><p>Enumeration values:</p><ul><li>0: Service UI address. Only one service UI address is returned.</li><li>1: Service UI address. If the service has multiple UI addresses, all results are returned, such as Impalad, StateStore, and Catalogd of Impala.</li></ul><p>Default value: 0.</p>
     */
    public $WebUiVersion;

    /**
     * @var boolean <p>Whether the system disk is encrypted.</p>
     */
    public $EnableCbsSysEncryptFlag;

    /**
     * @var array <p>Custom MetaDB data.</p>
     */
    public $MetaDBGroupInfo;

    /**
     * @param string $ProductVersion <p>EMR product version name, for example, EMR-V2.3.0 (EMR 2.3.0). Currently, product version names can be queried. For details, see <a href="https://www.tencentcloud.com/document/product/589/66338?from_cn_redirect=1">Product Version Name</a>.</p>
     * @param boolean $EnableSupportHAFlag <p>Whether to enable high availability for the node. Valid values:</p><li>true: yes</li><li>false: no</li>
     * @param string $InstanceName <p>Instance name.</p><li>The value can contain 6 to 36 characters.</li><li>Only Chinese characters, letters, digits, hyphens (-), and underscores (_) are allowed.</li>
     * @param string $InstanceChargeType <p>Instance billing mode. Valid values:</p><li>PREPAID: prepaid, that is, yearly/monthly subscription</li><li>POSTPAID_BY_HOUR: pay-as-you-go on an hourly basis</li>
     * @param LoginSettings $LoginSettings <p>Instance login settings. This parameter is used to set the login method for the purchased node, either the password or key.</p><li>When a key is set, the password is only used to log in to the native WebUI shortcut entry for the component.</li><li>When no key is set, the password is used to log in to the purchased node as well as the native WebUI shortcut entry for the component.</li>
     * @param SceneSoftwareConfig $SceneSoftwareConfig <p>Cluster application scenario and supported deployment component configuration.</p>
     * @param InstanceChargePrepaid $InstanceChargePrepaid <p>Parameter settings related to yearly/monthly subscription. This parameter can be used to specify the purchase duration of a yearly/monthly subscription instance, whether to enable auto-renewal, and other attributes. This parameter is required if the billing mode of the specified instance is prepaid.</p>
     * @param array $SecurityGroupIds <p>ID of the security group to which the instance belongs, for example, sg-xxxxxxxx. This parameter can be obtained by calling the SecurityGroupId field in the response result of <a href="https://www.tencentcloud.com/document/api/215/15808?from_cn_redirect=1">DescribeSecurityGroups</a>.</p>
     * @param array $ScriptBootstrapActionConfig <p><a href="https://www.tencentcloud.com/document/product/589/35656?from_cn_redirect=1">Bootstrap operation</a> script settings.</p>
     * @param string $ClientToken <p>Unique random identifier with a time-to-live of 5 minutes, which needs to be specified by the caller to prevent the client from repeatedly creating resources, for example, a9a90aa6-<strong><strong>-</strong></strong>-****-fae360632808.</p>
     * @param string $NeedMasterWan <p>Whether to enable public network access for the cluster Master node. Valid values:</p><li>NEED_MASTER_WAN: yes</li><li>NOT_NEED_MASTER_WAN: no</li>By default, public network access is enabled for the cluster Master node.
     * @param boolean $EnableRemoteLoginFlag <p>Whether to enable remote login in the public network. (When SecurityGroupId is not empty, this parameter is invalid.) If this parameter is left empty, it is disabled by default. Valid values:</p><li>true: enable</li><li>false: disable</li>
     * @param boolean $EnableKerberosFlag <p>Whether to enable Kerberos authentication. It is disabled by default. Valid values:</p><li>true: enabled</li><li>false: disabled</li>
     * @param string $CustomConf <p><a href="https://www.tencentcloud.com/document/product/589/35655?from_cn_redirect=1?from_cn_redirect=1">Custom software configuration.</a></p>
     * @param array $Tags <p>List of tag descriptions. When this parameter is specified, tags are bound to the corresponding instance.</p>
     * @param array $DisasterRecoverGroupIds <p>List of dispersed placement group IDs. Currently, only one ID can be specified.<br>This parameter can be obtained by calling the DisasterRecoverGroupId field in the response result of <a href="https://www.tencentcloud.com/document/product/213/17810?from_cn_redirect=1">DescribeDisasterRecoverGroups</a>.</p>
     * @param boolean $EnableCbsEncryptFlag <p>Whether to enable cluster-level CBS encryption. It is not encrypted by default. Valid values:</p><li>true: encrypted</li><li>false: not encrypted</li>
     * @param CustomMetaDBInfo $MetaDBInfo <p>MetaDB information. When MetaType is set to EMR_NEW_META, MetaDataJdbcUrl, MetaDataUser, MetaDataPass, and UnifyMetaInstanceId can be left empty.<br>When MetaType is set to EMR_EXIT_META, set UnifyMetaInstanceId.<br>When MetaType is set to USER_CUSTOM_META, set MetaDataJdbcUrl, MetaDataUser, and MetaDataPass.</p>
     * @param array $DependService <p>Shared component information.</p>
     * @param array $ZoneResourceConfiguration <p>Specifications of node resources. Set one for each AZ. The first is the primary AZ, the second is the secondary AZ, and the third is the arbitration AZ. If cross-AZ is disabled, the length only needs to be 1.</p>
     * @param string $CosBucket <p>COS bucket path, which is used when a StarRocks compute-storage separation cluster is created.</p>
     * @param array $NodeMarks <p>Node flag information, which is currently only provided for the Terraform platform.</p>
     * @param string $LoadBalancerId <p>clb id</p>
     * @param string $DefaultMetaVersion <p>Database version. Valid values: mysql8/tdsql8/mysql5.</p>
     * @param integer $NeedCdbAudit <p>Whether database audit is enabled.</p>
     * @param string $SgIP <p>Source IP address, which is specified in the security group.</p>
     * @param integer $PartitionNumber <p>Partition of a partition placement group.</p>
     * @param integer $WebUiVersion <p>Service UI address.</p><p>Enumeration values:</p><ul><li>0: Service UI address. Only one service UI address is returned.</li><li>1: Service UI address. If the service has multiple UI addresses, all results are returned, such as Impalad, StateStore, and Catalogd of Impala.</li></ul><p>Default value: 0.</p>
     * @param boolean $EnableCbsSysEncryptFlag <p>Whether the system disk is encrypted.</p>
     * @param array $MetaDBGroupInfo <p>Custom MetaDB data.</p>
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

        if (array_key_exists("CosBucket",$param) and $param["CosBucket"] !== null) {
            $this->CosBucket = $param["CosBucket"];
        }

        if (array_key_exists("NodeMarks",$param) and $param["NodeMarks"] !== null) {
            $this->NodeMarks = [];
            foreach ($param["NodeMarks"] as $key => $value){
                $obj = new NodeMark();
                $obj->deserialize($value);
                array_push($this->NodeMarks, $obj);
            }
        }

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("DefaultMetaVersion",$param) and $param["DefaultMetaVersion"] !== null) {
            $this->DefaultMetaVersion = $param["DefaultMetaVersion"];
        }

        if (array_key_exists("NeedCdbAudit",$param) and $param["NeedCdbAudit"] !== null) {
            $this->NeedCdbAudit = $param["NeedCdbAudit"];
        }

        if (array_key_exists("SgIP",$param) and $param["SgIP"] !== null) {
            $this->SgIP = $param["SgIP"];
        }

        if (array_key_exists("PartitionNumber",$param) and $param["PartitionNumber"] !== null) {
            $this->PartitionNumber = $param["PartitionNumber"];
        }

        if (array_key_exists("WebUiVersion",$param) and $param["WebUiVersion"] !== null) {
            $this->WebUiVersion = $param["WebUiVersion"];
        }

        if (array_key_exists("EnableCbsSysEncryptFlag",$param) and $param["EnableCbsSysEncryptFlag"] !== null) {
            $this->EnableCbsSysEncryptFlag = $param["EnableCbsSysEncryptFlag"];
        }

        if (array_key_exists("MetaDBGroupInfo",$param) and $param["MetaDBGroupInfo"] !== null) {
            $this->MetaDBGroupInfo = [];
            foreach ($param["MetaDBGroupInfo"] as $key => $value){
                $obj = new CustomMetaDBInfo();
                $obj->deserialize($value);
                array_push($this->MetaDBGroupInfo, $obj);
            }
        }
    }
}
