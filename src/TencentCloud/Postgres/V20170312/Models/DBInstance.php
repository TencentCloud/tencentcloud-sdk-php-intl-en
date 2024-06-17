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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance details
 *
 * @method string getRegion() Obtain Instance region such as ap-guangzhou, which corresponds to the`Region` field in `RegionSet`.
 * @method void setRegion(string $Region) Set Instance region such as ap-guangzhou, which corresponds to the`Region` field in `RegionSet`.
 * @method string getZone() Obtain Instance AZ such as ap-guangzhou-3, which corresponds to the `Zone` field of `ZoneSet`.
 * @method void setZone(string $Zone) Set Instance AZ such as ap-guangzhou-3, which corresponds to the `Zone` field of `ZoneSet`.
 * @method string getVpcId() Obtain VPC ID in the format of `vpc-xxxxxxx`, which can be obtained in the console or from the `unVpcId` field in the return value of the [DescribeVpcs](https://www.tencentcloud.com/document/product/215/15778) API.
 * @method void setVpcId(string $VpcId) Set VPC ID in the format of `vpc-xxxxxxx`, which can be obtained in the console or from the `unVpcId` field in the return value of the [DescribeVpcs](https://www.tencentcloud.com/document/product/215/15778) API.
 * @method string getSubnetId() Obtain VPC subnet ID in the format of `subnet-xxxxxxxx`, which can be obtained in the console or from the `unSubnetId` field in the return value of the [DescribeSubnets ](https://intl.cloud.tencent.com/document/api/215/15784?from_cn_redirect=1) API.
 * @method void setSubnetId(string $SubnetId) Set VPC subnet ID in the format of `subnet-xxxxxxxx`, which can be obtained in the console or from the `unSubnetId` field in the return value of the [DescribeSubnets ](https://intl.cloud.tencent.com/document/api/215/15784?from_cn_redirect=1) API.
 * @method string getDBInstanceId() Obtain Instance ID
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID
 * @method string getDBInstanceName() Obtain Instance name
 * @method void setDBInstanceName(string $DBInstanceName) Set Instance name
 * @method string getDBInstanceStatus() Obtain Instance status, including: `applying` (applying), `init` (to be initialized), `initing` (initializing), `running` (running), `limited run` (restricted operation), `isolating` (isolating), `isolated` (isolated), `disisolating` (de-isolating), `recycling` (recycling), `recycled` (recycled), `job running` (task executing), `offline` (offline), `migrating` (migrating), `expanding` (scaling out), `waitSwitch` (waiting to switch), `switching` (switching), `readonly` (readonly), `restarting` (restarting), `network changing` (network modification in progress), `upgrading` (kernel version upgrading), `audit-switching` (audit status changing), and `primary-switching` (primary-secondary switching)
 * @method void setDBInstanceStatus(string $DBInstanceStatus) Set Instance status, including: `applying` (applying), `init` (to be initialized), `initing` (initializing), `running` (running), `limited run` (restricted operation), `isolating` (isolating), `isolated` (isolated), `disisolating` (de-isolating), `recycling` (recycling), `recycled` (recycled), `job running` (task executing), `offline` (offline), `migrating` (migrating), `expanding` (scaling out), `waitSwitch` (waiting to switch), `switching` (switching), `readonly` (readonly), `restarting` (restarting), `network changing` (network modification in progress), `upgrading` (kernel version upgrading), `audit-switching` (audit status changing), and `primary-switching` (primary-secondary switching)
 * @method integer getDBInstanceMemory() Obtain Assigned instance memory size in GB
 * @method void setDBInstanceMemory(integer $DBInstanceMemory) Set Assigned instance memory size in GB
 * @method integer getDBInstanceStorage() Obtain Assigned instance storage capacity in GB
 * @method void setDBInstanceStorage(integer $DBInstanceStorage) Set Assigned instance storage capacity in GB
 * @method integer getDBInstanceCpu() Obtain Number of assigned CPUs
 * @method void setDBInstanceCpu(integer $DBInstanceCpu) Set Number of assigned CPUs
 * @method string getDBInstanceClass() Obtain Purchasable specification ID
 * @method void setDBInstanceClass(string $DBInstanceClass) Set Purchasable specification ID
 * @method string getDBMajorVersion() Obtain The major PostgreSQL version number, which can be queried by the [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1) API. Valid values: `10`, `11`, `12`, `13`, `14`, `15`.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setDBMajorVersion(string $DBMajorVersion) Set The major PostgreSQL version number, which can be queried by the [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1) API. Valid values: `10`, `11`, `12`, `13`, `14`, `15`.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method string getDBVersion() Obtain Number of the major PostgreSQL community version and minor version, such as 12.4, which can be queried by the [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1) API.
 * @method void setDBVersion(string $DBVersion) Set Number of the major PostgreSQL community version and minor version, such as 12.4, which can be queried by the [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1) API.
 * @method string getDBKernelVersion() Obtain PostgreSQL kernel version number (like v12.7_r1.8), which can be queried by the [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1) API.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setDBKernelVersion(string $DBKernelVersion) Set PostgreSQL kernel version number (like v12.7_r1.8), which can be queried by the [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1) API.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method string getDBInstanceType() Obtain Instance type, which includes:
<li>primary: primary instance </li>
<li>readonly: read-only instance</li>
<li>guard: disaster recovery instance</li>
<li>temp: temporary instance</li>
 * @method void setDBInstanceType(string $DBInstanceType) Set Instance type, which includes:
<li>primary: primary instance </li>
<li>readonly: read-only instance</li>
<li>guard: disaster recovery instance</li>
<li>temp: temporary instance</li>
 * @method string getDBInstanceVersion() Obtain Instance version. Valid value: `standard` (dual-server high-availability; one-primary-one-standby).
 * @method void setDBInstanceVersion(string $DBInstanceVersion) Set Instance version. Valid value: `standard` (dual-server high-availability; one-primary-one-standby).
 * @method string getDBCharset() Obtain Instance character set, which currently supports only:
<li>UTF8</li>
<li>LATIN1</li>
 * @method void setDBCharset(string $DBCharset) Set Instance character set, which currently supports only:
<li>UTF8</li>
<li>LATIN1</li>
 * @method string getCreateTime() Obtain Instance creation time
 * @method void setCreateTime(string $CreateTime) Set Instance creation time
 * @method string getUpdateTime() Obtain Last updated time of the instance attribute
 * @method void setUpdateTime(string $UpdateTime) Set Last updated time of the instance attribute
 * @method string getExpireTime() Obtain Instance expiration time
 * @method void setExpireTime(string $ExpireTime) Set Instance expiration time
 * @method string getIsolatedTime() Obtain Instance isolation time
 * @method void setIsolatedTime(string $IsolatedTime) Set Instance isolation time
 * @method string getPayType() Obtain Billing mode:
<li>prepaid: monthly subscription, prepaid</li>
<li>postpaid: pay-as-you-go, postpaid</li>
 * @method void setPayType(string $PayType) Set Billing mode:
<li>prepaid: monthly subscription, prepaid</li>
<li>postpaid: pay-as-you-go, postpaid</li>
 * @method integer getAutoRenew() Obtain Auto-renewal or not:
<li>`0`: manual renewal</li>
<li>`1`: auto-renewal</li>
Default value: 0
 * @method void setAutoRenew(integer $AutoRenew) Set Auto-renewal or not:
<li>`0`: manual renewal</li>
<li>`1`: auto-renewal</li>
Default value: 0
 * @method array getDBInstanceNetInfo() Obtain Instance network connection information
 * @method void setDBInstanceNetInfo(array $DBInstanceNetInfo) Set Instance network connection information
 * @method string getType() Obtain Machine type
 * @method void setType(string $Type) Set Machine type
 * @method integer getAppId() Obtain User `AppId`
 * @method void setAppId(integer $AppId) Set User `AppId`
 * @method integer getUid() Obtain Instance `Uid`
 * @method void setUid(integer $Uid) Set Instance `Uid`
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method array getTagList() Obtain The information of tags associated with instances
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setTagList(array $TagList) Set The information of tags associated with instances
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method string getMasterDBInstanceId() Obtain Primary instance information, which is returned only when the instance is read-only.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setMasterDBInstanceId(string $MasterDBInstanceId) Set Primary instance information, which is returned only when the instance is read-only.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method integer getReadOnlyInstanceNum() Obtain Number of read-only instances
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setReadOnlyInstanceNum(integer $ReadOnlyInstanceNum) Set Number of read-only instances
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method string getStatusInReadonlyGroup() Obtain The status of a read-only instance in a read-only group
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setStatusInReadonlyGroup(string $StatusInReadonlyGroup) Set The status of a read-only instance in a read-only group
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method string getOfflineTime() Obtain Offline time
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setOfflineTime(string $OfflineTime) Set Offline time
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method array getDBNodeSet() Obtain Instance node information
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setDBNodeSet(array $DBNodeSet) Set Instance node information
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method integer getIsSupportTDE() Obtain Whether the instance supports TDE data encryption:
<li>0: not supported</li>
<li>1: supported</li>
Default value: 0For TDE data encryption, see [Overview of Data Transparent Encryption](https://intl.cloud.tencent.com/document/product/409/71748?from_cn_redirect=1).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsSupportTDE(integer $IsSupportTDE) Set Whether the instance supports TDE data encryption:
<li>0: not supported</li>
<li>1: supported</li>
Default value: 0For TDE data encryption, see [Overview of Data Transparent Encryption](https://intl.cloud.tencent.com/document/product/409/71748?from_cn_redirect=1).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDBEngine() Obtain Database engine, which supports:
<li>`postgresql`: TencentDB for PostgreSQL</li>
<li>`mssql_compatible`: MSSQL compatible - TencentDB for PostgreSQL</li>
Default value: `postgresql`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDBEngine(string $DBEngine) Set Database engine, which supports:
<li>`postgresql`: TencentDB for PostgreSQL</li>
<li>`mssql_compatible`: MSSQL compatible - TencentDB for PostgreSQL</li>
Default value: `postgresql`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDBEngineConfig() Obtain Configuration information for the database engine, and the configuration format is as follows:
{"$key1":"$value1", "$key2":"$value2"}
Supported engines include:
mssql_compatible engine:
<li>migrationMode: Database mode, an optional parameter, and its valid values are: single-db (single database schema) and multi-db (multiple database schema). The default value is single-db.</li>
<li>defaultLocale: Sorting area rule, an optional parameter, which cannot be modified after initialization, its default value is en_US, and its valid values include:
"af_ZA", "sq_AL", "ar_DZ", "ar_BH", "ar_EG", "ar_IQ", "ar_JO", "ar_KW", "ar_LB", "ar_LY", "ar_MA", "ar_OM", "ar_QA", "ar_SA", "ar_SY", "ar_TN", "ar_AE", "ar_YE", "hy_AM", "az_Cyrl_AZ", "az_Latn_AZ", "eu_ES", "be_BY", "bg_BG", "ca_ES", "zh_HK", "zh_MO", "zh_CN", "zh_SG", "zh_TW", "hr_HR", "cs_CZ", "da_DK", "nl_BE", "nl_NL", "en_AU", "en_BZ", "en_CA", "en_IE", "en_JM", "en_NZ", "en_PH", "en_ZA", "en_TT", "en_GB", "en_US", "en_ZW", "et_EE", "fo_FO", "fa_IR", "fi_FI", "fr_BE", "fr_CA", "fr_FR", "fr_LU", "fr_MC", "fr_CH", "mk_MK", "ka_GE", "de_AT", "de_DE", "de_LI", "de_LU", "de_CH", "el_GR", "gu_IN", "he_IL", "hi_IN", "hu_HU", "is_IS", "id_ID", "it_IT", "it_CH", "ja_JP", "kn_IN", "kok_IN", "ko_KR", "ky_KG", "lv_LV", "lt_LT", "ms_BN", "ms_MY", "mr_IN", "mn_MN", "nb_NO", "nn_NO", "pl_PL", "pt_BR", "pt_PT", "pa_IN", "ro_RO", "ru_RU", "sa_IN", "sr_Cyrl_RS", "sr_Latn_RS", "sk_SK", "sl_SI", "es_AR", "es_BO", "es_CL", "es_CO", "es_CR", "es_DO", "es_EC", "es_SV", "es_GT", "es_HN", "es_MX", "es_NI", "es_PA", "es_PY","es_PE", "es_PR", "es_ES", "es_TRADITIONAL", "es_UY", "es_VE", "sw_KE", "sv_FI", "sv_SE", "tt_RU", "te_IN", "th_TH", "tr_TR", "uk_UA", "ur_IN", "ur_PK", "uz_Cyrl_UZ", "uz_Latn_UZ", and "vi_VN".</li>
<li>serverCollationName: Sorting rule name, an optional parameter, which cannot be modified after initialization, its default value is sql_latin1_general_cp1_ci_as, and its valid values include: "bbf_unicode_general_ci_as", "bbf_unicode_cp1_ci_as", "bbf_unicode_CP1250_ci_as", "bbf_unicode_CP1251_ci_as", "bbf_unicode_cp1253_ci_as", "bbf_unicode_cp1254_ci_as", "bbf_unicode_cp1255_ci_as", "bbf_unicode_cp1256_ci_as", "bbf_unicode_cp1257_ci_as", "bbf_unicode_cp1258_ci_as", "bbf_unicode_cp874_ci_as", "sql_latin1_general_cp1250_ci_as", "sql_latin1_general_cp1251_ci_as", "sql_latin1_general_cp1_ci_as", "sql_latin1_general_cp1253_ci_as", "sql_latin1_general_cp1254_ci_as", "sql_latin1_general_cp1255_ci_as", "sql_latin1_general_cp1256_ci_as", "sql_latin1_general_cp1257_ci_as", "sql_latin1_general_cp1258_ci_as", "chinese_prc_ci_as", "cyrillic_general_ci_as", "finnish_swedish_ci_as", "french_ci_as", "japanese_ci_as", "korean_wansung_ci_as", "latin1_general_ci_as", "modern_spanish_ci_as", "polish_ci_as", "thai_ci_as", "traditional_spanish_ci_as", "turkish_ci_as", "ukrainian_ci_as", and "vietnamese_ci_as".</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDBEngineConfig(string $DBEngineConfig) Set Configuration information for the database engine, and the configuration format is as follows:
{"$key1":"$value1", "$key2":"$value2"}
Supported engines include:
mssql_compatible engine:
<li>migrationMode: Database mode, an optional parameter, and its valid values are: single-db (single database schema) and multi-db (multiple database schema). The default value is single-db.</li>
<li>defaultLocale: Sorting area rule, an optional parameter, which cannot be modified after initialization, its default value is en_US, and its valid values include:
"af_ZA", "sq_AL", "ar_DZ", "ar_BH", "ar_EG", "ar_IQ", "ar_JO", "ar_KW", "ar_LB", "ar_LY", "ar_MA", "ar_OM", "ar_QA", "ar_SA", "ar_SY", "ar_TN", "ar_AE", "ar_YE", "hy_AM", "az_Cyrl_AZ", "az_Latn_AZ", "eu_ES", "be_BY", "bg_BG", "ca_ES", "zh_HK", "zh_MO", "zh_CN", "zh_SG", "zh_TW", "hr_HR", "cs_CZ", "da_DK", "nl_BE", "nl_NL", "en_AU", "en_BZ", "en_CA", "en_IE", "en_JM", "en_NZ", "en_PH", "en_ZA", "en_TT", "en_GB", "en_US", "en_ZW", "et_EE", "fo_FO", "fa_IR", "fi_FI", "fr_BE", "fr_CA", "fr_FR", "fr_LU", "fr_MC", "fr_CH", "mk_MK", "ka_GE", "de_AT", "de_DE", "de_LI", "de_LU", "de_CH", "el_GR", "gu_IN", "he_IL", "hi_IN", "hu_HU", "is_IS", "id_ID", "it_IT", "it_CH", "ja_JP", "kn_IN", "kok_IN", "ko_KR", "ky_KG", "lv_LV", "lt_LT", "ms_BN", "ms_MY", "mr_IN", "mn_MN", "nb_NO", "nn_NO", "pl_PL", "pt_BR", "pt_PT", "pa_IN", "ro_RO", "ru_RU", "sa_IN", "sr_Cyrl_RS", "sr_Latn_RS", "sk_SK", "sl_SI", "es_AR", "es_BO", "es_CL", "es_CO", "es_CR", "es_DO", "es_EC", "es_SV", "es_GT", "es_HN", "es_MX", "es_NI", "es_PA", "es_PY","es_PE", "es_PR", "es_ES", "es_TRADITIONAL", "es_UY", "es_VE", "sw_KE", "sv_FI", "sv_SE", "tt_RU", "te_IN", "th_TH", "tr_TR", "uk_UA", "ur_IN", "ur_PK", "uz_Cyrl_UZ", "uz_Latn_UZ", and "vi_VN".</li>
<li>serverCollationName: Sorting rule name, an optional parameter, which cannot be modified after initialization, its default value is sql_latin1_general_cp1_ci_as, and its valid values include: "bbf_unicode_general_ci_as", "bbf_unicode_cp1_ci_as", "bbf_unicode_CP1250_ci_as", "bbf_unicode_CP1251_ci_as", "bbf_unicode_cp1253_ci_as", "bbf_unicode_cp1254_ci_as", "bbf_unicode_cp1255_ci_as", "bbf_unicode_cp1256_ci_as", "bbf_unicode_cp1257_ci_as", "bbf_unicode_cp1258_ci_as", "bbf_unicode_cp874_ci_as", "sql_latin1_general_cp1250_ci_as", "sql_latin1_general_cp1251_ci_as", "sql_latin1_general_cp1_ci_as", "sql_latin1_general_cp1253_ci_as", "sql_latin1_general_cp1254_ci_as", "sql_latin1_general_cp1255_ci_as", "sql_latin1_general_cp1256_ci_as", "sql_latin1_general_cp1257_ci_as", "sql_latin1_general_cp1258_ci_as", "chinese_prc_ci_as", "cyrillic_general_ci_as", "finnish_swedish_ci_as", "french_ci_as", "japanese_ci_as", "korean_wansung_ci_as", "latin1_general_ci_as", "modern_spanish_ci_as", "polish_ci_as", "thai_ci_as", "traditional_spanish_ci_as", "turkish_ci_as", "ukrainian_ci_as", and "vietnamese_ci_as".</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getNetworkAccessList() Obtain Network access list of the instance (this field has been deprecated)
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setNetworkAccessList(array $NetworkAccessList) Set Network access list of the instance (this field has been deprecated)
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getSupportIpv6() Obtain Whether the instance supports IPv6:
<li>`0`: no</li>
<li>`1`: yes</li>
Default value: 0
 * @method void setSupportIpv6(integer $SupportIpv6) Set Whether the instance supports IPv6:
<li>`0`: no</li>
<li>`1`: yes</li>
Default value: 0
 */
class DBInstance extends AbstractModel
{
    /**
     * @var string Instance region such as ap-guangzhou, which corresponds to the`Region` field in `RegionSet`.
     */
    public $Region;

    /**
     * @var string Instance AZ such as ap-guangzhou-3, which corresponds to the `Zone` field of `ZoneSet`.
     */
    public $Zone;

    /**
     * @var string VPC ID in the format of `vpc-xxxxxxx`, which can be obtained in the console or from the `unVpcId` field in the return value of the [DescribeVpcs](https://www.tencentcloud.com/document/product/215/15778) API.
     */
    public $VpcId;

    /**
     * @var string VPC subnet ID in the format of `subnet-xxxxxxxx`, which can be obtained in the console or from the `unSubnetId` field in the return value of the [DescribeSubnets ](https://intl.cloud.tencent.com/document/api/215/15784?from_cn_redirect=1) API.
     */
    public $SubnetId;

    /**
     * @var string Instance ID
     */
    public $DBInstanceId;

    /**
     * @var string Instance name
     */
    public $DBInstanceName;

    /**
     * @var string Instance status, including: `applying` (applying), `init` (to be initialized), `initing` (initializing), `running` (running), `limited run` (restricted operation), `isolating` (isolating), `isolated` (isolated), `disisolating` (de-isolating), `recycling` (recycling), `recycled` (recycled), `job running` (task executing), `offline` (offline), `migrating` (migrating), `expanding` (scaling out), `waitSwitch` (waiting to switch), `switching` (switching), `readonly` (readonly), `restarting` (restarting), `network changing` (network modification in progress), `upgrading` (kernel version upgrading), `audit-switching` (audit status changing), and `primary-switching` (primary-secondary switching)
     */
    public $DBInstanceStatus;

    /**
     * @var integer Assigned instance memory size in GB
     */
    public $DBInstanceMemory;

    /**
     * @var integer Assigned instance storage capacity in GB
     */
    public $DBInstanceStorage;

    /**
     * @var integer Number of assigned CPUs
     */
    public $DBInstanceCpu;

    /**
     * @var string Purchasable specification ID
     */
    public $DBInstanceClass;

    /**
     * @var string The major PostgreSQL version number, which can be queried by the [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1) API. Valid values: `10`, `11`, `12`, `13`, `14`, `15`.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $DBMajorVersion;

    /**
     * @var string Number of the major PostgreSQL community version and minor version, such as 12.4, which can be queried by the [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1) API.
     */
    public $DBVersion;

    /**
     * @var string PostgreSQL kernel version number (like v12.7_r1.8), which can be queried by the [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1) API.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $DBKernelVersion;

    /**
     * @var string Instance type, which includes:
<li>primary: primary instance </li>
<li>readonly: read-only instance</li>
<li>guard: disaster recovery instance</li>
<li>temp: temporary instance</li>
     */
    public $DBInstanceType;

    /**
     * @var string Instance version. Valid value: `standard` (dual-server high-availability; one-primary-one-standby).
     */
    public $DBInstanceVersion;

    /**
     * @var string Instance character set, which currently supports only:
<li>UTF8</li>
<li>LATIN1</li>
     */
    public $DBCharset;

    /**
     * @var string Instance creation time
     */
    public $CreateTime;

    /**
     * @var string Last updated time of the instance attribute
     */
    public $UpdateTime;

    /**
     * @var string Instance expiration time
     */
    public $ExpireTime;

    /**
     * @var string Instance isolation time
     */
    public $IsolatedTime;

    /**
     * @var string Billing mode:
<li>prepaid: monthly subscription, prepaid</li>
<li>postpaid: pay-as-you-go, postpaid</li>
     */
    public $PayType;

    /**
     * @var integer Auto-renewal or not:
<li>`0`: manual renewal</li>
<li>`1`: auto-renewal</li>
Default value: 0
     */
    public $AutoRenew;

    /**
     * @var array Instance network connection information
     */
    public $DBInstanceNetInfo;

    /**
     * @var string Machine type
     */
    public $Type;

    /**
     * @var integer User `AppId`
     */
    public $AppId;

    /**
     * @var integer Instance `Uid`
     */
    public $Uid;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var array The information of tags associated with instances
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $TagList;

    /**
     * @var string Primary instance information, which is returned only when the instance is read-only.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $MasterDBInstanceId;

    /**
     * @var integer Number of read-only instances
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $ReadOnlyInstanceNum;

    /**
     * @var string The status of a read-only instance in a read-only group
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $StatusInReadonlyGroup;

    /**
     * @var string Offline time
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $OfflineTime;

    /**
     * @var array Instance node information
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $DBNodeSet;

    /**
     * @var integer Whether the instance supports TDE data encryption:
<li>0: not supported</li>
<li>1: supported</li>
Default value: 0For TDE data encryption, see [Overview of Data Transparent Encryption](https://intl.cloud.tencent.com/document/product/409/71748?from_cn_redirect=1).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsSupportTDE;

    /**
     * @var string Database engine, which supports:
<li>`postgresql`: TencentDB for PostgreSQL</li>
<li>`mssql_compatible`: MSSQL compatible - TencentDB for PostgreSQL</li>
Default value: `postgresql`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DBEngine;

    /**
     * @var string Configuration information for the database engine, and the configuration format is as follows:
{"$key1":"$value1", "$key2":"$value2"}
Supported engines include:
mssql_compatible engine:
<li>migrationMode: Database mode, an optional parameter, and its valid values are: single-db (single database schema) and multi-db (multiple database schema). The default value is single-db.</li>
<li>defaultLocale: Sorting area rule, an optional parameter, which cannot be modified after initialization, its default value is en_US, and its valid values include:
"af_ZA", "sq_AL", "ar_DZ", "ar_BH", "ar_EG", "ar_IQ", "ar_JO", "ar_KW", "ar_LB", "ar_LY", "ar_MA", "ar_OM", "ar_QA", "ar_SA", "ar_SY", "ar_TN", "ar_AE", "ar_YE", "hy_AM", "az_Cyrl_AZ", "az_Latn_AZ", "eu_ES", "be_BY", "bg_BG", "ca_ES", "zh_HK", "zh_MO", "zh_CN", "zh_SG", "zh_TW", "hr_HR", "cs_CZ", "da_DK", "nl_BE", "nl_NL", "en_AU", "en_BZ", "en_CA", "en_IE", "en_JM", "en_NZ", "en_PH", "en_ZA", "en_TT", "en_GB", "en_US", "en_ZW", "et_EE", "fo_FO", "fa_IR", "fi_FI", "fr_BE", "fr_CA", "fr_FR", "fr_LU", "fr_MC", "fr_CH", "mk_MK", "ka_GE", "de_AT", "de_DE", "de_LI", "de_LU", "de_CH", "el_GR", "gu_IN", "he_IL", "hi_IN", "hu_HU", "is_IS", "id_ID", "it_IT", "it_CH", "ja_JP", "kn_IN", "kok_IN", "ko_KR", "ky_KG", "lv_LV", "lt_LT", "ms_BN", "ms_MY", "mr_IN", "mn_MN", "nb_NO", "nn_NO", "pl_PL", "pt_BR", "pt_PT", "pa_IN", "ro_RO", "ru_RU", "sa_IN", "sr_Cyrl_RS", "sr_Latn_RS", "sk_SK", "sl_SI", "es_AR", "es_BO", "es_CL", "es_CO", "es_CR", "es_DO", "es_EC", "es_SV", "es_GT", "es_HN", "es_MX", "es_NI", "es_PA", "es_PY","es_PE", "es_PR", "es_ES", "es_TRADITIONAL", "es_UY", "es_VE", "sw_KE", "sv_FI", "sv_SE", "tt_RU", "te_IN", "th_TH", "tr_TR", "uk_UA", "ur_IN", "ur_PK", "uz_Cyrl_UZ", "uz_Latn_UZ", and "vi_VN".</li>
<li>serverCollationName: Sorting rule name, an optional parameter, which cannot be modified after initialization, its default value is sql_latin1_general_cp1_ci_as, and its valid values include: "bbf_unicode_general_ci_as", "bbf_unicode_cp1_ci_as", "bbf_unicode_CP1250_ci_as", "bbf_unicode_CP1251_ci_as", "bbf_unicode_cp1253_ci_as", "bbf_unicode_cp1254_ci_as", "bbf_unicode_cp1255_ci_as", "bbf_unicode_cp1256_ci_as", "bbf_unicode_cp1257_ci_as", "bbf_unicode_cp1258_ci_as", "bbf_unicode_cp874_ci_as", "sql_latin1_general_cp1250_ci_as", "sql_latin1_general_cp1251_ci_as", "sql_latin1_general_cp1_ci_as", "sql_latin1_general_cp1253_ci_as", "sql_latin1_general_cp1254_ci_as", "sql_latin1_general_cp1255_ci_as", "sql_latin1_general_cp1256_ci_as", "sql_latin1_general_cp1257_ci_as", "sql_latin1_general_cp1258_ci_as", "chinese_prc_ci_as", "cyrillic_general_ci_as", "finnish_swedish_ci_as", "french_ci_as", "japanese_ci_as", "korean_wansung_ci_as", "latin1_general_ci_as", "modern_spanish_ci_as", "polish_ci_as", "thai_ci_as", "traditional_spanish_ci_as", "turkish_ci_as", "ukrainian_ci_as", and "vietnamese_ci_as".</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DBEngineConfig;

    /**
     * @var array Network access list of the instance (this field has been deprecated)
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $NetworkAccessList;

    /**
     * @var integer Whether the instance supports IPv6:
<li>`0`: no</li>
<li>`1`: yes</li>
Default value: 0
     */
    public $SupportIpv6;

    /**
     * @param string $Region Instance region such as ap-guangzhou, which corresponds to the`Region` field in `RegionSet`.
     * @param string $Zone Instance AZ such as ap-guangzhou-3, which corresponds to the `Zone` field of `ZoneSet`.
     * @param string $VpcId VPC ID in the format of `vpc-xxxxxxx`, which can be obtained in the console or from the `unVpcId` field in the return value of the [DescribeVpcs](https://www.tencentcloud.com/document/product/215/15778) API.
     * @param string $SubnetId VPC subnet ID in the format of `subnet-xxxxxxxx`, which can be obtained in the console or from the `unSubnetId` field in the return value of the [DescribeSubnets ](https://intl.cloud.tencent.com/document/api/215/15784?from_cn_redirect=1) API.
     * @param string $DBInstanceId Instance ID
     * @param string $DBInstanceName Instance name
     * @param string $DBInstanceStatus Instance status, including: `applying` (applying), `init` (to be initialized), `initing` (initializing), `running` (running), `limited run` (restricted operation), `isolating` (isolating), `isolated` (isolated), `disisolating` (de-isolating), `recycling` (recycling), `recycled` (recycled), `job running` (task executing), `offline` (offline), `migrating` (migrating), `expanding` (scaling out), `waitSwitch` (waiting to switch), `switching` (switching), `readonly` (readonly), `restarting` (restarting), `network changing` (network modification in progress), `upgrading` (kernel version upgrading), `audit-switching` (audit status changing), and `primary-switching` (primary-secondary switching)
     * @param integer $DBInstanceMemory Assigned instance memory size in GB
     * @param integer $DBInstanceStorage Assigned instance storage capacity in GB
     * @param integer $DBInstanceCpu Number of assigned CPUs
     * @param string $DBInstanceClass Purchasable specification ID
     * @param string $DBMajorVersion The major PostgreSQL version number, which can be queried by the [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1) API. Valid values: `10`, `11`, `12`, `13`, `14`, `15`.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     * @param string $DBVersion Number of the major PostgreSQL community version and minor version, such as 12.4, which can be queried by the [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1) API.
     * @param string $DBKernelVersion PostgreSQL kernel version number (like v12.7_r1.8), which can be queried by the [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1) API.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     * @param string $DBInstanceType Instance type, which includes:
<li>primary: primary instance </li>
<li>readonly: read-only instance</li>
<li>guard: disaster recovery instance</li>
<li>temp: temporary instance</li>
     * @param string $DBInstanceVersion Instance version. Valid value: `standard` (dual-server high-availability; one-primary-one-standby).
     * @param string $DBCharset Instance character set, which currently supports only:
<li>UTF8</li>
<li>LATIN1</li>
     * @param string $CreateTime Instance creation time
     * @param string $UpdateTime Last updated time of the instance attribute
     * @param string $ExpireTime Instance expiration time
     * @param string $IsolatedTime Instance isolation time
     * @param string $PayType Billing mode:
<li>prepaid: monthly subscription, prepaid</li>
<li>postpaid: pay-as-you-go, postpaid</li>
     * @param integer $AutoRenew Auto-renewal or not:
<li>`0`: manual renewal</li>
<li>`1`: auto-renewal</li>
Default value: 0
     * @param array $DBInstanceNetInfo Instance network connection information
     * @param string $Type Machine type
     * @param integer $AppId User `AppId`
     * @param integer $Uid Instance `Uid`
     * @param integer $ProjectId Project ID
     * @param array $TagList The information of tags associated with instances
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     * @param string $MasterDBInstanceId Primary instance information, which is returned only when the instance is read-only.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     * @param integer $ReadOnlyInstanceNum Number of read-only instances
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     * @param string $StatusInReadonlyGroup The status of a read-only instance in a read-only group
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     * @param string $OfflineTime Offline time
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     * @param array $DBNodeSet Instance node information
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     * @param integer $IsSupportTDE Whether the instance supports TDE data encryption:
<li>0: not supported</li>
<li>1: supported</li>
Default value: 0For TDE data encryption, see [Overview of Data Transparent Encryption](https://intl.cloud.tencent.com/document/product/409/71748?from_cn_redirect=1).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DBEngine Database engine, which supports:
<li>`postgresql`: TencentDB for PostgreSQL</li>
<li>`mssql_compatible`: MSSQL compatible - TencentDB for PostgreSQL</li>
Default value: `postgresql`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DBEngineConfig Configuration information for the database engine, and the configuration format is as follows:
{"$key1":"$value1", "$key2":"$value2"}
Supported engines include:
mssql_compatible engine:
<li>migrationMode: Database mode, an optional parameter, and its valid values are: single-db (single database schema) and multi-db (multiple database schema). The default value is single-db.</li>
<li>defaultLocale: Sorting area rule, an optional parameter, which cannot be modified after initialization, its default value is en_US, and its valid values include:
"af_ZA", "sq_AL", "ar_DZ", "ar_BH", "ar_EG", "ar_IQ", "ar_JO", "ar_KW", "ar_LB", "ar_LY", "ar_MA", "ar_OM", "ar_QA", "ar_SA", "ar_SY", "ar_TN", "ar_AE", "ar_YE", "hy_AM", "az_Cyrl_AZ", "az_Latn_AZ", "eu_ES", "be_BY", "bg_BG", "ca_ES", "zh_HK", "zh_MO", "zh_CN", "zh_SG", "zh_TW", "hr_HR", "cs_CZ", "da_DK", "nl_BE", "nl_NL", "en_AU", "en_BZ", "en_CA", "en_IE", "en_JM", "en_NZ", "en_PH", "en_ZA", "en_TT", "en_GB", "en_US", "en_ZW", "et_EE", "fo_FO", "fa_IR", "fi_FI", "fr_BE", "fr_CA", "fr_FR", "fr_LU", "fr_MC", "fr_CH", "mk_MK", "ka_GE", "de_AT", "de_DE", "de_LI", "de_LU", "de_CH", "el_GR", "gu_IN", "he_IL", "hi_IN", "hu_HU", "is_IS", "id_ID", "it_IT", "it_CH", "ja_JP", "kn_IN", "kok_IN", "ko_KR", "ky_KG", "lv_LV", "lt_LT", "ms_BN", "ms_MY", "mr_IN", "mn_MN", "nb_NO", "nn_NO", "pl_PL", "pt_BR", "pt_PT", "pa_IN", "ro_RO", "ru_RU", "sa_IN", "sr_Cyrl_RS", "sr_Latn_RS", "sk_SK", "sl_SI", "es_AR", "es_BO", "es_CL", "es_CO", "es_CR", "es_DO", "es_EC", "es_SV", "es_GT", "es_HN", "es_MX", "es_NI", "es_PA", "es_PY","es_PE", "es_PR", "es_ES", "es_TRADITIONAL", "es_UY", "es_VE", "sw_KE", "sv_FI", "sv_SE", "tt_RU", "te_IN", "th_TH", "tr_TR", "uk_UA", "ur_IN", "ur_PK", "uz_Cyrl_UZ", "uz_Latn_UZ", and "vi_VN".</li>
<li>serverCollationName: Sorting rule name, an optional parameter, which cannot be modified after initialization, its default value is sql_latin1_general_cp1_ci_as, and its valid values include: "bbf_unicode_general_ci_as", "bbf_unicode_cp1_ci_as", "bbf_unicode_CP1250_ci_as", "bbf_unicode_CP1251_ci_as", "bbf_unicode_cp1253_ci_as", "bbf_unicode_cp1254_ci_as", "bbf_unicode_cp1255_ci_as", "bbf_unicode_cp1256_ci_as", "bbf_unicode_cp1257_ci_as", "bbf_unicode_cp1258_ci_as", "bbf_unicode_cp874_ci_as", "sql_latin1_general_cp1250_ci_as", "sql_latin1_general_cp1251_ci_as", "sql_latin1_general_cp1_ci_as", "sql_latin1_general_cp1253_ci_as", "sql_latin1_general_cp1254_ci_as", "sql_latin1_general_cp1255_ci_as", "sql_latin1_general_cp1256_ci_as", "sql_latin1_general_cp1257_ci_as", "sql_latin1_general_cp1258_ci_as", "chinese_prc_ci_as", "cyrillic_general_ci_as", "finnish_swedish_ci_as", "french_ci_as", "japanese_ci_as", "korean_wansung_ci_as", "latin1_general_ci_as", "modern_spanish_ci_as", "polish_ci_as", "thai_ci_as", "traditional_spanish_ci_as", "turkish_ci_as", "ukrainian_ci_as", and "vietnamese_ci_as".</li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $NetworkAccessList Network access list of the instance (this field has been deprecated)
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $SupportIpv6 Whether the instance supports IPv6:
<li>`0`: no</li>
<li>`1`: yes</li>
Default value: 0
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("DBInstanceName",$param) and $param["DBInstanceName"] !== null) {
            $this->DBInstanceName = $param["DBInstanceName"];
        }

        if (array_key_exists("DBInstanceStatus",$param) and $param["DBInstanceStatus"] !== null) {
            $this->DBInstanceStatus = $param["DBInstanceStatus"];
        }

        if (array_key_exists("DBInstanceMemory",$param) and $param["DBInstanceMemory"] !== null) {
            $this->DBInstanceMemory = $param["DBInstanceMemory"];
        }

        if (array_key_exists("DBInstanceStorage",$param) and $param["DBInstanceStorage"] !== null) {
            $this->DBInstanceStorage = $param["DBInstanceStorage"];
        }

        if (array_key_exists("DBInstanceCpu",$param) and $param["DBInstanceCpu"] !== null) {
            $this->DBInstanceCpu = $param["DBInstanceCpu"];
        }

        if (array_key_exists("DBInstanceClass",$param) and $param["DBInstanceClass"] !== null) {
            $this->DBInstanceClass = $param["DBInstanceClass"];
        }

        if (array_key_exists("DBMajorVersion",$param) and $param["DBMajorVersion"] !== null) {
            $this->DBMajorVersion = $param["DBMajorVersion"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("DBKernelVersion",$param) and $param["DBKernelVersion"] !== null) {
            $this->DBKernelVersion = $param["DBKernelVersion"];
        }

        if (array_key_exists("DBInstanceType",$param) and $param["DBInstanceType"] !== null) {
            $this->DBInstanceType = $param["DBInstanceType"];
        }

        if (array_key_exists("DBInstanceVersion",$param) and $param["DBInstanceVersion"] !== null) {
            $this->DBInstanceVersion = $param["DBInstanceVersion"];
        }

        if (array_key_exists("DBCharset",$param) and $param["DBCharset"] !== null) {
            $this->DBCharset = $param["DBCharset"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("IsolatedTime",$param) and $param["IsolatedTime"] !== null) {
            $this->IsolatedTime = $param["IsolatedTime"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("DBInstanceNetInfo",$param) and $param["DBInstanceNetInfo"] !== null) {
            $this->DBInstanceNetInfo = [];
            foreach ($param["DBInstanceNetInfo"] as $key => $value){
                $obj = new DBInstanceNetInfo();
                $obj->deserialize($value);
                array_push($this->DBInstanceNetInfo, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("MasterDBInstanceId",$param) and $param["MasterDBInstanceId"] !== null) {
            $this->MasterDBInstanceId = $param["MasterDBInstanceId"];
        }

        if (array_key_exists("ReadOnlyInstanceNum",$param) and $param["ReadOnlyInstanceNum"] !== null) {
            $this->ReadOnlyInstanceNum = $param["ReadOnlyInstanceNum"];
        }

        if (array_key_exists("StatusInReadonlyGroup",$param) and $param["StatusInReadonlyGroup"] !== null) {
            $this->StatusInReadonlyGroup = $param["StatusInReadonlyGroup"];
        }

        if (array_key_exists("OfflineTime",$param) and $param["OfflineTime"] !== null) {
            $this->OfflineTime = $param["OfflineTime"];
        }

        if (array_key_exists("DBNodeSet",$param) and $param["DBNodeSet"] !== null) {
            $this->DBNodeSet = [];
            foreach ($param["DBNodeSet"] as $key => $value){
                $obj = new DBNode();
                $obj->deserialize($value);
                array_push($this->DBNodeSet, $obj);
            }
        }

        if (array_key_exists("IsSupportTDE",$param) and $param["IsSupportTDE"] !== null) {
            $this->IsSupportTDE = $param["IsSupportTDE"];
        }

        if (array_key_exists("DBEngine",$param) and $param["DBEngine"] !== null) {
            $this->DBEngine = $param["DBEngine"];
        }

        if (array_key_exists("DBEngineConfig",$param) and $param["DBEngineConfig"] !== null) {
            $this->DBEngineConfig = $param["DBEngineConfig"];
        }

        if (array_key_exists("NetworkAccessList",$param) and $param["NetworkAccessList"] !== null) {
            $this->NetworkAccessList = [];
            foreach ($param["NetworkAccessList"] as $key => $value){
                $obj = new NetworkAccess();
                $obj->deserialize($value);
                array_push($this->NetworkAccessList, $obj);
            }
        }

        if (array_key_exists("SupportIpv6",$param) and $param["SupportIpv6"] !== null) {
            $this->SupportIpv6 = $param["SupportIpv6"];
        }
    }
}
