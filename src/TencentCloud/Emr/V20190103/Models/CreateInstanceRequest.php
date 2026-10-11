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
 * CreateInstance request structure.
 *
 * @method integer getProductId() Obtain <p>Product ID. Different product IDs indicate different EMR product versions. Valid values:<br>51: STARROCKS-V1.4.0<br>54: STARROCKS-V2.0.0<br>27: KAFKA-V1.0.0<br>50: KAFKA-V2.0.0<br>16: EMR-V2.3.0<br>20: EMR-V2.5.0<br>30: EMR-V2.6.0<br>38: EMR-V2.7.0<br>25: EMR-V3.1.0<br>33: EMR-V3.2.1<br>34: EMR-V3.3.0<br>37: EMR-V3.4.0<br>44: EMR-V3.5.0<br>53: EMR-V3.6.0<br>58: EMR-3.6.1<br>59: EMR-serverless-1.0.0<br>60: EMR-TKE-1.1.0<br>61: SR-V2.1.0<br>62: SR-V2.1.0-SharedData<br>63: SR-V2.1.0.tlinux<br>64: unified metadata management project<br>65: EMR-TKE-AI-1.0.0<br>66: RSS-1.0.0<br>67: SR-V2.2.0<br>68: SR-V2.2.0.tlinux<br>69: EMR-AI-1.1.0<br>70: SR-V2.2.1<br>71: EMR-3.7.0<br>72: EMR-serverless-1.0.1<br>73: KAFKA-2.0.1<br>74: SR-V2.2.2<br>75: EMR-TKE-AI-1.1.0<br>76: EMR-V3.7.1<br>77: SERVERLESS-TCBASE-1.0.0<br>78: EMR-V3.6.2<br>79: STARROCKS-V2.2.2<br>80: EMR-AI-V1.1.1</p>
 * @method void setProductId(integer $ProductId) Set <p>Product ID. Different product IDs indicate different EMR product versions. Valid values:<br>51: STARROCKS-V1.4.0<br>54: STARROCKS-V2.0.0<br>27: KAFKA-V1.0.0<br>50: KAFKA-V2.0.0<br>16: EMR-V2.3.0<br>20: EMR-V2.5.0<br>30: EMR-V2.6.0<br>38: EMR-V2.7.0<br>25: EMR-V3.1.0<br>33: EMR-V3.2.1<br>34: EMR-V3.3.0<br>37: EMR-V3.4.0<br>44: EMR-V3.5.0<br>53: EMR-V3.6.0<br>58: EMR-3.6.1<br>59: EMR-serverless-1.0.0<br>60: EMR-TKE-1.1.0<br>61: SR-V2.1.0<br>62: SR-V2.1.0-SharedData<br>63: SR-V2.1.0.tlinux<br>64: unified metadata management project<br>65: EMR-TKE-AI-1.0.0<br>66: RSS-1.0.0<br>67: SR-V2.2.0<br>68: SR-V2.2.0.tlinux<br>69: EMR-AI-1.1.0<br>70: SR-V2.2.1<br>71: EMR-3.7.0<br>72: EMR-serverless-1.0.1<br>73: KAFKA-2.0.1<br>74: SR-V2.2.2<br>75: EMR-TKE-AI-1.1.0<br>76: EMR-V3.7.1<br>77: SERVERLESS-TCBASE-1.0.0<br>78: EMR-V3.6.2<br>79: STARROCKS-V2.2.2<br>80: EMR-AI-V1.1.1</p>
 * @method array getSoftware() Obtain <p>List of deployed components. Different EMR product IDs correspond to different optional component lists (ProductId: For details about its meaning, see the ProductId request parameter). For details about how to query optional component lists for different product versions, see <a href="https://www.tencentcloud.com/document/product/589/20279?from_cn_redirect=1">Component Version</a>.<br>Example values: hive and flink.</p>
 * @method void setSoftware(array $Software) Set <p>List of deployed components. Different EMR product IDs correspond to different optional component lists (ProductId: For details about its meaning, see the ProductId request parameter). For details about how to query optional component lists for different product versions, see <a href="https://www.tencentcloud.com/document/product/589/20279?from_cn_redirect=1">Component Version</a>.<br>Example values: hive and flink.</p>
 * @method integer getSupportHA() Obtain <p>Whether to enable high availability for the node. Valid values:</p><li>0: disables high availability for the node.</li><li>1: enables high availability for the node.</li>
 * @method void setSupportHA(integer $SupportHA) Set <p>Whether to enable high availability for the node. Valid values:</p><li>0: disables high availability for the node.</li><li>1: enables high availability for the node.</li>
 * @method string getInstanceName() Obtain <p>Instance name.</p><li>The value can contain 6 to 36 characters.</li><li>Only Chinese characters, letters, digits, hyphens (-), and underscores (_) are allowed.</li>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name.</p><li>The value can contain 6 to 36 characters.</li><li>Only Chinese characters, letters, digits, hyphens (-), and underscores (_) are allowed.</li>
 * @method integer getPayMode() Obtain <p>Instance billing mode. Valid values:</p><li>0: pay-as-you-go</li><li>1: yearly/monthly subscription</li>
 * @method void setPayMode(integer $PayMode) Set <p>Instance billing mode. Valid values:</p><li>0: pay-as-you-go</li><li>1: yearly/monthly subscription</li>
 * @method integer getTimeSpan() Obtain <p>Instance purchase duration, which is used together with TimeUnit.</p><li>When TimeUnit is set to s, this parameter can only be set to 3600, indicating a pay-as-you-go instance.</li><li>When TimeUnit is set to m, the value set for this parameter indicates the subscription duration of the instance. For example, 1 indicates a one-month subscription.</li>
 * @method void setTimeSpan(integer $TimeSpan) Set <p>Instance purchase duration, which is used together with TimeUnit.</p><li>When TimeUnit is set to s, this parameter can only be set to 3600, indicating a pay-as-you-go instance.</li><li>When TimeUnit is set to m, the value set for this parameter indicates the subscription duration of the instance. For example, 1 indicates a one-month subscription.</li>
 * @method string getTimeUnit() Obtain <p>Time unit for purchasing instances. Valid values:</p><li>s: indicates seconds. When PayMode is set to 0, TimeUnit can only be set to s.</li><li>m: indicates months. When PayMode is set to 1, TimeUnit can only be set to m.</li>
 * @method void setTimeUnit(string $TimeUnit) Set <p>Time unit for purchasing instances. Valid values:</p><li>s: indicates seconds. When PayMode is set to 0, TimeUnit can only be set to s.</li><li>m: indicates months. When PayMode is set to 1, TimeUnit can only be set to m.</li>
 * @method LoginSettings getLoginSettings() Obtain <p>Instance login settings. This parameter is used to set the login method for the purchased node, either the password or key.</p><li>When a key is set, the password is only used to log in to the native WebUI shortcut entry for the component.</li><li>When no key is set, the password is used to log in to the purchased node as well as the native WebUI shortcut entry for the component.</li>
 * @method void setLoginSettings(LoginSettings $LoginSettings) Set <p>Instance login settings. This parameter is used to set the login method for the purchased node, either the password or key.</p><li>When a key is set, the password is only used to log in to the native WebUI shortcut entry for the component.</li><li>When no key is set, the password is used to log in to the purchased node as well as the native WebUI shortcut entry for the component.</li>
 * @method VPCSettings getVPCSettings() Obtain <p>VPC-related information configuration. This parameter can be used to specify the VPC ID, subnet ID, and so on.</p>
 * @method void setVPCSettings(VPCSettings $VPCSettings) Set <p>VPC-related information configuration. This parameter can be used to specify the VPC ID, subnet ID, and so on.</p>
 * @method NewResourceSpec getResourceSpec() Obtain <p>Node resource specifications.</p>
 * @method void setResourceSpec(NewResourceSpec $ResourceSpec) Set <p>Node resource specifications.</p>
 * @method COSSettings getCOSSettings() Obtain <p>Specifies the parameters to be set for enabling COS access.</p>
 * @method void setCOSSettings(COSSettings $COSSettings) Set <p>Specifies the parameters to be set for enabling COS access.</p>
 * @method Placement getPlacement() Obtain <p>Location of the instance. This parameter can be used to specify attributes such as the AZ and associated project of the instance.</p>
 * @method void setPlacement(Placement $Placement) Set <p>Location of the instance. This parameter can be used to specify attributes such as the AZ and associated project of the instance.</p>
 * @method string getSgId() Obtain <p>ID of the security group to which the instance belongs, for example, sg-xxxxxxxx. This parameter can be obtained by calling the SecurityGroupId field in the response result of <a href="https://www.tencentcloud.com/document/api/215/15808?from_cn_redirect=1">DescribeSecurityGroups</a>.</p>
 * @method void setSgId(string $SgId) Set <p>ID of the security group to which the instance belongs, for example, sg-xxxxxxxx. This parameter can be obtained by calling the SecurityGroupId field in the response result of <a href="https://www.tencentcloud.com/document/api/215/15808?from_cn_redirect=1">DescribeSecurityGroups</a>.</p>
 * @method array getPreExecutedFileSettings() Obtain <p><a href="https://www.tencentcloud.com/document/product/589/35656?from_cn_redirect=1">Bootstrap operation</a> script settings.</p>
 * @method void setPreExecutedFileSettings(array $PreExecutedFileSettings) Set <p><a href="https://www.tencentcloud.com/document/product/589/35656?from_cn_redirect=1">Bootstrap operation</a> script settings.</p>
 * @method integer getAutoRenew() Obtain <p>Whether a yearly/monthly subscription instance is automatically renewed. Valid values:</p><li>0: no</li><li>1: yes</li>
 * @method void setAutoRenew(integer $AutoRenew) Set <p>Whether a yearly/monthly subscription instance is automatically renewed. Valid values:</p><li>0: no</li><li>1: yes</li>
 * @method string getClientToken() Obtain <p>Unique random identifier, which is valid for five minutes and needs to be specified by the caller. This prevents the client from repeatedly creating resources. Example value: a9a90aa6-<strong><strong>-</strong></strong>-****-fae36063280.</p>
 * @method void setClientToken(string $ClientToken) Set <p>Unique random identifier, which is valid for five minutes and needs to be specified by the caller. This prevents the client from repeatedly creating resources. Example value: a9a90aa6-<strong><strong>-</strong></strong>-****-fae36063280.</p>
 * @method string getNeedMasterWan() Obtain <p>Whether to enable public network access for the cluster Master node. Valid values:</p><li>NEED_MASTER_WAN: yes</li><li>NOT_NEED_MASTER_WAN: no</li>By default, public network access is enabled for the cluster Master node.
 * @method void setNeedMasterWan(string $NeedMasterWan) Set <p>Whether to enable public network access for the cluster Master node. Valid values:</p><li>NEED_MASTER_WAN: yes</li><li>NOT_NEED_MASTER_WAN: no</li>By default, public network access is enabled for the cluster Master node.
 * @method integer getRemoteLoginAtCreate() Obtain <p>Whether to enable remote public network login, that is, port 22. If SgId is passed, this parameter is invalid.</p>
 * @method void setRemoteLoginAtCreate(integer $RemoteLoginAtCreate) Set <p>Whether to enable remote public network login, that is, port 22. If SgId is passed, this parameter is invalid.</p>
 * @method integer getCheckSecurity() Obtain <p>Whether the security cluster is enabled. Valid values: 0 (no) and values other than 0 (yes).</p>
 * @method void setCheckSecurity(integer $CheckSecurity) Set <p>Whether the security cluster is enabled. Valid values: 0 (no) and values other than 0 (yes).</p>
 * @method string getExtendFsField() Obtain <p>Specifies the external file system to be accessed.</p>
 * @method void setExtendFsField(string $ExtendFsField) Set <p>Specifies the external file system to be accessed.</p>
 * @method array getTags() Obtain <p>List of tag descriptions. When this parameter is specified, tags are bound to the corresponding instance.</p>
 * @method void setTags(array $Tags) Set <p>List of tag descriptions. When this parameter is specified, tags are bound to the corresponding instance.</p>
 * @method array getDisasterRecoverGroupIds() Obtain <p>List of dispersed placement group IDs. Currently, only one ID can be specified.<br>This parameter can be obtained by calling the SecurityGroupId field in the response result of <a href="https://www.tencentcloud.com/document/product/213/15486?from_cn_redirect=1">DescribeSecurityGroups</a>.</p>
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) Set <p>List of dispersed placement group IDs. Currently, only one ID can be specified.<br>This parameter can be obtained by calling the SecurityGroupId field in the response result of <a href="https://www.tencentcloud.com/document/product/213/15486?from_cn_redirect=1">DescribeSecurityGroups</a>.</p>
 * @method integer getCbsEncrypt() Obtain <p>CBS encryption disk at the cluster level. Valid values: 0 (not encrypted) and 1 (encrypted). Default value: 0.</p>
 * @method void setCbsEncrypt(integer $CbsEncrypt) Set <p>CBS encryption disk at the cluster level. Valid values: 0 (not encrypted) and 1 (encrypted). Default value: 0.</p>
 * @method string getMetaType() Obtain <p>Hive shared metadata database type. Valid values:</p><li>EMR_DEFAULT_META: created by the cluster by default</li><li>EMR_EXIST_META: EMR-MetaDB specified by the cluster</li><li>USER_CUSTOM_META: custom MetaDB used by the cluster</li>
 * @method void setMetaType(string $MetaType) Set <p>Hive shared metadata database type. Valid values:</p><li>EMR_DEFAULT_META: created by the cluster by default</li><li>EMR_EXIST_META: EMR-MetaDB specified by the cluster</li><li>USER_CUSTOM_META: custom MetaDB used by the cluster</li>
 * @method string getUnifyMetaInstanceId() Obtain <p>EMR-MetaDB instance.</p>
 * @method void setUnifyMetaInstanceId(string $UnifyMetaInstanceId) Set <p>EMR-MetaDB instance.</p>
 * @method CustomMetaInfo getMetaDBInfo() Obtain <p>Custom MetaDB information.</p>
 * @method void setMetaDBInfo(CustomMetaInfo $MetaDBInfo) Set <p>Custom MetaDB information.</p>
 * @method string getApplicationRole() Obtain <p>Custom application role.</p>
 * @method void setApplicationRole(string $ApplicationRole) Set <p>Custom application role.</p>
 * @method string getSceneName() Obtain <p>Scenario-based values:<br>Hadoop-Kudu<br>Hadoop-Zookeeper<br>Hadoop-Presto<br>Hadoop-Hbase</p>
 * @method void setSceneName(string $SceneName) Set <p>Scenario-based values:<br>Hadoop-Kudu<br>Hadoop-Zookeeper<br>Hadoop-Presto<br>Hadoop-Hbase</p>
 * @method array getExternalService() Obtain <p>Shared component information.</p>
 * @method void setExternalService(array $ExternalService) Set <p>Shared component information.</p>
 * @method integer getVersionID() Obtain <p>If this parameter is set to 0, MultiZone, MultiDeployStrategy, and MultiZoneSettings are disabled. If this parameter is set to 1, ResourceSpec is deprecated and MultiZoneSettings is used.</p>
 * @method void setVersionID(integer $VersionID) Set <p>If this parameter is set to 0, MultiZone, MultiDeployStrategy, and MultiZoneSettings are disabled. If this parameter is set to 1, ResourceSpec is deprecated and MultiZoneSettings is used.</p>
 * @method boolean getMultiZone() Obtain <p>true: indicates that cross-AZ deployment is enabled. It is only a user parameter for cluster creation and cannot be adjusted subsequently.</p>
 * @method void setMultiZone(boolean $MultiZone) Set <p>true: indicates that cross-AZ deployment is enabled. It is only a user parameter for cluster creation and cannot be adjusted subsequently.</p>
 * @method array getMultiZoneSettings() Obtain <p>Specifications of node resources. Set one for each AZ. The first is the primary AZ, the second is the secondary AZ, and the third is the arbitration AZ. If cross-AZ is disabled, the length only needs to be 1.</p>
 * @method void setMultiZoneSettings(array $MultiZoneSettings) Set <p>Specifications of node resources. Set one for each AZ. The first is the primary AZ, the second is the secondary AZ, and the third is the arbitration AZ. If cross-AZ is disabled, the length only needs to be 1.</p>
 * @method string getCosBucket() Obtain <p>COS bucket path, which is used when a StarRocks compute-storage separation cluster is created.</p>
 * @method void setCosBucket(string $CosBucket) Set <p>COS bucket path, which is used when a StarRocks compute-storage separation cluster is created.</p>
 * @method array getNodeMarks() Obtain <p>Node flag information, which is currently only provided for the Terraform platform.</p>
 * @method void setNodeMarks(array $NodeMarks) Set <p>Node flag information, which is currently only provided for the Terraform platform.</p>
 * @method string getLoadBalancerId() Obtain <p>CLB id</p>
 * @method void setLoadBalancerId(string $LoadBalancerId) Set <p>CLB id</p>
 * @method string getDefaultMetaVersion() Obtain <p>Database type. Valid values: mysql8/tdsql8.</p>
 * @method void setDefaultMetaVersion(string $DefaultMetaVersion) Set <p>Database type. Valid values: mysql8/tdsql8.</p>
 * @method integer getNeedCdbAudit() Obtain <p>Whether to enable audit. Valid values: 0 (no) and 1 (yes).</p>
 * @method void setNeedCdbAudit(integer $NeedCdbAudit) Set <p>Whether to enable audit. Valid values: 0 (no) and 1 (yes).</p>
 * @method string getSgIP() Obtain <p>Source IP address, which is specified in the security group.</p>
 * @method void setSgIP(string $SgIP) Set <p>Source IP address, which is specified in the security group.</p>
 * @method integer getPartitionNumber() Obtain <p>Partition of a partition placement group.</p>
 * @method void setPartitionNumber(integer $PartitionNumber) Set <p>Partition of a partition placement group.</p>
 * @method integer getWebUiVersion() Obtain <p>Service UI address.</p><p>Enumeration values:</p><ul><li>0: Service UI address. Only one service UI address is returned.</li><li>1: Service UI address. If the service has multiple UI addresses, all results are returned, such as Impalad, StateStore, and Catalogd of Impala.</li></ul><p>Default value: 0.</p>
 * @method void setWebUiVersion(integer $WebUiVersion) Set <p>Service UI address.</p><p>Enumeration values:</p><ul><li>0: Service UI address. Only one service UI address is returned.</li><li>1: Service UI address. If the service has multiple UI addresses, all results are returned, such as Impalad, StateStore, and Catalogd of Impala.</li></ul><p>Default value: 0.</p>
 * @method integer getCbsSysEncrypt() Obtain <p>Whether to enable cluster-level CBS system disk encryption. Valid values: 0 (no) and 1 (yes).</p>
 * @method void setCbsSysEncrypt(integer $CbsSysEncrypt) Set <p>Whether to enable cluster-level CBS system disk encryption. Valid values: 0 (no) and 1 (yes).</p>
 */
