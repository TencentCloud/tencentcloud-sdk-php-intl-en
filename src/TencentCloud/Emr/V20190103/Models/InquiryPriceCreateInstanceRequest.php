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
 * InquiryPriceCreateInstance request structure.
 *
 * @method string getTimeUnit() Obtain <p>Time unit for purchasing instances. Valid values:</p><li>s: indicates seconds. When PayMode is set to 0, TimeUnit can only be set to s.</li><li>m: indicates months. When PayMode is set to 1, TimeUnit can only be set to m.</li>
 * @method void setTimeUnit(string $TimeUnit) Set <p>Time unit for purchasing instances. Valid values:</p><li>s: indicates seconds. When PayMode is set to 0, TimeUnit can only be set to s.</li><li>m: indicates months. When PayMode is set to 1, TimeUnit can only be set to m.</li>
 * @method integer getTimeSpan() Obtain <p>Instance purchase duration, which is used together with TimeUnit.</p><li>When TimeUnit is set to s, this parameter can only be set to 3600, indicating a pay-as-you-go instance.</li><li>When TimeUnit is set to m, the value set for this parameter indicates the subscription duration of the instance. For example, 1 indicates a one-month subscription.</li>
 * @method void setTimeSpan(integer $TimeSpan) Set <p>Instance purchase duration, which is used together with TimeUnit.</p><li>When TimeUnit is set to s, this parameter can only be set to 3600, indicating a pay-as-you-go instance.</li><li>When TimeUnit is set to m, the value set for this parameter indicates the subscription duration of the instance. For example, 1 indicates a one-month subscription.</li>
 * @method string getCurrency() Obtain <p>Currency type. Valid values:</p><li>CNY: RMB</li>
 * @method void setCurrency(string $Currency) Set <p>Currency type. Valid values:</p><li>CNY: RMB</li>
 * @method integer getPayMode() Obtain <p>Instance billing mode. Valid values:</p><li>0: pay-as-you-go</li><li>1: yearly/monthly subscription</li>
 * @method void setPayMode(integer $PayMode) Set <p>Instance billing mode. Valid values:</p><li>0: pay-as-you-go</li><li>1: yearly/monthly subscription</li>
 * @method integer getSupportHA() Obtain <p>Whether to enable high availability for the node. Valid values:</p><li>0: no</li><li>1: yes</li>
 * @method void setSupportHA(integer $SupportHA) Set <p>Whether to enable high availability for the node. Valid values:</p><li>0: no</li><li>1: yes</li>
 * @method array getSoftware() Obtain <p>List of deployed components. For different EMR product IDs, different required component lists need to be set (ProductId: For details about its meaning, see the ProductId parameter). Valid values: <li>When ProductId is set to 2 (EMR-V2.0.1), the required components include hdfs-2.7.3, yarn-2.7.3, zookeeper-3.4.9, and knox-1.2.0.</li><li>When ProductId is set to 16 (EMR-V2.3.0), the required components include hdfs-2.8.5, yarn-2.8.5, zookeeper-3.5.5, and knox-1.2.0.</li><li>When ProductId is set to 20 (EMR-V2.5.0), the required components include hdfs-2.8.5, yarn-2.8.5, zookeeper-3.6.1, and knox-1.2.0.</li><li>When ProductId is set to 30 (EMR-V2.6.0), the required components include hdfs-2.8.5, yarn-2.8.5, zookeeper-3.6.1, openldap-2.4.44, and knox-1.2.0.</li><li>When ProductId is set to 38 (EMR-V2.7.0), the required components include hdfs-2.8.5, yarn-2.8.5, zookeeper-3.6.3, openldap-2.4.44, and knox-1.6.1.</li><li>When ProductId is set to 57 (EMR-V2.8.0), the required components include hdfs-2.8.5, yarn-2.8.5, zookeeper-3.6.3, openldap-2.4.44, and knox-1.6.1.</li><li>When ProductId is set to 7 (EMR-V3.0.0), the required components include hdfs-3.1.2, yarn-3.1.2, zookeeper-3.4.9, and knox-1.2.0.</li><li>When ProductId is set to 25 (EMR-V3.1.0), the required components include hdfs-3.1.2, yarn-3.1.2, zookeeper-3.6.1, and knox-1.2.0.</li><li>When ProductId is set to 31 (EMR-V3.1.1), the required components include hdfs-3.1.2, yarn-3.1.2, zookeeper-3.6.1, and knox-1.2.0.</li><li>When ProductId is set to 28 (EMR-V3.2.0), the required components include hdfs-3.2.2, yarn-3.2.2, zookeeper-3.6.1, and knox-1.2.0.</li><li>When ProductId is set to 33 (EMR-V3.2.1), the required components include hdfs-3.2.2, yarn-3.2.2, zookeeper-3.6.1, openldap-2.4.44, and knox-1.2.0.</li><li>When ProductId is set to 34 (EMR-V3.3.0), the required components include hdfs-3.2.2, yarn-3.2.2, zookeeper-3.6.1, openldap-2.4.44, and knox-1.2.0.</li><li>When ProductId is set to 37 (EMR-V3.4.0), the required components include hdfs-3.2.2, yarn-3.2.2, zookeeper-3.6.3, openldap-2.4.44, and knox-1.6.1.</li><li>When ProductId is set to 44 (EMR-V3.5.0), the required components include hdfs-3.2.2, yarn-3.2.2, zookeeper-3.6.3, openldap-2.4.44, and knox-1.6.1.</li><li>When ProductId is set to 53 (EMR-V3.6.0), the required components include hdfs-3.2.2, yarn-3.2.2, zookeeper-3.6.3, openldap-2.4.44, and knox-1.6.1.</li><li>When ProductId is set to 58 (EMR-V3.6.1), the required components include hdfs-3.2.2, yarn-3.2.2, zookeeper-3.6.3, openldap-2.4.46, and knox-1.6.1.</li><li>When ProductId is set to 47 (EMR-V4.0.0), the required components include hdfs-3.2.2, yarn-3.2.2, zookeeper-3.6.3, openldap-2.4.44, and knox-1.6.1.</li></p>
 * @method void setSoftware(array $Software) Set <p>List of deployed components. For different EMR product IDs, different required component lists need to be set (ProductId: For details about its meaning, see the ProductId parameter). Valid values: <li>When ProductId is set to 2 (EMR-V2.0.1), the required components include hdfs-2.7.3, yarn-2.7.3, zookeeper-3.4.9, and knox-1.2.0.</li><li>When ProductId is set to 16 (EMR-V2.3.0), the required components include hdfs-2.8.5, yarn-2.8.5, zookeeper-3.5.5, and knox-1.2.0.</li><li>When ProductId is set to 20 (EMR-V2.5.0), the required components include hdfs-2.8.5, yarn-2.8.5, zookeeper-3.6.1, and knox-1.2.0.</li><li>When ProductId is set to 30 (EMR-V2.6.0), the required components include hdfs-2.8.5, yarn-2.8.5, zookeeper-3.6.1, openldap-2.4.44, and knox-1.2.0.</li><li>When ProductId is set to 38 (EMR-V2.7.0), the required components include hdfs-2.8.5, yarn-2.8.5, zookeeper-3.6.3, openldap-2.4.44, and knox-1.6.1.</li><li>When ProductId is set to 57 (EMR-V2.8.0), the required components include hdfs-2.8.5, yarn-2.8.5, zookeeper-3.6.3, openldap-2.4.44, and knox-1.6.1.</li><li>When ProductId is set to 7 (EMR-V3.0.0), the required components include hdfs-3.1.2, yarn-3.1.2, zookeeper-3.4.9, and knox-1.2.0.</li><li>When ProductId is set to 25 (EMR-V3.1.0), the required components include hdfs-3.1.2, yarn-3.1.2, zookeeper-3.6.1, and knox-1.2.0.</li><li>When ProductId is set to 31 (EMR-V3.1.1), the required components include hdfs-3.1.2, yarn-3.1.2, zookeeper-3.6.1, and knox-1.2.0.</li><li>When ProductId is set to 28 (EMR-V3.2.0), the required components include hdfs-3.2.2, yarn-3.2.2, zookeeper-3.6.1, and knox-1.2.0.</li><li>When ProductId is set to 33 (EMR-V3.2.1), the required components include hdfs-3.2.2, yarn-3.2.2, zookeeper-3.6.1, openldap-2.4.44, and knox-1.2.0.</li><li>When ProductId is set to 34 (EMR-V3.3.0), the required components include hdfs-3.2.2, yarn-3.2.2, zookeeper-3.6.1, openldap-2.4.44, and knox-1.2.0.</li><li>When ProductId is set to 37 (EMR-V3.4.0), the required components include hdfs-3.2.2, yarn-3.2.2, zookeeper-3.6.3, openldap-2.4.44, and knox-1.6.1.</li><li>When ProductId is set to 44 (EMR-V3.5.0), the required components include hdfs-3.2.2, yarn-3.2.2, zookeeper-3.6.3, openldap-2.4.44, and knox-1.6.1.</li><li>When ProductId is set to 53 (EMR-V3.6.0), the required components include hdfs-3.2.2, yarn-3.2.2, zookeeper-3.6.3, openldap-2.4.44, and knox-1.6.1.</li><li>When ProductId is set to 58 (EMR-V3.6.1), the required components include hdfs-3.2.2, yarn-3.2.2, zookeeper-3.6.3, openldap-2.4.46, and knox-1.6.1.</li><li>When ProductId is set to 47 (EMR-V4.0.0), the required components include hdfs-3.2.2, yarn-3.2.2, zookeeper-3.6.3, openldap-2.4.44, and knox-1.6.1.</li></p>
 * @method NewResourceSpec getResourceSpec() Obtain <p>Node specifications for price inquiry.</p>
 * @method void setResourceSpec(NewResourceSpec $ResourceSpec) Set <p>Node specifications for price inquiry.</p>
 * @method Placement getPlacement() Obtain <p>Location of the instance. This parameter can be used to specify attributes such as the AZ and associated project of the instance.</p>
 * @method void setPlacement(Placement $Placement) Set <p>Location of the instance. This parameter can be used to specify attributes such as the AZ and associated project of the instance.</p>
 * @method VPCSettings getVPCSettings() Obtain <p>VPC-related information configuration. This parameter can be used to specify the VPC ID, subnet ID, and so on.</p>
 * @method void setVPCSettings(VPCSettings $VPCSettings) Set <p>VPC-related information configuration. This parameter can be used to specify the VPC ID, subnet ID, and so on.</p>
 * @method string getMetaType() Obtain <p>Hive shared metadata database type. Valid values:</p><li>EMR_NEW_META: created by the cluster by default</li><li>EMR_EXIT_METE: EMR-MetaDB specified by the cluster</li><li>USER_CUSTOM_META: custom MetaDB used by the cluster</li>
 * @method void setMetaType(string $MetaType) Set <p>Hive shared metadata database type. Valid values:</p><li>EMR_NEW_META: created by the cluster by default</li><li>EMR_EXIT_METE: EMR-MetaDB specified by the cluster</li><li>USER_CUSTOM_META: custom MetaDB used by the cluster</li>
 * @method string getUnifyMetaInstanceId() Obtain <p>EMR-MetaDB instance.</p>
 * @method void setUnifyMetaInstanceId(string $UnifyMetaInstanceId) Set <p>EMR-MetaDB instance.</p>
 * @method CustomMetaInfo getMetaDBInfo() Obtain <p>Custom MetaDB information.</p>
 * @method void setMetaDBInfo(CustomMetaInfo $MetaDBInfo) Set <p>Custom MetaDB information.</p>
 * @method integer getProductId() Obtain <p>Product ID. Different product IDs indicate different EMR product versions. Valid values: <li>2: EMR-V2.0.1</li><li>16: EMR-V2.3.0</li><li>20: EMR-V2.5.0</li><li>30: EMR-V2.6.0</li><li>38: EMR-V2.7.0</li><li>57: EMR-V2.8.0</li><li>7: EMR-V3.0.0</li><li>25: EMR-V3.1.0</li><li>31: EMR-V3.1.1</li><li>28: EMR-V3.2.0</li><li>33: EMR-V3.2.1</li><li>34: EMR-V3.3.0</li><li>37: EMR-V3.4.0</li><li>44: EMR-V3.5.0</li><li>53: EMR-V3.6.0</li><li>58: EMR-V3.6.1</li><li>47: EMR-V4.0.0</li></p>
 * @method void setProductId(integer $ProductId) Set <p>Product ID. Different product IDs indicate different EMR product versions. Valid values: <li>2: EMR-V2.0.1</li><li>16: EMR-V2.3.0</li><li>20: EMR-V2.5.0</li><li>30: EMR-V2.6.0</li><li>38: EMR-V2.7.0</li><li>57: EMR-V2.8.0</li><li>7: EMR-V3.0.0</li><li>25: EMR-V3.1.0</li><li>31: EMR-V3.1.1</li><li>28: EMR-V3.2.0</li><li>33: EMR-V3.2.1</li><li>34: EMR-V3.3.0</li><li>37: EMR-V3.4.0</li><li>44: EMR-V3.5.0</li><li>53: EMR-V3.6.0</li><li>58: EMR-V3.6.1</li><li>47: EMR-V4.0.0</li></p>
 * @method string getSceneName() Obtain <p>Scenario-based values: Hadoop-Kudu, Hadoop-Zookeeper, Hadoop-Presto, and Hadoop-Hbase.</p>
 * @method void setSceneName(string $SceneName) Set <p>Scenario-based values: Hadoop-Kudu, Hadoop-Zookeeper, Hadoop-Presto, and Hadoop-Hbase.</p>
 * @method array getExternalService() Obtain <p>Shared component information.</p>
 * @method void setExternalService(array $ExternalService) Set <p>Shared component information.</p>
 * @method integer getVersionID() Obtain <p>Default value: 0. It is changed to 1 after the cross-AZ feature is supported.</p>
 * @method void setVersionID(integer $VersionID) Set <p>Default value: 0. It is changed to 1 after the cross-AZ feature is supported.</p>
 * @method array getMultiZoneSettings() Obtain <p>Specification information of the AZ.</p>
 * @method void setMultiZoneSettings(array $MultiZoneSettings) Set <p>Specification information of the AZ.</p>
 * @method string getDefaultMetaVersion() Obtain <p>Database version.</p>
 * @method void setDefaultMetaVersion(string $DefaultMetaVersion) Set <p>Database version.</p>
 * @method integer getNeedCdbAudit() Obtain <p>Whether to enable audit. Valid values: 0 (no) and 1 (yes).</p>
 * @method void setNeedCdbAudit(integer $NeedCdbAudit) Set <p>Whether to enable audit. Valid values: 0 (no) and 1 (yes).</p>
 * @method array getMetaDBGroupInfo() Obtain <p>Custom database data.</p>
 * @method void setMetaDBGroupInfo(array $MetaDBGroupInfo) Set <p>Custom database data.</p>
 */
class InquiryPriceCreateInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>Time unit for purchasing instances. Valid values:</p><li>s: indicates seconds. When PayMode is set to 0, TimeUnit can only be set to s.</li><li>m: indicates months. When PayMode is set to 1, TimeUnit can only be set to m.</li>
     */
    public $TimeUnit;

    /**
     * @var integer <p>Instance purchase duration, which is used together with TimeUnit.</p><li>When TimeUnit is set to s, this parameter can only be set to 3600, indicating a pay-as-you-go instance.</li><li>When TimeUnit is set to m, the value set for this parameter indicates the subscription duration of the instance. For example, 1 indicates a one-month subscription.</li>
     */
    public $TimeSpan;

    /**
     * @var string <p>Currency type. Valid values:</p><li>CNY: RMB</li>
     */
    public $Currency;

    /**
     * @var integer <p>Instance billing mode. Valid values:</p><li>0: pay-as-you-go</li><li>1: yearly/monthly subscription</li>
     */
    public $PayMode;

    /**
     * @var integer <p>Whether to enable high availability for the node. Valid values:</p><li>0: no</li><li>1: yes</li>
     */
    public $SupportHA;

    /**
     * @var array <p>List of deployed components. For different EMR product IDs, different required component lists need to be set (ProductId: For details about its meaning, see the ProductId parameter). Valid values: <li>When ProductId is set to 2 (EMR-V2.0.1), the required components include hdfs-2.7.3, yarn-2.7.3, zookeeper-3.4.9, and knox-1.2.0.</li><li>When ProductId is set to 16 (EMR-V2.3.0), the required components include hdfs-2.8.5, yarn-2.8.5, zookeeper-3.5.5, and knox-1.2.0.</li><li>When ProductId is set to 20 (EMR-V2.5.0), the required components include hdfs-2.8.5, yarn-2.8.5, zookeeper-3.6.1, and knox-1.2.0.</li><li>When ProductId is set to 30 (EMR-V2.6.0), the required components include hdfs-2.8.5, yarn-2.8.5, zookeeper-3.6.1, openldap-2.4.44, and knox-1.2.0.</li><li>When ProductId is set to 38 (EMR-V2.7.0), the required components include hdfs-2.8.5, yarn-2.8.5, zookeeper-3.6.3, openldap-2.4.44, and knox-1.6.1.</li><li>When ProductId is set to 57 (EMR-V2.8.0), the required components include hdfs-2.8.5, yarn-2.8.5, zookeeper-3.6.3, openldap-2.4.44, and knox-1.6.1.</li><li>When ProductId is set to 7 (EMR-V3.0.0), the required components include hdfs-3.1.2, yarn-3.1.2, zookeeper-3.4.9, and knox-1.2.0.</li><li>When ProductId is set to 25 (EMR-V3.1.0), the required components include hdfs-3.1.2, yarn-3.1.2, zookeeper-3.6.1, and knox-1.2.0.</li><li>When ProductId is set to 31 (EMR-V3.1.1), the required components include hdfs-3.1.2, yarn-3.1.2, zookeeper-3.6.1, and knox-1.2.0.</li><li>When ProductId is set to 28 (EMR-V3.2.0), the required components include hdfs-3.2.2, yarn-3.2.2, zookeeper-3.6.1, and knox-1.2.0.</li><li>When ProductId is set to 33 (EMR-V3.2.1), the required components include hdfs-3.2.2, yarn-3.2.2, zookeeper-3.6.1, openldap-2.4.44, and knox-1.2.0.</li><li>When ProductId is set to 34 (EMR-V3.3.0), the required components include hdfs-3.2.2, yarn-3.2.2, zookeeper-3.6.1, openldap-2.4.44, and knox-1.2.0.</li><li>When ProductId is set to 37 (EMR-V3.4.0), the required components include hdfs-3.2.2, yarn-3.2.2, zookeeper-3.6.3, openldap-2.4.44, and knox-1.6.1.</li><li>When ProductId is set to 44 (EMR-V3.5.0), the required components include hdfs-3.2.2, yarn-3.2.2, zookeeper-3.6.3, openldap-2.4.44, and knox-1.6.1.</li><li>When ProductId is set to 53 (EMR-V3.6.0), the required components include hdfs-3.2.2, yarn-3.2.2, zookeeper-3.6.3, openldap-2.4.44, and knox-1.6.1.</li><li>When ProductId is set to 58 (EMR-V3.6.1), the required components include hdfs-3.2.2, yarn-3.2.2, zookeeper-3.6.3, openldap-2.4.46, and knox-1.6.1.</li><li>When ProductId is set to 47 (EMR-V4.0.0), the required components include hdfs-3.2.2, yarn-3.2.2, zookeeper-3.6.3, openldap-2.4.44, and knox-1.6.1.</li></p>
     */
    public $Software;

    /**
     * @var NewResourceSpec <p>Node specifications for price inquiry.</p>
     */
    public $ResourceSpec;

    /**
     * @var Placement <p>Location of the instance. This parameter can be used to specify attributes such as the AZ and associated project of the instance.</p>
     */
    public $Placement;

    /**
     * @var VPCSettings <p>VPC-related information configuration. This parameter can be used to specify the VPC ID, subnet ID, and so on.</p>
     */
    public $VPCSettings;

    /**
     * @var string <p>Hive shared metadata database type. Valid values:</p><li>EMR_NEW_META: created by the cluster by default</li><li>EMR_EXIT_METE: EMR-MetaDB specified by the cluster</li><li>USER_CUSTOM_META: custom MetaDB used by the cluster</li>
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
     * @var integer <p>Product ID. Different product IDs indicate different EMR product versions. Valid values: <li>2: EMR-V2.0.1</li><li>16: EMR-V2.3.0</li><li>20: EMR-V2.5.0</li><li>30: EMR-V2.6.0</li><li>38: EMR-V2.7.0</li><li>57: EMR-V2.8.0</li><li>7: EMR-V3.0.0</li><li>25: EMR-V3.1.0</li><li>31: EMR-V3.1.1</li><li>28: EMR-V3.2.0</li><li>33: EMR-V3.2.1</li><li>34: EMR-V3.3.0</li><li>37: EMR-V3.4.0</li><li>44: EMR-V3.5.0</li><li>53: EMR-V3.6.0</li><li>58: EMR-V3.6.1</li><li>47: EMR-V4.0.0</li></p>
     */
    public $ProductId;

    /**
     * @var string <p>Scenario-based values: Hadoop-Kudu, Hadoop-Zookeeper, Hadoop-Presto, and Hadoop-Hbase.</p>
     */
    public $SceneName;

    /**
     * @var array <p>Shared component information.</p>
     */
    public $ExternalService;

    /**
     * @var integer <p>Default value: 0. It is changed to 1 after the cross-AZ feature is supported.</p>
     */
    public $VersionID;

    /**
     * @var array <p>Specification information of the AZ.</p>
     */
    public $MultiZoneSettings;

    /**
     * @var string <p>Database version.</p>
     */
    public $DefaultMetaVersion;

    /**
     * @var integer <p>Whether to enable audit. Valid values: 0 (no) and 1 (yes).</p>
     */
    public $NeedCdbAudit;

    /**
     * @var array <p>Custom database data.</p>
     */
    public $MetaDBGroupInfo;

    /**
     * @param string $TimeUnit <p>Time unit for purchasing instances. Valid values:</p><li>s: indicates seconds. When PayMode is set to 0, TimeUnit can only be set to s.</li><li>m: indicates months. When PayMode is set to 1, TimeUnit can only be set to m.</li>
     * @param integer $TimeSpan <p>Instance purchase duration, which is used together with TimeUnit.</p><li>When TimeUnit is set to s, this parameter can only be set to 3600, indicating a pay-as-you-go instance.</li><li>When TimeUnit is set to m, the value set for this parameter indicates the subscription duration of the instance. For example, 1 indicates a one-month subscription.</li>
     * @param string $Currency <p>Currency type. Valid values:</p><li>CNY: RMB</li>
     * @param integer $PayMode <p>Instance billing mode. Valid values:</p><li>0: pay-as-you-go</li><li>1: yearly/monthly subscription</li>
     * @param integer $SupportHA <p>Whether to enable high availability for the node. Valid values:</p><li>0: no</li><li>1: yes</li>
     * @param array $Software <p>List of deployed components. For different EMR product IDs, different required component lists need to be set (ProductId: For details about its meaning, see the ProductId parameter). Valid values: <li>When ProductId is set to 2 (EMR-V2.0.1), the required components include hdfs-2.7.3, yarn-2.7.3, zookeeper-3.4.9, and knox-1.2.0.</li><li>When ProductId is set to 16 (EMR-V2.3.0), the required components include hdfs-2.8.5, yarn-2.8.5, zookeeper-3.5.5, and knox-1.2.0.</li><li>When ProductId is set to 20 (EMR-V2.5.0), the required components include hdfs-2.8.5, yarn-2.8.5, zookeeper-3.6.1, and knox-1.2.0.</li><li>When ProductId is set to 30 (EMR-V2.6.0), the required components include hdfs-2.8.5, yarn-2.8.5, zookeeper-3.6.1, openldap-2.4.44, and knox-1.2.0.</li><li>When ProductId is set to 38 (EMR-V2.7.0), the required components include hdfs-2.8.5, yarn-2.8.5, zookeeper-3.6.3, openldap-2.4.44, and knox-1.6.1.</li><li>When ProductId is set to 57 (EMR-V2.8.0), the required components include hdfs-2.8.5, yarn-2.8.5, zookeeper-3.6.3, openldap-2.4.44, and knox-1.6.1.</li><li>When ProductId is set to 7 (EMR-V3.0.0), the required components include hdfs-3.1.2, yarn-3.1.2, zookeeper-3.4.9, and knox-1.2.0.</li><li>When ProductId is set to 25 (EMR-V3.1.0), the required components include hdfs-3.1.2, yarn-3.1.2, zookeeper-3.6.1, and knox-1.2.0.</li><li>When ProductId is set to 31 (EMR-V3.1.1), the required components include hdfs-3.1.2, yarn-3.1.2, zookeeper-3.6.1, and knox-1.2.0.</li><li>When ProductId is set to 28 (EMR-V3.2.0), the required components include hdfs-3.2.2, yarn-3.2.2, zookeeper-3.6.1, and knox-1.2.0.</li><li>When ProductId is set to 33 (EMR-V3.2.1), the required components include hdfs-3.2.2, yarn-3.2.2, zookeeper-3.6.1, openldap-2.4.44, and knox-1.2.0.</li><li>When ProductId is set to 34 (EMR-V3.3.0), the required components include hdfs-3.2.2, yarn-3.2.2, zookeeper-3.6.1, openldap-2.4.44, and knox-1.2.0.</li><li>When ProductId is set to 37 (EMR-V3.4.0), the required components include hdfs-3.2.2, yarn-3.2.2, zookeeper-3.6.3, openldap-2.4.44, and knox-1.6.1.</li><li>When ProductId is set to 44 (EMR-V3.5.0), the required components include hdfs-3.2.2, yarn-3.2.2, zookeeper-3.6.3, openldap-2.4.44, and knox-1.6.1.</li><li>When ProductId is set to 53 (EMR-V3.6.0), the required components include hdfs-3.2.2, yarn-3.2.2, zookeeper-3.6.3, openldap-2.4.44, and knox-1.6.1.</li><li>When ProductId is set to 58 (EMR-V3.6.1), the required components include hdfs-3.2.2, yarn-3.2.2, zookeeper-3.6.3, openldap-2.4.46, and knox-1.6.1.</li><li>When ProductId is set to 47 (EMR-V4.0.0), the required components include hdfs-3.2.2, yarn-3.2.2, zookeeper-3.6.3, openldap-2.4.44, and knox-1.6.1.</li></p>
     * @param NewResourceSpec $ResourceSpec <p>Node specifications for price inquiry.</p>
     * @param Placement $Placement <p>Location of the instance. This parameter can be used to specify attributes such as the AZ and associated project of the instance.</p>
     * @param VPCSettings $VPCSettings <p>VPC-related information configuration. This parameter can be used to specify the VPC ID, subnet ID, and so on.</p>
     * @param string $MetaType <p>Hive shared metadata database type. Valid values:</p><li>EMR_NEW_META: created by the cluster by default</li><li>EMR_EXIT_METE: EMR-MetaDB specified by the cluster</li><li>USER_CUSTOM_META: custom MetaDB used by the cluster</li>
     * @param string $UnifyMetaInstanceId <p>EMR-MetaDB instance.</p>
     * @param CustomMetaInfo $MetaDBInfo <p>Custom MetaDB information.</p>
     * @param integer $ProductId <p>Product ID. Different product IDs indicate different EMR product versions. Valid values: <li>2: EMR-V2.0.1</li><li>16: EMR-V2.3.0</li><li>20: EMR-V2.5.0</li><li>30: EMR-V2.6.0</li><li>38: EMR-V2.7.0</li><li>57: EMR-V2.8.0</li><li>7: EMR-V3.0.0</li><li>25: EMR-V3.1.0</li><li>31: EMR-V3.1.1</li><li>28: EMR-V3.2.0</li><li>33: EMR-V3.2.1</li><li>34: EMR-V3.3.0</li><li>37: EMR-V3.4.0</li><li>44: EMR-V3.5.0</li><li>53: EMR-V3.6.0</li><li>58: EMR-V3.6.1</li><li>47: EMR-V4.0.0</li></p>
     * @param string $SceneName <p>Scenario-based values: Hadoop-Kudu, Hadoop-Zookeeper, Hadoop-Presto, and Hadoop-Hbase.</p>
     * @param array $ExternalService <p>Shared component information.</p>
     * @param integer $VersionID <p>Default value: 0. It is changed to 1 after the cross-AZ feature is supported.</p>
     * @param array $MultiZoneSettings <p>Specification information of the AZ.</p>
     * @param string $DefaultMetaVersion <p>Database version.</p>
     * @param integer $NeedCdbAudit <p>Whether to enable audit. Valid values: 0 (no) and 1 (yes).</p>
     * @param array $MetaDBGroupInfo <p>Custom database data.</p>
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
        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("SupportHA",$param) and $param["SupportHA"] !== null) {
            $this->SupportHA = $param["SupportHA"];
        }

        if (array_key_exists("Software",$param) and $param["Software"] !== null) {
            $this->Software = $param["Software"];
        }

        if (array_key_exists("ResourceSpec",$param) and $param["ResourceSpec"] !== null) {
            $this->ResourceSpec = new NewResourceSpec();
            $this->ResourceSpec->deserialize($param["ResourceSpec"]);
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("VPCSettings",$param) and $param["VPCSettings"] !== null) {
            $this->VPCSettings = new VPCSettings();
            $this->VPCSettings->deserialize($param["VPCSettings"]);
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

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
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

        if (array_key_exists("MultiZoneSettings",$param) and $param["MultiZoneSettings"] !== null) {
            $this->MultiZoneSettings = [];
            foreach ($param["MultiZoneSettings"] as $key => $value){
                $obj = new MultiZoneSetting();
                $obj->deserialize($value);
                array_push($this->MultiZoneSettings, $obj);
            }
        }

        if (array_key_exists("DefaultMetaVersion",$param) and $param["DefaultMetaVersion"] !== null) {
            $this->DefaultMetaVersion = $param["DefaultMetaVersion"];
        }

        if (array_key_exists("NeedCdbAudit",$param) and $param["NeedCdbAudit"] !== null) {
            $this->NeedCdbAudit = $param["NeedCdbAudit"];
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