class CreateInstanceRequest extends AbstractModel
{
    /**
     * @var integer <p>Product ID. Different product IDs indicate different EMR product versions. Valid values:<br>51: STARROCKS-V1.4.0<br>54: STARROCKS-V2.0.0<br>27: KAFKA-V1.0.0<br>50: KAFKA-V2.0.0<br>16: EMR-V2.3.0<br>20: EMR-V2.5.0<br>30: EMR-V2.6.0<br>38: EMR-V2.7.0<br>25: EMR-V3.1.0<br>33: EMR-V3.2.1<br>34: EMR-V3.3.0<br>37: EMR-V3.4.0<br>44: EMR-V3.5.0<br>53: EMR-V3.6.0<br>58: EMR-3.6.1<br>59: EMR-serverless-1.0.0<br>60: EMR-TKE-1.1.0<br>61: SR-V2.1.0<br>62: SR-V2.1.0-SharedData<br>63: SR-V2.1.0.tlinux<br>64: unified metadata management project<br>65: EMR-TKE-AI-1.0.0<br>66: RSS-1.0.0<br>67: SR-V2.2.0<br>68: SR-V2.2.0.tlinux<br>69: EMR-AI-1.1.0<br>70: SR-V2.2.1<br>71: EMR-3.7.0<br>72: EMR-serverless-1.0.1<br>73: KAFKA-2.0.1<br>74: SR-V2.2.2<br>75: EMR-TKE-AI-1.1.0<br>76: EMR-V3.7.1<br>77: SERVERLESS-TCBASE-1.0.0<br>78: EMR-V3.6.2<br>79: STARROCKS-V2.2.2<br>80: EMR-AI-V1.1.1</p>
     */
    public $ProductId;

    /**
     * @var array <p>List of deployed components. Different EMR product IDs correspond to different optional component lists (ProductId: For details about its meaning, see the ProductId request parameter). For details about how to query optional component lists for different product versions, see <a href="https://www.tencentcloud.com/document/product/589/20279?from_cn_redirect=1">Component Version</a>.<br>Example values: hive and flink.</p>
     */
    public $Software;

    /**
     * @var integer <p>Whether to enable high availability for the node. Valid values:</p><li>0: disables high availability for the node.</li><li>1: enables high availability for the node.</li>
     */
    public $SupportHA;

    /**
     * @var string <p>Instance name.</p><li>The value can contain 6 to 36 characters.</li><li>Only Chinese characters, letters, digits, hyphens (-), and underscores (_) are allowed.</li>
     */
    public $InstanceName;

    /**
     * @var integer <p>Instance billing mode. Valid values:</p><li>0: pay-as-you-go</li><li>1: yearly/monthly subscription</li>
     */
    public $PayMode;

    /**
     * @var integer <p>Instance purchase duration, which is used together with TimeUnit.</p><li>When TimeUnit is set to s, this parameter can only be set to 3600, indicating a pay-as-you-go instance.</li><li>When TimeUnit is set to m, the value set for this parameter indicates the subscription duration of the instance. For example, 1 indicates a one-month subscription.</li>
     */
    public $TimeSpan;

    /**
     * @var string <p>Time unit for purchasing instances. Valid values:</p><li>s: indicates seconds. When PayMode is set to 0, TimeUnit can only be set to s.</li><li>m: indicates months. When PayMode is set to 1, TimeUnit can only be set to m.</li>
     */
    public $TimeUnit;

    /**
     * @var LoginSettings <p>Instance login settings. This parameter is used to set the login method for the purchased node, either the password or key.</p><li>When a key is set, the password is only used to log in to the native WebUI shortcut entry for the component.</li><li>When no key is set, the password is used to log in to the purchased node as well as the native WebUI shortcut entry for the component.</li>
     */
    public $LoginSettings;

    /**
     * @var VPCSettings <p>VPC-related information configuration. This parameter can be used to specify the VPC ID, subnet ID, and so on.</p>
     */
    public $VPCSettings;

    /**
     * @var NewResourceSpec <p>Node resource specifications.</p>
     */
    public $ResourceSpec;

    /**
     * @var COSSettings <p>Specifies the parameters to be set for enabling COS access.</p>
     */
    public $COSSettings;

    /**
     * @var Placement <p>Location of the instance. This parameter can be used to specify attributes such as the AZ and associated project of the instance.</p>
     */
    public $Placement;

    /**
     * @var string <p>ID of the security group to which the instance belongs, for example, sg-xxxxxxxx. This parameter can be obtained by calling the SecurityGroupId field in the response result of <a href="https://www.tencentcloud.com/document/api/215/15808?from_cn_redirect=1">DescribeSecurityGroups</a>.</p>
     */
    public $SgId;

    /**
     * @var array <p><a href="https://www.tencentcloud.com/document/product/589/35656?from_cn_redirect=1">Bootstrap operation</a> script settings.</p>
     */
    public $PreExecutedFileSettings;

    /**
     * @var integer <p>Whether a yearly/monthly subscription instance is automatically renewed. Valid values:</p><li>0: no</li><li>1: yes</li>
     */
    public $AutoRenew;

    /**
     * @var string <p>Unique random identifier, which is valid for five minutes and needs to be specified by the caller. This prevents the client from repeatedly creating resources. Example value: a9a90aa6-<strong><strong>-</strong></strong>-****-fae36063280.</p>
     */
    public $ClientToken;

    /**
     * @var string <p>Whether to enable public network access for the cluster Master node. Valid values:</p><li>NEED_MASTER_WAN: yes</li><li>NOT_NEED_MASTER_WAN: no</li>By default, public network access is enabled for the cluster Master node.
     */
    public $NeedMasterWan;

    /**
     * @var integer <p>Whether to enable remote public network login, that is, port 22. If SgId is passed, this parameter is invalid.</p>
     */
    public $RemoteLoginAtCreate;

    /**
     * @var integer <p>Whether the security cluster is enabled. Valid values: 0 (no) and values other than 0 (yes).</p>
     */
    public $CheckSecurity;

    /**
     * @var string <p>Specifies the external file system to be accessed.</p>
     */
    public $ExtendFsField;

    /**
     * @var array <p>List of tag descriptions. When this parameter is specified, tags are bound to the corresponding instance.</p>
     */
    public $Tags;

    /**
     * @var array <p>List of dispersed placement group IDs. Currently, only one ID can be specified.<br>This parameter can be obtained by calling the SecurityGroupId field in the response result of <a href="https://www.tencentcloud.com/document/product/213/15486?from_cn_redirect=1">DescribeSecurityGroups</a>.</p>
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var integer <p>CBS encryption disk at the cluster level. Valid values: 0 (not encrypted) and 1 (encrypted). Default value: 0.</p>
     */
    public $CbsEncrypt;

    /**
     * @var string <p>Hive shared metadata database type. Valid values:</p><li>EMR_DEFAULT_META: created by the cluster by default</li><li>EMR_EXIST_META: EMR-MetaDB specified by the cluster</li><li>USER_CUSTOM_META: custom MetaDB used by the cluster</li>
     */
    public $MetaType;

    /**
     * @var string <p>EMR-MetaDB instance.</p>
     */
    public $UnifyMetaInstanceId;

    /**
     * @var CustomMetaInfo <p>Custom MetaDB information.</p>
     */
    public $MetaDBInfo;

    /**
     * @var string <p>Custom application role.</p>
     */
    public $ApplicationRole;

    /**
     * @var string <p>Scenario-based values:<br>Hadoop-Kudu<br>Hadoop-Zookeeper<br>Hadoop-Presto<br>Hadoop-Hbase</p>
     */
    public $SceneName;

    /**
     * @var array <p>Shared component information.</p>
     */
    public $ExternalService;

    /**
     * @var integer <p>If this parameter is set to 0, MultiZone, MultiDeployStrategy, and MultiZoneSettings are disabled. If this parameter is set to 1, ResourceSpec is deprecated and MultiZoneSettings is used.</p>
     */
    public $VersionID;

    /**
     * @var boolean <p>true: indicates that cross-AZ deployment is enabled. It is only a user parameter for cluster creation and cannot be adjusted subsequently.</p>
     */
    public $MultiZone;

    /**
     * @var array <p>Specifications of node resources. Set one for each AZ. The first is the primary AZ, the second is the secondary AZ, and the third is the arbitration AZ. If cross-AZ is disabled, the length only needs to be 1.</p>
     */
    public $MultiZoneSettings;

    /**
     * @var string <p>COS bucket path, which is used when a StarRocks compute-storage separation cluster is created.</p>
     */
    public $CosBucket;

    /**
     * @var array <p>Node flag information, which is currently only provided for the Terraform platform.</p>
     */
    public $NodeMarks;

    /**
     * @var string <p>CLB id</p>
     */
    public $LoadBalancerId;

    /**
     * @var string <p>Database type. Valid values: mysql8/tdsql8.</p>
     */
    public $DefaultMetaVersion;

    /**
     * @var integer <p>Whether to enable audit. Valid values: 0 (no) and 1 (yes).</p>
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
     * @var integer <p>Whether to enable cluster-level CBS system disk encryption. Valid values: 0 (no) and 1 (yes).</p>
     */
    public $CbsSysEncrypt;

    /**
     * @param integer $ProductId <p>Product ID. Different product IDs indicate different EMR product versions. Valid values:<br>51: STARROCKS-V1.4.0<br>54: STARROCKS-V2.0.0<br>27: KAFKA-V1.0.0<br>50: KAFKA-V2.0.0<br>16: EMR-V2.3.0<br>20: EMR-V2.5.0<br>30: EMR-V2.6.0<br>38: EMR-V2.7.0<br>25: EMR-V3.1.0<br>33: EMR-V3.2.1<br>34: EMR-V3.3.0<br>37: EMR-V3.4.0<br>44: EMR-V3.5.0<br>53: EMR-V3.6.0<br>58: EMR-3.6.1<br>59: EMR-serverless-1.0.0<br>60: EMR-TKE-1.1.0<br>61: SR-V2.1.0<br>62: SR-V2.1.0-SharedData<br>63: SR-V2.1.0.tlinux<br>64: unified metadata management project<br>65: EMR-TKE-AI-1.0.0<br>66: RSS-1.0.0<br>67: SR-V2.2.0<br>68: SR-V2.2.0.tlinux<br>69: EMR-AI-1.1.0<br>70: SR-V2.2.1<br>71: EMR-3.7.0<br>72: EMR-serverless-1.0.1<br>73: KAFKA-2.0.1<br>74: SR-V2.2.2<br>75: EMR-TKE-AI-1.1.0<br>76: EMR-V3.7.1<br>77: SERVERLESS-TCBASE-1.0.0<br>78: EMR-V3.6.2<br>79: STARROCKS-V2.2.2<br>80: EMR-AI-V1.1.1</p>
     * @param array $Software <p>List of deployed components. Different EMR product IDs correspond to different optional component lists (ProductId: For details about its meaning, see the ProductId request parameter). For details about how to query optional component lists for different product versions, see <a href="https://www.tencentcloud.com/document/product/589/20279?from_cn_redirect=1">Component Version</a>.<br>Example values: hive and flink.</p>
     * @param integer $SupportHA <p>Whether to enable high availability for the node. Valid values:</p><li>0: disables high availability for the node.</li><li>1: enables high availability for the node.</li>
     * @param string $InstanceName <p>Instance name.</p><li>The value can contain 6 to 36 characters.</li><li>Only Chinese characters, letters, digits, hyphens (-), and underscores (_) are allowed.</li>
     * @param integer $PayMode <p>Instance billing mode. Valid values:</p><li>0: pay-as-you-go</li><li>1: yearly/monthly subscription</li>
     * @param integer $TimeSpan <p>Instance purchase duration, which is used together with TimeUnit.</p><li>When TimeUnit is set to s, this parameter can only be set to 3600, indicating a pay-as-you-go instance.</li><li>When TimeUnit is set to m, the value set for this parameter indicates the subscription duration of the instance. For example, 1 indicates a one-month subscription.</li>
     * @param string $TimeUnit <p>Time unit for purchasing instances. Valid values:</p><li>s: indicates seconds. When PayMode is set to 0, TimeUnit can only be set to s.</li><li>m: indicates months. When PayMode is set to 1, TimeUnit can only be set to m.</li>
     * @param LoginSettings $LoginSettings <p>Instance login settings. This parameter is used to set the login method for the purchased node, either the password or key.</p><li>When a key is set, the password is only used to log in to the native WebUI shortcut entry for the component.</li><li>When no key is set, the password is used to log in to the purchased node as well as the native WebUI shortcut entry for the component.</li>
     * @param VPCSettings $VPCSettings <p>VPC-related information configuration. This parameter can be used to specify the VPC ID, subnet ID, and so on.</p>
     * @param NewResourceSpec $ResourceSpec <p>Node resource specifications.</p>
     * @param COSSettings $COSSettings <p>Specifies the parameters to be set for enabling COS access.</p>
     * @param Placement $Placement <p>Location of the instance. This parameter can be used to specify attributes such as the AZ and associated project of the instance.</p>
     * @param string $SgId <p>ID of the security group to which the instance belongs, for example, sg-xxxxxxxx. This parameter can be obtained by calling the SecurityGroupId field in the response result of <a href="https://www.tencentcloud.com/document/api/215/15808?from_cn_redirect=1">DescribeSecurityGroups</a>.</p>
     * @param array $PreExecutedFileSettings <p><a href="https://www.tencentcloud.com/document/product/589/35656?from_cn_redirect=1">Bootstrap operation</a> script settings.</p>
     * @param integer $AutoRenew <p>Whether a yearly/monthly subscription instance is automatically renewed. Valid values:</p><li>0: no</li><li>1: yes</li>
     * @param string $ClientToken <p>Unique random identifier, which is valid for five minutes and needs to be specified by the caller. This prevents the client from repeatedly creating resources. Example value: a9a90aa6-<strong><strong>-</strong></strong>-****-fae36063280.</p>
     * @param string $NeedMasterWan <p>Whether to enable public network access for the cluster Master node. Valid values:</p><li>NEED_MASTER_WAN: yes</li><li>NOT_NEED_MASTER_WAN: no</li>By default, public network access is enabled for the cluster Master node.
     * @param integer $RemoteLoginAtCreate <p>Whether to enable remote public network login, that is, port 22. If SgId is passed, this parameter is invalid.</p>
     * @param integer $CheckSecurity <p>Whether the security cluster is enabled. Valid values: 0 (no) and values other than 0 (yes).</p>
     * @param string $ExtendFsField <p>Specifies the external file system to be accessed.</p>
     * @param array $Tags <p>List of tag descriptions. When this parameter is specified, tags are bound to the corresponding instance.</p>
     * @param array $DisasterRecoverGroupIds <p>List of dispersed placement group IDs. Currently, only one ID can be specified.<br>This parameter can be obtained by calling the SecurityGroupId field in the response result of <a href="https://www.tencentcloud.com/document/product/213/15486?from_cn_redirect=1">DescribeSecurityGroups</a>.</p>
     * @param integer $CbsEncrypt <p>CBS encryption disk at the cluster level. Valid values: 0 (not encrypted) and 1 (encrypted). Default value: 0.</p>
     * @param string $MetaType <p>Hive shared metadata database type. Valid values:</p><li>EMR_DEFAULT_META: created by the cluster by default</li><li>EMR_EXIST_META: EMR-MetaDB specified by the cluster</li><li>USER_CUSTOM_META: custom MetaDB used by the cluster</li>
     * @param string $UnifyMetaInstanceId <p>EMR-MetaDB instance.</p>
     * @param CustomMetaInfo $MetaDBInfo <p>Custom MetaDB information.</p>
     * @param string $ApplicationRole <p>Custom application role.</p>
     * @param string $SceneName <p>Scenario-based values:<br>Hadoop-Kudu<br>Hadoop-Zookeeper<br>Hadoop-Presto<br>Hadoop-Hbase</p>
     * @param array $ExternalService <p>Shared component information.</p>
     * @param integer $VersionID <p>If this parameter is set to 0, MultiZone, MultiDeployStrategy, and MultiZoneSettings are disabled. If this parameter is set to 1, ResourceSpec is deprecated and MultiZoneSettings is used.</p>
     * @param boolean $MultiZone <p>true: indicates that cross-AZ deployment is enabled. It is only a user parameter for cluster creation and cannot be adjusted subsequently.</p>
     * @param array $MultiZoneSettings <p>Specifications of node resources. Set one for each AZ. The first is the primary AZ, the second is the secondary AZ, and the third is the arbitration AZ. If cross-AZ is disabled, the length only needs to be 1.</p>
     * @param string $CosBucket <p>COS bucket path, which is used when a StarRocks compute-storage separation cluster is created.</p>
     * @param array $NodeMarks <p>Node flag information, which is currently only provided for the Terraform platform.</p>
     * @param string $LoadBalancerId <p>CLB id</p>
     * @param string $DefaultMetaVersion <p>Database type. Valid values: mysql8/tdsql8.</p>
     * @param integer $NeedCdbAudit <p>Whether to enable audit. Valid values: 0 (no) and 1 (yes).</p>
     * @param string $SgIP <p>Source IP address, which is specified in the security group.</p>
     * @param integer $PartitionNumber <p>Partition of a partition placement group.</p>
     * @param integer $WebUiVersion <p>Service UI address.</p><p>Enumeration values:</p><ul><li>0: Service UI address. Only one service UI address is returned.</li><li>1: Service UI address. If the service has multiple UI addresses, all results are returned, such as Impalad, StateStore, and Catalogd of Impala.</li></ul><p>Default value: 0.</p>
     * @param integer $CbsSysEncrypt <p>Whether to enable cluster-level CBS system disk encryption. Valid values: 0 (no) and 1 (yes).</p>
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("Software",$param) and $param["Software"] !== null) {
            $this->Software = $param["Software"];
        }

        if (array_key_exists("SupportHA",$param) and $param["SupportHA"] !== null) {
            $this->SupportHA = $param["SupportHA"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("VPCSettings",$param) and $param["VPCSettings"] !== null) {
            $this->VPCSettings = new VPCSettings();
            $this->VPCSettings->deserialize($param["VPCSettings"]);
        }

        if (array_key_exists("ResourceSpec",$param) and $param["ResourceSpec"] !== null) {
            $this->ResourceSpec = new NewResourceSpec();
            $this->ResourceSpec->deserialize($param["ResourceSpec"]);
        }

        if (array_key_exists("COSSettings",$param) and $param["COSSettings"] !== null) {
            $this->COSSettings = new COSSettings();
            $this->COSSettings->deserialize($param["COSSettings"]);
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("SgId",$param) and $param["SgId"] !== null) {
            $this->SgId = $param["SgId"];
        }

        if (array_key_exists("PreExecutedFileSettings",$param) and $param["PreExecutedFileSettings"] !== null) {
            $this->PreExecutedFileSettings = [];
            foreach ($param["PreExecutedFileSettings"] as $key => $value){
                $obj = new PreExecuteFileSettings();
                $obj->deserialize($value);
                array_push($this->PreExecutedFileSettings, $obj);
            }
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("NeedMasterWan",$param) and $param["NeedMasterWan"] !== null) {
            $this->NeedMasterWan = $param["NeedMasterWan"];
        }

        if (array_key_exists("RemoteLoginAtCreate",$param) and $param["RemoteLoginAtCreate"] !== null) {
            $this->RemoteLoginAtCreate = $param["RemoteLoginAtCreate"];
        }

        if (array_key_exists("CheckSecurity",$param) and $param["CheckSecurity"] !== null) {
            $this->CheckSecurity = $param["CheckSecurity"];
        }

        if (array_key_exists("ExtendFsField",$param) and $param["ExtendFsField"] !== null) {
            $this->ExtendFsField = $param["ExtendFsField"];
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

        if (array_key_exists("CbsEncrypt",$param) and $param["CbsEncrypt"] !== null) {
            $this->CbsEncrypt = $param["CbsEncrypt"];
        }

        if (array_key_exists("MetaType",$param) and $param["MetaType"] !== null) {
            $this->MetaType = $param["MetaType"];
        }

        if (array_key_exists("UnifyMetaInstanceId",$param) and $param["UnifyMetaInstanceId"] !== null) {
            $this->UnifyMetaInstanceId = $param["UnifyMetaInstanceId"];
        }

        if (array_key_exists("MetaDBInfo",$param) and $param["MetaDBInfo"] !== null) {
            $this->MetaDBInfo = new CustomMetaInfo();
            $this->MetaDBInfo->deserialize($param["MetaDBInfo"]);
        }

        if (array_key_exists("ApplicationRole",$param) and $param["ApplicationRole"] !== null) {
            $this->ApplicationRole = $param["ApplicationRole"];
        }

        if (array_key_exists("SceneName",$param) and $param["SceneName"] !== null) {
            $this->SceneName = $param["SceneName"];
        }

        if (array_key_exists("ExternalService",$param) and $param["ExternalService"] !== null) {
            $this->ExternalService = [];
            foreach ($param["ExternalService"] as $key => $value){
                $obj = new ExternalService();
                $obj->deserialize($value);
                array_push($this->ExternalService, $obj);
            }
        }

        if (array_key_exists("VersionID",$param) and $param["VersionID"] !== null) {
            $this->VersionID = $param["VersionID"];
        }

        if (array_key_exists("MultiZone",$param) and $param["MultiZone"] !== null) {
            $this->MultiZone = $param["MultiZone"];
        }

        if (array_key_exists("MultiZoneSettings",$param) and $param["MultiZoneSettings"] !== null) {
            $this->MultiZoneSettings = [];
            foreach ($param["MultiZoneSettings"] as $key => $value){
                $obj = new MultiZoneSetting();
                $obj->deserialize($value);
                array_push($this->MultiZoneSettings, $obj);
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

        if (array_key_exists("CbsSysEncrypt",$param) and $param["CbsSysEncrypt"] !== null) {
            $this->CbsSysEncrypt = $param["CbsSysEncrypt"];
        }
    }
}
